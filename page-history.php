<?php get_template_part('templates/parts/title'); ?>

<!-- need to have this in-line css due to the php templating of the image -->
<style>
div.neutral {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/neutral.svg") no-repeat 1px 2px;
    }
div.inc {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/inc.svg") no-repeat 1px 2px;
    }
div.org {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/org.svg") no-repeat 1px 2px;
    }
div.release {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/release.svg") no-repeat 1px 2px;
    }
div.meeting {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/meeting.svg") no-repeat 1px 2px;
    }
div.press {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/press.svg") no-repeat 1px 2px;
    }
div.mobile {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/mobile.svg") no-repeat 1px 2px;
    }
div.desktop {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/desktop.svg") no-repeat 1px 2px;
    }
div.money {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/money.svg") no-repeat 1px 2px;
    }
div.github {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/github.svg") no-repeat 1px 2px;
    }
div.code {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/code.svg") no-repeat 1px 2px;
      }
div.office {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/office.svg") no-repeat 1px 2px;
    }
</style>


<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nextcloud-square-logo.png" alt="" title="nextcloud-square-logo" width="150" height="150" class="alignleft thumbnail size-thumbnail wp-image-3421" />
<p>Nextcloud gives you universal access to your files through a web interface or WebDAV. It also provides a platform to easily view & sync your contacts, calendars and bookmarks across all your devices and enables basic editing right on the web.
Installation has minimal server requirements, doesn’t need special permissions and is quick. Nextcloud Server is extendable via a simple but powerful API for applications and plugins.</p>
<p>Nextcloud started as ownCloud with a <a href="https://www.youtube.com/watch?v=5IdMWxtMMB8">keynote by Frank Karlitschek</a> at Camp KDE’10 where he talked about the need of a self-controlled free and open source cloud.</p>
<p>Two years later, <a href="http://blog.karlitschek.de/2011/12/owncloud-inc-and-owncloud-community.html">Frank announced</a> the start of ownCloud, Inc. which was replaced 5 years later by <a href="http://nextcloud.com">Nextcloud GmbH</a></p>
<p>The company makes it possible for developers to work full time on Nextcloud, organizing Nextcloud events, marketing Nextcloud to a wider audience and supporting companies, governments and schools in their Nextcloud deployments.</p>
<p>The business model of Nextcloud GmbH is very similar to other successful Open Source companies, offering services and support around Nextcloud for the enterprise. The company is dedicated to working entirely in the open, accelerating development in the areas of its customers' needs while enabling a completely open development process where everybody can contribute.</p>

<h1>Nextcloud History Timeline</h1>

<ul class="new-timeline">

<!-- 2016  -->
  <li><div class="tldate"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/2016.svg" alt="Picture"></div></li>
  <li class="new-timeline tl-image-400">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Nextcloud replaces ownCloud</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> June 2016</small></p>
      </div>
      <div class="tl-body">
        <p>Frank and other core ownCloud contributors announce they will for ownCloud and start the Nextcloud company (<a href="https://nextcloud.com/blog/who-is-nextcloud/">announcement blog</a>)</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-400">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 9.0 released</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> March 2016</small></p>
      </div>
      <div class="tl-body">
        <p>introducing improved scalability (worked on with CERN), federation and collaboration tools including comments and tags (<a href="https://owncloud.org/blog/owncloud-server-9-0-released/">announcement</a>)</p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/g3b0XDpcvuc?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </li>
  <li class="">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Spreed Brings Private Video Calls to ownCloud</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2016</small></p>
      </div>
      <div class="tl-body">
        <p>A 2.5 pound (1.1kg) aluminum cube with an oDroid and some custom hardware <a href="https://owncloud.org/blog/spreed-brings-private-video-calls-to-owncloud/">integrates ownCloud with the spreed webconferencing software</a>, aiming at consumers and SMB.</p>
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/history/spreed.png" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/spreed-wee.jpg" style="width: 100%" alt="group photo" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-400">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud grows to 8 million users</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> January 2016</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.org/blog/owncloud-grows-to-8-million-users/">details in the blog post</a></p>
      </div>
    </div>
  </li>
  
