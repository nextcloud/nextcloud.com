<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Missing rate limit on signup page (NC-SA-2020-033)</h2>
        <p>3rd August 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:N/A:L">AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:N/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/840.html">Business Logic Errors (CWE-840)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/922470">922470</a></p>
        <h3>Description</h3>
        <p>A missing rate limit in the Preferred Providers app 1.7.0 allowed an attacker to set the password an uncontrolled amount of times.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Preferred_providers &lt; <strong>1.8.0</strong> (CVE-2020-8228)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Preferred Providers app is upgraded to 1.8.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Faeeq jalali (faeeqjalali24@gmail.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
