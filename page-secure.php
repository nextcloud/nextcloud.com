<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/secure.css?v=1" rel="stylesheet">
    <script>
    require(["require.config"], function() {
        require(["bootstrap", "pages/secure", "modules/youtubePlayer"])
    });
    </script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta name=”Description” content="Nextcloud is the most secure private cloud solution - learn how it keeps your data safe!">
</head>

<div class=" background security-background">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1><?php echo $l->t('Security and authentication');?></h1>
            <h2><?php echo $l->t('Nextcloud is designed to protect user data <br /> through multiple layers of protection.');?></h2>
        </div>
    </div>
</div>

<section class="claim">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 claim__container">
            <p class="claim__paragraph">
                <?php echo $l->t('Nextcloud understands the necessity to provide core principle baseline security requirements, as such Nextcloud 11 is built on these security principles to ultimately deliver a secure solution to their customers');?>
            </p>
            <div class="claim__brand">
                <div class="claim__brand__logo"></div>
                <p class="claim__brand__text">
                    <?php echo $l->t('NCC Group');?>
                </p>
            </div>
        </div>
    </div>
</section>

<div class="container featureblock">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Verified Enterprise Class Security');?></h2>
            <p class="section--paragraph">
                <?php echo $l->t('Our customers care deeply about security and so do we. Nextcloud aligns with industry
                standards such as Clause 14 of ISO/IEC27001-2013 and related standards, guidance and security principles.
                Our solution is built around combined assurance layers consisting of rich security features,
                applied best practices governed by policy and the design itself validated by industry standard
                testing processes.');?>
            </p>
        </div>
    </div>
    <div class="row security-badge">
        <div class="col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-4">
            <a href="https://bestpractices.coreinfrastructure.org/projects/209"><img class="responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/cii_pdf_icon.png"></a><br/>
            <a href="https://bestpractices.coreinfrastructure.org/projects/209"><?php echo $l->t('Full report');?></a>
        </div>
        <div class="col-sm-4 col-md-2">
            <a href="<?php echo get_template_directory_uri(); ?>/assets/files/veracode_report.pdf"><img class="responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/veracode-doc.png"></a><br/>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/files/veracode_report.pdf"><?php echo $l->t('Veracode Security Scan');?></a>
        </div>
    </div>
</div>

<section class="section--whitepaper quote">
	<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class=""><?php echo $l->t('NCC Group security review');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download the full NCC Group security review report');?><br>
                     <td colspan="2" style="text-align:center">
                    <div class="">
                        <div id="RecaptchaField1"></div>
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
                    <input class="button button--large" type="submit" value=" Get the report "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ncc-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--control">
<div class="container  featureblock">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Under your control');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Control is key to security. With Nextcloud, your IT department takes back control over its data, managed under its policies and procedures. Nextcloud integrates in the tooling you use in your data center like logging and intrusion detection and works with existing authentication mechanisms like SAML, Kerberos and LDAP. Nextcloud features:');?></p>
        </div>
    </div>
    <div class="row featuretabs">
        <div role="tabpanel">
            <div class="col-sm-5 col-md-4 col-lg-3">
                <ul class="nav nav-pills brand-pills nav-stacked" style="opacity: 1;" role="tablist">
                    <li role="presentation" class="brand-nav active"><a href="#control-tab1" aria-controls="control-tab1" role="tab" data-toggle="tab"><?php echo $l->t('Logging and monitoring');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#control-tab2" aria-controls="control-tab2" role="tab" data-toggle="tab"><?php echo $l->t('Permissions');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#control-tab3" aria-controls="control-tab3" role="tab" data-toggle="tab"><?php echo $l->t('Data Retention');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#control-tab4" aria-controls="control-tab4" role="tab" data-toggle="tab"><?php echo $l->t('File Access Control');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#control-tab5" aria-controls="control-tab5" role="tab" data-toggle="tab"><?php echo $l->t('Multi-layered encryption');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#control-tab6" aria-controls="control-tab6" role="tab" data-toggle="tab"><?php echo $l->t('Compliance');?></a></li>
                </ul>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="control-tab1">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/monitoring.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud has built in monitoring and logging tools</a>, compatible with industry standard tools like Splunk, Nagios and OpenNMS. It also offers a full, compliance-ready activity log for reporting and auditing purposes.');?></p>
                            <a href="<?php echo home_url('monitoring') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring');?></a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="control-tab2">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/permissions.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Administrators can set permissions on sharing and access to files using groups. Permissions of underlying storage, like Windows Network Drive access rights, are respected by Nextcloud');?></p>
                            <p class="section--paragraph"><?php echo $l->t('Sharing can be protected by passwords, expiration dates, hiding of existing files, blocking downloads and the enforcing of a video call before access is granted (Video Verification).');?></p>
                            <a href="<?php echo home_url('sharing') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Sharing permissions');?></a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="control-tab3">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/retention.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Define rules for data retention, allowing regular cleanup of files or ensurances that data stays put for a set amount of time.');?></p>
                            <a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Tagging and retention');?></a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="control-tab4">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/firewall.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('The powerful workflow tools in Nextcloud enable administrators to limit access to data in accordance to business and legal requirements and perform automatic actions like file conversion. Describe restrictions like "XLSX files from the HR department are not to be accessible outside company IP ranges" or "employees in the US shouldn\'t access customer data from European data centers" for Nextcloud to enforce.');?></p>
                            <a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('File access control');?></a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="control-tab5">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/encryption.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud uses industry-standard SSL/TLS encryption for data in transfer. Additionally, data at rest in storage can be encrypted using a default military grade AES-256 encryption with server-based or custom key management. Also optionally and on a per-folder base data can be');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('end-to-end encrypted</a> on the client with the server assisting in sharing and key management using a Zero-Knowledge model.');?>
                            <p class="section--paragraph"><?php echo $l->t('Note that E2E is currently (early 2019) in beta. V2 is expected end summer 2019.');?></p>
                            <a href="<?php echo home_url('encryption') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Encryption');?></a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="control-tab6">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/secure-server.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud puts all the pieces for compliance with regulations like HIPAA and GDRP at your fingertips. This goes from extensive documentation on our customer portal to specific apps for data requests as well as encryption and security capabilities in Nextcloud itself.');?></p>
                            <a href="<?php echo home_url('gdpr') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Compliance');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section>
