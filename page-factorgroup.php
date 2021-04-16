<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/hub.css?v=2" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration-small.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration-small.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration-small.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration-small.jpg">
<script>
    require(["require.config"], function() {
        require(["bootstrap", "pages/secure", "modules/youtubePlayer"])
    });
    </script>
</head>
<div class="background ccp-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1>Nextcloud Hub</h1>
			<h2>Need a private cloud in Russia?<br />Factor Group and Nextcloud have you covered!<br/>
			<a class="button button--blue" href="https://www.fgts.ru/collection/nextcloud">Contact Factor Group</a></h2>
<!-- 			<p><a class="button button--blue" href="<?php echo home_url('install') ?>">Get started now</a></p> -->
		</div>
<!--		<div class="topsidebar">
			<div class="sidebarlist">
                <p class="header">advantages</p>
                <div class="content">
                    <ul>
                        <li>File sharing, document editing and communication</li>
                        <li>Hosted where you want</li>
                        <li>Hugged by Frank</li>
                    </ul>
                    <a class="button button--blue" href="">Get it now</a>
                </div>
            </div>
		</div>-->
	</div>
</div>
<section class="section--intro">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1 video">
			<stream src="eb1384b4fa48d8f47abdec5051bc922d" controls poster="<?php bloginfo('template_directory'); ?>/assets/img/features/hub-video.png"></stream>
            <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=eb1384b4fa48d8f47abdec5051bc922d"></script>
		</div>
    </div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center">Share and collaborate on documents, send and receive email, manage your calendar and have video chats without data leaks</p>
                <p class="section--paragraph text-center">As fully on-premises solution, Nextcloud Hub provides the benefits of online collaboration without the compliance and security risks.</p>
                <p class="section--paragraph text-center">Factor Group offers a wide network of skilled Nextcloud partners in Russia to choose from.</p>
		</div>
	</div>
</div>
</section>

<section class="section--products">
	<div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="<?php echo home_url('files') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png" /></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="fill:white !important;" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Files.svg" >
                        </div>
                        <div class="text">
                            <strong>Nextcloud Files</strong><br><small>Enterprise File Sync and Share</small>
                        </div>
                    </div>
                    <p class="section--paragraph">Nextcloud Files offers universal file access on desktop, mobile and web. Find files with powerful search, share your thoughts in comments or lock files until you are done with them.</p>
<!--                    <a href="<?php echo home_url('files') ?>" class="button button--blue button--arrow button--large">Nextcloud Files</a>-->
                </div>
            </div>

            <div class="col-sm-4">
                <a href="<?php echo home_url('talk') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-devices-nw.png"></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Talk.svg" >
                        </div>
                        <div class="text">
                            <strong>Nextcloud Talk</strong><br><small>Calls, chat and web meetings</small>
                        </div>
                    </div>
                    <p class="section--paragraph">Nextcloud Talk delivers on-premises, private audio/video conferencing and text chat through browser and mobile interfaces with integrated screen sharing and SIP integration.</p>
<!--                    <a href="<?php echo home_url('talk') ?>" class="button button--blue button--arrow button--large">About Talk</a>-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo home_url('groupware') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar-nw.png"></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Groupware.svg" >
                        </div>
                        <div class="text">
                            <strong>Nextcloud Groupware</strong><br><small>Calendar, Contacts & Mail</small>
                        </div>
                    </div>
                    <p class="section--paragraph">Nextcloud Groupware integrates Calendar, Contacts, Mail and other productivity features to help teams get their work done faster, easier and on your terms.</p>
