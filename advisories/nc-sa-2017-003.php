<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Error message discloses existence of file in write-only share (NC-SA-2017-003)</h2>
        <p>5th February 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:U/C:L/I:N/A:L">AV:N/AC:H/PR:L/UI:R/S:U/C:L/I:N/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/209.html">Information Exposure Through an Error Message (CWE-209)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/174524">174524</a></p>
        <h3>Description</h3>
        <p>Due to an error in the application logic an adversary with access to a write-only share may enumerate the names of existing files and subfolders by comparing the exception messages.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>10.0.2</strong> (CVE-2017-0885)</li>
<li>Nextcloud Server &lt; <strong>9.0.55</strong> (CVE-2017-0885)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error in the application logic has been addressed.</p>
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
