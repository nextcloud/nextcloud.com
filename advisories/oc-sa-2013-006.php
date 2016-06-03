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
        <h2>Multiple code executions (oC-SA-2013-006)</h2>
        <p>20th February 2013</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>A code executions vulnerability in Nextcloud 4.5.6 and 4.0.11 and all prior versions allow authenticated remote attackers to execute arbitrary PHP code via</p>
<ul> <li>unspecified POST parameters to translations.php in /core/ajax/</li> <ul> <li><strong>Commits:</strong> 74e73bc (stable4), ece08cd (stable45)</li> <li><strong>Risk:</strong> Critical</li></ul> </ul><p></p>
<p>A code executions vulnerability in Nextcloud 4.5.6 and all prior versions (except Nextcloud 4.0.x) allow authenticated remote attackers to execute arbitrary PHP code via </p>
<ul> <li>unspecified POST parameters to settings.php in /core/</li> <ul> <li><strong>Commits:</strong> 746aa0 (stable45)</li> <li><strong>Risk:</strong> Critical</li></ul> </ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.5.7</strong> (CVE-2013-0303)</li>
<li>Nextcloud Server &lt; <strong>4.0.12</strong> (CVE-2013-0303)</li>

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
