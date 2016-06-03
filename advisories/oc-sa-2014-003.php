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
        <h2>Insecure Flash Cross Domain policies (oC-SA-2014-003)</h2>
        <p>3rd July 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to insecure Flash Cross Domain policies an attacker might gain access to stored files of the user.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.2</strong> (CVE-2014-2047)</li>
<li>Nextcloud Server &lt; <strong>5.0.15</strong> (CVE-2014-2049)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>All packaged Flash files have been audited whether they have potentially insecure Cross Domain policies and vulnerable files have been fixed.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
