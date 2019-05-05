<?php

class Charge
{

    /**
     * make a payment
     */
    function pay()
    {
        \Stripe\Stripe::setApiKey(Config::settings('stripe_secret'));

        $request = $_POST;
        $token = $request['stripeToken'];

        $amount = Config::settings($request['plan']);

        if ($amount == "") { //plan does not exist
            Config::redirect('Error occurred', 'error', '/');
        }

        // Create a Customer if not exists
        try {
            $customer = \Stripe\Customer::create(array(
                "source" => $token,
                "email" => $request['email'],
                "description" => $request['email']
            ));
        } catch (\Stripe\Error\Base $e) {
            $error = $e->jsonBody['error'];
            Config::redirect($error['message'], 'error', '/');
        }

//        try{
//            $cu = \Stripe\Customer::retrieve($customer->id);
//            $cu->source = $token;
//            $cu->save();
//        }catch (\Stripe\Error\Base $e){
//            //create customer if not exist
//            $error = $e->jsonBody['error'];
//            if($error['type'] == "invalid_request_error"){
//                if (strpos($error['message'], 'No such customer') !== false) {
//                    //create customer
//                }
//
//            }else{
//                die('Error occured');
//            }
//
//        }

        //process payment
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => Config::convertToCents($amount),
                "currency" => Config::settings('currency'),
                "customer" => $customer->id,
                "description" => $request['desc']
            ));
        } catch (\Stripe\Error\Card $e) {
            Config::redirect('Card has been declined', 'error', '/');
        }

        $data = array(
            'from' => Config::settings('email'),
            'to' => $request['email'],
            'addTo' => [Config::settings('email')],
            'subject' => 'Thank you! Order complete',
            'message' => '
            <hr/>
        Item: ' . $request['desc'] . '<br/>
        Price: ' . Config::settings('currency_symbol') . $amount . '
        <hr/>
        <a href="' . Config::settings('site_url') . '/thankyou.php?dl=' . $charge->id . '">Download</a>
        <br/>
        <br/>
        Regards<br/>
        ' . Config::settings('site_name'),
            'template' => 'order-thankyou.html'
        );
        //send email
        if (!Config::email($data)) {
            Config::redirect('Your order has been processed but we had difficulty sending you confirmation email', 'warning', '/');
        }


        //add charge id as download key
        $contents = file_get_contents(trim(Config::settings('keysFile')));
        $keys = explode(',', $contents);
        array_push($keys, $charge->id);
        file_put_contents(Config::settings('keysFile'), implode(',', $keys));


        Config::redirect('Thank you! You order has been processed. Please check email confirmation', 'success', '/thankyou.php?dl=' . $charge->id);
    }
}