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
			<p><blockquote><?php echo $l->t('Nextcloud understands the necessity to provide core principle baseline security requirements, as such Nextcloud 11 is built on these security principles to ultimately deliver a secure solution to their customers');?></blockquote><?php echo $l->t('Download the');?> <a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_assurance.pdf"><?php echo $l->t('Assurance Statement</a> from the <a href="https://www.nccgroup.trust">NCC group</a>, a global expert in cyber security and risk mitigation.');?></p>
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
	<p class="text-center revealOnScroll"><a href="#process"><?php echo $l->t('Learn more about our security process and features');?></a></p>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Integration');?></h2>
			<p class="section--paragraph section--text--center"><?php echo $l->t('New technology should fit into existing processes and infrastructure. Nextcloud enables you to leverage existing security investments:');?>
		</div>
		<div class="features--container">
			<div class="col-md-6">

				<div class="feature">
				<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/permissions.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Extensive authentication support');?> </p>
					<p class="section--paragraph"><?php echo $l->t('Nearly any authentication and provisioning mechanism works with Nextcloud.');?> </p>
				</div>

				<div class="subfeature">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ldap.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('LDAP / Active Directory');?> </p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud has extensive LDAP/Active Directory support with an easy installation wizard.');?> </p>
				</div>

				<div class="subfeature">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/kerberos.svg">
					<p class="section--paragraph__tittle">Kerberos</p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud can work with Kerberos and other authentication mechanisms mediated by Apache modules.');?></p>
				</div>

				<div class="subfeature">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/saml.svg">
					<p class="section--paragraph__tittle">SSO/SAML 2.0</p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud supports Single Sign On (SSO) and can work with Shibboleth, a SAML-based authentication in its web front end and clients.');?></p>
				</div>
				
				<div class="subfeature">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/2fa.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Two-factor authentication');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud includes Universal 2nd Factor (U2F) and Time-based One-Time Password (TOTP) second factor apps to increase the security of user login handling.');?></p>
				</div>
				
				<div class="subfeature">
				<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/manual.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Automated or manual provisioning');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud offers an easy to use, REST based provisioning API to create and configure user accounts.');?></p>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="feature">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/storage.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Existing storage and database technology');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud supports any existing storage solution, including object store technologies, keeping data under control of trusted IT administrators and managed with established policies. Nextcloud works with industry standard SQL databases like PostgreSQL, MySQL and MariaDB for user and metadata storage.');?></p>
				</div>

				<div class="feature">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/tools.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Existing security tools');?><p/>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud offers built in monitoring tools and integrates with existing MDM, DLP, event logging and backup tools, enabling existing tool chains to be used to monitor, back up and restore systems.');?></p>
				</div>

				<div class="feature">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/securitypolicies.svg">
					<p class="section--paragraph__tittle"><?php echo $l->t('Current security policies and processes');?><p/>
					<p class="section--paragraph"><?php echo $l->t('Thanks to the on-premise nature of Nextcloud and its ability to leverage existing data storage and database technologies, current security policies and governance processes can continue to be used to manage, control and secure operations with Nextcloud. Nextcloud GmbH does at no point have access to your data and can not interfere with regulated processes, keeping your IT department in control.');?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container featureblock revealOnScroll">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Under your control');?></h2>
			<p class="section--paragraph section--text--center"><?php echo $l->t('Control is key to security. With Nextcloud, your IT department takes back control over its data, managed under its policies and procedures. Nextcloud integrates in the tooling you use in your data center like logging and intrusion detection and works with existing authentication mechanisms like SAML, Kerberos and LDAP. Nextcloud features:');?></p>
		</div>
		<div class="features--container">
			<div class="col-md-6">
				<div class="feature">
				<svg width="64" height="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
				  <title>
				    MONITORING
				  </title>
				  <g fill="none" fill-rule="evenodd">
				    <rect fill="#C4E1F7" y="4" width="64" height="45" rx="4"/>
				    <path d="M4 5c-1.103 0-2 .897-2 2v40c0 1.103.897 2 2 2h56c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2H4zm56 46H4c-2.206 0-4-1.794-4-4V7c0-2.206 1.794-4 4-4h56c2.206 0 4 1.794 4 4v40c0 2.206-1.794 4-4 4z" fill="#1485E0"/>
				    <path fill="#1485E0" d="M40.042 60.287l-3-10 1.916-.574 3 10-1.916.574M23.958 60.287l-1.916-.574 3-10 1.916.574-3 10"/>
				    <path fill="#1485E0" d="M19 61h26v-2H19M31 47h2v-2h-2M6 41h52V9H6v32zm53 2H5c-.553 0-1-.447-1-1V8c0-.553.447-1 1-1h54c.553 0 1 .447 1 1v34c0 .553-.447 1-1 1z"/>
				    <path fill="#FFF" d="M6 9h52v32H6z"/>
				    <path d="M12.394 25C14.75 27.344 23.13 35 32 35c8.87 0 17.25-7.656 19.606-10C49.25 22.656 40.87 15 32 15c-8.87 0-17.25 7.656-19.606 10zM32 37c-11.312 0-21.32-10.865-21.74-11.327-.347-.382-.347-.964 0-1.346C10.68 23.865 20.688 13 32 13c11.313 0 21.32 10.865 21.74 11.327.347.382.347.964 0 1.346C53.32 26.135 43.313 37 32 37z" fill="#1485E0"/>
				    <path d="M20 25h2c0 5.514 4.486 10 10 10s10-4.486 10-10-4.486-10-10-10v-2c6.617 0 12 5.383 12 12s-5.383 12-12 12-12-5.383-12-12z" fill="#1485E0"/>
				    <path d="M26 25h-2c0-4.41 3.59-8 8-8v2c-3.31 0-6 2.69-6 6M32 33v-2c3.31 0 6-2.69 6-6h2c0 4.41-3.59 8-8 8" fill="#1485E0"/>
				    <circle fill="#C4E1F7" cx="32" cy="25" r="3"/>
				    <path d="M32 23c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2zm0 6c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z" fill="#1485E0"/>
				  </g>
				</svg>
					<p class="section--paragraph__tittle"><?php echo $l->t('Logging and monitoring');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud has built in <a class="hyperlink" href="/workflow/#monitoring">monitoring and logging tools</a>, compatible with industry standard tools like Splunk, Nagios and OpenNMS. It also offers a full, compliance-ready activity log for reporting and auditing purposes.');?></p>
				</div>
				
				<div class="feature">
					<svg width="64" height="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
					  <title>
					    PERMISSION AND FILE ACESS
					  </title>
					  <g fill="none" fill-rule="evenodd">
					    <path fill="#C4E1F7" d="M10 2l2 1v41l20 15v3L10 46M54 2l-2 1v41L32 59v3l22-16"/>
					    <path d="M10 45.496l22 16.26 22-16.26V2.618l-8.553 4.277c-.47.233-1.036.067-1.304-.38L41.433 2H22.567l-2.71 4.515c-.266.448-.833.614-1.303.38L10 2.618v42.878zM32 64c-.21 0-.418-.065-.595-.196l-23-17C8.15 46.614 8 46.317 8 46V1c0-.347.18-.668.475-.85.295-.183.662-.2.972-.045L18.62 4.69 21.142.486c.18-.3.505-.485.857-.485h20c.352 0 .677.185.857.485L45.38 4.69 54.554.106c.31-.154.677-.138.972.044C55.82.33 56 .652 56 1v45c0 .317-.15.615-.405.804l-23 17c-.177.13-.386.196-.595.196z" fill="#1485E0"/>
					    <path d="M32 59c-.208 0-.417-.065-.593-.195l-19-14C12.15 44.615 12 44.317 12 44V3h2v40.495l18 13.263 18-13.263V3h2v41c0 .317-.15.616-.407.805l-19 14c-.176.13-.385.195-.593.195" fill="#1485E0"/>
					    <path fill="#1485E0" d="M18 11h2V6h-2M44 11h2V6h-2M32 13c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 14c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
					    <path fill="#1485E0" d="M37 36h-4V26h2v8h2v2"/>
					    <path fill="#1485E0" d="M35 47h-6V26h2v19h2v-3h2v-2h-2v-2h4v6h-2v3M30 17h4v-2h-4M18 15h2v-2h-2M18 19h2v-2h-2M18 23h2v-2h-2M44 15h2v-2h-2M44 19h2v-2h-2M44 23h2v-2h-2"/>
					  </g>
					</svg>
					<p class="section--paragraph__tittle"><?php echo $l->t('Permission and File Access Control');?></p>
					<p class="section--paragraph"><?php echo $l->t('Administrators can set permissions on sharing and access to files using groups. The powerful');?> <a class="hyperlink" href="/workflow/"><?php echo $l->t('workflow tools</a> in Nextcloud enable administrators to limit access to files following strict rules and perform automatic actions like file conversion.');?></p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="feature">
					<svg width="64" height="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
					  <title>
					    ENCRIPTION
					  </title>
					  <g fill="none" fill-rule="evenodd">
					    <rect fill="#C4E1F7" y="4" width="64" height="45" rx="4"/>
					    <path d="M4 5c-1.103 0-2 .897-2 2v40c0 1.103.897 2 2 2h56c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2H4zm56 46H4c-2.206 0-4-1.794-4-4V7c0-2.206 1.794-4 4-4h56c2.206 0 4 1.794 4 4v40c0 2.206-1.794 4-4 4z" fill="#1485E0"/>
					    <path fill="#FFF" d="M6 9h52v32H6z"/>
					    <path fill="#1485E0" d="M40.042 60.287l-3-10 1.916-.574 3 10-1.916.574M23.958 60.287l-1.916-.574 3-10 1.916.574-3 10"/>
					    <path fill="#1485E0" d="M19 61h26v-2H19M31 47h2v-2h-2M6 41h52V9H6v32zm53 2H5c-.553 0-1-.448-1-1V8c0-.552.447-1 1-1h54c.553 0 1 .448 1 1v34c0 .552-.447 1-1 1z"/>
					    <path fill="#1485E0" d="M17 23h2v-2h-2M39 23h4v-2h-4M43 25h4v-2h-4M45 27h2v-2h-2M43 29h2v-2h-2M43 31h4v-2h-4M47 29h4v-2h-4M39 27h2v-2h-2M37 25h4v-2h-4M35 29h2v-2h-2M33 27h2v-2h-2M35 31h4v-2h-4M35 33h2v-2h-2M39 35h2v-4h-2M37 37h2v-2h-2M45 35h2v-2h-2M51 35h2v-2h-2M43 37h2v-2h-2M47 37h4v-2h-4M31 37h4v-2h-4M29 35h2v-2h-2M23 35h4v-2h-4M27 29h2v-2h-2M25 27h4v-2h-4M23 25h2v-2h-2M19 27h4v-2h-4M13 21h4v-2h-4M17 29h4v-2h-4M19 33h2v-2h-2M23 31h4v-2h-4M23 33h2v-2h-2M21 37h2v-2h-2M25 37h2v-2h-2M29 33h4v-2h-4M31 29h2v-2h-2M29 25h4v-2h-4M17 25h2v-2h-2M15 35h4v-2h-4M29 17h4v-2h-4M31 21h6v-2h-6M25 19h6v-2h-6M33 23h2v-2h-2M13 23h2v-2h-2M21 23h8v-2h-8M39 19h8v-2h-8M49 33h4v-2h-4M51 31h2v-2h-2M49 27h4v-2h-4M45 23h6v-2h-6M51 21h2v-2h-2M49 19h4v-2h-4M45 17h4v-2h-4M51 15h2v-2h-2M43 15h4v-2h-4M41 17h2v-2h-2M37 15h4v-2h-4M35 19h2v-4h-2M21 19h2v-2h-2M15 19h4v-2h-4M11 19h2v-2h-2M11 23h2v-2h-2M11 27h2v-2h-2M13 31h4v-2h-4M15 27h2v-2h-2M11 33h2v-2h-2M13 37h4v-2h-4M11 35h2v-2h-2M19 17h4v-2h-4M23 15h4v-2h-4M11 15h8v-2h-8M31 15h4v-2h-4"/>
					  </g>
					</svg>
					<p class="section--paragraph__tittle"><?php echo $l->t('Encryption');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud uses industry-standard SSL/TLS encryption for data in transfer. Additionally, data at rest in storage can be encrypted using a default military grade AES-256 encryption. Keys can be handled with the build in key management or you can opt for a custom key management for integration in existing infrastructure. As keys never leave the Nextcloud server, external storage systems never have access to unencrypted data.');?></p>
				</div>
				
				<div class="feature">
					<svg width="64" height="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
					  <title>
					    VIRUS SCANNING
					  </title>
					  <g fill="none" fill-rule="evenodd">
					    <path d="M5.414 58h53.172L62 54.586V54H39.414l-1.707 1.707c-.187.188-.44.293-.707.293H27c-.266 0-.52-.105-.707-.293L24.586 54H2v.586L5.414 58zM59 60H5c-.266 0-.52-.105-.707-.293l-4-4C.105 55.52 0 55.265 0 55v-2c0-.552.447-1 1-1h24c.266 0 .52.105.707.293L27.414 54h9.172l1.707-1.707c.187-.188.44-.293.707-.293h24c.553 0 1 .448 1 1v2c0 .265-.105.52-.293.707l-4 4c-.187.188-.44.293-.707.293zM6 50H4V20c0-2.206 1.794-4 4-4h7v2H8c-1.103 0-2 .897-2 2v30M60 50h-2V20c0-1.103-.897-2-2-2h-7v-2h7c2.206 0 4 1.794 4 4v30M27 48h2v-2h-2M23 48h2v-2h-2M31 48h2v-2h-2M35 48h2v-2h-2M39 48h2v-2h-2" fill="#1485E0"/>
					    <path d="M55 48H43v-2h11V22h-5v-2h6c.553 0 1 .448 1 1v26c0 .552-.447 1-1 1M21 48H9c-.553 0-1-.448-1-1V21c0-.552.447-1 1-1h6v2h-5v24h11v2" fill="#1485E0"/>
					    <path fill="#1485E0" d="M51 44h-2V11.414L41.586 4H15v40h-2V2h29.414L51 10.586V38"/>
					    <path fill="#C4E1F7" d="M15 4h28v6h6v34H15"/>
					    <circle stroke="#979797" fill="#FFF" cx="32" cy="19" r="3"/>
					    <path d="M32 23c-1.573 0-4 2.577-4 6s2.427 6 4 6 4-2.577 4-6-2.427-6-4-6zm0 14c-2.718 0-6-3.568-6-8s3.282-8 6-8 6 3.568 6 8-3.282 8-6 8z" fill="#1485E0"/>
					    <path fill="#1485E0" d="M22 30h5v-2h-5M28 26h-3.414l-3.293-3.293 1.414-1.414L25.414 24H28v2M22.707 36.707l-1.414-1.414L24.586 32H28v2h-2.586l-2.707 2.707M19 7h1V6h-1M23 7h1V6h-1M27 7h1V6h-1M19 10h1V9h-1M22 10h1V9h-1M25 10h1V9h-1M19 13h18v-1H19M50 12h-9V3h2v7h7v2M32 17c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2zm0 6c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zM37 30h5v-2h-5M39.414 26H36v-2h2.586l2.707-2.707 1.414 1.414L39.414 26M41.293 36.707L38.586 34H36v-2h3.414l3.293 3.293-1.414 1.414"/>
					    <path fill="#1485E0" d="M31 36h2V22h-2"/>
					  </g>
					</svg>
					<p class="section--paragraph__tittle"><?php echo $l->t('Virus scanning');?></p>
					<p class="section--paragraph"><?php echo $l->t('Nextcloud supports integration with ClamAV for automated scanning of all uploaded files.');?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<a name="process"></a>
