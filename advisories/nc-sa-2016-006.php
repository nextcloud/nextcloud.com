<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>SMB User Authentication Bypass (NC-SA-2016-006)</h2>
        <p>10th October 2016</p>
        <p>Risk level: <strong>High</strong></p>
        <p>CVSS v3 Base Score: 7.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:N/UI:N/S:U/C:H/I:H/A:N">AV:N/AC:H/PR:N/UI:N/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/303.html">Incorrect Implementation of Authentication Algorithms (CWE-303)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/148151">148151</a></p>
        <h3>Description</h3>
        <p>Nextcloud includes an optional and not by default enabled SMB authentication component that allows to authenticate users against an SMB server.This backend is implemented in a way that it tries to connect to a SMB server and if that succeeded consider the user logged-in.The backend did not properly take into account SMB servers that any kind of anonymous auth configured. This is the default on SMB servers nowadays and allows an unauthenticated attacker to gain access to an account without valid credentials.<strong>Note:</strong> The SMB backend is disabled by default and requires manual configuration in the Nextcloud config file. If you have not configured the SMB backend then you're not affected by this vulnerability.<em><a href="https://rhinosecuritylabs.com/2016/10/operation-ownedcloud-exploitation-post-exploitation-persistence/">The reporter has published a blog post about this issue on their website as well.</a></em></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>9.0.54</strong> (CVE-2016-9463)</li>
<ul>
<li><a href="https://github.com/nextcloud/apps/commit/decb91fd31f4ffab191cbf09ce4e5c55c67a4087">apps/decb91fd31f4ffab191cbf09ce4e5c55c67a4087</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>10.0.1</strong> (CVE-2016-9463)</li>
<ul>
<li><a href="https://github.com/nextcloud/apps/commit/b85ace6840b8a6704641086bc3b8eb8e81cb2274">apps/b85ace6840b8a6704641086bc3b8eb8e81cb2274</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The SMB backend is now performing an additional authentication attempt with invalid credentials. If that succeeds as well it assumes that anonymous authentications are enabled and denies the login attempt.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 9.0.54 or 10.0.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://rhinosecuritylabs.com/" target="_blank" rel="noreferrer">Dwight Hohnstein - Rhino Security Labs - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
