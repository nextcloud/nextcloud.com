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
        <h2>Mounted Dropbox storage allows "Dropbox.com" to access any file (oC-SA-2015-005)</h2>
        <p>24th June 2015</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v2 Base Score: 4.6 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:H/Au:M/C:C/I:N/A:N)">AV:N/AC:H/Au:M/C:C/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/552.html">Files or Directories Accessible to External Parties (CWE-552)</a></p>
        <h3>Description</h3>
        <p><p>A bug in the SDK used to connect Nextcloud against the Dropbox server might allow the owner of "Dropbox.com" to gain access to any files on the Nextcloud server if an external Dropbox storage was mounted.</p>
<p>This was caused by a feature of PHP (which has been turned off per default as of PHP 5.6.0) in the handling of POST values sent to the remote host. If a value was prefixed with <code>@</code> the content of the value was replaced with the file name specified after the <code>@</code>.</p>
<p>Effectively this might allow "dropbox.com" to read any files on the server if the following requirements are met:</p>
<ul><li>Server is running a PHP version below 5.6.0</li><li>An external Dropbox storage has been mounted in Nextcloud</li><li>An authenticated user sends a specially crafted request to the mounted storage</li></ul><p>Per default Nextcloud does not include any Dropbox mounts.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>6.0.8</strong> (CVE-2015-4715)</li>
<li>Nextcloud Server &lt; <strong>7.0.6</strong> (CVE-2015-4715)</li>
<li>Nextcloud Server &lt; <strong>8.0.4</strong> (CVE-2015-4715)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The Nextcloud server component is now refusing to handle any files containing a <code>@</code> on the Dropbox external storage. This is no regression as handling files containing said character was not reliably possible before as well.</p>
<p>The upcoming Nextcloud Server 8.1 will contain a new version of the used library to connect to Dropbox which handles files with <code>@</code> correctly.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
