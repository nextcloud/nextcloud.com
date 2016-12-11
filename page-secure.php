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
			<p><blockquote><?php echo $l->t('"Nextcloud understands the necessity to provide core principle baseline security requirements, as such Nextcloud 11 is built on these security principles to ultimately deliver a secure solution to their customers"');?></blockquote><?php echo $l->t('Download the');?> <a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_assurance.pdf"><?php echo $l->t('Assurance Statement</a> from the <a href="https://www.nccgroup.trust">NCC group</a>');?></p>
		</div>
	</div>
</div>
<div class="container featureblock">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="header"><?php echo $l->t('Verified Enterprise Class Security');?></h2>
			<p><?php echo $l->t('Our customers care deeply about security and so do we. Nextcloud aligns with industry standards such as Clause 14 of ISO/IEC27001-2013 and related standards, guidance and security principles.');?></p>
			<p><?php echo $l->t('Our solution is built around combined assurance layers consisting of newly applied rich security features, applied best practices which are governed by policy and the design itself validated by industry standard testing processes.');?></p>
		</div>
	</div>
	<div class="row security-badge">
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
				<a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><?php echo $l->t('NCC Group review');?></a><br/> (<a href="<?php echo get_template_directory_uri(); ?>/assets/files/NCC_report_full.pdf"><?php echo $l->t('summary');?></a>)
		</div>
	</div>
	<p class="text-center"><a href="#process"><?php echo $l->t('Learn more about our security process and features');?></a></p>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2 class="header"><?php echo $l->t('Integration');?></h2>
			<p><?php echo $l->t('New technology should fit into existing processes and infrastructure. Nextcloud enables you to leverage existing security investments:');?>
			<ul>
				<li><strong><?php echo $l->t('Authentication Support');?></strong><br/>
				<ul>
					<li>LDAP / Active Directory</br>
					<?php echo $l->t('Nextcloud has extensive LDAP/Active Directory support with an easy installation wizard.');?></li>
					<li>Kerberos</br>
					<?php echo $l->t('Nextcloud can work with Kerberos and other authentication mechanisms mediated by Apache modules.');?></li>
					<li>SSO/SAML 2.0</br>
					<?php echo $l->t('Nextcloud supports Single Sign On (SSO) and can work with Shibboleth, a SAML-based authentication in its web front end and clients.');?></li>
					<li><?php echo $l->t('Two-factor authentication');?></br>
					<?php echo $l->t('Nextcloud includes Universal 2nd Factor (U2F) and Time-based One-Time Password (TOTP) second factor apps to increase the security of user login handling.');?></li>
				</ul></li>
				<li><strong><?php echo $l->t('Existing storage and database technology');?></strong><br/>
				<?php echo $l->t('Nextcloud supports any existing storage solution, including object store technologies, keeping data under control of trusted IT administrators and managed with established policies. Nextcloud works with industry standard SQL databases like PostgreSQL, MySQL and MariaDB for user and metadata storage.');?></li>
				<li><strong><?php echo $l->t('Existing security tools');?></strong><br/>
				<?php echo $l->t('Nextcloud offers built in monitoring tools and integrates with existing MDM, DLP, event logging and backup tools, enabling existing tool chains to be used to monitor, back up and restore systems.');?></li>
				<li><strong><?php echo $l->t('Current security policies and processes');?></strong><br/>
				<?php echo $l->t('Thanks to the on-premise nature of Nextcloud and its ability to leverage existing data storage and database technologies, current security policies and governance processes can continue to be used to manage, control and secure operations with Nextcloud. Nextcloud GmbH does at no point have access to your data and can not interfere with regulated processes, keeping your IT department in control.');?></li>
			</ul></p>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2 class="header"><?php echo $l->t('Under your control');?></h2>
			<p><?php echo $l->t('Control is key to security. With Nextcloud, your IT department takes back control over its data, managed under its policies and procedures. Nextcloud integrates in the tooling you use in your data center like logging and intrusion detection and works with existing authentication mechanisms like SAML, Kerberos and LDAP.');?></p>
			<p><?php echo $l->t('Nextcloud features:');?>
			<ul>
				<li><strong><?php echo $l->t('Logging and monitoring');?></strong><br/>
				<?php echo $l->t('Nextcloud has built in <a href="/workflow/#monitoring">monitoring and logging tools</a>, compatible with industry standard tools like Splunk, Nagios and OpenNMS. It also offers a full, compliance-ready activity log for reporting and auditing purposes.');?></li>
				<li><strong><?php echo $l->t('Permission and File Access Control');?></strong><br/>
				<?php echo $l->t('Administrators can set permissions on sharing and access to files using groups. The powerful');?> <a href="/workflow/"><?php echo $l->t('workflow tools</a> in Nextcloud enable administrators to limit access to files following strict rules and perform automatic actions like file conversion.');?></li>
				<li><strong><?php echo $l->t('Encryption');?></strong><br/>
				<?php echo $l->t('Nextcloud uses industry-standard SSL/TLS encryption for data in transfer. Additionally, data at rest in storage can be encrypted using a default military grade AES-256 encryption. Keys can be handled with the build in key management or you can opt for a custom key management for integration in existing infrastructure. As keys never leave the Nextcloud server, external storage systems never have access to unencrypted data.');?></li>
				<li><strong><?php echo $l->t('Virus scanning');?></strong><br/>
				<?php echo $l->t('Nextcloud supports integration with ClamAV for automated scanning of all uploaded files.');?></li>
			</ul></p>
		</div>
	</div>
