<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/securedrop.css" rel="stylesheet">
<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/jquery-ui.css" rel="stylesheet" />
<script>
	require(["require.config"], function() {
		require(["vendor/jquery.min", "vendor/jquery.ui", "bootstrap"],
			function ($, jqueryui) {
				require(["vendor/jquery.youtubepopup"],
					function (jqyoutube) {
						jQuery("a.youtube").YouTubePopup({ hideTitleBar: true });
					}
				);
			}
		);
	});
</script>
</head>
<div class="background securedrop-background"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Secure Drop');?></h1>
				<h2><?php echo $l->t('Convenient and secure file exchange for enterprises');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--video">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 video">
			<div class="yt-img-overlay">
				<a class="youtube" id="AhFnbB-a7ik" href="https://www.youtube.com/watch?v=AhFnbB-a7ik" title="Editing public link sharesd">
					<img class="img-responsive featureimg" src="https://img.youtube.com/vi/AhFnbB-a7ik/maxresdefault.jpg" title="Secure Drop in action" style='margin: 0 0 0 0; padding: -10% 0 -10% 0;' /> <!-- style different per image! --> 
					<div class="yt-play-btn">
						<i></i>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-6 col-md-offset-3 text-center">
			<p class="section--paragraph"><?php echo $l->t('The Nextcloud Secure Drop feature enables hospitals, banks, notaries and government agencies to securely receive data from customers, patients, clients or partners.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--storage">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-link-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-link-nw.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Easy creation of secure upload point');?></p>
			<p class="section--paragraph"><?php echo $l->t('To create an upload link, select any folder as target for Secure Drop by enabling file upload in a folder share and choosing »<em>Secure Drop (upload only)</em>«. This hides the existing content of the folder from the share recipient, providing a secure upload target.');?></p> 
			 <p class="section--paragraph"><?php echo $l->t('You can now share this link to your customer, partner or user!');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-drop-nw.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-drop-nw.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Convenient and personal');?></p>
		<p class="section--paragraph"><?php echo $l->t('Your client will be able to upload files to your server in a secure and easy manner. You receive a notification of new files in your upload folder and proceed to process the data. At the end you provide the result in a separate folder for your client to download securely. At all time your clients data are protected by industry-leading security measures!');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-email-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-email-nw.png" class="img-responsive featureimg" /></a>
		</div>
	<div class="col-md-6 revealOnScroll">
		<p class="section--paragraph__tittle"><?php echo $l->t('Unique links for each customer');?></p>
		<p class="section--paragraph"><?php echo $l->t('Rather than creating a single upload link, you can also have customized links by entering a customer email address and then enabling Secure Drop (upload only). Your client receives an email with instructions on where to securely upload their files and if you chose to add one, the password in a separate email. Of course you can have both a shared link and multiple, unique email links.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<a href="/workflow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control-nw.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('IT stays in control');?></p>
			<p class="section--paragraph"><?php echo $l->t('The system administrator can rest assured that all interactions follow the rules and requirements set by the company with regards to passwords, expiration dates and of course the limitations enforced by the <a class="hyperlink" href="/workflow">Nextcloud File Access Control feature.</a>');?></p>
		</div>
	</div>
</div>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center revealOnScroll">
				<p class="section--paragraph"><?php echo $l->t('Secure your file exchange with clients right now. Find out the benefits of a Nextcloud Support Subscription!');?></p>
				<div class="text-center morebuttondiv">
					<a href="/buy" class="button button--large button--arrow"><?php echo $l->t('Request a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