<!-- 2015 -->
  <li><div class="tldate"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/2015.svg" alt="Picture"></div></li>
  
	<li class="">
		<div class="tl-circ github"></div>
		<div class="new-timeline-panel">
		<div class="tl-heading">
			<h4>End of 2015 statistics</h4>
		</div>
		<div class="tl-body">
			<p>codebase grown to 2.4 million LOC</br>
				average of 84 contributors/month</br>
				estimated <a href="https://owncloud.org/blog/owncloud-grows-to-8-million-users/">8 million users worldwide</a>
			</p>
		</div>
		</div>
	</li>
  
    <li class="new-timeline-inverted">
    <div class="tl-circ desktop"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud Collaborates with Collabora and Western Digital</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> December 2015</small></p>
      </div>
      <div class="tl-body">
        <p>Western Digital approached ownCloud to <a href="https://owncloud.org/blog/western-digital-and-owncloud-team-up-to-bring-owncloud-to-home-users/">build a Raspberry Pi based private cloud storage</a> and Collabora wants to <a href="https://owncloud.org/blog/libreoffice-online-has-arrived-in-owncloud/">bring LibreOffice Online to ownCloud</a>.</p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/jPGBRu085Dw?rel=0" frameborder="0" allowfullscreen></iframe>
     </div>
    </div>
  </li>
  <li class="tl-image-400">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 8.2 released</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> October 2015</small></p>
      </div>
      <div class="tl-body">
        <p>introducing improved Design, new Gallery app, Notifications and file retention control for deletions and versions (<a href="https://owncloud.org/blog/owncloud-server-8-2-brings-renewed-user-interface-and-more-control/">announcement</a>)</p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/m1V71pCAsws?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted">
    <div class="tl-circ desktop"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Desktop Client 2.0 released</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2015</small></p>
      </div>
      <div class="tl-body">
        <p>introduces multiaccount support (<a href="https://owncloud.org/blog/owncloud-desktop-client-2-0-is-out-with-multi-account-support-and-more/">announcement</a>)</p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/PEJzj91MeKM?rel=0" frameborder="0" allowfullscreen></iframe>
     </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud, Inc. introduces Security Bug Bounty program</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2015</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/introducing-the-owncloud-security-bug-bounty-program/">announcement</a></p>
      </div>
    </div>
  </li>
  <li class="">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Second ownCloud Contributor Conference</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2015</small></p>
      </div>
      <div class="tl-body">
        <p>Almost 140 participants (<a href="https://owncloud.org/blog/owncloud-contributor-conference-well-underway/">overview blog</a>)</p>
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2015.jpg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2015_wee.jpg" style="width: 100%" alt="group photo" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-400">
    <div class="tl-circ code"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud Federated Cloud Sharing API available</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2015</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/announcing-the-federated-cloud-sharing-api/">announcement</a></p>
        <a href="https://owncloud.com/announcing-the-federated-cloud-sharing-api/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/misc/open-cloud-mesh.png" style="width: 100%" alt="Open Cloud Mesh" class="img-responsive" /></a>
    </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ code"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud picks up Smashbox from CERN</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> July 2015</small></p>
      </div>
      <div class="tl-body">
        <p>CERN developed a testing framework for ownCloud which was adopted for testing ownCloud. See this <a href="https://owncloud.org/blog/owncloud-cern-smashbox/">blog post with details</a>.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/cernbox_logo.png" style="width:80%" alt="Cernbox logo" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 8.1 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> July 2015</small></p>
      </div>
      <div class="tl-body">
        <p>introducing improved Documents, Release Channels, Encryption 2.0 (<a href="https://owncloud.org/blog/owncloud-8-1-raising-the-bar-on-security-and-performance/">announcement</a>)</p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/RrAhClhrRAc?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 8 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2015</small></p>
      </div>
      <div class="tl-body">
        <p>introducing Federated Cloud Sharing, improved search and favorites (<a href="https://owncloud.org/blog/faster-easier-file-sync-and-share-with-federated-self-hosted-owncloud-8-0/">announcement</a>)</p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/Dn_YJYFVrms?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200" >
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>SCIEBO launches</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2015</small></p>
      </div>
      <div class="tl-body">
        <p>aiming for up to 500,000 ownCloud users (<a href="https://owncloud.com/sciebo-germanys-largest-cloud-project-500000-users-launches-today/">announcement</a>)</p>
      </div>
    </div>
  </li>

  <li class="new-timeline-inverted tl-image-400">
    <div class="tl-circ press"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud rocked at FOSDEM and SCALE</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2015</small></p>
      </div>
      <div class="tl-body">
        <p>see the <a href="https://owncloud.org/blog/owncloud-at-fosdem-2015-and-scale13x/">events blogpost</a></p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/h5qX-HTHlEU?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </li>

