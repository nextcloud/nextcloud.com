<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>External storage credentials stored for wrong user (NC-SA-2021-004)</h2>
        <p>25th January 2021</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 8.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:H/UI:N/S:C/C:H/I:H/A:N">AV:N/AC:L/PR:H/UI:N/S:C/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/284.html">Improper Access Control - Generic (CWE-284)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/1061591">1061591</a></p>
        <h3>Description</h3>
        <p>A missing user check in Nextcloud 20.0.5 and prior allowed to populate your own credentials for other users external storage configuration when they did not configure one yet.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>20.0.6</strong> (CVE-2021-22877)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 20.0.6.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://hofstaetter.io" target="_blank" rel="noreferrer">Alexander Hofstätter - Hofstätter IT GmbH - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
