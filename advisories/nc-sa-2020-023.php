<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Increase random used for encryption (NC-SA-2020-023)</h2>
        <p>4th June 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2.2 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:N/S:U/C:L/I:N/A:N">AV:N/AC:H/PR:H/UI:N/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/310.html">Cryptographic Issues - Generic (CWE-310)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/852841">852841</a></p>
        <h3>Description</h3>
        <p>A too small set of random characters being used for encryption in Nextcloud Server 18.0.4 allowed decryption in shorter time than intended.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>19.0.0</strong> (CVE-2020-8173)</li>
<li>Nextcloud Server &lt; <strong>18.0.5</strong> (CVE-2020-8173)</li>
<li>Nextcloud Server &lt; <strong>17.0.7</strong> (CVE-2020-8173)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 19.0.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lynn Stephenson - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
