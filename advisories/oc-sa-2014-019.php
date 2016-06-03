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
        <h2>Insufficient RSA Host Key validation in files_external (SFTP driver) (oC-SA-2014-019)</h2>
        <p>18th August 2014</p>
        <p>Risk level: <strong>Low</strong></p>
        
        
        <h3>Description</h3>
        <p><p>The SFTP external storage driver was verifying the RSA Host Key after logging in. This allows for a man-in-the-middle (MITM) attack even if the host key is already known and can be validated. Basically, at the point where the host key was validated, the secret has already been given away.</p>
<p>It should be noted, that you're only affected by this vulnerability if you're using SFTP external storage. Furthermore, a successful attack requires an attacker to be able to impersonate the remote server, i.e. by having control over the routing.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.5</strong> (CVE-2014-5341)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The SFTP external storage driver is now verifying known host keys before logging in.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Andreas Fischer - Nextcloud Inc. (bantu@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
