<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/files.css?v=1" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["modules/submenu"])
	});
</script>
<meta name=”Description” content="Learn how Nextcloud Files helps you and your team members be productive with secure, easy to use collaboration and communication tools!">
</head>
<div class="background files-background second-menu">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('<span class="avoidwrap">Nextcloud Files</span>');?></h1>
				<h2><?php echo $l->t('Makes it easy to sync, share and collaborate on your files.');?></h2>
			</div>
		</div>
	</div>
</div>
<div class="second-menu">
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#send"><span class="avoidwrap"><?php echo $l->t('File exchange');?></span></a>
			<a href="#clients"><span class="avoidwrap"><?php echo $l->t('Clients');?></span></a>
			<a href="#workflow"><span class="avoidwrap"><?php echo $l->t('Workflow');?></span></a>
			<a href="#storage"><span class="avoidwrap"><?php echo $l->t('External storage');?></span></a>
			<a href="#integrations"><span class="avoidwrap"><?php echo $l->t('Integrations');?></span></a>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
    <div class="row">
		<div class="col-md-10 col-md-offset-1 video">
			<iframe width="100%" height="450" src="https://www.youtube-nocookie.com/embed/tbd" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Enterprise File Sync and Share');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Thanks to Nextcloud Files, your employees have easy access to their files, photos and documents to work and can share and collaborate with team members, customers and partners. And IT knows nobody besides those they shared with has access to those files.');?></p>
		</div>
	</div>
</section>

<section class="section--overview">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/mobile.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Easy access anywhere');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('A modern and easy-to-use web interface, desktop clients and mobile apps.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Real-time collaboration and instant access to all data from any device, anywhere!');?></p>
		</div>
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/permissions.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Ultimate security');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Powerful encryption capabilities and a built-in rule-based File Access Control.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Complemented by strong password policies, brute-force protection, ransomware protection and more.');?></p>
		</div>
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/storage.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Deep integration');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Access data from FTP, Windows Network Drive, SharePoint, NFS, Object storage, ...');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Simple configuration and integration lower costs and decrease risk while leveraging existing IT investments.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6">
                <a href="https://www.bayern-evangelisch.de/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/elkb.png" alt="elkb logo"/></a>
            </div>
            <div class="col-md-6  feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud offers collaboration solution to Evangelisch-Lutherische Kirche in Bayern');?></h3>
                <blockquote><?php echo $l->t('We deployed Nextcloud with Collabora some months ago. We are very happy with the user-acceptance of the sync&share function and hope to expand on Collabora usage as part of our plans to make Nextcloud a core component of our digital-workspace initiative.');?></blockquote>
                 - Bartel Pieterse, Fachbereichsleiter Kommunikation & Kollaboration (KIV), <a class="hyperlink" href="https://www.bayern-evangelisch.de/">ELKB</a>
            </div>
        </div>
    </div>
</section>

<section class="section--collaboration quote">
	<div class="container">
        <div class="row">
            <div class="col-md-6  image--floated">
                <div data-type="youtube" data-video-id="tbd"></div>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/tbd" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
                <h3 class="section--paragraph__title"><?php echo $l->t('Seamless collaboration');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The core strength of Nextcloud is its ability to enhance team productivity on the go with an easy user interface on mobile, web and desktop and powerful integrated document collaboration and communication capabilities.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Real-time notifications of shares or comments on mobile devices, built-in collaborative editing of Microsoft Office compatible files, seamless transition to chat and audio/video calls and a wide variety of productivity tools to handle mail, appointments, tasks and more are available in Nextcloud.');?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <h1> </h1>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center"><?php echo $l->t('Improve collaboration and communication and reduce operational expenses with the leading content collaboration platform.');?></p>
                <p class="text-center"><?php echo $l->t('Contact us now to learn how we can help you!');?></p>
            <div class="text-center morebuttondiv">
                <a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
            </div>
        </div>
	</div>
</section>

<section class="section--design">
	<div class="container">
        <div class="row">
                <div class="col-md-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/LrF4jf1ROOc" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
                </div>
                    <h3 class="section--paragraph__title"><?php echo $l->t('Designed for humans');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('An efficient, easy to use interface is one of the main things that sets Nextcloud apart from the competition. Design is about more than being pretty. The goal is to allow users to get work done with the least amount of effort, making it obvious how to accomplish tasks and reducing the number of steps needed to do so.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Good design can be seen in the entire user interface and each release makes steps forward.');?></p>
                </div>
            </div>
	</div>
