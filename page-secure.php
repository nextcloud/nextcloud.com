<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/secure.css" rel="stylesheet">
    <script>
    require(["require.config"], function() {
        require(["pages/secure", "modules/youtubePlayer"])
    });
    </script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
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
    <div class="row revealOnScroll">
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
    <div class="row security-badge revealOnScroll">
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
	<div class="container revealOnScroll">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('NCC Group security review');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download the full NCC Group security review report');?><br>
                     <td colspan="2" style="text-align:center">
                    <div class="">
                        <div id="RecaptchaField1"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="10">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the report "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/ncc-thumbnail-banner.png"/>
	</div>
</section>

<div class="container featureblock">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Integration');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('New technology should fit into existing processes and infrastructure. Nextcloud enables you to leverage existing security investments.');?>
        </div>
    </div>
    <div class="features--container revealOnScroll row">
        <div class="col-md-4">
            <div class="feature">
                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/storage.svg"); ?>
                <p class="section--paragraph__tittle"><?php echo $l->t('Existing storage and database technology');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud supports any existing storage solution, including object store technologies, keeping data under control of trusted IT administrators and managed with established policies. Nextcloud works with industry standard SQL databases like PostgreSQL, MySQL and MariaDB for user and metadata storage.');?></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature">
                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/tools.svg"); ?>
                <p class="section--paragraph__tittle"><?php echo $l->t('Existing security tools');?><p/>
                 <p class="section--paragraph"><?php echo $l->t('Nextcloud offers built in monitoring tools and integrates with existing MDM, DLP, event logging and backup tools, enabling existing tool chains to be used to monitor, back up and restore systems.');?></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature">
                <?php echo file_get_contents(get_template_directory()."/assets/img/icons/securitypolicies.svg"); ?>
                <p class="section--paragraph__tittle"><?php echo $l->t('Current security policies and processes');?><p/>
                <p class="section--paragraph"><?php echo $l->t('Thanks to the on-premises nature of Nextcloud and its ability to leverage existing data storage and database technologies, current security policies and governance processes can continue to be used to manage, control and secure operations with Nextcloud. Nextcloud GmbH does at no point have access to your data and can not interfere with regulated processes, keeping your IT department in control.');?></p>
            </div>
        </div>
    </div>
