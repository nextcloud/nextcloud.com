<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/home.css?v=6" rel="stylesheet">
<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<script>
	require(["require.config"], function() {
		require(["pages/home", "modules/slideshow"])
	});
</script>
<title>Nextcloud - the most popular self-hosted Content Collaboration Platform!</title>
<meta name=”Description” content="Nextcloud is the most deployed self-hosted file share and collaboration platform on the web. Access  &amp; collaborate across your devices. Your data remains under your control.">
</head>
<div class="jumbotron">
<!-- 	<img class="jumbotron__pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/" alt=""> -->
	<div class="container">
		<div class="row">
			<div class="col-md-6 toptext ">
				<a class="announcement" href="https://nextcloud.com/blog/nextcloud-17-brings-remote-wipe-collaborative-text-editor-and-next-generation-secure-watermarking/">
				<span class="type">News</span>
				<span class="message"><strong><?php echo $l->t('Nextcloud 17');?></strong> <?php echo $l->t(' brings remote wipe, collaborative text editor and next generation secure watermarking');?></span>
				<?php echo file_get_contents(get_template_directory_uri()."/assets/img/next.svg"); ?>
				</a>
				<h1 class="jumbotron--heading-1"><?php echo $l->t('Regain control');?></h1>
				<h2 class="jumbotron--lead"><?php echo $l->t('The self-hosted productivity platform that keeps you in control');?></h2>
				<a class="button button--large button--arrow button--white" href="<?php echo home_url('install') ?>" role="button" id="get-nextcloud-button"><?php echo $l->t('Get Nextcloud');?></a>
			</div>
			<div class="col-md-6 topbanner">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/empty.png"> <!--empty image to ensure the viewport is big enough-->
			</div>
		</div>
	</div>
	<div class="scrollbutton">
        <a href="#scroll"><span></span><span></span><span></span> </a>
	</div>
</div>
<script>
	var elements = ['jumbotron--heading-1', 'jumbotron--lead', 'topbanner', 'announcement'];

	elements.forEach((element) => {
		const selector = document.getElementsByClassName(element)[0];
		selector.classList.remove('no-js');
		selector.style.opacity = 0;
	})
</script>
<a name="scroll"></a>

<section class="section--products">
	<div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="<?php echo home_url('files') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png" /></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="fill:white !important;" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Files.svg" >
                        </div>
                        <div class="text">
                            <?php echo $l->t('<strong>Nextcloud Files</strong><br><small>Enterprise File Sync and Share</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Files offers an on-premise Universal File Access and sync platform with powerful collaboration capabilities and desktop, mobile and web interfaces.');?></p>
                    <a href="<?php echo home_url('files') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>

            <div class="col-sm-4">
                <a href="<?php echo home_url('talk') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-devices-nw.png"></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Talk.svg" >
                        </div>
                        <div class="text">
                            <?php echo $l->t('<strong>Nextcloud Talk</strong><br><small>Calls, chat and web meetings</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Talk delivers on-premises, private audio/video conferencing and text chat through browser and mobile interfaces with integrated screen sharing and SIP integration.');?></p>
                    <a href="<?php echo home_url('talk') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo home_url('groupware') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar-nw.png"></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Groupware.svg" >
                        </div>
                        <div class="text">
                            <?php echo $l->t('<strong>Nextcloud Groupware</strong><br><small>Calendar, Contacts & Mail</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Groupware integrates Calendar, Contacts, Mail and other productivity features to help teams get their work done faster, easier and on your terms.');?></p>
                    <a href="<?php echo home_url('groupware') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--customers quote">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class=" section--heading-1 text-center"><?php echo $l->t('Powering collaboration');?></h1>
                <p class="section--paragraph text-center"><?php echo $l->t('<span class="avoidwrap">the most popular self-hosted collaboration solution</span> <span class="avoidwrap">for tens of millions of users</span> <span class="avoidwrap">at thousands of organizations</span> <span class="avoidwrap">across the globe</span>');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/german-federal-administration-relies-on-nextcloud-as-a-secure-file-exchange-solution"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/itzbund.png" /></a>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/siemens.png" />
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/eu-governments-choose-independence-from-us-cloud-providers-with-nextcloud/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/FMI-wide.png" /></a>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/tuberlin.png" /></a>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/Wikimedia_Deutschland.svg" /></a>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/randv.png" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/nextcloud-is-the-one-and-only-solution-we-are-providing-to-our-end-customers-florian-hausleitner/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/Raiffeisen_Steiermark_modified.png" /></a>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/max-planck.png" />
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/DEGES_Logo.svg" /></a>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/3000-users-at-ucloud4schools-migrated-to-nextcloud-11-by-regio-it/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/regioit.png" /></a>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/the-danish-research-and-education-network-moves-from-owncloud-to-nextcloud/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/deic.png" /></a>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/SIB.png" /></a>
                </div>
            </div>
        </div>
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="text-center"><a class="button button--blue button--arrow button--large " href="<?php echo home_url('whitepapers') ?>"><?php echo $l->t('case studies & white papers');?></a></p>
        </div>
    </div>
