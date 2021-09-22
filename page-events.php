<head>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pages/events.css?v=1">
<script>
require(["require.config"], function() {
	require(["bootstrap"])
});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/events-small.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/events-small.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/events-small.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/events-small.jpg">
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
		<a href="<?php echo home_url('events/meetups') ?>">Meetups</a>&nbsp;&nbsp;
		|&nbsp;&nbsp;<a href="<?php echo home_url('events/conference-program') ?>"><?php echo $l->t('Events Program');?></a>
	<!--     |&nbsp;&nbsp;<a href="<?php echo home_url('events/contactform') ?>">Contact</a> -->
	</div>
</div>

<section class="events">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="section--paragraph"><?php echo $l->t('Are you interested in meeting fellow Nextcloud users and contributors');?> (<a class="hyperlink" href="<?php echo home_url('contributors') ?>">Nextclouders</a>, <?php echo $l->t('as we lovingly call ourselves');?>)? <?php echo $l->t('You have come to the right place! The Nextcloud community organizes and participates in many events around the globe and here you can find details on where you can meet us and how to organise your own event and become a member of the most active file sync and share open source community!');?></p>
				<div class="alignright"><a class="overlay-trigger"  href="<?php echo get_template_directory_uri(); ?>/assets/img/events/fosdem18.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/fosdem18.jpg" style="width: 400px" title="" alt="" class="img-thumbnail"></a>
				<p class="text-center"><?php echo $l->t('Our awesome team at FOSDEM 2018!');?></p></div>
				<h2><?php echo $l->t('Meetups');?></h2>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud community members get together in meetups to learn, share ideas and work on Nextcloud. Meetups are informal meetings which are typically held in the evening and can be focused on development, user or business topics. You can take part as a speaker, participant or promoter. Meetups are typically held once a month and are open to anyone. You can find the meetups managed on our discourse forum.');?></p>
				<p class="section--paragraph"><?php echo $l->t('Find the next Meetup dates and more on');?> <a class="hyperlink" target="_blank" href="https://help.nextcloud.com/c/events/25">help.nextcloud.com</a></p>
				<div class="row" style="text-align: center">
					<p class="section--paragraph"><a target="_blank" href="https://help.nextcloud.com/c/events/25" class="btn btn-lg btn-default">
					<i class="icon-group"></i> <?php echo $l->t('Join a Meetup!');?></a>
					<a target="_blank"  href="<?php echo home_url('events/meetups') ?>" class="btn btn-lg btn-default">
					<i class="icon-lightbulb-o"></i> <?php echo $l->t('Organize a Meetup!');?></a></p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2019.jpg" style="width: 400px" title="" alt="" class="img-thumbnail alignright overlay-trigger">
				<h2>Nextcloud Conference</h2>
				<p class="section--paragraph"><?php echo $l->t('The most exciting event on the yearly calendar for Nextcloud is of course our very own Nextcloud Conference! Over 300 Nextcloud community members get together for a full week. During week days, we write and discuss code while on the weekend we have an exciting, educational and inspirational program with keynotes, lightning talks and workshops around private, self-hosted cloud technologies.');?></p>
				<p class="section--paragraph"><?php echo $l->t('You can read a report of our last conference');?> <a class="hyperlink" href="https://nextcloud.com/blog/massive-series-of-announcements-over-weekend-from-nextcloud-conf-event-continues/"><?php echo $l->t('in this blog');?></a> <?php echo $l->t('and if you would like to join in 2021 - stay tuned, due to COVID we have no date yet.');?></p>
