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
        <h2>CSRF in "bookmarks" application (oC-SA-2014-027)</h2>
        <p>25th November 2014</p>
        <p>Risk level: <strong>Low</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not verifying the CSRF token on the import functionality of the "bookmarks" application, it was vulnerable against CSRF attacks.<br/>The "bookmarks" application is disabled by default.</p>
<p>An unauthenticated attacker could have used this to import bookmarks into the "bookmarks" application if the victim visits a specially crafted website and is logged-in into the Nextcloud instance at the same time.<br/>Furthermore, an unauthenticated attacker could leverage this vulnerability with <a href="/security/advisory/?id=oc-sa-2014-028">oC-SA-2014-028</a> resulting in a potential Cross-site scripting vulnerability.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.3</strong> (CVE-2014-9041)</li>
<li>Nextcloud Server &lt; <strong>6.0.6</strong> (CVE-2014-9041)</li>
<li>Nextcloud Server &lt; <strong>5.0.18</strong> (CVE-2014-9041)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The import functionality is now verifying the CSRF token.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Alain Homewood - PwC New Zealand - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
