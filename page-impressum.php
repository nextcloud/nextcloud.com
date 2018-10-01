<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1><?php echo $l->t('Legal Notice');?></h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
<p><address>Nextcloud GmbH<br/>
Hirschstrasse 26<br/>
70173 Stuttgart Germany<br/></address>
HRB 227086 (AG München)<br/>
T +49 711 25 24 28 90<br/>
<a href="<?php echo home_url('contact') ?>"><?php echo $l->t('contact form');?></a><br/>
</p>
<p>
Managing Director:<br/>
Frank Karlitschek<br/></p>

<p><?php echo $l->t('<small>All product names and trademarks are the property of their respective owners, which might in no way be associated or affiliated with Nextcloud.</small>');?></p>
</div>
</section>
