<div class="page-header">
  <h1><?php echo $l->t('Get Started!');?></h1>
</div>
<hr class="wide"></hr>
<div class="row">
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-download"></i>
		</div>
		<h2><?php echo $l->t('Get Nextcloud Server');?></h2>
		<p><?php echo $l->t('There are several ways to get your own Nextcloud for you and your data:');?></p>
		<div class="btn-group">
			<a class="btn btn-primary btn-large" href="#instructions-server">Download</a>
			<a class="btn btn-default btn-large" href="/devices">Devices</a>
			<a class="btn btn-default btn-large" href="/providers">Providers</a>
		</div>
	</div>
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-refresh"></i>
		</div>
		<h2><?php echo $l->t('Sync your data');?></h2>
		<p><?php echo $l->t('Connect to your Nextcloud with our clients for all your devices:');?></p>
		<div class="btn-group">
			<a class="btn btn-default btn-large" href="#install-clients" rel="tooltip" id="desktop" data-toggle="popover" title="Desktop Clients">Desktop Clients</a>
			<a class="btn btn-default btn-large" href="#install-clients" rel="tooltip" id="mobile" data-toggle="popover" title="Mobile Clients">Mobile Clients</a>
		</div>
	</div>
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-cloud"></i>
		</div>
		<h2><?php echo $l->t('Extend your cloud');?></h2>
		<p><?php echo $l->t('Browse dozens of free apps and services you could use with your Nextcloud:');?></p>
		<div class="btn-group">
			<a class="btn btn-default btn-large" role="button" href="https://apps.nextcloud.com" target="_blank" rel="tooltip" title="App Store">App Store</a>
		</div>
	</div>
</div>
<br />
<br />


<hr class="wide"></hr>
<div class="row">
	<div class="col-md-4">
		<div class="numbadge centre">
			<i class="icon-book"></i>
		</div>
		<h2><?php echo $l->t('Read the documentation');?></h2>
		<p><?php echo $l->t('Here you can find our manuals:');?></p>
		<ul>
			<li><a href="<?php echo $DOCUMENTATION_USER; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('End User Documentation">Users</a>');?></li>
			<li><a href="<?php echo $DOCUMENTATION_ADMIN; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud administrator Documentation">Admins</a>');?></li>
			<li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud Developer Documentation">Developers</a>');?></li>
			<li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker/" target="_blank" rel="tooltip" title="<?php echo $l->t('Information for Testers">Testers</a>');?></li>
		</ul>
	</div>
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-comment"></i>
		</div>
		<h2><?php echo $l->t('Need help?');?></h2>
		<p><?php echo $l->t('Discuss using, installing or maintaining Nextcloud in our support channels.');?></p>
		<ul>
			<li><?php echo $l->t('<a href="http://help.nextcloud.com" target="_blank" rel="tooltip" title=" Nextcloud User Forums">The Forum</a>');?></li>
			<li><?php echo $l->t('<a href="irc://#nextcloud@freenode.net" target="_blank" rel="tooltip" title="The Nextcloud IRC Channel">IRC Channel</a> (<a href="http://webchat.freenode.net/?channels=nextcloud" target="_blank"  rel="tooltip" title="Web interface to the Nextcloud IRC Channel">Webchat</a>)');?></li>
		</ul>
		<p><?php echo $l->t('These consist of users helping each other. Consider helping out others, too!');?><br />
		<?php echo $l->t('<a href="/enterprise">Need enterprise support?</a>');?></p>
	</div>
	<a name="testing"></a>
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-rocket"></i>
		</div>
		<h2><?php echo $l->t('Get Involved');?></h2>
		<p><?php echo $l->t('If you want to help out with');?> <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Developer Documentation">developing</a> and testing, grab a daily build. Our <a href="https://github.com/nextcloud" target="_blank">GitHub project is here</a> and the <a href="https://github.com/nextcloud/server/issues" target="_blank">issue tracker for the server here</a>.');?></p>
		<p><a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-default btn-large"><i class="icon-archive"></i>  <?php echo $l->t('Daily build');?></a></p>
		<p><?php echo $l->t('Help test our clients:');?> <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID_BETA; ?>"><?php echo $l->t('Android Release Candidate client on Play store');?></a> and <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID_BETA; ?>"><?php echo $l->t('Android Beta client on F-Droid');?></a></p>
		<?php if(!empty($SERVER_TESTING_VERSION)) { ?>
		<p><?php echo $l->t('Latest testing version:');?> <span class="label label-blue"><?php echo $SERVER_TESTING_VERSION; ?></span></p>
		<p>
		<?php if(!empty($DOWNLOAD_SERVER_ZIP_TESTING)) { ?>
			      <a href="<?php echo $DOWNLOAD_SERVER_ZIP_TESTING; ?>" class="btn btn-default btn-large"><i class="icon-archive"></i> zip</a>
		<?php } ?>
		<?php if(!empty($DOWNLOAD_SERVER_TAR_TESTING)) { ?>
			<a href="<?php echo $DOWNLOAD_SERVER_TAR_TESTING; ?>" class="btn btn-default btn-large"><i class="icon-archive"></i> tar.bz2</a>
		<?php } ?>
		<?php } ?>
		<?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
			<h4><?php echo $l->t('Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small>');?></h4>
			<p><?php echo $l->t('Please report any issues to the <a href="https://github.com/nextcloud/client_theming" target="_blank">issue tracker</a>.');?></p>
			<!--<p><?php echo $l->t('You can check the authenticity of the sources using this <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP signature</a>.');?></p>-->
			<div class="btn-group">
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>" class="btn btn-default btn-large"><i class="icon-windows"></i>  Windows</a>
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>" class="btn btn-default btn-large"><i class="icon-apple"></i> Mac</a>
                <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>" class="btn btn-default btn-large"><i class="icon-linux"></i> Linux</a>
                <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-default btn-large"><i class="icon-archive"></i> Sources</a>
		<?php } ?></p>
		<p><?php echo $l->t('<a href="/contribute" target="_blank" rel="tooltip" title="The Nextcloud Contribute Page">See more ways to get involved</a>!');?></p>

	</div>
</div>
<?php require get_template_directory().'/install-instructions.php'; ?>
<script>
    $('#mobile').click(function () {
        $("#tab-desktop").removeClass("active");
        $("#tab-mobile").addClass("active");
        $("#li-tab-desktop").removeClass("active");
        $("#li-tab-mobile").addClass("active");    });
    $('#desktop').click(function () {
        $("#tab-mobile").removeClass("active");
        $("#tab-desktop").addClass("active");
        $("#li-tab-mobile").removeClass("active");
        $("#li-tab-desktop").addClass("active");
    });
</script>
