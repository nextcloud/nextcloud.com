<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/appdev.css?v=2" rel="stylesheet">
    <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Nextcloudapps.png">
    <meta name=”Description” content="Develop for Nextcloud! Write a new app, extend Nextcloud or integrate other software.">

<script>
	require(["require.config"], function() {
		require(["bootstrap"])
	});
</script>
</head>

<div class="background appdev-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Develop for Nextcloud');?></h1>
				<h2><?php echo $l->t('<span class="avoidwrap">Write new applications</span>, <span class="avoidwrap">extend Nextcloud</span> <span class="avoidwrap">or integrate other software</span>');?></p>
			</div>
		</div>
	</div>
</div>
<?php
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
        !isset($_POST['comments']) ||
        !isset($_POST['checksum']) ||
        !isset($_POST['captcha'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all fields?'); }
    $yourname = $_POST['yourname']; // required
    $organization= $_POST['organization']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
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


    $email_exp = '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$yourname)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
//     $string_exp = "/^((\+|00)\d{1,3})?(\d+|\s+)+\d$/";
//   if(!preg_match($string_exp,$phone)) {   -- remove checking on phone number, it's been a pita.
//     $error_message .= 'The phone number you entered does not appear to be valid, did you add a country code like +49?<br />';
//     }
  if(strlen($comments) < 8) {
    $error_message .= 'Your input is pretty short! <br />';
  }
//   if(RECAPTCHA_SECRET !== '' && isset($_POST['g-recaptcha-response'])) {
//     $url = 'https://www.google.com/recaptcha/api/siteverify';
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_SECRET, 'response' => $_POST['g-recaptcha-response'])));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $server_output = curl_exec($ch);
//     $server_output = json_decode($server_output, true);
//     curl_close($ch);
//     if (!isset($server_output['success']) || $server_output['success'] !== true) {
//       $error_message .= 'The captcha result was invalid.<br />';
//     }
//   } else {
//     $error_message .= 'Captcha code is missing.<br />';
//   }
  if(strlen($error_message) > 0) {
    died($error_message);
  } else {
		function clean_string($string) {
			$bad = array("content-type", "bcc:", "to:", "cc:", "href");
			return str_replace($bad, "", $string);
		}
// the app review mailing list address
    $email_message = "Form details below.\n\n";
    $email_to = "frank@nextcloud.com";
    $email_subject = "Nextcloud Appmarketing Form: ".clean_string($organization);
    $email_message .= "Name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Organization: ".clean_string($organization)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
// create email headers
    $headers = 'From: no-reply@nextcloud.com'."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'Content-Type: text/plain; charset=UTF-8'."\r\n" .
    'Cc: '.$email_from;
// store in log
    $data = [
            'to' => $email_to,
            'subject' => $email_subject,
            'message' => $email_message,
            'headers' => $headers,
    ];
    file_put_contents('/var/log/appmarketing-mails.txt', json_encode($data) . PHP_EOL, FILE_APPEND | LOCK_EX);
// Send the email to the list
    @mail($email_to, $email_subject, $email_message, $headers);
// Second email to subscribe to the mailing list
//     @mail("frank@nextcloud.org", "website form", "website form", $headers);
 ?>

  <!-- success html here -->
    <section class="section--whitepaper">
        <div class="container text-center">
            <h3>Thank you for contacting us</h3>
            <p>We received your message and will contact you on <?php echo($email_from); ?>,</p>
            <p>check your inbox for a reply in the next week or so!</p>
        </div>
    </section>
	<?php
	}
}
?>
