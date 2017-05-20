<div class="page-header">
	<h1>Nextcloud Server Changelog</h1>
</div>
<p>Go directly to the latest maintenance release of:</p>
<ul>
<li><a href="#latest11">Nextcloud 11</a></li>
<li><a href="#latest10">Nextcloud 10 (End of Life in 2017-05)</a></li>
<li><a href="#latest9">Nextcloud 9 (End of Life since 2017-04)</a></li>
</ul>

<a name="latest11"></a>
<h3 id="11-0-3">Version 11.0.3 <small>April 24 2017</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.tar.bz2">nextcloud-11.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.zip">nextcloud-11.0.3.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.tar.bz2.md5">nextcloud-11.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.zip.md5">nextcloud-11.0.3.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.tar.bz2.sha256">nextcloud-11.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.zip.sha256">nextcloud-11.0.3.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.tar.bz2.sha512">nextcloud-11.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.zip.sha512">nextcloud-11.0.3.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.tar.bz2.asc">nextcloud-11.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.3.zip.asc">nextcloud-11.0.3.zip.asc</a></p>

<h4>Changes</h4>
<h5>Server</h5>
<ul>
 	<li>Use the correct principal for shared addressbooks (<a href="https://github.com/nextcloud/server/pull/3608">server/3608</a>)</li>
 	<li>Fix saving backup codes by using a correct data uri (<a href="https://github.com/nextcloud/server/pull/3652">server/3652</a>)</li>
 	<li>Update icewind/streams to 0.5.2 (<a href="https://github.com/nextcloud/server/pull/3293">server/3293</a>)</li>
 	<li>Fix string comparison and return docs (<a href="https://github.com/nextcloud/server/pull/3665">server/3665</a>)</li>
 	<li>Typecast shared mount's storage_id to int as documented + some refactor to avoid similar bugs (<a href="https://github.com/nextcloud/server/pull/3658">server/3658</a>)</li>
 	<li>Use a proper date format for transfer ownership (<a href="https://github.com/nextcloud/server/pull/3700">server/3700</a>)</li>
 	<li>DAV sharing permissions should not depend on the order (<a href="https://github.com/nextcloud/server/pull/3722">server/3722</a>)</li>
 	<li>Add new user agent of windows 10 dav backend (<a href="https://github.com/nextcloud/server/pull/3764">server/3764</a>)</li>
 	<li>Add back appstoreenabled config switch (<a href="https://github.com/nextcloud/server/pull/3767">server/3767</a>)</li>
 	<li>Call right function after sudo mode (<a href="https://github.com/nextcloud/server/pull/3820">server/3820</a>)</li>
 	<li>Dont allow empty wildcard search (<a href="https://github.com/nextcloud/server/pull/3842">server/3842</a>)</li>
 	<li>Remove single quotes around search query like in user search (<a href="https://github.com/nextcloud/server/pull/3849">server/3849</a>)</li>
 	<li>Fix mimetype detection on public uploads for the workflow engine (<a href="https://github.com/nextcloud/server/pull/3765">server/3765</a>)</li>
 	<li>Fix branding and show Nextcloud (<a href="https://github.com/nextcloud/server/pull/3969">server/3969</a>)</li>
 	<li>Fix reshare with user activity message (<a href="https://github.com/nextcloud/server/pull/3981">server/3981</a>)</li>
 	<li>Create correct VCard and return correct error codes (<a href="https://github.com/nextcloud/server/pull/4029">server/4029</a>)</li>
 	<li>Prevent migration from ownCloud 10 to Nextcloud 11 (<a href="https://github.com/nextcloud/server/pull/3415">server/3415</a>)</li>
 	<li>Make sure transparency is an integer when saving a calendar (<a href="https://github.com/nextcloud/server/pull/4167">server/4167</a>)</li>
 	<li>Make public links work with master key (<a href="https://github.com/nextcloud/server/pull/4207">server/4207</a>)</li>
 	<li>Don't try to render the avatars if avatars are disabled (<a href="https://github.com/nextcloud/server/pull/4214">server/4214</a>)</li>
 	<li>Reduce error message text (<a href="https://github.com/nextcloud/server/pull/4228">server/4228</a>)</li>
 	<li>Don't list on public calendar endpoints (<a href="https://github.com/nextcloud/server/pull/4229">server/4229</a>)</li>
 	<li>Fix upload of folders in Chrome (<a href="https://github.com/nextcloud/server/pull/4154">server/4154</a>)</li>
 	<li>Make sure blob columns are correctly converted as parameters (<a href="https://github.com/nextcloud/server/pull/4233">server/4233</a>)</li>
 	<li>Save the scope of an auth token in the session (<a href="https://github.com/nextcloud/server/pull/4225">server/4225</a>)</li>
 	<li>Take share by mail into consideration if we calculate the access list (<a href="https://github.com/nextcloud/server/pull/4242">server/4242</a>)</li>
 	<li>Also add the root of external storages to the file id list (<a href="https://github.com/nextcloud/server/pull/4237">server/4237</a>)</li>
 	<li>Fix LDAP description (<a href="https://github.com/nextcloud/server/pull/4238">server/4238</a>)</li>
 	<li>Remove the double password confirmation on changing cron (<a href="https://github.com/nextcloud/server/pull/4236">server/4236</a>)</li>
 	<li>Fix scheduling plugin on legacy caldav endpoint (<a href="https://github.com/nextcloud/server/pull/4235">server/4235</a>)</li>
 	<li>Directly fix invalid values of DTEND and DTSTART (<a href="https://github.com/nextcloud/server/pull/4234">server/4234</a>)</li>
 	<li>Make JobList::next() lock free (<a href="https://github.com/nextcloud/server/pull/4254">server/4254</a>)</li>
 	<li>Don't remove owner property for public calendars (<a href="https://github.com/nextcloud/server/pull/4272">server/4272</a>)</li>
 	<li>Add capabilities for share by mail (<a href="https://github.com/nextcloud/server/pull/4251">server/4251</a>)</li>
 	<li>Dont use the permissions mask while scanning (<a href="https://github.com/nextcloud/server/pull/4278">server/4278</a>)</li>
 	<li>Add missing maintenance plugin to new DAV endpoint (<a href="https://github.com/nextcloud/server/pull/4290">server/4290</a>)</li>
 	<li>Fix bug with shared_by for own calendars if shared (<a href="https://github.com/nextcloud/server/pull/4301">server/4301</a>)</li>
 	<li>Translation string corrected > 1 user (<a href="https://github.com/nextcloud/server/pull/4377">server/4377</a>)</li>
</ul>
<h5>Activity</h5>
<ul>
 	<li>Fix activities for "Files drop" on external storages (<a href="https://github.com/nextcloud/activity/pull/118">activity/118</a>)</li>
</ul>
<h5>User_SAML</h5>
<ul>
 	<li>Bump to php-saml 2.10.5 (<a href="https://github.com/nextcloud/user_saml/pull/100">user_saml/100</a>)</li>
