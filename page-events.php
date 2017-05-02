<head>
<script>
	require(["require.config"], function() {
		require(["pages/events"])
	});
</script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/events.css">

</head>

<div class="background events-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Events across the world');?></h1>
				<h2><?php echo $l->t('Nextcloud is represented at conferences and organizes its own meetups and events all across the globe. And you can participate!');?></h2>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="sub-nav">
		<a href="/events/meetups">Meetups</a>&nbsp;&nbsp;
		|&nbsp;&nbsp;<a href="/events/conference-program">Conference Program</a>
	<!--     |&nbsp;&nbsp;<a href="/events/contactform">Contact</a> -->
	</div>
</div>

<section class="events">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="section--paragraph">Are you interested in meeting fellow Nextcloud users and contributors (<a  class="hyperlink" href="/contributors">Nextclouders</a>, as we lovingly call ourselves)? You&#39;ve come to the right place! The Nextcloud community organizes and participates in many events around the globe and here you can find details on where you can meet us and how to organise your own event and become a member of the most active file sync and share open source community!</p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/hackathon.jpg" style="width: 400px" title="" alt="" class="img-thumbnail alignright">
				<h2>Meetups</h2>
				<p class="section--paragraph">Nextcloud community members get together in meetups to learn, share ideas and work on Nextcloud. Meetups are informal meetings which are typically held in the evening and can be focused on development, user or business topics. You can take part as a speaker, participant or promoter. Meetups are typically held once a month and are open to anyone. Below is a list of local meetup groups.</p>
				<script type="text/javascript" src="https://www.meetup.com/embed/largest/nextcloud/"></script>
				<p class="section--paragraph">Find the next Meetup dates and more on <a  class="hyperlink" target="_blank" href="https://nextcloud.meetup.com/">nextcloud.meetup.com</a></p>
				<div class="row" style="text-align: center">
					<p class="section--paragraph"><a target="_blank" href="https://nextcloud.meetup.com/" class="btn btn-lg btn-default">
					<i class="icon-group"></i> Join a Meetup!</a>
					<a target="_blank"  href="/events/meetups" class="btn btn-lg btn-default">
					<i class="icon-lightbulb-o"></i> Organize a Meetup!</a></p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/booth.jpg" style="width: 400px" title="" alt="" class="img-thumbnail alignright">
				<h2>Conferences 2017</h2>
				<p class="section--paragraph">Nextcloud is participating in trade shows and conferences to present our community and technology to visitors.<br/>
					Below is a list of tradeshows and conferences where Nextcloud is represented! If you have questions and would like to meet us at an event, check out this list and <a  class="hyperlink" href="https://help.nextcloud.com/c/conference">let us know on the forums</a> you will be there.
				<table class="table table-striped">
					<tr>
						<th>Event</th>
						<th>Location</th>
						<th>Date</th>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="http://fosdem.org/">FOSDEM 2017</a></td>
						<td>Brussels</td>
						<td>February 4-5</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="http://www.messe-stuttgart.de/didacta/">didacta</a></td>
						<td>Stuttgart, Germany</td>
						<td>February 14-18</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://www.socallinuxexpo.org/scale/15x">SCALE 15x</a></td>
						<td>Los Angeles, USA</td>
						<td>March 2-5</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://chemnitzer.linux-tage.de/2017/en">Chemnitzer Linux Tage</a></td>
						<td>Chemnitz, Germany</td>
						<td>March 11-12</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://fossasia.org/">FOSSASIA Summit</a></td>
						<td>Singapore</td>
						<td>March 17-19</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://cebit.de/en/">CeBIT</a></td>
						<td>Hanover, Germany</td>
						<td>March 23-24</td>
					<tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://www.wikimedia.de/wiki/Ladies_that_FOSS">Ladies that FOSS</a></td>
						<td>Berlin, Germany</td>
						<td>April 19</td>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="http://foss-north.se/">foss-north</a></td>
						<td>Gothenburgm Sweden</td>
						<td>April 26</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://www.belug.de/">BeLUG</a></td>
						<td>Berlin, Germany</td>
						<td>May 3</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://conferences.oreilly.com/oscon/oscon-tx">OSCON</a></td>
						<td>Austin, TX, USA</td>
						<td>May 8-11</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://oscal.openlabs.cc/">OSCAL'17</a></td>
						<td>Tirana, Albania</td>
						<td>May 13-14</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://tnc17.geant.org">TNC17</a></td>
						<td>Linz, Austria</td>
						<td>May 29-June 2</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="http://sched.co/AOmp">Open Source Summit Japan</a></td>
						<td>Tokyo, Japan</td>
						<td>May 31-June 2</td>
					</tr>
					<tr>
						<td><a  class="hyperlink" target="_blank" href="https://conf.nextcloud.com/">Nextcloud Conference 2017</a></td>
						<td>Berlin, Germany</td>
						<td>August 22-29</td>
					</tr>
				</table>
				<p class="section--paragraph">Is there a conference, trade show or other event close by and you want Nextcloud to be there? Please <a  class="hyperlink" href="https://help.nextcloud.com/c/conference">get in touch</a> and let us know, we will do our best to help making it happen!</p>
				<p class="section--paragraph">Are you presenting about Nextcloud or running a booth at an upcoming event that should be listed here? Let us know  <a  class="hyperlink" href="https://help.nextcloud.com/c/conference">on the forums</a>!</p>
		</div>
	</div>
</section>