<!--                    <a href="<?php echo home_url('groupware') ?>" class="button button--blue button--arrow button--large">Learn more</a>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--factorgroup">
<div class="container">
    <div class="row">
			<div class="col-md-6">
				<a href="https://www.fgts.ru/collection/nextcloud" target="_blank" title="FGTS">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/fgts.png" title="FGTS" />
				</a>
            </div>
            <div class="col-md-6">
				<p class="section--paragraph">As official distributor in Russia, Factor Group offers the Russian market access to Nextcloud Enterprise through its network of qualified partners.</p>
				<p class="section--paragraph">Factor group specializes in supplying the telecommunications industry with the world's leading equipment and technological solutions, offering consulting services, pre-design and design works, pre-sale advice, equipment installation and commissioning support, employee training, as well as after-sales service, product versions updates, equipment repair and replacement. Factor group executives have expertise in networking and information technologies market in Russia and the CIS countries since 1991.</p>
				<a class="button button--white" href="https://www.fgts.ru/collection/nextcloud">Learn more</a>
			</div>
        <div>
    </div>
</div>
</section>


<section class="section--hub">
<div class="container-fluid icon-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 with-image">
                <div class="image">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-hub-logos-white.svg" alt="in action"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text">
                    <h3 class="section--paragraph__title">Why Nextcloud Enterprise<br /> by Factor Group</h3>
                    <li class="check">Tested and optimized for large organizations</li>
                    <li class="check">Early bug fixes, security patches and hardening</li>
                    <li class="check">Access to the best enterprise expertise</li>
                    <li class="check">Custom integration for your needs</li>
                    <li class="check">Reliable Russian support</li>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--on-premise">
<div class="container">
	<h1 class="section--heading-1 text-center">Why self hosting in Russia?</h1>
	<div class="row">
		<div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title">You need 100% certainty</h3>
			<p class="section--paragraph">Sending around data by email or using foreign SaaS file sharing solutions does not provide much security for sensitive data. Encryption is complicated and cumbersome to use, reducing the real benefits due to employees working around them or making mistakes.</p>
			<p class="section--paragraph">Keeping data on your own infrastructure or at a trusted local private or public cloud provider means you stay in control. Only then can you show your customers exactly where their sensitive documents are. Regulators can be certain that non-compliance with proper process is minimized.</p>
			<p class="section--paragraph">Factor Group offers access to a wide range of reliable partners who have strong, proven Nextcloud expertise and can ensure you get a reliable, secure and compliant setup.</p>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title">You need an Enterprise platform</h3>
			<p class="section--paragraph">Most consumer-grade solutions like Dropbox or Office 365 were not designed with privacy regulations and security concerns in mind, mixing data from consumers and businesses, spread out in data centers across the globe. Enterprise IT workloads may be processed by Cloud Providers liable to the US CLOUD Act, meaning your business data can be leaked on orders of the US judicial system, often without disclosure to you.</p>
			<p class="section--paragraph">Rather than trying to work around their limitations, Nextcloud Enterprise provides a security-first solution which puts you in complete control over the location and access policies of data.</p>
			<p class="section--paragraph">Nextcloud Enterprise gives you the certainty of a certified, compliant platform that is optimized and tested for enterprise environments.</p>
        </div>
    </div>
</div>
</section>
<section class="section--avoidrisk quote">
<div class="container">
    <div class="row">
        <div class="col-md-6  col-md-offset-3">
            <p class="section--paragraph">Don't risk your data to the services of an unqualified service provider. Get the certainty that comes from the real vendor expertise!</p>
            <a href="https://www.fgts.ru/collection/nextcloud" class="button button--blue button--arrow button--large">Contact Factor Group now</a>
        </div>
    </div>
</div>
</section>

<section class="section--more">
	<a name="more" id="more"></a>
