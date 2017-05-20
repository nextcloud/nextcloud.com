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
        <h2>Content-Spoofing in "files" app (NC-SA-2017-006)</h2>
        <p>5th February 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:N/UI:R/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:N/UI:R/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/451.html">User Interface (UI) Misrepresentation of Critical Information (CWE-451)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/179073">179073</a></p>
        <h3>Description</h3>
        <p><p>The top navigation bar displayed in the files list contained partially user-controllable input leading to a potential misrepresentation of information.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>10.0.2</strong> (CVE-2017-0888)</li>
<li>Nextcloud Server &lt; <strong>9.0.55</strong> (CVE-2017-0888)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The user-controlled content is now not trusted anymore unless the folder structure exists on the file system.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/AhsanTahirAT" target="_blank" rel="noreferrer">Ahsan Tahir - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
