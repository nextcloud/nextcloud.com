<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Reflected XSS in redirect of the Updater (NC-SA-2020-007)</h2>
        <p>26th March 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:R/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:H/UI:R/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/515484">515484</a></p>
        <h3>Description</h3>
        <p>Missing escaping of HTML in the Updater of Nextcloud 15.0.5 allowed a reflected XSS when starting the updater from a malicious location.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>15.0.6</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>14.0.9</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 15.0.6.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://nstikhomirov.me/" target="_blank" rel="noreferrer">Nikita Tikhomirov - Pentest Generation (nstikhomirov@gmail.com) - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
