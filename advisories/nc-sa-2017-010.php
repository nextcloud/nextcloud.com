<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Stored XSS in Gallery application (NC-SA-2017-010)</h2>
        <p>8th May 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:C/C:L/I:N/A:N">AV:N/AC:H/PR:L/UI:R/S:C/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/222838">222838</a></p>
        <h3>Description</h3>
        <p>A JavaScript library used by Nextcloud for sanitizing untrusted user-input suffered from a XSS vulnerability caused by a behaviour change in Safari 10.1 and 10.2.Note that Nextcloud employs a strict Content-Security-Policy preventing exploitation of this XSS issue on modern web browsers.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>11.0.3</strong> (CVE-2017-0893)</li>
<li>Nextcloud Server &lt; <strong>10.0.5</strong> (CVE-2017-0893)</li>
<li>Nextcloud Server &lt; <strong>9.0.58</strong> (CVE-2017-0893)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The vulnerable library has been updated.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 9.0.58, 10.0.5 or 11.0.3.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud GmbH (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
