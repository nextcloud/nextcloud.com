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
        <h2>Command injection when using external SMB storage (oC-SA-2015-017)</h2>
        <p>30th September 2015</p>
        <p>Risk level: <strong>High</strong></p>
        <p>CVSS v2 Base Score: 9 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:S/C:C/I:C/A:C)">AV:N/AC:L/Au:S/C:C/I:C/A:C</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/78.html">Improper Neutralization of Special Elements used in an OS Command ('OS Command Injection') (CWE-78)</a></p>
        <h3>Description</h3>
        <p><p>The external legacy SMB storage (not using php-libsmbclient) of Nextcloud was not properly neutralizing all special elements which allows an adversary to execute arbitrary SMB commands.</p>
<p>Effectively this allows an attacker to gain access to any file on the system or overwrite it, potentially leading to a PHP code execution.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>8.1.2</strong> (CVE-2015-7698)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/8c145541f65592a4d2d7de50ecfa1b0698496cb8">core/8c145541f65592a4d2d7de50ecfa1b0698496cb8</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The vulnerable library is now properly handling potentially dangerous characters.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
