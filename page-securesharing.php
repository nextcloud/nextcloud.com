<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="page-header">
	<h1>Secure Sharing: protect your Intellectual Property with Nextcloud</h1>
</div>
<p>A recent Forrester report notes that unsecured and uncontrolled sharing of data opens the door to loss of version control, auditability, and control over innovative IP. They urge senior corporate management and IT professionals to shift away from ad-hoc solutions like email, outdated technologies like FTP or customer-grade file sync and share. Key requirements for a solution include:
<ul>
	<li>Enterprise-grade security, with governance and policies to protect valuable content and code</li>
	<li>Ease of use, working in familiar apps such as email to avoid disruption and adoption challenges</li>
	<li>APIs for integration with engineering, support desk, and other essential work processes</li>
</ul>
The goal should be to streamline productivity without sacrificing visibility into the distribution of digital knowledge assets.</p>
<h2>Concerns</h2>
<p>With 72% of the respondents agreeing with the statement, a key concern cited is the creation of new content silos. Having to migrate data and manage it in a new location, the goals of simplifying work flows while strengthening governance will not be achieved.</p>
<h2>Current usage</h2>
<p>Over half of the teams managed by respondents is reported to use public, consumer grade file sharing services and email to share code, patches and other intellectual property within the organization as well as with customers. Forrester notes that these solutions neither protect intelectual propertie and competitive advantage but also offer little control or rights management, nor audit and tracking controls.
<h2>Solutions</h2>
<p>By providing businesses an open source, on-premise file access, sync and share solution with powerful integration in existing infrastructure and storage solutions, Nextcloud makes data available to users wherever it is. Its familiar, easy to use interface allow users to work efficiently and be confident everybody has access to the same, latest version of data. Its enterprise capabilities ensure IT maintains full control over sharing, retention and availability of data within and across the boundaries of the organization.</p>
<h3>Wherever it is</h3>
<p>Modern organizations have data in a wide variety of silos like Sharepoint, Windows Network Drives, FTP sites and (often without knowledge of management) Dropbox or Google Drive. Nextcloud acts as a single file access, sync and share layer across all these storage systems, integrating with enterprise native account handling like LDAP or SAML.</p>
<h3>Under IT's control</h3>
<p>No matter the storage solution used, Nextcloud can ensure corporate policies are followed. Sharing can be restricted through the file firewall, filtering on user properties like location or group, or file properties like (automatically or manually) assigned tags, file type and more. With storage transparent to users, generic data can remain where it is while IT can make sure that business critical or compliance-relevant information is stored on internal infrastructure and does not leave the company.</p>

<!--<h2>Most important capabilities</h2>
</p>
  <table class="table table-striped">
    <tr>
      <td class="active" style="min-width:150px">Feature</td>
       <td class="info" style="min-width:300px"><i class="icon-users"></i>&nbsp;&nbsp;Private use</td>
      <td class="info" style="min-width:300px"><i class="icon-briefcase"></i>&nbsp;&nbsp;Abilities</td>
    </tr>
    <tr>
      <td class="active">Storage support</td>
      <td class="info">Private data from self, friends and family</td>
      <td class="info">Local storage, Windows Network Drive, (s)FTP, Sharepoint, S3, Swift, Google Drive, Dropbox</td>
    </tr>
    <tr>
      <td class="active">Sync clients</td>
      <td class="info">Web, Windows/Linux/Mac, Android, iOS</td>
    </tr>
    <tr>
      <td class="active">Sync clients</td>
      <td class="info">Web, Windows/Linux/Mac, Android, iOS</td>
    </tr>
  </table>-->

<div class="wrap pad-bottom">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
`		<h2>Contact us</h2>
                    Learn more about what Nextcloud has to offer your organization.
		    <form name="sales" method="post" action="securesharesubmit/">
			<p><label for="yourname">Your name<br>
			<input  type="text" name="yourname" maxlength="60" size="60"></label></p>
			<p><label for="email">Email<br>
			<input  type="text" name="email" maxlength="80" size="60"></label></p>
			<p><label for="organization">Organization<br>
			<input  type="text" name="organization" maxlength="100" size="60" placeholder=""></label></p>
			<p><label for="phone">Phone number<br>
			<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code"></label></p>
			<p><label for="comments">Your message<br />
			<textarea  name="comments" maxlength="2000" cols="60" rows="6" placeholder="Let us know how we can help you!"></textarea></label></p>
			<td colspan="2" style="text-align:center">
			<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
			<input type="submit" value=" Submit inquiry ">
			</form>
		</div>
	</div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>


