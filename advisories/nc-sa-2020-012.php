<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Improper permission preservation on reshares (NC-SA-2020-012)</h2>
        <p>27th June 2019</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 6.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:U/C:N/I:H/A:H">AV:N/AC:H/PR:L/UI:R/S:U/C:N/I:H/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/281.html">Improper Preservation of Permissions (CWE-281)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/619484">619484</a></p>
        <h3>Description</h3>
        <p>Improper permissions preservation in Nextcloud Server 16.0.1 causes sharees to be able to reshare with write permissions when sharing the mount point of a share they received, as a public link.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>16.0.2</strong> (CVE-2019-15621)</li>
<li>Nextcloud Server &lt; <strong>15.0.9</strong> (CVE-2019-15621)</li>
<li>Nextcloud Server &lt; <strong>14.0.13</strong> (CVE-2019-15621)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 16.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://jankaritech.com" target="_blank" rel="noreferrer">Phil Davis - JankariTech Pvt Ltd (phil@jankaritech.com) - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
