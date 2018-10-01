<head>
<link class="hyperlink" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/about.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
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

<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud offers industry-leading on-premises file sync and online collaboration technology. Our expertise is in combining the convenience and ease of use of consumer-grade solutions like Dropbox and Google Drive with the security, privacy and control business needs.');?></p>
                <p class="section--paragraph text-center"><?php echo $l->t('Our self-hosted solutions ensure you know where data is, who has access, and that even meta-data does not leak.');?></p>
            </div>
        </div>
    </div>
</section>


<section class="section--products">
	<div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="<?php echo home_url('files') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/mobileDesktop.png" /></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="fill:white !important;" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Files.svg" >
                        </div>
                        <div class="text">
                            <?php echo $l->t('<strong>Nextcloud Files</strong><br><small>Enterprise File Sync and Share</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Files offers an on-premise Universal File Access and sync platform with powerful collaboration capabilities and desktop, mobile and web interfaces.');?></p>
                    <a href="<?php echo home_url('files') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>

            <div class="col-sm-4">
                <a href="<?php echo home_url('talk') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/talk-devices-nw.png"></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Talk.svg" >
                        </div>
                        <div class="text">
                            <?php echo $l->t('<strong>Nextcloud Talk</strong><br><small>Calls, chat and web meetings</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Talk delivers on-premises, private audio/video conferencing and text chat through browser and mobile interfaces with integrated screen sharing and SIP integration.');?></p>
                    <a href="<?php echo home_url('talk') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo home_url('groupware') ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/calendar-nw.png"></a>
                <div class="row description">
                    <div class="title">
                        <div class="logo">
                            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Nextcloud-Groupware.svg" >
                        </div>
                        <div class="text">
                            <?php echo $l->t('<strong>Nextcloud Groupware</strong><br><small>Calendar, Contacts & Mail</small>');?>
                        </div>
                    </div>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud Groupware integrates Calendar, Contacts, Mail and other productivity features to help teams get their work done faster and easier.');?></p>
                    <a href="<?php echo home_url('groupware') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--differentiators">
