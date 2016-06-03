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
        <h2>Multiple SQL injection (oC-SA-2013-019)</h2>
        <p>14th May 2013</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Nextcloud before 5.0.6 does not neutralize special elements that are passed to the SQL query in lib/db.php which therefore allows an authenticated attacker to execute arbitrary SQL commands. (CVE-2013-2045)</p>
<p>Nextcloud before 5.0.6 and 4.5.11 does not neutralize special elements that are passed to the SQL query in lib/bookmarks.php which therefore allows an authenticated attacker to execute arbitrary SQL commands. (CVE-2013-2046)</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>5.0.6</strong> (CVE-2013-2045)</li>
<li>Nextcloud Server &lt; <strong>4.5.11</strong> (CVE-2013-2046)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 5.0.6, 4.5.11 or 4.0.15.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mateusz Goik - AliantSoft - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
