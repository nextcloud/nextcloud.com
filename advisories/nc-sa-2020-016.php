<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Code injection in Nextcloud Desktop Client for macOS (NC-SA-2020-016)</h2>
        <p>17th February 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.8 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:L/AC:H/PR:H/UI:R/S:U/C:L/I:L/A:L">AV:L/AC:H/PR:H/UI:R/S:U/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/94.html">Improper Control of Generation of Code (Code Injection) (CWE-94)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/633266">633266</a></p>
        <h3>Description</h3>
        <p>A code injection in Nextcloud Desktop Client 2.6.2 for macOS allowed to load arbitrary code when starting the client with DYLD_INSERT_LIBRARIES set in the enviroment.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Desktop &lt; <strong>2.6.3</strong> (CVE-2020-8140)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Desktop Client is upgraded to 2.6.3.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://wojciechregula.blog/" target="_blank" rel="noreferrer">Wojciech Reguła - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
