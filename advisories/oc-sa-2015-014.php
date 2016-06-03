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
        <h2>Information Exposure Through Directory Listing in the file scanner (oC-SA-2015-014)</h2>
        <p>24th August 2015</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v2 Base Score: 4 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:S/C:P/I:N/A:N)">AV:N/AC:L/Au:S/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/548.html">Information Exposure Through Directory Listing (CWE-548)</a></p>
        <h3>Description</h3>
        <p><p>Due to an incorrect usage of an Nextcloud internal file system function the passed path to the file scanner was resolved relatively. An authenticated adversary may thus be able to get a listing of directories (but not the containing files) existing on the filesystem. However, it is not possible to access any of these files.</p>
<p>For a more technical description please take a look at the <a href="https://www.syss.de/pentest-blog/news-detail/?tx_news_pi1%5Bnews%5D=140&tx_news_pi1%5Bcontroller%5D=News&tx_news_pi1%5Baction%5D=detail&cHash=3d9e93c60f57ab1885ac335974427a7f">advisory of the reporter</a>.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>8.1.1</strong> (CVE-2015-6500)</li>
<li>Nextcloud Server &lt; <strong>8.0.6</strong> (CVE-2015-6500)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The vulnerable component has been patched and <a href="https://github.com/nextcloud/core/issues/17906">will be replaced by a cron job in a future Nextcloud release</a></p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Martin Macht - SySS GmbH - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
