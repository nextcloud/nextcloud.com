<head>
<script>
	require(["require.config"], function() {
		require(["modules/slideshow", "modules/submenu"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/enterprise.css?v=6" rel="stylesheet">
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

<section class="enterprise-hero-section background second-menu">
    <div class="container background">
        <div class="col-md-6 topheader">
            <h1><?php echo $l->t('Nextcloud Enterprise');?></h1>
            <h2><?php echo $l->t('The enterprise-ready Content Collaboration Platform');?></h2>
        </div>
    </div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a class="button button--blue" href="<?php echo home_url('faq') ?>"><?php echo $l->t('FAQ');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise/order') ?>"><?php echo $l->t('order online');?></a>
			<a class="button button--blue" href="<?php echo home_url('enterprise/buy') ?>"><?php echo $l->t('get a quote');?></a>
			<a class="button button--blue" href="<?php echo home_url('trial') ?>"><?php echo $l->t('Start a trial');?></a>
			<a class="button button--blue" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('pricing plans');?></a>
		</div>
	</div>
</section>

<section class="section--intro">
	<div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
<!--                    <h1 class="text-center"><?php echo $l->t('Scaleable, secure and tested');?></h1>-->
                    <p class="text-center"><?php echo $l->t('Nextcloud Enterprise gives professional organizations software optimized and tested for mission critical environments.');?></p>
            </div>
		</div>
	</div>
</section>

<section class="section--benefits">
    <h1 class="text-center"><?php echo $l->t('Nextcloud Enterprise Delivers');?></h1>
	<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/stability.svg"); ?>
                </div>
            </div>
            <div class="col-md-6 benefit">
                <h2><?php echo $l->t('Stability');?></h2>
                <p><?php echo $l->t('The reliable platform for large organizations.');?></p>
                <p>
                • <?php echo $l->t('Additional testing and quality assurance');?><br />
                • <?php echo $l->t('Early critical bug fixes and hot fixes');?><br />
                • <?php echo $l->t('Upgrade standby: we ensure smooth upgrades with advice and help');?><br />
                • <?php echo $l->t('Support delivered directly by our engineers');?><br />
                • <?php echo $l->t('Dedicated support account manager');?><br />
                • <?php echo $l->t('Enterprise grade SLA up to 24/7');?><br />
                • <?php echo $l->t('Up to 5-10 years of long term support for stable Nextcloud releases');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6   image--floated">
                <div class="ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/security.svg"); ?>
                </div>
            </div>
            <div class="col-md-6 benefit">
                <h2><?php echo $l->t('Security');?></h2>
                <p><?php echo $l->t('Advanced security capabilities to customers.');?></p>
                <p>
                • <?php echo $l->t('Early security patches');?><br />
                • <?php echo $l->t('Enterprise-grade security features and hardening');?><br />
                • <?php echo $l->t('Early notifications about critical security issues');?><br />
                • <?php echo $l->t('Pro active security consulting to review and harden your instance');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/ilustration_matterexperts-new.svg"); ?>
                </div>
            </div>
            <div class="col-md-6 benefit">
                <h2><?php echo $l->t('Expertise');?></h2>
                <p><?php echo $l->t('Direct access to Nextcloud engineering expertise without call center people in between.');?></p>
                <p>
                • <?php echo $l->t('Full proof of concept package where our experts help you integrate Nextcloud in your infrastructure');?><br />
                • <?php echo $l->t('Migration assistance: We help to migrate from your previous solution');?><br />
                • <?php echo $l->t('Access to enterprise documentation and the knowledge base');?><br />
                • <?php echo $l->t('Access to expertise around scaling, security and best practices');?><br />
                • <?php echo $l->t('Access to optional workshops and training');?></p>
            </div>
        </div>
    </div>
</section>

<section class="quote section--contact">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center"><?php echo $l->t('Get started now!');?></h2>
            <p class="text-center"><?php echo $l->t('We are dedicated to your success as Nextcloud customer. Make sure you have the best solution.');?></p>
            <p class="text-center"><a class="button button--white button--arrow" href="<?php echo home_url('trial') ?>"><?php echo $l->t('Test Nextcloud Enterprise');?></a></p>
        </div>
    </div>
</div>
</section>

<section class="section--benefits">
	<div class="container">
        <div class="row">
            <div class="col-md-6  image--floated">
                <div class="ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/influence.svg"); ?>
                </div>
            </div>
            <div class="col-md-6 benefit">
                <h2><?php echo $l->t('Influence');?></h2>
                <p><?php echo $l->t('Customer needs drive us, and your requirements are on the top of our todo.');?></p>
                <p>
                • <?php echo $l->t('Access to decision makers at Nextcloud');?><br />
                • <?php echo $l->t('Influence on road map');?><br />
                • <?php echo $l->t('Seat at the product advisory board');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/functionality.svg"); ?>
                </div>
            </div>
            <div class="col-md-6 benefit">
                <h2><?php echo $l->t('Functionality');?></h2>
                <p><?php echo $l->t('Additional capabilities ready to provide what your teams need to be productive.');?></p>
                <p>
                • <?php echo $l->t('Custom integration');?><br />
                • <?php echo $l->t('Branding');?><br />
                • <?php echo $l->t('Outlook integration');?><br />
                • <?php echo $l->t('Access to add-ons from partner companies like: Collabora Online, ONLYOFFICE, Kaspersky, and many more');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6  image--floated">
                <div class="ilustration">
                    <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/data_safe-new.svg"); ?>
                </div>
            </div>
            <div class="col-md-6 benefit">
                <h2><?php echo $l->t('Compliance');?></h2>
                <p><?php echo $l->t('A proven, certified code base for legal compliance legislation.');?></p>
                <p>
                • <?php echo $l->t('Guarantee that all code is secure, proven and certified for GDPR and HIPAA compliance');?><br />
                • <?php echo $l->t('Access to enterprise GDPR documentation and compliance expertise necessary for data requests');?></p>
        </div>
    </div>
</section>





<!--<div class="separator"></div>

<a name="security" id="security"></a>
<section class="section--security">
	<div class="container">
		<h2 class="text-center"><?php echo $l->t('Security');?></h2>
        <div class="ilustration">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/security-new.svg"); ?>
        </div>
        <div class="content">
            <p class="text-center"><?php echo $l->t('Nextcloud develops its software with a rigorous focus on security through the entire life cycle of the product. Our active and passive security measures are backed by the some of the highest security bug bounties in the open source industry.');?></p>
            <p class="text-center"><?php echo $l->t('With Nextcloud Enterprise you get priority access to security and stability fixes and direct access to the most advanced security expertise in the self-hosted file sync and collaboration market.');?></p>
            <p class="text-center"><a class="button button--white button--arrow" href="<?php echo home_url('secure') ?>"><?php echo $l->t('Security details');?></a></p>
        </div>
	</div>
</section>

<div class="separator"></div>
<a name="compliance" id="compliance"></a>
<section class="section--compliance">
	<div class="container">
        <h2 class="text-center"><?php echo $l->t('Compliance');?></h2>
        <div class="ilustration integrity__ilustration">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/data_safe-new.svg"); ?>
        </div>
        <div class="content">
            <p class="text-center"><?php echo $l->t('Nextcloud Enterprise is a guaranteed proven, certified code base for legal compliance legislation like the GDPR and HIPAA. You can count on our expertise, documentation and reviews.');?></p>
            <p class="text-center"><?php echo $l->t('Hundreds of the world\'s most sensitive productivity platforms depend on Nextcloud to provide teams with a secure environment to work in. Our certification offers the certainty they need.');?></p>
            <p class="text-center"><a class="button button--white button--arrow" href="<?php echo home_url('gdpr') ?>"><?php echo $l->t('Compliance details');?></a></p>
        </div>
	</div>
</section>

<div class="separator"></div>

<a name="scalability" id="scalability"></a>
<section class="section--scalability">
	<div class="container">
		<h2 class="text-center"><?php echo $l->t('Scalability');?></h2>
        <div class="ilustration illustration-scalability">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/globalscale/final.svg"); ?>
        </div>
        <div class="content">
            <p class="text-center"><?php echo $l->t('Nextcloud Enterprise is pre-configured and optimized for the needs of professional organizations rather than home users.');?></p>
            <p class="text-center"><?php echo $l->t('Our unique Nextcloud Global Scale architecture delivers scalability to hundreds of millions of users, unprecedented control over the locality of data and dramatic cost reduction opportunities at large scale storage and database level.');?>
            <p class="text-center"><a class="button button--white button--arrow" href="<?php echo home_url('globalscale') ?>"><?php echo $l->t('Learn about Global Scale');?></a></p>
        </div>
	</div>
</section>


<div class="separator"></div>

<a name="reliability" id="reliability"></a>
<section class="section--reliability">
	<div class="container">
		<h2 class="text-center"><?php echo $l->t('Reliability');?></h1>
        <div class="ilustration lifecycle__ilustration">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/enterprise/ilustration_matterexperts-new.svg"); ?>
        </div>
        <div class="content">
            <p class="text-center"><?php echo $l->t('Nextcloud Enterprise undergoes additional testing and quality assurance to provide you the most reliable solution. Align to your platform with a life cycle of up to 15 years.');?></p>
            <p class="text-center"><?php echo $l->t('We are dedicated to your success as Nextcloud customer. Our unique approach to support gives you direct access to Nextcloud engineering expertise. There is no layer of call center people between you and what you need, giving you the equivalent of a dedicated on-site engineering team.');?></p>
            <p class="text-center"><a class="button button--white button--arrow" href="<?php echo home_url('pricing') ?>"><?php echo $l->t('See pricing');?></a></p>
        </div>
	</div>
</section>-->

<!-- <div class="separator"></div> -->

<?php require get_template_directory().'/verticals.php';?>


<a name="capabilities" id="capabilities"></a>
<section class="section--whitepaper">
    <div class="container">
        <h3 class="section--intro text-center"><?php echo $l->t('What you need');?></h3>
        <h1 class="text-center section--heading-1"><?php echo $l->t('Nextcloud Enterprise Capabilities');?></h1>
        <div class="row">
            <div class="col-md-6">
                <h3 class=""><?php echo $l->t('Deep integration in your infrastructure');?></h3>
                <p><?php echo $l->t('Nextcloud offers LDAP/Active Directory, SAML and Kerberos authentication. It accesses data on NFS, (s)FTP, WebDAV, Windows Network Drive, Object Stores like SWIFT and many others.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <form name="whitepaper" method="post" action="<?php echo home_url('mautic-submit') ?>">
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
                <h2><?php echo $l->t('<span class="avoidwrap">How the TU Berlin delivers</span> <span class="avoidwrap">file sync and share</span> <span class="avoidwrap">to 22.000 users</span>');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('mautic-submit') ?>">
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
    <h1 class="text-center"><?php echo $l->t('Nextcloud in Education');?></h1>
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