<div class="container-widest">
	<h1 class="section--heading-1 section--text--center">Key capabilities.</h1>
    <div class="row">
        <div class="col-md-1 featureblock">
        <div class="icon">
            <?php echo file_get_contents(__DIR__."/assets/img/logo/Nextcloud-Flow.svg"); ?>
        </div>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Nextcloud Flow enables users to automate repetitive tasks and optimize business processes.</p>
        <a href="<?php echo home_url('workflow') ?>" class="overlay-trigger button button--white button--arrow">Learn more about Flow</a>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-hdd-o fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Access existing storage silos like FTP, Windows Network Drives, SharePoint, Object Storage and Samba shares seamlessly through Nextcloud. </p>
        <a href="<?php echo home_url('storage') ?>" class="overlay-trigger button button--white button--arrow">Learn more about external storage</a>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-file-text fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Seamlessly edit office documents together with others, take notes while in a video call.</p>
        <a href="<?php echo home_url('collaboraonline') ?>" class="overlay-trigger button button--white button--arrow">Learn more about Collabora Online</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 featureblock">
        <i class="fa-puzzle-piece fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Manage users locally or authenticate through LDAP / Active Directory, Kerberos and Shibboleth / SAML 2.0 and more</p>
        <a href="<?php echo home_url('usermanagement') ?>" class="overlay-trigger button button--white button--arrow">Learn more about user management</a>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-key fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Secure data with powerful file access control, multi-layer encryption, machine-learning based authentication protection and advanced ransomware recovery capabilities</p>
        <a href="<?php echo home_url('secure') ?>" class="overlay-trigger button button--white button--arrow">Learn more about security</a>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-certificate fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Extend Nextcloud further with a wide variety of apps on our app store or build your own</p>
        <a href="<?php echo home_url('developer') ?>" class="overlay-trigger button button--white button--arrow">Learn more about app development</a>
        </div>
    </div>
</div>
</section>

