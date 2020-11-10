<!-- TODO: add usual headers and nice look to replace what I have below -->
<style>
h3 {
    font-family: 'Open Sans', Frutiger, Calibri, 'Myriad Pro', Myriad, sans-serif;
    font-size: 24px;
    font-weight: 300;
    line-height: 1.5;
    color: #555;
    text-align: center;
    margin: 30vh auto 20px auto;
}
p {
    font-family: 'Open Sans', Frutiger, Calibri, 'Myriad Pro', Myriad, sans-serif;
    font-size: 14px;
    font-weight: 300;
    line-height: 1;
    color: #555;
    text-align: center;
    margin: 10px auto;
}
</style>
<?php
include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/config.php';

class HintException extends \Exception {
    private $hint;

    public function __construct($hint, $code = 0, \Exception $previous = null) {
        $this->hint = $hint;
        parent::__construct($hint, $code, $previous);
    }

    public function getHint() {
        return $this->hint;
    }
}

try {

    if(!isset($_POST['email'])) {
        throw new HintException('The submitted form was invalid and missed the email address.');
    }

    // validation expected data exists
    $email_to = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if(!filter_var($email_to, FILTER_VALIDATE_EMAIL)) {
        throw new HintException('The email address supplied is invalid.');
    }


    // check captcha. Comment it out for local testing of the form!
//     if (!defined('RECAPTCHA_SECRET') || RECAPTCHA_SECRET === '' || !isset($_POST['g-recaptcha-response'])) {
//         throw new HintException('Captcha code is missing.');
//     }
//     $ch = curl_init();
//
//     curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_SECRET, 'response' => $_POST['g-recaptcha-response'])));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//     $server_output = curl_exec($ch);
//     $server_output = json_decode($server_output, true);
//
//     curl_close($ch);
//
//     if (!isset($server_output['success']) || $server_output['success'] !== true) {
//         throw new HintException('The captcha result was invalid.');
//     }

    // Authentication
    $settings = array(
        'userName' => MAUTIC_USERNAME,
        'password' => MAUTIC_PASSWORD,
    );

    // start auth stuff, create request headers
    $initAuth   = new \Mautic\Auth\ApiAuth();
    $auth       = $initAuth->newAuth($settings, 'BasicAuth');
    $apiUrl     = MAUTIC_URL;
    $api        = new \Mautic\MauticApi();
    $contactApi = $api->newApi("contacts", $auth, $apiUrl);

    // fill up the data array with what we know
    $data = [
        'email' => $email_to,
        'ipAddress' => $_SERVER['REMOTE_ADDR']
    ];

    $contact = $contactApi->create($data);

    // error handling
    if(!isset($contact['contact']['id'])) {
        throw new \Exception('Something went wrong. Contact to Mautic failed, contact details ' . json_encode($contact));
    }

    // save contact ID in a variable
    $contactId = $contact['contact']['id'];

    // determine if we need to add contact to a segment
    if(!isset($_POST['segmentId']) && !is_numeric($_POST['segmentId'])) {
        throw new HintException('The submitted form was invalid.');
    }

    // step one: create segmentApi
    $segmentApi = $api->newApi("segments", $auth, $apiUrl);

    // step two: determine segmentId
    $segmentId = $_POST['segmentId'];

    // ignore errors in the above... don't care if the person wasn't in there
    // add the contact to the segment (this will typically result in an action being taken, like a mail sent)
    $response = $segmentApi->addContact($segmentId, $contactId);
    if (!isset($response['success'])) {
        throw new \Exception('Something went wrong. Adding user to segment failed, error ' . $response);
    }

    // determine if we need to enable the GDPR boolean
    if(($_POST['moreinfo'] == '1')) {
        // step one: create segmentApi
        $segmentApi2 = $api->newApi("segments", $auth, $apiUrl);
        // step two: determine segmentId - this is 60
        $segmentId2 = '60';
        // add the contact to the segment (this will get the GDPR boolean property set to true)
        $response2 = $segmentApi2->addContact($segmentId2, $contactId);

        if (!isset($response2['success'])) {
            throw new \Exception('Something went wrong. Adding user to segment failed, error ' . $response);
        }
    }


    ?>
    <h3>Thank you for requesting a white paper, case study or datasheet!</h3>
    <p>It has been sent to <?php echo($email_to); ?></p>
    <p>check your spam folder if you can't find it!</p>
    <?php

} catch (HintException $e) {
    ?>
    <h3 >I'm sorry</h3>
    <p>There was a problem with the form you submitted.</p>
    <p>Did you enter all form data including<br/>a valid email address and the Captcha?</p>
    <p>The error detected:<br/>
        <?php echo htmlentities($e->getHint()); ?>
    </p>
    <p>Please use the back key to go to <br/>the previous page and fix the issue, or <br /> <a href="https://nextcloud.com/contact">contact us with the error message.</a></p>
    <?php
} catch (Throwable $exception) {
    $data = array(
        'Exception' => get_class($exception),
        'Message' => $exception->getMessage(),
        'Code' => $exception->getCode(),
        'Trace' => $exception->getTraceAsString(),
        'File' => $exception->getFile(),
        'Line' => $exception->getLine(),
    );
    error_log(json_encode($data));
    ?>
    <h3>Apologies</h3>
    <p>There was a problem on our side.</p>
    <p>Please <a href="https://nextcloud.com/contact">contact us</a> and ask for the whitepaper you tried to download.</p>
    <?php
}
