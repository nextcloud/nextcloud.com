<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/athome.css?v=1" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css"> -->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script> -->
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer", "modules/submenu"])
	});
</script>
</head>
<div class="background features-background second-menu">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('<span class="avoidwrap">Your cloud,</span> <span class="avoidwrap">your rules</span>');?></h1>
				<h2><?php echo $l->t('Nextcloud puts your data at your fingertips, under your control. Store your documents, calendar, contacts and photos on a server at home, at one of our providers or in a data center you trust.');?></h2>
			</div>
		</div>
	</div>
</div>
<div class="second-menu hide-in-overlay">
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#hosting"><span class="avoidwrap"><?php echo $l->t('Your files');?></span></a>
			<a href="#security"><span class="avoidwrap"><?php echo $l->t('Security');?></span></a>
			<a href="#clients"><span class="avoidwrap"><?php echo $l->t('Clients');?></span></a>
			<a href="#storage"><span class="avoidwrap"><?php echo $l->t('External storage');?></span></a>
			<a href="#calendar"><span class="avoidwrap"><?php echo $l->t('Integration');?></span></a>
			<a href="#appstore"><span class="avoidwrap"><?php echo $l->t('More apps');?></span></a>
		</div>
	</div>
</div>

<section class="section--hosting">
	<a id="hosting"></a>
	<div class="container">
		<div class="col-md-6">
			<img class="img-responsive acess__anywhere" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/access-anywhere.png" alt="in action" >
		</div>
		<div class="col-md-6 feature--block">
			<h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud gives you access to all your files wherever you are.');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Where are your photos and documents? With Nextcloud <strong>you</strong> pick a server of your choice, at home, in a data center or at a provider. And that is where your files will be. Nextcloud runs on that server, protecting your data and giving you access from your desktop or mobile devices. Through Nextcloud you also access, sync and share your existing data on that FTP drive at school, a Dropbox or a NAS you have at home.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud is free, open source and');?> <a class="hyperlink" href="<?php echo home_url('contribute') ?>"><?php echo $l->t('you can get involved in making it better!</a>');?></p>
			<a href="<?php echo home_url('yourdata') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('How to get started');?></a>
		</div>
	</div>
</section>

<section class="section--on-premise">
    <a id="selfhosting"></a>
<div class="container">
	<h1 class="section--heading-1 text-center"><?php echo $l->t('Why self-hosting?');?></h1>
	<div class="row">
		<div class="col-md-4 feature--block">
            <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/manual.svg" /></div>
            <h3 class="section--paragraph__title"><?php echo $l->t('Because your data is everywhere');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Right now, nearly ALL data there is about you is stored at half a dozen companies, with names changing per country (Facebook, wechat, Vk, Google, Weibo, Tencent, Microsoft). They know where you live, what you search for, who you talk to, what you buy, what you eat and --probably-- what you think.');?></p>
        </div>
        <div class="col-md-4 feature--block">
        <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/monitoring.svg" /></div>
            <h3 class="section--paragraph__title"><?php echo $l->t('Because knowledge is power');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Your data represents who you are and can <em>easily</em> be abused.');?></p>
			<p class="section--paragraph"><?php echo $l->t('And power gets abused. Always. Maybe by a local politician who doesn\'t like that you discovered his fraud. A local police woman who likes your boyfriend. A well connected businessman who likes to buy your store for cheap. A crime syndicate annoyed you try to help drug addicts kick off.');?></p>
        </div>
        <div class="col-md-4 feature--block">
        <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/camera.svg" /></div>
            <h3 class="section--paragraph__title"><?php echo $l->t('Maybe you just care about privacy');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Even if your data isn\'t abused --they promise not to, right?-- isn\'t it nobody\'s business what you do?');?></p>
			<p class="section--paragraph"><?php echo $l->t('<strong>We believe privacy is a right</strong>, a foundation for democracy. And we like to help you get it back.');?></p>
			<p class="section--paragraph"><?php echo $l->t('And running your own, private Nextcloud server is the best way to get started!');?></p>
        </div>
	</div>
	<div class="row">
	<p class="section--paragraph text-center"><!--<a class="hyperlink" href="<?php echo home_url('contributors') ?>"><?php echo $l->t('See the people behind Nextcloud!</a>');?>--><a href="https://nextcloud.com/blog/the-issue-with-public-cloud/" class="button button--blue button--arrow button--large"><?php echo $l->t('Our blog about public clouds and SaaS');?></a></p>
	</div>
	<div class="row">
	<div class="col-md-6">
	<h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud is people');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud is an open source community of developers and contributors, some helping out in their free time, others paid by their company to make Nextcloud better.');?> <!--<a class="hyperlink" href="<?php echo home_url('contributors') ?>"><?php echo $l->t('You can see some of the people involved in Nextcloud here.</a>');?>--></p>
			<p class="section--paragraph"><?php echo $l->t('We organize events, attend conferences, hang out together at meetups and hackweeks. If you would like to meet Nextclouders,');?> <a class="hyperlink" href="<?php echo home_url('events') ?>"><?php echo $l->t('check out our events page!</a>');?></p>
			<a class="overlay-trigger" href="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2017.jpg"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2017-small.jpg" alt="in action" ></a>
	</div>
	<div class="col-md-6">
        <div class="text-center">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/github-activity.png" alt="in action" >
            <p><a class="hyperlink" href="https://www.openhub.net/p/nextcloud"><?php echo $l->t('See some development statistics.');?></a></p>
        </div>
	</div>