<div class="container-fluid quote">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="text-center"><?php echo $l->t('Regain control');?></h2>
                <p class="text-center"><?php echo $l->t('Protect your data and communication with the leading content collaboration platform. Contact us now to learn how we can help you!');?></p>
                <div class="text-center morebuttondiv">
                    <a href="<?php echo home_url('buy') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--integration">
<div class="container featureblock">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Integration');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('New technology should fit into existing processes and infrastructure. Nextcloud enables you to leverage existing security investments.');?>
        </div>
    </div>
    <div class="row featuretabs">
        <div role="tabpanel">
            <div class="col-sm-5 col-md-4 col-lg-3">
                <ul class="nav nav-pills brand-pills nav-stacked" style="opacity: 1;" role="tablist">
                    <li role="presentation" class="brand-nav active"><a href="#integration-tab1" aria-controls="integration-tab1" role="tab" data-toggle="tab"><?php echo $l->t('storage and database');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#integration-tab2" aria-controls="integration-tab2" role="tab" data-toggle="tab"><?php echo $l->t('Security tools');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#integration-tab3" aria-controls="integration-tab3" role="tab" data-toggle="tab"><?php echo $l->t('Policies and processes');?></a></li>
                </ul>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="integration-tab1">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/storage.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud supports your existing storage solution, keeping data under control of trusted IT administrators and managed with established policies. Nextcloud works with industry standard SQL databases like PostgreSQL, MySQL and MariaDB for user and metadata storage.');?></p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="integration-tab2">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/tools.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers built in monitoring tools and integrates with existing MDM, DLP, event logging and backup tools, enabling existing tool chains to be used to monitor, back up and restore systems.');?></p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="integration-tab3">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/securitypolicies.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud leverages existing data storage and database technologies so current security policies and governance processes can continue to be used to manage, control and secure operations with Nextcloud. Your IT department is fully in control.');?></p>
                        </div>
                    </div>
                <a href="<?php echo home_url('storage') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Storage integration');?></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--authentication">