</div>
<div class="container featureblock featureblock--has-separator">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Authentication');?> </h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Nearly any authentication and provisioning mechanism works with Nextcloud, making it easy to fit with your user directory.');?> </p>
        </div>
    </div>
    <div class="features--container row revealOnScroll">
        <div class="row">
            <div class="col-md-4">
                <div class="feature">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/ldap.svg"); ?>
                    <p class="section--paragraph__tittle">LDAP / Active Directory</p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud has extensive LDAP/Active Directory support with an easy installation wizard.');?></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="feature">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/saml.svg"); ?>
                    <p class="section--paragraph__tittle">SSO/SAML 2.0</p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud supports Single Sign On (SSO) and provides native SAML 2.0 (and Shibboleth) authentication in its web front end.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('The native SAML integration negates the need for external software like Apache modules. Native SAML is compatible with all webservers and supports group memberships, flexible session management and app specific passwords. It can handle multiple Identity Providers and can authenticate to Samba servers with Kerberos.');?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="feature">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/kerberos.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Authentication via environment variable');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud can work with Kerberos and other authentication mechanisms like');?> <a class="hyperlink" href="https://github.com/pingidentity/mod_auth_openidc" target="_blank">OAuth2</a>, <a class="hyperlink" href="https://github.com/pingidentity/mod_auth_openidc" target="_blank">OpenID Connect</a>, <a class="hyperlink" href="https://github.com/AnthonyDeroche/mod_authnz_jwt" target="_blank">JWT</a>, <a class="hyperlink" href="https://github.com/Jasig/mod_auth_cas" target="_blank">CAS</a> <?php echo $l->t('or <a class="hyperlink" href="https://httpd.apache.org/docs/2.2/mod/mod_authn_dbd.html" target="_blank">Any SQL database</a> mediated by Apache modules.');?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/2fa.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Two-factor authentication');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud includes Universal 2nd Factor (U2F) hardware tokens and Time-based One-Time Password (TOTP) as well as NFC and Gateway Signal/Telegram/SMS second factor support to increase the security of user login handling.');?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/manual.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Automated or manual provisioning');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud offers an easy to use, REST based provisioning API to create and configure user accounts.');?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container featureblock featureblock--has-separator">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Under your control');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Control is key to security. With Nextcloud, your IT department takes back control over its data, managed under its policies and procedures. Nextcloud integrates in the tooling you use in your data center like logging and intrusion detection and works with existing authentication mechanisms like SAML, Kerberos and LDAP. Nextcloud features:');?></p>
        </div>
    </div>
    <div class="row">
        <div class="features--container revealOnScroll">
            <div class="row">
                <div class="col-md-4">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/monitoring.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Logging and monitoring');?></p>
                    <p class="section--paragraph"><a class="hyperlink" href="<?php echo home_url('monitoring') ?>"><?php echo $l->t('Nextcloud has built in monitoring and logging tools</a>, compatible with industry standard tools like Splunk, Nagios and OpenNMS. It also offers a full, compliance-ready activity log for reporting and auditing purposes.');?></p>
                </div>
                <div class="col-md-4">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/permissions.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Permission');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Administrators can set permissions on sharing and access to files using groups. Permissions of underlying storage, like Windows Network Drive access rights, are respected by Nextcloud');?></p>
                </div>
                <div class="col-md-4">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/retention.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Data Retention');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Define rules for data retention, allowing regular cleanup of files or ensurances that data stays put for a set amount of time.');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/firewall.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Finegrained File Access Control');?></p>
                    <p class="section--paragraph"> <a class="hyperlink" href="<?php echo home_url('workflow/') ?>"><?php echo $l->t('The powerful workflow tools</a> in Nextcloud enable administrators to limit access to data in accordance to business and legal requirements and perform automatic actions like file conversion. Describe restrictions like "XLSX files from the HR department are not to be accessible outside company IP ranges" or "employees in the US shouldn\'t access customer data from European data centers" for Nextcloud to enforce.');?></p>
                </div>
                <div class="col-md-4">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/encryption.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Encryption');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud uses industry-standard SSL/TLS encryption for data in transfer. Additionally, data at rest in storage can be encrypted using a default military grade AES-256 encryption with server-based or custom key management. Also optionally and on a per-folder base data can be');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('end-to-end encrypted</a> on the client with the server assisting in sharing and key management using a Zero-Knowledge model.');?>
                    </p>
                </div>
                <div class="col-md-4">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/secure-server.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Compliance');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud puts all the pieces for compliance with regulations like HIPAA and GDRP at your fingertips. This goes from extensive documentation on our customer portal to specific apps for data requests as well as encryption and security capabilities in Nextcloud itself.<br> Learn more on our ');?><a class="hyperlink" href="<?php echo home_url('gdpr') ?>"><?php echo $l->t('compliance site.');?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container featureblock featureblock--has-separator">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Protected Sharing');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('For Nextcloud customers, securely exchanging data is key. Nextcloud offers industry standard protection mechanisms and adds innovative and unique capabilities like Video Verification.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="features--container revealOnScroll">
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
                        <li><a class="hyperlink" href="<?php echo home_url('file-drop') ?>"><?php echo $l->t('Hide file listing <small>(File Drop)</small>');?></a></li>
                        <li><a class="hyperlink" href="<?php echo home_url('workflow') ?>"><?php echo $l->t('File Access Control');?></a></li>
                        <li><a class="hyperlink" href="#videoverification"><?php echo $l->t('Video Verification');?></a></li>
                    </ul>
                    <p class="section--paragraph"><?php echo $l->t('Administrators can set defaults or enforce these options.');?><br/> <a class="hyperlink" href="<?php echo home_url('sharing') ?>"><?php echo $l->t('Learn more about sharing.');?></a></p>
                </div>
            </div>
        </div>
    </div>
    <a name="videoverification"></a>
    <div class="row">
        <div class="features--container revealOnScroll">
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
    </div>
</div>

<div class="container-fluid banner">
    <div class="col-md-6">
        <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Private Cloud Security Scan');?></h2>
        <p class="section--paragraph section--text--center"><?php echo $l->t('To help our system administrators assess the security of their private cloud server, we have developed the Private Cloud Security Scan.');?></p>
        <a class="button button--large button--arrow" href="https://scan.nextcloud.com" target="_blank"><?php echo $l->t('Check now');?></a>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png">
</div>

<a name="process"></a>
<section class="section--process">
<div class="container revealOnScroll">
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
<div class="container featureblock featureblock--has-separator">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Security bug bounties');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Nextcloud protects your security with an up to $ 5000 Security Bug Bounty program');?></p>
        </div>
    </div>
    <div class="features--container revealOnScroll row">
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
            <div class="feature notitle">
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

