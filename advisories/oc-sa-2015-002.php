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
        <h2>Multiple stored XSS in "documents" application (oC-SA-2015-002)</h2>
        <p>25th March 2015</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not sanitising all user provided input, the "documents" application shipped with the mentioned Nextcloud versions is vulnerable to multiple stored cross-site scripting attacks.<br/>The "documents" application is enabled by default in the Nextcloud Community Edition but not shipped with the Nextcloud Enterprise Edition.</p>
<p>Successful exploitation requires that the adversary is able to modify a WebODF document and a victim opens the shared document.</p>
<p>Nextcloud advises browsers to disable inline JavaScript execution due to the used Content-Security-Policy; this vulnerability is therefore not exploitable if you use a browser that supports the current CSP standard. You can check at <a href="http://caniuse.com/#feat=contentsecuritypolicy">CanIUse.com</a> whether your browser supports our Content-Security-Policy.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.5</strong> (CVE-2015-3012)</li>
<li>Nextcloud Server &lt; <strong>6.0.7</strong> (CVE-2015-3012)</li>
<li>Nextcloud Server &lt; <strong>5.0.19</strong> (CVE-2015-3012)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The issue was caused by not sanitising a Dojo component in WebODF. These not sanitised parts are now properly sanitised and fixed with WebODF v0.5.5, details can be found at the <a href="https://github.com/kogmbh/WebODF/blob/v0.5.5/ChangeLog.md#fixes-1">WebODF changelog</a>.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Roy Jansen (rvahax@gmail.com) - Vulnerability discovery and disclosure.</li><li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Further analysis and discovery of other related bugs.</li>
        </ul>
        <br/>
    </div>
</div>
