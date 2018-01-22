<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/features.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer", "modules/submenu"])
	});
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<div class="background features-background second-menu">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('<span class="avoidwrap">Your cloud,</span> <span class="avoidwrap">your rules</span>');?></h1>
				<h2><?php echo $l->t('Nextcloud Files enables enterprises to take back control over their data, ensuring compliance, security and instant availability wherever their employees are.');?></h2>
			</div>
		</div>
	</div>
</div>
<div class="second-menu">
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#on-prem"><span class="avoidwrap"><?php echo $l->t('On-premise');?></span></a>
			<a href="#security"><span class="avoidwrap"><?php echo $l->t('Security');?></span></a>
			<a href="#send"><span class="avoidwrap"><?php echo $l->t('File exchange');?></span></a>
			<a href="#clients"><span class="avoidwrap"><?php echo $l->t('Clients');?></span></a>
			<a href="#workflow"><span class="avoidwrap"><?php echo $l->t('Workflow');?></span></a>
			<a href="#storage"><span class="avoidwrap"><?php echo $l->t('External storage');?></span></a>
			<a href="#integrations"><span class="avoidwrap"><?php echo $l->t('Integrations');?></span></a>
		</div>
	</div>
</div>

<section class="section--hosting">
	<div class="container">
		<div class="col-md-6 revealOnScroll">
			<img class="img-responsive acess__anywhere" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/access-anywhere.png" alt="in action" >
		</div>
		<div class="col-md-6 revealOnScroll feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('An Enterprise File Sync and Share solution that keeps data under control.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Your employees need to have easy access to their files, photos and documents to work and share with team members, customers and partners. And IT needs to know nobody besides those they shared with has access to those files.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud Files is an on-premise, open source file sync and share solution designed to be easy-to-use and highly secure.');?></p>
			<a href="/pricing" class="button button--blue button--arrow button--large"><?php echo $l->t('Pricing');?></a>
		</div>
	</div>
</section>

<section class="section--overview">
<div class="container">
	<div class="row">
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/mobile.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Easy access anywhere');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('A modern and easy-to-use web interface, desktop clients and mobile apps.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Real-time collaboration and instant access to all data from any device, anywhere!');?></p>
		</div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/permissions.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Ultimate security');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('An open source, on-premises product. Powerful on-server and End-to-end Encryption.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Files are stored inside your company infrastructure, without any third party ever gaining access.');?></p>
		</div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/storage.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Deep integration');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Access data from FTP, Windows Network Drive, SharePoint, NFS, Object storage and more.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Simple deployment, configuration and integration lower costs and decrease risk while leveraging existing IT investments.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--customers">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Powering collaboration');?></h2>
                <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('Thousands of modern organizations secure data and improve productivity with Nextcloud Files, enabling employees to collaborate seamlessly across divisions and over company borders.');?></p>
            </div>
        </div>
        <div class="row revealOnScroll">
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
<a name="on-prem" id="on-prem"></a>

<section class="section--on-premise">
<div class="container">
	<h2 class="section--heading-1 revealOnScroll text-center"><?php echo $l->t('Why on-premise?');?></h2>
	<div class="row">
		<div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Users need collaboration');?></p>
			<p class="section--paragraph"><?php echo $l->t('Whatever your company does to enforce compliance, some of our enterprise data is already floating in one or more Public Clouds.');?></p>
			<p class="section--paragraph"><?php echo $l->t('People have to get work done, so they share documents as mail attachments to Gmail addresses or via Dropbox. So the question is not "to Cloud or not to Cloud" but "which Cloud?"');?></p>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Public clouds are not a safe solution');?></p>
			<p class="section--paragraph"><?php echo $l->t('Most consumer-grade solutions like Dropbox or Office 365 were not designed with privacy regulations and security concerns in mind, mixing data from consumers and businesses, spread out in data centers across the globe.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Rather than trying to work around their limitations, Nextcloud Files provides a security-first solution which puts IT in complete control over the location and access policies of data with a hybrid or private cloud solution.');?></p>
        </div>
	</div>