<div class="container featureblock">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Authentication');?> </h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Nearly any authentication and provisioning mechanism works with Nextcloud, making it easy to fit with your existing user management.');?> </p>
        </div>
    </div>
    <div class="row featuretabs">
        <div role="tabpanel">
            <div class="col-sm-5 col-md-4 col-lg-3">
                <ul class="nav nav-pills brand-pills nav-stacked" style="opacity: 1;" role="tablist">
                    <li role="presentation" class="brand-nav active"><a href="#authentication-tab1" aria-controls="authentication-tab1" role="tab" data-toggle="tab"><?php echo $l->t('LDAP / Active Directory and more');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#authentication-tab2" aria-controls="authentication-tab2" role="tab" data-toggle="tab">SSO/SAML 2.0</a></li>
                    <li role="presentation" class="brand-nav"><a href="#authentication-tab3" aria-controls="authentication-tab3" role="tab" data-toggle="tab"><?php echo $l->t('Two-factor authentication');?></a></li>
                    <li role="presentation" class="brand-nav"><a href="#authentication-tab4" aria-controls="authentication-tab4" role="tab" data-toggle="tab"><?php echo $l->t('Automated or manual provisioning');?></a></li>
                </ul>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="authentication-tab1">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/ldap.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud has extensive LDAP/Active Directory support with an easy installation wizard.');?></p>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud can also work with Kerberos and other authentication mechanisms like');?> <a class="hyperlink" href="https://github.com/pingidentity/mod_auth_openidc" target="_blank">OAuth2</a>, <a class="hyperlink" href="https://github.com/pingidentity/mod_auth_openidc" target="_blank">OpenID Connect</a>, <a class="hyperlink" href="https://github.com/AnthonyDeroche/mod_authnz_jwt" target="_blank">JWT</a>, <a class="hyperlink" href="https://github.com/Jasig/mod_auth_cas" target="_blank">CAS</a> <?php echo $l->t('or <a class="hyperlink" href="https://httpd.apache.org/docs/2.2/mod/mod_authn_dbd.html" target="_blank">Any SQL database</a> mediated by Apache modules.');?></p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="authentication-tab2">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/saml.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud supports Single Sign On (SSO) and provides native SAML 2.0 (and Shibboleth) authentication in its web front end.');?></p>
                            <p class="section--paragraph"><?php echo $l->t('The native SAML integration negates the need for external software like Apache modules. Native SAML is compatible with all webservers and supports group memberships, flexible session management and app specific passwords. It can handle multiple Identity Providers and can authenticate to Samba servers with Kerberos.');?></p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="authentication-tab3">
                        <div class="feature">
                            <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/2fa.svg"); ?>
                            </div>
                             <p class="section--paragraph"><?php echo $l->t('Nextcloud includes a variety of second factors like TOTP, U2F and SMS gateaways. 2-factor authentication can be enforced and user sessions and devices can be managed.');?></p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="authentication-tab4">
                        <div class="feature">
                            <div class="icon">
                                <div class="icon">
                                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/manual.svg"); ?>
                            </div>
                            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers an easy to use, REST based provisioning API to create and configure user accounts.');?></p>
                        </div>
                    </div>
                </div>
            <a href="<?php echo home_url('usermanagement') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('User management');?></a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--encryption quote">
<div class="container-fluid">
    <div class="container-widest">
        <div class="row">
            <div class="col-md-6">
                <h2 class=""><?php echo $l->t('Active and passive protection');?></h2>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud offers a series of advanced security features:');?></p>
                <ul>
                    <li><?php echo $l->t('server side, client side and in-transit encryption');?></li>
                    <li><?php echo $l->t('Security hardenings like brute-force detection, CSP and SCC');?></li>
                    <li><?php echo $l->t('Machine learning based suspicious login detection');?></li>
                    <li><?php echo $l->t('Automated security checks and warnings');?></li>
                </ul>
                <a href="<?php echo home_url('encryption') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Advanced security features');?></a>
            </div>
        </div>
    </div>
    <div class="cover"></div>
