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
        <h2>Bypass of file blacklist (oC-SA-2015-004)</h2>
        <p>25th March 2015</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>A blacklist bypass vulnerability including UTF-8 encoding in file paths in the mentioned Nextcloud versions, allows authenticated remote attackers to bypass the file blacklist and upload files such as the <code>.htaccess</code> files.</p>
<p>An attacker could leverage this bypass by uploading a <code>.htaccess</code> and execute arbitrary PHP code if the <code>/data/</code> directory is stored inside the webroot and a webserver that interprets <code>.htaccess</code> files is used (e.g. Apache)</p>
<p>Nextcloud always recommends to move the <code>data</code> directory outside of the web root.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.5</strong> (CVE-2015-3013)</li>
<li>Nextcloud Server &lt; <strong>6.0.7</strong> (CVE-2015-3013)</li>
<li>Nextcloud Server &lt; <strong>5.0.19</strong> (CVE-2015-3013)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The blacklist bypass has been fixed and unit tests has been added to prevent future regressions.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
