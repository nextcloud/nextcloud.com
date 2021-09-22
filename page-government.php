<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/government.css?v=3" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
require(["require.config"], function() {
	require(["bootstrap"])
});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/government.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/government.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/government.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/government.jpg">


</head>
<div class="healthcare-background second-menu">
    <div class="container-fluid background">
        <div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud in Government');?></h1>
				<h2><?php echo $l->t('Reclaiming Digital Sovereignty');?></p>
			</div>
		</div>
	</div>
</div>

<section class="claim">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 claim__container">
            <p class="claim__paragraph">
                <?php echo $l->t('The French government cares deeply about the safety of the data of their citizens and employees. With the on-premises content collaboration platform Nextcloud we have opted for a secure, easy to use solution from the leading European vendor.');?>
            </p>
            <div class="claim__brand">
                <div class="claim__brand__logo"></div>
                <p class="claim__brand__text">
                    - Thierry Markwitz, Sous Directeur at Infrastructures au Ministère de l’Interieur (French Ministry of Interior)
                </p>
                <a class="button button--blue button--small button--arrow" href="https://nextcloud.com/blog/eu-governments-choose-independence-from-us-cloud-providers-with-nextcloud/"><?php echo $l->t('Learn more');?></a>
            </div>
        </div>
    </div>
</section>


<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph text-center"><?php echo $l->t('Governments are moving away from foreign cloud providers amid rising concerns about digital sovereignty. Nextcloud has emerged as the most deployed self-hosted private cloud solution in government.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--overview">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/mobile.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Modern Communication');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Communication via paper only is out of date. Citizens expect from their government a modern, digital communication exchange, secure and discreet. In the office, at home and on the road.');?></p>
		</div>
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/permissions.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Ultimate security');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Choosing an on-premises product means you can guarantee your citizens that data never leaves your organization and remains 100% confidential.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Powerful server and client side encryption options provide ultimate protection for sensitive documents.');?></p>
		</div>
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/storage.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Independence');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Open Source means full control over your infrastructure. One of worlds most used and best understood software licenses protects your investment, guaranteeing complete vendor independence and zero risk of compliance issues.');?></p>
		</div>
	</div>
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="text-center"><?php echo $l->t('Reduce risk, improve citizen communication and reduce operational expenses with the leading content collaboration platform.');?></p>
            <p class="text-center"><?php echo $l->t('Contact us now to learn how we can help you!');?></p>
            <div class="text-center morebuttondiv">
                <a href="<?php echo home_url('buy') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/itzbund.png" alt="in action"/>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('German Federal Government, ITZBund');?></h3>
                <p class="section--paragraph"><blockquote><?php echo $l->t('Nextcloud provides users with a modern, easy-to-use and productivity-oriented solution that enables efficient online and mobile collaboration and communication. ITZBund now provides an on-premises open source solution from a German provider to keep control over their own data.');?></blockquote></p>
                <a class="button button--blue button--arrow" href="https://nextcloud.com/blog/german-federal-administration-relies-on-nextcloud-as-a-secure-file-exchange-solution/">Learn more</a>
            </div>
        </div>
    </div>
</section>

<section class="section--customers">
<div class="container-widest">
    <h1 class="section--heading-1 text-center"><?php echo $l->t('Some of our customers');?></h1>
    <div class="row">
		<div class="col-sm-4 col-lg-2 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/german-federal-administration-relies-on-nextcloud-as-a-secure-file-exchange-solution/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/itzbund.png" /></a>
            </div>
        </div>
		<div class="col-sm-4 col-lg-2 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/eu-governments-choose-independence-from-us-cloud-providers-with-nextcloud/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/FMI.png" /></a>
            </div>
        </div>
        <div class="col-sm-4 col-lg-2 customer">
            <div class="customer-logo">
                <a href="https://www.nationaalarchief.nl"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/national_archief.svg" /></a>
            </div>
        </div>
        <div class="col-sm-4 col-lg-2 customer">
            <div class="customer-logo">
                <a href="http://www.ville-geneve.ch/welcome-geneva/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/Geneva_city_insignia.gif" /></a>
            </div>
        </div>
        <div class="col-sm-4 col-lg-2 customer">
            <div class="customer-logo">
                <a href="https://www.mfa.gov.af/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/mfa.png" /></a>
            </div>
        </div>
        <div class="col-sm-4 col-lg-2 customer">
            <div class="customer-logo">
                <a href="https://www.paris.fr/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/paris.png" /></a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/mfa.png" alt="in action"/>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Ministry of Foreign Affairs, Afghanistan');?></h3>
                <p class="section--paragraph"><blockquote><?php echo $l->t('As a government organization, protecting sensitive data is important to us. With Nextcloud we have a self-hosted, well-supported solution that offers great team collaboration while keeping data secure and on-premises');?></blockquote></p>
            </div>
        </div>
    </div>
