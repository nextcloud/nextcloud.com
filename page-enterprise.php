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
				<h1><?php echo $l->t('Nextcloud Enterprise');?></h1>
				<h2><?php echo $l->t('The enterprise-ready Content Collaboration Platform');?></h2>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a href="#reliability"><?php echo $l->t('reliability');?></a>
			<a href="#scalability"><?php echo $l->t('scalability');?></a>
			<a href="#security"><?php echo $l->t('security');?></a>
			<a href="#integrity"><?php echo $l->t('integrity');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('order online');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise/buy') ?>"><?php echo $l->t('get a quote');?></a>
			<a class="button button--blue" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
		</div>
	</div>
</section>

<section class="section--offer">
	<div class="container">
		<h2 class="section--heading-1 text-center"><?php echo $l->t('Scaleable, secure and tested');?></h2>
		<p class="section--intro text-center"><?php echo $l->t('Nextcloud Enterprise gives professional organizations software optimized and tested for mission critical environments.');?></p>
		<p class="section--intro text-center"><?php echo $l->t('Nextcloud Enterprise is backed by a Nextcloud Subscription with the services and expertise needed for quick deployment and reliable service.');?></p>
	</div>
</section>

<div class="separator"></div>
<section class="section--benefits">
    <h2 class="section--heading-1 text-center"><?php echo $l->t('6 reasons to rely on Nextcloud');?></h2>
	<div class="container">
        <div class="row">
            <div class="col-md-6 benefit">
                <h2 class="text-center"><?php echo $l->t('Reliability');?></h1>
                <h3 class="text-center"><?php echo $l->t('The best from the best');?></h2>
                <div class="ilustration ilustration__expertise">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/people-cloud.svg"); ?>
                </div>
                <p class="text-center"><?php echo $l->t('You need the most reliable solution available and thanks to extensive testing and quality assurance, Nextcloud Enterprise offers just that.');?></p>
                <p class="text-center"><?php echo $l->t('With up to 15 years security and stability updates for Nextcloud Enterprise, we match the lifecycle of your operating system so you can schedule upgrades when it works for you and secure the investments you did in your existing platform.');?></p>
        <!-- 		<p class="text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('TBD') ?>"><?php echo $l->t('TBD');?></a></p> -->
            </div>
            <div class="col-md-6 benefit">
                <h2 class="text-center"><?php echo $l->t('Scalability');?></h2>
                <h3 class="text-center"><?php echo $l->t('Costs and efficiency');?></h3>
                <div class="ilustration illustration-scalability">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/globalscale/final.svg"); ?>
                </div>
                <div class="content">
                    <p class="text-center"><?php echo $l->t('Nextcloud Enterprise is pre-configured and optimized for the needs of professional organizations rather than home users.');?></p>
                    <p class="text-center"><?php echo $l->t('

                    For the largest deployments, our unique Nextcloud Global Scale architecture delivers a true globally scalable solution. It enables deployments up to hundreds of millions of users, gives unprecedented control over the locality of data and allows for dramatic cost reduction opportunities at the storage and database level.');?> <a class="hyperlink" href="<?php echo home_url('globalscale') ?>"><?php echo $l->t('Global Scale.');?></a></p>
                </div>
            </div>
            <div class="col-md-6 benefit">
                <h2 class="text-center"><?php echo $l->t('Security');?></h2>
                <h3 class="text-center"><?php echo $l->t('Keep your data safe');?></h3>
                <div class="ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/security-new.svg"); ?>
                </div>
                <p class="text-center"><?php echo $l->t('Nextcloud develops its software with a rigorous focus on security through the entire life cycle of the product. Our active and passive security measures are backed by the some of the highest security bug bounties in the open source industry.');?></p>
                <p class="text-center"><?php echo $l->t('With Nextcloud Enterprise you get priority  access to security and stability fixes, coupled with the most advanced security expertise in the self-hosted file sync and collaboration market to guarantee smooth operation out of the box.');?></p>
                <p class="text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('secure') ?>"><?php echo $l->t('Security details');?></a></p>
            </div>
            <div class="col-md-6 benefit">
                <h2 class="text-center"><?php echo $l->t('Integrity');?></h2>
                <h3 class="text-center"><?php echo $l->t('Certification and compliance');?></h3>
                <div class="ilustration integrity__ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/data_safe-new.svg"); ?>
                </div>
                <p class="text-center"><?php echo $l->t('Nextcloud Enterprise is a guaranteed proven, certified code base for legal compliance legislation like the GDPR and HIPAA. You can count on our expertise, documentation and reviews.');?></p>
                <p class="text-center"><?php echo $l->t('Hundreds of the world\'s most sensitive productivity platforms depend on Nextcloud to provide teams with a secure environment to work in. Our certification offers the certainty they need.');?></p>
                <p class="text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('gdpr') ?>"><?php echo $l->t('Compliance details');?></a></p>
            </div>
            <div class="col-md-6 benefit">
                <h2 class="text-center"><?php echo $l->t('Certified integrity');?></h2>
                <h3 class="text-center"><?php echo $l->t('For certainty and compliance');?></h3>
                <div class="ilustration integrity__ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/data_safe-new.svg"); ?>
                </div>
                <p class="text-center"><?php echo $l->t('Nextcloud Enterprise is a guaranteed proven, certified code base for legal compliance legislation like the GDPR and HIPAA. You can count on our expertise, documentation and reviews.');?></p>
                <p class="text-center"><?php echo $l->t('Hundreds of the world\'s most sensitive productivity platforms depend on Nextcloud to provide teams with a secure environment to work in. Our certification offers the certainty they need.');?></p>
                <p class="text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('gdpr') ?>"><?php echo $l->t('Compliance details');?></a></p>
            </div>
            <div class="col-md-6 benefit">
                <h2 class="text-center"><?php echo $l->t('Backed by knowledge');?></h2>
                <h3 class="text-center"><?php echo $l->t('For uninterrupted service');?></h3>
                <div class="ilustration lifecycle__ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/ilustration_matterexperts-new.svg"); ?>
                </div>
                <p class="text-center"><?php echo $l->t('Your Nextcloud subscription enables you to successfully deploy and manage your Nextcloud instances, complimenting your IT resources and increasing the efficiency and reliability of your service.');?></p>
                <p class="text-center"><?php echo $l->t('We are dedicated to your success as Nextcloud customer. Our unique approach to support gives you direct access to Nextcloud engineering expertise. There is no layer of call center people between you and what you need, giving you the equivalent of a dedicated on-site engineering team.');?></p>
                <p class="text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('See pricing');?></a></p>
            </div>
        </div>
    </div>
