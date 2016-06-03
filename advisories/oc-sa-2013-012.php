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
        <h2>contacts: SQL Injection (oC-SA-2013-012)</h2>
        <p>2nd April 2013</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Nextcloud before 5.0.1 does not neutralize special elements that are passed to the SQL query in addressbookprovider.php which therefore allows an authenticated attacker to execute arbitrary SQL commands.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>5.0.1</strong> (CVE-2013-1893)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 5.0.1.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Alexander Bürger - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
