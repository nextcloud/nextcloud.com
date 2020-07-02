<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Classification of calendar events is ignored by the activity stream (NC-SA-2019-001)</h2>
        <p>12th April 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:H/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:L/PR:H/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/287.html">Improper Authentication (CWE-287)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/476615">476615</a></p>
        <h3>Description</h3>
        <p>A missing check revealed the name of confidential events and private events to all users of a shared calendar.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>15.0.1</strong> (CVE-2019-5449)</li>
<li>Nextcloud Server &lt; <strong>14.0.5</strong> (CVE-2019-5449)</li>
<li>Nextcloud Server &lt; <strong>13.0.9</strong> (CVE-2019-5449)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 15.0.1, 14.0.5 or 13.0.9.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Fabian Dellwing (f.dellwing@netfutura.de) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
