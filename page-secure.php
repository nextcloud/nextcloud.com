<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/secure.css" rel="stylesheet">
	<script>
	require(["require.config"], function() {
		require(["pages/secure"])
	});
</script>
</head>

<div class=" background security-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('Security and authentication');?></h1>
			<h2><?php echo $l->t('Nextcloud is designed to protect user data <br /> through multiple layers of protection.');?></h2>
		</div>
	</div>
</div>
<div class="container featureblock">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="section--paragraph"><blockquote><?php echo $l->t('Nextcloud understands the necessity to provide core principle baseline security requirements, as such Nextcloud 11 is built on these security principles to ultimately deliver a secure solution to their customers');?></blockquote><?php echo $l->t('Download the');?> <a class="hyperlink" href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_assurance.pdf"><?php echo $l->t('Assurance Statement</a> from the <a class="hyperlink" href="https://www.nccgroup.trust">NCC group</a>, a global expert in cyber security and risk mitigation.');?></p>
		</div>
	</div>
</div>
<div class="container featureblock">
	<div class="row revealOnScroll">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Verified Enterprise Class Security');?></h2>
			<p class="section--paragraph"><?php echo $l->t('Our customers care deeply about security and so do we. Nextcloud aligns with industry standards such as Clause 14 of ISO/IEC27001-2013 and related standards, guidance and security principles.');?></p>
			<p class="section--paragraph"><?php echo $l->t('Our solution is built around combined assurance layers consisting of newly applied rich security features, applied best practices which are governed by policy and the design itself validated by industry standard testing processes.');?></p>
		</div>
	</div>
	<div class="row security-badge revealOnScroll">
		<div class="col-sm-4 col-md-2 col-md-offset-3">
				<a href="https://bestpractices.coreinfrastructure.org/projects/209"><img class="responsive" src="https://bestpractices.coreinfrastructure.org/assets/questions_page_badge-17b338c0e8528d695d8676e23f39f17ca2b89bb88176370803ee69aeebcb5be4.png"></a><br/>
				<a href="https://bestpractices.coreinfrastructure.org/projects/209"><?php echo $l->t('Full report');?></a>
		</div>
		<div class="col-sm-4 col-md-2">
				<a href="<?php echo get_template_directory_uri(); ?>/assets/files/veracode_report.pdf"><img class="responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/veracode-doc.png"></a><br/>
				<a href="<?php echo get_template_directory_uri(); ?>/assets/files/veracode_report.pdf"><?php echo $l->t('Veracode Security Scan');?></a>
		</div>
		<div class="col-sm-4 col-md-2">
				<a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><img class="responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/ncc-doc.png"></a><br/>
				<a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_assurance.pdf"><?php echo $l->t('NCC Group review');?></a><br/> (<a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><?php echo $l->t('summary');?></a>)
		</div>
	</div>
	<p class="text-center revealOnScroll"><a class="hyperlink" href="#process"><?php echo $l->t('Learn more about our security process and features');?></a></p>
</div>

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
				<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/storage.svg">
				<p class="section--paragraph__tittle"><?php echo $l->t('Existing storage and database technology');?></p>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud supports any existing storage solution, including object store technologies, keeping data under control of trusted IT administrators and managed with established policies. Nextcloud works with industry standard SQL databases like PostgreSQL, MySQL and MariaDB for user and metadata storage.');?></p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="feature">
				<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/tools.svg">
				<p class="section--paragraph__tittle"><?php echo $l->t('Existing security tools');?><p/>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud offers built in monitoring tools and integrates with existing MDM, DLP, event logging and backup tools, enabling existing tool chains to be used to monitor, back up and restore systems.');?></p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="feature">
				<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/securitypolicies.svg">
				<p class="section--paragraph__tittle"><?php echo $l->t('Current security policies and processes');?><p/>
				<p class="section--paragraph"><?php echo $l->t('Thanks to the on-premise nature of Nextcloud and its ability to leverage existing data storage and database technologies, current security policies and governance processes can continue to be used to manage, control and secure operations with Nextcloud. Nextcloud GmbH does at no point have access to your data and can not interfere with regulated processes, keeping your IT department in control.');?></p>
			</div>
		</div>
	</div>
