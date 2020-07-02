<section class="section--on-premise">
<div class="container">
	<h1 class="section--heading-1 text-center"><?php echo $l->t('Why self hosting?');?></h1>
	<div class="row">
		<div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('You need 100% certainty');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Sending around data by email or using public SaaS file sharing solutions does not provide much security for sensitive data. Encryption is complicated and cumbersome to use, reducing the real benefits due to employees working around them or making mistakes.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Keeping data on your own infrastructure or at a trusted local private or public cloud provider means you stay in control. Only then can you show your customers exactly where their sensitive documents are. Regulators can be certain that non-compliance with proper process is minimized.');?></p>
			<a href="https://nextcloud.com/blog/the-issue-with-public-cloud/" class="button button--blue button--arrow button--large"><?php echo $l->t('Read our blog for more');?></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('SaaS is a risky solution');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Most consumer-grade solutions like Dropbox or Office 365 were not designed with privacy regulations and security concerns in mind, mixing data from consumers and businesses, spread out in data centers across the globe.');?> <?php echo $l->t('Enterprise IT workloads may be processed by Cloud Providers liable to the US CLOUD Act, meaning your business data can be leaked on orders of the US judicial system, often without disclosure to you.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Rather than trying to work around their limitations, Nextcloud provides a security-first solution which puts you in complete control over the location and access policies of data with a private cloud solution as well as a managed public cloud solution offered by local and trusted providers.');?></p>
			<a href="<?php echo home_url('buy') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Get started now');?> <i class="icon-arrow-circle-o-right icon"></i></a>
        </div>
	</div>
</div>
</section>

<!-- Usage:  <[]?php require get_template_directory().'/onpremises.php';?[]>  without the [] characters!-->

