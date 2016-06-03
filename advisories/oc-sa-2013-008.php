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
        <h2>Multiple XSS vulnerabilities (oC-SA-2013-008)</h2>
        <p>14th March 2013</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site scripting (XSS) vulnerabilities in Nextcloud 4.5.8 and all prior versions (except 4.0.x) allow remote attackers to inject arbitrary web script or HTML via </p>
<ul> <li>the "quota" POST parameter to setquota.php in /core/settings/ajax/</li> <ul> <li><strong>Commits:</strong> 2364c79 (stable45)</li> <li><strong>Risk:</strong> Low</li> <li><strong>Note:</strong> Successful exploitation of this stored XSS requires administrator privileges.</li> </ul> <li>the group input field to settings.php</li> <ul> <li><strong>Commits:</strong> 4cff6df (stable45)</li> <li><strong>Risk:</strong> Low</li> <li><strong>Note:</strong> Successful exploitation of this DOM based self XSS requires group admin privileges.</li> </ul> <li>the share with input field</li> <ul> <li><strong>Commits:</strong> 7b0a8f4 (stable45)</li> <li><strong>Risk:</strong> Low</li> <li><strong>Note:</strong> Successful exploitation of this DOM based self XSS requires group admin privileges.</li> </ul> </ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.5.8</strong> (CVE-2013-1822)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.5.8.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
