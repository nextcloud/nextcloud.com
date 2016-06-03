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
        <h2>Host Header Poisoning (oC-SA-2014-004)</h2>
        <p>3rd July 2014</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to trusting user supplied input and interpret it as Host header an attacker is able to craft a password reset mail with a link pointing to his own site. If a user clicks on the link or a software (e.g. antivirus) is accessing the link the attacker is able to reset the user password.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.2</strong> (CVE-2014-2047)</li>
<li>Nextcloud Server &lt; <strong>5.0.15</strong> (CVE-2014-2049)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The new 'trusted_domain' setting has been introduced in which all domains from which Nextcloud should be accessible has to be specified. A default configuration can be found in config/config.sample.php.</p>
<p>Nextcloud will add this configuration setting on its own during an update or a fresh installation using the currently used domain.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
