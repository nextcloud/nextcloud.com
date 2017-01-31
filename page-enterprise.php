<head>
<script>
	require(["require.config"], function() {
		require(["pages/enterprise", "modules/slideshow", "modules/submenu", "bootstrap"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/enterprise.css" rel="stylesheet">
</head>

<section class="enterprise-hero-section second-menu">
	<div class="container-fluid background"> 
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Get support from the source');?></h1>
				<h2><?php echo $l->t('Going beyond the traditional licensing model, Nextcloud frees you from vendor lock-in and provides value through supporting your business\' needs.<br/> You run your own server and stay in control of your data - we make sure you have the best support whenever you need it!');?></h2>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#expertise"><?php echo $l->t('expertise');?></a>
			<a href="#security"><?php echo $l->t('security');?></a>
			<a href="#lifecycle"><?php echo $l->t('lifecycle');?></a>
			<a href="#capabilities"><?php echo $l->t('capabilities');?></a>
			<a class="btn btn-primary" href="/buy"><?php echo $l->t('get a quote');?></a>
			<a class="btn btn-primary" href="/pricing"><?php echo $l->t('pricing plans');?></a>
		</div>
	</div>
</section>

<section class="what-you-get-section">
	<div class="container">
		<h2 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('What we offer');?></h2>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Your Nextcloud subscription enables you to successfully deploy and manage your Nextcloud instances, complimenting your IT resources and increasing the efficiency and reliability of your service.');?></p>
	</div>
</section>

<div class="separator"></div>
<a name="expertise" id="expertise"></a>
<section class="section--expertise">
	<div class="container">	
		<p class="section--intro text-center revealOnScroll">Matter experts</p>
		<h3 class="section--heading-1 text-center revealOnScroll">Dedicated to your success</h3>
		<div class="expertise__ilustration"></div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('We are dedicated to your success as Nextcloud customer. An analysis of your needs, a pilot customized for your architecture and remote installation support ensures a smooth introduction of Nextcloud in your organization and we will help you scale up to meet growing demand in your organization.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud GmbH employs <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-the-most-active-open-source-file-sync-and-share-project/">9 of the top-ten developers in the Nextcloud Server codebase</a>, making our engineering team by far the most qualified to help you get the most out of your Enterprise File Sync and Share solution.');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="/team">Our team</a></p>
	</div>
</section>

<div class="separator"></div>

<a name="security" id="security"></a>
<section class="section--security">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Top notch security');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('To keep your data safe');?></h3>
		<div class="security__ilustration"></div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud develops its software with a rigorous focus on security through the entire life cycle of the product. Our active and passive security measures are backed by the some of the highest security bug bounties in the open source industry.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('As customer you get direct access to our security expertise, with hardening advice and ahead-of-release security issue mitigation and fixes.');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="/secure">Learn about security</a></p>
	</div>
</section>

<div class="separator"></div>

<a name="lifecycle" id="lifecycle"></a>
<section class="section--lifecycle">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Multi-year lifecycle');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('For uninterupted service');?></h3>
		<div class="lifecycle__ilustration"></div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('A Nextcloud support subscription gives you access to enterprise-ready software, updates, and information and support services that span your entire OS and application infrastructure life cycle and architecture. You can count on receiving the latest product versions with the stability and security you need.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Working with data is essential for your business and being forced on the upgrade threadmill is disruptive to your organization. With access to up to 15 years security and stability updates to Nextcloud, we match the lifecycle of your operating system so you can schedule upgrades when it works for you and secure the investments you did in your existing platform.');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="/pricing">See pricing</a></p>
	</div>
</section>

<div class="separator"></div>

<a name="capabilities" id="capabilities"></a>
<section class="slideshow" id="slideshow">
    <h2 class="text-center section-title revealOnScroll"><?php echo $l->t('Nextcloud Enterprise Capabilities');?></h2>
	<div class="indicators">
		<ul class="carousel_dots"></ul>
		<li class="btn_carousel"><a href="#feature-1"></a></li>
		<li class="btn_carousel"><a href="#feature-2"></a></li>
		<li class="btn_carousel"><a href="#feature-3"></a></li>
		<li class="btn_carousel"><a href="#feature-4"></a></li>
	</div>
    <div class="container">
        <div class="col-md-6 ">
        	<div class="container-image-center" id="imageTrigger">
	            <img class="image-back" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/capabilities-back.png">
	            <div class="image-top-container">
	            	<img class="img-responsive image-top image__desktop" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/sprite_screen.jpg">
	            	<img class="img-responsive image-top image__mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/enterprise/sprite_screen_mobile.jpg">
	            </div>
            </div>
        </div>
        <div class="texts-wrapper col-md-6">
	        <div class="right-text-grey" data-slide="1">
				<h5 class="textTrigger" id="feature-1"><?php echo $l->t('Deep integration in your infrastructure');?></h5>
				<p><?php echo $l->t('Nextcloud offers LDAP/Active Directory, SAML and Kerboros authentication. It accesses data on NFS, (s)FTP, WebDAV, Windows Network Drive, Object Stores like SWIFT and many more.');?></p>
					<a class="button button--blue button--arrow button--large" href="<?php echo get_template_directory_uri(); ?>/assets/files/architecture-whitepaper.pdf" role="button"><?php echo $l->t('Architecture Whitepaper');?></a>
				</p>
	        </div>

	         <div class="right-text-grey" data-slide="2">
	            <h5 class="textTrigger" id="feature-2"><?php echo $l->t('Security features keep your data safe');?></h5>
	           <p><?php echo $l->t('Nextcloud supports two-factor authentication and Server Side Encryption, has brute force protection and features industry-standard security measures like CSP, SSC and password and session management.');?></p>
                  <a class="button button--blue button--arrow button--large" href="/secure" role="button"><?php echo $l->t('Learn more about security');?></a>
               </p>
	        </div>

	        <div class="right-text-grey" data-slide="3">
	            <h5 class="textTrigger" id="feature-3"><?php echo $l->t('IT stays in control');?></h5>
	            <p><?php echo $l->t('Our File Access Control app enables administrators to defining data access rules or triggering actions based on location, group membership, file type, tags and other properties.');?></p>
                   <a class="button button--blue button--arrow button--large" href="/workflow/" role="button"><?php echo $l->t('Learn more about Workflow');?></a>
                </p>
	        </div>

	        <div class="right-text-grey" data-slide="4">
	            <h5 class="textTrigger" id="feature-4"><?php echo $l->t('Easy access for users');?></h5>
	            <p><?php echo $l->t('Users can access and share their data on Nextcloud through sync clients for Windows, Linux and Mac as well as Android and IOS, providing a smooth experience no matter where data is located.');?></p>
                   <a class="button button--blue button--arrow button--large" href="/features" role="button"><?php echo $l->t('Learn more about features');?></a>
                </p>
	        </div>
        </div>
    </div>
</section>
