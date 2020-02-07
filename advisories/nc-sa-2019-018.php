<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Reflected XSS in svg logo generation (NC-SA-2019-018)</h2>
        <p>2nd August 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 6.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:U/C:L/I:L/A:N">AV:N/AC:L/PR:N/UI:N/S:U/C:L/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Cross-site Scripting (XSS) - Reflected (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/605915">605915</a></p>
        <h3>Description</h3>
        <p>A reflected Cross-Site Scripting vunerability was discovered in the svg generation.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>16.0.2</strong> (CVE-2020-8120)</li>
<li>Nextcloud Server &lt; <strong>15.0.9</strong> (CVE-2020-8120)</li>
<li>Nextcloud Server &lt; <strong>14.0.13</strong> (CVE-2020-8120)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 16.0.2, 15.0.9 or 14.0.13.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://frederik-braun.com" target="_blank" rel="noreferrer">Frederik Braun - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
