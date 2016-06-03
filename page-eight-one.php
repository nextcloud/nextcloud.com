		<div class="row headerrow">
			<div class="col-md-5">
				<iframe width="95%" height="315" src="https://www.youtube.com/embed/RrAhClhrRAc?rel=0" frameborder="0" style="margin-top:10px;" allowfullscreen></iframe>
			</div>
			<div class="col-md-7">
				<h2>Nextcloud Server 8.1 Features</h2>
				<p>Nextcloud Server 8.1 has significant improvements for users, administrators and developers.
					This page contains an overview of the most important changes.
				</p>
				<a href="/install" class="btn btn-lg btn-primary install-8-btn">Install Nextcloud 8.1 now</br></a>
				<p>Want to learn more about Nextcloud from somebody in person? Meet us at an event or join the conversation online!</p>
				<div class="evnt-btn-wrap">
					<a href="/events" class="btn btn-lg btn-default">Join an Nextcloud event</a>
					<a href="/promote" class="btn btn-lg btn-default">Discuss Nextcloud with others</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end main -->

<div class="feature-wide-row-wrap">
	<div class="wrap container">
		<div class="row">
		 	<div class="col-md-4 col-md-offset-4">
		  		  <h3 class="row-center-title">Release highlights</h3>
		  	</div>
		 </div>
			<div class="col-md-4 featureblock">
				<i class="icon-road"></i>
				<h3 class="ft-title">Release channels</h3>
				<p class="featuredesc">It is now easier to keep Nextcloud updated with the channel of your choice via the built in Updater app and our package repositories.</p>
			</div>

			<div class="col-md-4 featureblock">
				<i class="icon-fighter-jet"></i>
				<h3 class="ft-title">Performance</h3>
				<p class="featuredesc">This Nextcloud release brings much improved performance in the areas of syncing, file operations and dealing with parallel requests.</p>
			</div>

			<div class="col-md-4 featureblock">
				<i class="icon-book"></i>
				<h3 class="ft-title">Integrated Documentation</h3>
				<p class="featuredesc">To make Nextcloud easier to use, documentation has been massively improved and integrated in the interface.</p>
			</div>
		</div>
	</div>
</div>

<div class="wrap container">
	<div class="content row">
		<div class="featurewrapper">
			<h2>Nextcloud Server 8.1 Feature Improvements</h2>
		</div>
		<p>Jump to improvements for: <a href="#user">Users</a> | 
			<a href="#admin">Administrators</a> | <a href="#developer">Developers</a></p>
		<a name="user"></a>
		<div class="featurewrapper">
			<h2>End User Improvements</h2>
		</div>
		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="sharing" src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing.png" />
				<h3 class="featuretitle">Federated Cloud ID</h3></br>
				<p class="featuredesc">You can now find your Federated Cloud ID in the settings, making it easy to start sharing with other Nextcloud servers. Federated Cloud ID's added to your address book will auto-complete in the share dialog.</p>
			</div>

			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="documentation" src="<?php bloginfo('template_directory'); ?>/assets/img/features/tips.png" />
				<h3 class="featuretitle">Integrated Documentation</h3></br>
				<p class="featuredesc">To make Nextcloud easier to use, documentation has been massively improved and integrated in the interface. Warnings and notifications come with documentation links, options are explained in the user interface and a tips and tricks section in the admin settings brings the Nextcloud documentation closer.</p>
			</div>

			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="faster" src="<?php bloginfo('template_directory'); ?>/assets/img/features/api.png" />
				<h3 class="featuretitle">Performance</h3></br>
				<p class="featuredesc">This Nextcloud release brings much improved performance, with up to 4x faster up- and downloads and an order of magnitude faster file manipulation. Better scalability through improved handling of parallel requests means Nextcloud can now handle up to 50% more active users on each Nextcloud Server instance.</p>
			</div>
		</div>

		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="faster" src="<?php bloginfo('template_directory'); ?>/assets/img/features/documents.png" />
				<h3 class="featuretitle">Improved Documents</h3></br>
				<p class="featuredesc">An updated Nextcloud Documents app improves on document compatibility and introduces new features like indentation buttons and annotations support as well as working keyboard shortcuts for Firefox users.</p>
			</div>
			<div class="col-md-8 featureblock">
				<img class="thumbnail" alt="other features" src="<?php bloginfo('template_directory'); ?>/assets/img/features/design.png" />
				<h3 class="featuretitle">Papercuts</h3>
				<p class="featuredesc">There have been many small changes to Nextcloud, including:</p></br></br>
				<ul>
				    <li>Improved thumbnail generation engine and added preview support for fonts and 3D images.</li>
				    <li>Automatic database, trash and version cleanups don't cause system wide slow-downs anymore</li>
				    <li>With certain mail server configurations, setting the correct sender address now works</li>
				    <li>File meta data like sharing or favorite state is preserved when files are deleted and undeleted</li>
				    <li><a href="http://morrisjobke.de/2015/07/22/Conditional-Logging-in-Nextcloud/" target="_blank">Conditional logging</a> extends logging to debug level when conditions you set are met</li>
				    <li>Upgrading is far more reliable due to better handling of maintenance mode and more (optional) <a href="http://morrisjobke.de/2015/07/23/Verbose-Nextcloud-upgrade/" target="_blank">verbosity during the upgrade</a></li>
				    <li>User avatars are shown in sharing dialogs</li>
				    <li>And much more.</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/better-integrated-help.png" title="help is integrated everywhere in the user interface" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/better-integrated-help-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/federated-cloud-id.png" title="you can easily find and share your Federated Cloud ID" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/federated-cloud-id-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/federated-sharing-addressbook.png" title="auto-complete Federated Cloud ID's from your address book" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/federated-sharing-addressbook-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/documents-annotations.png" title="You can now add and edit annotations in Documents" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/documents-annotations-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
		</div>
		<div class="row">
