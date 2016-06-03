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
        <h2>Disclosure of users files when deleting parent folders of shared files (oC-SA-2015-011)</h2>
        <p>3rd August 2015</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v2 Base Score: 3.5 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:M/Au:S/C:P/I:N/A:N)">AV:N/AC:M/Au:S/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/252.html">Unchecked Return Value (CWE-252)</a></p>
        <h3>Description</h3>
        <p><p>Due to a common incorrect usage of the <code>getPath</code> function of the Nextcloud virtual filesystem multiple security issues occurred. Especially the function may return <code>null</code> in case the specified file does not exist anymore. When passing the result of <code>getPath</code> in combination with <code>null</code> to functions that setup a virtual chroot or other security relevant limitations PHP would typecast the return value to an empty string and thus effectively bypassing the internal security functions of Nextcloud.</p>
<p><code>getPath</code> with a return type of <code>null</code> is a common occurrence in case a folder has been shared publicly and the parent item has been deleted later from the database. Due to missing foreign keys the share is still considered valid and will finally resolve to the users' root directory.</p>
<p>In such cases an adversary with knowledge of the sharing link to a deleted item may be able to access all files of the user and not only the original shared directory.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.7</strong> (CVE-2015-5954)</li>
<li>Nextcloud Server &lt; <strong>8.0.5</strong> (CVE-2015-5954)</li>
<li>Nextcloud Server &lt; <strong>6.0.9</strong> (CVE-2015-5954)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>All usages of the <code>getPath</code> function has been revised and corrected.</p>
<p>Furthermore, Nextcloud 8.2 will feature another security hardening where instead of returning <code>null</code> for invalid files now an exception is thrown. In case of an exception Nextcloud will stop the script execution and also static source code analysis will make developers aware of such situations.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
