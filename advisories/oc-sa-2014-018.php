<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php get_template_part('advisories/advisory-side'); ?>
    </div>
    <div class="col-md-8">
        <h2>Local file inclusion in core (oC-SA-2014-018)</h2>
        <p>15th July 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to an improper control of the filename for a <code>require_once()</code> statement in the routing component a limited local file inclusion vulnerability is existent in all below mentioned Nextcloud versions.</p>
<p>Depending on the Nextcloud configuration and the authentication state of a remote attacker this vulnerability may have different impact. Specifically:</p>
<ul><li>An unauthenticated remote attacker is able to reinstall the instance in case he is able to connect to a database or the SQLite driver is installed. This will overwrite the existing configuration and existing users will not be able to login anymore. This attack is very likely to be noticed, however an attacker is granted administrative access to the Nextcloud instance. If a backup of the configuration file is accessible for the web server user the attacker might restore it after a successful exploitation to cover the attack</li><li>An unauthenticated remote attacker is able to execute arbitrary PHP code if he is able to upload files using the public upload functionality and he can guess the full path of the folder.</li><li>An authenticated remote attacker is able to execute arbitrary PHP code if the <code>/data/</code> directory is below the Nextcloud root. The directory can be moved using the <code>datadirectory</code> configuration in <code>config/config.php</code>.</li></ul><p>Nextcloud Inc. is currently not aware of any active attack that are exploiting this vulnerability. To verify whether your installation might have been attacked you can use the following regular expression: <code>index.php\/[^ /]+\/[^ /]+\/[\.]+\/[\.]+\/</code>. (e.g. <code>cat /var/log/apache2/access_log | grep -i -E 'index.php\/[^ /]+\/[^ /]+\/[\.]+\/[\.]+\/*'</code>)</p>
<p>Please contact security@nextcloud.com if you have proof that you've been attacked using this vulnerability.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.4</strong> (CVE-2014-4929)</li>
<li>Nextcloud Server &lt; <strong>5.0.17</strong> (CVE-2014-4929)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The Nextcloud team has taken the following efforts to prevent further such attacks in the future:</p>
<ul><li>All usages of potential dangerous functions including files in core have been reviewed.</li><li>All insecure usages of those functions have been fixed and deprecated, the specific parts routing component will be rewritten for Nextcloud 8 to further harden the security.</li><li>The setup routine has been refactored. It will be no longer possible to call it directly beginning with Nextcloud 7.</li></ul></p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
