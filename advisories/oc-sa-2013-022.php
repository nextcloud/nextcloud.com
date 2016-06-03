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
        <h2>Open redirector (oC-SA-2013-022)</h2>
        <p>14th May 2013</p>
        <p>Risk level: <strong>Low</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Open redirect vulnerability in index.php (aka the Login Page) in Nextcloud before 5.0.6 allows remote attackers to redirect users to arbitrary web sites and conduct phishing attacks via a URL in the redirect_url parameter.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>5.0.6</strong> (CVE-2013-2044)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 5.0.6.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mateusz Goik - AliantSoft - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
