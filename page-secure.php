<div class="container-fluid background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1>Security and authentication</h1>
			<h2>Nextcloud is designed to protect user data <br />
			through multiple layers of protection.</h2>
		</div>
	</div>
</div>
<div class="container">
	<div class="featureblock process">
		<h1 class="header">Security process</h1>
		<p>Security bugs are like technical debt: fixing them later is expensive. Our strategy is thus to prevent them from happening through a rigorous focus on security through the entire life cycle of our product.</p>
		<p><small>Click each step in the process to learn more</small></p>
		<div class="processimg">
			<ul class="nav nav-pills">
				<li class="active"><a data-toggle="tab" href="#training"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/training.png"></a></li>
				<li><a data-toggle="tab" href="#requirements"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/requirements.png"></a></li>
				<li><a data-toggle="tab" href="#design"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/design.png"></a></a></li>
				<li><a data-toggle="tab" href="#implementation"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/implementation.png"></a></a></li>
				<li><a data-toggle="tab" href="#verification"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/verification.png"></a></a></li>
				<li><a data-toggle="tab" href="#release"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/release.png"></a></a></li>
				<li><a data-toggle="tab" href="#response"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/security/response.png"></a></a></li>
			</ul>
			<div class="tab-content">
				<div id="training" class="tab-pane fade in active">
					<div class="info">
						<div class="col-md-6">
							<h1>Security training</h1>
							<ul>
								<li>We provide <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>general/security.html" target="_blank" rel="tooltip" title="Information for Developers">detailed documentation</a> about common web security vulnerabilities</li>
								<li>We organize internal and <a href="https://conf.nextcloud.com/conference/NextcloudConference2016/program/proposal/4">public security trainings</a></li>
								<li>Developers are asked to fix security issues they caused themselves</li>
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
							<h1>Requirements</h1>
							<ul>
								<li>Privacy and security risks are analyzed and requirements are established</li>
								<li>We employ advanced <a href="https://nextcloud.com/security/threat-model/">threat modelling / attack surface analysis</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/threatmodel.png">
						</div>
					</div>
				</div>
				<div id="design" class="tab-pane fade">
					<div class="info">
						<div class="col-md-6">
							<h1>Design</h1>
							<ul>
								<li>Designs are reviewed for security implications</li>
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
							<h1>Implementation</h1>
							<ul>
								<li>Unsafe functions are forbidden (e.g. unserialize, non-prepared statements and unsafe comparisons)</li>
								<li>Our internal functions are designed to provide secure defaults for developers</li>
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
							<h1>Verification</h1>
							<ul>
								<li>We regularly run static and dynamic security scans</li>
								<li>We employ a strict mandatory code review process</li>
							</ul>
						</div>
						<div class="col-md-6">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/scan.png">
						</div>
					</div>
				</div>
				<div id="release" class="tab-pane fade">
					<div class="info">
						<div class="col-md-6">
							<h1>Release</h1>
							<ul>
								<li>We follow industry best practices in disclosing security issues fixed in a release: 2 weeks after the release is made available.</li>
								<li>Advisories with CVE identifiers are published</li>
							</ul>
						</div>
						<div class="col-md-6">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/release2.png">
						</div>
					</div>
				</div>
				<div id="response" class="tab-pane fade">
					<div class="info">
						<div class="col-md-6">
							<h1>Response</h1>
							<ul>
								<li>We run a <a href="https://hackerone.com/nextcloud">successful bug bounty program with high payouts</a></li>
								<li>Statistics show a massive decrease of valid external security reports</li>
							</ul>
						</div>
						<div class="col-md-6">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/security/hackerone.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/hackerone.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-6">
			<a href="<?php echo get_template_directory_uri(); ?>/assets/img/security/hackerone.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/hackerone.png"></a>
		</div>
		<div class="col-md-6">
			<a href="https://hackerone.com/nextcloud"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/HackerOne.png" alt="Our HackerOne program" /></a>
			<h2>Security bug bounties</h2>
			<p>We have partnered with the HackerOne platform because of its extraordinary popularity among IT security professionals. More than 3,000 hackers have reported over 24,000 bugs via the platform. Running a program on HackerOne allows us to quickly leverage the collective knowledge of a huge amount of these security experts.</p>
			<p>Anyone reporting a security vulnerability in Nextcloud can earn up to USD 5000, making ours some of the highest security bug bounties in the open source industry. For more details, <a href="https://nextcloud.com/blog/introducing-the-nextcloud-bug-bounty-program/">see our announcement</a>.</p>
			<p>Find an example of RhinoSecurityLabs blogging about <a href="https://rhinosecuritylabs.com/2016/10/operation-ownedcloud-exploitation-post-exploitation-persistence/">a security issue dealt with here</a>.</p>
		</div>
	</div>
