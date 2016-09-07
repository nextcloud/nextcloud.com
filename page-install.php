<div class="page-header">
  <h1>Get Started!</h1>
</div>
<hr class="wide"></hr>
<div class="row">
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-download"></i>
		</div>
		<h2>1. Get Nextcloud Server</h2>
		<p>Set up a server for yourself, use our appliances or find a provider:</p>
		<div class="btn-group">
			<a class="btn btn-default btn-large" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">Download</a>
			<a class="btn btn-default btn-large" href="/providers">Providers</a>
		</div>
		<br />
		<a class="label label-blue" role="button" href="#instructions-server" rel="tooltip" title="Install instructions" id="server" data-toggle="popover">More options</a></p>
<!--       <a class="btn btn-default btn-lg" role="button" href="/hardware-TBD">Servers</a> - disabled for now, until we have a page like that... -->
      <!--<a class="btn btn-default btn-lg" role="button" href="/providers" rel="tooltip" title="Third Party Nextcloud Providers">Providers</a>-->
	</div>
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-refresh"></i>
		</div>
		<h2>2. Sync your data</h2>
		<p>Connect to your Nextcloud with our clients:</p>
		<div class="btn-group">
			<a class="btn btn-default btn-large" href="#install-clients" rel="tooltip" id="desktop" data-toggle="popover" title="Desktop Clients">Desktop Clients</a> 
			<a class="btn btn-default btn-large" href="#install-clients" rel="tooltip" id="mobile" data-toggle="popover" title="Mobile Clients">Mobile Clients</a>
	</div>
	</div>
  <!--<div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">3</div>
    <h3><i class="icon-globe"></i> Extend your cloud</h3>
    <p>Browse hundreds of free apps and connect services you use to Nextcloud:</p>
     <div class="btn-group">
        <a class="btn btn-default btn-lg" role="button" href="https://apps.nextcloud.com" target="_blank" rel="tooltip" title="The Nextcloud Appstore">Nextcloud Apps</a>
        <a class="btn btn-default btn-lg" role="button" href="https://github.com/nextcloud/core/wiki/Apps" target="_blank" rel="tooltip" title="3rd Party App List on the Nextcloud Wiki">3rd Party Apps</a>
      </div>
  </div>-->
	<div class="col-md-4">
		<div class="numbadge centre">
			<i class="icon-book"></i>
		</div>
		<h2>3. Read the documentation</h2>
		<p>Here you can find our manuals:</p>
		<ul>
			<li><a href="<?php echo $DOCUMENTATION_USER; ?>" target="_blank" rel="tooltip" title="End User Documentation">Users</a></li>
			<li><a href="<?php echo $DOCUMENTATION_ADMIN; ?>" target="_blank" rel="tooltip" title="Nextcloud administrator Documentation">Admins</a></li>
			<li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="Nextcloud Developer Documentation">Developers</a></li>
			<li> <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker/" target="_blank" rel="tooltip" title="Information for Testers">Testers</a></li>
		</ul>
<!--     <p>If you have other questions about Nextcloud, read our <a href="/faq" target="_blank" rel="tooltip" title="Most Frequently Asked Questions and Answers">Nextcloud FAQ</a>.</p> -->
	</div>
</div>
<br />
<br />

<!--   <h1>Get more out of Nextcloud!</h1> -->
  
<hr class="wide"></hr>
<div class="row">
	<div class="col-md-4 col-md-offset-1">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-comment"></i>
		</div>
		<h2>Need help?</h2>
		<p>Discuss using, installing or maintaining Nextcloud in our support channels.
		<ul>
			<li><a href="http://help.nextcloud.com" target="_blank" rel="tooltip" title="The Nextcloud User Forums">Forum</a></li>
			<li><a href="irc://#nextcloud@freenode.net" target="_blank" rel="tooltip" title="The Nextcloud IRC Channel">IRC Channel</a> (<a href="http://webchat.freenode.net/?channels=nextcloud" target="_blank"  rel="tooltip" title="Web interface to the Nextcloud IRC Channel">Webchat</a>)</li>
		</ul>
		These consist of users helping each other. Consider helping out others, too! <a href="/enterprise">Need enterprise support?</a></p>
		<!--     <p>Find <a href="/support" target="_blank" rel="tooltip" title="An overview of where to find help">more support resources here</a>.</p> -->
	</div>
	<a name="testing"></a>
	<div class="col-md-4 col-md-offset-2">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-rocket"></i>
		</div>
		<h2>Get Involved</h2>
		<p>If you want to help out with <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="Developer Documentation">developing</a> and <!--<a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>testing/index.html" target="_blank"  rel="tooltip" title="Testing Documentation">-->testing<!--</a>-->, grab a daily build. Our <a href="https://github.com/nextcloud" target="_blank">Github project is here</a> and the <a href="https://github.com/nextcloud/server/issues" target="_blank">issue tracker for the server here</a>.</p>
		<p><a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i>  Daily build</a></p>
		<?php if(!empty($SERVER_TESTING_VERSION)) { ?>
			    <p>Latest testing version: <span class="label label-blue"><?php echo $SERVER_TESTING_VERSION; ?></span></p>
		<p>
		<?php if(!empty($DOWNLOAD_SERVER_ZIP_TESTING)) { ?>
			      <a href="<?php echo $DOWNLOAD_SERVER_ZIP_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> zip</a>
		<?php } ?>
		<?php if(!empty($DOWNLOAD_SERVER_TAR_TESTING)) { ?>
			<a href="<?php echo $DOWNLOAD_SERVER_TAR_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> tar.bz2</a>
		<?php } ?>
		<?php } ?>
		<?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
			<h4>Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h4>
			<p>Please report any issues to the <a href="https://github.com/nextcloud/client_theming" target="_blank">issue tracker</a>.</p>
			<!--<p>You can check the authenticity of the sources using this <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP signature</a>.</p>-->
			<div class="btn-group">
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
			</div>
		    <div class="btn-group">
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
				<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
			</div>
		<?php } ?></p>
		<p>See more <a href="/contribute" target="_blank" rel="tooltip" title="The Nextcloud Contribute Page">ways to get involved</a>!</p>
		
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
