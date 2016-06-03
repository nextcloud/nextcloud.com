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
        <h2>Improper validation of certificates when using self-signed certificates (oC-SA-2015-016)</h2>
        <p>21st September 2015</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v2 Base Score: 6.1 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:H/Au:N/C:C/I:P/A:N)">AV:N/AC:H/Au:N/C:C/I:P/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/297.html">Improper Validation of Certificate with Host Mismatch (CWE-297)</a></p>
        <h3>Description</h3>
        <p><p>The Nextcloud Desktop Client was vulnerable against MITM attacks until version 2.0.0 in combination with self-signed certificates. To be exploitable the following conditions have to be met:</p>
<ul><li>The connection to the remote Nextcloud server must be secured using a self-signed certificate which the user imported in the Nextcloud client.</li><li>The client needs to be compiled with a Qt release greater than 5.3.x (such as 5.4.x)</li><li>If all conditions are met the client send a single HTTP request containing potential secret data such as the Basic Authentication Headers or the session ID.</li></ul><p>The issue was caused by calling the incorrect QNetworkReply::ignoreSslErrors overload: Omitting the errors to be ignored as a parameter, Qt's twork stack will ignore all errors. The code is now calling the overloaded version which ignores only the error acknowledged by the user. </p>
<p>Nextcloud highly advises affected users to update affected clients as soon as possible to ensure data integrity and confidentiality. Users with such setup and that have experienced such a behaviour are encouraged to change their Nextcloud passwords.</p>
<p>This is a partial regression of oC-SA-2015-009 (CVE-2015-4456).</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Desktop &lt; <strong>2.0.1</strong> (CVE-2015-7298)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>To protect our users Nextcloud has issued the 2.0.1 client which addresses this issue. Users of older Nextcloud clients are encouraged to import their certificate into the local system trust store.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Michael Clark - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
