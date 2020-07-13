<head>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/include.css">

<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/include.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/include.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/include.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/include.png">
</head>

<div class="background include-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Include');?></h1>
 				<h2><code><?php echo $l->t('Supporting diversity in open source');?></code></h2>
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
                    <h3>Sorry, there was an error with the form you submitted. Please try to fill in all fields correctly!</h3>
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
        !isset($_POST['who']) ||
        !isset($_POST['fit']) ||
        !isset($_POST['location']) ||
        !isset($_POST['languages']) ||
        !isset($_POST['os']) ||
        !isset($_POST['contribute']) ||
        !isset($_POST['links']) ||
        !isset($_POST['others'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all fields?'); }
    $yourname = $_POST['yourname']; // required
    $email_from = $_POST['email']; // required
    $who= $_POST['who']; // required
    $fit = $_POST['fit']; // required
    $location = $_POST['location']; // required
    $languages = $_POST['languages']; // required
    $os = $_POST['os']; // required
    $contribute = $_POST['contribute']; // required
    $links = $_POST['links']; // required
    $others = $_POST['others']; // required
    $checksum = $_POST['checksum']; // required
    $captcha = $_POST['captcha'];
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$yourname)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
  if (strlen($checksum) !== 75 || !strpos($checksum, ':')) {
        $error_message .= 'The checksum is not valid.<br />';
    } else {
        list($salt, $expectedHash) = explode(':', $checksum, 2);
        $hash = hash('sha256', $salt . $captcha);
        if ($hash !== $expectedHash) {
            $error_message .= 'The captcha result you entered does not appear to be correct.<br />';
        }
    }
    $string_exp = "/^((\+|00)\d{1,3})?(\d+|\s+)+\d$/";

  if(strlen($error_message) > 0) {
    died($error_message);
  } else {
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            $string = str_replace($bad,"",$string);
            return htmlspecialchars($string);
        }

// create mail message
    $email_to = "include@nextcloud.com";
	$email_subject = "New message from Include: ".clean_string($yourname);
    $email_message = clean_string($yourname)." entered in the Include form:\n\n";
    $email_message .= "Name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Their location: ".clean_string($location)."\n";
    $email_message .= "The languages they speak: ".clean_string($languages)."\n";
    $email_message .= "The OS they have experience with: ".clean_string($os)."\n";
    $email_message .= "Links to blogs, social media, github account and more: ".clean_string($links)."\n";
    $email_message .= "Introduction: "."\n> ".clean_string($who)."\n";
    $email_message .= "Why they think they are fit for Include: "."\n> ".clean_string($fit)."\n";
    $email_message .= "What they think they can contribute: "."\n> ".clean_string($contribute)."\n";
    $email_message .= "Additional comments they had: "."\n> ".clean_string($others)."\n";
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
    file_put_contents('/var/log/sales-leads.txt', json_encode($data) . PHP_EOL, FILE_APPEND | LOCK_EX);

// Send the email to $email_to
    @mail($email_to, $email_subject, $email_message, $headers);
 ?>


  <!-- success html here -->
    <section class="section--whitepaper">
        <div class="container text-center">
            <h3>Thank you for getting in touch!</h3>
            <p>We received your message and will contact you on <?php echo($email_from); ?>,</p>
            <p>Check your inbox for a reply in the next week.</p>
        </div>
    </section>
	<?php
	}
}
?>
