<!-- <?php get_template_part('templates/parts/title'); ?> -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="page-header">
	<h1>WebRTC in Nextcloud: private audio and video communication</h1>
</div>

<div class="row featurerow topfeature">
	<div class="col-md-5">
		<div class="yt-img-overlay">
			<a class="youtube" href="https://www.youtube.com/watch?v=egLqRqb4sHA" title="Introduction to Nextcloud 9">
				<img class="img-responsive" src="https://img.youtube.com/vi/egLqRqb4sHA/hqdefault.jpg" title="Introduction to Nextcloud 9" />
				<div class="yt-play-btn">
					<i></i>
				</div>
			</a>
		</div>
	</div>
	<div class="col-md-7">
		<h2>Spreed.ME</h2>
		<p>Rediscover private video chat and messaging! Secure audio, video and text chat integration in Nextcloud, provided by Spreed.ME, brings you safe and easy to use web conferencing, one to one calls and chat, putting control over your communication back into your own hands.</p>
		<div class="col-md-6 text-center morebuttondiv">
			<p><a href="https://spreed.me/?fw" class="btn btn-primary morebutton" target="_blank">Try Spreed.ME <i class="icon-arrow-circle-o-right icon"></i></a></p>
		</div>
	</div>
</div>

<h2>Spreed.ME and secure video and audio chat</h2>

<div class="row">
	<div class="col-md-8 featureblock">
		<p>Spreed.ME uses a technology called "WebRTC" which allows browsers to make direct, peer to peer connections between each other. These are fully end to end encrypted, both for audio/video and text chat. This means it is entirely impossible for anyone to eaves-drop on the conversation, including even the server administrator!</p>
		<p>User handling is integrated in Nextcloud so you will show up with avatar and user names all set up. You can also invite people without a user account to a call by creating a temporary password for a user (with the key icon). You will get a link you can give to them to join you in a call. You don't have to enbable this ability, though and you can also restrict the usage of Spreed.ME to a specific user group if you need to!</p>
	</div>
	<div class="col-md-4">
		<img alt="Try for yourself!" class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/features/spreed-temp-password.png" />
	</div>
</div>
<div class="row">

</div>

<!-- end main -->
</div>
</div>

<div class="webrtcspreedbox container wrao">
	<div class="row spreedfeatures">
		<div class="col-sm-7 col-sm-offset-5 col-md-7 col-md-offset-5 col-lg-6 col-lg-offset-6">
			<h1>Spreedbox: <span class="avoidwrap">The most private video chat</span> <span class="avoidwrap">and file exchange technology</span></h1>
			<ul>
				<li>Easy audio and video calls</li>
				<li>Nextcloud based file sync and share</li>
				<li>End to end encrypted</li>
				<li>You decide where your data is</li>
				<li>Custom secure hardware key-generator</li>
				<li>Fully Open Source</li>
			</ul>
			<div class="morebuttondiv">
				<p><a href="https://spreed.me" class="btn btn-primary morebutton" target="_blank">Get your Spreedbox <i class="icon-arrow-circle-o-right icon"></i></a></p>
			</div>
		</div>
	</div>
</div>

<!-- Start main -->
<div class="wrap container">

<div class="featurerow">
	<h2 class="featuretitle">Spreed.ME Nextcloud integration tutorial video</h2>
	<p>In this video, we walk you through the tutorial below from beginning to end.</p>
	<div class="row">
		<div class="col-md-10">
			<div class="yt-img-overlay">
				<a class="youtube" href="https://www.youtube.com/watch?v=1zXnypuu27I" title="Spreed.ME in Nextcloud">
					<img class="img-responsive featureimg" src="https://img.youtube.com/vi/1zXnypuu27I/hqdefault.jpg" title="Spreed.ME in Nextcloud tutorial" />
					<div class="yt-play-btn">
						<i></i>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<h2>Getting started in 3 steps</h2>
<p>We'll describe how to get Spreed.ME integrated in your server using the Spreed WebRTC source, binaries or a Docker image and the Nextcloud Spreed.ME app.</p>

