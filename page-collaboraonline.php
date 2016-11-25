<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="page-header">
	<h1><?php echo $l->t('Collabora Online in Nextcloud');?></h1>
	<h3><?php echo $l->t('Bringing Self Hosted Online Office to everybody');?></h3>
</div>
<p><?php echo $l->t('We\'re very excited to provide a solution for Online Office for the entire Nextcloud community through our <a target="_blank" href="https://nextcloud.com/?p=589">partnership with Collabora</a>. Together we are making available the latest and greatest of Online Office in an <strong>easy to use <a href="https://hub.docker.com/r/collabora/code">docker image</a> for home users</strong>.');?></p>
<p><?php echo $l->t('Enterprise users who need a more reliable and scalable solution can take advantage of our <a href="/enterprise">support contract for Nextcloud and Collabora Online</a>.');?></p>
<p><?php echo $l->t('If you\'re looking for instructions to update to a new version, <a href="#update">see here.</a>');?></p>
<div class="row featurerow topfeature">
	<div class="col-md-7">
		<h2><?php echo $l->t('Collabora Online');?></h2>
		<p><?php echo $l->t('Collabora Online is a powerful LibreOffice-based online office suite that supports all major document, spreadsheet and presentation file formats.');?></p>
		<p><?php echo $l->t('Features:');?></p>
			<ul>
				<li><?php echo $l->t('Basic editing');?></li>
				<li><?php echo $l->t('Document Support:');?>
					<ul>
						<li><?php echo $l->t('DOC, DOCX, PPT, PPTX, XLS, XLSX + ODF');?></li>
						<li><?php echo $l->t('Import/View Visio, Publisher, + 100 more');?></li>
					</ul>
				</li>
				<li><?php echo $l->t('High fidelity, WYSIWYG rendering');?></li>
				<li><?php echo $l->t('Shared editing');?>
					<ul>
						<li><?php echo $l->t('One user edits, others can follow. You can change who edits.');?></li>
					</ul>
				</li>
			</ul>
		<p><?php echo $l->t('More features and capabilities are in development.');?></p>
	</div>
	<div class="col-md-5">
		<div class="yt-img-overlay">
			<a class="youtube" id="sZpYXUD1ZVM" href="https://www.youtube.com/watch?v=sZpYXUD1ZVM" title="Collabora Online in Nextcloud">
				<img class="img-responsive featureimg" src="https://img.youtube.com/vi/sZpYXUD1ZVM/hqdefault.jpg" title="Collabora Online in Nextcloud" />
				<div class="yt-play-btn">
					<i></i> 
				</div>
			</a>
		</div>
	</div>
</div>

<div class="row featurerow topfeature">
	<div class="col-md-4">
		<div class="">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-app.png" />
		</div>
	</div>
	<div class="col-md-4">
		<div class="">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-presentation.png" />
		</div>
	</div>
	<div class="col-md-4">
		<div class="">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png" />
		</div>
	</div>
</div>

<div class="row featurerow topfeature">
	<div class="col-md-7">
		<h2><?php echo $l->t('Under your control');?></h2>
		<p><?php echo $l->t('Most people use online services for storing their data, communication and editing documents, often giving up control over their files in exchange for the convenience of online collaboration. With Nextcloud and Collabora Online, this is no longer a trade-off.');?></p>
		<p><?php echo $l->t('Collabora Online is:');?></p>
			<ul>
				<li><?php echo $l->t('Open Source');?></li>
				<li><?php echo $l->t('Self hosted');?></li>
				<li><?php echo $l->t('Secure');?></li>
			</ul>
	</div>
	<div class="col-md-5">
		<div class="">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-document.png" /> 
		</div>
	</div>
</div>
<div class="featurerow">
	<h2 class="featuretitle"><?php echo $l->t('Collabora Online integration tutorial video');?></h2>
	<div class="row">
		<div class="col-md-8">
			<div class="yt-img-overlay">
				<a class="youtube" id="MDc1bNxn3js" href="https://www.youtube.com/watch?v=MDc1bNxn3js" title="Collabora Online in Nextcloud">
					<img class="img-responsive featureimg" src="https://img.youtube.com/vi/MDc1bNxn3js/hqdefault.jpg" title="Collabora Online in Nextcloud tutorial" />
					<div class="yt-play-btn">
						<i></i> 
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<h2><?php echo $l->t('Getting started in 3 steps');?></h2>
<p><?php echo $l->t('We\'ll describe how to get Collabora Online running on your server and how to integrate it into your Nextcloud using the docker image Nextcloud and Collabora built.');?></p>

