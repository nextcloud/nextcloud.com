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
        <h2>Multiple CSRF vulnerabilities (oC-SA-2013-004)</h2>
        <p>20th February 2013</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site request forgery (CSRF) vulnerabilities in Nextcloud 4.5.6 and 4.0.11 and all prior versions before allows remote attackers to hijack the authentication for users via <ul> <li>the &#8220;lat&#8221; and &#8220;lng&#8221; POST parameters to guesstimezone.php in /apps/calendar/ajax/settings/ (CVE-2013-0299)</li> <ul> <li><strong>Commits:</strong> 452a626 (stable45), 015ac6a (stable4)</li> <li><strong>Risk:</strong> Negligible</li> <li><strong>Note:</strong> Successful exploitation of this CSRF requires the &#8220;calendar&#8221; app to be enabled (enabled by default).</li> <li><strong>Impact:</strong> An attacker may be able to change the timezone of the user.</li> </ul> <li>the &#8220;timezonedetection&#8221; POST parameter to timezonedetection.php in /apps/calendar/ajax/settings/ (CVE-2013-0299)</li> <ul> <li><strong>Commits:</strong> 452a626 (stable45) , 97d0cee (stable4)</li> <li><strong>Risk:</strong> Negligible</li> <li><strong>Note:</strong> Successful exploitation of this CSRF requires the &#8220;calendar&#8221; app to be enabled (enabled by default).</li> <li><strong>Impact:</strong> An attacker may be able to disable or enable the automatic timezone detection.</li> </ul> <li>the &#8220;admin_export&#8221; POST parameter to settings.php in /apps/admin_migrate/ (CVE-2013-0299)</li> <ul> <li><strong>Commits:</strong> bc93744 (stable45), 28dc89e (stable4)</li> <li><strong>Risk:</strong> Moderate</li> <li><strong>Note:</strong> Successful exploitation of this CSRF requires the &#8220;admin_migrate&#8221; app to be enabled (disabled by default).</li> <li><strong>Impact:</strong> An attacker may be able to import an user account.</li> </ul> <li>the &#8220;operation&#8221; POST parameter to export.php in /apps/user_migrate/ajax/ (CVE-2013-0299)</li> <ul> <li><strong>Commits:</strong> 2de405a (stable45), de9befd (stable4)</li> <li><strong>Risk:</strong> Moderate</li> <li><strong>Note:</strong> Successful exploitation of this CSRF requires the &#8220;user_migrate&#8221; app to be enabled (disabled by default).</li> <li><strong>Impact:</strong> An attacker may be able to overwrite files of the logged in user.</li> </ul> <li>multiple unspecified POST parameters to settings.php in /apps/user_ldap/ (CVE-2013-0299)</li> <ul> <li><strong>Commits:</strong> 5ec272d (stable45), b966095 (stable4)</li> <li><strong>Risk:</strong> High</li> <li><strong>Note:</strong> Successful exploitation of this CSRF requires the &#8220;user_ldap&#8221; app to be enabled (disabled by default).</li> <li><strong>Impact:</strong> An attacker may be able to change the authentication server URL.</li> </ul> </ul> </p>
 <p>Multiple cross-site request forgery (CSRF) vulnerabilities in Nextcloud 4.5.6 and all prior versions (except 4.0.x) allows remote attackers to hijack the authentication for users via <ul> <li>the &#8220;v&#8221; POST parameter to changeview.php in /apps/calendar/ajax/ (CVE-2013-0300)</li> <ul> <li><strong>Commits:</strong> 452a626 (stable45)</li> <li><strong>Risk:</strong> Negligible</li> <li><strong>Note:</strong> Successful exploitation of this CSRF requires the &#8220;calendar&#8221; app to be enabled (enabled by default).</li> <li><strong>Impact:</strong> An attacker may be able to change the default view of an user.</li> </ul> <li>multiple unspecified parameters to addRootCertificate.php, dropbox.php and google.php in /apps/files_external/ajax/ (CVE-2013-0300)</li> <ul> <li><strong>Commits:</strong> 2e819d6 + 24a7381e9f (stable45)</li> <li><strong>Risk:</strong> Medium</li> <li><strong>Note:</strong> Successful exploitation of this CSRF requires the &#8220;files_external&#8221; app to be enabled (disabled by default).</li> <li><strong>Impact:</strong> An attacker may be able to mount arbitrary Google Drive or Dropbox folders to the internal filesystem.</li> </ul> <li>multiple unspecified POST parameters to settings.php in /apps/user_webdavauth/ (CVE-2013-0300)</li> <ul> <li><strong>Commits:</strong> 9282641 (stable45)</li> <li><strong>Risk:</strong> High</li> <li><strong>Note:</strong> Successful exploitation of this CSRF requires the &#8220;user_webdavauth&#8221; app to be enabled (disabled by default).</li> <li><strong>Impact:</strong> An attacker may be able to change the authentication server URL.</li> </ul> </ul> </p>
 <p>A cross-site request forgery (CSRF) vulnerability in Nextcloud 4.0.11 and all prior versions allows remote attackers to hijack the authentication for users via <ul> <li>the &#8220;timezone&#8221; POST parameter to settimezone in /apps/calendar/ajax/settings/ (CVE-2013-0301)</li> <ul> <li><strong>Commits:</strong> 97d0cee (stable4)</li> <li><strong>Risk:</strong> Negligible</li> <li><strong>Note:</strong> Successful exploitation of this CSRF requires the &#8220;calendar&#8221; app to be enabled (enabled by default).</li> <li><strong>Impact:</strong> An attacker may be able to change the timezone of an user.</li> </ul> </ul> </p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.5.7</strong> (CVE-2013-0299, CVE-2013-0300)</li>
<li>Nextcloud Server &lt; <strong>4.0.12</strong> (CVE-2013-0299, CVE-2013-0301)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.5.7 or 4.0.12.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
