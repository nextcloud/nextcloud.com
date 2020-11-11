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
			<h1><?php echo $l->t('Nextcloud Hub');?></h1>
			<h2><?php echo $l->t('A new generation of online collaboration');?><br /> <?php echo $l->t('that puts you in control');?><br/>
			<a class="button button--blue" href="https://try.nextcloud.com"><?php echo $l->t('Try Hub now');?></a></h2>
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
                <p class="section--paragraph text-center"><?php echo $l->t('Share and collaborate on documents, send and receive email, manage your calendar and have video chats without data leaks');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('As fully on-premises solution, Nextcloud Hub provides the benefits of online collaboration without the compliance and security risks.');?></p>
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
                            <?php echo $l->t('<strong>Nextcloud Files</strong><br><small>Enterprise File Sync and Share</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Files offers universal file access on desktop, mobile and web. Find files with powerful search, share your thoughts in comments or lock files until you are done with them.');?></p>
                    <a href="<?php echo home_url('files') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Nextcloud Files');?></a>
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
                            <?php echo $l->t('<strong>Nextcloud Talk</strong><br><small>Calls, chat and web meetings</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Talk delivers on-premises, private audio/video conferencing and text chat through browser and mobile interfaces with integrated screen sharing and SIP integration.');?></p>
                    <a href="<?php echo home_url('talk') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('About Talk');?></a>
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
                            <?php echo $l->t('<strong>Nextcloud Groupware</strong><br><small>Calendar, Contacts & Mail</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Groupware integrates Calendar, Contacts, Mail and other productivity features to help teams get their work done faster, easier and on your terms.');?></p>
                    <a href="<?php echo home_url('groupware') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
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
                    <h3 class="section--paragraph__title"><?php echo $l->t('Why Nextcloud Hub');?></h3>
                    <li class="check"><?php echo $l->t('Hosted on-premises');?></li>
                    <li class="check"><?php echo $l->t('100% open source');?></li>
                    <li class="check"><?php echo $l->t('Very easy to use');?></li>
                    <li class="check"><?php echo $l->t('Integration in infrastructure');?></li>
                    <li class="check"><?php echo $l->t('Security and encryption');?></li>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--more">
	<a name="more" id="more"></a>
<div class="container-widest">
	<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Key capabilities.');?></h1>
    <div class="row">
        <div class="col-md-1 featureblock">
        <div class="icon">
            <?php echo file_get_contents(get_template_directory()."/assets/img/logo/Nextcloud-Flow.svg"); ?>
        </div>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Nextcloud Flow enables users to automate repetitive tasks and optimize business processes.');?></p>
        <a href="<?php echo home_url('workflow') ?>" class="overlay-trigger button button--white button--arrow"><?php echo $l->t('Learn more about Flow');?></a>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-hdd-o fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Access existing storage silos like FTP, Windows Network Drives, SharePoint, Object Storage and Samba shares seamlessly through Nextcloud. ');?></p>
        <a href="<?php echo home_url('storage') ?>" class="overlay-trigger button button--white button--arrow"><?php echo $l->t('Learn more about external storage');?></a>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-file-text fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Seamlessly edit office documents together with others, take notes while in a video call.');?></p>
        <a href="<?php echo home_url('collaboraonline') ?>" class="overlay-trigger button button--white button--arrow"><?php echo $l->t('Learn more about Collabora Online');?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 featureblock">
        <i class="fa-puzzle-piece fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Manage users locally or authenticate through LDAP / Active Directory, Kerberos and Shibboleth / SAML 2.0 and more');?></p>
        <a href="<?php echo home_url('usermanagement') ?>" class="overlay-trigger button button--white button--arrow"><?php echo $l->t('Learn more about user management');?></a>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-key fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Secure data with powerful file access control, multi-layer encryption, machine-learning based authentication protection and advanced ransomware recovery capabilities');?></p>
        <a href="<?php echo home_url('secure') ?>" class="overlay-trigger button button--white button--arrow"><?php echo $l->t('Learn more about security');?></a>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-certificate fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Extend Nextcloud further with a wide variety of apps on our app store or build your own');?></p>
        <a href="<?php echo home_url('developer') ?>" class="overlay-trigger button button--white button--arrow"><?php echo $l->t('Learn more about app development');?></a>
        </div>
    </div>
