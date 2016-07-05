<style type="text/css">
      ul.tabs { padding: 5px 0 0 5px; }
      ul.tabs li { float: left; list-style: none; margin-left: 5px; padding-left: 0; }
      .overlay-header, .overlay-footer { padding: 8px; }
</style>
<div class="installers">
	<div id="instructions-server" class="container row PopupGetStarted">
		<div class="instructions">
<!-- 			<div class="row"> -->
				<!--<ul class="nav nav-tabs" role="tablist">
					<li id="li-tab-archive" class="active"><a href="#tab-archive" title="For server owners" role="tab" data-toggle="tab"><i class="icon-archive"></i> Archive File<br><small>For server owners</small></a></li>
					<li><a href="#tab-web" title="Best for shared hosts" role="tab" data-toggle="tab"><i class="icon-code"></i> Web Installer<br><small>For shared hosts</small></a></li>
					<li id="li-tab-packages"><a href="#tab-packages" title="Provides automated updates" role="tab" data-toggle="tab"><i class="icon-linux"></i> Packages<br><small>For auto updates</small></a></li>
					<li><a href="#tab-cloud" title="Provides automated updates" role="tab" data-toggle="tab"><i class="icon-cloud"></i> Appliances<br><small>For easy deployment</small></a></li>
				</ul>-->
<!-- 			</div> -->
<!-- 			<br> -->
			<div class="overlay-header row">
				<a href="#" class="close">&times;</a>
				<p>Latest stable version:  <span class="label label-blue"><?php echo $VERSIONS_SERVER_FULL_STABLE; ?></span> <!--(<a href="/changelog"><small>Changelog</small></a>)--></br>
				<p>Nextcloud Server supports Linux (like) operating systems<!--, and is available via packages, sources, appliances or a one file php installer-->.</p>
			</div>
			<div  class="tab-content">
				<div id="tab-archive" role="tabpanel" class="tab-pane active">
					<div class="overlay-body row">
						<div class="col-md-6">
