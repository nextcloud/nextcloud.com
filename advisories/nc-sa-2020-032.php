<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Linux client is vulnerable to directory traversal when downloading files (NC-SA-2020-032)</h2>
        <p>10th July 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:R/S:C/C:L/I:L/A:L">AV:N/AC:H/PR:H/UI:R/S:C/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/22.html">Path Traversal (CWE-22)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/590319">590319</a></p>
        <h3>Description</h3>
        <p>Missing sanitization of a server response in Nextcloud Desktop Client 2.6.4 for Linux allowed a malicious Nextcloud Server to store files outside of the dedicated sync directory.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Desktop &lt; <strong>2.6.5</strong> (CVE-2020-8227)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Desktop Client is upgraded to 2.6.5.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Carl Pearson - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
