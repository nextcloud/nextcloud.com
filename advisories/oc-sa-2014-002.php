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
        <h2>Insecure OpenID implementation (oC-SA-2014-002)</h2>
        <p>3rd July 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to an insecure OpenID implementation used by user_openid in Nextcloud 5 it is possible to log-into a system using an arbitrary OpenID Account (without knowing any secret information, i.e. the password, about it) by using a malicious OpenID provider.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>5.0.15</strong> (CVE-2014-2048)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>As the application is not longer maintained anymore, user_openid has been removed from the release.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