<div class="container featureblock featureblock--has-separator">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Secure Authentication');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Authentication is the first step in securing your data');?></p>
        </div>
    </div>
    <div class="row">
        <div class="features--container revealOnScroll">
            <div class="col-md-6 image--floated">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP.png" alt="in action" /></a>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/kerberos.svg">
                    <p class="section--paragraph__tittle"><?php echo $l->t('Extra security');?></p>
                    <p class="section--paragraph"><?php echo $l->t('The Nextcloud authentication system supports pluggable authentication including Two-factor authentication and device specific passwords, complete with a list of connected browsers and devices on the users’ personal page. As extra protection, device specific password tokens can be denied access to the file system.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Included are Universal 2nd Factor (U2F) and Time-based One-Time Password (TOTP) second factor apps, enabling users to use tools like Yubikeys or Google Authenticator to secure their accounts. NFC auth is also supported (Yubikey Neo). A gateway 2-factor provider is available which supports 2nd factors from secure messaging apps Telegram and Signal as well as a variety of SMS gateways.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Active user sessions can be invalidated through a list, by removing the user in the admin settings or by changing passwords. Users can manage their own sessions and devices.');?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container featureblock featureblock--has-separator">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Security advice');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('We make securing your system as easy as possible');?></p>
        </div>
    </div>
    <div class="row">
        <div class="features--container revealOnScroll">
            <div class="col-md-6 image--floated">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/security-warnings-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/security-warnings-nw.png" alt="in action" /></a>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/verified-security.svg">
                    <p class="section--paragraph__tittle"><?php echo $l->t('Automated checks and tips');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud detects issues with its installation and warns when it finds unknown or modified files. Administrators can find security tips and warnings in the configuration screen.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Administrators can set password quality policies enforced by Nextcloud as well as limit or disable sharing, enforce expiration dates and passwords on shares, disable preview generation and more.');?></p>
                    <p class="section--paragraph"><?php echo $l->t('You can find more information on hardening your Nextcloud installation in our extensive');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_server/harden_server.html" target="_blank" rel="tooltip" title="Information for Admins"><?php echo $l->t('hardening guide</a>');?></p>
                    <p class="section--paragraph"><?php echo $l->t('We provide the <a class="hyperlink" href="https://scan.nextcloud.com">Nextcloud Security Scanner</a> to check the security of your private cloud server.');?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('Server-side Encryption');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Download our free whitepaper');?><br>
                     <td colspan="2" style="text-align:center">
                    <div class="">
                        <div id="RecaptchaField2"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="11">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the whitepaper "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/serverside-thumbnail-banner.png"/>
	</div>
</section>

<section class="section--encryption">
<div class="container featureblock">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Encryption');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Employ encryption for the highest degree of privacy and security');?></p>
        </div>
    </div>
    <div class="row">
        <div class="features--container revealOnScroll">
            <div class="col-md-6 col-md-offset-3">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-nw.png" alt="in action" /></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="features--container revealOnScroll">
            <div class="col-md-4">
                <div class="feature">
                    <?php echo file_get_contents(get_template_directory()."/assets/img/icons/saml.svg"); ?>
                    <p class="section--paragraph__tittle"><?php echo $l->t('Encrypted data transfer');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud employs industry-standard TLS to encrypt data in transfer. Usage of Object Storage like Amazon S3 or other external storage systems can be secured through Server Side Encryption.');?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/vault.svg">
                    <p class="section--paragraph__tittle"><?php echo $l->t('Encrypt data at rest');?></p>
                    <p class="section--paragraph"><?php echo $l->t('Server Side Encryption can also be used on local storage. However, inherent to the concept of server side encryption, encryption keys will be present in memory of the Nextcloud server during the time a user is logged in and could be retrieved by a determined attacker. We take care to ensure keys are not stored unencrypted on permanent storage and at rest keys are encrypted using a strong cipher.');?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/securitypolicies.svg">
                    <p class="section--paragraph__tittle"><?php echo $l->t('Encrypt from client to client');?></p>
                    <p class="section--paragraph"><?php echo $l->t('End-to-end Encryption client-side is available from Nextcloud 13 and newer as a folder-level option to keep extremely sensitive data fully secure even in case of a full server breach. The server facilitates key exchange for syncing between devices and sharing but has Zero Knowledge, that is, never has access to any of the data or keys in unencrypted form.');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('Learn more here.</a>');?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="features--container revealOnScroll row">
        <div class="col-md-6">
            <img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-recovery.png" alt="in action" />
        </div>
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/keys.svg">
                <p class="section--paragraph__tittle"><?php echo $l->t('Server-side encryption with flexible key handling');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud supports pluggable encryption key handling. If you have an external key server or Hardware Security Module, these can be made to work with Nextcloud.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Our default encryption key handling enables administrators to set a system wide recovery key for encrypted files,. This ensures that, even when users lose their password, files can always be decrypted. Encrypted files can be shared but after changing encryption settings, shares will have to be re-shared. Using our command line tools, data can be encrypted, decrypted or re-encrypted when needed.');?></p>
                <p class="section--paragraph"><?php echo $l->t('If you face a regulatory or compliance need to encrypt data at rest but do not need to actually secure this data, locally encrypting data using our built in key management may satisfy compliance requirements.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Learn how to use server side encryption in our');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank" rel="tooltip" title="Server Side Encryption Configuration"><?php echo $l->t('documentation</a>');?></p>
            </div>
        </div>
    </div>
    <div class="features--container revealOnScroll row">
        <div class="col-md-6 image--floated">
            <img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-android-nw.png" alt="in action" />
        </div>
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/securitypolicies.svg">
                <p class="section--paragraph__tittle"><?php echo $l->t('Seamless End-to-end Encryption on the clients');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud features an enterprise-grade, seamlessly integrated solution for end-to-end encryption. It enables users to pick one or more folders on their desktop or mobile client for end-to-end encryption. Folders can be shared with other users and synced between devices but are never readable by the server.');?></p>
                <p class="section--paragraph"><?php echo $l->t('This solution is easy to use yet extremely secure thanks to its Zero-Knowledge server design and Cryptographic Identity Protection. It does not compromise security by using a browser to encrypt or decrypt files with code coming from the server and is not an all-or-nothing affair: any number of folders can be end-to-end encrypted. Sharing is secure without a need to exchange passwords and files don\'t need to be re-encrypted and re-uploaded when access rights for other users are changed.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Our solution is enterprise ready with support for a Hardware Security Module for issuing certificates, giving access to a full audit log and optionally allowing administrators to create an offline master recovery key.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Learn about End-to-end Encryption in our clients ');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>" target="_blank" rel="tooltip" title="Client Side End-to-end Encryption"><?php echo $l->t('on this page.</a>');?></p>
            </div>
        </div>
    </div>
