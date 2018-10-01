<div class="installers">
	<div id="instructions-server" class="container row PopupGetStarted">
		<div class="instructions">
			<a href="#" class="close">&times;</a>
			<div  class="tab-content">
				<div id="tab-archive" role="tabpanel" class="tab-pane active">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p><?php echo $l->t('The <strong>archive</strong> should be extracted in a folder your web server has access to. Latest stable version');?>:  <span class="label label-blue"><?php echo $VERSIONS_SERVER_FULL_STABLE; ?></span> (<a class="hyperlink" href="<?php echo home_url('changelog') ?>"><small><?php echo $l->t('Changelog');?></small></a>)</br>
							<div class="downloadbutton">
								<a class="btn btn-primary btn-large" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>"><?php echo $l->t('Download Nextcloud');?></a>
							</div>
							<p><?php echo $l->t('Follow the');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>installation"><?php echo $l->t('Nextcloud Admin Manuals</a> installation chapter.</br>
							If you already run Nextcloud, refer to the');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/upgrade.html"><?php echo $l->t('upgrade manual.');?></a><br/>
							<a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('Need enterprise support?</a>');?></p>

							<a class="btn btn-default" data-toggle="collapse" href="#more">Details and Download options</a>
							<div class="collapse" id="more">
							<ol>
								<li><?php echo $l->t('Download the');?> <a class="label label-blue" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>">.tar.bz2</a> <?php echo $l->t('or');?> <a class="label label-blue" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">.zip</a> <?php echo $l->t('archive.');?></li>
								<li><?php echo $l->t('Check package integrity using MD5');?> (<a class="hyperlink" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_MD5; ?>">.tar.bz2</a> / <a class="hyperlink"  href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_MD5; ?>">.zip</a>) <?php echo $l->t('or');?> SHA256 (<a class="hyperlink"  href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_SHA256; ?>">.tar.bz2</a> / <a class="hyperlink"  href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_SHA256; ?>">.zip</a>)</li>
								<li><?php echo $l->t('Verify the authenticity via PGP');?> (<a class="hyperlink" target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_PGP; ?>">.tar.bz2 </a>/<a class="hyperlink" target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_PGP ?>">.zip</a>). <?php echo $l->t('The Nextcloud GPG key');?> <a class="hyperlink" target="_blank" href="<?php echo $NEXTCLOUD_GPG ; ?>"><?php echo $l->t('is here');?></a>.</li>
							</ol>
							<p><?php echo $l->t('You can already find server packages included with many distributions or provided by active community members. Find an <a class="hyperlink" href="https://help.nextcloud.com/t/linux-packages-status/10216">overview of packages for various distributions as well as Docker and snap images here.</a> Can\'t find packages you need? Ask your distribution for packages or contribute to creating them!');?></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
							</div>
							<p><?php echo $l->t('Looking for');?> <a class="hyperlink" href="<?php echo home_url('changelog') ?>"><?php echo $l->t('older versions or major releases</a>?');?></p>
							<p><?php echo $l->t('<small>Nextcloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a class="hyperlink" href="#tab-cloud" title="Provides automated updates" role="tab" data-toggle="tab">a virtual machine or docker image</a> on Windows Server.</small>');?></p>
							<p><?php echo $l->t('<small><strong>Security note:</strong></br>To receive information about updates and security issues, we recommend a subscription to our low-traffic <a class="hyperlink" href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a>.</small>');?></p>
							<p><?php echo $l->t('<small><strong>Release channels:</strong></br>We offer');?> <a class="hyperlink" href="<?php echo home_url('release-channels') ?>"><?php echo $l->t('Release Channels</a> with production, stable, beta and daily-branches. This gives you the opportunity to choose your balance between stability and features.</small>');?></p>
						</div>
					</div>
				</div>
				<div id="tab-web" role="tabpanel" class="tab-pane">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p><?php echo $l->t('The <strong>Web Installer</strong> is the easiest way to install Nextcloud on a web space. It checks the dependencies, downloads Nextcloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the Nextcloud installer.');?></p>
							<ol>
								<li><?php echo $l->t('Right-click');?> <a class="hyperlink" href="<?php echo $DOWNLOAD_SERVER_WEB_INSTALLER; ?>"><?php echo $l->t('here');?></a> <?php echo $l->t('and save the file to your computer');?></li>
								<li><?php echo $l->t('Upload <tt>setup-nextcloud.php</tt> to your web space');?></li>
								<li><?php echo $l->t('Point your web browser to <tt>setup-nextcloud.php</tt> on your webspace');?></li>
								<li><?php echo $l->t('Follow the instructions and configure Nextcloud');?></li>
								<li><?php echo $l->t('Login to your newly created Nextcloud instance!');?></li>
							</ol>
							<p><?php echo $l->t('You can find further instructions in the');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>"><?php echo $l->t('Nextcloud Admin Manual');?></a>.</p>
							<p><?php echo $l->t('<strong>Note</strong> that the installer uses the same Nextcloud version as available for the built in updater in Nextcloud. After a major release it can take up to a month before it becomes available through the web installer and the updater. This is done to spread the deployment of new major releases out over time.');?></p>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
							</div>
							<p><?php echo $l->t('<small>Nextcloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a class="hyperlink" href="#tab-cloud" title="Provides automated updates" role="tab" data-toggle="tab">a virtual machine or docker image</a> on Windows Server.</small>');?></p>
							<p><?php echo $l->t('<small><strong>Security note:</strong></br>To receive information about updates and security issues, we recommend a subscription to our low-traffic <a class="hyperlink" href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a>.</small>');?></p>
							<p><?php echo $l->t('<small><strong>Release channels:</strong></br>We offer');?> <a class="hyperlink" href="<?php echo home_url('release-channels') ?>"><?php echo $l->t('Release Channels</a> with production, stable, beta and daily-branches. This gives you the opportunity to choose your balance between stability and features.</small>');?></p>
						</div>
					</div>
				</div>
				<div id="tab-packages" role="tabpanel" class="tab-pane">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p><?php echo $l->t('You can find further instructions in the');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>"><?php echo $l->t('Nextcloud Admin Manual');?></a>.</br>
							<?php echo $l->t('If you already run Nextcloud, refer to the');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/upgrade.html"><?php echo $l->t('upgrade manual</a> for moving to new Nextcloud releases.');?></p>
							<br/><a class="btn btn-primary" href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>">Continue</a></br></br>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
							</div>
							<p><?php echo $l->t('<strong>Security note:</strong></br> We recommend a subscription to our low-traffic <a class="hyperlink" href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a> for notifications on updates and security issues. Find the <a class="hyperlink" href="<?php echo $NEXTCLOUD_GPG; ?>">public Nextcloud GPG key here</a>.');?></p>
							<p><?php echo $l->t('Looking for repositories of');?> <a class="hyperlink" href="<?php echo home_url('changelog') ?>"><?php echo $l->t('previous major releases</a>?');?></p>
							<p><?php echo $l->t('<small>Nextcloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a class="hyperlink" id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the Nextcloud Appliance</a> on Windows Server.</small>');?></p>
						</div>
					</div>
				</div>
				<div id="tab-cloud" role="tabpanel" class="tab-pane">
					<div class="overlay-body row">
						<div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><?php echo $l->t('Home/SME appliance');?></h5>
                                    <p><?php echo $l->t('<a class="hyperlink" target="_blank" href="https://www.techandme.se/">Tech and Me</a> maintains a VM designed to be the easiest way for less technical users to get Nextcloud up and running. It builds on Ubuntu Linux and is fully set up and configured with a secure SSL/TLS connection.');?></p>
                                    <p><?php echo $l->t('<a class="btn btn-lg btn-primary" href="https://www.techandme.se/nextcloud-vm/">Get Home/SME appliance</a>');?></p>
                                    <p><?php echo $l->t('Find <a class="hyperlink" href="https://github.com/nextcloud/vm">source here</a>.');?></p>
                                </div>
                                <div class="col-md-6">
                                    <h5><?php echo $l->t('SME/Enterprise appliance');?></h5>
                                    <p><?php echo $l->t('Nextcloud GmbH maintains a free appliance built on the Univention Corporate Server (UCS) with easy graphical setup and web-based administration. It includes user management via LDAP as well as optional Collabora Online integration.');?></p>
                                    <p><?php echo $l->t('<a class="btn btn-lg btn-primary" href="https://www.univention.com/products/univention-app-center/app-catalog/nextcloud/">Get SME/Enterprise appliance</a>');?></p>
                                    <p><?php echo $l->t('Find <a class="hyperlink" href="https://github.com/nextcloud/univention-app">source here</a>.');?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><?php echo $l->t('Docker image');?></h5>
                                    <p><?php echo $l->t('Several Nextcloud community members maintain a Docker image. It supports a wide range of architectures and releases, features Apache/FPM, NGINX, various databases and more.');?></p>
                                    <p><?php echo $l->t('<a class="btn btn-lg btn-primary" href="https://hub.docker.com/_/nextcloud/">Get Docker image</a>');?></p>
                                    <p><?php echo $l->t('Find <a class="hyperlink" href="https://github.com/nextcloud/docker">source here</a>.');?></p>
                                </div>
                                <div class="col-md-6">
                                    <h5><?php echo $l->t('Snap package');?></h5>
                                    <p><?php echo $l->t('<a class="hyperlink" href="https://canonical.com">Canonical</a> and the Nextcloud community maintain a Nextcloud Snap, including release channels and quick and easy deployment for easy home use.');?></p>
                                    <p><?php echo $l->t('<a class="btn btn-lg btn-primary" href="https://uappexplorer.com/snap/ubuntu/nextcloud">Get Snap package</a>');?></p>
                                    <p><?php echo $l->t('Find <a class="hyperlink" href="https://github.com/nextcloud/nextcloud-snap">source here</a>.');?></p>
                                </div>
                            </div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail">
								<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/VMwelcome.png" alt="Nextcloud home user VM" />
							</div>
							<p><?php echo $l->t('<small><strong>Security note:</strong></br>To receive information about updates and security issues, we recommend a subscription to our low-traffic <a class="hyperlink" href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a>.</small>');?></p>
							<p><?php echo $l->t('<small><strong>Release channels:</strong></br>We offer');?> <a class="hyperlink" href="<?php echo home_url('release-channels') ?>"><?php echo $l->t('Release Channels</a> with production, stable, beta and daily-branches. This gives you the opportunity to choose your balance between stability and features.</small> Most of our Appliances support these release channels or let you fix on specific major versions.');?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="install-nav nav-tabs nav-tabs-bottom" role="tablist">
					<li id="li-tab-archive" class="active"><a href="#tab-archive" title="For server owners" role="tab" data-toggle="tab"><i class="icon-archive"></i> <?php echo $l->t('Archive File<br><small>For server owners');?></small></a></li>
					<li><a href="#tab-web" title="Best for shared hosts" role="tab" data-toggle="tab"><i class="icon-code"></i> <?php echo $l->t('Web Installer<br><small>For shared hosts');?></small></a></li>
					<li><a href="#tab-cloud" title="Provides automated updates" role="tab" data-toggle="tab"><i class="icon-cloud"></i> <?php echo $l->t('Appliances<br><small>For easy deployment');?></small></a></li>
				</ul>
			</div>
		</div>
	</div>