<div class="container">
         <div class="row quote--container">
            <blockquote class="quote--paragraph">Nextcloud is a counter model to the typical cloud offerings of large US providers such as Microsoft.</blockquote>
        <div class="quote--brand">
            <a href="http://www.spiegel.de/netzwelt/web/open-source-software-nextcloud-baut-die-bundescloud-a-1203261.html"><div class="quote--brand--logo"></div></a>
                <p class="quote--brand--text">
                    <a href="http://www.spiegel.de/netzwelt/web/open-source-software-nextcloud-baut-die-bundescloud-a-1203261.html">Der Spiegel</a>
                </p>
            </div>
        </div>
    <div class="row">
        <h2><?php echo $l->t('Our key differentiators');?></h2>
        <p class="section--paragraph__tittle"><?php echo $l->t('Putting IT back in control');?></p>
        <p class="section--paragraph"><?php echo $l->t('As a vendor of on-premises solutions, Nextcloud puts the customer in control over their data in the most literal and direct sense. Building on that, our products integrate powerful capabilities to control and monitor data exchange and communication, including our unique File Access Control and workflow features, extensive audit logs, fine-grained sharing controls and more.');?></p>
         <p class="section--paragraph__tittle"><?php echo $l->t('Security first');?></p>
        <p class="section--paragraph"><?php echo $l->t('Security is Nextcloud customers\' greatest concerns and our prime advantage over competitors. Nextcloud features a host of unique, innovative security technologies from brute force protection to advanced server side and integrated end-to-end, client side encryption with enterprise-grade key handling and a wide range of security hardenings. Our security has been reviewed by trusted third parties and is backed by a USD 5000 Security Bug Bounty Program, providing the confidence that data meant to stay private will stay private.');?></p>

        <p class="section--paragraph__tittle"><?php echo $l->t('User Focus');?></p>
		<p class="section--paragraph"><?php echo $l->t('At Nextcloud, we believe that an open, transparent development process and a clear focus on the needs of users and customers results in a better product.');?></p>

		<p class="section--paragraph"><?php echo $l->t('By working in the open within and with the wider developer- and user community, development is sped up, quality improved and alignment with needs of users improved.');?></p>
		<p class="section--paragraph"><?php echo $l->t('Our unique approach to support gives customers what <strong>no other vendor can offer</strong>: direct access to core Nextcloud engineering expertise without a layer of support people between the customer and the knowledge they need.');?>  <a class="hyperlink" href="https://opensource.com/article/18/8/mixing-roles-engineering" target="_blank"><?php echo $l->t('Learn more on opensource.com.');?></a></p>
		<p class="section--paragraph"><a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('See our enterprise page</a> for more information about our Enterprise Support Subscriptions.');?></p>

        <h2><?php echo $l->t('Our company');?></h2>
		<p class="section--paragraph"><?php echo $l->t('Nextcloud was started by ownCloud inventor <a class="hyperlink" href="https://karlitschek.de">Frank Karlitschek</a> and a dozen experienced open source entrepreneurs and engineers to empower users to take back control over their data and communication. We envisioned our company to develop the next generation open source Enterprise File Sync and Share and have been relentlessly pursuing that vision, raising the bar for self-hosted solutions.');?></p>

		<p class="section--paragraph"><?php echo $l->t('The company was launched in 2016 as a spin-off from <a class="hyperlink" href="https://struktur.de" target="_blank">Struktur AG</a>, a leading web conferencing and financial planning software company since 1995, servicing customers like Deutsche Bank, Vodafone, BNP Paribas and many others. ');?></p>

		<p class="section--paragraph"><?php echo $l->t('Fully employee-funded and pursueing a organic-growth strategy, Nextcloud already turned profitable by the end of 2016 and had nearly tripled to 35 employees by the end of 2017. See our full ');?><a class="hyperlink" href="<?php echo home_url('team') ?>"><?php echo $l->t('team here.');?></a> </p>

        <p class="section--paragraph"><?php echo $l->t('By January 2018, <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-grew-customer-base-7x-added-over-6.6-million-lines-of-code-and-doubled-its-team-in-2017/">after record growth in 2017</a>, Nextcloud had become the most sought-after Enterprise File Sync and Share solution <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-grew-customer-base-7x-added-over-6.6-million-lines-of-code-and-doubled-its-team-in-2017/">according to Google Trends</a> and was widely recognized as leading the on-premises Enterprise File Sync and Share industry.');?></p>

		<p class="section--paragraph"><?php echo $l->t('You can follow what we are up to');?> <a class="hyperlink" href="<?php echo home_url('news') ?>"><?php echo $l->t('in our blogs</a> and subscribe to <a class="hyperlink" href="https://newsletter.nextcloud.com">our newsletter.</a>');?></p>
	</div>
</section>

