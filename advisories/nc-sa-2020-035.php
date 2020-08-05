<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Missing memory corruption protection on Windows release built (NC-SA-2020-035)</h2>
        <p>10th July 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:L/AC:H/PR:L/UI:N/S:U/C:N/I:N/A:H">AV:L/AC:H/PR:L/UI:N/S:U/C:N/I:N/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/119.html">Memory Corruption - Generic (CWE-119)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/380102">380102</a></p>
        <h3>Description</h3>
        <p>Missing ASLR and DEP protections in Nextcloud Desktop Client 2.6.4 for windows allowed to corrupt memory.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Desktop &lt; <strong>2.6.5</strong> (CVE-2020-8230)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Desktop Client is upgraded to 2.6.5.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.sec-consult.com" target="_blank" rel="noreferrer">René Freingruber - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
