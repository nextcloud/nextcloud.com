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
        <h2>Multiple stored XSS in "contacts" application (oC-SA-2015-001)</h2>
        <p>25th March 2015</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not sanitising all user provided input, the "contacts" application shipped with the mentioned Nextcloud versions is vulnerable to multiple stored cross-site scripting attacks.<br/>The "contacts" application is enabled by default in the Nextcloud Community Edition but not shipped with the Nextcloud Enterprise Edition.</p>
<p>Successful exploitation requires that the adversary is able to access the contact group and share contacts with the victim. The victim then has to access the contacts application and edit the maliciously drafted contact.</p>
<p>While Nextcloud advises browsers to disable inline JavaScript execution this vulnerability is caused by a <code>eval</code> like construct which is currently allowed in our default Content-Security-Policy, thus this is effectively exploitable in any browser.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.5</strong> (CVE-2015-3011)</li>
<li>Nextcloud Server &lt; <strong>6.0.7</strong> (CVE-2015-3011)</li>
<li>Nextcloud Server &lt; <strong>5.0.19</strong> (CVE-2015-3011)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The user input is now properly sanitised before provided back to the user. Furthermore, with Nextcloud 8.2 the default Content-Security-Policy will forbid any <code>eval</code> like constructs by default as an additional layer of defense.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Hugh Davenport - All The Things Limited (contact@allthethings.co.nz) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
