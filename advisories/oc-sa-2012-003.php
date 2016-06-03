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
        <h2>XSS vulnerability in user_webdavauth (oC-SA-2012-003)</h2>
        <p>14th November 2012</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>A cross-site scripting (XSS) vulnerability in Nextcloud 4.5.x before 4.5.2 allow remote attackers to inject arbitrary web script or HTML via the POST data to settings.php in apps/user_webdavauth/</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.5.2</strong> (CVE-2012-5608)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.5.2.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
