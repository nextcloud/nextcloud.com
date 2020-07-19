<head>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/support.css?v=1" rel="stylesheet">
</head>
<div class="background support-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('Find answers to your questions');?></h1>
			<h2><?php echo $l->t('We provide documentation, community help and enterprise support.');?></h2>
		</div>
	</div>
</div>

<section class="section--documentation">
<div class="container">
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center"><?php echo $l->t('Documentation');?></h2>
            <p class="section--paragraph"><?php echo $l->t('The Nextcloud documentation:');?></p>
            <ul>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>"><?php echo $l->t('Admin manual');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_USER; ?>"><?php echo $l->t('User manual');?></a></li>
                <li><a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>"><?php echo $l->t('Developer manual');?></a></li>
            </ul>
            <p class="section--paragraph"><?php echo $l->t('Customers can log in to our customer portal with their credentials for additional information on scalability and performance for large instances, enterprise database configuration tuning and more. Access our');?> <a class="hyperlink" href="https://portal.nextcloud.com" target="_blank"><?php echo $l->t('Customer Portal here.');?></a></p>
            <p class="section--paragraph"><?php echo $l->t('Not a customer? Improve team productivity now with the leading content collaboration platform.');?></p>
             <a href="<?php echo home_url('buy') ?>" class="button button--white button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
        </div>
    </div>
</div>
</section>

<section class="section--options">
<div class="container">
	<h2 class="text-center">Support options</h2>
	<div class="row">
		<div class="col-md-4">
			<div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/family.svg" /></div>
			<h3 class="section--paragraph__title"><?php echo $l->t('Help for home users');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Home users can ask for help in our forums.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Please understand that our forum essentially consist of users like you helping each other out. Consider helping others out where you can, to contribute back for the help you get. This is the only way to keep a community like Nextcloud healthy and sustainable!');?></p>
			<a class="button button--blue" href="https://help.nextcloud.com/categories" target="_blank"><?php echo $l->t('Forums');?></a>
		</div>
		<div class="col-md-4">
			<div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/training.svg" /></div>
            <h3 class="section--paragraph__title"><?php echo $l->t('Enterprise support');?></h4>
            <p class="section--paragraph"><?php echo $l->t('If you run Nextcloud in a mission critical environment, you need an enterprise platform. Nextcloud Enterprise is our tested and certified enterprise product for medium and large businesses, governments and educational institutes. It is backed by our support and gives access to our customer portal and consulting services.');?></a></p>
            <a class="button button--blue" href="<?php echo home_url('enterprise') ?>" target="_blank"><?php echo $l->t('Enterprise');?> </a>
		</div>
		<div class="col-md-4">
			<div class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/virusscaning.svg" /></div>
			<h3 class="section--paragraph__title"><?php echo $l->t('Reporting bugs');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Once you have found the root cause of a bug and it is an issue in Nextcloud itself, report it in our bug tracker. Please keep in mind that this is NOT a support channel and only meant for reporting confirmed issues. Code examples and debugging information is needed and support requests will be closed. Use our forums for help with debugging issues.');?></p>
			<a class="button button--blue" href="https://github.com/nextcloud/server/issues/new" target="_blank"><?php echo $l->t('report a bug');?></a>
		</div>
	</div>
</div>
</section>

<section class="section--subscribe quote">
<div class="container">
	<div class="wrap pad-bottom">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 ">
                <h2 class="newsletter text-center"><?php echo $l->t('Subscribe to our newsletter');?></h2>
                <p class="text-center"><?php echo $l->t('Stay up to date with Nextcloud news - future plans for releases, events and development are covered monthly in our news letter.');?></p>
                <p class="text-center"><a href="https://newsletter.nextcloud.com/?p=subscribe&id=1" class="button button--large"><?php echo $l->t('Subscribe now!');?></a></p>
			</div>
		</div>
	</div>
</div>
</section>
