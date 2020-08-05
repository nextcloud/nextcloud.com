<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>XSS in desktop client via invalid server address on login form (NC-SA-2020-027)</h2>
        <p>10th July 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:P/AC:L/PR:L/UI:R/S:C/C:L/I:L/A:L">AV:P/AC:L/PR:L/UI:R/S:C/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Cross-site Scripting (XSS) - Generic (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/685552">685552</a></p>
        <h3>Description</h3>
        <p>A cross-site scripting error in Nextcloud Desktop client 2.6.4 allowed to present any html (including local links) when responding with invalid data on the login attempt.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Desktop &lt; <strong>2.6.5</strong> (CVE-2020-8189)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Desktop client is upgraded to 2.6.5.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Juan Pablo Lopez Yacubian - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