<!-- 							<p>The <strong>archive</strong> provides the server and all immediate 3rd party PHP libraries.</p> -->
							<ol>
								<li>Download <a class="label label-blue" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>">.tar.bz2</a> or <a class="label label-blue" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">.zip</a> archive.</li>
								<li>Check package integrity using MD5 (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_MD5; ?>">.tar.bz2</a> / <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_MD5; ?>">.zip</a>) or SHA256 (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_SHA256; ?>">.tar.bz2</a> / <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_SHA256; ?>">.zip</a>)</li>
								<li>Verify the authenticity via PGP (<a target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_PGP; ?>">.tar.bz2 </a>/<a target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_PGP ?>">.zip</a>). The Nextcloud GPG key <a target="_blank" href="<?php echo $NEXTCLOUD_GPG ; ?>">is here</a>.</li>
								<li>Follow the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation">Nextcloud Admin Manuals’</a> installation chapter.</br>
								If you already run Nextcloud, refer to the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/update.html">update documentation</a> for minor releases and the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/upgrade.html">upgrade manual</a> for moving to major new Nextcloud releases</li>
							</ol>
							<p><strong>Security note:</strong></br>To receive information about updates and security issues, we recommend a subscription to our low-traffic <a href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a>.</p>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
							</div>
								<!--<p><strong>Note:</strong></br> If you run Nextcloud on Linux, <a id="packages" href="#tab-packages" title="Provides automated updates" role="tab" data-toggle="tab">using packages</a> is recommended.</p>-->
								<!--<p>Looking for <a href="/changelog">older versions or major releases</a>?</p>
								<p><small>Nextcloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the Nextcloud Appliance</a> on Windows Server.</small></p>-->
							</div>
						</div>
					</div>
					<div id="tab-web" role="tabpanel" class="tab-pane">
						<div class="overlay-body row">
							<div class="col-md-6">
								<p>The <strong>Web Installer</strong> is the easiest way to install Nextcloud on a web space. It checks the dependencies, downloads Nextcloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the Nextcloud installer.</p>
								<ol>
									<li>Right-click <a href="https://download.nextcloud.com/download/community/setup-nextcloud.php">here</a> and save the file to your computer</li>
									<li>Upload <tt>setup-nextcloud.php</tt> to your web space</li>
									<li>Point your web browser to <tt>setup-nextcloud.php</tt> on your webspace</li>
									<li>Follow the instructions and configure Nextcloud</li>
									<li>Login to your newly created Nextcloud instance!</li>
								</ol>
								<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>">Nextcloud Admin Manual</a>.</p>
								<p><strong>Note</strong> that the installer uses the same Nextcloud version as available for the built in updater in Nextcloud. After a major release it can take up to a month before it becomes available through the web installer and the updater. This is done to spread the deployment of new major releases out over time.</p>
							</div>
							<div class="col-md-6">
								<div class="thumbnail">
									<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
								</div>
									<p><strong>Security note:</strong></br> Once the setup is done, the Nextcloud installer will remove itself automatically. We recommend a subscription to our low-traffic <a href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a> for notifications on updates and security issues. Find here the public Nextcloud <a href="<?php echo $NEXTCLOUD_GPG; ?>">GPG key</a>.</p>
									<p><small>Nextcloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the Nextcloud Appliance</a> on Windows Server.</small></p>
								</div>
							</div>
						</div>
						<div id="tab-packages" role="tabpanel" class="tab-pane">
							<div class="overlay-body row">
								<div class="col-md-6">
									<p>Nextcloud provides ready-to-deploy <strong>packages</strong> for popular Linux distributions such as Debian, Ubuntu, Fedora, RedHat Enterprise Linux, CentOS and openSUSE.</p>
									<p>Clicking on “Continue” will forward you to the Nextcloud download page, which hosts the repositories for all distributions. Further instructions on how to install Nextcloud for your distribution are also provided there. Here is the <a href="<?php echo get_template_directory_uri(); ?>/assets/files/obs-release-signing.gpg">key used to sign our packages</a>.</p>
									<p>The repositories allow you to stay on an up-to-date version of Nextcloud using your distributions’ update mechanism, with packages maintained by the Nextcloud community.</p>
									<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>">Nextcloud Admin Manual</a>.</br>
									If you already run Nextcloud, refer to the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/upgrade.html">upgrade manual</a> for moving to new Nextcloud releases.</p>
										<br/><a class="btn btn-primary" href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>">Continue</a></br></br>
								</div>
								<div class="col-md-6">
									<div class="thumbnail">
										<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
									</div>
										<p><strong>Security note:</strong></br> We recommend a subscription to our low-traffic <a href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a> for notifications on updates and security issues. Find the <a href="<?php echo $NEXTCLOUD_GPG; ?>">public Nextcloud GPG key here</a>.</p>
										<p>Looking for repositories of <a href="/changelog">previous major releases</a>?</p>
										<p><small>Nextcloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the Nextcloud Appliance</a> on Windows Server.</small></p>
									</div>
								</div>
							</div>
							<div id="tab-cloud" role="tabpanel" class="tab-pane">
								<div class="overlay-body row">
									<div class="col-md-8">
										<p>Nextcloud provides an official appliance as the easiest way to get Nextcloud up and running for non-technical users. It is built on Ubuntu Linux and fully set up and configured with a secure connection and the <a href="/connect">Nextcloud Proxy app</a>. You can install <a href="https://www.virtualbox.org/">virtual box</a>, download our <a href="<?php echo $DOWNLOAD_VM_OVA; ?>">OVA</a> file and load it up. See our <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation/appliance_installation.html">documentation for more details</a>.</p>
										<p><strong>NOTE</strong>: the appliances have been updated to the <a href="https://nextcloud.org/blog/nextcloud-server-9-0-released/">freshly released Nextcloud 9.0</a> but have only gone through absolutely minimal testing. It is recommended to not use these for important data yet - giving them a trial run however and giving us feedback is greatly appreciated!</p>
										<h4>Grab the official Nextcloud virtual machine image in one of these formats:</h4>
										<a class="btn btn-primary" href="<?php echo $DOWNLOAD_VM_OVA; ?>">OVA</a> <a class="btn btn-primary" href="<?php echo $DOWNLOAD_VM_QCOW2; ?>">QCOW2</a> <a class="btn btn-primary" href="<?php echo $DOWNLOAD_VM_RAW; ?>">raw</a> <a class="btn btn-primary" href="<?php echo $DOWNLOAD_VM_VHDX; ?>">VHDX</a> <a class="btn btn-primary" href="<?php echo $DOWNLOAD_VM_VMDK; ?>">VMDK</a> <a class="btn btn-primary" href="<?php echo $DOWNLOAD_VM_VMX; ?>">VMX</a>
										
										<h4>Third party Nextcloud VM images</h4>
										<p>These are not maintained by the Nextcloud community itself.</p>
										<div class="row">
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://susestudio.com/a/TadMax/nextcloud-in-a-box"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/susestudio.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													Nextcloud-in-a-box offers live USB stick, liveCD and preload ISO images as well a wide variety of VM images.
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://www.collaboraoffice.com/code/"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/code.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													Collabora offers a VM with Collabora Online Development Edition, LibreOffice Online and Nextcloud.
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://bitnami.com/stack/nextcloud"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/bitnami.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													Offers direct deployment to Google/Amazon/Microsoft clouds, Docker and VM images and installers.
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://jujucharms.com/nextcloud/"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/juju.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													This charm installs Apache2 and configures Nextcloud with SQLite as a standalone server on an Ubuntu system.
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://www.techandme.se/nextcloud_/pre-configured-nextcloud-installaton/"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/en0ch.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													<a href="https://www.techandme.se/machine-setup-nextcloud/" target="_blank">Pre-configured Ubuntu 16.04 VM with PHP 7, Apache and MySQL</a>. Manages updates with script, can be automated.
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="thumbnail">
											<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
										</div>
										<p><strong>Security note:</strong></br> These images do not all offer automatic update technology. We recommend a subscription to our low-traffic <a href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a> for notifications on updates and security issues. Find here the public Nextcloud <a href="<?php echo $NEXTCLOUD_GPG; ?>">GPG key</a>.</p>
									</div>
								</div>
							</div>
						</div>
						<!--<div class="overlay-footer row">
							<p>We offer <a href="/release-channels">Release Channels</a> to track specific branches like Beta's or older stable branches. Find <a href="/install/#testing-development">development packages for testing here</a>.</p>
						</div>-->
					</div>
	</div>
