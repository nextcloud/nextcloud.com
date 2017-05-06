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
        <h2>Reflected XSS in error pages (NC-SA-2017-008)</h2>
        <p>8th May 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/216812">216812</a></p>
        <h3>Description</h3>
        <p><p>Inadequate escaping of error messages leads to XSS vulnerabilities in multiple components.</p>
<p>Note that Nextcloud employs a strict Content-Security-Policy preventing exploitation of this XSS issue on modern web browsers.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>11.0.3</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>10.0.5</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>9.0.58</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>Error messages are now properly escaped.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/sinkmanu" target="_blank" rel="noreferrer">Manuel Mancera - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
