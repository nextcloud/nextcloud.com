<?php get_template_part( 'templates/parts/title');?>
<div class="sub-nav">
	<a href="/contributors"><?php echo $l->t('Nextcloud Community');?></a><!--&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/team">Nextcloud GmbH team</a>-->
</div>

<p><?php echo $l->t('You should have full control over your data. We help you achieve that: a safe home for all your data. Secure, under your control and developed in an open, transparent and trustworthy way. <strong>We are Nextcloud</strong>.');?></p>

<p><?php echo $l->t('Nextcloud, the next generation Enterprise File Sync & Share was started by ownCloud inventor <a href="https://karlitschek.de">Frank Karlitschek</a> to empower users to take back control over their data and communication. The company was founded as a spin-off from <a href="https://struktur.de" target="_blank">Struktur AG</a>, a leading web conferencing and financial planning software company since 1995, servicing customers like Deutsche Bank, Vodafone, BNP Paribas and many others. Nextcloud gives organizations fine-grained control over data access, facilitates file synchronization and sharing across devices, enables collaboration within and across organizational boundaries and lets users communicate through secure WebRTC audio and video conferencing.');?></p>

<p><?php echo $l->t('See <a href="/features">our features page</a> for more information about what Nextcloud can do for you.');?></p>

<h2><?php echo $l->t('User Focus');?></h2>
<p><?php echo $l->t('At Nextcloud, we believe that a open, transparent development process and a clear focus on the needs of users and customers results in a better product.');?></p>

<p><?php echo $l->t('By offering access to our engineers, customers get the best possible support while having an opportunity to participate in and benefit from the open source model. See <a href="/enterprise">our enterprise page</a> for more information about our Enterprise Support Subscriptions.');?></p>

<p><?php echo $l->t('You can follow what we are up to <a href="/news">in our blogs</a> and join the <a href="https://help.nextcloud.com">conversations on our forums.</a>');?></p>

<h2><?php echo $l->t('In the media');?></h2>
<p><?php echo $l->t('Our launch has been covered in the media and we\'ve been interviewed, explaining the why, how and what behind our endeavor. Watch and read these to learn more!');?></p>
<div class="row yt-row">
	<div class="col-md-4 yt-img-overlay">
		<a class="youtube" it="iMfokaX2r8g" href="https://www.youtube.com/watch?v=iMfokaX2r8g" target="_blank" title="Interview by Bryan Lunduke">
		<img  src="https://img.youtube.com/vi/iMfokaX2r8g/hqdefault.jpg" title="Interview by Bryan Lunduke" />
		<div class="yt-play-btn">
						<i></i> 
					</div>
		</a>
    </div>
	<div class="col-md-4 yt-img-overlay">
		<a class="youtube" id="Yjqd7MX434I?start=2678" href="https://youtu.be/Yjqd7MX434I?t=44m38s" target="_blank" title="The Linux Action Show">
		<img  src="https://img.youtube.com/vi/Yjqd7MX434I/hqdefault.jpg" title="The Linux Action Show" />
		<div class="yt-play-btn">
						<i></i> 
					</div>
		</a>
    </div>
	<div class="col-md-4 yt-img-overlay">
		<a class="youtube" id="rAXf8SGAXFE?start=2173" href="https://www.youtu.be/rAXf8SGAXFE?t=36m21s" target="_blank" title="Bad Voltage">
		<img  src="https://img.youtube.com/vi/rAXf8SGAXFE/hqdefault.jpg" title="Bad Voltage" />
		<div class="yt-play-btn">
						<i></i> 
					</div>
		</a>
    </div>
	<div class="col-md-4 yt-img-overlay">
		<a href="http://www.zdnet.com/article/nextcloud-releases-owncloud-fork-ahead-of-schedule/" target="_blank" title="ZDNet on the fork">
		<img class="" src="<?php bloginfo('template_directory');?>/assets/img/history/ZDNet.png" title="ZDNet on the fork"/>
		</a>
    </div>
    <div class="col-md-4 yt-img-overlay">
		<a href="http://fortune.com/2016/06/03/what-happened-to-owncloud/" title="Fortune on the fork">
		<img class="" src="<?php bloginfo('template_directory');?>/assets/img/history/fortune.png" target="_blank" title="Fortune on the fork"/>
		</a>
    </div>
	<div class="col-md-4 yt-img-overlay">
		<a href="http://thenewstack.io/story-behind-nextcloud/" target="_blank" title="TheNewStack on the fork">
		<img class="" src="<?php bloginfo('template_directory');?>/assets/img/history/thenewstack.png" title="TheNewStack on the fork"/>
		</a>
    </div>
    <div class="col-md-4 yt-img-overlay">
		<a href="http://www.eweek.com/cloud/nextcloud-improves-security-adds-enterprise-support.html" target="_blank" title="eWeek on the fork">
		<img class="" src="<?php bloginfo('template_directory');?>/assets/img/history/eweek.png" title="eWeek on the fork"/>
		</a>
    </div>
    <div class="col-md-4 yt-img-overlay">
		<a href="http://www.cio.com/article/3079866/open-source-tools/what-we-can-learn-from-ownclouds-collapse.html" target="_blank" title="CIO on the fork">
		<img class="" src="<?php bloginfo('template_directory');?>/assets/img/history/cio_logo.png" title="CIO on the fork"/>
		</a>
    </div>
	<div class="col-md-4 yt-img-overlay">
		<a href="http://www.theregister.co.uk/2016/07/28/open_source_insider_open_source_forkery/" target="_blank" title="Fork You - the Register analysis">
		<img class="" src="<?php bloginfo('template_directory');?>/assets/img/history/TheRegister.png" title="Fork You - the Register analysis"/>
		</a>
    </div>
	<div class="col-md-4 yt-img-overlay">
		<a href="https://www.radiotux.de/index.php?/archives/8015-RadioTux-Sendung-Juni-2016.html" target="_blank" title="RadioTux interview (German)">
		<img class="" src="<?php bloginfo('template_directory');?>/assets/img/history/radiotux.png" title="Radio Tux interview"/>
		</a>
    </div>
</div>
    

<div class="wrap pad-bottom">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
                    <h2><?php echo $l->t('Subscribe to our newsletter');?></h2>
                    <p><?php echo $l->t('Stay up to date with Nextcloud news - future plans for releases, events and development are covered monthly in our news letter.');?></p>
		    <p><?php echo $l->t('<a href="https://newsletter.nextcloud.com/?p=subscribe&id=1" class="btn btn-block btn-primary btn-lg join-button">Subscribe to our<br />monthly newsletter!</a>');?></p>
		</div>
	</div>
</div>

<p><?php echo $l->t('Disclaimer: </br>
<small>All product names and trademarks are the property of their respective owners, which might in no way be associated or affiliated with Nextcloud.<br />
Nextcloud is not responsible for the content of the linked articles.</small>');?></p>

<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/vendor/jquery.youtubepopup.js"></script>

<script type="text/javascript">
$(function () {
	$("a.youtube").YouTubePopup({ hideTitleBar: true });
});
</script>
