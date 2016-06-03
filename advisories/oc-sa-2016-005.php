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
        <h2>Bypass of application specific PIN (oC-SA-2016-005)</h2>
        <p>7th April 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 5.9 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:P/AC:L/PR:L/UI:N/S:U/C:H/I:H/A:N">AV:P/AC:L/PR:L/UI:N/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/592.html">Authentication Bypass Issues (CWE-592)</a></p>
        <h3>Description</h3>
        <p><p>The Nextcloud Android application does support setting a PIN that has to be provided before the application can be opened. An attacker may remove the PIN by clearing the application data via the Android system settings. By doing that the application information would be removed while the authentication information would still stay on the system.</p>
<p>Thus an adversary with local access could bypass the PIN functionality. One should note that physical access often implies a high risk and encrypting the device as well as setting an additional PIN code on the device is highly recommended.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Mobile &lt; <strong>Android 1.9.1</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The passcode will also be required by the application after removing the application data.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Christian Schuerer-Waldheim - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
