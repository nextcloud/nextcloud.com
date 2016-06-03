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
        <h2>Enumeration of shared files in documents (oC-SA-2014-015)</h2>
        <p>24th May 2014</p>
        <p>Risk level: <strong>Low</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to using the auto-incrementing <code>file_id</code> instead of the random generated <code>token</code> to access files in the documents app an authenticated users could enumerate shared files of other users.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.3</strong> (CVE-2014-3837)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>We replaced the usage of <code>file_id</code> with our random generated file sharing token.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
