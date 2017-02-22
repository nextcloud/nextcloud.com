<div class="background enterprise-background"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Compare cloud technologies');?></h1>
				<h2><?php echo $l->t('There is a variety of public and private cloud vendors out there. We provide an overview of how they compare to Nextcloud');?></h2>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/enterprise.js"></script>
<!--<link rel="stylesheet" href="css/reset.css">--> <!-- CSS reset -->
<!--<link rel="stylesheet" href="css/style.css">--> <!-- Resource style -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->
</head>
<section class="cd-products-comparison-table">
<div class="container-fluid">
<body>
	<!--<section class="cd-intro">
		<h1>Compare Cloud Storage Technologies</h1>
	</section>--> <!-- .cd-intro -->
	<section class="cd-products-comparison-table">
		<header>
			<h2>Compare Products</h2>

			<div class="actions">
				<a href="#0" class="reset">Reset</a>
				<a href="#0" class="filter">Filter</a>
			</div>
		</header>

		<div class="cd-products-table">
			<div class="features">
				<div class="top-info">Models</div>
				<ul class="cd-features-list">
					<li>On-premise</li>
					<li>License</li>
					<li>Max storage</li>
					<li>Limit file size</li>
					<li class="cd-group">Interfaces</li>
					<li>Cross-platform</li>
					<li>Apps paid/free?</li>
					<li>Sync per file/folder</li>
					<li>Auto upload images (mobile)</li>
					<li>Auto upload video (mobile)</li>
					<li>File manager integration (desktop)</li>
					<li>Bandwidth limiter</li>
					<li>LAN Sync</li>
					<li>WebDAV</li>
					<li class="cd-group">Security features</li>
					<li>Rule based access control</li>
					<li>Anti-virus</li>
					<li>Encryption</li>
					<li>Two-factor authentication</li>
					<li>Brute force protection</li>
					<li>NIST compliant pw policy</li>
					<li>Web security features</li>
					<li>Control retention</li>
					<li>App access control</li>
					<li>Verified security policy</li>
					<li>Bug Bounty Program</li>
					<li class="cd-group">Sharing</li>
					<li>Public link (RO/RW)</li>
					<li>Hide file listing (file drop)</li>
					<li>Password/expiration</li>
					<li>Federated (cross-cloud)</li>
					<li class="cd-group">Web UI</li>
					<li>Editors for...</li>
					<li>Collaborative document editing</li>
					<li>... via public link</li>
					<li>PDF viewer</li>
					<li>Picture Gallery</li>
					<li>Music/video player</li>
					<li class="cd-group">File handling</li>
					<li>Restore older versions</li>
					<li>Undelete</li>
					<li>Comment on files</li>
					<li>Search by name</li>
					<li>Full-text search</li>
					<li>Restore older versions</li>
					<li>Undelete</li>
					<li>Comment on files</li>
                        <li class="cd-group">Admin features</li>
					<li>Audit log</li>
					<li>Monitoring built in</li>
					<li>Monitoring API</li>
					<li class="long">Authentication: LDAP/Active Directory/SAML (OneLogin, Shibboleth, ADFS)/Kerberos</li>
					<li class="long">External storage: Object Storage (Swift/S3)/SMB/CIFS, Sharepoint, Dropbox, Google Drive, (s)FTP, Windows Network Drive, WebDAV</li>
					<li>multi-bucket object storage</li>
					<li>Built in theming</li>
					<li class="cd-group">Integration and extension</li>
					<li>Audio/video chat</li>
					<li>Calendar/Contacts</li>
					<li>Calendar/Contacts in Outlook</li>
					<li>Attachments in Outlook</li>
					<li>Calendar/Contacts in Android</li>
					<li>Calendar/Contacts in iOS</li>
					<li>Supports 3rd party apps</li>
				</ul>
			</div> <!-- .features -->
			
			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Nextcloud</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/nextcloud.svg" alt="product image">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>AGPL</li>
							<li>Unlimited</li>
							<li>Unlimited</li>
							<li class="cd-group">Interfaces</li>
							<li><i class="fa fa-apple" aria-hidden="true"></i><i class="fa fa-windows" aria-hidden="true"></i><i class="fa fa-linux" aria-hidden="true"></i><i class="fa fa-android" aria-hidden="true"></i></li>
							<li>Free</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-times" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li class="cd-group">Security</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>Server-side, in-flight</li>
							<li>Included TOTP, U2F</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>CSP 3.0, Same-site cookies w/host prefix</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>By NCC Group</li>
							<li>Up to USD 5000</li>
							<li class="cd-group">Sharing</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li class="cd-group">Web UI</li>
							<li>text</li>
							<li>optional</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li>
							<li>both</li>
							<li class="cd-group">File handling</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li class="cd-group">Admin features</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li class="long">LDAP/Active Directory/SAML (OneLogin, Shibboleth, ADFS)/Kerberos</li>
							<li class="long">Object Storage (Swift/S3)/SMB/CIFS, Dropbox, Google Drive, (s)FTP, Windows Network Drive, WebDAV</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li class="cd-group">Integration and extension</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-usd" aria-hidden="true"></i></li>
							<li><i class="fa fa-usd" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>ownCloud</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/owncloud.svg" alt="product image">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>Proprietary</li>
							<li>Unlimited</li>
							<li>Unlimited</li>
							<li class="cd-group">Interfaces</li>
							<li><i class="fa fa-apple" aria-hidden="true"></i><i class="fa fa-windows" aria-hidden="true"></i><i class="fa fa-linux" aria-hidden="true"></i><i class="fa fa-android" aria-hidden="true"></i></li>
							<li><i class="fa fa-usd" aria-hidden="true"></i> on Mac/Android</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-times" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li class="cd-group">Security</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>Server-side, in-flight</li>
							<li>Optional</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>CSP 3.0, Same-site cookies</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>Max USD 500</li>
							<li class="cd-group">Sharing</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li>
							<li>Federated (cross-cloud)</li>
							<li class="cd-group">Web UI</li>
							<li>text</li>
							<li>Optional</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li>
							<li class="cd-group">File handling</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li class="cd-group">Admin features</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li class="long">LDAP/Active Directory/SAML (OneLogin, Shibboleth)</li>
							<li class="long">Object Storage (Swift/S3)/SMB/CIFS, Dropbox, Google Drive, (s)FTP, Sharepoint, Windows Network Drive, WebDAV</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i> (can be done manually)</li>
							<li class="cd-group">Integration and extension</li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-usd" aria-hidden="true"></i></li>
							<li><i class="fa fa-usd" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i></li>
							<li><i class="fa fa-check" aria-hidden="true"></i> (if compatible with license)</li>
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Box</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/box.svg" alt="product image">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li>On-premise</li>
							<li>License</li>
							<li>Max storage</li>
							<li>Limit file size</li>
							<li class="cd-group">Interfaces</li>
							<li>Cross-platform</li>
							<li>Paid/free?</li>
							<li>Sync per file/folder</li>
							<li>Auto upload images (mobile)</li>
							<li>Auto upload video (mobile)</li>
							<li>File manager integration</li>
							<li>Bandwidth limiter</li>
							<li>LAN Sync</li>
							<li>WebDAV</li>
							<li class="cd-group">Security</li>
							<li>Rule based access control</li>
							<li>Anti-virus</li>
							<li>Encryption</li>
							<li>Two-factor authentication</li>
							<li>Brute force protection</li>
							<li>NIST compliant pw policy</li>
							<li>Web security features</li>
							<li>Control retention</li>
							<li>App access control</li>
							<li>Verified security policy</li>
							<li>Bug Bounty Program</li>
							<li class="cd-group">Sharing</li>
							<li>Public link (RO/RW)</li>
							<li>Hide file listing (file drop)</li>
							<li>Password/expiration</li>
							<li>Federated (cross-cloud)</li>
							<li class="cd-group">Web UI</li>
							<li>Editors for...</li>
							<li>Collaborative document editing</li>
							<li>... via public link</li>
							<li>PDF viewer</li>
							<li>Picture Gallery</li>
							<li>Music/video player</li>
							<li class="cd-group">File handling</li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li>Search by name</li>
							<li>Full-text search</li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li class="cd-group">Admin features</li>
							<li>Audit log</li>
							<li>Monitoring app</li>
							<li>Monitoring API</li>
							<li class="long">Authentication: LDAP/Active Directory/SAML (OneLogin, Shibboleth, ADFS)/Kerberos</li>
							<li class="long">External storage: Object Storage (Swift/S3)/SMB/CIFS, Dropbox, Google Drive, (s)FTP, Sharepoint, Windows Network Drive, WebDAV</li>
							<li>multi-bucket object storage</li>
							<li>Built in theming</li>
							<li class="cd-group">Integration and extension</li>
							<li>Audio/video chat</li>
							<li>Calendar/Contacts</li>
							<li>Calendar/Contacts in Outlook</li>
							<li>Attachments in Outlook</li>
							<li>Calendar/Contacts in Android</li>
							<li>Calendar/Contacts in iOS</li>
							<li>Supports 3rd party apps</li>
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Citrix</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/citrix.svg" alt="product image">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li>On-premise</li>
							<li>License</li>
							<li>Max storage</li>
							<li>Limit file size</li>
							<li class="cd-group">Interfaces</li>
							<li>Cross-platform</li>
							<li>Paid/free?</li>
							<li>Sync per file/folder</li>
							<li>Auto upload images (mobile)</li>
							<li>Auto upload video (mobile)</li>
							<li>File manager integration</li>
							<li>Bandwidth limiter</li>
							<li>LAN Sync</li>
							<li>WebDAV</li>
							<li class="cd-group">Security</li>
							<li>Rule based access control</li>
							<li>Anti-virus</li>
							<li>Encryption</li>
							<li>Two-factor authentication</li>
							<li>Brute force protection</li>
							<li>NIST compliant pw policy</li>
							<li>Web security features</li>
							<li>Control retention</li>
							<li>App access control</li>
							<li>Verified security policy</li>
							<li>Bug Bounty Program</li>
							<li class="cd-group">Sharing</li>
							<li>Public link (RO/RW)</li>
							<li>Hide file listing (file drop)</li>
							<li>Password/expiration</li>
							<li>Federated (cross-cloud)</li>
							<li class="cd-group">Web UI</li>
							<li>Editors for...</li>
							<li>Collaborative document editing</li>
							<li>... via public link</li>
							<li>PDF viewer</li>
							<li>Picture Gallery</li>
							<li>Music/video player</li>
							<li class="cd-group">File handling</li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li>Search by name</li>
							<li>Full-text search</li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li class="cd-group">Admin features</li>
							<li>Audit log</li>
							<li>Monitoring app</li>
							<li>Monitoring API</li>
							<li class="long">Authentication: LDAP/Active Directory/SAML (OneLogin, Shibboleth, ADFS)/Kerberos</li>
							<li class="long">External storage: Object Storage (Swift/S3)/SMB/CIFS, Dropbox, Google Drive, (s)FTP, Sharepoint, Windows Network Drive, WebDAV</li>
							<li>multi-bucket object storage</li>
							<li>Built in theming</li>
							<li class="cd-group">Integration and extension</li>
							<li>Audio/video chat</li>
							<li>Calendar/Contacts</li>
							<li>Calendar/Contacts in Outlook</li>
							<li>Attachments in Outlook</li>
							<li>Calendar/Contacts in Android</li>
							<li>Calendar/Contacts in iOS</li>
							<li>Supports 3rd party apps</li>
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Egnyte</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/egnyte.svg" alt="product image">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li>On-premise</li>
							<li>License</li>
							<li>Max storage</li>
							<li>Limit file size</li>
							<li class="cd-group">Interfaces</li>
							<li>Cross-platform</li>
							<li>Paid/free?</li>
							<li>Sync per file/folder</li>
							<li>Auto upload images (mobile)</li>
							<li>Auto upload video (mobile)</li>
							<li>File manager integration</li>
							<li>Bandwidth limiter</li>
							<li>LAN Sync</li>
							<li>WebDAV</li>
							<li class="cd-group">Security</li>
							<li>Rule based access control</li>
							<li>Anti-virus</li>
							<li>Encryption</li>
							<li>Two-factor authentication</li>
							<li>Brute force protection</li>
							<li>NIST compliant pw policy</li>
							<li>Web security features</li>
							<li>Control retention</li>
							<li>App access control</li>
							<li>Verified security policy</li>
							<li>Bug Bounty Program</li>
							<li class="cd-group">Sharing</li>
							<li>Public link (RO/RW)</li>
							<li>Hide file listing (file drop)</li>
							<li>Password/expiration</li>
							<li>Federated (cross-cloud)</li>
							<li class="cd-group">Web UI</li>
							<li>Editors for...</li>
							<li>Collaborative document editing</li>
							<li>... via public link</li>
							<li>PDF viewer</li>
							<li>Picture Gallery</li>
							<li>Music/video player</li>
							<li class="cd-group">File handling</li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li>Search by name</li>
							<li>Full-text search</li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li class="cd-group">Admin features</li>
							<li>Audit log</li>
							<li>Monitoring app</li>
							<li>Monitoring API</li>
							<li class="long">Authentication: LDAP/Active Directory/SAML (OneLogin, Shibboleth, ADFS)/Kerberos</li>
							<li class="long">External storage: Object Storage (Swift/S3)/SMB/CIFS, Dropbox, Google Drive, (s)FTP, Sharepoint, Windows Network Drive, WebDAV</li>
							<li>multi-bucket object storage</li>
							<li>Built in theming</li>
							<li class="cd-group">Integration and extension</li>
							<li>Audio/video chat</li>
							<li>Calendar/Contacts</li>
							<li>Calendar/Contacts in Outlook</li>
							<li>Attachments in Outlook</li>
							<li>Calendar/Contacts in Android</li>
							<li>Calendar/Contacts in iOS</li>
							<li>Supports 3rd party apps</li>
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Google Drive</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/google.svg" alt="product image">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li>On-premise</li>
							<li>License</li>
							<li>Max storage</li>
							<li>Limit file size</li>
							<li class="cd-group">Interfaces</li>
							<li>Cross-platform</li>
							<li>Paid/free?</li>
							<li>Sync per file/folder</li>
							<li>Auto upload images (mobile)</li>
							<li>Auto upload video (mobile)</li>
							<li>File manager integration</li>
							<li>Bandwidth limiter</li>
							<li>LAN Sync</li>
							<li>WebDAV</li>
							<li class="cd-group">Security</li>
							<li>Rule based access control</li>
							<li>Anti-virus</li>
							<li>Encryption</li>
							<li>Two-factor authentication</li>
							<li>Brute force protection</li>
							<li>NIST compliant pw policy</li>
							<li>Web security features</li>
							<li>Control retention</li>
							<li>App access control</li>
							<li>Verified security policy</li>
							<li>Bug Bounty Program</li>
							<li class="cd-group">Sharing</li>
							<li>Public link (RO/RW)</li>
							<li>Hide file listing (file drop)</li>
							<li>Password/expiration</li>
							<li>Federated (cross-cloud)</li>
							<li class="cd-group">Web UI</li>
							<li>Editors for...</li>
							<li>Collaborative document editing</li>
							<li>... via public link</li>
							<li>PDF viewer</li>
							<li>Picture Gallery</li>
							<li>Music/video player</li>
							<li class="cd-group">File handling</li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li>Search by name</li>
							<li>Full-text search</li>
							<li>Restore older versions</li>
							<li>Undelete</li>
							<li>Comment on files</li>
							<li class="cd-group">Admin features</li>
							<li>Audit log</li>
							<li>Monitoring app</li>
							<li>Monitoring API</li>
							<li class="long">Authentication: LDAP/Active Directory/SAML (OneLogin, Shibboleth, ADFS)/Kerberos</li>
							<li class="long">External storage: Object Storage (Swift/S3)/SMB/CIFS, Dropbox, Google Drive, (s)FTP, Sharepoint, Windows Network Drive, WebDAV</li>
							<li>multi-bucket object storage</li>
							<li>Built in theming</li>
							<li class="cd-group">Integration and extension</li>
							<li>Audio/video chat</li>
							<li>Calendar/Contacts</li>
							<li>Calendar/Contacts in Outlook</li>
							<li>Attachments in Outlook</li>
							<li>Calendar/Contacts in Android</li>
							<li>Calendar/Contacts in iOS</li>
							<li>Supports 3rd party apps</li>
						</ul>
					</li> <!-- .product -->

				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->
			
			<ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->


