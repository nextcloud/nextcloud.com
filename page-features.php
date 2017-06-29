<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/features.css" rel="stylesheet">
<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/jquery-ui.css" rel="stylesheet" />
<script>
	require(["require.config"], function() {
		require(["pages/features", "modules/submenu"])
	});
</script>

</head>
<div class="background features-background second-menu">
	<div class="container">
		<div class="row">
			<div class="col-md-6 revealOnScroll topheader">
				<h1><?php echo $l->t('<span class="avoidwrap">Your cloud,</span> <span class="avoidwrap">your rules</span>');?></h1>
				<h2><?php echo $l->t('Nextcloud puts your data at your fingertips, under your control. Store your documents, calendar, contacts and photos on a server in your data center, at home or at one of our providers.');?></h2>
			</div>
		</div>
	</div>
</div>
<div class="second-menu">
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#hosting"><span class="avoidwrap"><?php echo $l->t('Your files');?></span></a>
<!--			<a href="#files"><span class="avoidwrap"><?php echo $l->t('File access');?></span></a>-->
			<a href="#security"><span class="avoidwrap"><?php echo $l->t('Security');?></span></a>
<!-- 			<a href="#workflow"><span class="avoidwrap"><?php echo $l->t('Control');?></span></a> -->
			<a href="#clients"><span class="avoidwrap"><?php echo $l->t('Clients');?></span></a>
			<a href="#storage"><span class="avoidwrap"><?php echo $l->t('External storage');?></span></a>
			<a href="#calendar"><span class="avoidwrap"><?php echo $l->t('Collaborate');?></span></a>
<!-- 			<a href="#calls"><span class="avoidwrap"><?php echo $l->t('Video calls');?></a> -->
<!-- 			<a href="#collabora"><span class="avoidwrap"><?php echo $l->t('Online Office');?></span></a> -->
			<a href="#appstore"><span class="avoidwrap"><?php echo $l->t('More apps');?></span></a>
		</div>
	</div>
</div>

<section class="section--hosting">
	<a name="hosting" id="hosting"></a>
	<div class="container">
		<div class="col-md-6 revealOnScroll">
			<img class="img-responsive acess__anywhere" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/access-anywhere.png" alt="in action" >
		</div>
		<div class="col-md-6 revealOnScroll feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Nextcloud gives you access to all your files wherever you are.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Where are your photos and documents? With Nextcloud <strong>you</strong> pick a server of your choice, at home, in a data center or at a provider. And that is where your files will be. Nextcloud runs on that server, protecting your data and giving you access from your desktop or mobile devices. Through Nextcloud you also access, sync and share your existing data on that FTP drive at the office, a Dropbox or a NAS you have at home.');?></p>
			<a href="/install" class="button button--blue button--arrow button--large"><?php echo $l->t('Get started');?></a>
		</div>
	</div>
</section>

<section class="section--files">
	<a name="files" id="files"></a>
	<div class="container">
		<div class="col-md-6 revealOnScroll image--floated">
			<div class="yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=Fe1I7wYW6hA" title="Creating anonymous upload links">
					<img  src="https://img.youtube.com/vi/Fe1I7wYW6hA/hqdefault.jpg" title="Creating anonymous upload links" />
					<div class="yt-play-btn">
						<i></i>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-6 revealOnScroll feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Share with others on your terms.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The easy web interface allows you to share files with other users on your server, to create and send password protected public links, to let others upload files to your cloud and to get notifications on your phone and desktop when a user on another cloud server shares files directly with you. And you can do all these things from the desktop or mobile clients, too.');?></p>
			<a href="/sharing" class="button button--blue button--arrow button--large"><?php echo $l->t('Share with Nextcloud');?></a>
		</div>
	</div>
</section>

<section class="section--security">
	<a name="security" id="security"></a>
	<div class="container">
		<div class="col-md-6 revealOnScroll">
		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP.png" alt="in action" >
		</div>

		<div class="col-md-6 revealOnScroll feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Security first');?></p>
			<p class="section--paragraph"><?php echo $l->t('We are deeply committed to protect the safety of the data of our customers and users. We are confident that Nextcloud offers the best security in the self hosted file sync and share industry, because:');?></p>
			<p class="section--paragraph"><?php echo $l->t('we follow industry best practices around security (aligned to <a class="hyperlink" href="https://en.wikipedia.org/wiki/ISO/IEC_27001:2013">ISO27001</a>)');?></p>
			<p class="section--paragraph"><?php echo $l->t('we offer some of the <a class="hyperlink" href="https://nextcloud.com/introducing-the-nextcloud-bug-bounty-program/" target="_blank">highest open source security bug bounties</a>');?></p>
			<p class="section--paragraph"><?php echo $l->t('');?></p>
			<a href="/secure" class="button button--blue button--arrow button--large"><?php echo $l->t('Security in Nextcloud');?></a>
		</div>
	</div>
