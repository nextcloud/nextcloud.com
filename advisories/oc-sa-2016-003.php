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
        <h2>Disclosure of files that begin with ".v" due to unchecked return value (oC-SA-2016-003)</h2>
        <p>6th January 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v2 Base Score: 4.3 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:M/Au:S/C:P/I:N/A:N)">AV:N/AC:M/Au:S/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/252.html">Unchecked Return Value (CWE-252)</a></p>
        <h3>Description</h3>
        <p><p>Due to a incorrect usage of the <code>getOwner</code> function of the Nextcloud virtual filesystem,done authenticated users with incoming shares of other users are able to access files beginning with ".v" of the sharing user. This can only be exploited if the "files_versions" application is enabled on the server.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>8.2.2</strong> (CVE-2016-1500)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/b7c217290f0d1974c048bb467e2c3cee0bbc6fc2">core/b7c217290f0d1974c048bb467e2c3cee0bbc6fc2</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>8.1.5</strong> (CVE-2016-1500)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/51c6cd5c6a725b4849d995049163a0b87a9c3a58">core/51c6cd5c6a725b4849d995049163a0b87a9c3a58</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>8.0.10</strong> (CVE-2016-1500)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/07fb3e329b37c19d9eb6a3a114e00a09f3f2798b">core/07fb3e329b37c19d9eb6a3a114e00a09f3f2798b</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>7.0.12</strong> (CVE-2016-1500)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/f746100e13dcadf8a2b6d311422a1c66c959565c">core/f746100e13dcadf8a2b6d311422a1c66c959565c</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The usage of <code>getOwner</code> has been corrected and Nextcloud 9.0 will throw an exception in case the owner of an not existing file is requested.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
