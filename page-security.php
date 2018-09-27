<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Nextcloud Server Changelog</h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">

<?php get_template_part('templates/parts/title'); ?>
<div class="sub-nav"><a class="hyperlink" href="<?php echo home_url('security/advisories') ?>"><?php echo $l->t('Security Advisories');?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="hyperlink" href="<?php echo home_url('security/threat-model') ?>"><?php echo $l->t('Threat Model');?></a>
</div>
<h2><?php echo $l->t('Security information');?></h2>
<p><?php echo $l->t('This page hosts our security policies and information with regards to reporting security flaws. Learn more about how Nextcloud offers the');?> <a class="hyperlink" href="<?php echo home_url('secure') ?>"><?php echo $l->t('best security in the open source file sync and share industry here</a>. You can');?> <a class="hyperlink" href="<?php echo get_template_directory_uri(); ?>/advisories/advisories.rss"><?php echo $l->t('follow our advisories via RSS</a>.');?></p>
<p><?php echo $l->t('For server owners, our documentation has a section with');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?><?php echo $l->t('configuration_server/harden_server.html" target="_blank">best practices and tips on securing a Nextcloud server</a>.');?></p>

<div class="row">
	<div class="span12">
		<p><?php echo $l->t('If you have discovered a security issue with Nextcloud, please read our responsible disclosure guidelines and contact us at <a class="hyperlink" href="https://hackerone.com/nextcloud"><strong>hackerone.com/nextcloud</strong></a>. Your report should include:');?></p>
		<ul>
			<li><?php echo $l->t('Product version');?></li>
			<li><?php echo $l->t('A vulnerability description');?></li>
			<li><?php echo $l->t('Reproduction steps');?></li>
		</ul>

		<p><?php echo $l->t('A member of the security team will confirm the vulnerability, determine its impact, and develop a fix. The fix will be applied to the master branch, tested, and packaged in the next security release. The vulnerability will be publicly announced after the release. Finally, your name will be added to the <a href="https://hackerone.com/nextcloud/thanks">hall of fame</a> as a thank you from the entire Nextcloud community. Note our');?> <a class="hyperlink" href="<?php echo home_url('security/threat-model') ?>"><?php echo $l->t('threat model</a> to know what is expected behavior.');?></p>

		<h3><?php echo $l->t('PGP Key for Submissions');?></h3>
		<p><?php echo $l->t('In order to facilitate secure submission of security issues, we provide the <a class="hyperlink" href="https://pgp.mit.edu/pks/lookup?op=get&search=0xD75899B9A724937A">following PGP key</a> for confidential submission:');?></p>
		<ul>
			<li><?php echo $l->t('Key ID: <code>A724937A</code>
			');?></li>
			<li><?php echo $l->t('Fingerprint: <code>2880 6A87 8AE4 23A2 8372  792E D758 99B9 A724 937A</code>
			');?></li>
		</ul>

		<p><?php echo $l->t('We do however recommend to not encrypt the information submitted via HackerOne as only a small subset of the team has access to this key.');?></p>

		<h3><?php echo $l->t('Responsible Disclosure Guidelines');?></h3>
		<p><?php echo $l->t('The Nextcloud community kindly requests that you comply with the following guidelines when researching and reporting security vulnerabilities:');?></p>
		<ul>
			<li><?php echo $l->t('Only test for vulnerabilities on your own install of Nextcloud Server');?></li>
			<li><?php echo $l->t('Confirm the vulnerability applies to a supported product version');?></li>
			<li><?php echo $l->t('Share vulnerabilities in detail only with the security team');?></li>
			<li><?php echo $l->t('Allow reasonable time for a response from the security team');?></li>
			<li><?php echo $l->t('Do not publish information related to the vulnerability until Nextcloud has made an announcement to the community');?></li>
		</ul>

		<h3><?php echo $l->t('Supported Product Versions');?></h3>
		<p><strong><?php echo $l->t('Nextcloud Server:');?></strong></p>
		<ul>
            <li><?php echo $l->t('14.0.x (latest release)');?></li>
			<li><?php echo $l->t('13.0.x (latest release)');?></li>
			<li><?php echo $l->t('12.0.x (latest release)');?></li>
		</ul>

		<p><?php echo $l->t('You will find our Maintenance and Release Schedule <a class="hyperlink" href="https://github.com/nextcloud/server/wiki/Maintenance-and-Release-Schedule">on GitHub</a>. Please have a close look into the End of Life-section.');?></p>

		<p><?php echo $l->t('If you want to continue to use versions, which reached their End of Life, please');?> <a class="hyperlink" href="<?php echo home_url('enterprise/buy/') ?>"><?php echo $l->t('contact Nextcloud sales</a> to get access to our Long Term Support offering.');?></p>

        <p><strong><?php echo $l->t('Nextcloud Desktop Clients:');?></strong></p>
		<ul></p>
			<li><?php echo $l->t('Latest release on');?> <a class="hyperlink" href="https://download.nextcloud.com/desktop/releases/"><?php echo $l->t('our download servers</a>');?></li>
		</ul>

		<p><strong><?php echo $l->t('Nextcloud Android Clients:');?></strong></p>
		<ul></p>
			<li><?php echo $l->t('Latest release of');?> <a class="hyperlink" href="https://play.google.com/store/apps/details?id=com.nextcloud.client">Nextcloud Files</a> <?php echo $l->t('in the Google Play Store');?></li>
            <li><?php echo $l->t('Latest release of');?> <a class="hyperlink" href="https://play.google.com/store/apps/details?id=com.nextcloud.talk2">Nextcloud Talk</a> <?php echo $l->t('in the Google Play Store');?></li>
		</ul>

    	<p><strong><?php echo $l->t('Nextcloud iOS Clients:');?></strong></p>
		<ul></p>
			<li><?php echo $l->t('Latest release of');?> <a class="hyperlink" href="https://itunes.apple.com/app/nextcloud/id1125420102?mt=8">Nextcloud Files</a> <?php echo $l->t('in the App Store');?></li>
            <li><?php echo $l->t('Latest release of');?> <a class="hyperlink" href="https://itunes.apple.com/app/nextcloud-talk/id1296825574?mt=8">Nextcloud Talk</a> <?php echo $l->t('in the App Store');?></li>
		</ul>
	</div>
</div>
</div>
</section>
