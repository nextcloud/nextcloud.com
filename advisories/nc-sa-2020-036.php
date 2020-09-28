<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Access control missing while viewing the attachments in the 'All boards' (NC-SA-2020-036)</h2>
        <p>15th July 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 6.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:U/C:H/I:N/A:N">AV:N/AC:L/PR:L/UI:N/S:U/C:H/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/639.html">Insecure Direct Object Reference (IDOR) (CWE-639)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/916704">916704</a></p>
        <h3>Description</h3>
        <p>Missing access control in Nextcloud Deck 1.0.4 caused an insecure direct object reference allowing an attacker to view all attachments.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Deck &lt; <strong>1.0.5</strong> (CVE-2020-8235)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Deck is upgraded to 1.0.5.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Divyesh Prajapati - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
