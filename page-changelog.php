<div class="page-header">
	<h1>Nextcloud Server Changelog</h1>
</div>
Go directly to the latest maintenance release of:
<ul>
<li><a href="#latest10">Nextcloud 10</a></li>
<li><a href="#latest9">Nextcloud 9</a></li>
</ul>

<a name="latest10"></a>

<h3 id="10-0-1">Version 10.0.1 <small>September 28 2016</small></h3>
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
	<li>Correct links to security & setup warnings (<a href="https://github.com/nextcloud/server/pull/1074">server/1074</a>)</li>
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

<h3 id="9-0-54">Version 9.0.54 <small>September 28 2016</small></h3>
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
