<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Possible denial of service when entering a long password (NC-SA-2020-028)</h2>
        <p>16th June 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:L">AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/307.html">Brute Force (CWE-307)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/840598">840598</a></p>
        <h3>Description</h3>
        <p>Improper check of inputs in Preferred providers app 1.6.0 allowed to perform a denial of service attack when using a very long password.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Preferred_providers &lt; <strong>1.7.0</strong> (CVE-2020-8202)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Preferred providers app is upgraded to 1.7.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Abhishek Raj (araj07810@gmail.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
