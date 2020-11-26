<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>XSS through image upload on contacts using svg file with png extension (NC-SA-2020-044)</h2>
        <p>20th October 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:L">AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Cross-site Scripting (XSS) - Stored (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/998422">998422</a></p>
        <h3>Description</h3>
        <p>A missing file type check in Nextcloud Contacts 3.4.0 allowed a malicious user to upload SVG files as PNG files to perform XSS attacks.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Contacts &lt; <strong>3.4.1</strong> (CVE-2020-8280)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Contacts is upgraded to 3.4.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Tommy Suriel - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
