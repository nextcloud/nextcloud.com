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
        <h2>ACLs not properly enforced in "documents" application (oC-SA-2014-025)</h2>
        <p>25th November 2014</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>The "documents" application is a collaborative web-based online editor for ODT files. Using this application you can easily share and collaborate on office documents.</p>
<p>This application uses strong and very long random "Session IDs" to limit access to specific resources. Knowledge of this ID allows access to the files they are protecting.</p>
<p>A legacy API method used for debugging was not properly removed, which allows authenticated users to list all currently valid session IDs. Using these IDs an authenticated adversary can access recently edited documents of every existing user.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.3</strong> (CVE-2014-9049)</li>
<li>Nextcloud Server &lt; <strong>6.0.6</strong> (CVE-2014-9049)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The debugging code has been removed.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
