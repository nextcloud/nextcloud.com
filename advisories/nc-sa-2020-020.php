<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Mail app not verifying TLS host of mail servers (NC-SA-2020-020)</h2>
        <p>24th March 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.9 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:U/C:H/I:L/A:L">AV:N/AC:H/PR:L/UI:R/S:U/C:H/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/295.html">Improper Certificate Validation (CWE-295)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/803734">803734</a></p>
        <h3>Description</h3>
        <p>A missing verification of the TLS host in Nextcloud Mail 1.1.3 allowed a man in the middle attack.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Mail &lt; <strong>1.1.4</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Mail app is upgraded to 1.1.4.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Frank Isemann (frank@isemann.name) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
