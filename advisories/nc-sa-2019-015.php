<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Group admins can create users with IDs of system folders (NC-SA-2019-015)</h2>
        <p>12th August 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 8.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:H/UI:R/S:C/C:H/I:H/A:H">AV:N/AC:L/PR:H/UI:R/S:C/C:H/I:H/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/20.html">Improper Input Validation (CWE-20)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/508493">508493</a></p>
        <h3>Description</h3>
        <p>Improper Input Validation in Nextcloud Server 15.0.7 allows group admins to create users with IDs of system folders.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>15.0.8</strong> (CVE-2019-15624)</li>
<li>Nextcloud Server &lt; <strong>14.0.11</strong> (CVE-2019-15624)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 15.0.8.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Leon Klingele - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
