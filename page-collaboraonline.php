<head>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/collabora.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["pages/collabora", "modules/youtubePlayer", "modules/codeHighlights"])
	});
</script>
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png">
</head>

<div class="background collabora-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Collabora Online in Nextcloud');?></h1>
 				<h2><?php echo $l->t('Bringing Self Hosted Online Office to everybody');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="collabora-online">
	<div class="container">
		<div class="featurerow">
			<div class="row">
				<div class="col-md-10 collaboravideo">
					<div data-type="youtube" data-video-id="sZpYXUD1ZVM"></div>
					<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/sZpYXUD1ZVM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 col-md-offset-3">
					<p class="section--paragraph text-center"><?php echo $l->t('Collabora Online is a powerful LibreOffice-based online office suite with collaborative editing, which supports all major document, spreadsheet and presentation file formats and works in all modern browsers.');?></p>
				</div>
			</div>
		</div>
    </div>
</section>
<section class="section--whitepaper quote">
	<div class="container revealOnScroll">
        <div class="row">
			<div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('North-West University<br/> Case Study');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p><label for="email"><?php echo $l->t('Get the free case study:');?><br>
                    <?php echo $l->t('The North-West University of South Africa improves user storage mobility,<br /> collaboration and productivity with Nextcloud and Collabora Online.');?><br>
                    <td colspan="2" style="text-align:center">
                    <div class="">
                        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="48">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large" type="submit" value=" Get the case study "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/nwu-thumbnail-banner.png"/>
	</div>
</section>


<section class="collabora-online">
	<div class="container">
		<div class="featurerow">
			<div class="row">
<!-- 				</div> -->
				<div class="col-md-6 featureblock revealOnScroll">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('View and edit documents directly in your Nextcloud');?></h2>
					<p class="section--paragraph"><?php echo $l->t('Collabora Online supports editing your documents in real time with multiple other editors, showing high fidelity, WYSIWYG rendering and preserving the layout and formatting of your documents.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Users can insert and reply to comments and invite others without a Nextcloud account for anonymous editing of files with a public link shared folder.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Collabora Online supports dozens of document formats including <strong>DOC</strong>, <strong>DOCX</strong>, <strong>PPT</strong>, <strong>PPTX</strong>, <strong>XLS</strong>, <strong>XLSX + ODF</strong>, <strong>Import/View Visio</strong>, <strong>Publisher</strong> and many more...');?></p>
				</div>
				<div class="col-md-6 revealOnScroll">
					<div data-type="youtube" data-video-id="8iuSFKVl-xQ"></div>
					<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/8iuSFKVl-xQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
			<p class="section--paragraph"><?php echo $l->t('Collabora Online Development Edition (CODE) is free and under heavy development, adding features and improvements all the time! Enterprise users have access to the more stable, scalable Collabora Online Enterprise version through a Nextcloud support subscription.');?></p>
		</div>

		<div class="featurerow">
			<div class="row">
				<div class="col-md-6 revealOnScroll">
					<a href="<?php bloginfo('template_directory'); ?>/assets/img/features/collabora-spreadsheet.png"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/collabora.png" alt="in action" /></a>
				</div>
				<div class="col-md-6 revealOnScroll featureblock">
					<h2 class="section--paragraph__tittle"><?php echo $l->t('Under your control');?></h2>
					<p class="section--paragraph"><?php echo $l->t('Most people use online services for storing their data, communication and editing documents, often giving up control over their files in exchange for the convenience of online collaboration. With Nextcloud and Collabora Online, this is no longer a trade-off.');?></p>
					<p class="section--paragraph"><?php echo $l->t('Collabora Online is <strong>Open Source</strong>, <strong>self-hosted</strong> and <strong>secure</strong>!');?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container-fluid call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 revealOnScroll">
				<h1 class="section--heading-1 text-center"><?php echo $l->t('For Enterprises');?></h1>
				<p class="text-center"><?php echo $l->t('Enterprise users who need a more reliable and scalable solution with long term support, guaranteed response times and security updates can take advantage of our');?> <a href="<?php echo home_url('enterprise') ?>" class="hyperlink"><?php echo $l->t('optional support contract</a> for Collabora Online.');?></p>
				<div class="text-center morebuttondiv">
					<a href="<?php echo home_url('buy') ?>" class="button button--large button--arrow"><?php echo $l->t('Request a quote');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="collabora-integration">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="featurerow">
				<h2 class="section--heading-1 section--text--center"><?php echo $l->t('Collabora Online integration tutorial video');?></h2>
				<p class="section--paragraph text-center"><?php echo $l->t('We are able to provide a solution for Online Office for the entire Nextcloud community through our <a target="_blank" class="hyperlink" href="https://nextcloud.com/?p=589">partnership with Collabora</a> in an <strong>easy to use <a class="hyperlink" href="https://hub.docker.com/r/collabora/code">docker image</a> for developers and home users</strong>. Enterprise users looking for a more reliable solution should');?> <a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('contact Nextcloud Sales</a>.');?></p>
				<div class="row">
					<div class="col-md-1">
					</div>
					<div class="col-md-10">
					<br />
					<div data-type="youtube" data-video-id="MDc1bNxn3js"></div>
					<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/MDc1bNxn3js" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 col-md-offset-3 text-center">
					</div>
				</div>
			</div>

			<h2 ><?php echo $l->t('Getting started in 3 steps');?></h2>
			<p class="section--paragraph"><?php echo $l->t('We\'ll describe how to get Collabora Online running on your server and how to integrate it into your Nextcloud using the docker image Nextcloud and Collabora built.');?></p>

			<h3 class="section--paragraph__tittle"><?php echo $l->t('Requirements');?></h3>
			<p class="section--paragraph"><?php echo $l->t('To install it the following dependencies are required:');?></p>
			<ol>
				<li class="section--paragraph"><?php echo $l->t('A host that can run a Docker container');?></li>
				<li class="section--paragraph"><?php echo $l->t('A subdomain or a second domain that the Collabora Online server can run on');?></li>
				<li class="section--paragraph"><?php echo $l->t('An Apache server with some enabled modules (<a class="hyperlink" href="https://icewind.nl/entry/collabora-online">NGINX instructions in a blog here</a>)');?></li>
				<li class="section--paragraph"><?php echo $l->t('A valid SSL certificate for the domain that Collabora Online should run on');?></li>
				<li class="section--paragraph"><?php echo $l->t('A valid SSL certificate for your Nextcloud');?></li>
			</ol>
			<p class="section--paragraph"><?php echo $l->t('<strong>Note:</strong> This guide does <em>NOT</em> cover self-signed certificates. If you use a self-signed certificate then you\'re mostly on your own ;-)');?></p>
			<h3 class="section--paragraph__tittle"><?php echo $l->t('1. Install the Collabora Online server');?></h3>
			<p class="section--paragraph"><?php echo $l->t('The following steps will download the Collabora Online docker, make sure to replace "cloud.nextcloud.com" with the host that your own Nextcloud runs on. Also make sure to escape all dots with double backslashes (<code>\\</code>), since this string will be evaluated as a regular expression (and your bash \'eats\' the first backslash.) If you want to use the docker container with more than one Nextcloud, you\'ll need to use');?> <code>'domain=cloud\\.nextcloud\\.com\|second\\.nexcloud\\.com'</code> <?php echo $l->t('instead. (All hosts are separated by <code>\|</code>.)');?></p>
			<p><pre><code class="docker">
