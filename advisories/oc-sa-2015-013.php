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
        <h2>Credentials potentially leaked to other configured Nextcloud instance (oC-SA-2015-013)</h2>
        <p>3rd August 2015</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v2 Base Score: 2.6 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:H/Au:N/C:P/I:N/A:N)">AV:N/AC:H/Au:N/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/201.html">Information Exposure Through Sent Data (CWE-201)</a></p>
        <h3>Description</h3>
        <p><p>A bug in the Nextcloud iOS application below version 3.4.4 may leak credentials as well as cookies used for authentication purposes to other configured Nextcloud instances.</p>
<p>Specifically, the Nextcloud iOS application allows users to connect to multiple Nextcloud instances offering an easy way to switch between different accounts on different instances. An user may for example configure their hosted Nextcloud by a third-party provider as well as their company Nextcloud instance.</p>
<p>In some cases when switching the accounts in the iOS applications the application is not properly handling the state switch and will continue to send the previous authentication headers to the other instance. Thus a malicious administrator on another configured Nextcloud instance may gain access to the user' credentials on the other instance.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Mobile &lt; <strong>iOS 3.4.4</strong> (CVE-2015-5955)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The iOS application is now properly handling credentials as well as cookies and will send these only to the correct domains.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