</div>
</section>

<section class="section--compliance">
<div class="container-fluid banner">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="revealOnScroll"><?php echo $l->t('Compliance by design');?></h2>
            <h3 class="revealOnScroll"><?php echo $l->t('HIPAA, GDPR and more');?></h3>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud products are designed with compliance in mind, providing extensive data policy enforcement, encryption, user management and auditing capabilities.');?></p>
            <div class="row learnmore">
            <h3 class="text-center revealOnScroll"><?php echo $l->t('Learn more');?></h3>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="/healthcare"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/tools.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('Healthcare and HIPAA');?></p></a>
                    </div>
                </div>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="https://nextcloud.com/blog/bring-enterprise-data-back-under-control-with-nextcloud/"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/securitypolicies.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('GDPR compliance');?></p></a>
                    </div>
                </div>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="/monitoring"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/ldap.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('Auditing capabilities');?></p></a>
                    </div>
                </div>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="/workflow"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/firewall.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('File Access Control');?></p></a>
                    </div>
                </div>
            </div>
        </div>
        <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/medicaldevices.jpeg">
        <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/medicaldevices-small.jpeg">
    </div>
    </div>
</div>
</section>



<section class="section--security">
	<a name="security" id="security"></a>
	<div class="container">
		<div class="col-md-6 revealOnScroll image--feature">
		<img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP.png" alt="in action" >
		</div>

		<div class="col-md-6 revealOnScroll feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Security first');?></p>
			<p class="section--paragraph"><?php echo $l->t('We are deeply committed to protecting the safety of our customers\' data. We are confident that Nextcloud Files offers the best security in the self-hosted file sync and share industry, because:');?></p>
			<p class="section--paragraph"><?php echo $l->t('<i class="fa-key fa"></i> we follow industry best practices around security (aligned to <a class="hyperlink" href="https://en.wikipedia.org/wiki/ISO/IEC_27001:2013">ISO27001</a>)');?></p>
			<p class="section--paragraph"><?php echo $l->t('<i class="fa-key fa"></i> we offer some of the <a class="hyperlink" href="https://nextcloud.com/introducing-the-nextcloud-bug-bounty-program/" target="_blank">highest open source security bug bounties</a>');?></p>
			<p class="section--paragraph"><?php echo $l->t('');?></p>
			<p class="section--paragraph"><?php echo $l->t('<i class="fa-key fa"></i> we integrate unique in-transit, server-side and client-side end-to-end encryption technologies.');?></p>
			<p class="section--paragraph"><?php echo $l->t('');?></p>
			<a href="/secure" class="button button--blue button--arrow button--large"><?php echo $l->t('Security in Nextcloud');?></a>
		</div>
	</div>
</section>

<a name="send" id="send"></a>
<section class="section--sharing">
    <div class="container">
        <div class="row revealOnScroll feature--block">
            <div class="col-md-6">
                <h2 class="section--paragraph__tittle"><?php echo $l->t('Secure file exchange');?></h2>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud Files enables hospitals, banks, notaries and government agencies to securely send files to and receive files from customers, patients, clients or partners.');?></p>
                <p class="section--paragraph"><?php echo $l->t('The easy web and mobile interfaces of Nextcloud Files allow users to share files with other users on the server, to create and send password-protected public links, to let others upload files to the private cloud and to get notifications on phone and desktop when a user on another cloud server shares files.');?></p>
                <a href="/file-drop" class="button button--blue button--arrow button--large"><?php echo $l->t('Secure file exchange');?></a><br>
            </div>
            <div class="col-md-6">
                <div data-type="youtube" data-video-id="AhFnbB-a7ik"></div>
            </div>
        </div>
    </div>
</section>