</div>

<a name="process"></a>
<div class="container">
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

<div class="container featureblock">
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


<div class="container featureblock">
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
		<div class="col-md-6">
			<h3><?php echo $l->t('Brute force protection');?></h3>
			<p><?php echo $l->t('Brute Force Protection logs invalid login attempts and slows down multiple attempts from a single IP address (or IPv6 range). This feature is enabled by default and protects against an attacker who tries to guess a password from one or more users.');?></p>
			<p><?php echo $l->t('You can find more information on hardening your Nextcloud installation in our extensive');?> <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_server/harden_server.html" target="_blank" rel="tooltip" title="<?php echo $l->t('Information for Admins">hardening guide</a>');?></p>
			<h3><?php echo $l->t('Password handling');?></h3>
			<p><?php echo $l->t('Administrators can set password quality policies enforced by Nextcloud.');?></p>
			<p><?php echo $l->t('Password reset tokens are invalidated when critical information like user email has been changed to protect against phishing attacks.');?></p>
			<p><?php echo $l->t('Nextcloud will ask system administrators for password confirmation on security critical actions. ');?></p>
		</div>
		<div class="col-md-6">
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
					<p><?php echo $l->t('Same-Site cookies are a security measure supported by modern browsers that prevent CSRF vulnerabilities and protect your privacy further. Nextcloud enforces the same-site cookies to be present on every request by enforcing this within the request middleware.');?></p>
					<p><?php echo $l->t('We include the __Host prefix to the cookie (if supported by browser and server). This mitigates cookie injection vulnerabilities within potential third-party software sharing the same second level domain.');?></p>
				</ul></li>
			</ul>
			<p><a href="https://nextcloud.com/?p=1334"><?php echo $l->t('Learn more about these hardening features in our blog.');?></a></p>
		</div>
	</div>
</div>

<div class="container featureblock">
	<div class="row">
		<div class="col-md-5">
			<img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-home.png" alt="in action" />
		</div>
		<div class="col-md-7">
			<h2><?php echo $l->t('Encryption');?></h2>
			<p><?php echo $l->t('Nextcloud employs industry-standard TLS to encrypt data in transfer. On the server, admins can enable server side encryption for extra protection.');?></p>
			<p><?php echo $l->t('Server side encryption protects files on the Nextcloud server or external storage from being seen by third parties. As files are encrypted and decrypted on the Nextcloud server, this does not protect from malicious system administrators or a compromised server but it provides an additional layer of protection for cases when server hardware gets stolen.');?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<p><?php echo $l->t('Encryption is particularly useful when used in combination with external storage as the third party storage system will never see unencrypted files.');?></p>
			<p><?php echo $l->t('Nextcloud supports pluggable encryption key handling. If you have an external key server, this can be made to work with Nextcloud.');?></p>
			<p><?php echo $l->t('Administrators can set a system wide recovery key for encrypted files. This ensures that, even when users lose their password, files can always be decrypted. Encrypted files can be shared but after changing encryption settings, shares will have to be re-shared.');?></p>
			<p><?php echo $l->t('Learn how to use server side encryption in our');?> <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_files/encryption_configuration.html" target="_blank" rel="tooltip" title="<?php echo $l->t('Server Side Encryption Configuration">documentation</a>');?></p>
		</div>
		<div class="col-md-5">
			<img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-recovery.png" alt="in action" />
		</div>
	</div>
</div>


<div class="wrap container featureblock">
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


<script>
// Tab-Pane change function

tabChange = function(){
    var tabs = $('.nav-pills > li');
    var active = tabs.filter('.active');
    var next = active.next('li').length? active.next('li').find('a') : tabs.filter(':first-child').find('a');
    // Use the Bootsrap tab show method
    next.tab('show');
}    // Tab Cycle function
function settabchnge () {
    //alert("in set tab");
tabCycle = setInterval(tabChange, 3000);
}

settabchnge();

function cleartabchange () {
    clearInterval(tabCycle);
}

$(function(){

    var counterofclock = 1;
    var counterofmoreclicks = 1; 
    var clicked = false;
    var sec = 0;
    function startClock() {
        if (clicked === false) {
            clock = setInterval(stopWatch, 1000);
            clicked = true;
        }else if (clicked === true) {
        }
    }       
    function stopWatch() {
            sec++;
    }
    function stopClock() {
            window.clearInterval(clock);
            sec = 0;
            clicked = false;
    }
    $('.nav-pills a').click(function(e) {
        if(counterofclock === 1){
            startClock();
            counterofclock = 2;
        }else {
            stopClock();
            startClock();
        }
        e.preventDefault();
        // Stop the cycle
        if (counterofmoreclicks == 2 && sec < 11){
            clearTimeout(starttabchnage);
        }
        counterofmoreclicks = 2;
        clearInterval(tabCycle);
        // Show the clicked tabs associated tab-pane
        $(this).tab('show')
        // Start the cycle again in a predefined amount of time
        starttabchnage = setTimeout(function(){ settabchnge();}, 15000);
    });
})
</script>
