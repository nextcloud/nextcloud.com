<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>SSRF protection bypass in calendar subscriptions (NC-SA-2020-014)</h2>
        <p>12th December 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 6.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:U/C:L/I:L/A:L">AV:N/AC:L/PR:L/UI:N/S:U/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/918.html">Server-Side Request Forgery (SSRF) (CWE-918)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/736867">736867</a></p>
        <h3>Description</h3>
        <p>A missing check for IPv4 nested inside IPv6 in Nextcloud server 17.0.1 allowed a SSRF when subscribing to a malicious calendar URL.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>17.0.2</strong> (CVE-2020-8138)</li>
<li>Nextcloud Server &lt; <strong>16.0.7</strong> (CVE-2020-8138)</li>
<li>Nextcloud Server &lt; <strong>15.0.14</strong> (CVE-2020-8138)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud server is upgraded to 17.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://security-consulting.icu/blog/" target="_blank" rel="noreferrer">Tim Coen - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
