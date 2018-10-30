<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Stored XSS in CardDAV image export (NC-SA-2016-008)</h2>
        <p>10th October 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 5.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:C/C:L/I:L/A:N">AV:N/AC:L/PR:L/UI:R/S:C/C:L/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/163338">163338</a></p>
        <h3>Description</h3>
        <p>The CardDAV image export functionality as implemented in Nextcloud allows the download of images stored within a vCard. Due to not performing any kind of verification on the image content this is prone to a stored Cross-Site Scripting attack.<strong>Note:</strong> Nextcloud employs a very strict Content Security Policy on the DAV endpoints. This is thus only exploitable on browsers that don't support Content Security Policy.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>10.0.1</strong> (CVE-2016-9465)</li>
<ul>
<li><a href="https://github.com/nextcloud/server/commit/68ab8325c799d20c1fb7e98d670785176590e7d0">server/68ab8325c799d20c1fb7e98d670785176590e7d0</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The mimetype of the exported image is now compared with a whitelist as well as download disposition headers have been set on the response.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to Nextcloud 10.0.1.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://nextcloud.com" target="_blank" rel="noreferrer">Lukas Reschke - Nextcloud GmbH - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
