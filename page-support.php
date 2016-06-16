<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="page-header">
	<h1>Where to find answers to your questions</h1>
</div>
<!-- <p>If you can not find the answers you are looking for <a href="https://docs.nextcloud.org" target="_blank">in our documentation</a>or our <a href="/faq" target="_blank">Frequently Asked Questions</a>, you can find help in our support channels. Depending on what you use Nextcloud for and how you use it, you can find resources to help you with your installation in different places.</p>-->
<p>The Nextcloud documentation:
<ul>
	<li><a href="<?php echo $DOCUMENTATION_ADMIN; ?>">Admin manual</a></li>
	<li><a href="<?php echo $DOCUMENTATION_USER; ?>">User manual</a></li>
	<li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>">Developer manual</a></li>
</ul>
</p>
<p>Use and enjoy the many apps from our built in app store, or find even more on <a href="https://apps.nextcloud.com" target="_blank">our app store</a>. Find <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation/apps_management_installation.html">documentation on handling Apps here</a>.</p>
<p>You can ask for help in our community support channels:
	<ul>
	    <li><a href="https://help.nextcloud.com/categories" target="_blank">the Nextcloud Forums</a></li>
	    <li><a href="irc://#nextcloud@freenode.net" target="_blank">the Nextcloud IRC chat channel</a> on freenode.net, also accessible via <a href="https://webchat.freenode.net/?channels=nextcloud" target="_blank">webchat</a></li>
 	    <li>You can ask over our social media, including in the <a href="https://plus.google.com/u/0/communities/103772002345255844369" target="_blank">Nextcloud Google Plus community</a>, the <a href="https://www.facebook.com/Nextcloud-1032807203462807/" target="_blank">Facebook page</a> or on <a href="https://twitter.com/search?q=%23nextcloud&src=typd" target="_blank">Twitter</a></li> 
<!-- 	    <li>Check out our documentation wiki page for <a href="https://github.com/nextcloud/documentation/wiki">edge cases and rare issues</a></li> -->
	    <li>Finally, you could report a issue at our <a href="https://github.com/nextcloud/core/blob/master/CONTRIBUTING.md#submitting-issues" target="_blank">bug trackers</a> if you think you found a bug in Nextcloud itself</li>

	</ul>
	<p>Please understand that all these channels essentially consist of users like you helping each other out. Consider helping others out where you can, to contribute back for the help you get. This is the only way to keep a community like Nextcloud healthy and sustainable!</p>
	<h2>Enterprise use</h2>
	<p>If you run Nextcloud in a mission critical environment with large numbers of users and big amounts of data and need the certainty of support from the experts behind the Nextcloud technology, a <a href="/enterprise/" target="_blank">Enterprise Subscription from Nextcloud</a> is available with email and phone support.</p>

<div class="wrap pad-bottom">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
                    <h2>Subscribe to our newsletter</h2>
                    Stay up to date with Nextcloud news - future plans for releases, events and development are covered monthly in our news letter.
		    <a href="https://newsletter.nextcloud.com/?p=subscribe&id=1" class="btn btn-block btn-primary btn-lg join-button">Subscribe to our<br />monthly newsletter!</a><br />
		</div>
	</div>
</div>



<!--

<p>Nextcloud is deployed in a wide variety of situations. Home users run it on a NAS or Raspberry Pi, using Calendar and Contact synchronization and many more of the <a href="https://apps.nextcloud.com" target="_blank">more than 200 community apps</a>. Enterprises, research institutions and government agencies deploy it on large server parks, requiring integration in existing enterprise infrastructure like SAML, SharePoint, Windows network drives, S3 and more. In every case, <a href="/faq/#install" target="_blank">Nextcloud Server is the same</a>.</p>
<p>We provide information on how to install and maintain Nextcloud for everybody <a href="htts://doc.nextcloud.org" target="_blank">in our documentation</a>. When more resources are needed, private users can find help in our <a href="/faq/#install" target="_blank">community help channels</a> while professional users benefit from <a href="http://nextcloud.com/resources" target="_blank">self help resources</a>, <a href="https://nextcloud.com/features" target="_blank">enterprise functionality</a> and different <a href="http://nextcloud.com/subscriptions" target="_blank">support options</a> from Nextcloud, Inc.</p>

