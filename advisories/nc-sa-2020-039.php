<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Downgrade encryption scheme and break integrity through known-plaintext attack (NC-SA-2020-039)</h2>
        <p>26th August 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:L/AC:H/PR:H/UI:N/S:C/C:N/I:H/A:N">AV:L/AC:H/PR:H/UI:N/S:C/C:N/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/310.html">Cryptographic Issues - Generic (CWE-310)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/742588">742588</a></p>
        <h3>Description</h3>
        <p>A cryptographic issue in Nextcloud Server 19.0.1 allowed an attacker to downgrade the encryption scheme and break the integrity of encrypted files.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>19.0.2</strong> (CVE-2020-8150)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 19.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.syseleven.de/" target="_blank" rel="noreferrer">Kevin "Kenny" Niehage - SysEleven GmbH (kenny@syseleven.de) - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
