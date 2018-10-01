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
				<h1><?php echo $l->t('Get support from the source');?></h1>
				<h2><?php echo $l->t('The best expertise whenever you need it!');?></h2>
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
                    <h3>Sorry, there was an error with the form you submitted</h3>
                    <p>The error(s) detected:<br/>
                        <?php
                        echo $error . "<br />";
                        ?>
                    </p>
                    <p>Use the back key to go to the previous page and fix the
                        issue!</p>
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
    $edition = $_POST['edition']; // required
    $duration = $_POST['duration']; // required
    $edugov = $_POST['edugov']; // required
//     $collabora = $_POST['collabora']; // required
//     $collabora = $_POST['collabora']; // required
    $collaboraCheck = $_POST['collaboraCheck']  === 'collaboraCheck' ? 'yes' : 'no';
    $outlook = $_POST['outlook'] === 'outlook' ? 'yes' : 'no';
    $remoteinstall = $_POST['remoteinstall'] === 'remoteinstall' ? 'yes' : 'no';
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
    if (!in_array($edition, ['basic', 'standard'])) {
        $error_message .= '<li>Only "basic" and "standard" are valid subscriptions.</li>';
    } else {
        $basicNumbers = [
            50 => 1900,
            75 => 2650,
            100 => 3400,
            150 => 4400,
            200 => 5400,
            250 => 6400,
        ];
        $standardNumbers = [
            50 => 3400,
            75 => 4750,
            100 => 6100,
            150 => 7600,
            200 => 9100,
            250 => 10600,
        ];

        switch($edition) {
            case 'basic':
                if (isset($basicNumbers[$users])) {
                    $usersPrice = $basicNumbers[$users];
                }
                break;
            case 'standard':
                if (isset($standardNumbers[$users])) {
                    $usersPrice = $standardNumbers[$users];
                }
        }

        if ($usersPrice === 0) {
            $error_message .= '<li>Invalid user count.</li>';
        } else {
            $outlookPrice = 0;
            $collaboraPrice = 0;
            $remoteinstallPrice = 0;

            // OUTLOOK
            if ($outlook === 'yes') {
                $outlookPrice = $users * 5;
            }

            if ($edition === 'standard') {
                // COLLABORA
                // we don't allow different numbers of collabora users atm so this is simplified.
//                 if ($collabora > 0) {
//                     if ($collabora > $users) {
//                         $error_message .= '<li>More collabora users than Nextcloud users.</li>';
//                     } else {
//                         if($collabora <= 50) {
//                             $collaboraPrice = $collabora * 17;
//                         } else {
//                             $collabora = 17 * 50 + ($collabora - 50) * 16;
//                         }
//                     }
//                 }
                if ($collaboraCheck === 'yes') {
                   if($users < 100) {
                            $collaboraPrice = $users * 17;
                        } else {
                            $collaboraPrice = 17 * 99 + ($users - 99) * 16;
                        }
                    }
//                 }
                // REMOTE INSTALL
                if ($remoteinstall === 'yes') {
                    $remoteinstallPrice = 990;
                }

            }


            if (!in_array($edugov, ['no', 'edu', 'gov', 'charity'])) {
                $edugov = 'no';
            }

            // give discounts of 10% on standard, no discounts on basic
            if ($edition === 'standard') {
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
            }

            if (!in_array($duration, [1, 2, 3])) {
                $error_message .= '<li>Invalid duration.</li>';
            } else {
                switch ($duration) {
                    case 2:
                        $usersPrice *= 1.9;
                        $outlookPrice *= 1.9;
                        $collaboraPrice *= 1.9;
                        break;
                    case 3:
                        $usersPrice *= 2.75;
                        $outlookPrice *= 2.75;
                        $collaboraPrice *= 2.75;
                        break;
                }
            }

            $price = $usersPrice + $outlookPrice + $collaboraPrice + $remoteinstallPrice;
            $price = round($price);
        }

    }

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
		// the app review mailing list address
		$email_subject = "Order_form from " . clean_string($organization);

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
		$email_message .= "Edition: " . clean_string($edition) . "\n";
		$email_message .= "How many years: " . clean_string($duration) . "\n";
		$email_message .= "Education/government/charity discount: " . clean_string($edugov) . "\n\n" . "Options:\n";
		$email_message .= "Would like Outlook option (5€/user): " . clean_string($outlook) . "\n";
		$email_message .= "Number of Collabora users (17€ for first 99, then 16€/user): " . clean_string($collaboraCheck) . "\n";
		$email_message .= "Would like remote installation help (990 €): " . clean_string($remoteinstall) . "\n\n";
		// 	$email_message .= "Would like Branding option: ".clean_string($branding)."\n";
		// 	$email_message .= "Would like Spreed option: ".clean_string($spreed)."\n";
		$email_message .= "Price: " . clean_string($givenprice) . "\n";
		//$email_message .= "Would like to pay in dollars: ".clean_string($dollars)."\n";
		$email_message .= "Signed terms: " . clean_string($terms) . "\n\n";

		// create email headers
		$headers = 'From: no-reply@nextcloud.com' . "\r\n" .
			'Reply-To: ' . $email_from . "\r\n" .
			'Cc: ' . $email_from . "\r\n" .
            'Content-Type: text/plain; charset=UTF-8';
		// Send the email
		$recipients = ['patrick', 'jos', 'morris', 'andreas'];
		$successfullySend = true;
		foreach ($recipients as $recipient) {
			$successfullySend &= mail($recipient . '@nextcloud.com', $email_subject, $email_message, $headers);
		}
        // store in log
        $data = [
                'subject' => $email_subject,
                'message' => $email_message,
                'headers' => $headers,
        ];
        file_put_contents('/var/log/sales-leads.txt', json_encode($data) . PHP_EOL, FILE_APPEND | LOCK_EX);

		if ($successfullySend) {
			?>
            <h1>Thanks for ordering a Nextcloud Support Subscription!</h1>
            <p>We are preparing a contract and invoice. Check your inbox for a reply in the next 5 working days.</p>
            <p>We received following details:</p>
            <pre><?php
				echo $email_message;
				?></pre>
			<?php
		} else {
			// TODO: log something here
			error_log('could not send all emails - ' . $email_message . json_encode($_POST));
			?>
            <h1>Something went wrong!</h1>
            <p>We had some troubles processing your Nextcloud Support Subscription request. Please try again later.</p>
			<?php
		}
	}
}

} catch (ValidationException $e) {

    ?>
        <h1>Something went wrong!</h1>
    <p>We had some troubles processing your Nextcloud Support Subscription request.</p>
    <p>
    <?php
    echo $e->getMessage();
    ?>
    </p>
    <?php
}
?>
</div>
