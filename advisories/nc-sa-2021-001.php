<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Potential DDoS when posting long data into workflow validation rules (NC-SA-2021-001)</h2>
        <p>18th November 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:N/A:H">AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:N/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/400.html">Denial of Service (CWE-400)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/1018146">1018146</a></p>
        <h3>Description</h3>
        <p>A missing input validation in Nextcloud Server 20.0.1 allowed users to store unlimited data in workflow rules causing load and potential DDoS on later interactions and usage with those rules.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>20.0.2</strong> (CVE-2020-8293)</li>
<li>Nextcloud Server &lt; <strong>19.0.5</strong> (CVE-2020-8293)</li>
<li>Nextcloud Server &lt; <strong>18.0.11</strong> (CVE-2020-8293)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 20.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/DemoniaSlash" target="_blank" rel="noreferrer">Mohamed Dief - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