<h3>Requirements</h3>
<p>To install, the following dependencies are required:
<ol>
 	<li>A host that can run a Docker container OR a development environment to built Spreed WebRTC (which is based on the Go programming language)</li>
 	<li>An Apache server with some enabled modules</li>
 	<li>A valid SSL certificate for your Nextcloud</li>
</ol>

<h3>1. Install Spreed WebRTC</h1>
<p>You can either install the Spreed WebRTC Docker container, install packages for your distribution or built the binary yourself.</p>

<h4>Docker</h4>
<p>There is a Docker image. It requires that you first create the server.conf, taking the template as can be found on <a href="https://hub.docker.com/r/spreed/webrtc/" target="_blank">the Docker hub page</a> and modify it following the directions in the third section below. You then have to put it in a place where the Docker image can reach it, in the example below we picked <code>/srv/extra/server.conf</code> for that.</p>
<p><pre><code>docker run --rm --name my-spreed-webrtc -p 8080:8080 -p 8443:8443 -v `pwd`:/srv/extra -i -t spreed/webrtc -c /srv/extra/server.conf</code></pre></p>
<p>Once it is running, the server will listen on "localhost:8080". Now we just need to configure Apache to serve Spreed WebRTC from there.</p>

<h4>Packages</h4>
<p>There are packages for Ubuntu, see <a href="https://github.com/strukturag/spreed-webrtc/wiki/Ubuntu-Repository" target="_blank">instructions here</a></p>
<h4>Building</h4>
<p>Building Spreed WebRTC is relatively simple as it is written in <a href="https://golang.org/">Go</a>. Follow these steps, adjusting for your system:
<ol>
 	<li><code>zypper install go</code><br/>
 	Install Go so you can built a Go app like Spreed WebRTC</li>
 	<li><code>cd /srv/www/htdocs</code><br/>
 	Go to the root of where your webserver is installed</li>
 	 <li><code>wget https://github.com/strukturag/spreed-webrtc/archive/master.zip</code><br/>
 	Grab the Spreed WebRTC code</li>
 	 <li><code>unzip master.zip</code><br/>
 	Extract the code</li>
	<li><code>cd spreed-webrtc-master</code><br/>
 	Enter the folder you just extracted the files into</li>
	<li><code>./autogen.sh</code><br/>
 	Generate configure and Makefile</li>
	<li><code>./configure</code><br/>
 	Detect all dependencies and get ready to built</li>
 	<li><code>make</code><br/>
 	Build Spreed WebRTC</li>
</ol>
You should now have Spreed WebRTC installed.</p>

<h3>2. Install the Spreed.ME Nextcloud app</h2>
<p>We'll now install the Spreed.ME app. This can be done either from the Nextcloud App Store (if it is available there for your version of Nextcloud) or, as we'll show here, directly from Github.
<ol>
 	<li><code>cd /srv/www/htdocs/nextcloud/apps</code><br/>
 	Go to the Nextcloud app folder on your server</li>
 	<li><code>wget https://github.com/strukturag/nextcloud-spreedme/archive/master.zip</code><br/>
 	Download the zip file with the app</li>
 	<li><code>unzip master.zip</code><br/>
 	Extract the app</li>
	<li><code>mv nextcloud-spreedme-master spreedme</code><br/>
 	Rename the folder to spreedme</li>
</ol>
The app is now installed.</p>

<h2>3. Configure the server and apps</h2>
<p>In this last step we have to do, we configure Apache to make Spreed WebRTC accessible and configure both Spreed WebRTC and the Spreed.ME Nextcloud app to talk to each other. Let's start with Apache.</p>

