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
        <h2>HTTP header injection (oC-SA-2012-010)</h2>
        <p>10th August 2012</p>
        <p>Risk level: <strong>Low</strong></p>
        
        
        <h3>Description</h3>
        <p><p>A Header injection vulnerability in Nextcloud before 4.0.8 allows remote attackers to perform HTTP Response Splitting attacks to modify expected HTML content from the server via the HTTP url path parameter to index.php.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.8</strong> (CVE-2012-5057)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.8.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Nico Golde - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
