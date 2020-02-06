<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper access control checks for share expiration date (NC-SA-2019-002)</h2>
        <p>12th April 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.8 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:U/C:N/I:L/A:N">AV:N/AC:L/PR:L/UI:N/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/284.html">Improper Access Control - Generic (CWE-284)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/447494">447494</a></p>
        <h3>Description</h3>
        <p>A missing check could give recipient the possibility to extend the expiration date of a share they received.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>15.0.0</strong> (CVE-2020-8122)</li>
<li>Nextcloud Server &lt; <strong>14.0.4</strong> (CVE-2020-8122)</li>
<li>Nextcloud Server &lt; <strong>13.0.8</strong> (CVE-2020-8122)</li>
<li>Nextcloud Server &lt; <strong>12.0.13</strong> (CVE-2020-8122)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 15.0.0, Nextcloud 14.0.4, Nextcloud 13.0.8 or 12.0.13.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://cp270.wordpress.com" target="_blank" rel="noreferrer">Carl Pearson - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
