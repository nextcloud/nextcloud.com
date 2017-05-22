<?php
if(isset($_POST['email'])) {

   function died($error) {

    // error code goes here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br />";
        echo $error."<br />";
        echo "Please go back and fix these errors.<br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['contributorname']) ||
        !isset($_POST['app_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['appdevurl']) ||
        !isset($_POST['appstoreurl']) ||
        !isset($_POST['collaborators']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all fields?'); }

    $contributorname = $_POST['contributorname']; // required
    $app_name = $_POST['app_name']; // required
    $email_from = $_POST['email']; // required
    $appstoreurl = $_POST['appstoreurl']; // required
    $appdevurl = $_POST['appdevurl']; // required
    $collaborators = $_POST['collaborators']; // not required
    $comments = $_POST['comments']; // required
    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,contributorname)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$app_name)) {
    $error_message .= 'The app name you entered does not appear to be valid.<br />';
  }
    if(strpos($appstoreurl, 'apps.nextcloud.com/') === false) {
    $error_message .= 'The App store URL you entered does not appear to be valid.<br />';
  }
    if(!filter_var($appdevurl, FILTER_VALIDATE_URL)) {
    $error_message .= 'The repository URL you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'You did not add any thoughts on why we should accept your app. <br />';
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
    $email_to = "appsreview@nextcloud.org";
    
    $email_message .= "Name: ".clean_string(contributorname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "App name: ".clean_string($app_name)."\n";
    $email_message .= "App store url: ".clean_string($appstoreurl)."\n";
    $email_message .= "Development repo: ".clean_string($appdevurl)."\n";
    $email_message .= "Other authors: ".clean_string($collaborators)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
    $email_subject .= "Seeking approval for ".clean_string($app_name)."\n";
    
// create email headers
    $headers = 'From: no-reply@nextcloud.com'."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'Cc: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
// Send the email to the list
    @mail($email_to, $email_subject, $email_message, $headers);

// Second email to subscribe to the mailing list
    @mail("appsreview-join@nextcloud.org", "subscribe", "subscribe", $headers);
 ?>

    <!-- success html here -->
<div class="page-header">
	<h1>Thanks for submitting your app!</h1>
</div>
<p>Check your inbox for a confirmation email for your subscription to the <a href="https://mailman.nextcloud.org/mailman/listinfo/appsreview">app review mailing list</a>. If you do not join the list, we can not work with you on getting your app approved.</p>
<p>Please take your addition to the app review mailing list as an invitation to help review other apps - as member of the Nextcloud community (which you are by virtue of having developed an Nextcloud app) your opinions are appreciated!</p>
<?php
}
?>