</div>
</section>

<section class="section--dashboard">
<div class="container">
	<div class="row">
        <div class="col-md-6 image--feature">
			<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/555765504?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Nextcloud Dashboard Introduction"></iframe></div>
		</div>
		<div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Start your day informed');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Dashboard is your starting point of the day, giving you an overview of your upcoming appointments, urgent emails, chat messages, incoming tickets, latest tweets and much more! Users can set their status so others know what they are up to..');?></p>
                <a href="<?php echo home_url('dashboard') ?>" class="overlay-trigger button button--blue button--arrow button--large"><?php echo $l->t('Dashboard features');?></a>
		</div>
	</div>
</div>
</section>

<section class="section--files">
	<a id="files"></a>
	<div class="container">
		<div class="col-md-6 image--floated">
			<div data-type="youtube" data-video-id="Fe1I7wYW6hA"></div>
			<div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/556097133?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Anonymous upload in 2 minutes.mp4"></iframe></div>
		</div>
		<div class="col-md-6 feature--block">
			<h3 class="section--paragraph__title"><?php echo $l->t('Share with others on your terms.');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The easy web interface allows you to share files with other users on your server, to create and send password protected public links, to let others upload files to your cloud and to get notifications on your phone and desktop when a user on another cloud server shares files directly with you. And you can do all these things from the desktop or mobile clients, too.');?></p>
			<a href="<?php echo home_url('sharing') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Share with Nextcloud');?></a>
		</div>
	</div>
</section>

<section class="section--files">
	<a id="files"></a>
	<div class="container">
		<div class="col-md-6 image--feature new-img">
            <img class="img-responsive featureimg overlay-trigger" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/Admin_Overview_Security_and_setup_warnings.png" alt="in action" >

		</div>
		<div class="col-md-6 feature--block">
			<h3 class="section--paragraph__title"><?php echo $l->t('Self-hosting made easy.');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Running your own server takes work, but Nextcloud makes it easy as possible to run a reliable, secure service for you and your family. We give you tips and recommendations in the setup screen, warn you of updates and let you run an update with a few clicks in the web interface, provide a web installer and super easy-to-manage Snap and VM images and much more.');?></p>
			<a href="<?php echo home_url('install') ?>/#instructions-server" class="button button--blue button--arrow button--large"><?php echo $l->t('Download options');?></a>
		</div>
	</div>
</section>