<h3><?php echo $l->t('Requirements');?></h3>
<p><?php echo $l->t('To install it the following dependencies are required:');?></p>
<ol>
 	<li><?php echo $l->t('A host that can run a Docker container');?></li>
 	<li><?php echo $l->t('A subdomain or a second domain that the Collabora Online server can run on');?></li>
 	<li><?php echo $l->t('An Apache server with some enabled modules (<a href="https://icewind.nl/entry/collabora-online">NGNIX instructions in a blog here</a>)');?></li>
 	<li><?php echo $l->t('A valid SSL certificate for the domain that CollaboraOnline should run on');?></li>
 	<li><?php echo $l->t('A valid SSL certificate for your Nextcloud');?></li>
</ol>
<p><?php echo $l->t('<strong>Note:</strong> This guide does <em>NOT</em> cover self-signed certificates. If you use a self-signed certificate then you\'re mostly on your own ;-)');?></p>
<h3><?php echo $l->t('1. Install the Collabora Online server');?></h3>
<p><?php echo $l->t('The following steps will download the Collabora Online docker, make sure to replace "cloud.nextcloud.com" with the host that your own Nextcloud runs on. Also make sure to escape all dots with double backslashes (<code>\\</code>), since this string will be evaluated as a regular expression (and your bash \'eats\' the first backslash.) If you want to use the docker container with more than one Nextcloud, you\'ll need to use');?> <code>'domain=cloud\\.nextcloud\\.com\|second\\.nexcloud\\.com'</code> <?php echo $l->t('instead. (All hosts seperated by <code>\|</code>.)');?></p>
<p><pre><code>docker pull collabora/code
docker run -t -d -p 127.0.0.1:9980:9980 -e 'domain=cloud\\.nextcloud\\.com' --restart always --cap-add MKNOD collabora/code
</code></pre></p>
<p><?php echo $l->t('That will be enough. Once you have done that the server will listen on "localhost:9980". Now we just need to configure the locally installed Apache reverse proxy.');?></p>
<h3><?php echo $l->t('</a>2. Install the Apache reverse proxy');?></h3>
<p><?php echo $l->t('On a recent Ubuntu or Debian this should be possible using:');?></p>
<ol>
 	<li><code>apt-get install apache2</code></li>
 	<li><code>a2enmod proxy</code></li>
 	<li><code>a2enmod proxy_wstunnel</code></li>
 	<li><code>a2enmod proxy_http</code></li>
 	<li><code>a2enmod ssl</code></li>
</ol>
<p><?php echo $l->t('Afterward, configure one VirtualHost properly to proxy the traffic. For security reason we recommend to use a subdomain such as office.nextcloud.com instead of running on the same domain. An example config can be found below:');?></p>
<p><pre><code>&lt;VirtualHost *:443&gt;
  ServerName office.nextcloud.com:443

  # SSL configuration, you may want to take the easy route instead and use Lets Encrypt!
  SSLEngine on
  SSLCertificateFile /path/to/signed_certificate
  SSLCertificateChainFile /path/to/intermediate_certificate
  SSLCertificateKeyFile /path/to/private/key
  SSLProtocol             all -SSLv2 -SSLv3
  SSLCipherSuite ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256:ECDHE-ECDSA-AES128-SHA:ECDHE-RSA-AES256-SHA384:ECDHE-RSA-AES128-SHA:ECDHE-ECDSA-AES256-SHA384:ECDHE-ECDSA-AES256-SHA:ECDHE-RSA-AES256-SHA:DHE-RSA-AES128-SHA256:DHE-RSA-AES128-SHA:DHE-RSA-AES256-SHA256:DHE-RSA-AES256-SHA:ECDHE-ECDSA-DES-CBC3-SHA:ECDHE-RSA-DES-CBC3-SHA:EDH-RSA-DES-CBC3-SHA:AES128-GCM-SHA256:AES256-GCM-SHA384:AES128-SHA256:AES256-SHA256:AES128-SHA:AES256-SHA:DES-CBC3-SHA:!DSS
  SSLHonorCipherOrder     on

  # Encoded slashes need to be allowed
  AllowEncodedSlashes On

  # Container uses a unique non-signed certificate
  SSLProxyEngine On
  SSLProxyVerify None
  SSLProxyCheckPeerCN Off
  SSLProxyCheckPeerName Off

  # keep the host
  ProxyPreserveHost On

  # static html, js, images, etc. served from loolwsd
  # loleaflet is the client part of LibreOffice Online
  ProxyPass           /loleaflet https://127.0.0.1:9980/loleaflet retry=0
  ProxyPassReverse    /loleaflet https://127.0.0.1:9980/loleaflet

  # WOPI discovery URL
  ProxyPass           /hosting/discovery https://127.0.0.1:9980/hosting/discovery retry=0
  ProxyPassReverse    /hosting/discovery https://127.0.0.1:9980/hosting/discovery

  # Main websocket
  ProxyPassMatch "/lool/(.*)/ws$" wss://127.0.0.1:9980/lool/$1/ws

  # Admin Console websocket
  ProxyPass   /lool/adminws wss://127.0.0.1:9980/lool/adminws

  # Download as, Fullscreen presentation and Image upload operations
  ProxyPass           /lool https://127.0.0.1:9980/lool
  ProxyPassReverse    /lool https://127.0.0.1:9980/lool
