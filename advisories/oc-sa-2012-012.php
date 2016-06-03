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
        <h2>Code execution in /lib/migrate.php (oC-SA-2012-012)</h2>
        <p>10th July 2012</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Incomplete blacklist vulnerability in lib/migrate.php in Nextcloud before 4.0.7 allows remote attackers to execute arbitrary code by uploading a crafted .htaccess file in an import.zip file and accessing an uploaded PHP file.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.7</strong> (CVE-2012-4389)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.7.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Julien Cayssol - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
