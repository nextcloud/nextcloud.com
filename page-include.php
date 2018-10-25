<head>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/include.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["pages/collabora", "modules/youtubePlayer", "modules/codeHighlights"])
	});
</script>
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/include.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/include.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/include.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/include.png">
</head>

<div class="background include-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Include');?></h1>
 				<h2><code><?php echo $l->t('include \'diversity.php\';');?></code></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
    <div class="container">
        <div class="row revealOnScroll">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Diversity strengthens a community. The Nextcloud Include initiative helps underrepresented groups participate in the Nextcloud project, building a diverse and inclusive space where we collaborate and develop world class software.');?></p>
            </div>
        </div>
    </div>
</section>

<section class="section--overview">
<div class="container-widest">
	<div class="row">
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/conversation.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Mentoring');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('We provide mentoring to people new to our community.');?></p>
        </div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/travel.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Travel support');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('We sponsor the travel & accommodation for participation in Nextcloud events.');?></p>
		</div>
		<div class="col-md-4 revealOnScroll">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/internship.svg" /></div>
			<p class="section--paragraph__tittle text-center"><?php echo $l->t('Internships');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('We hire students from underrepresented groups to intern at Nextcloud GmbH.');?></p>
		</div>
    </div>
</div>
</section>

<section class="section--advantages">
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
				<h1 class="section--heading-1 text-center"><?php echo $l->t('How you can get involved');?></h1>
				<h3 class="text-center"><?php echo $l->t('You want to become a part of the Nextcloud community? Here is how to get started.');?></h3>
            </div>
        </div>
		<div class="row">
            <div class="col-sm-6 revealOnScroll">
                <p class="section--paragraph__tittle"><?php echo $l->t('Check us out');?></p>
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Literally and figuratively, do a checkout of our code in github and have a look!');?></li>
                    <li><?php echo $l->t('Scroll through our starters tasks that can get you started');?></li>
                    <li><?php echo $l->t('Look at our documentation on how to set up a development environment');?></li>
                </ul></p>
            </div>
            <div class="col-sm-6 revealOnScroll">
                <p class="section--paragraph__tittle"><?php echo $l->t('Get in touch');?></p>
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Deployed on your own servers, giving you full control over your data');?></li>
                    <li><?php echo $l->t('100% open source guarantees transparency and no vendor lock-in');?></li>
                    <li><?php echo $l->t('100% open source guarantees transparency and no vendor lock-in');?></li>
                </ul></p>
            </div>
        </div>
   		<div class="row">
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Request a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<section class="section--main">
	<div class="container">
		<div class="featurerow">
			<div class="row">
<!-- 				</div> -->
				<div class="col-md-6 revealOnScroll image--floated">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/html5.png" alt="in action" />
				</div>
				<div class="col-md-6 featureblock revealOnScroll">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('How you can get involved');?></h2>
					<p class="section--paragraph"><?php echo $l->t('ONLYOFFICE is built on the HTML5 Canvas, providing:');?></p>
					<ul>
					<li><?php echo $l->t('A modern and familiar user interface');?></li>
					<li><?php echo $l->t('The same document rendering in every browser');?></li>
					<li><?php echo $l->t('Low resource consumption on server and client');?></li>
					<li><?php echo $l->t('Desktop level editing capabilities');?></li>
					</ul>
					<p class="section--paragraph"><?php echo $l->t('Full support for MS office formats like DOCX and PPTX is provided, as well as import and export of the Open Document Format.');?></p>
				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row">
				<div class="col-md-6 revealOnScroll">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/include-integration.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 revealOnScroll featureblock">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('Integrated and on-premises');?></h2>
					<p class="section--paragraph"><?php echo $l->t('Instead of handing over data to a third party, ONLYOFFICE runs in your own data center, guaranteeing 100% confidentiality of the documents.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Integration in Nextcloud makes it easy to work on documents alone, with other Nextcloud users or with others whom participate through a publicly shared link.');?></p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section--features">
    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/include-3.png" alt="in action" /></a>
	<div class="container">
		<div class="featurerow">
			<div class="row">
<!-- 				</div> -->
				<div class="col-md-4 revealOnScroll">
				<h2 class="section--paragraph__tittle"><?php echo $l->t('Advanced tools');?></h2>
					<ul>
					<li><?php echo $l->t('Edit inline charts;');?></li>
					<li><?php echo $l->t('Group objects;');?></li>
					<li><?php echo $l->t('Insert text boxes;');?></li>
					<li><?php echo $l->t('Spell Checking;');?></li>
					<li><?php echo $l->t('Translation & Macros;');?></li>
                </div>
                <div class="col-md-4 revealOnScroll">
                    <h2 class="section--paragraph__tittle"><?php echo $l->t('Great design');?></h2>
					<li><?php echo $l->t('Work with auto-shapes;');?></li>
					<li><?php echo $l->t('Add Text Art objects;');?></li>
					<li><?php echo $l->t('Apply colour schemes;');?></li>
					<li><?php echo $l->t('Cell text formatting;');?></li>
					<li><?php echo $l->t('YouTube Integration;');?></li>
					</ul>
				</div>
				<div class="col-md-4 featureblock revealOnScroll">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('Perfect collaboration');?></h2>
					<ul>
					<li><?php echo $l->t('Public read only/read write links;');?></li>
                    <li><?php echo $l->t('Track changes, accept/reject changes;');?></li>
                    <li><?php echo $l->t('Multiple co-editing modes');?></li>
                    <li><?php echo $l->t('Commenting;');?></li>
                    <li><?php echo $l->t('Mail merge.');?></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="featurerow">
			<div class="row">
				<div class="col-md-6 revealOnScroll">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/include-integration-details.png" alt="in action" />
				</div>
				<div class="col-md-4 col-md-offset-2 revealOnScroll featureblock">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('Seamless integration');?></h2>
					<ul>
                        <li><?php echo $l->t('File creation, editing, saving;');?></li>
                        <li><?php echo $l->t('Conversion to OOXML formats;');?></li>
                        <li><?php echo $l->t('File versions;');?></li>
                        <li><?php echo $l->t('Federated share support;');?></li>
                        <li><?php echo $l->t('Editing via public links;');?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container-fluid call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock revealOnScroll">
				<h1 class="section--heading-1 text-center"><?php echo $l->t('For home users');?></h1>
				<div class="text-center morebuttondiv">
					<a href="https://www.include.com/download.aspx" class="button button--large button--arrow"><?php echo $l->t('Get ONLYOFFICE for at home');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
