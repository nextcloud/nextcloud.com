<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php get_template_part('advisories/advisory-side'); ?>
    </div>
    <div class="col-md-8">
        <h2>Content-Spoofing in "files" app (NC-SA-2016-003)</h2>
        <p>19th July 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 0 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:N">AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/451.html">User Interface (UI) Misrepresentation of Critical Information (CWE-451)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/145463">145463</a></p>
        <h3>Description</h3>
        <p><p>The location bar in the files app was not verifying the passed parameters. An attacker could craft an invalid link to a fake directory structure and use this to display an attacker-controlled error message to the user.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>9.0.52</strong> (CVE assignment pending)</li>
<ul>
<li><a href="https://github.com/nextcloud/server/commit/2da43e3751576bbc838f238a09955c4dcdebee8e">server/2da43e3751576bbc838f238a09955c4dcdebee8e</a></li>
<li><a href="https://github.com/nextcloud/server/commit/8aa0832bd449c44ec300da4189bd8ed4e036140c">server/8aa0832bd449c44ec300da4189bd8ed4e036140c</a></li>
<li><a href="https://github.com/nextcloud/server/commit/dea8e29289a1b99d5e889627c2e377887f4f2983">server/dea8e29289a1b99d5e889627c2e377887f4f2983</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The passed parameter is now verified.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/meshahriyar" target="_blank" rel="noreferrer">Md. Ishrat Shahriyar - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
