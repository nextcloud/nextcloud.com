<head>
<meta charset="utf-8">
    <script>
	require(["require.config"], function() {
		require(["pages/enterprise"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/enterprise.css" rel="stylesheet">
</head>
<section class="enterprise-hero-section second-menu">
	<div class="container-fluid background">
		<div class="container">
			<div class="col-md-6 topheader">
                <h1><?php echo $l->t('Nextcloud Enterprise');?></h1>
                <h2><?php echo $l->t('The enterprise-ready Content Collaboration Platform');?></h2>
			</div>
		</div>
	</div>
</section>
<div class="container">
<?php

class ValidationException extends Exception {};

try {

if(isset($_POST['email'])) {
   function died($error) {
        	// error code goes here
    ?>
            <section class="section--whitepaper">
                <div class="container text-center">
                    <h3><?php echo $l->t('Sorry, there was an error with the form you submitted');?></h3>
                    <p><?php echo $l->t('The error(s) detected:');?><br/>
                        <?php
                        echo $error . "<br />";
                        ?>
                    </p>
                    <p><?php echo $l->t('Use the back key to go to the previous page and fix the issue!');?></p>
                </div>
            </section>
            <?php
        }

    // validation expected data exists
    if(!isset($_POST['yourname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['organization']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['address']) ||
        !isset($_POST['checksum']) ||
        !isset($_POST['captcha'])) {

        died('<li>Not all required fields are set (name, email, organization, phone number and address are required).</li>');
    }
    $yourname = $_POST['yourname']; // required
    $organization= $_POST['organization']; // required
    $phone = $_POST['phone']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
    $website = $_POST['website']; // required
	$address = $_POST['address']; // required
    $billing = $_POST['billing']; // required
    $vat = $_POST['vat']; // required
    $users = $_POST['users']; // required
//     $edition = $_POST['edition']; // required
//     $duration = $_POST['duration']; // required
//     $edugov = $_POST['edugov']; // required
//     $collabora = $_POST['collabora']; // required
//     $collabora = $_POST['collabora']; // required
//     $collaboraCheck = $_POST['collaboraCheck']  === 'collaboraCheck' ? 'yes' : 'no';
//     $onlyofficeCheck = $_POST['onlyofficeCheck']  === 'onlyofficeCheck' ? 'yes' : 'no';
    $outlook = $_POST['outlook'] === 'outlook' ? 'yes' : 'no';
//     $remoteinstall = $_POST['remoteinstall'] === 'remoteinstall' ? 'yes' : 'no';
    $givenprice = $_POST['givenPrice'];
    //$spreed = $_POST['spreed'];
    //$branding = $_POST['branding'];
    $dollars = $_POST['dollars'];
    $terms = $_POST['terms'] === 'terms' ? 'yes' : 'no';
    $checksum = $_POST['checksum']; // required
    $captcha = $_POST['captcha'];
    $error_message = "";


    if (strlen($checksum) !== 75 || !strpos($checksum, ':')) {
        $error_message .= 'The checksum is not valid.<br />';
    } else {
        list($salt, $expectedHash) = explode(':', $checksum, 2);
        $hash = hash('sha256', $salt . $captcha);

        if ($hash !== $expectedHash) {
            $error_message .= 'The captcha result you entered does not appear to be correct.<br />';
        }
    }

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';
    if(!preg_match($email_exp,$email_from)) {
        $error_message .= '<li>The email address you entered does not appear to be valid.</li>';
    }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp,$yourname)) {
        $error_message .= '<li>The name you entered does not appear to be valid.</li>';
    }
    //   $string_exp = "/^((\+|00)\d{1,3})?(\d+|\s+)+\d$/";
    //   if(!preg_match($string_exp,$phone)) {
    //     $error_message .= 'The phone number you entered does not appear to be valid, did you add a country code like +49?<br />';
    //     }
    //   if(strlen($comments) < 8) {
    //     $error_message .= 'Your input is pretty short! <br />';
    //   }
//       if(RECAPTCHA_SECRET !== '' && isset($_POST['g-recaptcha-response'])) {
//         $url = 'https://www.google.com/recaptcha/api/siteverify';
//         $ch = curl_init();
//
//         curl_setopt($ch, CURLOPT_URL, $url);
//         curl_setopt($ch, CURLOPT_POST, 1);
//         curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_SECRET, 'response' => $_POST['g-recaptcha-response'])));
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//         $server_output = curl_exec($ch);
//
//         $server_output = json_decode($server_output, true);
//
//         curl_close($ch);
//
//         if (!isset($server_output['success']) || $server_output['success'] !== true) {
//           $error_message .= 'The captcha result was invalid.<br />';
//         }
//       } else {
//         $error_message .= 'Captcha code is missing.<br />';
//       }

    if ($terms !== 'yes') {
        $error_message .= '<li>Terms need to be signed.</li>';
    }

    $price = 0;
    // validate the input
        $usersPrice = $users * 9.5;

        if ($usersPrice === 0) {
            $error_message .= '<li>Invalid user count.</li>';
        } else {
            $outlookPrice = 0;

            // OUTLOOK
            if ($outlook === 'yes') {
                $outlookPrice = $users * 0.6;
            }

            if (!in_array($edugov, ['no', 'edu', 'gov', 'charity'])) {
                $edugov = 'no';
            }

            // give discounts of 10% on standard, no discounts on basic

            switch ($edugov) {
                case 'edu':
                    $usersPrice *= 0.9;
                    $outlookPrice *= 0.9;
                    $collaboraPrice *= 0.25;
                    break;
                case 'gov':
                    $usersPrice *= 0.9;
                    $outlookPrice *= 0.9;
                    break;
                case 'charity':
                    $usersPrice *= 0.9;
                    $outlookPrice *= 0.9;
                    break;
                }

//             if (!in_array($duration, [1, 2, 3])) {
//                 $error_message .= '<li>Invalid duration.</li>';
//             } else {
//                 switch ($duration) {
//                     case 2:
//                         $usersPrice *= 1.9;
//                         $outlookPrice *= 1.9;
//                         $collaboraPrice *= 1.9;
//                         $onlyofficePrice *= 2;
//                         break;
//                     case 3:
//                         $usersPrice *= 2.75;
//                         $outlookPrice *= 2.75;
//                         $collaboraPrice *= 2.75;
//                         $onlyofficePrice *= 3;
//                         break;
//                 }
//             }

            $price = $usersPrice + $outlookPrice;
            $price = round($price, 2);
        }

//     }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    if($price > $givenprice) {
        $error_message = '<li>The pricing seems to have changed and doesn\'t match anymore.</li>';
        died($error_message);
    } elseif ($price < $givenprice) {
        // JS calculated more than PHP ;)
        error_log("JS ($givenprice)calculated something different than PHP ($price) " . json_encode($_POST));
    }


    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        $string = str_replace($bad,"",$string);
        return htmlspecialchars($string);
    }

    if($error_message === '') {
        if($users == "201") {
            $givenprice = "requesting quote";
            $users = "more than 200, details below";
        }
		// the app review mailing list address
		$email_subject = "IONOS_Viakom_Order_form from " . clean_string($organization);

		$email_message = "";
		$email_message .= "Name: " . clean_string($yourname) . "\n";
		$email_message .= "Email: " . clean_string($email_from) . "\n";
		$email_message .= "Organization: " . clean_string($organization) . "\n";
		$email_message .= "Website: " . clean_string($website) . "\n";
		$email_message .= "Phone number: " . clean_string($phone) . "\n";
		$email_message .= "Address: " . clean_string($address) . "\n";
		$email_message .= "Billing address: " . clean_string($billing) . "\n";
		$email_message .= "VAT ID: " . clean_string($vat) . "\n";
		$email_message .= "Comments: " . clean_string($comments) . "\n\n" . "*Order details* \n";
		$email_message .= "Number of users: " . clean_string($users) . "\n";
// 		$email_message .= "Edition: " . clean_string($edition) . "\n";
// 		$email_message .= "How many years: " . clean_string($duration) . "\n";
// 		$email_message .= "Education/government/charity discount: " . clean_string($edugov) . "\n\n" . "Options:\n";
		$email_message .= "Outlook option (€0.6/user/month): " . clean_string($outlook) . "\n";
// 		$email_message .= "Number of Collabora users (17€ for first 99, then 16€/user): " . clean_string($collaboraCheck) . "\n";
// 		$email_message .= "Would like ONLYOFFICE option (935€ for first 250): " . clean_string($onlyofficeCheck) . "\n";
// 		$email_message .= "Would like remote installation help (990 €): " . clean_string($remoteinstall) . "\n\n";
		// 	$email_message .= "Would like Branding option: ".clean_string($branding)."\n";
		// 	$email_message .= "Would like Spreed option: ".clean_string($spreed)."\n";
		$email_message .= "Price per month: " . clean_string($givenprice) . "\n";
		//$email_message .= "Would like to pay in dollars: ".clean_string($dollars)."\n";
		$email_message .= "Signed terms: " . clean_string($terms) . "\n\n";

		// create email headers
// 		$headers = 'From: sales@nextcloud.com' . "\r\n" .
// 			'Reply-To:  ' . $email_from . ', sales@nextcloud.com' . "\r\n" .
// 			'Cc: ' . $email_from . "\r\n" .
//             'Content-Type: text/plain; charset=UTF-8';
            $headers = 'From: sales@nextcloud.com' . "\r\n" .
			'Reply-To:  ' . $email_from . ', sales@nextcloud.com' . "\r\n" .
            'Content-Type: text/plain; charset=UTF-8';
		// Send the email
// 		$recipients = ['orders'];
// 		$recipients = ['sales', 'jos', 'frank'];
		$recipients = ['jos','viakom-sales','frank'];
// 		$recipients = ['jos','jos.poortvliet',]; // for testing
// 		$recipients = ['frank']; // for testing
		$successfullySend = true;
		foreach ($recipients as $recipient) {
			$successfullySend &= mail($recipient . '@nextcloud.com', $email_subject, $email_message, $headers);
		}
		// send to user themselves

		$email_message_user = "Thank you for your submission! The form contents below have been send to our sales team.\n\n" . $email_message;

		mail($email_from, $email_subject, $email_message_user, $headers);
        // store in log
        $data = [
                'subject' => $email_subject,
                'message' => $email_message,
                'headers' => $headers,
        ];
        file_put_contents('/var/log/sales-leads.txt', json_encode($data) . PHP_EOL, FILE_APPEND | LOCK_EX);

		if ($successfullySend) {
			?>
            <h1><?php echo $l->t('Thanks for your order!');?></h1>
            <p><?php echo $l->t('We are preparing a contract and invoice, as well as deployment. Check your inbox for a contract and login details on the next working day.');?></p>
            <p><?php echo $l->t('We received following details:');?></p>
            <pre><?php
				echo $email_message;
				?></pre>
				<p><?php echo $l->t('Find a copy in your inbox.');?></p>
			<?php
		} else {
			// TODO: log something here
			error_log('could not send all emails - ' . $email_message . json_encode($_POST));
			?>
            <h1><?php echo $l->t('Something went wrong!');?></h1>
            <p><?php echo $l->t('We had some troubles processing your Nextcloud Support Subscription request. Please try again later.');?></p>
			<?php
		}
	}
}

} catch (ValidationException $e) {

    ?>
        <h1><?php echo $l->t('Something went wrong!');?></h1>
    <p><?php echo $l->t('We had some troubles processing your order request.');?></p>
    <p>
    <?php
    echo $e->getMessage();
    ?>
    </p>
    <?php
}
?>
</div>
