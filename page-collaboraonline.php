<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="page-header">
	<h1>Collabora Online in Nextcloud</h1>
	<h3>Bringing Self Hosted Online Office to everybody</h3>
</div>

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
		<div class="yt-img-overlay">
			<a class="youtube" href="https://www.youtube.com/watch?v=egLqRqb4sHA" title="Introduction to Nextcloud 9">
				<img class="img-responsive" src="https://img.youtube.com/vi/egLqRqb4sHA/hqdefault.jpg" title="Introduction to Nextcloud 9" />
				<div class="yt-play-btn">
					<i></i> 
				</div>
			</a>
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
		<div class="yt-img-overlay">
			<a class="youtube" href="https://www.youtube.com/watch?v=Yc6avTVowc0" title="Introduction to Nextcloud 9">
				<img class="img-responsive" src="https://img.youtube.com/vi/Yc6avTVowc0/hqdefault.jpg" title="Introduction to Nextcloud 9" />
				<div class="yt-play-btn">
					<i></i> 
				</div>
			</a>
		</div>
	</div>
</div>

<h2>Getting started</h2>
<p>We'll describe how to get Collabora Online running on your server and how to integrate it into your Nextcloud.</p>

<h3>1. Get the docker image</h3>
<p>You can download the official Collabora Online docker image for Nextcloud integration <a href="https://hub.docker.com/r/nextclouders/collaboraonline/">on the docker hub</a>.</p>





<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery.youtubepopup.min.js"></script>

<script type="text/javascript">
$(function () {
	$("a.youtube").YouTubePopup({ hideTitleBar: true });
});
</script>