<section class="section--usecases">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="section--heading-1 text-center">What can Hub do for me?</h1>
                <p class="section--paragraph text-center">As a comprehensive platform, Nextcloud Hub has a wide range of abilities not easy to explain with a few bullet points. Find below 2 scenarios that visualize some real-world use of Nextcloud Hub!</p>
            </div>
        </div>
         <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="section--paragraph__title">Writing and gaining approval for a public proposal document: Project X</h3>
                <p class="section--paragraph"><strong>Goal:</strong> write a proposal document with a team of people, then having it reviewed by the board and approved for release</p>
                <p class="section--paragraph"><strong>Tools:</strong> Files, Talk, Groupware, Collabora Online, tags, comments, groups, dashboard, Circles, Guests</p>
                <a href="#workflow1" data-toggle="collapse" class="button button--blue button--arrow--down">Read the full scenario<span class="icon-arrow-down"></a>
				<div id="workflow1" class="collapse ">
                    <p class="section--paragraph"><strong>Personas involved:</strong></p>
                    <ul>
                        <li>owner</li>
                        <li>2 team members</li>
                        <li>4 board members, one of whom dedicated to project</li>
                        <li>2 external consultants</li>
                    </ul>
                    <p class="section--paragraph"><strong>Setup in advance</strong></p>
                    <ul>
                        <li>Default Nextcloud Hub + Circles and Guests apps</li>
                        <li>User accounts for board, team members, owner</li>
                        <li>Group for the board members and one for the team members</li>
                    </ul>
                    <h3>Setting the first meeting</h3>
                    <ul>
                    <li>The owner opens Nextcloud Mail and writes an email to the team members, 1 board member and 2 external consultants by selecting them from the address book and explains the project, including a timeline with an initial meeting, asking for some time slots for the external consultants.</li>
                    <li>The consultants share possible time slots.</li>
                    <li>The owner opens Nextcloud Calendar and creates an appointment for the team plus the board member and external consultants, using the busy-view to find a time most suitable. The owner clicks the “create Talk room” to include a chat and video call room link for the meeting.</li>
                    <li>after the appointment is sent out, the owner goes to the Talk room and names it “Project X meeting room”.</li>
                    </ul>
                    <h3>Creating a project and a team</h3>
                    <ul>
                    <li>The owner plans their own time, creating a Deck board named “Project X” and populating it with tasks that need to be done.</li>
                    <li>The owner goes to the Circles app and creates a circle of the team members called Project X (this is a custom group).</li>
                    <li>The owner creates a new document (+ icon -&gt; new Text document) and writes an agenda draft, then shares it with the Project X circle, adding a note to the share: please, give feedback on the draft agenda!</li>
                    </ul>
                    <h3>Discuss the agenda</h3>
                    <ul>
                    <li>The team members get notified of the share, read the note and review the document, providing feedback as comments in the sidebar (The owner receives a notification when a comment is made) or just editing it right away.</li>
                    <li>After agreement on the agenda is reached, the owner shares the agenda in the meeting room that was created earlier, simply sharing to “Project X meeting room”. Now everybody, including the board member and consultants, have access to it.</li>
                    <li>To easily manage all documents related to the project, the owner adds the agenda document, the Deck board “Project X” and the meeting room “Project X meeting room” to the “Project X” project.</li>
                    </ul>
                    <h3>The first meeting</h3>
                    <ul>
                    <li>On the day of the meeting, all members get notified by Nextcloud of the meeting and join the room for the call. The document with the agenda can be seen and edited by all members (access rights could have been restricted by the owner but in practice, we believe that such restrictions are rarely needed).</li>
                    <li>After the meeting, the owner shares the Deck board “Project X” with the circle and schedules a call with the team members to go over the tasks, assign them and get to work.</li>
                    </ul>
                    <h3>Getting to work</h3>
                    <ul>
                    <li>The owner creates a new office document for the proposal, and writes a first rough draft. Then the owners shares this draft with the Project X circle and adds a note or comments with some questions. The owner also adds it to the “Project X” project. The owner also tags the file with “work in progress”.</li>
                    <li>all team members can see the project in their Dashboard and see all files connected to it that they have access to. Each member can add more documents, chat rooms, tasks, calendars or other elements to the Project. Other members will then see those IF they are shared with them, if not the relation remains private.</li>
                    <li>By change tracking and comments in the document, the team discusses and improves the document. At any time, a real-time chat can be had in the sidebar of the document, or even a video call can be started.</li>
                    <li>Todo items are managed in Deck, with tasks and deadlines assigned and all participants getting notified when relevant tasks change status, as per their notification settings.</li>
                    </ul>
                    <h3>Review and approval</h3>
                    <ul>
                    <li>Once the draft has progressed sufficiently, it can be shared with the consultants for their input. First the tag on the document is changed to “for external review”, as a File Access Control rule is in place that blocks external access to files with the “work in progress” tag.</li>
                    <li>Once the document is ready, it can be shared to the board group, and a Talk meeting is scheduled in the Calendar to discuss the document and gain approval.</li>
                    <li>Once the document is approved, the tag is changed from “for external review” to “finished” which can trigger automatic conversion to PDF and publishing on a third party platform.</li>
                    </ul>
				</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="section--paragraph__title">Turning an idea into a new office layout</h3>
                <p class="section--paragraph"><strong>Goal:</strong> Find support for an idea in the office and get it approved</p>
                <p class="section--paragraph"><strong>Tools:</strong> Files, Talk, Groupware, Circles, Flow, Social, Forms, Anti-virus, Ransomware Protection</p>
                <a href="#workflow2" data-toggle="collapse" class="button button--blue button--arrow--down">Read the full scenario<span class="icon-arrow-down"></a>
				<div id="workflow2" class="collapse ">
                    <p class="section--paragraph"><strong>Personas involved:</strong></p>
                    <ul>
                        <li>Principal</li>
                        <li>Colleagues in the office</li>
                        <li>Management</li>
                        <li>Office manager</li>
                        <li>External office supplies firm</li>
                    </ul>
                    <p class="section--paragraph"><strong>Setup in advance:</strong></p>
                    <ul>
                        <li>Default Nextcloud Hub plus Forms, Social, Circles,  Anti-virus, Ransomware Protection apps</li>
                        <li>User accounts for all participants</li>
                        <li>Group for the the team members, group for management</li>
                        <li>Circle (custom group) of team members and Principal</li>
                    </ul>
                    <h3>The idea</h3>
                    <ul>
                    <li>During train commute, Principal writes down a good idea, to set up phone booths in the office to deal with noisy calls, in the Nextcloud Notes app on his phone.</li>
                    <li>The next office day, Principal accesses the Notes from his browser and shares the idea through Nextcloud Social, their internal social media platform. A few colleagues like his post and comment.</li>
                    <li>Principal brings his iPad to lunch, creating a new Text document for a quick outline of the plan.</li>
                    </ul>
                    <h3>Gathering input</h3>
                    <ul>
                    <li>Principal creates an open circle, a custom group anyone interested in contributing to the idea can join, with the name Phone Booth. He shares this on Social so others can see it and join. A handful of colleagues joins the circle to participate in the conversation.</li>
                    <li>He puts together a quick survey in Nextcloud Forms, asking basic questions on what people would need in such a phone booth. He shares the link on Social and gives access to the results to the Phone Booth circle. Several colleagues provide input in the survey.</li>
                    </ul>
                    <h3>Working with the team</h3>
                    <ul>
                    <li>Principal creates a chat room for the Circle in Talk on his iPad. He shares the document he is working on into the room and asks for feedback, pointing also to the survey answers he shared earlier.</li>
                    <li>A team member calls him using Talk and Principal picks up on his iPad to discuss the document they are editing together, going over the feedback from the survey.</li>
                    <li>Later at home, Principal drops a few images of phone booth designs he found on the internet in the chat for all to see. The nicest 2 images are added to the document.</li>
                    <li>Principal now creates a folder with the document and images and describes the basics of the idea in the Workspace area above the folder so a quick glance will show a recipient what it is about. He shares the folder with the Phone Booth circle, too, and throws in a PDF export of the results of the survey.</li>
                    <li>Principal sets up a quick ‘Flow’ to get notified with a chat message in the phone booths chat room whenever changes are made in the folder.</li>
                    </ul>
                    <h3>Receiving an offer</h3>
                    <ul>
                    <li>The next day, Principal shares the folder wwith the office manager to asks if she can get an idea of the costs.</li>
                    <li>The office manager shares the folder through a public link with their office supplies firm, asking if they can provide such a phone booth. In a note with the share she asks them to provide at least 2 options. She gives them upload rights so they can simply upload a pdf with an offer in the folder, which they do.</li>
                    <li>The next morning, when checking his dashboard in the morning, Principal sees the chat message notifying them the offer was uploaded. Two team members already signaled their approval of the more expensive offer in the chat.</li>
                    </ul>
                    <h3>Management feedback</h3>
                    <ul>
                    <li>Principal shares the folder with his manager, adding a note to the share asking if she could bring this up with senior management if she likes the idea. As her status in Nextcloud is set to ‘traveling’, he also sends an email to her boss.</li>
                    <li>Her laptop has downloaded the folder to her laptop so during her flight she can check the proposal and check the budget. She adds a line for phone booths in the budget proposal spreadsheet for the next month.</li>
                    </ul>
                    <h3>A malware attack interrupts</h3>
                    <ul>
                    <li>After landing, her laptop syncs her changes but the sync is stopped: the anti-virus scanner on the server has discovered a malware infection. It stopped the sync and warned the system administrator and the manager.</li>
                    <li>There seems to have been a ransomware active for a while already, which as been slowly encrypting files over the last weeks. Because of this, many files have been modified since the first files were encrypted and thus restoring a backup from before the first infection would undo weeks of work. Luckily, the Nextcloud Ransomware Protection app allows one-click recovery of her data to un-encrypted data. The app has analyzed the files of the manager and for each file, can roll back to the version just before they were encrypted.</li>
                    <li>After all data was recovered, the manager can share the spreadsheet. The other managers react in chat on the budget. Once the team has all added their signoff tags it gets sent automatically to the finance back-office for processing through a flow configured in Nextcloud Flow.</li>
                    </ul>
				</div>
            </div>
        </div>
    </div>
