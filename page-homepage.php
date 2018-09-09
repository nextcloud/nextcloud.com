<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/home.css" rel="stylesheet">
<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<script>
	require(["require.config"], function() {
		require(["pages/home", "modules/slideshow"])
	});
</script>
</head>
<div class="jumbotron">
	<img class="jumbotron__pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern.png" alt="">
	<div class="container">
		<div class="row">
			<div class="col-md-6 toptext ">
				<a class="announcement" href="https://nextcloud.com/blog/nextcloud-14-now-available-with-video-verification-signaltelegram-2fa-support-improved-collaboration-and-gdpr-compliance/">
				<span class="type">News</span>
				<span class="message"><strong><?php echo $l->t('Nextcloud 14:');?></strong> <?php echo $l->t('Video verification, Signal/Telegram 2FA and more!');?></span>
				<?php echo file_get_contents(get_template_directory_uri()."/assets/img/next.svg"); ?>
				</a>
				<h1 class="jumbotron--heading-1"><?php echo $l->t('Nextcloud - Protecting your data');?></h1>
				<h2 class="jumbotron--lead"><?php echo $l->t('Building self-hosted products that allow you to be productive without losing control');?></h2>
<!-- 				<a class="button button--large button--arrow" href="<?php echo home_url('signup') ?>" role="button" id="get-nextcloud-button"><?php echo $l->t('Sign up');?></a> -->
				<a class="button button--large button--arrow--down" href="#why-nextcloud" role="button" id="get-nextcloud-button"><?php echo $l->t('Learn more');?></a>
			</div>
			<div class="col-md-6 topbanner">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/empty.png"> <!--empty image to ensure the viewport is big enough-->
			</div>
		</div>
	</div>
</div>

<a name="why-nextcloud"></a>
<section id="why-nextcloud">
	<div class="container">
		<h2 class=" section--heading-1 text-center revealOnScroll"><?php echo $l->t('Why Nextcloud?');?></h2>
		<div class="highlights">
			<div class="highlights_align ">
				<div class="privacy-icon" data-animation-path="img/home/privacy/" data-anim-loop="false" data-name="privacy"></div>
				<h4 class="revealOnScroll"><?php echo $l->t('Control');?></h4>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Protect, control and monitor data and communication across your company. Guarantee compliance with business and legal requirements. Keep your data on servers you own, at all times. Nothing leaks, not even metadata.');?></p>
			</div>
			<div class="highlights_align">
				<div class="flexibility-icon" data-animation-path="img/home/flexibility/" data-anim-loop="false" data-name="flexibility"></div>
				<h4 class="revealOnScroll"><?php echo $l->t('Productivity');?></h4>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Enable productivity across any platform, whether in the office or on the road, to share, collaborate and communicate across organizational boundaries. Nextcloud provides transparent access to data on any storage.');?></p>
			</div>
			<div class="highlights_align">
				<div class="community-icon" data-animation-path="img/home/community/" data-anim-loop="false" data-name="community"></div>
				<h4 class="revealOnScroll"><?php echo $l->t('Community');?></h4>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Enjoy constant improvements from a thriving and transparent, entirely open-source community development model, free of lockins or paywalls. Enjoy the benefits of enterprise support when you need it.');?></p>
			</div>
		</div>
		<p class="revealOnScroll text-center"><a class="button button--large button--blue button--arrow" href="<?php echo home_url('athome') ?>"><?php echo $l->t('Nextcloud at home');?></a>
		<a class="button button--large button--blue button--arrow" href="<?php echo home_url('files') ?>"><?php echo $l->t('Nextcloud for Enterprises');?></a></p>
	</div>
</section>


<?php require get_template_directory().'/compliance.php';?>

