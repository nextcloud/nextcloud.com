<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/files.css?v=2" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["modules/submenu"])
	});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/files-video.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/files-video.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/files-video.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/files-video.png">
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
            <a href="#collaboration"><span class="avoidwrap"><?php echo $l->t('Collaboration');?></span></a>
			<a href="#workflow"><span class="avoidwrap"><?php echo $l->t('Workflow');?></span></a>
			<a href="#send"><span class="avoidwrap"><?php echo $l->t('File exchange');?></span></a>
			<a href="#clients"><span class="avoidwrap"><?php echo $l->t('Clients');?></span></a>
			<a href="#integrations"><span class="avoidwrap"><?php echo $l->t('Integrations');?></span></a>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
    <div class="row">
		<div class="col-md-10 col-md-offset-1 video">
            <stream src="fa1b52828b602f72cf1bcfab61f74fb4" controls poster="<?php bloginfo('template_directory'); ?>/assets/img/features/files-video.png"></stream>
            <script data-cfasync="false" defer type="text/javascript"
            src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=fa1b52828b602f72cf1bcfab61f74fb4"></script>
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
    <a name="collaboration" id="collaboration"></a>
	<div class="container">
        <div class="row">
            <div class="col-md-6  image--floated">
                <stream src="6644f6c1e7c0a5e3ff5b877e07ed1dea" controls poster="<?php bloginfo('template_directory'); ?>/assets/img/features/documents-video.png"></stream>
                <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=6644f6c1e7c0a5e3ff5b877e07ed1dea"></script>
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

<section class="section--workspaces">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <stream src="438ffb5360ced41ccc9849a7e41973a6" controls poster="<?php bloginfo('template_directory'); ?>/assets/img/features/workspaces.png"></stream>
                <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=438ffb5360ced41ccc9849a7e41973a6"></script>
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
                <stream src="b2bff2b8e183f558fcfcb64f41851d9d" controls  poster="<?php bloginfo('template_directory'); ?>/assets/img/features/lock_file.png"></stream>
                <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=b2bff2b8e183f558fcfcb64f41851d9d"></script>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Lock files');?></h3>
                <p class="section--paragraph"><?php echo $l->t('File locking helps users prevent conflicts with colleagues who are trying to edit the same files. While office documents and notes can be edited in real time in the browser, some files have to be downloaded to make changes. Lock the file and collisions are avoided! Other users can easily contact you in chat or by a comment to ask what is going on.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--workflow">
	<a name="workflow" id="workflow"></a>
	<div class="container">
        <div class="row">
            <div class="col-md-6">
                <stream src="75499b40ed321ef2eb0ff5cc2a95e7cf" controls poster="<?php bloginfo('template_directory'); ?>/assets/img/features/flow-as-admin.png"></stream>
                <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=75499b40ed321ef2eb0ff5cc2a95e7cf"></script>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Workflow management');?></h3>
                <p class="section--paragraph"><?php echo $l->t('With Nextcloud, system administrators can control and direct the flow of data between users on or between servers. Rule-based file tagging and responding to these tags as well as other triggers like physical location, user group, file properties and request type enables administrators to specifically deny access to, convert, delete or retain data following business or legal requirements.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud puts IT in control of user data and keeps it safe.');?></p>
                <a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Workflow handling');?></a>
            </div>
        </div>
	</div>
</section>

<section class="section--design">
	<div class="container">
        <div class="row">
                <div class="col-md-6 image--floated">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/LrF4jf1ROOc" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 feature--block">
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
            <div class="col-md-6">
                <div data-type="youtube" data-video-id="AhFnbB-a7ik"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/AhFnbB-a7ik" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Secure file exchange');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud Files enables hospitals, banks, notaries and government agencies to securely send files to and receive files from customers, patients, clients or partners.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The easy web and mobile interfaces of Nextcloud Files allow users to share files with other users on the server, to create and send password-protected public links, to let others upload files to the private cloud and to get notifications on phone and desktop when a user on another cloud server shares files.');?></p>
                <a href="<?php echo home_url('file-drop') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Secure file exchange');?></a><br>
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
                <p class="section--paragraph"><?php echo $l->t('Note that E2E is currently (2019) in beta. V2 is expected end summer 2020.');?></p>-->
                   <a href="<?php echo home_url('clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Nextcloud clients');?></a>
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
            <div class="col-md-6 feature--block">
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
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Powerful search');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud includes a powerful full-text search engine capable of using ElasticSearch as back-end. Its flexible plugin-based interface enables search capabilities beyond files and accommodates other back-end solutions like Apache Solr.');?></p>
                <a href="https://apps.nextcloud.com/apps/fulltextsearch" class="button button--blue button--arrow button--large"><?php echo $l->t('In the App store');?></a>
            </div>
        </div>
	</div>
</section>


<?php require get_template_directory().'/verticals.php';?>


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