<section class="section--design">
	<div class="container">
		<div class="col-md-6 image--floated">
		<div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/555692548?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Nextcloud Hub introduction"></iframe></div>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Designed for humans');?></h3>
			<p class="section--paragraph"><?php echo $l->t('An efficient, easy to use interface is one of the main things that sets Nextcloud apart from the competition. Design is about more than being pretty. The goal is to allow users to get work done with the least amount of effort, making it obvious how to accomplish tasks and reducing the number of steps needed to do so.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Good design can be seen in the entire user interface and each release makes steps forward.');?></p>
		</div>
	</div>
</section>

<section class="section--security">
	<a id="security"></a>
	<div class="container">
		<div class="col-md-6 image--feature">
		<img class="overlay-trigger img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP.png" alt="in action" >
		</div>

		<div class="col-md-6 feature--block">
			<h3 class="section--paragraph__title"><?php echo $l->t('Security first');?></h3>
			<p class="section--paragraph"><?php echo $l->t('We are deeply committed to protecting the safety of your data and we\'re certain that Nextcloud offers the best security in the self hosted file sync and share world, because:');?></p>
			<p class="section--paragraph"><?php echo $l->t('<i class="fa-key fa"></i> we follow industry best practices around security (aligned to <a class="hyperlink" href="https://en.wikipedia.org/wiki/ISO/IEC_27001:2013">ISO27001</a>)');?></p>
			<p class="section--paragraph"><?php echo $l->t('<i class="fa-key fa"></i> we offer some of the <a class="hyperlink" href="https://nextcloud.com/blog/introducing-the-nextcloud-bug-bounty-program/" target="_blank">highest open source security bug bounties</a>');?></p>
			<p class="section--paragraph"><?php echo $l->t('');?></p>
			<p class="section--paragraph"><?php echo $l->t('<i class="fa-key fa"></i> we integrate unique in-transit, server-side and client-side end-to-end encryption technologies.');?></p>
			<p class="section--paragraph"><?php echo $l->t('');?></p>
			<a href="<?php echo home_url('secure') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Security in Nextcloud');?></a>
		</div>
	</div>
</section>
<section class="section--privacy quote">
<div class="container">
    <div class="row">
        <div class="col-md-6 image--feature new-img image--floated">
            <a class="overlay-trigger " href="<?php bloginfo('template_directory'); ?>/assets/img/features/privacy_big.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/privacy.png" alt="in action" ></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Privacy center');?></h3>
			<p class="section--paragraph"><?php echo $l->t('What does privacy mean for you, and how can Nextcloud help you keep your data under control? In the settings you can find the Nextcloud Privacy center, where you can see where your data is and who has access to it.');?></p>
		</div>
    </div>
</div>
</section>


<section class="section--clients">
	<a id="clients"></a>
	<div class="container">
		<div class="col-md-6 image--feature">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png">
		</div>
		<div class="col-md-6 feature--block">
			<h3 class="section--paragraph__title"><?php echo $l->t('Mobile and desktop clients');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The free Nextcloud clients for Android, iOS and desktop systems allow you to sync and share files, in a fully secure way through an encrypted connection. The mobile clients feature automatic upload of pictures and videos you take and can synchronize select files and folders. The clients can handle multiple accounts, show all activity happening on your server and notify you of new events such as the availability of new shares.');?></p>
			<a href="<?php echo home_url('clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
		</div>
	</div>
</section>

<section class="section--Calendar">
	<a id="calendar"></a>
	<div class="container">
		<div class="col-md-6 image--floated image--feature">
			<div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/555693729?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Nextcloud Groupware video"></iframe></div>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Calendar, Contacts and Mail');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The Nextcloud Calendar and Contacts apps allow you to store, sync and share your plans and contacts. You can share with users or groups on your server or sync the calendar or contacts with your devices and access them wherever you are. Nextcloud Mail gives you a easy to use but powerful mail client, directly integrated in Nextcloud, that can talk to your existing IMAP or POP mail server.');?></p>
		</div>
	</div>
</section>

