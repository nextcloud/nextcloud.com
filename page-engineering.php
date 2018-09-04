<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/engineering.css" rel="stylesheet">
<script>
require(["require.config"], function() {
	require(["bootstrap", "modules/youtubePlayer"])
});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/engineering.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/engineering.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/engineering.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/engineering.jpg">
</head>
<div class="engineering-background second-menu">
    <div class="container-fluid background">
        <div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Efficient collaboration');?></h1>
				<h2><?php echo $l->t('Nextcloud in engineering, construction and manufacturing');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph text-center"><?php echo $l->t('TBD');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--overview">
<div class="container">
	<div class="row">
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/manual.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Improved productivity');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Modern collaboration technology is needed to stay ahead of the curve. Customers and employees demand data to be available anywhere and efficient sharing workflows.');?></p>
        </div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/permissions.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Ultimate security');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Choosing an on-premises product means you can guarantee your clients that data never leaves your company and remains 100% confidential.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Powerful server and client side encryption options provide ultimate protection for sensitive documents.');?></p>
		</div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/monitoring.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Complete control');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Knowing where data is and who has access is important, especially when working with third parties. Nextcloud combines advanced data access controls with powerful monitoring and logging capabilities to ensure compliance and auditability.');?></p>
		</div>
    </div>
</div>
</section>

<section class="section--customers">
<div class="container">
    <h2 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Some of our customers');?></h2>
    <div class="row">
		<div class="col-sm-6 col-lg-3 customer">
            <div class="customer-logo">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/siemens.png" />
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 customer">
            <div class="customer-logo">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/mmecmannesmann.png" />
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 customer">
            <div class="customer-logo">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/aldente.png" />
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 customer">
            <div class="customer-logo">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/zenuity.png" />
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6 revealOnScroll">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/zenuity.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Zenuity - reshaping the industry of autonomous driving');?></p>
                <p class="section--paragraph"><blockquote><?php echo $l->t('Zenuity deployed Nextcloud for the purpose of safe and effective collaboration with our partner companies. We selected the product after comparing against several other alternatives. Particular advantages are the ability to run the service on premises and the good support for a wide range of client operating systems.');?></blockquote></p>
            </div>
        </div>
    </div>
</section>

<section class="section--explanation">
<div class="container-fluid banner">
    <div class="container">
        <div class="col-md-6">
            <h2 class="revealOnScroll"><?php echo $l->t('Advantages');?></h2>
            <div class="row">
                <div class="col-md-2 featureblock">
                    <i class="fa-commenting-o fa"></i>
                </div>
                <div class="col-md-10 featureblock">
                    <p class="section--paragraph__tittle"><?php echo $l->t('Client communication');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Benefit from modern, fast and secure data exchange while keeping customer intelligence in-house for analysis and monetization.');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 featureblock">
                    <i class="fa-tablet fa"></i>
                </div>
                <div class="col-md-10 featureblock">
                    <p class="section--paragraph__tittle"><?php echo $l->t('Decentralized collaboration');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Tokio, London, New York - enable employees to access data and work together across devices without IT ever losing sight.');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 featureblock">
                    <i class="fa-paragraph fa"></i>
                </div>
                <div class="col-md-10 featureblock">
                    <p class="section--paragraph__tittle"><?php echo $l->t('Protecting investment');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Leverage deep integration in existing infrastructure, building on existing hardware, software and processes to store, secure and track data.');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 featureblock">
                    <i class="fa-server fa"></i>
                </div>
                <div class="col-md-10 featureblock">
                    <p class="section--paragraph__tittle"><?php echo $l->t('Compliant data handling');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Enable auditing of events and processes at any time, to deliver the standardized and transparent reporting that is required in the financial sector.');?></p>
                </div>
            </div>
        </div>
        <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/legal2.jpg">
        <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/legal2-small.jpg">
    </div>
</div>
</section>

<section class="section--on-premise">
<div class="container">
	<h2 class="section--heading-1 revealOnScroll text-center"><?php echo $l->t('Why on-premises?');?></h2>
	<div class="row">
		<div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('You need 100% certainty');?></p>
			<p class="section--paragraph"><?php echo $l->t('Email or public cloud solutions do not provide much security for sensitive data. Encryption is complicated and cumbersome to use, reducing the real benefits due to employees working around them or making mistakes.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Keeping data on your own infrastructure means you stay in control. Only then can you show your clients exactly where their sensitive documents are. Regulators can be certain that non-compliance with proper process is minimized.');?></p>
			<a href="https://nextcloud.com/blog/the-issue-with-public-cloud/" class="button button--blue button--arrow button--large"><?php echo $l->t('Read our blog for more');?></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Public clouds are not a safe solution');?></p>
			<p class="section--paragraph"><?php echo $l->t('Most consumer-grade solutions like Dropbox or Office 365 were not designed with privacy regulations and security concerns in mind, mixing data from consumers and businesses, spread out in data centers across the globe.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Rather than trying to work around their limitations, Nextcloud Files provides a security-first solution which puts you in complete control over the location and access policies of data with a private cloud solution.');?></p>
        </div>
	</div>
