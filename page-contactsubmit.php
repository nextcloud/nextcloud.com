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
                <h1><?php echo $l->t('Contact us');?></h1>
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

if(!canPerformLimitedAction("contact-submit-action", 10)) {
  die("Too many requests. Please try again later.");
}

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
    $error_message = "";
    if(!isset($_POST['yourname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['comments'])) {
         $error_message .= 'Phone, mail, name and comments field have to have valid data! <br />'; }
    $yourname = $_POST['yourname']; // required
    $organization= $_POST['organization']; // required
    $phone= $_POST['phone']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
    $gdprcheck = $_POST['gdprcheck'];
    $foundnextcloud = $_POST['foundnextcloud'];


    $email_exp = '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
// remove checking name
//   if(!preg_match($string_exp,$yourname)) {
//     $error_message .= 'The name you entered does not appear to be valid.<br />';
//   }
    $string_exp = "/^((\+|00)\d{1,3})?(\d+|\s+)+\d$/";
//   if(!preg_match($string_exp,$phone)) {   -- remove checking on phone number, it's been a pita.
//     $error_message .= 'The phone number you entered does not appear to be valid, did you add a country code like +49?<br />';
//     }
  if(strlen($comments) < 8) {
    $error_message .= 'Your input is pretty short! <br />';
  }
    if(!($gdprcheck=="gdprchecked")) {
    $error_message .= 'You did not agree with our privacy policy so we would not be allowed to read and reply to your inquiry.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  } else {
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            $string = str_replace($bad,"",$string);
            return htmlspecialchars($string);
        }
    // Prepare email text
    $email_message = "Form details below.\n\n";
    $email_to = "sales@nextcloud.com";
    $email_subject = "Website Contact Form: ".clean_string($organization);
    $email_message .= "Name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Organization: ".clean_string($organization)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "How did you find out about Nextcloud? ".clean_string($foundnextcloud)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
    // create email headers
    $headers = 'From: no-reply@nextcloud.com'."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'Content-Type: text/plain; charset=UTF-8';
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

    // Send email to given address without the input
    $email_subject = 'Nextcloud Contact Form confirmation';
    $email_message = "Thanks for reaching out to Nextcloud.\nYou will hear back shortly from our Sales Team.\n\n";

    $headers = 'From: no-reply@nextcloud.com'."\r\n".
    'Reply-To: '.$email_to."\r\n" .
    'Content-Type: text/plain; charset=UTF-8';
    // Send the email to user
    @mail($email_from, 'Nextcloud Contact Form', $email_message, $headers);

 ?>

  <!-- success html here -->
    <section class="section--whitepaper">
        <div class="container text-center">
            <h3>Thank you for contacting us</h3>
            <p>We received your message and will contact you on <?php echo($email_from); ?>,</p>
            <p>check your inbox for a reply in the next week. If you need a faster reply, please go back to the previous page and use one of the other forms to contact us for a trial or support options.</p>
        </div>
    </section>
	<?php
	}
}
?>