</div>
</section>

<a name="why-nextcloud"></a>
<section id="why-nextcloud" class="section--why">
	<div class="container">
		<h1 class="section--heading-1 text-center"><?php echo $l->t('Why Nextcloud?');?></h1>
		<div class="highlights">
			<div class="highlights_align ">
				<div class="privacy-icon" data-animation-path="img/home/privacy/" data-anim-loop="false" data-name="privacy"></div>
				<h4><?php echo $l->t('Control');?></h4>
				<p class="section--paragraph"><?php echo $l->t('Protect, control and monitor data and communication across your company. Guarantee compliance with business and legal requirements. Keep your data on servers you own, at all times. Nothing leaks, not even metadata.');?></p>
			</div>
			<div class="highlights_align">
				<div class="flexibility-icon" data-animation-path="img/home/flexibility/" data-anim-loop="false" data-name="flexibility"></div>
				<h4><?php echo $l->t('Productivity');?></h4>
				<p class="section--paragraph"><?php echo $l->t('Enable productivity across any platform, whether in the office or on the road, to share, collaborate and communicate across organizational boundaries. Nextcloud provides transparent access to data on any storage.');?></p>
			</div>
			<div class="highlights_align">
				<div class="community-icon" data-animation-path="img/home/community/" data-anim-loop="false" data-name="community"></div>
				<h4><?php echo $l->t('Community');?></h4>
				<p class="section--paragraph"><?php echo $l->t('Enjoy constant improvements from a thriving and transparent, entirely open-source community development model, free of lockins or paywalls. Enjoy the benefits of enterprise support when you need it.');?></p>
			</div>
		</div>
	</div>
	<div class="container">
        <p class="text-center"><a class="button button--large button--blue button--arrow" href="<?php echo home_url('athome') ?>"><?php echo $l->t('Nextcloud at home');?></a>
        <a class="button button--large button--blue button--arrow" href="<?php echo home_url('files') ?>"><?php echo $l->t('Nextcloud for Enterprises');?></a></p>
    </div>
</section>

<!--<section class="section--enterprise-day">
	<div class="container-fluid">
			<div class="container">
                <h1 class="section--heading-1">Enterprise Day</h1>
                <ul class="section--paragraph">
                    <li><i class="fa-check fa"></i> Get the most out of Nextcloud</li>
                    <li><i class="fa-check fa"></i> Speed up decision making</li>
                    <li><i class="fa-check fa"></i> Learn best practices</li>
                    <li><i class="fa-check fa"></i> Meet developers and decision makers</li>
                </ul>
                <p class="section--paragraph">Join our Enterprise Day on March 12.<br/><em>Book now, before January 31 and get 50% off!</em></p>
                <p class="section--paragraph"><a href="<?php echo home_url('training') ?>" class="button button--arrow button--large button--blue">Learn more and book</a></p>
			</div>
	</div>
</section>-->

<!--<section class="section--conf">
	<div class="container-fluid">
			<div class="container">
			<h1 class="section--heading-1">Nextcloud Conference</h1>
			<p class="section--paragraph">Join for talks, workshops & keynotes at your yearly conference!<br> September 14-15 in Berlin, Germany!<br>
			Featuring our Enterprise Day on Monday September 16.</p>
			<p class="section--paragraph"><a href="<?php echo home_url('conf2019') ?>" class="button button--arrow button--large button--blue">Conference</a><a href="<?php echo home_url('training') ?>" class="button button--arrow button--large button--blue">Enterprise Day</a></p>-->
<!--  			<p class="section--paragraph"><a class="hyperlink" href="https://nextcloud.com/blog/focus-friday-during-the-nextcloud-conference/">See the Friday Focus program in our blog!</a></p> -->
<!-- 			<p class="section--paragraph"><a class="button button--blue button--arrow button--large" href="coming" role="button">Know all the features</a></p> -->
<!--			</div>
	</div>
</section>-->

<?php require get_template_directory().'/compliance.php';?>

<section class="section--compare">
<div class="calltoaction">
	<h1 class="section--heading-2 section--text--center"><?php echo $l->t('See how we stack up');?></h1>
	<p class="section--paragraph section--text--center">
	<a href="<?php echo home_url('compare') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Compare Nextcloud to other solutions like Office365');?></a></p>
</div>
</section>


