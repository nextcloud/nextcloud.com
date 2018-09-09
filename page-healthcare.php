<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/healthcare.css" rel="stylesheet">
<script>
require(["require.config"], function() {
	require(["pages/education", "modules/submenu", "bootstrap"])
});
</script>
<!--<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
<script type="text/javascript">
    var CaptchaCallback = function() {
        grecaptcha.render('RecaptchaField1', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField2', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
    };
</script>-->
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/dicom.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/dicom.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/dicom.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/dicom.jpg">
</head>
<div class="healthcare-background second-menu">
    <div class="container-fluid background">
        <div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud in Healthcare');?></h1>
				<h2><?php echo $l->t('Secure, reliable and well integrated');?></p>
			</div>
		</div>
	</div>
    <div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
            <a href="#convenient"><?php echo $l->t('convenient');?></a>
<!-- 			<a href="#secure"><?php echo $l->t('secure');?></a> -->
			<a href="#integrated"><?php echo $l->t('integrated');?></a>
			<a href="#HIPAA"><?php echo $l->t('HIPAA');?></a>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph text-center"><?php echo $l->t('Patient safety is the highest priority at health care and life science institutions. Nextcloud makes patient information available to healthcare professionals when they need it through an easy-to-use interface with the highest degree of reliability, security and privacy at reasonable cost.');?></p>
		</div>
	</div>
</div>
</section>


<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
			<div class="col-lg-8 col-lg-offset-2">
                <h2 class="revealOnScroll"><?php echo $l->t('Analysis: data in healthcare');?></h2>
                <p class="revealOnScroll"><?php echo $l->t('We recommend to keep sensitive data on your own infrastructure instead of in a public cloud as the easiest and most cost-effective way of ensuring compliance.<br>Download our free healthcare security analysis.');?></p>

                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">

                    <p><label for="email">
                    <td colspan="2" style="text-align:center">
                    <div class="">
                        <div id="RecaptchaField1"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="2">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <input class="button button--large" type="submit" value=" Get the Analysis ">


                    </p>
                </form>
            </div>
        </div>
<!--         <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ldap-thumbnail-banner.png"/> -->
	</div>
</section>

<section class="claim">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 claim__container">
            <p class="claim__paragraph">
                <?php echo $l->t('In the next 5 to 10 years, we can expect far more security issues, which will require bigger budgets, more staff and teaching best practices.');?>
            </p>
            <div class="claim__brand">
                <div class="claim__brand__logo"></div>
                <p class="claim__brand__text">
                    - Cédric Cartau, Chief Information Security Officer at <a class="hyperlink" href="https://www.digitalforallnow.com/en/what-are-the-implications-of-healthcare-data-security-interview-with-cedric-cartau/">Nantes University Hospital</a>
                </p>
            </div>
        </div>
    </div>
</section>



<!--<section class="section--customers">
<div class="container">
    <h2 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Some of our customers');?></h2>
    <div class="row">
		<div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/tuberlin.png" /></a>
            </div>
        </div>
		<div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/3000-users-at-ucloud4schools-migrated-to-nextcloud-11-by-regio-it/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/regioit.png" /></a>
            </div>
        </div>
        <div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/the-danish-research-and-education-network-moves-from-owncloud-to-nextcloud/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/deic.png" /></a>
            </div>
        </div>
        <div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="http://my.engineering.queensu.ca/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/queens.png" /></a>
            </div>
        </div>
    </div>
</div>
</section>-->

<a name="convenient"></a>
<section class="section--convenient">
	<div class="container">
        <div class="row">
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Easy access to data');?></p>
            <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Putting the user first');?></h3>
            <div class="easy--ilustration"></div>
            <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Protocols, status updates and test results can be stored safely and shared easily among the professionals who need access.');?></p>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 revealOnScroll feature--block">
                <p class="section--paragraph revealOnScroll"><?php echo $l->t('With the growing complexity of the medical profession comes increasing amounts of patient data. Having patient information available in a moments notice can save lives. Nextcloud is designed for ease of use, fitting familiar interfaces and lowering the barrier to sharing and data access.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/web-ui-nw.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Easy access');?></p>
                <p class="section--paragraph"><?php echo $l->t('A first requirement for any secure solution to share data is that it does not force complexity on the user. Complexity leads to mistakes and mistakes can cost lives!');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud makes accessing and sharing data a breeze, providing users a comfortable, familiar workspace.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 revealOnScroll image--floated">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/mobileDesktop.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Multi-platform productivity');?></p>
                <p class="section--paragraph"><?php echo $l->t('Data needs to be available where the patient is. Tablets, mobile devices, laptops and desktops all have access to the same files at a moments notice thanks to the first-class Nextcloud clients.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Doctors and nurses can tag and comment on files for easy collaboration, roll back files to earlier versions or find deleted files in the trash. Real time collaborative editing and secure audio/video calls and chat complement the array of features aimed at enhancing productivity.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--explanation benefits">
<div class="container-fluid banner">
    <div class="container">
        <div class="col-md-6">
            <h2 class="revealOnScroll"><?php echo $l->t('What are HIPAA and HITECH');?></h1>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('The Health Insurance Portability and Accountability Act is a US law designed to provide privacy standards to protect patients\' medical records and other health information provided to health plans, doctors, hospitals and other health care providers.');?></p>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('HIPAA mandates industry-wide standards for protection and confidentiality of protected health information (PHI), both technical and in terms of processes.');?></p>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('the HITECH Act widens the scope of privacy and security protections available under HIPAA; it increases the potential legal liability for non-compliance; and it provides for more enforcement.');?></p>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Learn more:');?>
            <ul>
            <li><a class="hyperlink" href="https://www.hhs.gov/hipaa/for-professionals/privacy/laws-regulations/combined-regulation-text/index.html">HIPAA combined regulation text</a></li>
            <li><a class="hyperlink" href="https://www.hhs.gov/hipaa/for-professionals/faq">HIPAA FAQ</a></li>
            <li><a class="hyperlink" href="https://www.hhs.gov/hipaa/for-professionals/privacy/index.html">HIPAA privacy rules</a></li>
            <li><a class="hyperlink" href="https://www.hhs.gov/hipaa/for-professionals/security/laws-regulations/index.html">HIPAA security regulations</a></li>
            <li><a class="hyperlink" href="https://www.hhs.gov/sites/default/files/ocr/privacy/hipaa/administrative/securityrule/techsafeguards.pdf">HIPAA security technical safeguards requirements</a></li>
            </ul></p>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud fits seamlessly in a HIPAA compliant infrastructure. <a class="hyperlink" href="#HIPAA">More details below</a>.');?></p>
        </div>
        <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/medicaldevices.jpeg">
        <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/medicaldevices-small.jpeg">
    </div>
</div>
</section>

<a name="secure"></a>
<section class="section--secure">
<div class="container">
    <div class="row">
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Data protection');?></p>
        <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Secure your data');?></h3>
        <div class="distribution--ilustration"></div>
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('While data needs to be at medical professionals\' finger tips at all times, the IT department must be able to ensure policies around Protected Health Information are respected.');?></p>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 revealOnScroll feature--block">
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Healthcare data is at the same time extremely sensitive and needs to be immediately accessible. Regulators are aware and privacy and security requirements are extremely strict with HIPAA and HITECH rules in the US matched in many other countries across the globe.');?></p>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud is a popular self-hosted solution in healthcare for its ability to strictly control access to data and industry-leading security capabilities.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 revealOnScroll">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/file-access-control-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('File Access Control');?></p>
            <p class="section--paragraph"><?php echo $l->t('The File Access Control feature of Nextcloud enables IT to codify legal and policy requirements, blocking unauthorized users uploading or downloading data following defined rules. Criteria include IP address ranges, group membership, file type and size, time and more. Data retention can be controlled as well, enabling administrators to limit the lifetime of certain files.');?></p>
            <a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('File Access Control');?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 revealOnScroll image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 revealOnScroll feature--block">
            <p class="section--paragraph__tittle"><?php echo $l->t('Monitoring and auditing logs');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers built-in powerful monitoring capabilities, enabling institutions to ensure smooth performance. Systems can be monitored using the web interface or through monitoring and systems intelligence tools like OpenNMS, Splunk, Nagios or others. A full auditing system logs all user actions, enabling fully compliant usage of file sync and share.');?></p>
            <a href="<?php echo home_url('monitoring') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring and auditing');?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 revealOnScroll">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-server-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-server-nw.png" alt="in action" /></a>
        </div>
        <div class="col-md-6">
            <p class="section--paragraph__tittle revealOnScroll"><?php echo $l->t('Encryption');?></p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Nextcloud uses industry-standard SSL/TLS encryption for data in transfer. Data at rest in storage can be encrypted using a default military grade AES-256 encryption with server-based or custom key management. Optionally and on a per-folder base data can be');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('end-to-end encrypted</a> on the client with the server assisting in sharing and key management using a Zero-Knowledge model.');?>
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
    <div class="row">
        <div class="col-md-10 col-md-offset-1 revealOnScroll feature--block">
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud offers first-in-class, third-party verified security backed by a USD 5000 Security Bug Bounty program protecting against unauthorized access.');?></p>
            <a href="<?php echo home_url('secure') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('security in Nextcloud');?></a>
        </div>
    </div>
</div>
</section>


<section class="section--dicom">
<div class="container-fluid banner">
    <div class="container">
        <div class="col-md-6">
            <h2 class="revealOnScroll"><?php echo $l->t('A DICOM viewer in Nextcloud');?></h1>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Digital Imaging and Communications in Medicine (DICOM)
            is the international standard to handle medical images, ubiquitous worldwide in radiological imaging devices and systems.');?></p>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('A third party developed a DICOM viewer for Nextcloud, enabling medical professionals to view and modify DICOM files. It parses and displays patient information, enabling viewing of images with informational overlays including Computed Radiography (CR), Computed Tomography (CT), Digital Radiography (DX), Mammography (MG), and Magnetic Resonance (MR).');?></p>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('The DICOM viewer is a powerful example of the capabilities of Nextcloud and how it can be extended and integrated to support the workflow of professionals.');?></p>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Learn more:');?>
            <ul>
            <li><a class="hyperlink" href="https://nextcloud.com/blog/digital-imaging-for-medicine-in-nextcloud/"><?php echo $l->t('Introducing the Nextcloud DICOM viewer');?></a></li>
            <li><a class="hyperlink" href="https://apps.nextcloud.com/apps/dicomviewer"><?php echo $l->t('The DICOM viewer in our App Store');?></a></li>
            </ul></p>
        </div>
        <div class="dicom-img"></div>
    </div>
</div>
</section>



<a name="integrated"></a>
<section class="section--integrated">
<div class="container">
    <div class="row">
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Easy integration');?></p>
        <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Efficient deployment and management');?></h3>
        <div class="efficiency--ilustration"></div>
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Complexity is the enemy of security and Nextcloud is designed to offer quick and easy integration in existing infrastructure, leaving policies and procedures in place. Its powerful LDAP and storage integration seamlessly fits with existing user directories, Windows Network Drive, NFS and Sharepoint storage solutions.');?></p>
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('The result: a quick implementation at low cost, and easy maintenance making a self-hosted Nextcloud the cloud compliance solution with the lowest TCO.');?></p>
    </div>
</div>
<div class="container">
    <div class="row revealOnScroll ">
        <div class="col-md-10 col-md-offset-1 feature--block">
            <h3 class="section--heading-2 text-center"><?php echo $l->t('Deep integration');?></h3>
        </div>
    </div>
    <div class="row revealOnScroll ">
        <div class="col-md-6">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/kerberos.svg");?>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud integrates in hospital infrastructure with support for SAML and Shibboleth, LDAP, Kerberos, Oauth, and other often used authentication mechanisms and runs on all enterprise Linux systems offering support options to match their life cycle.');?></p>
        </div>
        <div class="col-md-6">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/storage.svg");?>
            <p class="section--paragraph"><?php echo $l->t('Data storage can be one or multiple NFS, Object Storage, Samba or a variety of other powerful storage mechanisms. This way Nextcloud provides seamless access to data on existing storage mechanisms, respecting existing access control policies and transparently handling changes on the underlying storage layer.');?></p>
        </div>
    </div>
    <div class="row whitepaper text-center revealOnScroll">
        <div class="col-md-offset-4 col-md-4 wp-center">
            <p>
            <div class="row "><img class="responsive text-center" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/architecture-thumbnail-banner.png"/></div>
            <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                <p><label for="email"><?php echo $l->t('Download our Architecture whitepaper');?><br>
                <input class="mail text-center" type="text" name="email" maxlength="80" size="30" placeholder="Enter your email"></label></p>
                <td colspan="2" style="">
                    <div style="margin-left: auto; width: 304px; height: 78px; margin-right: auto; text-align: center;">
                        <div id="RecaptchaField2"></div>
                    </div>
                </td>
                <input type="hidden" name="segmentId" value="1">
                <input class="button button--blue button--large" type="submit" value=" Get the whitepaper ">
            </form>
            </p>
        </div>
    </div>
</div>
</section>


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
        <p class=""><?php echo $l->t('Desktop and mobile clients for Windows/MacOS/Linux, Android and iOS complement the web interface, integrating in the file system. Nextcloud can also be reached through WebDAV.');?></p>
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
        <p class="text-center"><a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('First class enterprise support with custom integration and security consulting available.');?></a></p>
        </div>
    </div>
</div>
</section>

<div class="separator"></div>
<a name="HIPAA"></a>
<section class="section--hipaa">
<div class="container">
    <div class="row">
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud and HIPAA');?></p>
        <h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('HIPAA COMPLIANCE STATEMENT');?></h3>
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('Updated August 1, 2017');?></p>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 revealOnScroll">
            <p class="section--paragraph__tittle"><?php echo $l->t('Introduction');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud meets all Technical Safeguards requirements, supporting full compliance with the Health Insurance Portability and Accountability Act (HIPAA) of 1996. Nextcloud GmbH is committed to ensure its software keeps PHI (Protected Health Information) private and secure. We have implemented features, policies and procedures designed to ensure compliance with Federal and State information security laws, regulations, and rules, and monitor ongoing compliance efforts.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud supports:
            <ul>
            <li>Advanced Access Control capabilities</li>
            <li>Automatic expiration of passwords</li>
            <li>Account lockout upon multiple failed log-in attempts</li>
            <li>Automatic virus scans</li>
            <li>Secure data backups</li>
            <li>Audit-ready logging of all user actions</li>
            <li>Data-at-rest, in-transit and full end-to-end encryption</li>
            <li>Email verification and two-factor authentication</li>
            </ul>');?></p>
            <p class="section--paragraph"><?php echo $l->t('The self-hosted nature of Nextcloud ensures Nextcloud usage does not change existing compliance of infrastructure, provided features and capabilities are employed as required by HIPAA and other legislation. Nextcloud can advise in implementing a HIPAA compliant setup.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud services are designed not to require that our employees gain access to any customer data. In case this is required for specific support cases, confidentiality agreements are signed with all employees and extensive security processes are in place to log, investigate and report any breaches.');?></p>
            <p class="section--paragraph"><?php echo $l->t('We understand that keeping your client’s information safe is of the utmost importance and Nextcloud GmbH will continue to provide its software and services in accordance with the relevant requirements of all state and federal laws and regulations, including, as applicable, HIPAA.');?></p>
            <p class="section--paragraph"><?php echo $l->t('For additional information regarding Nextcloud’s privacy practices as they relate to this website, please see our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('Privacy Statement</a>.');?></p>
        </div>
    </div>
        <div class="row">
        <div class="col-md-10 col-md-offset-1 revealOnScroll">
            <p class="section--paragraph__tittle"><?php echo $l->t('Questions');?></p>
            <p class="section--paragraph"><?php echo $l->t('Questions regarding Nextcloud’s HIPAA policies or compliance may be directed to:');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud GmbH<br>
            Attention: HIPAA Privacy Officer<br>
            Hauptmannsreute 44A<br>
            70192 Stuttgart Germany<br>
            info@nextcloud.com');?></p>
        </div>
    </div>
</div>
</section>
