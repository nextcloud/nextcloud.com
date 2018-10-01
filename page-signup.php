<head>
<script>
    require(["require.config"], function() {
        require(["pages/signup"])
    });
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/signup.css" rel="stylesheet">
</head>

<?php
include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/config.php';

try {
	$location = $readerCity->city(whatismyip())->location;
} catch (Exception $e) {
	$location = false;
}

$l = new L10N('signup');
$registerL10n = [
    'subscribe' => $l->t('Subscribe to our newsletter'),
    'email' => $l->t('Your email address'),
    'success' => $l->t('Success! Redirecting you to the provider'),
    'error' => $l->t('Error:'),
    'processing' => $l->t('Creating your account'),
    'register' => $l->t('Sign up'),
    'change' => $l->t('change provider'),
    'close' => $l->t('close'),
    'far' => $l->t('Far far away'),
    'geterror' => $l->t('Error while retrieving the providers list.'),
    'tos' => $l->t('Terms of service'),
    'tosagree' => $l->t('I agree to the %tos%')
];

$officialApps = [
    'files'=> $l->t('Files'),
    'calendar'=> $l->t('Calendar'),
    'contacts'=> $l->t('Contacts'),
    'spreed' => $l->t('Talk'),
    'mail'=> $l->t('Mail'),
    'tasks'=> $l->t('Tasks'),
    'notes'=> $l->t('Notes'),
    'news'=> $l->t('News'),
    'twofactor_totp' => $l->t('Two-factor authentication'),
    'gallery' => $l->t('Gallery'),
    'collabora' => $l->t('Collabora Online'),
    'deck' => $l->t('Deck'),
    'fulltextsearch' => $l->t('Full text search'),
    'mindmaps' => $l->t('Mindmaps'),
    'passman' => $l->t('Passman'),
    'drawio' => $l->t('Draw.io')
];

$coreApps = ['files', 'calendar', 'contacts', 'spreed', 'mail', 'tasks', 'notes'];

?>
<div class="background register-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Your choice');?></h1>
				<h2><?php echo $l->t('To help you decide where to store your data, Nextcloud maintains a list of preferred providers.');?></h2>
                <h2><?php echo $l->t('Sign up now and get a free storage account!');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--providers">
  <div id="register" class="container"
  	   data-ll="<?php echo htmlspecialchars(json_encode($location)) ?>"
       data-ocsapi="<?php echo array_key_exists('HTTP_OCS_APIREQUEST', $_SERVER) ?>"
       data-l10n="<?php echo htmlspecialchars(json_encode($registerL10n)) ?>"
       data-officialapps="<?php echo htmlspecialchars(json_encode($officialApps)) ?>"
       data-coreapps="<?php echo htmlspecialchars(json_encode($coreApps)) ?>">
  </div>
  <div id="register-details" class="container"><p></p></div>
</section>

<section class="section--disclaimer">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="section--paragraph text-center"><?php echo $l->t('NOTE: While we have done our best in choosing quality providers, we can not take any responsibility for their services.'); ?><br>
                <a class="hyperlink" href="https://help.nextcloud.com/c/hosting" target="_blank">
                    <?php echo $l->t('Your feedback is welcome.'); ?>
                </a>
            </p>
            <p class="section--paragraph text-center"><?php echo $l->t('By proceeding, you agree with our privacy policy. In short, we only handle the minimum amount of user data for the purpose of enabling the provider to create a minimal account and do not store any personally identifiable data.'); ?></p>
            <div class="text-center">
            <a href="<?php echo home_url('privacy') ?>" target="_blank" class="button button--blue button--arrow button--large"><?php echo $l->t('Our privacy policy'); ?></a>
            </div>
        </div>
    </div>
</div>
</section>