<h3>Apache config</h3>
<p>While you could run Spreed WebRTC on a dedicated domain (see <a href="https://github.com/strukturag/nextcloud-spreedme#preparations">the Spreed.ME README</a>), it complicates things so we will put it in its own subpath named <code>webrtc</code>.</p>
<p><strong>Note:</strong> The instructions below are for openSUSE, you have to modify them for other Linux variants. Debian, for example, puts web server files in <code>/var/www</code>.</p>
<ol>
 	<li><code>cd /etc/apache/vhosts.d</code><br/>
 	Go to where Apache loads your virtual hosts from</li>
	<li><code>vi nextcloud.conf</code><br/>
 	Edit your Nextcloud vhost configuration. We will put the subpath there. Use your editor of choice, like nano instead of vi. In vi you can edit files only after you hit <code>i</code> and to save and quit the editor, hit the ESC button and type <code>:wq</code> followed by enter.</li>
 	<li>Locate the closing tags for your virtual host: <code></VirtualHost></code><br/>
 	And insert this above it:<br/>
	<code># Spreed WebRTC config (must be in same vhost) <br/>
	&lt;Location /webrtc&gt; <br/>
	  ProxyPass http://127.0.0.1:8080/webrtc <br/>
	  ProxyPassReverse /webrtc <br/>
	&lt;/Location&gt; <br/>
	&lt;Location /webrtc/ws&gt; <br/>
	  ProxyPass ws://127.0.0.1:8080/webrtc/ws <br/>
	&lt;/Location&gt; <br/>
	ProxyVia On <br/>
	ProxyPreserveHost On <br/>
	RequestHeader set X-Forwarded-Proto 'https' env=HTTPS
	</code></li>
<!--	<li><code>cd /etc/apache</code><br/>
	Go to where Apache has its other config files</li>
	<li><code>vi listen.conf</code><br/>
	Edit the file where Apache has its ports configured. This is called ports.conf on Debian systems.</li>
	<li>add <code>Listen 8080</code> on a new line to this file</li>-->
	<li><code>rcapache2 restart</code><br/>
 	Now restart the Apache webserver</li>
</ol>
<p>Ngnix users should check out the <a href="https://github.com/strukturag/nextcloud-spreedme/blob/update-apache-nginx-docs/doc/example-config-nginx.md" target="_blank">ngnix config file here</a>.</p>

<h3>Spreed WebRTC config</h3>
<p>Now we'll adjust the Spreed WebRTC config, this is server.conf or webrtc.conf if you have installed packages. This is a large number of steps, each relatively simple but it is important not to miss anything!
<ol>
 	<li><code>cd /srv/www/htdocs/spreed-webrtc-master</code><br/>
 	Go to the folder where you installed the Spreed WebRTC server software</li>
 	<li><code>cp server.conf.in server.conf</code><br/>
 	Create the config file from the default file</li>
 	<li><code>vi server.conf</code><br/>
 	Edit the config file and make these modifications:
 	<ul>
		<li>In the <code>[http]</code> section:
		<ul>
			<li>Enable <code>basePath</code> by removing the <code>;</code> character in front of the line and set it to the basePath we install Spreed WebRTC in: <code>/webrtc/</code>. It now should look like:<br /> <code>basePath = /webrtc/</code></li>
		</ul></li>
		<li>In the <code>[app]</code> section:
		<ul>
			<li>Enable <code>authorizeRoomJoin</code> and set it to true:<br /> <code>authorizeRoomJoin = true</code></li>
			<li>Enable <code>extra</code> and set it to the full absolute path of the <code>spreedme/extra</code> directory in your apps folder of your Nextcloud installation:<br /> <code>extra = /srv/www/htdocs/nextcloud/apps/spreedme/extra</code></li>
			<li>Enable <code>plugin</code> and set it to <code>extra/static/owncloud.js</code>:<br /> <code>plugin = extra/static/owncloud.js</code></li>
			<li>Change <code>sessionSecret</code> to a random 64-character HEX string. <strong>Do NOT use the string given below</strong>. You can generate your own 64-character HEX string by running <code>xxd -ps -l 32 -c 32 /dev/random</code> or <code>openssl rand -hex 32</code> in a console. It should look like:<br /> <code>sessionSecret = bb04fb058e2d7fd19c5bdaa129e7883195f73a9c49414a7eXXXXXXXXXXXXXXXX</code></li>
			<li>Change <code>encryptionSecret</code> to a random 64-character HEX string. <strong>Do NOT use the string given below</strong>. See above on how to generate such a random secret. It should look like:<br /> <code>encryptionSecret = bb04fb058e2d7fd19c5bdaa129e7883195f73a9c49414a7eXXXXXXXXXXXXXXXX</code></li>
		</ul></li>
		<li>In the <code>[users]</code> section:
		<ul>
			<li>Enable <code>enabled</code> and set it to true:<br /> <code>enabled = true</code></li>
			<li>Enable <code>mode</code> and set it to <code>sharedsecret</code>:<br /> <code>mode = sharedsecret</code></li>
			<li>Enable <code>sharedsecret_secret</code> and set it to a random 64-character HEX string. <strong>Do NOT use the string given below</strong>. See above on how to generate such a random secret. It should look like:<br /> <code>sharedsecret_secret = bb04fb058e2d7fd19c5bdaa129e7883195f73a9c49414a7eXXXXXXXXXXXXXXXX</code></li>
		</ul></li>
		<li>Now save and close the file.</li>
	</ul></li>
