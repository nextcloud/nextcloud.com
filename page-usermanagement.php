<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/usermanagement.css" rel="stylesheet">
<!-- <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script> -->
<!--<script type="text/javascript">
    var CaptchaCallback = function() {
        grecaptcha.render('RecaptchaField1', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
        grecaptcha.render('RecaptchaField2', {'sitekey' : '<?php echo RECAPTCHA_SITEKEY; ?>'});
    };
</script>-->
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png">
</head>

<div class="background usermanagement-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('User Management');?></h1>
				<h2><?php echo $l->t('<span class="avoidwrap">Easy account management</span>, <span class="avoidwrap">from 5 to 50 million users</span>');?></p>
			</div>
		</div>
	</div>
</div>
<section class="section--header">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="section--paragraph__tittle"><?php echo $l->t('Integrated account management');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud features integration with external user directories like LDAP or others as well as built-in account management, two-factor authentication and Single-sign-on support.');?></p>
		</div>
	</div>
</div>
</section>
<section class="section--builtin">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Easy user management');?></p>
			<p class="section--paragraph"><?php echo $l->t('Admins can create, modify, search and view user accounts using Nextcloud built-in user management. Name, disk quota, mail addresses and group membership can be handled and users can be given administrator privileges if needed.');?></p>
			<p class="section--paragraph"><?php echo $l->t('If you need to integrate Nextcloud with an existing system, take advantage of support for one or more LDAP directories instead of or in addition to local users. Nextcloud can secure logins with two-factor authentication and supports single sign-on through SAML, OAuth2, Kerberos and others.');?></p>
			<p class="section--paragraph"><?php echo $l->t('For large-scale solutions, performance optimization, additional tools and advice, see the ');?><a class="hyperlink" href="https://portal.nextcloud.com"><?php echo $l->t('Nextcloud customer portal.');?></a></p>
		</div>
	</div>
</div>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock revealOnScroll">
				<p class=""><?php echo $l->t('Learn more about how Nextcloud helps you keep your data secure.');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('secure') ?>" class="button button--large button--arrow"><?php echo $l->t('Security in Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="section--ldap">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/ldap.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/ldap.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('LDAP/Active Directory user management');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud features a high performance, full-featured LDAP application which lets users authenticate through their LDAP credentials. Group management, quotas and sharing permissions can be managed as usual. Nextcloud features LDAP group support, sharing, primary groups and easy configuration with auto-detection of LDAP attributes.');?></p>
			<p class="section--paragraph"><?php echo $l->t('For security reasons, the default LDAP configuration is fully read-only. A plugin infrastructure exists  with some experimental applications already available that enable administrators to manage an LDAP server through Nextcloud. Creating, updating and removing LDAP configurations can optionally be done through an external, REST-based API.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_user/user_auth_ldap_api.html"><?php echo $l->t('Find documentation here.');?></a></p>
		</div>
	</div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
			<div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('Get our LDAP datasheet');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download our free datasheet: <br /> LDAP user management');?><br>
                    <td colspan="2">
                    <div class="">
                        <div id="RecaptchaField1"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="7">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the datasheet "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ldap-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--more">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Secure Authentication');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud supports securing authentication through Nextcloud itself with a plugin-based two-factor authentication method. Supported are, among others, TOTP, NFC, SMS, Signal/Telegram and U2F. Upon activation by the system administrator, users can activate 2FA in their personal settings.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_user/two_factor-auth.html"><?php echo $l->t('Find documentation here.');?></a></p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/saml.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/saml.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Single-sign-on');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud features an SSO & SAML app for easy Single-sign-on integration. SAML 2.0 is supported against OneLogin, Shibboleth, and ADFS. The app also features authentication via environment variables, including support for Kerberos, OAuth2, OpenID and many other mechanisms provided by Apache modules.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The native SAML integration negates the need for external software like Apache modules. Native SAML is compatible with all webservers and supports group memberships, flexible session management and app specific passwords. It can handle multiple Identity Providers and can authenticate to Samba servers with Kerberos.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="https://portal.nextcloud.com/article/configuring-single-sign-on-10.html"><?php echo $l->t('Find documentation on our customer portal.');?></a></p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/gluu.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/gluu.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Other user backends');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud can work with a number of other backends for authentication and user handling: IMAP, SMB and FTP. These can be used to integrate Nextcloud more easily in company infrastructure. On the app store, more authentication and user backends can be found, like integration with Gluu.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_user/user_auth_ftp_smb_imap.html"><?php echo $l->t('Find documentation here');?></a> <?php echo $l->t('and');?> <a class="hyperlink" href="https://apps.nextcloud.com"><?php echo $l->t('our app store here.');?></p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/api.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/api.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6 revealOnScroll">
			<p class="section--paragraph__tittle"><?php echo $l->t('Automated or manual provisioning');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud offers an easy-to-use, REST-based provisioning API to create and configure user accounts. It is possible to create, edit, delete and query user attributes, query, set and remove groups, set quota and query total storage used in Nextcloud.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The API enables an admin to query for active Nextcloud applications, application info, and to enable or disable an app remotely. HTTP requests can be used via a Basic Auth header to easily integrate workflows with existing tools and infrastructure.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_user/user_provisioning_api.html"><?php echo $l->t('Find documentation here.');?></a></p>
		</div>
	</div>
</div>
</section>