</div>
</section>


<section class="section--customers">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="section--heading-1 text-center"><?php echo $l->t('Powering collaboration');?></h1>
                <p class="section--paragraph text-center"><?php echo $l->t('Thousands of modern organizations secure data and improve productivity with Nextcloud Files, enabling tens of millions of customers and employees to collaborate seamlessly across divisions and over company borders.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/tuberlin.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/mmecmannesmann.png" />
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/siemens.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/randv.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/raiffeisen.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/actu.png" /></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <a href="<?php echo home_url('whitepapers') ?>" class="overlay-trigger button button--blue button--arrow"><?php echo $l->t('Case studies and more');?></a>
            </div>
        </div>
<!--        <div class="row">
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/hivos.png" /></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/3000-users-at-ucloud4schools-migrated-to-nextcloud-11-by-regio-it/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/regioit.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/the-danish-research-and-education-network-moves-from-owncloud-to-nextcloud/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/deic.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="http://my.engineering.queensu.ca/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/queens.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/elkb.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/vrbzo.png" /></a>
                </div>
            </div>
        </div>-->
	</div>
</section>

<section class="section--usecases">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="section--heading-1 text-center"><?php echo $l->t('What can Hub do for me?');?></h1>
                <p class="section--paragraph text-center"><?php echo $l->t('As a comprehensive platform, Nextcloud Hub has a wide range of abilities not easy to explain with a few bullet points. Find below 2 scenarios that visualize some real-world use of Nextcloud Hub!');?></p>
            </div>
        </div>
         <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="section--paragraph__title"><?php echo $l->t('Writing and gaining approval for a public proposal document: Project X');?></h3>
                <p class="section--paragraph"><?php echo $l->t('<strong>Goal:</strong> write a proposal document with a team of people, then having it reviewed by the board and approved for release');?></p>
                <p class="section--paragraph"><?php echo $l->t('<strong>Tools:</strong> Files, Talk, Groupware, Collabora Online, tags, comments, groups, dashboard, Circles, Guests');?></p>
                <a href="#workflow1" data-toggle="collapse" class="button button--blue button--arrow--down"><?php echo $l->t('Read the full scenario');?><span class="icon-arrow-down"></a>
				<div id="workflow1" class="collapse ">
                    <p class="section--paragraph"><strong><?php echo $l->t('Personas involved:');?></strong></p>
                    <ul>
                        <li><?php echo $l->t('owner');?></li>
                        <li><?php echo $l->t('2 team members');?></li>
                        <li><?php echo $l->t('4 board members, one of whom dedicated to project');?></li>
                        <li><?php echo $l->t('2 external consultants');?></li>
                    </ul>
                    <p class="section--paragraph"><strong><?php echo $l->t('Setup in advance');?></strong></p>
                    <ul>
                        <li><?php echo $l->t('Default Nextcloud Hub + Circles and Guests apps');?></li>
                        <li><?php echo $l->t('User accounts for board, team members, owner');?></li>
                        <li><?php echo $l->t('Group for the board members and one for the team members');?></li>
                    </ul>
                    <h3><?php echo $l->t('Setting the first meeting');?></h3>
                    <ul>
                    <li><?php echo $l->t('The owner opens Nextcloud Mail and writes an email to the team members, 1 board member and 2 external consultants by selecting them from the address book and explains the project, including a timeline with an initial meeting, asking for some time slots for the external consultants.');?></li>
                    <li><?php echo $l->t('The consultants share possible time slots.');?></li>
                    <li><?php echo $l->t('The owner opens Nextcloud Calendar and creates an appointment for the team plus the board member and external consultants, using the busy-view to find a time most suitable. The owner clicks the “create Talk room” to include a chat and video call room link for the meeting.');?></li>
                    <li><?php echo $l->t('after the appointment is sent out, the owner goes to the Talk room and names it “Project X meeting room”.');?></li>
                    </ul>
                    <h3><?php echo $l->t('Creating a project and a team');?></h3>
                    <ul>
                    <li><?php echo $l->t('The owner plans their own time, creating a Deck board named “Project X” and populating it with tasks that need to be done.');?></li>
                    <li><?php echo $l->t('The owner goes to the Circles app and creates a circle of the team members called Project X (this is a custom group).');?></li>
                    <li><?php echo $l->t('The owner creates a new document (+ icon -&gt; new Text document) and writes an agenda draft, then shares it with the Project X circle, adding a note to the share: please, give feedback on the draft agenda!');?></li>
                    </ul>
                    <h3><?php echo $l->t('Discuss the agenda');?></h3>
                    <ul>
                    <li><?php echo $l->t('The team members get notified of the share, read the note and review the document, providing feedback as comments in the sidebar (The owner receives a notification when a comment is made) or just editing it right away.');?></li>
                    <li><?php echo $l->t('After agreement on the agenda is reached, the owner shares the agenda in the meeting room that was created earlier, simply sharing to “Project X meeting room”. Now everybody, including the board member and consultants, have access to it.');?></li>
                    <li><?php echo $l->t('To easily manage all documents related to the project, the owner adds the agenda document, the Deck board “Project X” and the meeting room “Project X meeting room” to the “Project X” project.');?></li>
                    </ul>
                    <h3><?php echo $l->t('The first meeting');?></h3>
                    <ul>
                    <li><?php echo $l->t('On the day of the meeting, all members get notified by Nextcloud of the meeting and join the room for the call. The document with the agenda can be seen and edited by all members (access rights could have been restricted by the owner but in practice, we believe that such restrictions are rarely needed).');?></li>
                    <li><?php echo $l->t('After the meeting, the owner shares the Deck board “Project X” with the circle and schedules a call with the team members to go over the tasks, assign them and get to work.');?></li>
                    </ul>
                    <h3><?php echo $l->t('Getting to work');?></h3>
                    <ul>
                    <li><?php echo $l->t('The owner creates a new office document for the proposal, and writes a first rough draft. Then the owners shares this draft with the Project X circle and adds a note or comments with some questions. The owner also adds it to the “Project X” project. The owner also tags the file with “work in progress”.');?></li>
                    <li><?php echo $l->t('all team members can see the project in their Dashboard and see all files connected to it that they have access to. Each member can add more documents, chat rooms, tasks, calendars or other elements to the Project. Other members will then see those IF they are shared with them, if not the relation remains private.');?></li>
                    <li><?php echo $l->t('By change tracking and comments in the document, the team discusses and improves the document. At any time, a real-time chat can be had in the sidebar of the document, or even a video call can be started.');?></li>
                    <li><?php echo $l->t('Todo items are managed in Deck, with tasks and deadlines assigned and all participants getting notified when relevant tasks change status, as per their notification settings.');?></li>
                    </ul>
                    <h3><?php echo $l->t('Review and approval');?></h3>
                    <ul>
                    <li><?php echo $l->t('Once the draft has progressed sufficiently, it can be shared with the consultants for their input. First the tag on the document is changed to “for external review”, as a File Access Control rule is in place that blocks external access to files with the “work in progress” tag.');?></li>
                    <li><?php echo $l->t('Once the document is ready, it can be shared to the board group, and a Talk meeting is scheduled in the Calendar to discuss the document and gain approval.');?></li>
                    <li><?php echo $l->t('Once the document is approved, the tag is changed from “for external review” to “finished” which can trigger automatic conversion to PDF and publishing on a third party platform.');?></li>
                    </ul>
				</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="section--paragraph__title"><?php echo $l->t('Turning an idea into a new office layout');?></h3>
                <p class="section--paragraph"><?php echo $l->t('<strong>Goal:</strong> Find support for an idea in the office and get it approved');?></p>
                <p class="section--paragraph"><?php echo $l->t('<strong>Tools:</strong> Files, Talk, Groupware, Circles, Flow, Social, Forms, Anti-virus, Ransomware Protection');?></p>
                <a href="#workflow2" data-toggle="collapse" class="button button--blue button--arrow--down"><?php echo $l->t('Read the full scenario');?><span class="icon-arrow-down"></a>
				<div id="workflow2" class="collapse ">
                    <p class="section--paragraph"><strong><?php echo $l->t('Personas involved:');?></strong></p>
                    <ul>
                        <li><?php echo $l->t('Principal');?></li>
                        <li><?php echo $l->t('Colleagues in the office');?></li>
                        <li><?php echo $l->t('Management');?></li>
                        <li><?php echo $l->t('Office manager');?></li>
                        <li><?php echo $l->t('External office supplies firm');?></li>
                    </ul>
                    <p class="section--paragraph"><strong><?php echo $l->t('Setup in advance:');?></strong></p>
                    <ul>
                        <li><?php echo $l->t('Default Nextcloud Hub plus Forms, Social, Circles,  Anti-virus, Ransomware Protection apps');?></li>
                        <li><?php echo $l->t('User accounts for all participants');?></li>
                        <li><?php echo $l->t('Group for the the team members, group for management');?></li>
                        <li><?php echo $l->t('Circle (custom group) of team members and Principal');?></li>
                    </ul>
                    <h3><?php echo $l->t('The idea');?></h3>
                    <ul>
                    <li><?php echo $l->t('During train commute, Principal writes down a good idea, to set up phone booths in the office to deal with noisy calls, in the Nextcloud Notes app on his phone.');?></li>
                    <li><?php echo $l->t('The next office day, Principal accesses the Notes from his browser and shares the idea through Nextcloud Social, their internal social media platform. A few colleagues like his post and comment.');?></li>
                    <li><?php echo $l->t('Principal brings his iPad to lunch, creating a new Text document for a quick outline of the plan.');?></li>
                    </ul>
                    <h3><?php echo $l->t('Gathering input');?></h3>
                    <ul>
                    <li><?php echo $l->t('Principal creates an open circle, a custom group anyone interested in contributing to the idea can join, with the name Phone Booth. He shares this on Social so others can see it and join. A handful of colleagues joins the circle to participate in the conversation.');?></li>
                    <li><?php echo $l->t('He puts together a quick survey in Nextcloud Forms, asking basic questions on what people would need in such a phone booth. He shares the link on Social and gives access to the results to the Phone Booth circle. Several colleagues provide input in the survey.');?></li>
                    </ul>
                    <h3><?php echo $l->t('Working with the team');?></h3>
                    <ul>
                    <li><?php echo $l->t('Principal creates a chat room for the Circle in Talk on his iPad. He shares the document he is working on into the room and asks for feedback, pointing also to the survey answers he shared earlier.');?></li>
                    <li><?php echo $l->t('A team member calls him using Talk and Principal picks up on his iPad to discuss the document they are editing together, going over the feedback from the survey.');?></li>
                    <li><?php echo $l->t('Later at home, Principal drops a few images of phone booth designs he found on the internet in the chat for all to see. The nicest 2 images are added to the document.');?></li>
                    <li><?php echo $l->t('Principal now creates a folder with the document and images and describes the basics of the idea in the Workspace area above the folder so a quick glance will show a recipient what it is about. He shares the folder with the Phone Booth circle, too, and throws in a PDF export of the results of the survey.');?></li>
                    <li><?php echo $l->t('Principal sets up a quick ‘Flow’ to get notified with a chat message in the phone booths chat room whenever changes are made in the folder.');?></li>
                    </ul>
                    <h3><?php echo $l->t('Receiving an offer');?></h3>
                    <ul>
                    <li><?php echo $l->t('The next day, Principal shares the folder wwith the office manager to asks if she can get an idea of the costs.');?></li>
                    <li><?php echo $l->t('The office manager shares the folder through a public link with their office supplies firm, asking if they can provide such a phone booth. In a note with the share she asks them to provide at least 2 options. She gives them upload rights so they can simply upload a pdf with an offer in the folder, which they do.');?></li>
                    <li><?php echo $l->t('The next morning, when checking his dashboard in the morning, Principal sees the chat message notifying them the offer was uploaded. Two team members already signaled their approval of the more expensive offer in the chat.');?></li>
                    </ul>
                    <h3><?php echo $l->t('Management feedback');?></h3>
                    <ul>
                    <li><?php echo $l->t('Principal shares the folder with his manager, adding a note to the share asking if she could bring this up with senior management if she likes the idea. As her status in Nextcloud is set to ‘traveling’, he also sends an email to her boss.');?></li>
                    <li><?php echo $l->t('Her laptop has downloaded the folder to her laptop so during her flight she can check the proposal and check the budget. She adds a line for phone booths in the budget proposal spreadsheet for the next month.');?></li>
                    </ul>
                    <h3><?php echo $l->t('A malware attack interrupts');?></h3>
                    <ul>
                    <li><?php echo $l->t('After landing, her laptop syncs her changes but the sync is stopped: the anti-virus scanner on the server has discovered a malware infection. It stopped the sync and warned the system administrator and the manager.');?></li>
                    <li><?php echo $l->t('There seems to have been a ransomware active for a while already, which as been slowly encrypting files over the last weeks. Because of this, many files have been modified since the first files were encrypted and thus restoring a backup from before the first infection would undo weeks of work. Luckily, the Nextcloud Ransomware Protection app allows one-click recovery of her data to un-encrypted data. The app has analyzed the files of the manager and for each file, can roll back to the version just before they were encrypted.');?></li>
                    <li><?php echo $l->t('After all data was recovered, the manager can share the spreadsheet. The other managers react in chat on the budget. Once the team has all added their signoff tags it gets sent automatically to the finance back-office for processing through a flow configured in Nextcloud Flow.');?></li>
                    </ul>
				</div>
            </div>
        </div>
    </div>
</section>

<?php require get_template_directory().'/onpremises.php';?>


<section class="section--dashboard">
<div class="container">
	<div class="row">
        <div class="col-md-6 image--feature">
			<stream src="b5442e477fa8b39c31119a1f2321ddcf" controls loop poster="<?php bloginfo('template_directory'); ?>/assets/img/features/nextcloud20.png"></stream>
            <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=b5442e477fa8b39c31119a1f2321ddcf"></script>
		</div>
		<div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Start your day informed');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Dashboard is your starting point of the day, giving you an overview of your upcoming appointments, urgent emails, chat messages, incoming tickets, latest tweets and much more! Users can set their status so others know what they are up to..');?></p>
                <a href="<?php echo home_url('dashboard') ?>" class="overlay-trigger button button--blue button--arrow button--large"><?php echo $l->t('Dashboard features');?></a>
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
                <h3 class="section--paragraph__title"><?php echo $l->t('Collaborate on documents with Collabora');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Collabora Online integration in Nextcloud empowers your users to collaborate on office documents with team members in real time.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Compatibility with Microsoft Office formats means perfect documents, every time.');?></p>
                <ul>
                <li><?php echo $l->t('Shipping by default in Nextcloud Hub');?></li>
                <li><?php echo $l->t('A modern and familiar user interface');?></li>
                <li><?php echo $l->t('The same document rendering in every browser');?></li>
                <li><?php echo $l->t('Desktop level editing capabilities');?></li>
                    </ul>
                <a href="<?php echo home_url('collabora') ?>" class="overlay-trigger button button--blue button--arrow button--large"><?php echo $l->t('Collabora Online');?></a>
            </div>
        </div>
	</div>