// 				<h3>October 3-4 - online!</h3>
				<a href="<?php echo home_url('conf') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Learn more about the Nextcloud Conference');?></a>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/booth.jpg" style="width: 400px" title="" alt="" class="overlay-trigger img-thumbnail alignright">
				<h2><?php echo $l->t('Conferences, tradeshows and other events');?></h2>
				<p class="section--paragraph"><?php echo $l->t('Nextcloud is participating in trade shows and conferences to present our community and technology to visitors.');?><br/>
				<?php echo $l->t('Below is a list of tradeshows and conferences where Nextcloud is represented! If you have questions and would like to meet us at an event, check out this list and');?> <a class="hyperlink" href="https://help.nextcloud.com/c/conference"><?php echo $l->t('let us know on the forums');?></a><?php echo $l->t(' you will be there.');?></p>
            <a class="button button--blue" href="#2021" data-toggle="collapse"><?php echo $l->t('Events in 2021');?></a>
                <div id="2021" class="collapse in">
                <br>
                <table class="table table-striped">
					<tr>
						<th>Event</th>
						<th>Location</th>
						<th>Date</th>
					</tr>
                     <tr>
						<td><a class="hyperlink" target="_blank" href="https://fosdem.org/2021/">FOSDEM</a></td>
						<td>Online/Brussels, Belgium</td>
						<td>February 6-7</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://www.univention-summit.de/">Univention Summit</a></td>
						<td>Online/Bremen, Germany</td>
						<td>January 28-29</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="http://www.cs3community.org/2021/">CS3 cloud services workshop</a></td>
						<td>Online</td>
						<td>January 25-29</td>
					</tr>
				</table>
			</div>
            <a class="button button--blue" href="#2020" data-toggle="collapse">Events in 2020</a>
                <div id="2020" class="collapse in">
                <br>
                <table class="table table-striped">
					<tr>
						<th>Event</th>
						<th>Location</th>
						<th>Date</th>
					</tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://nextcloud.com/conf/">Nextcloud Conference</a></td>
						<td>Online/Berlin, Germany</td>
						<td>October 3-4</td>
                    </tr>
                     <tr>
						<td><a class="hyperlink" target="_blank" href="https://fosdem.org/2020/">FOSDEM</a></td>
						<td>Brussels, Belgium</td>
						<td>February 1-2</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://www.univention-summit.de/">Univention Summit</a></td>
						<td>Bremen, Germany</td>
						<td>January 23-24</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://cs3.deic.dk/">CS3 cloud services workshop</a></td>
						<td>Copenhagen, Denmark</td>
						<td>January 27-29</td>
					</tr>
				</table>
			</div>
			<br/>
            <p class="section--paragraph"><?php echo $l->t('Is there a conference, trade show or other event close by and you want Nextcloud to be there?');?> <a class="hyperlink" href="https://help.nextcloud.com/c/conference"><?php echo $l->t('Please get in touch');?></a> <?php echo $l->t('and let us know, we will do our best to help making it happen!');?></p>
            <p class="section--paragraph"><?php echo $l->t('Are you presenting about Nextcloud or running a booth at an upcoming event that should be listed here? Let us know');?> <a class="hyperlink" href="https://help.nextcloud.com/c/conference"><?php echo $l->t('on the forums');?></a>!</p>
                <a class="button button--blue" href="#2019" data-toggle="collapse"><?php echo $l->t('Events in 2019');?></a>
                <div id="2019" class="collapse">
                <br>
                <table class="table table-striped">
					<tr>
						<th>Event</th>
						<th>Location</th>
						<th>Date</th>
					</tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://nextcloud.com/blog/nextcloud-team-coming-soon-to-nurnberg-paris/">Open Source Summit</a></td>
						<td>Paris, France</td>
						<td>December 10&11</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://www.jres.org/en/home/">JRES</a></td>
						<td>Dijon, France</td>
						<td>December 3-6</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://www.storage-forum.de/">Storage-Forum</a></td>
						<td>Leipzig, Germany</td>
						<td>November 28-29</td>
                    </tr>
                     <tr>
						<td><a class="hyperlink" target="_blank" href="https://nextcloud.com/blog/nextcloud-onlyoffice-webinar-this-wednesday/">Nextcloud - ONLYOFFICE webinar</a></td>
						<td>Worldwide</td>
						<td>November 20</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://www.it-sa.de/">it-sa</a></td>
						<td>Nuremberg, Germany</td>
						<td>October 8-10</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://nextcloud.com/conf">Nextcloud Contributor Week</a></td>
						<td>Berlin, Germany</td>
						<td>September 13 & 16-20</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://nextcloud.com/training">Nextcloud Enterprise Day</a></td>
						<td>Berlin, Germany</td>
						<td>September 16</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://nextcloud.com/conf/">Nextcloud Conference</a></td>
						<td>Berlin, Germany</td>
						<td>September 14-15</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" https://nextcloud.com/blog/upcoming-nextcloud-contributorweek-june-24-28/">Nextcloud Contributor Week</a></td>
						<td>Stuttgart, Germany</td>
						<td>June 24-28</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://www.infosecurityeurope.com/">Infosecurity Europe</a></td>
						<td>London, UK</td>
						<td>June 4-6</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://opentechsummit.net/">OpenTechSummit</a></td>
						<td>Berlin, Germany</td>
						<td>May 29-30</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" https://www.storage2day.de/</a></td>
						<td>Heidelberg, Germany</td>
						<td>May 17-19</td>
                    </tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" https://no-spy.org/">No-Spy Konferenz</a></td>
						<td>Stuttgart, Germany</td>
						<td>May 17-19</td>
                    </tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://nextcloud.com/blog/the-contributor-week-is-over-time-to-plan-for-the-next-one/">Nextcloud Contributor Week</a></td>
						<td>Stuttgart, Germany</td>
						<td>March 10-15</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://nextcloud.com/training">Nextcloud Enterprise Day</a></td>
						<td>Stuttgart, Germany</td>
						<td>March 12</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://www.socallinuxexpo.org/scale/17x">SCALE 17x</a></td>
						<td>Pasadena, USA</td>
						<td>March 7-10</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="http://www.didacta-cologne.com/didacta/index-3.php">Didacta</a></td>
						<td>Cologne, Germany</td>
						<td>February 19-23</td>
					</tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://fosdem.org/2019/">FOSDEM</a></td>
						<td>Brussels, Belgium</td>
						<td>February 2-3</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://www.univention-summit.de/">Univention Summit</a></td>
						<td>Bremen, Germany</td>
						<td>January 31-February 1</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://cs3.infn.it/home.html">CS3 cloud services workshop</a></td>
						<td>Rome, Italy</td>
						<td>January 8-30</td>
					</tr>
				</table>
			</div>
            <a class="button button--blue" href="#2018" data-toggle="collapse"><?php echo $l->t('Events in 2018');?></a>
                <div id="2018" class="collapse">
                <br>
                <table class="table table-striped">
					<tr>
						<th>Event</th>
						<th>Location</th>
						<th>Date</th>
					</tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://events.ccc.de/congress/2018/wiki/index.php/Assembly:Nextcloud">Chaos Communication Congress</a></td>
						<td>Leipzig, Germany</td>
						<td>December 27-30</td>
					</tr>
                    <tr>
						<td><a class="hyperlink" target="_blank" href="https://www.opensourcesummit.paris/">Paris Open Source Summit</a></td>
						<td>Paris, France</td>
						<td>December 5-6</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://www.it-sa.de/">IT-Security Messe & Congress</a></td>
						<td>Nuremberg, Germany</td>
						<td>October 9-11</td>
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
						<td><a class="hyperlink" target="_blank" href="https://www.his.se/en/Research/informatics/Software-Systems-Research-Group/Article20180514/">Seminar at University of Skövde</a></td>
						<td>SKÖVDE, Sweden</td>
						<td>May 14</td>
					</tr>
					<tr>
						<td><a class="hyperlink" target="_blank" href="https://opentechsummit.net/">Open Tech Summit</a></td>
						<td>Berlin, Germany</td>
						<td>May 10</td>
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
            <a class="button button--blue" href="#2017" data-toggle="collapse"><?php echo $l->t('Events in 2017');?></a>
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
                    <td>Leipzig, Germany</td>
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
            <a id="ts"></a>
            <h2>Travel support</h2>
            <p class="section--paragraph"><?php echo $l->t('For the Conference, the Contributor Week and some events where we can use the help of some volunteers, we offer travel support. With this program, we cover 80% of your travel and hotel costs for a conference, and ask you to volunteer at the event. Please note that we can only offer travel support to a limited amount of our community members, so keep in mind that if we help cover your costs, the costs of another community member who may need it more than you can\'t be covered - only request travel support if you need it! If you want travel support, fill in');?> <a href="https://cloud.nextcloud.com/apps/forms/7x6yQHNpZDbgC3EP"><?php echo $l->t('this form.');?></a></p>
		</div>
	</div>
</section>
<?php require get_template_directory().'/overlay.php'; ?>