</div>
</section>

<div class="separator"></div>

<section class="section--modern">
	<div class="container">
        <div class="row">
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Features');?></p>
            <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Everything you need');?></h3>
            <div class="modern--ilustration"></div>
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud offers everything you need for efficient, secure document management.');?></p>
        </div>
         <div class="row feature-row">
            <div class="col-md-6 revealOnScroll">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/mobileDesktop.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Universal document access');?></p>
                <p class="section--paragraph"><?php echo $l->t('Be confident that wherever you are, you have access to the documents you need in a moments notice, 100% secure. Tablets, mobile devices, laptops and desktops all have access to the same files at a moments notice thanks to the first-class Nextcloud clients.');?></p>
                <a href="<?php echo home_url('clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Sync clients');?></a>
            </div>
        </div>
        <div class="row feature-row">
            <div class="col-md-6 revealOnScroll image--floated">
                <div data-type="youtube" data-video-id="AhFnbB-a7ik"></div>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Secure document sharing');?></p>
                <p class="section--paragraph"><?php echo $l->t('Provide your employees, clients and partners with documents for review or joint editing. Thanks to dedicated user and group management, everyone only sees what they really need to see.');?></p>
                <a href="<?php echo home_url('sharing') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('More about sharing');?></a>
            </div>
        </div>
        <div class="row feature-row">
            <div class="col-md-6 revealOnScroll">
                <div data-type="youtube" data-video-id="jwhfeJlYBbM"></div>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Integrated in email');?></p>
                <p class="section--paragraph revealOnScroll"><?php echo $l->t('To quickly and securely get data to your clients or receive documents from them, use the Nextcloud Secure Sharing Outlook Add-in. This avoids insecure and big attachments and instead provides a secure, trust-worthy file exchange that does not direct your clients to a third party but runs on your server and your domain.');?></p>
                <a href="<?php echo home_url('outlook') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Email integration');?></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/ocr-nw.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('OCR and full-text search');?></p>
                <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud can easily be extended with powerful document management features like OCR and full-text search, enabling quick search in your documents.');?></p>
                <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud can be connected to any document scanner (Xerox, Canon, HP, etc.) that supports WebDAV as well as mobile scanning and OCR apps, such as ScanBot.');?></p>
                <p class="section--paragraph revealOnScroll"><?php echo $l->t('Extensive, open-standards based API\'s result in a low barrier to extension and integration in existing tools and workflows like RA Micro and ReNoStar.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--getstarted">
    <div class="container-fluid quote">
        <h2 class="text-center revealOnScroll"><?php echo $l->t('Legal firms provide trust');?></h2>
        <p class="section--paragraph section--text--center revealOnScroll"><?php echo $l->t('Notaries, law firms and tax advisers are entrusted with the most confidential knowledge of their clients. Breaking that trust, for example due to a data-leak, is a career-ending mistake.');?></p>
        <p class="section--paragraph section--text--center revealOnScroll"><?php echo $l->t('Nextcloud enables you to focus on your work, taking care that your data stays private and completely under your control!');?></p>
        <div class="container">
            <div class="row">
                <div class="col-md-12 featureblock revealOnScroll">
                    <div class="row text-center">
                        <a href="<?php echo home_url('install') ?>" class="button button--arrow button--large"><?php echo $l->t('Try Nextcloud Files');?></a>
                        <a href="<?php echo home_url('buy') ?>" class="button button--arrow button--large"><?php echo $l->t('Contact sales');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section--secure">
<div class="container">
    <div class="row">
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Data protection');?></p>
        <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Secure your data');?></h3>
        <div class="distribution--ilustration"></div>
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('While data needs to be at legal professionals\' finger tips at all times, the IT department must be able to ensure policies around securing and sharing sensitive documents are respected.');?></p>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 revealOnScroll feature--block">
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Legal documents are extremely sensitive. Clients care deeply about their privacy and keeping their data secure while regulators give heavy penalties for data leaks. Nextcloud offers you the tools to keep data compliant and safe.');?></p>
            <p class="section--paragraph revealOnScroll"><ul>
            <li><strong><?php echo $l->t('Legal compliance');?></strong><br/>
            <?php echo $l->t('Federal data protection and GDPR-compliant, protecting data sovereignty, keep the server location in your country.');?></li>
            <li><strong><?php echo $l->t('data security');?></strong><br />
            <?php echo $l->t('Multiple levels of encryption (HTTPS/SSL/TLS, AES-256 or stronger, server-side and end-to-end encryption) ensure the highest level of data protection from hacking.');?></li>
            <li><strong><?php echo $l->t('Client- and case related authorization');?></strong><br/>
            <?php echo $l->t('A dedicated user and group management as well as a rights system allows the assignment of access rights according to your requirements.');?></li>
            </ul>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud is a popular self-hosted solution in businesses dealing with legal documents for its ability to strictly control access to data and industry-leading security capabilities.');?></p>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/file-access-control-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('File Access Control');?></p>
            <p class="section--paragraph"><?php echo $l->t('The File Access Control feature of Nextcloud enables IT to codify legal and policy requirements, blocking unauthorized users uploading or downloading data following defined rules. Criteria include IP address ranges, group membership, file type and size, time and more. Data retention can be controlled as well, enabling administrators to limit the lifetime of certain files.');?></p>
            <a href="/workflow" class="button button--blue button--arrow button--large"><?php echo $l->t('File Access Control');?></a>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6 revealOnScroll image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Monitoring and auditing logs');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers built-in powerful monitoring capabilities, enabling organizations to ensure smooth performance. Systems can be monitored using the web interface or through monitoring and systems intelligence tools like OpenNMS, Splunk, Nagios or others. A full auditing system logs all user actions, enabling fully compliant usage of file sync and share.');?></p>
            <a href="/monitoring" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring and auditing');?></a>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6 revealOnScroll">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-server-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-server-nw.png" alt="in action" /></a>
        </div>
        <div class="col-md-6">
            <p class="section--paragraph__tittle revealOnScroll"><?php echo $l->t('Encryption');?></p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Nextcloud uses industry-standard SSL/TLS encryption for data in transfer. Data at rest in storage can be encrypted using a default military grade AES-256 encryption with server-based or custom key management. Optionally and on a per-folder base data can be <a class="hyperlink" href="/endtoend">end-to-end encrypted</a> on the client with the server assisting in sharing and key management using a Zero-Knowledge model.');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Seamless integration and ease of use with key features like offline recovery keys, auditing and HSM support make Nextcloud Encryption capabilities leading in the industry.');?>
            </p>
        </div>
    </div>
    <div class="row ncc--container">
            <blockquote class="ncc--paragraph">Nextcloud understands the necessity to provide core principle baseline security requirements, as such Nextcloud 11 is built on these security principles to ultimately deliver a secure solution to their customers</blockquote>
        <div class="ncc--brand">
            <div class="ncc--brand--logo"></div>
            <p class="ncc--brand--text">
                <?php echo $l->t('NCC Group');?>
            </p>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-10 col-md-offset-1 revealOnScroll feature--block">
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud offers first-in-class, third-party verified security backed by a USD 5000 Security Bug Bounty program protecting against unauthorized access.');?></p>
            <a href="/secure" class="button button--blue button--arrow button--large"><?php echo $l->t('Security in Nextcloud');?></a>
        </div>
    </div>
