<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/content-collaboration-platform.css?v=1" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration-small.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration-small.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration-small.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/collaboration-small.jpg">
</head>
<div class="background ccp-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('Team collaboration');?></h1>
			<h2><?php echo $l->t('With the leading on-premises content collaboration platform');?></h2>
		</div>
	</div>
</div>
<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Content collaboration platforms offer impressive productivity gains but lead to a loss of control over business critical and sensitive data.');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('As fully on-premises solution, Nextcloud provides the benefits of online collaboration without the compliance and security risks.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--explanation benefits">
<div class="container-fluid banner quote">
    <div class="container">
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('What is a content collaboration platform?');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('A content collaboration platform (CCP) is a platform designed to facilitate content productivity and collaboration in an organization. A CCP typically enables collaborative editing of documents, supports video and text chat, task management and basic content management and workflow capabilities.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Team members can usually access content via web, desktop and mobile interfaces and collaboration can be across organizational borders.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Content Collaboration Platforms are an evolution of Enterprise File Sync and Share (EFSS) solutions, which are limited to facilitating the sharing of files.');?></p>
			<div class="banner-image-inverted banner-image--ccp">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid banner quote">
    <div class="container">
        <div class="col-md-6 col-md-offset-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Data sovereignty and SAAS');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The main issue with solutions like Google Apps and Office 365 is <strong>data sovereignty.</strong>');?></p>
			<p class="section--paragraph"><?php echo $l->t('To use these platforms, enterprises have to hand over their sensitive data to the vendor. This brings security and compliance risks.');?></p>
			<p class="section--paragraph"><?php echo $l->t('A wide range of work-arounds for this problem exist, from complicated key management solutions to external encryption tools. But despite the added costs and complexity they bring, the fundamental issue remains that one has to ultimately trust the vendor with their data.');?></p>
            <div class="banner-image banner-image--issue">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid banner quote">
    <div class="container">
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('The solution: on-premises');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The vast majority of businesses has existing hosting and storage solutions in place, monitored and certified through the years. Building on this existing base using an on-premises solution gives a massive advantage in terms of quick deployment, compliance and security.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud has emerged as the most deployed solution in this space, delivering the widest range of integrated capabilities with the highest security standards.');?></p>
            <p class=""><?php echo $l->t('Contact Nextcloud now to learn how we can help you.');?>
			<a href="<?php echo home_url('buy') ?>" class="button button--small"><?php echo $l->t('Contact us');?></a></p>
            <div class="banner-image-inverted banner-image--solution">
            </div>
        </div>

    </div>
</div>
</section>

<section class="section--on-premise">
<div class="container">
	<h1 class="section--heading-1 text-center"><?php echo $l->t('Why self hosting?');?></h1>
	<div class="row">
		<div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('Users need collaboration');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Whatever your company does to enforce compliance, some of your enterprise data is already floating in one or more SaaS clouds.');?></p>
			<p class="section--paragraph"><?php echo $l->t('People have to get work done and new generations of employees know what tools they want. So they share documents as mail attachments to Gmail addresses, use Trello or share with Dropbox. The question is not "to Cloud or not to Cloud" but "which Cloud?" and <strong>"how to re-gain control?"</strong>');?></p>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('SaaS is not a safe solution');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Most consumer-grade solutions like Dropbox or Office 365 were not designed with privacy regulations and security concerns in mind, mixing data from consumers and businesses, spread out in data centers across the globe.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Rather than trying to work around their limitations, Nextcloud Files provides a security-first solution which puts IT in complete control over the location and access policies of data with a hybrid, private or lcoally hosted trusted cloud solution.');?></p>
        </div>
	</div>
    <div class="row">
        <p class="section--paragraph text-center"><a href="https://nextcloud.com/blog/the-issue-with-public-cloud/" class="button button--blue button--arrow button--large"><?php echo $l->t('The risk of SaaS');?></a></p>
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
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Contact us');?></a>
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
<!--             <p class="section--paragraph"><?php echo $l->t('Having a complete, all-in-one solution offers s');?></p> -->
        </div>
    </div>

