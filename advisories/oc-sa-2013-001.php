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
        <h2>Multiple XSS vulnerabilities (oC-SA-2013-001)</h2>
        <p>22nd January 2013</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site scripting (XSS) vulnerabilities in Nextcloud 4.5.5 and 4.0.10 and all prior versions allow remote attackers to inject arbitrary web script or HTML via</p>
 <ul> <li>the GET parameters to resetpassword.php in core/lostpassword/templates/ (CVE-2013-0201)</li> <ul> <li><strong>Commits:</strong> c05c8ab (stable45), 4e2b834 (stable4)</li> <li><strong>Risk:</strong> Medium</li> <li><strong>Note:</strong> This is a reflected XSS, which can be only abused using Internet Explorer 9 and prior.</li> </ul> <li>the mime parameter to mimeicon.php in apps/files/ajax/ (CVE-2013-0201)</li> <ul> <li><strong>Commits:</strong> b8e0309 (stable45), f603454 (stable4)</li> <li><strong>Risk:</strong> Medium</li> <li><strong>Note:</strong> This is a reflected XSS, which only affects Nextcloud versions hosted by Windows.</li> </ul> <li>the token parameter to sharing.php in apps/gallery/ (CVE-2013-0201)</li> <ul> <li><strong>Commits:</strong> 34ac2f5 (stable45), f71f0ad (stable4)</li> <li><strong>Risk:</strong> Medium</li> <li><strong>Note:</strong> This is a reflected XSS, for a successful exploitation the &#8220;gallery&#8221; app needs to be enabled.</li> </ul> <li>the action parameter to sharing.php in core/ajax/ (CVE-2013-0202)</li> <ul> <li><strong>Commits:</strong> fb334f3 (stable45), 306d5ee (stable4)</li> <li><strong>Risk:</strong> Low <li><strong>Note:</strong> This is a self XSS, for a successful exploitation the user needs to enter malicious Javascript on his own.</li> </ul> <li>the POST parameters to new.php in apps/calendar/ajax/event/ (CVE-2013-0203)</li> <ul> <li><strong>Commits:</strong> 9e6ba80e (stable45), 708bd (stable4)</li> <li><strong>Risk:</strong> High</li> <li><strong>Note:</strong> This is a stored XSS, for a successful exploitation the &#8220;calendar&#8221; app needs to be enabled. An authenticated remote attacker may be able to share this crafted event with other users.</li> </ul> <li>the url parameter to addBookmark.php in apps/bookmarks/ajax/ (CVE-2013-0203)</li> <ul> <li><strong>Commits:</strong> 6aba1e8 (stable45), 3f37063 (stable4)</li> <li><strong>Risk:</strong> Low</li> <li><strong>Note:</strong> This is a stored XSS, for a successful exploitation the &#8220;bookmarks&#8221; app needs to be enabled.</li> </ul> </ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.11</strong> (CVE-2013-0201, CVE-2013-0202, CVE-2013-0203)</li>
<li>Nextcloud Server &lt; <strong>4.5.6</strong> (CVE-2013-0201, CVE-2013-0202, CVE-2013-0203)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.11 or 4.5.6.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Mathias Karlsson - Detectify - Vulnerability discovery and disclosure of CVE-2013-0201.</li><li>Ahmad Ashraff - Vulnerability discovery and disclosure of CVE-2013-0202.</li><li>Frans Rosén - Detectify - Vulnerability discovery and disclosure of CVE-2012-0203.</li>
        </ul>
        <br/>
    </div>
</div>
