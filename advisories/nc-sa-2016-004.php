<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Edit permission check not enforced on WebDAV COPY action (NC-SA-2016-004)</h2>
        <p>19th July 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 3.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:N/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:L/UI:N/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/275.html">Permission Issues (CWE-275)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/145950">145950</a></p>
        <h3>Description</h3>
        <p>The WebDAV endpoint was not properly checking the permission on a WebDAV "COPY" action. This allowed an authenticated attacker with access to a read-only share to put new files in there. It was not possible to modify existing files.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>9.0.52</strong> (CVE-2016-9461)</li>
<ul>
<li><a href="https://github.com/nextcloud/server/commit/3491400261c1454a9a30d3ec96969573330120cc">server/3491400261c1454a9a30d3ec96969573330120cc</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The permission check is now also performed on "COPY" actions,</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 9.0.52.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="http://www.ksaurabh.net" target="_blank" rel="noreferrer">Kumar Saurabh - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
