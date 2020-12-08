<head>
<script>
	require(["require.config"], function() {
		require(["pages/enterprise"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/enterprise.css" rel="stylesheet">
</head>
<section class="enterprise-hero-section">
	<div class="container-fluid background">
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Get support from the source');?></h1>
				<h2><?php echo $l->t('The best expertise whenever you need it!');?></h2>
			</div>
		</div>
	</div>
</section>

<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/newsletter-api.php';

class HintException extends \Exception {
    private $hint;

    public function __construct($hint, $code = 0, \Exception $previous = null) {
        $this->hint = $hint;
        parent::__construct($hint, $code, $previous);
    }

    public function getHint() {
        return $this->hint;
    }
}

try {

// validation expected data exists and setting variables
    if(!isset($_POST['email'])) {
        throw new HintException('The submitted form was invalid and missed the email address.');
    }
    if(!isset($_POST['segmentId']) && !is_numeric($_POST['segmentId'])) {
            throw new HintException('The submitted form was invalid.');
    }
    $email_to = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if(!filter_var($email_to, FILTER_VALIDATE_EMAIL)) {
        throw new HintException('The email address supplied is invalid.');
    }
    $newsletter= $_POST['moreinfo'];
    $whitepaper_nr = $_POST['segmentId'];

// turn $whitepapernr into $whitepaper_name and $whitepaper_url from a json file
    $storeVar = file_get_contents(get_template_directory_uri()."/assets/whitepapers.json");
    $storeArray = json_decode($storeVar, true);
    $whitepaper_name = $storeArray[$whitepaper_nr]['whitepaper_name'];
    $whitepaper_url = $storeArray[$whitepaper_nr]['whitepaper_url'];

    if($newsletter == 1) {
        subscribe($_POST['email']);
    }

// send email
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        $string = str_replace($bad,"",$string);
        return htmlspecialchars($string);
    }
    $email_message = "Thank you for requesting a Nextcloud white paper.\n\n";
    $email_subject = "Whitepaper download: ".clean_string($whitepaper_name);
    $email_message .= "Download our ".clean_string($whitepaper_name)." paper here:\n";
    $email_message .= "<".clean_string($whitepaper_url).">\n\n";
// add note that we added them to our newsletter (if they did tick the box)
     if($newsletter == 1) {
        $email_message .= "We have subscribed you to the Nextcloud newsletter, thank you for your interest!\n\n";
    }
    $email_message .= "If you have any questions about the whitepaper or Nextcloud,\n please contact our sales team through our website.\n <https://nextcloud.com/contact>\n";

// create email headers
    $headers = 'From: no-reply@nextcloud.com'."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'Content-Type: text/plain; charset=UTF-8'."\r\n";
// store in log
    $data = [
        'to' => $email_to,
        'subject' => $email_subject,
        'message' => $email_message,
        'headers' => $headers,
    ];
    file_put_contents('/var/log/whitepapers.txt', json_encode($data) . PHP_EOL, FILE_APPEND | LOCK_EX);
// Send the email
    @mail($email_to, $email_subject, $email_message, $headers);

?>
    <?php
//     echo ($email_message);
    ?>
    <section class="section--whitepaper">
        <div class="container text-center">
            <h3>Thank you for requesting a white paper, case study or datasheet!</h3>
            <p>A link to download our <?php echo($whitepaper_name); ?> paper has been sent to <?php echo($email_to); ?>.</p>
            <p>check your spam folder if you can't find it!</p>

        </div>
    </section>
    <?php

} catch (HintException $e) {
    ?>
    <section class="section--whitepaper">
        <div class="container text-center">
            <h3>Sorry, there was an error with the form you submitted</h3>
            <p>Did you fill in all mandatory fields?<br />
            The error(s) detected include:<br/>
                <?php echo htmlentities($e->getHint());  ?>
            </p>
            <p>Please use the back key to go to <br/>the previous page and fix the issue, or <br /> <a href="https://nextcloud.com/contact">contact us with the error message.</a></p>
            </div>
        </section>
    <?php
} catch (Throwable $exception) {
    $data = array(
        'Exception' => get_class($exception),
        'Message' => $exception->getMessage(),
        'Code' => $exception->getCode(),
        'Trace' => $exception->getTraceAsString(),
        'File' => $exception->getFile(),
        'Line' => $exception->getLine(),
    );
    error_log(json_encode($data));
    ?>
    <section class="section--whitepaper">
        <div class="container text-center">
            <h3>Apologies</h3>
            <p>There was a problem on our side</p>
            <p>Please <a href="https://nextcloud.com/contact">contact us</a> and ask for the whitepaper you tried to download.</p>
        </div>
    </section>
    <?php
}