</div>
</section>

<div class="separator"></div>

<section class="section--features">
<div class="container-widest">
	<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Key features in Nextcloud');?></h1>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
            <i class="fa-server fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Fully self-hosted, meaning all data is under your control. Nextcloud can leverage your existing storage, security and privacy policies. There is no vendor lock-in or tracking by us of any kind!');?></p>
        </div>
        <div class="col-md-1 featureblock">
            <i class="fa-tags fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Nextcloud offers an easy to use user interface which comes with powerful search functionality, trash and versioning, favorites, tags and more ways to quickly reach the files users need.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-mobile fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Desktop and mobile clients for Windows / macOS / Linux, Android and iOS complement the web interface, integrating in the file system. Nextcloud can also be reached through WebDAV.');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-1 featureblock">
        <i class="fa-puzzle-piece fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Authentication through LDAP / Active Directory, Kerberos and Shibboleth / SAML 2.0 and more and external storage supporting NFS, Object Storage and other protocols ensure easy integration.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-shield fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('First-class security policies, extensive security hardening features and File Access Control to ensure legal and privacy regulations are enforced at all times. Nextcloud comes with integrated logging, two-factor authentication and NIST compliant password policy control functionalities.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-list fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Nextcloud offers fine-grained control from mobile, desktop or the Web over data access and sharing capabilities. Advanced quota management with configurable accounting of external storage and configurable file retention policies.');?></p>
        </div>
    </div>
    <div class="row revealOnScroll">
        <div class="col-md-8 col-md-offset-2 featureblock">
        <p class="text-center"><?php echo $l->t('<a class="hyperlink" href="/buy">First class enterprise support with custom integration and security consulting available</a>.');?></p>
        </div>
    </div>
</div>
</section>
