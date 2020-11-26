<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Password of share by mail is not hashed when given on the create share call (NC-SA-2020-026)</h2>
        <p>4th June 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:N/S:U/C:L/I:L/A:L">AV:N/AC:H/PR:L/UI:N/S:U/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/256.html">Plaintext Storage of a Password (CWE-256)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/885041">885041</a></p>
        <h3>Description</h3>
        <p>A logic error in Nextcloud Server 19.0.0 caused a plaintext storage of the share password when it was given on the initial create API call.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>19.0.1</strong> (CVE-2020-8183)</li>
<li>Nextcloud Server &lt; <strong>18.0.6</strong> (CVE-2020-8183)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 19.0.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://nextcloud.com/" target="_blank" rel="noreferrer">N/A - Nextcloud GmbH - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