docker pull collabora/code
docker run -t -d -p 127.0.0.1:9980:9980 -e 'domain=cloud\\.nextcloud\\.com' --restart always --cap-add MKNOD collabora/code
			</code></pre></p>
			<p class="section--paragraph"><?php echo $l->t('That will be enough. Once you have done that the server will listen on "localhost:9980". Now we just need to configure the locally installed Apache reverse proxy.');?></p>
			<h3 class="section--paragraph__tittle"><?php echo $l->t('2. Install the Apache reverse proxy');?></h3>
			<p class="section--paragraph"><?php echo $l->t('On a recent Ubuntu or Debian this should be possible using:');?></p>
			<ol>
				<li><code class="apache">apt-get install apache2</code></li>
				<li><code class="apache">a2enmod proxy</code></li>
				<li><code class="apache">a2enmod proxy_wstunnel</code></li>
				<li><code class="apache">a2enmod proxy_http</code></li>
				<li><code class="apache">a2enmod ssl</code></li>
			</ol>
			<p class="section--paragraph"><?php echo $l->t('Afterward, configure one VirtualHost properly to proxy the traffic. For security reason we recommend to use a subdomain such as office.nextcloud.com instead of running on the same domain. An example config can be found below:');?></p>
			<p><pre>
				<code class="apache">
&lt;VirtualHost *:443&gt;
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
AllowEncodedSlashes NoDecode

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
ProxyPassMatch "/lool/(.*)/ws$" wss://127.0.0.1:9980/lool/$1/ws nocanon

# Admin Console websocket
ProxyPass   /lool/adminws wss://127.0.0.1:9980/lool/adminws

