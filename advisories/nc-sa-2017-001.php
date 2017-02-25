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
        <h2>Permission increase on re-sharing via OCS API (NC-SA-2017-001)</h2>
        <p>5th February 2017</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 5.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:C/C:L/I:L/A:N">AV:N/AC:L/PR:L/UI:R/S:C/C:L/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/275.html">Permission Issues (CWE-275)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/169680">169680</a></p>
        <h3>Description</h3>
        <p><p>A permission related issue within the OCS sharing API allowed an authenticated adversary to reshare shared files with an increasing permission set. This may allow an attacker to edit files in a share despite having only a 'read' permission set.</p>
<p>Note that this only affects folders and files that the adversary has at least read-only permissions for.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>10.0.2</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>9.0.55</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The permissions are now properly checked on the OCS endpoint.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://secator.com/" target="_blank" rel="noreferrer">secator - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
