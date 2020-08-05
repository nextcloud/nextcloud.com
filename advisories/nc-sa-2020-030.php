<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Arbitrary code execution in desktop client via OpenSSL config (NC-SA-2020-030)</h2>
        <p>10th July 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.8 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:L/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:L">AV:L/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/94.html">Improper Control of Generation of Code (Code Injection) (CWE-94)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/622170">622170</a></p>
        <h3>Description</h3>
        <p>A code injection in Nextcloud Desktop Client 2.6.4 allowed to load arbitrary code when placing a malicious OpenSSL config into a fixed directory.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Desktop &lt; <strong>2.6.5</strong> (CVE-2020-8224)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Desktop Client is upgraded to 2.6.5.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/1oopho1e" target="_blank" rel="noreferrer">Nick Marcoccio - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
