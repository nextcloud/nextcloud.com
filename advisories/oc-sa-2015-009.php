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
        <h2>Improper validation of certificates when using self-signed certificates (oC-SA-2015-009)</h2>
        <p>8th June 2015</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v2 Base Score: 6.1 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:H/Au:N/C:C/I:P/A:N)">AV:N/AC:H/Au:N/C:C/I:P/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/297.html">Improper Validation of Certificate with Host Mismatch (CWE-297)</a></p>
        <h3>Description</h3>
        <p><p>The Nextcloud Desktop Client was vulnerable against MITM attacks until version 1.8.2 in combination with self-signed certificates. To be exploitable the following conditions have to be met:</p>
<ul><li>The connection to the remote Nextcloud server must be secured using a self-signed certificate which the user imported in the Nextcloud client.</li><li>While the Nextcloud client is connected to the remote Nextcloud server an attacker starts a MITM attack and the user has to manually distrust the new certificate. If the connection is already MITM'd while the client is not yet running the Nextcloud client will behave properly.</li><li>User clicks "Cancel" on the appearing SSL warning.</li></ul><p>If all conditions are met the client will continue syncing and considers the malicious certificate as valid. This allows adversaries in a MITM position to sniff the user credentials which are transferred in the Basic Authentication header as well as to other sensitive information. (including the PHP session and transferred files)</p>
<p>The issue was caused by calling the incorrect <a href="https://doc.qt.io/qt-4.8/qnetworkreply.html#ignoreSslErrors" rel="noreferrer"><code>QNetworkReply::ignoreSslErrors</code></a>  overload: Omitting the errors to be ignored as a parameter, Qt's network stack will ignore all errors. The code is now calling the overloaded version which ignores only the error acknowledged by the user.</p>
<p>Nextcloud highly advises affected users to update affected clients as soon as possible to ensure data integrity and confidentiality. Users with such a setup and that have experienced such a behaviour are encouraged to change their Nextcloud passwords.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Desktop &lt; <strong>1.8.2</strong> (CVE-2015-4456)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>To protect our users Nextcloud has issued the 1.8.2 client which addresses this issue. Users of older Nextcloud clients are encouraged to import their certificate into the local system trust store.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Johannes Kliemann (jklmnn@web.de) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
