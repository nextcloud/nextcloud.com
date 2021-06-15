<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Reflected XSS when renaming malicious file (NC-SA-2021-005)</h2>
        <p>25th January 2021</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:R/S:U/C:H/I:L/A:L">AV:N/AC:H/PR:H/UI:R/S:U/C:H/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Cross-site Scripting (XSS) - Reflected (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/896522">896522</a></p>
        <h3>Description</h3>
        <p>Missing sanitization in Nextcloud Server 20.0.5 and prior allowed to perform a reflected XSS when saving html as file name and causing an error on rename e.g. by renaming to an existing file. The risk is mostly mitigated due to the strict Content-Security-Policy (CSP) of Nextcloud, and thus mainly targets browsers not supporting CSP such as Internet Explorer.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>20.0.6</strong> (CVE-2021-22878)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 20.0.6.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.fortiguard.com/" target="_blank" rel="noreferrer">Zhouyuan Yang - Fortinet - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
