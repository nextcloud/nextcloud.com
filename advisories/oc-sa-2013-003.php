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
        <h2>Multiple XSS vulnerabilities (oC-SA-2013-003)</h2>
        <p>20th February 2013</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site scripting (XSS) vulnerabilities in Nextcloud 4.5.6 and 4.0.11 and all prior versions allow remote attackers to inject arbitrary web script or HTML via <ul> <li>the &#8220;site_name&#8221; and &#8220;site_url&#8221; POST parameters to setsites.php in /apps/external/ajax/ (CVE-2013-0297)</li> <ul> <li><strong>Commits:</strong> e0140a (stable45), 1fbb89a (stable4)</li> <li><strong>Risk:</strong> Low</li> <li><strong>Note:</strong> Successful exploitation of this stored XSS requires the &#8220;external&#8221; app to be enabled (disabled by default) and administrator privileges.</li> </ul> <li>the group input field to settings.php (CVE-2013-0307)</li> <ul> <li><strong>Commits:</strong> e2faa92 (stable45), 57f40b2 (stable4)</li> <li><strong>Risk:</strong> Low</li> <li><strong>Note:</strong> Successful exploitation of this DOM based self XSS requires administrator privileges.</li> </ul> </ul> </p>
 <p>Multiple cross-site scripting (XSS) vulnerability in Nextcloud 4.5.6 and all prior versions (except 4.0.x) allow remote attackers to inject arbitrary web script or HTML via <ul> <li>the import of a specially crafted iCalendar file via the calendar application (CVE-2013-0298)</li> <ul> <li><strong>Commits:</strong> 6608da2 (stable45)</li> <li><strong>Risk:</strong> High</li> <li><strong>Note:</strong> Successful exploitation of this stored XSS requires the &#8220;calendar&#8221; app to be enabled (enabled by default), an attacker may be able to share this crafted event with other users.</li> </ul> <li>the &#8220;dir&#8221; and &#8220;file&#8221; GET parameter to viewer.php in /apps/files_pdfviewer/ (CVE-2013-0298)</li> <ul> <li><strong>Commits:</strong> 04cbec7 (stable45)</li> <li><strong>Risk:</strong> Medium</li> <li><strong>Note:</strong> Successful exploitation of this reflected XSS requires the &#8220;files_pdfviewer&#8221; app to be enabled (enabled by default).</li> </ul> <li>the &#8220;mountpoint&#8221; POST parameter to addMountPoint.php in /apps/files_external/ (CVE-2013-0298)</li> <ul> <li><strong>Commits:</strong> d885959 (stable45)</li> <li><strong>Risk:</strong> Low</li> <li><strong>Note:</strong> Successful exploitation of this reflected XSS requires the &#8220;files_external&#8221; app to be enabled (disabled by default).</li> </ul> </ul> </p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.5.7</strong> (CVE-2013-0297, CVE-2013-0298, CVE-2013-0307)</li>
<li>Nextcloud Server &lt; <strong>4.0.12</strong> (CVE-2013-0297, CVE-2013-0307)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.5.7 or 4.0.12.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li><li>Sabari Selvan - Vulnerability discovery and disclosure. (CVE-2013-0307)</li>
        </ul>
        <br/>
    </div>
</div>