<!-- 2014  -->
  <li><div class="tldate"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/2014.svg" alt="Picture"></div></li>
  
    <li class="new-timeline-inverted ">
    <div class="tl-circ github"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>End of 2014 statistics</h4>
      </div>
      <div class="tl-body">
        <p>codebase grown to 2.2 million LOC</br>
        average of 76 contributors/month</br>
	estimated over 1.6 million users wordwide
	</p>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ code"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Workshop at CERN</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2014</small></p>
      </div>
      <div class="tl-body"><p><a href="https://dragotin.wordpress.com/2014/11/27/workshop-at-cern/">blog about the visit</a> by Klaas Freitag</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/cernbox_logo.png" style="width: 80%" alt="CERNbox coolness" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ office"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>New office Nuremberg</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2014</small></p>
      </div>
      <div class="tl-body">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/Nuremberg_office.jpg" style="width: 100%" alt="Office in the making" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="tl-image-400">
    <div class="tl-circ mobile"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>iOS client open sourced</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2014</small></p>
      </div>
      <div class="tl-body">
        <p>See the <a href="https://owncloud.com/thanks-community-users/">announcement blog</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/iphone-ipad3.png" style="width: 75%" alt="iOS" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 7 Enterprise Edition</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2014</small></p>
      </div>
      <div class="tl-body">
        <p>introduces Universal File Access (<a href="https://owncloud.com/taking-owncloud-beyond-file-sync-share/">announcement</a>)</p>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ office"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>New office in Stuttgart</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2014</small></p>
      </div>
      <div class="tl-body">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/Stuttgart_office.jpg" style="width: 100%" alt="Work-in-progress" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-400">
    <div class="tl-circ office"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>opening of Berlin office</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2014</small></p>
      </div>
      <div class="tl-body">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/Berlin_office.jpg" style="width: 100%" alt="Berlin office" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>First ownCloud Contributor Conference</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2014</small></p>
      </div>
      <div class="tl-body">
        <p>100 participants (<a href="https://owncloud.org/blog/owncloud-contributor-conference-was-awesome/">conference report</a>)</p>
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2014.jpg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2014_wee.jpg" style="width: 100%" alt="group photo" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-400">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 7 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> July 2014</small></p>
      </div>
      <div class="tl-body">
        <p>introducing server-to-server sharing and improved user management (<a href="http://owncloud.org/blog/owncloud-7-released-with-more-sharing-and-control/">announcement</a>)</p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/xA3tfBTvH0c?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Stuttgart Meetup</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> May 2014</small></p>
      </div>
      <div class="tl-body">
        <p>Meetup at the office in Stuttgart</p>
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/conference/june2014.jpg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/june2014_wee.jpg" style="width: 80%" alt="group photo" class="img-responsive" /></a>
      </div>
    </div>
  </li>  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud and Red Hat partner up</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> April 2014</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/wow-look-us-scale/">Red Hat scalability demonstration</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/RedHat.jpg" style="width: 100%" alt="RH Logo" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ money"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud, Inc. closes 6.3 million Series A Funding Round</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> March 2014</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/owncloud-closes-6-3-million-series-funding-round/">Press announcement</a></p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted">
    <div class="tl-circ mobile"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Mobile libraries released under open license</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2014</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/libraries-free-public-shouldnt/">blog post</a></p>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ press"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud becoming big in Education</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2014</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/swiss-universities-turn-owncloud-file-sync-share/">blog post covering Swiss universities moving to ownCloud</a></p>
      </div>
    </div>
  </li>

  <!-- 2013  -->
  <li><div class="tldate"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/2013.svg" alt="Picture"></div></li>
  
    <li class="new-timeline-inverted">
    <div class="tl-circ github"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>End of 2013 statistics</h4>
      </div>
      <div class="tl-body">
        <p>codebase grown to 2 million LOC</br>
            average of 62 contributors/month</br>
            estimated over 1 million users worldwide
	</p>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 6 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> December 2013</small></p>
      </div>
      <div class="tl-body">
        <p>introducing improved design, activity feed, avatars, previews, conflict handling and more (<a href="http://karlitschek.de/2013/12/owncloud-6-is-here/">announcement</a>)</p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/70pCBnNPdew?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-400">
    <div class="tl-circ code"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud Documents launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> October 2013</small></p>
      </div>
      <div class="tl-body">
        <p><a href="http://karlitschek.de/2013/10/welcome-owncloud-documents/">announcement</a></p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/xsqSLeppxm0?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ office"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Opening of official Lexington office</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> September 2013</small></p>
      </div>
      <div class="tl-body">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/Lexington_office.jpg" style="width: 100%" alt="Painting the tables" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-400">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>TU Berlin Developer Meeting</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2013</small></p>
      </div>
      <div class="tl-body">
        <p>First time at the TU Berlin brought together 50 participants (<a href="https://owncloud.com/biggest-owncloud-developer-meeting-to-date/">blog</a>)</p>
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2013.jpg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2013_wee.jpg" style="width: 100%" alt="group pic" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 5 Enterprise Edition</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> July 2013</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/owncloud-enterprise-edition-5-is-here/">announcement</a></p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ desktop"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>GNOME integrates ownCloud in the desktop</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> March 2013</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/latest-gnome-ships-with-owncloud-support/">blog post</a></p>
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/history/evolution-owncloud-calendar.png" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/evolution-owncloud-calendar_wee.png" style="width: 100%" alt="GNOME-ownCloud ingegration" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 5 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> March 2013</small></p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/eVcGuB9zWQ0?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="tl-body">
        <p>introducing the trash bin and much security, stability and performance work (<a href="http://karlitschek.de/2013/03/owncloud-5-released-a-vision-realized-a-vision-expanded/">announcement</a>)</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>February developer meeting</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2013</small></p>
      </div>
      <div class="tl-body">
        <p>blog post <a href="https://owncloud.com/pizza-beer-bugs-and-polishing-welcome-to-the-latest-owncloud-developers-meeting/">about the pizza, beer, bugs and polishing</a></p>
      </div>
    </div>
  </li>


