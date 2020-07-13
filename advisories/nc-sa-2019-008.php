<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Bypass lock protection in Android app (NC-SA-2019-008)</h2>
        <p>26th July 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.9 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:P/AC:L/PR:N/UI:R/S:U/C:H/I:H/A:N">AV:P/AC:L/PR:N/UI:R/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/288.html">Authentication Bypass Using an Alternate Path or Channel (CWE-288)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/507172">507172</a></p>
        <h3>Description</h3>
        <p>If an attacker has physical access to an Android smartphone without a screen lock, but with nextcloud installed and set up, they can circumvent the passcode protection by repeatedly opening and closing the app in a very short time.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Android &lt; <strong>3.6.1</strong> (CVE-2019-5451)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that users upgrade to version 3.6.1 or later.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mathijs van Veluw - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
