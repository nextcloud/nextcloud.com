<div class="page-header">
    <h1>Apply to be a listed Provider</h1>
</div>
<div class="row providers">
    <div class="span12">
		<p>To apply to be listed on the <a href="/providers">Nextcloud.org/providers</a> webpage as an open source provider, please complete the following form.</p>
		<form name="provider" method="post" action="providersubmit/">
			<p><label for="organization">Company/Organization<br>
			<input  type="text" name="organization" maxlength="80" size="60" placeholder=""></label></p>
			<p><label for="yourname">Contact name<br>
			<input  type="text" name="yourname" maxlength="60" size="60"></label></p>
			<p><label for="email">Contact Email<br>
			<input  type="text" name="email" maxlength="80" size="60"></label></p>
			<p><label for="phone">Phone number<br>
			<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code"></label></p>
			<p><label for="target_countries">Countries you intend to service<br>
			<input  type="text" name="target_countries" maxlength="40" size="60" placeholder="country codes separated by comma, like 'NL, FR, DE'"></label></p>
			<p><label for="hosting">What audience do you target, home users, businesses or both?<br>
			<select name="hosting">
				<option value="both">Both</option>
				<option value="organizations">Business</option>
				<option value="consumers">Home users</option>
			</select></label></p>
			<p><label for="free">Do you offer a free, not time-limited hosting tier?<br>
			<select name="free">
				<option value="nofreeplan">No</option>
				<option value="freeplan">Yes</option>
			</select></label></p>
			<p><label for="description">100 character description of your offering.<br />
			<textarea  name="description" maxlength="100" cols="60" rows="3" placeholder="Introduce your organization and offering in max 100 characters!"></textarea></label></p>
			<p><label for="image">URL to your logo, 600x150 pixels<br>
			<input  type="text" name="image" maxlength="80" size="60"></label></p>
			<td colspan="2" style="text-align:center">
			<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
			<input type="submit" value=" Submit ">
		</form>
	</div>
</div> 


<!--        <p>If you are interested in becoming an enterprise provider with a support contract from
            <a target="_blank" href="https://nextcloud.com">Nextcloud Inc</a> you can find more information
            <a target="_blank" href="https://nextcloud.com/products/service-provider">here</a>.</p>-->
