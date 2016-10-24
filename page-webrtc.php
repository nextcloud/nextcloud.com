<!-- <?php get_template_part('templates/parts/title'); ?> -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="page-header">
	<h1><?php echo $l->t('WebRTC in Nextcloud: private audio and video communication');?></h1>
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
		<h2><?php echo $l->t('Spreed.ME');?></h2>
		<p><?php echo $l->t('Rediscover private video chat and messaging! Secure audio, video and text chat integration in Nextcloud, provided by Spreed.ME, brings you safe and easy to use web conferencing, one to one calls and chat, putting control over your communication back into your own hands.');?></p>
		<div class="col-md-6 text-center morebuttondiv">
			<p><?php echo $l->t('<a href="https://spreed.me/?fw" class="btn btn-primary morebutton" target="_blank">Try Spreed.ME <i class="icon-arrow-circle-o-right icon"></i></a>');?></p>
		</div>
	</div>
</div>

<h2><?php echo $l->t('Spreed.ME and secure video and audio chat');?></h2>

<div class="row">
	<div class="col-md-8 featureblock">
		<p><?php echo $l->t('Spreed.ME uses a technology called "WebRTC" which allows browsers to make direct, peer to peer connections between each other. These are fully end to end encrypted, both for audio/video and text chat. This means it is entirely impossible for anyone to eaves-drop on the conversation, including even the server administrator!');?></p>
		<p><?php echo $l->t('User handling is integrated in Nextcloud so you will show up with avatar and user names all set up. You can also invite people without a user account to a call by creating a temporary password for a user (with the key icon). You will get a link you can give to them to join you in a call. You do not have to enbable this ability, though and you can also restrict the usage of Spreed.ME to a specific user group if you need to!');?></p>
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

<div class="webrtcspreedbox container wrap">
	<div class="row spreedfeatures">
		<div class="col-sm-7 col-sm-offset-5 col-md-7 col-md-offset-5 col-lg-6 col-lg-offset-6">
			<h1><?php echo $l->t('Spreedbox: <span class="avoidwrap">The most private video chat</span> <span class="avoidwrap">and file exchange technology</span>');?></h1>
			<ul>
				<li><?php echo $l->t('Easy audio and video calls');?></li>
				<li><?php echo $l->t('Nextcloud based file sync and share');?></li>
				<li><?php echo $l->t('End to end encrypted');?></li>
				<li><?php echo $l->t('You decide where your data is');?></li>
				<li><?php echo $l->t('Custom secure hardware key-generator');?></li>
				<li><?php echo $l->t('Fully Open Source');?></li>
			</ul>
			<div class="morebuttondiv">
				<p><?php echo $l->t('<a href="https://spreed.me" class="btn btn-primary morebutton" target="_blank">Get your Spreedbox <i class="icon-arrow-circle-o-right icon"></i></a>');?></p>
			</div>
		</div>
	</div>
</div>

<!-- Start main -->
<div class="wrap container">

<div class="featurerow">
	<h2 class="featuretitle"><?php echo $l->t('Spreed.ME Nextcloud integration tutorial video');?></h2>
	<p><?php echo $l->t('In this video, we walk you through the tutorial below from beginning to end.');?></p>
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

<h2><?php echo $l->t('Getting started in 3 steps');?></h2>
<p><?php echo $l->t('We will describe how to get Spreed.ME integrated in your server using the Spreed WebRTC source, binaries or a Docker image and the Nextcloud Spreed.ME app.');?></p>

<h3><?php echo $l->t('Requirements');?></h3>
<p><?php echo $l->t('To install, the following dependencies are required:');?></p>
<ol>
 	<li><?php echo $l->t('A host that can run a Docker container OR a development environment to built Spreed WebRTC (which is based on the Go programming language)');?></li>
 	<li><?php echo $l->t('An Apache server with some enabled modules');?></li>
 	<li><?php echo $l->t('A valid SSL certificate for your Nextcloud');?></li>
</ol>

<h3><?php echo $l->t('1. Install Spreed WebRTC');?></h1>
<p><?php echo $l->t('You can either install the Spreed WebRTC Docker container, install packages for your distribution or built the binary yourself.');?></p>