</div>
<div class="background-gray">
	<div class="container featureblock">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
<!-- 				<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Authentication');?> </h2> -->
				<p class="section--paragraph section--text--center"><?php echo $l->t('Nearly any authentication and provisioning mechanism works with Nextcloud, making it easy to fit with your user directory.');?> </p>
			</div>
		</div>
		<div class="features--container row revealOnScroll">
			<div class="col-md-4">
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ldap.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('LDAP / Active Directory');?> </p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud has extensive LDAP/Active Directory support with an easy installation wizard.');?> </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/saml.svg">
					<p class="section--paragraph__tittle">SSO/SAML 2.0</p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud supports Single Sign On (SSO) and provides native SAML 2.0 (and Shibboleth) authentication in its web front end and apps.');?></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/kerberos.svg">
					<p class="section--paragraph__tittle">Kerberos and more</p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud can work with Kerberos and other authentication mechanisms like');?> <a class="hyperlink" href="https://github.com/pingidentity/mod_auth_openidc" target="_blank">OAuth2</a>, <a class="hyperlink" href="https://github.com/pingidentity/mod_auth_openidc" target="_blank">OpenID Connect</a>, <a class="hyperlink" href="https://github.com/AnthonyDeroche/mod_authnz_jwt" target="_blank">JWT</a>, <a class="hyperlink" href="https://github.com/Jasig/mod_auth_cas" target="_blank">CAS</a> <?php echo $l->t('or <a class="hyperlink" href="https://httpd.apache.org/docs/2.2/mod/mod_authn_dbd.html" target="_blank">Any SQL database</a> mediated by Apache modules.');?></p>
				</div>
			</div>
		</div>
		<div class="features--container revealOnScroll row">
			<div class="col-md-4 col-md-offset-2">
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/2fa.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Two-factor authentication');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud includes Universal 2nd Factor (U2F) hardware tokens and Time-based One-Time Password (TOTP) second factor apps to increase the security of user login handling.');?></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/manual.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Automated or manual provisioning');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud offers an easy to use, REST based provisioning API to create and configure user accounts.');?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 revealOnScroll">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Under your control');?></h2>
			<p class="section--paragraph section--text--center"><?php echo $l->t('Control is key to security. With Nextcloud, your IT department takes back control over its data, managed under its policies and procedures. Nextcloud integrates in the tooling you use in your data center like logging and intrusion detection and works with existing authentication mechanisms like SAML, Kerberos and LDAP. Nextcloud features:');?></p>
		</div>
	</div>
	<div class="row">
		<div class="features--container revealOnScroll">
			<div class="col-md-6">
				<div class="feature">
				<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/monitoring.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Logging and monitoring');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud has built in <a class="hyperlink" href="/monitoring">monitoring and logging tools</a>, compatible with industry standard tools like Splunk, Nagios and OpenNMS. It also offers a full, compliance-ready activity log for reporting and auditing purposes.');?></p>
				</div>
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/permissions.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Permission and File Access Control');?></p>
					<p class="section--paragraph"><?php echo $l->t('Administrators can set permissions on sharing and access to files using groups. The powerful');?> <a class="hyperlink" href="/workflow/"><?php echo $l->t('workflow tools</a> in Nextcloud enable administrators to limit access to data in accordance to business and legal requirements and perform automatic actions like file conversion.');?></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/encryption.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Encryption');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud uses industry-standard SSL/TLS encryption for data in transfer. Additionally, data at rest in storage can be encrypted using a default military grade AES-256 encryption. Keys can be handled with the build in key management or you can opt for a custom key management for integration in existing infrastructure. As keys never leave the Nextcloud server, external storage systems never have access to unencrypted data.');?></p>
				</div>
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/virusscaning.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Virus scanning');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud supports integration with ClamAV for automated scanning of all uploaded files.');?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="features--container revealOnScroll row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Nextcloud Private Cloud Security Scan');?></h2>
			<p class="section--paragraph section--text--center"><?php echo $l->t('To help our system administrators asses the security of their private cloud server, we have developed the <a class="hyperlink" href="https://scan.nextcloud.com">Private Cloud Security Scan.</a>');?></p>
			<a href="https://scan.nextcloud.com"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/securityscan-nw.png"></a>
			<p class="section--paragraph section--text--center "><?php echo $l->t('<a class="hyperlink" href="https://scan.nextcloud.com">Scan your server now</a> or learn more about the <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-releases-security-scanner-to-help-protect-private-clouds/">Private Cloud Security Scan.</a>');?></p>
		</div>
	</div>
