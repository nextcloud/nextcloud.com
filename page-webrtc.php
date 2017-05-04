<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/webrtc.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["pages/clients"])
	});
</script>-->
</head>
<div class="background storage-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Private audio and video calls');?></h1>
				<h2><?php echo $l->t('The most flexible and secure way of chatting with your friends and customers.');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--webrtc">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-nw.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Private, group and public calls');?></p>
			<p class="section--paragraph"><?php echo $l->t('Video calls provides possibilities to call your friends, customers and partners in one-to-one or group-scenarios. You can also invite external chat participants with an URL into public rooms on your Nextcloud.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-screenshare-nw.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-screenshare-nw.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Screen Sharing');?></p>
			<p class="section--paragraph"><?php echo $l->t('Share a single window or your full desktop screen content for presentations with your chat-partners. All you need is your browser and our one-click install addon for <a class="hyperlink" href="https://addons.mozilla.org/firefox/addon/nextcloud-video-calls/">Mozilla Firefox</a> or <a class="hyperlink" href="https://chrome.google.com/webstore/detail/screensharing-for-nextclo/kepnpjhambipllfmgmbapncekcmabkol">Google Chrome</a>.');?></p>
		</div>
	</div>
</div>
</section>
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock text-center revealOnScroll">
				<p class="section--paragraph"><?php echo $l->t('Check out the Video Calls app in our app store!');?></p>
				<div class="text-center morebuttondiv">
					<a href="https://apps.nextcloud.com/apps/spreed" class="button button--large button--arrow"><?php echo $l->t('App store');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="section--webrtc">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-two-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-two-nw.png" class="img-responsive featureimg" /></a>
		</div>
	<div class="col-md-6 revealOnScroll">
		<p class="section--paragraph__tittle"><?php echo $l->t('Security. Brought by WebRTC.');?></p>
		<p class="section--paragraph"><?php echo $l->t('We use a technology called "WebRTC" which allows browsers to make direct, peer to peer connections between each other. We encrypt these streams fully end to end, both for audio and video chat. Not even the server administrator has access to the content of the call taking place.');?></p>
		</div>
	</div>
</div>
</section>
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock text-center revealOnScroll">
				<p class="section--paragraph"><?php echo $l->t('Contact our sales team if you want to know about support for our video calls technology or SIP integration into Nextcloud.');?></p>
				<div class="text-center morebuttondiv">
					<a href="/buy" class="button button--large button--arrow"><?php echo $l->t('Contact sales');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