</section>

<section class="section--whitepaper quote">
	<div class="container ">
        <div class="row">
			<div class="col-lg-8">
                <h2 class=""><?php echo $l->t('Efficient file exchange and collaboration in the Newsroom.');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                    <p><label for="email"><?php echo $l->t('Download our free case study: <br /> Germany’s public radio and television deploys Nextcloud');?><br>
                    <input type="hidden" name="segmentId" value="93">
                    <input type="hidden" name="firstname" value="">
                    <input type="hidden" name="requesttime" value="<?php echo time(); ?>">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Subscribe me to the monthly Nextcloud newsletter');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--large" type="submit" value=" Get the case study "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ivz-thumbnail-banner.png"/>
	</div>
</section>

<?php require get_template_directory().'/onpremises.php';?>

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6">
                <a><img class="img-responsive" src="https://nextcloud.com/media/Bern_luftaufnahme.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Capital of Switzerland provides Nextcloud to 35.000 students and teachers');?></h3>
                <blockquote><?php echo $l->t('the largest open source order ever in Switzerland!');?></blockquote>
                <p class="alignright" style="margin-top: -40px"><?php echo $l->t('-- Matthias Stürmer, EPP city councillor');?></p>
                <a href="https://nextcloud.com/blog/next-big-open-source-win-capital-of-switzerland-moves-schools-to-nextcloud//" class="button button--blue button--arrow button--large"><?php echo $l->t('Announcement blog');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6">
                <blockquote><?php echo $l->t('The need for Sweden as a country to have control over its information and the consequences of not having access to the information should be considered from the perspective of national security and sovereignty. In an international crisis or conflict, the willingness and ability of other countries to access, manipulate or deny access to information handled by a service provider should be considered.');?></blockquote>
                <p class="alignright" style="margin-top: -40px"><?php echo $l->t('-- Swedish National Procurement Services');?></p>
                <p class="section--paragraph"><?php echo $l->t('In a report from mid 2019, the Dutch government came to a similar conclusion with regards to data protection, recommending its own government departments against using');?> <a href="https://www.rijksoverheid.nl/documenten/rapporten/2019/06/11/data-protection-impact-assessment-windows-10-enterprise" class="hyperlink">Microsoft Office 365.</a></p>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Sweden deploying Nextcloud');?></h3>
                <blockquote>The uncertainty about how the public sector may use cloud services creates problems</blockquote>
                <p>Said Försäkringskassans cto, Mikael Norberg</p>
                <p class="section--paragraph"><?php echo $l->t('Försäkringskassan is working on developing user functionality for such things as file storing internal messaging services, end-to-end encrypted and self hosted.');?></p>
                <a href="https://computersweden.idg.se/2.2683/1.719614/statens-moln-forsakringskassan" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more (Swedish)');?></a>
            </div>
        </div>
    </div>
</section>

