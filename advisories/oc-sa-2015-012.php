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
        <h2>Improper validation of certificates within the iOS application (oC-SA-2015-012)</h2>
        <p>3rd August 2015</p>
        <p>Risk level: <strong>High</strong></p>
        <p>CVSS v2 Base Score: 7.8 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:A/AC:L/Au:N/C:C/I:C/A:N)">AV:A/AC:L/Au:N/C:C/I:C/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/297.html">Improper Validation of Certificate with Host Mismatch (CWE-297)</a></p>
        <h3>Description</h3>
        <p><p>The <a href="https://github.com/nextcloud/ios-library">Nextcloud iOS Library</a> was vulnerable against a remotely exploitable certification problem until version 1.1.2. The vulnerable library version is used by the official Nextcloud iOS client until version 3.4.4.</p>
<p>Specifically it has been discovered that the used networking library (<a href="https://github.com/AFNetworking/AFNetworking/">AFNetworking</a>) is per default not ensuring whether the host-specific data (i.e. the Common Name ("CN") of the certificate) is actually associated with the connected remote host.</p>
<p>This effectively allows MITM (Man-in-the-Middle) attacks, allowing adversaries in such a position to intercept the traffic of the application using the Nextcloud iOS Library.</p>
<p>Nextcloud highly advises users to update affected clients as soon as possible to ensure data integrity and confidentiality. Third-party developers using the Nextcloud iOS Library are encouraged to update the library and provide users with updated client versions.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Mobile &lt; <strong>iOS 3.4.4</strong> (CVE-2015-3996 (Note: This is the upstream CVE for the responsible AFNetworking issue))</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The vulnerable library has been updated.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