<section class="section--calls">
	<a id="calls"></a>
	<div class="container">
		<div class="col-md-6 image--feature">
			<div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/555693791?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Nextcloud Talk video"></iframe></div>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Secure audio and video calls');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Operate your own secure and private audio/video communication service! You can access it through a browser, invite family or friends and collaborate in a group through secure, end to end encrypted audio and video communication. The WebRTC, peer to peer communication channel can not be intercepted even by the admin of the server. The talk app also supports chat and comes with mobile applications for Android and iOS so you can call others from your mobile phone!');?></p>
			<a href="<?php echo home_url('talk') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Nextcloud Talk');?></a>
		</div>
	</div>
</section>

<section class="section--accessibility">
	<div class="container">
		<div class="col-md-6 image--floated">
			<div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/556100447?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Accessibility themes.mp4"></iframe></div>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Accessibility');?></h3>
			<p class="section--paragraph"><?php echo $l->t('To ensure Nextcloud is accessible to users with visual impairments, Nextcloud has extensive keyboard accessibility and screen reader support.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The colors used in Nextcloud meet the WCAG 2.0 AA standard for contrast and we created themes for users who need even higher support. Our High Contrast theme aims for WCAG 2.0 AAA compliance, while a Dyslexia-friendly font option helps people with reading disability. A Dark theme is also available.');?></p>
		</div>
	</div>
</section>

<section class="section--picocms">
	<a id="picocms">
	<div class="container">
		<div class="col-md-6 image--feature">
			<a><img class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/picocms-nw.png"/></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Build your own website!');?></h3>
			<p class="section--paragraph"><?php echo $l->t('With PicoCMS you can create and manage websites with an address like: <code>https://cloud.example.com/sites/my_site/</code> You can edit the website as easy text (Markdown style) files in Nextcloud.');?></p>
            <p class="section--paragraph"><?php echo $l->t('You can make the pages visible for everyone or only for users or groups on your Nextcloud. You can also share the files that the website consists of so you can collaborate with others maintaining the site.');?></p>
			<a href="https://nextcloud.com/blog/nextcloud-introduces-easy-website-builder-for-education-edition-with-picocms/" class="button button--blue button--arrow button--large"><?php echo $l->t('PicoCMS introduction blog');?></a>
		</div>
	</div>
</section>

<section class="section--Collabora">
	<a id="collabora"></a>
	<div class="container">
		<div class="col-md-6 image--feature image--floated">
			<div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/555693791?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Document editing video"></iframe></div>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('View and edit documents with Collabora');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online is a powerful LibreOffice-based online office suite with collaborative editing that works in all modern browsers.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online supports editing your documents in real time with multiple other editors, showing high fidelity, WYSIWYG rendering and preserving the layout and formatting of your documents.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online supports dozens of document formats including <strong>DOC, DOCX, PPT, PPTX, XLS, XLSX + ODF, Import/View Visio, Publisher</strong> and many more...');?></p>
			<a href="<?php echo home_url('collaboraonline') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Collabora Online Office');?></a>
		</div>
	</div>
</section>

<section class="section--search">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1 video">
			<div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/555766609?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Universal search video"></iframe></div>
		</div>
    </div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
                <h3 class="section--paragraph__tittle"><?php echo $l->t('Find everything in one place');?></h3>
                <p class="section--paragraph"><?php echo $l->t('On the top-right of your Nextcloud window, a search glass shows search results from all over Nextcloud. Additional search providers can be installed and over a dozen different search providers are available to show you Github issues, Moodle courses, Jira tickets and more');?></p>
                <p><a href="<?php echo home_url('unified-search') ?>" class="overlay-trigger button button--blue button--arrow"><?php echo $l->t('Unified Search');?></a></p>
		</div>
	</div>
</div>
</section>

