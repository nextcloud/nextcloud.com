<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/outdated.css?v=1" rel="stylesheet">
</head>

<div class="background outdated-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('PHP upgrade needed');?></h1>
				<h2><?php echo $l->t('Newer Nextcloud releases require an updated PHP version');?></p>
			</div>
		</div>
	</div>
</div>
<section class="section--letter">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="section--paragraph__title"><?php echo $l->t('Update for your Nextcloud');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Dear Nextcloud user,');?></p>
			<p class="section--paragraph"><?php echo $l->t('Our update check has noticed that your server is running PHP 5.6. Nextcloud releases newer than version 13 do not support this PHP release. We also no longer provide public bug and security fixes to Nextcloud 13.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Running a Nextcloud release without security and stability updates puts your data at risk. We strongly recommend to upgrade to Nextcloud 14 at the earliest convenience. This version requires at least PHP 7.0 on your server.');?></p>
			<p class="section--paragraph"><?php echo $l->t('If you are a customer and can not upgrade to Nextcloud 14, contact the Nextcloud support team for access to our long term support for Nextcloud 13. We are dedicated to accommodating your needs.');?></p>
			<p class="section--paragraph"><?php echo $l->t('We strongly recommend all other users to install a newer PHP version and upgrade Nextcloud to a more recent, maintained version. Once you upgraded PHP on your server, Nextcloud will inform you about possible updates. Just go to the admin settings and check the version section.');?></p>
            <p class="section--paragraph"><?php echo $l->t('<strong>Note:</strong> It could take up to 30 minutes until the check is executed. To force the check, switch to a different update channel, wait for the "Channel updated" message and switch back to the original channel. The available update should then be visible after a page refresh.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Kind regards,<br>Your dedicated Nextcloud team');?></p>
		</div>
	</div>
</div>
</section>
