<?php get_template_part( 'templates/parts/title'); ?>
<div class="sub-nav"><a href="/security/advisories">Security Advisories</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/security/threat-model">Threat Model</a>
</div>
<h2>Security information</h2>
<p>This page hosts our security policies and information with regards to reporting security flaws. Learn more about how Nextcloud offers the <a href="/secure">best security in the open source file sync and share industry here</a>. You can <a href="<?php echo get_template_directory_uri(); ?>/advisories/advisories.rss">follow our advisories via RSS</a>.</p>

<!--<p>If you are looking for information on encryption, <a href="https://owncloud.org/blog/how-owncloud-uses-encryption-to-protect-your-data/" target="_blank">see this blog</a>. For more general information around security, see our <a href="/faq#security" target="_blank">FAQ questions around security</a> and follow our development on <a href="https://nextcloud.com/news" target="_blank">nextcloud.com/news</a> to learn about <a href="https://statuscode.ch/2016/06/security-and-nextcloud-9/" target="_blank">security improvements like those introduced in Nextcloud 9</a>. For server owners, our documentation has a section with <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_server/harden_server.html" target="_blank">best practices and tips on securing a Nextcloud server</a>.</p>-->
<div class="row">
	<div class="span12">
		<p>If you've discovered a security issue with Nextcloud, please read our responsible disclosure guidelines and contact us at <a href="https://hackerone.com/nextcloud"><strong>hackerone.com/nextcloud</strong></a>.  Your report should include:
		<ul>
			<li>Product version</li>
			<li>A vulnerability description</li>
			<li>Reproduction steps</li>
		</ul>
		
		<p>A member of the security team will confirm the vulnerability, determine its impact, and develop a fix. The fix will be applied to the master branch, tested, and packaged in the next security release. The vulnerability will be publicly announced after the release. Finally, your name will be added to the <a href="https://hackerone.com/nextcloud/thanks">hall of fame</a> as a thank you from the entire Nextcloud community. Note our <a href="/security/threat-model">threat model</a> to know what is expected behavior.</p>

		<h3>PGP Key for Submissions</h3>
		<p>In order to facilitate secure submission of security issues, we provide the <a href="https://pgp.mit.edu/pks/lookup?op=get&search=0xD75899B9A724937A">following PGP key</a> for confidential submission:</p>
		<ul>
			<li>Key ID: <code>A724937A</code>
			</li>
			<li>Fingerprint: <code>2880 6A87 8AE4 23A2 8372  792E D758 99B9 A724 937A</code>
			</li>
		</ul>

		<p>We do however recommend to not encrypt the information submitted via HackerOne as only a small subset of the team has access to this key.</p>

		<h3>Responsible Disclosure Guidelines</h3> The Nextcloud community kindly requests that you comply with the following guidelines when researching and reporting security vulnerabilities:
		<ul>
			<li>Only test for vulnerabilities on your own install of Nextcloud Server</li>
			<li>Confirm the vulnerability applies to a supported product version</li>
			<li>Share vulnerabilities in detail only with the security team</li>
			<li>Allow reasonable time for a response from the security team</li>
			<li>Do not publish information related to the vulnerability until Nextcloud has made an announcement to the community</li>
		</ul>

		<h3>Supported Product Versions</h3>
		Nextcloud Server:
		<ul>
			<li>Latest 10.x release</li>
			<li>Latest 9.0.x release</li>
		</ul>
		Nextcloud Android Client:
		<ul>
			<li>Latest release on Google PlayStore</li>
		</ul>
	</div>
</div>
