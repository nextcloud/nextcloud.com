<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>File-drop content is visible through the gallery app (NC-SA-2019-012)</h2>
        <p>22nd October 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:C/C:L/I:N/A:N">AV:N/AC:L/PR:L/UI:N/S:C/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/285.html">Improper Authorization (CWE-285)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/719426">719426</a></p>
        <h3>Description</h3>
        <p>Improper authorization in Nextcloud server 17.0.0 causes leaking of previews and files when a file-drop share link is opened via the gallery app.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>17.0.1</strong> (CVE-2020-8119)</li>
<li>Nextcloud Server &lt; <strong>16.0.6</strong> (CVE-2020-8119)</li>
<li>Nextcloud Server &lt; <strong>15.0.13</strong> (CVE-2020-8119)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud server is upgraded to 17.0.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Olav Seyfarth (nursoda) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
