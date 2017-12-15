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
                <p class="section--paragraph text-center"><?php echo $l->t('<span class="avoidwrap">Meetings with colleagues, customers, friends or family</span> - <span class="avoidwrap">have a private conversation with one click.</span>');?></p>
                <div class="text-center">
                    <!--<a href="install/#install-clients" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>-->
                </div>
			</div>
		</div>
	</div>
</section>



<section class="section--benefits">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png" class="img-responsive" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Designed to not to be in your way');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud Talk lowers the barrier for communication and lets you connect any time, any where, on any device. Nextcloud Talk is on-premise hosted and fully end-to-end encrypted, making sure you stay in control!');?></p>
		</div>
	</div>
	<div class="row list">
        <div class="col-md-6 revealOnScroll">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/clients/mobile/android.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/clients/mobile/android.png" class="img-responsive" /></a>
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





<section class="section--features">
<div class="container-fluid quote">
    <div class="container">
        <h2 class="text-center revealOnScroll"><?php echo $l->t('Key Features');?></h2>
        <div class="row">
            <div class="col-md-4 revealOnScroll">
                <p class="section--paragraph"><?php echo $l->t('<ul>
                <li>Web audio/video</li>
                <li>Screen Sharing</li>
                <li>Side chat</li>
                </ul>');?></p>
            </div>
            <div class="col-md-4 revealOnScroll">
                <p class="section--paragraph"><?php echo $l->t('<ul>
                <li>HD video conferencing</li>
                <li>Moderation</li>
                <li>Mobile apps for Android and iOS</li>
                </ul>');?></p>
            </div>
            <div class="col-md-4 revealOnScroll">
                <p class="section--paragraph"><?php echo $l->t('<ul>
                <li>Calendar and reminders</li>
                <li>Unlimited meetings</li>
                <li>Public and private meetings</li>
                </ul>');?></p>
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
			<p class="section--paragraph"><?php echo $l->t('Video calls enables you to call your friends, customers and partners in one-to-one or group-scenarios. You can also invite external chat participants with an URL into public rooms on your Nextcloud.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-screenshare-nw.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-screenshare-nw.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Webinars and presentations');?></p>
			<p class="section--paragraph"><?php echo $l->t('Share a single window or your full desktop screen content for presentations with your chat-partners.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Schedule meetings and be notified when they start.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-two-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-two-nw.png" class="img-responsive featureimg" /></a>
		</div>
	<div class="col-md-6 revealOnScroll">
		<p class="section--paragraph__tittle"><?php echo $l->t('Secure and private');?></p>
		<p class="section--paragraph"><?php echo $l->t('Calls are end-to-end encrypted so no communication can be intercepted. By running Nextcloud Talk on your own server, you can ensure the privacy of your calls.');?></p>
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
                        <div class="col-xs-4 mobileclientbuttons">
                            <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png"></a>
                        </div>
                        <div class="col-xs-4">
                            <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png"></a>
                        </div>
                        <div class="col-xs-4">
                            <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/fdroid.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--options">
	<a name="options" id="options"></a>
<div class="container-widest">
	<div class="introduction">
		<h1 class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Enterprise options');?></h1>
		<p class="section--paragraph section--text--center revealOnScroll"><?php echo $l->t('Extend Nextcloud Talk to service your needs');?></p>
	</div>
    <div class="row revealOnScroll">
        <div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/spreed-two-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Improved Connectivity');?></p>
				<p class="section--paragraph"><?php echo $l->t('Connect participants even behind complicated firewalls or restrictive networks');?></p>
			</div>
        </div>
        <div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/spreed-two-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Dial-in Conference line');?></p>
				<p class="section--paragraph"><?php echo $l->t('Let participants join through a dial-in conference line, wherever they are');?></p>
			</div>
        </div>
        <div class="col-md-4">
			<div class="featureblock">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/spreed-two-nw.png">
				<p class="section--paragraph__tittle"><?php echo $l->t('Unlimited participants');?></p>
				<p class="section--paragraph"><?php echo $l->t('Increase the limit of participants in your webinar or meeting from dozens to thousands!');?></p>
			</div>
        </div>
	</div>
</div>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock revealOnScroll">
				<p class="section--paragraph text-center "><?php echo $l->t('Contact our sales team to learn more.');?></p>
				<div class="text-center morebuttondiv">
					<a href="/buy" class="button button--large button--arrow"><?php echo $l->t('Contact sales');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
