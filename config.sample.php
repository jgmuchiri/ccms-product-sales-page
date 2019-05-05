<?php
require_once 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
session_start();

class Config
{
    protected $company = [
        'live'      => true,
        'site_name' => '',
        'site_url'  => '',
    ];

    protected $mail = [
        'hosts'    => '',
        'port'     => '',
        'username' => '',
    ];
    /**
     * SITE CONFIG
     * @param $item
     * @return mixed
     */
    public static function settings($item)
    {
        $items['live'] = true;

        $items['site_url']        = 'http://amdtllc.com';
        $items['site_name']       = 'MyAPP';
        $items['site_slogan']     = 'Content management system';
        $items['email']           = 'info@gmail.com';
        $items['g-analytics']     = 'UA-82669910-1';
        $items['currency']        = 'USD';
        $items['currency_symbol'] = '$';

        //live vs production/testing
        if ($items['live'] == true) {
            $items['stripe_secret'] = '';
            $items['stripe_public'] = '';
        } else {
            $items['stripe_secret'] = '';
            $items['stripe_public'] = '';
        }

        #file for keys
        $items['keysFile'] = __DIR__ . "/upload/.keys";

        return $items[$item];
    }

    /**
     * @param $item
     * @return mixed
     */
    public static function pricing($plan, $item)
    {
        $items['ccms_basic_plan'] = array(
            'price'       => 2000,
            'description' => 'CCMS basic plan',
        );
        $items['ccms_advanced_plan'] = array(
            'price'       => 32000,
            'description' => 'CCMS advanced plan',
        );
        $items['ccms_premium_plan'] = array(
            'price'       => 58000,
            'description' => 'CCMS premium plan',
        );
        $items['ccms_white_label'] = array(
            'price'       => 125000,
            'description' => 'CCMS White label license',
        );
        return $items[$plan][$item];
    }

    public static function buyButton($plan, $title = null)
    {
        if ($title == null) {
            $title = 'Buy Now!';
        }
        return '<button class="btn btn-warning buyBtn"
                                    data-amount="' . self::pricing($plan, 'price') . '"
                                    data-plan="' . $plan . '"
                                    data-desc="' . self::pricing($plan, 'description') . '">' . $title . '
                            </button>';
    }

    /**
     * @param $data
     * @return bool
     * @throws Exception
     * @throws phpmailerException
     */
    public static function email($data)
    {
//        $headers = "MIME-Version: 1.0" . "\r\n";
        //        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //        $headers .= 'From: <' . Config::settings('email') . '>' . "\r\n";
        // mail($data['to'],$data['subject'],$data['message'],$headers);

        $mail = new PHPMailer;

        if (!isset($data['template'])) {
            $data['template'] = 'general.html';
        }
        $message = file_get_contents('emails/' . $data['template']);
        $message = str_replace('%message%', $data['message'], $message);

        $mail->isSMTP();

        $mail->SMTPAuth = true;

        if (self::settings('live') == false):
            //test with mailtrap
            $mail->Host     = "'mailtrap.io";
            $mail->Username = "";
            $mail->Password = "";
            $mail->Port     = "2525";
        else:
            $mail->Host     = '';
            $mail->Port     = 587;
            $mail->Username = '';
            $mail->Password = '';
        endif;
        // Enable encryption, only 'tls' is accepted
        $mail->SMTPSecure = 'tls';
        //$mail->SMTPDebug = 2;
        $mail->From     = self::settings('email');
        $mail->FromName = $data['from'];
        $mail->addAddress($data['to']); // Add a recipient

        //add multiple addresses
        if (isset($data['addTo'])) {
            foreach ($data['addTo'] as $emails) {
                $mail->addBCC($emails);
            }
        }

        $mail->WordWrap = 50; // Set word wrap to 50 characters

        $mail->Subject = $data['subject'];
        $mail->MsgHTML($message);
        $mail->IsHTML(true);
        $mail->CharSet = "utf-8";
        if (!$mail->send()) {
//            echo $mail->ErrorInfo;
            return false;
        } else {
            return true;
        }

    }

    /**
     * convert to cents
     * @param $value
     * @return float
     */
    public static function convertToCents($value)
    {
        // strip out commas
        $value = preg_replace("/\,/i", "", $value);
        // strip out all but numbers and dot
        $value = preg_replace("/([^0-9\.])/i", "", $value);
        // make sure we are dealing with a proper number now, no +.4393 or 3...304 or 76.5895,94
        if (!is_numeric($value)) {
            return 0.00;
        }
        // convert to a float explicitly
        $value = (float) $value;
        return round($value, 2) * 100;
    }

    /**
     * @param null $msg
     * @param string $type
     * @param string $loc
     */
    public static function redirect($msg = null, $type = 'info', $loc = "/")
    {
        $_SESSION['msg']  = $msg;
        $_SESSION['type'] = $type;
        header('Location: ' . $loc);
        die();
    }
}
include "functions.php";
