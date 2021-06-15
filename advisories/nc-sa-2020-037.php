<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>PIN for passwordless WebAuthn is asked for but not verified (NC-SA-2020-037)</h2>
        <p>25th August 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:P/AC:L/PR:N/UI:N/S:U/C:L/I:L/A:L">AV:P/AC:L/PR:N/UI:N/S:U/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/287.html">Improper Authentication - Generic (CWE-287)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/924393">924393</a></p>
        <h3>Description</h3>
        <p>A wrong configuration in Nextcloud Server 19.0.1 incorrectly made the user feel the passwordless WebAuthn is also a two factor verification by asking for the PIN of the passwordless WebAuthn but not verifying it.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>19.0.2</strong> (CVE-2020-8236)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 19.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.cotech.de/" target="_blank" rel="noreferrer">Dominik Schürmann - COTECH (contact@cotech.de) - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