</section>

<a name="send" id="send"></a>
<section class="section--sharing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image--floated">
                <div data-type="youtube" data-video-id="AhFnbB-a7ik"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/AhFnbB-a7ik" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Secure file exchange');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud Files enables hospitals, banks, notaries and government agencies to securely send files to and receive files from customers, patients, clients or partners.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The easy web and mobile interfaces of Nextcloud Files allow users to share files with other users on the server, to create and send password-protected public links, to let others upload files to the private cloud and to get notifications on phone and desktop when a user on another cloud server shares files.');?></p>
                <a href="<?php echo home_url('file-drop') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Secure file exchange');?></a><br>
            </div>
        </div>
    </div>
</section>

<section class="section--workspaces">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/o8DNaeEnXkg" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Rich workspaces');?></h3>
                <p class="section--paragraph"><?php echo $l->t('With Workspaces you can bring context to your folders, adding notes and even todo lists and links to files on top. This is great to coordinate with your team, making sure everyone knows what a particular folder is for, or to track important tasks in a prominent location.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--file-locking">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image--floated">
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/Li38SmjKNkA" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Lock files');?></h3>
                <p class="section--paragraph"><?php echo $l->t('File locking helps users prevent conflicts with colleagues who are trying to edit the same files. While office documents and notes can be edited in real time in the browser, some files have to be downloaded to make changes. Lock the file and colisions are avoided! Other users can easily contact you in chat or by a comment to ask what is going on.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--workflow">
	<a name="workflow" id="workflow"></a>
	<div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/Yid1haOiBcY" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
                <h3 class="section--paragraph__title"><?php echo $l->t('Workflow management');?></h3>
                <p class="section--paragraph"><?php echo $l->t('With Nextcloud, system administrators can control and direct the flow of data between users on or between servers. Rule-based file tagging and responding to these tags as well as other triggers like physical location, user group, file properties and request type enables administrators to specifically deny access to, convert, delete or retain data following business or legal requirements.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud puts IT in control of user data and keeps it safe.');?></p>
                <a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Workflow handling');?></a>
            </div>
        </div>
	</div>
</section>

<?php require get_template_directory().'/compliance.php';?>

<section class="section--clients">
	<a name="clients" id="clients"></a>
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--feature">
                <img class="img-responsive featureimg" alt="picture of mobile and desktop apps" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png">
            </div>

            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Mobile and desktop clients');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud Files clients for Android, iOS and desktop systems allow users to sync and share files, in a fully secure way through an encrypted connection. The mobile clients feature automatic upload of pictures and videos users take and they can synchronize selected files and folders. The clients can handle multiple accounts, show all activity happening on the server and notify users of new events such as the availability of new shares.');?></p>
                <!--<p class="section--paragraph"><?php echo $l->t('The Nextcloud clients support');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end Encryption</a> for ultimate security of enterprise data.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Note that E2E is currently (early 2019) in beta. V2 is expected end summer 2019.');?></p>-->
                   <a href="<?php echo home_url('clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Nextcloud clients');?></a>
            </div>
        </div>
	</div>
</section>

<section class="section--monitoring">
    <a name="monitoring" id="monitoring"></a>
    <div class="container">
        <div class="row">
            <div class="col-md-6 image--feature new-img image--floated">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring.png" alt="Screenshot of file monitoring"/></a>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Compliance-ready monitoring');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud enables admins to monitor the health and performance of a Nextcloud system with a graphical UI and an API endpoint for monitoring apps. Fully audit-ready logs of user activity are generated.');?></p>
                <h3 class="section--paragraph__title"><?php echo $l->t('Tracking changes to user files');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud Files lets users track file modifications, downloads of shares and changes to comments or tags, providing an overview in the browser, clients or via email notifications and an RSS feed.');?></p>
                <a href="<?php echo home_url('monitoring') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring and compliance');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--vdr">
    <div class="container">
        <div class="row feature-row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/vdr-link.jpg" alt="in action"/>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Virtual Data Room');?></h3>
                <p class="section--paragraph"><?php echo $l->t('In settings where a firewall is needed between departments or organizations without impeding smooth and efficient collaboration, a separate Virtual Data Room can be set up. Nextcloud offers a wide range of unique features for VDR use and its on-premises nature offers unparalleled confidentiality and control.');?></p>
                <a href="<?php echo home_url('virtual-data-room') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Virtual Data Rooms');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--accessibility">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/S_842AQx3MQ" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
                <h3 class="section--paragraph__title"><?php echo $l->t('Accessibility');?></h3>
                <p class="section--paragraph"><?php echo $l->t('To ensure Nextcloud is accessible to users with visual impairments, Nextcloud has extensive keyboard accessibility and screen reader support.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The colors used in Nextcloud meet the WCAG 2.0 AA standard for contrast and we created themes for users who need even higher support. Our High Contrast theme aims for WCAG 2.0 AAA compliance, while a Dyslexia-friendly font option helps people with reading disability. A Dark theme is also available.');?></p>
            </div>
        </div>
	</div>
</section>

<section class="section--others">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center"><?php echo $l->t('Synergy');?></h2>
            <p class="section--paragraph text-center"><?php echo $l->t('');?></p>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="section--paragraph text-center"><?php echo $l->t('Also check out our other self-hosted products offering seamless integration in Nextcloud Files.');?></p>
            </div>
        </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
			<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png" /></a>
			<div class="row text-center"><h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Talk');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Secure online meetings, chat and web conferencing');?></p></div>
			<div class="text-center morebuttondiv">
                <a href="<?php echo home_url('talk') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
		</div>
		<div class="col-md-5">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar-nw.png" class="img-responsive" />
			<div class="row text-center"><h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Groupware');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Team planning and email made easy');?></p></div>
			<div class="text-center morebuttondiv">
                <a href="<?php echo home_url('groupware') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
		</div>
    </div>
