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
        <h2>Local file inclusion on MS Windows Platform (oC-SA-2015-006)</h2>
        <p>24th June 2015</p>
        <p>Risk level: <strong>High</strong></p>
        <p>CVSS v2 Base Score: 9 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:S/C:C/I:C/A:C)">AV:N/AC:L/Au:S/C:C/I:C/A:C</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/98.html">Improper Control of Filename for Include/Require Statement in PHP Program ("PHP Remote File Inclusion") (CWE-98)</a></p>
        <h3>Description</h3>
        <p><p>Due to an improper control of the filename for a <code>require_once()</code> statement in the routing component a limited local file inclusion vulnerability is existent in all below mentioned Nextcloud versions when running on the MS Windows Platform.</p>
<p>Depending on the Nextcloud configuration and the authentication state of a remote attacker this vulnerability may have different impact. Specifically:</p>
<ul><li>An unauthenticated remote attacker is able to reinstall the instance in case he is able to connect to a database or the SQLite driver is installed. This will overwrite the existing configuration and existing users will not be able to login anymore. This attack is very likely to be noticed, however an attacker is granted administrative access to the Nextcloud instance. If a backup of the configuration file is accessible for the web server user the attacker might restore it after a successful exploitation to cover the attack</li><li>An unauthenticated remote attacker is able to execute arbitrary PHP code if he is able to upload files using the public upload functionality and he can guess the full path of the folder.</li><li>An authenticated remote attacker is able to execute arbitrary PHP code if the /data/ directory is below the Nextcloud root. The directory can be moved using the datadirectory configuration in config/config.php.</li></ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.6</strong> (CVE-2015-4716)</li>
<li>Nextcloud Server &lt; <strong>8.0.4</strong> (CVE-2015-4716)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The Nextcloud Server component is now properly sanitizing characters to the affected routing component. Starting with Nextcloud 8.1 it will not be possible anymore to run Nextcloud Server on the MS Windows Platform.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
