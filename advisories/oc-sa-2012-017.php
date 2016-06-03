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
        <h2>Several CSRF security fixes (oC-SA-2012-017)</h2>
        <p>1st July 2012</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Multiple cross-site request forgery (CSRF) vulnerabilities in Nextcloud before 4.0.6 allow remote attackers to hijack the authentication of arbitrary users for requests that use</p>
<ul><li>addBookmark.php in bookmarks/ajax/</li><li>delBookmark.php in bookmarks/ajax/</li><li>editBookmark.php in bookmarks/ajax/</li><li>calendar/delete.php in calendar/ajax/</li><li>calendar/edit.php in calendar/ajax/</li><li>calendar/new.php in calendar/ajax/</li><li>calendar/update.php in calendar/ajax/</li><li>event/delete.php in calendar/ajax/</li><li>event/edit.php in calendar/ajax/</li><li>event/move.php in calendar/ajax/</li><li>event/new.php in calendar/ajax/</li><li>import/import.php in calendar/ajax/</li><li>settings/setfirstday.php in calendar/ajax/</li><li>settings/settimeformat.php in calendar/ajax/</li><li>share/changepermission.php in calendar/ajax/</li><li>share/share.ph in calendar/ajax/</li><li>share/unshare.php in calendar/ajax/</li><li>external/ajax/setsites.php in apps/</li><li>files/ajax/delete.php in apps/</li><li>files/ajax/move.php in apps/</li><li>files/ajax/newfile.php in apps/</li><li>files/ajax/newfolder.php in apps/</li><li>files/ajax/rename.php in apps/</li><li>files_sharing/ajax/email.php in apps/</li><li>files_sharing/ajax/setpermissions.php in apps/</li><li>files_sharing/ajax/share.php in apps/</li> <li>files_sharing/ajax/toggleresharing.php in apps/</li> <li>files_sharing/ajax/togglesharewitheveryone.php in apps/</li> <li>files_sharing/ajax/unshare.php in apps/</li><li>files_texteditor/ajax/savefile.php in apps/</li><li>files_versions/ajax/rollbackVersion.php in apps/</li> <li>gallery/ajax/createAlbum.php in apps/</li><li>gallery/ajax/sharing.php in apps/</li><li>tasks/ajax/addtask.php in apps/</li><li>tasks/ajax/addtaskform.php in apps/</li><li>tasks/ajax/delete.php in apps/</li><li>tasks/ajax/edittask.php in apps/</li></ul><p>or administrators for requests that use</p>
<ul><li>changepassword.php in settings/ajax/</li><li>creategroup.php in settings/ajax/</li><li>createuser.php in settings/ajax/</li><li>disableapp.php in settings/ajax/</li><li>enableapp.php in settings/ajax/</li><li>lostpassword.php in settings/ajax/</li><li>removegroup.php in settings/ajax/</li><li>removeuser.php in settings/ajax/</li><li>setlanguage.php in settings/ajax/</li><li>setloglevel.php in settings/ajax/</li> <li>setquota.php in settings/ajax/</li><li>togglegroups.php in settings/ajax/</li></ul></p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>4.0.6</strong> (CVE-2012-4393)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to Nextcloud Server 4.0.7.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Nextcloud Inc. (lukas@nextcloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
