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
        <h2>Potential local file disclosure (oC-SA-2014-023)</h2>
        <p>25th November 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Nextcloud offers the <code>OC_Util::getUrlContent()</code> to developers. Using this function applications can download content from remote websites.</p>
<p>Due to a newly introduced bug in this functionality it was following redirects to other protocols such as <code>file://</code>. Thus, an attacker may be able to gain access to local files stored on the Nextcloud instance.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.3</strong> (CVE-2014-9046)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p><code>OC_Util::getUrlContent()</code> is now following only redirects to the <code>HTTP</code> and <code>HTTPS</code> protocols.  <br>Some other functions have received further hardening as well to prevent potential bypasses of network restrictions. (In particular the "Download from URL" feature will not accept redirect to other protocols such as FTP anymore).</p>
<p>Those specific hardenings have been also applied to 6.0.6 and 5.0.18 but are not considered as security bugs by the Nextcloud project.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
