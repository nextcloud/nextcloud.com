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
        <h2>Command injection when using external SMB storage (oC-SA-2015-008)</h2>
        <p>24th June 2015</p>
        <p>Risk level: <strong>High</strong></p>
        <p>CVSS v2 Base Score: 9 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:S/C:C/I:C/A:C)">AV:N/AC:L/Au:S/C:C/I:C/A:C</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/78.html">Improper Neutralization of Special Elements used in an OS Command ('OS Command Injection') (CWE-78)</a></p>
        <h3>Description</h3>
        <p><p>The external SMB storage of Nextcloud was not properly neutralizing all special elements which allows an adversary to execute arbitrary SMB commands.</p>
<p>This was caused by improperly sanitizing the ; character which is interpreted as command separator by smbclient (the used software to connect to SMB shared by Nextcloud)</p>
<p>Effectively this allows an attacker to gain access to any file on the system or overwrite it, finally leading to a PHP code execution in the case of Nextcloud's config file.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.8</strong> (CVE-2015-4718)</li>
<li>Nextcloud Server &lt; <strong>7.0.6</strong> (CVE-2015-4718)</li>
<li>Nextcloud Server &lt; <strong>8.0.4</strong> (CVE-2015-4718)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>Files containing a <code>;</code> are no longer processed on external SMB storages. This is no regression as handling files containing said character was not reliably possible before as well.</p>
<p>Nextcloud 8.1 will feature a completely rewritten SMB storage with cleaner code to reduce the attack surface even more.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
