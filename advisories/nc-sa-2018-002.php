<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>File access control rules not applied to image previews (NC-SA-2018-002)</h2>
        <p>21st June 2018</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/273.html">Improper Check for Dropped Privileges (CWE-273)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/358339">358339</a></p>
        <h3>Description</h3>
        <p>A missing check for read permissions allowed users that received an incomming share containing files tagged so they should be denied access to still request a preview for those files.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>13.0.3</strong> (CVE-2018-3762)</li>
<li>Nextcloud Server &lt; <strong>12.0.8</strong> (CVE-2018-3762)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed and regression tests been added.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 13.0.3.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Reinis Martinsons (reinis.martinsons@gmail.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
