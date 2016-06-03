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
        <h2>Calendar export: Authorization Bypass Through User-Controlled Key (oC-SA-2015-015)</h2>
        <p>24th August 2015</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v2 Base Score: 4 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:S/C:P/I:N/A:N)">AV:N/AC:L/Au:S/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/639.html">Authorization Bypass Through User-Controlled Key (CWE-639)</a></p>
        <h3>Description</h3>
        <p><p>Due to not properly checking the ownership of an calendar, an authenticated attacker is able to download calendars of other users via the "calid" GET parameter to export.php in /apps/calendar/</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>8.1.1</strong> (CVE-2015-6670)</li>
<li>Nextcloud Server &lt; <strong>8.0.6</strong> (CVE-2015-6670)</li>
<li>Nextcloud Server &lt; <strong>7.0.8</strong> (CVE-2015-6670)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The vulnerable component has been fixed.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Ralf Vroomen - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
