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
        <h2>Code execution in external storage (oC-SA-2013-002)</h2>
        <p>22nd January 2013</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not sufficiently sanitizing the user input in "settings/personal.php" in Nextcloud 4.5.x before 4.5.6 an authenticated remote attackers may be able to execute arbitrary code by entering special crafted PHP code in the mount point settings.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.5.6</strong> (CVE-2013-0204)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.5.6.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Yuji Kosuga - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