</ul>
<h5>Logreader</h5>
<ul>
 	<li>Small screen layout improvements (<a href="https://github.com/nextcloud/logreader/commit/2bcd915969386ceb77c7f91dfd5fc19fd3212346%5D">logreader/2bcd915969386ceb77c7f91dfd5fc19fd3212346</a></li>
 	<li>Fix log filtering (<a href="https://github.com/nextcloud/logreader/commit/4095dfc62dcceb3c59a3f581baa5589737d0e6f3">logreader/4095dfc62dcceb3c59a3f581baa5589737d0e6f3</a>)</li>
 	<li>Greatly speedup log iteration (<a href="https://github.com/nextcloud/logreader/commit/71a4c6849641f821e80d96674c57a69fe7a8aa9e">logreader/71a4c6849641f821e80d96674c57a69fe7a8aa9e</a>)</li>
 	<li>Search more rows (<a href="https://github.com/nextcloud/logreader/commit/b9d00b5599ac8a76862895266f1c23096391aad8">logreader/b9d00b5599ac8a76862895266f1c23096391aad8</a>)</li>
 	<li>Stop iterating if we dont have a valid file handle (<a href="https://github.com/nextcloud/logreader/commit/a87a8e653ecae5efef6342e645b98f2878219c87">logreader/a87a8e653ecae5efef6342e645b98f2878219c87</a>)</li>
 	<li>Don't return a LogIterator on a broken handle (<a href="https://github.com/nextcloud/logreader/commit/39069108f99d463b1cb8bc944f3ef24324b9f43d">logreader/39069108f99d463b1cb8bc944f3ef24324b9f43d</a>)</li>
 	<li>More robust log iteration (<a href="https://github.com/nextcloud/logreader/commit/c0eb04d55bf1dee94ef523dae0e3b0e6afc272a6">logreader/c0eb04d55bf1dee94ef523dae0e3b0e6afc272a6</a>)</li>
 	<li>Use proper iso date format (<a href="https://github.com/nextcloud/logreader/commit/13a31181a6d72d084797a71f49f2c5edee8c8dae">logreader/13a31181a6d72d084797a71f49f2c5edee8c8dae</a>)</li>
 	<li>Automatically try to fix some common escape errors from copy-pasted log entries (<a href="https://github.com/nextcloud/logreader/commit/031db2a7f9b9f8cee42acf6eae7d993d31d4660a">logreader/031db2a7f9b9f8cee42acf6eae7d993d31d4660a</a>)</li>
 	<li>Fix stack trace parsing of incorrectly escaped logentries (<a href="https://github.com/nextcloud/logreader/commit/538667770edfdd48374ef33e9c15498ed98ece60">logreader/538667770edfdd48374ef33e9c15498ed98ece60</a>)</li>
 	<li>Highlight entries from the same request when clicking on an entry (<a href="https://github.com/nextcloud/logreader/commit/2d1ccd0e4cca32220fcbe0b4d79d1cd23f0e73a5">logreader/2d1ccd0e4cca32220fcbe0b4d79d1cd23f0e73a5</a>)</li>
 	<li>Fix copy paste info searchfield (<a href="https://github.com/nextcloud/logreader/commit/0e91b2f46649a720feb7c3b6b8266b8657db5574">logreader/0e91b2f46649a720feb7c3b6b8266b8657db5574</a>)</li>
 	<li>Fix reset search after 0 results (<a href="https://github.com/nextcloud/logreader/commit/50bec8ecf7edd81cfb96a35089283c0d879b41f3">logreader/50bec8ecf7edd81cfb96a35089283c0d879b41f3</a>)</li>
 	<li>Allow searching for requestId and user (<a href="https://github.com/nextcloud/logreader/commit/7f84e55bb4a1e4086ab0918a6bf58ad3885bbd91">logreader/7f84e55bb4a1e4086ab0918a6bf58ad3885bbd91</a>)</li>
 	<li>Allow searching in url (<a href="https://github.com/nextcloud/logreader/commit/7833d97cf85fd351d2f7550d67d21bd0c2a815f4">logreader/7833d97cf85fd351d2f7550d67d21bd0c2a815f4</a>)</li>
 	<li>Fix infinite scroll (<a href="https://github.com/nextcloud/logreader/commit/cbe874c6c068b9156ad8456edf31d112da40cbc9">logreader/cbe874c6c068b9156ad8456edf31d112da40cbc9</a>)</li>
 	<li>Dont show loading indicator if we already have entries (<a href="https://github.com/nextcloud/logreader/commit/d26a08dc0540126177e8d20c3e243b44c5a399c4">logreader/d26a08dc0540126177e8d20c3e243b44c5a399c4</a>)</li>
</ul>
<h5>Gallery</h5>
<ul>
 	<li>Fix upload after core changes (<a href="https://github.com/nextcloud/gallery/commit/b4ac4429841cfe2b7ea260dfb37fcde25580143c">gallery/b4ac4429841cfe2b7ea260dfb37fcde25580143c</a>)</li>
 	 <li>Update JavaScript libraries (<a href="https://github.com/nextcloud/gallery/pull/247">gallery/247</a>)</li>
</ul>

<h3 id="11-0-2">Version 11.0.2 <small>February 27 2017</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.tar.bz2">nextcloud-11.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.zip">nextcloud-11.0.2.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.tar.bz2.md5">nextcloud-11.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.zip.md5">nextcloud-11.0.2.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.tar.bz2.sha256">nextcloud-11.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.zip.sha256">nextcloud-11.0.2.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.tar.bz2.sha512">nextcloud-11.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.zip.sha512">nextcloud-11.0.2.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.tar.bz2.asc">nextcloud-11.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.2.zip.asc">nextcloud-11.0.2.zip.asc</a></p>

<h4>Changes</h4>
<h5>Server</h5>
<ul>
<li>Use login name to fix password confirm with ldap users (<a href="https://github.com/nextcloud/server/pull/2953">server/2953</a>)</li>
<li>Change the row-format before changing the collation (<a href="https://github.com/nextcloud/server/pull/3063">server/3063</a>)</li>
<li>Generate correct path for owner and use the display name (<a href="https://github.com/nextcloud/server/pull/3080">server/3080</a>)</li>
<li>Markdown support for app descriptions (<a href="https://github.com/nextcloud/server/pull/3117">server/3117</a>)</li>
<li>Fix style in comment (<a href="https://github.com/nextcloud/server/pull/3143">server/3143</a>)</li>
<li>Escape the name for the jquery selector (<a href="https://github.com/nextcloud/server/pull/3138">server/3138</a>)</li>
<li>Define spreed calls (<a href="https://github.com/nextcloud/server/pull/3115">server/3115</a>)</li>
<li>LDAP Backend OCS Api (<a href="https://github.com/nextcloud/server/pull/3213">server/3213</a>)</li>
<li>Fix Sharing app description (<a href="https://github.com/nextcloud/server/pull/3397">server/3397</a>)</li>
<li>Fix shared-as-busy events for owner (<a href="https://github.com/nextcloud/server/pull/3363">server/3363</a>)</li>
<li>Use correct theming when returning the defaults (<a href="https://github.com/nextcloud/server/pull/3399">server/3399</a>)</li>
<li>Filter out sensitive appconfig values (<a href="https://github.com/nextcloud/server/pull/3400">server/3400</a>)</li>
<li>Add transifex config for sharebymail (<a href="https://github.com/nextcloud/server/pull/3423">server/3423</a>)</li>
<li>Update the email in the accounts table as well (<a href="https://github.com/nextcloud/server/pull/3411">server/3411</a>)</li>
<li>Don't log the password on confirmPassword when LDAP throws an exception (<a href="https://github.com/nextcloud/server/pull/3414">server/3414</a>)</li>
<li>Make sure ownCloud 8.2 activities also can get displayed (<a href="https://github.com/nextcloud/server/pull/3412">server/3412</a>)</li>
<li>Popovermenu backport (<a href="https://github.com/nextcloud/server/pull/3286">server/3286</a>)</li>
<li>Set vendor during install (<a href="https://github.com/nextcloud/server/pull/3426">server/3426</a>)</li>
<li>Make sure the file information is available when sending the email (<a href="https://github.com/nextcloud/server/pull/3433">server/3433</a>)</li>
<li>Add profile data to provisioning api (<a href="https://github.com/nextcloud/server/pull/3259">server/3259</a>)</li>
<li>Fix detection of the new iOS app (<a href="https://github.com/nextcloud/server/pull/3431">server/3431</a>)</li>
<li>Add integration tests for legacy DAV endpoints (<a href="https://github.com/nextcloud/server/pull/3445">server/3445</a>)</li>
<li>Make sure invalid images don't flood the log file (<a href="https://github.com/nextcloud/server/pull/3440">server/3440</a>)</li>
<li>Fix printing backup code (<a href="https://github.com/nextcloud/server/pull/3510">server/3510</a>)</li>
<li>Fix cookie name (nctoken instead of octoken) (<a href="https://github.com/nextcloud/server/pull/3511">server/3511</a>)</li>
<li>LDAP's checkPassword should only catch when a user was not found (<a href="https://github.com/nextcloud/server/pull/3493">server/3493</a>)</li>
<li>Return unknown free space from nullstorage (<a href="https://github.com/nextcloud/server/pull/3508">server/3508</a>)</li>
<li>Fix for address book data lost when any user receiving a share is deleted (<a href="https://github.com/nextcloud/server/pull/3499">server/3499</a>)</li>
<li>Rename database password toggle (<a href="https://github.com/nextcloud/server/pull/3500">server/3500</a>)</li>
<li>Popovermenu files css fix (<a href="https://github.com/nextcloud/server/pull/3494">server/3494</a>)</li>
<li>Add screensharing icon (<a href="https://github.com/nextcloud/server/pull/3481">server/3481</a>)</li>
<li>Fix misleading wording: searching is affected, not user access (<a href="https://github.com/nextcloud/server/pull/3560">server/3560</a>)</li>
<li>Backport of Fix Broken UUID Attribute Detection (<a href="https://github.com/nextcloud/server/pull/3528">server/3528</a>)</li>
</ul>

<h5>Activity</h5>
<ul>
<li>Make sure integer like names are still strings (<a href="https://github.com/nextcloud/activity/pull/103">activity/103</a>)</li>
<li>Fix activities for public uploads (<a href="https://github.com/nextcloud/activity/pull/113">activity/113</a>)</li>
<li>Show the parent as target when the file was not renamed (<a href="https://github.com/nextcloud/activity/pull/114">activity/114</a>)</li>
<li>Fix activities for "Files drop" on external storages (<a href="https://github.com/nextcloud/activity/pull/118">activity/118</a>)</li>
</ul>

<h5>SAML &amp; SSO</h5>
<ul>
<li>Setup account later (<a href="https://github.com/nextcloud/user_saml/pull/79">user_saml/79</a>)</li>
</ul>

<h5>Serverinfo</h5>
<ul>
<li>Fix SQL syntax error on MariaDB 10.0.27 and 10.1.19 (<a href="https://github.com/nextcloud/serverinfo/pull/77">serverinfo/77</a>)</li>
<li>Don't throw an error when /proc/meminfo is not readable (<a href="https://github.com/nextcloud/serverinfo/pull/76">serverinfo/76</a>)</li>
</ul>

<h5>Survey_Client</h5>
<ul>
<li>Fix problem when checking size with dash in DB name (<a href="https://github.com/nextcloud/survey_client/pull/50">survey_client/50</a>)</li>
</ul>

<h3 id="11-0-1">Version 11.0.1 <small>January 16 2017</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.tar.bz2">nextcloud-11.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.zip">nextcloud-11.0.1.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.tar.bz2.md5">nextcloud-11.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.zip.md5">nextcloud-11.0.1.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.tar.bz2.sha256">nextcloud-11.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.zip.sha256">nextcloud-11.0.1.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.tar.bz2.sha512">nextcloud-11.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.zip.sha512">nextcloud-11.0.1.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.tar.bz2.asc">nextcloud-11.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.1.zip.asc">nextcloud-11.0.1.zip.asc</a></p>

<h4>Changes</h4>
<h5>Server</h5>
<ul>
<li>Safari CSPv3 support is sub-par (<a href="https://github.com/nextcloud/server/pull/2669">server/2699</a>)</li>
<li>Fix legacy DAV endpoint (<a href="https://github.com/nextcloud/server/pull/2685">server/2685</a>)</li>
<li>Use unmasked permissions in shared scanner (<a href="https://github.com/nextcloud/server/pull/2696">server/2696</a>)</li>
<li>Do not connect to database before creating it (<a href="https://github.com/nextcloud/server/pull/2703">server/2703</a>)</li>
<li>Fix todo list activity filter (<a href="https://github.com/nextcloud/server/pull/2746">server/2746</a>)</li>
<li>Changed anchor in settings page (<a href="https://github.com/nextcloud/server/pull/2805">server/2805</a>)</li>
<li>Also check in cron for old php version (<a href="https://github.com/nextcloud/server/pull/2809">server/2809</a>)</li>
<li>Add DAV repair step to fix calendar data (<a href="https://github.com/nextcloud/server/pull/2807">server/2807</a>)</li>
<li>Only log as info when we can not create a new DB user (<a href="https://github.com/nextcloud/server/pull/2750">server/2750</a>)</li>
<li>Fix wording for apps mgmt buttons (<a href="https://github.com/nextcloud/server/pull/2751">server/2751</a>)</li>
<li>Use a form so firefox doesn't try to save the space as a password (<a href="https://github.com/nextcloud/server/pull/2804">server/2804</a>)</li>
<li>Fix overwriting parameter (<a href="https://github.com/nextcloud/server/pull/2825">server/2825</a>)</li>
<li>Applied security hardening in SwiftMailer (<a href="https://github.com/nextcloud/server/pull/2882">core/2882</a>)</li>
<li>Don't set Content-Disposition header if one already exists (<a href="https://github.com/nextcloud/server/pull/2949">server/2949</a>)</li>
<li>Don't link to the oC forum (<a href="https://github.com/nextcloud/server/pull/2988">server/2988</a>)</li>
<li>Set redirect_url on 2FA challenge page (<a href="https://github.com/nextcloud/server/pull/2981">server/2981</a>)</li>
<li>Dont write a certificate bundle if the shipped ca bundle is empty (<a href="https://github.com/nextcloud/server/pull/2994">server/2994</a>)</li>
<li>Remove group restrictions when those are not allowed anymore (<a href="https://github.com/nextcloud/server/pull/2980">server/2980</a>)</li>
</ul>

<h5>Activity</h5>
<ul>
<li>Update docs and samples (<a href="https://github.com/nextcloud/activity/pull/92">activity/92</a>)</li>
<li>Make sure the preview URLs are absolute (<a href="https://github.com/nextcloud/activity/pull/91">activity/91</a>)</li>
</ul>

<h5>User_SAML</h5>
<ul>
<li>Update SAML library (<a href="https://github.com/nextcloud/user_saml/pull/64">user_saml/64)</a>)</li>
<li>Make the JS work with sudo mode  (<a href="https://github.com/nextcloud/user_saml/pull/71">user_saml/71)</a>)</li>
<li>Enabled strict mode (<a href="https://github.com/nextcloud/user_saml/pull/72">user_saml/75)</a>)</li>
</ul>

