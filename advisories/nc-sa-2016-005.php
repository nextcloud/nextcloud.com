<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Read-only share recipient can restore old versions of file (NC-SA-2016-005)</h2>
        <p>19th July 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:N/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:L/UI:N/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/275.html">Permission Issues (CWE-275)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/146067">146067</a></p>
        <h3>Description</h3>
        <p><p>The restore capability of Nextcloud was not verifying whether an user has only read-only access to a share. Thus an user with read-only access was able to restore old versions.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>9.0.52</strong> (CVE-2016-9462)</li>
<ul>
<li><a href="https://github.com/nextcloud/server/commit/1208953ba1d4d55a18a639846bbcdd66a2d5bc5e">server/1208953ba1d4d55a18a639846bbcdd66a2d5bc5e</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The permission check is now also performed on restore actions.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Rudra Pratap Singh - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
