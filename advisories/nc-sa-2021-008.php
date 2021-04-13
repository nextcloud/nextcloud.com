<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Missing URL validation allowed RCE for the server on the Desktop client (NC-SA-2021-008)</h2>
        <p>24th February 2021</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:L/AC:H/PR:H/UI:R/S:C/C:L/I:L/A:L">AV:L/AC:H/PR:H/UI:R/S:C/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/99.html">Resource Injection (CWE-99)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/1078002">1078002</a></p>
        <h3>Description</h3>
        <p>Missing validation of URLs in Nextcloud Desktop Client 3.1.2 and earlier allowed a malicious server to execute code on the client. User interaction was required.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Desktop &lt; <strong>3.1.3</strong> (CVE-2021-22879)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Desktop Client is upgraded to 3.1.3.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://positive.security" target="_blank" rel="noreferrer">Fabian Bräunlein - Positive Security - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
