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
	$email_subject = "Nextcloud Architecture Whitepaper download";
    $email_message .= "\n";
    $email_message .= "Thank you for your interest in our Architecture whitepaper!"."\n\n";
    $email_message .= "You can download the whitepaper here:"."\n";
    $email_message .= "https://nextcloud.com/wp-content/themes/next/assets/files/3NLkR6bd/architecture-whitepaper.pdf"."\n\n";
    $email_message .= "Your feedback is welcome. If you have any questions or if you are interested in a demo, let us know!"."\n\n";
    $email_message .= "Greetings,"."\n";
    $email_message .= "The Nextcloud team";

// create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from;
// Send the email to the list
    @mail($email_to, $email_subject, $email_message, $headers);
// Second email to subscribe to the mailing list
    @mail($email_jos, $email_subject, $email_to, $headers);
 ?>

    <!-- success html here -->
<head>
<script>
	require(["require.config"], function() {
		require(["pages/enterprise", "modules/slideshow", "modules/submenu", "bootstrap"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/enterprise.css" rel="stylesheet">
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
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a class="btn btn-primary" href="/enterprise/order"><?php echo $l->t('Order online');?></a>
			<a class="btn btn-primary" href="/buy"><?php echo $l->t('get a quote');?></a>
			<a class="btn btn-primary" href="/pricing"><?php echo $l->t('pricing plans');?></a>
		</div>
	</div>
</section>
<section class="section--whitepaper">
    <div class="container text-center">
        <h3>Thank you for your interest in our whitepaper!</h3>
        <p>The whitepaper has been sent to <?php echo $email_to ?>,</p>
        <p>check your spam folder if you can not find it!</p>
    </div>
</section>
<?php
}
?>
