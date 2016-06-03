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
        <h2>XXE in multiple third party components (oC-SA-2014-006)</h2>
        <p>3rd July 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple third party components of Nextcloud are vulnerable to XXE attacks, which may lead to:</p>
 <ul> <li>Local File Disclosure</li> <li>Server Side Request Forgery</li> <li>DoS</li> <li>Code Execution (depending on the PHP wrappers)</li> <li>&#8230;</li> </ul> <p>The following libraries are affected:</p>
 <ul> <li>ZendFramework: CVE-2014-2052</li> <li>GetID3: CVE-2014-2053</li> <li>PHPExcel: CVE-2014-2054</li> <li>SabreDAV: CVE-2014-2055</li> <li>PHPDocX: CVE-2014-2056</li> </ul> </p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.2</strong> ()</li>
<li>Nextcloud Server &lt; <strong>5.0.15</strong> ()</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>All vendors except PHPDocX have released an update. PHPDocX states that the admin is responsible to validate the DOCX document and is considering  this as won't fix.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
