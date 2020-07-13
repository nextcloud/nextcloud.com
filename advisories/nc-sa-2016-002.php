<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Log pollution can potentially lead to local HTML injection (NC-SA-2016-002)</h2>
        <p>19th July 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/209.html">Cross-Site Scripting Using MIME Type Mismatch (CWE-209)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/146278">146278</a></p>
        <h3>Description</h3>
        <p>The "download log" functionality in the admin screen is delivering the log in JSON format to the end-user. The file was delivered with an attachment disposition forcing the browser to download the document. However, Firefox running on Microsoft Windows would offer the user to open the data in the browser as HTML document. Thus any injected data in the log would be executed.While the document would only be executed locally (thus on another scope) we have decided to fix this to protect our users.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>9.0.52</strong> (CVE-2016-9459)</li>
<ul>
<li><a href="https://github.com/nextcloud/server/commit/94975af6db1551c2d23136c2ea22866a5b416070">server/94975af6db1551c2d23136c2ea22866a5b416070</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The file is now delivered with a content-type of "application/octet-stream".</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 9.0.52.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Alejo Popovici - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
