<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css" rel="stylesheet">
<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<script>
	require(["require.config"], function() {
		require(["pages/home", "modules/slideshow"])
	});
</script>
</head>
<div class="jumbotron">
	<img class="jumbotron__pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern.svg" alt="">
	<div class="container">
		<div class="row">
			<div class="col-md-6 toptext ">
				<a class="announcement" href="https://nextcloud.com/blog/nextcloud-12-beta-introduces-the-next-generation-of-secure-collaboration/">
				<span class="type">Fresh</span>
				<span class="message"><strong>Nextcloud 12 Beta is out.</strong> Find out what is new!</span>
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
    <h2 class="text-center section--heading-1 revealOnScroll"><?php echo $l->t('Introducing Nextcloud 11');?></h2>
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
	            	<img class="img-responsive image-top image__desktop" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen.jpg">
	            	<img class="img-responsive image-top image__mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen_mobile.jpg">
	            </div>
            </div>
        </div>
        <div class="texts-wrapper col-md-6">
	        <div class="right-text-grey" data-slide="1">
	            <h5 class="textTrigger" id="feature-1"><?php echo $l->t('A new standard for security and scalability');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Nextcloud 11 delivers a wide range of security and scalability improvements with a number of important features on top. This release provides you the most secure solution for keeping your data under control we’ve delivered yet.');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="https://nextcloud.com/blog/nextcloud-11-sets-new-standard-for-security-and-scalability/" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	         <div class="right-text-grey" data-slide="2">
	            <h5 class="textTrigger" id="feature-2"><?php echo $l->t('Verified security improvements');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('This release introduces significant security improvements, attested <a href="https://nextcloud.com/secure" target="_blank">by NCC Group,</a> a global expert in cyber security and risk mitigation, to <em>"complement the existing security architecture within the design"</em> and <em>"enhance the general standing of the security working environment."</em>');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="/secure" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="3">
	            <h5 class="textTrigger" id="feature-3"><?php echo $l->t('Up to 60% lower resource usage');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('With scalability a prime concern among Nextcloud\'s large enterprise customers, this release decreases the database load and lowers resource usage up to 60% for common server operations. Multi-bucket Object Store support, improved handling of previews and Collabora Online speed improvements enable scaling to greater numbers of users and files, decreases TCO and improves user experience.');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="https://nextcloud.com/?p=1373" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="4">
	            <h5 class="textTrigger" id="feature-4"><?php echo $l->t('Full text search, Next-gen Federation, Spreed and more');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Nextcloud 11 introduces Apache Solr powered Full Text Search, enabling users to find words or phrases in text, pdf and common office documents on internal, external, shared and encrypted storage. The Next Generation Federation technology introduces a central lookup server, enabling Nextcloud users to find each other irrespective of the server their account resides on. The experimental Spreed app integrates secure, peer to peer audio and video chat in Nextcloud.');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="https://nextcloud.com/blog/nextcloud-11-sets-new-standard-for-security-and-scalability/" role="button"><?php echo $l->t('Learn more');?></a>
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

<!-- <script type="text/javascript">
	javascript:!function(a){var b=a.createElement("script");b.onload=function(){TouchEmulator()},b.src="//cdn.rawgit.com/hammerjs/touchemulator/0.0.2/touch-emulator.js",a.body.appendChild(b)}(document);
</script> -->
