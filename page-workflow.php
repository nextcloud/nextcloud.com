<head>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/workflow.css?v=1" rel="stylesheet">
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/flow-as-user.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/flow-as-user.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/flow-as-user.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/flow-as-user.png">
</head>

<div class="background workflow-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Automate repetitive tasks');?></h1>
				<h2><?php echo $l->t('Automate, control and secure the flow of data on your Nextcloud server');?></p>
			</div>
		</div>
	</div>
</div>
<section class="section--intro">
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1 video">
			<iframe width="100%" height="450" src="https://www.youtube-nocookie.com/embed/Yid1haOiBcY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
    </div>
    <div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Build automated flows');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Flow makes it easy to automate repetitive, boring tasks and build efficient team collaboration workflows.');?></p>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Protect and retire data');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Advanced file access control and retention capabilities enable IT to block unauthorized access and ensure files are retired in time.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--workflow">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--floated image--feature new-img">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/flow-as-user.png"><img class="img-responsive featureimg" alt="pic of flow in action"  src="<?php bloginfo('template_directory'); ?>/assets/img/features/flow-as-user.png" /></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Automate tasks');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Flow makes it easy to automate repetitive, boring tasks. For example, let\'s say you are a sales person and send quotes as PDF. You set up a flow that turns documents into a PDF when you add a tag, say \'to-pdf\'. Or, say you want to put a message in your teams\' chat room when a partner uploads files in a specific folder.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Apps can include flow elements like triggers or actions, and separate flow apps can be build. If you are interested in building for flow, check our');?> <a class="hyperlink" href="<?php echo home_url('developer') ?>"><?php echo $l->t('Developer documentation');?></a>.</p>
		</div>
	</div>
    <div class="row">
		<div class="col-md-6 image--floated image--feature new-img">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/flow-as-admin.png"><img class="img-responsive featureimg" alt="pic of flow in action" src="<?php bloginfo('template_directory'); ?>/assets/img/features/flow-as-admin.png" /></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Access on your terms');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Through File Access Control and automatic file tagging, Nextcloud gives administrators control over data access by enabling them to define strict rules requests need to adhere to. If users in certain groups or geographic regions should not be given access to certain file types or if data with a specific tag should not be shared outside the company, administrators can make sure their Nextcloud instance enforces these rules.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Combined with');?> <a class="hyperlink" href="<?php echo home_url('outlook') ?>"><?php echo $l->t('our Secure Sharing Outlook addin</a> (and by disabling direct email attachments), File Access Control can play a crucial role in enforcing company policy on data sharing.');?></p>
		</div>
	</div>
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="text-center"><?php echo $l->t('Get work done with the leading content collaboration platform.');?></p>
            <div class="text-center morebuttondiv">
                <a href="<?php echo home_url('buy') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--feature">
	<div class="container">
         <div class="row">
            <div class="col-md-6 ">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/qnNZafE7ECM" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Featured community app:');?> <br /> Nextcloud Data Analytics</h3>
                <p class="section--paragraph"><?php echo $l->t('A great example of flow integration is the Data Analytics app by developer Marcel \'Rello\' Scherello. This application is designed to turn data into reports, tracking and analyzing data which can be imported through an API. Data Analytics provides modular datasources, a realtime or storage backend and flexibile visualization. Its flow integration allows it to monitor files for updates or act on other events on Nextcloud.');?></p>
                <a href="https://github.com/Rello/analytics/wiki/Flow-integration" class="button button--blue button--arrow button--large"><?php echo $l->t('Learn more');?></a>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock">
				<p class="text-center"><?php echo $l->t('Learn more about how Nextcloud helps you keep your data secure.');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('secure') ?>" class="button button--large button--arrow"><?php echo $l->t('Security in Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="section--workflow">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--feature">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-tagging-retention-nw.png" class="img-responsive featureimg" />
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Define automated Workflows and retention');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The Workflow engine expands the capabilities of auto tagging and File Access Control, enabling administrators to start any kind of actions based on triggers. Examples would be converting document file types to PDF upon upload by members of a specified group or emailing files put in a specified folder with a given tag to a given mail address.');?></p>
			<p class="section--paragraph"><?php echo $l->t('File retention and deletion can also be controlled based on tags set manually or automatically, ensuring legal or practical requirements for the longevity of data lifespans can be enforced.');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container">
        <div class="row">
			<div class="col-lg-8">
                <h2><?php echo $l->t('Get our datasheet');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download our free datasheet: <br /> File Access Control and Retention');?><br>
                    <td colspan="2" style="text-align:center">
                    <div class="">
                        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="6">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--large" type="submit" value=" Get the datasheet "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/file-access-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--workflow">
<div class="container">
	<div class="row">
		<div class="col-md-6 image--feature image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/FileAccessControl-at-home.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control-nw.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('File access control at home');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Home users will find that the File Access Control app and other workflow tools can be used to prevent accidental sharing of sensitive data, adding an additional layer of protection to Nextcloud.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The example on the right ensures that files with the "protected" tag are not accessible outside the home network nor synced by the clients.');?> <a class="hyperlink" href="https://nextcloud.com/blog/file-access-control-a-firewall-for-your-private-files-in-nextcloud/" target="_blank"><?php echo $l->t('Learn more in our blog');?></a>.</p>
		</div>
	</div>
</div>
</section>
<!--<div class="wrap container-widest">
	<div class="featurerow">
		<h1 class="featuretitle"><?php echo $l->t('Screenshots');?></h1>
		<div class="row">
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/tagging-retention.png" class="img-responsive featureimg" /></a>
			</div>
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/file-access-control.png" /></a>
			</div>
		</div>
	</div>
</div>-->
