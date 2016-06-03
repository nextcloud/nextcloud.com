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
        <h2>Stored XSS in "activity" application (oC-SA-2015-010)</h2>
        <p>3rd August 2015</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v2 Base Score: 3.5 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:M/Au:S/C:P/I:N/A:N)">AV:N/AC:M/Au:S/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/97.html">Improper Neutralization of Input During Web Page Generation (CWE-97)</a></p>
        <h3>Description</h3>
        <p><p>Due to not sanitising all user provided input, the "activity" application shipped with the mentioned Nextcloud versions is vulnerable to stored cross-site scripting attacks. The "activity" application is enabled by default in the Nextcloud Community Edition and Enterprise Edition.</p>
<p>Successful exploitation requires that the adversary is able to create files containing the <code>&quot;</code> character. This character is forbidden by default in any current Nextcloud version except 8.1.0 RC1, thus an actual exploitation requires that the user has mounted an external storage within Nextcloud where a user can create files with such characters. Alternatively an adversary may discover a way to circumvent the input validation. (Nextcloud is not aware of a bypass of to the input validation) - Furthermore the attacker must be able to share a folder containing the files with malicious filename with the victim.</p>
<p>Since Nextcloud employs a strict Content-Security-Policy that forbids inline script execution. Thus this bug is unlikely to be exploitable on recent browsers that support Content-Security-Policy. (Firefox &gt;= 23, Chrome &gt;= 25, Safari &gt;= 7)</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.5</strong> (CVE-2015-5953)</li>
<li>Nextcloud Server &lt; <strong>8.0.4</strong> (CVE-2015-5953)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The output is now properly sanitized.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
