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
        <h2>Stored XSS in "bookmarks" application (oC-SA-2014-028)</h2>
        <p>25th November 2014</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not sanitising all user provided input, the "bookmarks" application shipped with the below mentioned Nextcloud versions is vulnerable to a stored Cross-site scripting attack.<br/>The "bookmarks" application is disabled by default.</p>
<p>Abusing this vulnerability requires the user to import a malicious crafted "bookmark file". However, an attacker can leverage <a href="/security/advisory/?id=oc-sa-2014-027">oC-SA-2014-027</a> to achieve this.</p>
<p>Successful exploitation requires that the victim then clicks on the malicious crafted entry within the bookmarks application.</p>
<p>Nextcloud advises browsers to disable inline JavaScript execution due to the used Content-Security-Policy; this vulnerability is therefore not exploitable if you use a browser that supports the current CSP standard.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.3</strong> (CVE-2014-9042)</li>
<li>Nextcloud Server &lt; <strong>6.0.6</strong> (CVE-2014-9042)</li>
<li>Nextcloud Server &lt; <strong>5.0.18</strong> (CVE-2014-9042)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The issue was caused by not verifying the protocol when importing a bookmark from a "bookmark file". Therefore it was possible to import links such as <code>javascript:alert(1)</code> resulting in a stored XSS vulnerability.</p>
<p>The template system is now verifying whether a bookmark url starts with a supported protocol. If not <code>http://</code> will be appended to the URL to avoid exploitability of such issues.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
