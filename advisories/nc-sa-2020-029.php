<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Re-Sharing allows increase of privileges (NC-SA-2020-029)</h2>
        <p>16th July 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:L">AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/269.html">Improper Privilege Management (CWE-269)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/889243">889243</a></p>
        <h3>Description</h3>
        <p>A logic error in Nextcloud Server 19.0.0 caused a privilege escalation allowing malicious users to reshare with higher permissions than they got assigned themselves.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>19.0.1</strong> (CVE-2020-8223)</li>
<li>Nextcloud Server &lt; <strong>18.0.7</strong> (CVE-2020-8223)</li>
<li>Nextcloud Server &lt; <strong>17.0.8</strong> (CVE-2020-8223)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 19.0.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Dr. Alexander Fleischer - TU Ilmenau - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
