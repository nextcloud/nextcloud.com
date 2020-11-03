<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
                <h1>Nextcloud Server Changelog</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
    <p>We recommend you follow our <a href="<?php echo home_url('release-channels') ?>">Release Channels</a> to always have the latest and most secure Nextcloud Server version which fits your needs.</p>
    Go directly to the latest maintenance release of:
    <ul>
    <li><a href="#latest20">Nextcloud 20</a></li>
    <li><a href="#latest19">Nextcloud 19</a></li>
    <li><a href="#latest18">Nextcloud 18</a></li>
    <li><a href="#latest17">Nextcloud 17 (unsupported!)</a></li>
    <li><a href="#latest16">Nextcloud 16 (unsupported!)</a></li>
    <li><a href="#latest15">Nextcloud 15 (unsupported!)</a></li>
    <li><a href="#latest14">Nextcloud 14 (unsupported!)</a></li>
    <li><a href="#latest13">Nextcloud 13 (unsupported!)</a></li>
    <li><a href="#latest12">Nextcloud 12 (unsupported!)</a></li>
    <li><a href="#latest11">Nextcloud 11 (unsupported!)</a></li>
    <li><a href="#latest10">Nextcloud 10 (unsupported!)</a></li>
    <li><a href="#latest9">Nextcloud 9 (unsupported!)</a></li>
    </ul>


<a name="latest20"></a>

