<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper validation of data passed to JSON encoder (NC-SA-2018-006)</h2>
        <p>3rd August 2018</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 5.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:L/A:N">AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/20.html">Improper Input Validation (CWE-20)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/232347">232347</a></p>
        <h3>Description</h3>
        <p><p>Improper validation of input allowed an attacker to not have their actions logged to the audit log.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>12.0.3</strong> (2018-3776)</li>
<li>Nextcloud Server &lt; <strong>11.0.5</strong> (2018-3776)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The error has been fixed.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Zhouyuan Yang - Fortinet's FortiGuard Labs - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
