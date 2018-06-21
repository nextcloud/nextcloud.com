<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper authorization check on removing shares (NC-SA-2016-007)</h2>
        <p>10th October 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2.6 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:U/C:N/I:N/A:L">AV:N/AC:H/PR:L/UI:R/S:U/C:N/I:N/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/285.html">Improper Authorization (CWE-285)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/153905">153905</a></p>
        <h3>Description</h3>
        <p><p>The Sharing Backend as implemented in Nextcloud does differentiate between shares to users and groups. In case of a received group share, users should be able to unshare the file to themselves but not to the whole group. The previous API implementation did simply unshare the file to all users in the group.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>9.0.54</strong> (CVE-2016-9464)</li>
<ul>
<li><a href="https://github.com/nextcloud/server/commit/a5471b4a3e3f30e99e4de39c97c0c3b3c2f1618f">server/a5471b4a3e3f30e99e4de39c97c0c3b3c2f1618f</a></li>
<li><a href="https://github.com/nextcloud/server/commit/3387e5d00fcf6b2ea6b285a091e5743f545e7202">server/3387e5d00fcf6b2ea6b285a091e5743f545e7202</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>10.0.0</strong> (CVE-2016-9464)</li>
<ul>
<li><a href="https://github.com/nextcloud/server/commit/7289cb5ec0b812992ab0dfb889744b94bc0994f0">server/7289cb5ec0b812992ab0dfb889744b94bc0994f0</a></li>
<li><a href="https://github.com/nextcloud/server/commit/e2c4f4f9aa11bc92e8f2212cce73841b922187e8">server/e2c4f4f9aa11bc92e8f2212cce73841b922187e8</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>Additional access control checks have been added to the sharing API.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.facebook.com/profile.php?id=100006312211628" target="_blank" rel="noreferrer">Nguyen Van Thang - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
