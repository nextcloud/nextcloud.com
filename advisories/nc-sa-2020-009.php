<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper neutralization of item names in projects feature (NC-SA-2020-009)</h2>
        <p>29th July 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:R/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:H/UI:R/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/662204">662204</a></p>
        <h3>Description</h3>
        <p>Improper neutralization of file names, conversation names and board names in Nextcloud Server 16.0.3, Nextcloud Talk 6.0.3 and Nextcloud Deck 0.6.5 causes an XSS when linking them with each others in a project.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Talk &lt; <strong>6.0.4</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Talk is upgraded to 6.0.4.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://security-consulting.icu/" target="_blank" rel="noreferrer">Tim Coen - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