<hr>

<h2>Where should I look?</h2>
<p>Not sure where to look? Find out below what your use case is and where to find the information you are looking for!</p>
  <table class="table table-striped">
    <tr>
      <td class="active" style="min-width:150px"></td>
      <td class="info" style="min-width:300px"><i class="icon-users"></i>&nbsp;&nbsp;Private use</td>
      <td class="info" style="min-width:300px"><i class="icon-briefcase"></i>&nbsp;&nbsp;Professional use</td>
    </tr>
    <tr>
      <td class="active">Server install</td>
      <td class="info">Own server, (Raspberry Pi, VPS, NAS) or rented space at an <a href="/providers" target="_blank">Nextcloud provider</a></td>
      <td class="info">Spread out over multiple servers for high availability and performance</td>
    </tr>
    <tr>
      <td class="active">Data stored</td>
      <td class="info">Private data from self, friends and family</td>
      <td class="info">Company, customer, client or student data</td>
    </tr>
    <tr>
      <td class="active">Storage</td>
      <td class="info">Local storage, Dropbox, my NAS, an FTP drive at university, ...</td>
      <td class="info">Our existing enterprise data storage solution (S3, SharePoint, OpenStack, ...)</td>
    </tr>
    <tr>
      <td class="active">Use case</td>
      <td class="info">Sync data to devices and share with friends and family</td>
      <td class="info">Make data available everywhere including employees, customers and partners</td>
    </tr>
    <tr>
      <td class="active">Used by</td>
      <td class="info">Maybe a dozen family members, friends and co-workers</td>
      <td class="info">Hundreds to hundreds of thousands of users authenticated by SAML, LDAP, Active Directory or other authentication service</td>
    </tr>
    <tr>
      <td class="warning">Where do I find what I need to keep Nextcloud running smoothly?</td>
      <td class="warning"><p>Find the knowledge you need to enjoy Nextcloud in the <a href="http://doc.nextcloud.org" target="_blank">documentation</a> and get more help from <a href="/faq/#install" target="_blank">other community resources</a> like social media, forum, IRC chat and so on.</p>
      <p>Use and enjoy the many apps from our built in app store, or find even more on <a href="https://apps.nextcloud.com" target="_blank">our app store</a>. Find <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation/apps_management_installation.html">documentation on handling Apps here</a>.
      </td>
      <td class="warning"><p>Find what you need to tune Nextcloud performance and meet business requirements in our <a href="http://doc.nextcloud.org" target="_blank">documentation</a> as well as the <a href="http://nextcloud.com/resources" target="_blank">resources provided by Nextcloud, Inc.</a>
		<ul>
		      <li>If you need file sync and share as provided by Nextcloud Server and want the confidence of knowing that your Nextcloud deployment is backed by technical expertise with 8x5 mail support, the <a href="https://nextcloud.com/get-started-standard-subscription" target="_blank">Standard Subscription by Nextcloud, Inc.</a> is a cost-effective solution which may meet your requirements.</li>
		      <li>If you administer more complex deployments of Nextcloud, servicing hundreds to hundreds of thousands of users, handling terabytes to Petabytes of data, require high availability and multi-server scaling, need integration in Enterprise infrastructure and/or have specific needs around compliance in regulated industries, <a href="https://nextcloud.com/products/enterprise/" target="_blank">Enterprise Subscription from Nextcloud, Inc.</a> is available with 12x5 email and phone support, additional <a href="https://nextcloud.com/features" target="_blank">enterprise functionality</a> and deployment and branding tools and more. Nextcloud, Inc. can also work with you to develop <a href="https://nextcloud.com/subscriptions" target="_blank">custom support</a> that can include up to 24x7 coverage.</li>
		      </ul>
		</p>
      </td>
    </tr>
  </table>
-->
