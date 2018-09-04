<head>
<script>
	require(["require.config"], function() {
		require(["modules/slideshow", "modules/submenu"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/enterprise.css" rel="stylesheet">
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<!--<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
<script type="text/javascript">
    var CaptchaCallback = function() {
        grecaptcha.render('RecaptchaField1', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField2', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
    };
</script>-->
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/legal2.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/legal2.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/legal2.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/legal2.jpg">
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
			<a class="btn btn-primary" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('order online');?></a>
			<a class="btn btn-primary" href="<?php echo home_url('buy') ?>"><?php echo $l->t('get a quote');?></a>
			<a class="btn btn-primary" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
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
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Matter experts');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Dedicated to your success');?></h3>
		<div class="ilustration ilustration__expertise">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/ilustration_matterexperts-new.svg"); ?>
		</div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('We are dedicated to your success as Nextcloud customer. An analysis of your needs, a pilot customized for your architecture and remote installation support ensures a smooth introduction of Nextcloud in your organization and we will help you scale up to meet growing demand in your organization.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud GmbH employs <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-the-most-active-open-source-file-sync-and-share-project/">9 of the top-ten developers in the Nextcloud Server codebase</a>, making our engineering team by far the most qualified to help you get the most out of your Enterprise File Sync and Share solution.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Our unique approach to support gives you direct access to Nextcloud engineering expertise. There is no layer of support people between you and what you need, giving you the equivalent of a dedicated on-site engineering team.');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('team') ?>"><?php echo $l->t('Our team');?></a></p>
	</div>
</section>

<div class="separator"></div>

<a name="security" id="security"></a>
<section class="section--security">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Top notch security');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('To keep your data safe');?></h3>
		<div class="ilustration">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/security-new.svg"); ?>
		</div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud develops its software with a rigorous focus on security through the entire life cycle of the product. Our active and passive security measures are backed by the some of the highest security bug bounties in the open source industry.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('As customer you get direct access to our security expertise, with hardening advice and ahead-of-release security issue mitigation and fixes.');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('secure') ?>"><?php echo $l->t('Learn about security');?></a></p>
	</div>
</section>

<div class="separator"></div>

<a name="lifecycle" id="lifecycle"></a>
<section class="section--lifecycle">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Multi-year lifecycle');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('For uninterupted service');?></h3>
		<div class="ilustration lifecycle__ilustration">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/data_safe-new.svg"); ?>
		</div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('A Nextcloud Subscription gives you access to enterprise-ready software, updates, and information and support services that span your entire OS and application infrastructure life cycle and architecture. You can count on receiving the latest product versions with the stability and security you need.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Working with data is essential for your business and being forced on the upgrade threadmill is disruptive to your organization. With access to up to 15 years security and stability updates to Nextcloud, we match the lifecycle of your operating system so you can schedule upgrades when it works for you and secure the investments you did in your existing platform.');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('See pricing');?></a></p>
	</div>
</section>

<div class="separator"></div>

<a name="globalscale" id="globalscale"></a>
<section class="section--globalscale">
	<div class="container">
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Ultimate scalability');?></p>
		<h3 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('For costs and compliance');?></h3>
		<div class="ilustration">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/globalscale/final.svg"); ?>
		</div>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Our unique Nextcloud Global Scale architecture delivers a true globally scalable solution for deployments with hundreds of millions of users, giving unprecedented control over the locality of data and delivering dramatic cost reduction.');?></p>
		<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Nextcloud Global Scale was designed to lift enterprise collaboration to a new level, overcoming limitations in building large scale file storage, sync & share solutions. Nextcloud Global Scale works by decentralizing data to independent nodes, using several new components to manage the interactions between servers.');?></p>
		<p class="section--intro text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('globalscale') ?>"><?php echo $l->t('Learn more');?></a></p>
	</div>
</section>

<!-- <div class="separator"></div> -->

<?php require get_template_directory().'/verticals.php';?>


<a name="capabilities" id="capabilities"></a>
<section class="section--whitepaper">
    <div class="container">
        <p class="section--intro text-center revealOnScroll"><?php echo $l->t('What you need');?></p>
        <h2 class="text-center section--heading-1 revealOnScroll"><?php echo $l->t('Nextcloud Enterprise Capabilities');?></h2>
        <div class="row">
            <div class="col-md-6 revealOnScroll">
                <h3 class=""><?php echo $l->t('Deep integration in your infrastructure');?></h3>
                <p><?php echo $l->t('Nextcloud offers LDAP/Active Directory, SAML and Kerberos authentication. It accesses data on NFS, (s)FTP, WebDAV, Windows Network Drive, Object Stores like SWIFT and many others.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download our Architecture whitepaper!');?><br>
                    <td colspan="2">
                    <div class="">
                        <div id="RecaptchaField1"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="1">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="<?php echo $l->t('Enter your email');?>"></label> <input class="button button--blue button--large" type="submit" value=" <?php echo $l->t('Get the whitepaper');?> "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/architecture-thumbnail-banner.png"/>
    </div>
</section>

<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
			<div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('<span class="avoidwrap">How the TU Berlin delivers</span> <span class="avoidwrap">file sync and share</span> <span class="avoidwrap">to 22.000 users</span>');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download our free case study: <br /> TU Berlin and 9 other institutions migrate to Nextcloud');?><br>
                    <td colspan="2" style="text-align:center">
                    <div class="">
                        <div id="RecaptchaField2"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="5">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="<?php echo $l->t('Enter your email');?>"></label> <input class="button button--large" type="submit" value=" <?php echo $l->t('Get the case study');?> "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/tub-thumbnail-banner.png"/>
	</div>
</section>
<!--

<section class="section--customers">
<div class="container">
    <h2 class="section--heading-1 text-center revealOnScroll"><?php echo $l->t('Nextcloud in Education');?></h2>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('With the Nextcloud Education Edition a unique offering is available providing Moodle integration, Zenodo publishing, SAML authentication, collaboration features and more.');?></p>
		</div>
	</div>
    <div class="row">
		<div class="col-sm-3 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets//img/customers/tuberlin.png" /></a>
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
        <div class="text-center revealOnScroll"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('education') ?>">Learn more</a></div>
    </div>
</div>
</section>-->

<section class="slideshow" id="slideshow">
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
	            <h5 class="textTrigger" id="feature-1"><?php echo $l->t('Monitoring and compliance');?></h5>
	            <p><?php echo $l->t('Nextcloud offers extensive monitoring and compliance capabilities ready for enterprises in sensitive businesses. Data locality, retention and access can be controled and logged for audit.');?></p>
                   <a class="button button--blue button--arrow button--large" href="<?php echo home_url('monitoring') ?>" role="button"><?php echo $l->t('Learn more about monitoring');?></a>
                </p>
	        </div>

	         <div class="right-text-grey" data-slide="2">
	            <h5 class="textTrigger" id="feature-2"><?php echo $l->t('Security features keep your data safe');?></h5>
	           <p><?php echo $l->t('Nextcloud supports two-factor authentication and Server Side Encryption, has brute force protection and features industry-standard security measures like CSP, SSC and password and session management.');?></p>
                  <a class="button button--blue button--arrow button--large" href="<?php echo home_url('secure') ?>" role="button"><?php echo $l->t('Learn more about security');?></a>
               </p>
	        </div>

	        <div class="right-text-grey" data-slide="3">
	            <h5 class="textTrigger" id="feature-3"><?php echo $l->t('IT stays in control');?></h5>
	            <p><?php echo $l->t('Our File Access Control app enables administrators to defining data access rules or triggering actions based on location, group membership, file type, tags and other properties.');?></p>
                   <a class="button button--blue button--arrow button--large" href="<?php echo home_url('workflow') ?>" role="button"><?php echo $l->t('Learn more about Workflow');?></a>
                </p>
	        </div>

	        <div class="right-text-grey" data-slide="4">
	            <h5 class="textTrigger" id="feature-4"><?php echo $l->t('Easy access for users');?></h5>
	            <p><?php echo $l->t('Users can access and share their data on Nextcloud through sync clients for Windows, Linux and Mac as well as Android and IOS, providing a smooth experience no matter where data is located.');?></p>
                   <a class="button button--blue button--arrow button--large" href="<?php echo home_url('clients') ?>" role="button"><?php echo $l->t('Learn more about clients');?></a>
                </p>
	        </div>
        </div>
    </div>
</section>
<section class="section--compare">
<div class="calltoaction revealOnScroll">
	<h1 class="section--heading-2 section--text--center"><?php echo $l->t('See how we stack up');?></h1>
	<p class="section--paragraph section--text--center">
	<a href="<?php echo home_url('compare') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Compare Nextcloud to other solutions');?></a></p>
</div>
</section>
