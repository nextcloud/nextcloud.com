<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="page-header">
    <h1>Apply to be a listed Provider</h1>
</div>


<p>The Nextcloud community <a href="<?php echo home_url('providers') ?>">offers a list of providers for Nextcloud users</a>. No endorsement is implied by these listings. If you would like to have your organization added to this page, please follow these instructions carefully:
<ul>
	<li>Entries <strong>must</strong> be factual and relevant to Nextcloud. Generic services are not a good fit. Make sure that <strong>the link you submit contains a logo and a link to Nextcloud.</strong></li>
	<li>Your organization and the website you submit have to <strong>respect the <a href="<?php echo home_url('trademarks') ?>">Nextcloud trademark policy</a></strong>.</li>
        <li>Being listed does not apply approval, endorsement or affiliation with the Nextcloud GmbH, the community or project and your website and/or description should not, incorrectly, claim so.</li>
	<li>The <strong>description</strong> can be up to 150 characters. It should give an idea of the offered services so readers can quickly judge if an entry is of interest. It should not contain any detailed information about your pricing-policy or your offerings.<!-- Review the current list for the expected contents and format.--></li>
	<ul>
		<li><strong>Good</strong>: “We offer Swiss-hosted servers with daily off-site backup. You can install Nextcloud apps, Spreed.ME, Calendar and Contact included"</li>
		<li><strong>Bad</strong>: “Awesome, Inc. is a successful hosting firm founded on solid engineering principles and is a leading provider of open source solutions.”</li>
	(this does not explain what you offer and gives no reason for a visitor to click to your website)

    <li>We understand, that your target group might not be English users. However: <strong>Please use English for your description!</strong></li>
	</ul>
	<li>A <strong>logo</strong> has to be of the size of 600x150 pixels in png or jpg format.</li>
  <ul>
    <li>Your logo should not contain the Nextcloud-trademark.</li>
  </ul>
    <li>Submit a new entry if you made a mistake or if something has to change.</li>
    <li>Entries with invalid links may be removed. Please keep us informed about changes.</li>
    <li>Neither your description nor your logo should contain trademarks of Nextcloud or competitors.</li>
    <li>You are only allowed to select countries you are intend to service, in which your organization has an office, a datacenter or any actual business-relations.</li>
    <li>International hosters can use "all" as country, european hosters should use "eu", instead of mass-selecting countries.</li>
    <li>It can take up to 4 weeks to be listed, please understand that we do this as a courtesy to the Nextcloud ecosystem. Please try to avoid submitting duplicate entries.</li>

</ul></p>
<div class="row providers">
    <div class="span12">
		<p>To apply to be listed on the <a href="<?php echo home_url('providers') ?>">nextcloud.com/providers</a> page as an provider, please complete the following form.</p>
		<form name="provider" method="post" action="providersubmit/">
			<p><label for="organization">Company/Organization<br>
			<input  type="text" name="organization" maxlength="80" size="60" placeholder=""></label></p>
			<p><label for="yourname">Contact name<br>
			<input  type="text" name="yourname" maxlength="60" size="60"></label></p>
			<p><label for="email">Contact Email<br>
			<input  type="text" name="email" maxlength="80" size="60"></label></p>
			<p><label for="phone">Phone number<br>
			<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code"></label></p>
			<p><label for="hostingurl">URL to Nextcloud offering<br>
			<input  type="text" name="hostingurl" maxlength="80" size="60"></label></p>
			<p><label for="targetcountries">Countries you intend to service<br>
			<input  type="text" name="targetcountries" maxlength="40" size="60" placeholder="country codes separated by comma, like 'NL, FR, DE'"></label></p>
			<p><label for="hosting">What audience do you target? Home users, organizations or both?<br>
			<select name="hosting">
				<option value="both">Both</option>
				<option value="organizations">Organizations</option>
				<option value="consumers">Home users</option>
			</select></label></p>
			<p><label for="free">Do you offer a free, not time-limited hosting tier?<br>
			<select name="free">
				<option value="nofreeplan">No</option>
				<option value="freeplan">Yes</option>
			</select></label></p>
			<p><label for="description">150 character description of your offering.<br />
			<textarea  name="description" maxlength="150" cols="60" rows="4" placeholder="Introduce your organization and offering in max 150 characters!"></textarea></label></p>
			<p><label for="image">URL to your logo, 600x150 pixels, png or jpg<br>
			<input  type="text" name="image" maxlength="150" size="60"></label></p>
			<td colspan="2" style="text-align:center">
			<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
			<input type="submit" value=" Submit ">
		</form>
	</div>
</div>


<!--        <p>If you are interested in becoming an enterprise provider with a support contract from
            <a target="_blank" href="https://nextcloud.com">Nextcloud GmbH</a> you can find more information
            <a target="_blank" href="https://nextcloud.com/products/service-provider">here</a>.</p>-->
