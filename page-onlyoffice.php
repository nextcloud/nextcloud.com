<head>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/onlyoffice.css?v=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["pages/collabora"])
	});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/onlyoffice.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/onlyoffice.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/onlyoffice.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/onlyoffice.png">
</head>

<div class="background onlyoffice-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Your private office');?></h1>
 				<h2><?php echo $l->t('Self-host secure office document collaboration with ONLYOFFICE');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--video">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <stream src="6644f6c1e7c0a5e3ff5b877e07ed1dea" controls poster="<?php bloginfo('template_directory'); ?>/assets/img/features/documents-video.png"></stream>
            <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=6644f6c1e7c0a5e3ff5b877e07ed1dea"></script>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph text-center"><?php echo $l->t('ONLYOFFICE integration in Nextcloud empowers your users to collaborate on office documents with team members in real time.');?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('Compatibility with Microsoft Office formats means perfect documents, every time.');?></p>
        </div>
    </div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container">
        <div class="row">
			<div class="col-lg-8">
                <h2><?php echo $l->t('North-West University<br/> Case Study');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                    <p><label for="email"><?php echo $l->t('Get the free case study:');?><br>
                    <?php echo $l->t('The North-West University of South Africa improves user storage mobility,<br /> collaboration and productivity with Nextcloud and ONLYOFFICE.');?><br>
                    <input type="hidden" name="segmentId" value="90">
                    <input type="hidden" name="firstname" value="">
                    <input type="hidden" name="requesttime" value="<?php echo time(); ?>">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Subscribe me to the monthly Nextcloud newsletter');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--large" type="submit" value=" Get the case study "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/nwu-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--overview">
<div class="container-widest">
	<div class="row">
		<div class="col-md-4">
			<div class="text-center"><img class="overlay-trigger img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/onlyoffice-spreadsheet.png"  /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Powerful spreadsheet editor');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Organize and manage your data online in XLSX, ODS and CSV files with over 400 formulas and create colorful visualisations.');?></p>
        </div>
		<div class="col-md-4">
			<div class="text-center"><img class="overlay-trigger img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/onlyoffice-presentation.png" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Beautiful presentation builder');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Express ideas in beautiful presentations stored  in PPTX and ODP or exported to PDF full of charts, shapes and images.');?></p>
		</div>
		<div class="col-md-4">
			<div class="text-center"><img class="overlay-trigger img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/onlyoffice-document.png" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Complete document writer');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Open, edit and collaborate on Word, ODT, PDF or HTML documents in real time with powerful formatting and layout capabilities.');?></p>
		</div>
    </div>
</div>
</section>

<section class="section--main">
	<div class="container">
		<div class="featurerow">
			<div class="row">
<!-- 				</div> -->
				<div class="col-md-6 image--floated">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/pgSaYsgI6NU" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>

				</div>
				<div class="col-md-6 featureblock">
					<h2 class="section--paragraph__title"><?php echo $l->t('Up-to-date technology');?></h2>
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
				<div class="col-md-6">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png"><img class="img-responsive overlay-trigger" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/onlyoffice-integration.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 featureblock">
					<h2 class="section--paragraph__title"><?php echo $l->t('Integrated and on-premises');?></h2>
					<p class="section--paragraph"><?php echo $l->t('Instead of handing over data to a third party, ONLYOFFICE runs in your own data center, guaranteeing 100% confidentiality of the documents.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Integration in Nextcloud makes it easy to work on documents alone, with other Nextcloud users or with others whom participate through a publicly shared link.');?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section--advantages">
<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="section--heading-1 text-center"><?php echo $l->t('Key advantages');?></h1>
				<h3 class="text-center"><?php echo $l->t('What makes ONLYOFFICE the best online office solution on the market');?></h3>
            </div>
        </div>
		<div class="row">
            <div class="col-sm-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('A complete solution');?></h3>
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Full desktop-level set of formatting and file handling capabilities');?></li>
                    <li><?php echo $l->t('Deeply integrated in Nextcloud and offering powerful collaboration features');?></li>
                </ul></p>
            </div>
            <div class="col-sm-6">
                <h3 class="section--paragraph__title"><?php echo $l->t('Under your control');?></h3>
                <p class="section--paragraph">
                <ul>
                    <li><?php echo $l->t('Deployed on your own servers, giving you full control over your data');?></li>
                    <li><?php echo $l->t('100% open source guarantees transparency and no vendor lock-in');?></li>
                </ul></p>
            </div>
        </div>
   		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Request a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a><br/>
					<a href="https://www.onlyoffice.com/download.aspx" class="hyperlink"><?php echo $l->t('Get ONLYOFFICE for home use');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<section class="section--features">
    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/onlyoffice-3.png" alt="in action" /></a>
	<div class="container">
		<div class="featurerow">
			<div class="row">
<!-- 				</div> -->
				<div class="col-md-4">
				<h2 class="section--paragraph__title"><?php echo $l->t('Advanced tools');?></h2>
					<ul>
					<li><?php echo $l->t('Edit inline charts;');?></li>
					<li><?php echo $l->t('Group objects;');?></li>
					<li><?php echo $l->t('Insert text boxes;');?></li>
					<li><?php echo $l->t('Spell Checking;');?></li>
					<li><?php echo $l->t('Translation & Macros;');?></li>
                </div>
                <div class="col-md-4">
                    <h2 class="section--paragraph__title"><?php echo $l->t('Great design');?></h2>
					<li><?php echo $l->t('Work with auto-shapes;');?></li>
					<li><?php echo $l->t('Add Text Art objects;');?></li>
					<li><?php echo $l->t('Apply colour schemes;');?></li>
					<li><?php echo $l->t('Cell text formatting;');?></li>
					<li><?php echo $l->t('YouTube Integration;');?></li>
					</ul>
				</div>
				<div class="col-md-4 featureblock">
					<h2 class="section--paragraph__title"><?php echo $l->t('Perfect collaboration');?></h2>
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
				<div class="col-md-6">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/onlyoffice-integration-details.png" alt="in action" />
				</div>
				<div class="col-md-4 col-md-offset-2 featureblock">
					<h2 class="section--paragraph__title"><?php echo $l->t('Seamless integration');?></h2>
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
			<div class="col-md-8 col-md-offset-2 featureblock">
				<h1 class="section--heading-1 text-center"><?php echo $l->t('For home users');?></h1>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Request a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a><br/>
					<a href="https://www.onlyoffice.com/download.aspx" class="hyperlink"><?php echo $l->t('Get ONLYOFFICE for at home');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require get_template_directory().'/overlay.php'; ?>