<a id="convenient"></a>
<section class="section--convenient">
	<div class="container">
        <div class="row">
            <h3 class="section--intro text-center"><?php echo $l->t('Easy access to data');?></h3>
            <h1 class="section--heading-1 text-center"><?php echo $l->t('Putting the user first');?></h1>
            <div class="easy--ilustration"></div>
            <h3 class="section--intro text-center"><?php echo $l->t('Internal reports, citizen data and politically sensitive documents can be stored safely and shared easily among the professionals who need access.');?></h3>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 feature--block">
                <p class="section--paragraph"><?php echo $l->t('With the growing complexity of governance comes increasing amounts of data. Nextcloud is designed for ease of use, fitting familiar interfaces and lowering the barrier to sharing and data access.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div data-type="youtube" data-video-id="Nr7cGN6ZJM0"></div>
                <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/555703705?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Text and Talk video"></iframe></div>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Easy access');?></h3>
                <p class="section--paragraph"><?php echo $l->t('A first requirement for any secure solution to share data is that it does not force complexity on the user. Complexity leads to mistakes and mistakes can lead to data leaks!');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud makes accessing and sharing data a breeze, providing users a comfortable, familiar workspace.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 image--floated">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/mobileDesktop.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Multi-platform productivity');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Data needs to be available where the employees are. Tablets, mobile devices, laptops and desktops all have access to the same files at a moments notice thanks to the first-class Nextcloud clients.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Employees can tag and comment on files for easy collaboration, roll back files to earlier versions or find deleted files in the trash. Real time collaborative editing and secure audio/video calls and chat complement the array of features aimed at enhancing productivity.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center"><?php echo $l->t('Reduce risk, improve communication and cut operational expenses with the leading content collaboration platform.');?></p>
                <p class="text-center"><?php echo $l->t('Contact us now to learn how we can help you!');?></p>
                <div class="text-center morebuttondiv">
                    <a href="<?php echo home_url('buy') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6">
            <div data-type="youtube" data-video-id="_JYU8b3gXFw"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/_JYU8b3gXFw" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('How Nextcloud saved our work from Covid-19');?></h3>
                <p class="section--paragraph"><?php echo $l->t('A report from the Italian city government Comune di Macerata about how Nextcloud saved their work during the COVID-19 crisis, covering what feature and setup was used.');?></p>
                <a class="button button--blue button--arrow" href="https://www.youtube.com/watch?v=_JYU8b3gXFw">View on YouTube</a>
            </div>
        </div>
    </div>
</section>


<a id="secure"></a>
<section class="section--secure">
<div class="container">
    <div class="row">
        <h3 class="section--intro text-center"><?php echo $l->t('Data protection');?></h3>
        <h1 class="section--heading-1 text-center"><?php echo $l->t('Secure your data');?></h1>
        <div class="distribution--ilustration"></div>
        <h3 class="section--intro text-center"><?php echo $l->t('While data needs to be at professionals\' finger tips at all times, the IT department must be able to ensure policies around sensitive data are respected.');?></h3>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 feature--block">
            <p class="section--paragraph"><?php echo $l->t('Government data is at the same time extremely sensitive and needs to be immediately accessible. Regulators are aware and privacy and security requirements are extremely strict.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud is a popular self-hosted solution in government for its ability to strictly control access to data and industry-leading security capabilities.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/file-access-control-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('File Access Control');?></h3>
            <p class="section--paragraph"><?php echo $l->t('The File Access Control feature of Nextcloud enables IT to codify legal and policy requirements, blocking unauthorized users uploading or downloading data following defined rules. Criteria include IP address ranges, group membership, file type and size, time and more. Data retention can be controlled as well, enabling administrators to limit the lifetime of certain files.');?></p>
            <p class="section--paragraph"><?php echo $l->t('For ultimate protection, the self-hosted collaboration solution can even be entirely firewalled off from the internet. This is the model employed by the Germand and French federal governments.');?></p>
            <a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('File Access Control');?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('Monitoring and auditing logs');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers built-in powerful monitoring capabilities, enabling institutions to ensure smooth performance. Systems can be monitored using the web interface or through monitoring and systems intelligence tools like OpenNMS, Splunk, Nagios or others. A full auditing system logs all user actions, enabling fully compliant usage of file sync and share.');?></p>
            <a href="<?php echo home_url('monitoring') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring and auditing');?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-server-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-server-nw.png" alt="in action" /></a>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Encryption');?></h3>
            <p class="section--paragraph">
                <?php echo $l->t('Nextcloud uses industry-standard SSL/TLS encryption for data in transfer. Data at rest in storage can be encrypted using a default military grade AES-256 encryption with server-based or custom key management. Optionally and on a per-folder base data can be');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('end-to-end encrypted</a> on the client with the server assisting in sharing and key management using a Zero-Knowledge model.');?>
            </p>
            <p class="section--paragraph">
                <?php echo $l->t('Seamless integration and ease of use with key features like offline recovery keys, auditing and HSM support make Nextcloud Encryption capabilities leading in the industry.');?>
            </p>
            <a href="<?php echo home_url('encryption') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Encryption in Nextcloud');?></a>
        </div>
    </div>
<!--    <div class="row feature-row">
        <div class="col-md-6 image--feature image--floated new-img">
            <a><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/ransomware-recovery.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('Best Ransomware protection in the industry');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Ransomware attacks are becoming more targetted as lots of money can be extracted from businesses and government organizations. While insurance can cover direct costs, the disruption to business is immense regardless. Nextcloud goes far beyond competing solutions, offering automated, one-click ransomware recovery tools.');?></p>
            <a href="https://nextcloud.com/blog/amidst-rising-ransomware-costs-another-us-city-pays-hundreds-of-thousands-to-recover-data/" class="button button--blue button--arrow button--large"><?php echo $l->t('Ransomware risks and protection');?></a>
        </div>
    </div>-->
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
        <div class="col-md-10 col-md-offset-1 feature--block">
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers first-in-class, third-party verified security backed by a USD 10000 Security Bug Bounty program protecting against unauthorized access.');?></p>
            <a href="<?php echo home_url('secure') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('security in Nextcloud');?></a>
        </div>
    </div>
</div>
</section>

<a id="integrated"></a>
<section class="section--integrated">
<div class="container">
    <div class="row">
        <h3 class="section--intro text-center"><?php echo $l->t('Easy integration');?></h3>
        <h1 class="section--heading-1 text-center"><?php echo $l->t('Efficient deployment and management');?></h1>
        <div class="efficiency--ilustration"></div>
        <h3 class="section--intro text-center"><?php echo $l->t('Complexity is the enemy of security and Nextcloud is designed to offer quick and easy integration in existing infrastructure, leaving policies and procedures in place. Its powerful LDAP and storage integration seamlessly fits with existing user directories, Windows Network Drive, NFS and Sharepoint storage solutions.');?></h3>
        <h3 class="section--intro text-center"><?php echo $l->t('The result: a quick implementation at low cost, and easy maintenance making a self-hosted Nextcloud the cloud compliance solution with the lowest TCO.');?></h3>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-10 col-md-offset-1 feature--block">
            <h3 class="section--heading-2 text-center"><?php echo $l->t('Deep integration');?></h3>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-6">
            <?php echo file_get_contents(__DIR__."/assets/img/icons/kerberos.svg");?>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud integrates in government infrastructure with support for SAML and Shibboleth, LDAP, Kerberos, Oauth, and other often used authentication mechanisms and runs on all enterprise Linux systems offering support options to match their life cycle.');?></p>
        </div>
        <div class="col-md-6">
            <?php echo file_get_contents(__DIR__."/assets/img/icons/storage.svg");?>
            <p class="section--paragraph"><?php echo $l->t('Data storage can be one or multiple NFS, Object Storage, Samba or a variety of other powerful storage mechanisms. This way Nextcloud provides seamless access to data on existing storage mechanisms, respecting existing access control policies and transparently handling changes on the underlying storage layer.');?></p>
        </div>
    </div>
    <div class="row whitepaper text-center">
        <div class="col-md-offset-4 col-md-4 wp-center">
            <p>
            <div class="row "><img class="responsive text-center" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/architecture-thumbnail-banner.png"/></div>
            <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                <input type="hidden" name="segmentId" value="1">
                    <input type="hidden" name="firstname" value="">
                    <input type="hidden" name="requesttime" value="<?php echo time(); ?>">
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                <p><label for="email"><?php echo $l->t('Download our Architecture whitepaper');?><br>
                <input class="mail text-center" type="text" name="email" maxlength="80" size="30" placeholder="Enter your email"></label></p>
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Subscribe me to the monthly Nextcloud newsletter');?>. <?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
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
    <div class="row">
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
    <div class="row">
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
    <div class="row">
        <div class="col-md-8 col-md-offset-2 featureblock">
        <p class="text-center"><a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('First class enterprise support with custom integration and security consulting available.');?></a></p>
        </div>
    </div>
</div>
</section>
