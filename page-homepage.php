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
				<a class="announcement" href="https://nextcloud.com/blog/nextcloud-introducing-native-integrated-end-to-end-encryption/">
				<span class="type">News</span>
				<span class="message"><strong>Nextcloud introducing end-to-end encryption</strong> coming in Nextcloud 13. Try our preview!</span>
				</a>
				<h1 class="jumbotron--heading-1"><?php echo $l->t('A safe home for all your data');?></h1>
				<h2 class="jumbotron--lead"><?php echo $l->t('Access, share and protect your files, calendars, contacts, communication & more at home and in your enterprise.');?></h2>
				<a class="button button--large button--arrow" href="<?php echo home_url('install') ?>" role="button" id="get-nextcloud-button"><?php echo $l->t('Get Nextcloud</a>');?>
			</div>
			<div class="col-md-6 topbanner">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/empty.png"> <!--empty image to ensure the viewport is big enough-->
			</div>
		</div>
	</div>
</div>

<section id="why-nextcloud">
	<div class="container">
		<h2 class=" section--heading-1 text-center revealOnScroll"><?php echo $l->t('Why Nextcloud?');?></h2>
		<div class="highlights">
			<div class="highlights_align ">
				<div class="privacy-icon" data-animation-path="img/home/privacy/" data-anim-loop="false" data-name="privacy"></div>
				<h4 class="revealOnScroll"><?php echo $l->t('Privacy');?></h4>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Keep all of your life / business private and secure on a server you control. Share with only who you choose, and no-one else.');?></p>
			</div>
			<div class="highlights_align">
				<div class="community-icon" data-animation-path="img/home/community/" data-anim-loop="false" data-name="community"></div>
				<h4 class="revealOnScroll"><?php echo $l->t('Community');?></h4>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Enjoy constant improvements from a thriving and transparent, all open-source community development model, free of lockins or paywalls.');?></p>
			</div>
			<div class="highlights_align">
				<div class="flexibility-icon" data-animation-path="img/home/flexibility/" data-anim-loop="false" data-name="flexibility"></div>
				<h4 class="revealOnScroll"><?php echo $l->t('Enterprise');?></h4>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Protect, control and scale the data and communication in your company and organization. Keep data where it is, making it available to your teams.');?></p>
			</div>
		</div>
	</div>
</section>

<div class="container-fluid" id="perfect-for-home-and-business">
		<div class="container">
		<h2 class="section--heading-1 revealOnScroll"><?php echo $l->t('Perfect for home and office');?></h2>
		<p class="section--paragraph revealOnScroll"><?php echo $l->t('Access everything with the tools you are already using,
			regardless of the device or platform you are on. Pictures,
			videos, documents, contacts, communications - they are all
			available right where you need them whether they are
			coming from your local storage or remote cloud services.');?></p>
		<p><a class="button button--blue button--arrow button--large revealOnScroll" href="<?php echo home_url('features') ?>" role="button"><?php echo $l->t('Know all the features</a>');?></p>
		</div>
</div>

<section class="slideshow" id="slideshow">
    <h2 class="text-center section--heading-1 revealOnScroll"><?php echo $l->t('Introducing Nextcloud 12');?></h2>
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
	            <img class="image-back" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/introducing-nc-10.png">
	            <div class="image-top-container">
	            	<img class="img-responsive image-top image__desktop" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen_12.jpg">
	            	<img class="img-responsive image-top image__mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen_mobile_12.jpg">
	            </div>
            </div>
        </div>
        <div class="texts-wrapper col-md-6">
	        <div class="right-text-grey" data-slide="1">
	            <h5 class="textTrigger" id="feature-1"><?php echo $l->t('The Next Generation of Secure Collaboration');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Nextcloud 12 redefines Enterprise File Sync and Share, bringing it to the next level with built in collaboration and communication capabilities. Working together was never easier!');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="https://nextcloud.com/blog/welcome-to-nextcloud-12/" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	         <div class="right-text-grey" data-slide="2">
	            <h5 class="textTrigger" id="feature-2"><?php echo $l->t('Collaboration and sharing');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('This release has its focus around working together with others. We improved navigation and file handling, especially sharing. You can sent multiple public links and contact others quickly. With the Guest app you can create guest accounts and the Circles app lets you make custom groups of your contacts. We also published an updated version of our Chat app');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="https://nextcloud.com/blog/nextcloud-12-redefining-file-sync-and-share-with-collaboration-and-communication" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="3">
	            <h5 class="textTrigger" id="feature-3"><?php echo $l->t('Secure Audio/video calls');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Our Video calls app is the most secure way to to discuss with others, share your screen to show or demonstrate something and get work done. We also introduced push notifications, security improvements like Rate Limiting and enhanced Brute Force protection, admin apps like Impersonate, Quota Warning, Download Activity, App bundles, JSLoader and much more.');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="/webrtc" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="4">
	            <h5 class="textTrigger" id="feature-4"><?php echo $l->t('Next generation innovation');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Nextcloud announced the innovative Global Scale architecture as part of Nextcloud 12. Global Scale brings a truly scalable architecture, delivering cost benefits and adding flexibility and control over locality of data in large Nextcloud instances.');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="https://nextcloud.com/blog/nextcloud-announces-global-scale-architecture-as-part-of-nextcloud-12" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>
        </div>
    </div>
</section>

<section class="section--compare">
<div class="calltoaction revealOnScroll">
	<h1 class="section--heading-2 section--text--center"><?php echo $l->t('See how we stack up');?></h1>
	<p class="section--paragraph section--text--center">
	<a href="/compare" class="button button--blue button--arrow button--large"><?php echo $l->t('Compare Nextcloud to other solutions');?></a></p>
</div>
</section>

<section class="news-section">
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
</section>

<section class="stay-up-to-date">
	<div class="container text-center">
		<h5 class="section--heading-2 revealOnScroll"><?php echo $l->t('Stay up to date with latest enhancements');?></h5>
		<p class="section--paragraph"><?php echo $l->t('Subscribe to our newsletter and never miss anything');?></p>
		<a class="button button--blue button--arrow button--large" href="https://newsletter.nextcloud.com/?p=subscribe&id=1" role="button"><?php echo $l->t('Subscribe');?></a>
	</div>
</section>
