<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>App password scope can be changed for other users (NC-SA-2018-001)</h2>
        <p>7th February 2018</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:N/A:L">AV:N/AC:L/PR:L/UI:R/S:U/C:N/I:N/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/639.html">Authorization Bypass Through User-Controlled Key (CWE-639)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/297751">297751</a></p>
        <h3>Description</h3>
        <p>A missing ownership check allowed logged-in users to change the scope of app passwords of other users. Note that the app passwords themselves where neither disclosed nor could the error be misused to identify as another user.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>12.0.5</strong> (CVE-2017-0936)</li>
<li>Nextcloud Server &lt; <strong>11.0.7</strong> (CVE-2017-0936)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed and regression tests been added.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 12.0.5.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://cp270.wordpress.com/" target="_blank" rel="noreferrer">Carl Pearson - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
