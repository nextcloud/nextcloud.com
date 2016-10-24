<div class="page-header">
  <h1><?php echo $l->t('Get Started!');?></h1>
</div>
<hr class="wide"></hr>
<div class="row">
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-download"></i>
		</div>
		<h2><?php echo $l->t('1. Get Nextcloud Server');?></h2>
		<p><?php echo $l->t('There are several ways to get your own Nextcloud for you and your data:');?></p>
		<div class="btn-group">
			<a class="btn btn-default btn-large" href="#instructions-server">Download</a>
			<a class="btn btn-default btn-large" href="/devices">Devices</a>
			<a class="btn btn-default btn-large" href="/providers">Providers</a>
		</div>
		<br />
<!--       <a class="btn btn-default btn-lg" role="button" href="/hardware-TBD">Servers</a> - disabled for now, until we have a page like that... -->
      <!--<a class="btn btn-default btn-lg" role="button" href="/providers" rel="tooltip" title="Third Party Nextcloud Providers">Providers</a>-->
	</div>
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-refresh"></i>
		</div>
		<h2><?php echo $l->t('2. Sync your data');?></h2>
		<p><?php echo $l->t('Connect to your Nextcloud with our clients for all your devices:');?></p>
		<div class="btn-group">
			<a class="btn btn-default btn-large" href="#install-clients" rel="tooltip" id="desktop" data-toggle="popover" title="Desktop Clients">Desktop Clients</a> 
			<a class="btn btn-default btn-large" href="#install-clients" rel="tooltip" id="mobile" data-toggle="popover" title="Mobile Clients">Mobile Clients</a>
	</div>
	</div>
  <!--<div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">3</div>
    <h3><i class="icon-globe"></i> <?php echo $l->t('Extend your cloud');?></h3>
    <p><?php echo $l->t('Browse hundreds of free apps and connect services you use to Nextcloud:');?></p>
     <div class="btn-group">
        <a class="btn btn-default btn-lg" role="button" href="https://apps.nextcloud.com" target="_blank" rel="tooltip" title="The Nextcloud Appstore">Nextcloud Apps</a>
        <a class="btn btn-default btn-lg" role="button" href="https://github.com/nextcloud/core/wiki/Apps" target="_blank" rel="tooltip" title="3rd Party App List on the Nextcloud Wiki">3rd Party Apps</a>
      </div>
  </div>-->
	<div class="col-md-4">
		<div class="numbadge centre">
			<i class="icon-book"></i>
		</div>
		<h2><?php echo $l->t('3. Read the documentation');?></h2>
		<p><?php echo $l->t('Here you can find our manuals:');?></p>
		<ul>
			<li><a href="<?php echo $DOCUMENTATION_USER; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('End User Documentation">Users');?></a></li>
			<li><a href="<?php echo $DOCUMENTATION_ADMIN; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud administrator Documentation">Admins');?></a></li>
			<li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud Developer Documentation">Developers');?></a></li>
			<li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker/" target="_blank" rel="tooltip" title="<?php echo $l->t('Information for Testers">Testers');?></a></li>
		</ul>
	</div>
</div>
<br />
<br />

  
<hr class="wide"></hr>
<div class="row">
	<div class="col-md-4 col-md-offset-1">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-comment"></i>
		</div>
		<h2><?php echo $l->t('Need help?');?></h2>
		<p><?php echo $l->t('Discuss using, installing or maintaining Nextcloud in our support channels.');?></p>
		<ul>
			<li><a href="http://help.nextcloud.com" target="_blank" rel="tooltip" title="<?php echo $l->t('The Nextcloud User Forums">Forum</a>');?></li>
			<li><a href="irc://#nextcloud@freenode.net" target="_blank" rel="tooltip" title="<?php echo $l->t('The Nextcloud IRC Channel">IRC Channel</a> (<a href="http://webchat.freenode.net/?channels=nextcloud" target="_blank"  rel="tooltip" title="Web interface to the Nextcloud IRC Channel">Webchat</a>)');?></li>
		</ul>
		<p><?php echo $l->t('These consist of users helping each other. Consider helping out others, too! <a href="/enterprise">Need enterprise support?</a>');?></p>
		<!--     <p><?php echo $l->t('Find <a href="/support" target="_blank" rel="tooltip" title="An overview of where to find help">more support resources here</a>.');?></p> -->
	</div>
	<a name="testing"></a>
	<div class="col-md-4 col-md-offset-2">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-rocket"></i>
		</div>
		<h2><?php echo $l->t('Get Involved');?></h2>
		<p><?php echo $l->t('If you want to help out with');?> <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="<?php echo $l->t('Developer Documentation">developing</a> and testing, grab a daily build. Our <a href="https://github.com/nextcloud" target="_blank">GitHub project is here</a> and the <a href="https://github.com/nextcloud/server/issues" target="_blank">issue tracker for the server here</a>.');?></p>
		<p><a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i>  <?php echo $l->t('Daily build');?></a></p>
		<?php if(!empty($SERVER_TESTING_VERSION)) { ?>
			    <p><?php echo $l->t('Latest testing version');?>: <span class="label label-blue"><?php echo $SERVER_TESTING_VERSION; ?></span></p>
		<p>
		<?php if(!empty($DOWNLOAD_SERVER_ZIP_TESTING)) { ?>
			      <a href="<?php echo $DOWNLOAD_SERVER_ZIP_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> zip</a>
		<?php } ?>
		<?php if(!empty($DOWNLOAD_SERVER_TAR_TESTING)) { ?>
			<a href="<?php echo $DOWNLOAD_SERVER_TAR_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> tar.bz2</a>
		<?php } ?>
		<?php } ?>
		<?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
			<h4><?php echo $l->t('Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small>');?></h4>
			<p><?php echo $l->t('Please report any issues to the <a href="https://github.com/nextcloud/client_theming" target="_blank">issue tracker</a>.');?></p>
			<!--<p><?php echo $l->t('You can check the authenticity of the sources using this <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP signature</a>.');?></p>-->
			<div class="btn-group">
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
			</div>
		    <div class="btn-group">
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
			</div>
		<?php } ?></p>
		<p><?php echo $l->t('See more <a href="/contribute" target="_blank" rel="tooltip" title="The Nextcloud Contribute Page">ways to get involved</a>!');?></p>
		
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
