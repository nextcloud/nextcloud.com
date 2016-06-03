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
        <h2>Multiple stored XSS (oC-SA-2012-021)</h2>
        <p>4th July 2012</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site scripting (XSS) vulnerabilities in Nextcloud before 4.0.1 allow remote attackers to inject arbitrary web script or HTML via</p>
<ul><li>the calendar displayname to part.choosecalendar.rowfields.php</li><li>part.choosecalendar.rowfields.shared.php in apps/calendar/templates/</li> <li>unspecified vectors to apps/contacts/lib/vcard.php</li></ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.1</strong> (CVE-2012-4395)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.1.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
