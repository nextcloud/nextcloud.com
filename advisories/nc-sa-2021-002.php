<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Stored XSS in markdown file with Nextcloud Talk using Internet Explorer (NC-SA-2021-002)</h2>
        <p>18th November 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:C/C:N/I:L/A:N">AV:N/AC:H/PR:L/UI:R/S:C/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Cross-site Scripting (XSS) - Stored (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/1023787">1023787</a></p>
        <h3>Description</h3>
        <p>A missing link validation in Nextcloud Server 20.0.1 allowed to execute a stored XSS attack on Internet Explorer users by saving a javascript url in a Markdown.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>20.0.2</strong> (CVE-2020-8294)</li>
<li>Nextcloud Server &lt; <strong>19.0.5</strong> (CVE-2020-8294)</li>
<li>Nextcloud Server &lt; <strong>18.0.11</strong> (CVE-2020-8294)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 20.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="luis@teix.co" target="_blank" rel="noreferrer">Luis Teixeira - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
