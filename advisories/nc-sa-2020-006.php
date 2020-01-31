<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Duplicate setup of second factor allowed (NC-SA-2020-006)</h2>
        <p>25th October 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.6 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:N">AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/287.html">Improper Authentication (CWE-287)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/722748">722748</a></p>
        <h3>Description</h3>
        <p>A missing check in Nextcloud Server 17.0.0 allowed an attacker to set up a new second factor when trying to login.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>17.0.1</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 17.0.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://nextcloud.com" target="_blank" rel="noreferrer">Christoph Wurst - Nextcloud GmbH - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