</div>
</section>

<section class="section--storage">
	<a name="storage" id="storage"></a>
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--feature">
                <a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png"/></a>
            </div>
                <h3 class="section--paragraph__title"><?php echo $l->t('External storage, securely encrypted');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The external storage feature of Nextcloud gives users access to their data wherever it is. Nextcloud Files can access data stored with a wide variety of popular cloud service providers such as Amazon, Google and Dropbox, but can also access file storage solutions using standard protocols such as NFS, (S)FTP, WebDAV and more.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Encryption App can encrypt data at rest for both local and remote storage, protecting data stored on networks outside of user infrastructure. Keys can be handled by an external key management server or stored locally, on the server.');?></p>
                <a href="<?php echo home_url('storage') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('External storage');?></a>
            </div>
        </div>
	</div>
</section>

<section class="section--usermanagement">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--feature new-img image--floated">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/usermanagement.png" alt="in action" ></a>
            </div>
                <h3 class="section--paragraph__title"><?php echo $l->t('Integrated account management');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud features built-in account management with optional two-factor authentication as well as Single-sign-on support and integration with external user directories like LDAP or IMAP, SMB, FTP and more.');?></p>
                <a href="<?php echo home_url('usermanagement') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('User management');?></a>
            </div>
        </div>
	</div>
</section>


<a name="integrations" id="integrations"></a>
<section class="section--outlook quote">
<div class="container">
    <div class="featurerow">
    <h2 class="text-center"><?php echo $l->t('Nextcloud Outlook Integration');?></h2>
    <p class="section--paragraph text-center"><?php echo $l->t('Automatically upload files to replace large attachments or integrate Calendars and Contacts in Microsoft Outlook');?></p>
        <div class="row">
            <div class="col-md-6">
                <div data-type="youtube" data-video-id="jwhfeJlYBbM"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/jwhfeJlYBbM" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Secure Sharing Outlook Add-in enables Nextcloud users to easily and securely send files, folders or upload links to others from within Microsoft Outlook. The Add-in can replace attachments, automatically uploading files to Nextcloud and inserting a secure link in the email. It also makes it easy for users to provide others with a secure file upload link.');?></p>
                <p><a href="<?php echo home_url('outlook') ?>" class="button button--arrow button--large"><?php echo $l->t('Secure Sharing Outlook Add-in');?></a></p>
            </div>
        </div>
    </div>
    <div class="featurerow">
