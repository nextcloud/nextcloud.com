<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/encryption.css?v=2" rel="stylesheet">
<!--    <script>
    require(["require.config"], function() {
        require(["bootstrap"])
    });
    </script>-->

<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta name=”Description” content="Nextcloud is the most secure private cloud solution - learn how it keeps your data safe!">
</head>

<div class=" background security-background">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1><?php echo $l->t('Encryption and hardening');?></h1>
            <h2><?php echo $l->t('Providing optimal security for your data and communication');?></h2>
        </div>
    </div>
</div>
<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph text-center"><?php echo $l->t('Security is key for Nextcloud users.');?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('To protect your data, Nextcloud is designed with military-grade encryption and a large number of advanced security protections. To support the admin, automated checks warn of security problems.');?></p>
		</div>
	</div>
</div>
</section>

<div class="container featureblock featureblock--has-separator">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="section--heading-1 section--text--center"><?php echo $l->t('Security advice');?></h1>
            <p class="section--paragraph section--text--center"><?php echo $l->t('We make securing your system as easy as possible');?></p>
        </div>
    </div>
    <div class="row">
        <div class="features--container">
            <div class="col-md-6 image--floated">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/security-warnings-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/security-warnings-nw.png" alt="in action" /></a>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/verified-security.svg">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Automated checks and tips');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud detects issues with its installation and warns when it finds unknown or modified files. Administrators can find security tips and warnings in the configuration screen.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Administrators can set password quality policies enforced by Nextcloud as well as limit or disable sharing, enforce expiration dates and passwords on shares, disable preview generation and more.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('You can find more information on hardening your Nextcloud installation in our extensive');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>installation/harden_server.html" target="_blank" rel="tooltip" title="Information for Admins"><?php echo $l->t('hardening guide</a>');?></p>
                    <p class="section--paragraph"><?php echo $l->t('We provide the <a class="hyperlink" href="https://scan.nextcloud.com">Nextcloud Security Scanner</a> to check the security of your private cloud server.');?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section--whitepaper quote">
	<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2><?php echo $l->t('Server-side Encryption');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                    <p><label for="email"><?php echo $l->t('Download our free whitepaper');?><br>
                     <td colspan="2" style="text-align:center">
                    <div class="">
                        <div id="RecaptchaField2"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="11">
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
                    <input class="button button--large" type="submit" value=" Get the whitepaper "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/serverside-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--encryption">