</section>


<div class="separator"></div>
<a name="expertise" id="expertise"></a>
<section class="section--expertise">
	<div class="container">
		<p class="section--intro text-center"><?php echo $l->t('World class reliability');?></p>
		<h3 class="section--heading-1 text-center"><?php echo $l->t('The best from the experts');?></h3>
		<div class="ilustration ilustration__expertise">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/people-cloud.svg"); ?>
		</div>
		<p class="section--intro text-center"><?php echo $l->t('You need the most reliable solution available, and with additional testing and quality assurance, Nextcloud Enterprise offers just that.');?></p>
		<p class="section--intro text-center"><?php echo $l->t('A Nextcloud Subscription gives you access to our enterprise-ready solution and early security updates. With up to 15 years security and stability updates for Nextcloud Enterprise, we match the lifecycle of your operating system so you can schedule upgrades when it works for you and secure the investments you did in your existing platform.');?></p>
<!-- 		<p class="section--intro text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('TBD') ?>"><?php echo $l->t('TBD');?></a></p> -->
	</div>
</section>

<div class="separator"></div>

<a name="scalability" id="scalability"></a>
<section class="section--scalability">
	<div class="container">
		<p class="section--intro text-center"><?php echo $l->t('Ultimate scalability');?></p>
		<h3 class="section--heading-1 text-center"><?php echo $l->t('For costs and efficiency');?></h3>
		<div class="ilustration">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/globalscale/final.svg"); ?>
		</div>
		<p class="section--intro text-center"><?php echo $l->t('Nextcloud Enterprise is pre-configured and optimized for the needs of large scale production at enterprises, rather than home users.');?></p>
		<p class="section--intro text-center"><?php echo $l->t('Designed to lift enterprise collaboration to a new level, our unique Nextcloud Global Scale architecture delivers a true globally scalable solution. It enables deployments up to hundreds of millions of users, gives unprecedented control over the locality of data and allows for dramatic cost reduction opportunities at the storage and database level.');?></p>
		<p class="section--intro text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('globalscale') ?>"><?php echo $l->t('Global Scale details');?></a></p>
	</div>
</section>

<div class="separator"></div>

