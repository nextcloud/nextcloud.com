<head>
<link class="hyperlink" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/about.css" rel="stylesheet">
<script>
require(["require.config"], function() {
	require(["modules/youtubePlayer"])
});
</script>

</head>


<section class="hero-section second-menu">
	<div class="background about-background">
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('You should control your data');?></h1>
				<h2><?php echo $l->t('We help you achieve that: a safe home for all your data. Secure, under your control and developed in an open, transparent and trustworthy way. <strong>We are Nextcloud</strong>.');?></h2>
			</div>
		</div>
	</div>
</section>

<section class="section--about">
	<div class="container">
		<p class="section--paragraph"><?php echo $l->t('Nextcloud, the next generation open source Enterprise File Sync and Share was started by ownCloud inventor <a class="hyperlink" href="https://karlitschek.de">Frank Karlitschek</a> and a dozen experienced open source entrepreneurs and engineers to empower users to take back control over their data and communication. The company was launched in 2016 as a spin-off from <a class="hyperlink" href="https://struktur.de" target="_blank">Struktur AG</a>, a leading web conferencing and financial planning software company since 1995, servicing customers like Deutsche Bank, Vodafone, BNP Paribas and many others, and turned profitable by the end of 2016. Nextcloud gives organizations fine-grained control over data access, facilitates file synchronization and sharing across devices, enables collaboration within and across organizational boundaries and lets users communicate through secure audio and video conferencing.');?></p>

		<p class="section--paragraph"><?php echo $l->t('See <a class="hyperlink" href="/features">our features page</a> for more information about what Nextcloud can do for you.');?></p>

		<h2><?php echo $l->t('User Focus');?></h2>
		<p class="section--paragraph"><?php echo $l->t('At Nextcloud, we believe that an open, transparent development process and a clear focus on the needs of users and customers results in a better product.');?></p>

		<p class="section--paragraph"><?php echo $l->t('By having access to our engineers, customers get the best possible support while having an opportunity to participate in and benefit from the open source model. See <a class="hyperlink" href="/enterprise">our enterprise page</a> for more information about our Enterprise Support Subscriptions.');?></p>

		<p class="section--paragraph"><?php echo $l->t('You can follow what we are up to <a class="hyperlink" href="/news">in our blogs</a> and join the <a class="hyperlink" href="https://help.nextcloud.com">conversations on our forums.</a>');?></p>

		<h2><?php echo $l->t('History');?></h2>
		<p class="section--paragraph"><?php echo $l->t('Our launch has been covered extensively in the media and we\'ve been interviewed, explaining the why, how and what behind our endeavor. In short, 12 developers, most of the engineering team, left ownCloud because we believed a better solution was possible for users, customers and fellow contributors. We see a business as an important part of the open source ecosystem around a project. Its role is to act as a catalyst, enabling individuals and businesses to grow and participate. It is in the nature of open source that a company failing to play this role can be replaced, protecting customers from vendor lock-in.');?></p>

		<p class="section--paragraph"><?php echo $l->t('Subsequent events, including Nextcloud becoming the <a class="hyperlink" href="https://nextcloud.com/?p=1222">most active open source file sync and share project</a> backed by our <a class="hyperlink" href="https://nextcloud.com/?p=1343">healthy, profitable business</a> and the <a class="hyperlink" href="https://nextcloud.com/blog/join-our-hackathon-january-23-27/">hugely positive response to our Nextcloud 11 release</a>, have proven us right. With Nextcloud 12, we\'ve extended our technological lead and are charting new territory with <a class="hyperlink" href="https://nextcloud.com/globalscale">Global Scale</a>, a new architecture for near unlimited scalability.');?></p>

		<p class="section--paragraph"><?php echo $l->t('Watch the videos and interviews below to learn more about what happened.');?></p>
		<div class="row newsrow">
			<div class="col-md-4">
				<a class="hyperlink" href="http://www.techrepublic.com/article/nextcloud-11-cloud-server-an-impressive-security-focused-update/" target="_blank" title="Techrepublic on Nextcloud 11">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/techrepublic.png" title="Techrepublic on Nextcloud 11"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="http://www.cio.com/article/3150864/open-source-tools/nextcloud-is-the-open-source-answer-to-mass-surveillance.html" target="_blank" title="CIO on Nextcloud 11">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/cio-on-11.png" title="CIO on Nextcloud 11"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="http://www.zdnet.com/article/nextcloud-adds-security-and-scalability-to-its-private-cloud-offering/" target="_blank" title="ZDNet on Nextcloud 11">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/zdnet-on-11.png" title="ZDNet on Nextcloud 11"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="http://www.eweek.com/cloud/nextcloud-improves-security-adds-enterprise-support.html" target="_blank" title="eWeek on the fork">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/eweek.png" title="eWeek on the fork"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="http://www.zdnet.com/article/nextcloud-releases-owncloud-fork-ahead-of-schedule/" target="_blank" title="ZDNet on the fork">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/ZDNet.png" title="ZDNet on the fork"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="http://thenewstack.io/story-behind-nextcloud/" target="_blank" title="TheNewStack on the fork">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/thenewstack.png" title="TheNewStack on the fork"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="http://fortune.com/2016/06/03/what-happened-to-owncloud/" title="Fortune on the fork">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/fortune.png" target="_blank" title="Fortune on the fork"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="http://www.cio.com/article/3079866/open-source-tools/what-we-can-learn-from-ownclouds-collapse.html" target="_blank" title="CIO on the fork">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/cio_logo.png" title="CIO on the fork"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="http://www.theregister.co.uk/2016/07/28/open_source_insider_open_source_forkery/" target="_blank" title="Fork You - the Register analysis">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/TheRegister.png" title="Fork You - the Register analysis"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="https://www.radiotux.de/index.php?/archives/8015-RadioTux-Sendung-Juni-2016.html" target="_blank" title="RadioTux interview (German)">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/radiotux.png" title="Radio Tux interview"/>
				</a>
			</div>
			<div class="col-md-4">
                <div data-type="youtube" data-video-id="Yjqd7MX434I?start=2678"></div>
			</div>
			<div class="col-md-4">
                <div data-type="youtube" data-video-id="rAXf8SGAXFE?start=2173"></div>
			</div>
			<div class="col-md-4">
                <div data-type="youtube" data-video-id="iMfokaX2r8g"></div>
			</div>
		</div>
	</div>
</section>
<section>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center"><?php echo $l->t('Our newsletter');?></h2>
			<p class="section--paragraph text-center"><?php echo $l->t('Stay up to date with Nextcloud news – future plans for releases, events and development are covered monthly in our news letter.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('<a href="https://newsletter.nextcloud.com/?p=subscribe&id=1" class="button button--large button--blue button--arrow">Subscribe</a>');?></p>
		</div>
	</div>
</div>
</section>
<section>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p class="section--paragraph"><?php echo $l->t('Disclaimer: </br>
			<small>All product names and trademarks are the property of their respective owners, which might in no way be associated or affiliated with Nextcloud.<br />
			Nextcloud is not responsible for the content of the linked articles.</small>');?></p>
		</div>
	</div>
</div>
</section>
