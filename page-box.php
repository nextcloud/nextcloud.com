
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/box.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/box.js"></script>


<section class="section-top-jumbotron">
	<div class="container">
		<h2 class="text-center introText">Introducing the Nextcloud Box</h2>
		<div class="box introImage"></div>
	</div>
</section>

<section class="section-data-home">
	<div class="container">
		<h2 class="text-center revealOnScroll">Bring your data to home</h2>
		<p class="text-center revealOnScroll">The Nextcloud Box is your private cloud. It stores your data and enables 
you to sync between your devices and share with others.</p>
		<p><a class="btn-primary revealOnScroll" href="<?php echo home_url('features') ?>" role="button"><?php
 echo $l->t('Know Nextcloud</a>');?></p>
	</div>
</section>

<section class="section-tecnology">
	<div class="container">
		<div class="box-open col-md-7 revealOnScroll"></div>
		<div class="wrapper-tex col-md-5 revealOnScroll">
			<h2>Technology</h1>
			<h6>The Nextcloud box consists of the following parts:</h6>
			<p>1 TB USB3 hard drive from WDLabs</p>
			<p>Nextcloud case with room for the drive and a compute board</p>
			<p>microUSB charger, cables and adapters, a screw driver and screws</p>
			<p>microSD card with Snappy Ubuntu Core as OS Apache, MySQL and the latest Nextcloud 10 pre-installed and ready to go</p>
			<p>The Box is compatible with the Raspberry Pi 2 and 3, and also with oDroid C2 (not included).</p>
		</div>
	</div>
</section>

<section class="section-getbox">
	<div class="container">
		<div class="wrapper-tex col-md-3">
			<h2 class="revealOnScroll">Get the box</h2>
			<p class="revealOnScroll">Currently you can only purchase the Nextcloud Box in Europe and the USA. We're working on bringing the box to other regions!</p>
			<button type="button" data-toggle="dropdown" class="btn btn-primary buybutton dropdown-toggle revealOnScroll" aria-expanded="false">Select your country &nbsp;<span class="caret"></span></button>
		</div>
		<div class="box-perspective col-md-9 revealOnScroll"></div>
	</div>
</section>

<section class="section-how-to-box">
	<div class="container">
		<h2 class="text-center revealOnScroll">How to Box</h2>
		<p class="text-center revealOnScroll">The Nextcloud Box is very easy to assemble. It comes with all necessary screws and a screwdriver. The lid uses magnets (magic!) so you can quickly open and close it.</p>
		<div class="assembly revealOnScroll"></div>
		<p><a class="btn-primary revealOnScroll" href="<?php echo home_url('#') ?>" role="button"><?php
 		echo $l->t('Download PDF</a>');?></p>
	</div>
</section>

<section class="section-wiki-forums">
	<div class="container">
		<h3 class="text-center revealOnScroll">Nextcloud Box Wiki and Forums</h3>
		<p class="text-center revealOnScroll">You can find a lot of information, tips and tricks on configuring your Nextcloud Box on our wiki; discuss the Box and ask questions on our forums. If you are interested in contributing to the software of the Box, you can find the Nextcloud Snap here - we look forward to your pull request. Find us on IRC in the Nextloud development IRC chat channel on freenode.net, also accessible via webchat</p>
		<div class="wrapper-buttons">
			<p><a class="btn-primary" href="<?php echo home_url('#') ?>" role="button"><?php
	 		echo $l->t('Help on forum</a>');?></p>
	 		<p><a class="btn-primary" href="<?php echo home_url('#') ?>" role="button"><?php
	 		echo $l->t('Manual on Wiki</a>');?></p>
		</div>
	</div>
</section>

<section class="section-partners">
	<div class="container">
		<h3 class="text-center revealOnScroll">Partners</h3>
		<p class="text-center revealOnScroll">The Nextcloud Box was developed in a partnership with WDLabs and Canonical and is one of multiple devices from Nextcloud partners. It is a reference device, meant to inspire and invite anyone to build their own. Get in contact if you're interested in building a Nextcloud Box like device!</p>
		<div class="wrapper-images">
			<div class="logo-wd"></div>
			<div class="logo-ubuntu"></div>
		</div>
	</div>
</section>