<!-- 2012 -->
  <li><div class="tldate"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/2012.svg" alt="Picture"></div></li>
  
  <li class="">
    <div class="tl-circ github"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>End of 2012 statistics</h4>
      </div>
      <div class="tl-body">
        <p>codebase grown to 773K LOC</br>
	average of 35 contributors/month</br>
	estimated over 650,000 users worldwide
	</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted">
    <div class="tl-circ money"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud, Inc. runs second funding round</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2012</small></p>
      </div>
      <div class="tl-body">
        <p>raising 2.5 million USD (<a href="https://owncloud.com/popular-open-source-sync-and-share-start-up-owncloud-closes-2-5-million-seed-round/">press release</a>, <a href="https://owncloud.com/boston-business-journal-owncloud-announces-second-seed-round-with-general-catalyst/">coverage</a>)</p>
      </div>
    </div>
  </li>
  <li class="">
    <div class="tl-circ code"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Integration with ownCloud</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2012</small></p>
      </div>
      <div class="tl-body">
        <p>starts to appear everywhere (<a href="https://owncloud.com/integration-is-the-sincerest-form-of-flattery/">blog post</a>)</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 4.5 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> October 2012</small></p>
      </div>
      <div class="tl-body">
        <p>introducing external storage, syncing contacts/calendar, presentation and video players (<a href="https://owncloud.com/another-great-community-effort-meet-owncloud-4-5/">announcement</a>)</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/oC4.5.png" style="width: 100%" alt="ownCloud 4.5 in action" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="tl-image-400">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Double EU/US sprint</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> October 2012</small></p>
      </div>
      <div class="tl-body">
        <p>Read the <a href="http://karlitschek.de/2012/09/worldwide-owncloud-developer-meeting-in-october/">announcement blog</a> and the <a href="http://blog.gapinthecloud.com/2012/11/08/great-lakes-owncloud-developer-meetup/">report from the US meetup</a> with four participants. There were over a dozen participants at the meetup in Europe.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/double-meetup.jpg" style="width: 100%" alt="US meetup" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ mobile"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud iOS app launched, Android app rebooted</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2012</small></p>
      </div>
      <div class="tl-body">
        <p>Read the <a href="https://owncloud.com/owncloud-apps-now-available-for-android-and-ios/">announcement blog</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/mobile-apps.png" style="width: 60%" alt="mobile apps" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Fourth Developer Meeting</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2012</small></p>
      </div>
      <div class="tl-body">
        <p>18 participants worked on ownCloud, as mentioned <a href="http://karlitschek.de/2012/09/worldwide-owncloud-developer-meeting-in-october/">in this blog post</a>.</p>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ code"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>All major distro's ship ownCloud</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> July 2012</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/third-major-distro-embraces-owncloud/">With the addition of Fedora</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/distros.jpg" style="width: 90%" alt="Distribution tuxes" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-400">
    <div class="tl-circ press"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Businessweek thinks ownCloud is 'hip'</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> June 2012</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/yep-were-hip/">Blog about coverage from Bloomberg, CMSWire and ReadWrite</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/bloomberg.png" style="width: 100%" alt="Bloomberg logo" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 4 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> May 2012</small></p>
      </div>
      <div class="tl-body">
        <p>introducing file encryption and versioning, LDAP and more (<a href="http://karlitschek.de/2012/05/owncloud-4-released/">announcement</a>)</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/oc4-versioning.png" style="width: 100%" alt="Versioning in action" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ desktop"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Desktop Sync Client released</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> April 2012</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://dragotin.wordpress.com/2012/04/26/owncloud-client-1-0-1/">1.0.1 announcement</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/client-1.0.2.png" style="width: 75%" alt="client 1.0.2" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Third developer meeting</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> April 2012</small></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/Third-meetup.jpg" style="width: 100%" alt="Meetup picture" class="img-responsive" />
      </div>
      <div class="tl-body">
        <p>19 participants (<a href="http://karlitschek.de/2012/04/what-a-weekend/">blog</a>)</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud Inc. First commercial offering</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> April 2012</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/owncloud-launches-commercial-offering-with-easy-to-use-desktop-clients-and-mobile-apps/">announcement</a></p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Partner program launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> March 2012</small></p>
      </div>
      <div class="tl-body">
        <p>First customer signed up, partners follow soon (<a href="https://owncloud.com/owncloud-launches-partner-program-announces-partnerships-across-the-globe/">announcement</a>)</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/partners.png" style="width: 100%" alt="oC partners" class="img-responsive" />
      </div>
    </div>
  </li>
    <li class="tl-image-200">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud Partners with Univention</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2012</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://owncloud.com/partnership-brings-secure-integrated-file-synch-and-share-to-univention-2/">press release</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/Univention.jpg" style="width: 100%" alt="Univention logo" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 3 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> January 2012</small></p>
      </div>
      <div class="tl-body">
        <p>introducing text editor, introduction of ownCloud apps, PDF viewer and photo gallery (<a href="http://karlitschek.de/2012/01/owncloud-3-released/">announcement</a>, <a href="https://owncloud.com/open-source-file-sync-and-share-project-adds-cloud-text-editing-and-more/">press release</a>)</p>
      </div>
    </div>
  </li>


