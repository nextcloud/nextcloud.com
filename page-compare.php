<head>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modules/jquery-321.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["jquery", "pages/compare"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/compare.css" rel="stylesheet">
</head>
<body>

<section class="compare-hero-section">
	<div class="container-fluid background">
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Compare cloud technologies');?></h1>
				<h2><?php echo $l->t('See how Nextcloud compares to these popular closed-source services, and switch to a more open and transparent solution to protect your data!');?></h2>
			</div>
		</div>
	</div>
</div>
</section>

<section class="cd-products-comparison-table">
	<div class="container-fluid">
	<section class="cd-intro">
<!-- 		<h1>Compare Cloud Storage Technologies</h1> -->
	</section> <!-- .cd-intro -->
	<section class="cd-products-comparison-table">
		<header>
			<h2>Compare Products <br /> <small>Click on or hover items to learn more.<br/>You can pick a few items and filter the list to only show those.</small></h2>
			<div class="actions">
			<br />
				<a href="#0" class="reset">Reset</a>
				<a href="#0" class="filter">Filter</a>
			</div>
		</header>
		<div class="cd-products-table">
			<div class="features">
				<div class="top-info"></div>
				<ul class="cd-features-list">
					<li title="" rel="tooltip"><a href="https://nextcloud.com/blog/why-the-agpl-is-great-for-business-users/">License</a></li> <!--License-->
					<li title="Limits imposed by either the purchased plan or your own infrastructure when self-hosting" rel="tooltip">Unlimited storage</li> <!-- Unlimited storage -->
					<li title="" rel="tooltip">Large file support</li> <!--Large file support-->
					<li title="" rel="tooltip">Self hosted/on premise</li> <!--Self hosted/on premise-->
						<li class="cd-group">Clients</li> <!--Client-->
					<li title="" rel="tooltip">Mobile Clients</li> <!--Mobile Clients-->
					<li title="" rel="tooltip">Auto upload images/video</li> <!--Auto upload images/video-->
					<li title="" rel="tooltip">Desktop clients</li> <!--Desktop clients-->
					<li title="" rel="tooltip">Sync any local folder</li><!-- Sync any local folder-->
					<li title="" rel="tooltip">LAN Synchronization</li> <!--LAN Synchronization-->
					<li title="Allows third party to write apps that integrate apps in the cloud itself, adding functionality" rel="tooltip">Extensible with apps</li> <!--Extensible with apps-->
					<li title="" rel="tooltip">Outlook integration</li> <!--Outlook integration-->
						<li class="cd-group">Server features</li> <!--Server features-->
					<li title="file name search/full text search" rel="tooltip">Full text search</li> <!--Full text search-->
					<li title="" rel="tooltip">File Versioning</li> <!--File Versioning-->
					<li title="" rel="tooltip">File Metadata</li> <!--File Metadata-->
					<li title="" rel="tooltip">View PDF, images, video</li> <!--View PDF, images, video-->
					<li title="" rel="tooltip">Integrated Audio/Video/Text chat</li> <!--Audio/Video/Text chat-->
					<li title="" rel="tooltip">Supported Groupware<br> (Calendar/Contacts/<br>Mail/Kanban)</li> <!--Calendar/Contact/Mail integration-->
					<li title="" rel="tooltip">Mobile calendar/contact integration</li> <!--Mobile calendar/contact integration-->
					<li title="" rel="tooltip">Online Office</li> <!--Online Office-->
					<li title="Public link to folder recipient can upload to, which hides existing content of the shared folder" rel="tooltip">File Drop (customer file upload)</li> <!--File Drop (customer file upload)-->
					<li title="Sharing between separate cloud instances of different vendors. Example, Nextcloud users can share files with users on Pydio and ownCloud servers." rel="tooltip">Inter-server sharing</li> <!--Inter-server sharing-->
                        <li class="cd-group">Accessibility</li> <!--Accessibility-->
					<li title="" rel="tooltip">Keyboard/screen reader support</li> <!--Keyboard/screen reader support-->
					<li title="" rel="tooltip">WCAG 2.1 support</li> <!--WCAG 2.1 support-->
					<li title="" rel="tooltip">Dyslexia-friendly font</li> <!--Dyslexia-friendly font-->
						<li class="cd-group">Admin features</li> <!--Admin features-->
					<li title="" rel="tooltip">Content workflow automation</li> <!--Content workflow automation-->
					<li title="" rel="tooltip">Automatic script execution</li> <!--Automatic script execution-->
					<li title="files created, updated, shared, unshared and deleted by user or others, chat or call received etc" rel="tooltip">Real time notifications</li> <!--Real-time (push) notifications-->
					<li title="" rel="tooltip">Monitoring web/API interface</li> <!--Monitoring web/API interface-->
					<li title="" rel="tooltip">Data retention policy support</li> <!--Data retention policy support-->
					<li title="Life cycle matching your operating system" rel="tooltip">Long term support (5-10 years)</li> <!--Long term support (5-10 years)-->
					<li title="" rel="tooltip">Branding</li> <!--Branding-->
						<li class="cd-group">Compliance features</li> <!--Compliance features-->
					<li title="Mandatory if you have a legal requirement to find out who did what and when." rel="tooltip">Full audit trail</li> <!--Full audit trail-->
					<li title="" rel="tooltip">Imprint and privacy links</li> <!--Imprint and privacy links-->
					<li title="" rel="tooltip">Built in data-request/account deletion</li> <!--Built in data-request/account deletion-->
					<li title="" rel="tooltip">Terms-of-service</li> <!--Terms-of-service-->
                        <li class="cd-group">Security features</li> <!--Security features-->
					<li title="" rel="tooltip">Server side encryption</li> <!--Server side encryption-->
					<li title="" rel="tooltip">Client side encryption</li> <!--Client side encryption-->
					<li title="Optionally verify identity of recipient by video call" rel="tooltip">Video Verification</li> <!--Video Verification-->
					<li title="" rel="tooltip">Brute force hacking protection</li> <!--Brute force hacking protection-->
					<li title="" rel="tooltip">NIST compliant password policy</li> <!--NIST compliant password policy-->
					<li title="" rel="tooltip">Web UI secured with CSP 3.0</li> <!--Web UI secured with CSP 3.0-->
					<li title="" rel="tooltip">With same-site cookie attribute</li> <!--With same-site cookies-->
					<li title="" rel="tooltip">File Access Control</li> <!--File Access Control-->
					<li title="Allow restricting mobile/desktop/third party applications access to filesystem or other data" rel="tooltip">App access rights</li> <!--App access rights-->
						<li class="cd-group">Authentication</li> <!--Authentication-->
					<li title="" rel="tooltip">2-factor authentication</li> <!--2-factor authentication-->
					<li title="" rel="tooltip">LDAP/AD</li> <!--LDAP/AD-->
					<li title="Native SAML is implemented directly in the application without a requirements on external software like Apache modules. Native SAML is compatible with all webservers and supports group memberships, flexible session management, multiple identity providers and app specific passwords." rel="tooltip">Native SAML</li> <!-- Native SAML -->
					<li title="Authentication through Apache modules allows eg SAML/ShibbolethADFS, OAuth, OpenID, CAS and more." rel="tooltip">Auth via env variable</li> <!--Auth via env variable-->
					<li title="" rel="tooltip">Kerberos</li> <!--Kerberos-->
						<li class="cd-group">Storage</li> <!--Storage-->
					<li title="" rel="tooltip">File storage (local/NFS)</li> <!--File storage (local/NFS)-->
					<li title="" rel="tooltip">Object storage (S3/Swift)</li> <!--Object storage (S3/Swift)-->
					<li title="" rel="tooltip">CIFS/Windows Shares</li> <!--CIFS/Windows Shares-->
					<li title="" rel="tooltip">Sharepoint</li> <!--Sharepoint-->
					<li title="" rel="tooltip">Extensible storage</li> <!--Extensible storage-->
				</ul>
			</div> <!-- .features -->

			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Nextcloud</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/nextcloud.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Open Source</li> <!--License-->
							<li title="The limit is customer infrastructure. There are no limits from the Nextcloud side." rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="can be hosted wherever you decide, including hybrid." rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i> <i class="fa fa-linux" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="Over 150 apps available" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="Free version for home/small business users, paid with more features for larger enterprises" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="both Android/iOS (Android with integrated 3rd party tool)" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="With Collabora Online or ONLYOFFICE" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Inter-server sharing-->
                                <li class="cd-group"></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="AAA with optional theme" class="green" rel="tooltip">AA/AAA</li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Long term support (5-10 years)-->
							<li title="Can be done easily from the web interface" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
								<li class="cd-group"></li> <!--Compliance features-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Terms-of-service-->
							<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="Optionally verify identity of recipient by video call" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
                            <li title="Supports multiple factors" rel="tooltip">U2F/OTP/SMS<br>Signal/Telegram</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="Also supports Kerberos" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Google Drive</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/google.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="No third-party apps that can be integrated" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
							    <li class="cd-group"></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="Only via third party app" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="max 6 months" rel="tooltip">limited	</li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip">very limited</li> <!--Branding-->
                                <li class="cd-group"></li> <!--Compliance features-->
							<li title="" rel="tooltip">limited</li> <!--Full audit trail-->
                            <li title="Only to their imprint and privacy policy, not yours" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="You can request (deletion of) data" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="You and your customers you share with have to agree to their terms" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Terms-of-service-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
                            <li title="Multiple factors" rel="tooltip">U2F/OTP/SMS</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Office 365</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/office365.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">10GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="Limited to Microsoft Apps" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="Only for MS Office files" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
							    <li class="cd-group"></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
                                <li class="cd-group"></li> <!--Compliance features-->
							<li title="" rel="tooltip">limited</li> <!--Full audit trail-->
                            <li title="Only to their imprint and privacy policy, not yours" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="You can request (deletion of) data" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="You and your customers you share with have to agree to their terms" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Terms-of-service-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
                            <li title="Supports multiple factors" rel="tooltip">U2F/OTP/SMS</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>ownCloud</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/owncloud.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="[ownCloud Enterprise Edition] open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i> <i class="fa fa-linux" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="Over 70 apps available" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="unsupported" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="Only as unsupported (Nextcloud-developed) third party apps" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="Unsupported. Available for iOS, Android possible with tool from Nextcloud partner" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i>/<i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="With Collabora Online or ONLYOFFICE" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Inter-server sharing-->
                                <li class="cd-group"></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Long term support (5-10 years)-->
							<li title="Using paid ownBrander or manually changing CSS" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
								<li class="cd-group"></li> <!--Compliance features-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Terms-of-service-->
							<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="Unsupported external app developed by community student" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
                            <li title="Only one factor" rel="tooltip">OTP</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check"  aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="Only support for outdated V2 authentication" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Box</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/box.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip">Varies per plan</li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">5GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="Limited Microsoft office integration" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="25-50 revisions depending on plan" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="Varies per plan" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="not natively, third party app" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
                                <li class="cd-group"></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="AAA with Box.com accessiblity site" rel="tooltip" class="green">AA/AAA</li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="Varies per plan but mainly yes" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
								<li class="cd-group"></li> <!--Compliance features-->
							<li title="" rel="tooltip">limited</li> <!--Full audit trail-->
                            <li title="Only to their imprint and privacy policy, not yours" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="You can request (deletion of) data" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="You and your customers you share with have to agree to their terms" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Terms-of-service-->
							<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="Can be done in limited way with third party applications" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
                            <li title="Supports multiple factors" rel="tooltip">SMS</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Citrix</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/citrix.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">10GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="No third-party apps that can be integrated" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="Microsoft Office 365" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
                                <li class="cd-group"></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Branding-->
								<li class="cd-group"></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
                            <li title="Only to their imprint and privacy policy, not yours" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="You can request (deletion of) data" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="You and your customers you share with have to agree to their terms" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Terms-of-service-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
                            <li title="" rel="tooltip">SMS</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Dropbox</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/dropbox.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip">Varies per plan</li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">20GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i> <i class="fa fa-linux" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="Limited Microsoft office integration" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="Max 1 month, up to 1 year with Business subscription" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="Only with business subscription" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i title="through Google Apps" rel="tooltip" class="fa fa-google" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="Microsoft Office 365" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
                                <li class="cd-group"></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip">very limited</li> <!--Branding-->
                                <li class="cd-group"></li> <!--Compliance features-->
							<li title="" rel="tooltip">limited</li> <!--Full audit trail-->
                            <li title="Only to their imprint and privacy policy, not yours" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="You can request (deletion of) data" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="You and your customers you share with have to agree to their terms" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Terms-of-service-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
                            <li title="" rel="tooltip">SMS/U2F/OTP</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Egnyte</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/egnyte.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip">max 10 TB</li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="Pretty wide range of apps" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="max 3 revisions" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="Microsoft Office 365" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
							    <li class="cd-group"></li> <!--Accessibility-->
                            <li title="could not find information" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
                                <li class="cd-group"></li> <!--Compliance features-->
							<li title="" rel="tooltip">limited</li> <!--Full audit trail-->
                            <li title="If self-hosted" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="Yes" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="If self-hosted" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Terms-of-service-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
                            <li title="OTP only via Duo Push" rel="tooltip">OTP/SMS</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Powerfolder</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/powerfolder.png" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="Only ONLYOFFICE" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="Only via third party app" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="ONLYOFFICE based" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
							    <li class="cd-group"></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Branding-->
                                <li class="cd-group"></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
                            <li title="Only with self-hosted version" rel="tooltip"><i class="fa fa-check optional" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="Not built in" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="Not built in" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Terms-of-service-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
                            <li title="" rel="tooltip">Unclear</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Accellion</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/accellion.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">2GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="No third-party apps that can be integrated" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip">limited</li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="Microsoft Lync plug-in" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="Microsoft Office 365" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
							    <li class="cd-group"></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip">limited</li> <!--Branding-->
                                <li class="cd-group"></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
                            <li title="When picking on-premises option" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Imprint and privacy links-->
                            <li title="When picking on-premises option" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Built in data-request/account deletion-->
                            <li title="When picking on-premises option" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Terms-of-service-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--App access rights-->
								<li class="cd-group"></li> <!--Authentication-->
								<li title="" rel="tooltip">SMS</li> <!--2-factor authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->

			<ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->
</div> <!-- container-fluid -->
</section>
<section class="disclaimer">
<div class="container">
<p>Based on public information to our best knowledge, gathered September 2 2018. We understand the world is constantly changing, if you see we missed a feature or made a mistake, let us know. You can use <a href="<?php echo home_url('contact') ?>">our contact form.</a></p>
</div>
</section>