</div>
<!--<script>
function productsTable( element ) {
	this.element = element;
	this.table = this.element.children('.cd-products-table');
	this.productsWrapper = this.table.children('.cd-products-wrapper');
	this.tableColumns = this.productsWrapper.children('.cd-products-columns');
	this.products = this.tableColumns.children('.cd-product');
	//additional properties here
	// bind table events
	this.bindEvents();
}
 
productsTable.prototype.bindEvents = function() {
	var self = this;
	
	self.productsWrapper.on('scroll', function(){
		//detect scroll left inside products table
	});
	
	self.products.on('click', '.top-info', function(){
		//add/remove .selected class to products 
	});
	
	self.filterBtn.on('click', function(event){
		//filter products
	});
	//reset product selection
	self.resetBtn.on('click', function(event){
		//reset products visibility
	});
	
	this.navigation.on('click', 'a', function(event){
		//scroll inside products table - left/right arrows
	});
}
 
var comparisonTables = [];
$('.cd-products-comparison-table').each(function(){
	//create a productsTable object for each .cd-products-comparison-table
	comparisonTables.push(new productsTable($(this)));
});

productsTable.prototype.updateLeftScrolling = function() {
	var scrollLeft = this.productsWrapper.scrollLeft();
 
	if( this.table.hasClass('top-fixed') && checkMQ() == 'desktop') setTranformX(this.productsTopInfo, '-'+scrollLeft);
}
</script>-->

