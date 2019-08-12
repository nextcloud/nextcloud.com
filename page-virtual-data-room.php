<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/virtualdatarooms.css?v=2" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/broken.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/broken.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/broken.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/broken.jpg">
</head>
<div class="background vdr-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('Virtual Data Rooms');?></h1>
			<h2><?php echo $l->t('Keep your data close');?></h2>
		</div>
	</div>
</div>
<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="section--paragraph text-center"><?php echo $l->t('M&A transactions, loan syndication, private equity and venture capital transactions require the utmost confidentiality. And all that without any data leaving your organization.');?></p>

			<p class="section--paragraph text-center"><?php echo $l->t('Forget about SAAS and outsourcing: an on-premises Nextcloud VDR offers the ease of use that speeds up deal making while strict control over access and fine grained auditing ensure sensitive data remains secure.');?></p>
			<br>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<blockquote><?php echo $l->t('Virtual Data Rooms have revolutionized transaction processes with 24/7 global access and reduced risks, but sending data off-premises reduces control. Nextcloud offers a controlled environment where confidentiality can be preserved, while work gets done as efficient as with familiar consumer technology.');?></blockquote>
		</div>
	</div>
</section>

<section class="section--benefits">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center"><?php echo $l->t('Key benefits');?></h2>
        <div class="row">
            <div class="col-md-4">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/tools.svg" /></div>
                <p class="section--paragraph__tittle text-center"><?php echo $l->t('Under your control');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('Do not resort to outsourcing. Rather than hosting your sensitive company data with a third party, keep it 100% on premises while offering the highly secure access and communication facilities required by a partner or prospect.');?></p>
            </div>
            <div class="col-md-4">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/firewall.svg" /></div>
                <p class="section--paragraph__tittle text-center"><?php echo $l->t('A complete platform');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('An easy, familiar user interface means efficient work. Nextcloud is unique by offering the most extensive built in communication and collaboration technology in the industry, negating the complexity of running and connecting multiple separate solutions.');?></p>
            </div>
            <div class="col-md-4">
                <div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/people.svg" /></div>
                <p class="section--paragraph__tittle text-center"><?php echo $l->t('Military-grade security');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud offers industry-first, unique solutions like Video Verification, machine-learning-driven suspicious login detection, extensive multi-factor authentication solutions and more. Extensive logging and monitoring show users, administrators and auditors the exact flow of data and who had access at what time.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center"><?php echo $l->t('Ensure fast, secure, high-value dealmaking and transactions with the content collaboration platform from the market leader.');?></p>
                <p class="text-center"><?php echo $l->t('Contact us to learn how we can help you.');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
            </div>
        </div>
	</div>
</div>
</section>

