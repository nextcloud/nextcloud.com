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
        <h2>PHP arbitrary class instantiation in "files_external" (oC-SA-2015-018)</h2>
        <p>30th September 2015</p>
        <p>Risk level: <strong>High</strong></p>
        <p>CVSS v2 Base Score: 9 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:S/C:C/I:C/A:C)">AV:N/AC:L/Au:S/C:C/I:C/A:C</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/470.html">Use of Externally-Controlled Input to Select Classes or Code ('Unsafe Reflection') (CWE-470)</a></p>
        <h3>Description</h3>
        <p><p>A user may instantiate arbitrary Nextcloud classes due to a lack of a proper check of the mount point options provided by a user via the web front end. These may include constructor arguments and could potentially lead to a remote code execution.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>8.1.2</strong> (CVE-2015-7699)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/a1706f61aaf822aeba4ea9e84b53c5cea984f8e4">core/a1706f61aaf822aeba4ea9e84b53c5cea984f8e4</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>8.0.7</strong> (CVE-2015-7699)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/595381b9bd5676492ff8957de0590982ed1864a4">core/595381b9bd5676492ff8957de0590982ed1864a4</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>7.0.9</strong> (CVE-2015-7699)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/b05e178bbf884b120d1106e6a28f35aa50d6d06f">core/b05e178bbf884b120d1106e6a28f35aa50d6d06f</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The mount points are now properly validated in the controller before being stored.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Robin McCorkell - Nextcloud Inc. (rmccorkell@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
