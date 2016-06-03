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
        <h2>XSS vulnerability in bookmarks (oC-SA-2012-007)</h2>
        <p>20th December 2012</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>A cross-site scripting (XSS) vulnerability in Nextcloud before 4.5.5 and 4.0.10 allow remote attackers to inject arbitrary web script or HTML via the PATH data to index.php in apps/bookmark/</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.5.5</strong> (CVE-2013-5666)</li>
<li>Nextcloud Server &lt; <strong>4.0.10</strong> (CVE-2013-5666)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.5.5 or 4.0.10.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Yuji Kosuga - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
