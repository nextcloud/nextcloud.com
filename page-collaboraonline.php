<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="page-header">
	<h1>Collabora Online in Nextcloud</h1>
	<h3>Bringing Self Hosted Online Office to everybody</h3>
</div>
<p>We're very excited to provide a solution for Online Office for the entire Nextcloud community through our <a target="_blank" href="https://www.collaboraoffice.com/">partnership with Collabora</a>. Together we are making available the latest and greatest of Online Office in an <strong>easy to use docker image for home users</strong>.</p>
<p>Our enterprise customers can take advantage of a <a href="/enterprise">single-vendor support contract for Nextcloud and Collabora Online</a>.</p>

<div class="row featurerow topfeature">
	<div class="col-md-7">
		<h2>Collabora Online</h2>
		<p>Collabora Online is a powerful LibreOffice-based online office suite that supports all major document, spreadsheet and presentation file formats.</p>
		<p>Features:
			<ul>
				<li>Basic editing</li>
				<li>Document Support:
					<ul>
						<li>DOC, DOCX, PPT, PPTX, XLS, XLSX + ODF</li>
						<li>Import/View Visio, Publisher, + 100 more</li>
					</ul>
				</li>
				<li>High fidelity, WYSIWYG rendering</li>
				<li>Shared editing
					<ul>
						<li>One user edits, others can follow. You can change who edits.</li>
					</ul>
				</li>
			</ul>
		More features and capabilities are in development.</p>
	</div>
	<div class="col-md-5">
		<div class="">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png" />
		</div>
	</div>
</div>

<div class="row featurerow topfeature">
	<div class="col-md-6">
		<div class="">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-app.png" />
		</div>
	</div>
	<div class="col-md-6">
		<div class="">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-presentation.png" />
		</div>
	</div>
</div>

<div class="row featurerow topfeature">
	<div class="col-md-7">
		<h2>Under your control</h2>
		<p>Most people use online services for storing their data, communication and editing documents, often giving up control over their files in exchange for the convenience of online collaboration. With Nextcloud and Collabora Online, this is no longer a trade-off.<p>
		<p>Collabora Online is:
			<ul>
				<li>Open Source</li>
				<li>Self hosted</li>
				<li>Secure</li>
			</ul>
		</p>
	</div>
	<div class="col-md-5">
		<div class="">
			<img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-document.png" /> 
		</div>
	</div>
</div>

<h2>Getting started in 3 steps</h2>
<p>We'll describe how to get Collabora Online running on your server and how to integrate it into your Nextcloud using the docker image Nextcloud and Collabora built.</p>

<h3>Requirements</h3>
<p>To install it the following dependencies are required:
<ol>
 	<li>A host that can run a Docker container</li>
 	<li>A subdomain or a second domain that the Collabora Online server can run on</li>
 	<li>An Apache server with some enabled modules</li>
 	<li>A valid SSL certificate for the domain that CollaboraOnline should run on</li>
 	<li>A valid SSL certificate for your Nextcloud</li>
</ol>
<strong>Note:</strong> This guide does <em>NOT</em> cover self-signed certificates. If you use a self-signed certificate then you're mostly on your own ;-)</p>
<h3>1. Install the Collabora Online server</h3>
<p>The following steps will download the Collabora Online docker, make sure to replace "cloud.nextcloud.com" with the host that your own Nextcloud runs on. (make sure to escape all dots with a <code>\</code> character)</p>
<p><pre><code>docker pull nextclouders/collaboraonline
docker run -t -d -p 127.0.0.1:9980:9980 -e "domain=cloud\.nextcloud\.com" --cap-add MKNOD nextclouders/collaboraonline
</code></pre></p>
<p>That will be enough. Once you have done that the server will listen on "localhost:9980". Now we just need to configure the locally installed Apache reverse proxy.</p>
<h3></a>2. Install the Apache reverse proxy</h3>
<p>On a recent Ubuntu or Debian this should be possible using:
<ol>
 	<li><code>apt-get install apache2</code></li>
 	<li><code>a2enmod proxy</code></li>
 	<li><code>a2enmod proxy_wstunnel</code></li>
 	<li><code>a2enmod proxy_http</code></li>
 	<li><code>a2enmod ssl</code></li>
</ol></p>
<p>Afterwards, configure one VirtualHost properly to proxy the traffic. For security reason we recommend to use a subdomain such as office.nextcloud.com instead of running on the same domain. An example config can be found below:</p>
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
  ProxyPass   /lool/ws      wss://127.0.0.1:9980/lool/ws

  # Admin Console websocket
  ProxyPass   /lool/adminws wss://127.0.0.1:9980/lool/adminws

  # Download as, Fullscreen presentation and Image upload operations
  ProxyPass           /lool https://127.0.0.1:9980/lool
  ProxyPassReverse    /lool https://127.0.0.1:9980/lool
&lt;/VirtualHost&gt;
</code></pre></p>
<p>After configuring these do restart your apache using <code>/etc/init.d/apache2 restart</code>.</p>
<h3>3. Configure the app in Nextcloud</h3>
<p><ol>
 	<li>Go to the Apps section and choose "Productivity"</li>
 	<li>Install the "Collabora Online app"</li>
 	<li>Admin -&gt; Collabora Online -&gt; Specify the server you have setup before (e.g. "<a href="https://office.nextcloud.com/">https://office.nextcloud.com</a>")</li>
</ol>
Now your Nextcloud has Collabora Online Office integrated!<p>

<h2>Enjoy and let us know what you think <a href="https://help.nextcloud.com">on the forums</a>!</h2>


<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery.youtubepopup.min.js"></script>

<script type="text/javascript">
$(function () {
	$("a.youtube").YouTubePopup({ hideTitleBar: true });
});
</script>