<!-- 2011 -->
  <li><div class="tldate"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/2011.svg" alt="Picture"></div></li>

  <li class="">
    <div class="tl-circ github"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>End of 2011 statistics</h4>
      </div>
      <div class="tl-body">
        <p>codebase grown to 212K LOC</br>
	average of 12 contributors/month</br>
	estimated 350,000 users worldwide
	</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud, Inc. announced</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> December 2011</small></p>
      </div>
      <div class="tl-body">
        <p><a href="http://karlitschek.de/2011/12/owncloud-inc-and-the-owncloud-community/">Blog by Frank</a>, <a href="https://owncloud.com/popular-open-source-file-sharing-project-creates-commercial-entity-2/">press release</a>.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/ownCloudInc.png" style="width: 100%" alt="ownCloud, Inc." class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Second Developer meeting</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> October 2011</small></p>
      </div>
      <div class="tl-body">
        <p>7 participants got together in Zurich, hosted by <a href="https://github.com/FreeMinded">github.com/FreeMinded</a></p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 2.0 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> October 2011</small></p>
      </div>
      <div class="tl-body">
        <p>introducing calendar and contact syncing, sharing and a media player (<a href="http://karlitschek.de/2011/10/owncloud-2-is-released/">announcement</a>)</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/ownCloud-2.0.png" style="width: 100%" alt="ownCloud 2.0" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>First meeting Holger, Markus and Frank</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> July 2011</small></p>
      </div>
      <div class="tl-body">
        <p></p>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 1.2 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> April 2011</small></p>
      </div>
      <div class="tl-body">
        <p>introducing much improved UI and many bugfixes (<a href="https://dot.kde.org/2011/04/21/first-owncloud-sprint">announcement</a>).</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/ownCloud-1.1.png" style="width: 100%" alt="ownCloud 1.1" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>First developer meeting</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> April 2011</small></p>
      </div>
      <div class="tl-body">
        <p>5 participants. Work on ownCloud 2.0 started, building a framework for apps. Read the <a href="https://dot.kde.org/2011/04/21/first-owncloud-sprint">meeting report here</a>.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/firstmeetup.jpg" style="width: 80%" alt="first meetup" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="tl-image-400">
    <div class="tl-circ press"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>First ownCloud hosting provider</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2011</small></p>
      </div>
      <div class="tl-body">
        <p><a href="http://karlitschek.de/2011/02/owncloud-update/">blog by Frank</a></p>
      </div>
    </div>
  </li>


