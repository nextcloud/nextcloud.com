<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Missing permission check on resharing a board (NC-SA-2020-025)</h2>
        <p>8th April 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 7.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:H/A:H">AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:H/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/284.html">Improper Access Control - Generic (CWE-284)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/827816">827816</a></p>
        <h3>Description</h3>
        <p>Improper access control in Nextcloud Deck 0.8.0 allowed an attacker to reshare boards shared with them with more permissions than they had themselves.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Deck &lt; <strong>0.8.1</strong> (CVE-2020-8182)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Deck is upgraded to 0.8.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.clarifiedsecurity.com/silvia-vali/" target="_blank" rel="noreferrer">Silvia Väli (silvia@clarifiedsecurity.com) - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
