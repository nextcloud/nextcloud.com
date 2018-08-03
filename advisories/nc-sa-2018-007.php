<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Bypass of 2 Factor Authentication (NC-SA-2018-007)</h2>
        <p>3rd August 2018</p>
        <p>Risk level: <strong>High</strong></p>
        <p>CVSS v3 Base Score: 8.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:U/C:H/I:H/A:N">AV:N/AC:L/PR:L/UI:N/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/287.html">Improper Authentication - Generic (CWE-287)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/248656">248656</a></p>
        <h3>Description</h3>
        <p><p>Improper authentication of the second factor challenge would allow an attacker that had access to user credentials to bypass the second factor validation completely.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>12.0.3</strong> (2018-3775)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The error has been fixed and regression tests are in place.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>kaysbugs - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