<section class="section--videos">
<div class="container">
    <div class="row">
		<h2><?php echo $l->t('Media coverage');?></h2>
		<p class="section--paragraph"><?php echo $l->t('We keep track of some of the mentions of Nextcloud in the press.');?></p>
        <div class="row newsrow">
            <div class="col-md-4">
				<a class="hyperlink" href="https://www.itwire.com/technology-regulation/82947-cloud-vendor-nextcloud-offers-gdpr-compliance-kit.html" target="_blank" title="ITWire on the Nextcloud GDPR Compliance kit">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/itwire-gdpr.png" title="ITWire on the Nextcloud GDPR Compliance kit"/>
				</a>
			</div>
            <div class="col-md-4">
				<a class="hyperlink" href="https://www.cloudcomputing-insider.de/nextcloud-bietet-loesungen-fuer-dsgvo-a-718129/" target="_blank" title="Cloudcomputing-Insider on the Nextcloud GDPR Compliance kit">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/cci-gdpr.png" title="Cloudcomputing-Insider on the Nextcloud GDPR Compliance kit"/>
				</a>
			</div>
            <div class="col-md-4">
                <a class="hyperlink" href="https://www.techradar.com/news/german-government-goes-open-source-with-open-source-cloud-firm-nextcloud" target="_blank" title="Techradar Pro on German government going for Nextcloud">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/techradarpro.png" title="Techradar Pro on German government going for Nextcloud"/>
				</a>
			</div>
            <div class="col-md-4">
            <a class="hyperlink" href="http://www.spiegel.de/netzwelt/web/open-source-software-nextcloud-baut-die-bundescloud-a-1203261.html" target="_blank" title="Der Spiegel on German government going for Nextcloud">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/spiegel-gergov.png" title="Der Spiegel on German government going for Nextcloud"/>
				</a>
			</div>
            <div class="col-md-4">
            <a class="hyperlink" href="http://news.softpedia.com/news/meet-nextcloud-talk-world-s-first-self-hosted-encrypted-communication-platform-519344.shtml" target="_blank" title="Softpedia on Nextcloud Talk">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/softpedia-talk.png" title="Softpedia on Nextcloud Talk"/>
				</a>
			</div>
            <div class="col-md-4">
				<a class="hyperlink" href="http://windowsitpro.com/open-source/open-source-file-share-nextcloud-add-end-end-encryption" target="_blank" title="Windows IT Pro on End-to-end Encryption">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/itpro-endtoend.png" title="Windows IT Pro on End-to-end Encryption"/>
				</a>
			</div>
            <div class="col-md-4">
				<a class="hyperlink" href="https://tweakers.net/nieuws/130137/nextcloud-kondigt-end-to-endencryptie-aan.html" target="_blank" title="Tweakers on End-to-end Encryption">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/tweakers-e2e.png" title="Tweakers on End-to-end Encryption"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="Techreport on Global Scale" target="_blank" title="Techreport on Global Scale">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/tr-gs.png" title="Techreport on Global Scale"/>
				</a>
			</div>
			<div class="col-md-4">
				<a class="hyperlink" href="http://www.networkworld.com/article/3198415/open-source-tools/nextcloud-12-expands-data-storage-to-support-large-organizations.htmlorld.com/nextcloud-partners-with-moodle-and-4-other-partners-releases-nextcloud-education-edition-moodle-nextcloud/" target="_blank" title="Networkworld on Global Scale">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/nw-gs.png" title="Networkworld on Global Scale"/>
				</a>
			</div>
            <div class="col-md-4">
				<a class="hyperlink" href="http://www.moodleworld.com/nextcloud-partners-with-moodle-and-4-other-partners-releases-nextcloud-education-edition-moodle-nextcloud/" target="_blank" title="MoodleWorld on Education Edition">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/moodle-news-edu.png" title="MoodleWorld on Education Edition"/>
				</a>
			</div>
            <div class="col-md-4">
				<a class="hyperlink" href="https://www.zdnet.com/article/nextcloud-box-a-cloud-for-your-office-or-living-room/" target="_blank" title="ZDNet on the Nextcloud Box">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/zdnet-box.png" title="ZDNet on the Nextcloud Box"/>
				</a>
			</div>
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
<!--			<div class="col-md-4">
				<a class="hyperlink" href="http://www.zdnet.com/article/nextcloud-releases-owncloud-fork-ahead-of-schedule/" target="_blank" title="ZDNet on the fork">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/ZDNet.png" title="ZDNet on the fork"/>
				</a>
			</div>-->
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
<!--			<div class="col-md-4">
				<a class="hyperlink" href="http://www.cio.com/article/3079866/open-source-tools/what-we-can-learn-from-ownclouds-collapse.html" target="_blank" title="CIO on the fork">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/img/history/cio_logo.png" title="CIO on the fork"/>
				</a>
			</div>-->
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
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/Yjqd7MX434I?start=2678" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="col-md-4">
                <div data-type="youtube" data-video-id="rAXf8SGAXFE?start=2173"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/rAXf8SGAXFE?start=2173" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="col-md-4">
                <div data-type="youtube" data-video-id="iMfokaX2r8g"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/iMfokaX2r8g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
