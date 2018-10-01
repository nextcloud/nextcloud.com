<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1><?php echo $l->t('Security Advisories');?></h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
<div class="row page-content-header">
	<div class="col-md-5 col-md-offset-2">
		<form role="form" action="/security/advisory/" method="get">
			<input name="id" type="text" class="form-control" placeholder="Advisory identifier">
			<button type="submit" class="btn btn-default">Go</button>
		</form>
	</div>
</div>
<div class="sub-nav"><?php echo $l->t('<a href="/security">Security page</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/security/threat-model">Threat Model</a>');?></div>
<div style="margin-top: 20px;"><p><?php echo $l->t('You can <a href="/advisories/advisories.rss">follow our advisories via RSS</a>.');?></p></div>
<div class="row" style="
    margin-top: 20px;
">
	<div class="col-md-12">
		<?php get_template_part('advisories/full-list');?>
	</div>
</div>
</div>
</section>
