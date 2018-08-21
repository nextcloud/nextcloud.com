<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/box.css" rel="stylesheet">
	<script>
		require(["require.config"], function() {
			require(["pages/box"])
		});
	</script>
</head>
<section class="section-top-jumbotron">
	<div class="container">
		<h2 class="section--heading-1 section--text--center text-center introText"><?php echo $l->t('The Nextcloud Box');?></h2>
		<div class="box introImage"></div>
	</div>
</section>

<section class="section-data-home">
	<div class="container">
		<div class="col-xs-8 col-centered">
		<h2 class="section--heading-1 section--text--center  revealOnScroll"><?php echo $l->t('Bring your data home');?></h2>
		<p class="section--intro section--text--center  revealOnScroll"><?php echo $l->t('The Nextcloud Box is your private cloud. It stores your data and enables
		you to sync between your devices and share with others.');?></p>
		<a class="button button--blue button--arrow button--large revealOnScroll" href="<?php echo home_url('athome') ?>" role="button"><?php echo $l->t('know Nextcloud</a>');?>
		<h6 class="section--paragraph__tittle"><?php echo $l->t('Unfortunately, the box is sold out.');?></h6>
		<p class="section--paragraph revealOnScroll"><?php echo $l->t('Western Digital has shut down their <a class="hyperlink" href="https://www.digitaltrends.com/computing/wdlabs-may-close-raspberry-pi/">research team WDLabs</a> which produced the box. Read our <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-box-updates-raspberry-pi-3-nextcloud-12-and-looking-for-a-new-provider/">last status update blog on the Nextcloud Box</a> for more details.');?></p>
        <p class="section--paragraph revealOnScroll"><a class="hyperlink" href="<?php echo home_url('devices') ?>"><?php echo $l->t('Check out our devices page for alternatives.');?></a></p>
        <a class="button button--blue button--arrow button--large revealOnScroll" href="<?php echo home_url('devices') ?>" role="button"><?php echo $l->t('other devices</a>');?>
		<p class="section--paragraph revealOnScroll"><?php echo $l->t('The software for the box as well as similar solutions are still being developed by Nextcloud contributors. You can use the <a class="hyperlink" href="https://uappexplorer.com/snap/ubuntu/nextcloud">Ubuntu Snap image</a> for easy installation on small and large devices that already have an operating system. Alternatively you could use <a class="hyperlink" href="https://nextcloudpi.com">the NextcloudPi image,</a> a pre-configured Raspbian system aimed at the Raspberry Pi and other boards.');?></p>
		</div>
	</div>
</section>

<section class="section-technology">
	<div class="container">
		<div class="box-open col-md-7 revealOnScroll"></div>
		<div class="wrapper-text col-md-5 revealOnScroll">
			<h2 class="section--heading-1"><?php echo $l->t('Technology');?></h1>
			<h6 class="section--paragraph__tittle"><?php echo $l->t('The Nextcloud box consists of the following parts:');?></h6>
			<p class="section--paragraph"><?php echo $l->t('1 TB USB3 hard drive from WDLabs');?><p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud case with room for the drive and a compute board');?></p>
			<p class="section--paragraph"><?php echo $l->t('microUSB charger, cables and adapters, a screw driver and screws');?></p>
			<p class="section--paragraph"><?php echo $l->t('microSD card with Snappy Ubuntu Core as OS, including Apache, MySQL and the latest Nextcloud 10 pre-installed and ready to go');?></p>
			<p class="section--paragraph"><?php echo $l->t('<strong>The Box does not come with a Raspberry Pi.</strong>');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Box is hardware-compatible with the Raspberry Pi 2 and 3, and the oDroid C2.');?></p>
		</div>
        <div class="row">
            <div class="col-md-6">
                <p class="section--paragraph"><?php echo $l->t('The box is delivered with an OS image which only works with the Raspberry Pi 2. You can download a software image that works for the <a class="hyperlink" href="https://download.nextcloud.com/server/images/ubuntu-core-16-armhf-rpi3-installer-20170329.img">Pi 3 from our download server here</a> (<a class="hyperlink" href="https://download.nextcloud.com/server/images/ubuntu-core-16-armhf-rpi3-installer-20170329.img.md5sum">md5sum</a>). There is no support image for oDroid C2 however you can find excellent tutorials on <a class="hyperlink" href="https://www.c-rieger.de/">installing and running Nextcloud on a oDroid C2 by community member Carsten Rieger.</a>');?></p>
            </div>
            <div class="col-md-6">
                <p class="section--paragraph"><?php echo $l->t('Note that by default, the Nextcloud Box only works on the network it is connected to (like your home LAN). It requires configuration of encryption (https) and router ports to reach it from outside your home network. We provide scripts for enabling SSL using Let‘s Encrypt, see <a class="hyperlink" href="https://github.com/nextcloud/nextcloud-snap/wiki">our documentation</a>.');?></p>
            </div>
        </div>
	</div>
</section>

<section class="section-getbox">
	<div class="container">
		<div class="row">
			<div class="box-perspective col-lg-8 revealOnScroll"></div>
			<div class="wrapper-text col-lg-4">
				<h2 class="section--title revealOnScroll"><?php echo $l->t('Get the box');?></h2>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Sadly, <strong>the box is sold.</strong> Western Digital has shut down their <a class="hyperlink" href="https://www.digitaltrends.com/computing/wdlabs-may-close-raspberry-pi/">research team WDLabs</a> which produced the box. Read our <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-box-updates-raspberry-pi-3-nextcloud-12-and-looking-for-a-new-provider/">last status update blog on the Nextcloud Box</a> for more details.s');?></p>
                <p class="section--paragraph revealOnScroll"><a class="hyperlink" href="<?php echo home_url('devices') ?>"><?php echo $l->t('Check out our devices page for alternatives.');?></a></p>
				<!--<div class="button button--blue button--dropdown">
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
				</div>-->
		</div>
		</div>
	</div>
</section>

<section class="section-how-to-box">
	<div class="container">
		<div class="col-xs-8 col-centered">
			<h2 class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('How to Box');?></h2>
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
			<p class="section--intro text-center revealOnScroll"><?php echo $l->t('If you are interested in contributing to the software of the Box, you can <a class="hyperlink" href="https://github.com/nextcloud/nextcloud-snap">find the Nextcloud Snap here</a> - we look forward to your pull request. Find us on IRC in <a class="hyperlink" href="irc://#nextcloud-dev@freenode.net" target="_blank">the Nextcloud development IRC chat channel</a> on freenode.net, also accessible via <a class="hyperlink" href="https://webchat.freenode.net/?channels=nextcloud-dev" target="_blank">webchat.</a>');?></p>
			<div class="wrapper-buttons">
				<a class="button button--blue button--arrow button--large" href="https://help.nextcloud.com/c/support/appliances-docker-snappy-vm" role="button"><?php echo $l->t('Help on forum</a>');?>
				<a class="button button--blue button--arrow button--large" href="https://github.com/nextcloud/nextcloud-snap/wiki" role="button"><?php echo $l->t('Manual on Wiki</a>');?>
			</div>
		</div>
	</div>
</section>

<section class="section-video">
	<div class="container">
		<div class="row">
			<div class="wrapper-text col-md-5 revealOnScroll">
				<h2 class="section--heading-1"><?php echo $l->t('Watch the announcement');?></h2>
				<p class="section--paragraph"><?php echo $l->t('The Nextcloud Box was announced at the Nextcloud Conference 2016, September 16 in Berlin, Germany.');?><p>
				<p class="section--paragraph"><?php echo $l->t('On stage, in order of appearance: Nextcloud founder and managing director Frank Karlitschek, Canonical CEO Jane Silber and Joseph Lee, Head of Global Operations at WDLabs, the business growth incubator of Western Digital Corporation. Find more details in <a class="hyperlink" href="https://nextcloud.com/pr20160916/">the press release of the announcement here.</a>');?><p>
			</div>
			<div class="wrapper-text col-md-7 revealOnScroll">
				<iframe width="100%" height="400" src="https://www.youtube.com/embed/5-oCt3iPhNs?list=PL4eBKdNy6FCElMXt0FxUsfLHaCas2Md9u" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

<section class="section-partners">
	<div class="container">
		<div class="col-xs-8 col-centered">
			<h3 class="section--heading-2 text-center revealOnScroll"><?php echo $l->t('Partners');?></h3>
			<p class="section--intro text-center revealOnScroll"><?php echo $l->t('The Nextcloud Box was developed in a partnership with WDLabs and Canonical and is one of');?> <a class="hyperlink" href="<?php echo home_url('devices') ?>"><?php echo $l->t('multiple devices</a> from Nextcloud partners. It is a reference device, meant to inspire and invite anyone to build their own.');?> <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('Get in contact</a> if you\'re interested in building a Nextcloud Box like device!');?></p>
			<p class="section--intro text-center revealOnScroll"><?php echo $l->t('Find a case study on the <a class="hyperlink" href="https://pages.ubuntu.com/Nextcloud-CS.html">development of the Nextcloud Box on the Ubuntu website</a>. Learn more about delivering Snaps on consumer devices <a class="hyperlink" href="https://insights.ubuntu.com/webinar/using-snaps-to-deliver-enterprise-and-consumer-software-with-nextcloud/">in this webinar.</a>');?></p>
			<div class="wrapper-images">
				<a target="_blank" href="http://wdlabs.wd.com/products/wd-pidrive-1tb-kit/"><div class="logo-wd"></div></a>
				<a target="_blank" href="https://developer.ubuntu.com/en/snappy/"><div class="logo-ubuntu"></div></a>
			</div>
		</div>
	</div>
</section>