</section>

<section class="section--search">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--feature">
                <stream src="d496e44cb39e8570a52a22259545aec4" controls loop poster="<?php bloginfo('template_directory'); ?>/assets/img/features/search_moodle_course_module.png"></stream>
                <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=d496e44cb39e8570a52a22259545aec4"></script>
            </div>
           <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__tittle"><?php echo $l->t('Find everything in one place');?></h3>
                <p class="section--paragraph"><?php echo $l->t('On the top-right of your Nextcloud window, a search glass shows search results from all over Nextcloud. Additional search providers can be installed and over a dozen different search providers are available to show you Github issues, Moodle courses, Jira tickets and more.');?></p>
                <a href="<?php echo home_url('unified-search') ?>" class="overlay-trigger button button--blue button--arrow button--large"><?php echo $l->t('Unified search');?></a>
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
                <h3 class="section--paragraph__title"><?php echo $l->t('Security first');?></h3>
                <p class="section--paragraph"><?php echo $l->t('We are deeply committed to protecting the safety of our customers\' data. We are confident that Nextcloud Files offers the best security in the self-hosted file sync and share industry, because:');?></p>
                <p class="section--paragraph"><?php echo $l->t('<i class="fa-key fa"></i> we follow industry best practices around security (aligned to <a class="hyperlink" href="https://en.wikipedia.org/wiki/ISO/IEC_27001:2013">ISO27001</a>)');?></p>
                <p class="section--paragraph"><?php echo $l->t('<i class="fa-key fa"></i> we offer some of the <a class="hyperlink" href="https://nextcloud.com/blog/introducing-the-nextcloud-bug-bounty-program/" target="_blank">highest open source security bug bounties</a>');?></p>
                <p class="section--paragraph"><?php echo $l->t('');?></p>
                <p class="section--paragraph"><?php echo $l->t('<i class="fa-key fa"></i> we integrate unique in-transit, server-side and client-side end-to-end encryption technologies.');?></p>
                <p class="section--paragraph"><?php echo $l->t('');?></p>
                <a href="<?php echo home_url('secure') ?>" class="overlay-trigger button button--blue button--arrow button--large"><?php echo $l->t('Security in Nextcloud');?></a>
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
                <h3 class="section--paragraph__title"><?php echo $l->t('Compliance-ready monitoring');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud enables admins to monitor the health and performance of a Nextcloud system with a graphical UI and an API endpoint for monitoring apps. Fully audit-ready logs of user activity are generated.');?></p>
                <h3 class="section--paragraph__title"><?php echo $l->t('Tracking changes to user files');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud Files lets users track file modifications, downloads of shares and changes to comments or tags, providing an overview in the browser, clients or via email notifications and an RSS feed.');?></p>
                <a href="<?php echo home_url('monitoring') ?>" class="overlay-trigger button button--blue button--arrow button--large"><?php echo $l->t('Monitoring and compliance');?></a>
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


