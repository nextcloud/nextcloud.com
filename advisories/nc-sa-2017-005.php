<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Bypassing quota limitation (NC-SA-2017-005)</h2>
        <p>5th February 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 0 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:C/C:N/I:N/A:N">AV:N/AC:L/PR:L/UI:N/S:C/C:N/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/807.html">Reliance on Untrusted Inputs in a Security Decision (CWE-807)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/173622">173622</a></p>
        <h3>Description</h3>
        <p><p>Due to not properly sanitzing values provided by the `OC-Total-Length` HTTP header an authenticated adversary may be able to exceed their configured user quota. Thus using more space than allowed by the administrator.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>10.0.2</strong> (CVE-2017-0887)</li>
<li>Nextcloud Server &lt; <strong>9.0.55</strong> (CVE-2017-0887)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The `OC-Total-Length` HTTP header is now properly sanitized.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Nordin - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