</section>

<section class="section--dashboard">
<div class="container">
	<div class="row">
        <div class="col-md-6 image--feature">
			<stream src="b5442e477fa8b39c31119a1f2321ddcf" controls loop poster="<?php bloginfo('template_directory'); ?>/assets/img/features/nextcloud20.png"></stream>
            <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=b5442e477fa8b39c31119a1f2321ddcf"></script>
		</div>
		<div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title">Start your day informed</h3>
                <p class="section--paragraph">The Nextcloud Dashboard is your starting point of the day, giving you an overview of your upcoming appointments, urgent emails, chat messages, incoming tickets, latest tweets and much more! Users can set their status so others know what they are up to..</p>
                <a href="<?php echo home_url('dashboard') ?>" class="overlay-trigger button button--blue button--arrow button--large">Dashboard features</a>
		</div>
	</div>
</div>
</section>

<section class="section--ONLYOFFICE">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated image--feature new-img">
                <a class="overlay-trigger" href="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-edit-document.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-edit-document.png"/></a>
            </div>
           <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title">Collaborate on documents with Collabora</h3>
                <p class="section--paragraph">Collabora Online integration in Nextcloud empowers your users to collaborate on office documents with team members in real time.</p>
                <p class="section--paragraph">Compatibility with Microsoft Office formats means perfect documents, every time.</p>
                <ul>
                <li>Shipping by default in Nextcloud Hub</li>
                <li>A modern and familiar user interface</li>
                <li>The same document rendering in every browser</li>
                <li>Desktop level editing capabilities</li>
                    </ul>
                <a href="<?php echo home_url('collabora') ?>" class="overlay-trigger button button--blue button--arrow button--large">Collabora Online</a>
            </div>
        </div>
	</div>