</div>
</section>

<section class="section--sharing">
<div class="container featureblock">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Protected Sharing');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('For Nextcloud customers, securely exchanging data is key. Nextcloud offers industry standard protection mechanisms and adds innovative and unique capabilities like Video Verification.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="features--container">
            <div class="col-md-6 ">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing_admin-nw.png" class="img-responsive featureimg" />
            </div>
            <div class="col-md-6">
                <div class="feature">
<!--                     <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/kerberos.svg"> -->
                    <p class="section--paragraph__tittle"><?php echo $l->t('Securing shared links');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud features industry-leading protection for file shares.');?></p>
                    <ul>
                        <li><?php echo $l->t('Share password');?></li>
                        <li><?php echo $l->t('Expiration date');?></li>
                        <li><?php echo $l->t('Access rights <small>(Read/Write, re-sharing)</small>');?></li>
                        <li><a class="hyperlink" href="https://nextcloud.com/de/blog/secure-view-prevent-your-shared-files-from-getting-downloaded/"><?php echo $l->t('Hide Download <small>(Secure View)</small>');?></a></li>
                        <li><a class="hyperlink" href="<?php echo home_url('file-drop') ?>"><?php echo $l->t('Hide file listing <small>(File Drop)</small>');?></a></li>
                        <li><a class="hyperlink" href="<?php echo home_url('workflow') ?>"><?php echo $l->t('File Access Control');?></a></li>
                        <li><a class="hyperlink" href="#videoverification"><?php echo $l->t('Video Verification');?></a></li>
                    </ul>
                    <p class="section--paragraph"><?php echo $l->t('Administrators can set defaults or enforce these options.');?></p>
                </div>
            </div>
        </div>
    </div>
    <a name="videoverification"></a>
    <div class="row">
        <div class="features--container">
            <div class="col-md-6 image--floated">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Pffusr1bac4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <div class="feature">
<!--                     <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/kerberos.svg"> -->
                    <p class="section--paragraph__tittle"><?php echo $l->t('Video Verification');?></p>
                    <p class="section--paragraph"><?php echo $l->t('In situations where extreme security is warranted and the identity of a recipient has to be verified with absolute certainty before they are granted access, Nextcloud includes the industry-first implementation of Video Verification.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Video Verification enforces a Nextcloud Talk video call before access is given to a share, making sure the identity of the recipient is properly checked. The call can be picked up through the Nextcloud Talk Mobile apps as well as the web interface.');?></p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <a class="button button--blue button--arrow" href="<?php echo home_url('sharing') ?>"><?php echo $l->t('More about sharing.');?></a>
        </div>
    </div>
</div>
</section>

<section class="section--vdr">
    <div class="container">
        <div class="row feature-row">
            <div class="col-md-6 revealOnScroll image--floated">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/vdr-link.jpg" alt="in action"/>
            </div>
            <div class="col-md-6 revealOnScroll feature--block">
                <p class="section--paragraph__tittle"><?php echo $l->t('Virtual Data Room');?></p>
                <p class="section--paragraph"><?php echo $l->t('In settings where a firewall is needed between departments or organizations without impeding smooth and efficient collaboration, a separate Virtual Data Room can be set up. Nextcloud offers a wide range of unique features for VDR use and its on-premises nature offers unparalleled confidentiality and control.');?></p>
                <a href="<?php echo home_url('virtual-data-room') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Virtual Data Rooms');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--scan quote">
<div class="container-fluid banner">
    <div class="col-md-6">
        <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Private Cloud Security Scan');?></h2>
        <p class="section--paragraph section--text--center"><?php echo $l->t('To help our system administrators assess the security of their private cloud server, we have developed the Private Cloud Security Scan.');?></p>
        <a class="button button--large button--arrow" href="https://scan.nextcloud.com" target="_blank"><?php echo $l->t('Check now');?></a>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
