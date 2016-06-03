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
        <h2>Auth bypass in user_webdavauth and user_ldap (oC-SA-2012-006)</h2>
        <p>20th December 2012</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Nextcloud 4.5.4, Nextcloud 4.0.9 and all versions previous to this doesn't sufficiently verify whether a request to settings.php was sent by an admin, which allows unauthenticated users to edit app configurations of user_webdavauth and user_ldap. An unauthenticated attacker may use this to gain access to any user account on the server if these plugins are enabled.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.10</strong> (CVE-2013-5665)</li>
<li>Nextcloud Server &lt; <strong>4.5.5</strong> (CVE-2013-5665)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.5.5 or 4.0.10.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
