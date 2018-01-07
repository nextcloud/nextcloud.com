<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/talk.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="background talk-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Talk');?></h1>
				<h2><?php echo $l->t('Screensharing, online meetings & conferencing made easy.');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('<span class="avoidwrap">Meetings with colleagues, customers and partners</span> - <span class="avoidwrap">have a personal conversation with one click.</span>');?></p>
                <div class="text-center">
                    <!--<a href="install/#install-clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>-->
                </div>
			</div>
		</div>
	</div>
</section>

<section class="">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png" class="img-responsive" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Designed to not to be in your way');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud Talk is a fully on-premise audio/video and chat communication service. It features web and mobile apps and is designed to offer the highest degree of security while being easy to use.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud Talk lowers the barrier for communication and lets your team connect any time, any where, on any device, with each other, customers or partners.');?></p>
			<!--<p class="section--paragraph"><?php echo $l->t('While Nextcloud Talk is free, the optional Spreed High Performance Back-end offers enterprise class scalability, reliability and features.');?></p>-->
		</div>
	</div>
</div>
</section>

<section class="section--features">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center revealOnScroll"><?php echo $l->t('Key capabilities');?></h2>
        <div class="row">
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('HD (H.265) audio/video calls');?></li>
                <li><?php echo $l->t('Group and one on one calls');?></li>
                <li><?php echo $l->t('Webinars & public web meetings');?></li>
                <li><?php echo $l->t('Individual and group chat');?></li>
                </ul></p>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Easy screen sharing');?></li>
                <li><?php echo $l->t('Mobile apps for Android and iOS');?></li>
                <li><?php echo $l->t('mobile call & chat push notifications');?></li>
                <li><?php echo $l->t('Integration in <a class="hyperlink" href="/files">Nextcloud Files</a> and <a class="hyperlink" href="/groupware">Groupware</a>');?></li>
                </ul></p>
            </div>
            <div class="col-sm-4 revealOnScroll">
                <p class="section--paragraph"><ul>
                <li><?php echo $l->t('Fully on-premise, 100% open source');?></li>
                <li>E<?php echo $l->t('nd-to-end Encrypted calls');?></li>
                <li><?php echo $l->t('Scaling to millions of users');?></li>
                <li><?php echo $l->t('SIP gate: dial in by phone');?></li>
                </ul></p>
            </div>
        </div>
        <div class="row">
            <p class="section--paragraph text-center"><?php echo $l->t('Starting at Eur 5000/USD 6000');?></p>
            <p class="section--paragraph text-center revealOnScroll"><a class="button button--medium" href="#pricing"><?php echo $l->t('see pricing');?></a></p>
        </div>
    </div>
</div>
</section>

<section class="section--benefits">
<div class="container">
	<div class="row list">
        <div class="col-md-6 revealOnScroll">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/clients/mobile/android.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/clients/mobile/android-talk.png" class="img-responsive" /></a>
        </div>
        <div class="col-md-6 revealOnScroll">
            <p class="section--paragraph__tittle"><?php echo $l->t('Benefits');?></p>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/monitoring.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>get more done</strong><br>clean interface, clean communication');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/cut.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Decrease travel costs</strong><br>meet as often as you like');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/people.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>build better relationships</strong><br>Working together in real time');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/encrypted-communication.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Stay in control</strong><br>End-to-end encrypted calls on your own server');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/manual.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Easy to get started</strong><br>Install, invite & call with one click');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2 featureblock">
                    <div class="icon">
                        <div class="scaling-svg-container">
                            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/icons/mobile.svg"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-10 featureblock">
                    <p class="section--paragraph"><?php echo $l->t('<strong>Be mobile</strong><br>Mobile clients & browser support');?></p>
                </div>
			</div>
        </div>
</div>
</section>

<section class="section--introduction">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Private, group and public calls');?></p>
			<p class="section--paragraph"><?php echo $l->t('Video calls makes it easy to call customers and partners in one-to-one or group-scenarios.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Users can invite external chat participants with an URL into public rooms on the Nextcloud server.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The chat on the right hand side enables participants to easily exchange messages, links and notes.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-screenshare-nw.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-screenshare-nw.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Webinars and presentations');?></p>
			<p class="section--paragraph"><?php echo $l->t('Share the content of a single window or a full desktop screen for presentations with chat-partners.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Manage participants by inviting, muting or removing them.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Schedule meetings and be notified when they start.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-two-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-two-nw.png" class="img-responsive featureimg" /></a>
		</div>
	<div class="col-md-6 revealOnScroll">
		<p class="section--paragraph__tittle"><?php echo $l->t('Secure and private');?></p>
		<p class="section--paragraph"><?php echo $l->t('Calls are end-to-end encrypted so no communication can be intercepted.');?></p>
		<p class="section--paragraph"><?php echo $l->t('Chat logs are stored securely on your own server.');?></p>
		<p class="section--paragraph"><?php echo $l->t('The privacy of communication and its metadata is guaranteed by self-hosting Nextcloud Talk!');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--getmobile">
    <div class="container-fluid quote">
        <h2 class="text-center"><?php echo $l->t('Get the mobile apps now!');?></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 featureblock revealOnScroll">
                    <div class="row text-center">
                        <div class="col-sm-4 mobileclientbuttons">
                            <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png"></a>
                        </div>
                        <div class="col-sm-4">
                            <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png"></a>
                        </div>
                        <div class="col-sm-4">
                            <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID; ?>">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/fdroid.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--options">
	<a name="pricing" id="pricing"></a>
<div class="container-widest">
	<div class="row introduction">
        <div class="col-lg-6 col-lg-offset-3">
            <h1 class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Enterprise Ready');?></h1>
            <p class="section--paragraph section--text--center revealOnScroll"><?php echo $l->t('The Spreed High Performance back-end for large organizations by Struktur AG offers the capacity, reliability and features enterprises need to conduct their business privately, securely and efficiently.');?></p>
		</div>
	</div>
    <div class="row revealOnScroll">
        <div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/spreed-two-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Remove obstacles');?></p>
				<p class="section--paragraph"><?php echo $l->t('Improved connectivity behind firewalls and restrictive networks and unlimited participants on a call');?></p>
			</div>
        </div>
        <div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/spreed-two-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Dial-in anywhere');?></p>
				<p class="section--paragraph"><?php echo $l->t('Let participants join through a dial-in conference line, wherever they are');?></p>
			</div>
        </div>
        <div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/spreed-two-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Get started quickly');?></p>
				<p class="section--paragraph"><?php echo $l->t('Remote installation support from a certified Nextcloud engineer');?></p>
			</div>
        </div>
	</div>
</div>
</section>

<section class="section--contact quote">
<div class="container">
    <div class="row revealOnScroll">
        <h2 class="text-center"><?php echo $l->t('Pricing');?></h2>
        <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('Spreed High Performance back-end');?></p>
        <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('providing MCU, STUN, TURN and SIP gate');?></p>
    </div>
    <div class="row">
        <div class="col-sm-6 revealOnScroll">
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('
            Starting at Eur 5000/USD 6000 per year plus
            <ul>
                <li>Eur 50/USD 60 per user per year at 50 users</li>
                <li>Eur 25/USD 30 per user per year at 500 users</li>
            </ul>
            further volume discounts at larger user numbers
            ');?></p>
        </div>
        <div class="col-sm-6 revealOnScroll">
            <div class="text-center morebuttondiv">
                <a href="/buy" class="button button-button--large button--arrow"><?php echo $l->t('Contact sales for a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
        </div>
    </div>
</div>
</section>
