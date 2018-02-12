<head>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/events.css">
</head>
<script>
require(["require.config"], function() {
	require(["bootstrap"])
});
</script>
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
		|&nbsp;&nbsp;<a href="/events/conference-program">Events Program</a>
	<!--     |&nbsp;&nbsp;<a href="/events/contactform">Contact</a> -->
	</div>
</div>

<section class="events">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="section--paragraph">Are you interested in meeting fellow Nextcloud users and contributors (<a class="hyperlink" href="/contributors">Nextclouders</a>, as we lovingly call ourselves)? You&#39;ve come to the right place! The Nextcloud community organizes and participates in many events around the globe and here you can find details on where you can meet us and how to organise your own event and become a member of the most active file sync and share open source community!</p>
				<div class="alignright"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/events/fosdem18.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/fosdem18.jpg" style="width: 400px" title="" alt="" class="img-thumbnail"></a>
				<p class="text-center">Our awesome team at FOSDEM 2018!</p></div>
				<h2>Meetups</h2>
				<p class="section--paragraph">Nextcloud community members get together in meetups to learn, share ideas and work on Nextcloud. Meetups are informal meetings which are typically held in the evening and can be focused on development, user or business topics. You can take part as a speaker, participant or promoter. Meetups are typically held once a month and are open to anyone. Below is a list of local meetup groups.</p>
				<script type="text/javascript" src="https://www.meetup.com/embed/largest/nextcloud/"></script>
				<p class="section--paragraph">Find the next Meetup dates and more on <a class="hyperlink" target="_blank" href="https://nextcloud.meetup.com/">nextcloud.meetup.com</a></p>
				<div class="row" style="text-align: center">
					<p class="section--paragraph"><a target="_blank" href="https://nextcloud.meetup.com/" class="btn btn-lg btn-default">
					<i class="icon-group"></i> Join a Meetup!</a>
					<a target="_blank"  href="/events/meetups" class="btn btn-lg btn-default">
					<i class="icon-lightbulb-o"></i> Organize a Meetup!</a></p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2017.jpg" style="width: 400px" title="" alt="" class="img-thumbnail alignright">
				<h2>Nextcloud Conference</h2>
				<p class="section--paragraph">The most exciting event on the yearly calendar for Nextcloud is of course our very own Nextcloud Conference! Over 150 Nextcloud community members get together for a full week. During week days, we write and discuss code while on the weekend we have an exciting, educational and inspirational program with keynotes, lightning talks and workshops around private, self-hosted cloud technologies.</p>
				<p class="section--paragraph">You can read a report of our last conference <a class="hyperlink" href="https://nextcloud.com/blog/significant-growth-at-nextcloud-conference-brought-150-customers-colleagues-and-friends-together/">in this blog</a> and if you'd like to join in 2018 - mark these dates in your calendar:</p>
				<h3>Augustus 23-30 2018 at the TU Berlin, Germany</h3>
				<a href="/conf" class="button button--blue button--large button--arrow">Learn more about the Nextcloud Conference</a>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/booth.jpg" style="width: 400px" title="" alt="" class="img-thumbnail alignright">
				<h2>Conferences, tradeshows and other events</h2>
				<p class="section--paragraph">Nextcloud is participating in trade shows and conferences to present our community and technology to visitors.<br/>
				Below is a list of tradeshows and conferences where Nextcloud is represented! If you have questions and would like to meet us at an event, check out this list and <a class="hyperlink" href="https://help.nextcloud.com/c/conference">let us know on the forums</a> you will be there.</p>

                <button  class="table-button" data-toggle="collapse" data-target="#2018">Events in 2018</button>
                <div id="2018" class="collapse in">
                <br>
                <table class="table table-striped">
					<tr>
						<th>Event</th>
						<th>Location</th>
						<th>Date</th>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://nextcloud.com/conf/">Nextcloud Conference 2018</a></td>
						<td>Berlin, Germany</td>
						<td>August 23-30</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://oscal.openlabs.cc/">Open Source Conference Albania</a></td>
						<td>Tirana, Albania</td>
						<td>May 19-20</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://linuxfestnorthwest.org/conferences/lfnw18">LinuxFest Northwest</a></td>
						<td>Bellingham, WA, USA</td>
						<td>April 28-29</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://2018.fossasia.org/">FOSS Asia 2018</a></td>
						<td>Singapore, Singapore</td>
						<td>March 22-25</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://chemnitzer.linux-tage.de">Chemnitzer Linux Tage 2018</a></td>
						<td>Chemnitz, Germany</td>
						<td>March 10-11</td>
					</tr>
                    <tr>
                        <td><a class="hyperlink" target="_blank" href="https://ffg.guug.de/programm-freitag/#D5">GUUG-Frühjahrsfachgespräch 2018</a></td>
                        <td>Leipzig, Germany</td>
                        <td>February 28-March 2</td>
                    </tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="http://fosdem.org/">FOSDEM 2018</a></td>
						<td>Brussels, Belgium</td>
						<td>February 3-4</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://www.univention-summit.com/">Univention Summit 2018</a></td>
						<td>Bremen, Germany</td>
						<td>February 1-2</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="http://cs3.cyfronet.pl/">CS3 cloud services workshop</a></td>
						<td>Krakow, Poland</td>
						<td>January 29-31</td>
					</tr>
				</table>
			</div>
            <br>
            <p class="section--paragraph">Is there a conference, trade show or other event close by and you want Nextcloud to be there? Please <a class="hyperlink" href="https://help.nextcloud.com/c/conference">get in touch</a> and let us know, we will do our best to help making it happen!</p>
            <p class="section--paragraph">Are you presenting about Nextcloud or running a booth at an upcoming event that should be listed here? Let us know  <a class="hyperlink" href="https://help.nextcloud.com/c/conference">on the forums</a>!</p>
            <button class="table-button" data-toggle="collapse" data-target="#2017">Events in 2017</button>
            <div id="2017" class="collapse">
            <br>
            <table class="table table-striped">
                <tr>
                    <th>Event</th>
                    <th>Location</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://events.ccc.de/congress/2017/wiki/index.php/Session:Nextcloud_End_to_End_Encryption">Chaos Communication Congress</a></td>
                    <td>Leipzich, Germany</td>
                    <td>December 26-29</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://allthingsopen.org/speakers/frank-karlitschek/">All Things Open</a></td>
                    <td>RALEIGH, NC, USA</td>
                    <td>October 23-24</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="http://www.stuttgarter-sharepointforum.de/seminartag-2017/">SharePoint Forum Stuttgart</a></td>
                    <td>Stuttgart, Germany</td>
                    <td>October 4</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="http://events.linuxfoundation.org/events/open-source-summit-north-america">Open Source Summit 2017 North America</a></td>
                    <td>Los Angeles, USA</td>
                    <td>September 11-14</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://conf.nextcloud.com/">Nextcloud Conference 2017</a></td>
                    <td>Berlin, Germany</td>
                    <td>August 22-29</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://www.bitkom.org/bfoss17/">Forum Open Source 2017</a></td>
                    <td>Berlin, Germany</td>
                    <td>June 20</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="http://www.ch-open.ch/events/open-cloud-day/detailed-program/">Open Cloud Day</a></td>
                    <td>Bern, Switzerland</td>
                    <td>June 14</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="http://sched.co/AOmp">Open Source Summit Japan</a></td>
                    <td>Tokyo, Japan</td>
                    <td>May 31-June 2</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://tnc17.geant.org">TNC17</a></td>
                    <td>Linz, Austria</td>
                    <td>May 29-June 2</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://events.opensuse.org/conference/oSC17/">openSUSE Conference</a></td>
                    <td>Nuremberg, Germany</td>
                    <td>May 26-28</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://eventyay.com/e/5642d9a1/">OpenTechSummit</a></td>
                    <td>Berlin, Germany</td>
                    <td>May 26</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://no-spy.org/">No-Spy conf</a></td>
                    <td>Stuttgart, Germany</td>
                    <td>May 19-21</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://oscal.openlabs.cc/">OSCAL'17</a></td>
                    <td>Tirana, Albania</td>
                    <td>May 13-14</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://conferences.oreilly.com/oscon/oscon-tx">OSCON</a></td>
                    <td>Austin, TX, USA</td>
                    <td>May 8-11</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://www.belug.de/">BeLUG</a></td>
                    <td>Berlin, Germany</td>
                    <td>May 3</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="http://foss-north.se/">foss-north</a></td>
                    <td>Gothenburgm Sweden</td>
                    <td>April 26</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://www.wikimedia.de/wiki/Ladies_that_FOSS">Ladies that FOSS</a></td>
                    <td>Berlin, Germany</td>
                    <td>April 19</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://cebit.de/en/">CeBIT</a></td>
                    <td>Hanover, Germany</td>
                    <td>March 23-24</td>
                <tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://fossasia.org/">FOSSASIA Summit</a></td>
                    <td>Singapore</td>
                    <td>March 17-19</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://chemnitzer.linux-tage.de/2017/en">Chemnitzer Linux Tage</a></td>
                    <td>Chemnitz, Germany</td>
                    <td>March 11-12</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="https://www.socallinuxexpo.org/scale/15x">SCALE 15x</a></td>
                    <td>Los Angeles, USA</td>
                    <td>March 2-5</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="http://www.messe-stuttgart.de/didacta/">didacta</a></td>
                    <td>Stuttgart, Germany</td>
                    <td>February 14-18</td>
                </tr>
                <tr>
                    <td><a class="hyperlink" target="_blank" href="http://fosdem.org/">FOSDEM 2017</a></td>
                    <td>Brussels, Belgium</td>
                    <td>February 4-5</td>
                </tr>
            </table>
            </div>
		</div>
	</div>
</section>
