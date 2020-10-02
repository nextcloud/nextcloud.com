<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/dashboard.css?v=1" rel="stylesheet">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta name=”Description” content="Integrated email communication in Nextcloud.">
</head>
<div class="background dashboard-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Dashboard');?></h1>
				<h2><?php echo $l->t('A great way to start your day');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--features">
	<div class="container">
        <div class="row ">
            <div class="col-md-6 image--floated image--feature">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/dashboard_change_background.gif"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/dashboard_change_background.gif" alt="changing background" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__tittle"><?php echo $l->t('Start your day informed');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Dashboard is your starting point of the day, giving you an overview of your upcoming appointments, urgent emails, chat messages, incoming tickets, latest tweets and much more! Users can add the widgets they like and change the background to their liking.');?></p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6 image--feature">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/status.gif"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/status.gif" alt="Set your status" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__tittle"><?php echo $l->t('Set your status');?></h3>
                <p class="section--paragraph"><?php echo $l->t('On top of the dashboard, users can set their status, to show to colleagues what they are up to - traveling, working from home, concentrating, and so on. This status is then visible in Talk and other apps.');?></p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6 image--floated image--feature">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/dashboard_add_widgets.gif"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/dashboard_add_widgets.gif" alt="adding widgets" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__tittle"><?php echo $l->t('Configure the dashboard');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Many dashboard widgets can be found in our app store. After installation, users can easily add the widget to their dashboard. Some widgets require external services to be connected, which can be done from the settings.');?></p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6 image--feature">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/dashboard_configure_twitter.gif"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/dashboard_configure_twitter.gif" alt="configure twitter" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__tittle"><?php echo $l->t('Many widgets available');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Social media (Twitter, Mastodon, Reddit, Discourse)');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud apps (Files, Talk, Calendar, Deck, Mail, Notes)');?></p>
                <p class="section--paragraph"><?php echo $l->t('Developer tools (Github, Jira, Gitlab, Zammad)');?></p>
                <p class="section--paragraph"><?php echo $l->t('And more like Moodle, Data Analysis and so on');?></p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6 image--feature">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/dashboard_re-arrange_widgets.gif"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/dashboard_re-arrange_widgets.gif" alt="re-arranging widgets" /></a><br />
                    <?php echo $l->t('Move the widgets where you want them!');?>
            </div>
            <div class="col-md-6 image--feature">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/dashboard_view_files.gif"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/dashboard_view_files.gif" alt="viewing files" /></a><br />
                    <?php echo $l->t('View and edit files directly from the dashboard');?>
            </div>
        </div>
	</div>
</section>
