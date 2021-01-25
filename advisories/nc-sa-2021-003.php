<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Stored XSS in markdown file with Nextcloud Talk using Internet Explorer (NC-SA-2021-003)</h2>
        <p>3rd October 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 7.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:H">AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/400.html">Denial of Service (CWE-400)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/812754">812754</a></p>
        <h3>Description</h3>
        <p>A wrong check in Nextcloud Server 19 and prior allowed to perform a denial of service attack when resetting the password for a user.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>20.0.0</strong> (CVE-2020-8295)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 20.0.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Jesús Ramos (contact.makerlab@gmail.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
