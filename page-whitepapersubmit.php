<?php
if(isset($_POST['email'])) {
   function died($error) {
    // error code goes here
        echo "We are very sorry, but there were error(s) found with the form you submitted: ";
        echo "<br />";
        echo $error."<br />";
        echo "Please go back and fix these errors.<br />";
        die();
    }
    // validation expected data exists
    if(!isset($_POST['email'])) {
        died('We can not find an email address. Did you fill in your email?'); }
    $email_to = $_POST['email']; // required
    $error_message = "";
  if(RECAPTCHA_SECRET !== '' && isset($_POST['g-recaptcha-response'])) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_SECRET, 'response' => $_POST['g-recaptcha-response'])));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);

    $server_output = json_decode($server_output, true);

    curl_close($ch);

    if (!isset($server_output['success']) || $server_output['success'] !== true) {
      $error_message .= 'The captcha result was invalid.<br />';
    }
  } else {
    $error_message .= 'Captcha code is missing.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }
        function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
// the app review mailing list address
    $email_from = "sales@nextcloud.com";
    $email_jos = "jos@nextcloud.com";
	$email_subject = "Nextcloud Global Scale Whitepaper download";
    $email_message .= "\n";
    $email_message .= "Thank you for your interest in our Global Scale whitepaper!"."\n\n";
    $email_message .= "You can download the whitepaper here:"."\n";
    $email_message .= "https://nextcloud.com/wp-content/themes/next/assets/files/08ss5vJs/global-scale-whitepaper.pdf"."\n\n";
    $email_message .= "Your feedback is welcome. If you have any questions or if you are interested in a demo, let us know!"."\n\n";
    $email_message .= "Greetings,"."\n";
    $email_message .= "The Nextcloud team";

// create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'Cc: '.$email_from;
// Send the email to the list
    @mail($email_to, $email_subject, $email_message, $headers);
// Second email to subscribe to the mailing list
    @mail($email_jos, $email_subject, $email_to, $headers);
 ?>

    <!-- success html here -->
<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/globalscale.css" rel="stylesheet">
</head>
<div class="background globalscale-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Global Scale');?></h1>
				<h2><?php echo $l->t('Extreme scalability at commodity cost');?></p>
			</div>
		</div>
	</div>
</div>
<section class="section--whitepaper">
    <div class="container text-center">
        <h2>Thanks for your interest in our whitepaper</h2>
        <p>The whitepaper has been sent to <?php echo $email_to ?>,</p>
        <p>check your spam folder if you can not find it!</p>
        <p><a class="hyperlink" href="/globalscale">Click here</a> to return to the Global Scale page and read more.</p>
    </div>
</section>
<?php
}
?>
