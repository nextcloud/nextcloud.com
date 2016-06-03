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
        <h2>Login bypass when using user_ldap due to unauthenticated binds (oC-SA-2014-020)</h2>
        <p>25th November 2014</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>"user_ldap" (in the web-interface called "LDAP user and group backend") is an optional authentication backend for Nextcloud for using LDAP users and groups within the Nextcloud web application.</p>
<p>The Nextcloud team has discovered a vulnerability within the "user_ldap" application which, depending on the setup, might allow an attacker to effectively login without providing valid credentials. This security advisory should help you to understand whether this security bug affects you.</p>
<p>The <a href="http://tools.ietf.org/html/rfc4513#page-14">LDAP RFC 4153</a> specifies multiple simple authentication methods such as the "Unauthenticated Authentication Mechanism of Simple Bind":</p>
<p><blockquote>An LDAP client may use the unauthenticated authentication  of the simple Bind method to establish an anonymous authorization state by sending a Bind request with a name value (a distinguished name in LDAP string form [RFC4514] of non-zero length) and specifying the simple authentication choice containing a password value of zero length.</blockquote></p>
<p>Simplified, this means that LDAP servers are allowed to return successful binds when a valid username together with an empty password is provided to the LDAP server.</p>
<p>While the Nextcloud login routine checks for a non-empty password, there is no check for the so called <a href="https://en.wikipedia.org/wiki/Null_character">NULL byte</a>. Due to the fact that PHP is using the <code>ldap_bind</code> function from the C library libldap, a string such as <code>%00</code> will be considered non-empty by PHP, but empty as a C string. <br>If an attacker therefore provides <code>%00</code> as user password the LDAP server will effectively receive an "empty" password, which might result in a successful bind. Therefore, the Nextcloud instance will login the adversary as the defined user.</p>
<p>To be vulnerable the "Unauthenticated Authentication Mechanism of Simple Bind" of LDAP has to be enabled. Our research showed that this is the default on Microsoft Active Directory, and other implementations such as OpenLDAP have this <a href="http://www.openldap.org/doc/admin23/security.html">disabled by default</a>. Please notice that this information is provided without any warranty and guarantee of correctness. You're encouraged to verify on your own whether your LDAP server is accepting unauthenticated binds.</p>
<p>Furthermore, his specific attack vector <a href="http://git.php.net/?p=php-src.git;a=commitdiff;h=59900dd37f836cab2a96e449eace2fa97996aa85">has been patched by PHP</a> in versions PHP 5.5.12 and PHP 5.4.28. However, as this issue was not acknowledged as a security issue by PHP, this means it is very unlikely that the patch has been backported.  <br>The Nextcloud team wants to use this opportunity to note that we believe that this is mainly an issue with the specific PHP implementation.</p>
<p>If you're using the user_ldap backend in combination with a vulnerable PHP version we highly recommend upgrading immediately.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>7.0.3</strong> (CVE-2014-9043)</li>
<li>Nextcloud Server &lt; <strong>6.0.6</strong> (CVE-2014-9043)</li>
<li>Nextcloud Server &lt; <strong>5.0.18</strong> (CVE-2014-9043)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The Nextcloud login class has been modified to prevent passing of a NULL byte as password or username to authentication providers such as user_ldap.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
