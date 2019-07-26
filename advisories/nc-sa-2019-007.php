<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Thumbnails of files leaked via Android content provider (NC-SA-2019-007)</h2>
        <p>26th July 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:L/AC:L/PR:N/UI:N/S:C/C:L/I:N/A:N">AV:L/AC:L/PR:N/UI:N/S:C/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/284.html">Improper Access Control (CWE-284)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/534541">534541</a></p>
        <h3>Description</h3>
        <p><p>If an attacker has physical access to an Android smartphone without a screen lock, but with nextcloud installed and set up, he can easily access the nextcloud-files even if the nextcloud app is locked with a fingerprint or pin.</p></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Mobile &lt; <strong>3.6.2</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p><p>It is recommended that users upgrade to version 3.6.2.</p></p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/julien_thomas" target="_blank" rel="noreferrer">Julien Thomas - Protektoid.com project - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
