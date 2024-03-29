<head>
<script>
	require(["require.config"], function() {
		require(["pages/enterprise"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/form.css?v=2" rel="stylesheet">
</head>
<section class="background generic-background second-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Nextcloud Enterprise Trial');?></h1>
            </div>
        </div>
    </div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
            <a class="button button--blue" href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
			<a class="button button--blue" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
			<a class="button button--blue" href="<?php echo home_url('trial') ?>"><?php echo $l->t('Trial');?></a>
			<a class="button button--blue" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
		</div>
	</div>
</section>

<section class="section--links">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                <a class="button button--white button--small" href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('Order online');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('trial') ?>"><?php echo $l->t('Trial');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
                <a class="button button--white button--small" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise offering');?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once realpath(dirname(__FILE__)) . '/lib/ratelimiter.php';
require_once realpath(dirname(__FILE__)) . '/lib/captcha.php';

if(!canPerformLimitedAction("trial-submit-action", 5)) {
  die("Too many requests. Please try again later.");
}

if(isset($_POST['email'])) {
   function died($error) {
   	// error code goes here
    ?>
            <section class="section--whitepaper">
                <div class="container text-center">
                    <h3>Sorry, there was an error with the form you submitted</h3>
                    <p>Did you fill in all mandatory fields?<br />
                    The error(s) detected include:<br/>
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
        !isset($_POST['users'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all mandatory fields?'); }
    $yourname = $_POST['yourname']; // required
    $organization= $_POST['organization']; // required
    $orgsize= $_POST['orgsize']; // required
    $phone = $_POST['phone']; // required
    $email_from = $_POST['email']; // required
    $users = $_POST['users']; // required
    $comments = $_POST['comments'];
    $hostedoronprem = $_POST['hosted-or-onprem'];
    $gdprcheck = $_POST['gdprcheck'];
    $foundnextcloud = $_POST['foundnextcloud'];
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';

    if(!IsValidCaptcha($_POST['captcha'])) {
        $error_message .= 'The captcha result you entered does not appear to be correct.<br />';
    }


    if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
// remove checking name
//   if(!preg_match($string_exp,$yourname)) {
//     $error_message .= 'The name you entered does not appear to be valid.<br />';
//   }
  if(!($gdprcheck=="gdprchecked")) {
    $error_message .= 'You did not agree with our privacy policy so we would not be allowed to read and reply to your inquiry.<br />';
  }

    $string_exp = "/^((\+|00)\d{1,3})?(\d+|\s+)+\d$/";
//   if(!preg_match($string_exp,$phone)) {
//     $error_message .= 'The phone number you entered does not appear to be valid, did you add a country code like +49?<br />';
//     }

  if(strlen($error_message) > 0) {
    died($error_message);
  } else {
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            $string = str_replace($bad,"",$string);
            return htmlspecialchars($string);
        }
// the app review mailing list address
    $email_message = "Trial request form details below.\n\n";
   $email_to = "trial@nextcloud.com";
//     $email_to = "jos@nextcloud.com";
	$email_subject = "Nextcloud Enterprise Trial: ".clean_string($organization);
    $email_message .= "Name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone number: ".clean_string($phone)."\n";
    $email_message .= "Organization: ".clean_string($organization)."\n";
    $email_message .= "How big do you expect your installation to grow to one day? ".clean_string($users)."\n";
    $email_message .= "Do you need a hosted or on-premises trial? ".clean_string($hostedoronprem)."\n";
    $email_message .= "How did you find out about Nextcloud? ".clean_string($foundnextcloud)."\n";
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
    file_put_contents('/var/log/sales-leads.txt', json_encode($data) . PHP_EOL, FILE_APPEND | LOCK_EX);
// Send the email to the list
    @mail($email_to, $email_subject, $email_message, $headers);
// Second email to subscribe to the mailing list
//     @mail("frank@nextcloud.org", "website form", "website form", $headers);
 ?>


  <!-- success html here -->
    <section class="section--whitepaper">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-center">Thank you for contacting us</h3>
                    <p class="text-center">We received your message and will contact you on <?php echo($email_from); ?>,</p>
                    <p class="text-center">check your inbox for a reply in the next 2-3 working days.</p>
                </div>
            </div>
        </div>
    </section>
	<?php
	}
}
?>