<script>
jQuery(document).ready(function($){
	function productsTable( element ) {
		this.element = element;
		this.table = this.element.children('.cd-products-table');
		this.tableHeight = this.table.height();
		this.productsWrapper = this.table.children('.cd-products-wrapper');
		this.tableColumns = this.productsWrapper.children('.cd-products-columns');
		this.products = this.tableColumns.children('.product');
		this.productsNumber = this.products.length;
		this.productWidth = this.products.eq(0).width();
		this.productsTopInfo = this.table.find('.top-info');
		this.featuresTopInfo = this.table.children('.features').children('.top-info');
		this.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
		this.leftScrolling = false;
		this.filterBtn = this.element.find('.filter');
		this.resetBtn = this.element.find('.reset');
		this.filtering = false,
		this.selectedproductsNumber = 0;
		this.filterActive = false;
		this.navigation = this.table.children('.cd-table-navigation');
		// bind table events
		this.bindEvents();
	}

	productsTable.prototype.bindEvents = function() {
		var self = this;
		//detect scroll left inside producst table
		self.productsWrapper.on('scroll', function(){
			if(!self.leftScrolling) {
				self.leftScrolling = true;
				(!window.requestAnimationFrame) ? setTimeout(function(){self.updateLeftScrolling();}, 250) : window.requestAnimationFrame(function(){self.updateLeftScrolling();});
			}
		});
		//select single product to filter
		self.products.on('click', '.top-info', function(){
			var product = $(this).parents('.product');
			if( !self.filtering && product.hasClass('selected') ) {
				product.removeClass('selected');
				self.selectedproductsNumber = self.selectedproductsNumber - 1;
				self.upadteFilterBtn();
			} else if( !self.filtering && !product.hasClass('selected') ) {
				product.addClass('selected');
				self.selectedproductsNumber = self.selectedproductsNumber + 1;
				self.upadteFilterBtn();
			}
		});
		//filter products
		self.filterBtn.on('click', function(event){
			event.preventDefault();
			if(self.filterActive) {
				self.filtering =  true;
				self.showSelection();
				self.filterActive = false;
				self.filterBtn.removeClass('active');
			}
		});
		//reset product selection
		self.resetBtn.on('click', function(event){
			event.preventDefault();
			if( self.filtering ) {
				self.filtering =  false;
				self.resetSelection();
			} else {
				self.products.removeClass('selected');
			}
			self.selectedproductsNumber = 0;
			self.upadteFilterBtn();
		});
		//scroll inside products table
		this.navigation.on('click', 'a', function(event){
			event.preventDefault();
			self.updateSlider( $(event.target).hasClass('next') );
		});
	}

	productsTable.prototype.upadteFilterBtn = function() {
		//show/hide filter btn
		if( this.selectedproductsNumber >= 2 ) {
			this.filterActive = true;
			this.filterBtn.addClass('active');
		} else {
			this.filterActive = false;
			this.filterBtn.removeClass('active');
		}
	}

	productsTable.prototype.updateLeftScrolling = function() {
		var totalTableWidth = parseInt(this.tableColumns.eq(0).outerWidth(true)),
			tableViewport = parseInt(this.element.width()),
			scrollLeft = this.productsWrapper.scrollLeft();

		( scrollLeft > 0 ) ? this.table.addClass('scrolling') : this.table.removeClass('scrolling');

		if( this.table.hasClass('top-fixed') && checkMQ() == 'desktop') {
			setTranformX(this.productsTopInfo, '-'+scrollLeft);
			setTranformX(this.featuresTopInfo, '0');
		}

		this.leftScrolling =  false;

		this.updateNavigationVisibility(scrollLeft);
	}

	productsTable.prototype.updateNavigationVisibility = function(scrollLeft) {
		( scrollLeft > 0 ) ? this.navigation.find('.prev').removeClass('inactive') : this.navigation.find('.prev').addClass('inactive');
		( scrollLeft < this.tableColumns.outerWidth(true) - this.productsWrapper.width() && this.tableColumns.outerWidth(true) > this.productsWrapper.width() ) ? this.navigation.find('.next').removeClass('inactive') : this.navigation.find('.next').addClass('inactive');
	}

	productsTable.prototype.updateTopScrolling = function(scrollTop) {
		var offsetTop = this.table.offset().top,
			tableScrollLeft = this.productsWrapper.scrollLeft();
		
		if ( offsetTop <= scrollTop && offsetTop + this.tableHeight - this.topInfoHeight >= scrollTop ) {
			//fix products top-info && arrows navigation
			if( !this.table.hasClass('top-fixed') && $(document).height() > offsetTop + $(window).height() + 200) { 
				this.table.addClass('top-fixed').removeClass('top-scrolling');
				if( checkMQ() == 'desktop' ) {
					this.productsTopInfo.css('top', '0');
					this.navigation.find('a').css('top', '0px');
				}
			}

		} else if( offsetTop <= scrollTop ) {
			//product top-info && arrows navigation -  scroll with table
			this.table.removeClass('top-fixed').addClass('top-scrolling');
			if( checkMQ() == 'desktop' )  {
				this.productsTopInfo.css('top', (this.tableHeight - this.topInfoHeight) +'px');
				this.navigation.find('a').css('top', (this.tableHeight - this.topInfoHeight) +'px');
			}
		} else {
			//product top-info && arrows navigation -  reset style
			this.table.removeClass('top-fixed top-scrolling');
			this.productsTopInfo.attr('style', '');
			this.navigation.find('a').attr('style', '');
		}

		this.updateLeftScrolling();
	}

	productsTable.prototype.updateProperties = function() {
		this.tableHeight = this.table.height();
		this.productWidth = this.products.eq(0).width();
		this.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
		this.tableColumns.css('width', this.productWidth*this.productsNumber + 'px');
	}

	productsTable.prototype.showSelection = function() {
		this.element.addClass('filtering');
		this.filterProducts();
	}

	productsTable.prototype.resetSelection = function() {
		this.tableColumns.css('width', this.productWidth*this.productsNumber + 'px');
		this.element.removeClass('no-product-transition');
		this.resetProductsVisibility();
	}

	productsTable.prototype.filterProducts = function() {
		var self = this,
			containerOffsetLeft = self.tableColumns.offset().left,
			scrollLeft = self.productsWrapper.scrollLeft(),
			selectedProducts = this.products.filter('.selected'),
			numberProducts = selectedProducts.length;

		selectedProducts.each(function(index){
			var product = $(this),
				leftTranslate = containerOffsetLeft + index*self.productWidth + scrollLeft - product.offset().left;
			setTranformX(product, leftTranslate);
			
			if(index == numberProducts - 1 ) {
				product.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					setTimeout(function(){
						self.element.addClass('no-product-transition');
					}, 50);
					setTimeout(function(){
						self.element.addClass('filtered');
						self.productsWrapper.scrollLeft(0);
						self.tableColumns.css('width', self.productWidth*numberProducts + 'px');
						selectedProducts.attr('style', '');
						product.off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
						self.updateNavigationVisibility(0);
					}, 100);
				});
			}
		});

		if( $('.no-csstransitions').length > 0 ) {
			//browser not supporting css transitions
			self.element.addClass('filtered');
			self.productsWrapper.scrollLeft(0);
			self.tableColumns.css('width', self.productWidth*numberProducts + 'px');
			selectedProducts.attr('style', '');
			self.updateNavigationVisibility(0);
		}
	}
	
	productsTable.prototype.resetProductsVisibility = function() {
		var self = this,
			containerOffsetLeft = self.tableColumns.offset().left,
			selectedProducts = this.products.filter('.selected'),
			numberProducts = selectedProducts.length,
			scrollLeft = self.productsWrapper.scrollLeft(),
			n = 0;

		self.element.addClass('no-product-transition').removeClass('filtered');

		self.products.each(function(index){
			var product = $(this);
			if (product.hasClass('selected')) {
				n = n + 1;
				var leftTranslate = (-index + n - 1)*self.productWidth;
				setTranformX(product, leftTranslate);
			}
		});

		setTimeout(function(){
			self.element.removeClass('no-product-transition filtering');
			setTranformX(selectedProducts, '0');
			selectedProducts.removeClass('selected').attr('style', '');
		}, 50);
	}

	productsTable.prototype.updateSlider = function(bool) {
		var scrollLeft = this.productsWrapper.scrollLeft();
		scrollLeft = ( bool ) ? scrollLeft + this.productWidth : scrollLeft - this.productWidth;

		if( scrollLeft < 0 ) scrollLeft = 0;
		if( scrollLeft > this.tableColumns.outerWidth(true) - this.productsWrapper.width() ) scrollLeft = this.tableColumns.outerWidth(true) - this.productsWrapper.width();
		
		this.productsWrapper.animate( {scrollLeft: scrollLeft}, 200 );
	}

	var comparisonTables = [];
	$('.cd-products-comparison-table').each(function(){
		//create a productsTable object for each .cd-products-comparison-table
		comparisonTables.push(new productsTable($(this)));
	});
	
	var windowScrolling = false;
	//detect window scroll - fix product top-info on scrolling
	$(window).on('scroll', function(){
		if(!windowScrolling) {
			windowScrolling = true;
			(!window.requestAnimationFrame) ? setTimeout(checkScrolling, 250) : window.requestAnimationFrame(checkScrolling);
		}
	});

	var windowResize = false;
	//detect window resize - reset .cd-products-comparison-table properties
	$(window).on('resize', function(){
		if(!windowResize) {
			windowResize = true;
			(!window.requestAnimationFrame) ? setTimeout(checkResize, 250) : window.requestAnimationFrame(checkResize);
		}
	});

	function checkScrolling(){
		var scrollTop = $(window).scrollTop();
		comparisonTables.forEach(function(element){
			element.updateTopScrolling(scrollTop);
		});

		windowScrolling = false;
	}

	function checkResize(){
		comparisonTables.forEach(function(element){
			element.updateProperties();
		});

		windowResize = false;
	}

	function checkMQ() {
		//check if mobile or desktop device
		return window.getComputedStyle(comparisonTables[0].element.get(0), '::after').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
	}

	function setTranformX(element, value) {
		element.css({
		    '-moz-transform': 'translateX(' + value + 'px)',
		    '-webkit-transform': 'translateX(' + value + 'px)',
			'-ms-transform': 'translateX(' + value + 'px)',
			'-o-transform': 'translateX(' + value + 'px)',
			'transform': 'translateX(' + value + 'px)'
		});
	}
});
</script>