</section>

<section class="section--search">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1 video">
			<stream src="d496e44cb39e8570a52a22259545aec4" controls loop preload mute autoplay poster="<?php bloginfo('template_directory'); ?>/assets/img/features/search_moodle_course_module.png"></stream>
            <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=d496e44cb39e8570a52a22259545aec4"></script>
		</div>
    </div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
                <h3 class="section--paragraph__tittle">Find everything in one place</h3>
                <p class="section--paragraph">On the top-right of your Nextcloud window, a search glass shows search results from all over Nextcloud. Additional search providers can be installed and over a dozen different search providers are available to show you Github issues, Moodle courses, Jira tickets and more</p>
                <p><a href="<?php echo home_url('unified-search') ?>" class="overlay-trigger button button--blue button--arrow">Unified Search</a></p>
		</div>
	</div>
</div>
</section>


<section class="section--security">
	<a name="security" id="security"></a>
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated image--feature new-img">
                <a class="overlay-trigger" href="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP_2FA_auth.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP_2FA_auth.png" alt="in action" ></a>
            </div>

            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title">Security first</h3>
                <p class="section--paragraph">We are deeply committed to protecting the safety of our customers\' data. We are confident that Nextcloud Files offers the best security in the self-hosted file sync and share industry, because:</p>
                <p class="section--paragraph"><i class="fa-key fa"></i> we follow industry best practices around security (aligned to <a class="hyperlink" href="https://en.wikipedia.org/wiki/ISO/IEC_27001:2013">ISO27001</a>)</p>
                <p class="section--paragraph"><i class="fa-key fa"></i> we offer some of the <a class="hyperlink" href="https://nextcloud.com/blog/introducing-the-nextcloud-bug-bounty-program/" target="_blank">highest open source security bug bounties</a></p>
                <p class="section--paragraph"></p>
                <p class="section--paragraph"><i class="fa-key fa"></i> we integrate unique in-transit, server-side and client-side end-to-end encryption technologies.</p>
                <p class="section--paragraph"></p>
                <a href="<?php echo home_url('secure') ?>" class="overlay-trigger button button--blue button--arrow button--large">Security in Nextcloud</a>
            </div>
		</div>
	</div>
</section>

