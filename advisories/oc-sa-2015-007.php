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
        <h2>Resource Exthaustion when sanitizing filenames (oC-SA-2015-007)</h2>
        <p>24th June 2015</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v2 Base Score: 7.8 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:N/C:N/I:N/A:C)">AV:N/AC:L/Au:N/C:N/I:N/A:C</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/400.html">Uncontrolled Resource Consumption ('Resource Exhaustion') (CWE-400)</a></p>
        <h3>Description</h3>
        <p><p>The sanitization component for filenames was vulnerable to DoS when parsing specially crafted file names passed via specific endpoints.</p>
<p>Effectively this lead to a endless loop filling the log file until the system is not anymore responsive.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.8</strong> (CVE-2015-4717)</li>
<li>Nextcloud Server &lt; <strong>7.0.6</strong> (CVE-2015-4717)</li>
<li>Nextcloud Server &lt; <strong>8.0.4</strong> (CVE-2015-4717)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>This was caused by the PHP behaviour of allowing to cast <code>$_GET</code> values to an array. The critical usages have been fixed in all affected versions and with Nextcloud 8.1 the usages of <code>$_GET</code> in the whole code base has been reviewed.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Emiel Florijn - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