</div>


<div class="container featureblock">
	<div class="row">
		<div class="col-md-7">
			<h2>Authentication capabilities</h2>
			<p>The Nextcloud authentication system supports pluggable authentication including two-factor authentication and device specific passwords, complete with a list of connected browsers and devices on the users’ personal page.</p>
			<p>Active sessions can be invalidated through the list, by removing the user in the admin settings or by changing passwords. Admins can enable or disable two-factor authentication for users on the command line.</p>
			<p>Nextcloud supports SAML 2.0 (“Shibboleth”) authentication and has extensive LDAP directory integration.</p>
		</div>
		<div class="col-md-5">
			<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/TOTP.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/TOTP-wee.png" alt="in action" /></a>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-6">
			<h3>Brute force protection</h3>
			<p>Brute Force Protection logs invalid login attempts and slows down multiple attempts from a single IP address (or IPv6 range). This feature is enabled by default and protects against an attacker who tries to guess a password from one or more users.</p>
		</div>
		<div class="col-md-6">
		<h3>Security hardening</h3>
		<p>Nextcloud employs a wide variety of extra security hardening capabilities, including:</p>
			<ul>
			<li>Content Security Policy
			<ul>
				<li>First implementation in 2013</li>
				<li><a href="https://blogs.dropbox.com/tech/tag/content-security-policy/">Dropbox implemented it in 2015</a></li>
			</ul></li>
			<li>Same-Site Cookies
			<ul>
				<li>Cookies will only be sent if request originates from the same origin (preventing CSRF vulnerabilities)</li>
				<li>Currently only supported in Chrome and Opera, Mozilla is working on Firefox support.</li>
			</ul></li>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-5">
			<img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-home.png" alt="in action" />
		</div>
		<div class="col-md-7">
			<h2>Encryption</h2>
			<p>Nextcloud employs industry-standard TLS to encrypt data in transfer. On the server, admins can enable server side encryption for extra protection.</p>
			<p>Server side encryption protects files on the Nextcloud server or external storage from being seen by third parties. As files are encrypted and decrypted on the Nextcloud server, this does not protect from malicious system administrators or a compromised server but it provides an additional layer of protection for cases when server hardware gets stolen.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<p>Encryption is particularly useful when used in combination with external storage as the third party storage system will never see unencrypted files.</p>
			<p>Nextcloud supports pluggable encryption key handling. If you have an external key server, this can be made to work with Nextcloud.</p>
			<p>Administrators can set a system wide recovery key for encrypted files. This ensures that, even when users lose their password, files can always be decrypted. Encrypted files can be shared but after changing encryption settings, shares will have to be re-shared.</p>
			<p>Learn how to use server side encryption in our <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank" rel="tooltip" title="Server Side Encryption Configuration">documentation</a></p>
		</div>
		<div class="col-md-5">
			<img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-recovery.png" alt="in action" />
		</div>
	</div>
</div>


<div class="wrap container featureblock">
<div class="featurerow">
	<h1 class="featuretitle">Screenshots</h1>
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
