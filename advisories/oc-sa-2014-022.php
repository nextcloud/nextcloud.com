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
        <h2>Login bypass when using the external FTP user backend (oC-SA-2014-022)</h2>
        <p>25th November 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Nextcloud provides multiple user backends that can be used to authenticate users.</p>
<p>One of those backend providers is "user_external", which authenticates users against FTP, IMAP or SMB servers. This is mainly useful when it is not possible to authenticate against an LDAP server.</p>
<p>The FTP backend provided by "user_external" was not properly URL-encoding the password. Thus, an attacker may use a specially crafted password to login to the remote server.</p>
<p>If the Nextcloud instance is able to access external FTP servers this effectively allows an adversary to login without providing valid credentials, if the "user_external" FTP backend has been enabled and configured.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.6</strong> (CVE-2014-9045)</li>
<li>Nextcloud Server &lt; <strong>5.0.18</strong> (CVE-2014-9045)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The FTP user backend within "user_external" is now properly encoding the credentials.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
