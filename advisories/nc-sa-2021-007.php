<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>New users can read all Nextcloud Deck data from previous user with same username (NC-SA-2021-007)</h2>
        <p>3rd June 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:R/S:C/C:L/I:L/A:L">AV:N/AC:H/PR:H/UI:R/S:C/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/639.html">Insecure Direct Object Reference (IDOR) (CWE-639)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/882258">882258</a></p>
        <h3>Description</h3>
        <p>A logic error in Nextcloud Deck 1.0.1 allowed new users with a duplicate user identifier to use deck data of a previous deleted user.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Deck &lt; <strong>1.0.2</strong> (CVE-2020-8297)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Deck is upgraded to 1.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.niedermann.it" target="_blank" rel="noreferrer">Stefan Niedermann - Niedermann IT-Dienstleistungen (info@niedermann.it) - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