<section class="section--monitoring">
    <a name="monitoring" id="monitoring"></a>
    <div class="container">
        <div class="row">
            <div class="col-md-6 image--feature new-img">
                <a class="overlay-trigger" href="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring.png" alt="Screenshot of file monitoring"/></a>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title">Compliance-ready monitoring</h3>
                <p class="section--paragraph">Nextcloud enables admins to monitor the health and performance of a Nextcloud system with a graphical UI and an API endpoint for monitoring apps. Fully audit-ready logs of user activity are generated.</p>
                <h3 class="section--paragraph__title">Tracking changes to user files</h3>
                <p class="section--paragraph">Nextcloud Files lets users track file modifications, downloads of shares and changes to comments or tags, providing an overview in the browser, clients or via email notifications and an RSS feed.</p>
                <a href="<?php echo home_url('monitoring') ?>" class="overlay-trigger button button--blue button--arrow button--large">Monitoring and compliance</a>
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
                <h3 class="section--paragraph__title">Accessibility</h3>
                <p class="section--paragraph">To ensure Nextcloud is accessible to users with visual impairments, Nextcloud has extensive keyboard accessibility and screen reader support.</p>
                <p class="section--paragraph">The colors used in Nextcloud meet the WCAG 2.0 AA standard for contrast and we created themes for users who need even higher support. Our High Contrast theme aims for WCAG 2.0 AAA compliance, while a Dyslexia-friendly font option helps people with reading disability. A Dark theme is also available.</p>
            </div>
        </div>
	</div>
</section>


<section class="section--storage">
	<a name="storage" id="storage"></a>
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--feature">
                <a class="overlay-trigger" href="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png"/></a>
            </div>
                <h3 class="section--paragraph__title">External storage, securely encrypted</h3>
                <p class="section--paragraph">The external storage feature of Nextcloud gives users access to their data wherever it is. Nextcloud Files can access data stored with a wide variety of popular cloud service providers such as Amazon, Google and Dropbox, but can also access file storage solutions using standard protocols such as NFS, (S)FTP, WebDAV and more.</p>
                <p class="section--paragraph">The Encryption App can encrypt data at rest for both local and remote storage, protecting data stored on networks outside of user infrastructure. Keys can be handled by an external key management server or stored locally, on the server.</p>
                <a href="<?php echo home_url('storage') ?>" class="overlay-trigger button button--blue button--arrow button--large">External storage</a>
            </div>
        </div>
	</div>
</section>

<section class="section--usermanagement">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--feature new-img image--floated">
                <a class="overlay-trigger" href="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/usermanagement.png" alt="in action" ></a>
            </div>
                <h3 class="section--paragraph__title">Integrated account management</h3>
                <p class="section--paragraph">Nextcloud features built-in account management with optional two-factor authentication as well as Single-sign-on support and integration with external user directories like LDAP or IMAP, SMB, FTP and more.</p>
                <a href="<?php echo home_url('usermanagement') ?>" class="overlay-trigger button button--blue button--arrow button--large">User management</a>
            </div>
        </div>
	</div>
</section>

<!--<section class="section--vdr">
    <div class="container">
        <div class="row feature-row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/vdr-link.jpg" alt="in action"/>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title">Virtual Data Room</h3>
                <p class="section--paragraph">In settings where a firewall is needed between departments or organizations without impeding smooth and efficient collaboration, a separate Virtual Data Room can be set up. Nextcloud offers a wide range of unique features for VDR use and its on-premises nature offers unparalleled confidentiality and control.</p>
                <a href="<?php echo home_url('virtual-data-room') ?>" class="button button--blue button--arrow button--large">Virtual Data Rooms</a>
            </div>
        </div>
    </div>
</section>-->

<section class="section--benefits">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center">Key benefits</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/tools.svg" /></div>
                <h3 class="section--paragraph__title text-center">Under your control</h3>
                <p class="section--paragraph text-center">There is no need to compromise with outsourcing. Rather than hosting your sensitive company data with a third party, keep it 100% under control of your IT team while offering the highly secure access and communication facilities that your employees need to be productive.</p>
            </div>
            <div class="col-md-4">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/people.svg" /></div>
                <h3 class="section--paragraph__title text-center">A complete platform</h3>
                <p class="section--paragraph text-center">An easy, familiar user interface means efficient work. Nextcloud is unique by offering the most extensive built in communication and collaboration technology in the industry, negating the complexity of running and connecting multiple separate solutions.</p>
            </div>
            <div class="col-md-4">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/firewall.svg" /></div>
                <h3 class="section--paragraph__title text-center">Military-grade security</h3>
                <p class="section--paragraph text-center">Nextcloud offers industry-first, unique solutions like Video Verification, machine-learning-driven suspicious login detection, extensive multi-factor authentication solutions and more. Extensive logging and monitoring show users, administrators and auditors the exact flow of data and who had access at what time.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center">Efficient and secure team productivity with the content collaboration platform from the market leader.</p>
                <p class="text-center">Contact us to learn how we can help you.</p>
				<div class="text-center morebuttondiv">
					<a href="https://www.fgts.ru/collection/nextcloud" class="overlay-trigger button button--large button--arrow">Contact Factor Group</a>
				</div>
            </div>
        </div>
	</div>
