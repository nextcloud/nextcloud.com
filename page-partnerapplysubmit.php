<head>
<meta charset="utf-8">
    <script>
	require(["require.config"], function() {
		require(["pages/enterprise"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/partnerprogramapply.css?v=2" rel="stylesheet">
</head>

<section class="hero-section">
	<div class="background partnerprogram-background">
		<div class="container">
			<div class="col-md-6 topheader">
				<h1>Partner program</h1>
				<h2>Become part of the success story</h2>
			</div>
		</div>
	</div>
</section>

<?php
require_once realpath(dirname(__FILE__)) . '/lib/ratelimiter.php';

if(!canPerformLimitedAction("partnerapply-submit-action", 10)) {
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
        !isset($_POST['phone']) ||
        !isset($_POST['role']) ||
        !isset($_POST['employees'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all mandatory fields?'); }
    $yourname = $_POST['yourname']; // required
    $organization= $_POST['organization']; // required
    $phone = $_POST['phone']; // required
    $email_from = $_POST['email']; // required
    $role = $_POST['role']; // required
    $employees = $_POST['employees']; // required
    $businessmodel = $_POST['businessmodel'];
    $customers = $_POST['customers'];
    $geography = $_POST['geography'];
    $experience = $_POST['experience'];
    $comments = $_POST['comments']; // required
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
    $email_message = "Partner program application details below.\n\n";
    $email_to = "partner@nextcloud.com";
	$email_subject = "Nextcloud partner program application: ".clean_string($organization);
    $email_message .= "Name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone number: ".clean_string($phone)."\n";
    $email_message .= "Organization: ".clean_string($organization)."\n";
    $email_message .= "Role: ".clean_string($role)."\n";
    $email_message .= "Employees: ".clean_string($employees)."\n";
    $email_message .= "Business model: ".clean_string($businessmodel)."\n";
    $email_message .= "Target customers: ".clean_string($customers)."\n";
    $email_message .= "Target geography: ".clean_string($geography)."\n";
    $email_message .= "Nextcloud experience: ".clean_string($experience)."\n";
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
