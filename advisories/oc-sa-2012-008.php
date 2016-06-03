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
        <h2>Insufficiently random values (oC-SA-2012-008)</h2>
        <p>10th August 2012</p>
        <p>Risk level: <strong>Low</strong></p>
        
        
        <h3>Description</h3>
        <p><p>The rand and mt_rand functions in PHP < 5.4.x do not produce cryptographically strong random numbers, which allows attackers to leverage exposures in products that rely on these functions for security-relevant functionality, as demonstrated by the password-reset functionality in Nextcloud 4.0.x.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.8</strong> (CVE-2008-4107)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.8.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Pascal Junod - HEIG-VD (University of Applied Sciences Western Switzerland) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