<section class="section--underyourcontrol">
<div class="container-fluid">
    <div class="container">
        <h1 class="section--heading-1"><?php echo $l->t('Losing control?');?></h1>
        <p class="section--paragraph"><?php echo $l->t('Your teams are using email attachments, public chat apps and consumer file sharing tools to communicate and collaborate. Regain control with Nextcloud.');?></p>
        <li><?php echo $l->t('Host your own collaboration platform');?></li>
        <li><?php echo $l->t('Protect your IT investment by re-using existing infrastructure');?></li>
        <li><?php echo $l->t('Ensure compliance, security and flexibility');?></li>
        <li><?php echo $l->t('Know where your data is, who has access and how it is used');?></li>
        <li><?php echo $l->t('Facilitate secure collaboration and communication');?></li>
        <a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
    </div>
</div>
</section>

<?php require get_template_directory().'/verticals.php';?>

<section class="slideshow" id="slideshow">
    <h1 class="text-center section--heading-1"><?php echo $l->t('Introducing Nextcloud 17');?></h1>
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
	            <img class="image-back" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/introducing-nc-17.png">
	            <div class="image-top-container">
	            	<img class="img-responsive image-top image__desktop" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen_17.png">
	            	<img class="img-responsive image-top image__mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen_mobile_17.png">
	            </div>
            </div>
        </div>
        <div class="texts-wrapper col-md-6">
	         <div class="right-text-grey" data-slide="1">
	            <h5 class="textTrigger" id="feature-2"><?php echo $l->t('Remote wipe');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Thanks to built-in support, remote wipe will work on devices not under MDM management like from guest users or students at universities. Users can wipe their own devices individually, admins can wipe all devices from a user.');?></p>
	            <br/>
	            <p>
	                <a class="button button--blue button--arrow button--large" href="https://www.youtube.com/watch?v=oyWXMjb-6ik" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="2">
	            <h5 class="textTrigger" id="feature-2"><?php echo $l->t('Nextcloud Text');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Our new distraction-free, collaborative rich-text editor makes taking notes or jotting down thoughts from a brainstorm and working with others on them easier than ever before.');?></p>
	            <br/>
	            <p>
	                <a class="button button--blue button--arrow button--large" href="https://nextcloud.com/blog/nextcloud-introduces-collaborative-rich-text-editor/" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="3">
	            <h5 class="textTrigger" id="feature-3"><?php echo $l->t('Secure view');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Nextcloud 17 can protect the confidentiality of documents with advanced watermarking and a secure mailbox feature which stores the contents and attachments of mails securely in Nextcloud.');?></p>
	            <br/>
	            <p>
	                <a class="button button--blue button--arrow button--large" href="https://nextcloud.com/blog/nextcloud-announces-virtual-data-room-solution-for-ultimate-protection-of-data-during-sensitive-dealmaking/" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="4">
	            <h5 class="textTrigger" id="feature-4"><?php echo $l->t('Much more');?></h5>
                <p class="section--paragraph"><?php echo $l->t('🔐 Setup two-factor authentication after first login, admins can create one-time login tokens in the web UI and delegate this to group admins');?></p>
                <p class="section--paragraph"><?php echo $l->t('👥 LDAP write support makes it possible to manage users from Nextcloud');?></p>
                <p class="section--paragraph"><?php echo $l->t('💽 S3 versioning support, IBM Spectrum Scale integration and Global Scale with Collabora Online');?></p>
	            <br/>
	            <p>
	                <a class="button button--blue button--arrow button--large" href="https://nextcloud.com/blog/nextcloud-17-brings-remote-wipe-collaborative-text-editor-and-next-generation-secure-watermarking/" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>
        </div>
    </div>
</section>

<!--<section class="news-section">
	<div class="container-fluid news" id="social-media">
		<div class="container">
			<h1 class="section--heading-1"><?php echo $l->t('Latest news');?></h1>
			<div class="row">
				<div class="col-md-4">
					<h1 class="section--heading-1"><?php echo $l->t('Nextcloud News</a>');?></h1>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,4); } ?></span></p>
					<a href="<?php echo home_url('news') ?>">more</a>
				</div>
				<div class="col-md-4">
					<h3><?php echo $l->t('Latest Tweets');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,2); } ?></span></p>
					<a href="https://twitter.com/nextclouders">more</a>
				</div>
				<div class="col-md-4">
					<h3><?php echo $l->t('Latest from the forum');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,4); }?></span></p>
					<a href="https://help.nextcloud.com">more</a>
				</div>
			</div>
		</div>
	</div>
</section>-->

<section class="stay-up-to-date">
	<div class="container text-center">
		<h5 class="section--heading-2"><?php echo $l->t('Stay up to date with latest enhancements');?></h5>
		<p class="section--paragraph"><?php echo $l->t('Subscribe to our newsletter and never miss anything');?></p>
		<a class="button button--blue button--arrow button--large" href="https://newsletter.nextcloud.com/?p=subscribe&id=1" role="button"><?php echo $l->t('Subscribe');?></a>
	</div>
</section>
