<h1>Nextcloud 7 Features</h1>
<p>Nextcloud 7 Community Edition has significant feature improvements for users, administrators and developers. Want to learn more about Nextcloud from somebody in person? Meet us at an event!</p>
<a href="/events" class="btn btn-lg btn-default">Join an Nextcloud event</a></br></br>

Jump to improvements for: <a href="#user">User</a> | <a href="#admin">Admin</a> | <a href="#developer">Developer</a></br>
<a name="user"></a>
<h2>Improvements for Users</h2>
<div class="panel-group" id="accordionUser">
	<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
          <i class="icon-sitemap"></i>&nbsp;&nbsp;Server to Server Sharing
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse in">
      <div class="panel-body">
		Nextcloud 7 introduces server to server sharing, allowing you to mount a share from another Nextcloud instance and seamlessly collaborate on and share files from within your own Nextcloud. This essentially combines two private clouds into a public cloud. You can even have the folder locally synced through the client. No need to create user accounts on your or the other instance - just, once, add the shared folder into your Nextcloud. Read more in this <a title="Improved sharing" href="https://nextcloud.org/blog/nextcloud-7-sneak-peek-improved-sharing/" target="_blank">sneak peek article about Improved Sharing</a>.
		<div class="row">
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/s2s0.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/s2s1.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/s2s2.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/s2s3.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
		</div>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <i class="icon-globe"></i>&nbsp;&nbsp;Improved File Sharing
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
The sharing code has been dramatically enhanced, streamlined and improved, making sharing more flexible, faster and accessible via the Nextcloud API. These improvements include:</br></br>
		<ul>
			<li><strong>Sharing by group</strong> – Turn sharing off/on based on group.  
			<li><strong>File Filters</strong> – See “files shared with me”, “files I shared”, and “files shared with link” from the file view in the web browser. 
			<li><strong>Shared file owner</strong> – The file owner’s name is displayed on the file browser when a file is shared with you
			<li><strong>Force Password</strong> – Admins can force users to set a password when they create shared links which can ensure that files shared outside of Nextcloud are properly secured.
			<li><strong>Share Link Default and Max Expiration</strong> – Admins can require users to set a password or an expiration date for the link.
			<li><strong>No more Shared Folder</strong> – The “Shared” folder has been removed; instead, shared files are identified with the overlay icon representing “shared with me”. (If users are upgrading, they can continue to use the Shared folder they already have.)
		</ul>
		Read more in this <a title="More sharing!" href="https://nextcloud.org/blog/nextcloud-7-sneak-peek-more-sharing/" target="_blank">sneak peek 'More Sharing'</a>.
		<div class="row">
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/adminoptions.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/permissions.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
			<div class="col-md-3"><iframe width="420" height="315" src="//www.youtube.com/embed/oy-YwBbHkEE?rel=0" frameborder="0" allowfullscreen></iframe></div>
			<div class="col-md-3"></div>
		</div>
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
          <i class="icon-file-text-o"></i>&nbsp;&nbsp;Improved Documents Capabilities
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
      	In addition to the existing ability to collaboratively edit .odt files within the web browser, Nextcloud can now convert Microsoft Word documents 
      	on the fly for online editing. You can open a Word doc online, edit it live with other users in the browser, and close it again – 
      	it will convert back to Word. And, it will be saved back to your desktop with the changes embedded. Read more in this <a title="online collaboration with Documents" href="https://nextcloud.org/blog/nextcloud-7-sneak-peek-online-collaboration-with-documents/" target="_blank">online collaboration with Documents</a> sneak peek article.
		<div class="row">
			<div class="col-md-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/documents/documents.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
		</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          <i class="icon-lightbulb-o"></i>&nbsp;&nbsp;File Activity Notifications
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
		The Activities view has been streamlined, giving a cleaner and more efficient look. You can now select the activities you want to record in your activity stream and set preferences for email notifications if:</br></br>
		<ul>
			<li>A file or folder is shared with you</li>
			<li>A new file or folder is created inside a shared folder</li>
			<li>A file or folder is changed inside a shared folder</li>
			<li>A file or folder has been deleted from inside a shared folder</li>
		</ul>
		</br>
		Emails can be sent to you on a daily, weekly or monthly schedule.
		<div class="row">
			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/activity/options.png" alt="..." class="img-thumbnail"></div>
		</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <i class="icon-list"></i>&nbsp;&nbsp;New Files View
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
		The new user interface of thie Files app gives a much improved user experience with changes including:</br></br>
		<ul>
			<li><strong>Lazy loading files</strong> – Files are loaded using “lazy loading” which loads files as you scroll down the page, providing faster and more responsive access.</li>
			<li><strong>File Sorting</strong> – Files can be sorted in the web browser by name, size and last modified time.</li>
			<li><strong>Storage Location Report</strong> –  An “external storage” filter enables users to filter files based on external storage location, such as ftp, S3, Swift, Dropbox, Google Drive and more.</li>
		</ul>
		Read more in this <a title="Performance and Ease of use" href="https://nextcloud.org/blog/nextcloud-7-sneak-peek/" target="_blank">sneak peek article 'Performance and Ease of use'</a>.
		<div class="row">
			<div class="col-md-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/files/newview.png" alt="..." class="img-thumbnail"></div>.
			<div class="col-md-5"><iframe width="560" height="315" src="//www.youtube.com/embed/qXWZs07Y7jU?rel=0" frameborder="0" allowfullscreen></iframe></div>
		</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
          <i class="icon-mobile"></i>&nbsp;&nbsp;Mobile Web Browser Support
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
      	Nextcloud now features a web interface usable on most tablet and mobile browsers. This brings support to devices that don’t have a native app – 
      	like Microsoft Phone and Blackberry OS devices – as well as providing extra options for accessing files stored in Nextcloud.
      	<div class="row">
			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/files/mobileview.png" alt="..." class="img-thumbnail"></div>
		</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
          <i class="icon-lock"></i>&nbsp;&nbsp;Password Strength Indicator
        </a>
      </h4>
    </div>
    <div id="collapseEleven" class="panel-collapse collapse">
      <div class="panel-body">
      	When setting up a password in Nextcloud, a password strength indicator helps users choose stronger, more secure passwords.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
          <i class="icon-fast-forward"></i>&nbsp;&nbsp;Significant Speed Improvements
        </a>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse">
      <div class="panel-body">
      	Nextcloud web pages render and load faster with new static CSS and JavaScript files. And, Nextcloud clients sync faster with 
      	the new parallel upload and download mechanism. There have also been many improvements to database access of Nextcloud, improving
      	responsiveness and decreasing server resource consumption. Read more in this <a title="Performance and Ease of use" href="https://nextcloud.org/blog/nextcloud-7-sneak-peek/" target="_blank">sneak peek article 'Performance and Ease of use'</a>.
      </div>
    </div>
  </div>
  