<!--  Mask instructions server -->
	<a href="#" class="mask"></a>
</div>


<div class="installers">
	<div id="install-clients" class="container row PopupGetStarted">
		<div class="instructions">
			<div class="row">
				<a href="#" class="close">&times;</a>
				<ul class="install-nav nav-tabs nav-tabs-bottom" role="tablist">
					<li id="li-tab-desktop" class="active"><a href="#tab-desktop" class="btn btn-lg" title="Install Desktop Clients" role="tab" data-toggle="tab"><i class="icon-archive"></i> <?php echo $l->t('Install Desktop Clients');?></a></li>
					<li id="li-tab-mobile"><a href="#tab-mobile" class="btn btn-lg" title="Install Mobile Apps" role="tab" data-toggle="tab"><i class="icon-code"></i> <?php echo $l->t('Install Mobile Apps');?></a></li>
				</ul>
			</div>
			<div  class="tab-content">
				<div id="tab-desktop" role="tabpanel" class="tab-pane active">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p><?php echo $l->t('Latest stable version:');?> <?php echo $VERSIONS_CLIENT_DESKTOP_STABLE_FULL; ?>&nbsp;&nbsp;</p>
							<p><?php echo $l->t('Use the desktop clients to keep your files synchronized between your Nextcloud server and your desktop. Select one or more directories on your local machine and always have access to your latest files wherever you are.');?></p>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN; ?>" id="client-download-win" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows<br /><small>7, 8.x and 10</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC; ?>" id="client-download-mac" class="btn btn-lg btn-default"><i class="icon-apple"></i> macOS<br /><small>10.10+, 64 bit</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX; ?>" id="client-download-linux" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux<br /><small>AppImage</small></a>
							<br><br>
							<p><?php echo $l->t('Looking for the');?> <a class="hyperlink" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES; ?>"><?php echo $l->t('Sources</a>?');?>
							<p><?php echo $l->t('You can already find Nextcloud Desktop client packages included in openSUSE Tumbleweed, Archlinux (AUR) and Fedora. You can find Ubuntu/Debian packages <a class="hyperlink" href="https://launchpad.net/~nextcloud-devs/+archive/ubuntu/client">in this PPA</a>. Packages for Alpine Linux <a class="hyperlink" href="http://pkgs.alpinelinux.org/packages?name=nextcloud-client">over here</a>. See the latest state and more packages <a class="hyperlink" href="https://help.nextcloud.com/t/linux-packages-status/10216">in this post on our forums.</a> Can\'t find packages? Ask your distribution or contribute to creating them!');?></p>
							<p><?php echo $l->t('Nextcloud is using WebDAV, so you can also try out any other client you want!');?></p>
							<p><?php echo $l->t('Compatible clients include:');?></p>
							<ul>
								<li><a class="hyperlink" href="<?php echo home_url('outlook') ?>">Outlook & Thunderbird integration</a> <?php echo $l->t('Sync your files, calendars, contacts and tasks with Outlook or Mozilla Thunderbird');?></li>
							</ul>
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
							<p><?php echo $l->t('The Nextcloud mobile apps are available in various app stores.');?></p>
							<p><?php echo $l->t('The apps allow you to access, sync and upload your data and feature instant upload for fotos and videos, upload management and more features.');?></p>
							<br />
							<div class="row">
								<div class="col-xs-6">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png"></a><br />
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID_BETA; ?>"><?php echo $l->t('Beta client');?></a>
								</div>
								<div class="col-xs-6">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/fdroid.png"></a><br />
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID_BETA; ?>"><?php echo $l->t('Beta client');?></a>
								</div>
								<div class="col-xs-6 mobileclientbuttons">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png">
									</a>
								</div>
							</div>
							<p> <a class="hyperlink" href="https://github.com/nextcloud/ios"><?php echo $l->t('Find iOS Sources here</a>, <a class="hyperlink" href="https://github.com/nextcloud/android">Android Sources here</a>, <a class="hyperlink" href="https://download.nextcloud.com/android">direct APK download here</a> and <a class="hyperlink" href="https://github.com/nextcloud/windows-uwp">Windows Mobile sources here</a>.');?></p>
							<div class="row">
								<div class="col-xs-6 mobileclientbuttons">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_WIN; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/windowsstore.png">
									</a>
								</div>
								<div class="col-xs-6">
									<p><?php echo $l->t('<strong>Note:</strong> The Windows app is still in testing, use at your own risk and <a class="hyperlink" href="https://github.com/nextcloud/windows-uwp/issues">let us know about your experience.</a>');?></p>
								</div>
							</div>
							<p><?php echo $l->t('Nextcloud is using WebDAV, so you can also try out any other client you want!');?></p>
							<p><?php echo $l->t('Compatible third party clients include:');?></p>
							<ul>
								<li><a class="hyperlink" href="https://davdroid.bitfire.at/">DAVDroid</a> <?php echo $l->t('supports Nextcloud Calendar, Tasks and Contacts, syncing your agenda, tasks and addressbook (android only, open source)');?></li>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android.gif" alt="Nextcloud Mobile Client" />
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
                    <h3><?php echo $l->t('Help with testing and development');?></h3>
                </div>
		<div class="row">
		  <div class="col-md-6">
		    <a name="testing"></a>
		    <p><?php echo $l->t('Our server is in constant development and help is always needed in testing the latest bugfixes and features. Please report any issues to the');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/bugtracker/" target="_blank">tracker</a>.</p>
		    <h4><?php echo $l->t('Nextcloud Server <small>Daily build</small>');?></h4>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i>  <?php echo $l->t('Archive File');?></a>
		    </div>
		    <h5><?php echo $l->t('Beta and RC builds');?></h5>
		    <?php if(!empty($SERVER_TESTING_VERSION)) { ?>
			    <p><?php echo $l->t('Latest testing version:');?> <span class="label label-blue"><?php echo $SERVER_TESTING_VERSION; ?></span></p>
		    <?php } ?>
		    <div class="btn-group">

		    <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> <?php echo $l->t('Linux Packages');?></a>
		    <?php if(!empty($DOWNLOAD_SERVER_ZIP_TESTING)) { ?>
			      <a href="<?php echo $DOWNLOAD_SERVER_ZIP_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> zip</a>
		    <?php } ?>
		    <?php if(!empty($DOWNLOAD_SERVER_TAR_TESTING)) { ?>
			      <a href="<?php echo $DOWNLOAD_SERVER_TAR_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> tar.bz2</a>
		    <?php } ?>
		    </div>
		    <?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
		    <h4><?php echo $l->t('Desktop Clients');?> <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h4>
 		    <p><?php echo $l->t('Our desktop team provides regular pre-releases. Please report any issues to the <a class="hyperlink" href="https://github.com/nextcloud/mirall/issues" target="_blank">tracker</a>.');?></p>
		    <p><?php echo $l->t('You can check the authenticity of the sources using this');?> <a class="hyperlink" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP <?php echo $l->t('signature');?></a>.</p>
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
 		    <p><?php echo $l->t('For those who prefer to install the test version next to the stable Nextcloud version, we offer the "Testpilot" edition of the client, which will install in parallel to the original client:');?></p>
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
		    <p><?php echo $l->t('Find our GPG key at');?> <a target="_blank" href="<?php echo $NEXTCLOUD_GPG; ?>"><?php echo $NEXTCLOUD_GPG; ?></a></p>
		  </div>
		</div>
	  </div>
      </div>
        <!--  Mask instructions server -->
   <a href="#" class="mask"></a>
</div>
<script type="text/javascript">
$('#packages').click(function () {
	$("#tab-archive").removeClass("active");
	$("#tab-packages").addClass("active");
	$("#li-tab-archive").removeClass("active");
	$("#li-tab-packages").addClass("active");
});

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