<h5>files_retention</h5>
<ul>
<li>Delete job if tag not found (<a href="https://github.com/nextcloud/files_retention/pull/18">files_retention/18</a>)</li>
</ul>

<p>Also included is a precautionary update for a recent <a href="https://legalhackers.com/advisories/SwiftMailer-Exploit-Remote-Code-Exec-CVE-2016-10074-Vuln.html">SwiftMailer security issue.</a></p>
<p><a href="https://nextcloud.com/?p=1486">Release blog with more information</a></p>

<h3 id="11-0-0">Version 11.0.0 <small>December 13 2016</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.tar.bz2">nextcloud-11.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.zip">nextcloud-11.0.0.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.tar.bz2.md5">nextcloud-11.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.zip.md5">nextcloud-11.0.0.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.tar.bz2.sha256">nextcloud-11.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.zip.sha256">nextcloud-11.0.0.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.tar.bz2.sha512">nextcloud-11.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.zip.sha512">nextcloud-11.0.0.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.tar.bz2.asc">nextcloud-11.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.0.zip.asc">nextcloud-11.0.0.zip.asc</a></p>

<h4>Changes</h4>
<p>Over 1000 changes were merged, among them:
<ul>
	<li>Security improvements
	<ul>
		<li>support for cutting edge browser security features CSP 3.0 and Same-site Cookies</li>
		<li>support for Kerberos authentication and Two-factor Authentication providers based on Universal 2nd Factor and Time-based One-Time Password</li>
		<li>expanded brute force protection to all API access points</li>
		<li>more secure Federation through use of SSL/TLS</li>
		<li>access rights on app-specific login tokens</li>
		<li>Our new app store automatically checks apps and enforces signatures</li>
	</ul></li>
	<li>Scalability and performance improvements
	<ul>
		<li>Reduce database load up to 80%, speed up small files transfer up to 60%</li>
		<li>Introduce Multi-bucket support for better scalability on Object Stores</li>
		<li>Improved preview handling, including no more duplicates for each user</li>
		<li>Faster Collabora Online startup</li>
		<li>Faster loading of large folders</li>
	</ul></li>
	<li>Apache Solr based Full Text Search with Nextant app</li>
	<li>Next gen Federation supports optionally storing info in global 'addressbook' for easy finding of users</li>
	<li>Experimental Spreed app integrates audio/video chat</li>
	<li>Many more smaller changes like 'move file' option in menu, scrollable pdf previews and more</li>
