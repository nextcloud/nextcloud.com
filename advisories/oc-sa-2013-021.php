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
        <h2>Multiple XSS vulnerabilities (oC-SA-2013-021)</h2>
        <p>14th May 2013</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Cross-site scripting (XSS) vulnerabilities in multiple files inside the media application via multiple unspecified vectors in all Nextcloud versions prior to 5.0.6 and other versions before 4.0.15 allows authenticated remote attackers to inject arbitrary web script or HTML. (CVE-2013-2040)</p>
<p>Cross-site scripting (XSS) vulnerabilities in (1) apps/bookmarks/ajax/editBookmark.php via the "tag" GET parameter (CVE-2013-2041) and in (2) apps/files/js/files.js via the "dir" GET parameter to apps/files/ajax/newfile.php (CVE-2013-2041) in Nextcloud 5.0.x before 5.0.6 allows authenticated remote attackers to inject arbitrary web script or HTML.</p>
<p>Cross-site scripting (XSS) vulnerabilities in (1) apps/bookmarks/ajax/addBookmark.php via the "url" GET parameter and in (2) apps/bookmarks/ajax/editBookmark.php via the "url" POST parameter in Nextcloud 5.0.x before 5.0.6 allows authenticated remote attackers to inject arbitrary web script or HTML. (CVE-2013-2042)</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>5.0.6</strong> (CVE-2013-2040, CVE-2013-2041, CVE-2013-2042)</li>
<li>Nextcloud Server &lt; <strong>4.5.11</strong> (CVE-2013-2040, CVE-2013-2042)</li>
<li>Nextcloud Server &lt; <strong>4.0.15</strong> (CVE-2013-2040, CVE-2013-2042)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 5.0.6, 4.5.11 or 4.0.15.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mateusz Goik - AliantSoft - Vulnerability discovery and disclosure.</li><li>Kacper R. - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
