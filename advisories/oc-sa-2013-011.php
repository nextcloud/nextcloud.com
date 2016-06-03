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
        <h2>Multiple XSS vulnerabilities (oC-SA-2013-011)</h2>
        <p>2nd April 2013</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site scripting (XSS) vulnerabilities in Nextcloud 5.0.0 allow remote attackers to inject arbitrary web script or HTML via </p>
<ul> <li>the "new_name" POST parameter to renameTag.php in /apps/bookmarks/ajax/</li> <ul> <li><strong>Commits:</strong> 1c63eb1 (stable5)</li> <li><strong>Risk:</strong> Medium</li> <li><strong>Note:</strong> Successful exploitation of this stored XSS requires the "bookmark" app to be enabled. (enabled by default)</li> </ul> <li>multiple unspecified parameters to several files in apps/contacts/ajax/</li> <ul> <li><strong>Commits:</strong> ae9e5a4 (stable5)</li> <li><strong>Risk:</strong> Medium</li> <li><strong>Note:</strong> Successful exploitation of this stored XSS requires the "calendar" app to be enabled. (enabled by default)</li> </ul> </ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>5.0.1</strong> (CVE-2013-1890)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 5.0.1.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Dylan Irzi - WebSecurityDev - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
