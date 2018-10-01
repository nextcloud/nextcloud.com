<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/securedrop.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["pages/file-drop", "modules/youtubePlayer"])
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
			<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/AhFnbB-a7ik" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<p class="section--paragraph text-center"><?php echo $l->t('Nextcloud Files enables hospitals, banks, notaries and government agencies to securely send files to and receive files from customers, patients, clients or partners.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--overview">
<div class="container">
	<div class="row">
		<div class="col-md-4 revealOnScroll">
			<div class="row"><a href="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-drop-nw.png"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-drop-nw.png" /></a></div>
			<div class="row text-center"><p class="section--paragraph__tittle"><?php echo $l->t('Easy and personal');?></p>
			<p class="section--paragraph"><?php echo $l->t('Send files and folders with just a few clicks to one or multiple customers. Create personal links for them to upload data to you.');?></p></div>
		</div>
		<div class="col-md-4 revealOnScroll">
			<div class="row"><a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw.png" class="img-responsive" /></a></div>
			<div class="row text-center"><p class="section--paragraph__tittle"><?php echo $l->t('Ultimate security');?></p>
			<p class="section--paragraph"><?php echo $l->t('Files are securely transferred and stored on your own infrastructure, without any third party ever gaining access.');?></p></div>
		</div>
		<div class="col-md-4 revealOnScroll">
			<div class="row"><a href="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control-nw.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control-nw.png" class="img-responsive" /></a></div>
			<div class="row text-center"><p class="section--paragraph__tittle"><?php echo $l->t('IT stays in control');?></p>
			<p class="section--paragraph"><?php echo $l->t('The IT department enforces rules and limitations on password & expiration dates, access by IP, file type or size and more.');?></p></div>
		</div>
	</div>
</div>
</section>

<section class="section--keyfeatures">
<div class="container-fluid quote">
<!-- 	<div class="container"> -->
        <div class="row">
            <h2 class="text-center revealOnScroll"><?php echo $l->t('Key features');?></h2>
        </div>
		<div class="row revealOnScroll">
            <div class="col-sm-3">
                <p class="section--paragraph"><?php echo $l->t('
                <li>Attractive, easy interface</li>
                <li>Unlimited shares and upload folders</li>
                <li>Show/hide existing files</li>
                <li>Edit/rename without link change</li>
                ');?></p>
            </div>
            <div class="col-sm-3">
                <p class="section--paragraph"><?php echo $l->t('
                <li>(Push) notifications</li>
                <li>pdf/video/image preview</li>
                <li>Templated sharing emails</li>
                <li>Mobile and desktop clients</li>
                ');?></p>
            </div>
            <div class="col-sm-3">
                <p class="section--paragraph"><?php echo $l->t('
                <li>Read only/write permissions</li>
                <li>File retention</li>
                <li>Comprehensive audit tracking</li>
                <li>Anti-virus scanning</li>
                ');?></p>
            </div>
            <div class="col-sm-3">
                <p class="section--paragraph"><?php echo $l->t('
                <li>Password protection</li>
                <li>Expiration date</li>
                <li>Encryption at rest & in transit</li>
                <li>Data remains on-premise</li>
                ');?></p>
            </div>
        </div>
        <div class="row">
        <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('
        Your own server = under your control
        ');?></p>
        <p class="section--paragraph text-center revealOnScroll"><a class="hyperlink" href="<?php echo home_url('gdpr') ?>"><em><?php echo $l->t('
        HIPAA, GLBA, NERC CIP, SOX, PCI compliance');?></em></a></p>
        </div>
<!--     </div> -->
</div>
</section>


<section class="section--details">
<div class="container">
        <div class="row">
            <h2 class="text-center revealOnScroll"><?php echo $l->t('How it works');?></h2>
        </div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-link-nw.png" class="img-responsive featureimg" />
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Easy creation of secure upload point');?></p>
			<p class="section--paragraph"><?php echo $l->t('To create an upload link, select any folder as target for upload by customers by enabling file upload in a folder share and choosing <em>File Drop (upload only)</em>. This hides the existing content of the folder from the share recipient, providing a secure upload target.');?></p>
			 <p class="section--paragraph"><?php echo $l->t('You can now share this link to your customer, partner or user!');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-drop-nw.png" />
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Convenient and personal');?></p>
		<p class="section--paragraph"><?php echo $l->t('Your client will be able to upload files to your server in a secure and easy manner. You receive a notification of new files in your upload folder and proceed to process the data. At the end you provide the result in a separate folder for your client to download securely. At all time your data and that of your clients is protected by industry-leading security measures!');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/securedrop-email-nw.png" class="img-responsive featureimg" />
		</div>
	<div class="col-md-6 revealOnScroll">
		<p class="section--paragraph__tittle"><?php echo $l->t('Unique links for each customer');?></p>
		<p class="section--paragraph"><?php echo $l->t('Rather than creating a single upload link, you can also have customized links by entering a customer email address and then enabling File Drop (upload only). Your client receives an email with instructions on where to securely upload their files and if you chose to add one, the password in a separate email. You can have both a shared link and multiple, unique email links with each their own password, expiration date and access rights. The password email can be disabled in the admin sharing settings for even more security-sensitive data where a secure second channel (like a');?> <a class="hyperlink" href="<?php echo home_url('webrtc') ?>"><?php echo $l->t('secure video call</a>) has to be used for the password.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control-nw.png" class="img-responsive featureimg" />
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('IT stays in control');?></p>
			<p class="section--paragraph"><?php echo $l->t('The system administrator can rest assured that all interactions follow the rules and requirements set by the company with regards to passwords, expiration dates and of course the limitations enforced by the');?> <a class="hyperlink" href="<?php echo home_url('workflow') ?>"><?php echo $l->t('Nextcloud File Access Control feature</a>.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Data remains, at all times, on-premise, under full authority of IT. File Drop supports a wide range of storage technologies including NFS, SMB and Windows Network Drive, Sharepoint, Object Storage and many more.');?> <a class="hyperlink" href="<?php echo home_url('storage') ?>"><?php echo $l->t('Learn more about External Storage here</a>.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--contact quote">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <p class="section--paragraph text-center"><?php echo $l->t('Secure your file exchange with clients right now.');?></p>
            <div class="text-center morebuttondiv">
                <a href="<?php echo home_url('pricing') ?>" class="button button--large button--arrow"><?php echo $l->t('Pricing');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
        </div>
    </div>
</div>
</section>
<?php
include get_template_directory() . '/verticals.php';
