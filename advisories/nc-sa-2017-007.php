<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>DOM XSS vulnerability in search dialogue (NC-SA-2017-007)</h2>
        <p>8th May 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2.6 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:H/PR:L/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/213227">213227</a></p>
        <h3>Description</h3>
        <p><p>Inadequate escaping lead to XSS vulnerability in the search module. To be exploitable an user has to write or paste malicious content into the search dialogue.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>11.0.3</strong> (CVE-2017-0890)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The content is now properly escaped, furthermore for Nextcloud 12 we have <a href="https://statuscode.ch/2017/03/CSP-unsafe-eval-and-jquery/">hardened jQuery</a> to prevent such CSP bypasses.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Ahsan Khan - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