<a name="security" id="security"></a>
<section class="section--security">
	<div class="container">
		<p class="section--intro text-center"><?php echo $l->t('Top notch security');?></p>
		<h3 class="section--heading-1 text-center"><?php echo $l->t('To keep your data safe');?></h3>
		<div class="ilustration">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/security-new.svg"); ?>
		</div>
		<p class="section--intro text-center"><?php echo $l->t('Nextcloud develops its software with a rigorous focus on security through the entire life cycle of the product. Our active and passive security measures are backed by the some of the highest security bug bounties in the open source industry.');?></p>
		<p class="section--intro text-center"><?php echo $l->t('With Nextcloud Enterprise you get priority  access to security and stability fixes, coupled with the most advanced security expertise in the self-hosted file sync and collaboration market to guarantee smooth operation out of the box.');?></p>
		<p class="section--intro text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('secure') ?>"><?php echo $l->t('Security details');?></a></p>
	</div>
</section>

<div class="separator"></div>

<a name="integrity" id="integrity"></a>
<section class="section--integrity">
	<div class="container">
		<p class="section--intro text-center"><?php echo $l->t('Certified integrity');?></p>
		<h3 class="section--heading-1 text-center"><?php echo $l->t('For certainty and compliance');?></h3>
		<div class="ilustration integrity__ilustration">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/data_safe-new.svg"); ?>
		</div>
		<p class="section--intro text-center"><?php echo $l->t('Nextcloud Enterprise is a guaranteed proven, certified code base for legal compliance legislation like the GDPR and HIPAA. You can count on our expertise, documentation and reviews.');?></p>
		<p class="section--intro text-center"><?php echo $l->t('Hundreds of the world\'s most sensitive productivity platforms depend on Nextcloud to provide teams with a secure environment to work in. Our certification offers the certainty they need.');?></p>
		<p class="section--intro text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('gdpr') ?>"><?php echo $l->t('Compliance details');?></a></p>
	</div>
</section>

<div class="separator"></div>

<a name="subscription" id="subscription"></a>
<section class="section--subscription">
	<div class="container">
		<p class="section--intro text-center"><?php echo $l->t('Backed by knowledge');?></p>
		<h3 class="section--heading-1 text-center"><?php echo $l->t('For uninterrupted service');?></h3>
		<div class="ilustration lifecycle__ilustration">
			<?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/ilustration_matterexperts-new.svg"); ?>
		</div>
        <p class="section--intro text-center"><?php echo $l->t('Your Nextcloud subscription enables you to successfully deploy and manage your Nextcloud instances, complimenting your IT resources and increasing the efficiency and reliability of your service.');?></p>
        <p class="section--intro text-center"><?php echo $l->t('We are dedicated to your success as Nextcloud customer. Our unique approach to support gives you direct access to Nextcloud engineering expertise. There is no layer of call center people between you and what you need, giving you the equivalent of a dedicated on-site engineering team.');?></p>
		<p class="section--intro text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('See pricing');?></a></p>
	</div>
</section>
<!-- <div class="separator"></div> -->

<?php require get_template_directory().'/verticals.php';?>


<a name="capabilities" id="capabilities"></a>
<section class="section--whitepaper">
    <div class="container">
        <p class="section--intro text-center"><?php echo $l->t('What you need');?></p>
        <h2 class="text-center section--heading-1"><?php echo $l->t('Nextcloud Enterprise Capabilities');?></h2>
        <div class="row">
            <div class="col-md-6">
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
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="<?php echo $l->t('Enter your email');?>"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--large" type="submit" value=" <?php echo $l->t('Get the whitepaper');?> "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/architecture-thumbnail-banner.png"/>
    </div>
</section>

<!--<section class="section--whitepaper quote">
	<div class="container">
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
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="<?php echo $l->t('Enter your email');?>"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--large" type="submit" value=" <?php echo $l->t('Get the case study');?> "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/tub-thumbnail-banner.png"/>
	</div>
</section>-->
<!--

<section class="section--customers">
<div class="container">
    <h2 class="section--heading-1 text-center"><?php echo $l->t('Nextcloud in Education');?></h2>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph text-center"><?php echo $l->t('With the Nextcloud Education Edition a unique offering is available providing Moodle integration, Zenodo publishing, SAML authentication, collaboration features and more.');?></p>
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
        <div class="text-center"><a class="button button--blue button--arrow button--large" href="<?php echo home_url('education') ?>">Learn more</a></div>
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
<div class="calltoaction">
	<h1 class="section--heading-2 section--text--center"><?php echo $l->t('See how we stack up');?></h1>
	<p class="section--paragraph section--text--center">
	<a href="<?php echo home_url('compare') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Compare Nextcloud to other solutions');?></a></p>
</div>
</section>
