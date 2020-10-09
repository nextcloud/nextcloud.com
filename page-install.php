<head>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/install.css?=v2" rel="stylesheet">
	<script>
	require(["require.config"], function() {
		require(["jquery", "bootstrap", "pages/install"])
	});
</script>
</head>


<section class="content">
<div class="container">
	<div class="install-section blue-border">
		<div class="numbadge install-page__number">
			<p>1</p>
		</div>
		<img class="install-illustration" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/secure-server.svg" />
		<h3><?php echo $l->t('Get your Nextcloud server up and running');?></h3>
		<p class="install-description"><?php echo $l->t('With Nextcloud you control where your documents, photos and chat messages are! Choose one of our recommended providers or download our server software and run it where you want.');?></p>
		<p><a class="button button--blue overlay-trigger" href="<?php echo site_url('signup') ?>"><?php echo $l->t('Recommended provider</a>');?>
		<a class="button button--white" href="<?php echo home_url('install/#instructions-server') ?>"><?php echo $l->t('Other options</a>');?></p>
	</div>
	<div class="install-section blue-border">
		<div class="numbadge install-page__number">
			<p>2</p>
		</div>
		<img class="install-illustration" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/mobile.svg" />
		<h3><?php echo $l->t('Get Nextcloud on all your devices');?></h2>
		<p class="install-description"><?php echo $l->t('Android, iOS, Windows, Mac or linux? We’ve got you covered. Once your server is set up, you can install the Nextcloud client on all your devices.');?></p>
		<p><a class="button button--blue" href="<?php echo home_url('install/#install-clients') ?>"><?php echo $l->t('Get the Nextcloud clients </a>');?></p>
	</div>
	<div class="install-section install-section--last">
		<div class="numbadge install-page__number">
			<p>3</p>
		</div>
		<img class="install-illustration" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check-lock.svg" />
		<h3><?php echo $l->t('Explore the app universe');?></h2>
		<p class="install-description"><?php echo $l->t('You can extend the functionality of Nextcloud, and connect a wide variety of mobile and third-party apps to Nextcloud.');?></p>
		<p><a class="button button--blue" href="https://apps.nextcloud.com/" target="blank"><?php echo $l->t('Browse the apps</a>');?></p>
	</div>



