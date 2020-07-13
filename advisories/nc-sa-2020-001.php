<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>2FA sessions not properly expired on password change (NC-SA-2020-001)</h2>
        <p>1st April 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.6 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:P/AC:H/PR:L/UI:N/S:U/C:H/I:H/A:N">AV:P/AC:H/PR:L/UI:N/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/384.html">Session Fixation (CWE-384)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/486693">486693</a></p>
        <h3>Description</h3>
        <p>A bug in Nextcloud Server 15.0.2 causes pending 2FA logins to not be correctly expired when the password of the user is reset.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>15.0.3</strong> (CVE-2019-15612)</li>
<li>Nextcloud Server &lt; <strong>14.0.7</strong> (CVE-2019-15612)</li>
<li>Nextcloud Server &lt; <strong>13.0.11</strong> (CVE-2019-15612)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 15.0.3.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Jackson K V (jacksonkv67@gmail.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