</div>
<a name="admin"></a>
<h2>Improvements for Administrators</h2>
<div class="panel-group" id="accordionAdmin">
	<div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOneAdmin">
	          <i class="icon-group"></i>&nbsp;&nbsp;New User Management
	        </a>
	      </h4>
	    </div>
	    <div id="collapseOneAdmin" class="panel-collapse in">
	      <div class="panel-body">
	      	Admins can take advantage of the improved capabilities for more easily managing users:</br></br>
	      	<ul>
	      		<li>View all Nextcloud users in a single scrolling window</li>
	      		<li>Search by user display name using the new text filter</li>
	      		<li>Filter user lists by group</li>
	      		<li>See user attributes including the storage location and last login time</li>
	      		<li>Add new groups with a click of a button.</li>
	      		<li>Add or edit users and user attributes ( i.e. group memberships, quota, and group admin rights) 
	      			with improved ease and speed</li>
	      		<li>Enable apps by group</li>
	      	</ul>
	      	Read more in this <a title="Nextcloud 7 for system administrators" href="https://nextcloud.org/blog/nextcloud-7-sneak-peek-nextcloud-7-for-admins/" target="_blank">Nextcloud 7 for system administrators</a> sneak peek article.
	      	<div class="row">
				<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/settings/usermanagement.png" alt="..." class="img-thumbnail"></div>
			</div>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEightAdmin">
          <i class="icon-cloud"></i>&nbsp;&nbsp;External Storage Access
        </a>
      </h4>
    </div>
    <div id="collapseEightAdmin" class="panel-collapse collapse">
      <div class="panel-body">
      	The external storage app provides access to storage locations including FTP, Dropbox, Google Drive, sFTP,
      	Swift, S3, WebDAV, SMB/CIFS and more. Admins can specify which storage type can be added by end users in their personal tab, 
      	providing more granular control over external storage mounts. 
      	<div class="row">
				<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/files/addstorage.png" alt="..." class="img-thumbnail"></div>
			</div>
      </div>
    </div>
  </div> 
  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourAdmin">
	          <i class="icon-database"></i>&nbsp;&nbsp;Object Stores as Primary Storage
	        </a>
	      </h4>
	    </div>
	    <div id="collapseFourAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	      	Nextcloud can now leverage SWIFT object stores as primary storage for Nextcloud files. Now users can choose the best option 
	      	for their specific need: local storage, network filesystem mounts, or SWIFT object stores.
	      </div>
	    </div>
	  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTenAdmin">
          <i class="icon-exclamation-triangle"></i>&nbsp;&nbsp;Antivirus Scanner Integration
        </a>
      </h4>
    </div>
    <div id="collapseTenAdmin" class="panel-collapse collapse">
      <div class="panel-body">
      	The Antivirus app (with minor customization) may be used with external virus scanners (rather than the default CLAM AV) 
      	in scanning files as they arrive on the server.
      </div>
    </div>
  </div>
	
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThreeAdmin">
	          <i class="icon-user"></i>&nbsp;&nbsp;Active Directory / LDAP Enhancements
	        </a>
	      </h4>
	    </div>
	    <div id="collapseThreeAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	      	Several improvements have been made to the LDAP and Active Directory plug in application, improving both the performance 
	      	of the application as well as the compatibility with openLDAP, AD and other vendors. For example, the plug-in can now manage 
	      	paginated responses to handle tens of thousands of users that are part of a single flat OU.
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoAdmin">
	          <i class="icon-wrench"></i>&nbsp;&nbsp;SMTP Config Wizard
	        </a>
	      </h4>
	    </div>
	    <div id="collapseTwoAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
			It is now simpler than ever to connect Nextcloud to an email server in a simple GUI config wizard, enabling Nextcloud 
			to send automated messages to users – such as the notifications from the Activities app. Nextcloud can connect via PHP or using standard 
			SMTP.
			<div class="row">
				<div class="col-md-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/settings/mailserversettings.png" alt="..." class="img-thumbnail"></div>
				<div class="col-md-5"><iframe width="560" height="315" src="//www.youtube.com/embed/atarLEyLtPY?rel=0" frameborder="0" allowfullscreen></iframe></div>
			</div>
    	</div>
	  </div>
	</div>
	
	   
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFiveAdmin">
	          <i class="icon-inbox"></i>&nbsp;&nbsp;Editable Email Templates
	        </a>
	      </h4>
	    </div>
	    <div id="collapseFiveAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	      	Edit the email templates that Nextcloud sends for lost password recovery (if using the Nextcloud user management), as well 
	      	as the template for sending shared files and share links. 
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSevenAdmin">
	          <i class="icon-code"></i>&nbsp;&nbsp;Upgrade / Migration Routine Script
	        </a>
	      </h4>
	    </div>
	    <div id="collapseSevenAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
			Thanks to improvements in the upgrade tool, the upgrade from previous Nextcloud versions to Nextcloud 7 will happen more quickly.  Additionally, admins can execute scripts to migrate from one database 
			to another – as part of the command line tools included with Nextcloud. For example, a user may migrate from SQLite to MySQL using these tools.
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSixAdmin">
	          <i class="icon-dashboard"></i>&nbsp;&nbsp;Quota Improvements (including external storage)
	        </a>
	      </h4>
	    </div>
	    <div id="collapseSixAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	      	Admins can set a configuration switch in the Nextcloud config file to include or exclude external storage locations 
	      	in the calculation of user quota. 
	      </div>
	    </div>
	  </div>
	  
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelveAdmin">
          More Features
        </a>
      </h4>
    </div>
    <div id="collapseTwelveAdmin" class="panel-collapse collapse">
      <div class="panel-body">
      	Nextcloud 7 builds further on its current admin features to include:</br></br>
      	<ul>
      		<li>External storage backend that uses Nextcloud credentials to connect to a Samba share</li>
      		<li>Improved apps management</li>
      		<li>Overall speed and performance enhancements</li>
      	</ul>
      </div>
    </div>
  </div>