<!--                        <div class="col-md-6 text-center"><iframe width="100%" height="360" src="https://www.youtube.com/embed/RtNAx-PcZd8?rel=0" frameborder="0" allowfullscreen></iframe></div>-->
			<!--Nextcloud Documents video-->
                        <div class="col-md-6 text-center"><iframe width="100%" height="360" src="https://www.youtube.com/embed/597gjnBB2JM?rel=0" frameborder="0" allowfullscreen></iframe></div>
                        <!--Nextcloud Federated Sharing video-->
                        <div class="col-md-6 text-center"><iframe width="100%" height="360" src="https://www.youtube.com/embed/9-JEmlH2DEg?rel=0" frameborder="0" allowfullscreen></iframe></div>
                </div>

		<a name="admin"></a>
		<div class="featurewrapper">
			<h2>Administration and Management Enhancements</h2>
		</div>
		<p>System administrators are strongly encouraged to check out the <a href="https://doc.nextcloud.org/server/8.1/admin_manual/release_notes.html">release notes for Nextcloud 8.1</a> before upgrading or doing a fresh installation!</p>
		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="external_storage" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external.png" />
				<h3 class="featuretitle">New Mount Options for External Storage</h3></br>
				<p class="featuredesc">External storage now features new mount options. Performance can be fine-tuned per mount by enabling or disabling encryption and previews and choosing how often to check for changes to the underlying storage. Some authentication options have been added to CIFS/SMB and FTPS (which now features SSH key support).</p>
			</div>

			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="ldap" src="<?php bloginfo('template_directory'); ?>/assets/img/features/avatar.png" />
				<h3 class="featuretitle">LDAP Wizard Improvements</h3></br>
				<p class="featuredesc">The LDAP wizard has been updated to be faster and offer several (optional) auto-detection features and test buttons to verify settings. The user interface was also improved, offering visual user and group selection options among other things.</p>
			</div>
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="encryption" src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption.png" />
				<h3 class="featuretitle">Encryption 2.0</h3></br>
				<p class="featuredesc">A modularization of the Encryption capabilities in Nextcloud allows for external key management, provides improved reliability and management, and sets the foundation for future encryption enhancements.</p>
			</div>
		</div>

		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="security" src="<?php bloginfo('template_directory'); ?>/assets/img/features/security.png" />
				<h3 class="featuretitle">Security Improvements</h3></br>
				<p class="featuredesc">There have been a raft of architectural improvements and changes made which harden Nextcloud against security threats. Some of these <a href="https://statuscode.ch/2015/05/security-and-nextcloud-8.1/">are described here</a>.</p>
			</div>

			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="Updates" src="<?php bloginfo('template_directory'); ?>/assets/img/features/update.png" />
				<h3 class="featuretitle">Release Channels</h3></br>
				<p class="featuredesc">The built in Updater app and our package repositories now offer different Release Channels to keep Nextcloud updated from. Administrators can choose to track the latest released code, a more conservative stable branch, release candidates, or daily builds to align their Nextcloud installation to their needs. <a href="/release-channels" target="_blank">Make your choice here</a>.</p>
			</div>
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="Updates" src="<?php bloginfo('template_directory'); ?>/assets/img/features/store.png" />
				<h3 class="featuretitle">Experimental apps</h3></br>
				<p class="featuredesc">The built in app store now has the ability to install all apps from the <a href="https://apps.nextcloud.com">online app store</a>, including the apps not yet approved and verified. This comes, of course, at a security- and stability risk, which the administrator should be aware off.</p>
			</div>
		</div>

		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="example theme" src="<?php bloginfo('template_directory'); ?>/assets/img/features/design.png" />
				<h3 class="featuretitle">Example Theme</h3></br>
				<p class="featuredesc">To make developing a custom Nextcloud theme easier, a new example theme was included with Nextcloud 8.1. Find details on how to theme Nextcloud in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>operations/theming.html">documentation</a>.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/tips-and-tricks.png" title="Tips and tricks as well as links to documentation are well integrated in the admin panel" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/tips-and-tricks-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/mount-options.png" title="You can set encryption, update policy and previews for each external storage mount" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/mount-options-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/encryption3.png" title="Next generation server side encryption in Nextcloud" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/encryption3-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/encryption5.png" title="Next generation server side encryption in Nextcloud" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/encryption5-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels.png" title="Release Channel selection in Updater App" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/example-theme.png" title="Included example theme" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/example-theme-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/experimental-apps.png" title="Enabling experimental apps" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/experimental-apps-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/experimental-apps2.png" title="Choosing experimental apps" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/experimental-apps2-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-server-tab.png" title="LDAP wizard server page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-server-tab-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-users-tab.png" title="LDAP wizard users page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-users-tab-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-login-tab.png" title="LDAP wizard login page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-login-tab-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-group-tab.png" title="LDAP wizard group page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-group-tab-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
		</div>

		<div class="row">
			<!--Release Channels video-->
                        <div class="col-md-6 text-center"><iframe width="100%" height="360" src="https://www.youtube.com/embed/RtNAx-PcZd8?rel=0" frameborder="0" allowfullscreen></iframe></div>
                        <!--Introduction to Admin Panel video-->
                        <div class="col-md-6 text-center"><iframe width="100%" height="360" src="https://www.youtube.com/embed/J2R-7lpBXjU?rel=0" frameborder="0" allowfullscreen></iframe></div>
                        <!--Introducing the new experimental apps in the app store-->
                        <div class="col-md-6 text-center"><iframe width="100%" height="360" src="https://www.youtube.com/embed/ujCFy41J2ag?rel=0" frameborder="0" allowfullscreen></iframe></div>
                        <!--New external storage options explained-->
                        <div class="col-md-6 text-center"><iframe width="100%" height="360" src="https://www.youtube.com/embed/nx5PGWc7X18?rel=0" frameborder="0" allowfullscreen></iframe></div>
                </div>

                <a name="developer"></a>
		<div class="featurewrapper">
			<h2>Improvements for Developers</h2>
		</div>
		Nextcloud is <a href="http://karlitschek.de/2015/06/building-a-platform/">meant to be a platform</a>. For this release, much effort was put in the infrastructure for building and distributing apps for Nextcloud.
		<div class="row">
			<ul class="featureslist">
				<li>The process of getting apps in the appstore <a href="https://doc.nextcloud.org/server/8.1/developer_manual/app/publishing.html">is now documented</a>.</li>
				<li>We made many improvements to the Nextcloud API: there have been over 190 additions and 50 deprecated functions.</li>
				<li>Sharing capabilities are now exposed to allow external applications (desktop client, mobile clients etc.) to provide a better UX.</li>
				<li>And much, much more.</li>
			</ul>
			<p>For more details, see this blog about <a href="https://nextcloud.org/blog/nextcloud-8-1-brings-massively-improved-api-for-developers/">Nextcloud 8.1 for app developers</a>.</p>
		</div>
		<p>See all features of Nextcloud on the <a href="/features">Features page</a>.</p>
		<h2>Get involved!</h2>
		<p><a target="_blank" href="/promote/" class="btn btn-lg btn-default"> <i class="icon-bullhorn"></i> Discuss Nextcloud with others</a></p>
		<p><a target="_blank" href="/contribute/" class="btn btn-lg btn-default"> <i class="icon-code"></i> Join the Nextcloud community</a></p>
		<p><a target="_blank" href="/conf/" class="btn btn-lg btn-default"> <i class="icon-group"></i> Nextcloud Contributor Conference</a></p>
	</div>
</div>