<div class="container featureblock">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="section--heading-1 section--text--center"><?php echo $l->t('Encryption');?></h1>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Employ encryption for the highest degree of privacy and security');?></p>
        </div>
    </div>
    <div class="row">
        <div class="features--container">
            <div class="col-md-6 col-md-offset-3">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-nw.png" alt="in action" /></a>
            </div>
        </div>
    </div>

    <div class="features--container row">
        <div class="col-md-4">
            <div class="feature">
                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/saml.svg"); ?>
                <h3 class="section--paragraph__title"><?php echo $l->t('Encrypted data transfer');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud employs industry-standard TLS to encrypt data in transfer. Usage of Object Storage like Amazon S3 or other external storage systems can be secured through Server Side Encryption.');?></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/vault.svg">
                <h3 class="section--paragraph__title"><?php echo $l->t('Encrypt data at rest');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Server Side Encryption can also be used on local storage. However, inherent to the concept of server side encryption, encryption keys will be present in memory of the Nextcloud server during the time a user is logged in and could be retrieved by a determined attacker. We take care to ensure keys are not stored unencrypted on permanent storage and at rest keys are encrypted using a strong cipher.');?></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/securitypolicies.svg">
                <h3 class="section--paragraph__title"><?php echo $l->t('Encrypt from client to client');?></h3>
                <p class="section--paragraph"><?php echo $l->t('End-to-end Encryption client-side is available from Nextcloud desktop client 3.0 and newer as a folder-level option to keep extremely sensitive data fully secure even in case of a full server breach. The server facilitates key exchange for syncing between devices and sharing but has Zero Knowledge, that is, never has access to any of the data or keys in unencrypted form.');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('Learn more here.</a>');?></p>
            </div>
        </div>
    </div>
    <div class="features--container row">
        <div class="col-md-6 image--floated">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/attack_tree_virus.png" alt="virus attack tree" />
        </div>
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/virusscaning.svg">
                <h3 class="section--paragraph__title"><?php echo $l->t('Threat models and attack trees');?></h3>
                <p class="section--paragraph"><?php echo $l->t('There is a number of important decisons to be made about encryption in Nextcloud. The various solutions come with advantages and downsides. Read our blog linked below to find out more about the properties of each solution.');?></p>
                <p class="section--paragraph"><a class="button button--blue button--arrow" href="https://nextcloud.com/blog/encryption-in-nextcloud/" target="_blank" rel="tooltip" title="Encryption in Nextcloud"><?php echo $l->t('Encryption in Nextcloud');?></a></p>
            </div>
        </div>
    </div>
    <div class="features--container row">
        <div class="col-md-6">
            <img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-recovery.png" alt="in action" />
        </div>
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/keys.svg">
                <h3 class="section--paragraph__title"><?php echo $l->t('Server-side encryption with flexible key handling');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud supports pluggable encryption key handling. If you have an external key server or Hardware Security Module, these can be made to work with Nextcloud.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Our default encryption key handling enables administrators to set a system wide recovery key for encrypted files,. This ensures that, even when users lose their password, files can always be decrypted. Encrypted files can be shared but after changing encryption settings, shares will have to be re-shared. Using our command line tools, data can be encrypted, decrypted or re-encrypted when needed.');?></p>
                <p class="section--paragraph"><?php echo $l->t('If you face a regulatory or compliance need to encrypt data at rest but do not need to actually secure this data, locally encrypting data using our built in key management may satisfy compliance requirements.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Learn how to use server side encryption in our');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank" rel="tooltip" title="Server Side Encryption Configuration"><?php echo $l->t('documentation</a>');?></p>
            </div>
        </div>
    </div>
    <div class="features--container row">
        <div class="col-md-6 image--floated">
            <img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-android-nw.png" alt="in action" />
        </div>
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/securitypolicies.svg">
                <h3 class="section--paragraph__title"><?php echo $l->t('Seamless End-to-end Encryption on the clients');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud features an enterprise-grade, seamlessly integrated solution for end-to-end encryption. It enables users to pick one or more folders on their desktop or mobile client for end-to-end encryption. Folders can be shared with other users and synced between devices but are never readable by the server.');?></p>
                <p class="section--paragraph"><?php echo $l->t('This solution is easy to use yet extremely secure thanks to its Zero-Knowledge server design and Cryptographic Identity Protection. It does not compromise security by using a browser to encrypt or decrypt files with code coming from the server and is not an all-or-nothing affair: any number of folders can be end-to-end encrypted. Sharing is secure without a need to exchange passwords and files don\'t need to be re-encrypted and re-uploaded when access rights for other users are changed.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Our solution is enterprise ready with support for a Hardware Security Module for issuing certificates, giving access to a full audit log and optionally allowing administrators to create an offline master recovery key.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Learn about End-to-end Encryption in our clients ');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>" target="_blank" rel="tooltip" title="Client Side End-to-end Encryption"><?php echo $l->t('on this page.</a>');?></p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--whitepaper quote">
	<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2><?php echo $l->t('End-to-end Encryption');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                    <p><label for="email"><?php echo $l->t('Download our free whitepaper');?><br>
                     <td colspan="2" style="text-align:center">
                    <div class="">
                        <div id="RecaptchaField2"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="12">
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
                    <input class="button button--large" type="submit" value=" Get the whitepaper "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/endtoend-thumbnail-banner.png"/>
	</div>
