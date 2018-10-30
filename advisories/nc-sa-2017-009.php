<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Limitation of app specific password scope can be bypassed (NC-SA-2017-009)</h2>
        <p>8th May 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:C/C:L/I:N/A:N">AV:N/AC:H/PR:L/UI:R/S:C/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/285.html">Improper Authorization (CWE-285)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/191979">191979</a></p>
        <h3>Description</h3>
        <p>Improper session handling allowed an application specific password without permission to the files access to the users file.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>11.0.3</strong> (CVE-2017-0892)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The permission check has been corrected and reviewed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 11.0.3.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mmakosdel - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
