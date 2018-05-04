<?php get_template_part( 'templates/parts/title'); ?>
<div class="sub-nav"><a href="<?php echo home_url('/security') ?>">Security overview</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo home_url('/security/advisories') ?>">Security Advisories</a>
</div>
<h2>Threat model & accepted risks</h2>
<p>This page is constantly evolving. So check back over time to see new additions.</p>

<h3>Administrator privileges</h3>
<p>We consider Nextcloud administrators ultimately trusted. It is for example expected behavior that a Nextcloud administrator can execute arbitrary code.</p>

<h3>Denial of Service</h3>
<p>Due to the usage of the PHP scripting language we do consider Denial of Service not something that can at the moment be completely prevented. See also the article "<a href="http://lukasmartinelli.ch/web/2014/11/17/php-dos-attack-revisited.html">PHP Denial of Service Attack Revisited</a>".</p>
<p>For this reason while we do fix and acknowledge specific Denial of Service attacks we do generally not consider DoS a bounty-worthy vulnerability.</p>

<h3>Local external storage systems are considered trusted</h3>
<p>We do consider local mounted storage systems as trusted, so if a symlink or something else is configured on the external storage the Nextcloud server will follow it with the web server privileges.</p>
<p>For this reason we do recommend administrators to only use the external storage mount for ultimately trusted content.</p>

<h3>Server-side encryption</h3>
<p>Nextcloud can be configured to encrypt data at rest. In this scenario we do prevent against storage administrators mainly, we are aware that a Nextcloud administrator could still intercept the user password to manually decrypt the encryption key. We do thus only consider attack scenarios bounty-worthy if they include external parties.</p>

<h3>Client-side encryption</h3>
<p>Nextcloud client-side (or end-to-end) encryption is designed to protect user data from the server in nearly all scenario's, <a href="https://github.com/nextcloud/end_to_end_encryption_rfc">as described in the RFC.</a> Any way to circumvent the protection as covered by the <a href="https://github.com/nextcloud/end_to_end_encryption_rfc/blob/master/RFC.md#security-properties">security properties</a> would be treated by us as a security issue. Note that, as of May 2018, the client-side or end-to-end encryption feature is not considered 'finished' and no bug bounties are paid out until it is released as a final, stable version, expected mid/late 2018.</p>

<h3>Features intentionally marked as insecure</h3>
<p>Some features in Nextcloud are intentionally marked as insecure and disabled by default (plus have a big warning above them). One example includes the preview providers such as the LibreOffice preview provider. At the moment we consider vulnerabilities
in those disabled features as not bounty-worthy.</p>

<h3>Audit logging</h3>
<p>The audit logging feature in Nextcloud is at the moment missing some logs for things like "Accessing previews of files", these will be added in a future release and known issues are tracked in our <a href="https://github.com/nextcloud/server/issues/">issue tracker</a>.</p>

<h3>Version disclosure</h3>
<p>At the moment we consider version disclosure an accepted risk as an attacker can enumerate service versions using other means as well. (e.g. comparing behaviour)</p>

<h3>Attacks involving other Android apps on the device</h3>
<p>We do consider attacks involving other Android apps on the device as low or medium risk. Downloaded files are saved on your sd card (or other storage) and are accessible by all apps.</p>

<h3>Content spoofing</h3>
<p>Generally speaking we consider content spoofing not a bounty-worthy vulnerability.</p>

<h3>User enumeration</h3>
<p>We do not consider user enumeration a security risk as for convenience and for features such as Server-to-Server sharing this is an expected behaviour.</p>

<h3>Brute force of credentials</h3>
<p>Nextcloud 12 introduced brute force protection. If you find a way around it, it would qualify as a security issue.</p>

<h3>Server-side request forgery</h3>
<p>Nextcloud ships with multiple features that perform sending requests to other hosts, we do consider this accepted behaviour and advocate people to deploy Nextcloud into its own seggregated network segment.</p>

<p><em>Page last modified on May 5, 2018</em></p>