</div>
</section>
<section>
<div class="container">
    <div class="row">
        <h2 class="text-center"><?php echo $l->t('Feature highlights');?></h2>
    </div>
    <div class="row">
        <h3 class="section--paragraph__title"><?php echo $l->t('Secure view in action');?></h3>
        <p class="section--paragraph"><?php echo $l->t('With secure view, our online office solutions can be configured to open PDF files, images and text files, making these files available in a watermark-protected way, while downloads and other apps are disabled using File Access Control. This setup is useful when data has to be protected from leaking but still has to be made available for review, as in a virtual data room scenario.');?></p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/Secure-View-admin-configuration.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/Secure-View-admin-configuration.png" alt="Configuring Secure View in Collabora" class="img-responsive"></a><br />
            <?php echo $l->t('Configuring Secure View in Collabora');?>
        </div>
        <div class="col-md-4">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-view-tagging.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-view-tagging.png" alt="Setting a &#39;confidential&#39; tag" class="img-responsive"></a><br />
            <?php echo $l->t('Setting a &#39;confidential&#39; tag');?>
        </div>
        <div class="col-md-4">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-view-watermarked.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-view-watermarked.png" alt="Secure view watermarked file" class="img-responsive"></a><br />
            <?php echo $l->t('Secure view watermarked file');?>
        </div>
    </div>
    <div class="row">
        <h3 class="section--paragraph__title"><?php echo $l->t('Secure Mailbox');?></h3>
        <p class="section--paragraph"><?php echo $l->t('The Nextcloud Secure Sharing Outlook Add-in includes a secure mailbox feature. This feature protects the contents (body) of email from interception by providing the recipient with a notification that a new email was received. The recipient then has to log in on their (guest) account to access the email and its attachments.');?></p>
        <p class="section--paragraph"><?php echo $l->t('The body of the email is shown with the file attachments. Each email is a folder, linked to in the email notification.');?></p>
        <p class="section--paragraph"><?php echo $l->t('In the screenshots below, the user sends the link and password to the recipient by email. The user can take out the password and send it through another channel. Alternatively, when a guest account is set up for the recipient, the Outlook add-in will detect this and instead share the message to the guest account and include an internal link in the email. The recipient will have to log into their guest account to access the email.');?></p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-writing-the-email.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-writing-the-email.png" alt="Secure Mailbox - Writing an email" class="img-responsive"></a><br />
            <?php echo $l->t('Writing an email');?>
        </div>
        <div class="col-md-6">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-attaching-files-and-enabling-secure-mailbox-.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-attaching-files-and-enabling-secure-mailbox-.png" alt="Secure Mailbox - attaching files" class="img-responsive"></a><br />
            <?php echo $l->t('Attaching files, enabling Secure Mailbox');?>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6"><a href="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-email-as-it-will-be-send-to-recipient.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-email-as-it-will-be-send-to-recipient.png" alt="Secure Mailbox - Email as it will be sent to recipient" class="img-responsive"></a><br />
            <?php echo $l->t('Email as it will be sent to recipient');?>
        </div>
        <div class="col-md-6">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-recipient-view-of-secured-email-in-Nextcloud.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/secure-mailbox-recipient-view-of-secured-email-in-Nextcloud.png" alt="Secure Mailbox - Recipient view in Secure Mailbox in Nextcloud" class="img-responsive"></a><br />
            <?php echo $l->t('Recipient view in Secure Mailbox in Nextcloud');?>
        </div>
    </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Remote wipe');?></h3>
                <div data-type="youtube" data-video-id="oyWXMjb-6ik"></div>
                <iframe width="100%" height="400" src="https://www.youtube-nocookie.com/embed/oyWXMjb-6ik" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Watermarks and secure inbox');?></h3>
                <div data-type="youtube" data-video-id="nueL_hzDp-s"></div>
                <iframe width="100%" height="400" src="https://www.youtube-nocookie.com/embed/nueL_hzDp-s" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
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
                <p class="section--paragraph text-center"><?php echo $l->t('Where competitors rely on a \'support team\' walling you off from the engineering knowledge you need, Nextcloud provides direct access to the real experts.');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('After all, you need to get work done and can\'t afford first having to go through the "did you try to turn it off and on again" conversation before you get taken serious.');?></p>
                <div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Contact us');?></a>
				</div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--security">
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
            <h3><?php echo $l->t('With unique layered encryption');?>n</h3>
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
    <div class="row feature-row">
        <div class="col-md-6 image--feature new-img">
            <a><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/ransomware-recovery.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('Best Ransomware protection in the industry');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Ransomware attacks are becoming more targetted as lots of money can be extracted from businesses and government organizations. While insurance can cover direct costs, the disruption to business is immense regardless. Nextcloud goes far beyond competing solutions, offering automated, one-click ransomware recovery tools.');?></p>
            <a href="https://nextcloud.com/blog/amidst-rising-ransomware-costs-another-us-city-pays-hundreds-of-thousands-to-recover-data/" class="button button--blue button--arrow button--large"><?php echo $l->t('Ransomware risks and protection');?></a>
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