<hr class="wide"></hr>
<div class="row">
	<div class="col-md-4">
		<div class="numbadge centre">
			<i class="fa-book"></i>
		</div>
		<h3><?php echo $l->t('Read the documentation');?></h3>
		<p><?php echo $l->t('Here you can find our manuals:');?></p>
		<ul>
			<li><a class="hyperlink" href="<?php echo $DOCUMENTATION_USER; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('End User Documentation');?>"><?php echo $l->t('Users');?></a></li>
			<li><a class="hyperlink" href="<?php echo $DOCUMENTATION_CLIENT_DESKTOP; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Desktop client');?>"><?php echo $l->t('Desktop client');?></a></li>
			<li><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud administrator Documentation');?>"><?php echo $l->t('Admins</a>');?></li>
			<li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud Developer Documentation');?>"><?php echo $l->t('Developers</a>');?></li>
			<li><a class="hyperlink" href="<?php echo $DOCUMENTATION_BUGTRACKER; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Information for Testers');?>"><?php echo $l->t('Testers');?></a></li>
		</ul>
	</div>
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="fa-comment"></i>
		</div>
		<h3><?php echo $l->t('Need help?');?></h3>
		<p><?php echo $l->t('Discuss using, installing or maintaining Nextcloud in our support channels.');?></p>
		<ul>
			<li><?php echo $l->t('<a class="hyperlink" href="http://help.nextcloud.com" target="_blank" rel="tooltip" title=" Nextcloud User Forums">The Forum</a>');?></li>
			<li><?php echo $l->t('<a class="hyperlink" href="irc://#nextcloud@freenode.net" target="_blank" rel="tooltip" title="The Nextcloud IRC Channel">IRC Channel</a> (<a class="hyperlink" href="https://webchat.freenode.net/?channels=nextcloud" target="_blank"  rel="tooltip" title="Web interface to the Nextcloud IRC Channel">Webchat</a>)');?></li>
		</ul>
		<p><?php echo $l->t('These consist of users helping each other. Consider helping out others, too!');?><br />
		<p><?php echo $l->t('Browse dozens of free apps and services you could use with your Nextcloud on');?>
		<a class="hyperlink" href="https://apps.nextcloud.com" target="_blank" rel="tooltip" title="App Store"><?php echo $l->t('the Nextcloud app store.');?></a></p>
		<p><a class="button button--blue" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('Enterprise support</a>');?></p></p>
	</div>
	<a name="testing"></a>
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="fa-rocket"></i>
		</div>
		<h3><?php echo $l->t('Get Involved');?></h3>
		<p><?php echo $l->t('If you want to help out with');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="Developer Documentation"><?php echo $l->t('developing');?></a> <?php echo $l->t('and testing, grab a daily build. Find our');?> <a class="hyperlink" href="https://github.com/nextcloud" target="_blank"><?php echo $l->t('GitHub project here');?></a> <?php echo $l->t('and find our ');?> <a class="hyperlink" href="https://github.com/nextcloud/server/issues" target="_blank"><?php echo $l->t('issue tracker for the server here.');?></a></p>
		<p><a class="button button--white button--small" href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" ><i class="fa-archive"></i>  <?php echo $l->t('Daily build');?></a></p>
		<?php if(!empty($SERVER_TESTING_VERSION)) { ?>
		<p><?php echo $l->t('Latest testing version is ');?> <?php echo $SERVER_TESTING_VERSION; ?></p>
		<p>
		<?php if(!empty($DOWNLOAD_SERVER_ZIP_TESTING)) { ?>
				  <a class="button button--white button--small" href="<?php echo $DOWNLOAD_SERVER_ZIP_TESTING; ?>" ><i class="fa-archive"></i> .zip</a>
		<?php } ?>
		<?php if(!empty($DOWNLOAD_SERVER_TAR_TESTING)) { ?>
			<a class="button button--white button--small" href="<?php echo $DOWNLOAD_SERVER_TAR_TESTING; ?>"><i class="fa-archive"></i> .tar.bz2</a>
		<?php } ?>
		<?php } ?>
		<p><?php echo $l->t('Help test our clients:');?> <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID_BETA; ?>"><i class="fa-android"></i> <?php echo $l->t('Android Release Candidate client on Play store');?></a> and <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID_BETA; ?>"><i class="fa-android"></i> <?php echo $l->t('Android Beta client on F-Droid');?></a>. <?php echo $l->t('For iOS');?>, <a target="_blank" class="hyperlink" href="https://testflight.apple.com/join/GjNbfo2a"><i class="fa-apple"></i> <?php echo $l->t('join Testflight for iOS');?></a></p></p>


		<?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
			<h4><?php echo $l->t('Desktop Clients Testing ');?> <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h4>
			<p><?php echo $l->t('Please report any issues to the');?> <a class="hyperlink" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" target="_blank"><?php echo $l->t('issue tracker.');?></a></p>
			<!--<p><?php echo $l->t('You can check the authenticity of the sources using this <a class="hyperlink" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP signature</a>.');?></p>-->
			<div class="btn-group">
				<?php if(!empty($DOWNLOAD_CLIENT_DESKTOP_TEST_WIN)) { ?>
					<a class="button button--white button--small" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>"><i class="fa-windows"></i> Windows</a>
				<?php } ?></p>
				<?php if(!empty($DOWNLOAD_CLIENT_DESKTOP_TEST_MAC)) { ?>
					<a class="button button--white button--small" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>"><i class="fa-apple"></i> macOS</a>
				 <?php } ?></p>
				 <?php if(!empty($DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX)) { ?>
					<a class="button button--white button--small" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>"><i class="fa-linux"></i> Linux</a>
				<?php } ?></p>
			</div>
	<?php } ?></p>
		<p><a class="hyperlink" href="<?php echo home_url('contribute') ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('The Nextcloud Contribute Page');?>"><?php echo $l->t('More ways to get involved!');?></a></p>

	</div>
</div>
<?php require get_template_directory().'/install-instructions-server.php'; ?>
<?php require get_template_directory().'/install-instructions-clients.php'; ?>
<?php require get_template_directory().'/overlay.php'; ?>
</div>
</section>
