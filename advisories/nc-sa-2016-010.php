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
        <h2>Content-Spoofing in "files" app (NC-SA-2016-010)</h2>
        <p>10th October 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:N/UI:R/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:N/UI:R/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/451.html">User Interface (UI) Misrepresentation of Critical Information (CWE-451)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/154827">154827</a></p>
        <h3>Description</h3>
        <p><p>The location bar in the files app was not verifying the passed parameters. An attacker could craft an invalid link to a fake directory structure and use this to display an attacker-controlled error message to the user.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>10.0.1</strong> (CVE assignment pending)</li>
<ul>
<li><a href="https://github.com/nextcloud/server/commit/ed0f0db5fa0aff04594cb0f973ae4c22b17a175a">server/ed0f0db5fa0aff04594cb0f973ae4c22b17a175a</a></li>
<li><a href="https://github.com/nextcloud/server/commit/c3ae21fef2880c9fe44e8fdbe1262ac7f9716f14">server/c3ae21fef2880c9fe44e8fdbe1262ac7f9716f14</a></li>
<li><a href="https://github.com/nextcloud/server/commit/df50e967dbd27b13875625b7dd3189294619b071">server/df50e967dbd27b13875625b7dd3189294619b071</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>9.0.54</strong> (CVE assignment pending)</li>
<ul>
<li><a href="https://github.com/nextcloud/server/commit/778ae8abd54c378fc4781394bbedc7a2ee3095e1">server/778ae8abd54c378fc4781394bbedc7a2ee3095e1</a></li>
<li><a href="https://github.com/nextcloud/server/commit/5dd211cc8845fd4533966bf8d7a7f2a6359ea013">server/5dd211cc8845fd4533966bf8d7a7f2a6359ea013</a></li>
<li><a href="https://github.com/nextcloud/server/commit/1352365e8bf5ea49da3dc82b1ccf7ddb659ae960">server/1352365e8bf5ea49da3dc82b1ccf7ddb659ae960</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The passed parameter is now verified.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>lmx - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
