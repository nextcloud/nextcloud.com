<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>External storage app saves password for all users in the database (NC-SA-2021-006)</h2>
        <p>3rd October 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:R/S:U/C:H/I:L/A:L">AV:N/AC:H/PR:H/UI:R/S:U/C:H/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/257.html">Storing Passwords in a Recoverable Format (CWE-257)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/867164">867164</a></p>
        <h3>Description</h3>
        <p>A missing condition in Nextcloud Server 19 and prior caused the external storage app to always store the users password in a recoverable format.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>20.0.0</strong> (CVE-2020-8296)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed. Incorrectly stored passwords have been automatically cleaned-up from your database.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 20.0.0.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Anderson Luiz Alves (alacn1@gmail.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