</ul>

<p><a href="https://nextcloud.com/blog/nextcloud-11-sets-new-standard-for-security-and-scalability/">Release announcement with overview about features and changes</a></p>
<p><a href="https://github.com/nextcloud/server/milestone/6?closed=1">See a full list of integrated pull requests here.</a></p>

<a name="latest10"></a>
<h3 id="10-0-5">Version 10.0.5 <small>April 24 2017</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.tar.bz2">nextcloud-10.0.5.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.zip">nextcloud-10.0.5.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.tar.bz2.md5">nextcloud-10.0.5.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.zip.md5">nextcloud-10.0.5.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.tar.bz2.sha256">nextcloud-10.0.5.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.zip.sha256">nextcloud-10.0.5.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.tar.bz2.sha512">nextcloud-10.0.5.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.zip.sha512">nextcloud-10.0.5.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.tar.bz2.asc">nextcloud-10.0.5.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.5.zip.asc">nextcloud-10.0.5.zip.asc</a></p>

<h4>Changes</h4>
<h5>Server</h5>
<ul>
 	<li>Fix typo in advertisment footer (<a href="https://github.com/nextcloud/server/pull/3664">server/3664</a>)</li>
 	<li>Fix branding and show Nextcloud (<a href="https://github.com/nextcloud/server/pull/3970">server/3970</a>)</li>
 	<li>Make sure transparency is an integer when saving a calendar (<a href="https://github.com/nextcloud/server/pull/4168">server/4168</a>)</li>
 	<li>Reduce error message text (<a href="https://github.com/nextcloud/server/pull/4227">server/4227</a>)</li>
 	<li>Fix LDAP description (<a href="https://github.com/nextcloud/server/pull/4239">server/4239</a>)</li>
</ul>
<h5>User_SAML</h5>
<ul>
 	<li>Bump to php-saml 2.10.5 (<a href="https://github.com/nextcloud/user_saml/pull/101">user_saml/101</a>)</li>
</ul>

<h5>Gallery</h5>
<ul>
 	 <li>Bump to newest DOMPurify release (<a href="https://github.com/nextcloud/gallery/pull/249">gallery/249</a>)</li>
</ul>

<h3 id="10-0-4">Version 10.0.4 <small>February 27 2017</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.tar.bz2">nextcloud-10.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.zip">nextcloud-10.0.4.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.tar.bz2.md5">nextcloud-10.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.zip.md5">nextcloud-10.0.4.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.tar.bz2.sha256">nextcloud-10.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.zip.sha256">nextcloud-10.0.4.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.tar.bz2.sha512">nextcloud-10.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.zip.sha512">nextcloud-10.0.4.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.tar.bz2.asc">nextcloud-10.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.4.zip.asc">nextcloud-10.0.4.zip.asc</a></p>

