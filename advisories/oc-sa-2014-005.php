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
        <h2>LDAP injection (oC-SA-2014-005)</h2>
        <p>3rd July 2014</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not properly sanitizing the LDAP queries an attacker is able to:<ul><li>Gain information about existing LDAP users</li><li>Modify the login query, e.g. with a wildcard</li></ul></p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.2</strong> (CVE-2014-2047)</li>
<li>Nextcloud Server &lt; <strong>5.0.15</strong> (CVE-2014-2049)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>All LDAP queries have been reviewed and proper sanitization added.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
