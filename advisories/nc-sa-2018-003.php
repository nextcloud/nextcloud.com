<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper validation on OAuth2 token endpoint (NC-SA-2018-003)</h2>
        <p>21st June 2018</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 6.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:U/C:H/I:H/A:N">AV:N/AC:H/PR:L/UI:R/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/20.html">Improper Input Validation (CWE-20)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/343111">343111</a></p>
        <h3>Description</h3>
        <p><p>Improper validation of input allowed an attacker with access to the OAuth2 refresh token to obtain new tokens.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>13.0.3</strong> (CVE-2018-3761)</li>
<li>Nextcloud Server &lt; <strong>12.0.8</strong> (CVE-2018-3761)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The error has been fixed according to RFC6749.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mikael Karlsson - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
