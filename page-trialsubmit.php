<head>
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

<?php
require_once realpath(dirname(__FILE__)) . '/lib/ratelimiter.php';

if(!canPerformLimitedAction("trial-submit-action", 10)) {
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
        !isset($_POST['organization']) ||
        !isset($_POST['users'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all mandatory fields?'); }
    $yourname = $_POST['yourname']; // required
    $organization= $_POST['organization']; // required
    $country= $_POST['country']; // required
    $orgsize= $_POST['orgsize']; // required
    $partnertype= $_POST['partnertype']; // required
    $phone = $_POST['phone']; // required
    $email_from = $_POST['email']; // required
    $users = $_POST['users']; // required
    $role = $_POST['role'];
    $comments = $_POST['comments'];
    $needsetuphelp = $_POST['need-setup-help'];
    $hostedoronprem = $_POST['hosted-or-onprem'];
    $clustering = $_POST['clustering'];
    $collabora = $_POST['collabora'];
    $webconferencing = $_POST['webconferencing'];
    $outlook = $_POST['outlook'];
    $partner = $_POST['partner'];
    $gdprcheck = $_POST['gdprcheck'];
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';
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
//     $email_to = "sales@nextcloud.com";
    $email_message = "Trial request form details below.\n\n";
    $email_to = "sales@nextcloud.com";
	$email_subject = "Nextcloud Enterprise Trial: ".clean_string($organization);
    $email_message .= "Name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone number: ".clean_string($phone)."\n";
    $email_message .= "Organization: ".clean_string($organization)."\n";
    $email_message .= "Country: ".clean_string($country)."\n";
    $email_message .= "Organization size: ".clean_string($orgsize)."\n";
    $email_message .= "Role: ".clean_string($role)."\n";
    $email_message .= "How many users do you expect in 12 months? ".clean_string($users)."\n";
    $email_message .= "Would you require assistance to set up the service or to design/review the architecture? ".clean_string($needsetuphelp)."\n";
    $email_message .= "Do you need a hosted or on-premises trial? ".clean_string($hostedoronprem)."\n";
    $email_message .= "Once in production, would you prefer hosted, on-prem but self-managed or managed on-prem? ".clean_string($partnertype)."\n";
    $email_message .= "Are you using any sort of clustering for the application, database or storage? ".clean_string($clustering)."\n";
    $email_message .= "Would you be interested in editing office documents online? ".clean_string($collabora)."\n";
    $email_message .= "Would you be interested in secure webconferencing and audio and video calls? ".clean_string($webconferencing)."\n";
    $email_message .= "Would you be interested in our Secure Sharing add-in for Outlook? ".clean_string($outlook)."\n";
    $email_message .= "Can we hand over your data to a partner? ".clean_string($partner)."\n";
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
            <h3>Thank you for contacting us</h3>
            <p>We received your message and will contact you on <?php echo($email_from); ?>,</p>
            <p>check your inbox for a reply in the next 2-3 working days.</p>
        </div>
    </section>
	<?php
	}
}
?>
