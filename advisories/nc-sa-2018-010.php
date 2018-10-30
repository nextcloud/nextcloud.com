<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper validation of permissions (NC-SA-2018-010)</h2>
        <p>25th October 2018</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 6.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:U/C:H/I:H/A:N">AV:N/AC:H/PR:L/UI:R/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/284.html">Improper Access Control - Generic (CWE-284)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/388515">388515</a></p>
        <h3>Description</h3>
        <p>Improper revalidation of permissions lead to not accepting access restrictions by acess tokens.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>14.0.0</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>13.0.6</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>12.0.11</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 14.0.0, Nextcloud 13.0.6 or Nextcloud 12.0.11.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mohd Haji - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