<div class="container revealOnScroll">
	<div class="featureblock process">
		<h2 class="header"><?php echo $l->t('Security process');?></h2>
		<p><?php echo $l->t('Nextcloud works following industry standard security processes. Security bugs are like technical debt: fixing them later is expensive. Our strategy is to prevent them from happening through a rigorous focus on security through the entire life cycle of our product and to get those which find their way through found and fixed as soon as possible.');?></p>
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
								<li><?php echo $l->t('We provide');?> <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>general/security.html" target="_blank" rel="tooltip" title="<?php echo $l->t('Information for Developers">detailed documentation</a> about common web security vulnerabilities');?></li>
								<li><?php echo $l->t('We organize internal and <a href="https://conf.nextcloud.com/conference/NextcloudConference2016/program/proposal/4">public security trainings</a>');?></li>
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
								<li><?php echo $l->t('We employ advanced <a href="/security/threat-model/">threat modelling / attack surface analysis</a>');?></li>
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
								<div class="row security-badge">
									<div class="col-sm-4 col-md-4">
											<a href="https://bestpractices.coreinfrastructure.org/projects/209"><img class="responsive" src="https://bestpractices.coreinfrastructure.org/assets/questions_page_badge-17b338c0e8528d695d8676e23f39f17ca2b89bb88176370803ee69aeebcb5be4.png"></a><br/>
											<a href="https://bestpractices.coreinfrastructure.org/projects/209"><?php echo $l->t('Full report');?></a>
									</div>
									<div class="col-sm-4 col-md-4">
											<a href="<?php echo get_template_directory_uri(); ?>/assets/files/veracode_report.pdf"><img class="responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/veracode-doc.png"></a><br/>
											<a href="<?php echo get_template_directory_uri(); ?>/assets/files/veracode_report.pdf"><?php echo $l->t('Veracode Security Scan');?></a>
									</div>
									<div class="col-sm-4 col-md-4">
											<a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><img class="responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/ncc-doc.png"></a><br/>
											<a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><?php echo $l->t('NCC Group review');?></a><br/> (<a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><?php echo $l->t('summary');?></a>)
									</div>
								</div>
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
								<li><?php echo $l->t('We follow industry best practices in disclosing security issues fixed in a release: 2 weeks after the release ');?><a href="/security/advisories"><?php echo $l->t('advisories with CVE identifiers are published');?></a></li>
								<li><?php echo $l->t('We run a <a href="https://hackerone.com/nextcloud">successful bug bounty program with high payouts</a>, up to $5000');?></li>
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