<h3 id="20-0-1">Version 20.0.1 <small>October 24 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.tar.bz2">nextcloud-20.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.zip">nextcloud-20.0.1.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.tar.bz2.md5">nextcloud-20.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.zip.md5">nextcloud-20.0.1.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.tar.bz2.sha256">nextcloud-20.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.zip.sha256">nextcloud-20.0.1.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.tar.bz2.sha512">nextcloud-20.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.zip.sha512">nextcloud-20.0.1.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.tar.bz2.asc">nextcloud-20.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.1.zip.asc">nextcloud-20.0.1.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/23170">Add mount point to quota warning message (server#23170)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23185">Dont hold a transaction during the move to trash (server#23185)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23192">Fix dashboard rendering if accessibility app is disabled (server#23192)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23195">Fix legacy update notifications (server#23195)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23203">Fix the user email issue while creating a user (server#23203)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23205">Make BeforeTemplateRenderedEvent aware of the actual response (server#23205)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23207">Fix array to string conversion on event search (server#23207)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23211">Also check the path based mimetype for flow rule checks (server#23211)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23213">Allow configuring the activity update interval of token (server#23213)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23216">Don't influence toastify errors and always use white (server#23216)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23220">Only run the query to get the account data once (server#23220)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23235">Fix appid in translation (server#23235)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23254">Use the correct l10n for activities (server#23254)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23256">Make sure getUsersFavoritingObject can be run without a user (server#23256)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23271">Fix sidebar updateTabs method (server#23271)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23281">Fix the user remove from group in UI (server#23281)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23288">Fix dashboard statuses sort (server#23288)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23336">Fix database password visibility toggle (server#23336)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23375">Add template typing to the QBMapper (server#23375)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23383">Add Psalm type for the bootstrap registration context (server#23383)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23384">Fix adminpass strengthify margin (server#23384)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23388">Fix typo 'shared' (server#23388)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23390">Expose CLOUD federation for local users in the recent addressbook (server#23390)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23395">Stop transfer of ownership between same users (server#23395)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23403">VersioningTest.php:729 is unreliable and should be disabled (server#23403)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23420">Encode requesttoken for logout url in auto logout (server#23420)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23422">Fix undefined index and consequential damages in versions code (server#23422)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23426">Allow using saved login credentials for notify (server#23426)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23438">Add option to disable notify self check (server#23438)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23446">Annotate IContainer so Psalm knows what resove and query return (server#23446)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23458">Fix app sidebar mountpoint (server#23458)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23466">Bump @nextcloud/vue to 2.6.9 (server#23466)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23472">Add psalm types for the migration schema closure (server#23472)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23473">Remove posix_getpwuid and compare only userid (server#23473)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23480">Use own psalm instead of a global one (server#23480)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23491">Add psalm types for the event dispatcher (server#23491)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23498">SharedMountTest.php:367 is unreliable (server#23498)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23503">Provide log statements for SCSS cache (server#23503)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23510">SCSSCacher - Lock should not be removed (server#23510)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23513">Clear cached app config while waiting for the SCSSCache lock to return (server#23513)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23514">Fixes potential passing of null to getUserGroupIds (server#23514)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23548">Add local version of escapeHTML (server#23548)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23570">LDAP: when nesting is not enabled, the group filter can be applied right away (server#23570)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23621">Disable unreliable app-files.feature:108 (server#23621)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23622">Disable unreliable app-files-sharing.feature:338 (server#23622)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/507">Set current user when parsing activities for digest (activity#507)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/511">Fix mail table columns to match the activity table (activity#511)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/515">Fix the comments added to the activity table (activity#515)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/517">GetUsersFavoritingObject is moved to the manager (activity#517)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/244">Remove close button (files_pdfviewer#244)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/245">Update phpunit.yml (files_pdfviewer#245)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/247">Hide the download button by default (files_pdfviewer#247)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/249">Better debug output on public pages (files_pdfviewer#249)</a></li>
        <li><a href="https://github.com/nextcloud/photos/pull/510">Pass preview availability too (photos#510)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/307">FIx loading speed of dashboard by loading the data async (recommendations#307)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/245">Fix Memory (#240) (serverinfo#245)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/247">Fix num_shares_link_no_password for NC >= 15 (serverinfo#247)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/252">Fix FreeBSD Interface Exception (serverinfo#252)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/627">Fix player controls on Firefox (viewer#627)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/629">Make div display: none (viewer#629)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/633">Fix theming chaining (viewer#633)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/643">Fix cypress branch (viewer#643)</a></li>
</ul>

<h3 id="20-0-0">Version 20.0.0<small> October 3 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.tar.bz2">nextcloud-20.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.zip">nextcloud-20.0.0.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.tar.bz2.md5">nextcloud-20.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.zip.md5">nextcloud-20.0.0.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.tar.bz2.sha256">nextcloud-20.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.zip.sha256">nextcloud-20.0.0.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.tar.bz2.sha512">nextcloud-20.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.zip.sha512">nextcloud-20.0.0.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.tar.bz2.asc">nextcloud-20.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-20.0.0.zip.asc">nextcloud-20.0.0.zip.asc</a></p>

<h4>Changes</h4>
<p>The three biggest features we introduce with Nextcloud 20 are:</p>
<ul>
<li>🏁 Our new dashboard provides a great starting point for the day with over a dozen widgets ranging from Twitter and Github to Moodle and Zammad already available</li>
<li>🔍 Search was unified, bringing search results of Nextcloud apps as well as external services like Gitlab, Jira and Discourse in one place</li>
<li>🗨 Talk introduced bridging to other platforms including MS Teams, Slack, IRC, Matrix and a dozen others</li>
</ul>
👾 Some other improvements we want to highlight include:
<ul>
<li>📢 Notifications and Activities were brought together, making sure you won’t miss anything important</li>
<li>🟢 We added a ‘status’ setting so you can communicate to other users what you are up to</li>
<li>🗨 Talk also brings dashboard and search integration, emoji picker, upload view, camera and microphone settings, mute and more</li>
<li>📅 Calendar integrates in dashboard and search, introduced a list view and design improvements</li>
<li>📫 Mail introduces threaded view, mailbox management and more</li>
<li>🗂 Deck integrates with dashboard and search, introduces Calendar integration, modal view for card editing and series of smaller improvements</li>
<li>↕ Flow adds push notification and webhooks so other web apps can easily integrate with Nextcloud</li>
<li>🗒 Text introduced direct linking to files in Nextcloud</li>
<li>🗄 Files lets you add a description to public link shares</li>
</ul>
<p><a href="https://nextcloud.com/blog/nextcloud-hub-20-debuts-dashboard-unifies-search-and-notifications-integrates-with-other-technologies/">Read the full announcement on our blog.</a></p>
<p>An exhaustive changelog would be unreasonably long, but one can always see our entire development history in github. For the core Server repository, see for example <a href="https://github.com/nextcloud/server/milestone/117?closed=1">here the 783 pull requests merged for Milestone 20.</a></p>

<a name="latest19"></a>

<h3 id="19-0-4">Version 19.0.4 <small>October 9 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.tar.bz2">nextcloud-19.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.zip">nextcloud-19.0.4.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.tar.bz2.md5">nextcloud-19.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.zip.md5">nextcloud-19.0.4.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.tar.bz2.sha256">nextcloud-19.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.zip.sha256">nextcloud-19.0.4.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.tar.bz2.sha512">nextcloud-19.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.zip.sha512">nextcloud-19.0.4.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.tar.bz2.asc">nextcloud-19.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.4.zip.asc">nextcloud-19.0.4.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/22591">Better error message when blocked by access control (server#22591)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22630">LDAP: remove unused methods and DB values (server#22630)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22652">Fix installing on Oracle (server#22652)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22713">Do not fail if share for mountpoint is no longer available (server#22713)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22720">Don't use SELECT DISTINCT when to_char() is used in a WHERE statement (server#22720)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22742">Allow additional personal settings via normal registration (server#22742)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22745">Fix detecting text/x-php mimetype and secure mimetype mapping (server#22745)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22752">Check if var debugMode exists (server#22752)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22753">Fix reading empty files from objectstorage (server#22753)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22769">Clarify PHP warning in admin settings (server#22769)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22775">Makes LDAP's group updater dispatch type events (server#22775)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22776">Fix s3 doesDirectoryExist check for empty directories (server#22776)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22778">Don't fail if copying a file of 0 byte size (server#22778)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22784">Use user mount with matching shared storage only (server#22784)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22804">Fix share transfer of single files and on the transfered node (server#22804)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22840">Mitigate encoding issue with user principal uri (server#22840)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22892">Only get the permissions from the share source if it's not already cached (server#22892)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22893">Revoke secsignid (server#22893)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22899">Fix: file quota was not applied in all cases (server#22899)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22904">Make sure that getConfig is still called for browsers that do not support CSPv3 (server#22904)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22926">Improve handling of out of space errors for smb (server#22926)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22941">Fix settings chunk loading (server#22941)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22988">Flow: do not hide "matches" and "does not match" checkers (server#22988)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23002">Never copy the share link when the password is forced (server#23002)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23049">Fix numeric folders throwing on markDirty (server#23049)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23086">Sync all users to the system addresssbook (server#23086)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23087">Show federation and email results also with exact user match unless c… (server#23087)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23090">Do not match sharees on an empty email address (server#23090)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23093">Generate exception to log on php errors (server#23093)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23137">Fix ignoring the correct settings files for translations (server#23137)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23186">Dont hold a transaction during the move to trash (server#23186)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23196">Fix legacy update notifications (server#23196)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23217">Don't influence toastify errors and always use white (server#23217)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23221">Only run the query to get the account data once (server#23221)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23263">19.0.4 final (server#23263)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/512">Fix mail table columns to match the activity table (activity#512)</a></li>
        <li><a href="https://github.com/nextcloud/logreader/pull/389">Bugfix): Protect LogIterator.php from empty array indices (logreader#389)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/760">Also check responses of 400 errors and so delete unknown devices (notifications#760)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/248">Fix num_shares_link_no_password for NC >= 15 (serverinfo#248)</a></li>
        <li><a href="https://github.com/nextcloud/text/pull/1003">Only return rich workspace when depth is 1 or greater (text#1003)</a></li>
        <li><a href="https://github.com/nextcloud/text/pull/1036">IE11 madness (text#1036)</a></li>
        <li><a href="https://github.com/nextcloud/text/pull/1054">Check if error is ocs response on workspace request (text#1054)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/613">Update .l10nignore to exclude bundled JS files (viewer#613)</a></li>
</ul>

<h3 id="19-0-3">Version 19.0.3 <small>September 10 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.tar.bz2">nextcloud-19.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.zip">nextcloud-19.0.3.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.tar.bz2.md5">nextcloud-19.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.zip.md5">nextcloud-19.0.3.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.tar.bz2.sha256">nextcloud-19.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.zip.sha256">nextcloud-19.0.3.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.tar.bz2.sha512">nextcloud-19.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.zip.sha512">nextcloud-19.0.3.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.tar.bz2.asc">nextcloud-19.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.3.zip.asc">nextcloud-19.0.3.zip.asc</a></p>

<h4>Changes</h4>
<ul>
    <li><a href="https://github.com/nextcloud/server/pull/22410">Fix possible leaking scope in Flow (server#22410)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22427">Combine body-login rules in theming and fix twofactor and guest styling on bright colors (server#22427)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22442">Show better quota warning for group folders and external storage (server#22442)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22448">Add php docs build script (server#22448)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22503">Fix clicks on actions menu of non opaque file rows in acceptance tests (server#22503)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22515">Fix writing BLOBs to postgres with recent contacts interaction (server#22515)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22519">Set the mount id before calling storage wrapper (server#22519)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22521">Fix S3 error handling (server#22521)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22537">Only disable zip64 if the size is known (server#22537)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22553">Change free space calculation (server#22553)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22560">Do not keep the part file if the forbidden exception has no retry set (server#22560)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22569">Fix app password updating out of bounds (server#22569)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22579">Use the correct root to determinate the webroot for the resource (server#22579)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22581">Upgrade icewind/smb to 3.2.7 (server#22581)</a></li>
    <li><a href="https://github.com/nextcloud/notifications/pull/732">Bump elliptic from 6.4.1 to 6.5.3 (notifications#732)</a></li>
    <li><a href="https://github.com/nextcloud/privacy/pull/489">Fixes regression that prevented you from toggling the encryption flag (privacy#489)</a></li>
    <li><a href="https://github.com/nextcloud/serverinfo/pull/229">Match any non-whitespace character in filesystem pattern (serverinfo#229)</a></li>
    <li><a href="https://github.com/nextcloud/text/pull/1001">Catch StorageNotAvailable exceptions (text#1001)</a></li>
    <li><a href="https://github.com/nextcloud/text/pull/1017">Harden read only check on public endpoints (text#1017)</a></li>
    <li><a href="https://github.com/nextcloud/text/pull/1020">Harden check when using token from memcache (text#1020)</a></li>
    <li><a href="https://github.com/nextcloud/text/pull/1029">Sessionid is an int (text#1029)</a></li>
    <li><a href="https://github.com/nextcloud/text/pull/990">Only overwrite Ctrl-f when text is focussed (text#990)</a></li>
    <li><a href="https://github.com/nextcloud/viewer/pull/582">Set the X-Requested-With header on dav requests (viewer#582)</a></li>
</ul>

<h3 id="19-0-2">Version 19.0.2 <small>August 28 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.tar.bz2">nextcloud-19.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.zip">nextcloud-19.0.2.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.tar.bz2.md5">nextcloud-19.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.zip.md5">nextcloud-19.0.2.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.tar.bz2.sha256">nextcloud-19.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.zip.sha256">nextcloud-19.0.2.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.tar.bz2.sha512">nextcloud-19.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.zip.sha512">nextcloud-19.0.2.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.tar.bz2.asc">nextcloud-19.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.2.zip.asc">nextcloud-19.0.2.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/21782">Lower minimum search length to 2 characters (server#21782)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21804">Call openssl_pkey_export with $config and log errors. (server#21804)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21806">Improve error reporting on sharing errors (server#21806)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21840">Do not log RequestedRangeNotSatisfiable exceptions in DAV (server#21840)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21857">Fix parsing of language code (server#21857)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21876">Fix typo in revokeShare() (server#21876)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21917">Discourage webauthn user interaction (server#21917)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21935">Encryption is ready if master key is enabled (server#21935)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21939">Disable fragile comments tests (server#21939)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21953">Do not double encode the userid in webauthn login (server#21953)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21955">Update icewind/smb to 3.2.6 (server#21955)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21967">Respect default share permissions (server#21967)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21975">allow admin to configure the max trashbin size (server#21975)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21978">Fix risky test in twofactor_backupcodes (server#21978)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21981">Fix PHPUnit deprecation warnings (server#21981)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21983">Fix moving files from external storage to object store trashbin (server#21983)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21991">Ignore whitespace in sharing by mail (server#21991)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22036">Properly fetch translation for remote wipe confirmation dialog (server#22036)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22044">Parse_url returns null in case a parameter is not found (server#22044)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22050">Bump elliptic from 6.5.2 to 6.5.3 (server#22050)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22053">Correctly remove usergroup shares on removing group members (server#22053)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22064">Fix height to big for iPhone when using many apps (server#22064)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22069">Reset the cookie internally in new API when abandoning paged results op (server#22069)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22070">Add Guzzle's InvalidArgumentException (server#22070)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22091">Contactsmanager shall limit number of results early (server#22091)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22094">Fix browser freeze on long password input (server#22094)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22118">Search also the email and displayname in user mangement for groups (server#22118)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22121">Ensured large image is unloaded from memory when generating previews (server#22121)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22131">Fix display of remote users in incoming share notifications (server#22131)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22171">Reuse cache for directory mtime/size if filesystem changes can be ignored (server#22171)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22178">Remove unexpected argument (server#22178)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22181">Do not exit if available space cannot be determined on file transfer (server#22181)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22183">Fix empty 'more' apps navigation after installing an app (server#22183)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22192">Fix default log_rotate_size in config.sample.php (server#22192)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22203">shortcut in reading nested group members when IN_CHAIN is available (server#22203)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22208">Fix chmod on file descriptor (server#22208)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22209">Do clearstatcache() on rmdir (server#22209)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22210">SSE enhancement of file signature (server#22210)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22215">Remove logging message carrying no valuable information (server#22215)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22232">Add app config option to disable "Email was changed by admin" activity (server#22232)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22239">Delete chunks if the move on an upload failed (server#22239)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22247">Silence duplicate session warnings (server#22247)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22252">Doctrine: Fix unquoted stmt fragments backslash escaping (server#22252)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22300">Allow to disable share emails (server#22300)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22302">Show disabled user count in occ user:report (server#22302)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22303">Bump 3rdparty to last stable19 commit (server#22303)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22309">Fixing a logged deprecation message (server#22309)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22333">CalDAV: Add ability to limit sharing to owner (server#22333)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22337">Only copy the link when updating a share or no password was forced (server#22337)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22341">Remove encryption option for nextcloud external storage (server#22341)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22348">L10n:Correct appid for WebAuthn (server#22348)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22355">Properly search for users when limittogroups is enabled (server#22355)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22381">SSE: make legacy format opt in (server#22381)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22387">Update the CRL (server#22387)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22400">Fix missing FN from federated contact (server#22400)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22414">Fix event icon sizes and text alignment (server#22414)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/457">Bump stecman/symfony-console-completion from 0.8.0 to 0.11.0 (3rdparty#457)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/474">Add Guzzle's InvalidArgumentException (3rdparty#474)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/486">Doctrine: Fix unquoted stmt fragments backslash escaping (3rdparty#486)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/545">Fix cypress (viewer#545)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/558">Move to webpack vue global config & bump deps (viewer#558)</a></li>
</ul>

<h3 id="19-0-1">Version 19.0.1 <small>July 17 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.tar.bz2">nextcloud-19.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.zip">nextcloud-19.0.1.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.tar.bz2.md5">nextcloud-19.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.zip.md5">nextcloud-19.0.1.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.tar.bz2.sha256">nextcloud-19.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.zip.sha256">nextcloud-19.0.1.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.tar.bz2.sha512">nextcloud-19.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.zip.sha512">nextcloud-19.0.1.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.tar.bz2.asc">nextcloud-19.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.1.zip.asc">nextcloud-19.0.1.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/21068">Improve group queries (server#21068)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21095">Do not read certificate bundle from data dir by default (server#21095)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21111">Fixes infinitely repeating LDPA search results with PHP <= 7.2 (server#21111)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21114">Use the loginname to verify the old password in user password changes (server#21114)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21126">Make the translation sanitization optional (server#21126)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21128">Simplify getGroups, fixing wrong chunking logic (server#21128)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21131">Move the password confirmation form template to post (server#21131)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21135">Clear the statscache before fetching the metadata (server#21135)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21148">Fix reference to wrong class name (server#21148)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21151">Fix password changes in link and mail shares (server#21151)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21200">Do not only catch Exceptions but any Throwable during rmt share delete (server#21200)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21203">Normalize sftp path in read and write stream (server#21203)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21210">Fix the Talk verification (server#21210)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21226">Prevent harder to share your root (server#21226)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21242">Use \OC::$CLI instead of PHP_SAPI (server#21242)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21247">Fix empty event UUID reminder notifications (server#21247)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21287">Enable passwordless for everyone not only admins. (server#21287)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21308">Only use background fade if nextcloud blue is set (server#21308)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21333">Clear LDAP cache after user deletion (server#21333)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21342">Update icewind/smb to 3.2.5 (server#21342)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21352">Always sort shares in a reliable way (server#21352)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21354">Pass the proper share permissions to the create share call (server#21354)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21356">Reflect unreadable state in the UI (server#21356)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21387">Increase timeout of the appstore requests (server#21387)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21405">Fix pagination of contacts search (server#21405)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21409">Upload part size as S3 parameter instead of constant value (server#21409)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21419">Avoid duplicate matches in wide and exact results (server#21419)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21427">Clean up auth tokens when user is deleted (server#21427)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21441">Fix invalid usage of \Exception::getResult (server#21441)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21447">Disable Client-Side Monitoring on AWS storage (server#21447)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21485">Don't log Keys (server#21485)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21491">GetXbyY can still return false, e.g. when using ldap write support (server#21491)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21493">Acceptence tests shall specify which branch to pick when cloning apps (server#21493)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21495">Give up after 10 seconds in SCSS timeout (server#21495)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21521">Clarify that the email is always shared within the instance (server#21521)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21526">Allow to specify the cookie type for appframework responses (server#21526)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21538">Fix autocomplete for LDAP with `shareapi_only_share_with_group_members` on (server#21538)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21541">Fix modal support for vue apps and dark theme (server#21541)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21550">Fix language in share notes email for users (server#21550)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21568">Fix obsolete usage of OCdialogs (server#21568)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21571">Comment was wrong, block is needed nevertheless (server#21571)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21573">Relax permissions mask check for detecting part file rename (server#21573)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21574">Fix share permission checkboxes enabled when permissions can not be set (server#21574)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21583">Fix strings being passed where arrays where expected (server#21583)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21584">Remove rescanDelay from directory mtime (server#21584)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21622">Precalculate the primary element color for dark mode too (server#21622)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21638">Update presign method to match with interface again. (server#21638)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21652">Log deprecated events as debug (server#21652)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21655">Fix IPv6 remote addresses from X_FORWARDED_FOR headers before validating (server#21655)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21660">Check if debugMode is defined before using it (server#21660)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21663">Fix static method call for s3 bucket compat check (server#21663)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21664">Add missing TarHeader.php (server#21664)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21671">Revert "Do not read certificate bundle from data dir by default" (server#21671)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21687">Change OAuth2 redirect link to relative link (server#21687)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21703">Changes the Birthday calendar color to slightly brighter one (server#21703)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21710">Fix releasing a shared lock multiple times (server#21710)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21726">Fix main bundle on IE11 (server#21726)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21751">Add a clear message why you could end up there (server#21751)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21770">Fix placeholder issues with multiplace spaces in the name (server#21770)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21772">Use the correct mountpoint to calculate (server#21772)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21779">Fix #21285 as oneliner (server#21779)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21780">Set the moment locale even earlier (server#21780)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21834">Build source maps on production build again (server#21834)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/466">Add missing TarHeader.php (3rdparty#466)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/187">Allow downloads in sandboxed iframe (files_pdfviewer#187)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/351">Do not keep loading the slide list on every reopen (firstrunwizard#351)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/651">Allow to group push notifications via an event (notifications#651)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/666">Don't shutdown the notifications when it freezes by browser shutdown (notifications#666)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/667">Ignore old push devices (notifications#667)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/672">More buffer to the key size (notifications#672)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/676">Delete duplicates of the same push token hash (notifications#676)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/686">Fix wordwrap issue regression from #540, fix #679 (notifications#686)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/694">Don't push without internet connection (notifications#694)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/697">Also check for internet on delete push (notifications#697)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/221">Correct format for uptime is used (serverinfo#221)</a></li>
</ul>

<h3 id="19-0-0">Version 19.0.0 <small>June 3 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.tar.bz2">nextcloud-19.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.zip">nextcloud-19.0.0.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.tar.bz2.md5">nextcloud-19.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.zip.md5">nextcloud-19.0.0.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.tar.bz2.sha256">nextcloud-19.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.zip.sha256">nextcloud-19.0.0.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.tar.bz2.sha512">nextcloud-19.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.zip.sha512">nextcloud-19.0.0.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.tar.bz2.asc">nextcloud-19.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-19.0.0.zip.asc">nextcloud-19.0.0.zip.asc</a></p>

<h4>Changes</h4>
<p>Nextcloud Hub v19, code name “home office”, represents a big step forward for remote collaboration in teams. This release brings document collaboration to video chats, introduces password-less login and improves performance.</p>
<p>As this is a major release, the changelog is too long to put here. Users can look at github milestones to find what has been merged. A quick overview of what is new:</p>
<ul>
<li style="list-style: none; list-style-image: none;">🔒 password-less authentication and many other security measures</li>
<li style="list-style: none; list-style-image: none;">📝 Talk 9 with built-in office document editing courtesy of Collabora, a grid view & more</li>
<li style="list-style: none; list-style-image: none;">🚀 MUCH improved performance, 📆 Deck integration in Calendar, 🙇 guest account groups and more!</li>
</ul>
<p>Read the <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-hub-brings-productivity-to-home-office/">release announcement</a> for more details.</p>

<a name="latest18"></a>

<h3 id="18-0-10">Version 18.0.10 <small>October 9 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.tar.bz2">nextcloud-18.0.10.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.zip">nextcloud-18.0.10.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.tar.bz2.md5">nextcloud-18.0.10.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.zip.md5">nextcloud-18.0.10.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.tar.bz2.sha256">nextcloud-18.0.10.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.zip.sha256">nextcloud-18.0.10.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.tar.bz2.sha512">nextcloud-18.0.10.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.zip.sha512">nextcloud-18.0.10.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.tar.bz2.asc">nextcloud-18.0.10.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.10.zip.asc">nextcloud-18.0.10.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/22443">Show better quota warning for group folders and external storage (server#22443)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22592">Better error message when blocked by access control (server#22592)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22631">LDAP: remove unused methods and DB values (server#22631)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22653">Fix installing on Oracle (server#22653)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22714">Do not fail if share for mountpoint is no longer available (server#22714)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22721">Don't use SELECT DISTINCT when to_char() is used in a WHERE statement (server#22721)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22743">Allow additional personal settings via normal registration (server#22743)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22746">Fix detecting text/x-php mimetype and secure mimetype mapping (server#22746)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22754">Fix reading empty files from objectstorage (server#22754)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22777">Fix s3 doesDirectoryExist check for empty directories (server#22777)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22779">Don't fail if copying a file of 0 byte size (server#22779)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22781">Makes LDAP's group updater dispatch type events (server#22781)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22802">Fix share transfer of single files and on the transfered node (server#22802)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22841">Mitigate encoding issue with user principal uri (server#22841)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22894">Revoke secsignid (server#22894)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22900">Fix: file quota was not applied in all cases (server#22900)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22927">Improve handling of out of space errors for smb (server#22927)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22942">Fix settings chunk loading (server#22942)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22989">Flow: do not hide "matches" and "does not match" checkers (server#22989)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23003">Never copy the share link when the password is forced (server#23003)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23088">Show federation and email results also with exact user match unless c… (server#23088)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23091">Do not match sharees on an empty email address (server#23091)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23139">Fix ignoring the correct settings files for translations (server#23139)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23218">Don't influence toastify errors and always use white (server#23218)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23222">Only run the query to get the account data once (server#23222)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/23227">Sync all users to the system addresssbook (server#23227)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/513">Fix mail table columns to match the activity table (activity#513)</a></li>
        <li><a href="https://github.com/nextcloud/logreader/pull/390">Bugfix): Protect LogIterator.php from empty array indices (logreader#390)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/761">Also check responses of 400 errors and so delete unknown devices (notifications#761)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/249">Fix num_shares_link_no_password for NC >= 15 (serverinfo#249)</a></li>
        <li><a href="https://github.com/nextcloud/text/pull/1035">IE11 madness (text#1035)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/614">Update .l10nignore to exclude bundled JS files (viewer#614)</a></li>
</ul>

<h3 id="18-0-9">Version 18.0.9 <small>September 10 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.tar.bz2">nextcloud-18.0.9.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.zip">nextcloud-18.0.9.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.tar.bz2.md5">nextcloud-18.0.9.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.zip.md5">nextcloud-18.0.9.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.tar.bz2.sha256">nextcloud-18.0.9.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.zip.sha256">nextcloud-18.0.9.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.tar.bz2.sha512">nextcloud-18.0.9.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.zip.sha512">nextcloud-18.0.9.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.tar.bz2.asc">nextcloud-18.0.9.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.9.zip.asc">nextcloud-18.0.9.zip.asc</a></p>

<h4>Changes</h4>
<ul>
    <li><a href="https://github.com/nextcloud/server/pull/22411">Fix possible leaking scope in Flow (server#22411)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22415">Fix event icon sizes and text alignment (server#22415)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22428">Combine body-login rules in theming and fix twofactor and guest styling on bright colors (server#22428)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22449">Add php docs build script (server#22449)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22504">Fix clicks on actions menu of non opaque file rows in acceptance tests (server#22504)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22518">Set the mount id before calling storage wrapper (server#22518)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22522">Fix S3 error handling (server#22522)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22538">Only disable zip64 if the size is known (server#22538)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22554">Change free space calculation (server#22554)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22561">Do not keep the part file if the forbidden exception has no retry set (server#22561)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22570">Fix app password updating out of bounds (server#22570)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22572">Bump node-sass from 4.13.0 to 4.13.1 in /build (server#22572)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22582">Upgrade icewind/smb to 3.2.7 (server#22582)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22585">Use the correct root to determinate the webroot for the resource (server#22585)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22595">Bump node-sass from 4.13.0 to 4.13.1 (server#22595)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/22602">Bump http-proxy from 1.17.0 to 1.18.1 in /build (server#22602)</a></li>
    <li><a href="https://github.com/nextcloud/firstrunwizard/pull/398">Bump node-sass from 4.13.0 to 4.13.1 (firstrunwizard#398)</a></li>
    <li><a href="https://github.com/nextcloud/notifications/pull/731">Bump node-sass from 4.13.0 to 4.13.1 (notifications#731)</a></li>
    <li><a href="https://github.com/nextcloud/recommendations/pull/279">Bump node-sass from 4.13.0 to 4.13.1 (recommendations#279)</a></li>
    <li><a href="https://github.com/nextcloud/text/pull/1002">Catch StorageNotAvailable exceptions (text#1002)</a></li>
    <li><a href="https://github.com/nextcloud/text/pull/1018">Harden read only check on public endpoints (text#1018)</a></li>
    <li><a href="https://github.com/nextcloud/text/pull/1030">Sessionid is an int (text#1030)</a></li>
    <li><a href="https://github.com/nextcloud/text/pull/991">Only overwrite Ctrl-f when text is focussed (text#991)</a></li>
    <li><a href="https://github.com/nextcloud/viewer/pull/586">Set the X-Requested-With header on dav requests (viewer#586)</a></li>
</ul>

<h3 id="18-0-8">Version 18.0.8 <small>August 28 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.tar.bz2">nextcloud-18.0.8.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.zip">nextcloud-18.0.8.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.tar.bz2.md5">nextcloud-18.0.8.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.zip.md5">nextcloud-18.0.8.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.tar.bz2.sha256">nextcloud-18.0.8.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.zip.sha256">nextcloud-18.0.8.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.tar.bz2.sha512">nextcloud-18.0.8.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.zip.sha512">nextcloud-18.0.8.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.tar.bz2.asc">nextcloud-18.0.8.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.8.zip.asc">nextcloud-18.0.8.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/20842">Do not filter id matching userId on non-user-share shares (server#20842)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21783">Lower minimum search length to 2 characters (server#21783)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21807">Improve error reporting on sharing errors (server#21807)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21841">Do not log RequestedRangeNotSatisfiable exceptions in DAV (server#21841)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21877">Fix typo in revokeShare() (server#21877)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21936">Encryption is ready if master key is enabled (server#21936)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21956">Update icewind/smb to 3.2.6 (server#21956)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21961">Fix parsing of language code (server#21961)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21976">Allow admin to configure the max trashbin size (server#21976)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21979">Fix risky test in twofactor_backupcodes (server#21979)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21982">Fix moving files from external storage to object store trashbin (server#21982)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21992">Ignore whitespace in sharing by mail (server#21992)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22035">Properly fetch translation for remote wipe confirmation dialog (server#22035)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22051">Bump elliptic from 6.5.2 to 6.5.3 (server#22051)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22054">Correctly remove usergroup shares on removing group members (server#22054)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22058">Fix PHPUnit deprecation warnings (server#22058)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22071">Fix height to big for iPhone when using many apps (server#22071)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22172">Reuse cache for directory mtime/size if filesystem changes can be ignored (server#22172)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22179">Remove unexpected argument (server#22179)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22182">Do not exit if available space cannot be determined on file transfer (server#22182)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22184">Fix empty 'more' apps navigation after installing an app (server#22184)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22191">Fix default log_rotate_size in config.sample.php (server#22191)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22204">Shortcut in reading nested group members when IN_CHAIN is available (server#22204)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22207">Fix chmod on file descriptor (server#22207)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22212">SSE enhancement of file signature (server#22212)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22233">Add app config option to disable "Email was changed by admin" activity (server#22233)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22240">Delete chunks if the move on an upload failed (server#22240)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22268">Fix browser freeze on long password input (server#22268)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22301">Show disabled user count in occ user:report (server#22301)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22306">Allow to disable share emails (server#22306)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22310">Fixing a logged deprecation message (server#22310)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22338">Only copy the link when updating a share or no password was forced (server#22338)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22343">Remove encryption option for nextcloud external storage (server#22343)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22388">Update the CRL (server#22388)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22401">Fix missing FN from federated contact (server#22401)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22405">Make legacy format opt-in (server#22405)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/368">Bump elliptic from 6.5.2 to 6.5.3 (firstrunwizard#368)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/710">Bump elliptic from 6.4.1 to 6.5.3 (notifications#710)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/255">Bump elliptic from 6.5.2 to 6.5.3 (recommendations#255)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/552">Fix babel (viewer#552)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/556">Bump elliptic from 6.5.2 to 6.5.3 (viewer#556)</a></li>
</ul>


<h3 id="18-0-7">Version 18.0.7 <small>July 17 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.tar.bz2">nextcloud-18.0.7.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.zip">nextcloud-18.0.7.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.tar.bz2.md5">nextcloud-18.0.7.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.zip.md5">nextcloud-18.0.7.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.tar.bz2.sha256">nextcloud-18.0.7.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.zip.sha256">nextcloud-18.0.7.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.tar.bz2.sha512">nextcloud-18.0.7.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.zip.sha512">nextcloud-18.0.7.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.tar.bz2.asc">nextcloud-18.0.7.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.7.zip.asc">nextcloud-18.0.7.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/21309">Only use background fade if nextcloud blue is set (server#21309)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21334">Clear LDAP cache after user deletion (server#21334)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21343">Update icewind/smb to 3.2.5 (server#21343)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21355">Pass the proper share permissions to the create share call (server#21355)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21381">Increase max-height on button in welcome email template (server#21381)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21388">Increase timeout of the appstore requests (server#21388)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21448">Disable Client-Side Monitoring on AWS storage (server#21448)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21471">Clean up auth tokens when user is deleted (server#21471)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21486">Don't log Keys (server#21486)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21494">Acceptence tests shall specify which branch to pick when cloning apps (server#21494)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21496">Give up after 10 seconds in SCSS timeout (server#21496)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21499">Fix #21285 as oneliner (server#21499)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21522">Clarify that the email is always shared within the instance (server#21522)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21539">Fix autocomplete for LDAP with `shareapi_only_share_with_group_members` on (server#21539)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21543">Fix modal support for vue apps and dark theme (server#21543)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21551">Fix language in share notes email for users (server#21551)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21569">Fix obsolete usage of OCdialogs (server#21569)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21572">Relax permissions mask check for detecting part file rename (server#21572)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21575">Fix share permission checkboxes enabled when permissions can not be set (server#21575)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21585">Remove rescanDelay from directory mtime (server#21585)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21654">Fix IPv6 remote addresses from X_FORWARDED_FOR headers before validating (server#21654)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21661">Manual backport of "Check if debugMode is defined before using it" #21657 (server#21661)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21670">Revert "Do not read certificate bundle from data dir by default" (server#21670)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21702">Changes the Birthday calendar color to slightly brighter one (server#21702)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21752">Add a clear message why you could end up there (server#21752)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21773">Use the correct mountpoint to calculate (server#21773)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21781">Set the moment locale even earlier (server#21781)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/352">Do not keep loading the slide list on every reopen (firstrunwizard#352)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/673">More buffer to the key size (notifications#673)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/677">Delete duplicates of the same push token hash (notifications#677)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/685">Fix wordwrap issue regression from #540, fix #679 (notifications#685)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/695">Don't push without internet connection (notifications#695)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/698">Also check for internet on delete push (notifications#698)</a></li>
        <li><a href="https://github.com/nextcloud/password_policy/pull/107">Fix NC18 deprecation (password_policy#107)</a></li>
</ul>

<h3 id="18-0-6">Version 18.0.6 <small>June 10 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.tar.bz2">nextcloud-18.0.6.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.zip">nextcloud-18.0.6.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.tar.bz2.md5">nextcloud-18.0.6.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.zip.md5">nextcloud-18.0.6.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.tar.bz2.sha256">nextcloud-18.0.6.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.zip.sha256">nextcloud-18.0.6.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.tar.bz2.sha512">nextcloud-18.0.6.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.zip.sha512">nextcloud-18.0.6.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.tar.bz2.asc">nextcloud-18.0.6.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.6.zip.asc">nextcloud-18.0.6.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/21129">Simplify getGroups, fixing wrong chunking logic (server#21129)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21160">Fix password changes in link and mail shares (server#21160)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21201">Do not only catch Exceptions but any Throwable during rmt share delete (server#21201)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21211">Fix the Talk verification (server#21211)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21227">Prevent harder to share your root (server#21227)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21230">Fix password reset saying Admin changed my password when reset from login page (server#21230)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21248">Fix empty event UUID reminder notifications (server#21248)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21306">Init fileinfo for all tabs (server#21306)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/188">Allow downloads in sandboxed iframe (files_pdfviewer#188)</a></li>
</ul>


<h3 id="18-0-5">Version 18.0.5 <small>June 4 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.tar.bz2">nextcloud-18.0.5.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.zip">nextcloud-18.0.5.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.tar.bz2.md5">nextcloud-18.0.5.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.zip.md5">nextcloud-18.0.5.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.tar.bz2.sha256">nextcloud-18.0.5.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.zip.sha256">nextcloud-18.0.5.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.tar.bz2.sha512">nextcloud-18.0.5.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.zip.sha512">nextcloud-18.0.5.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.tar.bz2.asc">nextcloud-18.0.5.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.5.zip.asc">nextcloud-18.0.5.zip.asc</a></p>

<h4>Changes</h4>
<ul>
    <li><a href="https://github.com/nextcloud/server/pull/20574">Dont show remote and email options if we have an exact match for local user email (server#20574)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20578">Array offset error due to empty file versions array (server#20578)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20588">Set fileInfo correctly for LegacyTabs (server#20588)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20596">Fix Sharing recommendation user display (server#20596)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20602">Fix IE11 upload fallback methods (server#20602)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20635">Allow specifying a default expiration date (server#20635)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20647">Fix security header setting in .htaccess by adding 'onsuccess unset' (server#20647)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20680">Only catch anonymous OPTIONS for Office (server#20680)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20682">Adhere to EMailTemplate interface in constructor call. (server#20682)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20701">Don't remove last user in ldap group when limit is -1 (server#20701)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20703">Add tests for update notification controller for non-default updater … (server#20703)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20740">Allow to navigate to others with access from the sidebar (server#20740)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20747">Add a wrapper to fall back to the share owner on public shares (server#20747)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20750">Fix public layout header title & description (server#20750)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20763">Fix Argon2 options checks (server#20763)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20774">Dont try to update storage mtime if we can't get the mtime (server#20774)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20802">Exclude groups from sharing: Skip delete groups (server#20802)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20805">Correctly hide table headers in filepicker (server#20805)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20808">Clarified trash bin retention by storage shortage override in config.sample.php (server#20808)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20830">Fix filtering our owner & current user from shares (server#20830)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20877">Fix languages empty array (server#20877)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20881">Add locking to resolve concurent move to trashbin conflicts (server#20881)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20886">Fix color-text-maxcontrast not passing WCAG AA (server#20886)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20924">Use random_bytes (server#20924)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20955">Proxy server could cache http response when it is not private (server#20955)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20965">Enable fseek for files in S3 storage (server#20965)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20975">Bump handlebars from 4.5.3 to 4.6.0 in /build (server#20975)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20992">Update icewind/smb to 3.2.4 (server#20992)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20994">Fix issues with Keystone auth v3 in files_external app (server#20994)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20996">Don't load text file preview when text app is available (Fixes: #20615) (server#20996)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21030">Remove entries from locales.json incompatible with punic (server#21030)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21053">Caching and compression for app store requests (server#21053)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21096">Do not read certificate bundle from data dir by default (server#21096)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21109">Fix resharing of federated shares that were created out of links (server#21109)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21115">Use the loginname to verify the old password in user password changes (server#21115)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21127">Make the translation sanitization optional (server#21127)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21132">Move the password confirmation form template to post (server#21132)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21152">Fix password changes in link and mail shares (server#21152)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21159">Revert "Fix password changes in link and mail shares" (server#21159)</a></li>
    <li><a href="https://github.com/nextcloud/activity/pull/457">Use the usermountcache to get all users who have access to a file (activity#457)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/181">Prevent download, printing and text selection when download is hidden (files_pdfviewer#181)</a></li>
    <li><a href="https://github.com/nextcloud/notifications/pull/647">Bump handlebars from 4.5.3 to 4.6.0 (notifications#647)</a></li>
    <li><a href="https://github.com/nextcloud/viewer/pull/477">Revert "Delete menu-sidebar-white.svg" (viewer#477)</a></li>
</ul>
<h3 id="18-0-4">Version 18.0.4 <small>April 24 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.tar.bz2">nextcloud-18.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.zip">nextcloud-18.0.4.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.tar.bz2.md5">nextcloud-18.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.zip.md5">nextcloud-18.0.4.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.tar.bz2.sha256">nextcloud-18.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.zip.sha256">nextcloud-18.0.4.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.tar.bz2.sha512">nextcloud-18.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.zip.sha512">nextcloud-18.0.4.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.tar.bz2.asc">nextcloud-18.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.4.zip.asc">nextcloud-18.0.4.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/19879">Use contacts name on federated activities (server#19879)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19882">Allow to edit admin/own user in the user management (server#19882)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19884">Fix hostname in Apple configuration profile (server#19884)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19886">Don't break when one remote share is down (server#19886)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19897">Properly emit Viewer event on files and files_sharing (server#19897)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19916">Get correct mimetype on objectstores (server#19916)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19921">Properly respect hide download on sharebymail (server#19921)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19922">Use placeholder values for password fields in external storage webui (server#19922)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19924">Do not use the instance name as user part of from mail addresses (server#19924)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19933">Don't allow anchors and queries in remote urls (server#19933)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19940">Fix external storage controller tests (server#19940)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19945">Bump acorn from 6.3.0 to 6.4.1 (server#19945)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19950">Properly set 'hide_download' as integer (server#19950)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19966">Fix safari useragent for versions with 3 digits (server#19966)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19982">Fix default action for deleted shares (server#19982)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19998">Default value of lookupServerEnabled should be the same everywhere (server#19998)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19999">Only do regular polling of storage statistics if session_keepalive is enabled (server#19999)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20001">Fix single "ScopeContext" passed to "setScopes" (server#20001)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20008">Fix invalid instantiation of TemplateResponse if client not found (server#20008)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20016">Update the target when it isempty after sharing (server#20016)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20021">Remove the requirement that everything that looks like a placeholder … (server#20021)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20030">Handle long dav property paths by hashing them (server#20030)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20044">Allow the video player on the hide download (server#20044)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20046">Fixes auto-detecting UUID attributes (server#20046)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20051">Force compatible dependency versions in acceptance tests (server#20051)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20060">Adjust acceptance tests to incoming shares being accepted by default (server#20060)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20102">Fix OCA\DAV\CalDAV\CalDavBackend search $options (server#20102)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20104">Fix dav browser error page not styled (server#20104)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20136">Fix language multiselect action (server#20136)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20140">Remove admin_notifications since it is obsolete since Nextcloud 14 (server#20140)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20144">Change quota design (server#20144)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20148">RefreshWebcalService: randomly generate calendar-object uri (server#20148)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20155">Close updatenotification channel selector on click outside (server#20155)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20158">Add app config to disable user flows (server#20158)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20161">Auto accept group shares for users added to a group (server#20161)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20163">Use global used space in quota wrappen when external storage is included (server#20163)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20166">Check the user on remote wipe (server#20166)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20175">Bugfix - Prevent PHP Warning for count on null on LDAP (server#20175)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20195">Bump version on stable18 (server#20195)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20202">Actually check if the owner is not null (server#20202)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20238">Remove Acrobat logo from PDF filetype icon (server#20238)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20258">Dont always use the current users quota when calculating storage info (server#20258)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20274">Silence LDAP deprecation logs in NC 18 (server#20274)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20282">Check for empty authorization headers for office requests (server#20282)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20296">Fixes the return type of BeforeUserLoggedInEvent (server#20296)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20334">Properly catch NoUserException during upload cleanup (server#20334)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20335">Catch NotFoundException when getting the user folder (server#20335)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20366">Try to use the display name of file transfers (server#20366)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20382">Clear comment on successful post (server#20382)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20387">Fix systemtags overflow (server#20387)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20405">Update icewind/smb to 3.2.3 (server#20405)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20407">Add text restore after restore icon (server#20407)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20420">Use a normal string to translate. (server#20420)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20433">Make sure group management works with all types of group names (server#20433)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20471">Properly display share error messages (server#20471)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20483">Handle unset owner in sharing (server#20483)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20485">Update root.crl due to revocation of spgverein.crt (server#20485)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20493">Close the streams in `writeStream` even when there is an exception (server#20493)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20495">Fix absolute redirect (server#20495)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20512">Provide the proper language to the mailer (server#20512)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20516">Do not advertise nulled userId for for systemwide credentials (server#20516)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20530">Allow to edit admin user (server#20530)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20531">Update list of multiple properties (server#20531)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20548">Fix jsunit tests (server#20548)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20588">Set fileInfo correctly for LegacyTabs (server#20588)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20596">Fix Sharing recommendation user display (server#20596)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20602">Fix IE11 upload fallback methods (server#20602)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/441">Email activity is missing information (activity#441)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/446">Catch new notfound exception while trying to get owner (activity#446)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/449">Skip notifications for users with invalid email address. (activity#449)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/169">Bump pdf.js to 2.1.266 (files_pdfviewer#169)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/301">Bump acorn from 7.1.0 to 7.1.1 (firstrunwizard#301)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/313">Hide slide for app store if disabled (firstrunwizard#313)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/592">Bump acorn from 6.4.0 to 6.4.1 (notifications#592)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/608">Request the permissions for notifications via user interaction (notifications#608)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/196">Bump acorn from 6.4.0 to 6.4.1 (recommendations#196)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/189">Update DefaultOs.php (serverinfo#189)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/422">Public pages compatibility (viewer#422)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/423">Move cypress to gh actions (viewer#423)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/425">Bump acorn from 5.7.3 to 5.7.4 (viewer#425)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/428">Fix trying to open the sidebar when not available (viewer#428)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/435">Add public testing (viewer#435)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/450">Fix public preview url cropping (viewer#450)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/453">Fix babel transpile settings (viewer#453)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/467">Await sidebar (viewer#467)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/469">Change sidebar icon to proper understandable one (viewer#469)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/470">Fix sidebar full state (viewer#470)</a></li>
</ul>


<h3 id="18-0-3">Version 18.0.3 <small>March 23 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.tar.bz2">nextcloud-18.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.zip">nextcloud-18.0.3.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.tar.bz2.md5">nextcloud-18.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.zip.md5">nextcloud-18.0.3.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.tar.bz2.sha256">nextcloud-18.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.zip.sha256">nextcloud-18.0.3.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.tar.bz2.sha512">nextcloud-18.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.zip.sha512">nextcloud-18.0.3.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.tar.bz2.asc">nextcloud-18.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.3.zip.asc">nextcloud-18.0.3.zip.asc</a></p>

<h4>Changes</h4>
<P>Security update</p>

<h3 id="18-0-2">Version 18.0.2 <small>March 13 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.tar.bz2">nextcloud-18.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.zip">nextcloud-18.0.2.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.tar.bz2.md5">nextcloud-18.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.zip.md5">nextcloud-18.0.2.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.tar.bz2.sha256">nextcloud-18.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.zip.sha256">nextcloud-18.0.2.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.tar.bz2.sha512">nextcloud-18.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.zip.sha512">nextcloud-18.0.2.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.tar.bz2.asc">nextcloud-18.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.2.zip.asc">nextcloud-18.0.2.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/19439">Disable timeout on app install via cli (server#19439)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19441">Show proper file name when fetching details fails (server#19441)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19451">Don't create invalid users (server#19451)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19470">When we receive intentional empty whats new info, do not try to show it (server#19470)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19481">Reduce flow logging at INFO level, move to DEBUG (server#19481)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19516">Continue with next foreach iteration (server#19516)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19522">Allow to overwrite the path on the cache event (server#19522)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19573">Move RefreshWebcalJob logic to a proper service so that it may be called independently (server#19573)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19574">Make sure the secondary view registered for systemtags has an id (server#19574)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19591">Strip of users home path from share api message (server#19591)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19607">FIx logging in accessibility controller (server#19607)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19610">Change the route generation of AuthPublicShareController.php (server#19610)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19612">Replace tab character with space (server#19612)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19624">Remove noise from detectUuid and cache results (server#19624)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19628">Make sure that the transfer details are present in the database during the cron run (server#19628)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19630">Fix hover state color of drag-n-drop with theming and dark mode (server#19630)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19636">Correctly trim long cyrillic note (server#19636)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19639">Hash event UID to make sure it's not too long for PushProvider notifications (server#19639)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19690">Theme search results (server#19690)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19696">Also cache avatars when it's not allowed (server#19696)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19702">Revive the "send email to new users" toggle for the user form (server#19702)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19715">Fix non-centered no javascript message (server#19715)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19729">Allow single file downloads so the video player works again (server#19729)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19744">Add message for DoesNotExistException (server#19744)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19762">Fetch translate for Tags from files app (server#19762)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19767">Various user settings fixes (server#19767)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19773">Do not allow transfer ownership when the user isn't the owner (server#19773)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19784">Introduce a default refresh rate app setting for calendar subscriptions (server#19784)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19800">Fix regex for office documents (server#19800)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19802">Fix filename and popover menu misalignment (server#19802)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19803">Fix avatar in file list for users with an @ in the uid (server#19803)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19824">Fix "Error loading the shares list TypeError: "this is undefined"" fo… (server#19824)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19830">Prevent self-xss via invalid mysql user name on install screen (server#19830)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/430">Correctly set up Application class (activity#430)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/435">Chunk deleting of rows from the activity table (activity#435)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/153">Fix 18 public folder (files_videoplayer#153)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/156">Move to github actions (files_videoplayer#156)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/576">Fix push notifications for multibyte notifications (notifications#576)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/582">Prevent delete for impersonated users (notifications#582)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/583">Delete unknown devices (notifications#583)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/584">Fix long message (notifications#584)</a></li>
        <li><a href="https://github.com/nextcloud/photos/pull/211">Ignore unavailable storages while scanning for albums (photos#211)</a></li>
        <li><a href="https://github.com/nextcloud/photos/pull/213">Don't flatten out albums (photos#213)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/177">Avoid line breaks after long device names in "df" command (serverinfo#177)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/178">Do not print errors if time server config is not available (serverinfo#178)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/405">Change sidebar file while changing file in slideshow (viewer#405)</a></li>
</ul>

<h3 id="18-0-1">Version 18.0.1 <small>February 13 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.tar.bz2">nextcloud-18.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.zip">nextcloud-18.0.1.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.tar.bz2.md5">nextcloud-18.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.zip.md5">nextcloud-18.0.1.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.tar.bz2.sha256">nextcloud-18.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.zip.sha256">nextcloud-18.0.1.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.tar.bz2.sha512">nextcloud-18.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.zip.sha512">nextcloud-18.0.1.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.tar.bz2.asc">nextcloud-18.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.1.zip.asc">nextcloud-18.0.1.zip.asc</a></p>

<h4>Changes</h4>
<ul>
	<li><a href="https://github.com/nextcloud/server/pull/18961">Fix cursor on disabled contenteditable divs (server#18961)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18982">Bump style-loader from 1.1.2 to 1.1.3 (server#18982)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19025">Increase the timeout for app downloads (server#19025)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19060">Fix loaded controller check (server#19060)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19089">Allow to await the sidebar (server#19089)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19094">Expose Argon2 options (as we did for bcrypt) (server#19094)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19108">Fix multiselect actions for files (server#19108)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19117">Adjust filelist color handling to new dark theme value (server#19117)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19118">Reduce legacy event log level to debug (server#19118)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19119">New file menu needs to be above the filelist header (server#19119)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19121">Do not invert avatar colors when dark theme is enabled (server#19121)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19149">Use the target for file notifications (server#19149)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19150">Use correct appid for talk (server#19150)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19153">Add hub bundle for easy installation on upgraded instances (server#19153)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19166">Apps can have polyamorous relationships with bundles (server#19166)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19189">Use themed favicon-fb (server#19189)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19190">Fix "Call to undefined method OCA\\WorkflowEngine\\Entity\\File::t()" (server#19190)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19206">Fix query selector for inverted icons (server#19206)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19207">Do not encode contacts menu mailto links (server#19207)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19212">Give the sharing tab a unique id so it also opens properly on other languages (server#19212)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19228">WebcalRefreshJob: Fix reading refresh rate (server#19228)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19269">Make sure to catch php errors during job execution (server#19269)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19271">Center Buttons (server#19271)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19277">Use the l10n from settings (server#19277)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19278">Use proper andwhere clause (server#19278)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19279">Add move (and firstlogin) option to transferownership service (server#19279)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19283">For the DB ot pick an index specify the object_type (server#19283)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19291">Owner transfer multiselect fixes (server#19291)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19292">Allow respecting PASSWORD_DEFAULT (server#19292)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19297">Keep the modification time during decryptFile (server#19297)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19302">Fix data Apache2 .htaccess typo (server#19302)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19308">Fix display of DTEND for multi-day all-day event (server#19308)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19315">Do not overwrite global user auth credentials with empty values (server#19315)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19326">Fix occ maintenance:install database connect failure (server#19326)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19330">Fix event type (server#19330)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19332">Array access on int will fail on php7.4 (server#19332)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19334">Make sure the default share provider does not execute for other things (server#19334)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19340">Disable link shares of disabled users (server#19340)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19360">Prevent archieved download on secure view (server#19360)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19396">Log Flow activity (server#19396)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19420">Allow to serve static webm directly (server#19420)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19422">18.0.1 final (server#19422)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/19428">Allow to serve static mp4 directly (server#19428)</a></li>
	<li><a href="https://github.com/nextcloud/activity/pull/417">Update master php testing versions (activity#417)</a></li>
	<li><a href="https://github.com/nextcloud/activity/pull/418">Update stable18 target versions (activity#418)</a></li>
	<li><a href="https://github.com/nextcloud/files_pdfviewer/pull/164">Update master php testing versions (files_pdfviewer#164)</a></li>
	<li><a href="https://github.com/nextcloud/files_pdfviewer/pull/165">Update stable18 target versions (files_pdfviewer#165)</a></li>
	<li><a href="https://github.com/nextcloud/files_texteditor/pull/194">Update stable18 target versions (files_texteditor#194)</a></li>
	<li><a href="https://github.com/nextcloud/firstrunwizard/pull/274">Update stable18 target versions (firstrunwizard#274)</a></li>
	<li><a href="https://github.com/nextcloud/logreader/pull/313">Update stable18 target versions (logreader#313)</a></li>
	<li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/64">Update master php testing versions (nextcloud_announcements#64)</a></li>
	<li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/65">Update stable18 target versions (nextcloud_announcements#65)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/547">Update stable18 target versions (notifications#547)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/555">Add linting via github actions (notifications#555)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/565">Support Strict VoIP push notifications for iOS 13 SDK (notifications#565)</a></li>
	<li><a href="https://github.com/nextcloud/password_policy/pull/93">Update master php testing versions (password_policy#93)</a></li>
	<li><a href="https://github.com/nextcloud/password_policy/pull/94">Update stable18 target versions (password_policy#94)</a></li>
	<li><a href="https://github.com/nextcloud/photos/pull/153">Lint with github actions (photos#153)</a></li>
	<li><a href="https://github.com/nextcloud/photos/pull/158">No more drone. Do it all on github actions (photos#158)</a></li>
	<li><a href="https://github.com/nextcloud/photos/pull/160">Respect .noimage and .nomedia files (photos#160)</a></li>
	<li><a href="https://github.com/nextcloud/photos/pull/172">Added headers for your photos and favs (photos#172)</a></li>
	<li><a href="https://github.com/nextcloud/photos/pull/174">Fix/actions (photos#174)</a></li>
	<li><a href="https://github.com/nextcloud/photos/pull/175">Fix url escaping (photos#175)</a></li>
	<li><a href="https://github.com/nextcloud/photos/pull/181">Use actions from tutorial (photos#181)</a></li>
	<li><a href="https://github.com/nextcloud/privacy/pull/323">Update stable18 target versions (privacy#323)</a></li>
	<li><a href="https://github.com/nextcloud/recommendations/pull/182">Update stable18 target versions (recommendations#182)</a></li>
	<li><a href="https://github.com/nextcloud/serverinfo/pull/170">Update stable18 target versions (serverinfo#170)</a></li>
	<li><a href="https://github.com/nextcloud/survey_client/pull/104">Update master php testing versions (survey_client#104)</a></li>
	<li><a href="https://github.com/nextcloud/survey_client/pull/105">Update stable18 target versions (survey_client#105)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/368">GitHub actions/lint (viewer#368)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/370">Fix url escaping (viewer#370)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/379">Adjust tests syntax & formatting (viewer#379)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/385">Use actions from tutorial (viewer#385)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/396">Revert "Fix url escaping" (viewer#396)</a></li>
</ul>


<h3 id="18-0-0">Version 18.0.0 <small>January 17 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.tar.bz2">nextcloud-18.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.zip">nextcloud-18.0.0.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.tar.bz2.md5">nextcloud-18.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.zip.md5">nextcloud-18.0.0.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.tar.bz2.sha256">nextcloud-18.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.zip.sha256">nextcloud-18.0.0.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.tar.bz2.sha512">nextcloud-18.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.zip.sha512">nextcloud-18.0.0.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.tar.bz2.asc">nextcloud-18.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-18.0.0.zip.asc">nextcloud-18.0.0.zip.asc</a></p>

<h4>Changes</h4>
<p>Nextcloud Hub is the first completely integrated on-premises content collaboration platform on the market, ready for a new generation of users who expect seamless online collaboration capabilities out of the box.</p>
<p>With this release, we made a change to what we ship. Nextcloud 17 is now Nextcloud Hub 18. Nextcloud Hub comes with a number of new apps which get installed by default on installation (but not shipped as part of the tarball/zip). Nextcloud 17 users can just upgrade as usual to 18, we encourage you to install the new and improved apps like Talk, Calendar, Mail, ONLYOFFICE and more. You will get notified of this recommendation on upgrade!</p>
<p>As this is a major release, the changelog is too long to put here. Users can look at github milestones to find what has been merged. A quick overview of what is new:</p>
<ul>
<li style="list-style: none; list-style-image: none;">📁 Files - features an improved sidebar, accepting internal shares &amp; folder owner transfership
<ul style="margin-top: 0;">
<li style="list-style: none; list-style-image: none;">🗃 Workspaces brings context to your folders, facilitating collaboration in one place.</li>
<li style="list-style: none; list-style-image: none;">🔏 File locking prevents conflicts editing shared files with others</li>
</ul></li>
<li style="list-style: none; list-style-image: none;">🤖 Flow - Brings extensive, easy to use workflow capabilities to Nextcloud. Automatically turn documents in PDFs, send messages to chat rooms and more!</li>
<li style="list-style: none; list-style-image: none;">📝 ONLYOFFICE - Built in ONLYOFFICE makes collaborative editing of Microsoft Office documents accessible to everyone</li>
<li style="list-style: none; list-style-image: none;">📸 Photos - A brand new image gallery makes finding, browsing and sharing your images easier than ever before.</li>
<li style="list-style: none; list-style-image: none;">📅 Calendar 2.0 - Calendar 2.0 books Talk meetings, brings busy view for meetings and resource booking and more</li>
<li style="list-style: none; list-style-image: none;">📩 Mail - Mail 1.0 recognizes itineraries, handles rich text mails and more</li>
<li style="list-style: none; list-style-image: none;">🗣 Talk - rewritten user interface brings message delivery notifications, circles support, message replies and flow integration</li>
</ul>
<p>Read the <a class="hyperlink" href="https://nextcloud.com/blog/the-new-standard-in-on-premises-team-collaboration-nextcloud-hub/">release announcement</a> for more details.</p>

<a name="latest17"></a>
<h3 id="17-0-10">Version 17.0.10 <small>October 9 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.tar.bz2">nextcloud-17.0.10.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.zip">nextcloud-17.0.10.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.tar.bz2.md5">nextcloud-17.0.10.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.zip.md5">nextcloud-17.0.10.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.tar.bz2.sha256">nextcloud-17.0.10.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.zip.sha256">nextcloud-17.0.10.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.tar.bz2.sha512">nextcloud-17.0.10.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.zip.sha512">nextcloud-17.0.10.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.tar.bz2.asc">nextcloud-17.0.10.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.10.zip.asc">nextcloud-17.0.10.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/22046">Bump elliptic from 6.5.0 to 6.5.3 (server#22046)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22513">Show disabled user count in occ user:report (server#22513)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22523">Fix S3 error handling (server#22523)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22539">Only disable zip64 if the size is known (server#22539)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22566">Bump node-sass from 4.12.0 to 4.13.1 (server#22566)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22571">Bump dompurify from 1.0.11 to 2.0.7 (server#22571)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22610">Bump http-proxy from 1.17.0 to 1.18.1 in /build (server#22610)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22842">Mitigate encoding issue with user principal uri (server#22842)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22895">Revoke secsignid (server#22895)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22901">Fix: file quota was not applied in all cases (server#22901)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/402">Bump node-sass from 4.11.0 to 4.13.1 (firstrunwizard#402)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/646">Bump handlebars from 4.3.0 to 4.6.0 (notifications#646)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/730">Bump node-sass from 4.12.0 to 4.13.1 (notifications#730)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/280">Bump node-sass from 4.12.0 to 4.13.1 (recommendations#280)</a></li>
</ul>
<p>Note: this is the final 17 release. Upgrade to Nextcloud 18 or <a href="https://nextcloud.com/contact">contact Nextcloud GmbH for extended support.</a></p>

<h3 id="17-0-9">Version 17.0.9 <small>August 28 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.tar.bz2">nextcloud-17.0.9.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.zip">nextcloud-17.0.9.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.tar.bz2.md5">nextcloud-17.0.9.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.zip.md5">nextcloud-17.0.9.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.tar.bz2.sha256">nextcloud-17.0.9.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.zip.sha256">nextcloud-17.0.9.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.tar.bz2.sha512">nextcloud-17.0.9.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.zip.sha512">nextcloud-17.0.9.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.tar.bz2.asc">nextcloud-17.0.9.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.9.zip.asc">nextcloud-17.0.9.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/21842">Do not log RequestedRangeNotSatisfiable exceptions in DAV (server#21842)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21878">Fix typo in revokeShare() (server#21878)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21937">Encryption is ready if master key is enabled (server#21937)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21980">Fix risky test in twofactor_backupcodes (server#21980)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22180">Remove unexpected argument (server#22180)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22185">Fix empty 'more' apps navigation after installing an app (server#22185)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22193">Fix default log_rotate_size in config.sample.php (server#22193)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22213">SSE enhancement of file signature (server#22213)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22241">Delete chunks if the move on an upload failed (server#22241)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22344">Remove encryption option for nextcloud external storage (server#22344)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22389">Update the CRL (server#22389)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/22390">Make legacy format opt-in (server#22390)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/367">Bump elliptic from 6.4.1 to 6.5.3 (firstrunwizard#367)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/707">Bump elliptic from 6.4.1 to 6.5.3 (notifications#707)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/256">Bump elliptic from 6.5.0 to 6.5.3 (recommendations#256)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/554">Bump elliptic from 6.4.1 to 6.5.3 (viewer#554)</a></li>
</ul>

<h3 id="17-0-8">Version 17.0.8 <small>July 17 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.tar.bz2">nextcloud-17.0.8.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.zip">nextcloud-17.0.8.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.tar.bz2.md5">nextcloud-17.0.8.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.zip.md5">nextcloud-17.0.8.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.tar.bz2.sha256">nextcloud-17.0.8.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.zip.sha256">nextcloud-17.0.8.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.tar.bz2.sha512">nextcloud-17.0.8.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.zip.sha512">nextcloud-17.0.8.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.tar.bz2.asc">nextcloud-17.0.8.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.8.zip.asc">nextcloud-17.0.8.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/20803">Exclude groups from sharing: Skip delete groups (server#20803)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21130">Simplify getGroups, fixing wrong chunking logic (server#21130)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21158">Fix password changes in link and mail shares (server#21158)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21202">Do not only catch Exceptions but any Throwable during rmt share delete (server#21202)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21228">Prevent harder to share your root (server#21228)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21231">Fix password reset saying Admin changed my password when reset from login page (server#21231)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21249">Fix empty event UUID reminder notifications (server#21249)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21335">Clear LDAP cache after user deletion (server#21335)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21389">Increase timeout of the appstore requests (server#21389)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21487">Don't log Keys (server#21487)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21498">Fix #21285 as oneliner (server#21498)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21523">Clarify that the email is always shared within the instance (server#21523)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21552">Fix language in share notes email for users (server#21552)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21570">Fix obsolete usage of OCdialogs (server#21570)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21587">Fix federated link sharing permissions (server#21587)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21656">Fix IPv6 remote addresses from X_FORWARDED_FOR headers before validating (server#21656)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21669">Revert "Do not read certificate bundle from data dir by de… (server#21669)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21753">Add a clear message why you could end up there (server#21753)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21774">Use the correct mountpoint to calculate (server#21774)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21803">17.0.8 final (server#21803)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/189">Allow downloads in sandboxed iframe (files_pdfviewer#189)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/674">More buffer to the key size (notifications#674)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/678">Delete duplicates of the same push token hash (notifications#678)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/696">Don't push without internet connection (notifications#696)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/699">Also check for internet on delete push (notifications#699)</a></li>
</ul>

<h3 id="17-0-7">Version 17.0.7 <small>June 4 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.tar.bz2">nextcloud-17.0.7.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.zip">nextcloud-17.0.7.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.tar.bz2.md5">nextcloud-17.0.7.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.zip.md5">nextcloud-17.0.7.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.tar.bz2.sha256">nextcloud-17.0.7.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.zip.sha256">nextcloud-17.0.7.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.tar.bz2.sha512">nextcloud-17.0.7.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.zip.sha512">nextcloud-17.0.7.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.tar.bz2.asc">nextcloud-17.0.7.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.7.zip.asc">nextcloud-17.0.7.zip.asc</a></p>

<h4>Changes</h4>
<ul>
    <li><a href="https://github.com/nextcloud/server/pull/19496">Bump handlebars from 4.1.2 to 4.3.0 in /build (server#19496)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20579">Array offset error due to empty file versions array (server#20579)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20603">Fix IE11 upload fallback methods (server#20603)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20620">Fix jsunit tests (server#20620)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20681">Only catch anonymous OPTIONS for Office (server#20681)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20683">Adhere to EMailTemplate interface in constructor call. (server#20683)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20704">Add tests for update notification controller for non-default updater … (server#20704)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20748">Add a wrapper to fall back to the share owner on public shares (server#20748)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20751">Fix public layout header title & description (server#20751)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20764">Fix Argon2 options checks (server#20764)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20775">Dont try to update storage mtime if we can't get the mtime (server#20775)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20809">Clarified trash bin retention by storage shortage override in config.sample.php (server#20809)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20882">Add locking to resolve concurent move to trashbin conflicts (server#20882)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20925">Use random_bytes (server#20925)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20966">Enable fseek for files in S3 storage (server#20966)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20977">Bump handlebars from 4.3.0 to 4.6.0 in /build (server#20977)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20986">Proxy server could cache http response when it is not private (server#20986)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/20993">Update icewind/smb to 3.2.4 (server#20993)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21055">Caching and compression for app store requests (server#21055)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21097">Do not read certificate bundle from data dir by default (server#21097)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21104">Don't remove last user in ldap group when limit is -1 (server#21104)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21110">Fix resharing of federated shares that were created out of links (server#21110)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/21116">Use the loginname to verify the old password in user password changes (server#21116)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/182">Prevent download, printing and text selection when download is hidden (files_pdfviewer#182)</a></li>
</ul>


<h3 id="17-0-6">Version 17.0.6 <small>April 23 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.tar.bz2">nextcloud-17.0.6.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.zip">nextcloud-17.0.6.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.tar.bz2.md5">nextcloud-17.0.6.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.zip.md5">nextcloud-17.0.6.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.tar.bz2.sha256">nextcloud-17.0.6.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.zip.sha256">nextcloud-17.0.6.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.tar.bz2.sha512">nextcloud-17.0.6.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.zip.sha512">nextcloud-17.0.6.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.tar.bz2.asc">nextcloud-17.0.6.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.6.zip.asc">nextcloud-17.0.6.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/19885">Fix hostname in Apple configuration profile (server#19885)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19917">Get correct mimetype on objectstores (server#19917)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19925">Do not use the instance name as user part of from mail addresses (server#19925)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19983">Fix default action for deleted shares (server#19983)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20000">Default value of lookupServerEnabled should be the same everywhere (server#20000)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20017">Update the target when it isempty after sharing (server#20017)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20034">Handle long dav property paths by hashing them (server#20034)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20047">Fixes auto-detecting UUID attributes (server#20047)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20052">Force compatible dependency versions in acceptance tests (server#20052)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20055">Remove the requirement that everything that looks like a placeholder … (server#20055)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20131">Fix PDF and video viewers on public links (server#20131)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20141">Remove admin_notifications since it is obsolete since Nextcloud 14 (server#20141)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20149">RefreshWebcalService: randomly generate calendar-object uri (server#20149)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20157">Close updatenotification channel selector on click outside (server#20157)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20164">Use global used space in quota wrappen when external storage is included (server#20164)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20167">Check the user on remote wipe (server#20167)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20176">Bugfix - Prevent PHP Warning for count on null on LDAP (server#20176)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20189">Fix OCA\DAV\CalDAV\CalDavBackend search $options (server#20189)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20194">Bump version on stable17 (server#20194)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20203">Actually check if the owner is not null (server#20203)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20239">Remove Acrobat logo from PDF filetype icon (server#20239)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20259">Dont always use the current users quota when calculating storage info (server#20259)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20263">Do not flood console when uploading files (server#20263)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20283">Check for empty authorization headers for office requests (server#20283)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20336">Catch NotFoundException when getting the user folder (server#20336)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20406">Update icewind/smb to 3.2.3 (server#20406)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20408">Add text restore after restore icon (server#20408)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20484">Handle unset owner in sharing (server#20484)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20487">Update root.crl due to revocation of spgverein.crt (server#20487)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20494">Close the streams in `writeStream` even when there is an exception (server#20494)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20496">Fix absolute redirect (server#20496)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20513">Provide the proper language to the mailer (server#20513)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20517">Do not advertise nulled userId for for systemwide credentials (server#20517)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20532">Update list of multiple properties (server#20532)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/442">Email activity is missing information (activity#442)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/447">Catch new notfound exception while trying to get owner (activity#447)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/170">Bump pdf.js to 2.1.266 (files_pdfviewer#170)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/303">Bump acorn from 6.1.1 to 6.4.1 (firstrunwizard#303)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/590">Bump acorn from 6.1.1 to 6.4.1 (notifications#590)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/197">Bump acorn from 6.2.1 to 6.4.1 (recommendations#197)</a></li>
</ul>

<h3 id="17-0-5">Version 17.0.5 <small>March 23 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.tar.bz2">nextcloud-17.0.5.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.zip">nextcloud-17.0.5.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.tar.bz2.md5">nextcloud-17.0.5.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.zip.md5">nextcloud-17.0.5.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.tar.bz2.sha256">nextcloud-17.0.5.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.zip.sha256">nextcloud-17.0.5.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.tar.bz2.sha512">nextcloud-17.0.5.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.zip.sha512">nextcloud-17.0.5.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.tar.bz2.asc">nextcloud-17.0.5.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.5.zip.asc">nextcloud-17.0.5.zip.asc</a></p>

<h4>Changes</h4>
<P>Security update</p>

<h3 id="17-0-4">Version 17.0.4 <small>March 13 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.tar.bz2">nextcloud-17.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.zip">nextcloud-17.0.4.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.tar.bz2.md5">nextcloud-17.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.zip.md5">nextcloud-17.0.4.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.tar.bz2.sha256">nextcloud-17.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.zip.sha256">nextcloud-17.0.4.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.tar.bz2.sha512">nextcloud-17.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.zip.sha512">nextcloud-17.0.4.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.tar.bz2.asc">nextcloud-17.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.4.zip.asc">nextcloud-17.0.4.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/18580">Allow inline styles for theming images (server#18580)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18884">Relax strict getHome behaviour for LDAP users in a shadow state (server#18884)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19095">Expose Argon2 options (as we did for bcrypt) (server#19095)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19188">Use themed favicon-fb (server#19188)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19208">Do not encode contacts menu mailto links (server#19208)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19229">WebcalRefreshJob: Fix reading refresh rate (server#19229)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19270">Make sure to catch php errors during job execution (server#19270)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19284">For the DB ot pick an index specify the object_type (server#19284)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19309">Fix display of DTEND for multi-day all-day event (server#19309)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19316">Do not overwrite global user auth credentials with empty values (server#19316)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19327">Fix occ maintenance:install database connect failure (server#19327)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19361">Prevent archieved download on secure view (server#19361)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19442">Show proper file name when fetching details fails (server#19442)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19452">Don't create invalid users (server#19452)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19471">When we receive intentional empty whats new info, do not try to show it (server#19471)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19588">Move RefreshWebcalJob logic to a proper service so that it may be called independently (server#19588)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19592">Strip of users home path from share api message (server#19592)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19611">Change the route generation of AuthPublicShareController.php (server#19611)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19625">Remove noise from detectUuid and cache results (server#19625)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19631">Fix hover state color of drag-n-drop with theming and dark mode (server#19631)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19637">Correctly trim long cyrillic note (server#19637)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19640">Hash event UID to make sure it's not too long for PushProvider notifications (server#19640)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19691">Theme search results (server#19691)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19703">Revive the "send email to new users" toggle for the user form (server#19703)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19716">Fix non-centered no javascript message (server#19716)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19768">Keep edit permission when toggling share checkbox (server#19768)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19785">Introduce a default refresh rate app setting for calendar subscriptions (server#19785)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19816">Add message for DoesNotExistException (server#19816)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19831">Prevent self-xss via invalid mysql user name on install screen (server#19831)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/157">Move to github actions (files_videoplayer#157)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/571">Append the autocomplete results to the dropdown container (gallery#571)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/566">Support Strict VoIP push notifications for iOS 13 SDK (notifications#566)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/568">Bump handlebars from 4.1.2 to 4.3.0 (notifications#568)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/577">Fix push notifications for multibyte notifications (notifications#577)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/384">Use actions from tutorial (viewer#384)</a></li>
</ul>

<h3 id="17-0-3">Version 17.0.3 <small>January 31 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.tar.bz2">nextcloud-17.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.zip">nextcloud-17.0.3.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.tar.bz2.md5">nextcloud-17.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.zip.md5">nextcloud-17.0.3.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.tar.bz2.sha256">nextcloud-17.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.zip.sha256">nextcloud-17.0.3.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.tar.bz2.sha512">nextcloud-17.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.zip.sha512">nextcloud-17.0.3.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.tar.bz2.asc">nextcloud-17.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.3.zip.asc">nextcloud-17.0.3.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/18399">Fix comments search result to work with multibyte strings (server#18399)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18467">Fix listing users in groups with slash in the name (server#18467)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18475">Fix Office preview generation (server#18475)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18488">Use File Node API for more download cases, skip unreadable files (server#18488)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18694">Restore old behavior allowing to set custom appstore (server#18694)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18706">Fix broken upgrade caused by undefined method call (server#18706)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18734">Trash bin: fix exception triggered if no correct fileId is provided. (server#18734)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18747">Cache group existence early to save useless requests to LDAP (server#18747)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18758">Do not rerender the selection menu on show (server#18758)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18792">Set direct login after password reset (server#18792)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18880">Properly handle resources in ReminderService (server#18880)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18932">Dont throw undefined index errors for storages that have no owner set (server#18932)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19014">Always use the latest timestamp for merged activities (server#19014)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19069">Fix loaded controller check (server#19069)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19076">When a user was deleted remove them from applicable list, unless... (server#19076)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19159">AppFetcher: Distinguish between fileName and endpointName (server#19159)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19188">Use themed favicon-fb (server#19188)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/369">GitHub actions/lint (viewer#369)</a></li>
</ul>

<h3 id="17-0-2">Version 17.0.2 <small>December 20 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.tar.bz2">nextcloud-17.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.zip">nextcloud-17.0.2.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.tar.bz2.md5">nextcloud-17.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.zip.md5">nextcloud-17.0.2.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.tar.bz2.sha256">nextcloud-17.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.zip.sha256">nextcloud-17.0.2.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.tar.bz2.sha512">nextcloud-17.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.zip.sha512">nextcloud-17.0.2.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.tar.bz2.asc">nextcloud-17.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.2.zip.asc">nextcloud-17.0.2.zip.asc</a></p>

<h4>Changes</h4>
<ul>
	<li><a href="https://github.com/nextcloud/server/pull/17851">Actually return the quote when getting global storage info (server#17851)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17858">Also set X-OC-Mtime header for files that are smaller than 10MB (server#17858)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17883">FIX: horizontal scrolling on mobile due to tab accessibility navigation 'skip to content' positioned at a fixed position (server#17883)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17916">Fix reshare with circle (server#17916)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17919">Bump icewind/searchdav (server#17919)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17925">Make timeout a optional parameter (server#17925)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17928">Check quota before transfer ownership (server#17928)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17945">Re-acquired expired shared locks on large file uploads (server#17945)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17952">Pass through ServerNotAvailableException on app init (server#17952)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18036">Do not check for updates if we have no internet (server#18036)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18040">Convert more columns to bigint (server#18040)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18043">Fix installing with MySQL 8.0.4+ (server#18043)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18047">Uid can be false when the user record does not exit (server#18047)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18050">Update the CRL (server#18050)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18054">Make chunksize (used to check for gone LDAP users) configurable (server#18054)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18075">Remove objectstore credentials (server#18075)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18100">Incorrect integer value: '' for column 'password_invalid' while migra… (server#18100)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18156">Trim the login name (server#18156)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18186">Delay creation of the cert bundle (server#18186)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18189">Handle token insert conflicts (server#18189)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18198">Throw an invalid token exception is token is marked outdated (server#18198)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18205">Backport #18120 (server#18205)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18221">Mark "Talk" active on /call/token URLs (server#18221)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18247">Allow to unfavorite all files (server#18247)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18252">Hide the tooltip if the list row is rerendered (server#18252)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18306">Move overwritehost check to isTrustedDomain (server#18306)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18307">Convert various columns in oc_mounts to bigint (server#18307)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18332">Do not disable authentication apps (server#18332)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18337">Sharee API GS fixes (server#18337)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18352">Handle IPv6 addresses with an explict incoming interface at the end (server#18352)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18355">Adding share type circles (server#18355)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18358">Fix restoring shared versions (server#18358)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18366">Support more IPv6 addresses in the RefreshWebcalJob (server#18366)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18375">Bump the CRL (server#18375)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18386">Allow to detect mimetype by content (server#18386)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18419">Bump serialize-javascript and handlebars (server#18419)</a></li>
	<li><a href="https://github.com/nextcloud/3rdparty/pull/351">Update icewind/searchdav to 1.0.2 (3rdparty#351)</a></li>
	<li><a href="https://github.com/nextcloud/activity/pull/407">Is_dir can be null on blacklisted files (activity#407)</a></li>
	<li><a href="https://github.com/nextcloud/activity/pull/412">Remove debug log (activity#412)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/471">Use @nextcloud/axios so the csrf token gets refreshed (notifications#471)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/495">Fix header icon hover & focus feedback (notifications#495)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/499">Fix cutting of multibyte characters (notifications#499)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/506">Do not send push notifications when nothing was deleted (notifications#506)</a></li>
</ul>

<h3 id="17-0-1">Version 17.0.1 <small>November 9 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.tar.bz2">nextcloud-17.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.zip">nextcloud-17.0.1.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.tar.bz2.md5">nextcloud-17.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.zip.md5">nextcloud-17.0.1.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.tar.bz2.sha256">nextcloud-17.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.zip.sha256">nextcloud-17.0.1.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.tar.bz2.sha512">nextcloud-17.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.zip.sha512">nextcloud-17.0.1.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.tar.bz2.asc">nextcloud-17.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.1.zip.asc">nextcloud-17.0.1.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/17156">Always use the folder icon depending on the mount type if not a share mount (server#17156)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17219">Fix "create folder" icon overlaying home icon (server#17219)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17273">Fix directory detection for s3 (server#17273)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17274">Fix user with id 0 to be able to comment (server#17274)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17277">Handle moveFromStorage within the same storage even when storage wrap… (server#17277)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17281">Dont delete cache entries if deleting an object from object store failed (server#17281)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17295">Correctly detect the mimetype from uploads (server#17295)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17298">Add (hidden) option to configure smb timeout (server#17298)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17300">Position fixed for .toastify.toast (server#17300)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17305">Fix fetching additional search results on scrolling down (server#17305)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17309">Bring the default font size up to 15px (server#17309)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17348">Use handlebars from node_modules (on CI) (server#17348)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17351">Reduce adressbook change events and handling (server#17351)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17358">Fix typo in "which" (server#17358)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17415">Fix updating and deleting authtokens (server#17415)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17418">Allow removing federated shares of locally reshared files (server#17418)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17438">Fix oauth client redirect (server#17438)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17444">Don't call basename on null (server#17444)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17453">Fix axios csrf token update event (server#17453)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17455">Use @nextcloud/axios to keep the CSRF token in sync (server#17455)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17457">Kill ui-regression ci job (server#17457)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17493">Force hide tooltips on sidebar close (server#17493)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17538">Only cache the mimetype if the file exists (server#17538)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17541">Set the proper filename for version downloads (server#17541)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17578">Load additional scripts on help page (server#17578)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17579">Let SCSS cleanup only run once (server#17579)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17581">Pass on direct query parameter during login (server#17581)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17589">Added documentation links on settings pages (server#17589)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17597">Include the share in the Files_Sharing::loadAdditionalScripts event (server#17597)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17617">Treat LDAP error 50 as auth issue, prevents lost server connection errors (server#17617)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17621">Hide strange Everyone and Disabled group numbers with LDAP (server#17621)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17638">Fix browser back button (server#17638)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17676">Fix filename overlapping on mobile (server#17676)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17681">Harden middleware check (server#17681)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17686">Fix jsConfigHelper lang/locale mixup (server#17686)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17688">Fix weird KDE bug with loginflowv2 (server#17688)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17716">Make sure limit is never negative (server#17716)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17731">Fix DAV mimetype search (server#17731)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17742">Return null from migration to match with typehint (server#17742)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17748">Do not show 'Get your own free account' on services under subscription (server#17748)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17766">Fix action menu on mobile (server#17766)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17767">Bring back external storage group select delete (server#17767)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17840">Switch to Files Node API for zip generation (server#17840)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/56">Use correct route to generate (nextcloud_announcements#56)</a></li>
        <li><a href="https://github.com/nextcloud/survey_client/pull/98">Name of the collector is `Php`. (survey_client#98)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/232">Update version on master (viewer#232)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/235">Bump eslint-plugin-node from 9.2.0 to 10.0.0 (viewer#235)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/236">Bump @babel/core from 7.5.5 to 7.6.0 (viewer#236)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/237">Bump @babel/preset-env from 7.5.5 to 7.6.0 (viewer#237)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/238">Bump webpack-cli from 3.3.7 to 3.3.8 (viewer#238)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/242">Bump webpack from 4.39.3 to 4.40.1 (viewer#242)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/245">Bump webpack from 4.40.1 to 4.40.2 (viewer#245)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/250">Bump webpack-cli from 3.3.8 to 3.3.9 (viewer#250)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/258">Bump eslint-config-nextcloud from 0.0.5 to 0.0.6 (viewer#258)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/259">Bump url-loader from 2.1.0 to 2.2.0 (viewer#259)</a></li>
</ul>

<h3 id="17-0-0">Version 17.0.0 <small>September 30 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.tar.bz2">nextcloud-17.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.zip">nextcloud-17.0.0.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.tar.bz2.md5">nextcloud-17.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.zip.md5">nextcloud-17.0.0.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.tar.bz2.sha256">nextcloud-17.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.zip.sha256">nextcloud-17.0.0.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.tar.bz2.sha512">nextcloud-17.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.zip.sha512">nextcloud-17.0.0.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.tar.bz2.asc">nextcloud-17.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-17.0.0.zip.asc">nextcloud-17.0.0.zip.asc</a></p>

<h4>Changes</h4>
<p>Nextcloud 17 introduces a series of secure collaboration features including a collaborative text editor, remote wipe, updated secure view, improved two-factor-authentication and easier access than ever with deeper integration of large-scale storage like S3 and IBM Spectrum Scale.</p>
<p>As this is a major release, the changelog is too long to put here. Users can look at github milestones to find what has been merged.</p>
<p>A quick overview of what is new:</p>
<ul>
<li>💣 Remote Wipe allows users and administrators to forcibly clean files from remote devices, for example in case they are stolen.</li>
<li>📝 Nextcloud Text, our new distraction-free, <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-introduces-collaborative-rich-text-editor/">collaborative rich text editor</a></li>
<li>🔒 Improvements to secure view like enforcable watermarks enable virtual data room use</li>
<li>🔐 Setup two-factor authentication after first login, admins can create one-time login tokens in the web UI and delegate this to group admins</li>
<li>📧 secure mailbox in Outlook Add-in</li>
<li>👥 LDAP write support makes it possible to manage users from Nextcloud</li>
<li>💽 S3 versioning support, IBM Spectrum Scale integration and Global Scale with Collabora Online</li>
</ul>
<p>Read the <a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-17-brings-remote-wipe-collaborative-text-editor-and-next-generation-secure-watermarking/">release announcement</a> and blogs it links to for more details.</p>

    <a name="latest16"></a>

<h3 id="16-0-11">Version 16.0.11 <small>June 9 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.tar.bz2">nextcloud-16.0.11.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.zip">nextcloud-16.0.11.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.tar.bz2.md5">nextcloud-16.0.11.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.zip.md5">nextcloud-16.0.11.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.tar.bz2.sha256">nextcloud-16.0.11.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.zip.sha256">nextcloud-16.0.11.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.tar.bz2.sha512">nextcloud-16.0.11.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.zip.sha512">nextcloud-16.0.11.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.tar.bz2.asc">nextcloud-16.0.11.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.11.zip.asc">nextcloud-16.0.11.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/20604">Fix IE11 upload fallback methods (server#20604)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20621">Fix jsunit tests (server#20621)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20758">Fix public layout header title & description (server#20758)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20765">Fix Argon2 options checks (server#20765)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20810">Clarified trash bin retention by storage shortage override in config.sample.php (server#20810)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20968">Bump handlebars from 4.1.1 to 4.6.0 in /build (server#20968)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/21056">Caching and compression for app store requests (server#21056)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/184">Prevent download, printing and text selection when download is hidden (files_pdfviewer#184)</a></li>
</ul>


<h3 id="16-0-10">Version 16.0.10 <small>April 25 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.tar.bz2">nextcloud-16.0.10.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.zip">nextcloud-16.0.10.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.tar.bz2.md5">nextcloud-16.0.10.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.zip.md5">nextcloud-16.0.10.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.tar.bz2.sha256">nextcloud-16.0.10.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.zip.sha256">nextcloud-16.0.10.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.tar.bz2.sha512">nextcloud-16.0.10.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.zip.sha512">nextcloud-16.0.10.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.tar.bz2.asc">nextcloud-16.0.10.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.10.zip.asc">nextcloud-16.0.10.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/19328">Fix occ maintenance:install database connect failure (server#19328)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19926">Do not use the instance name as user part of from mail addresses (server#19926)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19946">Bump acorn from 6.1.1 to 6.4.1 (server#19946)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19984">Fix default action for deleted shares (server#19984)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20002">Default value of lookupServerEnabled should be the same everywhere (server#20002)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20018">Update the target when it isempty after sharing (server#20018)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20048">Fixes auto-detecting UUID attributes (server#20048)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20053">Force compatible dependency versions in acceptance tests (server#20053)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20142">Remove admin_notifications since it is obsolete since Nextcloud 14 (server#20142)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20147">Fix PDF and video viewers on public links (server#20147)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20177">Bugfix - Prevent PHP Warning for count on null on LDAP (server#20177)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20190">Fix OCA\DAV\CalDAV\CalDavBackend search $options (server#20190)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20240">Remove Acrobat logo from PDF filetype icon (server#20240)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20337">Catch NotFoundException when getting the user folder (server#20337)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20486">Update root.crl due to revocation of spgverein.crt (server#20486)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20518">Do not advertise nulled userId for for systemwide credentials (server#20518)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20590">Fix MariaDB/MySQL version check (server#20590)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20604">Fix IE11 upload fallback methods (server#20604)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/20621">Fix jsunit tests (server#20621)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/443">Email activity is missing information (activity#443)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/171">Bump pdf.js to 2.1.266 (files_pdfviewer#171)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/302">Bump acorn from 6.1.1 to 6.4.1 (firstrunwizard#302)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/591">Bump acorn from 6.1.1 to 6.4.1 (notifications#591)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/198">Bump acorn from 6.1.1 to 6.4.1 (recommendations#198)</a></li>
</ul>

<h3 id="16-0-9">Version 16.0.9 <small>March 13 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.tar.bz2">nextcloud-16.0.9.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.zip">nextcloud-16.0.9.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.tar.bz2.md5">nextcloud-16.0.9.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.zip.md5">nextcloud-16.0.9.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.tar.bz2.sha256">nextcloud-16.0.9.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.zip.sha256">nextcloud-16.0.9.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.tar.bz2.sha512">nextcloud-16.0.9.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.zip.sha512">nextcloud-16.0.9.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.tar.bz2.asc">nextcloud-16.0.9.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.9.zip.asc">nextcloud-16.0.9.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/18230">Respect shareapi_allow_share_dialog_user_enumeration in Principal bac… (server#18230)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18885">Relax strict getHome behaviour for LDAP users in a shadow state (server#18885)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19096">Expose Argon2 options (as we did for bcrypt) (server#19096)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19209">Do not encode contacts menu mailto links (server#19209)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19285">For the DB ot pick an index specify the object_type (server#19285)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19310">Fix display of DTEND for multi-day all-day event (server#19310)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19362">Prevent archieved download on secure view (server#19362)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19371">Bump fstream from 1.0.11 to 1.0.12 in /build (server#19371)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19373">Bump lodash from 4.17.11 to 4.17.15 in /build (server#19373)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19374">Bump lodash.mergewith from 4.6.1 to 4.6.2 in /build (server#19374)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19453">Don't create invalid users (server#19453)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19472">When we receive intentional empty whats new info, do not try to show it (server#19472)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19594">Strip of users home path from share api message (server#19594)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19626">Remove noise from detectUuid and cache results (server#19626)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19638">Correctly trim long cyrillic note (server#19638)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19717">Fix non-centered no javascript message (server#19717)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19797">Keep edit permission when toggling share checkbox (server#19797)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19817">Add message for DoesNotExistException (server#19817)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19832">Prevent self-xss via invalid mysql user name on install screen (server#19832)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/158">Move to github actions (files_videoplayer#158)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/586">Fix push notifications for multibyte notifications (notifications#586)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/386">Stb16 actions (viewer#386)</a></li>
</ul>

<h3 id="16-0-8">Version 16.0.8 <small>January 31 2020</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.tar.bz2">nextcloud-16.0.8.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.zip">nextcloud-16.0.8.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.tar.bz2.md5">nextcloud-16.0.8.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.zip.md5">nextcloud-16.0.8.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.tar.bz2.sha256">nextcloud-16.0.8.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.zip.sha256">nextcloud-16.0.8.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.tar.bz2.sha512">nextcloud-16.0.8.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.zip.sha512">nextcloud-16.0.8.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.tar.bz2.asc">nextcloud-16.0.8.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.8.zip.asc">nextcloud-16.0.8.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/18400">Fix comments search result to work with multibyte strings (server#18400)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18440">Bump nextcloud-vue-collections to 0.4.2 (server#18440)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18489">Use File Node API for more download cases, skip unreadable files (server#18489)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18581">Allow inline styles for theming images (server#18581)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18748">Cache group existence early to save useless requests to LDAP (server#18748)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18759">Do not rerender the selection menu on show (server#18759)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/18933">Dont throw undefined index errors for storages that have no owner set (server#18933)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19015">Always use the latest timestamp for merged activities (server#19015)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19016">Fix restoring shared versions (server#19016)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/19077">When a user was deleted remove them from applicable list, unless... (server#19077)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/524">Bump handlebars from 4.1.2 to 4.3.0 (notifications#524)</a></li>
</ul>

<h3 id="16-0-7">Version 16.0.7 <small>December 20 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.tar.bz2">nextcloud-16.0.7.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.zip">nextcloud-16.0.7.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.tar.bz2.md5">nextcloud-16.0.7.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.zip.md5">nextcloud-16.0.7.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.tar.bz2.sha256">nextcloud-16.0.7.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.zip.sha256">nextcloud-16.0.7.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.tar.bz2.sha512">nextcloud-16.0.7.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.zip.sha512">nextcloud-16.0.7.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.tar.bz2.asc">nextcloud-16.0.7.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.7.zip.asc">nextcloud-16.0.7.zip.asc</a></p>

<h4>Changes</h4>
<ul>
	<li><a href="https://github.com/nextcloud/server/pull/17852">Actually return the quote when getting global storage info (server#17852)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17857">Also set X-OC-Mtime header for files that are smaller than 10MB (server#17857)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17884">FIX: horizontal scrolling on mobile due to tab accessibility navigation 'skip to content' positioned at a fixed position (server#17884)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17906">Don't use an undefined index if not needed (server#17906)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17910">Always check via http and https whether htaccess is working (server#17910)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17927">Check quota before transfer ownership (server#17927)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17929">Make timeout a optional parameter (server#17929)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17933">Bump icewind/searchdav (server#17933)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17944">Re-acquired expired shared locks on large file uploads (server#17944)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17953">Pass through ServerNotAvailableException on app init (server#17953)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18037">Do not check for updates if we have no internet (server#18037)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18041">Convert more columns to bigint (server#18041)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18044">Fix installing with MySQL 8.0.4+ (server#18044)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18048">Uid can be false when the user record does not exit (server#18048)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18051">Update the CRL (server#18051)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18055">Make chunksize (used to check for gone LDAP users) configurable (server#18055)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18116">Incorrect integer value: '' for column 'password_invalid' while migra… (server#18116)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18129">Use old node LTS to build handlebars (server#18129)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18183">Trim the login name (server#18183)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18187">Delay creation of the cert bundle (server#18187)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18248">Allow to unfavorite all files (server#18248)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18259">Mark files_rightclick as shipped so it's marked as official (server#18259)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18284">Fix removing groups that have a slash in the name (server#18284)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18308">Move overwritehost check to isTrustedDomain (server#18308)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18309">Convert various columns in oc_mounts to bigint (server#18309)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18333">Do not disable authentication apps (server#18333)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18347">ShareeAPI GS fixes (server#18347)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18356">Adding share type circles (server#18356)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18367">Support more IPv6 addresses in the RefreshWebcalJob (server#18367)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18376">Bump the CRL (server#18376)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18387">Allow to detect mimetype by content (server#18387)</a></li>
	<li><a href="https://github.com/nextcloud/3rdparty/pull/352">Update icewind/searchdav to 1.0.2 (3rdparty#352)</a></li>
	<li><a href="https://github.com/nextcloud/activity/pull/413">Remove debug log (activity#413)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/489">The token id is an int (notifications#489)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/500">Fix cutting of multibyte characters (notifications#500)</a></li>
</ul>


<h3 id="16-0-6">Version 16.0.6 <small>November 9 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.tar.bz2">nextcloud-16.0.6.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.zip">nextcloud-16.0.6.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.tar.bz2.md5">nextcloud-16.0.6.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.zip.md5">nextcloud-16.0.6.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.tar.bz2.sha256">nextcloud-16.0.6.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.zip.sha256">nextcloud-16.0.6.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.tar.bz2.sha512">nextcloud-16.0.6.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.zip.sha512">nextcloud-16.0.6.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.tar.bz2.asc">nextcloud-16.0.6.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.6.zip.asc">nextcloud-16.0.6.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/16814">Instead of upsert query, fallback to default on PSQL <= 9.4 (server#16814)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17012">Return the proper jailed path when requesting the root path (server#17012)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17227">Fix "create folder" icon overlaying home icon (server#17227)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17271">Fix directory detection for s3 (server#17271)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17278">Handle moveFromStorage within the same storage even when storage wrap… (server#17278)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17282">Dont delete cache entries if deleting an object from object store failed (server#17282)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17296">Correctly detect the mimetype from uploads (server#17296)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17299">Add (hidden) option to configure smb timeout (server#17299)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17342">Fix scrolling after switching to grid view (server#17342)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17347">Use handlebars from node_modules (on CI) (server#17347)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17352">Reduce adressbook change events and handling (server#17352)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17416">Fix updating and deleting authtokens (server#17416)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17419">Allow removing federated shares of locally reshared files (server#17419)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17441">Don't call basename on null (server#17441)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17511">Correctly handle emtpy string in proxyuserpwd config (server#17511)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17539">Only cache the mimetype if the file exists (server#17539)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17542">Set the proper filename for version downloads (server#17542)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17580">Let SCSS cleanup only run once (server#17580)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17588">Added documentation links on settings pages (server#17588)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17618">Treat LDAP error 50 as auth issue, prevents lost server connection errors (server#17618)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17619">Fix method scope (server#17619)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17622">Hide strange Everyone and Disabled group numbers with LDAP (server#17622)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17641">Load additional scripts on help page (server#17641)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17648">Stop if there is no encrypted token (server#17648)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17653">Reset and init new user form language (server#17653)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17687">Fix jsConfigHelper lang/locale mixup (server#17687)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17689">Fix weird KDE bug with loginflowv2 (server#17689)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17732">Fix DAV mimetype search (server#17732)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17768">Bring back external storage group select delete (server#17768)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17841">Switch to Files Node API for zip generation (server#17841)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17852">Actually return the quote when getting global storage info (server#17852)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/548">Force close all tooltips when closing sharing menu (gallery#548)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/57">Use correct route to generate (nextcloud_announcements#57)</a></li>
        <li><a href="https://github.com/nextcloud/survey_client/pull/99">Name of the collector is `Php`. (survey_client#99)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/213">Bump sass-loader from 7.1.0 to 7.2.0 (viewer#213)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/214">Bump webpack from 4.39.1 to 4.39.2 (viewer#214)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/215">Bump sass-loader from 7.2.0 to 7.3.1 (viewer#215)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/216">Bump webpack-cli from 3.3.6 to 3.3.7 (viewer#216)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/217">Bump eslint-loader from 2.2.1 to 3.0.0 (viewer#217)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/218">Bump eslint-plugin-standard from 4.0.0 to 4.0.1 (viewer#218)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/220">Bump eslint-utils from 1.3.1 to 1.4.2 (viewer#220)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/222">Bump webpack-merge from 4.2.1 to 4.2.2 (viewer#222)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/223">Bump babel-eslint from 10.0.2 to 10.0.3 (viewer#223)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/225">Bump webpack from 4.39.2 to 4.39.3 (viewer#225)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/226">Bump nextcloud-vue from 0.12.1 to 0.12.2 (viewer#226)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/227">Bump eslint-plugin-node from 9.1.0 to 9.2.0 (viewer#227)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/232">Update version on master (viewer#232)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/235">Bump eslint-plugin-node from 9.2.0 to 10.0.0 (viewer#235)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/236">Bump @babel/core from 7.5.5 to 7.6.0 (viewer#236)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/237">Bump @babel/preset-env from 7.5.5 to 7.6.0 (viewer#237)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/238">Bump webpack-cli from 3.3.7 to 3.3.8 (viewer#238)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/242">Bump webpack from 4.39.3 to 4.40.1 (viewer#242)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/245">Bump webpack from 4.40.1 to 4.40.2 (viewer#245)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/250">Bump webpack-cli from 3.3.8 to 3.3.9 (viewer#250)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/258">Bump eslint-config-nextcloud from 0.0.5 to 0.0.6 (viewer#258)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/259">Bump url-loader from 2.1.0 to 2.2.0 (viewer#259)</a></li>
</ul>

<h3 id="16-0-5">Version 16.0.5 <small>September 27 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.tar.bz2">nextcloud-16.0.5.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.zip">nextcloud-16.0.5.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.tar.bz2.md5">nextcloud-16.0.5.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.zip.md5">nextcloud-16.0.5.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.tar.bz2.sha256">nextcloud-16.0.5.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.zip.sha256">nextcloud-16.0.5.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.tar.bz2.sha512">nextcloud-16.0.5.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.zip.sha512">nextcloud-16.0.5.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.tar.bz2.asc">nextcloud-16.0.5.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.5.zip.asc">nextcloud-16.0.5.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/16745">Make possible to focus grid/list view toggle via keyboard (server#16745)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16753">Fix tracking of auto disabled apps in Updater (server#16753)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16802">Filter more configs (server#16802)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16818">Correctly remove apps without any releases (server#16818)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16826">Undefined variable response when server is no nextcloud anymore (server#16826)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16837">Change access handling of projects (server#16837)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16848">Only add the app-itunes-app tag if the id is set (server#16848)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16883">Use custom client URL in welcome emails (server#16883)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16891">Properly redirect if accessing invalid file though /f/ entrypoint (server#16891)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16896">Bump mixin-deep from 1.3.1 to 1.3.2 (server#16896)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16909">Only run integration tests when PHP was modified (server#16909)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16921">Ignore Enter key up event on menu button toggles (server#16921)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16991">Be sure to get the jailed path if the storage is a jail (server#16991)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16994">Remove orphaned calendar data from deleted subscriptions (server#16994)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16995">Only run code coverage CI on merge (server#16995)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16997">Returns 404 (server#16997)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17061">Properly initialize the CacheJail for sharing (server#17061)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17070">Fix SMB availability status + higher delay on auth issues (server#17070)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17091">When you click on thumbnail of a file, it should open the file not the sidebar (server#17091)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17099">Emit moveToTrash event only for the deleting user (server#17099)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17103">Fix opening apps with Ctrl+click (server#17103)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17155">Always use the folder icon depending on the mount type if not a share mount (server#17155)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17157">Don't send executionContexts for Clear-Site-Data (server#17157)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17197">Add uid to delete temp token query (server#17197)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17211">Fix l10n in federated file sharing (server#17211)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17250">Nextcloud 16.0.5 (server#17250)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17257">Fix spaces being collapsed in move dialog (server#17257)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/389">Better dark theme support (activity#389)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/390">Fix travis database tests (activity#390)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/174">Bump lodash from 4.17.11 to 4.17.14 (files_texteditor#174)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/183">Translate menu action (files_texteditor#183)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/138">Bump mixin-deep from 1.3.1 to 1.3.2 (files_videoplayer#138)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/211">Bump mixin-deep from 1.3.1 to 1.3.2 (firstrunwizard#211)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/48">Randomize the interval. (nextcloud_announcements#48)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/51">Improve the notification (nextcloud_announcements#51)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/415">Also set the subject when the subject is not too long (notifications#415)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/418">Bump eslint-utils from 1.3.1 to 1.4.2 (notifications#418)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/420">The backports of #392 and #390 did not work out as expected (notifications#420)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/121">Bump mixin-deep from 1.3.1 to 1.3.2 (recommendations#121)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/221">Bump eslint-utils from 1.3.1 to 1.4.2 (viewer#221)</a></li>
</ul

<h3 id="16-0-4">Version 16.0.4 <small>August 16 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.tar.bz2">nextcloud-16.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.zip">nextcloud-16.0.4.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.tar.bz2.md5">nextcloud-16.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.zip.md5">nextcloud-16.0.4.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.tar.bz2.sha256">nextcloud-16.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.zip.sha256">nextcloud-16.0.4.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.tar.bz2.sha512">nextcloud-16.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.zip.sha512">nextcloud-16.0.4.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.tar.bz2.asc">nextcloud-16.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.4.zip.asc">nextcloud-16.0.4.zip.asc</a></p>

<h4>Changes</h4>
<ul>
	<li><a href="https://github.com/nextcloud/server/pull/16254">Always set the display name for user shares (server#16254)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16325">Prevent undefined offset 0 in findByUserIdOrMail (server#16325)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16330">Use HTTP1.1 to read S3 objects (server#16330)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16338">Bump lodash.mergewith from 4.6.1 to 4.6.2 (server#16338)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16341">Bump lodash.merge from 4.6.1 to 4.6.2 (server#16341)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16352">Bump lodash from 4.17.11 to 4.17.13 (server#16352)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16405">Addsubtag should push to array (server#16405)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16414">Add catch for RuntimeException (server#16414)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16425">Only prevent disabling encrytion via the API (server#16425)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16432">Do not keep searching for recent (server#16432)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16437">Update operationprogressbar.js (server#16437)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16444">Fix File#putContents(string) on ObjectStorage (server#16444)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16500">Pass $configargs to openssl_pkey_export (server#16500)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16524">Nested recursion breaking max nested level for parent comment calculation (server#16524)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16527">Allow hidden smb shares (server#16527)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16536">Allow to provide supported calendar component set internally as a string (server#16536)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16541">Lock SCSS so we only run 1 job at a time (server#16541)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16543">Fix max contrast retrieval to limit minimum color for relative time (server#16543)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16561">Supresses disclosing the userid for LDAP users in the welcome mail (server#16561)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16562">Use a pattern to identify sensitive config keys (server#16562)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16564">Do not log locked files (server#16564)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16566">Log email shares in admin_audit log (server#16566)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16567">Change send to sent (server#16567)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16578">Do not log all locked exceptions (server#16578)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16598">Check the if we can actually access the storage cache for recent files (server#16598)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16607">Set proper defaults for v-tooltip usages (server#16607)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16610">Fix/xss/on favorite file (server#16610)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16627">Log circles and remote shares in admin_audit (server#16627)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16630">Make sure we only fetch the file by id for the actual owner (server#16630)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16633">Remove unncessary code block in share recommendations, fixed undefined var error (server#16633)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16637">Files_external: proper user context for sharing (server#16637)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16689">Properly return an int in the getId function of the cache (server#16689)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16691">Fix enable/disable user audit message (server#16691)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16695">Delay sending event from app init to when they are needed (server#16695)</a></li>
	<li><a href="https://github.com/nextcloud/files_pdfviewer/pull/145">Fix download button shown in public share page with hidden downloads (files_pdfviewer#145)</a></li>
	<li><a href="https://github.com/nextcloud/files_texteditor/pull/169">Change name from 'Text editor' to 'Plain text editor' to prevent confusion with 'Text' (files_texteditor#169)</a></li>
	<li><a href="https://github.com/nextcloud/files_texteditor/pull/176">Run drone for webpack build (files_texteditor#176)</a></li>
	<li><a href="https://github.com/nextcloud/files_videoplayer/pull/135">Bump lodash from 4.17.11 to 4.17.14 (files_videoplayer#135)</a></li>
	<li><a href="https://github.com/nextcloud/firstrunwizard/pull/199">Bump lodash.mergewith from 4.6.1 to 4.6.2 (firstrunwizard#199)</a></li>
	<li><a href="https://github.com/nextcloud/firstrunwizard/pull/200">Bump lodash.merge from 4.6.1 to 4.6.2 (firstrunwizard#200)</a></li>
	<li><a href="https://github.com/nextcloud/firstrunwizard/pull/202">Bump lodash from 4.17.11 to 4.17.14 (firstrunwizard#202)</a></li>
	<li><a href="https://github.com/nextcloud/firstrunwizard/pull/205">Bump fstream from 1.0.11 to 1.0.12 (firstrunwizard#205)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/376">Bump lodash from 4.17.11 to 4.17.13 (notifications#376)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/384">Trim the subject before encrypting the subject (notifications#384)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/390">Align the notification subject vertically to the icon (notifications#390)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/391">Fix notification body text alignment and text contrast (notifications#391)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/392">Fix mention and actions layout (notifications#392)</a></li>
	<li><a href="https://github.com/nextcloud/recommendations/pull/105">Bump lodash.mergewith from 4.6.1 to 4.6.2 (recommendations#105)</a></li>
	<li><a href="https://github.com/nextcloud/recommendations/pull/107">Bump lodash from 4.17.11 to 4.17.14 (recommendations#107)</a></li>
	<li><a href="https://github.com/nextcloud/recommendations/pull/120">Bump tar from 2.2.1 to 2.2.2 (recommendations#120)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/102">Bump cypress-image-snapshot from 3.0.1 to 3.0.2 (viewer#102)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/103">Bump babel-loader from 8.0.5 to 8.0.6 (viewer#103)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/104">Bump cypress-file-upload from 3.1.1 to 3.1.2 (viewer#104)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/109">Bump @babel/preset-env from 7.4.4 to 7.4.5 (viewer#109)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/116">Bump eslint-plugin-node from 9.0.1 to 9.1.0 (viewer#116)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/119">Bump cypress-testing-library from 3.0.1 to 4.0.0 (viewer#119)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/121">Bump nextcloud-vue from 0.11.3 to 0.11.4 (viewer#121)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/127">Bump webpack-cli from 3.3.2 to 3.3.3 (viewer#127)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/130">Bump file-loader from 3.0.1 to 4.0.0 (viewer#130)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/131">Bump cypress-image-snapshot from 3.1.0 to 3.1.1 (viewer#131)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/135">Bump webpack from 4.33.0 to 4.34.0 (viewer#135)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/137">Bump cypress-file-upload from 3.1.2 to 3.1.3 (viewer#137)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/138">Bump webpack-cli from 3.3.3 to 3.3.4 (viewer#138)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/139">Bump nextcloud-server from 0.15.9 to 0.15.10 (viewer#139)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/144">Bump webpack from 4.34.0 to 4.35.0 (viewer#144)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/152">Bump eslint-plugin-vue from 5.2.2 to 5.2.3 (viewer#152)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/153">Bump webpack-cli from 3.3.4 to 3.3.5 (viewer#153)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/154">Bump eslint-plugin-promise from 4.1.1 to 4.2.1 (viewer#154)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/155">Bump url-loader from 2.0.0 to 2.0.1 (viewer#155)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/156">Bump eslint-plugin-import from 2.17.3 to 2.18.0 (viewer#156)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/165">Bump eslint-loader from 2.1.2 to 2.2.1 (viewer#165)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/176">Bump webpack from 4.35.2 to 4.35.3 (viewer#176)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/178">Bump stylelint-scss from 3.8.0 to 3.9.1 (viewer#178)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/182">Bump eslint-plugin-import from 2.18.0 to 2.18.2 (viewer#182)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/187">Bump webpack-cli from 3.3.5 to 3.3.6 (viewer#187)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/188">Bump vue-loader from 15.7.0 to 15.7.1 (viewer#188)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/189">Bump webpack from 4.35.3 to 4.36.1 (viewer#189)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/194">Bump webpack from 4.36.1 to 4.38.0 (viewer#194)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/196">Bump url-loader from 2.0.1 to 2.1.0 (viewer#196)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/201">Bump lodash from 4.17.11 to 4.17.15 (viewer#201)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/202">Bump webpack from 4.38.0 to 4.39.0 (viewer#202)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/204">Bump webpack from 4.39.0 to 4.39.1 (viewer#204)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/47">Detect and switch fullscreen (viewer#47)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/66">Update version on master (viewer#66)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/67">Test actions (viewer#67)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/68">Revert "Test actions" (viewer#68)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/69">Bump nextcloud-vue from 0.9.5 to 0.10.0 (viewer#69)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/70">Bump eslint-plugin-import from 2.16.0 to 2.17.2 (viewer#70)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/71">Bump eslint-import-resolver-webpack from 0.11.0 to 0.11.1 (viewer#71)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/72">Bump webpack from 4.29.6 to 4.30.0 (viewer#72)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/73">Fix/loading/race condition (viewer#73)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/90">Bump webpack-cli from 3.3.1 to 3.3.2 (viewer#90)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/92">Bump eslint-plugin-node from 8.0.1 to 9.0.1 (viewer#92)</a></li>
	<li><a href="https://github.com/nextcloud/viewer/pull/96">Bump webpack from 4.30.0 to 4.31.0 (viewer#96)</a></li>
</ul>

    <h3 id="16-0-3">Version 16.0.3 <small>July 9 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.tar.bz2">nextcloud-16.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.zip">nextcloud-16.0.3.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.tar.bz2.md5">nextcloud-16.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.zip.md5">nextcloud-16.0.3.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.tar.bz2.sha256">nextcloud-16.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.zip.sha256">nextcloud-16.0.3.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.tar.bz2.sha512">nextcloud-16.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.zip.sha512">nextcloud-16.0.3.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.tar.bz2.asc">nextcloud-16.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.3.zip.asc">nextcloud-16.0.3.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/16189">Do not fail hard on new user mail error (server#16189)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16244">Fix redirect after rescanFailedIntegrityCheck to "Overview" page (server#16244)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16249">Fix permissions for drag-n-drop uploads (server#16249)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16297">Try to delete the cypress folder of the viewer app (server#16297)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/373">Send browser notifications again (notifications#373)</a></li>
    </ul>

    <h3 id="16-0-2">Version 16.0.2 <small>July 5 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.tar.bz2">nextcloud-16.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.zip">nextcloud-16.0.2.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.tar.bz2.md5">nextcloud-16.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.zip.md5">nextcloud-16.0.2.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.tar.bz2.sha256">nextcloud-16.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.zip.sha256">nextcloud-16.0.2.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.tar.bz2.sha512">nextcloud-16.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.zip.sha512">nextcloud-16.0.2.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.tar.bz2.asc">nextcloud-16.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.2.zip.asc">nextcloud-16.0.2.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/15553">Update ca bundle (server#15553)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15554">Update ca bundle checker (server#15554)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15575">User management/subadmin: rephrase ambiguous error message (server#15575)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15592">Update shipped.json to include privacy and recommendations (server#15592)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15593">Show supported apps in app management (server#15593)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15628">Update CRL due to revoked cookbook.crt (server#15628)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15649">Only show sharing section if it has content (server#15649)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15666">Remove quota feedback if no link set (server#15666)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15686">Allow redis cluster to use password (server#15686)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15718">Don't run repair step for every individual user, outsource that to background job (server#15718)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15724">Check the actual status code for 204 and 304 (server#15724)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15728">[Security] Bump tar from 2.2.1 to 2.2.2 (server#15728)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15745">Don't notify admins if no potentially over exposing links found (server#15745)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15754">Also allow dragging below the file list (server#15754)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15768">Change text color in search box in darktheme, ref #15598 (server#15768)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15772">Check for free space on touch (server#15772)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15799">Search files by id in shared storages last (server#15799)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15856">Hide newFile menu if quota is set to 0B (server#15856)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15948">Add core/js/dist/ to l10nignore (server#15948)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15984">Add LDAP integr. test for receiving share candidates with group limitation (server#15984)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16010">Remove auto focus of share input field on dialog open, fix #15261 (server#16010)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16015">LDAP) API: return one base properly when multiple are configured (server#16015)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16038">Handle storage exceptions when trying to set mtime (server#16038)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16051">Fix LDAP Wizard forgetting groups on select with search (server#16051)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16068">Revert "Fix userid casting in notifications" (server#16068)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16080">Fix appid argument for integrity:check-app (server#16080)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16082">Fix full text search for groupfolders (server#16082)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16089">Fall back to black for non-color values (server#16089)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16091">Check if uploading to lookup server is enabled before verifying (server#16091)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16105">Allow apps to store longer messages in the comments API (server#16105)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16112">Invalidates user when plugin reported deletion success (server#16112)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16125">Fix download link included in public share page with hidden download (server#16125)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16127">Better check reshare permissions (server#16127)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16128">Verify that paths are valid for recursive local move (server#16128)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16133">Don't allow to disable encryption via the API (server#16133)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16146">Do not show a internet connectivity warning if internet access is dis… (server#16146)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16157">Update Nextcloud version in docs link (server#16157)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16177">Allow apps to overwrite the maximum length when reading from database (server#16177)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16201">RefreshWebcalJob: replace ugly Regex with standard php utils (server#16201)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16211">Better check reshare permissions part2 (server#16211)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/380">Fix "unshare group share from self" activity (activity#380)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/141">Fix load of character maps (files_pdfviewer#141)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/192">[Security] Bump axios from 0.18.0 to 0.18.1 (firstrunwizard#192)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/529">Correctly show errors when setting the password (gallery#529)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/533">Blacklist using .noimage (gallery#533)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/359">Update dependabot deps in stable16 (notifications#359)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/368">Increase size of icon bubble for more visibility (notifications#368)</a></li>
        <li><a href="https://github.com/nextcloud/privacy/pull/133">Add app description to readme and appinfo (privacy#133)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/79">Catch and filter share that can't be found (recommendations#79)</a></li>
        <li><a href="https://github.com/nextcloud/recommendations/pull/92">[Security] Bump axios from 0.18.0 to 0.18.1 (recommendations#92)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/113">[Security] Bump tar from 2.2.1 to 2.2.2 (viewer#113)</a></li>
        <li><a href="https://github.com/nextcloud/viewer/pull/117">[Security] Bump axios from 0.18.0 to 0.19.0 (viewer#117)</a></li>
    </ul>


    <h3 id="16-0-1">Version 16.0.1 <small>May 16 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.tar.bz2">nextcloud-16.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.zip">nextcloud-16.0.1.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.tar.bz2.md5">nextcloud-16.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.zip.md5">nextcloud-16.0.1.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.tar.bz2.sha256">nextcloud-16.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.zip.sha256">nextcloud-16.0.1.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.tar.bz2.sha512">nextcloud-16.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.zip.sha512">nextcloud-16.0.1.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.tar.bz2.asc">nextcloud-16.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.1.zip.asc">nextcloud-16.0.1.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/15223">Fix setupcheck for intl module (server#15223)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15303">Take return of mkdir into consideration; photocache to not create a folder for deletion (server#15303)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15312">Remove the custom prefix from the table name length when checking on … (server#15312)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15341">Check if the data is in the lookup server (server#15341)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15345">Do NOT assume all files are selected if the first checkbox is (server#15345)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15389">Fix collapse button in app navigation in IE11 (server#15389)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15399">Make sure all middlewares are only registered once (server#15399)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15405">Allow to send the password of protected conversations (server#15405)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15409">Remove extra margin from warning messages in authenticate page (server#15409)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15417">Set Edge < 16 as incompatible with css vars (server#15417)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15418">Remove extra param in cache update call (server#15418)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15424">Handle 0 B default quota properly in the web UI (server#15424)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15433">Fix multiselect min width (server#15433)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15434">Make access column a real boolean (server#15434)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15439">Fix public upload by also load the semaphore method (server#15439)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15442">Remove setup args from logging (server#15442)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15452">Use non-absolute logout URL to fix wrong URL in reverse proxy scenario (server#15452)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15469">Fix mobile vertical scrolling (server#15469)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15471">Remove recommendation for opcache on CLI (server#15471)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15482">Update file-upload.js (server#15482)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15513">Add interfaces to interact with subscription from support app (server#15513)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/374">Fall back to application/octet-stream instead of using an invalid mim… (activity#374)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/132">Only call setViewerMode if FileList is available (files_pdfviewer#132)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/150">Use correct CSS URL, remove default marked settings and change to GFM rendering (files_texteditor#150)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/189">Use correct method to determine if HTTPS is used (firstrunwizard#189)</a></li>
    </ul>

    <h3 id="16-0-0">Version 16.0.0 <small>April 25 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.tar.bz2">nextcloud-16.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.zip">nextcloud-16.0.0.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.tar.bz2.md5">nextcloud-16.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.zip.md5">nextcloud-16.0.0.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.tar.bz2.sha256">nextcloud-16.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.zip.sha256">nextcloud-16.0.0.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.tar.bz2.sha512">nextcloud-16.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.zip.sha512">nextcloud-16.0.0.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.tar.bz2.asc">nextcloud-16.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-16.0.0.zip.asc">nextcloud-16.0.0.zip.asc</a></p>

    <h4>Changes</h4>
    <p>Nextcloud 16 is smarter than ever, with machine learning to detect suspicious logins and offering clever recommendations. Group Folders now sport access control lists so system administrators can easily manage who has access to what in organization-wide shares. We also introduce Projects, a way to easily relate and find related information like files, chats or tasks.</p>
    <p>As this is a major release, the changelog is too long to put here. Users can look on github milestones to find what has been merged. Find an overview of what has been improved in this series of blog posts:</p>
    <ul>
        <li><a href="https://nextcloud.com/blog/nextcloud-16-becomes-smarter-with-machine-learning-for-security-and-productivity/">Nextcloud 16 becomes smarter with Machine Learning for security and productivity</a></li>
        <li><a href="https://nextcloud.com/blog/nextcloud-16-implements-access-control-lists-to-replace-classic-file-servers/">ACL permissions for Groupfolders</a></li>
        <li><a href="https://nextcloud.com/blog/nextcloud-16-allows-you-to-link-resources-to-keep-track-of-your-projects/">Nextcloud 16 allows you to link resources to keep track of your projects</a></li>
        <li><a href="https://nextcloud.com/blog/talk-6.0-brings-commands-improved-user-experience-and-more/">Talk 6.0 brings commands, improved user experience and more</a></li>
    </ul>

    <a name="latest15"></a>

<h3 id="15-0-14">Version 15.0.14 <small>December 20 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.tar.bz2">nextcloud-15.0.14.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.zip">nextcloud-15.0.14.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.tar.bz2.md5">nextcloud-15.0.14.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.zip.md5">nextcloud-15.0.14.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.tar.bz2.sha256">nextcloud-15.0.14.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.zip.sha256">nextcloud-15.0.14.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.tar.bz2.sha512">nextcloud-15.0.14.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.zip.sha512">nextcloud-15.0.14.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.tar.bz2.asc">nextcloud-15.0.14.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.14.zip.asc">nextcloud-15.0.14.zip.asc</a></p>

<h4>Changes</h4>
<ul>
	<li><a href="https://github.com/nextcloud/server/pull/17853">Actually return the quote when getting global storage info (server#17853)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17911">Always check via http and https whether htaccess is working (server#17911)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/17954">Pass through ServerNotAvailableException on app init (server#17954)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18049">Uid can be false when the user record does not exit (server#18049)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18052">Update the CRL (server#18052)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18106">Revert "Load additional scripts on help page" (server#18106)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18117">Incorrect integer value: '' for column 'password_invalid' while migra… (server#18117)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18190">Delay creation of the cert bundle (server#18190)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18214">Correctly remove apps without any releases (server#18214)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18285">Fix removing groups that have a slash in the name (server#18285)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18310">Convert various columns in oc_mounts to bigint (server#18310)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18357">Adding share type circles (server#18357)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18368">Support more IPv6 addresses in the RefreshWebcalJob (server#18368)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18377">Bump the CRL (server#18377)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/18388">Allow to detect mimetype by content (server#18388)</a></li>
	<li><a href="https://github.com/nextcloud/activity/pull/414">Remove debug log (activity#414)</a></li>
</ul>

 <h3 id="15-0-13">Version 15.0.13 <small>November 9 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.tar.bz2">nextcloud-15.0.13.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.zip">nextcloud-15.0.13.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.tar.bz2.md5">nextcloud-15.0.13.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.zip.md5">nextcloud-15.0.13.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.tar.bz2.sha256">nextcloud-15.0.13.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.zip.sha256">nextcloud-15.0.13.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.tar.bz2.sha512">nextcloud-15.0.13.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.zip.sha512">nextcloud-15.0.13.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.tar.bz2.asc">nextcloud-15.0.13.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.13.zip.asc">nextcloud-15.0.13.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/17013">Return the proper jailed path when requesting the root path (server#17013)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17272">Fix directory detection for s3 (server#17272)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17297">Correctly detect the mimetype from uploads (server#17297)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17442">Don't call basename on null (server#17442)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17540">Only cache the mimetype if the file exists (server#17540)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17587">Added documentation links on settings pages (server#17587)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17642">Load additional scripts on help page (server#17642)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17660">Fix method scope (server#17660)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17733">Fix DAV mimetype search (server#17733)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17760">Fix to strict typehint in FileMimeType (server#17760)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17853">Actually return the quote when getting global storage info (server#17853)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/549">Force close all tooltips when closing sharing menu (gallery#549)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/58">Use correct route to generate (nextcloud_announcements#58)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/59">Adjust target branch (nextcloud_announcements#59)</a></li>
        <li><a href="https://github.com/nextcloud/survey_client/pull/100">Name of the collector is `Php`. (survey_client#100)</a></li>
</ul>

<h3 id="15-0-12">Version 15.0.12 <small>September 27 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.tar.bz2">nextcloud-15.0.12.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.zip">nextcloud-15.0.12.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.tar.bz2.md5">nextcloud-15.0.12.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.zip.md5">nextcloud-15.0.12.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.tar.bz2.sha256">nextcloud-15.0.12.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.zip.sha256">nextcloud-15.0.12.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.tar.bz2.sha512">nextcloud-15.0.12.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.zip.sha512">nextcloud-15.0.12.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.tar.bz2.asc">nextcloud-15.0.12.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.12.zip.asc">nextcloud-15.0.12.zip.asc</a></p>

<h4>Changes</h4>
<ul>
        <li><a href="https://github.com/nextcloud/server/pull/16803">Filter more configs (server#16803)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16825">Undefined variable response when server is no nextcloud anymore (server#16825)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16849">Only add the app-itunes-app tag if the id is set (server#16849)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16884">Use custom client URL in welcome emails (server#16884)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16897">Bump mixin-deep from 1.3.1 to 1.3.2 in /apps/accessibility (server#16897)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16900">Bump mixin-deep from 1.3.1 to 1.3.2 in /apps/oauth2 (server#16900)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16902">Bump mixin-deep from 1.3.1 to 1.3.2 in /apps/updatenotification (server#16902)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16904">Bump mixin-deep from 1.3.1 to 1.3.2 in /settings (server#16904)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16905">Bump mixin-deep from 1.3.1 to 1.3.2 in /build (server#16905)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16992">Be sure to get the jailed path if the storage is a jail (server#16992)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16996">Only run code coverage CI on merge (server#16996)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17058">Returns 404 (server#17058)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17062">Properly initialize the CacheJail for sharing (server#17062)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17071">Fix SMB availability status + higher delay on auth issues (server#17071)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17100">Emit moveToTrash event only for the deleting user (server#17100)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17158">Don't send executionContexts for Clear-Site-Data (server#17158)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17198">Add uid to delete temp token query (server#17198)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17212">Fix l10n in federated file sharing (server#17212)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/17251">Nextcloud 15.0.12 (server#17251)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/49">Randomize the interval. (nextcloud_announcements#49)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/53">Improve the notification (nextcloud_announcements#53)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/419">Bump mixin-deep from 1.3.1 to 1.3.2 (notifications#419)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/437">Bump tar from 4.4.1 to 4.4.11 (notifications#437)</a></li>
</ul>

<h3 id="15-0-11">Version 15.0.11 <small>August 16 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.tar.bz2">nextcloud-15.0.11.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.zip">nextcloud-15.0.11.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.tar.bz2.md5">nextcloud-15.0.11.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.zip.md5">nextcloud-15.0.11.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.tar.bz2.sha256">nextcloud-15.0.11.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.zip.sha256">nextcloud-15.0.11.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.tar.bz2.sha512">nextcloud-15.0.11.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.zip.sha512">nextcloud-15.0.11.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.tar.bz2.asc">nextcloud-15.0.11.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.11.zip.asc">nextcloud-15.0.11.zip.asc</a></p>

<h4>Changes</h4>
<ul>
	<li><a href="https://github.com/nextcloud/server/pull/16224">Dont use part files for dav writes when the target folder doesn't have create permissions (server#16224)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16326">Prevent undefined offset 0 in findByUserIdOrMail (server#16326)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16344">Bump lodash.mergewith from 4.6.1 to 4.6.2 in /settings (server#16344)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16345">Bump lodash.merge from 4.6.1 to 4.6.2 in /settings (server#16345)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16346">Bump lodash.mergewith from 4.6.1 to 4.6.2 in /build (server#16346)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16348">Bump lodash from 4.17.11 to 4.17.14 in /apps/accessibility (server#16348)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16350">Bump lodash from 4.17.11 to 4.17.13 in /settings (server#16350)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16351">Bump lodash from 4.17.11 to 4.17.14 in /apps/updatenotification (server#16351)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16353">Bump lodash from 4.17.11 to 4.17.14 in /build (server#16353)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16357">Bump lodash from 4.17.11 to 4.17.14 in /apps/oauth2 (server#16357)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16426">Only prevent disabling encrytion via the API (server#16426)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16433">Do not keep searching for recent (server#16433)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16445">Fix File#putContents(string) on ObjectStorage (server#16445)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16537">Allow to provide supported calendar component set internally as a string (server#16537)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16548">Bump fstream from 1.0.11 to 1.0.12 in /build (server#16548)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16549">Bump fstream from 1.0.11 to 1.0.12 in /settings (server#16549)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16565">Use a pattern to identify sensitive config keys (server#16565)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16568">Change send to sent (server#16568)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16608">Set proper defaults for v-tooltip usages (server#16608)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16611">Fix/xss/on favorite file (server#16611)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16631">Make sure we only fetch the file by id for the actual owner (server#16631)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16690">Properly return an int in the getId function of the cache (server#16690)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16692">Fix enable/disable user audit message (server#16692)</a></li>
	<li><a href="https://github.com/nextcloud/files_pdfviewer/pull/146">Fix download button shown in public share page with hidden downloads (files_pdfviewer#146)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/377">Bump lodash from 4.17.10 to 4.17.14 (notifications#377)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/385">Trim the subject before encrypting the subject (notifications#385)</a></li>
</ul>


    <h3 id="15-0-10">Version 15.0.10 <small>July 9 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.tar.bz2">nextcloud-15.0.10.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.zip">nextcloud-15.0.10.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.tar.bz2.md5">nextcloud-15.0.10.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.zip.md5">nextcloud-15.0.10.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.tar.bz2.sha256">nextcloud-15.0.10.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.zip.sha256">nextcloud-15.0.10.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.tar.bz2.sha512">nextcloud-15.0.10.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.zip.sha512">nextcloud-15.0.10.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.tar.bz2.asc">nextcloud-15.0.10.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.10.zip.asc">nextcloud-15.0.10.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/16190">Do not fail hard on new user mail error (server#16190)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16192">Forward OCSException to initiator (server#16192)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16283">Properly load permissions in showActions (server#16283)</a></li>
    </ul>

    <h3 id="15-0-9">Version 15.0.9 <small>July 5 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.tar.bz2">nextcloud-15.0.9.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.zip">nextcloud-15.0.9.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.tar.bz2.md5">nextcloud-15.0.9.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.zip.md5">nextcloud-15.0.9.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.tar.bz2.sha256">nextcloud-15.0.9.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.zip.sha256">nextcloud-15.0.9.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.tar.bz2.sha512">nextcloud-15.0.9.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.zip.sha512">nextcloud-15.0.9.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.tar.bz2.asc">nextcloud-15.0.9.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.9.zip.asc">nextcloud-15.0.9.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/15555">Update ca bundle checker (server#15555)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15572">Update ca bundle (server#15572)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15576">User management/subadmin: rephrase ambiguous error message (server#15576)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15629">Update CRL due to revoked cookbook.crt (server#15629)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15650">Only show sharing section if it has content (server#15650)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15687">Allow redis cluster to use password (server#15687)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15725">Check the actual status code for 204 and 304 (server#15725)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15726">[Security] Bump tar from 2.2.1 to 2.2.2 in /settings (server#15726)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15727">[Security] Bump tar from 2.2.1 to 2.2.2 in /build (server#15727)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15755">Also allow dragging below the file list (server#15755)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15771">Check for free space on touch (server#15771)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15800">Search files by id in shared storages last (server#15800)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15818">[Security] Bump axios from 0.18.0 to 0.19.0 in /apps/accessibility (server#15818)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15855">Hide newFile menu if quota is set to 0B (server#15855)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15861">Don't notify admins if no potentially over exposing links found (server#15861)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15927">Show share settings only if incoming federated shares are allowed (server#15927)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15985">Add LDAP integr. test for receiving share candidates with group limitation (server#15985)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16030">Prevent faulty logs from nested setupFS calls (server#16030)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16052">Fix LDAP Wizard forgetting groups on select with search (server#16052)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16081">Fix appid argument for integrity:check-app (server#16081)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16083">Fix full text search for groupfolders (server#16083)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16090">Fall back to black for non-color values (server#16090)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16092">Check if uploading to lookup server is enabled before verifying (server#16092)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16110">LDAP) API: return one base properly when multiple are configured (server#16110)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16113">Invalidates user when plugin reported deletion success (server#16113)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16126">Fix download link included in public share page with hidden download (server#16126)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16129">Verify that paths are valid for recursive local move (server#16129)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16134">Don't allow to disable encryption via the API (server#16134)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16142">Better check reshare permissions (server#16142)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16202">RefreshWebcalJob: replace ugly Regex with standard php utils (server#16202)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16212">Fix notification casting (server#16212)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16215">Better check reshare permissions part2 (server#16215)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/381">Fix "unshare group share from self" activity (activity#381)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/142">Fix load of character maps (files_pdfviewer#142)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/530">Correctly show errors when setting the password (gallery#530)</a></li>
    </ul>


    <h3 id="15-0-8">Version 15.0.8 <small>May 16 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.tar.bz2">nextcloud-15.0.8.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.zip">nextcloud-15.0.8.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.tar.bz2.md5">nextcloud-15.0.8.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.zip.md5">nextcloud-15.0.8.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.tar.bz2.sha256">nextcloud-15.0.8.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.zip.sha256">nextcloud-15.0.8.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.tar.bz2.sha512">nextcloud-15.0.8.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.zip.sha512">nextcloud-15.0.8.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.tar.bz2.asc">nextcloud-15.0.8.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.8.zip.asc">nextcloud-15.0.8.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/15006">Reconnect to DB after timeout for Notify command. Fixes #14479 (server#15006)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15021">Respect the setting if the lookup server is disabled (server#15021)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15046">Disable the injected snapper logic when apps want to ship their own (server#15046)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15071">Do not allow invalid users to be created (server#15071)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15112">Prevent a reinstall (server#15112)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15119">Do not use spaces in generated passwords (server#15119)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15128">Improve the share link password error feedback with a red border (server#15128)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15131">Use slient option to switch for regular file actions as well (server#15131)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15139">Backport/15129/stable15 (server#15139)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15158">Load apps before running repair steps (server#15158)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15205">Always use a temp file for swift writes (server#15205)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15206">Prefetching blows up if there are a lot of files. (server#15206)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15307">Take return of mkdir into consideration; photocache to not create a folder for deletion (server#15307)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15332">[Security] Bump tar from 4.4.1 to 4.4.8 in /apps/oauth2 (server#15332)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15333">[Security] Bump tar from 4.4.1 to 4.4.8 in /apps/accessibility (server#15333)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15334">[Security] Bump tar from 4.4.1 to 4.4.8 in /apps/updatenotification (server#15334)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15342">Check if the data is in the lookup server (server#15342)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15346">Do NOT assume all files are selected if the first checkbox is (server#15346)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15387">Remove orphan event and contacts data (server#15387)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15390">Fix collapse button in app navigation in IE11 (server#15390)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15421">Set Edge < 16 as incompatible with css vars (server#15421)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15425">Handle 0 B default quota properly in the web UI (server#15425)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15443">Remove setup args from logging (server#15443)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15456">Use non-absolute logout URL to fix wrong URL in reverse proxy scenario (server#15456)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15472">Remove recommendation for opcache on CLI (server#15472)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15485">Update file-upload.js (server#15485)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/362">Fix missing translation for "Home folder" (activity#362)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/375">Fall back to application/octet-stream instead of using an invalid mim… (activity#375)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/133">Only call setViewerMode if FileList is available (files_pdfviewer#133)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/151">Use correct CSS URL, remove default marked settings and change to GFM rendering (files_texteditor#151)</a></li>
    </ul>

    <h3 id="15-0-7">Version 15.0.7 <small>April 9 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.tar.bz2">nextcloud-15.0.7.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.zip">nextcloud-15.0.7.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.tar.bz2.md5">nextcloud-15.0.7.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.zip.md5">nextcloud-15.0.7.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.tar.bz2.sha256">nextcloud-15.0.7.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.zip.sha256">nextcloud-15.0.7.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.tar.bz2.sha512">nextcloud-15.0.7.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.zip.sha512">nextcloud-15.0.7.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.tar.bz2.asc">nextcloud-15.0.7.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.7.zip.asc">nextcloud-15.0.7.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/14968">Fix for crashing occ files:scan (server#14968)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14984">Fix .drone.yml syntax (server#14984)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15000">Harden appdata putcontent (server#15000)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15001">Check if OCA.Files.App is available before calling (server#15001)</a></li>
    </ul>

    <h3 id="15-0-6">Version 15.0.6 <small>April 4 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.tar.bz2">nextcloud-15.0.6.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.zip">nextcloud-15.0.6.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.tar.bz2.md5">nextcloud-15.0.6.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.zip.md5">nextcloud-15.0.6.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.tar.bz2.sha256">nextcloud-15.0.6.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.zip.sha256">nextcloud-15.0.6.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.tar.bz2.sha512">nextcloud-15.0.6.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.zip.sha512">nextcloud-15.0.6.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.tar.bz2.asc">nextcloud-15.0.6.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.6.zip.asc">nextcloud-15.0.6.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/14376">Fix grid toggle button on public page (server#14376)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14387">Fix(EMailTemplate): malformed HTML in some cases (server#14387)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14414">Bugfix for issue 10862: Trash-bin ignores trashbin_retention_obligation (server#14414)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14416">Parse multiple navigation items (server#14416)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14438">Fix referrer policy meta tags. (server#14438)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14462">Fix a bug with smb notify having leading slash when it should not (server#14462)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14472">Fix for issue #13319: load oc-backbone-webdav before loading versions app (server#14472)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14490">Add accessibility translations (server#14490)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14495">Run tests that fail with "no such process" over to apache server (server#14495)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14497">Make header.feature more robust by running it on apache (server#14497)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14503">Fix expire date change eventhandler (server#14503)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14512">Update icewind/smb to 3.0.2 (server#14512)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14516">Do not cut full color on accessibility svg color invert (server#14516)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14517">Dav: Fix handling of chunked WebDAV upload (server#14517)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14521">Do not just write foobar (server#14521)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14531">Fix database configuration (server#14531)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14534">Add activities for group membership changes (server#14534)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14542">Check if password can be changed for the users backend in OCS api (server#14542)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14546">Add test for updated CA bundle (server#14546)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14559">Clear backupcode reminder when no 2fa (server#14559)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14570">Use a tmp file for swift writes (server#14570)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14580">Have streams of files_external in sync (server#14580)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14591">Resolve user and groups in nested groups first before filtering the results (server#14591)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14596">Remove Google+ from Social Sharing Bundle (server#14596)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14597">Do not calculate folder size for parent that also needs proper scan, fixes #3524 (server#14597)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14599">Mention Open Cloud Mesh in Federated User Settings (server#14599)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14601">Update index.php (server#14601)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14658">Remove sensitive SMB arguments from exception log (server#14658)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14661">Prevent recursion when moving a file to the trashbin (server#14661)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14672">Disable fragile tests (server#14672)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14677">Use SCSS variables since CSS vars are not loaded on public pages (server#14677)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14694">Handle long etags from dav external storage (server#14694)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14696">Improve lookup server behaviour (server#14696)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14697">Add an integration test that ensures deletion of LDAP users (server#14697)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14699">Dont try to restore a trashbin item to a readonly target (server#14699)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14700">Throw a proper error if rename fails in dav (server#14700)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14709">Groupname like username - allow share with both (server#14709)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14716">Updated documentation go.php to 15 and adjusted copyright year. (server#14716)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14749">Always register the Notifier (server#14749)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14751">Fix getting the access list on external storage (server#14751)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14759">Always allow moving mountpoints inside the same mountpoint (server#14759)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14762">Use current directory for hashing. (server#14762)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14781">Fix user creation using LDAP Plugin (server#14781)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14795">Avoid replacement by user object (server#14795)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14840">Fix placeholder in disable message (server#14840)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14854">Fix setup checks for ocm/ocs-provider (server#14854)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14855">Remove Google+ federation usersettings (server#14855)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14857">Add setup check for missing UTF8MB4 on mysql (server#14857)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14859">Make regions translatable (server#14859)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14865">Show a setup warning in case S3 object storage is used as primary storage (server#14865)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14867">Fix plural rule detection for languages (server#14867)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14882">Fix translations of settings (server#14882)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14891">Fix opening folders from different file lists (server#14891)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14924">Fix hidden file display in grid view (server#14924)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/355">Locale is not language (activity#355)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/358">Fallback to plaintext subject if no rich subject is set (activity#358)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/122">Ignore query arguments in single video share for stable15 (Fix #121) (files_videoplayer#122)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/291">Less alerting log entries on fails (notifications#291)</a></li>
    </ul>

    <h3 id="15-0-5">Version 15.0.5 <small>February 28 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.tar.bz2">nextcloud-15.0.5.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.zip">nextcloud-15.0.5.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.tar.bz2.md5">nextcloud-15.0.5.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.zip.md5">nextcloud-15.0.5.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.tar.bz2.sha256">nextcloud-15.0.5.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.zip.sha256">nextcloud-15.0.5.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.tar.bz2.sha512">nextcloud-15.0.5.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.zip.sha512">nextcloud-15.0.5.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.tar.bz2.asc">nextcloud-15.0.5.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.5.zip.asc">nextcloud-15.0.5.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/13961">Show autocompletion as soon as "@" is typed (server#13961)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13978">Trim filename in webfrontend for windows compatibility (server#13978)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13982">Clean code and fix drop zone shadow (server#13982)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14029">Show original path in trashbin (server#14029)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14068">Update icewind/smb to 3.0.1 (server#14068)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14085">Fix: Check if `$this->params['user']` is an array (server#14085)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14093">[Security] Bump lodash from 4.17.10 to 4.17.11 in /apps/updatenotification (server#14093)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14094">[Security] Bump lodash from 4.17.10 to 4.17.11 in /apps/accessibility (server#14094)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14095">[Security] Bump lodash from 4.17.10 to 4.17.11 in /apps/oauth2 (server#14095)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14101">Make sure the relative path is always a string (server#14101)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14151">Fix the thorrtler whitelist bitmask (server#14151)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14187">[Security] Bump handlebars from 4.0.12 to 4.1.0 in /build (server#14187)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14195">Fix recent files (server#14195)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14201">Update CRL to contain revoked files_external_dropbox, passman & payback (server#14201)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14203">Ensure attribute names are lower cased (server#14203)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14207">Fix small glitches in update notification page (server#14207)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14212">Fix expiration date changing (server#14212)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14213">Fix trashbin restore translation (server#14213)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14225">Remove trailing spaces from localized strings (server#14225)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14268">Fixing phpdoc in FullTextSearch/Model/ISearchResult (server#14268)</a></li>
        <li><a href="https://github.com/nextcloud/server/pu1ll/14273">Fix empty file uploads to S3 (and other streaming storages) (server#14273)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14275">Do not do redirect handling when loggin out (server#14275)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14277">Catch Request exception in testRemoteUrl (server#14277)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14283">Correctly determinate the owner in case of shared external storages (server#14283)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14287">Fix header label visibility on open menu (server#14287)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14288">Prefix $path for filename for internal file cache (server#14288)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14292">Set false as default for requirePNG (server#14292)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14301">Use proper scroll container when dragging files (server#14301)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14308">Fix OC.getCurrentUser() on guest pages (server#14308)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14312">Fix ocm end-point discovery discovery (server#14312)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14331">Apply theme to 2FA button (server#14331)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14339">Fix "Undefined index: user_uid" on login page (server#14339)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14340">Fix unsafe array access (server#14340)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14368">Always query lookup server in GS mode (server#14368)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14371">Use latest ca-bundle.crt from https://curl.haxx.se/docs/caextract.html (server#14371)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/213">Try to support 7.3 for DAV (3rdparty#213)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/244">Backport/stable15/streams 0.7.1 (3rdparty#244)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/347">Don't add empty entries to the objects array (activity#347)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/350">Ensure parameters are always an array (activity#350)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/293">Bye, Scrutinizer! (notifications#293)</a></li>
    </ul>

    <h3 id="15-0-4">Version 15.0.4 <small>February 7 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.tar.bz2">nextcloud-15.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.zip">nextcloud-15.0.4.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.tar.bz2.md5">nextcloud-15.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.zip.md5">nextcloud-15.0.4.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.tar.bz2.sha256">nextcloud-15.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.zip.sha256">nextcloud-15.0.4.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.tar.bz2.sha512">nextcloud-15.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.zip.sha512">nextcloud-15.0.4.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.tar.bz2.asc">nextcloud-15.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.4.zip.asc">nextcloud-15.0.4.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/14076">Make external storages browsable again in the web UI (server#14076)</a></li>
    </ul>

    <h3 id="15-0-3">Version 15.0.3 <small>February 7 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.tar.bz2">nextcloud-15.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.zip">nextcloud-15.0.3.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.tar.bz2.md5">nextcloud-15.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.zip.md5">nextcloud-15.0.3.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.tar.bz2.sha256">nextcloud-15.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.zip.sha256">nextcloud-15.0.3.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.tar.bz2.sha512">nextcloud-15.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.zip.sha512">nextcloud-15.0.3.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.tar.bz2.asc">nextcloud-15.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.3.zip.asc">nextcloud-15.0.3.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/13036">Upload new files in objectstore to a .part path first (server#13036)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13384">Broker: add timezone to CANCEL messages (server#13384)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13546">Add strengthify.min files (server#13546)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13575">Fix click app names (server#13575)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13582">Principals can be principal/user/<name> or principal/<name> from lega… (server#13582)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13585">Correctly handle displaynames returned from the sharee API (server#13585)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13588">Don't close input stream when writing in encrypted file (server#13588)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13598">Bump pear/archive_tar to 1.4.5 (server#13598)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13609">Fix integer background job id type error (server#13609)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13611">Fix user settings label translation (server#13611)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13625">Fix app navigation flickering on hover (server#13625)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13636">Update URL for federation (server#13636)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13653">Fix colorizeSvg with transformations that contain a comma (,) (server#13653)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13665">Use warning background color & primary text color for setting warnings (server#13665)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13670">Fix template paramter (server#13670)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13740">Cache tokens when using swift's v2 authentication (server#13740)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13744">Cleanup shared lock if changing to exclusive lock failed (server#13744)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13758">Honor remember_login_cookie_lifetime (server#13758)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13761">Fix integration of social sharing into the link popover menu (server#13761)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13762">Respect user locale in natural sort comparator (server#13762)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13769">Call proper function when fetching link shares in the breadcrumb view (server#13769)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13771">Add acceptance tests for moving and copying files (server#13771)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13781">Show proper default locale (server#13781)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13792">Ignore non existing users when retrieving details of group members (server#13792)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13793">Remove .css fileending from accessibility user css route (server#13793)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13794">Add icon to restore activity (server#13794)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13804">Fix long comment in dark theme (server#13804)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13821">Bump bower from 1.8.4 to 1.8.8 in /build (server#13821)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13852">Fix for high contrast theme (server#13852)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13882">Always use multipart uploader for s3 uploads (server#13882)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13884">Fix paged search with multiple bases (LDAP) (server#13884)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13887">Fix dropping a folder on a folder row (server#13887)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13900">Fix updating the password of a link share when passwords are enforced (server#13900)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13904">Add fallback for trashbin original location (server#13904)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13905">Allow shared versions again in legacy backend (server#13905)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13906">Improve data directory write checking for NFS mounts (server#13906)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13915">Clean pending 2FA authentication on password reset (server#13915)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13918">Forward error message from password policy (server#13918)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13920">Remove warning in case of external storage error (server#13920)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13930">Handle mail send error gracefully (server#13930)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/214">Bump pear/archive_tar from 1.4.3 to 1.4.5 (3rdparty#214)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/338">Move to SCSS and fix app icon for dark theme (activity#338)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/79">Fill screen in fullscreen mode for public videos. Fixes #77 (files_videoplayer#79)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/105">Use target="_blank" and rel="noreferrer noopener" (firstrunwizard#105)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/258">Fix notification documentation to reflect recent changes (notifications#258)</a></li>
    </ul>

    <h3 id="15-0-2">Version 15.0.2 <small>January 11 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.tar.bz2">nextcloud-15.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.zip">nextcloud-15.0.2.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.tar.bz2.md5">nextcloud-15.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.zip.md5">nextcloud-15.0.2.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.tar.bz2.sha256">nextcloud-15.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.zip.sha256">nextcloud-15.0.2.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.tar.bz2.sha512">nextcloud-15.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.zip.sha512">nextcloud-15.0.2.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.tar.bz2.asc">nextcloud-15.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.2.zip.asc">nextcloud-15.0.2.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/13479">Don't log parameters on user creation in case of error/exception (server#13479)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13506">RemoveClassifiedEventActivity: check if calendar still exists (server#13506)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/196">Broker: add timezone to CANCEL messages (3rdparty#196)</a></li>
    </ul>

    <h3 id="15-0-1">Version 15.0.1 <small>January 10 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.tar.bz2">nextcloud-15.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.zip">nextcloud-15.0.1.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.tar.bz2.md5">nextcloud-15.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.zip.md5">nextcloud-15.0.1.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.tar.bz2.sha256">nextcloud-15.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.zip.sha256">nextcloud-15.0.1.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.tar.bz2.sha512">nextcloud-15.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.zip.sha512">nextcloud-15.0.1.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.tar.bz2.asc">nextcloud-15.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.1.zip.asc">nextcloud-15.0.1.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/12963">Change doc link for 15 (server#12963)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12984">Use strengthify.min on personal settings page (server#12984)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13007">Use default cursor for disabled primary buttons (server#13007)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13029">Better activities for systemtags that are removed by CLI (server#13029)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13076">Ie11 compatibility updatenotifications (server#13076)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13119">Fix exception on LDAP mapping during login (server#13119)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13123">Fix SAML Client login flow on Apple devices (server#13123)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13150">Only trust the X-FORWARDED-HOST header for trusted proxies (server#13150)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13151">Prevent special characters from breaking the file drop remote url (server#13151)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13155">Allow content provider to generate new Index (server#13155)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13169">Make the footer "Get your own free account" translatable (server#13169)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13179">Use a case insensitive search for email (server#13179)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13206">Fix ie11 checkboxes (server#13206)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13209">SCSS cache buster is a combination of apps/theming/scc_vars (server#13209)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13215">Files list not rendering if user has favorites navigation unfolded (server#13215)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13218">Do not forgot to store the second displayname portion (server#13218)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13252">Add default values when parsing account data (server#13252)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13253">Fix opening search results for comments (server#13253)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13278">Fetch lastInsertId only when id null (server#13278)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13328">Add caching headers for public previews (server#13328)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13329">Unbundle user_external to release it via appstore (server#13329)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13335">Rewrite getNumberOfUnreadCommentsForFolder query (server#13335)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13349">Fix can change password check in case of encryption is enabled (server#13349)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13352">Update the CRL (server#13352)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13354">Check anonymous OPTIONS requests file in root (not in subdir) (server#13354)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13355">Re add the uploaded file list to file drops (server#13355)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13357">Returns a 404 instead of exception if app is not installed - #13088 (server#13357)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13360">Transpile arrow function for ie11 compatibility (server#13360)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13361">IE fix for apps menu (server#13361)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13366">Allow URI as data for vcard PHOTO (server#13366)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13368">Throttle with correct metadata (server#13368)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13370">Fix loginflow with apptoken enter on iOS (server#13370)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13372">Register and show when an LDAP user was detected as unavailable/deleted (server#13372)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13404">Fix apps menu overlapping (server#13404)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13405">Use the real logger in the settings (server#13405)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13411">CSP: Allow fonts to be provided in data (server#13411)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13425">HttpClient getHeader can return empty string (server#13425)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13439">Respect classification of calendar events in activity stream (server#13439)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13444">Add support for boolean default (server#13444)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13469">Show the repair steps and repair info output in the web for better feedback (server#13469)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/114">Fix PDF sidebar shown in PDF thumbnails (files_pdfviewer#114)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/74">Do not get the url from the download links (files_videoplayer#74)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/94">Use proper slogan from theming app (firstrunwizard#94)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/96">Update info.xml (firstrunwizard#96)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/245">Update richObjectStringParser.js (notifications#245)</a></li>
    </ul>

    <h3 id="15-0-0">Version 15.0.0 <small>December 10 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.tar.bz2">nextcloud-15.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.zip">nextcloud-15.0.0.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.tar.bz2.md5">nextcloud-15.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.zip.md5">nextcloud-15.0.0.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.tar.bz2.sha256">nextcloud-15.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.zip.sha256">nextcloud-15.0.0.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.tar.bz2.sha512">nextcloud-15.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.zip.sha512">nextcloud-15.0.0.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.tar.bz2.asc">nextcloud-15.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-15.0.0.zip.asc">nextcloud-15.0.0.zip.asc</a></p>

    <h4>Changes</h4>
    <p>Nextcloud 15 introduces social networking, next-gen 2-factor authentication and innovative collaborative document editing abilities. This release also adds a new design and grid view, workflow features and 2-3x faster loading performance.</p>
    <p>As this is a major release, the changelog is very long. Find an overview of what has been improved in this series of blog posts:</p>
    <ul>
        <li><a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-15-goes-social-enforces-2fa-and-gives-you-a-new-generation-real-time-document-editing/">The full announcement</a></li>
        <li><a class="hyperlink" href="https://nextcloud.com/blog/nextcloud-introduces-social-features-joins-the-fediverse/">Introducing Social networking to Nextcloud</a></li>
        <li><a class="hyperlink" href="https://nextcloud.com/blog/next-generation-2-factor-authentication-and-security-hardening/">Next generation 2-factor authentication and security hardening</a></li>
        <li><a class="hyperlink" href="https://nextcloud.com/blog/mobile-app-integration-for-online-office-talk-in-the-file-sidebar-and-much-improved-sharing/">Online Office goes mobile, Talk in the sidebar and improved sharing</a></li>
        <li><a class="hyperlink" href="https://nextcloud.com/blog/new-grid-view-pdf-conversion-2-3x-faster-loading-dashboard-and-more/">New grid view, PDF conversion, 2-3x faster loading, dashboard and more</a></li>
    </ul>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/12292">Avoid logging of "Partial search results returned: Sizelimit exceeded…" (server#12292)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12350">Enable sorting in file picker (server#12350)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12355">15.0.0 Beta 2 (server#12355)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12401">Fix the warning appearing in the admin section when mail_smtpmode is not configured (server#12401)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12421">Prefix icon variables with app name to avoid conflicts (server#12421)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12447">Shorten index name of calendar changes table (server#12447)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12458">Fixes dav share issue with owner (server#12458)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12466">Fix string doctype casing (server#12466)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12467">Show thumbnail on rename (server#12467)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12468">Remove conflicting multiselect (server#12468)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12472">Actually return the user when creating version dav nodes (server#12472)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12474">Rollback to default list view (server#12474)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12476">Add welcome bot (server#12476)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12481">Fix navigation layout for items that are added on a re-render (server#12481)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12483">Fix login loader position and theming support (server#12483)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12484">Fix loader colours for better visibility (server#12484)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12485">Format Nextcloud Talk clients sessions. (server#12485)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12487">Remove unused svg api route (server#12487)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12489">Only use width and opacity for transition (server#12489)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12491">Fix share link password input (server#12491)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12494">Return the correct value when trying to get a non existing item from cache by id (server#12494)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12495">Fix login primary colour and feedback (server#12495)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12496">Fix revert icon position on theming settings (server#12496)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12500">Forward object not found error in swift as dav 404 (server#12500)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12515">Make number of file list entries depending on the width for grid view (server#12515)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12517">Fix loading of files external templates file (server#12517)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12518">Fix loading of .woff2 files in .htaccess (server#12518)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12525">Fix updatenotifications display, dependencies and csp (server#12525)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12531">Allow to hide download option for folders shared by link (server#12531)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12539">Fix redirect page design details (server#12539)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12543">Bearer tokens are app token (server#12543)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12544">Handle permission in update of share better (server#12544)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12552">Respect the disabled setting for lost_password_link (server#12552)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12553">Allow empty string in get absolute url (server#12553)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12554">Do not switch to root folder if filelist is already shown (server#12554)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12558">Apply border to primary button if on log in page (and not in a dark container) or if in header (server#12558)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12559">Better header navigation display (server#12559)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12570">Do not show tab headers marked as hidden (server#12570)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12571">Make connectivity check domains configurable (server#12571)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12577">Fix rendering of the sidebar in Files app (server#12577)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12580">Fix navigation more menu background for dark theme (server#12580)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12581">15.0.0 RC 1 (server#12581)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12587">Do not clear new user form on failure (server#12587)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12589">Add explanatory text to admin twofactor settings (server#12589)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12615">Fix Typo in Original English String and All Translations (server#12615)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12638">Extend anonymous options to work on every dav url (server#12638)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12683">Fix count on string (server#12683)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12692">Add interface to allow storages from opting out of encryption (server#12692)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12696">Make acceptance tests for comments more robust (server#12696)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12700">Add acceptance tests for sharing files and folders with another user (server#12700)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12712">I changed the width of the srollbar to make it a bit bigger (server#12712)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12713">Open the updater via a POST form submit instead of eval the JS code d… (server#12713)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12714">Fix folder path containing leading slash when getting mount root by id (server#12714)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12718">Add capabilities for multiple share links (server#12718)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12723">Remove old button to submit the apppassword login (server#12723)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12730">Fix versions sidebar issues (server#12730)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12731">Don't require Same Site Cookies on accessibility app assets (server#12731)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12733">Date title to linkshare (server#12733)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12736">Add pipe mode for sendmail (server#12736)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12737">Set Referrer-Policy also in addSecurityHeaders() (server#12737)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12740">Polishing fixes (server#12740)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12741">Fix the loader position and the focus state on the login button (server#12741)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12742">Add check for missing .woff2 rule in Nginx via setup check (server#12742)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12744">Update compatible versions for cloud federation api (server#12744)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12746">Fix cannot set 0 as value on files_external through OCC command (server#12746)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12755">15.0.0 RC 2 (server#12755)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12756">Parse activity when a user self-unshares a file (server#12756)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12784">Polishing of various modal dialogs (server#12784)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12805">Fix activatable/deactivatable 2fa provider interface typos (server#12805)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12811">Only run the AnonymousOptionsPlugion on Anonymous requests (server#12811)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12816">Fix the system address book (server#12816)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12825">PHP module is named mbstring (server#12825)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12828">Unshare from mail activity is missing (server#12828)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12829">Fix layout of "i" in admin settings of federated sharing (server#12829)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12830">PHP 7.0 is end of life (server#12830)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12833">Do not update child all child shares on group share update (server#12833)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12836">Validate all rich objects (server#12836)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12837">Add setup check for recommended PHP modules (i.e. Imagick, intl) (server#12837)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12847">15.0.0 RC 3 (server#12847)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12848">Make a button out of 'What's new' so it's obvious it can be clicked on (server#12848)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12849">Fix missing click event on update button (server#12849)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12853">Add setup check for pending bigint conversion (server#12853)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12856">No user enumeration on DAV if disabled (server#12856)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12861">Only execute query in propagateChange once (server#12861)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12863">Fix password confirmation lib for ie11 (server#12863)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12867">Log and continue on Dav reader failure (repair uid) (server#12867)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12868">Emit write update only once on touch (server#12868)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12880">Do not show general warning on free space error (server#12880)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12882">Set 3rdparty to pr187 (server#12882)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12908">Fix logo path in non-themed instance (server#12908)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12913">Fix unread comment icon not shown for the sharee (server#12913)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12959">Bump to 15.0.0 final (server#12959)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/118">Bump lukasreschke/id3parser from 0.0.1 to 0.0.3 (3rdparty#118)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/119">Bump stecman/symfony-console-completion from 0.7.0 to 0.8.0 (3rdparty#119)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/120">Bump guzzlehttp/guzzle from 6.3.0 to 6.3.3 (3rdparty#120)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/137">Bump leafo/scssphp from 0.7.6 to 0.7.7 (3rdparty#137)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/146">Bump synfony to 3.4.15 (3rdparty#146)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/151">Bump microsoft/azure-storage-blob from 1.1.0 to 1.2.0 (3rdparty#151)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/155">Bump swiftmailer/swiftmailer from 6.0.2 to 6.1.3 (3rdparty#155)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/161">Bump symfony to 3.4.16 (3rdparty#161)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/168">Bump symfony 3.4.17 (3rdparty#168)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/170">Remove random_compat lib (3rdparty#170)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/176">Bump sabre/dav from 3.2.2 to 3.2.3 (3rdparty#176)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/185">Manually patch PHP-Doc of VObject Splitter (3rdparty#185)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/187">Fix named parameter detection on SQLite (3rdparty#187)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/291">Update version on master (activity#291)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/293">Fix scrolling detection on activity 14 (activity#293)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/299">Make the object information available on emails (activity#299)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/300">Add the mimetype to the preview arrays (activity#300)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/301">Move to compiled handlebrs (activity#301)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/302">Remove unneeded -ms-filter (was only needed for IE8) (activity#302)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/304">Use the query builder and cast the values (activity#304)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/305">Add icon to files sidebar tab (activity#305)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/307">Fix JS unit tests after handlebars (activity#307)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/308">Shorten tab label 'Activities' to 'Activity' (activity#308)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/310">Add a intermediate migration to fix old installations (activity#310)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/311">Correctly restrict affected users when using command to send emails (activity#311)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/314">Autocomplete for email command (activity#314)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/315">Use the substract function instead of manual math (activity#315)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/316">Use the full path instead of the file name in HTML emails too (activity#316)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/319">Update stable15 target versions (activity#319)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/323">Create activity when user unshares a file themselves (activity#323)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/324">Validate rich objects before using (activity#324)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/100">Remove unneeded CSS rule for IE 11 (files_pdfviewer#100)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/109">Update stable15 target versions (files_pdfviewer#109)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/94">Update version on master (files_pdfviewer#94)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/95">Fix embedded viewer with new server layout on IE 11 (files_pdfviewer#95)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/99">Hide footer in public share page (files_pdfviewer#99)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/112">Update version on master (files_texteditor#112)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/116">Update info.xml (files_texteditor#116)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/120">Improve code blocks in markdown rendering (files_texteditor#120)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/123">Update stable15 target versions (files_texteditor#123)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/61">Update version on master (files_videoplayer#61)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/68">Fix videoplayback on NC15 (files_videoplayer#68)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/pull/69">Update stable15 target versions (files_videoplayer#69)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/78">Don't Assume Document Root (firstrunwizard#78)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/81">Update version on master (firstrunwizard#81)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/84">Remove hardcoded background-size (firstrunwizard#84)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/85">Design detail and accessibility fixes (firstrunwizard#85)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/89">Update stable15 target versions (firstrunwizard#89)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/464">Add HEIC/HEIF support to the gallery (gallery#464)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/468">Update version on master (gallery#468)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/481">Move to compiled handlebars (gallery#481)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/482">Remove sharing height limit, since it is overwriting the server defaults (gallery#482)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/484">Hide button if download links are hidden for link shares (gallery#484)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/485">Update stable15 target versions (gallery#485)</a></li>
        <li><a href="https://github.com/nextcloud/logreader/pull/74">Update version on master (logreader#74)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/33">Update version on master (nextcloud_announcements#33)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/159">Update version on master (notifications#159)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/160">Update config and babel for ie11 (notifications#160)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/162">Add vue build test (notifications#162)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/170">Update all NPM (notifications#170)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/171">Bump @babel/core from 7.0.0 to 7.0.1 (notifications#171)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/172">Bump vue-loader from 15.4.1 to 15.4.2 (notifications#172)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/173">Bump webpack from 4.18.0 to 4.19.0 (notifications#173)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/176">Update NPM packages (notifications#176)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/177">Bump webpack from 4.19.0 to 4.19.1 (notifications#177)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/179">Bump webpack from 4.19.1 to 4.20.2 (notifications#179)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/180">Bump babel-loader from 8.0.2 to 8.0.4 (notifications#180)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/184">Update all NPM (notifications#184)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/186">Switch to compiled handlebars (notifications#186)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/187">Bump webpack from 4.20.2 to 4.21.0 (notifications#187)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/188">Add .l10nignore files for compiled assets (notifications#188)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/189">Bump webpack from 4.21.0 to 4.22.0 (notifications#189)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/190">Use the rich message when available and instead of trim overlay with a shadow (notifications#190)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/194">Bump css-loader from 1.0.0 to 1.0.1 (notifications#194)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/195">Bump webpack from 4.22.0 to 4.24.0 (notifications#195)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/196">Bump webpack from 4.24.0 to 4.25.1 (notifications#196)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/197">Bump @babel/preset-env from 7.1.0 to 7.1.5 (notifications#197)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/199">Bump @babel/core from 7.1.2 to 7.1.6 (notifications#199)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/200">Bump @babel/preset-env from 7.1.5 to 7.1.6 (notifications#200)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/203">Bump webpack from 4.25.1 to 4.26.0 (notifications#203)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/204">Update stable15 target versions (notifications#204)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/210">Add icon to empty content message (notifications#210)</a></li>
        <li><a href="https://github.com/nextcloud/password_policy/pull/70">Update version on master (password_policy#70)</a></li>
        <li><a href="https://github.com/nextcloud/password_policy/pull/74">Update stable15 target versions (password_policy#74)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/129">Adds tooltip to make people aware of API JSON format (serverinfo#129)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/131">Update version on master (serverinfo#131)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/134">Update stable15 target versions (serverinfo#134)</a></li>
        <li><a href="https://github.com/nextcloud/serverinfo/pull/97">Checking for valid CPU average values (serverinfo#97)</a></li>
        <li><a href="https://github.com/nextcloud/survey_client/pull/81">Update version on master (survey_client#81)</a></li>
        <li><a href="https://github.com/nextcloud/survey_client/pull/84">Properly escape column name in "createFunction" call (survey_client#84)</a></li>
        <li><a href="https://github.com/nextcloud/survey_client/pull/86">Do not call invalid function (survey_client#86)</a></li>
        <li><a href="https://github.com/nextcloud/survey_client/pull/87">Update stable15 target versions (survey_client#87)</a></li>
    </ul>

    <a name="latest14"></a>

<h3 id="14-0-14">Version 14.0.14 <small>August 16 2019</small></h3>
<p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.tar.bz2">nextcloud-14.0.14.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.zip">nextcloud-14.0.14.zip</a></br>
Check the file integrity with:</br>
MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.tar.bz2.md5">nextcloud-14.0.14.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.zip.md5">nextcloud-14.0.14.zip.md5</a></br>
SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.tar.bz2.sha256">nextcloud-14.0.14.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.zip.sha256">nextcloud-14.0.14.zip.sha256</a></br>
SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.tar.bz2.sha512">nextcloud-14.0.14.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.zip.sha512">nextcloud-14.0.14.zip.sha512</a></br>
PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.tar.bz2.asc">nextcloud-14.0.14.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.14.zip.asc">nextcloud-14.0.14.zip.asc</a></p>

<h4>Changes</h4>
<ul>
	<li><a href="https://github.com/nextcloud/server/pull/16193">Forward OCSException to initiator (server#16193)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16342">Bump lodash.merge from 4.6.1 to 4.6.2 in /settings (server#16342)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16347">Bump lodash from 4.17.11 to 4.17.14 in /settings (server#16347)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16354">Bump lodash from 4.17.11 to 4.17.14 in /apps/oauth2 (server#16354)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16355">Bump lodash from 4.17.11 to 4.17.14 in /apps/updatenotification (server#16355)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16356">Bump lodash from 4.17.11 to 4.17.14 in /build (server#16356)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16358">Bump lodash from 4.17.11 to 4.17.14 in /apps/accessibility (server#16358)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16427">Only prevent disabling encrytion via the API (server#16427)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16434">Do not keep searching for recent (server#16434)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16609">Set proper defaults for v-tooltip usages (server#16609)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16612">Fix/xss/on favorite file (server#16612)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16648">Bump lodash.mergewith from 4.6.1 to 4.6.2 in /build (server#16648)</a></li>
	<li><a href="https://github.com/nextcloud/server/pull/16650">Bump fstream from 1.0.11 to 1.0.12 in /build (server#16650)</a></li>
	<li><a href="https://github.com/nextcloud/notifications/pull/386">Trim the subject before encrypting the subject (notifications#386)</a></li>
</ul>


    <h3 id="14-0-13">Version 14.0.13 <small>July 5 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.tar.bz2">nextcloud-14.0.13.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.zip">nextcloud-14.0.13.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.tar.bz2.md5">nextcloud-14.0.13.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.zip.md5">nextcloud-14.0.13.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.tar.bz2.sha256">nextcloud-14.0.13.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.zip.sha256">nextcloud-14.0.13.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.tar.bz2.sha512">nextcloud-14.0.13.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.zip.sha512">nextcloud-14.0.13.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.tar.bz2.asc">nextcloud-14.0.13.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.13.zip.asc">nextcloud-14.0.13.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/15630">Update CRL due to revoked cookbook.crt (server#15630)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15756">Also allow dragging below the file list (server#15756)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15862">Don't notify admins if no potentially over exposing links found (server#15862)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16031">Prevent faulty logs from nested setupFS calls (server#16031)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16062">14.0.13 RC1 (server#16062)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16094">Check if uploading to lookup server is enabled before verifying (server#16094)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16096">Fall back to black for non-color values (server#16096)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16130">Verify that paths are valid for recursive local move (server#16130)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16135">Don't allow to disable encryption via the API (server#16135)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16143">[stabel 14] Better check reshare permissions (server#16143)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16213">Fix notification casting (server#16213)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16216">Better check reshare permissions part2 (server#16216)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/16220">14.0.13 (server#16220)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/143">Fix load of character maps (files_pdfviewer#143)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/531">Correctly show errors when setting the password (gallery#531)</a></li>
    </ul>

    <h3 id="14-0-12">Version 14.0.12 <small>May 17 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.tar.bz2">nextcloud-14.0.12.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.zip">nextcloud-14.0.12.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.tar.bz2.md5">nextcloud-14.0.12.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.zip.md5">nextcloud-14.0.12.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.tar.bz2.sha256">nextcloud-14.0.12.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.zip.sha256">nextcloud-14.0.12.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.tar.bz2.sha512">nextcloud-14.0.12.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.zip.sha512">nextcloud-14.0.12.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.tar.bz2.asc">nextcloud-14.0.12.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.12.zip.asc">nextcloud-14.0.12.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/15570">DateTime is not yet in 14 (server#15570)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15573">Update ca bundle (server#15573)</a></li>
    </ul>

    <h3 id="14-0-11">Version 14.0.11 <small>May 16 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.tar.bz2">nextcloud-14.0.11.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.zip">nextcloud-14.0.11.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.tar.bz2.md5">nextcloud-14.0.11.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.zip.md5">nextcloud-14.0.11.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.tar.bz2.sha256">nextcloud-14.0.11.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.zip.sha256">nextcloud-14.0.11.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.tar.bz2.sha512">nextcloud-14.0.11.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.zip.sha512">nextcloud-14.0.11.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.tar.bz2.asc">nextcloud-14.0.11.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.11.zip.asc">nextcloud-14.0.11.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/15007">Reconnect to DB after timeout for Notify command. Fixes #14479 (server#15007)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15070">3rdparty] Bump sabre to 3.2.3 (server#15070)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15072">Do not allow invalid users to be created (server#15072)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15120">Do not use spaces in generated passwords (server#15120)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15140">Backport/15129/stable14 (server#15140)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15159">Load apps before running repair steps (server#15159)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15207">Prefetching blows up if there are a lot of files. (server#15207)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15329">[Security] Bump tar from 4.4.1 to 4.4.8 in /apps/updatenotification (server#15329)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15330">[Security] Bump tar from 4.4.1 to 4.4.8 in /apps/accessibility (server#15330)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15331">[Security] Bump tar from 4.4.1 to 4.4.8 in /apps/oauth2 (server#15331)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15335">[Security] Bump tar from 4.4.1 to 4.4.8 in /settings (server#15335)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15343">Check if the data is in the lookup server (server#15343)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15347">Do NOT assume all files are selected if the first checkbox is (server#15347)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15391">Fix collapse button in app navigation in IE11 (server#15391)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15423">Set Edge < 16 as incompatible with css vars (server#15423)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15444">Remove setup args from logging (server#15444)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15473">Remove recommendation for opcache on CLI (server#15473)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15484">Update file-upload.js (server#15484)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/266">Bump sabre/dav to 3.2.3 (3rdparty#266)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/152">Use correct CSS URL, remove default marked settings and change to GFM rendering (files_texteditor#152)</a></li>
        <li><a href="https://github.com/nextcloud/survey_client/pull/92">Do not call invalid function (survey_client#92)</a></li>
    </ul>

    <h3 id="14-0-10">Version 14.0.10 <small>April 9 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.tar.bz2">nextcloud-14.0.10.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.zip">nextcloud-14.0.10.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.tar.bz2.md5">nextcloud-14.0.10.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.zip.md5">nextcloud-14.0.10.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.tar.bz2.sha256">nextcloud-14.0.10.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.zip.sha256">nextcloud-14.0.10.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.tar.bz2.sha512">nextcloud-14.0.10.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.zip.sha512">nextcloud-14.0.10.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.tar.bz2.asc">nextcloud-14.0.10.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.10.zip.asc">nextcloud-14.0.10.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/14996">Fix .drone.yml syntax (server#14996)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/15002">Check if OCA.Files.App is available before calling (server#15002)</a></li>
    </ul>

    <h3 id="14-0-9">Version 14.0.9 <small>April 4 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.tar.bz2">nextcloud-14.0.9.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.zip">nextcloud-14.0.9.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.tar.bz2.md5">nextcloud-14.0.9.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.zip.md5">nextcloud-14.0.9.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.tar.bz2.sha256">nextcloud-14.0.9.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.zip.sha256">nextcloud-14.0.9.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.tar.bz2.sha512">nextcloud-14.0.9.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.zip.sha512">nextcloud-14.0.9.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.tar.bz2.asc">nextcloud-14.0.9.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.9.zip.asc">nextcloud-14.0.9.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/14415">Bugfix for issue 10862: Trash-bin ignores trashbin_retention_obligation (server#14415)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14417">Parse multiple navigation items (server#14417)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14491">Add accessibility translations (server#14491)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14496">Run tests that fail with "no such process" over to apache server (server#14496)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14498">Make header.feature more robust by running it on apache (server#14498)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14504">Fix expire date change eventhandler (server#14504)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14513">Update icewind/smb to 3.0.2 (server#14513)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14533">Fix database configuration (server#14533)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14543">Check if password can be changed for the users backend in OCS api (server#14543)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14547">Add test for updated CA bundle (server#14547)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14592">Resolve user and groups in nested groups first before filtering the results (server#14592)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14595">Remove Google+ from Social Sharing Bundle (server#14595)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14598">Do not calculate folder size for parent that also needs proper scan, fixes #3524 (server#14598)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14600">Mention Open Cloud Mesh in Federated User Settings (server#14600)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14659">Remove sensitive SMB arguments from exception log (server#14659)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14673">Disable fragile tests (server#14673)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14701">Throw a proper error if rename fails in dav (server#14701)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14760">Always allow moving mountpoints inside the same mountpoint (server#14760)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14782">Fix user creation using LDAP Plugin (server#14782)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14783">Always register the Notifier (server#14783)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14841">Fix placeholder in disable message (server#14841)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14856">Remove Google+ federation usersettings (server#14856)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14866">Fix a bug with smb notify having leading slash when it should not (server#14866)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14868">Avoid replacement by user object (server#14868)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14881">Fix translations of settings (server#14881)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14890">Fix opening folders from different file lists (server#14890)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/356">Locale is not language (activity#356)</a></li>
    </ul>

    <h3 id="14-0-8">Version 14.0.8 <small>February 28 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.tar.bz2">nextcloud-14.0.8.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.zip">nextcloud-14.0.8.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.tar.bz2.md5">nextcloud-14.0.8.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.zip.md5">nextcloud-14.0.8.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.tar.bz2.sha256">nextcloud-14.0.8.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.zip.sha256">nextcloud-14.0.8.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.tar.bz2.sha512">nextcloud-14.0.8.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.zip.sha512">nextcloud-14.0.8.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.tar.bz2.asc">nextcloud-14.0.8.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.8.zip.asc">nextcloud-14.0.8.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/14069">Update icewind/smb to 3.0.1 (server#14069)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14086">Fix: Check if `$this->params['user']` is an array (server#14086)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14089">[Security] Bump extend from 3.0.1 to 3.0.2 in /build (server#14089)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14090">[Security] Bump lodash from 4.17.10 to 4.17.11 in /apps/accessibility (server#14090)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14091">[Security] Bump lodash from 4.17.10 to 4.17.11 in /build (server#14091)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14092">[Security] Bump lodash from 4.17.10 to 4.17.11 in /apps/oauth2 (server#14092)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14096">[Security] Bump lodash from 4.17.10 to 4.17.11 in /apps/updatenotification (server#14096)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14152">Fix the thorrtler whitelist bitmask (server#14152)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14188">[Security] Bump handlebars from 4.0.11 to 4.1.0 in /build (server#14188)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14196">Fix recent files (server#14196)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14202">Update CRL to contain revoked files_external_dropbox, passman & payback (server#14202)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14205">Fix small glitches in update notification page (server#14205)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14206">Ensure attribute names are lower cased (server#14206)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14226">Remove trailing spaces from localized strings (server#14226)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14278">Catch Request exception in testRemoteUrl (server#14278)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14284">Correctly determinate the owner in case of shared external storages (server#14284)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14372">Use latest ca-bundle.crt from https://curl.haxx.se/docs/caextract.html (server#14372)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/348">Make sure the parameters are always an array (activity#348)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/294">Bye, Scrutinizer! (notifications#294)</a></li>
    </ul>

    <h3 id="14-0-7">Version 14.0.7 <small>February 7 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.tar.bz2">nextcloud-14.0.7.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.zip">nextcloud-14.0.7.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.tar.bz2.md5">nextcloud-14.0.7.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.zip.md5">nextcloud-14.0.7.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.tar.bz2.sha256">nextcloud-14.0.7.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.zip.sha256">nextcloud-14.0.7.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.tar.bz2.sha512">nextcloud-14.0.7.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.zip.sha512">nextcloud-14.0.7.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.tar.bz2.asc">nextcloud-14.0.7.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.7.zip.asc">nextcloud-14.0.7.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/13035">Upload new files in objectstore to a .part path first (server#13035)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13385">Broker: add timezone to CANCEL messages (server#13385)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13558">Check anonymous OPTIONS requests file in root (not in subdir) (server#13558)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13583">Principals can be principal/user/<name> or principal/<name> from lega… (server#13583)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13599">Update pear/acrchive_tar to 1.4.5 (server#13599)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13637">Update URL for federation (server#13637)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13654">Fix colorizeSvg with transformations that contain a comma (,) (server#13654)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13666">Use warning background color & primary text color for setting warnings (server#13666)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13671">Fix template paramter (server#13671)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13708">Vcard avatar fixes (server#13708)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13741">Cache tokens when using swift's v2 authentication (server#13741)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13745">Cleanup shared lock if changing to exclusive lock failed (server#13745)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13763">Respect user locale in natural sort comparator (server#13763)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13767">Honor remember_login_cookie_lifetime (server#13767)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13782">Show proper default locale (server#13782)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13788">Add acceptance tests for moving and copying files (server#13788)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13822">Bump bower from 1.8.4 to 1.8.8 in /build (server#13822)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13888">Fix dropping a folder on a folder row (server#13888)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13901">Fix updating the password of a link share when passwords are enforced (server#13901)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13916">Clean pending 2FA authentication on password reset (server#13916)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13921">Forward error message from password policy (server#13921)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13922">Ignore non existing users when retrieving details of group members (server#13922)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13923">Fix paged search with multiple bases (LDAP) (server#13923)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13928">Remove .css fileending from accessibility user css route (server#13928)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13931">Handle mail send error gracefully (server#13931)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/215">Bump pear/archive_tar from 1.4.3 to 1.4.5 (3rdparty#215)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/259">Fix notification documentation to reflect recent changes (notifications#259)</a></li>
    </ul>

    <h3 id="14-0-6">Version 14.0.6 <small>January 11 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.tar.bz2">nextcloud-14.0.6.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.zip">nextcloud-14.0.6.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.tar.bz2.md5">nextcloud-14.0.6.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.zip.md5">nextcloud-14.0.6.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.tar.bz2.sha256">nextcloud-14.0.6.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.zip.sha256">nextcloud-14.0.6.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.tar.bz2.sha512">nextcloud-14.0.6.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.zip.sha512">nextcloud-14.0.6.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.tar.bz2.asc">nextcloud-14.0.6.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.6.zip.asc">nextcloud-14.0.6.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/13480">Don't log parameters on user creation in case of error/exception (server#13480)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13507">RemoveClassifiedEventActivity: check if calendar still exists (server#13507)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/197">Broker: add timezone to CANCEL messages (3rdparty#197)</a></li>
    </ul>

    <h3 id="14-0-5">Version 14.0.5 <small>January 10 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.tar.bz2">nextcloud-14.0.5.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.zip">nextcloud-14.0.5.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.tar.bz2.md5">nextcloud-14.0.5.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.zip.md5">nextcloud-14.0.5.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.tar.bz2.sha256">nextcloud-14.0.5.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.zip.sha256">nextcloud-14.0.5.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.tar.bz2.sha512">nextcloud-14.0.5.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.zip.sha512">nextcloud-14.0.5.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.tar.bz2.asc">nextcloud-14.0.5.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.5.zip.asc">nextcloud-14.0.5.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/12540">Throw exception if decryption fails (server#12540)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12555">Respect the disabled setting for lost_password_link (server#12555)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12560">Fix share link password input (server#12560)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12593">Do not switch to root folder if filelist is already shown (server#12593)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12596">Load apps that have a dav type set before the dav server plugins (server#12596)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12598">Fix rendering of the sidebar in Files app (server#12598)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12600">Fix Typo in Original English String and All Translations (server#12600)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12617">Adjust Calendar resource / room interfaces to use class implementation (server#12617)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12639">Extend anonymous options to work on every dav url (server#12639)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12684">Fix count on string (server#12684)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12715">Fix folder path containing leading slash when getting mount root by id (server#12715)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12738">Set Referrer-Policy also in addSecurityHeaders() (server#12738)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12739">Make sure to always load the latest icons-vars.css file (server#12739)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12745">Update compatible versions for cloud federation api (server#12745)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12748">Fix interaction with groups that contain a slash (server#12748)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12749">Add pipe mode for sendmail (server#12749)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12812">Only run the AnonymousOptionsPlugion on Anonymous requests (server#12812)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12817">Fix the system address book (server#12817)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12826">PHP module is named mbstring (server#12826)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12834">Do not update child all child shares on group share update (server#12834)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12850">Fix missing click event on update button (server#12850)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12860">Fix password confirmation lib for ie11 (server#12860)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12862">Only execute query in propagateChange once (server#12862)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12869">Emit write update only once on touch (server#12869)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12914">Fix unread comment icon not shown for the sharee (server#12914)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13030">Better activities for systemtags that are removed by CLI (server#13030)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13037">Settings ie11 fixes (server#13037)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13077">Ie11 compatibility updatenotifications (server#13077)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13120">Fix exception on LDAP mapping during login (server#13120)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13124">Fix SAML Client login flow on Apple devices (server#13124)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13152">Prevent special characters from breaking the file drop remote url (server#13152)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13180">Use a case insensitive search for email (server#13180)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13207">Fix ie11 checkboxes (server#13207)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13216">Files list not rendering if user has favorites navigation unfolded (server#13216)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13219">Do not forgot to store the second displayname portion (server#13219)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13224">Use only app path to get the icon on the svg api (server#13224)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13254">Fix opening search results for comments (server#13254)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13321">Force var to be integer (server#13321)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13322">Make the footer "Get your own free account" translatable (server#13322)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13350">Fix can change password check in case of encryption is enabled (server#13350)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13353">Update the CRL (server#13353)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13369">Throttle with correct metadata (server#13369)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13371">Fix loginflow with apptoken enter on iOS (server#13371)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13373">Register and show when an LDAP user was detected as unavailable/deleted (server#13373)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13426">HttpClient getHeader can return empty string (server#13426)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13441">Respect classification of calendar events in activity stream (server#13441)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13445">Add support for boolean default (server#13445)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13470">Show the repair steps and repair info output in the web for better feedback (server#13470)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/115">Fix PDF sidebar shown in PDF thumbnails (files_pdfviewer#115)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/92">Remove hardcoded background-size (firstrunwizard#92)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/95">Use proper slogan from theming app (firstrunwizard#95)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/97">Update info.xml (firstrunwizard#97)</a></li>
    </ul>

    <h3 id="14-0-4">Version 14.0.4 <small>November 22 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.tar.bz2">nextcloud-14.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.zip">nextcloud-14.0.4.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.tar.bz2.md5">nextcloud-14.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.zip.md5">nextcloud-14.0.4.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.tar.bz2.sha256">nextcloud-14.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.zip.sha256">nextcloud-14.0.4.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.tar.bz2.sha512">nextcloud-14.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.zip.sha512">nextcloud-14.0.4.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.tar.bz2.asc">nextcloud-14.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.4.zip.asc">nextcloud-14.0.4.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/11772">Allow overwrite.cli.url without trailing slash (server#11772)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11781">Remove duplicate call to decodeURIComponent (server#11781)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11783">Check for empty string (server#11783)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11798">Add "Referrer-Policy" to htaccess file, addresses issue #11099 (server#11798)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11800">Always query the lookup server in a global scale setup (server#11800)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11851">Fix a case where "password_by_talk" was not a boolean (server#11851)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11925">Add .l10nignore files for compiled assets (server#11925)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11929">Properly escape column name in "createFunction" call (server#11929)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11939">Allow userId to be null (server#11939)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11950">Allow "same-origin" as "Referrer-Policy" (Backport to stable14) (server#11950)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11961">Do not emit preHooks twice on non-part-storage (server#11961)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11976">Filter null values for UserManager::getByEmail (server#11976)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11979">Allow local delivery of schedule message while prohibiting FreeBusy requests (server#11979)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11990">Load apps/APP/l10n/*.js and themes/THEME/apps/APP/l10n/*.js (server#11990)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11994">Lazy open first source stream in assemblystream (server#11994)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11995">Fix opening a section again in the Files app (server#11995)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12005">Remove cookies from Clear-Site-Data Header (server#12005)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12032">Forwarded ExpiredTokenException (server#12032)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12040">Allow chunked uploads even if your quota is not sufficient (server#12040)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12045">Improve encrypt all / decrypt all (server#12045)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12108">Double check for failed cache with a shared storage (server#12108)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12111">Implement the size of an assembly stream (server#12111)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12120">Bring the browser window of an actor to the foreground when acting as him (server#12120)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12121">Move acceptance tests that crash the PHP built-in server to Apache (server#12121)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12122">Remove unneeded empty search attribute values, fixes #12086 (server#12122)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12137">Fixes wrong variable usage (server#12137)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12141">LDAP: announce display name changes so that addressbook picks it up (server#12141)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12160">Bruteforce protection handling in combination with (server#12160)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12184">Add global site selector as user back-end which doesn't support password confirmation (server#12184)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12187">Do not set indeterminate state for file shares (server#12187)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12197">Revert "Wait for cron to finish before running upgrade command" (server#12197)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12202">Fix bug #12151: fix list formatting by correcting malformed html (server#12202)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12297">A folder should get a folder mimetype (server#12297)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12299">Use the proper server for the apptoken flow login (server#12299)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12300">Do not log FileLock as exception (server#12300)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12301">Set the filemodel before rending the detailsview (server#12301)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12331">Disabled ldap fix (server#12331)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12339">Fix - Add to favorites not working in IE11 (server#12339)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12341">Remove arrow function for ie compatibility (server#12341)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12353">Fix default types of activity event member variables (server#12353)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12372">Suppress wrong audit log messages about failed login attempts (server#12372)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12374">Add fix for IE11 flexbox height bug (server#12374)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12375">Properly search the root of a shared external storage (server#12375)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12412">Fix app update available check (server#12412)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12416">Use nextcloud-password-confirmation (server#12416)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12431">Fix IE rule for min width (server#12431)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12432">Added cache override to ensure an always up-to-date accessibility css (server#12432)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12433">Unique contraint and deadlock fixes for filecache and file_locks (server#12433)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12440">Fix app menu calculation for random size of the right header (server#12440)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12441">Fix missing quickaccess favorite folder on add (server#12441)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12459">Fixes dav share issue with owner (server#12459)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12482">Fix wrong share popover opening on share link (server#12482)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12492">Only use width and opacity for transition (server#12492)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12502">Forward object not found error in swift as dav 404 (server#12502)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12529">Fix the warning appearing in the admin section when mail_smtpmode is not configured (server#12529)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12542">Remove unused svg api route (server#12542)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12545">Bearer tokens are app token (server#12545)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12561">Handle permission in update of share better (server#12561)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/312">Correctly restrict affected users when using command to send emails (activity#312)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/121">Improve code blocks in markdown rendering (files_texteditor#121)</a></li>
        <li><a href="https://github.com/nextcloud/survey_client/pull/85">Properly escape column name in "createFunction" call (survey_client#85)</a></li>
    </ul>

    <h3 id="14-0-3">Version 14.0.3 <small>October 12 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.tar.bz2">nextcloud-14.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.zip">nextcloud-14.0.3.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.tar.bz2.md5">nextcloud-14.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.zip.md5">nextcloud-14.0.3.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.tar.bz2.sha256">nextcloud-14.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.zip.sha256">nextcloud-14.0.3.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.tar.bz2.sha512">nextcloud-14.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.zip.sha512">nextcloud-14.0.3.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.tar.bz2.asc">nextcloud-14.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.3.zip.asc">nextcloud-14.0.3.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/11662">Fixes the apps menu scrollbar (server#11662)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11761">Ignore "session_lifetime" if it can not be converted to a number (server#11761)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11770">Normalize getUnjailedPath (server#11770)</a></li>
    </ul>

    <h3 id="14-0-2">Version 14.0.2 <small>October 11 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.tar.bz2">nextcloud-14.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.zip">nextcloud-14.0.2.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.tar.bz2.md5">nextcloud-14.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.zip.md5">nextcloud-14.0.2.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.tar.bz2.sha256">nextcloud-14.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.zip.sha256">nextcloud-14.0.2.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.tar.bz2.sha512">nextcloud-14.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.zip.sha512">nextcloud-14.0.2.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.tar.bz2.asc">nextcloud-14.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.2.zip.asc">nextcloud-14.0.2.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/11350">Fix contacts menu on mentions (server#11350)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11373">Make the server ready to use global scale with SAML as auth back-end (server#11373)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11374">Fix default flex shrink on list (server#11374)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11385">Fixes the logo height (server#11385)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11389">Do not explode when getting permissions from a FailedStorage (server#11389)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11399">Do not hide the progress bar while the chunked upload is being assembled (server#11399)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11418">Fix "checkWellKnownUrl" not being run (server#11418)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11425">Add back the total used space per user (server#11425)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11426">Fix invalid inline input confirm border (server#11426)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11430">Center back the history icon (server#11430)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11436">AssemblyStream is also eof if we have no more source stream (server#11436)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11451">Re-enable upload button after updating Avatar (server#11451)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11488">Fix typo in config.sample.php (server#11488)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11489">Bugfix 2FA theme: buttons white (server#11489)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11490">Update config and babel for ie11 (server#11490)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11492">Only catch QueryException when trying to build class (server#11492)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11493">Show auth type "None" in email settings (server#11493)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11510">Fix public page footer link wrap (server#11510)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11511">Fix share header text on small widths (server#11511)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11516">Add missing compiled mimetype list (server#11516)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11525">Fixes the move/copy picker buttons (server#11525)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11530">Fix breadcrumbs (server#11530)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11554">Added kinetic scrolling for iOS to apps dropdown menu #10281 (server#11554)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11555">Throw an error if a node is smaller than expected in assemblystream (server#11555)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11556">Reduce the min-width of the files table so it works on sharing pages on mobile (server#11556)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11558">Fix header overflow, fix more apps menu, fix #11552 (server#11558)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11575">Add new group entry on users list + fixes (server#11575)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11577">Redirect guests to login if they follow the link of a comment mention-notifications (server#11577)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11579">Force multiselect max-height to 5.5 items (server#11579)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11580">Just update password hash without validating (server#11580)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11582">Fix sticky header on users list (server#11582)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11608">Fix header border on users list (server#11608)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11610">Fix call to logger (server#11610)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11703">Allow the creationg of previews of files stored in appdata (server#11703)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11706">Update CRL due to changed cert for linkshareex (server#11706)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11738">Fix a misleading setup check for .well-known/caldav & carddav (server#11738)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/101">Remove unneeded CSS rule for IE 11 (files_pdfviewer#101)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/103">Hide footer in public share page (files_pdfviewer#103)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/98">Fix embedded viewer with new server layout on IE 11 (files_pdfviewer#98)</a></li>
    </ul>

    <h3 id="14-0-1">Version 14.0.1 <small>September 25 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.tar.bz2">nextcloud-14.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.zip">nextcloud-14.0.1.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.tar.bz2.md5">nextcloud-14.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.zip.md5">nextcloud-14.0.1.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.tar.bz2.sha256">nextcloud-14.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.zip.sha256">nextcloud-14.0.1.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.tar.bz2.sha512">nextcloud-14.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.zip.sha512">nextcloud-14.0.1.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.tar.bz2.asc">nextcloud-14.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.1.zip.asc">nextcloud-14.0.1.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/11039">Fixes the upload progress bar layout - 14 backport (server#11039)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11077">Fix markup and style of mentions in comments (server#11077)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11090">Do not invalidate main token on OAuth (server#11090)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11103">Expire tokens hardening (server#11103)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11152">fix js files client for user names with spaces (server#11152)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11186">Fix user and group listing with users that have an integer user id (server#11186)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11187">Fix exception class (server#11187)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11191">Remove posix_getpwuid and compare only userid (server#11191)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11201">Fix check for more users in sharing dialogue (server#11201)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11237">Remove filter_var flags due to PHP 7.3 deprecation, fixes #10894 (server#11237)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11259">Fixes empty favorite names for trailing slashes (server#11259)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11276">Fix size of icons in menus inside apps when shown as images (server#11276)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11277">Prevent comment being composed from overlapping the submit button (server#11277)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11280">replace setcookie value with '' instead of null. (server#11280)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11282">Fix the link and anchor for the update notifications (server#11282)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11283">Include empty directories in the default state of acceptance tests (server#11283)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11287">Get permission of storage for shares (server#11287)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11288">Shared by info for room shares without names (server#11288)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11291">Fix icons cacher regex for compressed output (server#11291)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11293">Revert "Use APCu caching of composer" (server#11293)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11294">Use user locale as default in the template (server#11294)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11302">Fix expiration code of tokens (server#11302)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11340">Add unit test for findLanguageFromLocale (server#11340)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/295">14 scroll fix (activity#295)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/111">Update stable14 target versions (files_texteditor#111)</a></li>
        <li><a href="https://github.com/nextcloud/firstrunwizard/pull/80">Update stable14 target versions (firstrunwizard#80)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/467">Update stable14 target versions (gallery#467)</a></li>
        <li><a href="https://github.com/nextcloud/nextcloud_announcements/pull/32">Update stable14 target versions (nextcloud_announcements#32)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/158">Update stable14 target versions (notifications#158)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/161">Update config and babel for ie11 (notifications#161)</a></li>
    </ul>

    <h3 id="14-0-0">Version 14.0.0 <small>September 10 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.tar.bz2">nextcloud-14.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.zip">nextcloud-14.0.0.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.tar.bz2.md5">nextcloud-14.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.zip.md5">nextcloud-14.0.0.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.tar.bz2.sha256">nextcloud-14.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.zip.sha256">nextcloud-14.0.0.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.tar.bz2.sha512">nextcloud-14.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.zip.sha512">nextcloud-14.0.0.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.tar.bz2.asc">nextcloud-14.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-14.0.0.zip.asc">nextcloud-14.0.0.zip.asc</a></p>

    <h4>Changes</h4>
    <p>Nextcloud 14 merged nearly 1000 pull requests with improvements and changes, almost 150 more than Nextcloud 13. This only covers the core server, hundreds more changes were made in the apps that make up our release, making this version officially our biggest release ever.</p>
    <p>While we can never cover everything that has improved, these are the main feature highlights:</p>
    <ul>
    <li>Video Verification - use a video call with Talk to verify the identity of
    somebody before granting them access to a share</li>
    <li>Two-factor authentication now with Signal and Telegram as well as NFC and SMS</li>
    <li>Accessibility improvements & dark theme</li>
    <li>Add a note to shares, share files in a Talk chat, new Deck Kanban app and much more</li>
    </ul>
    <p><a href="https://nextcloud.com/blog/nextcloud-14-now-available-with-video-verification-signaltelegram-2fa-support-improved-collaboration-and-gdpr-compliance/">Our blog with more details is here.</a></p>

    <a name="latest13"></a>

    <h3 id="13-0-12">Version 13.0.12 <small>February 29 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.tar.bz2">nextcloud-13.0.12.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.zip">nextcloud-13.0.12.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.tar.bz2.md5">nextcloud-13.0.12.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.zip.md5">nextcloud-13.0.12.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.tar.bz2.sha256">nextcloud-13.0.12.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.zip.sha256">nextcloud-13.0.12.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.tar.bz2.sha512">nextcloud-13.0.12.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.zip.sha512">nextcloud-13.0.12.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.tar.bz2.asc">nextcloud-13.0.12.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.12.zip.asc">nextcloud-13.0.12.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/14067">Update icewind/smb to 2.0.6 (server#14067)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14204">Update CRL to contain revoked files_external_dropbox, passman & payback (server#14204)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14208">Ensure attribute names are lower cased (server#14208)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/14224">Decrease $maxDelay in Throttler.php (server#14224)</a></li>
    </ul>

    <h3 id="13-0-11">Version 13.0.11 <small>February 7 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.tar.bz2">nextcloud-13.0.11.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.zip">nextcloud-13.0.11.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.tar.bz2.md5">nextcloud-13.0.11.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.zip.md5">nextcloud-13.0.11.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.tar.bz2.sha256">nextcloud-13.0.11.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.zip.sha256">nextcloud-13.0.11.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.tar.bz2.sha512">nextcloud-13.0.11.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.zip.sha512">nextcloud-13.0.11.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.tar.bz2.asc">nextcloud-13.0.11.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.11.zip.asc">nextcloud-13.0.11.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/13584">Principals can be principal/user/<name> or principal/<name> from legacy installs (server#13584)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13600">Bump pear/archive_tar to 1.4.5 (server#13600)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13638">Update URL for federation (server#13638)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13707">Don't log parameters on user creation in case of error/exception (server#13707)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13746">Cleanup shared lock if changing to exclusive lock failed (server#13746)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13889">Fix dropping a folder on a folder row (server#13889)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13917">Clean pending 2FA authentication on password reset (server#13917)</a></li>
        <li><a href="https://github.com/nextcloud/3rdparty/pull/216">Pear/archive_tar 1.4.5 (3rdparty#216)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/pull/260">Fix notification documentation to reflect recent changes (notifications#260)</a></li>
    </ul>

    <h3 id="13-0-10">Version 13.0.10 <small>January 11 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.tar.bz2">nextcloud-13.0.10.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.zip">nextcloud-13.0.10.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.tar.bz2.md5">nextcloud-13.0.10.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.zip.md5">nextcloud-13.0.10.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.tar.bz2.sha256">nextcloud-13.0.10.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.zip.sha256">nextcloud-13.0.10.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.tar.bz2.sha512">nextcloud-13.0.10.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.zip.sha512">nextcloud-13.0.10.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.tar.bz2.asc">nextcloud-13.0.10.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.10.zip.asc">nextcloud-13.0.10.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/13508">RemoveClassifiedEventActivity: check if calendar still exists (server#13508)</a></li>
    </ul>

    <h3 id="13-0-9">Version 13.0.9 <small>January 10 2019</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.tar.bz2">nextcloud-13.0.9.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.zip">nextcloud-13.0.9.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.tar.bz2.md5">nextcloud-13.0.9.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.zip.md5">nextcloud-13.0.9.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.tar.bz2.sha256">nextcloud-13.0.9.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.zip.sha256">nextcloud-13.0.9.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.tar.bz2.sha512">nextcloud-13.0.9.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.zip.sha512">nextcloud-13.0.9.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.tar.bz2.asc">nextcloud-13.0.9.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.9.zip.asc">nextcloud-13.0.9.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/12595">Load apps that have a dav type set before the dav server plugins (server#12595)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12616">Fix typo in original english string and all translations (server#12616)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12818">Fix the system address book (server#12818)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12827">PHP module is named mbstring (server#12827)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12835">Do not update child all child shares on group share update (server#12835)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12864">Only execute query in propagateChange once (server#12864)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13125">Fix SAML Client login flow on Apple devices (server#13125)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13153">Prevent special characters from breaking the file drop remote url (server#13153)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13220">Do not forgot to store the second displayname portion (server#13220)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13359">Update the CRL (server#13359)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13374">Fix loginflow with apptoken enter on iOS (server#13374)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13422">Log more information about insufficient storage in dav plugin (server#13422)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13443">Respect classification of calendar events in activity stream (server#13443)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/13471">Show the repair steps and repair info output in the web for better feedback (server#13471)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/116">Fix PDF sidebar shown in PDF thumbnails (files_pdfviewer#116)</a></li>
    </ul>

    <h3 id="13-0-8">Version 13.0.8 <small>November 22 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.tar.bz2">nextcloud-13.0.8.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.zip">nextcloud-13.0.8.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.tar.bz2.md5">nextcloud-13.0.8.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.zip.md5">nextcloud-13.0.8.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.tar.bz2.sha256">nextcloud-13.0.8.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.zip.sha256">nextcloud-13.0.8.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.tar.bz2.sha512">nextcloud-13.0.8.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.zip.sha512">nextcloud-13.0.8.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.tar.bz2.asc">nextcloud-13.0.8.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.8.zip.asc">nextcloud-13.0.8.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/11762">Ignore "session_lifetime" if it can not be converted to a number (server#11762)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11857">Change password expiration time from 12h to 7d (server#11857)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11962">Do not emit preHooks twice on non-part-storage (server#11962)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11978">Filter null values for UserManager::getByEmail (server#11978)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11982">Allow local delivery of schedule message while prohibiting FreeBusy requests (server#11982)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11992">Load apps/APP/l10n/*.js and themes/THEME/apps/APP/l10n/*.js (server#11992)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11996">Fix opening a section again in the Files app (server#11996)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11997">Lazy open first source stream in assemblystream (server#11997)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12006">Remove cookies from Clear-Site-Data Header (server#12006)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12060">Actually return the root folder when traversing up the tree (server#12060)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12109">Double check for failed cache with a shared storage (server#12109)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12112">Implement the size of an assembly stream (server#12112)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12123">Remove unneeded empty search attribute values, fixes #12086 (server#12123)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12142">LDAP: announce display name changes so that addressbook picks it up (server#12142)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12208">Reset bruteforce on token refresh OAuth (server#12208)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12212">Expired tokens should not trigger bruteforce protection (server#12212)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12298">A folder should get a folder mimetype (server#12298)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12376">Properly search the root of a shared external storage (server#12376)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12434">Unique contraint and deadlock fixes for filecache and file_locks (server#12434)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12460">Fixes dav share issue with owner (server#12460)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12503">Forward object not found error in swift as dav 404 (server#12503)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12546">Bearer tokens are app token (server#12546)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12562">Handle permission in update of share better (server#12562)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/313">Correctly restrict affected users when using command to send emails (activity#313)</a></li>
    </ul>

    <h3 id="13-0-7">Version 13.0.7 <small>October 11 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.tar.bz2">nextcloud-13.0.7.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.zip">nextcloud-13.0.7.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.tar.bz2.md5">nextcloud-13.0.7.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.zip.md5">nextcloud-13.0.7.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.tar.bz2.sha256">nextcloud-13.0.7.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.zip.sha256">nextcloud-13.0.7.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.tar.bz2.sha512">nextcloud-13.0.7.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.zip.sha512">nextcloud-13.0.7.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.tar.bz2.asc">nextcloud-13.0.7.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.7.zip.asc">nextcloud-13.0.7.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/10804">Prefer using dir instead of allinfo for getting smb file info (server#10804)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/10824">[LDAP] The WebUI Wizard also should not assign empty config IDs (server#10824)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/10829">Fix mimetype detection for junked uploads (server#10829)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/10884">Improve performance when dealing with large numbers of shares (server#10884)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/10902">Cast timestamps older than unix epoch to 0 (server#10902)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/10911">Use the same ignored properties list for both CustomerPropertiesBackends (server#10911)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11400">Do not hide the progress bar while the chunked upload is being assembled (server#11400)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11419">Fix "checkWellKnownUrl" not being run (server#11419)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11437">AssemblyStream is also eof if we have no more source stream (server#11437)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11494">Show auth type "None" in email settings (server#11494)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11524">Fixes the move/copy picker buttons (server#11524)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11704">Allow the creationg of previews of files stored in appdata (server#11704)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11707">Update CRL due to changed cert for linkshareex (server#11707)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11739">Fix a misleading setup check for .well-known/caldav & carddav (server#11739)</a></li>
    </ul>

    <h3 id="13-0-6">Version 13.0.6 <small>August 30 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.tar.bz2">nextcloud-13.0.6.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.zip">nextcloud-13.0.6.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.tar.bz2.md5">nextcloud-13.0.6.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.zip.md5">nextcloud-13.0.6.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.tar.bz2.sha256">nextcloud-13.0.6.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.zip.sha256">nextcloud-13.0.6.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.tar.bz2.sha512">nextcloud-13.0.6.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.zip.sha512">nextcloud-13.0.6.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.tar.bz2.asc">nextcloud-13.0.6.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.6.zip.asc">nextcloud-13.0.6.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/10285">Add sabre plugin to allow anonymous options requests to the dav root (server#10285)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10376">Do scan the root storage in background scan (server#10376)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10552">Adding test for table schedulingobjects and fixing postgres LOB (server#10552)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10565">Fix transfering ownership of a share to user with same id as receiver (server#10565)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10581">Make file cache updates more robust (server#10581)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10591">Retry smb stat on timeout (server#10591)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10620">Use insertIfNotExists to store new mimetypes. (server#10620)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10646">Only warn about data lose on password reset if per-user keys are used (server#10646)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10682">Update the scope of the lockdownmanager (server#10682)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10698">Log entries that are hidden during file listing (server#10698)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10735">Forgotten pass fix link (server#10735)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10759">Fix comment style in config sample (server#10759)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10760">Make sure error_log() always receives a string (server#10760)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10761">Fix call to OC.generateUrl for caldav birthday calendar on/off (server#10761)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10762">Use the path_hash instead of the path to query the filecache (server#10762)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10763">Don't blame random people for background email updates (server#10763)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10783">Resolve all group memberships properly (server#10783)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10816">Remove unexecutable code (server#10816)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10821">Improve URL detection (server#10821)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10823">MySQL 8.0+ and MariaDB 10.3+ are large prefix and barracuda by default (server#10823)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10837">Disallow negative mtime in dav search (server#10837)</a></li>
    </ul>

    <h3 id="13-0-5">Version 13.0.5 <small>July 23 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.tar.bz2">nextcloud-13.0.5.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.zip">nextcloud-13.0.5.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.tar.bz2.md5">nextcloud-13.0.5.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.zip.md5">nextcloud-13.0.5.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.tar.bz2.sha256">nextcloud-13.0.5.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.zip.sha256">nextcloud-13.0.5.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.tar.bz2.sha512">nextcloud-13.0.5.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.zip.sha512">nextcloud-13.0.5.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.tar.bz2.asc">nextcloud-13.0.5.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.5.zip.asc">nextcloud-13.0.5.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/9837">Fix highlighting of the upload drop zone (server#9837)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9839">Apply ldapUserFilter on members of group (server#9839)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9841">Make the DELETION of groups match greedy on the groupID (server#9841)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9843">Add parent index to share table (server#9843)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9958">Log full exception in cron instead of only the message (server#9958)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9986">Properly lock the target file on dav upload when not using part files (server#9986)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10032">LDAP backup server should not be queried when auth fails (server#10032)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10044">Fix filenames in sharing integration tests (server#10044)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10076">Lower log level for quota manipulation cases (server#10076)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10089">Let user set avatar in nextcloud if LDAP provides invalid image data (server#10089)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10093">Improved logging of smb connection errors (server#10093)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10115">Allow admin to disable fetching of avatars as well as a specific attribute (server#10115)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10121">Allow to disable encryption (server#10121)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10164">Update message shown when unsharing a file (server#10164)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10165">Fixed English grammatical error on Settings page. (server#10165)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10169">Request a valid property for DAV opendir (server#10169)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10170">Allow updating the token on session regeneration (server#10170)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10180">Prevent lock values from going negative with memcache backend (server#10180)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10185">Correctly handle users with numeric user ids (server#10185)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10188">Correctly parse the subject parameters for link (un)shares of calendars (server#10188)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10189">Fix "parsing" of email-addresses in comments and chat messages (server#10189)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10195">Sanitize parameters in createSessionToken() while logging (server#10195)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10201">Also retry rename operation on InvalidArgumentException (server#10201)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10202">Improve url detection in comments (server#10202)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10233">Only bind to ldap if configuration for the first server is set (server#10233)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/84">Use download manager from PDF.js to download the file (files_pdfviewer#84)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/87">Fix trying to load removed scripts (files_pdfviewer#87)</a></li>
    <li><a href="https://github.com/nextcloud/notifications/pull/138">Only pull for new messages if the session is allowed to be kept alive (notifications#138)</a></li>
    <li><a href="https://github.com/nextcloud/notifications/pull/139">Always push object data (notifications#139)</a></li>
    <li><a href="https://github.com/nextcloud/notifications/pull/140">Add prioritization for Talk (notifications#140)</a></li>
    </ul>

    <h3 id="13-0-4">Version 13.0.4 <small>June 11 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.tar.bz2">nextcloud-13.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.zip">nextcloud-13.0.4.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.tar.bz2.md5">nextcloud-13.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.zip.md5">nextcloud-13.0.4.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.tar.bz2.sha256">nextcloud-13.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.zip.sha256">nextcloud-13.0.4.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.tar.bz2.sha512">nextcloud-13.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.zip.sha512">nextcloud-13.0.4.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.tar.bz2.asc">nextcloud-13.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.4.zip.asc">nextcloud-13.0.4.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/9788">Allow setting notify credentials in environment (server#9788)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9803">Make the token expiration also work for autocasting 0 (server#9803)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9820">Enable caldav for webdav subtree public-calendars (server#9820)</a></li>
    </ul>

    <h3 id="13-0-3">Version 13.0.3 <small>June 7 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.tar.bz2">nextcloud-13.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.zip">nextcloud-13.0.3.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.tar.bz2.md5">nextcloud-13.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.zip.md5">nextcloud-13.0.3.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.tar.bz2.sha256">nextcloud-13.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.zip.sha256">nextcloud-13.0.3.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.tar.bz2.sha512">nextcloud-13.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.zip.sha512">nextcloud-13.0.3.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.tar.bz2.asc">nextcloud-13.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.3.zip.asc">nextcloud-13.0.3.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/9259">Backport various scss fixes #8777 (server#9259)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9344">Fix ellipsis in filename column (server#9344)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9358">Replace deprecated sinon reset() call with resetHistory() (server#9358)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9377">Issue #9318: catch exceptions in SCSSCacher::resetCache() (server#9377)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9389">Log lock state on conflict (server#9389)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9391">Remove unneeded locks in getCacheEntry (server#9391)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9392">Only allow a single concurrent dav write to a file (server#9392)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9409">Workflow rules error when changing operation (server#9409)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9430">Fix jsunit tests (server#9430)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9432">Allow IPv6 database host (server#9432)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9433">Add labels for Contacts menu and Settings (server#9433)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9436">Get correct version of an app (server#9436)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9453">Fix ids of permission checkboxes for shares (server#9453)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9454">Fix race condition when preparing upload folder (server#9454)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9516">Allow to specify a link to a legal notice (server#9516)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9522">Fix for unbound cloned LDAP connections (server#9522)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9525">Dont use $info as array when its not an array (server#9525)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9540">Improve OAuth (server#9540)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9547">Bump theming version for extraordinary release (server#9547)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9548">Fix translation bug on lost password page (server#9548)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9566">Cleanup locks in scanner on error (server#9566)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9573">Bump version for theming again 🙇 (server#9573)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9579">Make sure force language is reflected in html lang attribute (server#9579)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9586">Add privacy link to theming and fix scrollbars (server#9586)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9590">Fix settings menu (server#9590)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9608">Handle exception while itterating trough smb file listing (server#9608)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9610">Send invitations for shared calendars (server#9610)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9619">Regenerate session id after public share auth (server#9619)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9620">Emit event when running ./occ db:add-missing-indices (server#9620)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9621">Add PHP missing message to index.php (server#9621)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9622">Delete the previews when a version is restored (server#9622)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9629">Limit Sinon version to 5.0.7 at most (server#9629)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9647">Prepare another theming release including translations for recently added imprint and privacy policy strings (server#9647)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9649">Dont open the file on dav HEAD request (server#9649)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9650">Fix(AmazonS3):  fix loop $result['Contents'] error (server#9650)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9651">Fix undefined variables (server#9651)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9652">Add search category icon (server#9652)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9654">Fix "Invalid argument supplied for foreach()" (server#9654)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9655">Do not load calendar/addressbook plugins if not needed (server#9655)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9656"> Make LargeFileHelper.php faster by avoiding execs as much as possible (server#9656)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9657">Improve error reporting and move format parameter to the options (server#9657)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9659">The OAuth endpoint needs to support Basic Auth (server#9659)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9661">LDAP password renewal fixes (server#9661)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9662">Check user state when fetching to avoid dealing with offline objects (server#9662)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9668">Make sure the file is readable before attempting to create a preview (server#9668)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9672">Fix drone mysqlmb4 tests (server#9672)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9694">Make sure the log doesn't try to read from PUT if it can't (server#9694)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9707">Allow admins to override FreeBusy capabilities without modifying ShareAPI capabilities (server#9707)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9712">Fix the unit tests (server#9712)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9727">Fix header nav (server#9727)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9732">Fix local users check in contacts menu (server#9732)</a></li>
    <li><a href="https://github.com/nextcloud/3rdparty/pull/99">Don't open the file when handling HEAD requests (3rdparty#99)</a></li>
    <li><a href="https://github.com/nextcloud/files_texteditor/pull/101">Do not sanitize markdown output twice (files_texteditor#101)</a></li>
    </ul>

    <h3 id="13-0-2">Version 13.0.2 <small>April 26 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.tar.bz2">nextcloud-13.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.zip">nextcloud-13.0.2.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.tar.bz2.md5">nextcloud-13.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.zip.md5">nextcloud-13.0.2.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.tar.bz2.sha256">nextcloud-13.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.zip.sha256">nextcloud-13.0.2.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.tar.bz2.sha512">nextcloud-13.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.zip.sha512">nextcloud-13.0.2.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.tar.bz2.asc">nextcloud-13.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.2.zip.asc">nextcloud-13.0.2.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/8779">Show group display names (server#8779)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/8849">Group existence check works without attribute (like with users) (server#8849)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/8900">The FN is optional, carrying the displayname if present (server#8900)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/8905">Set "share with" field to the ID of the circle (server#8905)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/8986">Show EOL warning in the update section (server#8986)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9015">Use app version to generate scss filename (server#9015)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9017">Update icewind/smb to 2.0.5 (server#9017)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9019">Fix search text overlapping close button (server#9019)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9020">Clear any theming prefixed cache on cache buster increase (server#9020)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9064">Reset encryptionVersion to '1' if a file was stream copied (server#9064)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9071">Do not treat is-encrypted as custom property (server#9071)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9072">Fix proper permissions for multiple file access (server#9072)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9073">When formatting a share node an Empty target is invalid (server#9073)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9077">Move on with the next user if we found the user on one user back-end (server#9077)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9089">Allow usage of Windows 10 WebDav Netdrive (server#9089)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9094">Add more logging for the object storage during creation of the buckets (server#9094)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9095">Do not convert email addresses with idn_to_ascii if… (server#9095)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9124">Fix progress bar hidden before the upload ends (server#9124)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9213">Update CRL to include old quicknotes cert (server#9213)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9230">Fix user selectable text for public links for text files (server#9230)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9231">Provide an option to disable HTML emails (server#9231)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9233">Fix appinfo parsing when a single localized option is provided (server#9233)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9234">Use multibyte substring (server#9234)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9236">Fix webdav support for OneNote clients (server#9236)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9238">Fixed files copy/move when in favorites or recent section (server#9238)</a></li>
    <li><a href="https://github.com/nextcloud/activity/pull/262">Don't update personal settings for admins (activity#262)</a></li>
    <li><a href="https://github.com/nextcloud/activity/pull/265">Skip parameters which are not there instead of failing out (activity#265)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/64">Bump version 13 (files_pdfviewer#64)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/66">Fix info.xml (files_pdfviewer#66)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/67">No default enable (files_pdfviewer#67)</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/418">Fix position of icons in "Share with" input field (gallery#418)</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/419">Fix "No results found" tooltip (gallery#419)</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/420">Fix UI while a share is being added (gallery#420)</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/424">Hide "No results found" tooltip on autocompletion (gallery#424)</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/430">Fix error while clicking on the share link checkbox (gallery#430)</a></li>
    </ul>

    <h3 id="13-0-1">Version 13.0.1 <small>March 15 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.tar.bz2">nextcloud-13.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.zip">nextcloud-13.0.1.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.tar.bz2.md5">nextcloud-13.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.zip.md5">nextcloud-13.0.1.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.tar.bz2.sha256">nextcloud-13.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.zip.sha256">nextcloud-13.0.1.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.tar.bz2.sha512">nextcloud-13.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.zip.sha512">nextcloud-13.0.1.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.tar.bz2.asc">nextcloud-13.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.1.zip.asc">nextcloud-13.0.1.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/8045">Don't pollute the log on DAV emaillogin (server#8045)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8099">Don't perform CSRF check on OCS routes with Bearer auth (server#8099)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8102">Use S3Client::upload instead of splitting single/multipart upload ourselves (server#8102)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8145">Remove old perl script to update l10n files (server#8145)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8156">Scss hardening (server#8156)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8177">Do not try to get the jailed path if we can't find the id (server#8177)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8183">Handle SSL certificate verifications for others than Let's Encrypt (server#8183)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8195">Use a phan version instead of master (server#8195)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8197">Repair step to clear frontend related caches (server#8197)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8228">Keep previous exception when transforming to dav exception (server#8228)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8250">Actually return stream from swift (server#8250)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8253">Remove invalid link to documentation (server#8253)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8261">Fix deleting folders when using s3 external storage (server#8261)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8264">Link to NC13 dev manual (server#8264)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8267">Better result handling of email search (server#8267)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8271">Update CRL to revoke files_rightclick (server#8271)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8286">Fix styling issues of guest pages #8155 (server#8286)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8287">Remove jquery ui background image (server#8287)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8309">Show open graph preview in WhatsApp (server#8309)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8395">Make acceptance tests for comments more consistent with the others (server#8395)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8407">Fix edit tag textbox size (server#8407)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8440">Use TTF fonts for avatar generation (server#8440)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8470">Use mb_* string methods to extract first character for generated avatars (server#8470)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8515">Show hint in OCS API for user creation (server#8515)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8517">Fix hiding and event propagation issues with the user management popover (server#8517)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8518">Add some whitespace around change.svg icon (server#8518)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8532">Avoid fruitless login attempts (server#8532)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8536">Fix retrieval of group members with numerical uids from LDAP (server#8536)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8554">Theming: handle not being in the serverroot (server#8554)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8561">Ext storage error warning (server#8561)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8577">Set autocomplete=new-password for mail share password (server#8577)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8595">Fix upload button visible on read-only folders (server#8595)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8609">Fixed app navigation for IE11 (server#8609)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8610">Fix breadcrumbs width calculation (server#8610)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8615">Fix comments (and systemtags) when involving users with numerical ids (server#8615)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8621">Update commentstabview.js (server#8621)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8631">Properly encapsulate require_once for app.php (server#8631)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8636">AppData hardening (server#8636)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8654">Use hash algo that's robust against collisions (server#8654)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8663">Fixed date/time picker on IE11 (server#8663)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8667">Use a more widely available method to test s3 settings (server#8667)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8668">Use proper language in language code (server#8668)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8669">Display the proper language strings in settings (server#8669)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8673">Do not create empty userid when attribute does not have allowed chars (server#8673)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8675">Remove too restrict check for background image/color (server#8675)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8676">Fix example regex for user agent matching (server#8676)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8678">Generate different UIDs for Birthday, Anniversary and Death event (server#8678)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8680">Don't use double quotes in MySQL queries (server#8680)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8683">Log exceptions that happen when writing the app store reply to storage (server#8683)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8685">Set the correct active navigation entry (server#8685)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8686">Fix activities for end2end encryption (server#8686)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8687">Filter out the current user when searching for emails too (server#8687)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8688">Fix check if theming defaults instance is available (server#8688)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8693"> Fix undefined index problem (server#8693)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8725">Disable part files for object stores (server#8725)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8738">Better handling of invisible elements in acceptance tests (server#8738)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8745">Remove base url from global cache prefix (server#8745)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8746">Check if the cached js file exists (server#8746)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8749">Sharee email matches not limited (server#8749)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8752">Fix integer overflow in ChunkingPlugin (server#8752)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8755">Revert wording back to updates (server#8755)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8758">Add acceptance tests for permissions on public shared folders (server#8758)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/249">Also send file emails in ASAP mode (activity#249)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/252">Ensure userids are strings (activity#252)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/254">Null coalescing operator is PHP7+ (activity#254)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/55">Update PDF.js to 1.9.426 (files_pdfviewer#55)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/59">Enable full screen mode for PDF files (files_pdfviewer#59)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/83">Fix ACE module files failing to load (files_texteditor#83)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/89">Do not keep FileInfoModels returned by "getModelForFile" (files_texteditor#89)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/394">Fix share drop down in gallery not properly shown (gallery#394)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/402">Fix gallery button hidden in folders without create permission (gallery#402)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/405">Fix controls position in gallery layout (gallery#405)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/406">Removed old code already present thanks to the files app (gallery#406)</a></li>
        <li><a href="https://github.com/nextcloud/gallery/pull/407">Create "file app" public share links if the slideshow is opened from ... (gallery#407)</a></li>
        <li><a href="https://github.com/nextcloud/password_policy/pull/61">Allow to check against haveibeenpwned.com password list (password_policy#61)</a></li>
    </ul>

    <h3 id="13-0-0">Version 13.0.0 <small>February 6 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.tar.bz2">nextcloud-13.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.zip">nextcloud-13.0.0.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.tar.bz2.md5">nextcloud-13.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.zip.md5">nextcloud-13.0.0.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.tar.bz2.sha256">nextcloud-13.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.zip.sha256">nextcloud-13.0.0.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.tar.bz2.sha512">nextcloud-13.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.zip.sha512">nextcloud-13.0.0.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.tar.bz2.asc">nextcloud-13.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-13.0.0.zip.asc">nextcloud-13.0.0.zip.asc</a></p>

    <h4>Changes</h4>
    <p>Over 1100 changes were merged in the server, with many hundreds more in existing or new apps. The main improvements include:</p>
    <ul>
        <li>Collaboration features
        <ul>
            <li>Nextcloud Talk, a private videoconference software integrated with Nextcloud
                <ul>
                    <li>real-time and asynchronous communication with push notifications, calls and chat web and mobile devices</li>
                    <li>Integration in business workflow with calendar invitations and calls directly from Nextcloud Files</li>
                    <li>Screen and note sharing with participant moderation capabilities</li>
                    <li>100% secure peer-to-peer, end-to-end encrypted calls, mediated by self-hosted server</li>
                </ul>
            </li>
            <li>auto-completion of user names in comments and notification to the mentioned user</li>
            <li> support free/busy scheduling in native calendar applications like Thunderbird Lightning</li>
            <li>show meeting invites in the calendar</li>
        </ul></li>

        <li>End-to-End Encryption
        <ul>
            <li>can encrypt data on a per-folder level rather than all-or-nothing approach</li>
            <li>does not require users to remember or exchange passwords</li>
            <li>does not require re-uploading data upon sharing</li>
            <li>features an optional off-line administrator recovery key</li>
            <li>allows full audit logging</li>
            <li>can be combined with our File Access Control feature so administrator can enforce aspects of End-to-end Encryption</li>
            <li>protects from identity theft with our Cryptographic Identity Protection feature</li>
        </ul>
        This feature is in Tech Preview for Nextcloud 13 and does not yet implement sharing.
        </li>

            <li>User Interface
        <ul>
            <li>new way of selecting files</li>
            <li>easy way to quickly copy or move to a location</li>
            <li>High DPI support</li>
            <li>admin menu integrated in one list</li>
            <li>no limitation to file uploads via the web interface</li>
            <li>user quota in the side bar</li>
            <li>social sharing (Twitter, G+, Facebook, Diaspora) now features a preview</li>
            <li>improved theming</li>
        </ul></li>

        <li>Performance
        <ul>
            <li>decreased page load times with up to 50% and faster search</li>
            <li>80% faster LDAP and up to 10x faster external storage</li>
            <li>Server-side Encryption performance largely improved</li>
        </ul></li>

        <li>Other
        <ul>
            <li>Support for PHP 7.2</li>
            <li>Support for PostgreSQL 10</li>
        </ul></li>


    </ul>

    <p><a href="https://nextcloud.com/blog/nextcloud-13-brings-secure-file-sync-and-collaboration-to-the-next-level/">Release announcement with overview about features and changes</a></p>
    <p><a href="https://github.com/nextcloud/server/milestone/20?closed=1">See a full list of integrated pull requests here.</a></p>


    <a name="latest12"></a>

    <h4 id="12-0-13">Version 12.0.13 <small>November 22 2018</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13.tar.bz2">nextcloud-12.0.13.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13.zip">nextcloud-12.0.13.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13.tar.bz2.md5">nextcloud-12.0.13.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13.zip.md5">nextcloud-12.0.13.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13.tar.bz2.sha256">nextcloud-12.0.13.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13.zip.sha256">nextcloud-12.0.13.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13.tar.bz2.sha512">nextcloud-12.0.13.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13.zip.sha512">nextcloud-12.0.13.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13.tar.bz2.asc">nextcloud-12.0.13.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.13zip.asc">nextcloud-12.0.13.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/11763">Ignore "session_lifetime" if it can not be converted to a number (server#11763)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/11998">Fix opening a section again in the Files app (server#11998)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12059">Actually return the root folder when traversing up the tree (server#12059)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12110">Double check for failed cache with a shared storage (server#12110)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12461">Fixes dav share issue with owner (server#12461)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12504">Forward object not found error in swift as dav 404 (server#12504)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/12563">Handle permission in update of share better (server#12563)</a></li>
    </ul>

    <h4 id="12-0-12">Version 12.0.12 <small>October 11 2018</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12.tar.bz2">nextcloud-12.0.12.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12.zip">nextcloud-12.0.12.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12.tar.bz2.md5">nextcloud-12.0.12.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12.zip.md5">nextcloud-12.0.12.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12.tar.bz2.sha256">nextcloud-12.0.12.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12.zip.sha256">nextcloud-12.0.12.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12.tar.bz2.sha512">nextcloud-12.0.12.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12.zip.sha512">nextcloud-12.0.12.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12.tar.bz2.asc">nextcloud-12.0.12.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.12zip.asc">nextcloud-12.0.12.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/10882">Improve performance when dealing with large numbers of shares (server#10882)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/11285">Include empty directories in the default state of acceptance tests (server#11285)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/11495">Show auth type "None" in email settings (server#11495)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/11601">Add future releases to be migrated from (server#11601)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/11708">Update CRL due to changed cert for linkshareex (server#11708)</a></li>
    </ul>

    <h4 id="12-0-11">Version 12.0.11 <small>August 30 2018</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11.tar.bz2">nextcloud-12.0.11.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11.zip">nextcloud-12.0.11.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11.tar.bz2.md5">nextcloud-12.0.11.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11.zip.md5">nextcloud-12.0.11.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11.tar.bz2.sha256">nextcloud-12.0.11.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11.zip.sha256">nextcloud-12.0.11.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11.tar.bz2.sha512">nextcloud-12.0.11.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11.zip.sha512">nextcloud-12.0.11.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11.tar.bz2.asc">nextcloud-12.0.11.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.11zip.asc">nextcloud-12.0.11.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/10566">Fix transfering ownership of a share to user with same id as receiver (server#10566)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10683">Update the scope of the lockdownmanager (server#10683)</a></li>
    </ul>

    <h4 id="12-0-10">Version 12.0.10 <small>July 23 2018</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10.tar.bz2">nextcloud-12.0.10.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10.zip">nextcloud-12.0.10.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10.tar.bz2.md5">nextcloud-12.0.10.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10.zip.md5">nextcloud-12.0.10.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10.tar.bz2.sha256">nextcloud-12.0.10.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10.zip.sha256">nextcloud-12.0.10.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10.tar.bz2.sha512">nextcloud-12.0.10.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10.zip.sha512">nextcloud-12.0.10.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10.tar.bz2.asc">nextcloud-12.0.10.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.10zip.asc">nextcloud-12.0.10.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/9842">Make the DELETION of groups match greedy on the groupID (server#9842)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/10196">Sanitize parameters in createSessionToken() while logging (server#10196)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/88">Fix trying to load removed scripts (files_pdfviewer#88)</a></li>
    </ul>

    <h4 id="12-0-9">Version 12.0.9 <small>June 11 2018</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9.tar.bz2">nextcloud-12.0.9.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9.zip">nextcloud-12.0.9.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9.tar.bz2.md5">nextcloud-12.0.9.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9.zip.md5">nextcloud-12.0.9.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9.tar.bz2.sha256">nextcloud-12.0.9.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9.zip.sha256">nextcloud-12.0.9.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9.tar.bz2.sha512">nextcloud-12.0.9.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9.zip.sha512">nextcloud-12.0.9.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9.tar.bz2.asc">nextcloud-12.0.9.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.9zip.asc">nextcloud-12.0.9.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/9804">Make the token expiration also work for autocasting 0 (server#9804)</a></li>
    </ul>

    <h4 id="12-0-8">Version 12.0.8 <small>June 7 2018</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8.tar.bz2">nextcloud-12.0.8.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8.zip">nextcloud-12.0.8.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8.tar.bz2.md5">nextcloud-12.0.8.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8.zip.md5">nextcloud-12.0.8.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8.tar.bz2.sha256">nextcloud-12.0.8.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8.zip.sha256">nextcloud-12.0.8.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8.tar.bz2.sha512">nextcloud-12.0.8.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8.zip.sha512">nextcloud-12.0.8.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8.tar.bz2.asc">nextcloud-12.0.8.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.8zip.asc">nextcloud-12.0.8.zip.asc</a></p>

    <h4>Changes</h4>
    Many fixes were merged, the most important ones include:
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/9359">Replace deprecated sinon reset() call with resetHistory() (server#9359)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9431">Fix jsunit tests (server#9431)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9493">Allow upgrades from ownCloud 10.0.8 (server#9493)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9546">Improve OAuth (server#9546)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9549">Fix translation bug on lost password page (server#9549)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9567">Cleanup locks in scanner on error (server#9567)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9580">Make sure force language is reflected in html lang attribute (server#9580)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9611">Send invitations for shared calendars (server#9611)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9618">Regenerate session id after public share auth (server#9618)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9630">Limit Sinon version to 5.0.7 at most (server#9630)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9660">The OAuth endpoint needs to support Basic Auth (server#9660)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9669">Make sure the file is readable before attempting to create a preview (server#9669)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9671">Fix drone mysqlmb4 tests (server#9671)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9695">Make sure the log doesn't try to read from PUT if it can't (server#9695)</a></li>
    </ul>


    <h4 id="12-0-7">Version 12.0.7 <small>April 26 2018</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7.tar.bz2">nextcloud-12.0.7.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7.zip">nextcloud-12.0.7.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7.tar.bz2.md5">nextcloud-12.0.7.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7.zip.md5">nextcloud-12.0.7.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7.tar.bz2.sha256">nextcloud-12.0.7.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7.zip.sha256">nextcloud-12.0.7.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7.tar.bz2.sha512">nextcloud-12.0.7.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7.zip.sha512">nextcloud-12.0.7.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7.tar.bz2.asc">nextcloud-12.0.7.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.7zip.asc">nextcloud-12.0.7.zip.asc</a></p>

    <h4>Changes</h4>
    Many fixes were merged, the most important ones include:
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/8850">Group existence check works without attribute (like with users) (server#8850)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/8893">Fix undefined index problem (server#8893)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/8987">Show EOL warning in the update section (server#8987)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9016">Update icewind/smb to 2.0.5 (server#9016)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9078">Set new-password as autocomplete on the link password (server#9078)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9088">Allow usage of Windows 10 WebDav Netdrive (server#9088)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9214">Update CRL to include old quicknotes cert (server#9214)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9232">Provide an option to disable HTML emails (server#9232)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/9235">Use multibyte substring (server#9235)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/65">Bump version 12 (files_pdfviewer#65)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/68">Fix info.xml (files_pdfviewer#68)</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/69">Remove default enable (files_pdfviewer#69)</a></li>
    </ul>

    <h4 id="12-0-6">Version 12.0.6 <small>March 15 2018</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.tar.bz2">nextcloud-12.0.6.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.zip">nextcloud-12.0.6.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.tar.bz2.md5">nextcloud-12.0.6.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.zip.md5">nextcloud-12.0.6.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.tar.bz2.sha256">nextcloud-12.0.6.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.zip.sha256">nextcloud-12.0.6.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.tar.bz2.sha512">nextcloud-12.0.6.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.zip.sha512">nextcloud-12.0.6.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.tar.bz2.asc">nextcloud-12.0.6.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.6.zip.asc">nextcloud-12.0.6.zip.asc</a></p>

    <h4>Changes</h4>
    Many fixes were merged, the most important ones include:
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/7797">Fix password displayed as username in Firefox password manager dialog (server#7797)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8006">Fix #4789: Group admins cannot see disabled users (server#8006)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8022">Fix jquery-ui theming (server#8022)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8074">Do not catch and ignore ServerNotAvailable in the wrong spot (server#8074)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8101">Use S3Client::upload instead of splitting single/multipart upload ourselves (server#8101)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8130">Fix own avatar not updated when display name is changed (server#8130)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8146">Remove old perl script to update l10n files (server#8146)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8152">Update CRL because user_sql cert was lost (server#8152)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8184">Handle SSL certificate verifications for others than Let's Encrypt (server#8184)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8196">Do not try to get the jailed path if we can't find the id (server#8196)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8205">Better result handling of email search (server#8205)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8216">Nextcloud 12 is not compatible with newer than php 7.1 (server#8216)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8229">Keep previous exception when transforming to dav exception (server#8229)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8251">Actually return stream from swift (server#8251)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8254">Remove invalid link to documentation (server#8254)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8262">Fix deleting folders when using s3 external storage (server#8262)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8272">Update CRL to revoke files_rightclick (server#8272)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8408">Fix edit tag textbox size (server#8408)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8516">Show hint in OCS API for user creation (server#8516)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8520">Add some whitespace around change.svg icon (server#8520)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8533">Don't try login with the same name that just failed (server#8533)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8537">Fix retrieval of group members with numerical uids from LDAP (server#8537)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8544">Allow upgrading from OC 10.0.6 & 10.0.7 (server#8544)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8549">Theming: handle not being in the serverroot (server#8549)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8611">Use apps versions to generate suffix when possible (server#8611)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8616">Fix comments (and systemtags) when involving users with numerical ids (server#8616)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8622">Update commentstabview.js (server#8622)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8632">Properly encapsulate require_once for app.php (server#8632)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8655">Use hash algo that's robust against collisions (server#8655)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8674">Do not create empty userid when attribute does not have allowed chars (server#8674)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8677">Fix example regex for user agent matching (server#8677)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8679">Generate different UIDs for Birthday, Anniversary and Death event (server#8679)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8681">Don't use double quotes in MySQL queries (server#8681)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8682">Log exceptions that happen when writing the app store reply to storage (server#8682)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8689">Fix 500 on setup page (server#8689)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8692">Add missing import (server#8692)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8726">Disable part files for object stores (server#8726)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8739">Better handling of invisible elements in acceptance tests (server#8739)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/232">Display the home icon for empty paths (root folder) (activity#232)</a></li>
        <li><a href="https://github.com/nextcloud/activity/pull/253">Ensure userids are strings (activity#253)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/56">Update PDF.js to 1.9.426 (files_pdfviewer#56)</a></li>
        <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/60">Enable full screen mode for PDF files (files_pdfviewer#60)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/84">Fix ACE module files failing to load (files_texteditor#84)</a></li>
        <li><a href="https://github.com/nextcloud/files_texteditor/pull/90">Do not keep FileInfoModels returned by "getModelForFile" (files_texteditor#90)</a></li>
    </ul>

    <h4 id="12-0-5">Version 12.0.5 <small>January 24 2018</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.tar.bz2">nextcloud-12.0.5.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.zip">nextcloud-12.0.5.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.tar.bz2.md5">nextcloud-12.0.5.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.zip.md5">nextcloud-12.0.5.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.tar.bz2.sha256">nextcloud-12.0.5.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.zip.sha256">nextcloud-12.0.5.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.tar.bz2.sha512">nextcloud-12.0.5.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.zip.sha512">nextcloud-12.0.5.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.tar.bz2.asc">nextcloud-12.0.5.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.5.zip.asc">nextcloud-12.0.5.zip.asc</a></p>

    <h4>Changes</h4>
    Many fixes were merged, the most important ones include:
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/7144">#7144</a> Unlock files even if an exception occurs</li>
        <li><a href="https://github.com/nextcloud/server/pull/7322">#7322</a> Set primary action button color to same as theming color</li>
        <li><a href="https://github.com/nextcloud/server/pull/7323">#7323</a> Use the correct root for shared jail when the source storage is also a jail</li>
        <li><a href="https://github.com/nextcloud/server/pull/7353">#7353</a> Fix translation of federation scope menu</li>
        <li><a href="https://github.com/nextcloud/server/pull/7362">#7362</a> Allow to skip data dir permission checks</li>
        <li><a href="https://github.com/nextcloud/server/pull/7407">#7407</a> Check if owner of share exists</li>
        <li><a href="https://github.com/nextcloud/server/pull/7409">#7409</a> Add retry wrapper when reading files from swift</li>
        <li><a href="https://github.com/nextcloud/server/pull/7451">#7451</a> Fix constructor spy in unit test with Sinon 4.1.3</li>
        <li><a href="https://github.com/nextcloud/server/pull/7455">#7455</a> Remove wrong entry in admin_settings that causes 500</li>
        <li><a href="https://github.com/nextcloud/server/pull/7456">#7456</a> CardDAV convertor check should not be to wide</li>
        <li><a href="https://github.com/nextcloud/server/pull/7457">#7457</a> Fix loading icon position in the app menu</li>
        <li><a href="https://github.com/nextcloud/server/pull/7464">#7464</a> Allow getting the filepath when getting cached mounts</li>
        <li><a href="https://github.com/nextcloud/server/pull/7468">#7468</a> Allow 'Nextcloud' in the user agent string of Android</li>
        <li><a href="https://github.com/nextcloud/server/pull/7558">#7558</a> Fix email buttons for white theme</li>
        <li><a href="https://github.com/nextcloud/server/pull/7567">#7567</a> Respect sharing options when searching for Sharees</li>
        <li><a href="https://github.com/nextcloud/server/pull/7568">#7568</a> Fix duplicate session token after remembered login</li>
        <li><a href="https://github.com/nextcloud/server/pull/7577">#7577</a> Check userExists later, saves lookups for appData_INSTANCEID userids</li>
        <li><a href="https://github.com/nextcloud/server/pull/7672">#7672</a> Added additional methods for removal of sensitive info</li>
        <li><a href="https://github.com/nextcloud/server/pull/7688">#7688</a> Fix scss webroot and url rewrite</li>
        <li><a href="https://github.com/nextcloud/server/pull/7717">#7717</a> Throw ServerNotAvailableException when LDAP is caught shutting down</li>
        <li><a href="https://github.com/nextcloud/server/pull/7666">#7666</a> Fix drag shadow not visible when dragging a file on a narrow screen</li>
        <li><a href="https://github.com/nextcloud/server/pull/7674">#7674</a> Do no run SyncJob in cron</li>
        <li><a href="https://github.com/nextcloud/server/pull/7684">#7684</a> Fix inverted app icons on IE11</li>
        <li><a href="https://github.com/nextcloud/server/pull/7694">#7694</a> Don't attempt to translate login names to uids when uids are provided</li>
        <li><a href="https://github.com/nextcloud/server/pull/7708">#7708</a> Don't show recurring msg when pages result was turned off</li>
        <li><a href="https://github.com/nextcloud/server/pull/7742">#7742</a> Hide favourite icon in details view if favourite action is not available</li>
        <li><a href="https://github.com/nextcloud/server/pull/7745">#7745</a> Don't lie about preview types</li>
        <li><a href="https://github.com/nextcloud/server/pull/7747">#7747</a> Update of composer</li>
        <li><a href="https://github.com/nextcloud/server/pull/7758">#7758</a> add option to use legacy v2 auth with s3</li>
        <li><a href="https://github.com/nextcloud/server/pull/7759">#7759</a> Use correct L10N files for jsconfig</li>
        <li><a href="https://github.com/nextcloud/server/pull/7757">#7757</a> Wait for the shared link to be set in the acceptance tests</li>
        <li><a href="https://github.com/nextcloud/gallery/pull/349">gallery/#349</a> Fix date picker not visible in slideshow sharing dialog</li>
        <li><a href="https://github.com/nextcloud/activity/pull/229">activity/#229</a> Properly construct path of root on file rename</li>
        <li><a href="https://github.com/nextcloud/server/pull/7770">#7770</a> Fix SCSS processing when undoing theming values</li>
        <li><a href="https://github.com/nextcloud/server/pull/7774">#7774</a> Update icewind/smb to 2.0.3</li>
        <li><a href="https://github.com/nextcloud/server/pull/7777">#7777</a> Set height for sidebar icons</li>
        <li><a href="https://github.com/nextcloud/server/pull/7779">#7779</a> Improve zip support</li>
        <li><a href="https://github.com/nextcloud/server/pull/7786">#7786</a> Return correct mount type for federated shares</li>
        <li><a href="https://github.com/nextcloud/server/pull/7792">#7792</a> Fix empty details view after renaming a file</li>
        <li><a href="https://github.com/nextcloud/server/pull/7817">#7817</a> Fix preview when theming changes invertion of icons</li>
        <li><a href="https://github.com/nextcloud/server/pull/7821">#7821</a> Log full exception in cron instead of only the message</li>
        <li><a href="https://github.com/nextcloud/server/pull/7888">#7888</a> Keep all shipped apps enabled because they should be okay</li>
        <li><a href="https://github.com/nextcloud/server/pull/7962">#7962</a> update icewind/smb to 2.0.4</li>
    </ul>

    <h4 id="12-0-4">Version 12.0.4 <small>December 4 2017</small></h4>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.tar.bz2">nextcloud-12.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.zip">nextcloud-12.0.4.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.tar.bz2.md5">nextcloud-12.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.zip.md5">nextcloud-12.0.4.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.tar.bz2.sha256">nextcloud-12.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.zip.sha256">nextcloud-12.0.4.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.tar.bz2.sha512">nextcloud-12.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.zip.sha512">nextcloud-12.0.4.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.tar.bz2.asc">nextcloud-12.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.4.zip.asc">nextcloud-12.0.4.zip.asc</a></p>

    <h4>Changes</h4>
    <h5>Server</h5>
    Over 50 fixes were merged in the server.
    <ul>
        <li><a href="https://github.com/nextcloud/server/issues/6464">Improve text: 'you have now' -> 'you now have (server#6464)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6502">Fix initializing paged search under some circumstances (server#6502)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6509">LDAP: simplify returning the homePath (server#6509)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6524">Fix sharer name overlap with filename (server#6524)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6525">Allow to close sidebar for text files (server#6525)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6527">Fix quota new endpoint 12 (server#6527)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6528">Pass new value to triggerChange (server#6528)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6547">Throw 101 when an empty group string is provided (server#6547)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6554">Contacts menu privacy (server#6554)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6649">Add color-border variable (server#6649)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6661">Do not stop on scss compilation failure (server#6661)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6674">Don't pass User object when uid string is expected (server#6674)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6689">Navigate to the root directory when showing the main filelist (server#6689)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6699">Fix LDAP User deletion (cleanup) (server#6699)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6737">Update aws sdk + s3 improvements (server#6737)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6743">Dont run invalid path repair step when upgrading from 11.0.5.2 and later (server#6743)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6751">Fix language when trying to change password (server#6751)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6792">Fix postgresql tests (server#6792)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6814">Also use configured 'cache_path' for new chunking (server#6814)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6815">Set s3 part size to 500mb (server#6815)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6823">Fix contacts menu for IE11 (server#6823)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6847">Still trigger conflict resolution for existing entries when the curre (server#6847)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6855">Propagate multipart upload exception when aborting upload (server#6855)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6878">Allow to migrate from 10.0.3.3 (server#6878)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6896">Timespan check (server#6896)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6908">Do not log WebDAV maintenance mode exception (server#6908)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6910">Don't reset quota (server#6910)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6935">Backport of translation string fixes (server#6935)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6942">Fix class name in exception logger plugin (server#6942)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6943">Allow quota of 0 again (server#6943)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6944">Fix uninitialized variable $this->params (server#6944)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6945">Don't add a LIKE condition when it's not needed (server#6945)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6946">Fix undefined offset warning when using '/' as external storage root (server#6946)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6987">Fix page title not changed (server#6987)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7028">Better readability for text on log in page which is directly on backgrounds (server#7028)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7040">Translate Grant Access (server#7040)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7079">Use fopen directly when reading objects from s3 (server#7079)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7081">Improve mimetype detection for object storages (server#7081)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7082">Fix seeking on object storage (server#7082)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7095">Hide spinner for initial install (server#7095)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7096">Ensure uid for calendar objects is unique (server#7096)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7102">Revert "Only allow colons in db host for IPv6 addresses (server#7102)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7114">Theme flow redirection page (server#7114)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7116">Fix icon for security settings (server#7116)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7118">If for some reason the json can't be decoded it is not cached (server#7118)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7120">Improve performance of UserMountCache with external storage folders (server#7120)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7170">{J,CS}SResourceLocator: account for symlinks in app path server#7170)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7186">Fix s3 download and touch (server#7186)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7207">Touch opertation on object storage, don't create the file cache entry to early (server#7207)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7245">Allow migration from upcoming 10.0.4 ownCloud release (server#7245)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7257">CSSResourceLocator: handle SCSS in apps outside root (server#7257)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7259">only replace permission popupmenu (server#7259)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7262">Fix accesslist when a user has an ID only containting 0-9 (server#7262)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7277">Update CRL due to files_frommail (server#7277)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7328">Only in case of $currentAccess the array uses the id as index (server#7328)</a></li>
    </ul>

    <h5>Other</h5>
    <ul>
        <li><a href="https://github.com/nextcloud/3rdparty/issues/69">Add aws sdk (3rdparty#69)</a></li>
        <li><a href="https://github.com/nextcloud/activity/issues/202">Don't send emails to disabled users (activity#202)</a></li>
        <li><a href="https://github.com/nextcloud/activity/issues/206">Add an option to disable emails completly (activity#206)</a></li>
        <li><a href="https://github.com/nextcloud/files_accesscontrol/issues/79">Make sure the mountPoint property is public before using it (files_accesscontrol#79)</a></li>
        <li><a href="https://github.com/nextcloud/files_videoplayer/issues/43">Allow to playback m4v files (files_videoplayer#43)</a></li>
        <li><a href="https://github.com/nextcloud/notifications/issues/93">Fix notifications order (notifications#93)</a></li>
    </ul>

    <h3 id="12-0-3">Version 12.0.3 <small>September 20 2017</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.tar.bz2">nextcloud-12.0.3.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.zip">nextcloud-12.0.3.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.tar.bz2.md5">nextcloud-12.0.3.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.zip.md5">nextcloud-12.0.3.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.tar.bz2.sha256">nextcloud-12.0.3.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.zip.sha256">nextcloud-12.0.3.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.tar.bz2.sha512">nextcloud-12.0.3.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.zip.sha512">nextcloud-12.0.3.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.tar.bz2.asc">nextcloud-12.0.3.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.3.zip.asc">nextcloud-12.0.3.zip.asc</a></p>

    <h4>Changes</h4>
    <p>Nextcloud 12.0.3 delivers a lot of enhancements in various areas including:</p>
    <ul>
    <li>A number of improvements to email notification templates</li>
    <li>2FA enhancements</li>
    <li>Smarter LDAP password handling</li>
    <li>File Drop and upload-in-general updates</li>
    <li>A performance improvement handling large files</li>
    </ul>
    <p><a href="https://github.com/nextcloud/server/pulls?q=is%3Apr+milestone%3A%22Nextcloud+12.0.3%22+is%3Aclosed">See the full list of changes in github.</a></p>

    <h3 id="12-0-2">Version 12.0.2 <small>August 14 2017</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.tar.bz2">nextcloud-12.0.2.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.zip">nextcloud-12.0.2.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.tar.bz2.md5">nextcloud-12.0.2.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.zip.md5">nextcloud-12.0.2.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.tar.bz2.sha256">nextcloud-12.0.2.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.zip.sha256">nextcloud-12.0.2.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.tar.bz2.sha512">nextcloud-12.0.2.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.zip.sha512">nextcloud-12.0.2.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.tar.bz2.asc">nextcloud-12.0.2.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.2.zip.asc">nextcloud-12.0.2.zip.asc</a></p>

    <h4>Changes</h4>
    <h5>Server</h5>
    Minor bugfix release.

    <h3 id="12-0-1">Version 12.0.1 <small>August 7 2017</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.tar.bz2">nextcloud-12.0.1.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.zip">nextcloud-12.0.1.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.tar.bz2.md5">nextcloud-12.0.1.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.zip.md5">nextcloud-12.0.1.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.tar.bz2.sha256">nextcloud-12.0.1.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.zip.sha256">nextcloud-12.0.1.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.tar.bz2.sha512">nextcloud-12.0.1.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.zip.sha512">nextcloud-12.0.1.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.tar.bz2.asc">nextcloud-12.0.1.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.1.zip.asc">nextcloud-12.0.1.zip.asc</a></p>

    <h4>Changes</h4>
    <h5>Server</h5>
    Over 100 fixes were merged in the server.
    <ul>
    <li><a href="https://github.com/nextcloud/server/issues/5909">Update broken on PGSQL</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5919">Add brackets around concat statements so comparing the result works a…</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4968">Can't close PDF preview</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5902">Add a repair step to drop the account_terms table on oc migration</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5896">Fix show password button for password change</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5883">Enable postgres on drone again</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5889">fix overlay on show password</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5875">Add new bundle</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5858">Proper logo height in emails for Outlook</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4987">scan.nextcloud.com causing exception in theming?</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4831">Long running php processes: LDAP timeout</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5102">X-XSS-Protection header invalid (NextCloud 12.0.0.29)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5830">Fix for mb strlen</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5826">Fix error message on untrusted domain error page</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5757">Fix renaming of non-renamble mounts</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5786">Also repair storage id's when repairing invalid entries</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5754">Still remove the federated share even if we cant notify the remote</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5792">Show warning if PHP 7.2 is used</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5805">Fix preview for public links</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5807">Fix config.sample.php documentation</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5630">Add recovery key on public upload</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5759">Backport translation fixes</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5804">Enable acceptance tests again on Drone 0.7</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5796">Backport allow to theme emails</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5777">Add ellipsis for app titles in the app menu popover</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5784">Fix emitting of legacy hook post_unshare</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5782">Allow overwriting of IOS theming values</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5765">Update 3rdparty for "Fix infinite propfinds reporting files as direct…</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5771">Fix invalid path repair step not getting all invalid entries</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5762">Add test to check if new files are added to the root of the repository</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5711">Null users dont exist </a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5710">Fix scan permissions with nested permissions masks </a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5655">Fix moving folders out of a cache jail </a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4965">Moving shared folders doesn't work as expected</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5697">Write cert bundle to tmp file first</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5692">Properly block file upload to non-active filelist</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4941">nc beta 4 internal server error due to totp backup codes</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5687">Fix propagating changes within jail wrapper</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5463">Dont die if we try to access the shared cache while setting up the shared storage</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5686">Hint should not be clickable</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5484">Check if Circles is still here</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5435">Allow dir-listing also when one child is blocked by access control</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5679">Fix unselecting items on multi select dropdowns</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5670">Fix remote share activity emails</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5667">Fix alignment of radio button and its label in encryption settings</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5639">Remote share emails doesn't show what's shared.</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5665">Ldap password renewal fixes for NC12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5648">Use PNG icons for activity emails and ios client</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5458">Use the share_folder config for remote shares</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5617">Don't load navigation entries of restricted apps</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5433">Don't try to generate logs for chunking paths</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5619">Don't log passwords on dav exceptions</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5434">Use translated Hint instead of english error on password policy</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5613">Add info text about updates</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5584">Use base url for cache prefix and SCSS caching</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5525">Enhance the logging if the part file can not be renamed</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5601">Improved logging for object storage and trashbin</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5583">Fix more icon in apps menu on bright backgrounds</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5507">Use realpath to obtain the webroot</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5521">Don't create activities for email and password change before login</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5509">Allow to force a language and set it via the ocs api</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5511">Create users in non default backends first</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4895">Progress bar message completely wrong with multi-GB file upload</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5489">Fix example theme</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5480">Don't try to save the setting when its not an admin</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5200">Update layout.user.php</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5442">Fix upload remaining time and uploadrate value</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5420">App menu fixes</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5428">Allow to find local users by their email address</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5422">Treat PHP Errors on User session regenerate</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5210">Ldap attempt reconnect stable12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5301">Allow users to send PropPatch request when calendar is group-shared with them</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5299">Urldecode group principals in Cal- and CardDAV backend</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5416">Use the guest.css for the maintenance page as well</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5397">Fixed a crash caused by Local::copyFromStorage() not conforming to Co…</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5026">Make file name input tooltip error text change</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5401">Translate OAuth2 in stable12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5402">Localize contacts menu search input placeholder</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5386">Prevent sending second WWW-Authenticate header</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5362">Don't try to encrypt/decrypt the certificate bundle</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5296">Allow PropPatch requests to contact_birthdays</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5063">Fix username and avatar for external users</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5379">Fix tag label removed when share view is opened</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5387">Fix unknown share token error message</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5388">No themed icon when dragging folder</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5389">Add quota to the files view</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5346">"Unspecified share exception" instead of proper 404 page on unknown public share tokens</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5382">Fix "add to your nextcloud" input field</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5385">Revert "allow admin to disable groups on personal page"</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5088">Bearer auth backend causes problems with several dav clients</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5365">Filter missing groups in share provider</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5303">Use the email address configured in Nextcloud as sender instead of the users email address</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5354">Execute eval in global scope, addresses #5314</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5355">L10n improvements from transifex</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5422">Treat PHP Errors on User session regenerate</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5210">Ldap attempt reconnect stable12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5301">Allow users to send PropPatch request when calendar is group-shared with them</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5299">Urldecode group principals in Cal- and CardDAV backend</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5416">Use the guest.css for the maintenance page as well</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5397">Fixed a crash caused by Local::copyFromStorage() not conforming to Co…</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5026">Make file name input tooltip error text change</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5401">Translate OAuth2 in stable12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5402">Localize contacts menu search input placeholder</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5386">Prevent sending second WWW-Authenticate header</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5362">Don't try to encrypt/decrypt the certificate bundle</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5296">Allow PropPatch requests to contact_birthdays</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5063">Fix username and avatar for external users</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5379">Fix tag label removed when share view is opened</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5387">Fix unknown share token error message</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5388">No themed icon when dragging folder</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5389">Add quota to the files view</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5346">"Unspecified share exception" instead of proper 404 page on unknown public share tokens</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5382">Fix "add to your nextcloud" input field</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5385">Revert "allow admin to disable groups on personal page"</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5088">Bearer auth backend causes problems with several dav clients</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5365">Filter missing groups in share provider</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5303">Use the email address configured in Nextcloud as sender instead of the users email address</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5354">Execute eval in global scope, addresses #5314</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5355">L10n improvements from transifex</a></li>
    </ul>

    <h5>Activity</h5>
    <ul>
    <li><a href="https://github.com/nextcloud/activity/pull/177">Fix mimetype icon of deleted folders</a></li>
    <li><a href="https://github.com/nextcloud/activity/pull/176">Use PNG icons for emails and ios client</a></li>
    <li><a href="https://github.com/nextcloud/activity/pull/175">Ignore paths from chunking</a></li>
    </ul>

    <h5>Notifications</h5>
    <ul>
    <li><a href="https://github.com/nextcloud/notifications/pull/86">Allow to expand the message on click... </a></li>
    </ul>

    <h5>text editor</h5>
    <ul>
    <li><a href="https://github.com/nextcloud/files_texteditor/pull/56">Use text editor endpoint for previews</a></li>
    <li><a href="https://github.com/nextcloud/files_texteditor/pull/46">Use CRLF line ending by default for better compatibility</a></li>
    </ul>

    <h5>Gallery</h5>
    <ul>
    <li><a href="https://github.com/nextcloud/gallery/pull/303">Fix link when opening from files</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/302">Do not use propably outdated core translations</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/298">Fix the translation source</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/289">Fix logged error if file ID is not available</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/284">Merge JS for public pages</a></li>
    </ul>

    <h5>PDF viewer</h5>
    <ul>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/40">missing context dir</a></li>
    <li><a href="https://github.com/nextcloud/files_pdfviewer/pull/38">Fix z index for small screen sizes</a></li>
    </ul>

    <h3 id="12-0-0">Version 12.0.0 <small>May 22 2017</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.tar.bz2">nextcloud-12.0.0.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.zip">nextcloud-12.0.0.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.tar.bz2.md5">nextcloud-12.0.0.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.zip.md5">nextcloud-12.0.0.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.tar.bz2.sha256">nextcloud-12.0.0.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.zip.sha256">nextcloud-12.0.0.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.tar.bz2.sha512">nextcloud-12.0.0.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.zip.sha512">nextcloud-12.0.0.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.tar.bz2.asc">nextcloud-12.0.0.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-12.0.0.zip.asc">nextcloud-12.0.0.zip.asc</a></p>

    <h4>Changes</h4>
    <p>Over 1100 changes were merged in the server, with many hundreds more in existing or new apps. The main improvements include:</p>
    <ul>
        <li>Collaboration features
        <ul>
            <li>push notifications on mobile</li>
            <li>unique public link shares to multiple users, each with their own settings like read/write rights, password protection and expiration date.</li>
            <li>videocall app integration with screensharing</li>
            <li>federated activities</li>
            <li>writable public share link allowing you to share and collaborate immediately</li>
            <li>compatibility for user-centric group management with the Circles app</li>
            <li>social sharing (Twitter, G+, Facebook, Diaspora)</li>
            <li>XMPP chat improvements (file transfers, chat status notifications, message archive management) </li>
        </ul></li>
        <li>Security improvements
        <ul>
            <li>brute force protection for developers</li>
            <li>rate limiting of certain IP range for developers</li>
            <li>support of a wide variety of authentication mechanisms</li>
        </ul></li>
        <li>Administration
        <ul>
            <li>push notifications via command line</li>
            <li>new apps (Guest App, Impersonate App, Excludedirs app, Quota Warning App, JSLoader App, Backup App)</li>
        </ul></li>

        <li>Contacts menu for reaching users easily in your Nextcloud</li>
        <li>Many more smaller changes like the ability to move files through the menu instead of drag and drop in the Files App, and ability to find documents deleted by a recipient in your trashbin</li>
    </ul>

    <p><a href="https://nextcloud.com/blog/welcome-to-nextcloud-12/">Release announcement with overview about features and changes</a></p>
    <p><a href="https://github.com/nextcloud/server/milestone/10?closed=1">See a full list of integrated pull requests here.</a></p>

    <a name="latest11"></a>
    <h3 id="11-0-8">Version 11.0.8 <small>March 15 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.tar.bz2">nextcloud-11.0.8.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.zip">nextcloud-11.0.8.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.tar.bz2.md5">nextcloud-11.0.8.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.zip.md5">nextcloud-11.0.8.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.tar.bz2.sha256">nextcloud-11.0.8.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.zip.sha256">nextcloud-11.0.8.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.tar.bz2.sha512">nextcloud-11.0.8.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.zip.sha512">nextcloud-11.0.8.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.tar.bz2.asc">nextcloud-11.0.8.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.8.zip.asc">nextcloud-11.0.8.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/8075">Do not catch and ignore ServerNotAvailable in the wrong spot (server#8075)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8153">Update CRL because user_sql cert was lost (server#8153)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8273">Update CRL to revoke files_rightclick (server#8273)</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/8538">Fix retrieval of group members with numerical uids from LDAP (server#8538)</a></li>
    </ul>
    <p>Note that this is the last public 11.0.x release. To maintain the security and integrity of your Nextcloud installation you should upgrade to 12.0.x as soon as possible or acquire a <a href="https://nextcloud.com/enterprise">Nextcloud Subscription</a> to get access to further LTS releases for Nextcloud 11.</p>

    <h3 id="11-0-7">Version 11.0.7 <small>January 24 2018</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.tar.bz2">nextcloud-11.0.7.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.zip">nextcloud-11.0.7.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.tar.bz2.md5">nextcloud-11.0.7.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.zip.md5">nextcloud-11.0.7.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.tar.bz2.sha256">nextcloud-11.0.7.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.zip.sha256">nextcloud-11.0.7.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.tar.bz2.sha512">nextcloud-11.0.7.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.zip.sha512">nextcloud-11.0.7.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.tar.bz2.asc">nextcloud-11.0.7.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.7.zip.asc">nextcloud-11.0.7.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
        <li><a href="https://github.com/nextcloud/server/pull/7467">#7467</a> Allow 'Nextcloud' in the user agent string of Android</li>
        <li><a href="https://github.com/nextcloud/server/pull/7673">#7673</a> Added additional methods for removal of sensitive info</li>
        <li><a href="https://github.com/nextcloud/server/pull/7718">#7718</a> Throw ServerNotAvailableException when LDAP is caught shutting down</li>
        <li><a href="https://github.com/nextcloud/server/pull/7695" >#7695</a> Don't attempt to translate login names to uids when uids are provided</li>
        <li><a href="https://github.com/nextcloud/server/pull/7746" >#7746</a> Update composer</li>
        <li><a href="https://github.com/nextcloud/server/pull/7780">#7780</a> Improve zip support</li>
        <li><a  href="https://github.com/nextcloud/server/pull/7936">#7936</a> update icewind/smb to 2.0.4</li>
    </ul>


    <h3 id="11-0-6">Version 11.0.6 <small>December 4 2017</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.tar.bz2">nextcloud-11.0.6.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.zip">nextcloud-11.0.6.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.tar.bz2.md5">nextcloud-11.0.6.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.zip.md5">nextcloud-11.0.6.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.tar.bz2.sha256">nextcloud-11.0.6.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.zip.sha256">nextcloud-11.0.6.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.tar.bz2.sha512">nextcloud-11.0.6.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.zip.sha512">nextcloud-11.0.6.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.tar.bz2.asc">nextcloud-11.0.6.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.6.zip.asc">nextcloud-11.0.6.zip.asc</a></p>

    <h4>Changes</h4>
    <h5>Server</h5>
    <ul>
        <li><a href="https://github.com/nextcloud/server/issues/6504">Fix initializing paged search under some circumstances (#6504)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6548">Throw 101 when an empty group string is provided (#6548)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6588">Fix moving folders out of a cache jail (#6588)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6675">Don't pass User object when uid string is expected (#6675)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6695">MP3 without cover don't get a preview (#6695)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6793">Fix postgresql tests (#6793)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/6897">Timespan check (#6897)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7023">Fix mismatch method signature in Nextcloud 11 (#7023)</a></li>
        <li><a href="https://github.com/nextcloud/server/issues/7148">Unlock files even if an exception occurs (#7148)</a></li>
    </ul>

    <h3 id="11-0-5">Version 11.0.5 <small>September 20 2017</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.tar.bz2">nextcloud-11.0.5.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.zip">nextcloud-11.0.5.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.tar.bz2.md5">nextcloud-11.0.5.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.zip.md5">nextcloud-11.0.5.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.tar.bz2.sha256">nextcloud-11.0.5.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.zip.sha256">nextcloud-11.0.5.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.tar.bz2.sha512">nextcloud-11.0.5.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.zip.sha512">nextcloud-11.0.5.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.tar.bz2.asc">nextcloud-11.0.5.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.5.zip.asc">nextcloud-11.0.5.zip.asc</a></p>

    <h4>Changes</h4>
    <p><a href="https://github.com/nextcloud/server/pulls?q=is%3Apr+milestone%3A%22Nextcloud+11.0.5%22+is%3Aclosed">See the full list of changes in github.</a></p>

    <h3 id="11-0-4">Version 11.0.4 <small>August 7 2017</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.tar.bz2">nextcloud-11.0.4.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.zip">nextcloud-11.0.4.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.tar.bz2.md5">nextcloud-11.0.4.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.zip.md5">nextcloud-11.0.4.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.tar.bz2.sha256">nextcloud-11.0.4.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.zip.sha256">nextcloud-11.0.4.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.tar.bz2.sha512">nextcloud-11.0.4.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.zip.sha512">nextcloud-11.0.4.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.tar.bz2.asc">nextcloud-11.0.4.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-11.0.4.zip.asc">nextcloud-11.0.4.zip.asc</a></p>

    <h4>Changes</h4>
    <ul>
    <li><a href="https://github.com/nextcloud/server/pull/5884">Enable postgres on drone again</li>
    <li><a href="https://github.com/nextcloud/server/issues/5636">Argument 1 passed to OC\Group\MetaData::generateGroupMetaData() must implement interface OCP\IGroup, null given</li>
    <li><a href="https://github.com/nextcloud/server/pull/5813">Skip null groups in group manager</li>
    <li><a href="https://github.com/nextcloud/server/pull/5793">Show warning if PHP 7.2 is used</li>
    <li><a href="https://github.com/nextcloud/server/pull/5806">Fix preview for public links</li>
    <li><a href="https://github.com/nextcloud/server/pull/5809">Fix config.sample.php documentation</li>
    <li><a href="https://github.com/nextcloud/server/pull/5760">Backport translation fixes</li>
    <li><a href="https://github.com/nextcloud/server/pull/5631">Add recovery key on public upload</li>
    <li><a href="https://github.com/nextcloud/server/pull/5763">Add test to check if new files are added to the root of the repository</li>
    <li><a href="https://github.com/nextcloud/server/pull/5464">Dont die if we try to access the shared cache while setting up the shared storage</li>
    <li><a href="https://github.com/nextcloud/server/pull/5680">Fix unselecting items on multi select dropdowns</li>
    <li><a href="https://github.com/nextcloud/server/pull/5215">Some sharing settings</li>
    <li><a href="https://github.com/nextcloud/server/pull/5575">allow to disable upload to lookup server, by default it is enabled</li>
    <li><a href="https://github.com/nextcloud/server/pull/5499">Don't try to save the setting when its not an admin</li>
    <li><a href="https://github.com/nextcloud/server/pull/5493">Fix upload remaining time</li>
    <li><a href="https://github.com/nextcloud/server/pull/5190">Treat PHP Errors on User session regenerate</li>
    <li><a href="https://github.com/nextcloud/server/issues/3699">Backport fix for colon in folder name on dav</li>
    <li><a href="https://github.com/nextcloud/server/pull/5363">Don't try to encrypt/decrypt the certificate bundle</li>
    <li><a href="https://github.com/nextcloud/server/pull/4913">Fix mimetype update query</li>
    <li><a href="https://github.com/nextcloud/server/pull/5366">Filter missing groups in share provider</li>
    <li><a href="https://github.com/nextcloud/server/issues/4794">Doctrine\DBAL\Exception\DriverException updating oc_filecache table with PostgreSQL</a>
    </li>
    <li><a href="https://github.com/nextcloud/server/pull/5214">Trigger changeUser hook only on real changes</li>
    <li><a href="https://github.com/nextcloud/server/pull/5128">Add layer on top of LDAP methods to catch server disconnects and attempt re-connection</li>
    <li><a href="https://github.com/nextcloud/server/pull/4999">fix for sharing stable 11</li>
    <li><a href="https://github.com/nextcloud/server/pull/4919">Round the mtime in touch
    <li><a href="https://github.com/nextcloud/server/pull/4801">SSL menu is now shown for files_external</li>
    <li><a href="https://github.com/nextcloud/server/pull/4622">Dont spam log when request can't access filesystem</li>
    <li><a href="https://github.com/nextcloud/server/pull/4491">Prevent PHP request to get killed when using fclose callback (#26775)</li>
    <li><a href="https://github.com/nextcloud/server/pull/4459">Fix the storage info and other checks when the user has wrong casing</li>
    <li><a href="https://github.com/nextcloud/server/pull/4474">Add unit tests for mounts of delete users</li>
    </ul>

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
    <h3 id="10-0-6">Version 10.0.6 <small>August 7 2017</small></h3>
    <p>Download: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.tar.bz2">nextcloud-10.0.6.tar.bz2</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.zip">nextcloud-10.0.6.zip</a></br>
    Check the file integrity with:</br>
    MD5: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.tar.bz2.md5">nextcloud-10.0.6.tar.bz2.md5</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.zip.md5">nextcloud-10.0.6.zip.md5</a></br>
    SHA256: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.tar.bz2.sha256">nextcloud-10.0.6.tar.bz2.sha256</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.zip.sha256">nextcloud-10.0.6.zip.sha256</a></br>
    SHA512: <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.tar.bz2.sha512">nextcloud-10.0.6.tar.bz2.sha512</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.zip.sha512">nextcloud-10.0.6.zip.sha512</a></br>
    PGP (<a href="https://nextcloud.com/nextcloud.asc">Key</a>): <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.tar.bz2.asc">nextcloud-10.0.6.tar.bz2.asc</a> or <a href="https://download.nextcloud.com/server/releases/nextcloud-10.0.6.zip.asc">nextcloud-10.0.6.zip.asc</a></p>

    <h4>Changes</h4>
    <h5>Server</h5>
    <ul>
        <li><a href="https://github.com/nextcloud/server/issues/1569">Upgrade to 10.0.1 fails on Remove shares of a users root folder</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/4802">SSL menu is now shown for files_external</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/4460">Fix the storage info and other checks when the user has wrong casing</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/4475">Add unit tests for mounts of delete users</a></li>
    </ul>

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
</div>
</section>