# Download as, Fullscreen presentation and Image upload operations
ProxyPass           /lool https://127.0.0.1:9980/lool
ProxyPassReverse    /lool https://127.0.0.1:9980/lool
&lt;/VirtualHost&gt;
			</code></pre></p>
			<a name="update"></a>
			<p class="section--paragraph"><?php echo $l->t('After configuring these do restart your apache using <code>/etc/init.d/apache2 restart</code>.');?></p>
			<h3 class="section--paragraph__tittle"><?php echo $l->t('3. Configure the app in Nextcloud');?></h3>
			<ol>
				<li class="section--paragraph"><?php echo $l->t('Go to the Apps section and choose "Office & text"');?></li>
				<li class="section--paragraph"><?php echo $l->t('Install the "Collabora Online app"');?></li>
				<li class="section--paragraph"><?php echo $l->t('Admin -&gt; Collabora Online -&gt; Specify the server you have setup before (e.g. "<a href="https://office.nextcloud.com/">https://office.nextcloud.com</a>")');?></li>
			</ol>
			<h3><?php echo $l->t('Congratulations, your Nextcloud has Collabora Online Office integrated!');?></h3>
			<hr>
			<h2 class="section--heading-2 section--text--center"><?php echo $l->t('Updating');?></h2>
			<p class="section--paragraph"><?php echo $l->t('Occasionally, new versions of this docker image are released with security and feature updates. We will of course let you know when that happens! This is how you upgrade to a new version:');?></p>
			<ul>
			<li class="section--paragraph"><?php echo $l->t('grab new docker image:<br/>');?>
			<code class="docker">
docker pull collabora/code
			</code></li>
			<li class="section--paragraph"><?php echo $l->t('List docker images:<br/>');?>
			<code class="docker">
docker ps
			</code><br/>
			<?php echo $l->t('from the output you can glean the Container ID of your Collabora Online docker image.');?></li>
			<li class="section--paragraph"><?php echo $l->t('stop and remove the Collabora Online docker image:<br/>');?>
			<code class="docker">
docker stop CONTAINER_ID
				</code><br/>
			<code class="docker">
docker rm CONTAINER_ID
				</code></li>
			<li class="section--paragraph"><?php echo $l->t('start the new image:<br/>');?>
			<code class="docker">
docker run -t -d -p 127.0.0.1:9980:9980 -e 'domain=cloud\\.nextcloud\\.com' --restart always --cap-add MKNOD collabora/code
			</code></li>
			</ul>
			<p class="section--paragraph"><?php echo $l->t('Enjoy!');?></p>
			<hr>
			<h2 class="section--heading-2 section--text--center"><?php echo $l->t('Troubleshooting');?></h2>
			<p class="section--paragraph"><?php echo $l->t('Some common issues:');?></p>
			<ul>
				<li class="section--paragraph"><?php echo $l->t('<strong>Issue:</strong> Can\'t configure the URL in the Admin panel.<br/>
				This is most likely caused by the Documents app being enabled. Disable it and you can set the URL.');?></li>
				<li class="section--paragraph"><?php echo $l->t('<strong>Issue:</strong> I get connection errors when trying to open documents<br/>
				Be sure to check the error log from docker (<code>docker logs id-of-your-instance</code>). If the logs note something like:<br/>
				<code>No acceptable WOPI hosts found matching the target host [YOUR NEXTCLOUD DOMAIN] in config.</code><br/>
				<code>Unauthorized WOPI host. Please try again later and report to your administrator if the issue persists.</code><br/>
				you might have started the docker container with the wrong URL. Be sure to triplecheck that you start it with the URL of your Nextcloud server, not the server where Collabora Online runs on.');?></li>
				<li class="section--paragraph"><?php echo $l->t('<strong>Issue:</strong> <code>Connection is not allowed</code> errors.<br/>
				It is possible your firewall is blocking connections. Try to start docker after you started the firewall, it makes changes to your iptables to enable Collabora Online to function.');?></li>
				<li class="section--paragraph"><?php echo $l->t('<strong>Issue:</strong> <code>We are sorry, this is an unexpected connection error. Please try again.</code> error.<br />
				The Collabora Online app doesn\'t work at the moment, if you enable it only for certain groups. Remove the group filter in the App section.');?></li>
				<li class="section--paragraph"><?php echo $l->t('<strong>Issue:</strong> Collabora Online doesn\'t handle my 100 users.<br/>
				This docker image is designed for home usage with a limited numbers of users and open documents. If you need a more scalable solution, consider');?> <a href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('a support subscription</a> for a reliable, business-ready online office experience.');?></li>
				<li class="section--paragraph"><?php echo $l->t('<strong>Issue:</strong> Collabora Online doesn\'t work with Encryption.<br/>
				Yes, this is currently unsupported.');?></li>
			</ul>
			<p class="section--paragraph"><?php echo $l->t('Find more questions and answers in the <a class="hyperlink" href="https://help.nextcloud.com/t/issue-installing-collabora-following-official-guide/1746/58">discussion thread on the forums</a> and <a class="hyperlink" href="https://help.nextcloud.com/c/support/collabora">post a new topic in the Collabora category</a> if you have unanswered questions!');?></p>
		</div>
		</div>

</section>

<div class="container-fluid call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 featureblock revealOnScroll">
				<p class="text-center"><?php echo $l->t('Let us know what you think in the forums!');?></p>
				<div class="text-center morebuttondiv">
					<a href="https://help.nextcloud.com/c/support/collabora" class="button button--large button--arrow"><?php echo $l->t('Talk to us!');?> <i class="icon-arrow-circle-o-right icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
