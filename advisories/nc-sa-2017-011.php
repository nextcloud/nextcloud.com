<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Share tokens for public calendars disclosed (NC-SA-2017-011)</h2>
        <p>8th May 2017</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 4.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/548.html">Information Exposure Through Directory Listing (CWE-548)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/218876">218876</a></p>
        <h3>Description</h3>
        <p><p>A logical error caused disclosure of valid share tokens for public calendars. Thus granting an attacker potentially access to publicly shared calendars without knowing the share token.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>11.0.3</strong> (CVE-2017-0894)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The error has been fixed and regression tests been added.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud GmbH (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
