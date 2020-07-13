<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Code injection possible with malformed Nextcloud Talk chat commands (NC-SA-2020-021)</h2>
        <p>20th April 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 8 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:C/C:H/I:H/A:H">AV:N/AC:H/PR:L/UI:R/S:C/C:H/I:H/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/94.html">Code Injection (CWE-94)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/851807">851807</a></p>
        <h3>Description</h3>
        <p>A too lax check in Nextcloud Talk 6.0.4, 7.0.2 and 8.0.7 allowed a code injection when a not correctly sanitized talk command was added by an administrator.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Talk &lt; <strong>8.0.8</strong> (CVE-2020-8180)</li>
<li>Nextcloud Talk &lt; <strong>7.0.3</strong> (CVE-2020-8180)</li>
<li>Nextcloud Talk &lt; <strong>6.0.5</strong> (CVE-2020-8180)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Talk is upgraded to 8.0.8.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Spectre - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