<section>
<div class="container">
    <div class="row feature-row">
        <div class="col-md-6 image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/iPhone6s-talk-chat.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Available-anywhere collaboration');?></p>
            <p class="section--paragraph"><?php echo $l->t('Switching between different tools is more than cumbersome and inefficient: it also massively increases the chance for mistakes to result in data leaks. For a process as important as making a sensitive deal, you ca not risk an email send to the wrong address compromising your business.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud integrates comments, chat and secuire audio/video calls, offers real-time notifications through mobile, web and desktop interfaces and integrates document viewing and editing all in one platform. It even comes with groupware functionalities like a calendar, task management and email functionality so meetings, plans, invitations and all the details they come with stay within the secure data room.');?></p>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/meeting.jpg" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('A real use case');?></p>
            <p class="section--paragraph"><?php echo $l->t('To ensure 6 employees from a third party can check the books and approve a deal, a Nextcloud VDR is set up. The internal team of 11 employees each gets an account where they can freely upload and collaborate on documents, through their mobile devices as well as by editing, chat and calls in the browser. The 6 guests receive a guest account.');?></p>
            <p class="section--paragraph"><?php echo $l->t('The welcome mail guides the guests to set up their account with a password and a second factor of their choice: a hardware key, a one-time-password mechanism like Google Authenticator or an SMS. Then they can log in.');?></p>
            <p class="section--paragraph"><?php echo $l->t('The internal team can share files with the guests, with or without editing rights for the guest (on a per-file basis). Their Outlook email application will, when an email is written to a guest, automatically upload attachments as well as mail body to the VDR and simply notify the guest that a new message was received.');?></p>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/include.jpg" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <p class="section--paragraph"><?php echo $l->t('Besides email, users can comment on documents, which will notify a mentioned person or the document owner. Last but not least, real-time audio/video communication and chat are available, all within the VDR. This ensures no information, not even the content of emails or meta data of chat and calls can leak.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Aside from participating in communication when invited, the six guests can only ever see and, if they have the access rights, edit files. The files can not be downloaded, copied from or printed and are watermarked on the screen at all times. Guests can also not upload files unless a folder is made available to them where they can do so, nor connect with third party tools or clients to Nextcloud unless explicitly allowed. Any file has to be accessed securely through the browser or is not available.');?></p>
            <p class="section--paragraph"><?php echo $l->t('At the end of the process, the VDR is archived and any devices which were set up are remotely wiped by the administrator using the built-in remote wipe feature.');?></p>
            <p class="section--paragraph"><strong><?php echo $l->t('Is this what you need?');?></strong>
            <a href="<?php echo home_url('buy') ?>" class="hyperlink"><?php echo $l->t('Contact us and get started now.');?> <i class="icon-arrow-circle-o-right icon"></i></a></p>
        </div>
    </div>
</div>
</section>

<section class="section--benefits">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center"><?php echo $l->t('24/7 support');?></h2>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph"><?php echo $l->t('Where competitors rely on a \'support team\' walling you off from the engineering knowledge you need, Nextcloud providers direct access to the real experts.');?></p>
                <p class="section--paragraph"><?php echo $l->t('After all, you need to get work done and can\'t afford first having to go through the "did you try to turn it off and on again" conversation before you get taken serious.');?></p>
            </div>
        </div>
    </div>
</div>
</section>
<section>
<div class="container">
	<div class="row">
        <p class="section--paragraph__tittle"><?php echo $l->t('As leading content collaboration platform, Nextcloud has been designed for security and ease of use.');?><br/> <?php echo $l->t('A Nextcloud VDR offers:');?></p>
        <div class="col-md-6">
            <ul>
                <li><?php echo $l->t('Activity tracking and audit log, real-time reporting');?></li>
                <li><?php echo $l->t('Built in secure communication with comments and audio/video chat');?></li>
                <li><?php echo $l->t('Secure email box (prevent leaking of email content and attachments with Outlook integration)');?></li>
                <li><?php echo $l->t('Advanced search within the whole VDR');?></li>
                <li><?php echo $l->t('Extensive file compatibility');?></li>
                <li><?php echo $l->t('Unlimited data and accounts');?></li>
                <li><?php echo $l->t('Easy, familiar interface');?></li>
                <li><?php echo $l->t('Document versioning');?></li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul>
                <li><?php echo $l->t('Extensive security capabilites including:');?>
                <li><?php echo $l->t('Multi-layer, military-grade encryption');?></li>
                <li><?php echo $l->t('Advanced digital rights management');?></li>
                <li><?php echo $l->t('multi-factor authentication');?></li>
                <li><?php echo $l->t('Video Verification to ensure identity proof');?></li>
                <li><?php echo $l->t('Extensive file access control mechanisms');?></li>
                <li><?php echo $l->t('Watermarking of files');?></li>
                <li><?php echo $l->t('Remote wipe');?></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="section--paragraph"><?php echo $l->t('Need your own virtual data room? Our professional services are at your disposal!');?> <a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('Let us know what you need.');?></a></p>
        </div>
	</div>
</div>
</section>

