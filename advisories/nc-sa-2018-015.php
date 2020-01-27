<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper check for access to application database (NC-SA-2018-015)</h2>
        <p>26th July 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 1.8 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:L/AC:H/PR:H/UI:R/S:U/C:L/I:N/A:N">AV:L/AC:H/PR:H/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/284.html">Improper Access Control (CWE-284)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/331302">331302</a></p>
        <h3>Description</h3>
        <p><p>A too permissive check allowed an installed application that contained the Nextcloud client package name to obtain access to the database of the Nextcloud application. At time of disclosure there are no applications with in the Google Play Store that fullfill this requirement.</p></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Android &lt; <strong>3.2.0</strong> (CVE-2018-3765)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p><p>It is recommended that users upgrade to version 3.2.0.</p></p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="TBD" target="_blank" rel="noreferrer">TBD - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
