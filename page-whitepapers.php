<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/whitepapers.css?v=1" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
</head>

<div class="background whitepapers-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('In-depth knowledge');?></h1>
				<h2><?php echo $l->t('White papers, case studies, data sheets, and industry analysis give a deep insight in what Nextcloud has to offer.');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--whitepapers">
<div class="container">
    <h1 class="section--heading-2"><?php echo $l->t('Whitepapers and case studies');?></h1>
    <p class="section--paragraph"><?php echo $l->t('The Nextcloud white papers and case studies give a deep-dive in Nextcloud technology, processes around security, scalability and real-world benefits of deployments.');?></p>
	<div class="row list display-flex">
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/architecture-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Architecture Overview');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Get an overview of the Nextcloud architecture and capabilities like user management, external storage and more.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField1"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="1">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/security-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Security');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('The Nextcloud security white paper gives an overview of the security features and processes designed to keep data in Nextcloud confidential.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField2"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="14">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/serverside-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Server-side Encryption');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud features server-side encryption to encrypt data at rest. It is particularly powerful when used with external storage as it ensures keys never leave the Nextcloud server.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField3"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="11">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/tub-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('TU Berlin Migration');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('The TU Berlin successfully migrated 30.000 users to Nextcloud, achieving near 50% lower database load and feature benefits. Find out what their setup looks like today.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField4"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="5">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
        <div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ivz-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('German Radio and TV');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('IVZ, Germany’s public radio and television deploys Nextcloud with ONLYOFFICE for efficient file exchange and online content collaboration.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField4"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="93">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/nwu-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('North-West University Study');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('The North-West University of South Africa improves user storage mobility, collaboration and productivity with Nextcloud and Collabora Online.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField7"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="48">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/kas-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Konrad-Adenauer-Stiftung Case Study');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Keeping data secure for a globally distributed organization working with politically sensitive data.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField7"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="56">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/endtoend-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('End-to-end Encryption');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud end-to-end encryption offers the ultimate protection for data, encrypting it on the client before sending it to the server.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField5"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="12">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ncc-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('NCC Group review');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('We had the security experts from the independent NCC Group review our security processes and capabilities. Read their full report!');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField6"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="10">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/gs-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Global Scale');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Global Scale delivers aglobally scalable solution for deployments with hundreds of millions of users, control over data locality and significant cost reductions.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField7"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="4">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
        <div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/deges-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Casestudy DEGES');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud provides project management organization DEGES a content collaboration platform to efficiently manage over € 22 billion in construction projects in Germany');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField7"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="83">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
        <div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/nwu-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('North-West University Study');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('The North-West University of South Africa improves user storage mobility, collaboration and productivity with Nextcloud and ONLYOFFICE.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField7"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="90">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
        <div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/hackerone-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('HackerOne Case study');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Why Nextcloud puts Hacker-powered security front and center. A case study by HackerOne.');?></p>
                </div>
                    <a style="margin-top: 130px" class="button button--blue button--small" href="https://www.hackerone.com/resources/nextcloud-puts-hacker-powered-security-front-and-center"><?php echo $l->t('Download');?></a>
			</div>
		</div>
        <div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/bareos-thumbnail-banner.png"/>
            </div>
            <div class="row">
                <div class="description">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Bareos Backup Whitepaper');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('How to backup Nextcloud efficiently and safely using the open source Bareos backup tool. Case study by Bareos.');?></p>
                </div>
                    <a style="margin-top: 130px" class="button button--blue button--small" href="
https://www.bareos.com/en/company_news/whitepaper-bareos-nextcloud-en.html"><?php echo $l->t('Download');?></a>
            </div>
        </div>
	</div>
</div>
</section>

<?php require get_template_directory().'/verticals.php';?>

<section class="section--whitepapers">
<div class="container">
    <h1 class="section--heading-2"><?php echo $l->t('Data sheets and Industry Analysis');?></h1>
    <p class="section--paragraph"><?php echo $l->t('The experts at Nextcloud keep a close watch on the needs of enterprises. Our data sheets showcase the capabilities and benefits of Nextcloud while our Industry Analysis documents our insights in various industries.');?></p>
	<div class="row list">
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/healthcare-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Health care analysis');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('The Health care market poses a special challenge to IT, requiring immediate availability of life-saving data while securing Protected Health Information. Nextcloud is an uniquely fitting solution.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField8"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="2">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/gdpr-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('GDPR analysis');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('The GDPR offers a challenge for all enterprises looking to do business in Europe. European data centers as offered by Amazon, Dropbox or Microsoft are hardly a real solution: self-hosting is easier and safer.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField9"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="15">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/gdpr-overview-thubmnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('GDPR Overview');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Our GDPR Overview document offers a basic 12 step process to GDPR compliance, as part of our GDPR Compliance Kit. Customers can download the complementing GDPR Admin Manual on our customer portal.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField15"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="46">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/monitoring-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Monitoring and Auditing');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Monitoring is crucial to keep servers running smoothly. Nextcloud also features powerful activity tracking and compliance-ready auditing capabilities.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField10"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="13">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
	</div>
	<div class="row list">
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/file-access-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Workflow and File Access Control');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud features a powerful File Access Control feature to ensure only authorized file access. Our Workflow and data retention capabilites help optimize processes in the enterprise.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField11"></div>
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
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ldap-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('User management with LDAP');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud features integration with external user directories like LDAP/Active Directory or others as well as built-in account management, two-factor authentication and Single-sign-on support.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField12"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="7">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/wnd-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Windows Network Drive');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud supports a wide range of External Storage solutions, enabling enterprises to keep their data where it is while making it seamlessly available through Nextcloud. Windows Network Drive is one such integration available.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField13"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="8">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/sharepoint-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('SharePoint Integration');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud supports a wide range of External Storage solutions, enabling enterprises to keep their data where it is while making it seamlessly available through Nextcloud. SharePoint is one such integration available.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField14"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="9">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
	</div>
	<div class="row list">
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/outlook-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Outlook Add-in');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Microsoft Outlook is a standard in most offices and Nextcloud offers integration through our add-in, making sharing large files easier & more secure and tracking downloads or uploads by recipients.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField15"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="58">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
<!--                         <input type="checkbox" name="newsletter" value="1"> <small>Sign me up for the Nextcloud newsletter</small><br/> -->
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Inform me about new white papers and other relevant information');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--blue button--small" type="submit" value="Download"></p>
                </form>
			</div>
		</div>
    </div>
</div>
</section>

<section class="section--videos">
<div class="container">
    <h2 class="section--heading-2"><?php echo $l->t('Videos and talks');?></h2>
    <p class="section--paragraph"><?php echo $l->t('At our events customers sometimes talk about their use of Nextcloud.');?></p>
    <div class="row">
        <div class="col-md-4">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/_4TcDrH7PkE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-md-4">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/MnOE4dOuYP4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-md-4">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/_JYU8b3gXFw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section class="section--blogs">
<div class="container">
    <h2 class="section--heading-2"><?php echo $l->t('Interviews and blogs');?></h2>
    <p class="section--paragraph"><?php echo $l->t('We regularly cover customer interviews and case studies on our blog.');?></p>
    <ul>
        <?php $whitepaper_posts = get_posts( array( 'numberposts' => 50, 'category' => get_cat_ID('whitepaper') ) );
        foreach ($whitepaper_posts as $wpost) { ?>
            <?php $dat = date_create_from_format('Y-m-d H:i:s', $wpost->post_date); ?>
            <li><a class="hyperlink" href="<?php echo wp_get_canonical_url($wpost->ID);?>"><?php echo date_format($dat, 'F, j, Y');?> - <?php echo $wpost->post_title;?></a></li>
        <?php } ; ?>
    </ul>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock">
				<p class="text-center"><?php echo $l->t('Learn more about the Nextcloud Enterprise Subscription.');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('enterprise') ?>" class="button button--large button--arrow"><?php echo $l->t('Your way to success');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