<section>
<div class="container">
    <div class="row">
        <div class="col-md-4 image--floated  image--feature">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/firewall.png" alt="Nextcloud File Firewall" >
        </div>
	    <div class="col-md-8">
            <h3><?php echo $l->t('Under control of IT');?></h3>
            <p class="section--paragraph"><?php echo $l->t('No matter the storage solution used, Nextcloud can');?> <a class="hyperlink" href="<?php echo home_url('workflow') ?>"><?php echo $l->t('ensure corporate policies are followed.');?></a> <?php echo $l->t('Sharing can be restricted through the file firewall, filtering on user properties like location or group, or file properties like (automatically or manually) assigned tags, file type and more. With storage transparent to users, generic data can remain where it is while IT can make sure that business critical or compliance-relevant information is stored on internal infrastructure and does not leave the company. Use our secure');?> <a class="hyperlink" href="<?php echo home_url('secure-drop') ?>">File Drop</a> <?php echo $l->t('to let customers upload files to you in a easy and secure way!');?></p>
   		</div>
    </div>
    <div class="row">
        <div class="col-md-6 image--feature">
            <img class="img-responsive acess__anywhere" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-android2-nw.png" alt="end-to-end encryption" >
        </div>
	    <div class="col-md-6">
            <h3><?php echo $l->t('With unique layered encryptio');?>n</h3>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers a supremely easy to use, well integrated file sync and share solution with an uniquely layered approach to security. Together with the support for nearly any storage technology, it features server-side encryption and offers the ability to employ');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('end-to-end, client side encryption');?></a> <?php echo $l->t('for a subset of user files. Rather than making it an either-or choice, your business can rely on utmost security where it is needed but keep collaborative online document editing and full-text search on the server over the rest of the stored data.');?></p>
		</div>
    </div>
    <div class="row">
        <div class="col-md-6 image--floated  image--feature new-img">
            <a hre="<?php echo get_template_directory_uri(); ?>/assets/img/features/auditlog.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/auditlog.png" alt="extensive audit logs" ></a>
        </div>
	    <div class="col-md-6">
            <h3><?php echo $l->t('100% visibility');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud features extensive');?> <a href="<?php echo home_url('monitoring') ?>" class="hyperlink"><?php echo $l->t('monitoring and auditing capabilities');?></a> <?php echo $l->t('to ensure actions of all users are transparent, both to the users themselves and to auditors.');?></p>
		</div>
    </div>
</div>
</section>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $l->t('Real-world-tested');?></h2>
            <p class="section--paragraph"><?php echo $l->t('Unlike most competitors, Nextcloud has been battle-hardened by extensive usage in a wide variety of scenarios. From an intuitive interface, crucial to keep support requests down at large universities, to extensive security features required in the financial sector, Nextcloud has been tuned to deliver what is needed to work efficiently.');?></p>

            <p class="section--paragraph"><?php echo $l->t('Equally important, each of its capabilities can be tuned and, if needed, disabled, ensuring a minimum attack surface and less opportunities for costly mistakes.');?></p>

            <p class="section--paragraph"><?php echo $l->t('Users can access data on a FTP drive shared with another company, fully subject to the strict control by IT; while data stored on an external object storage could be encrypted using server-side encryption so the storage provider has no way to compromise their security.');?></p>

            <p class="section--paragraph"><?php echo $l->t('Meanwhile, files from a specific team can be enforced to be end-to-end encrypted on their clients, protecting their files from even the worst case of a full server breach.');?></p>

            <p class="section--paragraph"><?php echo $l->t('In the back-end, IT can use a mix of local NFS or SharePoint storage, public S3 compatible storage and even blockchain technology to find the perfect mix between performance, reliability, security and cost.');?></p>

            <p class="section--paragraph"><?php echo $l->t('The layered approach to security makes sure users have the maximum amount of productivity in their web interface while making sure sensitive data receives the ultimate protection, client-to-client. Keeping it all in a single solution simplifies management and avoids mistakes from users or IT departments that might cause costly data leaks.');?></p>
        </div>
	</div>
</div>
</section>
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock">
				<p class="text-center"><?php echo $l->t('With military-grade security and first-class communication and collaboration technology, Nextcloud offers the full array of functions needed to do due dilligence without giving up control over your data. Contact us today to get started!');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
