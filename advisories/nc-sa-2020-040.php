<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper confidentiality protection of server-side encryption keys (NC-SA-2020-040)</h2>
        <p>3rd October 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:L/AC:H/PR:H/UI:N/S:C/C:N/I:H/A:N">AV:L/AC:H/PR:H/UI:N/S:C/C:N/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/522.html">Insufficiently Protected Credentials (CWE-522)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/743505">743505</a></p>
        <h3>Description</h3>
        <p>Insufficient protection of the server-side encryption keys in Nextcloud Server 19.0.1 allowed an attacker to replace the public key to decrypt them later on.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>20.0.0</strong> (CVE-2020-8152)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 20.0.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.syseleven.de/" target="_blank" rel="noreferrer">Kevin "Kenny" Niehage - SysEleven GmbH (kenny@syseleven.de) - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
