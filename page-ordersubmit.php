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
    if(!isset($_POST['yourname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['organization']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['address']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all fields?'); }
    $yourname = $_POST['yourname']; // required
    $organization= $_POST['organization']; // required
    $phone = $_POST['phone']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
	$address = $_POST['address']; // required
    $billing = $_POST['billing']; // required
    $vat = $_POST['vat']; // required
    $users = $_POST['users']; // required
    $edition = $_POST['edition']; // required
    $duration = $_POST['duration']; // required
    $edugov = $_POST['edugov']; // required
    $collabora = $_POST['collabora']; // required
    $outlook = $_POST['outlook'];
    $remoteinstall = $_POST['remoteinstall'];
    $givenprice = $_POST['givenPrice'];
//     $spreed = $_POST['spreed'];
//     $branding = $_POST['branding'];
    $dollars = $_POST['dollars'];
    $terms = $_POST['terms'];
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$yourname)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^((\+|00)\d{1,3})?(\d+|\s+)+\d$/";
//   if(!preg_match($string_exp,$phone)) {
//     $error_message .= 'The phone number you entered does not appear to be valid, did you add a country code like +49?<br />';
//     }
//   if(strlen($comments) < 8) {
//     $error_message .= 'Your input is pretty short! <br />';
//   }
//   if(RECAPTCHA_SECRET !== '' && isset($_POST['g-recaptcha-response'])) {
//     $url = 'https://www.google.com/recaptcha/api/siteverify';
//     $ch = curl_init();
// 
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_SECRET, 'response' => $_POST['g-recaptcha-response'])));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 
//     $server_output = curl_exec($ch);
// 
//     $server_output = json_decode($server_output, true);
// 
//     curl_close($ch);
// 
//     if (!isset($server_output['success']) || $server_output['success'] !== true) {
//       $error_message .= 'The captcha result was invalid.<br />';
//     }
//   } else {
//     $error_message .= 'Captcha code is missing.<br />';
//   }

  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
        function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
// the app review mailing list address
    $email_to = "jos@nextcloud.com";
	$email_subject = "Order_form from ".clean_string($organization);
    $email_message .= "Name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Organization: ".clean_string($organization)."\n";
    $email_message .= "Phone number: ".clean_string($phone)."\n";
	$email_message .= "Address: ".clean_string($address)."\n";
	$email_message .= "Billing address: ".clean_string($billing)."\n";
	$email_message .= "VAT ID: ".clean_string($vat)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n\n"."*Order details* \n";
    $email_message .= "Number of users: ".clean_string($users)."\n";
	$email_message .= "Edition: ".clean_string($edition)."\n";
    $email_message .= "How many years: ".clean_string($duration)."\n";
    $email_message .= "20% Education/gov/charity discount: ".clean_string($edugov)."\n\n"."Options (no if empty):\n";
	$email_message .= "Would like Collabora option (16/user): ".clean_string($collabora)."\n";
	$email_message .= "Would like Outlook option (5/user): ".clean_string($outlook)."\n";
	$email_message .= "Would like remote installation help (eur 1100): ".clean_string($remoteinstall)."\n";
// 	$email_message .= "Would like Branding option: ".clean_string($branding)."\n";
// 	$email_message .= "Would like Spreed option: ".clean_string($spreed)."\n";
	$email_message .= "Price we presented: ".clean_string($givenprice)."\n\n";
	$email_message .= "Would like to pay in dollars: ".clean_string($dollars)."\n";
	$email_message .= "Signed terms (should not be empty):".clean_string($terms)."\n\n";
    
// create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'Cc: '.$email_from;
// Send the email to the list
    @mail($email_to, $email_subject, $email_message, $headers);
// Second email to subscribe to the mailing list
//     @mail("frank@nextcloud.org", "website form", "website form", $headers);
 ?>

    <!-- success html here -->
<div class="page-header">
	<h1>Thanks for ordering a Nextcloud Support Subscription!</h1>
</div>
<p>We are preparing a contract and invoice. Check your inbox for a reply in the next 5 working days.</p>
<?php
}
?>