<section class="section--storage">
	<a name="storage" id="storage"></a>
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--feature">
                <a class="overlay-trigger" href="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png"/></a>
            </div>
                <h3 class="section--paragraph__title"><?php echo $l->t('External storage, securely encrypted');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The external storage feature of Nextcloud gives users access to their data wherever it is. Nextcloud Files can access data stored with a wide variety of popular cloud service providers such as Amazon, Google and Dropbox, but can also access file storage solutions using standard protocols such as NFS, (S)FTP, WebDAV and more.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The Encryption App can encrypt data at rest for both local and remote storage, protecting data stored on networks outside of user infrastructure. Keys can be handled by an external key management server or stored locally, on the server.');?></p>
                <a href="<?php echo home_url('storage') ?>" class="overlay-trigger button button--blue button--arrow button--large"><?php echo $l->t('External storage');?></a>
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
                <h3 class="section--paragraph__title"><?php echo $l->t('Integrated account management');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud features built-in account management with optional two-factor authentication as well as Single-sign-on support and integration with external user directories like LDAP or IMAP, SMB, FTP and more.');?></p>
                <a href="<?php echo home_url('usermanagement') ?>" class="overlay-trigger button button--blue button--arrow button--large"><?php echo $l->t('User management');?></a>
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
                <h3 class="section--paragraph__title"><?php echo $l->t('Virtual Data Room');?></h3>
                <p class="section--paragraph"><?php echo $l->t('In settings where a firewall is needed between departments or organizations without impeding smooth and efficient collaboration, a separate Virtual Data Room can be set up. Nextcloud offers a wide range of unique features for VDR use and its on-premises nature offers unparalleled confidentiality and control.');?></p>
                <a href="<?php echo home_url('virtual-data-room') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Virtual Data Rooms');?></a>
            </div>
        </div>
    </div>
