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
        <h2>Multiple XSS vulnerabilities (oC-SA-2012-009)</h2>
        <p>10th August 2012</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site scripting (XSS) vulnerabilities in Nextcloud before 4.0.8 allow remote attackers to inject arbitrary web script or HTML via </p>
<ul><li>the readyCallback parameter to PUT.swf in apps/files_odfviewer/src/webodf/webodf/flashput/</li><li>the root parameter to index.php in apps/gallery/templates/</li><li>a malformed query to db.php in lib/</li></ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.8</strong> (CVE-2012-5056)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.8.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Emanuel Bronshtein - Vulnerability discovery and disclosure.</li><li>Nico Golde - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