<!--         </div> -->
<!--  Mask instructions server -->
<a href="#" class="mask"></a>
</div>

<div class="installers">
	<div id="install-clients" class="container row PopupGetStarted">
		<div class="instructions">
			<div class="row">
					<a href="#" class="close">&times;</a>
				<ul class="nav nav-tabs" role="tablist">
					<li id="li-tab-desktop" class="active"><a href="#tab-desktop" class="btn btn-lg" title="Install Desktop Clients" role="tab" data-toggle="tab"><i class="icon-archive"></i> Install Desktop Clients</a></li>
					<li id="li-tab-mobile"><a href="#tab-mobile" class="btn btn-lg" title="Install Mobile Apps" role="tab" data-toggle="tab"><i class="icon-code"></i> Install Mobile Apps</a></li>
				</ul>
			</div>
			<div  class="tab-content">
				<div id="tab-desktop" role="tabpanel" class="tab-pane active">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p>Latest stable version: <?php echo $VERSIONS_CLIENT_DESKTOP_STABLE_FULL; ?>&nbsp;&nbsp;(<a href="/changelog/desktop"><small>Changelog</small></a>)</p>
							<p>Use the desktop clients to keep your files synchronized between your Nextcloud server and your desktop. Select one or more directories on your local machine and always have access to your latest files wherever you are. As the clients are compatible, below simply links to the ownCloud™ client.</p>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN; ?>" id="client-download-win" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows<br /><small>7, 8.x and 10</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC; ?>" id="client-download-mac" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac<br /><small>OSX 10.7+, 64 bit</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX; ?>" id="client-download-linux" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux<br /><small>Multiple distributions</small></a>
							<br><br>
							<p>Looking for the <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES; ?>">Sources</a>? <!--(<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP; ?>">PGP signature</a>) or <a href="/changelog/desktop">older versions</a>?--> For more information on the sync client, check out the <a target="_blank" href="<?php echo $DOCUMENTATION_CLIENT_DESKTOP; ?>/">documentation</a>.</p>
							<p><small>All product names and trademarks are the property of their respective owners, which are in no way associated or affiliated with Nextcloud</small></p>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/macsettings.png" alt="Desktop Client" />
							</div>
						</div>
					</div>
				</div>
				<div id="tab-mobile" role="tabpanel" class="tab-pane">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p>The Nextcloud mobile apps are available in various app stores.</p>
							<p>The apps allow you to access, sync and upload your data and feature instant upload for fotos and videos, upload management and more features.</p>
							<br />
							<div class="row">
								<div class="col-xs-6">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png"><br /><a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID_BETA; ?>">Beta client</a>
									</a>
								</div>
								<div class="col-xs-6">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/fdroid.png"></a><br /><a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID_BETA; ?>">Beta client</a>
								</div>
								<div class="col-xs-6 mobileclientbuttons">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png">
									</a>
								</div>
							<!--<a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_BLACKBERRY; ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/blackberry.png">
							</a>-->
							</div>
							<p><a href="https://github.com/nextcloud/android">Sources here</a>, <a href="https://download.nextcloud.com/android">direct APK download here</a>.</p>
							<p>Any WebDAV client will work with Nextcloud!</p>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/android.gif" alt="Nextcloud Mobile Client" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--  Mask instructions server -->
	<a href="#" class="mask"></a>
