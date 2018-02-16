<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/modules/vertical.css" rel="stylesheet">
</head>
<section class="section--vertical">
<div class="container">
    <div class="row">
        <h2 class="text-center revealOnScroll"><?php echo $l->t('Serving your needs');?></h2>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 revealOnScroll">
            <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud is committed to provide technology that is a perfect fit for your organization!');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 revealOnScroll">
			<a href="<?php echo home_url('healthcare') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/headers/healthcare-small.jpg" /></a>
			<div class="row text-center description">
                <p class="section--paragraph__tittle"><?php echo $l->t('Healthcare');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud provides the highest security for protected health information.');?> <a href="<?php echo home_url('healthcare') ?>"><?php echo $l->t('learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a></p>


            </div>
		</div>
		<div class="col-md-3 revealOnScroll">
			<a href="<?php echo home_url('education') ?>" ><img src="<?php bloginfo('template_directory'); ?>/assets/img/headers/education-small.jpg" class="img-responsive" /></a>
			<div class="row text-center description">
                <p class="section--paragraph__tittle"><?php echo $l->t('Education');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud has unique features for research and academic institutions.');?> <a href="<?php echo home_url('education') ?>" ><?php echo $l->t('learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a></p>
            </div>
		</div>
		<div class="col-md-3 revealOnScroll">
			<a href="<?php echo home_url('agencies') ?>" ><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/headers/media-small.jpg" /></a>
			<div class="row text-center description">
                <p class="section--paragraph__tittle"><?php echo $l->t('Media and Advertising');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud provides easy and quick collaboration on large files.');?> <a href="<?php echo home_url('agencies') ?>" ><?php echo $l->t('learn more.');?> <i class="icon-arrow-circle-o-right icon"></i></a></p>

            </div>
		</div>
        <div class="col-md-3 revealOnScroll">
			<a href="<?php echo home_url('agencies') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/headers/legal-small.jpg" /></a>
			<div class="row text-center description">
                <p class="section--paragraph__tittle"><?php echo $l->t('Lawyers and Notaries');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud gives your clients the assurance that their documents stay 100% confidential.');?> <a href="<?php echo home_url('agencies') ?>"><?php echo $l->t('learn more');?> <i class="icon-arrow-circle-o-right icon"></i></a></p>

            </div>
		</div>
    </div>
</div>
</section>
