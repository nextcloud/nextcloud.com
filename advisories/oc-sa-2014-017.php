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
        <h2>Deserialization of Untrusted Data in core (oC-SA-2014-017)</h2>
        <p>24th May 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to the deserialization of unstrusted data in core an attacker might be able to delete arbitrary files from the filesystem or executing arbitrary SQL queries.</p>
<p>This issue has been found in a widely used third-party library, we have removed the component due to general quality concerns from the release and are coordinating this issue to upstream.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.3</strong> (CVE-2014-3839)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>We have removed the vulnerable component and are coordinating this issue with the upstream vendor.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