<h4>Changes</h4>
<h5>Server</h5>
<ul>
<li>Fix Sharing app description (<a href="https://github.com/nextcloud/server/pull/3398">server/3398</a></li>
<li>Replace ownCloud with Nextcloud in welcome.txt (<a href="https://github.com/nextcloud/server/pull/3404">server/3404</a>)</li>
<li>Set vendor during install (<a href="https://github.com/nextcloud/server/pull/3427">server/3427</a>)</li>
<li>Fix detection of the new iOS app (<a href="https://github.com/nextcloud/server/pull/3432">server/3432</a>)</li>
<li>Add integration tests for legacy DAV endpoints (<a href="https://github.com/nextcloud/server/pull/3446">server/3446</a>)</li>
<li>Make sure invalid images don't flood the log file (<a href="https://github.com/nextcloud/server/pull/3441">server/3441</a>)</li>
<li>Fix misleading wording: searching is affected, not user access (<a href="https://github.com/nextcloud/server/pull/3561">server/3561</a>)</li>
</ul>

<h5>Serverinfo</h5>
<ul>
<li>Fix SQL syntax error on MariaDB 10.0.27 and 10.1.19 (<a href="https://github.com/nextcloud/serverinfo/pull/78">serverinfo/78</a>)</li>
</ul>

<h5>Survey_Client</h5>

<ul>
<li>Fix problem when checking size with dash in DB name (<a href="https://github.com/nextcloud/survey_client/pull/51">survey_client/51</a>)</li>
</ul>

<h3 id="10-0-3">Version 10.0.3 <small>January 16 2017</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.tar.bz2">nextcloud-10.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.zip">nextcloud-10.0.3.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.tar.bz2.md5">nextcloud-10.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.zip.md5">nextcloud-10.0.3.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.tar.bz2.sha256">nextcloud-10.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.zip.sha256">nextcloud-10.0.3.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.tar.bz2.sha512">nextcloud-10.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.zip.sha512">nextcloud-10.0.3.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.tar.bz2.asc">nextcloud-10.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.3.zip.asc">nextcloud-10.0.3.zip.asc</a></p>

<h4>Changes</h4>
<h5>Server</h5>
<ul>
<li>Return ETag and OC-ETag in case of move (<a href="https://github.com/nextcloud/server/pull/2462">server/2462</a>)</li>
<li>Throw an exception when a shipped app was not replaced before the update (<a href="https://github.com/nextcloud/server/pull/2464">server/2464</a>)</li>
<li>Use proper ALTER ROLE syntax (<a href="https://github.com/nextcloud/server/pull/2591">server/2591</a>)</li>
<li>Lower the role name before using it (<a href="https://github.com/nextcloud/server/pull/2592">server/2592</a>)</li>
<li>Get correct L10N for Settings Manager (<a href="https://github.com/nextcloud/server/pull/2667">server/2667</a>)</li>
<li>Perform CalDAV and CardDAV tests against old endpoint (<a href="https://github.com/nextcloud/server/pull/2684">server/2684</a>)</li>
<li>Use unmasked permissions in shared scanner (<a href="https://github.com/nextcloud/server/pull/2697">server/2697</a>)</li>
<li>Do not connect to database before creating it (<a href="https://github.com/nextcloud/server/pull/2702">server/2702</a>)</li>
<li>Make sure that header is always positioned at the top (<a href="https://github.com/nextcloud/server/pull/2755">server/2755</a>)</li>
<li>Also check in cron for old php version (<a href="https://github.com/nextcloud/server/pull/2810">server/2810</a>)</li>
<li>Fix overwriting parameter (<a href="https://github.com/nextcloud/server/pull/2826">server/2826</a>)</li>
<li>Don't link to the oC forum (<a href="https://github.com/nextcloud/server/pull/2989">server/2989</a>)</li>
<li>Applied security hardening in SwiftMailer (<a href="https://github.com/nextcloud/server/pull/2884">core/2884</a>)</li>
</ul>

<h5>User_SAML</h5>
<ul>
<li>Update SAML library (<a href="https://github.com/nextcloud/user_saml/pull/65">user_saml/65)</a>)</li>
<li>Enabled strict mode (<a href="https://github.com/nextcloud/user_saml/pull/72">user_saml/74)</a>)</li>
</ul>

<p>Precautionary update for a recent <a href="https://legalhackers.com/advisories/SwiftMailer-Exploit-Remote-Code-Exec-CVE-2016-10074-Vuln.html">SwiftMailer security issue.</a></p>
<p><a href="https://nextcloud.com/?p=1486">Release blog with more information</a></p>

<h3 id="10-0-2">Version 10.0.2 <small>December 9 2016</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.tar.bz2">nextcloud-10.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.zip">nextcloud-10.0.2.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.tar.bz2.md5">nextcloud-10.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.zip.md5">nextcloud-10.0.2.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.tar.bz2.sha256">nextcloud-10.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.zip.sha256">nextcloud-10.0.2.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.tar.bz2.sha512">nextcloud-10.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.zip.sha512">nextcloud-10.0.2.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.tar.bz2.asc">nextcloud-10.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.2.zip.asc">nextcloud-10.0.2.zip.asc</a></p>

<h4>Changes</h4>
<p>Some 90 changes were merged, among them:
<ul>
	<li>fix compatibility with older Firefox versions</li>
	<li>check what PHP version you run before upgrade</li>
	<li>make file system work with some specific settings</li>
	<li>fix small UI glitches</li>
	<li>translation improvements</li>
	<li>and more.</li>
</ul>
This release fixes a number of security issues, details of which you can expect after our usual 2 week waiting period. We suggest upgrading before that time!</p>
<p><a href="https://github.com/nextcloud/server/issues?q=milestone%3A%22Nextcloud+10.0.2%22+is%3Aclosed">See a full list of integrated pull requests here.</a></p>

<h3 id="10-0-1">Version 10.0.1 <small>September 28 2016</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.tar.bz2">nextcloud-10.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.zip">nextcloud-10.0.1.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.tar.bz2.md5">nextcloud-10.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.zip.md5">nextcloud-10.0.1.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.tar.bz2.sha256">nextcloud-10.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.zip.sha256">nextcloud-10.0.1.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.tar.bz2.sha512">nextcloud-10.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.zip.sha512">nextcloud-10.0.1.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.tar.bz2.asc">nextcloud-10.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.1.zip.asc">nextcloud-10.0.1.zip.asc</a></p>


