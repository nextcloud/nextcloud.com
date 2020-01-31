<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Bypass lock protection in Android app (NC-SA-2020-004)</h2>
        <p>5th December 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.9 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:P/AC:L/PR:N/UI:R/S:U/C:H/I:H/A:N">AV:P/AC:L/PR:N/UI:R/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/288.html">Authentication Bypass Using an Alternate Path or Channel (CWE-288)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/747726">747726</a></p>
        <h3>Description</h3>
        <p>A wrong check for the system time in the Android App 3.9.0 causes a bypass of the lock protection when changing the time of the system to the past.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Android &lt; <strong>3.9.1</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Android App is upgraded to 3.9.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.facebook.com/1808arvind" target="_blank" rel="noreferrer">Arvind (ar-arvind@protonmail.com) - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
