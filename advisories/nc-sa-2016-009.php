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
        <h2>Stored XSS in Gallery application (NC-SA-2016-009)</h2>
        <p>10th October 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 6.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:R/S:C/C:L/I:L/A:N">AV:N/AC:L/PR:N/UI:R/S:C/C:L/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/165686">165686</a></p>
        <h3>Description</h3>
        <p><p>The gallery app was not properly sanitizing exception messages from the Nextcloud server. Due to an endpoint where an attacker could influence the error message this lead to a reflected Cross-Site-Scripting vulnerability.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>10.0.1</strong> (CVE assignment pending)</li>
<ul>
<li><a href="https://github.com/nextcloud/gallery/commit/f9ef505c1d60c9041e251682e0f6b3daad952d58">gallery/f9ef505c1d60c9041e251682e0f6b3daad952d58</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>Error messages are now properly sanitized.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Aliaksei Panamarenka - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
