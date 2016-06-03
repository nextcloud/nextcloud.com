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
        <h2>Reflected XSS in OCS provider discovery (oC-SA-2016-001)</h2>
        <p>6th January 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v2 Base Score: 4.3 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:M/Au:N/C:P/I:N/A:N)">AV:N/AC:M/Au:N/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
        <h3>Description</h3>
        <p><p>A Cross-site scripting (XSS) vulnerability in the OCS discovery provider in Nextcloud Servers allows remote attackers to inject arbitrary web script or HTML via the URL resulting in a reflected Cross-Site-Scripting.</p>
<p>Since Nextcloud employs a strict Content-Security-Policy that forbids inline script execution this bug is unlikely to be exploitable on recent browsers that support Content-Security-Policy. (Firefox >= 23, Chrome >= 25, Safari >= 7, Microsoft Edge)</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>8.2.2</strong> (CVE-2016-1498)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/cccf4b607340f52cd0e9301c6e2813c121f2c236">core/cccf4b607340f52cd0e9301c6e2813c121f2c236</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>8.1.5</strong> (CVE-2016-1498)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/ada757317422ab9be36e10a7b9a2a5597063521f">core/ada757317422ab9be36e10a7b9a2a5597063521f</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>8.0.10</strong> (CVE-2016-1498)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/1d650169804b37b7e9864c8032c67dd48c99d08d">core/1d650169804b37b7e9864c8032c67dd48c99d08d</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>7.0.12</strong> (CVE-2016-1498)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/85e068a723c09d0f01ab3e10aa6a3f6a8c4c3227">core/85e068a723c09d0f01ab3e10aa6a3f6a8c4c3227</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The vulnerable component is now properly sanitizing the output.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
