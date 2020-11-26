<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Social App does not validate server certificates for outgoing connections (NC-SA-2020-043)</h2>
        <p>15th October 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:U/C:L/I:L/A:N">AV:N/AC:L/PR:L/UI:N/S:U/C:L/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/295.html">Improper Certificate Validation (CWE-295)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/915585">915585</a></p>
        <h3>Description</h3>
        <p>Missing validation of server certificates for out-going connections allowed a man-in-the-middle attack.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Social &lt; <strong>0.4.0</strong> (CVE-2020-8279)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Social app is upgraded to 0.4.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/sanktjodel" target="_blank" rel="noreferrer">Roger Meyer - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
