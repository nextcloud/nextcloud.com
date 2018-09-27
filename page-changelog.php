<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Nextcloud Server Changelog</h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">
    <p>We recommend you follow our <a href="<?php echo home_url('release-channels') ?>">Release Channels</a> to always have the latest and most secure Nextcloud Server version which fits your needs.</p>
    Go directly to the latest maintenance release of:
    <ul>
    <li><a href="#latest14">Nextcloud 14</a></li>
    <li><a href="#latest13">Nextcloud 13</a></li>
    <li><a href="#latest12">Nextcloud 12</a></li>
    <li><a href="#latest11">Nextcloud 11 (unsupported!)</a></li>
    <li><a href="#latest10">Nextcloud 10 (unsupported!)</a></li>
    <li><a href="#latest9">Nextcloud 9 (unsupported!)</a></li>
    </ul>

    <a name="latest14"></a>
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
    <li><a href="https://github.com/nextcloud/server/pull/5896">[stable12] Fix show password button for password change</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5883">[stable12] Enable postgres on drone again</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5889">fix overlay on show password</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5875">[stable12] Add new bundle</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5858">[stable12] proper logo height in emails for Outlook</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4987">scan.nextcloud.com causing exception in theming?</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4831">Long running php processes: LDAP timeout</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5102">X-XSS-Protection header invalid (NextCloud 12.0.0.29)</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5830">[stable12] Fix for mb strlen</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5826">[stable12] Fix error message on untrusted domain error page</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5757">[12] Fix renaming of non-renamble mounts</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5786">[12] Also repair storage id's when repairing invalid entries</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5754">[12] still remove the federated share even if we cant notify the remote</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5792">[stable12] Show warning if PHP 7.2 is used</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5805">[stable12] fix preview for public links</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5807">[stable12] Fix config.sample.php documentation</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5630">[stable12] Add recovery key on public upload</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5759">[stable12] Backport translation fixes</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5804">[stable12] Enable acceptance tests again on Drone 0.7</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5796">[stable12] Backport allow to theme emails</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5777">[stable 12] Add ellipsis for app titles in the app menu popover</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5784">[stable12] Fix emitting of legacy hook post_unshare</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5782">[stable12] Allow overwriting of IOS theming values</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5765">Update 3rdparty for "Fix infinite propfinds reporting files as direct…</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5771">[12] Fix invalid path repair step not getting all invalid entries</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5762">[stable12] Add test to check if new files are added to the root of the repository</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5711">[12] null users dont exist </a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5710">[12] Fix scan permissions with nested permissions masks </a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5655">[12] fix moving folders out of a cache jail </a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4965">Moving shared folders doesn't work as expected</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5697">Write cert bundle to tmp file first</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5692">[12] properly block file upload to non-active filelist</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4941">nc beta 4 internal server error due to totp backup codes</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5687">[12] Fix propagating changes within jail wrapper</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5463">[12] dont die if we try to access the shared cache while setting up the shared storage</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5686">hint should not be clickable</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5484">Check if Circles is still here</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5435">[stable12] Allow dir-listing also when one child is blocked by access control</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5679">[stable12] Fix unselecting items on multi select dropdowns</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5670">[stable12] Fix remote share activity emails</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5667">[stable12] fix alignment of radio button and its label in encryption settings</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5639">Remote share emails doesn't show what's shared.</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5665">[stable12] Ldap password renewal fixes for NC12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5648">[stable12] Use PNG icons for activity emails and ios client</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5458">[stable12] Use the share_folder config for remote shares</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5617">[stable12] Don't load navigation entries of restricted apps</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5433">[stable12] Don't try to generate logs for chunking paths</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5619">[stable12] Don't log passwords on dav exceptions</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5434">Use translated Hint instead of english error on password policy</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5613">[stable12] Add info text about updates</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5584">[stable12] Use base url for cache prefix and SCSS caching</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5525">[stable12] Enhance the logging if the part file can not be renamed</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5601">[stable12] Improved logging for object storage and trashbin</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5583">[stable12] Fix more icon in apps menu on bright backgrounds</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5507">[stable12] Use realpath to obtain the webroot</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5521">[stable12] Don't create activities for email and password change before login</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5509">[stable12] Allow to force a language and set it via the ocs api</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5511">[stable12] Create users in non default backends first</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/4895">Progress bar message completely wrong with multi-GB file upload</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5489">[stable12] Fix example theme</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5480">[stable12] Don't try to save the setting when its not an admin</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5200">Update layout.user.php</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5442">Fix upload remaining time and uploadrate value</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5420">[stable12] App menu fixes</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5428">[stable12] Allow to find local users by their email address</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5422">[stable12] Treat PHP Errors on User session regenerate</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5210">[stable12] Ldap attempt reconnect stable12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5301">[stable12] allow users to send PropPatch request when calendar is group-shared with them</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5299">[stable12] urldecode group principals in Cal- and CardDAV backend</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5416">[stable12] Use the guest.css for the maintenance page as well</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5397">[stable12] Fixed a crash caused by Local::copyFromStorage() not conforming to Co…</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5026">[stable12] Make file name input tooltip error text change</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5401">Translate OAuth2 in stable12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5402">[stable12] Localize contacts menu search input placeholder</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5386">[stable12] Prevent sending second WWW-Authenticate header</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5362">[stable12] don't try to encrypt/decrypt the certificate bundle</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5296">[stable12] allow PropPatch requests to contact_birthdays</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5063">[stable12] Fix username and avatar for external users</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5379">[stable12] Fix tag label removed when share view is opened</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5387">[stable12] Fix unknown share token error message</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5388">[stable12] no themed icon when dragging folder</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5389">[stable12] Add quota to the files view</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5346">"Unspecified share exception" instead of proper 404 page on unknown public share tokens</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5382">[stable12] fix "add to your nextcloud" input field</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5385">[stable12] Revert "allow admin to disable groups on personal page"</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5088">Bearer auth backend causes problems with several dav clients</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5365">[stable12] filter missing groups in share provider</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5303">[stable12] use the email address configured in Nextcloud as sender instead of the users email address</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5354">[stable12] execute eval in global scope, addresses #5314</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5355">[stable12] l10n improvements from transifex</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5422">[stable12] Treat PHP Errors on User session regenerate</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5210">[stable12] Ldap attempt reconnect stable12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5301">[stable12] allow users to send PropPatch request when calendar is group-shared with them</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5299">[stable12] urldecode group principals in Cal- and CardDAV backend</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5416">[stable12] Use the guest.css for the maintenance page as well</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5397">[stable12] Fixed a crash caused by Local::copyFromStorage() not conforming to Co…</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5026">[stable12] Make file name input tooltip error text change</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5401">Translate OAuth2 in stable12</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5402">[stable12] Localize contacts menu search input placeholder</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5386">[stable12] Prevent sending second WWW-Authenticate header</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5362">[stable12] don't try to encrypt/decrypt the certificate bundle</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5296">[stable12] allow PropPatch requests to contact_birthdays</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5063">[stable12] Fix username and avatar for external users</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5379">[stable12] Fix tag label removed when share view is opened</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5387">[stable12] Fix unknown share token error message</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5388">[stable12] no themed icon when dragging folder</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5389">[stable12] Add quota to the files view</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5346">"Unspecified share exception" instead of proper 404 page on unknown public share tokens</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5382">[stable12] fix "add to your nextcloud" input field</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5385">[stable12] Revert "allow admin to disable groups on personal page"</a></li>
    <li><a href="https://github.com/nextcloud/server/issues/5088">Bearer auth backend causes problems with several dav clients</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5365">[stable12] filter missing groups in share provider</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5303">[stable12] use the email address configured in Nextcloud as sender instead of the users email address</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5354">[stable12] execute eval in global scope, addresses #5314</a></li>
    <li><a href="https://github.com/nextcloud/server/pull/5355">[stable12] l10n improvements from transifex</a></li>
    </ul>

    <h5>Activity</h5>
    <ul>
    <li><a href="https://github.com/nextcloud/activity/pull/177">[stable12] Fix mimetype icon of deleted folders</a></li>
    <li><a href="https://github.com/nextcloud/activity/pull/176">[stable12] Use PNG icons for emails and ios client</a></li>
    <li><a href="https://github.com/nextcloud/activity/pull/175">[stable12] Ignore paths from chunking</a></li>
    </ul>

    <h5>Notifications</h5>
    <ul>
    <li><a href="https://github.com/nextcloud/notifications/pull/86">Allow to expand the message on click... </a></li>
    </ul>

    <h5>text editor</h5>
    <ul>
    <li><a href="https://github.com/nextcloud/files_texteditor/pull/56">[stable12] Use text editor endpoint for previews</a></li>
    <li><a href="https://github.com/nextcloud/files_texteditor/pull/46">[stable12] Use CRLF line ending by default for better compatibility</a></li>
    </ul>

    <h5>Gallery</h5>
    <ul>
    <li><a href="https://github.com/nextcloud/gallery/pull/303">Fix link when opening from files</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/302">[stable12] Do not use propably outdated core translations</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/298">Fix the translation source</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/289">[stable12] Fix logged error if file ID is not available</a></li>
    <li><a href="https://github.com/nextcloud/gallery/pull/284">[stable12] Merge JS for public pages</a></li>
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
    <li><a href="https://github.com/nextcloud/server/pull/5884">[stable11] Enable postgres on drone again</li>
    <li><a href="https://github.com/nextcloud/server/issues/5636">Argument 1 passed to OC\Group\MetaData::generateGroupMetaData() must implement interface OCP\IGroup, null given</li>
    <li><a href="https://github.com/nextcloud/server/pull/5813">[stable11] Skip null groups in group manager</li>
    <li><a href="https://github.com/nextcloud/server/pull/5793">[stable11] Show warning if PHP 7.2 is used</li>
    <li><a href="https://github.com/nextcloud/server/pull/5806">[stable11] fix preview for public links</li>
    <li><a href="https://github.com/nextcloud/server/pull/5809">[stable11] Fix config.sample.php documentation</li>
    <li><a href="https://github.com/nextcloud/server/pull/5760">[stable11] Backport translation fixes</li>
    <li><a href="https://github.com/nextcloud/server/pull/5631">[stable11] Add recovery key on public upload</li>
    <li><a href="https://github.com/nextcloud/server/pull/5763">[stable11] Add test to check if new files are added to the root of the repository</li>
    <li><a href="https://github.com/nextcloud/server/pull/5464">[11] dont die if we try to access the shared cache while setting up the shared storage</li>
    <li><a href="https://github.com/nextcloud/server/pull/5680">[stable11] Fix unselecting items on multi select dropdowns</li>
    <li><a href="https://github.com/nextcloud/server/pull/5215">[stable11] some sharing settings</li>
    <li><a href="https://github.com/nextcloud/server/pull/5575">allow to disable upload to lookup server, by default it is enabled</li>
    <li><a href="https://github.com/nextcloud/server/pull/5499">[stable11] Don't try to save the setting when its not an admin</li>
    <li><a href="https://github.com/nextcloud/server/pull/5493">[stable11] Fix upload remaining time</li>
    <li><a href="https://github.com/nextcloud/server/pull/5190">[stable11] Treat PHP Errors on User session regenerate</li>
    <li><a href="https://github.com/nextcloud/server/issues/3699">Backport fix for colon in folder name on dav</li>
    <li><a href="https://github.com/nextcloud/server/pull/5363">[stable11] don't try to encrypt/decrypt the certificate bundle</li>
    <li><a href="https://github.com/nextcloud/server/pull/4913">[stable11] Fix mimetype update query</li>
    <li><a href="https://github.com/nextcloud/server/pull/5366">[stable11] filter missing groups in share provider</li>
    <li><a href="https://github.com/nextcloud/server/issues/4794">Doctrine\DBAL\Exception\DriverException updating oc_filecache table with PostgreSQL</a>
    </li>
    <li><a href="https://github.com/nextcloud/server/pull/5214">[stable11] Trigger changeUser hook only on real changes</li>
    <li><a href="https://github.com/nextcloud/server/pull/5128">[stable11] Add layer on top of LDAP methods to catch server disconnects and attempt re-connection</li>
    <li><a href="https://github.com/nextcloud/server/pull/4999">fix for sharing stable 11</li>
    <li><a href="https://github.com/nextcloud/server/pull/4919">[11] round the mtime in touch
    <li><a href="https://github.com/nextcloud/server/pull/4801">[stable11] SSL menu is now shown for files_external</li>
    <li><a href="https://github.com/nextcloud/server/pull/4622">[11] dont spam log when request can't access filesystem</li>
    <li><a href="https://github.com/nextcloud/server/pull/4491">[11] Prevent PHP request to get killed when using fclose callback (#26775)</li>
    <li><a href="https://github.com/nextcloud/server/pull/4459">[stable11] Fix the storage info and other checks when the user has wrong casing</li>
    <li><a href="https://github.com/nextcloud/server/pull/4474">[stable11] Add unit tests for mounts of delete users</li>
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
        <li><a href="https://github.com/nextcloud/server/pull/4802">[stable10] SSL menu is now shown for files_external</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/4460">[stable10] Fix the storage info and other checks when the user has wrong casing</a></li>
        <li><a href="https://github.com/nextcloud/server/pull/4475">[stable10] Add unit tests for mounts of delete users</a></li>
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
