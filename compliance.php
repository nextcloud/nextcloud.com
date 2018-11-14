<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/modules/compliance.css" rel="stylesheet">
</head>
<section class="section--compliance">
<div class="container-fluid banner quote">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="revealOnScroll"><?php echo $l->t('Compliant by design');?></h2>
            <h3 class="revealOnScroll"><?php echo $l->t('HIPAA, GDPR and more');?></h3>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud products are designed with compliance in mind, providing extensive data policy enforcement, encryption, user management and auditing capabilities.');?></p>
            <div class="row learnmore">
            <h3 class="text-center revealOnScroll"><?php echo $l->t('Learn more');?></h3>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="<?php echo home_url('healthcare') ?>"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/tools.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('Healthcare and HIPAA');?></p></a>
                    </div>
                </div>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="<?php echo home_url('gdpr') ?>"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/securitypolicies.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('GDPR Compliance Kit');?></p></a>
                    </div>
                </div>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="<?php echo home_url('monitoring') ?>"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/ldap.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('Auditing capabilities');?></p></a>
                    </div>
                </div>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="<?php echo home_url('workflow') ?>"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/firewall.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('File Access Control');?></p></a>
                    </div>
                </div>
            </div>
        </div>
        <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/medicaldevices.jpeg">
        <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/medicaldevices-small.jpeg">
    </div>
    </div>
</div>
</section>
