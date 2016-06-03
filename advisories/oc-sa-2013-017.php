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
        <h2>XSS Vulnerability in MediaElement.js (oC-SA-2013-017)</h2>
        <p>19th April 2013</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>A cross-site scripting (XSS) vulnerability in all Nextcloud versions prior to 5.0.5 including the 4.5.x branch allows remote attackers to execute arbitrary javascript when a user opens a special crafted URL.</p>
<p>This vulnerability exists in the bundled 3rdparty plugin "MediaElement.js", "MediaElement.js" released version 2.11.2 which addresses the problem.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>5.0.5</strong> (CVE-2013-1967)</li>
<li>Nextcloud Server &lt; <strong>4.5.10</strong> (CVE-2013-1967)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 5.0.5 or 4.5.10.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Malte Batram - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