</div>

<a name="process"></a>
<div class="container revealOnScroll">
	<div class="featureblock process">
		<h2 class="header"><?php echo $l->t('Security process');?></h2>
		<p><?php echo $l->t('Nextcloud delopment follows industry leading security processes. Security bugs are like technical debt: fixing them later is expensive. Our strategy is to prevent them from happening through a rigorous focus on security through the entire life cycle of our product and to get those which find their way through found and fixed as soon as possible.');?></p>
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
								<li><?php echo $l->t('We organize internal and <a class="hyperlink" href="https://conf.nextcloud.com/conference/NextcloudConference2016/program/proposal/4">public security trainings</a>');?></li>
								<li><?php echo $l->t('Developers are asked to fix security issues they caused themselves');?></li>
							</ul>
						</div>
						<div class="col-md-6">
							<a href="https://conf.nextcloud.com/conference/NextcloudConference2016/program/proposal/4"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/training2.png"></a>
						</div>
					</div>
				</div>
				<div id="requirements" class="tab-pane fade">
					<div class="info">
						<div class="col-md-6">
							<h3><?php echo $l->t('Requirements');?></h3>
							<ul>
								<li><?php echo $l->t('Privacy and security risks are analyzed and requirements are established');?></li>
								<li><?php echo $l->t('We employ advanced <a class="hyperlink" href="/security/threat-model/">threat modelling / attack surface analysis</a>');?></li>
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
									<li>
											<a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/ncc-doc.png"></a>
											<a class="hyperlink" href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><?php echo $l->t('NCC Group review');?></a>
											(<a class="hyperlink" href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><?php echo $l->t('summary');?></a>)
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
								<li><?php echo $l->t('We follow industry best practices in disclosing security issues fixed in a release: 2 weeks after the release ');?><a class="hyperlink" href="/security/advisories"><?php echo $l->t('advisories with CVE identifiers are published');?></a></li>
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

<div class="container featureblock">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 revealOnScroll">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Security bug bounties');?></h2>
			<p class="section--paragraph section--text--center"><?php echo $l->t('Nextcloud protects your security with an up to $ 5000 Security Bug Bounty program');?></p>
		</div>
	</div>
	<div class="features--container revealOnScroll row">
		<div class="col-md-6">
			<div class="feature">
				<a href="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-graph.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-graph.png"></a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="feature">
				<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/virusscaning.svg">
				<p class="section--paragraph__tittle"><?php echo $l->t('HackerOne program');?></p>
				<p class="section--paragraph"><?php echo $l->t('We have partnered with the HackerOne platform because of its extraordinary popularity among IT security professionals. More than 3,000 hackers have reported over 24,000 bugs via the platform. Running a program on HackerOne allows us to quickly leverage the collective knowledge of a huge amount of these security experts.');?></p>
				<p class="section--paragraph"><?php echo $l->t('Anyone reporting a security vulnerability in Nextcloud can earn up to $5000, making ours some of the highest security bug bounties in the open source industry. For more details, <a class="hyperlink" href="https://nextcloud.com/blog/introducing-the-nextcloud-bug-bounty-program/">see our announcement</a> and our <a class="hyperlink" href="https://nextcloud.com/blog/updates-about-the-nextcloud-bug-bounty-program/">update in 2017.</a>');?></p>
				<p class="section--paragraph"><?php echo $l->t('Find an example of RhinoSecurityLabs blogging about <a class="hyperlink" href="https://rhinosecuritylabs.com/2016/10/operation-ownedcloud-exploitation-post-exploitation-persistence/">a security issue dealt with here</a> (<a class="hyperlink" href="https://hackerone.com/reports/148151">HackerOne disclosure</a>).');?></p>
				<a href="https://hackerone.com/nextcloud"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-logo.png" alt="Our HackerOne program" /></a>
			</div>
		</div>
	</div>
