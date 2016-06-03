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
        <h2>Multiple XSS vulnerabilities (oC-SA-2013-028)</h2>
        <p>6th June 2013</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Cross-site scripting (XSS) vulnerabilities in js/viewer.js inside the files_videoviewer application via multiple unspecified vectors in all Nextcloud versions prior to 5.0.7 and 4.5.12 allows authenticated remote attackers to inject arbitrary web script or HTML via shared files. (CVE-2013-2150)</p>
<p>Cross-site scripting (XSS) vulnerabilities in core/js/oc-dialogs.js via multiple unspecified vectors in all Nextcloud versions prior to 5.0.7 and other versions before 4.0.16 allows authenticated remote attackers to inject arbitrary web script or HTML via shared files. (CVE-2013-2149)</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>5.0.7</strong> (CVE-2013-2150, CVE-2013-2149)</li>
<li>Nextcloud Server &lt; <strong>4.5.12</strong> (CVE-2013-2150, CVE-2013-2149)</li>
<li>Nextcloud Server &lt; <strong>4.0.16</strong> (CVE-2013-2149)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 5.0.7.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mateusz Goik - AliantSoft - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