</div>
</section>

<a name="process"></a>
<section class="section--process">
<div class="container">
    <div class="featureblock process">
        <h2 class="header"><?php echo $l->t('Security process');?></h2>
        <p><?php echo $l->t('Nextcloud development follows industry leading security processes. Security bugs are like technical debt: fixing them later is expensive. Our strategy is to prevent them from happening through a rigorous focus on security through the entire life cycle of our product and to get those which find their way through found and fixed as soon as possible.');?></p>
        <p><small><strong><?php echo $l->t('Click each step in the process to learn more');?></strong></small></p>
        <div id="processimg" class="processimg">
            <ul class="snav nav-pills">
                <li class="active"><a data-toggle="tab" href="#training"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/training.svg"></a></li>
                <li><a data-toggle="tab" href="#requirements"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/requirements.svg"></a></li>
                <li><a data-toggle="tab" href="#implementation"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/implementation.svg"></a></li>
                <li><a data-toggle="tab" href="#verification"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/verification.svg"></a></li>
                <li><a data-toggle="tab" href="#response"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/response.svg"></a></li>
            </ul>
            <div class="tab-content">
                <div id="training" class="tab-pane fade in active">
                    <div class="info">
                        <div class="col-md-6">
                            <h3><?php echo $l->t('Security training');?></h3>
                            <ul>
                                <li><?php echo $l->t('We provide');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>general/security.html" target="_blank" rel="tooltip" title="<?php echo $l->t('Information for Developers">detailed documentation</a> about common web security vulnerabilities');?></li>
                                <li><?php echo $l->t('We organize internal and public security trainings');?></li>
                                <li><?php echo $l->t('Developers are asked to fix security issues they caused themselves');?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/training2.png">
                        </div>
                    </div>
                </div>
                <div id="requirements" class="tab-pane fade">
                    <div class="info">
                        <div class="col-md-6">
                            <h3><?php echo $l->t('Requirements');?></h3>
                            <ul>
                                <li><?php echo $l->t('Privacy and security risks are analyzed and requirements are established');?></li>
                                <li><a class="hyperlink" href="<?php echo home_url('security/threat-model/') ?>"><?php echo $l->t('We employ advanced threat modelling / attack surface analysis</a>');?></li>
                                <li><?php echo $l->t('Designs are reviewed for security implications');?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/design2.png">
                        </div>
                    </div>
                </div>
                <div id="implementation" class="tab-pane fade">
                    <div class="info">
                        <div class="col-md-6">
                            <h3><?php echo $l->t('Implementation');?></h3>
                            <ul>
                                <li><?php echo $l->t('Unsafe functions are forbidden (e.g. unserialize, non-prepared statements and unsafe comparisons)');?></li>
                                <li><?php echo $l->t('Our internal functions are designed to provide secure defaults for developers');?></li>
                                <li><?php echo $l->t('We employ a strict mandatory code review process with 2 reviewers besides the original developer');?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/reviewprocess.png">
                        </div>
                    </div>
                </div>
                <div id="verification" class="tab-pane fade">
                    <div class="info">
                        <div class="col-md-6">
                            <h3><?php echo $l->t('Verification');?></h3>
                            <ul>
                                <li><?php echo $l->t('We regularly run static and dynamic security scans like Burp, Veracode and others');?></li>
                                <li><?php echo $l->t('We follow industry-standard security processes and have them independently verified ');?></li>
                            </ul>
                            <?php echo $l->t('Check out our security review reports:');?>
                            <ul class="securitybadge">
                                <li><a href="https://bestpractices.coreinfrastructure.org/projects/209"><img class="icon" src="https://bestpractices.coreinfrastructure.org/assets/questions_page_badge-17b338c0e8528d695d8676e23f39f17ca2b89bb88176370803ee69aeebcb5be4.png"></a>
                                    <a class="hyperlink" href="https://bestpractices.coreinfrastructure.org/projects/209"><?php echo $l->t('Core Infrastructure full report');?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/files/veracode_report.pdf"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/veracode-doc.png"></a>
                                    <a class="hyperlink"  href="<?php echo get_template_directory_uri(); ?>/assets/files/veracode_report.pdf"><?php echo $l->t('Veracode Security Scan');?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/scan.png">
                        </div>
                    </div>
                </div>
                <div id="response" class="tab-pane fade">
                    <div class="info">
                        <div class="col-md-6">
                            <h3><?php echo $l->t('Response');?></h3>
                            <ul>
                                <li><?php echo $l->t('We follow industry best practices in disclosing security issues fixed in a release: 2 weeks after the release ');?><a class="hyperlink" href="<?php echo home_url('security/advisories') ?>"><?php echo $l->t('advisories with CVE identifiers are published');?></a></li>
                                <li><?php echo $l->t('We run a <a class="hyperlink" href="https://hackerone.com/nextcloud">successful bug bounty program with high payouts</a>, up to $5000');?></li>
                                <li><?php echo $l->t('Statistics show a massive decrease of valid external security reports');?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-graph.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-graph.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--bounties">
