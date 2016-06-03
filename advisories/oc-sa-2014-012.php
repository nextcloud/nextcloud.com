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
        <h2>Improper authorization checks in files_external (oC-SA-2014-012)</h2>
        <p>24th May 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not verifying whether an user has been granted access to add external storages an authenticated user could even mount external storage (e.g. SMB/FTP/etc.) without permission.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.3</strong> (CVE-2014-3835)</li>
<li>Nextcloud Server &lt; <strong>5.0.16</strong> (CVE-2014-3835)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>We reviewed the access-control of the files_external application and ensured that permissions are checked properly for every action.</p>
<p>Additionally our next major release Nextcloud 7 will give administrators the possibility to define which external storage type an user is allowed to mount.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