</div>
<a name="developer"></a>
<h2>Improvements for Developers</h2>
<div class="panel-group" id="accordionDeveloper">
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoDev">
          <i class="icon-chain-broken"></i>&nbsp;&nbsp;Webhooks
        </a>
      </h4>
    </div>
    <div id="collapseTwoDev" class="panel-collapse in">
      <div class="panel-body">
      	Integrate Nextcloud into other systems with Webhooks. Apps can publish an event, and other apps can subscribe to 
      	this event using the publication/subscription model (pubsubhub). Developers create an app that registers itself 
      	with the published event manager. From that point forward, any time the event occurs, a POST is made to the URL 
      	provided by the subscriber to notify them of the event. Apps can subscribe to the notification event, unsubscribe, 
      	set a URL to respond to, set a lease time for the subscription, and provide an optional digest used for security purposes. 
      </div>
    </div>
  </div>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordionDeveloper" href="#collapseOneDev">
          <i class="icon-exchange"></i>&nbsp;&nbsp;Overlay Icon API
        </a>
      </h4>
    </div>
    <div id="collapseOneDev" class="panel-collapse collapse">
      <div class="panel-body">
      	A new API allows for a visual representation facilitated by the desktop client shows which files are owned by the user, and which files are shared 
      	with the user but owned by someone else. This API indicates which files are shared, so that the desktop client 
      	and mobile app can place the shared file or shared folder icon appropriately on files stored in Nextcloud.
      </div>
    </div>
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThreeDev">
          <i class="icon-pencil"></i>&nbsp;&nbsp;Developer Documentation
        </a>
      </h4>
    </div>
    <div id="collapseThreeDev" class="panel-collapse collapse">
      <div class="panel-body">
      	Access the latest <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>">developer documentation</a> as you extend Nextcloud. 
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourDev">
          More Features
        </a>
      </h4>
    </div>
    <div id="collapseFourDev" class="panel-collapse collapse">
      <div class="panel-body">
      	Nextcloud 7 offers additional developer tools including:</br></br>
      	<ul>
      		<li>Better controllers for App Framework</li>
      		<li>Simple database layer for App Framework</li>
      		<li>Easy CORS implementation for App Framework</li>
      		<li>Support DB connections via sockets</li>
      	</ul>
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFiveDev">
          <i class="icon-user"></i>&nbsp;&nbsp;Join the Nextcloud Contributor Conference to learn more!
        </a>
      </h4>
    </div>
    <div id="collapseFiveDev" class="panel-collapse collapse">
      <div class="panel-body">
      	From August 26-31, Nextcloud contributors will gather in Berlin to work on Nextcloud. On Saturday the 30th, a Conference day will provide a chance to developers new to Nextcloud to learn building Nextcloud apps, securing PHP applications, compiling Nextcloud unit tests and much more. <a href="/conf/">Find out more and participate</a>!
      </div>
    </div>
  </div>
    Read more in the <a title="Nextcloud 7 for developers" href="https://nextcloud.org/blog/nextcloud-7-sneak-peek-nextcloud-7-for-developers/" target="_blank">Nextcloud 7 for developers</a> sneak preview.
</div>
