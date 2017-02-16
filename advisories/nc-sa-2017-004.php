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
        <h2>Denial of Service attack (NC-SA-2017-004)</h2>
        <p>5th February 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:C/C:N/I:N/A:L">AV:N/AC:L/PR:L/UI:N/S:C/C:N/I:N/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/674.html">Uncontrolled Recursion (CWE-674)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/174524">174524</a></p>
        <h3>Description</h3>
        <p><p>Due to an error in the application logic an authenticated adversary may trigger an endless recursion in the application leading to a potential Denial of Service.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>10.0.2</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>9.0.55</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The code path leading to the endless recursion is now properly handled.</p>
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
