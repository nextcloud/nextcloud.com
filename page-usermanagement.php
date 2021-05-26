<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/usermanagement.css?v=3" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Personal_Secuity_2FA_TOTP_Setup.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Personal_Secuity_2FA_TOTP_Setup.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Personal_Secuity_2FA_TOTP_Setup.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/Personal_Secuity_2FA_TOTP_Setup.png">
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
			<h3 class="section--paragraph__title"><?php echo $l->t('Integrated account management');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud features integration with external user directories like LDAP, Active Directory or others as well as built-in account management, two-factor authentication and Single-sign-on support.');?></p>
		</div>
	</div>
</div>
</section>
<section class="section--builtin">
<div class="container">
	<div class="row">
        <div class="col-md-6  image--feature new-img image--floated">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/usermanagement.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/usermanagement.png" alt="in action" ></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Easy user management');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Admins can create, modify, search and view user accounts using Nextcloud built-in user management. Name, disk quota, mail addresses and group membership can be handled and users can be given administrator privileges if needed.');?></p>
			<p class="section--paragraph"><?php echo $l->t('If you need to integrate Nextcloud with an existing system, take advantage of support for one or more LDAP directories instead of or in addition to local users. Nextcloud can secure logins with two-factor authentication and supports single sign-on through SAML, OAuth2, Kerberos and others.');?></p>
			<p class="section--paragraph"><?php echo $l->t('For large-scale solutions, performance optimization, additional tools and advice, see the ');?><a class="hyperlink" href="https://portal.nextcloud.com"><?php echo $l->t('Nextcloud customer portal.');?></a></p>
		</div>
	</div>
	<div class="row">
        <div class="col-md-6  image--feature new-img">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/groupadmin.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupadmin.png" alt="in action" ></a>
        </div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Group admins');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The administrator can delegate some work by elevating some accounts to group administrator over specified groups. This allows them to create new users as members of these groups as well as delete and modify them.');?></p>
			<p class="section--paragraph"><?php echo $l->t('When enabled, group admins can also create 2-factor one-time login codes and do other administrative tasks like manage ACLs on Groupfolders.');?></p>
		</div>
	</div>
	<div class="row">
        <div class="col-md-6  image--feature new-img image--floated">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/guest_account.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/guest_account.png" alt="creating a guest account" ></a>
        </div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Guest accounts');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The guest accounts app enables users to create guest accounts for recipients. The administrator can determine what access rights these users need to have to external storage and apps.');?></p>
			<p class="section--paragraph"><?php echo $l->t('As guests have a special (hidden) group, administrators can use the Workflow and File Access Control capabilities to restrict, for example, users from downloading or sharing data. In Virtual Dataroom scenarios guest accounts can be given access to data read-only or with editing rights while blocking downloads and watermarking all files. Documents can shared with them through the Secure Mailbox feature from the Nextcloud Outlook Add-in which prevents the mail body and attachments from leaking.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Upon creation, users can designate a group to a guest account.');?></p>
            <a class="button button--blue button--arrow" href="<?php echo home_url('workflow') ?>"><?php echo $l->t('Workflow and File Access Control');?></a><br />
            <a class="button button--blue button--arrow" href="<?php echo home_url('virtual-data-room') ?>"><?php echo $l->t('Virtual data room features');?></a>
		</div>
	</div>
    <div class="row">
        <div class="col-md-6 image--feature">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/HaveIBeenPwned.png" alt="password settings" ></a>
        </div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Password security enforcement');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Password security is extremely important and Nextcloud follows the latest and most strict standards.');?></p>
			<p class="section--paragraph"><?php echo $l->t('We go beyond these standards, checking passwords against the database of compromised accounts and passwords from well known security researcher Troy Hunt. This optional but highly recommended feature ensures users can not reuse a password which has been compromised on another website already. Read our blog to learn how this feature protects your users.');?></p>
            <a class="button button--blue button--arrow" href="https://nextcloud.com/blog/nextcloud-will-check-passwords-against-database-of-haveibeenpwned/"><?php echo $l->t('Blog on HaveIBeenPwned check');?></a>
		</div>
	</div>
    <div class="row">
        <div class="col-md-6 image--floated">
            <div data-type="youtube" data-video-id="8bS4-JELEdk"></div>
            <iframe width="100%" height="300" src="https://www.youtube-nocookie.com/embed/vKJCThXEPXk" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Add accounts easily with a QR code');?></h3>
            <p class="section--paragraph"><?php echo $l->t('See how easy it is for a Nextcloud user to add new accounts on their mobile devices.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Our powerful clients are among the best rated file sync and share clients in the industry and easy to use!');?></p>
            <a class="button button--blue button--arrow" href="<?php echo home_url('clients') ?>"><?php echo $l->t('Learn about our clients');?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div data-type="youtube" data-video-id="oyWXMjb-6ik"></div>
            <iframe width="100%" height="300" src="https://www.youtube-nocookie.com/embed/oyWXMjb-6ik" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Remote Wipe');?></h3>
            <p class="section--paragraph"><?php echo $l->t('While Nextcloud supports Mobile Device Management solutions, thanks to built-in support, remote wipe will work on systems not under management of the company. This is useful for home users but also large universities and of course in a scenario where guest accounts were handed to a third party. If you permit downloading of documents by the third party, you can wipe the documents from their devices when the the collaboration has ended.');?></p>
            <p class="section--paragraph"><?php echo $l->t('Remote wipe can be used on a per-device basis by users and on a per-user base by the administrator.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/remote-wipe-user.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/remote-wipe-user.png" alt="Remote wipe as a user, per device" class="img-responsive"></a><br />
            <?php echo $l->t('Remote wipe as a user, per device');?>
        </div>
        <div class="col-md-4">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/remote-wipe-admin.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/remote-wipe-admin.png" alt="Remote wipe as admin, per user" class="img-responsive"></a><br />
            <?php echo $l->t('Remote wipe as admin, per user');?>
        </div>
        <div class="col-md-4">
            <div data-type="youtube" data-video-id="QmR86-LsGus"></div>
            <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/QmR86-LsGus" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe><br />
            <?php echo $l->t('Demo of remote wipe in the desktop client');?>
        </div>
    </div>
</div>
</section>

<div class="container-fluid quote">
	<div class="container">
		<div class="row ">
            <p class="text-center"><?php echo $l->t('Learn more about how Nextcloud helps you keep your data secure.');?></p>
            <div class="text-center morebuttondiv">
                <a href="<?php echo home_url('secure') ?>" class="button button--large button--arrow"><?php echo $l->t('Security in Nextcloud');?> <i class="icon-arrow-circle-o-right icon"></i></a>
			</div>
		</div>
	</div>
</div>


<section class="section--ldap">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/ldap.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/ldap.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('LDAP/Active Directory user management');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud features a high performance, full-featured LDAP application which lets users authenticate through their LDAP credentials. Group management, quotas and sharing permissions can be managed as usual. Nextcloud features LDAP group support, sharing, primary groups and easy configuration with auto-detection of LDAP attributes.');?></p>
			<p class="section--paragraph"><?php echo $l->t('For security reasons, the default LDAP configuration is fully read-only. Creating, updating and removing LDAP configurations can optionally be done through an external, REST-based API.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud also supports limited LDAP/AD account management, enabling admins to create, modify or delete users in the connected user directory. Through a plugin-infrastructure, more capabilities can be added.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_user/user_auth_ldap_api.html"><?php echo $l->t('Find documentation here.');?></a></p>
		</div>
	</div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container ">
        <div class="row">
			<div class="col-lg-8">
                <h2 class=""><?php echo $l->t('Get our LDAP datasheet');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                    <p><label for="email"><?php echo $l->t('Download our free datasheet: <br /> LDAP user management');?><br>
                    <input type="hidden" name="segmentId" value="7">
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
                    <input class="button button--large" type="submit" value=" Get the datasheet "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ldap-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--more">

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/api.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/api.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Automated or manual provisioning');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud offers an easy-to-use, REST-based provisioning API to create and configure user accounts. It is possible to create, edit, delete and query user attributes, query, set and remove groups, set quota and query total storage used in Nextcloud.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The API enables an admin to query for active Nextcloud applications, application info, and to enable or disable an app remotely. HTTP requests can be used via a Basic Auth header to easily integrate workflows with existing tools and infrastructure.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_user/user_provisioning_api.html"><?php echo $l->t('Find documentation here.');?></a></p>
		</div>
	</div>
</div>
</section>


<div class="container">
	    <div class="row">
        <div class="col-md-6  image--feature new-img image--floated">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/Personal_Secuity_2FA_TOTP_Setup.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/Personal_Secuity_2FA_TOTP_Setup.png" alt="in action" ></a>
        </div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Multi-factor authentication');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud supports a wide variety of second factors and allows admins to enforce use of 2-factor authentication.');?></p>
			<h3 class="section--paragraph__title"><?php echo $l->t('Second factors:');?></h3>
			<ul>
                <li><?php echo $l->t('Time-based One-Time Password (TOTP, including Google Authenticator or similar apps');?></li>
                <li><?php echo $l->t('Universal 2nd Factor hardware tokens (U2F, like Yubikeys or Nitrokeys, also supports NFC)');?></li>
                <li><?php echo $l->t('FIDO2 and WebAuthn compatibility, allowing use of hardware tokens, Windows Hello, FaceID and other FIDO2 compatible technologies to authenticate users or function as second factor. Passwordless login with WebAuthn is supported.');?></li>
                <li><?php echo $l->t('Gateways: SMS, secure messaging apps Telegram, Signal and more');?></li>
                <li><?php echo $l->t('Notification (just click to approve login on an existing device like phone)');?></li>
                <li><?php echo $l->t('Code in an email');?></li>
                <li><?php echo $l->t('User backup code (User has to generate these in advance and store them in a safe location)');?></li>
                <li><?php echo $l->t('Administrator backup code (creating those can be delegated to group admins)');?></li>
			</ul>
			<p class="section--paragraph"><?php echo $l->t('Any number of these can be enabled by the admin.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Active user sessions can be invalidated through a list, by removing the user in the admin settings or by changing passwords. Users can manage their own sessions and devices.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_user/two_factor-auth.html"><?php echo $l->t('Find documentation here.');?></a></p>
			<p class="section--paragraph"><a class="hyperlink" href="https://nextcloud.com/blog/nitrokey-and-nextcloud-collaborate-on-securing-private-clouds/"><?php echo $l->t('OTP and FIDO2 Nitrokey hardware has been certified with Nextcloud.');?></a> <?php echo $l->t('HSM functionality is being developed.');?></p>
		</div>
	</div>
	<div class="row">
	<h3 class="section--paragraph__title"><?php echo $l->t('Some examples');?></h3>
        <div class="col-md-4">
            <a href="https://nextcloud.com/media/enforce-2FA-for-guests.png"><img src="https://nextcloud.com/media/enforce-2FA-for-guests.png" alt="2FA enforcement settings, enforcing for guest users" class="img-responsive"></a><br />
            <?php echo $l->t('2FA enforcement settings, enforcing for guest users');?>
        </div>
        <div class="col-md-4">
            <a href="https://nextcloud.com/media/enforce-setup-2FA-on-login.png"><img src="https://nextcloud.com/media/enforce-setup-2FA-on-login.png" alt="2FA setup on first login" class="img-responsive"></a><br />
            <?php echo $l->t('2FA setup on first login');?>
        </div>
        <div class="col-md-4">
            <a href="https://nextcloud.com/media/2FA-admin-temporary-code-generator.png.png"><img src="https://nextcloud.com/media/2FA-admin-temporary-code-generator.png.png" alt="One-time login token creation" class="img-responsive"></a><br />
            <?php echo $l->t('one-time login token creation');?>
        </div>
        </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/saml.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/saml.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Single-sign-on');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud features an SSO & SAML app for easy Single-sign-on integration. SAML 2.0 is supported against OneLogin, Shibboleth, and ADFS. The app also features authentication via environment variables, including support for Kerberos, OAuth2, OpenID and many other mechanisms provided by Apache modules.');?></p>
			<p class="section--paragraph"><?php echo $l->t('The native SAML integration negates the need for external software like Apache modules. Native SAML is compatible with all webservers and supports group memberships, flexible session management and app specific passwords. It can handle multiple Identity Providers and can authenticate to Samba servers with Kerberos.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="https://portal.nextcloud.com/article/configuring-single-sign-on-10.html"><?php echo $l->t('Find documentation on our customer portal.');?></a></p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6  image--floated">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/gluu.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/gluu.png" class="img-responsive featureimg" /></a>
		</div>
		<div class="col-md-6">
			<h3 class="section--paragraph__title"><?php echo $l->t('Other user backends');?></h3>
			<p class="section--paragraph"><?php echo $l->t('Nextcloud can work with a number of other backends for authentication and user handling: IMAP, SMB and FTP. These can be used to integrate Nextcloud more easily in company infrastructure. On the app store, more authentication and user backends can be found, like integration with Gluu.');?></p>
			<p class="section--paragraph"><a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_user/user_auth_ftp_smb_imap.html"><?php echo $l->t('Find documentation here');?></a> <?php echo $l->t('and');?> <a class="hyperlink" href="https://apps.nextcloud.com"><?php echo $l->t('our app store here.');?></p>
		</div>
	</div>
</div>

<div class="container">
    <div class="features--container row">
        <div class="col-md-6 image--feature new-img screenshot">
            <a target="_blank" href="<?php bloginfo('template_directory'); ?>/assets/img/features/suspicious-login-settings.png"><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/suspicious-login-settings.png" /></a>
        </div>
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/machine.svg">
                <h3 class="section--paragraph__title"><?php echo $l->t('Machine learning based suspicious login detection');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud includes a machine learning technology which trains a neural network on successful logins on the instance and uses it to classify login attempts. Should it detect a login classified as suspicious by the trained model, it will notify the user and store an entry in the log for the system administrator.');?></p>
                <p class="section--paragraph"><?php echo $l->t('When the user is notified, they can terminate the suspicious session, and proceed to set a new password. The administrator can also take action, like disabling user accounts or forcing users to pick a new password.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Of course, the solution is designed to protect privacy and all data remains on your server!');?></p>
                <p class="section--paragraph"><?php echo $l->t('Learn more in our');?> <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-16-becomes-smarter-with-machine-learning-for-security-and-productivity/" target="_blank" rel="tooltip" title="announcement blog"><?php echo $l->t('announcement blog');?></a></p>
            </div>
        </div>
    </div>
</div>
</section>