<div class="container featureblock revealOnScroll">
	<h2 class="header"><?php echo $l->t('Security bug bounties');?></h2>
	<div class="row">
		<div class="col-md-6">
			<a href="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-graph.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-graph.png"></a>
		</div>
		<div class="col-md-6">
			<p><?php echo $l->t('We have partnered with the HackerOne platform because of its extraordinary popularity among IT security professionals. More than 3,000 hackers have reported over 24,000 bugs via the platform. Running a program on HackerOne allows us to quickly leverage the collective knowledge of a huge amount of these security experts.');?></p>
			<p><?php echo $l->t('Anyone reporting a security vulnerability in Nextcloud can earn up to $5000, making ours some of the highest security bug bounties in the open source industry. For more details, <a href="https://nextcloud.com/blog/introducing-the-nextcloud-bug-bounty-program/">see our announcement</a>.');?></p>
			<p><?php echo $l->t('Find an example of RhinoSecurityLabs blogging about <a href="https://rhinosecuritylabs.com/2016/10/operation-ownedcloud-exploitation-post-exploitation-persistence/">a security issue dealt with here</a> (<a href="https://hackerone.com/reports/148151">HackerOne disclosure</a>).');?></p>
			<a href="https://hackerone.com/nextcloud"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/hacker-one-logo.png" alt="Our HackerOne program" /></a>
		</div>
	</div>
