<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/workflow.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["pages/clients"])
	});
</script>-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<div class="background workflow-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('File Access Control and Workflows');?></h1>
				<h2><?php echo $l->t('Manage, control and secure the flow of data on your Nextcloud server');?></p>
			</div>
		</div>
	</div>
</div>
<section class="section--header">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Users need to exchange data');?></p>
			<p class="section--paragraph"><?php echo $l->t('The traditional shared data directory in companies has been informally augmented with attachments sent around by email as well as illicit usage of public cloud solutions like Dropbox. This brings significant legal, practical and financial risks.');?></p>
			<p class="section--paragraph__tittle"><?php echo $l->t('IT needs to stay in control');?></p>
			<p class="section--paragraph"><?php echo $l->t('A private cloud with File Access Control brings data back under IT policy.');?></p>
		</div>
	</div>
</div>
</section>
<section class="section--workflow">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control2-nw.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Access on your terms');?></p>
			<p class="section--paragraph"><?php echo $l->t('Through File Access Control and automatic file tagging, Nextcloud gives administrators control over data access by enabling them to define strict rules requests need to adhere to. If users in certain groups or geographic regions should not be given access to certain file types or if data with a specific tag should not be shared outside the company, administrators can make sure their Nextcloud instance enforces these rules.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Combined with <a class="hyperlink" href="/outlook">our Secure Sharing Outlook addin</a> (and by disabling direct email attachments), File Access Control can play a crucial role in enforcing company policy on data sharing.');?></p>
		</div>
	</div>
</div>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock text-center revealOnScroll">
				<p class=""><?php echo $l->t('Learn more about how Nextcloud helps you keep your data secure.');?></p>
				<div class="text-center morebuttondiv">
					<a href="/secure" class="button button--large button--arrow"><?php echo $l->t('Security in Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="section--workflow">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-tagging-retention-nw.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Define automated Workflows and retention');?></p>
			<p class="section--paragraph"><?php echo $l->t('The Workflow engine expands the capabilities of auto tagging and File Access Control, enabling administrators to start any kind of actions based on triggers. Examples would be converting document file types to PDF upon upload by members of a specified group or emailing files put in a specified folder with a given tag to a given mail address.');?></p>
			<p class="section--paragraph"><?php echo $l->t('File retention and deletion can also be controlled based on tags set manually or automatically, ensuring legal or practical requirements for the longevity of data lifespans can be enforced.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container text-center revealOnScroll">
        <h2 class="revealOnScroll"><?php echo $l->t('Get our datasheet');?></h2>
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <p>
                    <form name="whitepaper" method="post" action="../file-access-whitepapersubmit">
                        <p><label for="email"><?php echo $l->t('Download our free datasheet: <br /> File Access Control and Retention');?><br>
                        <input class="mail" type="text" name="email" maxlength="80" size="30" placeholder="Enter your email"></label></p>
                        <td colspan="2" style="text-align:center">
                        <div class="text-center">
                            <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                        </div>
                        </td>
                        <p><input class="button button--large" type="submit" value=" Get the datasheet "></p>
                    </form>
                </p>
            </div>
        </div>
	</div>
</section>

<section class="section--workflow">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/FileAccessControl-at-home.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control-nw.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('File access control at home');?></p>
			<p class="section--paragraph"><?php echo $l->t('Home users will find that the File Access Control app and other workflow tools can be used to prevent accidental sharing of sensitive data, adding an additional layer of protection to Nextcloud.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The example on the right ensures that files with the "protected" tag are not accessible outside the home network nor synced by the clients. <a class="hyperlink" href="https://nextcloud.com/?p=869" target="_blank">Learn more in our blog</a>.');?></p>
		</div>
	</div>
</div>
</section>
<!--<div class="wrap container-widest">
	<div class="featurerow">
		<h1 class="featuretitle"><?php echo $l->t('Screenshots');?></h1>
		<div class="row">
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png" class="img-responsive featureimg" /></a>
			</div>
			<div class="col-md-6 revealOnScroll">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png" /></a>
			</div>
		</div>
	</div>
</div>-->
