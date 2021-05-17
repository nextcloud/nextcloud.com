<head>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modules/jquery-321.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["jquery", "pages/compare"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/compare.css?v=3" rel="stylesheet">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/comparison.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/comparison.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/comparison.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/comparison.png">
</head>
<body>

<section class="compare-hero-section">
	<div class="container-fluid background">
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('How Nextcloud stacks up');?></h1>
				<h2><?php echo $l->t('Why is Nextcloud the most popular self-hosted EFSS and Content Collaboration Platform?');?></h2>
			</div>
		</div>
	</div>
</div>
</section>
<section class="section--best">
<div class="container-fluid">
    <h2 class="text-center"><?php echo $l->t('What makes Nextcloud the best choice');?></h2>
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/firewall.svg" /></div>
            <h3 class="section--paragraph__title"><?php echo $l->t('Best security');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud is developed in a security-focused process as attested by a range of external experts and security pen-tests.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Industry-leading features include machine-learning based login protection, 2-factor authentication measures, brute force protection and unique capabilities like Video Verification, end-to-end and server-side encryption.');?></p>
            <p class="section--paragraph"><?php echo $l->t('We put our money where our mouth is: our USD 10.000 security bug bounty program brings top security expertise in, keeping your data safe.');?></p>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/people.svg" /></div>
            <h3 class="section--paragraph__title"><?php echo $l->t('Largest ecosystem');?></h3>
            <p class="section--paragraph"><?php echo $l->t('As the most deployed self-hosted file sync and content collaboration platform, Nextcloud offers the widest range of add-on capabilities and integrations in the industry. Over 200 \'apps\' offer powerful security capabilities, team productivity features and infrastructure integrations.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Workflow capabilities, several online office solutions and a tool employing advanced entropy analysis to recover files from a ransomware attack, built by security researchers from a German university, are just some of the applications found in our app store.');?></p>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/tools.svg" /></div>
            <h3 class="section--paragraph__title"><?php echo $l->t('Easiest to use');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Powerful capabilities often result in complicated user interfaces, lowering productivity and hindering quick adoption in organizations. Without limiting their abilities, Nextcloud does not overwhelm users with unnecessary clutter. Our customers remark time and again how few support tickets it creates for their IT teams.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Accessibility features like keyboard and screenreader navigation, WCAG 2.1 compliant contrast and a dyslexia-friendly font are available only in the leading on-premises content collaboration platform');?>!</p>
        </div>
    </div>
</div>
</section>
<section class="section--comparison">
<div class="container">
    <h1 class="text-center"><?php echo $l->t('Compare products');?></h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p><?php echo $l->t('See how Nextcloud compares to these popular closed-source services, and switch to a more open and transparent solution to protect your data!');?></p>
        </div>
    </div>
</div>
<div class="container-fluid">
	<div class="cd-products-comparison-table">
		<header>
			<div class="actions">
				<a href="#0" class="reset">Reset</a>
				<a href="#0" class="filter">Filter</a>
			</div>
			<p><?php echo $l->t('Click on or hover items to learn more.');?><br/><?php echo $l->t('You can pick a few items and filter the list to only show those.');?></p>
		</header>
		<div class="cd-products-table">
			<div class="features">
				<div class="top-info"></div>
				<ul class="cd-features-list">
					<li title="" rel="tooltip"><a href="https://nextcloud.com/blog/why-the-agpl-is-great-for-business-users/"><?php echo $l->t('Licensing');?></a></li> <!--License-->
					<li title="<?php echo $l->t('Limits imposed by either the purchased plan or your own infrastructure when self-hosting');?>" rel="tooltip"><?php echo $l->t('Unlimited storage and amount of files');?></li> <!-- Unlimited storage -->
					<li title="" rel="tooltip"><?php echo $l->t('Large file support');?></li> <!--Large file support-->
					<li title="" rel="tooltip"><?php echo $l->t('Self hosted/on premises');?></li> <!--Self hosted/on premises-->
					<li title="<?php echo $l->t('Sharding across clusters and data centers');?>" rel="tooltip"><?php echo $l->t('Global scalability');?></li> <!--Scalability limits-->
						<li class="cd-group"><?php echo $l->t('Clients');?></li> <!--Client-->
					<li title="" rel="tooltip"><?php echo $l->t('Mobile Clients');?></li> <!--Mobile Clients-->
					<li title="" rel="tooltip"><?php echo $l->t('Auto upload images/video/other files');?></li> <!-- Auto upload images/video/other files -->
					<li title="" rel="tooltip"><?php echo $l->t('Desktop clients');?></li> <!--Desktop clients-->
					<li title="" rel="tooltip"><?php echo $l->t('LAN Synchronization');?></li> <!--LAN Synchronization-->
					<li title="<?php echo $l->t('Allows third party to write apps that integrate apps in the cloud itself, adding functionality');?>" rel="tooltip"><?php echo $l->t('Extensible with apps');?></li> <!--Extensible with apps-->
					<li title="" rel="tooltip"><?php echo $l->t('Outlook integration');?></li> <!--Outlook integration-->
						<li class="cd-group"><?php echo $l->t('Server features');?></li> <!--Server features-->
					<li title="<?php echo $l->t('Cross-application search (Calendars, mails, chat messages, files etc)');?>" rel="tooltip"><?php echo $l->t('Unified search');?></li> <!--Full text search-->
					<li title="" rel="tooltip"><?php echo $l->t('File Versioning');?></li> <!--File Versioning-->
					<li title="<?php echo $l->t('Block a file temporarily from being edited while you work offline with it');?>" rel="tooltip"><?php echo $l->t('File Locking/checkout');?></li> <!--File Locking-->
					<li title="" rel="tooltip"><?php echo $l->t('Multiple link shares');?></li> <!--Multiple shares-->
					<li title="<?php echo $l->t('Add a note for the sharee');?>" rel="tooltip"><?php echo $l->t('Share note');?></li> <!--Share Metadata-->
					<li title="<?php echo $l->t('Dashboard app with overview of info like recent files, chats, calendar items and more');?>" rel="tooltip"><?php echo $l->t('Dashboard');?></li> <!--Dashboard-->
					<li title="" rel="tooltip"><?php echo $l->t('View PDF, images, video, gallery');?></li> <!--View PDF, images, video, gallery-->
					<li title="" rel="tooltip"><?php echo $l->t('Integrated Audio/Video/Text chat');?></li> <!--Audio/Video/Text chat-->
					<li title="" rel="tooltip"><?php echo $l->t('Integrated Groupware<br> (Calendar/Contacts/<br>Mail/Kanban)');?></li> <!--Calendar/Contact/Mail integration-->
					<li title="" rel="tooltip"><?php echo $l->t('Mobile calendar/contact integration');?></li> <!--Mobile calendar/contact integration-->
 					<li title="<?php echo $l->t('Integrated in browser / integrated in own mobile apps');?>" rel="tooltip"><?php echo $l->t('Online Office web / mobile apps');?></li> <!--Online Office-->
					<li title="<?php echo $l->t('Public link to folder recipient can upload to, which hides existing content of the shared folder');?>" rel="tooltip"><?php echo $l->t('File Drop (customer file upload)');?></li> <!--File Drop (customer file upload)-->
					<li title="<?php echo $l->t('Protect public links with Video Verification');?>" rel="tooltip"><?php echo $l->t('Video Verification');?></li> <!-- Video Verification -->
					<li title="<?php echo $l->t('Sharing between separate cloud instances of different vendors. Example, Nextcloud users can share files with users on Pydio and ownCloud servers.');?>" rel="tooltip"><?php echo $l->t('Inter-server sharing');?></li> <!--Inter-server sharing-->
					<li title="<?php echo $l->t('Add context to a folder by having a space to add comments, notes and todo lists');?>" rel="tooltip"><?php echo $l->t('Workspaces');?></li> <!-- Workspaces -->
                        <li class="cd-group"><?php echo $l->t('Accessibility');?></li> <!--Accessibility-->
					<li title="" rel="tooltip"><?php echo $l->t('Keyboard/screen reader support');?></li> <!--Keyboard/screen reader support-->
					<li title="" rel="tooltip"><?php echo $l->t('WCAG 2.1 support');?></li> <!--WCAG 2.1 support-->
					<li title="" rel="tooltip"><?php echo $l->t('Dyslexia-friendly font');?></li> <!--Dyslexia-friendly font-->
						<li class="cd-group"><?php echo $l->t('Admin features');?></li> <!--Admin features-->
                    <li title="<?php echo $l->t('Permissions on files and folders, inherited by default, can be overridden at any level.');?>" rel="tooltip"><?php echo $l->t('Access control lists');?></li> <!--Access control lists-->
					<li title="" rel="tooltip"><?php echo $l->t('Content workflow automation');?></li> <!--Content workflow automation-->
					<li title="" rel="tooltip"><?php echo $l->t('Automatic script execution');?></li> <!--Automatic script execution-->
					<li title="" rel="tooltip"><?php echo $l->t('Impersonate users');?></li> <!--impersonate users-->
					<li title="<?php echo $l->t('files created, updated, shared, unshared and deleted by user or others, chat or call received etc');?>" rel="tooltip"><?php echo $l->t('Real time notifications');?></li> <!--Real-time (push) notifications-->
					<li title="" rel="tooltip"><?php echo $l->t('Monitoring web/API interface');?></li> <!--Monitoring web/API interface-->
					<li title="" rel="tooltip"><?php echo $l->t('Data retention policy support');?></li> <!--Data retention policy support-->
					<li title="<?php echo $l->t('Life cycle matching your operating system');?>" rel="tooltip"><?php echo $l->t('Long term support (5-10 years)');?></li> <!--Long term support (5-10 years)-->
					<li title="" rel="tooltip"><?php echo $l->t('Branding');?></li> <!--Branding-->
						<li class="cd-group"><?php echo $l->t('Compliance features');?></li> <!--Compliance features-->
					<li title="<?php echo $l->t('Mandatory if you have a legal requirement to find out who did what and when.');?>" rel="tooltip"><?php echo $l->t('Audit trail');?></li> <!--Audit trail-->
					<li title="" rel="tooltip"><?php echo $l->t('Imprint and privacy links');?></li> <!--Imprint and privacy links-->
					<li title="" rel="tooltip"><?php echo $l->t('Built in data-request/account deletion');?></li> <!--Built in data-request/account deletion-->
					<li title="" rel="tooltip"><?php echo $l->t('Terms-of-service');?></li> <!--Terms-of-service-->
                        <li class="cd-group"><?php echo $l->t('Security features');?></li> <!--Security features-->
					<li title="" rel="tooltip"><?php echo $l->t('Server side encryption');?></li> <!--Server side encryption-->
					<li title="" rel="tooltip"><?php echo $l->t('Client side encryption');?></li> <!--Client side encryption-->
					<li title="<?php echo $l->t('Optionally verify identity of recipient by video call');?>" rel="tooltip"><?php echo $l->t('Video Verification');?></li> <!--Video Verification-->
					<li title="" rel="tooltip"><?php echo $l->t('Brute force hacking protection');?></li> <!--Brute force hacking protection-->
					<li title="" rel="tooltip"><?php echo $l->t('NIST compliant password policy');?></li> <!--NIST compliant password policy-->
					<li title="" rel="tooltip"><?php echo $l->t('Web UI secured with CSP 3.0');?></li> <!--Web UI secured with CSP 3.0-->
					<li title="" rel="tooltip"><?php echo $l->t('With same-site cookie attribute');?></li> <!--With same-site cookies-->
					<li title="" rel="tooltip"><?php echo $l->t('File Access Control');?></li> <!--File Access Control-->
					<li title="<?php echo $l->t('Allow restricting mobile/desktop/third party applications access to filesystem or other data');?>" rel="tooltip"><?php echo $l->t('App access rights');?></li> <!--App access rights-->
						<li class="cd-group"><?php echo $l->t('Authentication');?></li> <!--Authentication-->
					<li title="" rel="tooltip"><?php echo $l->t('enforcable 2-factor authentication');?></li> <!--2-factor authentication-->
                    <li title="<?php echo $l->t('Uses machine learning technology to protect authentication');?>" rel="tooltip"><?php echo $l->t('ML based suspicious login detection');?></li> <!--Suspicious Login Detection-->
					<li title="" rel="tooltip"><?php echo $l->t('LDAP/AD');?></li> <!--LDAP/AD-->
					<li title="<?php echo $l->t('Native SAML is implemented directly in the application without a requirements on external software like Apache modules. Native SAML is compatible with all webservers and supports group memberships, flexible session management, multiple identity providers and app specific passwords.');?>" rel="tooltip"><?php echo $l->t('Native SAML');?></li> <!-- Native SAML -->
					<li title="<?php echo $l->t('Authentication through Apache modules allows eg SAML/ShibbolethADFS, OAuth, OpenID, CAS and more.');?>" rel="tooltip"><?php echo $l->t('Auth via env variable');?></li> <!--Auth via env variable-->
					<li title="" rel="tooltip"><?php echo $l->t('Kerberos');?></li> <!--Kerberos-->
						<li class="cd-group"><?php echo $l->t('Storage');?></li> <!--Storage-->
					<li title="" rel="tooltip"><?php echo $l->t('File storage (local/NFS)');?></li> <!--File storage (local/NFS)-->
					<li title="" rel="tooltip"><?php echo $l->t('Object storage (S3/Swift)');?></li> <!--Object storage (S3/Swift)-->
					<li title="" rel="tooltip"><?php echo $l->t('CIFS/Windows Shares');?></li> <!--CIFS/Windows Shares-->
					<li title="" rel="tooltip"><?php echo $l->t('Sharepoint');?></li> <!--Sharepoint-->
					<li title="" rel="tooltip"><?php echo $l->t('Extensible storage');?></li> <!--Extensible storage-->
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
							<li title="<?php echo $l->t('open source = any OSI approved license. Anything else is proprietary.');?>" rel="tooltip"><?php echo $l->t('Open Source');?></li> <!--License-->
							<li title="<?php echo $l->t('The limit is customer infrastructure. There are no limits from the Nextcloud side.');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Large file support-->
							<li title="<?php echo $l->t('can be hosted wherever you decide, including hybrid.');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Self hosted/on premises-->
							<li title="<?php echo $l->t('single cluster: up to 100K active users. With Global Scale: unlimited.');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Scalability limits-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-android"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i> / <i class.="fa fa-check"></i></li> <!-- Auto upload images/video/other files -->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-windows"></i> <i class="fa fa-linux"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--LAN Synchronization-->
							<li title="<?php echo $l->t('Over 200 apps available');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible with apps-->

							<li title="<?php echo $l->t('Free version for home/small business users, paid with more features for larger enterprises');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Outlook integration-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Versioning-->
							<li title="<?php echo $l->t('Does NOT block collaborative editing');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Locking-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Multiple shares-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Share Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Dashboard-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--View PDF, images, video, gallery-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="<?php echo $l->t('both Android/iOS (Android with integrated 3rd party tool)');?>" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Mobile calendar/contact integration-->
							<li title="<?php echo $l->t('With Collabora Online, ONLYOFFICE, Hancom Office or MS Office Online');?>" rel="tooltip"><div><i class="fa fa-check"></i> / <i class="fa fa-check"></i><br /><small>4 options</small></div></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Video Verification -->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Inter-server sharing-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Workspaces -->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Keyboard/screen reader support-->
                            <li title="<?php echo $l->t('AAA with optional theme" class="green');?>" rel="tooltip">AA/AAA</li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Admin features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Access control lists-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--impersonate users-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><div><i class="fa fa-check"></i><br /><small><?php echo $l->t('Easy self-service in UI or full custom CSS');?></small></div></li> <!--Branding-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Compliance features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Audit trail-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Imprint and privacy links-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Built in data-request/account deletion-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Terms-of-service-->
							<li class="cd-group"><?php echo $l->t('');?></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Client side encryption-->
							<li title="<?php echo $l->t('Optionally verify identity of recipient by video call');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--App access rights-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Authentication-->
                            <li title="<?php echo $l->t('Supports multiple factors');?>" rel="tooltip"><?php echo $l->t('U2F/OTP/SMS Signal/Telegram notifications');?></li> <!--2-factor authentication-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Suspicious Login Detection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Kerberos-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Object storage (S3/Swift)-->
							<li title="<?php echo $l->t('Also supports Kerberos');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><div><i class="fa fa-check"></i><br /><small>2013/2016</small></div></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible storage-->
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Google Drive</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/google.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="<?php echo $l->t('open source = any OSI approved license. Anything else is proprietary.');?>" rel="tooltip"><?php echo $l->t('Proprietary');?></li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Self hosted/on premises-->
							<li title="<?php echo $l->t('5K in one group, 10K for educational organizations, unclear limits otherwise');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Scalability limits-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-android"></i></li> <!--Mobile Clients-->
							<li title="<?php echo $l->t('can do files with external app');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i> / <i class.="fa fa-times"></i>*</li> <!-- Auto upload images/video/other files -->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-windows"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--LAN Synchronization-->
							<li title="<?php echo $l->t('No third-party apps that can be integrated');?>" rel="tooltip"><i class="fa fa-times"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Outlook integration-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Server features-->
							<li title="<?php echo $l->t('Full-text search costs money, cross-application search free');?>" rel="tooltip"><i class="fa fa-usd"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><?php echo $l->t('limited');?></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Locking-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Multiple shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Share Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Dashboard-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--View PDF, images, video, gallery-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Mobile calendar/contact integration-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Video Verification -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Inter-server sharing-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Workspaces -->
							    <li class="cd-group"><?php echo $l->t('');?></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Admin features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Access control lists-->
							<li title="<?php echo $l->t('Only via third party app');?>" rel="tooltip"><i class="fa fa-clock-o"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--impersonate users-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Monitoring web/API interface-->
							<li title="<?php echo $l->t('max 6 months');?>" rel="tooltip"><?php echo $l->t('limited	');?></li> <!--Data retention policy support-->
							<li title="<?php echo $l->t('Hosted only, customer has no control over when/what changes');?>" rel="tooltip"><?php echo $l->t('N.A.');?></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><?php echo $l->t('very limited');?></li> <!--Branding-->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Audit trail-->
                            <li title="<?php echo $l->t('Only to their imprint and privacy policy, not yours');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Imprint and privacy links-->
                            <li title="<?php echo $l->t('You can request (deletion of) data');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Built in data-request/account deletion-->
                            <li title="<?php echo $l->t('You and your customers you share with have to agree to their terms');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Terms-of-service-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--App access rights-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Authentication-->
                            <li title="<?php echo $l->t('Multiple factors');?>" rel="tooltip"><?php echo $l->t('U2F/OTP/SMS notifications');?></li> <!--2-factor authentication-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Suspicious Login Detection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Kerberos-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Office 365</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/office365.svg" alt="product logo">
							<a class="button button--small button--blue compare-button" href="<?php echo home_url('nextcloud-vs-office365') ?>"><small><?php echo $l->t('Detailed comparison');?></small></a>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="<?php echo $l->t('open source = any OSI approved license. Anything else is proprietary.');?>" rel="tooltip"><?php echo $l->t('Proprietary');?></li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><?php echo $l->t('10GB');?></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Self hosted/on premises-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Scalability limits-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-android"></i></li> <!--Mobile Clients-->
							<li title="<?php echo $l->t('Can be done with external app');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i> / <i class.="fa fa-times"></i>*</li> <!-- Auto upload images/video/other files -->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-windows"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--LAN Synchronization-->
							<li title="<?php echo $l->t('Limited to Microsoft Apps');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Outlook integration-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Full text search-->
							<li title="<?php echo $l->t('Only for MS Office files');?>" rel="tooltip"><?php echo $l->t('limited');?></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Locking-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Multiple shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Share Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Dashboard-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--View PDF, images, video, gallery-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Mobile calendar/contact integration-->
							<li title="<?php echo $l->t('feature-limited in web and mobile UI compared to desktop');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Video Verification -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Inter-server sharing-->
							<li title="<?php echo $l->t('Can pin files to the top of a folder, which gives a big preview.');?>" rel="tooltip"><i class="fa fa-times"></i>*</li> <!-- Workspaces -->
							    <li class="cd-group"><?php echo $l->t('');?></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Admin features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Access control lists-->
							<li title="" rel="tooltip"><div><i class="fa fa-check"></i><br /><small><?php echo $l->t('limited to admins');?></small></div></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--impersonate users-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Data retention policy support-->
							<li title="<?php echo $l->t('Hosted only, customer has no control over when/what changes');?>" rel="tooltip"><?php echo $l->t('N.A.');?></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Branding-->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Audit trail-->
                            <li title="<?php echo $l->t('Only to their imprint and privacy policy, not yours');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Imprint and privacy links-->
                            <li title="<?php echo $l->t('You can request (deletion of) data');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Built in data-request/account deletion-->
                            <li title="<?php echo $l->t('You and your customers you share with have to agree to their terms');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Terms-of-service-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--App access rights-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Authentication-->
                            <li title="<?php echo $l->t('Supports multiple 2nd factor options');?>" rel="tooltip"><?php echo $l->t('U2F/OTP/SMS notifications');?></li> <!--2-factor authentication-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Suspicious Login Detection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Kerberos-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>ownCloud</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/owncloud.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="<?php echo $l->t('[ownCloud Enterprise Edition] open source = any OSI approved license. Anything else is proprietary.');?>" rel="tooltip"><?php echo $l->t('Proprietary');?></li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Self hosted/on premises-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Scalability limits-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-android"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i> / <i class.="fa fa-times"></i></li> <!-- Auto upload images/video/other files -->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-windows"></i> <i class="fa fa-linux"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--LAN Synchronization-->
							<li title="<?php echo $l->t('Over 70 apps available');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-usd"></i></li> <!--Outlook integration-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Locking-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Multiple shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Share Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dashboard-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--View PDF, images, video, gallery-->
							<li title="<?php echo $l->t('unsupported');?>" rel="tooltip"><i class="fa fa-times"></i>/<i class="fa fa-times"></i>/<i class="fa fa-times"></i></li> <!--Audio/Video/Text chat-->
							<li title="<?php echo $l->t('Only as unsupported (Nextcloud-developed) third party apps');?>" rel="tooltip"><i class="fa fa-times"></i>/<i class="fa fa-times"></i>/<i class="fa fa-times"></i>/<i class="fa fa-times"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="<?php echo $l->t('Unsupported. Available for iOS, Android possible with tool from Nextcloud partner');?>" rel="tooltip"><?php echo $l->t('<i class="fa fa-check optional"></i>/<i class="fa fa-check optional"></i>');?></li> <!--Mobile calendar/contact integration-->
							<li title="<?php echo $l->t('Collabora Online, OnlyOffice, MS Office Online');?>" rel="tooltip"><div><i class="fa fa-check"></i> / <i class="fa fa-times"></i><br /><small><?php echo $l->t('3 options');?></small></div></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Video Verification -->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Inter-server sharing-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Workspaces -->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Admin features-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Access control lists-->
							<li title="" rel="tooltip"><div><i class="fa fa-check"></i><br /><small><?php echo $l->t('limited to admins');?></small></div></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--impersonate users-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i>/<i class="fa fa-times"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Long term support (5-10 years)-->
							<li title="<?php echo $l->t('Using paid ownBrander or manually changing CSS');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Branding-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Compliance features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Audit trail-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Imprint and privacy links-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Built in data-request/account deletion-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Terms-of-service-->
							<li class="cd-group"><?php echo $l->t('');?></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Server side encryption-->
							<li title="<?php echo $l->t('Only offering a web E2EE solution without client support so failing to provide zero-knowledge protection');?>" rel="tooltip"><i class="fa fa-times"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Video Verification-->
							<li title="<?php echo $l->t('There is an unsupported external app developed by community student, occasionally updated');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--App access rights-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Authentication-->
                            <li title="<?php echo $l->t('Ca not be enforced, only supporting OTP');?>" rel="tooltip"><i class="fa fa-times"></i></li> <!--2-factor authentication-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Suspicious Login Detection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check" ></i></li> <!--Kerberos-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File storage (local/NFS)-->
							<li title="<?php echo $l->t('Only support for outdated V2 authentication');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><div><i class="fa fa-check"></i><br /><small>2013/2016</small></div></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible storage-->
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Box</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/box.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="<?php echo $l->t('open source = any OSI approved license. Anything else is proprietary.');?>" rel="tooltip"><?php echo $l->t('Proprietary');?></li> <!--License-->
							<li title="" rel="tooltip"><?php echo $l->t('Varies per plan');?></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><?php echo $l->t('5GB');?></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Self hosted/on premises-->
							<li title="<?php echo $l->t('Some limitations exist but nothing is clearly documented');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Scalability limits-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-android"></i></li> <!--Mobile Clients-->
							<li title="<?php echo $l->t('Only paid. Files can be done with external app');?>" rel="tooltip"><i class="fa fa-usd"></i> / <i class="fa fa-usd"></i> / <i class.="fa fa-times"></i>*</li> <!-- Auto upload images/video/other files -->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-windows"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--LAN Synchronization-->
							<li title="<?php echo $l->t('Limited Microsoft office integration');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-usd"></i></li> <!--Outlook integration-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Server features-->
							<li title="<?php echo $l->t('full-text search paid, cross-app search not available');?>" rel="tooltip"><i class="fa fa-usd"></i></li> <!--Full text search-->
							<li title="<?php echo $l->t('25-50 revisions depending on plan');?>" rel="tooltip"><?php echo $l->t('limited');?></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Locking-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Multiple shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Share Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dashboard-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--View PDF, images, video, gallery-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i>/<i class="fa fa-times"></i>/<i class="fa fa-times"></i></li> <!--Audio/Video/Text chat-->
							<li title="<?php echo $l->t('not natively, third party app');?>" rel="tooltip"><i class="fa fa-clock-o"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Mobile calendar/contact integration-->
							<li title="<?php echo $l->t('Through Microsoft Office');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Video Verification -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Inter-server sharing-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Workspaces -->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Keyboard/screen reader support-->
                            <li title="<?php echo $l->t('AAA with Box.com accessiblity site');?>" rel="tooltip" class="green">AA/AAA</li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Admin features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Access control lists-->
							<li title="" rel="tooltip"><div><i class="fa fa-check"></i><br /><small><?php echo $l->t('limited to admins');?></small></div></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--impersonate users-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Data retention policy support-->
							<li title="<?php echo $l->t('Hosted only, customer has no control over when/what changes');?>" rel="tooltip"><?php echo $l->t('N.A.');?></li> <!--Long term support (5-10 years)-->
							<li title="<?php echo $l->t('Varies per plan but mainly yes');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Branding-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Audit trail-->
                            <li title="<?php echo $l->t('Only to their imprint and privacy policy, not yours');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Imprint and privacy links-->
                            <li title="<?php echo $l->t('You can request (deletion of) data');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Built in data-request/account deletion-->
                            <li title="<?php echo $l->t('You and your customers you share with have to agree to their terms');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Terms-of-service-->
							<li class="cd-group"><?php echo $l->t('');?></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--With same-site cookies-->
							<li title="<?php echo $l->t('Can be done in limited way with third party applications');?>" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--App access rights-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Authentication-->
                            <li title="<?php echo $l->t('Supports multiple factors');?>" rel="tooltip"><?php echo $l->t('SMS');?></li> <!--2-factor authentication-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Suspicious Login Detection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Kerberos-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Citrix</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/citrix.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="<?php echo $l->t('open source = any OSI approved license. Anything else is proprietary.');?>" rel="tooltip"><?php echo $l->t('Proprietary');?></li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><?php echo $l->t('10GB');?></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Self hosted/on premises-->
							<li title="<?php echo $l->t('2K users in a share, more limits exist but not clearly documented');?>" rel="tooltip"><i class="fa fa-times"></i></li> <!--Scalability limits-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-android"></i></li> <!--Mobile Clients-->
							<li title="<?php echo $l->t('Extra paid feature. Files can be done with third party app');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i> / <i class.="fa fa-times"></i>*</li> <!-- Auto upload images/video/other files -->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-windows"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--LAN Synchronization-->
							<li title="<?php echo $l->t('No third-party apps that can be integrated');?>" rel="tooltip"><i class="fa fa-times"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Outlook integration-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Versioning-->
							<li title="<?php echo $l->t('not available in web UI or WebDAV');?>" rel="tooltip"><?php echo $l->t('<i class="fa fa-check"></i>*');?></li> <!--File Locking-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Multiple shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Share Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Dashboard-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--View PDF, images, video, gallery-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-times"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Mobile calendar/contact integration-->
							<li title="<?php echo $l->t('Microsoft Office 365');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Video Verification -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Inter-server sharing-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Workspaces -->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Admin features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Access control lists-->
							<li title="" rel="tooltip"><div><i class="fa fa-check"></i><br /><small><?php echo $l->t('limited to admins');?></small></div></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--impersonate users-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Data retention policy support-->
							<li title="<?php echo $l->t('Hosted only, customer has no control over when/what changes');?>" rel="tooltip"><?php echo $l->t('N.A.');?></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Branding-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Audit trail-->
                            <li title="<?php echo $l->t('Only to their imprint and privacy policy, not yours');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Imprint and privacy links-->
                            <li title="<?php echo $l->t('You can request (deletion of) data');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Built in data-request/account deletion-->
                            <li title="<?php echo $l->t('You and your customers you share with have to agree to their terms');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Terms-of-service-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--App access rights-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Authentication-->
                            <li title="" rel="tooltip"><?php echo $l->t('SMS');?></li> <!--2-factor authentication-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Suspicious Login Detection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Kerberos-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-usd"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Dropbox</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/dropbox.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="<?php echo $l->t('open source = any OSI approved license. Anything else is proprietary.');?>" rel="tooltip"><?php echo $l->t('Proprietary');?></li> <!--License-->
							<li title="" rel="tooltip"><?php echo $l->t('Varies per plan');?></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><?php echo $l->t('20GB');?></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Self hosted/on premises-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Scalability limits-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Client-->
							<li title="<?php echo $l->t('free version only supports up to 3 client devices total');?>" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-android"></i></li> <!--Mobile Clients-->
							<li title="<?php echo $l->t('Files can be done with third party app');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i> / <i class.="fa fa-times"></i>*</li> <!-- Auto upload images/video/other files -->
							<li title="<?php echo $l->t('free version only supports up to 3 client devices total');?>" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-windows"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LAN Synchronization-->
							<li title="<?php echo $l->t('Limited Microsoft office integration');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Outlook integration-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Server features-->
							<li title="<?php echo $l->t('full-text search only in paid versions, with 365 integration no cross-app search');?>" rel="tooltip"><i class="fa fa-usd"></i></li> <!--Full text search-->
							<li title="<?php echo $l->t('Max 1 month, up to 1 year with Business subscription');?>" rel="tooltip"><?php echo $l->t('limited');?></li> <!--File Versioning-->
							<li title="<?php echo $l->t('only for business edition');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Locking-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Multiple shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Share Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dashboard-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--View PDF, images, video, gallery-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i>/<i title="through Google Apps" rel="tooltip" class="fa fa-google"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Mobile calendar/contact integration-->
							<li title="<?php echo $l->t('Microsoft Office 365');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Video Verification -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Inter-server sharing-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Workspaces -->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Admin features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Access control lists-->
							<li title="" rel="tooltip"><div><i class="fa fa-check"></i><br /><small><?php echo $l->t('limited to admins');?></small></div></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--impersonate users-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Data retention policy support-->
							<li title="<?php echo $l->t('Hosted only, customer has no control over when/what changes');?>" rel="tooltip"><?php echo $l->t('N.A.');?></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><?php echo $l->t('very limited');?></li> <!--Branding-->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Audit trail-->
                            <li title="<?php echo $l->t('Only to their imprint and privacy policy, not yours');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Imprint and privacy links-->
                            <li title="<?php echo $l->t('You can request (deletion of) data');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Built in data-request/account deletion-->
                            <li title="<?php echo $l->t('You and your customers you share with have to agree to their terms');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Terms-of-service-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--App access rights-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Authentication-->
                            <li title="" rel="tooltip"><?php echo $l->t('SMS/U2F/OTP');?></li> <!--2-factor authentication-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Suspicious Login Detection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Kerberos-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Egnyte</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/egnyte.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="<?php echo $l->t('open source = any OSI approved license. Anything else is proprietary.');?>" rel="tooltip"><?php echo $l->t('Proprietary');?></li> <!--License-->
							<li title="" rel="tooltip"><?php echo $l->t('max 10 TB');?></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><?php echo $l->t('25GB');?></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Self hosted/on premises-->
							<li title="<?php echo $l->t('various file limitations exist, unclear user limits');?>" rel="tooltip"><?php echo $l->t('unclear');?></li> <!--Scalability limits-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-android"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i> / <i class="fa fa-times"></i> / <i class.="fa fa-times"></i>*</li> <!-- Auto upload images/video/other files -->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-windows"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LAN Synchronization-->
							<li title="<?php echo $l->t('Pretty wide range of apps');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Outlook integration-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Full text search-->
							<li title="<?php echo $l->t('max 3 revisions');?>" rel="tooltip"><?php echo $l->t('limited');?></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Locking-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Multiple shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Share Metadata-->
							<li title="<?php echo $l->t('Admins have a dashboard, users not');?>" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dashboard-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--View PDF, images, video, gallery-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i>/<i class="fa fa-times"></i>/<i class="fa fa-times"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i>/<i class="fa fa-times"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Mobile calendar/contact integration-->
							<li title="<?php echo $l->t('Microsoft Office 365');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Video Verification -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Inter-server sharing-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Workspaces -->
							    <li class="cd-group"><?php echo $l->t('');?></li> <!--Accessibility-->
                            <li title="<?php echo $l->t('could not find information');?>" rel="tooltip"><i class="fa fa-check optional"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Admin features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Access control lists-->
							<li title="" rel="tooltip"><div><i class="fa fa-check"></i><br /><small><?php echo $l->t('limited to admins');?></small></div></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--impersonate users-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i>/<i class="fa fa-check"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Data retention policy support-->
							<li title="<?php echo $l->t('Hosted only, customer has no control over when/what changes');?>" rel="tooltip"><?php echo $l->t('N.A.');?></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Branding-->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Audit trail-->
                            <li title="<?php echo $l->t('If self-hosted');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Imprint and privacy links-->
                            <li title="<?php echo $l->t('Yes');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Built in data-request/account deletion-->
                            <li title="<?php echo $l->t('If self-hosted');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Terms-of-service-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--App access rights-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Authentication-->
                            <li title="<?php echo $l->t('OTP only via Duo Push');?>" rel="tooltip"><?php echo $l->t('OTP/SMS');?></li> <!--2-factor authentication-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Suspicious Login Detection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Kerberos-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Accellion</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/accellion.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="<?php echo $l->t('open source = any OSI approved license. Anything else is proprietary.');?>" rel="tooltip"><?php echo $l->t('Proprietary');?></li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><?php echo $l->t('2GB');?></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Self hosted/on premises-->
							<li title="<?php echo $l->t('real limits are unclear');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Scalability limits-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-android"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i> / <i class="fa fa-times"></i> / <i class.="fa fa-times"></i>*</li> <!-- Auto upload images/video/other files -->
							<li title="" rel="tooltip"><i class="fa fa-apple"></i> <i class="fa fa-windows"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--LAN Synchronization-->
							<li title="<?php echo $l->t('No third-party apps that can be integrated');?>" rel="tooltip"><i class="fa fa-times"></i></li> <!--Extensible with apps-->

							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Outlook integration-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Server features-->
							<li title="" rel="tooltip"><?php echo $l->t('limited');?></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Locking-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Multiple shares-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Share Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dashboard-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--View PDF, images, video, gallery-->
							<li title="<?php echo $l->t('Microsoft Lync plug-in');?>" rel="tooltip"><i class="fa fa-clock-o"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Mobile calendar/contact integration-->
							<li title="<?php echo $l->t('Microsoft Office 365');?>" rel="tooltip"><i class="fa fa-check"></i> / <i class="fa fa-check"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Video Verification -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Inter-server sharing-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!-- Workspaces -->
							    <li class="cd-group"><?php echo $l->t('');?></li> <!--Accessibility-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Keyboard/screen reader support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--WCAG 2.1 support-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Dyslexia-friendly font-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Admin features-->
                            <li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Access control lists-->
							<li title="" rel="tooltip"><div><i class="fa fa-times"></i><br /><small><?php echo $l->t('limited to admins');?></small></div></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--impersonate users-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i>/<i class="fa fa-times"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><?php echo $l->t('limited');?></li> <!--Branding-->
                                <li class="cd-group"><?php echo $l->t('');?></li> <!--Compliance features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Audit trail-->
                            <li title="<?php echo $l->t('When picking on-premises option');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Imprint and privacy links-->
                            <li title="<?php echo $l->t('When picking on-premises option');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Built in data-request/account deletion-->
                            <li title="<?php echo $l->t('When picking on-premises option');?>" rel="tooltip"><i class="fa fa-check"></i></li> <!--Terms-of-service-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Client side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Video Verification-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--File Access Control-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--App access rights-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Authentication-->
							<li title="" rel="tooltip"><?php echo $l->t('SMS');?></li> <!--2-factor authentication-->
                            <li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Suspicious Login Detection-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!-- Native SAML -->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Auth via env variable-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Kerberos-->
								<li class="cd-group"><?php echo $l->t('');?></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->

			<ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</div> <!-- .cd-products-comparison-table -->
</div> <!-- container-fluid -->
</section>
<section class="disclaimer">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p><?php echo $l->t('Based on public information to our best knowledge, gathered September 2 2018. We understand the world is constantly changing, if you see we missed a feature or made a mistake, let us know.');?> You can use <a href="<?php echo home_url('contact') ?>">our contact form.</a></p>
            <p><?php echo $l->t('Note that end-to-end encryption in a browser is not the same as client-side encryption as it fails to protect adequately from the server (it does not offer \'zero-knowledge\' protection). The security experts at the British NCC Group have <a class="hyperlink" href="https://www.nccgroup.trust/us/about-us/newsroom-and-events/blog/2011/august/javascript-cryptography-considered-harmful/">written on this subject,</a> considering javascript encryption in the browser "harmful".');?></p>
        </div>
    </div>
</div>
</section>

