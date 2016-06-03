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
        <h2>Information Exposure Through Directory Listing in the file scanner (oC-SA-2016-002)</h2>
        <p>6th January 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v2 Base Score: 4 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:S/C:P/I:N/A:N)">AV:N/AC:L/Au:S/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/548.html">Information Exposure Through Directory Listing (CWE-548)</a></p>
        <h3>Description</h3>
        <p><p>Due to an incorrect usage of an Nextcloud internal file system function the passed path to the file scanner was resolved relatively. An authenticated adversary may thus be able to get a listing of files existing on the filesystem. However, it is not possible to access any of these files.</p>
<p>This causes a massive server load and thus an enumeration of the whole server content is unlikely due to the high risk of Denial of Service.</p>
<p>For a more technical description please <a href="https://www.syss.de/fileadmin/dokumente/Publikationen/Advisories/SYSS-2015-062.txt">take a look at the advisory of the reporter</a>.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>8.2.2</strong> (CVE-2016-1499)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/703b6d1803d776122ec0604cf0f3ab807033206e">core/703b6d1803d776122ec0604cf0f3ab807033206e</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>8.1.5</strong> (CVE-2016-1499)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/a4a7ee1761ddd1681e7a8d5868ae4a6c671495fa">core/a4a7ee1761ddd1681e7a8d5868ae4a6c671495fa</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>8.0.10</strong> (CVE-2016-1499)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/fab59179f1661da4862336fb8ea450c80def26d4">core/fab59179f1661da4862336fb8ea450c80def26d4</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The vulnerable vulnerable component has been patched and will be replaced by a cronjob in Nextcloud 9.0.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Dr. Erlijn van Genuchten - SySS GmbH - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
