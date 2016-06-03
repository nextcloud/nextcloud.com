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
        <h2>Multiple directory traversals (oC-SA-2013-020)</h2>
        <p>14th May 2013</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple directory traversal vulnerabilities in (1) apps/files_trashbin/index.php via the "dir" GET parameter and (2) lib/files/view.php via undefined vectors in all Nextcloud versions prior to 5.0.6 and other versions before 4.0.15, allow authenticated remote attackers to get access to arbitrary local files.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>5.0.6</strong> (CVE-2013-2039, CVE-2013-2085)</li>
<li>Nextcloud Server &lt; <strong>4.5.11</strong> (CVE-2013-2039)</li>
<li>Nextcloud Server &lt; <strong>4.0.15</strong> (CVE-2013-2039)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 5.0.6, 4.5.11 or 4.0.15.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mateusz Goik - AliantSoft - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