<!-- 			<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Mozilla Thunderbird');?></h1> -->
			<div class="row">
				<div class="col-md-6 image--feature image--floated">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/outlook/moztb.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/outlook/moztb.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 featureblock">
					<h3 class="section--paragraph__title"><?php echo $l->t('Mozilla Thunderbird');?></h3>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud also provides a <a class="hyperlink" href="https://addons.mozilla.org/en-US/thunderbird/addon/nextcloud-filelink/">Thunderbird Filelink Addon!</a> This Thunderbird extension makes it easy to send large attachments with Thunderbird by automatically uploading them first to a Nextcloud server and by then inserting the link into the body of your email.');?></p>
				</div>
			</div>
		</div>
</div>
</section>

<section class="section--fulltextsearch">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated image--feature">
                <a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/fulltextsearch.png"/></a>
            </div>
                <h3 class="section--paragraph__title"><?php echo $l->t('Powerful search');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud includes a powerful full-text search engine capable of using ElasticSearch as back-end. Its flexible plugin-based interface enables search capabilities beyond files and accommodates other back-end solutions like Apache Solr.');?></p>
                <a href="https://apps.nextcloud.com/apps/fulltextsearch" class="button button--blue button--arrow button--large"><?php echo $l->t('In the App store');?></a>
            </div>
        </div>
	</div>
</section>


<?php require get_template_directory().'/verticals.php';?>


<a name="onlineoffice" id="onlineoffice"></a>
<section class="section--Collabora">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated image--feature new-img">
                <a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/Collabora_Online_-_versions_integration.png"/></a>
            </div>
                <h3 class="section--paragraph__title"><?php echo $l->t('View and edit documents with Collabora');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Collabora Online is a powerful LibreOffice-based online office suite with collaborative editing that works in all modern browsers.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Collabora Online supports editing documents in real-time with multiple other editors, showing high fidelity, WYSIWYG rendering and preserving the layout and formatting of documents.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Collabora Online supports dozens of document formats including <strong>DOC, DOCX, PPT, PPTX, XLS, XLSX + ODF, Import/View Visio, Publisher</strong> and many more...');?></p>
                <a href="<?php echo home_url('collaboraonline') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Collabora Online Office');?></a>
            </div>
        </div>
	</div>
</section>

<section class="section--ONLYOFFICE">
	<div class="container">
        <div class="row">

            <div class="col-md-6 image--floated image--feature">
                <a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/onlyoffice-presentation.png"/></a>
            </div>
                <h3 class="section--paragraph__title"><?php echo $l->t('Collaborate on documents with ONLYOFFICE');?></h3>
                <p class="section--paragraph"><?php echo $l->t('ONLYOFFICE integration in Nextcloud empowers your users to collaborate on office documents with team members in real time.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Compatibility with Microsoft Office formats means perfect documents, every time.');?></p>
                <ul>
                <li><?php echo $l->t('A modern and familiar user interface');?></li>
                <li><?php echo $l->t('The same document rendering in every browser');?></li>
                <li><?php echo $l->t('Low resource consumption on server and client');?></li>
                <li><?php echo $l->t('Desktop level editing capabilities');?></li>
                    </ul>
                <a href="<?php echo home_url('onlyoffice') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('ONLYOFFICE');?></a>
            </div>
        </div>
	</div>
</section>

<section class="section--more">
	<a name="more" id="more"></a>
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
        <p class=""><?php echo $l->t('Nextcloud offers an easy-to-use user interface which comes with search functionality, favorites, tags and even more ways to quickly reach the files users need. Full Text search is available using Apache Solr.');?></p>
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
        <p class=""><?php echo $l->t('Built in, easy-to-use theming to set color, login background and logo from Administrator screen.');?></p>
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
        <h2 class="text-center"><?php echo $l->t('Get started now');?></h2>
        <p class="section--paragraph section--text--center"><?php echo $l->t('Try out Nextcloud server for FREE or get a quote');?></p>
        <div class="container">
            <div class="row">
                <div class="col-md-12 featureblock">
                    <div class="row text-center">
                        <a href="<?php echo home_url('install') ?>" class="button button--arrow button--large"><?php echo $l->t('Try Nextcloud Files');?></a>
                        <a href="<?php echo home_url('buy') ?>" class="button button--arrow button--large"><?php echo $l->t('Contact sales');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