</ol>
You will need to copy the shared secret in another file, so keep it in your clipboard, another terminal or a temporary text file.</p>
<p>Now, start the server by running ./spreed-webrtc-server in the folder where Spreed WebRTC is located. You can configure a script to run the server automatically when you boot up your system.</p>

<h3>App configuration</h3>
<p>Now, we have to configure the Spreed.ME app so it an talk to the Spreed WebRTC server.
<ol>
 	<li><code>cd /srv/www/htdocs/nextcloud/apps/spreedme/config</code><br/>
 	Go to the Nextcloud spreedme app configuration folder</li>
 	<li><code>cp config.php.in config.php</code><br/>
 	Create the PHP config file from the default file</li>
 	<li><code>vi config.php</code><br/>
 	Edit the config file and make these modifications:
 	<ul>
		<li>Set <code>SPREED_WEBRTC_BASEPATH</code> to <code>/webrtc/</code>: <code>const SPREED_WEBRTC_BASEPATH = '/webrtc/';</code>
		<li>Set <code>SPREED_WEBRTC_SHAREDSECRET</code> to the shared secret you generated for the Spreed WebRTC server configuration above: <code>const SPREED_WEBRTC_SHAREDSECRET = 'bb04fb058e2d7fd19c5bdaa129e7883195f73a9c49414a7eXXXXXXXXXXXXXXXX';</code></li>
		<li>You can choose to modify <code>OWNCLOUD_TEMPORARY_PASSWORD_LOGIN_ENABLED</code> to <code>true</code> to allow your users to invite other, unregistered users for a call. With this on <code>false</code> users need to have a Nextcloud account to join a call. If you enable it, generate a new random string and put it below, see the included instructions.</li>
		<li>Now save and close the file.</li>
	</ul></li>
	<li><code>cd /srv/www/htdocs/nextcloud/spreedme/extra/static/config</code><br/>
 	Go to the Nextcloud spreedme app extra/static/config folder</li>
 	<li><code>cp OwnCloudConfig.js.in OwnCloudConfig.js</code><br/>
 	Create the JavaScript config file from the default file<br />
 	If you put Spreed WebRTC in /webrtc/ (as this manual assumes), you don't need to make any other changes. If you put it in its own domain you have to edit the file and make sure you set <code>OWNCLOUD_ORIGIN</code> to your Nextcloud server.</li>
</ol>
Now the app is configured, go to the Nextcloud App Store, locate the app in the 'not enabled' section and click on <code>Enable</code>!
</p>
<h2>And DONE!</h2>
<p>At this point, you should be able to go to the Spreed.ME app in your Nextcloud and have a working video- and audio conferencing system. Congratulations!</p>

<h2>Troubleshooting and other documentation</h2>
<p>Community members are already discussing the Spreed.ME integration. You can find a how-to for <a href="https://help.nextcloud.com/t/nextcloud-9-update-brings-security-open-source-enterprise-capabilities-and-support-subscription-ios-app/1383/43" target="_blank">installing Spreed.ME under Ubuntu 16.04 an armhf-device (odroid xu4) here!</a></p>

<h1><a href="https://help.nextcloud.com">Discuss Spreed.ME integration on our forums</a></h1>


<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery.youtubepopup.min.js"></script>

<script type="text/javascript">
$(function () {
	$("a.youtube").YouTubePopup({ hideTitleBar: true });
});
</script>
