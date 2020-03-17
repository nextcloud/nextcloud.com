<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Renaming an item to a protected hidden folder deletes the target (NC-SA-2020-017)</h2>
        <p>15th July 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 6.8 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:C/C:N/I:N/A:H">AV:N/AC:L/PR:L/UI:R/S:C/C:N/I:N/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/284.html">Improper Access Control - Generic (CWE-284)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/642515">642515</a></p>
        <h3>Description</h3>
        <p>Improper access control in Groupfolders app 4.0.3 allowed to delete hidden directories when when renaming an accessible item to the same name.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Groupfolders &lt; <strong>4.0.4</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Groupfolders app is upgraded to 4.0.4.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Francesco MORO(sinotto) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
