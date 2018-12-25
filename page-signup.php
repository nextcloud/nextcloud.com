<head>
<script>
    require(["require.config"], function() {
        require(["pages/signup"])
    });
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/signup.css" rel="stylesheet">
<!-- Social media images. Putting in all images, hoping the sites are clever enough to pick the right. If not - png is last, and probably fine. it IS an animated png, properly shown at least in Chrome and Firefox... -->

<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.mp4">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.mp4">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.mp4">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/yourdata.mp4">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.gif">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.gif">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.gif">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/yourdata.gif">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.apng">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.apng">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.apng">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/yourdata.apng">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/common/yourdata.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/yourdata.png">
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
    'tosagree' => $l->t('I agree to the %tos%'),
    'toserror' => $l->t('Please agree to the terms of service')
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
    'drawio' => $l->t('Draw.io'),
    'bookmarks' => $l->t('Bookmarks')
];

$coreApps = ['files', 'calendar', 'contacts', 'spreed', 'mail', 'tasks', 'notes'];

?>
<div class="background register-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Your choice');?></h1>
				<h2><?php echo $l->t('To help you decide where to store your data, Nextcloud maintains a list of preferred providers.');?></h2>
                <h2><?php echo $l->t('Sign up now and get a free* storage account!');?></h2>
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
            <p class="section--paragraph text-center"><?php echo $l->t('If there are any issues with your account, please note that we do NOT record any of your information on our side so we can not help you. Please contact the provider you signed up with.'); ?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('* free services are, of course, paid somewhere, by someone. Often with your data! Our providers all give a free 2-5GB storage shared account but offer larger storage and more options like a dedicated setup for a fee, which funds the free accounts. Consider paying for your account, it helps them provide this service!'); ?></p>
            </div>
        </div>
    </div>
</div>
</section>
