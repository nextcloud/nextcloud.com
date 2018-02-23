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
//         require_once(__DIR__ . '/vendor/autoload.php');
include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/config.php';
use Mautic\Auth\ApiAuth;
use Mautic\MauticApi;

if(isset($_POST['email'])) {
	function died($error) {
		// error code goes here
		?>
		<h3 >I'm sorry</h3>
		<p>There was a problem with the form you submitted.</p>
		<p>Did you enter all form data including<br/>a valid email address and the Captcha?</p>
		<p>The error(s) detected:<br/>
					<?php
					echo $error . "<br />";
					?>
				</p>
				<p>Please use the back key to go to <br/>the previous page and fix the issue, or <br /> <a href="https://nextcloud.com/contact">contact us with the error message.</a></p>
		<?php
	}
	// validation expected data exists
	$error_message = "";

	$email_to =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // requires
	if(!filter_var($email_to, FILTER_VALIDATE_EMAIL)) {
		$error_message .= 'The email address supplied is invalid.<br />';
	}

    // check captcha. Comment it out for local testing of the form!
// 	if (defined('RECAPTCHA_SECRET') && RECAPTCHA_SECRET !== '' && isset($_POST['g-recaptcha-response'])) {
// 		$url = 'https://www.google.com/recaptcha/api/siteverify';
// 		$ch = curl_init();
//
// 		curl_setopt($ch, CURLOPT_URL, $url);
// 		curl_setopt($ch, CURLOPT_POST, 1);
// 		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_SECRET, 'response' => $_POST['g-recaptcha-response'])));
// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
// 		$server_output = curl_exec($ch);
//
// 		$server_output = json_decode($server_output, true);
//
// 		curl_close($ch);
//
// 		if (!isset($server_output['success']) || $server_output['success'] !== true) {
// 			$error_message .= 'The captcha result was invalid.<br />';
// 		}
// 	} else {
// 		$error_message .= 'Captcha code is missing.<br />';
// 	}
    // end captcha test

    // Authentication
    // load the accessTokenData array which consists of a accessToken, accessTokenSecret and accessTokenExpires
    $file = './mautictoken.json';
    $accessTokenData = json_decode(file_get_contents($file), TRUE);


    if (!empty($accessTokenData['access_token']) && !empty($accessTokenData['refresh_token'])) {
        $settings['accessToken']        = $accessTokenData['access_token'] ;
        $settings['refreshToken']  = $accessTokenData['refresh_token'];
        $settings['accessTokenExpires'] = $accessTokenData['expires'];
    }

    // start auth stuff, create request headers
    $initAuth   = new \Mautic\Auth\ApiAuth();
    $auth       = $initAuth->newAuth($settings);
    $apiUrl     = "https://nextcloud.mautic.net";
    $api        = new \Mautic\MauticApi();
    $contactApi = $api->newApi("contacts", $auth, $apiUrl);

    // create a list if fields from the contact API
    $fields = $contactApi->getFieldList();

    // fill up the data array with what we know
    $data = array();

    foreach ($fields as $field) {
        $data[$field['alias']] = $data[$field['alias']];
    }
//     some random test data
//     $data['firstname'] = 'first_test';
//     $data['lastname'] = 'last_test';
//     $data['email'] = 'test@test.com';
    $data['email'] =  $email_to;

    $contact = $contactApi->create($data);

    // error handling
    if(!isset($contact['contact']['id'])) {
            $error_message .= 'Contact to Mautic failed, contact details:<br />';
            $error_message .= $contact . '.<br />';
    }

    // save contact ID in a variable

    $contactId = $contact['contact']['id'];

    // determine if we need to add contact to a segment
    if(isset($_POST['segmentId'])) {
        // step one: create segmentApi
        $segmentApi = $api->newApi("segments", $auth, $apiUrl);

        // step two: determine segmentId
        $segmentId = $_POST['segmentId'];

        // remove the contact from the segment if they're in it. This allows them to get the email again. -> this doesn't work in tests, asked Mautic support if they have any other suggestions...
        $response = $segmentApi->removeContact($segmentId, $contactId);
        // ignore errors in the above... don't care if the person wasn't in there
        $response = '';
        // add the contact to the segment (this will typically result in an action being taken, like a mail sent)
        $response = $segmentApi->addContact($segmentId, $contactId);
        if (!isset($response['success'])) {
            $error_message .= 'Adding user to segment failed, error:<br />';
            $error_message .= $response . '.<br />';
        }
    }
    // check if anything went wrong
    if (strlen($error_message) > 0) {
		died($error_message);
	} else { // if not - success!
        ?>
        <h3>Thank you for requesting a white paper, case study or datasheet!</h3>
        <p>It has been sent to <?php echo($email_to); ?></p>
        <p>check your spam folder if you can't find it!</p>
        <?php
    }
} // end of if(isset-post-email) section
?>