<a id="calendar"></a>
<section class="section--outlook quote">
<div class="container">
    <div class="featurerow">
    <h2 class="text-center"><?php echo $l->t('Nextcloud Outlook and Thunderbird Integration');?></h2>
    <p class="section--paragraph text-center"><?php echo $l->t('Automatically upload files to replace large attachments or integrate Calendars and Contacts in your mail client');?></p>
        <div class="row">
            <div class="col-md-6">
                <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/556108262?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Outlook integration video"></iframe></div>

            </div>
            <div class="col-md-6">
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Secure Sharing Outlook Add-in enables Nextcloud users to easily and securely send files, folders or upload links to others from within Microsoft Outlook. The Add-in can replace attachments, automatically uploading files to Nextcloud and inserting a secure link in the email. It also makes it easy for users to provide others with a secure file upload link.');?></p>
                <p class="section--paragraph"><?php echo $l->t('With the Outlook CalDav Synchronizer integration with Nextcloud, Outlook users can easily sync their events, tasks and contacts between Microsoft Outlook and their Nextcloud server.');?></p>
                <p class="section--paragraph"><?php echo $l->t('A free version is available for home users!');?></p>
                <p><a href="<?php echo home_url('outlook') ?>" class="button button--arrow button--large"><?php echo $l->t('Outlook Add-ins');?></a></p>
            </div>
        </div>
    </div>
    <div class="featurerow">
<!-- 			<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Mozilla Thunderbird');?></h1> -->
			<div class="row">
				<div class="col-md-6 image--feature image--floated">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/moztb.png"><img class="overlay-trigger img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/moztb.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 featureblock">
					<h3 class="section--paragraph__title"><?php echo $l->t('Mozilla Thunderbird');?></h3>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud also provides a <a class="hyperlink" href="https://addons.thunderbird.net/en-US/thunderbird/addon/filelink-nextcloud-owncloud/">Thunderbird Filelink Addon!</a> This Thunderbird extension makes it easy to send large attachments with Thunderbird by automatically uploading them first to a Nextcloud server and by then inserting the link into the body of your email.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Thanks to the Mozilla Thunderbird Lightning Calendar add-in and the Cardbook Thunderbird Contacts add-in, Calendar and Contacts integrate great into Thunderbird.');?></p>
					<p><a href="<?php echo home_url('outlook') ?>" class="button button--arrow button--large"><?php echo $l->t('Thunderbird Add-ins');?></a></p>
				</div>
			</div>
		</div>
</div>
</section>

<section class="section--usermanagement">
	<a id="storage"></a>
	<div class="container">
        <div class="col-md-6 image--feature new-img image--floated">
            <a class="overlay-trigger " href="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/usermanagement.png" alt="in action" ></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Integrated account management');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud features built in account management with optional two-factor authentication, making it easy to handle creating and modifying accounts. If you have set up a LDAP, you can connect it to Nextcloud as well!');?></p>
			<a href="<?php echo home_url('usermanagement') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
		</div>
	</div>
</section>

<section class="section--workflow">
	<a id="workflow"></a>
	<div class="container">
		<div class="col-md-6 image--feature new-img">
			<a><img class="overlay-trigger img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/flow-as-user.png" alt="in action"/></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Workflow management');?></h3>
			<p class="section--paragraph"><?php echo $l->t('With Nextcloud Flow, you can automate common actions like turning a file into a PDF when it is dropped into a specific folder, or receiving a notification when a file with a certain tag is updated. The File Access Control app and other workflow tools can be used to prevent accidental sharing of sensitive data, adding an additional layer of protection to Nextcloud.');?></p>
			<a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Workflow handling');?></a>
		</div>
	</div>
</section>

<section class="section--monitoring">
    <a id="monitoring"></a>
    <div class="container">
        <div class="col-md-6 image--feature image--floated new-img">
            <a><img class="overlay-trigger img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring.png" alt="in action"/></a>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Tracking changes to your files');?></h3>
            <p class="section--paragraph"><?php echo $l->t('The nextcloud Activity app shows file modifications, downloads of shares and changes to comments or tags, providing an overview in the browser, clients or via email notifications and an RSS feed.');?></p>
            <h3 class="section--paragraph__title"><?php echo $l->t('Monitoring your Nextcloud server');?></h3>
            <p class="section--paragraph"><?php echo $l->t('The Monitoring app enables admins to monitor the health and performance of a Nextcloud system with a graphical UI and an API endpoint for monitoring apps.');?></p>
            <a href="<?php echo home_url('monitoring') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring activity');?></a>
        </div>
    </div>
