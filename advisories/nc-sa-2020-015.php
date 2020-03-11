<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Secure view shares can be downloaded by manipulating the URL (NC-SA-2020-015)</h2>
        <p>7th February 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 0 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:U/C:N/I:N/A:N">AV:N/AC:L/PR:L/UI:N/S:U/C:N/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/284.html">Improper Access Control - Generic (CWE-284)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/788257">788257</a></p>
        <h3>Description</h3>
        <p>A missing access control check in Nextcloud Server 18.0.0 causes hide-download shares to be downloadable when appending /download to the URL.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>18.0.1</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>17.0.4</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>16.0.10</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 18.0.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>NA - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
