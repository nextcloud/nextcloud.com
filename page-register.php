<head>
<script>
    require(["require.config"], function() {
        require(["pages/register"])
    });
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/register.css" rel="stylesheet">
</head>

<?php
include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/config.php';
use GeoIp2\Database\Reader;

$reader = new Reader(realpath(dirname(__FILE__)) . '/assets/GeoLite2-City/GeoLite2-City.mmdb');
// Replace "city" with the appropriate method for your database, e.g.,
// "country".
try {
	$location = $location = $reader->city(whatismyip())->location;
} catch (Exception $e) {
	$location = false;
}

$l = new L10N('register');
$registerL10n = [
    'subscribe' => $l->t('Subscribe to our newsletter'),
    'email' => $l->t('Your email address'),
    'success' => $l->t('Success! Redirecting you to the provider'),
    'error' => $l->t('Error:'),
    'processing' => $l->t('Creating your account'),
    'register' => $l->t('Register'),
    'change' => $l->t('change provider'),
    'close' => $l->t('close'),
    'far' => $l->t('Far far away')
];

?>
<div class="background register-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Your choice');?></h1>
				<h2><?php echo $l->t('To help you decide where to store your data, Nextcloud maintains a list of preferred providers.');?></h2>
                <h2><?php echo $l->t('Sign up now and get a 1-year free, 2GB storage account!');?></h2>
<!--                 <h3>This page is in testing. If you got here by accident, move along, nothing to see!</h3> -->
			</div>
		</div>
	</div>
</div>

<section class="section--providers">
  <div id="register" class="container"
  	   data-ll="<?php echo htmlspecialchars(json_encode($location)) ?>"
       data-ocsapi="<?php echo array_key_exists('HTTP_OCS_APIREQUEST', $_SERVER) ?>"
       data-l10n="<?php echo htmlspecialchars(json_encode($registerL10n)) ?>">
  </div>
  <div id="register-details" class="container"><p></p></div>
</section>

<section class="section--disclaimer">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="section--paragraph text-center"><?php echo $l->t('NOTE: While we have done our best in choosing quality providers, we can not take any responsibility for their services.<br><a class="hyperlink" href="https://help.nextcloud.com/c/hosting">Your feedback is welcome.</a>'); ?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('By proceeding, you agree with our privacy policy. In short, we only handle the minimum amount of user data for the purpose of enabling the provider to create a minimal account and do not store any personally identifiable data.'); ?></p>
            <div class="text-center">
            <a href="<?php echo home_url('privacy') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Our privacy policy'); ?></a>
            </div>
        </div>
    </div>
</div>
</section>
