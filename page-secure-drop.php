<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/securedrop.css" rel="stylesheet">
<link type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<script>
	require(["require.config"], function() {
		require(["pages/file-drop"])
	});
</script>
</head>
<div class="background securedrop-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('File Drop');?></h1>
				<h2><?php echo $l->t('Convenient and secure file exchange for enterprises');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--video">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 video revealOnScroll">
			<div data-type="youtube" data-video-id="AhFnbB-a7ik"></div>
		</div>
		<div class="col-md-6 col-md-offset-3 revealOnScroll">
			<p class="section--paragraph text-center"><?php echo $l->t('The Nextcloud File Drop feature enables hospitals, banks, notaries and government agencies to securely receive data from customers, patients, clients or partners.');?></p>
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
			<p class="section--paragraph"><?php echo $l->t('To create an upload link, select any folder as target for File Drop by enabling file upload in a folder share and choosing »<em>File Drop (upload only)</em>«. This hides the existing content of the folder from the share recipient, providing a secure upload target.');?></p>
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
		<p class="section--paragraph"><?php echo $l->t('Rather than creating a single upload link, you can also have customized links by entering a customer email address and then enabling File Drop (upload only). Your client receives an email with instructions on where to securely upload their files and if you chose to add one, the password in a separate email. You can have both a shared link and multiple, unique email links with each their own password, expiration date and access rights. The password email can be disabled in the admin sharing settings for even more security-sensitive data where a secure second channel (like a <a class="hyperlink" href="/webrtc">secure video call</a>) has to be used for the password.');?></p>
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
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
				<p class="section--paragraph text-center"><?php echo $l->t('Secure your file exchange with clients right now. Learn about the benefits of a Nextcloud Support Subscription!');?></p>
				<div class="text-center morebuttondiv">
					<a href="/enterprise" class="button button--large button--arrow"><?php echo $l->t('Subscription information');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
