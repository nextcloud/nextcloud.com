<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Missing sanitization in iOS App allows XSS (NC-SA-2020-003)</h2>
        <p>20th November 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/116.html">Improper Encoding or Escaping of Output (CWE-116)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/575562">575562</a></p>
        <h3>Description</h3>
        <p>Missing sanitization in the iOS App 2.24.4 causes an XSS when opening malicious HTML files.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Ios &lt; <strong>2.25.0</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the iOS App is upgraded to 2.25.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://noobsec.org" target="_blank" rel="noreferrer">noobsec (root@noobsec.org) - Vulnerability discovery and disclosure.</a></li><li>Wannarat C. / MisterHuntz - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