<h4><?php echo $l->t('Docker');?></h4>
<p><?php echo $l->t('There is a Docker image. It requires that you first create the server.conf, taking the template as can be found on <a href="https://hub.docker.com/r/spreed/webrtc/" target="_blank">the Docker hub page</a> and modify it following the directions in the third section below. You then have to put it in a place where the Docker image can reach it, in the example below we picked <code>/srv/extra/server.conf</code> for that.');?></p>
<p><?php echo $l->t('<pre><code>docker run --rm --name my-spreed-webrtc -p 127.0.0.1:8080:8080 -p 127.0.0.1:8443:8443 -v /srv/extra:/srv/extra -v path-to-your-nextcloud/apps/spreedme/extra:path-to-your-nextcloud/apps/spreedme/extra -i -t spreed/webrtc -c /srv/extra/server.conf</code></pre>');?></p>
<p><?php echo $l->t('Once it is running, the server will listen on "localhost:8080". You have to change the following in the server.conf of the spreed.me server: section:<code> [http] </code> entry: <code> listen = 0.0.0.0:8080. </code>');?></p> 
<p><?php echo $l->t('If you are running it in a virtual machine, you may not have enough entropy in /dev/random and the server stick at the keygeneration. To get around this, execute <code>rngd -f -r /dev/urandom</code> in another terminal session.');?></p>
<p><?php echo $l->t('To run the container in the background, start the container with: <code> run -t -d --name my-spreed-webrtc -p 127.0.0.1:8080:8080 -p 127.0.0.1:8443:8443 -v /srv/extra:/srv/extra -v path-to-your-nextcloud/apps/spreedme/extra:path-to-your-nextcloud/apps/spreedme/extra -i -t spreed/webrtc -c /srv/extra/server.conf</code>');?></p>
<p><?php echo $l->t('Now we just need to configure Apache to serve Spreed WebRTC from there.');?></p>

