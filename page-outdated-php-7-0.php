<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/outdated.css" rel="stylesheet">
</head>

<div class="background outdated-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('PHP upgrade preparation');?></h1>
				<h2><?php echo $l->t('Newer Nextcloud releases will require an updated PHP version');?></p>
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
			<p class="section--paragraph"><?php echo $l->t('Our update check has noticed that your server is running PHP 7.0 or older. We want to inform you that Nextcloud releases newer than version 15 will no longer support these PHP releases. It is recommended to prepare an upgrade to a newer version of PHP. We will maintain Nextcloud 15 publicly until shortly after Nextcloud 17 is released, which is expected for the end of 2019.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Running a Nextcloud release without security and stability updates puts your data at risk.');?></p>
			<p class="section--paragraph"><?php echo $l->t('If you are a customer and can not upgrade to a newer version of PHP between now and the end of the public Nextcloud 15 maintenance window, contact the Nextcloud support team for access to our long term support for Nextcloud 15. We are dedicated to accommodating your needs.');?></p>
			<p class="section--paragraph"><?php echo $l->t('We strongly recommend all other users to install a newer PHP version and upgrade Nextcloud to a more recent, maintained version. Once you upgraded PHP on your server, Nextcloud will inform you about possible updates. Just go to the admin settings and check the version section.');?></p>
            <p class="section--paragraph"><?php echo $l->t('<strong>Note:</strong> It could take up to 30 minutes until the check is executed. To force the check, switch to a different update channel, wait for the "Channel updated" message and switch back to the original channel. The available update should then be visible after a page refresh.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Kind regards,<br>Your dedicated Nextcloud team');?></p>
		</div>
	</div>
</div>
</section>
