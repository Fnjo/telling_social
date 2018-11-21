<?php
$name = $_POST['naam'];
$email = $_POST['email'];
$number = $_POST['phone'];
$company = $_POST['company'];
$page = $_POST['page'];
$message = $_POST['message'];
$send = $_POST['send'];

$text =
    "Name: " . $name . "\n" .
    "Email: " . $email . "\n" .
    "Phone: " . $number . "\n" .
    "Company: " . $company . "\n" .
    "Facebook page: " . $page . "\n" .
    "Message: " . $message
;

# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;


//require('src/autoload.php');
//
//$siteKey = '6Lf85C0UAAAAAH8adcYiFllJbX36x3b-9kT-AmGM';
//$secret = '6Lf85C0UAAAAACdOCqJ2ExIWISsFw_yjB42d163J';
//
//$recaptcha = new \ReCaptcha\ReCaptcha($secret);
//
//$gRecaptchaResponse = $_POST['g-recaptcha-response']; //google captcha post data
//$remoteIp = $_SERVER['REMOTE_ADDR']; //to get user's ip
//
//$recaptchaErrors = 'Try again!'; // blank varible to store error
//
//$resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp); //method to verify captcha
//if ($resp->isSuccess()) {
    // send mail or insert in db or do whatver you wish to
    # Instantiate the client.
    $domain = "mg.wecmore.nl";
    $mg = new Mailgun('key-0eb5a23300fa3d1f201a7028ab968851');


    $mg->sendMessage($domain, array(
        'from' => 'info@tellinginsights.nl',
        'to' => 'info@tellinginsights.nl',
        'subject' => 'Telling Social Demo request',
        'text' => $text));

    ?>
    <script type="text/javascript">
        alert("We will get back to you as soon as possible!");
        window.location.href = "index.php";
    </script>
    <?php
//} else {
//    ?>
<!--    <script type="text/javascript">-->
<!--        alert("Please check the captcha box");-->
<!--        window.location.href = "clientform.html";-->
<!--    </script>-->
<!--    --><?php
//}
?>