</section>

<div class="container featureblock featureblock--has-separator">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="section--heading-1 section--text--center"><?php echo $l->t('Passive security measures');?></h1>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Besides active security measures like authentication and encryption, Nextcloud protects your data without any need for administrator action');?></p>
        </div>
    </div>
    <div class="col-md-offset-4 col-md-4">
        <a href="https://twitter.com/ShieldedWeb/status/1129106904737820672"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/CSP.png" alt="Recognized quality" /></a>
    </div>
    <div class="features--container row">
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/find-data.svg">
                <h3 class="section--paragraph__title"><?php echo $l->t('Brute Force Protection');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Brute Force Protection logs invalid login attempts and slows down multiple attempts from a single IP address (or IPv6 range). This feature is enabled by default and protects against an attacker who tries to guess a password from one or more users.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Password reset tokens are invalidated when critical information like user email has been changed to protect against phishing attacks.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud will ask system administrators for password confirmation on security critical actions.');?></p>
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/camera.svg">
                <h3 class="section--paragraph__title"><?php echo $l->t('Rate Limiting');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Rate Limiting allows a developer to specify how often an IP range or a user may send a request in a specific time period. This can be useful for expensive API calls, to prevent users from accessing too much data in a smaller attempt of time or harden bruteforce stuff further. It is used by Nextcloud apps to protect users from spam and overloading.');?></p>
                <p class="section--paragraph"><a class="hyperlink" href="https://nextcloud.com/blog/security-in-nextcloud-12-bruteforce-protection-and-rate-limiting-for-developers/"><?php echo $l->t('Learn more about these protections in our blog.</a>');?></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/secure-server.svg">
                <h3 class="section--paragraph__title"><?php echo $l->t('Security hardening');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud employs a wide variety of extra security hardening capabilities, including:');?></p>
                    <ul>
                        <li><?php echo $l->t('Content Security Policy 3.0');?>
                            <ul>
                                <p class="section--paragraph"><?php echo $l->t('CSP is a HTTP feature that allows the server to set specific restrictions on a resource when opened in a browser. Such as only allowing to load images or JavaScript from specific targets.');?></p>
                                <p class="section--paragraph"><?php echo $l->t('CSP 3.0 is the latest, most strict version of the standard, increasing the barrier for  attackers to exploit a Cross-Site Scripting vulnerability.');?></p>
                            </ul>
                        </li>
                        <li><?php echo $l->t('Same-Site Cookies');?>
                            <ul>
                                <p class="section--paragraph"><?php echo $l->t('Same-Site cookies are a security measure supported by modern browsers that prevent CSRF vulnerabilities and protect your privacy further. Nextcloud enforces the same-site cookies to be present on every request by enforcing this within the request middle ware.');?></p>
                                <p class="section--paragraph"><?php echo $l->t('We include the __Host prefix to the cookie (if supported by browser and server). This mitigates cookie injection vulnerabilities within potential third-party software sharing the same second level domain.');?></p>
                            </ul>
                        </li>
                    </ul>
                <p class="section--paragraph"><a class="hyperlink" href="https://nextcloud.com/?p=1334"><?php echo $l->t('Learn more about hardening features in our blog.');?></a></p>
            </div>
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
    <div class="features--container row">
        <div class="col-md-6 image--floated image--feature new-img screenshot">
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
<section class="section--getstarted">
    <div class="container-fluid quote">
        <div class="container">
            <h2 class="text-center"><?php echo $l->t('Need the best security?');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Nextcloud Enterprise provides early access to security warnings, updates and mitigations.');?></p>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Nextcloud enables you to focus on your work, taking care that your data stays private and completely under your control!');?></p>
            <div class="row">
                <div class="col-md-12">
                    <div class="row text-center">
                        <a href="<?php echo home_url('buy') ?>" class="button button--arrow button--large"><?php echo $l->t('Contact sales');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