</div>


<div class="container featureblock">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 revealOnScroll">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Secure Authentication');?></h2>
			<p class="section--paragraph section--text--center"><?php echo $l->t('Authentication is the first step in securing your data');?></p>
		</div>
	</div>
	<div class="row">
	<div class="features--container revealOnScroll">
			<div class="col-md-6">
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/kerberos.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Extra security');?></p>
					<p class="section--paragraph"><?php echo $l->t('The Nextcloud authentication system supports pluggable authentication including Two-factor authentication and device specific passwords, complete with a list of connected browsers and devices on the users’ personal page. As extra protection, device specific password tokens can be denied access to the file system.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Included are Universal 2nd Factor (U2F) and Time-based One-Time Password (TOTP) second factor apps, enabling users to use tools like Yubikeys or Google Authenticator to secure their accounts. Admins can enable or disable Two-factor authentication for users on the command line.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Active user sessions can be invalidated through a list, by removing the user in the admin settings or by changing passwords. Users can manage their own sessions and devices.');?></p>
				</div>
			</div>
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP.png" alt="in action" /></a>
			</div>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 revealOnScroll">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Security advice');?></h2>
			<p class="section--paragraph section--text--center"><?php echo $l->t('We make securing your system as easy as possible');?></p>
		</div>
	</div>
	<div class="row">
		<div class="features--container revealOnScroll">
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
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/security-warnings-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/security-warnings-nw.png" alt="in action" /></a>
			</div>
		</div>
	</div>
</div>


<div class="container featureblock">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 revealOnScroll">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Encryption');?></h2>
			<p class="section--paragraph section--text--center"><?php echo $l->t('Employ encryption for the highest degree of privacy and security');?></p>
		</div>
	</div>
	<div class="row">
		<div class="features--container revealOnScroll">
			<div class="col-md-6">
				<div class="feature">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/saml.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Encrypted data transfer');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud employs industry-standard TLS to encrypt data in transfer. Usage of Object Storage like Amazon S3 or other external storage systems can be secured through Server Side Encryption.');?></p>
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/vault.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Encrypt data at rest');?></p>
					<p class="section--paragraph"><?php echo $l->t('Server Side Encryption can also be used on local storage. However, inherent to the concept of server side encryption, encryption keys will be present in memory of the Nextcloud server during the time a user is logged in and could be retrieved by a determined attacker. We take care to ensure keys are not stored unencrypted on permanent storage and at rest keys are encrypted using a strong cipher.');?></p>
				</div>
			</div>
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-nw.png" alt="in action" /></a>
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
				<p class="section--paragraph__tittle"><?php echo $l->t('Flexible key handling');?></p>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud supports pluggable encryption key handling. If you have an external key server, this can be made to work with Nextcloud.');?></p>
				<p class="section--paragraph"><?php echo $l->t('Our default encryption key handling enables administrators to set a system wide recovery key for encrypted files. This ensures that, even when users lose their password, files can always be decrypted. Encrypted files can be shared but after changing encryption settings, shares will have to be re-shared. Using our command line tools, data can be encrypted, decrypted or re-encrypted when needed.');?></p>
				<p class="section--paragraph"><?php echo $l->t('If you face a regulatory or compliance need to encrypt data at rest but do not need to actually secure this data, locally encrypting data using our built in key management may satisfy compliance requirements.');?></p>
				<p class="section--paragraph"><?php echo $l->t('Learn how to use server side encryption in our');?> <a class="hyperlink" href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank" rel="tooltip" title="Server Side Encryption Configuration"><?php echo $l->t('documentation</a>');?></p>
			</div>
		</div>
	</div>
</div>

<div class="container featureblock">
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
				<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/check-lock.svg">
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
					</ul></li>
				</ul>
				<p class="section--paragraph"><a class="hyperlink" href="https://nextcloud.com/?p=1334"><?php echo $l->t('Learn more about hardening features in our blog.');?></a></p>
			</div>
		</div>
	</div>
</div>
