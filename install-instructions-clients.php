<div class="installers">
	<div id="install-clients" name="install-clients" class="container row PopupGetStarted">
		<div class="instructions">
			<div class="row">
				<a href="#" class="close">&times;</a>
				<ul class="install-nav nav-tabs" role="tablist">
					<li id="li-tab-desktop" class="active">
                        <a href="#tab-desktop" title="Download for desktop" role="tab" data-toggle="tab">
                            <div>
                            <i class="fa-laptop"></i><br/>
                            <?php echo $l->t('Download for desktop');?>
                            </div>
                        </a>
                    </li>
					<li id="li-tab-mobile">
                        <a href="#tab-mobile" title="Download for mobile" role="tab" data-toggle="tab">
                            <div>
                            <i class="fa-mobile"></i><br>
                            <?php echo $l->t('Download for mobile');?>
                            </div>
                        </a>
                    </li>
				</ul>
			</div>
			<div  class="tab-content">
				<div id="tab-desktop" role="tabpanel" class="tab-pane active">
					<div class="overlay-body row">
						<div class="col-md-6">
<!-- 							<p><?php echo $l->t('Latest stable version:');?> <?php echo $VERSIONS_CLIENT_DESKTOP_STABLE_FULL; ?>&nbsp;<a href="https://github.com/nextcloud/desktop/releases"><?php echo $l->t('changelog');?></a>&nbsp;</p> -->
							<p><?php echo $l->t('Use the desktop clients to keep your files synchronized between your Nextcloud server and your desktop. Select one or more directories on your local machine and always have access to your latest files wherever you are.');?> <a class="hyperlink" href="<?php echo home_url('clients');?>"><?php echo $l->t('Learn more about our clients here.');?></a></p>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN; ?>" id="client-download-win" class="button button--white"><i class="fa-windows"></i>  Windows<br /><small>7, 8.x and 10</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC; ?>" id="client-download-mac" class="button button--white"><i class="fa-apple"></i> macOS<br /><small>10.12+, 64 bit</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX; ?>" id="client-download-linux" class="button button--white"><i class="fa-linux"></i> Linux<br /><small>AppImage</small></a>
							<br>
							<p><i class="fa-apple"></i>&nbsp;<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC_LEGACY; ?>">Mac OS 10.10+ (legacy)</a></p>
							<br>
							<p><?php echo $l->t('Looking for integration apps like browser add-ins for Passwords, a feedreader and more? Check our app store for integrations!');?></p>
							<p><a class="button button--white button--arrow" href="https://apps.nextcloud.com/categories/integration"> Integrations</a></p>
							<p><?php echo $l->t('find here:');?><br>
							<i class="fa-book"></i> <a class="hyperlink" href="<?php echo $DOCUMENTATION_CLIENT_DESKTOP; ?>"><?php echo $l->t('documentation');?></a>
							<br>
							<i class="fa-code-fork"></i> <a class="hyperlink" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES; ?>"><?php echo $l->t('source code');?></a>
							</p>
							<p><?php echo $l->t('You can already find Nextcloud Desktop client packages included in openSUSE Tumbleweed, Arch Linux and Fedora. You can find Ubuntu/Debian packages <a class="hyperlink" href="https://launchpad.net/~nextcloud-devs/+archive/ubuntu/client">in this PPA</a>. Packages for Alpine Linux <a class="hyperlink" href="http://pkgs.alpinelinux.org/packages?name=nextcloud-client">over here</a>. See the latest state and more packages <a class="hyperlink" href="https://help.nextcloud.com/t/linux-packages-status/10216">in this post on our forums.</a> Can\'t find packages? Ask your distribution or contribute to creating them!');?></p>
							<p><?php echo $l->t('Nextcloud is using WebDAV, so you can also try out any other client you want!');?></p>
							<p><?php echo $l->t('Try also our ');?><a class="hyperlink" href="<?php echo home_url('outlook') ?>">Outlook & Thunderbird integration:</a> <?php echo $l->t('Sync your files, calendars, contacts and tasks with Outlook or Mozilla Thunderbird');?></p>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/macsettings.png" alt="Desktop Client" />
							</div>
						</div>
					</div>
				</div>
				<div id="tab-mobile" role="tabpanel" class="tab-pane">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p><?php echo $l->t('The Nextcloud mobile apps are available in various app stores.');?> <a class="hyperlink" href="<?php echo home_url('clients');?>"><?php echo $l->t('Learn more about our clients here.');?></a></p>
							<h3><span class="appicon"><?php echo file_get_contents(get_template_directory()."/assets/img/logo/Nextcloud-Files.svg");?></span> Nextcloud Files</h3>
							<p><?php echo $l->t('The apps allow you to access, sync and upload your data and feature instant upload for fotos and videos, upload management and more features.');?></p>
							<div class="row mobileclientbuttons">
								<div class="col-xs-4">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png"></a><br />
								</div>
								<div class="col-xs-4">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID; ?>">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/fdroid.png"></a><br />
								</div>
								<div class="col-xs-4">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png">
									</a>
								</div>
							</div>
							<p><a class="hyperlink" href="https://github.com/nextcloud/ios"><?php echo $l->t('Find iOS Sources here</a>, <a class="hyperlink" href="https://github.com/nextcloud/android">Android Sources here</a> and <a class="hyperlink" href="https://download.nextcloud.com/android">direct APK download here</a>.');?></p>
							<h3><span class="appicon"><?php echo file_get_contents(get_template_directory()."/assets/img/logo/Nextcloud-Talk.svg");?></span> Nextcloud Talk</h3>
							<div class="row mobileclientbuttons">
								<div class="col-xs-4">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID_TALK; ?>">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png"></a><br />
								</div>
								<div class="col-xs-4">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID_TALK; ?>">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/fdroid.png"></a><br />
								</div>
								<div class="col-xs-4">
									<a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS_TALK; ?>">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png">
									</a>
								</div>
							</div>
							<p><?php echo $l->t('Looking for mobile apps for Deck, News, Passwords and more? Check our app store!');?></p>
							<p><a class="button button--blue button--arrow button--small" href="https://apps.nextcloud.com/categories/integration?search=android"><i class="fa-android"></i> Android Apps</a> <a class="button button--blue button--arrow button--small" href="https://apps.nextcloud.com/categories/integration?search=ios"><i class="fa-apple"></i> iOS Apps</a></p>
							<p><?php echo $l->t('Nextcloud is using standards like CalDAV, WebDAV and IMAP so many independent third party clients can connect to it.');?></p>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android.gif" alt="Nextcloud Mobile Client" />
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
