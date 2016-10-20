<div class="row page-content-header">
	<div class="col-md-5">
		<h1><?php echo $l->t('Security Advisories');\?></h1>
	</div>
	<div class="col-md-5 col-md-offset-2">
		<form role="form" action="/security/advisory/" method="get">
			<input name="id" type="text" class="form-control" placeholder="Advisory identifier">
			<button type="submit" class="btn btn-default">Go</button>
		</form>
	</div>
</div>
<div class="sub-nav"><a href="/security">Security page</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/security/threat-model">Threat Model</a></div>
<div style="margin-top: 20px;"><p><?php echo $l->t('You can <a href="<?php echo get_template_directory_uri(); ?>/advisories/advisories.rss">follow our advisories via RSS</a>.');\?></p></div>
<div class="row" style="
    margin-top: 20px;
">
	<div class="col-md-4">
		<h2><?php echo $l->t('Nextcloud Server');\?></h2><br>
		<?php get_template_part('advisories/server-list-part');\?> ?>
	</div>
	<div class="col-md-4">
		<h2><?php echo $l->t('Desktop Clients');\?></h2><br>
                <?php get_template_part('advisories/desktop-list-part');\?> ?>	
	</div>
	<div class="col-md-4">
		<h2><?php echo $l->t('Mobile Clients');\?></h2><br>
                <?php get_template_part('advisories/mobile-list-part');\?> ?> 
	</div>
</div>