<section class="section--monitoring">
    <a name="monitoring" id="monitoring"></a>
    <div class="container">
        <div class="col-md-6 revealOnScroll image--feature">
            <a><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-nw.png" alt="in action"/></a>
        </div>
            <p class="section--paragraph__tittle"><?php echo $l->t('Compliance-ready monitoring');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud enables admins to monitor the health and performance of a Nextcloud system with a graphical UI and an API endpoint for monitoring apps. Fully audit-ready logs of user activity are generated.');?></p>
            <p class="section--paragraph__tittle"><?php echo $l->t('Tracking changes to user files');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud Files lets users track file modifications, downloads of shares and changes to comments or tags, providing an overview in the browser, clients or via email notifications and an RSS feed.');?></p>
            <a href="/monitoring" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring and compliance');?></a>
        </div>
    </div>
</section>

<section class="section--clients">
	<a name="clients" id="clients"></a>
	<div class="container">
		<div class="col-md-6 image--floated image--feature revealOnScroll">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png">
		</div>

		<div class="col-md-6 revealOnScroll feature--block">
			<p class="section--paragraph__tittle"><?php echo $l->t('Mobile and desktop clients');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud Files clients for Android, iOS and desktop systems allow users to sync and share files, in a fully secure way through an encrypted connection. The mobile clients feature automatic upload of pictures and videos users take and they can synchronize selected files and folders. The clients can handle multiple accounts, show all activity happening on the server and notify users of new events such as the availability of new shares.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Nextcloud clients support <a class="hyperlink" href="/endtoend">End-to-end Encryption</a> for ultimate security of enterprise data.');?></p>
			<a href="/clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
		</div>
	</div>
</section>

<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
			<div class="col-lg-8">
				<h2 class="revealOnScroll"><?php echo $l->t('Find out what is new in Nextcloud 12');?></h2>
				<form name="whitepaper" method="post" action="../nextcloud12-whitepapersubmit">
                    <p><label for="email"><?php echo $l->t('Read <a class="hyperlink" href="https://nextcloud.com/blog/welcome-to-nextcloud-12/">our announcement blog</a> or download our free Nextcloud 12 datasheet.');?><br>
                    <td colspan="2">
                    <div class="">
                        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    </div>
                    </td>
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the datasheet "></p>
				</form>
			</div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/nc12-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--workflow">
	<a name="workflow" id="workflow"></a>
	<div class="container">
		<div class="col-md-6 revealOnScroll image--floated image--feature">
			<a><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/file-access-control-nw.png" alt="in action"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('Workflow management');?></p>
			<p class="section--paragraph"><?php echo $l->t('With Nextcloud, system administrators can control and direct the flow of data between users on or between servers. Rule-based file tagging and responding to these tags as well as other triggers like physical location, user group, file properties and request type enables administrators to specifically deny access to, convert, delete or retain data following business or legal requirements.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud puts IT in control of user data and keeps it safe.');?></p>
			<a href="/workflow" class="button button--blue button--arrow button--large"><?php echo $l->t('Workflow handling');?></a>
		</div>
	</div>
</section>

<section class="section--storage">
	<a name="storage" id="storage"></a>
	<div class="container">
		<div class="col-md-6 revealOnScroll image--feature">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external-storage-nw.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('External storage, securely encrypted');?></p>
			<p class="section--paragraph"><?php echo $l->t('The external storage feature of Nextcloud gives users access to their data wherever it is. Nextcloud Files can access data stored with a wide variety of popular cloud service providers such as Amazon, Google and Dropbox, but can also access file storage solutions using standard protocols such as NFS, (S)FTP, WebDAV and more.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Encryption App can encrypt data at rest for both local and remote storage, protecting data stored on networks outside of user infrastructure. Keys can be handled by an external key management server or stored locally, on the server.');?></p>
			<a href="/storage" class="button button--blue button--arrow button--large"><?php echo $l->t('External storage');?></a>
		</div>
	</div>
</section>

<section class="section--usermanagement">
	<div class="container">
		<div class="col-md-6 image--floated revealOnScroll image--feature">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('Integrated account management');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud features built-in account management with optional two-factor authentication as well as Single-sign-on support and integration with external user directories like LDAP or IMAP, SMB, FTP and more.');?></p>
			<a href="/usermanagement" class="button button--blue button--arrow button--large"><?php echo $l->t('User management');?></a>
		</div>
	</div>
