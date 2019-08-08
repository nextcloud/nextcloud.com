<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Query restriction bypass on exposed FileContentProvider in Android app (NC-SA-2019-011)</h2>
        <p>26th July 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:P/AC:H/PR:H/UI:R/S:U/C:L/I:N/A:L">AV:P/AC:H/PR:H/UI:R/S:U/C:L/I:N/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/89.html">Improper Neutralization of Special Elements used in an SQL Command ('SQL Injection') (CWE-89)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/518669">518669</a></p>
        <h3>Description</h3>
        <p><p>Not strictly enough sanitization allowed an attacker to get content information from protected tables when using custom queries.</p></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Android &lt; <strong>3.6.1</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p><p>It is recommended that users upgrade to version 3.6.1 or later.</p></p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/julien_thomas" target="_blank" rel="noreferrer">Julien Thomas - Protektoid.com project - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
