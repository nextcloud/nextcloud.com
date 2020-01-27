<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Login and token disclosure to other Nextcloud services (NC-SA-2019-017)</h2>
        <p>12th November 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.9 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:H/UI:R/S:C/C:L/I:L/A:L">AV:N/AC:L/PR:H/UI:R/S:C/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/657.html">Violation of Secure Design Principles (CWE-657)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/672623">672623</a></p>
        <h3>Description</h3>
        <p>Violation of Secure Design Principles in the iOS App 2.24.0 causes the app to leak its login and token to other Nextcloud services when search e.g. for federated users or registering for push notifications.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Ios &lt; <strong>2.24.0</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the iOS App is upgraded to 2.24.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Jannik Großkopf - Telekom Security - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