<h4>Core</h4>
<h5>Enhancements</h5>
<ul>
	<li>Password policy is now also applied on user creation (<a href="https://github.com/nextcloud/server/pull/1379">server/1379</a>)</li>
	<li>Add theming information to capabilities for the clients (<a href="https://github.com/nextcloud/server/pull/1280">server/1280</a>)</li>
	<li>Allow space for federated share id search (<a href="https://github.com/nextcloud/server/pull/1191">server/1191</a>)</li>
	<li>DAV: Return data-fingerprint always when asked (<a href="https://github.com/nextcloud/server/pull/1176">server/1176</a>)</li>
	<li>Users page uses lazy multiselect group dropdowns (<a href="https://github.com/nextcloud/server/pull/1174">server/1174</a>)</li>
	<li>Allow the config dir to be specified via environment variable (<a href="https://github.com/nextcloud/server/pull/1081">server/1081</a>)</li>
</ul>

<h5>Bug fixes</h5>
<ul>
	<li>Don\'t print exception message in HTML (<a href="https://github.com/nextcloud/server/pull/1343">server/1343</a>)</li>
	<li>Filter more mimetypes for VCF images (<a href="https://github.com/nextcloud/server/pull/1340">server/1340</a>)</li>
	<li>Make OS X Finder work with WebDAV again (<a href="https://github.com/nextcloud/server/pull/1331">server/1331</a>)</li>
	<li>Only match for Same-Site Cookie instead of all, makes Nextcloud work with OVH again (<a href="https://github.com/nextcloud/server/pull/1331">server/1331</a>)</li>
	<li>Fix setting quota to default or unlimited (<a href="https://github.com/nextcloud/server/pull/1327">server/1327</a>)</li>
	<li>Show download button instaed of the updater (<a href="https://github.com/nextcloud/server/pull/1324">server/1324</a>)</li>
	<li>Fix required permissions for WebDAV move and copy (<a href="https://github.com/nextcloud/server/pull/1320">server/1320</a>)</li>
	<li>Improve detection of file types in file firewall (<a href="https://github.com/nextcloud/server/pull/1319">server/1319</a>)</li>
	<li>Use proper endpoint for updater server (<a href="https://github.com/nextcloud/server/pull/1312">server/1312</a>)</li>
	<li>Correctly remove admin sections and settings when not required (<a href="https://github.com/nextcloud/server/pull/1305">server/1305</a>)</li>
	<li>Move navigation entries without order to the end (<a href="https://github.com/nextcloud/server/pull/1299">server/1299</a>)</li>
	<li>Allow to call status.php before the instance is installed (<a href="https://github.com/nextcloud/server/pull/1288">server/1288</a>)</li>
	<li>Do not allow linebreaks and null bytes in paths (<a href="https://github.com/nextcloud/server/pull/1231">server/1231</a>)</li>
	<li>Fix vendor name in PHP version warning (<a href="https://github.com/nextcloud/server/pull/1209">server/1209</a>)</li>
	<li>Correctly handle multi-values when converting VCards to arrays (<a href="https://github.com/nextcloud/server/pull/1207">server/1207</a>)</li>
	<li>Prevent error with orphaned shares when updating user mount cache (<a href="https://github.com/nextcloud/server/pull/1200">server/1200</a>)</li>
	<li>Check if the file isReadable() before sending a (cached) preview (<a href="https://github.com/nextcloud/server/pull/1184">server/1184</a>)</li>
	<li>Allow downgrades of maintenance accross vendors (<a href="https://github.com/nextcloud/server/pull/1183">server/1183</a>)</li>
	<li>Fix oracle support of external storage app (<a href="https://github.com/nextcloud/server/pull/1181">server/1181</a>)</li>
	<li>Before a user is getting scanned the database connection is reestablished (<a href="https://github.com/nextcloud/server/pull/1159">server/1159</a>)</li>
	<li>Make sure file list files config always exists (<a href="https://github.com/nextcloud/server/pull/1157">server/1157</a>)</li>
	<li>Fix issues with user settings and case-insensitivity (<a href="https://github.com/nextcloud/server/pull/1156">server/1156</a>)</li>
	<li>Prevent parse error on editing an HTML comment (<a href="https://github.com/nextcloud/server/pull/1140">server/1140</a>)</li>
	<li>Remove reading PATH_INFO from server variable (<a href="https://github.com/nextcloud/server/pull/1104">server/1104</a>)</li>
	<li>Correct links to security and setup warnings (<a href="https://github.com/nextcloud/server/pull/1074">server/1074</a>)</li>
	<li>Several files_external user enhancements (<a href="https://github.com/nextcloud/server/pull/902">server/902</a>)</li>
	<li>Fixed database conversion problem if a CardDAV entry had more than two components (<a href="https://github.com/nextcloud/server/pull/1543">server/1543</a>)</li>
	<li>Folder drag was glitching in Firefox (<a href="https://github.com/nextcloud/server/pull/1528">server/1528</a>)</li>
</ul>