<!-- 2010 -->
  <li><div class="tldate"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/2010.svg" alt="Picture"></div></li>

  <li class="">
    <div class="tl-circ github"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>End of 2010 statistics</h4>
      </div>
      <div class="tl-body">
        <p>codebase grown to 70K LOC</br>
	average of 3 contributors/month</br>
        estimated tens of thousands of users already
	</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted ">
    <div class="tl-circ press"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>First major press coverage</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2010</small></p>
      </div>
      <div class="tl-body">
        <p><a href="https://lwn.net/Articles/394282/">lwn.net</a>, <a href="http://digitizor.com/2010/06/25/open-source-alternative-to-dropbox-owncloud-1-0-released/">digitizor</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/digitizor-lwn.png" style="width: 80%" alt="site logos" class="img-responsive" />        
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 1.1 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2010</small></p>
      </div>
      <div class="tl-body">
        <p>introducing user management and built in text viewer (<a href="http://karlitschek.de/2010/11/owncloud-1-1-released/">announcement</a>).</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted tl-image-200">
    <div class="tl-circ press"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud-in-a-box appliance launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> July 2010</small></p>
      </div>
      <div class="tl-body">
        <p><a href="http://blog.cornelius-schumacher.de/2010/07/owncloud-in-box.html">blog by Cornelius</a></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/owncloud-in-a-box.png" style="width: 100%" alt="ownCloud  in a box site" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="tl-image-400">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 1.0 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> June 2010</small></p>
      </div>
      <div class="tl-body">
        <p>introducing a web interface and webDAV, plugin system and notifications (<a href="http://karlitschek.de/2010/06/owncloud-1-0-is-here/">announcement</a>)</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/owncloud-1.0rc.png" style="width: 100%" alt="ownCloud 1.0" class="img-responsive" />
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted">
    <div class="tl-circ code"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 1.0 beta released</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> March 2010</small></p>
      </div>
      <div class="tl-body">
        <p><a href="http://karlitschek.de/2010/03/owncloud-development-started/">announcement</a></p>
      </div>
    </div>
  </li>
  <li class="tl-image-200">
    <div class="tl-circ org"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud project launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> January 2010</small></p>
      </div>
      <div class="tl-body">
        <p>At Camp KDE in San Diego by Frank Karlitschek</p>
        <iframe width="100%" height="240" src="https://www.youtube.com/embed/5IdMWxtMMB8?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </li>
</ul>




