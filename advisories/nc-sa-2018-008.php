<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Stored XSS in autocomplete suggestions for file comments (NC-SA-2018-008)</h2>
        <p>10th August 2018</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:N/A:N">AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
        
        <h3>Description</h3>
        <p><p>A missing sanitization of search results for an autocomplete field could lead to a stored XSS requiring user-interaction. The missing sanitization only affected user names, hence malicious search results could only be crafted by authenticated users.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>13.0.5</strong> (CVE-2018-3780)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The error has been fixed.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Joas Schilling - Nextcloud GmbH (coding@schilljs.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
