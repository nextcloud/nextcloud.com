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
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all fields?'); }
    $yourname = $_POST['yourname']; // required
    $organization= $_POST['organization']; // required
    $phone= $_POST['phone']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$yourname)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^((\+|00)\d{1,3})?\d+$/";
  if(!preg_match($string_exp,$phone)) {
    $error_message .= 'The phone number you entered does not appear to be valid, did you add a country code like +49?<br />';
    }
  if(strlen($comments) < 8) {
    $error_message .= 'Your input is pretty short! <br />';
  }
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
    $email_message = "Form details below.\n\n";
        function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
// the app review mailing list address
    $email_to = "sales@nextcloud.com";
    $email_subject = "Contacts_form";
    $email_message .= "Name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Organization: ".clean_string($organization)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
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
	<h1>Thanks for contacting us!</h1>
</div>
<p>Check your inbox for a reply in the next 2 working days.</p>
<?php
}
?>
