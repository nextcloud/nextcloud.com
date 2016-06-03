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
        <h2>Information disclosure (oC-SA-2013-005)</h2>
        <p>20th February 2013</p>
        <p>Risk level: <strong>Low</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to the inclusion of the Amazon SDK testing suite an unauthenticated attacker is able to gain additional informations about the server including:</p>
<ul> <li>the PHP version</li> <li>the cURL version</li> <li>informations wether the following functions/modules are available:</li> <ul> <li>SimpleXML</li> <li>DOM</li> <li>SPL</li> <li>JSON</li> <li>PCRE</li> <li>File System Read/Write</li> <li>OpenSSL</li> <li>Zlib</li> <li>APC</li> <li>XCache</li> <li>Memcache</li> <li>Memcached</li> <li>PDO</li> <li>PDO-SQLite</li> <li>SQLite 2</li> <li>SQLite 3</li> </ul> <li>the following PHP settings:</li> <ul> <li>open_basedir</li> <li>safe_mode</li> <li>zend.enable_gc</li> </ul> <li>the server architecture (32bit/64bit)</li> </ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.12</strong> (CVE-2013-0302)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.12.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
