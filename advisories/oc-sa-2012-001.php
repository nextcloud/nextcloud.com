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
        <h2>Multiple XSS vulnerabilities (oC-SA-2012-001)</h2>
        <p>24th August 2012</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site scripting (XSS) vulnerabilities in Nextcloud 4.5.0 allow remote attackers to inject arbitrary web script or HTML via </p>
<ul><li>the filename to to versions.js in apps/files_versions/js/</li><li>the filename to filelist.js in apps/files/js/</li><li>the event title to fullcalendar.js in 3rdparty/fullcalendar/js/</li></ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.5.1</strong> (CVE-2012-5605)</li>
<li>Nextcloud Server &lt; <strong>4.0.9</strong> (CVE-2012-5605)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.5.1 or 4.0.10.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Shai Rod - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