<h4>Updater</h4>
<h5>Enhancements</h5>
<ul>
	<li>A new updater has been added improving the updater experience (https://github.com/nextcloud/updater)</li>
</ul>

<h4>Files Access Control</h4>
<h5>Enhancements</h5>
<ul>
	<li>Add link to documentation (<a href="https://github.com/nextcloud/files_accesscontrol/pull/38">files_accesscontrol/38</a>)</li>
</ul>

<h4>Survey Client</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Fix dismiss "send usage report" notification (<a href="https://github.com/nextcloud/survey_client/pull/32">survey_client/32</a>)</li>
</ul>

<h4>Server Info</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Fix size calculation for MariaDB (<a href="https://github.com/nextcloud/serverinfo/pull/35">serverinfo/35</a>)</li>
</ul>

<h4>Gallery</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Improved error handling (<a href="https://github.com/nextcloud/gallery/pull/157">gallery/157</a> / <a href="https://github.com/nextcloud/gallery/pull/156">gallery/156</a>)</li>
</ul>

<h4>Template Editor</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Fix error message when restoring example template (<a href="https://github.com/nextcloud/templateeditor/pull/11">templateeditor/11</a>)</li>
</ul>

<h4>Trashbin</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Remove error message for files without preview (<a href="https://github.com/nextcloud/server/pull/1397">server/1397</a>)</li>
	<li>Detect proper mimetype for files (<a href="https://github.com/nextcloud/server/pull/1367">server/1367</a>)</li>
</ul>

<h4>Sharing</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Notification mails for shares are sent again (<a href="https://github.com/nextcloud/server/pull/1394">server/1394</a>)</li>
	<li>Use original permissions for share owner (<a href="https://github.com/nextcloud/server/pull/1391">server/1391</a>)</li>
</ul>

<h4>Encryption</h4>
<h5>Enhancements</h5>
<ul>
	<li>Skip shared files if files get decrypted only for a specific user (<a href="https://github.com/nextcloud/server/pull/1345">server/1345</a>)</li>
</ul>

<h4>External User Backend</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Detect anonymous auth on the server and ignore it (<a href="https://github.com/nextcloud/apps/pull/9">apps/9</a>)</li>
</ul>

<h4>Theming</h4>
<h5>Enhancements</h5>
<ul>
	<li>Add icon for theming app (<a href="https://github.com/nextcloud/server/pull/1294">server/1294</a>)</li>
	<li>Show loading spinner while uploading files (<a href="https://github.com/nextcloud/server/pull/1186">server/1186</a>)</li>
	<li>Improve performance of the theming app by optimizing images and caching headers (<a href="https://github.com/nextcloud/server/pull/1126">server/1126</a>)</li>
</ul>

<h4>SAML</h4>
<h5>Enhancements</h5>
<ul>
	<li>Additional configuration switch to use application specific passwords for desktop clients</li>
</ul>

<a name="latest9"></a>
<h3 id="9-0-58">Version 9.0.58 <small>April 24 2017</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.tar.bz2">nextcloud-9.0.58.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.zip">nextcloud-9.0.58.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.tar.bz2.md5">nextcloud-9.0.58.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.zip.md5">nextcloud-9.0.58.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.tar.bz2.sha256">nextcloud-9.0.58.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.zip.sha256">nextcloud-9.0.58.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.tar.bz2.sha512">nextcloud-9.0.58.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.zip.sha512">nextcloud-9.0.58.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.tar.bz2.asc">nextcloud-9.0.58.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.58.zip.asc">nextcloud-9.0.58.zip.asc</a></p>

<h4>Changes</h4>

<h5>Server</h5>
<ul>
 	<li>Replace unecessary unescaped prints with print (<a href="https://github.com/nextcloud/server/pull/4226">server/4226</a>)</li>
</ul>
<h5>User_SAML</h5>
<ul>
 	<li>Bump to php-saml 2.10.5 (<a href="https://github.com/nextcloud/user_saml/pull/102">user_saml/102</a>)</li>
</ul>
</div>
<h5>Gallery</h5>
<ul>
 	 <li>Bump to newest DOMPurify release (<a href="https://github.com/nextcloud/gallery/pull/250">gallery/250</a>)</li>
</ul>

<h3 id="9-0-57">Version 9.0.57 <small>February 27 2017</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.tar.bz2">nextcloud-9.0.57.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.zip">nextcloud-9.0.57.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.tar.bz2.md5">nextcloud-9.0.57.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.zip.md5">nextcloud-9.0.57.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.tar.bz2.sha256">nextcloud-9.0.57.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.zip.sha256">nextcloud-9.0.57.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.tar.bz2.sha512">nextcloud-9.0.57.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.zip.sha512">nextcloud-9.0.57.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.tar.bz2.asc">nextcloud-9.0.57.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.57.zip.asc">nextcloud-9.0.57.zip.asc</a></p>

<h4>Changes</h4>
<h5>Server</h5>
<ul>
<li>Make sure invalid images don't flood the log file (<a href="https://github.com/nextcloud/server/pull/3442">server/3442</a>)</li>
<li>Fix misleading wording: searching is affected, not user access. (<a href="https://github.com/nextcloud/server/pull/3563">server/3563</a>)</li>
</ul>

<h3 id="9-0-56">Version 9.0.56 <small>January 16 2017</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.tar.bz2">nextcloud-9.0.56.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.zip">nextcloud-9.0.56.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.tar.bz2.md5">nextcloud-9.0.56.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.zip.md5">nextcloud-9.0.56.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.tar.bz2.sha256">nextcloud-9.0.56.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.zip.sha256">nextcloud-9.0.56.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.tar.bz2.sha512">nextcloud-9.0.56.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.zip.sha512">nextcloud-9.0.56.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.tar.bz2.asc">nextcloud-9.0.56.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.56.zip.asc">nextcloud-9.0.56.zip.asc</a></p>

<h4>Changes</h4>
<ul>
<li>Applied security hardening in SwiftMailer (<a href="https://github.com/nextcloud/server/pull/2883">core/2883</a>)</li>
</ul>
<h5>User_SAML</h5>
<ul>
<li>Update SAML library (<a href="https://github.com/nextcloud/user_saml/pull/66">user_saml/66)</a>)</li>
<li>Enabled strict mode (<a href="https://github.com/nextcloud/user_saml/pull/72">user_saml/73)</a>)</li>
</ul>

<p>Precautionary update for a recent <a href="https://legalhackers.com/advisories/SwiftMailer-Exploit-Remote-Code-Exec-CVE-2016-10074-Vuln.html">SwiftMailer security issue.</a></p>
<p><a href="https://nextcloud.com/?p=1486">Release blog with more information</a></p>


<h3 id="9-0-55">Version 9.0.55 <small>December 9 2016</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.tar.bz2">nextcloud-9.0.55.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.zip">nextcloud-9.0.55.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.tar.bz2.md5">nextcloud-9.0.55.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.zip.md5">nextcloud-9.0.55.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.tar.bz2.sha256">nextcloud-9.0.55.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.zip.sha256">nextcloud-9.0.55.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.tar.bz2.sha512">nextcloud-9.0.55.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.zip.sha512">nextcloud-9.0.55.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.tar.bz2.asc">nextcloud-9.0.55.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.55.zip.asc">nextcloud-9.0.55.zip.asc</a></p>

<h4>Changes</h4>
<p>About 30 bug fixes and security improvements were merged. We will release details on the security improvements after our usual 2 week waiting period. We suggest upgrading before that time!</p>
<p><a href="https://github.com/nextcloud/server/issues?q=milestone%3A%22Nextcloud+9.0.55%22+is%3Aclosed">See a full list of integrated pull requests here.</a></p>

<h3 id="9-0-54">Version 9.0.54 <small>September 28 2016</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.tar.bz2">nextcloud-9.0.54.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.zip">nextcloud-9.0.54.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.tar.bz2.md5">nextcloud-9.0.54.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.zip.md5">nextcloud-9.0.54.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.tar.bz2.sha256">nextcloud-9.0.54.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.zip.sha256">nextcloud-9.0.54.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.tar.bz2.sha512">nextcloud-9.0.54.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.zip.sha512">nextcloud-9.0.54.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.tar.bz2.asc">nextcloud-9.0.54.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-9.0.54.zip.asc">nextcloud-9.0.54.zip.asc</a></p>

<h4>Core</h4>
<h5>Enhancements</h5>
<ul>
	<li>Add app icons for comments and tags (<a href="https://github.com/nextcloud/server/pull/589">server/589</a>)</li>
	<li>Log class name, ID only is hard to debug (<a href="https://github.com/nextcloud/server/pull/793">server/793</a>)</li>
	<li>Prevent installation with PHP 7.1 (<a href="https://github.com/nextcloud/server/pull/826">server/826</a>)</li>
	<li>Add files drop capability for clients (<a href="https://github.com/nextcloud/server/pull/888">server/888</a>)</li>
	<li>Allow to retrieve the quota itself via the provisioning api (<a href="https://github.com/nextcloud/server/pull/901">server/901</a>)</li>
	<li>Users page uses lazy multiselect group dropdowns (<a href="https://github.com/nextcloud/server/pull/1175">server/1175</a>)</li>
	<li>Fix oracle support of external storage app (<a href="https://github.com/nextcloud/server/pull/1182">server/1182</a>)</li>
