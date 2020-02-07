<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Removing emails from circles does not revoke access to shared items (NC-SA-2019-013)</h2>
        <p>6th October 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:H/PR:H/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/285.html">Improper Authorization (CWE-285)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/673724">673724</a></p>
        <h3>Description</h3>
        <p>Improper authorization in the Circles app 0.17.7 causes retaining access when an email address was removed from a circle.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Circles &lt; <strong>0.17.8</strong> (CVE-2019-15610)</li>
<li>Nextcloud Circles &lt; <strong>0.16.11</strong> (CVE-2019-15610)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Circles app is upgraded to 0.17.8.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>michag86 - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