</div>

<div class="installers">
      <div id="testing-development" class="container row PopupGetStarted">
          <div class="instructions">
                <div class="row">
                    <a href="#" class="close">&times;</a>
                    <h3>Help with testing and development</h3>
                </div>
		<div class="row">
		  <div class="col-md-6">
		    <a name="testing"></a>
		    <p>Our server is in constant development and help is always needed in testing the latest bugfixes and features. Please report any issues to the <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/bugtracker/" target="_blank">tracker</a>.</p>
		    <h4>Nextcloud Server <small>Daily build</small></h4>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i>  Archive File</a>
		      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a>
		    </div>
		    <h5>Beta and RC builds</h5>
		    <?php if(!empty($SERVER_TESTING_VERSION)) { ?>
			    <p>Latest testing version: <span class="label label-blue"><?php echo $SERVER_TESTING_VERSION; ?></span></p>
		    <?php } ?>
		    <div class="btn-group">
		    
		    <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a>
		    <?php if(!empty($DOWNLOAD_SERVER_ZIP_TESTING)) { ?>
			      <a href="<?php echo $DOWNLOAD_SERVER_ZIP_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> zip</a>
		    <?php } ?>
		    <?php if(!empty($DOWNLOAD_SERVER_TAR_TESTING)) { ?>
			      <a href="<?php echo $DOWNLOAD_SERVER_TAR_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> tar.bz2</a>
		    <?php } ?>
		    </div>
		    <?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
		    <h4>Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h4>
 		    <p>Our desktop team provides regular pre-releases. Please report any issues to the <a href="https://github.com/nextcloud/mirall/issues" target="_blank">tracker</a>.</p>
		    <p>You can check the authenticity of the sources using this <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP signature</a>.</p>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
		    </div>
		    <?php } ?>
		  </div>
		  <div class="col-md-6">
		    <div class="thumbnail">
		      <img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/codebasephp.png" alt="Nextcloud Code" />
		    </div>
		    <?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
		    <br /><br />
 		    <p>For those who prefer to install the test version next to the stable Nextcloud version, we offer the "Testpilot" edition of the client, which will install in parallel to the original client:</p>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_WIN; ?>" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_MAC; ?>" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_LINUX; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
		    </div>
		    <?php } ?>
		  </div>
		</div>
		<div class="overlay-body row">
		  <div class="col-md-12">
		    <p>Find our GPG key at <a target="_blank" href="<?php echo $NEXTCLOUD_GPG; ?>"><?php echo $NEXTCLOUD_GPG; ?></a></p>
		  </div>
		</div>
	  </div>
      </div>
        <!--  Mask instructions server -->
   <a href="#" class="mask"></a>
</div>
<script>
    $('#packages').click(function () {
        $("#tab-archive").removeClass("active");
        $("#tab-packages").addClass("active");
        $("#li-tab-archive").removeClass("active");
        $("#li-tab-packages").addClass("active");
    });
</script>
<script type="text/javascript">
	$(function() {
		if (navigator.appVersion.indexOf("Win")!=-1) {
			var e = document.getElementById("client-download-win");
			e.className += ' btn-primary';
		} else if(navigator.appVersion.indexOf("Mac")!=-1) {
			var e = document.getElementById("client-download-mac");
			e.className += " btn-primary";
		} else if (navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
			var e = document.getElementById("client-download-linux");
			e.className += ' btn-primary';
		}
	});
</script>
