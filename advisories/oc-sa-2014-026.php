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
        <h2>Local file disclosure due to the preview system (oC-SA-2014-026)</h2>
        <p>25th November 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Nextcloud includes a preview system which generates the small thumbnails shown in the file list of the web interface. This functionality can be controlled with the enable_previews switch in config.php and is enabled by default.</p>
<p>Multiple unspecified vulnerabilities have been found within the preview system. Using these vulnerabilities an authenticated adversary (or an unauthenticated one if public uploads are enabled) may be able to extract local files from the Nextcloud system.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.3</strong> (CVE-2014-9047)</li>
<li>Nextcloud Server &lt; <strong>6.0.6</strong> (CVE-2014-9047)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>An additional configuration switch has been added to <code>config.php</code>. The <code>enabledPreviewProviders</code> option allows defining which preview providers are enabled.</p>
<p>By default the preview system is now only generating thumbnails for images and plain-text based formats. File formats that may leak local file content have been disabled by default.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
