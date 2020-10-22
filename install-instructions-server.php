<div class="installers">
	<div id="instructions-server" class="container row PopupGetStarted">
		<div class="instructions">
            <div class="row">
                <a href="#" class="close">&times;</a>
                <ul class="install-nav nav-tabs" role="tablist">
                    <li id="li-tab-archive" class="active">
                        <a href="#tab-archive" title="For server owners" role="tab" data-toggle="tab">
                            <div>
                            <i class="fa-archive"></i><br/>
                            <?php echo $l->t('Archive File');?><br>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#tab-web" title="Best for shared hosts" role="tab" data-toggle="tab">
                            <div>
                            <i class="fa-code"></i> <br />
                            <?php echo $l->t('Web Installer');?><br>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#tab-cloud" title="Provides automated updates" role="tab" data-toggle="tab">
                            <div>
                            <i class="fa-cloud"></i> <br />
                            <?php echo $l->t('Appliances');?><br>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div  class="tab-content">
                <div id="tab-archive" role="tabpanel" class="tab-pane active">
                    <div class="overlay-body row">
                        <div class="col-md-6">
                            <p><?php echo $l->t('The <strong>archive</strong> should be extracted in a folder your web server has access to. Latest stable version');?>:  <?php echo $VERSIONS_SERVER_FULL_STABLE; ?> (<a class="hyperlink" href="<?php echo home_url('changelog') ?>"><small><?php echo $l->t('Changelog');?></small></a>)</br>
                            <div class="downloadbutton">
                                <a  class="button button--blue button--huge" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>"><?php echo $l->t('Download Nextcloud');?></a>
                            </div>
                            <p><?php echo $l->t('Follow the');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>installation"><?php echo $l->t('Nextcloud Admin Manuals</a> installation chapter.</br>
                            If you already run Nextcloud, refer to the');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/upgrade.html"><?php echo $l->t('upgrade manual.');?></a><br/>
                            <a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('Need an enterprise solution?</a>');?></p>

                            <a class="button button--white button--small button--arrow--down" data-toggle="collapse" href="#more"><?php echo $l->t('Details and download options');?></a>
                            <div class="collapse" id="more">
                                <ol>
                                    <li><?php echo $l->t('Download the');?> <a class="hyperlink" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>">.tar.bz2</a></a> <?php echo $l->t('or');?> <a class="hyperlink" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">.zip</a> <?php echo $l->t('archive.');?></li>
                                    <li><?php echo $l->t('Check package integrity using MD5');?> (<a class="hyperlink" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_MD5; ?>">.tar.bz2</a> / <a class="hyperlink"  href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_MD5; ?>">.zip</a>) <?php echo $l->t('or');?> SHA256 (<a class="hyperlink"  href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_SHA256; ?>">.tar.bz2</a> / <a class="hyperlink"  href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_SHA256; ?>">.zip</a>)</li>
                                    <li><?php echo $l->t('Verify the authenticity via PGP');?> (<a class="hyperlink" target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_PGP; ?>">.tar.bz2 </a>/<a class="hyperlink" target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_PGP ?>">.zip</a>). <?php echo $l->t('The Nextcloud GPG key');?> <a class="hyperlink" target="_blank" href="<?php echo $NEXTCLOUD_GPG ; ?>"><?php echo $l->t('is here');?></a>.</li>
                                </ol>
                                <p><?php echo $l->t('You can already find server packages included with many distributions or provided by active community members. Find an <a class="hyperlink" href="https://help.nextcloud.com/t/linux-packages-status/10216">overview of packages for various distributions as well as Docker and snap images here.</a> Can\'t find packages you need? Ask your distribution for packages or contribute to creating them!');?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="thumbnail">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
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
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
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
                            <br/><a  class="btn btn-primary" href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>">Continue</a></br></br>
                        </div>
                        <div class="col-md-6">
                            <div class="thumbnail">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="Nextcloud Server" />
                            </div>
                            <p><?php echo $l->t('<strong>Security note:</strong></br> We recommend a subscription to our low-traffic <a class="hyperlink" href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a> for notifications on updates and security issues. Find the <a class="hyperlink" href="<?php echo $NEXTCLOUD_GPG; ?>">public Nextcloud GPG key here</a>.');?></p>
                            <p><?php echo $l->t('Looking for repositories of');?> <a class="hyperlink" href="<?php echo home_url('changelog') ?>"><?php echo $l->t('previous major releases?');?></a></p>
                            <p><?php echo $l->t('<small>Nextcloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a class="hyperlink" id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the Nextcloud Appliance</a> on Windows Server.</small>');?></p>
                        </div>
                    </div>
                </div>
                <div id="tab-cloud" role="tabpanel" class="tab-pane">
                    <div class="overlay-body row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><?php echo $l->t('Virtual Machine image');?></h5>
                                    <p><?php echo $l->t('The Nextcloud VM is designed to be an easy way for less technical users to get Nextcloud up and running or to test it out. It builds on Ubuntu Linux and makes configuration easy.');?></p>
                                    <p><a class="button button--blue" href="https://download.nextcloud.com/vm/Nextcloud-VM.ova" target="_blank"><?php echo $l->t('Download the VM');?></a></p>
                                    <p><a class="hyperlink" href="https://github.com/nextcloud/vm" target="_blank"><?php echo $l->t('Find source here');?></a>.</p>
                                    <p><?php echo $l->t('If you are looking for a more extensive virtual machine with many scripts to easily set up advanced functionality, ');?><a class="hyperlink" href="https://www.hanssonit.se/nextcloud-vm/" target="_blank"><?php echo $l->t('get the full-version VM from Hansson IT.');?></a></p>
                                    <p><?php echo $l->t('For small businesses, Nextcloud GmbH maintains a free appliance built on the Univention Corporate Server (UCS) with easy graphical setup and web-based administration. It includes user management via LDAP as well as optional online office integration. ');?><a class="hyperlink" href="https://www.univention.com/products/univention-app-center/app-catalog/nextcloud/" target="_blank"><?php echo $l->t('get the SME/Enterprise appliance.');?></a></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><?php echo $l->t('Docker image');?></h5>
                                    <p><?php echo $l->t('Several Nextcloud community members maintain a Docker image. It supports a wide range of architectures, releases, various webservers, databases and more.');?></p>
                                    <p><a class="button button--blue" href="https://hub.docker.com/_/nextcloud/" target="_blank"><?php echo $l->t('Get Docker image');?></a></p>
                                    <p><a class="hyperlink" href="https://github.com/nextcloud/docker" target="_blank"><?php echo $l->t('Find source here');?></a>.</p>
                                </div>
                                <div class="col-md-6">
                                    <h5><?php echo $l->t('Snap package');?></h5>
                                    <p><a class="hyperlink" href="https://canonical.com">Canonical</a><?php echo $l->t(' and the Nextcloud community maintain a Nextcloud Snap, including release channels and quick and easy deployment for easy home use.');?></p>
                                    <p><a class="button button--blue" href="https://snapcraft.io/nextcloud" target="_blank"><?php echo $l->t('Get Snap package');?></a></p>
                                    <p><a class="hyperlink" href="https://github.com/nextcloud/nextcloud-snap" target="_blank"><?php echo $l->t('Find source here.');?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/VMwelcome.png" alt="Nextcloud home user VM" />
                            </div>
                            <p><?php echo $l->t('<small><strong>Security note:</strong></br>To receive information about updates and security issues, we recommend a subscription to our low-traffic <a class="hyperlink" href="https://newsletter.nextcloud.com/?p=subscribe&id=1">newsletter</a>.</small>');?></p>
                            <p><?php echo $l->t('<small><strong>Release channels:</strong></br>We offer');?> <a class="hyperlink" href="<?php echo home_url('release-channels') ?>"><?php echo $l->t('Release Channels</a> with production, stable, beta and daily-branches. This gives you the opportunity to choose your balance between stability and features.</small> Most of our Appliances support these release channels or let you fix on specific major versions.');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--  Mask instructions server -->
	<a href="#" class="mask"></a>
</div>