&lt;/VirtualHost&gt;
</code></pre></p>
<a name="update"></a>
<p><?php echo $l->t('After configuring these do restart your apache using <code>/etc/init.d/apache2 restart</code>.');?></p>
<h3><?php echo $l->t('3. Configure the app in Nextcloud');?></h3>
<ol>
 	<li><?php echo $l->t('Go to the Apps section and choose "Productivity"');?></li>
 	<li><?php echo $l->t('Install the "Collabora Online app"');?></li>
 	<li><?php echo $l->t('Admin -&gt; Collabora Online -&gt; Specify the server you have setup before (e.g. "<a href="https://office.nextcloud.com/">https://office.nextcloud.com</a>")');?></li>
</ol>
<h1><?php echo $l->t('Congratulations, your Nextcloud has Collabora Online Office integrated!');?></h1>


<h2><?php echo $l->t('Updating');?></h2>
<p><?php echo $l->t('Occasionally, new versions of this docker image are released with security and feature updates. We will of course let you know when that happens! This is how you upgrade to a new version:');?></p>
<ul>
<li><?php echo $l->t('grab new docker image:<br/>');?>
<code>docker pull collabora/code</code></li>
<li><?php echo $l->t('List docker images:<br/>');?>
<code>docker ps</code><br/>
<?php echo $l->t('from the output you can glean the Container ID of your Collabora Online docker image.');?></li>
<li><?php echo $l->t('stop and remove the Collabora Online docker image:<br/>');?>
<code>docker stop CONTAINER_ID</code><br/>
<code>docker rm CONTAINER_ID</code></li>
<li><?php echo $l->t('start the new image:<br/>');?>
<code>docker run -t -d -p 127.0.0.1:9980:9980 -e 'domain=cloud\\.nextcloud\\.com' --restart always --cap-add MKNOD collabora/code</code></li>
</ul>
<p><?php echo $l->t('Enjoy!');?></p>

<h2><?php echo $l->t('Troubleshooting');?></h2>
<p><?php echo $l->t('Some common issues:');?></p>
<ul>
	<li><?php echo $l->t('<strong>Issue:</strong> Can\'t configure the URL in the Admin panel.<br/>
	This is most likely caused by the Documents app being enabled. Disable it and you can set the URL.');?></li>
	<li><?php echo $l->t('<strong>Issue:</strong> I get connection errors when trying to open documents<br/>
	Be sure to check the error log from docker (<code>docker logs id-of-your-instance</code>). If the logs note something like:<br/>
	<code>No acceptable WOPI hosts found matching the target host [YOUR NEXTCLOUD DOMAIN] in config.</code><br/>
	<code>Unauthorized WOPI host. Please try again later and report to your administrator if the issue persists.</code><br/>
	you might have started the docker container with the wrong URL. Be sure to triplecheck that you start it with the URL of your Nextcloud server, not the server where Collabora Online runs on.');?></li>
	<li><?php echo $l->t('<strong>Issue:</strong> <code>Connection is not allowed</code> errors.<br/>
	It is possible your firewall is blocking connections. Try to start docker after you started the firewall, it makes changes to your iptables to enable Collabora Online to function.');?></li>
	<li><?php echo $l->t('<strong>Issue:</strong> <code>We are sorry, this is an unexpected connection error. Please try again.</code> error.<br />
	The Collabora Online app doesn\'t work at the moment, if you enable it only for certain groups. Remove the group filter in the App section.');?></li>
	<li><?php echo $l->t('<strong>Issue:</strong> Collabora Online doesn\'t handle my 100 users.<br/>
	This docker image is designed for home usage with a limited numbers of users and open documents. If you need a more scalable solution, consider <a href="/enterprise/">a support subscription</a> for a reliable, business-ready online office experience.');?></li>
	<li><?php echo $l->t('<strong>Issue:</strong> Collabora Online doesn\'t work with Encryption.<br/>
	Yes, this is currently unsupported.');?></li>
</ul>
<p><?php echo $l->t('Find more questions and answers in the <a href="https://help.nextcloud.com/t/issue-installing-collabora-following-official-guide/1746/58">discussion thread on the forums</a>.');?></p>

<h2><?php echo $l->t('Enjoy and let us know what you think <a href="https://help.nextcloud.com">on the forums</a>!');?></h2> 


<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/old/vendor/jquery.youtubepopup.min.js"></script>

<script type="text/javascript">
// $(function () {
	$("a.youtube").YouTubePopup({ hideTitleBar: true });
// });
</script>