</section>
<a name="integrations" id="integrations"></a>

<section class="section--outlook">
<div class="container">
    <div class="featurerow">
    <h2 class="text-center"><?php echo $l->t('Nextcloud Outlook Integration');?></h2>
    <p class="section--paragraph text-center"><?php echo $l->t('Automatically upload files to replace large attachments or integrate Calendars and Contacts in Microsoft Outlook');?></p>
        <div class="row">
            <div class="col-md-6">
                <div data-type="youtube" data-video-id="jwhfeJlYBbM"></div>
            </div>
            <div class="col-md-6">
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Secure Sharing Outlook Add-in enables Nextcloud users to easily and securely send files, folders or upload links to others from within Microsoft Outlook. The Add-in can replace attachments, automatically uploading files to Nextcloud and inserting a secure link in the email. It also makes it easy for users to provide others with a secure file upload link.');?></p>
                <p><a href="/outlook" class="button button--arrow button--blue button--large"><?php echo $l->t('Secure Sharing Outlook Add-in');?></a></p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--Collabora">
	<a name="collabora" id="collabora"></a>
	<div class="container">
		<div class="col-md-6 image--floated image--feature revealOnScroll">
			<a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-nw.png"/></a>
		</div>
			<p class="section--paragraph__tittle"><?php echo $l->t('View and edit documents with Collabora');?></p>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online is a powerful LibreOffice-based online office suite with collaborative editing that works in all modern browsers.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online supports editing documents in real-time with multiple other editors, showing high fidelity, WYSIWYG rendering and preserving the layout and formatting of documents.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online supports dozens of document formats including <strong>DOC, DOCX, PPT, PPTX, XLS, XLSX + ODF, Import/View Visio, Publisher</strong> and many more...');?></p>
			<a href="/collaboraonline" class="button button--blue button--arrow button--large"><?php echo $l->t('Collabora Online Office');?></a>
		</div>
	</div>
</section>
<section class="section--others">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="text-center revealOnScroll"><?php echo $l->t('Synergy');?></h2>
            <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('');?></p>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 revealOnScroll">
                <p class="section--paragraph text-center"><?php echo $l->t('Also check out our other self-hosted products offering seamless integration in Nextcloud Files.');?></p>
            </div>
        </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1 revealOnScroll">
			<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png" /></a>
			<div class="row text-center"><p class="section--paragraph__tittle"><?php echo $l->t('Nextcloud Talk');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('secure online meetings, chat and web conferencing');?></p></div>
			<div class="text-center morebuttondiv">
                <a href="/talk" class="button button--blue button--large button--arrow"><?php echo $l->t('Learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
		</div>
		<div class="col-md-5 revealOnScroll">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar-nw.png" class="img-responsive" />
			<div class="row text-center"><p class="section--paragraph__tittle"><?php echo $l->t('Nextcloud Groupware');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Team planning and email made easy');?></p></div>
			<div class="text-center morebuttondiv">
                <a href="/groupware" class="button button--blue button--large button--arrow"><?php echo $l->t('Learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
		</div>
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
        <p class=""><?php echo $l->t('Nextcloud offers an easy-to-use user interface which comes with search functionality, favorites, tags and even more ways to quickly reach the files users need. Full Text search is available using Apache Solr.');?></p>
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
        <p class=""><?php echo $l->t('Built in, easy-to-use theming to set color, login background and logo from Administrator screen.');?></p>
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
	<p class="section--paragraph section--text--center"><?php echo $l->t('Try out Nextcloud server for FREE or get a quote');?></p>
	<div class="row">
        <div class="text-center">
	<a href="/install" class="button button--blue button--arrow button--large"><?php echo $l->t('Try Nextcloud Files');?></a>
	<a href="/quote" class="button button--blue button--arrow button--large"><?php echo $l->t('Contact sales');?></a>
        </div>
	</div>
</div>
