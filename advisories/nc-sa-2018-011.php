<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Second factor authentication bypassed if provider fails to load (NC-SA-2018-011)</h2>
        <p>25th October 2018</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:R/S:U/C:H/I:H/A:N">AV:N/AC:H/PR:H/UI:R/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/287.html">Improper Authentication - Generic (CWE-287)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/317711">317711</a></p>
        <h3>Description</h3>
        <p>Missing state would not enforce the use of a second factor at login if the the provider of the second factor failed to load.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>14.0.0</strong> (CVE-2018-16465)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 14.0.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.cyphar.com/" target="_blank" rel="noreferrer">Aleksa Sarai - SUSE Linux GmbH (cyphar@cyphar.com) - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