</section>-->

<section class="section--benefits">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center"><?php echo $l->t('Key benefits');?></h2>
        <div class="row">
            <div class="col-md-4">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/tools.svg" /></div>
                <h3 class="section--paragraph__title text-center"><?php echo $l->t('Under your control');?></h3>
                <p class="section--paragraph text-center"><?php echo $l->t('There is no need to compromise with outsourcing. Rather than hosting your sensitive company data with a third party, keep it 100% under control of your IT team while offering the highly secure access and communication facilities that your employees need to be productive.');?></p>
            </div>
            <div class="col-md-4">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/people.svg" /></div>
                <h3 class="section--paragraph__title text-center"><?php echo $l->t('A complete platform');?></h3>
                <p class="section--paragraph text-center"><?php echo $l->t('An easy, familiar user interface means efficient work. Nextcloud is unique by offering the most extensive built in communication and collaboration technology in the industry, negating the complexity of running and connecting multiple separate solutions.');?></p>
            </div>
            <div class="col-md-4">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/firewall.svg" /></div>
                <h3 class="section--paragraph__title text-center"><?php echo $l->t('Military-grade security');?></h3>
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud offers industry-first, unique solutions like Video Verification, machine-learning-driven suspicious login detection, extensive multi-factor authentication solutions and more. Extensive logging and monitoring show users, administrators and auditors the exact flow of data and who had access at what time.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center"><?php echo $l->t('Ensure efficient and secure team productivity the content collaboration platform from the market leader.');?></p>
                <p class="text-center"><?php echo $l->t('Contact us to learn how we can help you.');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="overlay-trigger button button--large button--arrow"><?php echo $l->t('Contact us');?></a>
				</div>
            </div>
        </div>
	</div>
