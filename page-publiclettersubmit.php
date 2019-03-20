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
				<h1><?php echo $l->t('Thank you for signing');?></h1>
			</div>
		</div>
	</div>
</section>

<?php
if(isset($_POST['companymail'])) {
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
    if(!isset($_POST['companymail']) ||
        !isset($_POST['company']) ||
        !isset($_POST['country']) ||
        !isset($_POST['checksum']) ||
        !isset($_POST['captcha'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all fields?'); }
    $yourname = $_POST['yourname']; // NOT required
    $company= $_POST['company']; // required
    $country = $_POST['country']; // required
    $companymail = $_POST['companymail']; // required
    $checksum = $_POST['checksum']; // required
    $captcha = $_POST['captcha'];
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';
  if(!preg_match($email_exp,$companymail)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$yourname)) {
//     $error_message .= 'The name you entered does not appear to be valid.<br />';
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

  if(strlen($error_message) > 0) {
    died($error_message);
  } else {
		function clean_string($string) {
			$bad = array("content-type", "bcc:", "to:", "cc:", "href");
			return str_replace($bad, "", $string);
		}
// the app review mailing list address
    $email_from = "jos@nextcloud.com";

	$email_subject = "Public letter against Art. 11 and 13 in name of ".clean_string($company);

	$email_message = "Hello,\n\n";
    $email_message .= "You contacted us to sign the Open letter urging the Members of the EU\n";
    $email_message .= "Parliament to vote against Articles 11 & 13 of the proposed EU Copyright\n";
    $email_message .= "directive.\n\n";
    $email_message .= "*Your signature will only be validated if you reply to this email!*\n\n";
    $email_message .= "Please verify the data below and reply to us confirming your signature.\n";
    $email_message .= "Name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($companymail)."\n";
    $email_message .= "Company: ".clean_string($company)."\n";
    $email_message .= "Country: ".clean_string($country)."\n\n";
    $email_message .= "Thank you!\n\n";
    $email_message .= "-- \nJos Poortvliet\nHead of Marketing\n\noOo - Nextcloud Files, Groupware & Talk\nKeep your data secure and under your control\n\nT +49 711 25242890\nF +49 (711) 252 428 - 20\nE jos.poortvliet@nextcloud.com\nW https://nextcloud.com\n\nNextcloud GmbH\nHirschstrasse 26, 70173 Stuttgart, Germany\nGF: Frank Karlitschek\nHRB 227086 (AG München)\n";
// create email headers
    $headers = 'From: jos@nextcloud.com'."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'Content-Type: text/plain; charset=UTF-8'."\r\n";
// store in log
    $data = [
        'to' => $companymail,
        'subject' => $email_subject,
        'message' => $email_message,
        'headers' => $headers,
    ];
    file_put_contents('/var/log/public-letter-delete-dec2019.txt', json_encode($data) . PHP_EOL, FILE_APPEND | LOCK_EX);
// Send the email to the list
    @mail($companymail, $email_subject, $email_message, $headers);
// Second email to subscribe to the mailing list
//     @mail("frank@nextcloud.org", "website form", "website form", $headers);
 ?>


  <!-- success html here -->
    <section class="section--whitepaper">
        <div class="container text-center">
            <h3>Thank you for your support for the open letter against Copyright directive (Art. 11 & 13)</h3>
            <p>Please check your email on <?php echo($companymail); ?>,<br>
            and confirm to us your signing of the public letter.</p>
        </div>
    </section>
	<?php
	}
}
?>
