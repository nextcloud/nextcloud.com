<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/whitepapers.css" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
<script type="text/javascript">
    var CaptchaCallback = function() {
        grecaptcha.render('RecaptchaField1', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField2', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField3', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField4', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField5', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField6', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField7', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField8', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField9', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField10', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField11', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField12', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField13', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField14', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField15', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField16', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField17', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField18', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField19', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField20', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField21', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField22', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
    };
</script>
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
    <h1 class="section--heading-2 revealOnScroll"><?php echo $l->t('Whitepapers and case studies');?></h1>
    <p class="section--paragraph"><?php echo $l->t('The Nextcloud white papers and case studies give a deep-dive in Nextcloud technology, processes around security, scalability and real-world benefits of deployments.');?></p>
	<div class="row list display-flex">
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/architecture-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('Architecture Overview');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Get an overview of the Nextcloud architecture and capabilities like user management, external storage and more.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField1"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="1">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/security-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('Security');?></p>
                    <p class="section--paragraph"><?php echo $l->t('The Nextcloud security white paper gives an overview of the security features and processes designed to keep data in Nextcloud confidential.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField2"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="14">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/serverside-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('Server-side Encryption');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud features server-side encryption to encrypt data at rest. It is particularly powerful when used with external storage as it ensures keys never leave the Nextcloud server.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField3"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="11">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/tub-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('TU Berlin Migration');?></p>
                    <p class="section--paragraph"><?php echo $l->t('The TU Berlin successfully migrated 30.000 users to Nextcloud, achieving near 50% lower database load and feature benefits. Find out what their setup looks like today.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField4"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="5">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
	</div>
	<div class="row list">
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/endtoend-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('End-to-end Encryption');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud end-to-end encryption offers the ultimate protection for data, encrypting it on the client before sending it to the server.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField5"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="12">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ncc-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('NCC Group review');?></p>
                    <p class="section--paragraph"><?php echo $l->t('We had the security experts from the independent NCC Group review our security processes and capabilities. Read their full report!');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField6"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="10">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/gs-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('Global Scale');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Global Scale delivers aglobally scalable solution for deployments with hundreds of millions of users, control over data locality and significant cost reductions.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField7"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="4">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
	</div>
</div>
</section>

<?php require get_template_directory().'/verticals.php';?>

<section class="section--whitepapers">
<div class="container">
    <h1 class="section--heading-2 revealOnScroll"><?php echo $l->t('Data sheets and Industry Analysis');?></h1>
    <p class="section--paragraph"><?php echo $l->t('The experts at Nextcloud keep a close watch on the needs of enterprises. Our data sheets showcase the capabilities and benefits of Nextcloud while our Industry Analysis documents our insights in various industries.');?></p>
	<div class="row list">
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/healthcare-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('Health care analysis');?></p>
                    <p class="section--paragraph"><?php echo $l->t('The Health care market poses a special challenge to IT, requiring immediate availability of life-saving data while securing Protected Health Information. Nextcloud is an uniquely fitting solution.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField8"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="2">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/gdpr-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('GDPR analysis');?></p>
                    <p class="section--paragraph"><?php echo $l->t('The GDPR offers a challenge for all enterprises looking to do business in Europe. European data centers as offered by Amazon, Dropbox or Microsoft are hardly a real solution: self-hosting is easier and safer.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField9"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="15">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/monitoring-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('Monitoring and Auditing');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Monitoring is crucial to keep servers running smoothly. Nextcloud also features powerful activity tracking and compliance-ready auditing capabilities.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField10"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="13">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/file-access-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('Workflow and File Access Control');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud features a powerful File Access Control feature to ensure only authorized file access. Our Workflow and data retention capabilites help optimize processes in the enterprise.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField11"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="6">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
	</div>
	<div class="row list">
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ldap-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('User management with LDAP');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud features integration with external user directories like LDAP/Active Directory or others as well as built-in account management, two-factor authentication and Single-sign-on support.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField12"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="7">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/wnd-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('Windows Network Drive');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud supports a wide range of External Storage solutions, enabling enterprises to keep their data where it is while making it seamlessly available through Nextcloud. Windows Network Drive is one such integration available.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField13"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="8">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
		<div class="col-md-3">
            <div class="row wpthumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/sharepoint-thumbnail-banner.png"/>
            </div>
            <div class="row">
				<div class="description">
					<p class="section--paragraph__tittle"><?php echo $l->t('SharePoint Integration');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud supports a wide range of External Storage solutions, enabling enterprises to keep their data where it is while making it seamlessly available through Nextcloud. SharePoint is one such integration available.');?></p>
                </div>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <td colspan="2">
                    <div class="recaptcha">
                        <div id="RecaptchaField14"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="9">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--blue button--small" type="submit" value="download"></p>
                </form>
			</div>
		</div>
	</div>
</div>
</section>


<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock revealOnScroll">
				<p class="text-center"><?php echo $l->t('Learn more about the Nextcloud Enterprise Subscription.');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('enterprise') ?>" class="button button--large button--arrow"><?php echo $l->t('Your way to success');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
