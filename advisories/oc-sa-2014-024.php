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
        <h2>Bypass of shared files password protection in "documents" application (oC-SA-2014-024)</h2>
        <p>25th November 2014</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>The "documents" application is a collaborative web-based online editor for ODT files. Using this application you can easily share and collaborate on office documents.</p>
<p>Due to missing access control within the API of this application, the password-protection of shared files can be bypassed.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.3</strong> (CVE-2014-9048)</li>
<li>Nextcloud Server &lt; <strong>6.0.6</strong> (CVE-2014-9048)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The "documents" application now verifies the password before granting access to shared files.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