</div>
</section>

<div class="container featureblock featureblock--has-separator">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <h2 class="section--heading-1 section--text--center"><?php echo $l->t('Passive security measures');?></h2>
            <p class="section--paragraph section--text--center"><?php echo $l->t('Besides active security measures like authentication and encryption, Nextcloud protects your data without any need for administrator action');?></p>
        </div>
    </div>
    <div class="features--container revealOnScroll row">
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/find-data.svg">
                <p class="section--paragraph__tittle"><?php echo $l->t('Brute Force Protection');?></p>
                <p class="section--paragraph"><?php echo $l->t('Brute Force Protection logs invalid login attempts and slows down multiple attempts from a single IP address (or IPv6 range). This feature is enabled by default and protects against an attacker who tries to guess a password from one or more users.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Password reset tokens are invalidated when critical information like user email has been changed to protect against phishing attacks.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud will ask system administrators for password confirmation on security critical actions.');?></p>
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/camera.svg">
                <p class="section--paragraph__tittle"><?php echo $l->t('Rate Limiting');?></p>
                <p class="section--paragraph"><?php echo $l->t('Rate Limiting allows a developer to specify how often an IP range or a user may send a request in a specific time period. This can be useful for expensive API calls, to prevent users from accessing too much data in a smaller attempt of time or harden bruteforce stuff further. It is used by Nextcloud apps to protect users from spam and overloading.');?></p>
                <p class="section--paragraph"><a class="hyperlink" href="https://nextcloud.com/blog/security-in-nextcloud-12-bruteforce-protection-and-rate-limiting-for-developers/"><?php echo $l->t('Learn more about these protections in our blog.</a>');?></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/secure-server.svg">
                <p class="section--paragraph__tittle"><?php echo $l->t('Security hardening');?></hp>
                    <p class="section--paragraph"><?php echo $l->t('Nextcloud employs a wide variety of extra security hardening capabilities, including:');?></p>
                    <ul>
                        <li><?php echo $l->t('Content Security Policy 3.0');?>
                            <ul>
                                <p class="section--paragraph"><?php echo $l->t('CSP is a HTTP feature that allows the server to set specific restrictions on a resource when opened in a browser. Such as only allowing to load images or JavaScript from specific targets.');?></p>
                                <p class="section--paragraph"><?php echo $l->t('CSP 3.0 is the latest, most strict version of the standard, increasing the barrier for  attackers to exploit a Cross-Site Scripting vulnerability.');?></p>
                            </ul></li>
                                <li><?php echo $l->t('Same-Site Cookies');?>
                                    <ul>
                                        <p class="section--paragraph"><?php echo $l->t('Same-Site cookies are a security measure supported by modern browsers that prevent CSRF vulnerabilities and protect your privacy further. Nextcloud enforces the same-site cookies to be present on every request by enforcing this within the request middle ware.');?></p>
                                        <p class="section--paragraph"><?php echo $l->t('We include the __Host prefix to the cookie (if supported by browser and server). This mitigates cookie injection vulnerabilities within potential third-party software sharing the same second level domain.');?></p>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <p class="section--paragraph"><a class="hyperlink" href="https://nextcloud.com/?p=1334"><?php echo $l->t('Learn more about hardening features in our blog.');?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
