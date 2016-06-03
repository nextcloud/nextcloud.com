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
        <h2>Multiple reflected XSS (oC-SA-2012-020)</h2>
        <p>11th July 2012</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site scripting (XSS) vulnerabilities in Nextcloud before 4.0.2 allow remote attackers to inject arbitrary web script or HTML via</p>
<ul> <li>file names to apps/user_ldap/settings.php</li><li>url or title parameter to apps/bookmarks/ajax/editBookmark.php</li><li>tag or page parameter to apps/bookmarks/ajax/updateList.php</li><li>identity to apps/user_openid/settings.php</li><li>stack name in apps/gallery/lib/tiles.php</li><li>root parameter to apps/gallery/templates/index.php</li><li>calendar displayname in apps/calendar/templates/part.import.php</li><li>calendar uri in apps/calendar/templates/part.choosecalendar.rowfields.php</li><li> title, location, or description parameter in apps/calendar/lib/object.php</li><li>certain vectors in core/js/multiselect.js</li><li>artist, album, or title comments parameter in apps/media/lib_scanner.php</li></ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.2</strong> (CVE-2012-4395)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.2.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
