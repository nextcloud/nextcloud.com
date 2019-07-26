<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>SQL Injection in lookup-server (NC-SA-2019-010)</h2>
        <p>26th July 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 10 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:C/C:H/I:H/A:N">AV:N/AC:L/PR:N/UI:N/S:C/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/89.html">SQL Injection (CWE-89)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/508487">508487</a></p>
        <h3>Description</h3>
        <p>Improper sanitation of user input allowed any unauthenticated user to perform SQL injection attacks.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Lookup-server &lt; <strong>0.3.0</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to at least version 0.3.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Leon Klingele (security@leonklingele.de) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