<h4><?php echo $l->t('Packages');?></h4>
<p><?php echo $l->t('There are packages for Ubuntu, see <a href="https://github.com/strukturag/spreed-webrtc/wiki/Ubuntu-Repository" target="_blank">instructions here</a>');?></p>
<h4><?php echo $l->t('Building');?></h4>
<p><?php echo $l->t('Building Spreed WebRTC is relatively simple as it is written in <a href="https://golang.org/">Go</a>. Follow these steps, adjusting for your system:');?></p>
<ol>
 	<li><?php echo $l->t('<code>zypper install go</code><br/>
 	Install Go so you can built a Go app like Spreed WebRTC');?></li>
 	<li><?php echo $l->t('<code>cd /srv/www/htdocs</code><br/>
 	Go to the root of where your webserver is installed');?></li>
 	 <li><?php echo $l->t('<code>wget https://github.com/strukturag/spreed-webrtc/archive/master.zip</code><br/>
 	Grab the Spreed WebRTC code');?></li>
 	 <li><?php echo $l->t('<code>unzip master.zip</code><br/>
 	Extract the code');?></li>
	<li><?php echo $l->t('<code>cd spreed-webrtc-master</code><br/>
 	Enter the folder you just extracted the files into');?></li>
	<li><?php echo $l->t('<code>./autogen.sh</code><br/>
 	Generate configure and Makefile');?></li>
	<li><?php echo $l->t('<code>./configure</code><br/>
 	Detect all dependencies and get ready to built');?></li>
 	<li><?php echo $l->t('<code>make</code><br/>
 	Build Spreed WebRTC');?></li>
</ol>
<p><?php echo $l->t('You should now have Spreed WebRTC installed.');?></p>

<h3><?php echo $l->t('2. Install the Spreed.ME Nextcloud app');?></h2>
<p><?php echo $l->t('We will now install the Spreed.ME app. This can be done either from the Nextcloud App Store (if it is available there for your version of Nextcloud) or, as we will show here, directly from GitHub.');?></p>
<ol>
 	<li><?php echo $l->t('<code>cd /srv/www/htdocs/nextcloud/apps</code><br/>
 	Go to the Nextcloud app folder on your server');?></li>
 	<li><?php echo $l->t('<code>wget https://github.com/strukturag/nextcloud-spreedme/archive/master.zip</code><br/>
 	Download the zip file with the app');?></li>
 	<li><?php echo $l->t('<code>unzip master.zip</code><br/>
 	Extract the app');?></li>
	<li><?php echo $l->t('<code>mv nextcloud-spreedme-master spreedme</code><br/>
 	Rename the folder to spreedme');?></li>
</ol>
<p><?php echo $l->t('The app is now installed.');?></p>

<h2><?php echo $l->t('3. Configure the server and apps');?></h2>
<p><?php echo $l->t('In this last step we have to do, we configure Apache to make Spreed WebRTC accessible and configure both Spreed WebRTC and the Spreed.ME Nextcloud app to talk to each other. Let us start with Apache.');?></p>

<h3><?php echo $l->t('Apache config');?></h3>
<p><?php echo $l->t('While you could run Spreed WebRTC on a dedicated domain (see <a href="https://github.com/strukturag/nextcloud-spreedme#preparations">the Spreed.ME README</a>), it complicates things so we will put it in its own subpath named <code>webrtc</code>.');?></p>
<p><?php echo $l->t('<strong>Note:</strong> The instructions below are for openSUSE, you have to modify them for other Linux variants. Debian, for example, puts web server files in <code>/var/www</code>.');?></p>
<ol>
 	<li><?php echo $l->t('<code>cd /etc/apache/vhosts.d</code><br/>
 	Go to where Apache loads your virtual hosts from');?></li>
	<li><?php echo $l->t('<code>vi nextcloud.conf</code><br/>
 	Edit your Nextcloud vhost configuration. We will put the subpath there. Use your editor of choice, like nano instead of vi. In vi you can edit files only after you hit <code>i</code> and to save and quit the editor, hit the ESC button and type <code>:wq</code> followed by enter.');?></li>
 	<li><?php echo $l->t('Locate the closing tags for your virtual host: <code></VirtualHost></code><br/>
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
	RequestHeader set X-Forwarded-Proto \'https\' env=HTTPS
	</code>');?></li>
<!--	<li><?php echo $l->t('<code>cd /etc/apache</code><br/>
	Go to where Apache has its other config files');?></li>
	<li><?php echo $l->t('<code>vi listen.conf</code><br/>
	Edit the file where Apache has its ports configured. This is called ports.conf on Debian systems.');?></li>
	<li><?php echo $l->t('add <code>Listen 8080</code> on a new line to this file');?></li>-->
	<li><?php echo $l->t('<code>rcapache2 restart</code><br/>
 	Now restart the Apache webserver');?></li>
</ol>
<p><?php echo $l->t('Nginx users should check out the <a href="https://github.com/strukturag/nextcloud-spreedme/blob/update-apache-nginx-docs/doc/example-config-nginx.md" target="_blank">Nginx config file here</a>.');?></p>

<h3><?php echo $l->t('App configuration');?></h3>
<p><?php echo $l->t('We now have to configure the Spreed.ME app.<br/>
At first, go to the Nextcloud App Store, locate the app in the \'not enabled\' section and click on <code>Enable</code>.<br/>
Open the Nextcloud admin settings page (/index.php/settings/admin#goto-spreed.me) in your browser and configure this app:');?></p
<ol>
 	<li><?php echo $l->t('Click on <code>Generate new shared secret</code>. It will output a random string which you will need in one of the next steps. Copy it to your clipboard or a temporary text file.');?></li>
 	<li><?php echo $l->t('Click on <code>Save settings</code>.');?></li>
</ol>

<h3><?php echo $l->t('Spreed WebRTC config');?></h3>
<p><?php echo $l->t('Now we will adjust the Spreed WebRTC config, this is server.conf or webrtc.conf if you have installed packages. This is a large number of steps, each relatively simple but it is important not to miss anything!');?></p>
<ol>
 	<li><?php echo $l->t('<code>cd /srv/www/htdocs/spreed-webrtc-master</code><br/>
 	Go to the folder where you installed the Spreed WebRTC server software');?></li>
 	<li><?php echo $l->t('<code>cp server.conf.in server.conf</code><br/>
 	Create the config file from the default file');?></li>
 	<li><?php echo $l->t('<code>vi server.conf</code><br/>
 	Edit the config file and make these modifications:');?>
		<ul>
 	<ul>
		<li><?php echo $l->t('In the <code>[http]</code> section:');?>
		<ul>
			<li><?php echo $l->t('Enable <code>basePath</code> by removing the <code>;</code> character in front of the line and set it to the basePath we install Spreed WebRTC in: <code>/webrtc/</code>. It now should look like:<br /> <code>basePath = /webrtc/</code>');?></li>
		</ul></li>
		<li><?php echo $l->t('In the <code>[app]</code> section:');?>
		<ul>
			<li><?php echo $l->t('Enable <code>authorizeRoomJoin</code> and set it to true:<br /> <code>authorizeRoomJoin = true</code>');?></li>
			<li><?php echo $l->t('Enable <code>extra</code> and set it to the full absolute path of the <code>spreedme/extra</code> directory in your apps folder of your Nextcloud installation:<br /> <code>extra = /srv/www/htdocs/nextcloud/apps/spreedme/extra</code>');?></li>
			<li><?php echo $l->t('Enable <code>plugin</code> and set it to <code>extra/static/owncloud.js</code>:<br /> <code>plugin = extra/static/owncloud.js</code>');?></li>
			<li><?php echo $l->t('Change <code>sessionSecret</code> to a random 64-character HEX string. <strong>Do NOT use the string given below</strong>. You can generate your own 64-character HEX string by running <code>xxd -ps -l 32 -c 32 /dev/random</code> or <code>openssl rand -hex 32</code> in a console. It should look like:<br /> <code>sessionSecret = bb04fb058e2d7fd19c5bdaa129e7883195f73a9c49414a7eXXXXXXXXXXXXXXXX</code>');?></li>
			<li><?php echo $l->t('Change <code>encryptionSecret</code> to a random 64-character HEX string. <strong>Do NOT use the string given below</strong>. See above on how to generate such a random secret. It should look like:<br /> <code>encryptionSecret = bb04fb058e2d7fd19c5bdaa129e7883195f73a9c49414a7eXXXXXXXXXXXXXXXX</code>');?></li>
		</ul></li>
		<li><?php echo $l->t('In the <code>[users]</code> section:');?>
		<ul>
			<li><?php echo $l->t('Enable <code>enabled</code> and set it to true:<br /> <code>enabled = true</code>');?></li>
			<li><?php echo $l->t('Enable <code>mode</code> and set it to <code>sharedsecret</code>:<br /> <code>mode = sharedsecret</code>');?></li>
			<li><?php echo $l->t('Enable <code>sharedsecret_secret</code> and set it to the random string you have in your clipboard / temporary text file. It should look like:<br /> <code>sharedsecret_secret = bb04fb058e2d7fd19c5bdaa129e7883195f73a9c49414a7eXXXXXXXXXXXXXXXX</code>');?></li>
		</ul></li>
		<li><?php echo $l->t('Now save and close the file.');?></li>
	</ul>');?></li>
</ol>
');?></p>
<p><?php echo $l->t('Now, start the server by running ./spreed-webrtc-server in the folder where Spreed WebRTC is located. You can configure a script to run the server automatically when you boot up your system.');?></p>

<h2><?php echo $l->t('And DONE!');?></h2>
<p><?php echo $l->t('At this point, you should be able to go to the Spreed.ME app in your Nextcloud and have a working video- and audio conferencing system. Congratulations!');?></p>

<h2><?php echo $l->t('Troubleshooting and other documentation');?></h2>
<p><?php echo $l->t('Community members are already discussing the Spreed.ME integration. You can find a how-to for <a href="https://help.nextcloud.com/t/nextcloud-9-update-brings-security-open-source-enterprise-capabilities-and-support-subscription-ios-app/1383/43" target="_blank">installing Spreed.ME under Ubuntu 16.04 an armhf-device (odroid xu4) here!</a>');?></p>

<h1><?php echo $l->t('<a href="https://help.nextcloud.com">Discuss Spreed.ME integration on our forums</a>');?></h1>


<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery.youtubepopup.min.js"></script>

<script type="text/javascript">
$(function () {
	$("a.youtube").YouTubePopup({ hideTitleBar: true });
});
</script>
