<link href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css" rel="stylesheet">
<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script>

<div class="jumbotron">
<!-- 	<div class="container-fluid"> -->
		<div class="row">
			<div class="col-md-6 toptext ">
				<h1><?php
 echo $l->t('A safe home for <br> all your data');?></h1>
				<h2><?php
 echo $l->t('Access, share and protect your files, calendars, contacts, communication & more at home and in your enterprise.');?></h2>
				<p><a class="btn-primary" href="<?php echo home_url('install') ?>" role="button" id="get-nextcloud-button"><?php
 echo $l->t('Get Nextcloud</a>');?></p>
			</div>
			<div class="col-md-6 topbanner">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/empty.png"> <!--empty image to ensure the viewport is big enough-->
			</div>
		</div>
<!-- 	</div> --> 
</div>

<section id="why-nextcloud">
	<div class="container">
		<h2 class="text-center revealOnScroll"><?php
 echo $l->t('Why Nextcloud?');?></h2>
		<div class="highlights">
			<div class="highlights_align ">
				<div class="privacy-icon" data-animation-path="img/home/privacy/" data-anim-loop="false" data-name="privacy"></div>
				<h4 class="revealOnScroll"><?php
 echo $l->t('Privacy');?></h4>
				<p class="highlights_text revealOnScroll"><?php
 echo $l->t('Keep all of your life / business
					private and secure. Share
					with only who you choose,
					and no-one else.');?></p>
			</div>
			<div class="highlights_align">
				<div class="community-icon" data-animation-path="img/home/community/" data-anim-loop="false" data-name="community"></div>
				<h4 class="revealOnScroll"><?php
 echo $l->t('Community');?></h4>
				<p class="highlights_text revealOnScroll"><?php
 echo $l->t('Enjoy constant improvements
					from a thriving and transparent,
					all open-source community
					development model, free of
					lockins or paywalls.');?></p>
			</div>
			<div class="highlights_align">
				<div class="flexibility-icon" data-animation-path="img/home/flexibility/" data-anim-loop="false" data-name="flexibility"></div>
				<h4 class="revealOnScroll"><?php
 echo $l->t('Enterprise');?></h4>
				<p class="highlights_text revealOnScroll"><?php
 echo $l->t('Protect, control and scale the data and communication in your company and organization.');?></p>
			</div>
		</div>
	</div>
</section>

<div class="container-fluid" id="perfect-for-home-and-business">
		<h2 class="revealOnScroll"><?php
 echo $l->t('Perfect for home and office');?></h2>
		<p class="revealOnScroll"><?php
 echo $l->t('Access everything with the tools you are already using,
			regardless of the device or platform you are on. Pictures,
			videos, documents, contacts, communications - they are all
			available right where you need them whether they are
			coming from your local storage or remote cloud services.');?></p>
		<p><a class="btn-primary revealOnScroll" href="<?php echo home_url('features') ?>" role="button"><?php
 echo $l->t('Know all the features</a>');?></p>
</div>

<section class="Section-Introducing-Nextcloud" id="pinContainer">
<div >
    <h2 class="text-center section-title revealOnScroll"><?php
 echo $l->t('Introducing Nextcloud 10');?></h2>
	<div class="indicators">
		<ul class="carousel_dots"></ul>
		<li class="btn_carousel"></li>
		<li class="btn_carousel"></li>
		<li class="btn_carousel"></li>
		<li class="btn_carousel"></li>
	</div>

    <div class="pp-scrollable" id="pagepiling">
	    <div class="section" id="section1">
	    <div class="container">
            <div class="row introducing-nc-release">
                <div class="container">
                    <div class="container col-md-6 ">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/introducing-nc-10.png">
                    </div>
                    <div class="container col-md-6 right-text-grey" style="opacity: 1; padding-top: 50px;">
                        <h5><?php
 						echo $l->t('Secure, Fine Grained Control over Data Access and Workflows');?></h5>
                        <p><?php
 						echo $l->t('This release delivers better scalability as well as monitoring, security and workflow management tools, enabling better control over Nextcloud servers and operation at scale.');?></p>
                        <br/>
                        <p>
                            <a class="btn-primary" href="https://nextcloud.com/blog/secure-monitor-and-control-your-data-with-nextcloud-10-get-it-now/" role="button"><?php
 							echo $l->t('Learn more');?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
	    	
	    </div>
	    <div class="section" id="section2">
	    	
	    </div>
	    <div class="section" id="section3">
	    	
	    </div>
	    <div class="section" id="section4">
	    	
	    </div>
	</div>

<section class="news-section">
	<div class="container-fluid news" id="social-media">
		<div class="container">
			<h1 class="revealOnScroll"><?php
 echo $l->t('Latest news');?></h1>
			<div class="row">
				<div class="col-md-4">
					<h3 class="revealOnScroll"><?php
 echo $l->t('Nextcloud News</a>');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,4); } ?></span></p>
					<a class="revealOnScroll" href="<?php echo home_url('news') ?>">more</a>
				</div>
				<div class="col-md-4">
					<h3 class="revealOnScroll"><?php
 echo $l->t('Latest Twitter posts');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,2); } ?></span></p>
					<a class="revealOnScroll" href="https://twitter.com/nextclouders">more</a>
				</div>
				<div class="col-md-4">
					<h3 class="revealOnScroll"><?php
 echo $l->t('Latest from the forum');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,4); }?></span></p>
					<a class="revealOnScroll" href="https://help.nextcloud.com">more</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container-fluid" id="stay-up-to-date">
	<div class="row stay-up-to-date">
		<div class="container text-center" style="padding-top: 70px; padding-bottom: 70px;">
			<h5 class="revealOnScroll"><?php
 echo $l->t('Stay up to date with Nextcloud\'s latest enhancements!');?></h5>
			<p class="revealOnScroll"><a class="btn-primary " href="https://newsletter.nextcloud.com/?p=subscribe&id=1" role="button"><?php
 echo $l->t('Subscribe to our newsletter</a>');?></p>
		</div>
	</div>
</div>
