<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper sanitization of HTML in directory names (NC-SA-2019-009)</h2>
        <p>26th July 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 0 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:H/UI:R/S:U/C:N/I:N/A:N">AV:N/AC:L/PR:H/UI:R/S:U/C:N/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/80.html">Improper Neutralization of Script-Related HTML Tags in a Web Page (CWE-80)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/631227">631227</a></p>
        <h3>Description</h3>
        <p>Some basic HTML tags were rendered as Markup in directory names.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Android &lt; <strong>3.7.0</strong> (CVE-2019-5450)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that users upgrade to version 3.7.0 or later.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.facebook.com/ian.phtml" target="_blank" rel="noreferrer">Christian Angel - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
