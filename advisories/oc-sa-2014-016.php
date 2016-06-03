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
        <h2>Improper authorization checks in core (oC-SA-2014-016)</h2>
        <p>24th May 2014</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to an improper authorization check in core an attacker with access to at least two user account is able to access the file names of other users.</p>
<p>Our post-mortem audit showed that this vulnerability does not leak any content of the file or the directory structure except the filename.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.3</strong> (CVE-2014-3838)</li>
<li>Nextcloud Server &lt; <strong>5.0.16</strong> (CVE-2014-3838)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>We added a permission check whether the account is allowed to share the specified file.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Eddy Xu (flyingtest09@gmail.com) - Vulnerability discovery and disclosure.</li><li>Robin Appelmann - Nextcloud Inc. (icewind@nextcloud.com) - Investigating the affected components and providing a patch.</li><li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Coordinating the patches.</li>
        </ul>
        <br/>
    </div>
</div>