</div>
</section>

<section class="section--features">
<div class="container">
    <h1 class="section--heading-1 text-center"><?php echo $l->t('What sets Nextcloud apart');?></h1>
    <div class="row feature-row">
        <div class="col-md-6 image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/replacing-nextcloud.svg" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('A complete platform');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers the most comprehensive, deeply integrated on-premises collaboration platform on the market, replacing dozens of other tools.');?></p>
            <ul>
                <li class="check"><?php echo $l->t('Secure file exchange within and between organizations');?></li>
                <li class="check"><?php echo $l->t('Collaborative editing of docx, xlsx and more');?></li>
                <li class="check"><?php echo $l->t('File versioning, restore and retention control');?></li>
                <li class="check"><?php echo $l->t('Commenting on files, adding notes to share links');?></li>
                <li class="check"><?php echo $l->t('Integrated chat and secure audio-video calls');?></li>
                <li class="check"><?php echo $l->t('Calendar, mail and task management tools');?></li>
                <li class="check"><?php echo $l->t('Comprehensive set of security capabilities');?></li>
            </ul>

            <p class="section--paragraph"><?php echo $l->t('Switching between different tools is more than cumbersome and inefficient: it also increases the chance for mistakes that can result in data leaks.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Having a complete, all-in-one solution simplifies the IT infrastructure for both users and the IT team, improving productivity and security.');?></p>
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
        <i class="fa-copy fa"></i>
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
<?php require get_template_directory().'/overlay.php'; ?>