</div>


<div class="container featureblock revealOnScroll">
	<div class="row">
		<div class="col-md-8">
			<h2><?php echo $l->t('Authentication capabilities');?></h2>
			<p><?php echo $l->t('The Nextcloud authentication system supports pluggable authentication including Two-factor authentication and device specific passwords, complete with a list of connected browsers and devices on the users’ personal page. As extra protection, device specific password tokens can be denied access to the file system.');?></p>
			<p><?php echo $l->t('Included are Universal 2nd Factor (U2F) and Time-based One-Time Password (TOTP) second factor apps, enabling users to use tools like Yubikeys or Google Authenticator to secure their accounts.');?></p>
			<p><?php echo $l->t('Active sessions can be invalidated through the list, by removing the user in the admin settings or by changing passwords. Admins can enable or disable Two-factor authentication for users on the command line.');?></p>
			<p><?php echo $l->t('Nextcloud supports SAML 2.0 (“Shibboleth”) and Kerberos authentication and has extensive LDAP directory integration.');?></p>
		</div>
		<div class="col-md-4">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP-wee.png" alt="in action" /></a>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<h3><?php echo $l->t('Brute force protection');?></h3>
			<p><?php echo $l->t('Brute Force Protection logs invalid login attempts and slows down multiple attempts from a single IP address (or IPv6 range). This feature is enabled by default and protects against an attacker who tries to guess a password from one or more users.');?></p>
			<p><?php echo $l->t('You can find more information on hardening your Nextcloud installation in our extensive');?> <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_server/harden_server.html" target="_blank" rel="tooltip" title="Information for Admins"><?php echo $l->t('hardening guide</a>');?></p>
			<h3><?php echo $l->t('Password handling');?></h3>
			<p><?php echo $l->t('Administrators can set password quality policies enforced by Nextcloud.');?></p>
			<p><?php echo $l->t('Password reset tokens are invalidated when critical information like user email has been changed to protect against phishing attacks.');?></p>
			<p><?php echo $l->t('Nextcloud will ask system administrators for password confirmation on security critical actions. ');?></p>
		</div>
		<div class="col-md-6 revealOnScroll">
		<h3><?php echo $l->t('Security hardening');?></h3>
		<p><?php echo $l->t('Nextcloud employs a wide variety of extra security hardening capabilities, including:');?></p>
			<ul>
				<li><?php echo $l->t('Content Security Policy 3.0');?>
				<ul>
					<p><?php echo $l->t('CSP is a HTTP feature that allows the server to set specific restrictions on a resource when opened in a browser. Such as only allowing to load images or JavaScript from specific targets.');?></p>
					<p><?php echo $l->t('CSP 3.0 is the latest, most strict version of the standard, increasing the barrier for  attackers to exploit a Cross-Site Scripting vulnerability.');?></p>
				</ul></li>
				<li><?php echo $l->t('Same-Site Cookies');?>
				<ul>
					<p><?php echo $l->t('Same-Site cookies are a security measure supported by modern browsers that prevent CSRF vulnerabilities and protect your privacy further. Nextcloud enforces the same-site cookies to be present on every request by enforcing this within the request middle ware.');?></p>
					<p><?php echo $l->t('We include the __Host prefix to the cookie (if supported by browser and server). This mitigates cookie injection vulnerabilities within potential third-party software sharing the same second level domain.');?></p>
				</ul></li>
			</ul>
			<p><a href="https://nextcloud.com/?p=1334"><?php echo $l->t('Learn more about these hardening features in our blog.');?></a></p>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="row revealOnScroll">
		<div class="col-md-5">
			<img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-home.png" alt="in action" />
		</div>
		<div class="col-md-7">
			<h2><?php echo $l->t('Encryption');?></h2>
			<p><?php echo $l->t('Nextcloud employs industry-standard TLS to encrypt data in transfer. Usage of Object Storage like Amazon S3 or other external storage systems can be secured through Server Side Encryption.');?></p>
			<p><?php echo $l->t('Server Side Encryption can also be used on local storage. However, inherent to the concept of server side encryption, encryption keys will be present in memory of the Nextcloud server during the time a user is logged in and could be retrieved by a determined attacker. We take care to ensure keys are not stored unencrypted on permanent storage and at rest keys are encrypted using a strong cipher.');?></p>
		</div>
	</div>
	<div class="row revealOnScroll">
		<div class="col-md-7">
			<p><?php echo $l->t('Nextcloud supports pluggable encryption key handling. If you have an external key server, this can be made to work with Nextcloud.');?></p>
			<p><?php echo $l->t('Our default encryption key handling enables administrators to set a system wide recovery key for encrypted files. This ensures that, even when users lose their password, files can always be decrypted. Encrypted files can be shared but after changing encryption settings, shares will have to be re-shared. Using our command line tools, data can be encrypted, decrypted or re-encrypted when needed.');?></p>
			<p><?php echo $l->t('If you face a regulatory or compliance need to encrypt data at rest but do not need to actually secure this data, locally encrypting data using our built in key management may satisfy compliance requirements.');?></p>
			<p><?php echo $l->t('Learn how to use server side encryption in our');?> <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank" rel="tooltip" title="Server Side Encryption Configuration"><?php echo $l->t('documentation</a>');?></p>
		</div>
		<div class="col-md-5">
			<img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-recovery.png" alt="in action" />
		</div>
	</div>
</div>

<div class="wrap container featureblock revealOnScroll">
	<div class="featurerow">
		<h2 class="header"><?php echo $l->t('Screenshots');?></h2>
		<div class="row">
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png" class="img-responsive screenshot" /></a>
			</div>
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP-login.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP-login.png" class="img-responsive screenshot" /></a>
			</div>
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-home.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-home.png" class="img-responsive screenshot" /></a>
			</div>
			<div class="col-md-6">
				<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-default.png"><img src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-default.png" class="img-responsive screenshot" /></a>
			</div>
		</div>
	</div>
</div>
