<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>User IDs and Nextcloud server leaked to Nextcloud Lookup server with disabled settings (NC-SA-2019-016)</h2>
        <p>26th June 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:U/C:L/I:N/A:N">AV:N/AC:L/PR:N/UI:N/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/359.html">Exposure of Private Information (CWE-359)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/508490">508490</a></p>
        <h3>Description</h3>
        <p>Exposure of Private Information in Nextcloud Server 16.0.1 causes the server to send it's domain and user IDs to the Nextcloud Lookup Server without any further data when the Lookup server is disabled.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>16.0.2</strong> (CVE-2019-15623)</li>
<li>Nextcloud Server &lt; <strong>15.0.9</strong> (CVE-2019-15623)</li>
<li>Nextcloud Server &lt; <strong>14.0.13</strong> (CVE-2019-15623)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 16.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Leon Klingele - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