</section>

<section class="section--storage">
	<a id="storage"></a>
	<div class="container">
		<div class="col-md-6 image--feature new-img">
			<a><img class="overlay-trigger img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/externalstorage.png"/></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('External storage, securely encrypted');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The external storage feature of Nextcloud gives you access to your data wherever it is. Nextcloud can access files stored with a wide variety of popular cloud service providers such as Amazon, Google and Dropbox, but you can also access them using standard protocols such as NFS, (S)FTP, WebDAV and more.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Encryption App can encrypt data at rest for both local and remote storage, protecting data stored on networks outside of your server. Nextcloud will keep your data where it is and retrieve it over a secure communication channel whenever you need to access it.');?></p>
			<a href="<?php echo home_url('storage') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
		</div>
	</div>
</section>


<section class="section--appstore benefits">
<div class="container-fluid banner quote">
    <div class="container">
    <div class="col-md-6">
        <h1 class="section--heading-1 section--text--center"><?php echo $l->t('Extend your cloud');?></h1>
        <p class="section--paragraph"><?php echo $l->t('You can extend the functionality of your Nextcloud with extra features from the Nextcloud app store. Among the more than 200 apps you can find features that enhance sharing, including:');?></p>
        <p class="section--paragraph">
        <ul>
        <li><i class="fa-check fa"></i> <?php echo $l->t('Groupware apps like Calendar, Contacts, Mail, News, Notes, Bookmarks and Tasks');?></li>
        <li><i class="fa-check fa"></i> <?php echo $l->t('Collaboration and productivity apps Keepass management, Video Calls, a Kanban app, music players, Password managers, Checksums, download manager, a Markdown editor and collaborative text editing.');?></li>
        <li><i class="fa-check fa"></i> <?php echo $l->t('Security and authentication features like two-factor authentication mechanisms, SSO, Ransomware protection, admin announcements, Zimbra integration, a tiny CMS app and more.');?></li>
        </ul>
        </p>
        <div class="text-center morebuttondiv">
			<a href="https://apps.nextcloud.com" class="button button--large button--arrow"><?php echo $l->t('App Store');?> <i class="icon-arrow-circle-o-right icon"></i></a>
        </div>
    </div>
    <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/appstore-big.png">
    <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/appstore-big.png">
    </div>
</div>
</section>




<section class="section--more">
	<a id="more"></a>
<div class="container-widest">
	<h1 class="section--heading-1 section--text--center"><?php echo $l->t('And much more.');?></h1>
    <div class="row">
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
    <div class="row">
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
    <div class="row">
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
    <div class="row">
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
    <div class="row">
        <div class="col-md-1 featureblock">
        </div>
        <div class="col-md-3 featureblock">
        </div>
        <div class="col-md-1 featureblock">
<!--        <i class="fa-copy fa"></i>-->
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><br /><a class="hyperlink" href="<?php echo home_url('compare') ?>"><?php echo $l->t('... see how we compare to other solutions!</a>');?></p>
        </div>
        <div class="col-md-1 featureblock">
        </div>
        <div class="col-md-3 featureblock">
        </div>
    </div>
</div>
</section>

<section class="section--getstarted">
    <div class="container-fluid quote">
        <h2 class="text-center"><?php echo $l->t('Get started');?></h2>
        <p class="section--paragraph section--text--center"><?php echo $l->t('Get your own Nextcloud and start owning your data!');?></p>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 featureblock">
                    <div class="row text-center">
                        <a href="<?php echo home_url('yourdata') ?>" class="button button--arrow button--large"><?php echo $l->t('How to get started');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require get_template_directory().'/overlay.php'; ?>
