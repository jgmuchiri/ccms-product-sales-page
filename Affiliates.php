<?php
$jvzoo = false;
define('JVZOO_KEY', 'IK72w8qCeYswE4Bny3mX');

/**
 * notify owner
 * @param $request
 */
function jvzoo_ipn_capture($request)
{

    $data = array(
        'from' => Config::settings('email'),
        'to' => Config::settings('email'),
        'addTo' => [Config::settings('email')],
        'subject' => 'GIVEu Sale Via JVZoo',
        'message' => '
            <hr/>
        Software has sold.
        <hr/>
        Customer: ' . $request['ccustname'] . '<br/>
        State: ' . $request['ccuststate'] . '<br/>
        Country: ' . $request['ccustcc'] . '<br/>
        Email: ' . $request['ccustemail'] . '<br/>
        Product: ' . $request['cprodtitle'] . '<br/>
        Amount: ' . $request['ctransamount'] . '<br/>
        AffID: ' . $request['caffitid'] . '<br/>

        Regards<br/>
        ' . Config::settings('site_name')
    );
    //send email
    @Config::email($data);
}

function jvzValid()
{
    $key = JVZOO_KEY;
    $rcpt = $_REQUEST['cbreceipt'];
    $time = $_REQUEST['time'];
    $item = $_REQUEST['item'];
    $cbpop = $_REQUEST['cbpop'];

    $xxpop = sha1("$key|$rcpt|$time|$item");
    $xxpop = strtoupper(substr($xxpop, 0, 8));

    if ($cbpop == $xxpop) {
        jvzoo_ipn_capture($_REQUEST);
        return 1;
    }
    return 0;
}

/**
 * verify jvzoo transaction
 * @return bool
 */
function jvzipnVerification()
{
    if (!isset($_POST['ctransaction']))
        return false;

    $pop = "";
    $ipnFields = array();
    foreach ($_POST AS $key => $value) {
        if ($key == "cverify") {
            continue;
        }
        $ipnFields[] = $key;
    }
    sort($ipnFields);
    foreach ($ipnFields as $field) {
        // if Magic Quotes are enabled $_POST[$field] will need to be
        // un-escaped before being appended to $pop
        $pop = $pop . $_POST[$field] . "|";
    }
    $pop = $pop . JVZOO_KEY;
    $calcedVerify = sha1(mb_convert_encoding($pop, "UTF-8"));
    $calcedVerify = strtoupper(substr($calcedVerify, 0, 8));
    return $calcedVerify == $_POST["cverify"];
}


/**
 * test whether transaction was completed and
 * was a sale
 * @return bool
 */
function jvz_txn()
{
    if (isset($_POST['ctransaction']) && $_POST['ctransaction'] == 'SALE') {
        return true;
    }
    return false;
}


if (isset($_GET['affiliate'])) {
    $aff_id = $_GET['affiliate'];
    $data = array(
        'from' => Config::settings('email'),
        'to' => Config::settings('email'),
        'addTo' => [Config::settings('email')],
        'subject' => 'JVZOO Referral',
        'message' => '
            <hr/>
        Customer ID: ' . $aff_id . '
        <hr/>
        A new visit logged from jvzoo
        <br/>
        <br/>
        Regards<br/>
        ' . Config::settings('site_name'),
        'template' => 'order-thankyou.html'
    );
    //send email
    @Config::email($data);
}