<section class="section--customers">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class=" section--heading-1 text-center revealOnScroll"><?php echo $l->t('Powering collaboration');?></h2>
                <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('<span class="avoidwrap">the most popular self-hosted collaboration solution</span> <span class="avoidwrap">for tens of millions of users</span> <span class="avoidwrap">at thousands of organizations</span> <span class="avoidwrap">across the globe</span>');?></p>
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
                    <a href="https://nextcloud.com/blog/german-federal-administration-relies-on-nextcloud-as-a-secure-file-exchange-solution"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/itzbund.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/siemens.png" />
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/randv.png" />
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/nextcloud-is-the-one-and-only-solution-we-are-providing-to-our-end-customers-florian-hausleitner/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/raiffeisen.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/max-planck.png" />
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
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="text-center revealOnScroll"><a class="button button--blue button--arrow button--large  revealOnScroll" href="<?php echo home_url('whitepapers') ?>"><?php echo $l->t('case studies & white papers');?></a></p>
        </div>
    </div>
</div>
</section>

<!--<section class="section--conf">
	<div class="container-fluid">
			<div class="container">
			<h2 class="section--heading-1 revealOnScroll">Nextcloud Conference</h2>
			<p class="section--paragraph revealOnScroll">Join our premier contributor event, August 23-30 in Berlin, Germany!<br>
			Featuring our Enterprise Day Monday August 27.</p>
			<p class="section--paragraph revealOnScroll"><a href="<?php echo home_url('conf') ?>" class="button button--arrow button--large button--blue">Contributor event</a><a href="<?php echo home_url('training') ?>" class="button button--arrow button--large button--blue">Enterprise Day</a></p>
 			<p class="section--paragraph revealOnScroll"><a class="hyperlink" href="https://nextcloud.com/blog/focus-friday-during-the-nextcloud-conference/">See the Friday Focus program in our blog!</a></p>
			<p class="section--paragraph revealOnScroll"><a class="button button--blue button--arrow button--large revealOnScroll" href="coming" role="button">Know all the features</a></p>
			</div>
	</div>
</section>-->

<section class="underyourcontrol">
<div class="container-fluid" id="perfect-for-home-and-business">
		<div class="container">
		<h2 class="section--heading-1 revealOnScroll"><?php echo $l->t('Under your control');?></h2>
		<p class="section--paragraph revealOnScroll"><?php echo $l->t('Your teams are using email attachments, public chat apps, consumer file sharing tools and telephone to communicate and collaborate. Nextcloud puts enterprises back in control over their IT.');?></p>
		<p class="section--paragraph revealOnScroll"><?php echo $l->t('We offer modern organizations the tools they need to host their own productivity enhancing replacements for cloud solutions.');?></p>
		<li class="revealOnScroll"><?php echo $l->t('Protect your IT investment by re-using existing infrastructure');?></li>
		<li class="revealOnScroll"><?php echo $l->t('Ensure compliance, security and flexibility');?></li>
		<li class="revealOnScroll"><?php echo $l->t('Know where your data is, who has access and how it is used');?></li>
		<li class="revealOnScroll"><?php echo $l->t('Facilitate secure collaboration and communication');?></li>
 		<p><a class="button button--blue button--arrow button--large revealOnScroll" href="<?php echo home_url('files') ?>" role="button"><?php echo $l->t('Nextcloud Files</a>');?></p>
		</div>
</div>
</section>

<?php require get_template_directory().'/verticals.php';?>


<section class="section--compare">
<div class="calltoaction revealOnScroll">
	<h1 class="section--heading-2 section--text--center"><?php echo $l->t('See how we stack up');?></h1>
	<p class="section--paragraph section--text--center">
	<a href="<?php echo home_url('compare') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Compare Nextcloud to other solutions');?></a></p>
