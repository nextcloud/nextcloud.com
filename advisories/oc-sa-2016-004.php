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
        <h2>Full installation path disclosure through error message (oC-SA-2016-004)</h2>
        <p>6th January 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v2 Base Score: 4 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:S/C:P/I:N/A:N)">AV:N/AC:L/Au:S/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/210.html">Information Exposure Through Self-generated Error Message (CWE-210)</a></p>
        <h3>Description</h3>
        <p><p>Nextcloud returns exception error messages to the user in two different places, allowing an authenticated adversary to gain information about the installation path of the Nextcloud instance. There is no further information disclosure.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>8.1.4</strong> (CVE-2016-1501)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/9ece45ca286c9194d7e07db25ea5af0596a5c380">core/9ece45ca286c9194d7e07db25ea5af0596a5c380</a></li>
<li><a href="https://github.com/nextcloud/files_texteditor/commit/5c40ba75d0b7b25daac96703a7f8aae1330438c9">files_texteditor/5c40ba75d0b7b25daac96703a7f8aae1330438c9</a></li>
</ul>
<li>Nextcloud Server &lt; <strong>8.0.9</strong> (CVE-2016-1501)</li>
<ul>
<li><a href="https://github.com/nextcloud/core/commit/6897cbebc05fb4daa6b81daaac9b181120fcf529">core/6897cbebc05fb4daa6b81daaac9b181120fcf529</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The vulnerable components have been adjusted to not leak the exception error message and thus not disclose the server installation path.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Md. Ishrat Shahriyar - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
