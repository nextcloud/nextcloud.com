<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Creation of folders in read-only folders despite lacking permissions (NC-SA-2017-002)</h2>
        <p>5th February 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:C/C:N/I:L/A:N">AV:N/AC:L/PR:L/UI:R/S:C/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/275.html">Permission Issues (CWE-275)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/169680">169680</a></p>
        <h3>Description</h3>
        <p>Due to a logical error in the file caching layer an authenticated adversary is able to create empty folders inside a shared folder.Note that this only affects folders and files that the adversary has at least read-only permissions for.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>10.0.2</strong> (CVE-2017-0884)</li>
<li>Nextcloud Server &lt; <strong>9.0.55</strong> (CVE-2017-0884)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The file cache operation is now only performed if the file system operation succeeded.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 9.0.55 or 10.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://secator.com/" target="_blank" rel="noreferrer">secator - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
