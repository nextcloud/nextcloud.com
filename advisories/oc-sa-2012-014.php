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
        <h2>CSRF in appconfig.php (oC-SA-2012-014)</h2>
        <p>10th July 2012</p>
        <p>Risk level: <strong>Low</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Cross-site request forgery (CSRF) vulnerability in core/ajax/appconfig.php in Nextcloud before 4.0.7 allows remote attackers to hijack the authentication of administrators for requests that edit the app configurations.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.7</strong> (CVE-2012-4391)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.7.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            
        </ul>
        <br/>
    </div>
</div>