</section>

<section class="section--workflow">
	<a name="workflow" id="workflow"></a>
	<div class="container">
		<div class="col-md-6 revealOnScroll image--floated">
			<a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/file-access-control-nw.png" alt="in action"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('Workflow management');?></p>
			<p class="section--paragraph"><?php echo $l->t('With Nextcloud, system administrators can control and direct the flow of data between users on or between servers. Rule based file tagging and responding to these tags as well as other triggers like physical location, user group, file properties and request type enables administrators to specifically deny access to, convert, delete or retain data following business or legal requirements.
				Nextcloud puts you in control of your data and keeps it safe.');?></p>
			<a href="/workflow" class="button button--blue button--arrow button--large"><?php echo $l->t('Workflow handling');?></a>
		</div>
	</div>
</section>

<section class="section--monitoring">
    <a name="monitoring" id="monitoring"></a>
    <div class="container">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-nw.png" alt="in action"/></a>
        </div>
            <p class="section--paragraph__tittle"><?php echo $l->t('Tracking changes to your files');?></p>
            <p class="section--paragraph"><?php echo $l->t('The nextcloud Activity app shows file modifications, downloads of shares and changes to comments or tags, providing an overview in the browser, clients or via email notifications and an RSS feed.');?></p>
            <p class="section--paragraph__tittle"><?php echo $l->t('Monitoring your Nextcloud server');?></p>
            <p class="section--paragraph"><?php echo $l->t('The Monitoring app enables admins to monitor the health and performance of a Nextcloud system with a graphical UI and an API endpoint for monitoring apps.');?></p>
            <a href="/monitoring" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring activity');?></a>
        </div>
    </div>
</section>

<section class="section--clients">
	<a name="clients" id="clients"></a>
	<div class="container">
		<div class="col-md-6 image--floated revealOnScroll">
			<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png">
		</div>

		<div class="col-md-6 revealOnScroll feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Mobile and desktop clients');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud clients for Android, iOS and desktop systems allow you to sync and share files, in a fully secure way through an encrypted connection. The mobile clients feature automatic upload of pictures and videos you take and can synchronize select files and folders. The clients can handle multiple accounts, show all activity happening on your server and notify you of new events such as the availability of new shares.');?></p>
			<a href="/clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
		</div>
	</div>
</section>

<section class="section--storage">
	<a name="storage" id="storage"></a>
	<div class="container">
		<div class="col-md-6 revealOnScroll">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('External storage, securely encrypted');?></p>
			<p class="section--paragraph"><?php echo $l->t('The external storage feature of Nextcloud gives you access to your data wherever it is. Nextcloud can access files stored with a wide variety of popular cloud service providers such as Amazon, Google and Dropbox, but you can also access them using standard protocols such as NFS, (S)FTP, WebDAV and more.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Encryption App can encrypt data at rest for both local and remote storage, protecting data stored on networks outside of your infrastructure. Keys can be handled by an external key management server or stored locally, on the server. Nextcloud will keep your data where it is and retrieve it over a secure communication channel whenever you need to access it.');?></p>
			<a href="/storage" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
		</div>
	</div>
</section>

<section class="section--Calendar">
	<a name="calendar" id="calendar"></a>
	<div class="container">
		<div class="col-md-6 image--floated revealOnScroll">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar-nw.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('Calendar and Contacts');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Nextcloud Calendar and Contacts apps allow you to store, sync and share your plans and contacts. You can share with users or groups on your server or sync the calendar or contacts with your devices and access them wherever you are. The Calendar and Contacts app feature:');?></p>
			<p class="section--paragraph"><?php echo $l->t('Easy to use interface with views for days, weeks, months and years');?></p>
			<p class="section--paragraph"><?php echo $l->t('Private and shared calendars and addressbooks with permissions management');?></p>
			<p class="section--paragraph"><?php echo $l->t('CalDAV and CardDAV sync with third party clients both on mobile and desktop (i.e with Thunderbird, iOS and more)');?></p>
		</div>
	</div>
</section>

<section class="section--calls">
	<a name="calls" id="calls"></a>
	<div class="container">
		<div class="col-md-6 revealOnScroll">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('Secure audio and video calls');?></p>
			<p class="section--paragraph"><?php echo $l->t('Operate your own secure and private audio/video communication. You can access it through a browser, invite customers or friends and collaborate in a group through secure, end to end encrypted audio and video communication. The WebRTC, peer to peer communication channel can not be intercepted even by the admin of the server. It provides an easy to use interface.');?></p>
			<a href="/webrtc" class="button button--blue button--arrow button--large"><?php echo $l->t('Communication');?></a>
		</div>
	</div>
</section>

<section class="section--Collabora">
	<a name="collabora" id="collabora"></a>
	<div class="container">
		<div class="col-md-6 image--floated revealOnScroll">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-nw.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('View and edit documents with Collabora');?></p>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online is a powerful LibreOffice-based online office suite with collaborative editing that works in all modern browsers.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online supports editing your documents in real time with multiple other editors, showing high fidelity, WYSIWYG rendering and preserving the layout and formatting of your documents.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online supports dozens of document formats including <strong>DOC, DOCX, PPT, PPTX, XLS, XLSX + ODF, Import/View Visio, Publisher</strong> and many more...');?></p>
			<a href="/collaboraonline" class="button button--blue button--arrow button--large"><?php echo $l->t('Collabora Online Office');?></a>
		</div>
	</div>
</section>

<section class="section--appstore">
    <a name="appstore" id="appstore"></a>
    <div class="container">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/appstore.png"/></a>
        </div>
            <p class="section--paragraph__tittle"><?php echo $l->t('Add dozens more features through Nextcloud Apps');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud was designed as a platform, with functionality provided by apps which can be individually enabled and disabled.');?></p>
            <p class="section--paragraph"><?php echo $l->t('The Nextcloud app store contains dozens of apps providing features Nextcloud users and admins might find useful. For users, features like an audio player, password manager, Task manager, Mail app, Ebook reader or the GPX file editor can be of interest. Server administrators looking for certain capabilities would find OpenID Connect SSO integration, more two-factor authentication mechanisms or a registration app useful.');?></p>
            <a href="https://apps.nextcloud.com" class="button button--blue button--arrow button--large"><?php echo $l->t('Browse Nextcloud Apps');?></a>
        </div>
    </div>
</section>

<section class="section--more">
	<a name="more" id="more"></a>
<div class="container-widest">
	<h1 class="section--heading-1 section--text--center"><?php echo $l->t('And much more.');?></h1>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
        <i class="fa-code-fork fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t(' Nextcloud is open source - there are no limitations and you can inspect, integrate, extend and modify Nextcloud however you want');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-tags fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Nextcloud offers an easy to use user interface which comes with search functionality, favorites, tags and even more ways to quickly reach the files you need. Full Text search is available using Apache Solr.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-file-text fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Text file editing and thumbnail previews of PDF, images, text files, office files and more');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
        <i class="fa-bug fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Integration of anti-virus scanning functionality with the anti-virus app');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-puzzle-piece fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Authentication through LDAP / Active Directory, Kerberos and Shibboleth / SAML 2.0 and more');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-life-ring fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Pre-loaded files and folders for new users. Populate a new user\'s Files area with, for example, a tutorial file, which appears when they first log in.');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
        <i class="fa-key fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Powerful, integrated logging, two-factor authentication and NIST compliant password policy control functionalities');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-share-alt fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Fine-grained control from mobile, desktop or the Web over data access and sharing capabilities. Pick from the list of users and groups, stored either locally or on another, authorized, server. ');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-archive fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Advanced quota management with configurable accounting of external storage');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
        <i class="fa-code fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Sharing and Provisioning REST APIs. Facilitates the integration of remote 3rd party apps');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-certificate fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Quick access to core functions for app development with the powerful Nextcloud App API and webhooks following the publication / subscription model');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-paint-brush fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Built in, easy to use theming to set color, login background and logo from Administrator screen.');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
        </div>
        <div class="col-md-3 featureblock">
        </div>
        <div class="col-md-1 featureblock">
<!--        <i class="fa-copy fa"></i>-->
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('<br />... see how we <a class="hyperlink" href="/compare">compare to other solutions!</a>');?></p>
        </div>
        <div class="col-md-1 featureblock">
        </div>
        <div class="col-md-3 featureblock">
        </div>
    </div>
</div>
</section>


<div class="calltoaction revealOnScroll">
	<h1 class="section--heading-2 section--text--center"><?php echo $l->t('Get started now');?></h1>
	<p class="section--paragraph section--text--center"><?php echo $l->t('Install Nextcloud server');?><br>
	<a href="/install" class="button button--blue button--arrow button--large"><?php echo $l->t('Install');?></a></p>
</div>