</div>
</section>

<section class="section--features">
<div class="container">
    <h1 class="section--heading-1 text-center">What sets Nextcloud Enterprise apart</h1>
    <div class="row feature-row">
        <div class="col-md-6 image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/replacing-nextcloud.svg" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title">A complete platform</h3>
            <p class="section--paragraph">Nextcloud offers the most comprehensive, deeply integrated on-premises collaboration platform on the market, replacing dozens of other tools.</p>
            <ul>
                <li class="check">Secure file exchange within and between organizations</li>
                <li class="check">Collaborative editing of docx, xlsx and more</li>
                <li class="check">File versioning, restore and retention control</li>
                <li class="check">Commenting on files, adding notes to share links</li>
                <li class="check">Integrated chat and secure audio-video calls</li>
                <li class="check">Calendar, mail and task management tools</li>
                <li class="check">Comprehensive set of security capabilities</li>
            </ul>

            <p class="section--paragraph">Switching between different tools is more than cumbersome and inefficient: it also increases the chance for mistakes that can result in data leaks.</p>
            <p class="section--paragraph">Having a complete, all-in-one solution simplifies the IT infrastructure for both users and the IT team, improving productivity and security.</p>
            <p class="section--paragraph">Only a real enterprise solution guarantees your success!</p>
        </div>
    </div>

</div>
</section>

<section class="section--more">
	<a name="more" id="more"></a>
<div class="container-widest">
	<h1 class="section--heading-1 section--text--center">And much more.</h1>
    <div class="row">
        <div class="col-md-1 featureblock">
        <i class="fa-code-fork fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""> Nextcloud is open source - there are no limitations and you can inspect, integrate, extend and modify Nextcloud however you want</p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-tags fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Nextcloud offers an easy-to-use user interface which comes with search functionality, favorites, tags and even more ways to quickly reach the files users need. Full Text search is available using Apache Solr.</p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-file-text fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Text file editing and thumbnail previews of PDF, images, text files, office files and more</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 featureblock">
        <i class="fa-bug fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Integration of anti-virus scanning functionality with the anti-virus app</p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-puzzle-piece fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Authentication through LDAP / Active Directory, Kerberos and Shibboleth / SAML 2.0 and more</p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-life-ring fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Pre-loaded files and folders for new users. Populate a new user\'s Files area with, for example, a tutorial file, which appears when they first log in.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 featureblock">
        <i class="fa-key fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Powerful, integrated logging, two-factor authentication and NIST compliant password policy control functionalities</p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-share-alt fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Fine-grained control from mobile, desktop or the Web over data access and sharing capabilities. Pick from the list of users and groups, stored either locally or on another, authorized, server. </p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-archive fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Advanced quota management with configurable accounting of external storage</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 featureblock">
        <i class="fa-code fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Sharing and Provisioning REST APIs. Facilitates the integration of remote 3rd party apps</p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-certificate fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Quick access to core functions for app development with the powerful Nextcloud App API and webhooks following the publication / subscription model</p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-paint-brush fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class="">Built in, easy-to-use theming to set color, login background and logo from Administrator screen.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 featureblock">
        </div>
        <div class="col-md-3 featureblock">
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-copy fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><br /><a class="hyperlink" href="<?php echo home_url('compare') ?>">... see how we compare to other solutions!</a></p>
        </div>
        <div class="col-md-1 featureblock">
        </div>
        <div class="col-md-3 featureblock">
        </div>
    </div>
</div>
</section>
<?php require get_template_directory().'/overlay.php'; ?>



