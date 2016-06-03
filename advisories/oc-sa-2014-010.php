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
        <h2>Multiple XSS (oC-SA-2014-010)</h2>
        <p>24th May 2014</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not sanitising all user provided input the below mentioned Nextcloud versions are vulnerable against several <a href="https://cwe.mitre.org/data/definitions/79.html">XSS attack vectors</a>.</p>
<p>Nextcloud advises browsers to disable inline JavaScript execution due to the used Content-Security-Policy, this vulnerability is therefore likely not exploitable if you use a browser that <a href="http://caniuse.com/contentsecuritypolicy">fully supports</a> the current CSP standard.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.3</strong> (CVE-2014-3832, CVE-2014-3833)</li>
<li>Nextcloud Server &lt; <strong>5.0.16</strong> (CVE-2014-3833)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>Nextcloud offers the functions <code>p()</code> which encodes potential dangerous input using `htmlspecialchars()`. We have reviewed whether the potential insecure pendant <code>print_unescaped()</code> was used in other places and replaced unneeded occurrences with the safe variant.</p>
<p>This review helped us to discover vulnerabilities in the following components.</p>
<strong>stable6</strong><ul><li>Gallery (stored) (CVE-2014-3833)</li><li>Nextcloud core (stored + reflected) (CVE-2014-3833)</li><li>Documents (stored) (CVE-2014-3832)</li></ul><strong>stable5</strong><ul><li>Gallery (stored) (CVE-2014-3833)</li><li>Nextcloud core (stored + reflected) (CVE-2014-3833)</li></ul></p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
