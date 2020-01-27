<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Bypass lock protection in Android app (NC-SA-2019-004)</h2>
        <p>26th July 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.9 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:P/AC:L/PR:N/UI:R/S:U/C:H/I:H/A:N">AV:P/AC:L/PR:N/UI:R/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/288.html">Authentication Bypass Using an Alternate Path or Channel (CWE-288)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/490946">490946</a></p>
        <h3>Description</h3>
        <p><p>Creating a fake multi-account and aborting the process would redirect the user to the default account of the device without asking for the lock pattern if one was set up.</p></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Android &lt; <strong>3.6.1</strong> (CVE-2019-5455)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p><p>It is recommended that users upgrade to version 3.6.1.</p></p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/julien_thomas" target="_blank" rel="noreferrer">Julien Thomas - Protektoid.com project - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