</div>
</section>
<section class="slideshow" id="slideshow">
    <h2 class="text-center section--heading-1 revealOnScroll"><?php echo $l->t('Introducing Nextcloud 14');?></h2>
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
	            <img class="image-back" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/introducing-nc-14.png">
	            <div class="image-top-container">
	            	<img class="img-responsive image-top image__desktop" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen_14.png">
	            	<img class="img-responsive image-top image__mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen_mobile_14.png">
	            </div>
            </div>
        </div>
        <div class="texts-wrapper col-md-6">
	        <div class="right-text-grey" data-slide="1">
	            <h5 class="textTrigger" id="feature-1"><?php echo $l->t('Ultimate security and control');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('With Nextcloud 14 you can verify the identity of a share recipient in a video call before granting access to a share with Video Verification; and secure authentication with 2-factor authentication through SMS, Signal or Telegram.');?></p>
	            <br/>
	            <p>
	                <a class="button button--blue button--arrow button--large" href="https://nextcloud.com/blog/nextcloud-14-focus-on-security-and-compliance/" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	         <div class="right-text-grey" data-slide="2">
	            <h5 class="textTrigger" id="feature-2"><?php echo $l->t('Collaboration and communication');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Nextcloud 14 introduces the ability to add a note to shares, share files in a chat, search in comments, our next-gen server-to-server sharing technology Federation 2.0 and much more!');?></p>
	            <br/>
	            <p>
	                <a class="button button--blue button--arrow button--large" href="https://nextcloud.com/blog/nextcloud-14-rc1-announced-with-video-verification-and-signaltelegram-2fa-support-improved-collaboration-and-gdpr-compliance/" role="button"><?php echo $l->t('Lear more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="3">
	            <h5 class="textTrigger" id="feature-3"><?php echo $l->t('More accessible than ever');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Ease of use and accessibility are important to us and Nextcloud 14 introduces many improvements from an improved sidebar to a Dark and High Contrast theme, keyboard and screen reader access and much more.');?></p>
	            <br/>
	            <p>
	                <a class="button button--blue button--arrow button--large" href="https://nextcloud.com/blog/nextcloud-14-rc1-announced-with-video-verification-and-signaltelegram-2fa-support-improved-collaboration-and-gdpr-compliance/" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="4">
	            <h5 class="textTrigger" id="feature-4"><?php echo $l->t('Perfect Compliance');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('This release introduces the Terms of Service app, complementing the existing array of capabilities that enables system administrators to ensure their server is 100% compliant with legal privacy regulations like the GDPR');?></p>
	            <br/>
	            <p>
	                <a class="button button--blue button--arrow button--large" href="<?php echo home_url('gdpr') ?>" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>
        </div>
    </div>
</section>

<!--<section class="news-section">
	<div class="container-fluid news" id="social-media">
		<div class="container">
			<h1 class="section--heading-1 revealOnScroll"><?php echo $l->t('Latest news');?></h1>
			<div class="row">
				<div class="col-md-4">
					<h3 class="section--heading-1 revealOnScroll"><?php echo $l->t('Nextcloud News</a>');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,4); } ?></span></p>
					<a class="revealOnScroll" href="<?php echo home_url('news') ?>">more</a>
				</div>
				<div class="col-md-4">
					<h3 class="revealOnScroll"><?php echo $l->t('Latest Tweets');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,2); } ?></span></p>
					<a class="revealOnScroll" href="https://twitter.com/nextclouders">more</a>
				</div>
				<div class="col-md-4">
					<h3 class="revealOnScroll"><?php echo $l->t('Latest from the forum');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,4); }?></span></p>
					<a class="revealOnScroll" href="https://help.nextcloud.com">more</a>
				</div>
			</div>
		</div>
	</div>
</section>-->

<section class="stay-up-to-date">
	<div class="container text-center">
		<h5 class="section--heading-2 revealOnScroll"><?php echo $l->t('Stay up to date with latest enhancements');?></h5>
		<p class="section--paragraph"><?php echo $l->t('Subscribe to our newsletter and never miss anything');?></p>
		<a class="button button--blue button--arrow button--large" href="https://newsletter.nextcloud.com/?p=subscribe&id=1" role="button"><?php echo $l->t('Subscribe');?></a>
	</div>
</section>