</ul>

<h5>Bug fixes</h5>
<ul>
	<li>Support PHP 7 for streamed downloads (<a href="https://github.com/nextcloud/server/pull/463">server/463</a>)</li>
	<li>Cast share ID to string (<a href="https://github.com/nextcloud/server/pull/469">server/469</a>)</li>
	<li>Fix the HTML encoding when uploading a folder in FF when using french (<a href="https://github.com/nextcloud/server/pull/491">server/491</a>)</li>
	<li>Fix GitHub link in personal and admin settings version note (<a href="https://github.com/nextcloud/server/pull/546">server/546</a>)</li>
	<li>Fix searchbox background (<a href="https://github.com/nextcloud/server/pull/623">server/623</a>)</li>
	<li>Compare libxml version against loaded version (<a href="https://github.com/nextcloud/server/pull/629">server/629</a>)</li>
	<li>Adding quota plugin to new DAV endpoint (<a href="https://github.com/nextcloud/server/pull/655">server/655</a>)</li>
	<li>Added white download icons (<a href="https://github.com/nextcloud/server/pull/690">server/690</a>)</li>
	<li>getJailedPath expects to have a trailing slash (<a href="https://github.com/nextcloud/server/pull/818">server/818</a>)</li>
	<li>Ensure the user exists before calling a method on it  (<a href="https://github.com/nextcloud/server/pull/911">server/911</a>)</li>
	<li>Fix "Undefined index" when the values do not exist (<a href="https://github.com/nextcloud/server/pull/933">server/933</a>)</li>
	<li>Add feedback for password change (<a href="https://github.com/nextcloud/server/pull/1004">server/1004</a>)</li>
	<li>Prevent parse error on editing an HTML comment (<a href="https://github.com/nextcloud/server/pull/1141">server/1141</a>)</li>
	<li>Before a user is getting scanned the database connection is reestablished (<a href="https://github.com/nextcloud/server/pull/1149">server/1149</a>)</li>
	<li>lastInsertId requires the prefix in Oracle (<a href="https://github.com/nextcloud/server/pull/1152">server/1152</a>)</li>
	<li>Fix paths returned by \OC\Files\Storage\Shared hooks  (<a href="https://github.com/nextcloud/server/pull/1153">server/1153</a>)</li>
	<li>Fix link share expiration date enforcement (<a href="https://github.com/nextcloud/server/pull/1155">server/1155</a>)</li>
	<li>Correctly handle multi-values when converting VCards to array (<a href="https://github.com/nextcloud/server/pull/1208">server/1208</a>)</li>
	<li>Do not allow linebreaks and null bytes in paths (<a href="https://github.com/nextcloud/server/pull/1232">server/1232</a>)</li>
	<li>Fix layout of success message and text in the updater (<a href="https://github.com/nextcloud/server/pull/1313">server/1313</a>)</li>
	<li>Fix required permissions for webdav move and copy (<a href="https://github.com/nextcloud/server/pull/1321">server/1321</a>)</li>
	<li>Show an download button instead of the updater (<a href="https://github.com/nextcloud/server/pull/1325">server/1325</a>)</li>
	<li>Allow to call status.php before the instance is installed (<a href="https://github.com/nextcloud/server/pull/1289">server/1289</a>)</li>
	<li>Don\'t print exception message in HTML (<a href="https://github.com/nextcloud/server/pull/1344">server/1344</a>)</li>
</ul>

<h4>Updater</h4>
<h5>Enhancements</h5>
<ul>
	<li>A new updater has been added improving the updater experience (https://github.com/nextcloud/updater)</li>
</ul>

<h4>Activity</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Make sure an empty file name doesn\'t break the stream (<a href="https://github.com/nextcloud/activity/pull/8">activity/8</a>)</li>
	<li>Fix broken avatar of remote users in sidebar (<a href="https://github.com/nextcloud/activity/pull/17">activity/17</a>)</li>
	<li>Use the last known user instead of erroring (<a href="https://github.com/nextcloud/activity/pull/24">activity/24</a>)</li>
</ul>

<h4>Theming</h4>
<h5>Enhancements</h5>
<ul>
	<li>Support changing the page title (<a href="https://github.com/nextcloud/server/pull/372">server/372</a>)</li>
	<li>Add icon for the theming app (<a href="https://github.com/nextcloud/server/pull/1295">server/1295</a>)</li>
	<li>Add theming information to capabilities for the clients (<a href="https://github.com/nextcloud/server/pull/1281">server/1281</a>)</li>
</ul>

<h5>Bug fixes</h5>
<ul>
	<li>Fix maintenance mode (<a href="https://github.com/nextcloud/server/pull/442">server/442</a>)</li>
	<li>Make sure we try to autoload the class (<a href="https://github.com/nextcloud/server/pull/549">server/549</a>)</li>
	<li>Make theming work with pretty URLs (<a href="https://github.com/nextcloud/server/pull/370">server/370</a>)</li>
	<li>Use proper name on emails (<a href="https://github.com/nextcloud/server/pull/406">server/406</a>)</li>
	<li>Fix theme logo position (<a href="https://github.com/nextcloud/server/pull/570">server/570</a>)</li>
</ul>

<h4>Trashbin</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Fix error message while restoring all files (<a href="https://github.com/nextcloud/server/pull/552">server/552</a>)</li>
</ul>

<h4>LDAP</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Fix undefined OfflineUser::composeAndStoreDisplayName() (<a href="https://github.com/nextcloud/server/pull/587">server/587</a>)</li>
	<li>Prevent setting email and triggering events at login time (<a href="https://github.com/nextcloud/server/pull/594">server/594</a>)</li>
</ul>

<h4>Sharing</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Do not allow to delete/update group shares as a group member (<a href="https://github.com/nextcloud/server/pull/707">server/707</a>)</li>
	<li>Use original permissions for share owner (<a href="https://github.com/nextcloud/server/pull/1392">server/1392</a>)</li>
</ul>

<h4>Gallery</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Fix share link button label (<a href="https://github.com/nextcloud/gallery/pull/8">gallery/8</a>)</li>
	<li>Improved error handling (<a href="https://github.com/nextcloud/gallery/pull/158">gallery/158</a> / <a href="https://github.com/nextcloud/gallery/pull/159">gallery/159</a>)</li>
</ul>

<h4>Texteditor</h4>
<h5>Enhancements</h5>
<ul>
	<li>Open JSON files with the text editor (<a href="https://github.com/nextcloud/files_texteditor/pull/9">files_texteditor/9</a>)</li>
</ul>

<h4>External User Backend</h4>
<h5>Bug fixes</h5>
<ul>
	<li>Detect anonymous auth on the server and ignore it (<a href="https://github.com/nextcloud/apps/pull/10">apps/10</a>)</li>
</ul>
