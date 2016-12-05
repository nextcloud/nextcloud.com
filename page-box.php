<script src="<?php echo get_template_directory_uri(); ?>/assets/js/box.js"></script>

<section class="section-top-jumbotron">
	<div class="container">
		<h2 class="section--heading-1 section--text--center text-center introText"><?php echo $l->t('Introducing the Nextcloud Box');?></h2>
		<div class="box introImage"></div>
	</div>
</section>

<section class="section-data-home">
	<div class="container">
		<div class="col-xs-8 col-centered">		
		<h2 class="section--heading-1 section--text--center  revealOnScroll"><?php echo $l->t('Bring your data home');?></h2>
		<p class="section--intro section--text--center  revealOnScroll"><?php echo $l->t('The Nextcloud Box is your private cloud. It stores your data and enables 
		you to sync between your devices and share with others.');?></p>
		<a class="button button--blue button--arrow button--large revealOnScroll" href="<?php echo home_url('features') ?>" role="button"><?php echo $l->t('Know Nextcloud</a>');?>
		</div>
	</div>
</section>

<section class="section-tecnology">
	<div class="container">
		<div class="box-open col-md-7 revealOnScroll"></div>
		<div class="wrapper-text col-md-5 revealOnScroll">
			<h2><?php echo $l->t('Technology');?></h1>
			<h6><?php echo $l->t('The Nextcloud box consists of the following parts:');?></h6>
			<ul>
			<li><?php echo $l->t('1 TB USB3 hard drive from WDLabs');?></li>
			<li><?php echo $l->t('Nextcloud case with room for the drive and a compute board');?></li>
			<li><?php echo $l->t('microUSB charger, cables and adapters, a screw driver and screws');?></li>
			<li><?php echo $l->t('microSD card with Snappy Ubuntu Core as OS, including Apache, MySQL and the latest Nextcloud 10 pre-installed and ready to go');?></li>
			</ul>
			<p><?php echo $l->t('The Box does not come with a Raspberry Pi.');?></p>
			<p><?php echo $l->t('The Box is hardware-compatible with the Raspberry Pi 2 and 3, and the oDroid C2.');?></p>
			<p><?php echo $l->t('Right now, the OS only works with the Raspberry Pi 2. Software support for Raspberry Pi 3 is planned for November 2016. There is no plan for oDroid C2 yet but Linux Kernel 4.10 has support planned for the hardware so first half 2017 is a reasonable guess.');?></p>
			<p><?php echo $l->t('Note that by default, the Nextcloud Box only works on the network it is connected to (like your home LAN). It requires configuration of encryption (https) and router ports to reach it from outside your home network.');?></p>
		</div>
	</div>
</section>

<section class="section-getbox">
	<div class="container">
		<div class="row">
		<div class="wrapper-text col-md-4">
			<h2 class="section--title revealOnScroll"><?php echo $l->t('Get the box');?></h2>
			<p class="section--intro revealOnScroll"><?php echo $l->t('Currently you can only purchase the Nextcloud Box in Europe and the USA. We are working on bringing the box to other regions!');?></p>
			<div class="button button--blue button--dropdown">
				<input class="dropdown-toggle" type="text">
				<div class="dropdown-text">Select your country</div>
				<ul class="dropdown-content">
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823500" target="_blank">Buy in the USA </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823600" target="_blank">Buy in the UK </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823700" target="_blank">Buy in Germany </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823800" target="_blank">Buy in Spain </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823900" target="_blank">Buy in France </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828824000" target="_blank">Buy in Italy </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828824100" target="_blank">Buy in the Netherlands </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4832872800" target="_blank">Buy in rest of Europe </a>');?></li>
				</ul>
			</div>
			
			<!--<div class="btn-group">
				<button type="button" data-toggle="dropdown" class="btn btn-primary buybutton dropdown-toggle revealOnScroll" aria-expanded="false"><?php echo $l->t('Select your country');?> &nbsp;<span class="caret"></span></button>
				<ul role="menu" class="dropdown-menu">
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823500" target="_blank">Buy in the USA </a>');?></li>
					<li><?php echo $l->t('<a href=" http://shop.wdc.com/promo/4828823600" target="_blank">Buy in the UK </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823700" target="_blank">Buy in Germany </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823800" target="_blank">Buy in Spain </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828823900" target="_blank">Buy in France </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828824000" target="_blank">Buy in Italy </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4828824100" target="_blank">Buy in the Netherlands </a>');?></li>
					<li><?php echo $l->t('<a href="http://shop.wdc.com/promo/4832872800" target="_blank">Buy in rest of Europe </a>');?></li>
				</ul>
			</div>-->
		</div>
		<div class="box-perspective col-md-8 revealOnScroll"></div>
		</div>
	</div>
</section>

<section class="section-how-to-box">
	<div class="container">
		<div class="col-xs-8 col-centered">
			<h2 class="section--heading-2 section--text--center revealOnScroll"><?php echo $l->t('How to Box');?></h2>
			<p class="section--intro section--text--center revealOnScroll"><?php echo $l->t('The Nextcloud Box is very easy to assemble. It comes with all necessary screws and a screwdriver. The lid uses magnets (magic!) so you can quickly open and close it.');?></p>
			<div class="assembly revealOnScroll"></div>
			<a class="button button--blue button--arrow button--large revealOnScroll" href="<?php echo get_template_directory_uri(); ?>/assets/files/Box-Assembly-Guide.pdf" role="button"><?php echo $l->t('Download PDF</a>');?>
		</div>

	</div>
</section>

<section class="section-wiki-forums">
	<div class="container">
		<div class="col-xs-8 col-centered">
			<h3 class="section--heading-2 text-center revealOnScroll"><?php echo $l->t('Nextcloud Box Wiki and Forums');?></h3>
			<p class="section--intro text-center revealOnScroll"><?php echo $l->t('You can find a lot of information, tips and tricks on configuring your Nextcloud Box on our wiki; discuss the Box and ask questions on our forums.');?></p>
			<p class="section--intro text-center revealOnScroll"><?php echo $l->t('If you are interested in contributing to the software of the Box, you can <a class="hyperlink" href="https://github.com/nextcloud/nextcloud-snap">find the Nextcloud Snap here</a> - we look forward to your pull request. Find us on IRC in <a class="hyperlink" href="irc://#nextcloud-dev@freenode.net" target="_blank">the Nextloud development IRC chat channel</a> on freenode.net, also accessible via <a class="hyperlink" href="https://webchat.freenode.net/?channels=nextcloud-dev" target="_blank">webchat.</a>');?></p>
			<div class="wrapper-buttons">
				<a class="button button--blue button--arrow button--large" href="https://help.nextcloud.com/t/the-great-nextcloud-box-topic/3510" role="button"><?php echo $l->t('Help on forum</a>');?>
				<a class="button button--blue button--arrow button--large" href="https://github.com/nextcloud/nextcloud-snap/wiki" role="button"><?php echo $l->t('Manual on Wiki</a>');?>
			</div>
		</div>
	</div>
</section>

<section class="section-partners">
	<div class="container">
		<div class="col-xs-8 col-centered">
			<h3 class="section--heading-2 text-center revealOnScroll"><?php echo $l->t('Partners');?></h3>
			<p class="section--intro text-center revealOnScroll"><?php echo $l->t('The Nextcloud Box was developed in a partnership with WDLabs and Canonical and is one of');?> <a class="hyperlink" href="<?php echo home_url('devices') ?>"><?php echo $l->t('multiple devices</a> from Nextcloud partners. It is a reference device, meant to inspire and invite anyone to build their own. <a class="hyperlink" href="/contact">Get in contact</a> if you\'re interested in building a Nextcloud Box like device!');?></p>
			<div class="wrapper-images">
				<a target="_blank" href="http://wdlabs.wd.com/products/wd-pidrive-1tb-kit/"><div class="logo-wd"></div></a>
				<a target="_blank" href="https://developer.ubuntu.com/en/snappy/"><div class="logo-ubuntu"></div></a>
			</div>
		</div>
	</div>
</section>