<div class="container featureblock">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Security bug bounties');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Nextcloud protects your security with an up to $ 5000 Security Bug Bounty program');?></p>
        </div>
    </div>
    <div class="features--container row">
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/virusscaning.svg">
                <p class="section--paragraph__tittle"><?php echo $l->t('HackerOne program');?></p>
                <p class="section--paragraph"><?php echo $l->t('We have partnered with the HackerOne platform because of its extraordinary popularity among IT security professionals. More than 3,000 hackers have reported over 24,000 bugs via the platform. Running <a class="hyperlink" href="https://hackerone.com/nextcloud">a program on HackerOne</a> allows us to quickly leverage the collective knowledge of a huge amount of these security experts.');?></p>

                <blockquote>Nextcloud's commitment to responsiveness and putting security first puts them in the best position to attract top hacker talent to continue to supplement the good work their internal security team is doing to protect customers.</blockquote>
                <p class="quote-by">-- Michiel Prins, co-founder HackerOne.</p>
<!--                             <a href="https://hackerone.com/nextcloud"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-logo.png" alt="Our HackerOne program" /></a> -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature">
                <img height="70px" class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-logo.png">
                <p class="section--paragraph"><?php echo $l->t('Anyone reporting a security vulnerability in Nextcloud can earn up to $5000, making ours some of the highest security bug bounties in the open source industry. For more details, <a class="hyperlink" href="https://nextcloud.com/blog/introducing-the-nextcloud-bug-bounty-program/">see our announcement</a>, our <a class="hyperlink" href="https://nextcloud.com/blog/updates-about-the-nextcloud-bug-bounty-program/">update in 2017</a> and the <a class="hyperlink" href="https://www.hackerone.com/resources/nextcloud-puts-hacker-powered-security-front-and-center">HackerOne whitepaper in 2018</a>');?></p>
                <blockquote>Nextcloud’s lightning fast response times are impressive and make them a model for how to build an efficient bug bounty triage and response process.</blockquote>
                <p class="quote-by">-- Michiel Prins, co-founder HackerOne.</p>

                <p class="section--paragraph"><?php echo $l->t('Find an example of RhinoSecurityLabs blogging about <a class="hyperlink" href="https://rhinosecuritylabs.com/2016/10/operation-ownedcloud-exploitation-post-exploitation-persistence/">a security issue we dealt with here</a> (<a class="hyperlink" href="https://hackerone.com/reports/148151">HackerOne disclosure</a>). Here is <a class="hyperlink" href="https://hackerone.com/reports/216812">another example.</a>');?></p>
            </div>
        </div>
        <a href="https://www.hackerone.com/resources/nextcloud-puts-hacker-powered-security-front-and-center" class="textcenter button button--blue button--arrow"><?php echo $l->t('Download HackerOne whitepaper.');?></a>
    </div>
</div>
</section>


<section class="section--getstarted">
    <div class="container-fluid quote">
        <div class="container">
            <h2 class="text-center"><?php echo $l->t('Need the best security?');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('A Nextcloud Enterprise Subscription provides you early access to security warnings, patches and mitigations.');?></p>
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
