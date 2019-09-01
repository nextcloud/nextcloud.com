<div class="page-header">
	<h1>Frequently Asked Questions</h1>
</div>
<h2>Index</h2>
<a href="#whatis">Explain to me in simple terms what Nextcloud is and why I would want to use it, please?</a>
<h4>Running Nextcloud</h4>
<ul>
	<li><a href="#install">Where do I find information on how to use/install Nextcloud Server?</a></li>
	<li><a href="#channels">I have a problem with my Nextcloud, what do I do?</a></li>
	<li><a href="#chat">Where can I discuss ideas with other Nextcloud users?</a></li>
	<li><a href="#upgrade">I want to upgrade my Nextcloud installation to the new release, how do I do that?</a></li>
	<li><a href="#upgradeyet">Is it safe to upgrade to the new release?</a></li>
	<li><a href="#decentralization">If I have my Nextcloud server hosted, does that still help me protect my privacy?</a></li>
</ul>
<h4>Technology</h4>
<ul>
	<li><a href="#rsync">Why don't you just use rsync?</a></li>
	<li><a href="#language">Why is Nextcloud Server written in PHP and not in my favorite language?</a></li>
	<li><a href="#protocol">Why do you use HTTP and not my favorite protocol?</a></li>
	<li><a href="#android">Why does the calendar/contacts app not work with Android?</a></li>
	<li><a href="#mobilefeatures">Why does the Android/iOS mobile app not support my favorite feature?</a></li>
	<li><a href="#calendarcontacts">Why are Calendar and Contacts (or another app) not shipped with the zip file, are they not part of Nextcloud?</a></li>
	<li><a href="#security">How Secure is Nextcloud?</a></li>
	<li><a href="#security2">Does the long list of security advisories mean Nextcloud is less secure than other solutions?</a></li>
	<li><a href="#encryption">Are files encrypted during sync?</a></li>
	<li><a href="#encryption2">Does Nextcloud support encrypting files on the server?</a></li>
	<li><a href="#backup">Can I use Nextcloud as a backup solution?</a></li>
	<li><a href="#conflict">Why do I sometimes get conflict files and messages while syncing?</a></li>
	<li><a href="#partialsyncing">Does Nextcloud use delta-sync (only syncing file changes)?</a></li>
	<li><a href="#deduplication">Does Nextcloud do file de-duplication?</a></li>
	<li><a href="#syncspeed">Why is Nextcloud syncing not faster?</a></li>
	<li><a href="#scaling">Does Nextcloud scale to large deployments?</a></li>
	<li><a href="#notcrippled">Is Nextcloud Server limited to a certain number of users or files and do I have to purchase something to get a 'full' version?</a></li>
</ul>
<h4>Nextcloud Community</h4>
<ul>
	<li><a href="#communitylocation">Where is the Nextcloud community hosted?</a></li>
	<li><a href="#communitysize">How big is the Nextcloud Community?</a></li>
	<li><a href="#howitstarted">How did Nextcloud get started?</a></li>
	<li><a href="#getinvolved">How can I get involved in the Nextcloud Community?</a></li>
	<li><a href="#notechknowledge">But what if I'm not very technical?</a></li>
	<li><a href="#mobile">How can I get started writing mobile (Android, iOS) clients or third party (web) apps?</a></li>
	<li><a href="#appslocation">Where can I find Nextcloud Server apps?</a></li>
	<li><a href="#communityswag">Where can I find Nextcloud t-shirts, stickers and other swag?</a></li>
</ul>
<h4>Legal</h4>
<ul>
	<li><a href="#modifynextcloud">Can I modify Nextcloud and run it on my website for others to use/access?</a></li>
	<li><a href="#closedapps">Can I write closed source apps for Nextcloud Server?</a></li>
	<li><a href="#trademark">Can I use the Nextcloud logo on my website, for my Nextcloud app or client, or promotional materials?</a></li>
	<li><a href="#copyrightviolation">I want to report a copyright infringement or other legal matter on a site that mentions use of Nextcloud.</a></li>
</ul>
<h4>Nextcloud for professional use</h4>
See also the <a href="https://nextcloud.com/faq" target="_blank">Nextcloud Enterprise FAQ</a>.
<ul>
	<li><a href="#professionaluse">Can I use Nextcloud in professional, large scale deployments?</a></li>
	<li><a href="#professionaluse">What resources exist to support my deployment?</a></li>
	<li><a href="#entcomparison">What is the Standard Subscription and Enterprise Subscription?</a></li>
	<li><a href="#bestedition">Which solution is best for me?</a></li>
	<li><a href="#communityandenterprise">How do the community and company work together?</a></li>
	<li><a href="#entcustomers">What customers does Nextcloud, Inc. have?</a></li>
</ul>

<a name="whatis"></a>
<h2>What is this Nextcloud thing? Why would I care?</h2>
<p>Nextcloud is a file sharing server that puts the control and security of your own data back into your hands.</p>
<p>Today, most people have their digital life stored on online servers from various companies. Think Google, Apple, Facebook, Twitter, Dropbox, Instagram and many others. You uploaded your pictures, your music, your daily ramblings, happy and sad thoughts. You use these services to share with others, to send and receive emails, store address books, play music and video, have your files available on any device you want. All great features, no doubt! When your phone breaks, just having to log in to the new one to find all your pictures, contacts and other settings is an amazing and reassuring capability brought by these services, often (perhaps incorrectly) called 'the cloud'.</p>
<p>But you might wonder: "<em>Where is this data? Who has access to it?</em>"</p>
<p>These questions have become more pressing since <a href="http://arstechnica.com/series/nsa-leaks/" target="_blank">the revelations that our own government is spying on us, and collecting and snooping into virtually all of our online communications.</a>. We know that foreign and our own governments have access. Criminals and large corporations, too. This knowledge about us can be used and abused in many ways, for financial gain, for control, for harmless and harmful fun.</p>
<p>Many people prefer to have more control over who gets to see the photos they send to their spouse or friends, who gets to read their bank account statements or determine their political allegiance. Or know where they are - as mobile phones track your location pretty much continuously...</p>
<p>This is where Nextcloud and similar technologies come in. Nextcloud offers you the option to take back your data. Once you install it on a server (or let somebody do that for you! Decentralization is an important tool to protect privacy) you can access your private data in an easy to use web interface or synchronize it with your devices like Android and iPhones. You can store your contacts and calendar as well as files on Nextcloud and, through the many Nextcloud apps, use it to store passwords, play music and movies and so on. It also allows you to securely share with other people and collaborate on documents. Learn more <a href="/athome">about Nextcloud features for home users here</a>.</p>
<p>All this is free, as Nextcloud is available under an '<em>open source license</em>', which gives you the right to examine, share <strong>and</strong> modify it. Nextcloud is developed by an <a href="/contact">international community</a> of both paid and volunteer contributors and <a href="/contribute">you can get involved, too</a>.</p>
<h3>Things Nextcloud does not do</h3>
<p>Note that Nextcloud is NOT a backup tool: the desktop client, for example, will synchronize the contents of a local folder with the server. That works for file modifications and additions, but also deletions. If you delete a file on the server, it gets deleted on all devices that you installed the client on! And if you delete a file on the client, it gets deleted on the server and then deleted on other clients that were syncing that file. Nextcloud does have a <strong>trash</strong> for deleted files and retains older <strong>versions of files</strong>, which means deleted or modified files can be brought back. But this functionality can be disabled by the system administrator and depending on the space usage settings, deleted or older versions of files get deleted over time. You should always backup your Nextcloud server!</p>
<p>Similarly, note that External Storage and the Server to Server sharing which Nextcloud supports, connects Nextcloud to an external storage like FTP or Samba, or to another Nextcloud server. Files will show up in your web interface and can be synced with the client. However, they are <strong>not replicated</strong> on your Nextcloud server! They are merely fetched whenever you request them in the web interface. Once the external storage disappears or the other Nextcloud server retracts your access, you can no longer access the files! Make a copy if you want to have them on your own Nextcloud server.</p>
<h2>See what Nextcloud can do in this video</h2>
<div class="row">
	<div class="col-md-8">
		<iframe width="95%" height="360" src="https://www.youtube.com/embed/g3b0XDpcvuc?rel=0" frameborder="0" style="margin-top:10px;" allowfullscreen></iframe>
	</div>
</div>

		</div>
<h2>Running Nextcloud</h2>

<a name="install"></a>
<h3>Where do I find information on how to use/install Nextcloud?</h3>
<ul>
	<li>You should start with the <a href="https://doc.nextcloud.org" target="_blank">Nextcloud Documentation</a></li>
	<li>There are a lot of tutorials and how-to's written for installing and managing Nextcloud, to be found all over the internet. We collect a list on <a href="https://github.com/nextcloud/core/wiki/Reviews-tutorials-and-videos-of-Nextcloud"  target="_blank">this page</a> and our <a href="https://www.youtube.com/playlist?list=PLtZe22ggl2YBi1u2dH0qg9fgnym5DwYbW" target="_blank">YouTube channel collects video tutorials</a> but if what you are looking for is not there, <a href="https://www.google.com/search?q=nextcloud+installation+tutorial" target="_blank">Google</a> or another search engine can find them easily.</li>
	<li>The Nextcloud forums have a <a href="https://forum.nextcloud.org/viewforum.php?f=17" target="_blank">special FAQ page</a> where each topic corresponds to typical mistakes or frequently occurring issues</li>
</ul>

<a name="channels"></a>
<h3>I have a problem, what do I do?</h3>
<ul>
	<li>If the <a href="https://doc.nextcloud.org" target="_blank">Nextcloud Documentation</a> does not help and <a href="https://www.google.com/search?q=nextcloud+installation+problem" target="_blank">Google</a> can't solve your problem either you should check out <a href="/support/">our support page</a>.</li>
	<li>If you are using Nextcloud in a business, educational setting or other professional or large scale deployments, note that the <a href="#entcomparison">Nextcloud, Inc.</a> offers support contracts as well as <a href="http://nextcloud.com/resources">resources</a> like white papers, webinars and a knowledge base to help successfully deploy and use Nextcloud in your business.</li>
</ul>

<a name="chat"></a>
<h3>Where can I discuss ideas with other Nextcloud users?</h3>
The best places for conversation are:
<ul>
	<li><a href="https://forum.nextcloud.org" target="_blank">the Nextcloud Forums</a></li>
	<li><a href="https://mailman.nextcloud.org/mailman/listinfo/user" target="_blank">the Nextcloud User mailing list</a></li>
</ul>
<p>If you have a feature request or proposal which you can support with code, <a href="/contribute/">check out our contribute page</a>. You can put feature requests in the <a href="https://github.com/nextcloud/core/issues">issue tracker</a> but please be aware that in open source projects like Nextcloud, the constraint is rarely ideas or awareness of what can be improved but rather time to work on them. <a href="/contribute/">Contributing</a> is the best way of making change happen!</p>
<p>Note that <a href="https://nextcloud.org/blog/introducing-bounty-source-for-nextcloud/">Bountysource</a> offers a way of backing feature requests with your wallet.</p>
<p>If you want to connect with other Nextcloud users and enthusiasts, check out our <a href="/promote">social media channels</a>.

<a name="upgrade"></a>
<h3>I want to upgrade my Nextcloud installation to the new release, how do I do that?</h3>
<ul>
	<li>The manual upgrade process is described in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>/maintenance/upgrade.html" target="_blank">Nextcloud Documentation</a>.</li>
	<li>If you installed Nextcloud using Linux distribution packages and added the repository, an update will get them. You can also manually grab the new versions from <a href="/install/" target="_blank">nextcloud.org/download</a></li>
	<li>The built in Update app will usually have new Nextcloud releases available for upgrade some time in the week after a major release.</li>
</ul>

<a name="upgradeyet"></a>
<h3>Is it safe to upgrade to the new release?</h3>
<p>All code entering Nextcloud has been reviewed twice as well as tested by both automated means and through the efforts of volunteers. Releases are done only when all issues we are aware of are fixed or can be mitigated easily. In short, Nextcloud releases are always as stable as we could make it without <em>your</em> help. If you want the guarantee that it will work in your specific situation, <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>testing">make sure you help test before a release is made</a> so your issue can be fixed in time.</p>
<p><strong>Why do we need your testing?</strong></p>
<p>In short: because Nextcloud is <em>yours</em>. Nextcloud is an <a href="http://en.wikipedia.org/wiki/Open_source">Open Source</a> product, following an open development model. That means that many different stakeholders, both commercial and private, contribute to its development and share responsibility for the final release. Nextcloud is thus neither owned nor controlled by any single entity.</p>
<p>By using Nextcloud, <em>you become part of the Nextcloud community</em>, sharing both ownership and responsibility for the product we collectively develop. Compare it to your responsibility for the functioning of your car: you regularly have to test it, or hire a garage for a checkup. It is yours, isn't it?</p>

<a name="decentralization"></a>
<h3>If I have my Nextcloud server hosted, does that still help me protect my privacy?</h3>
<ul>
	<li>Yes, it does. Decentralization helps protect your data by making it harder for an attacker to find, and less valuable if they do (decreasing motivation). Moreover, you get to choose where and with whom you host your data - so you can find a jurisdiction which protects you better, or host your data at a local company you trust. See <a href="https://nextcloud.org/blog/dont-be-caught-naked-in-the-cloud-decentralization-protects-our-data/" target="_blank">this blog post</a> for more details on this.</li>
</ul>
<h2>Technology</h2>
<a name="rsync"></a>
<h3>Why does Nextcloud use csync rather than rsync?</h3>
<ul>
	<li>rsync is a one-way syncing protocol. This means that if you have two servers and delete a file on one side, it will pop up again if you use rsync. To ensure old files get removed but new files added, and updated files overwritten, you need a N-to-N sync solution. Nextcloud uses csync for syncing, which also deals with conflicts in a smart way.</li>
</ul>

<a name="language"></a>
<h3>Why is Nextcloud Server written in PHP?</h3>
Nextcloud is for everybody. We picked PHP because:
<ul>
	<li>PHP runs anywhere and is supported everywhere. Even the cheapest hosting provider should support Nextcloud and PHP makes that possible.</li>
	<li>PHP is easy to learn which makes it easy for people to contribute. The ease of PHP also allows you to check the code that runs your Nextcloud and make changes that you need.</li>
</ul>
In short, PHP lowers the barrier for using, auditing, modifying and contributing to Nextcloud. And that is important!<br />
See more details in <a href="https://nextcloud.org/blog/nextcloud-and-php/" target="_blank">this blog about Nextcloud and PHP</a>.

<a name="protocol"></a>
<h3>Why do you use HTTP and not another protocol?</h3>
<ul>
	<li>HTTP goes through every firewall and proxy.</li>
</ul>

<a name="android"></a>
<h3>Why does the calendar/contacts app not work with Android?</h3>
<ul>
	<li>iOS has native ical/caldav support, Android does not. You have to use an Android app that does but unfortunately almost all apps we're aware of that support caldav/ical are paid. One open source client is <a href="https://github.com/rfc2822/davdroid" target="_blank">DAVdroid</a>. You can find a list of <a href="https://github.com/nextcloud/core/wiki/Apps" target="_blank">3rd-party apps which work with Nextcloud here</a>.</li>
</ul>

<a name="mobilefeatures"></a>
<h3>Why does the Android/iOS mobile app not support my favorite feature?</h3>
<ul>
	<li>The Android mobile app has automatic picture and video upload. Both mobile clients give access to your files and include selective sync for keeping some of your files up to date on the device. Other features are under development or provided by other apps (like calendar and contacts, see <a href="#android">previous FAQ item</a>). If you'd like to add features to the Android or iOS client, find the <a href="https://github.com/nextcloud/android/" target="_blank">Android sources here</a> and the <a href="https://github.com/nextcloud/ios" target="_blank">iOS sources here</a>. Legal notes: the Android app is under the GPLv2, the iOS app under the GPLv3. To contribute to either, you have to <a href="https://nextcloud.org/contribute/agreement/" target="_blank">sign a contributor agreement</a> or contribute your code under the <a href="http://opensource.org/licenses/MIT" target="_blank">MIT license</a>. For testing, we provide a <a href="https://nextcloud.org/contribute/iOS-license-exception/" target="_blank">iOS license exception</a> so you can run the iOS app on up to 100 devices.</li>
</ul>

<a name="calendarcontacts"></a>
<h3>Why are Calendar and Contacts (or another app) not shipped with the zip file, are they not part of Nextcloud?</h3>
<p>We have four types of apps: Core, Official, Approved and Experimental. To keep the official zip file of a reasonable size, we only ship the core functionality. Other apps are, however, just one click away!</p>
<p>This is what the four categories mean:
<ul>
	<li><strong>Core</strong> means part of Nextcloud core, like sharing, gallery, external storage, encryption. These are integral parts of the Nextcloud experience and problems in these apps will block releases. Nextcloud, Inc. offers support on these to customers and while not all core functionality is maintained by employees, Nextcloud, Inc. takes responsibility for stability and of the entirety of Nextcloud core.</li>
	<li><strong>Official</strong> are apps which are quite well maintained and important for Nextcloud users. They include Calendar and Contacts. Being 'official', we deeply care about them and will try to have them available for new releases on release day, but they are still <strong>developed by volunteers</strong>. This also means there is no commercial support available from Nextcloud, Inc. This often also means that it is not guaranteed that these apps work well on systems with large numbers of users or large amounts of data.</li>
	<li><strong>Approved</strong> means that an app won’t immediately eat your data, that we have made sure there are no security problems and the maintainers have worked with us to ensure that. No promises beyond these points!</li>
	<li><strong>Experimental</strong> covers the rest. These apps are neither checked for stability nor security problems and you should be careful when installing them - they might compromise your privacy, security or data integrity.</li>
</ul></p>
<p>Changes of status can happen following <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>general/publishing">the rules documented here</a>. In simple words, the better maintained an app is, the more fitting an '<strong>official</strong>' label is. If a company, be it Nextcloud, Inc. due to customer demand, or another company, decides to dedicate resources to maintaining an app, it could become part of core. Your help thus matters!</p>

<a name="security"></a>
<h3>How Secure is Nextcloud?</h3>
<ul>
	<li>Nextcloud supports HTTPS and offers server-side encryption. Nextcloud Server automatically generates a 4096-bit strong private/public key-pair for each user. Private keys are encrypted with the user’s login password and thus nobody can get at your data if you are not logged in on your Nextcloud server.</li>
	<li>Nextcloud is an open source project so all code is visible. We are committed to building secure code and work following the leading industry security practices. We employ a full-time security expert and do regular security audits on the code. Our <a href="https://hackerone.com/nextcloud">bug bounty program on hackerone</a> provides an opportunity for white hat hackers to get rewarded for responsible disclosure of Nextcloud vulnerabilities. We always welcome notifications of security issues, see <a href="https://nextcloud.org/security" target="_blank">nextcloud.org/security</a>.</li>
	<li>To learn a bit more about Nextcloud security, watch <a href="https://www.youtube.com/watch?v=iLJbMrLgowk&index=25&list=PLtZe22ggl2YCfEzrHbFCylXGLGYtsHm96" target="_blank">this technical talk at the Nextcloud Contributor Conference</a> and read <a href="https://nextcloud.org/blog/how-nextcloud-uses-encryption-to-protect-your-data/" target="_blank">this article about Nextcloud and encryption</a>.</li>
</ul>

<a name="security2"></a>
<h3>Does the long list of security advisories mean Nextcloud is less secure than other solutions?</h3>
Rather the opposite. It signals that Nextcloud is a mature project taking responsibility for its security.
<ul>
	<li>Nextcloud is being used by many large corporations in security sensitive situations (including banks and defense agencies), see <a href="#entcustomers">Nextcloud, Inc. customers</a> and has undergone independent security audits. As an open source project, it benefits from a <a href="#communitysize">large numbers of eyes</a> looking at its code.</li>
	<li>We are highly committed to full, yet responsible disclosure of security issues, which is why we <a href="https://nextcloud.org/security/advisories/">publish all potential security relevant issues</a> with a CVE. A <a href="http://en.wikipedia.org/wiki/Common_Vulnerabilities_and_Exposures">CVE</a> is an international standard in security and availability of Nextcloud CVE's means system administrators can easily see whether their infrastructure is vulnerable or not.</li>
	<li>No other open source file sync and share receives the scrutiny and security attention Nextcloud has. While a lower or higher number of CVE's does not directly say anything about security by itself, issuing CVE's is part of widely accepted responsible vendor security practice.</li>
</ul>

<a name="encryption"></a>
<h3>Are files encrypted during sync?</h3>
<ul>
	<li>Yes, we use TLS for sending and receiving files over the network so they are encrypted during transmission.</li>
</ul>

<a name="encryption2"></a>
<h3>Does Nextcloud support file encryption on the server?</h3>
<ul>
	<li>Yes, but the Encryption app is designed to protect your data on external storage, rather than on the server Nextcloud runs on. In the current design, the server always has the keys to the data. They are encrypted by your password, but you can't trust that it is as secure as client-side encryption. Nextcloud does not do client-side encryption because you can not have a web interface if the server can't read the files and the web interface (and sharing abilities!) are very central to Nextcloud. So you will always need to be able to trust the server if you want to 'own' your data. Read more <a href="https://nextcloud.org/blog/how-nextcloud-uses-encryption-to-protect-your-data/" target="_blank">in this article</a>.</li>
	<li>If you really want client-side encryption, we recommend you look for other solutions. Of course, if you are sufficiently knowledgeable and skilled, you would be more than welcome to improve on the file encryption technology. If you are interested in supporting or working on this feature, check out <a href="https://github.com/nextcloud/mirall/issues/275" target="_blank">github</a> for the latest state on the discussion about it and check out <a href="/contribute/" target="_blank">nextcloud.org/contribute</a> to get started.</li>
</ul>

<a name="backup"></a>
<h3>Can I use Nextcloud as a backup solution?</h3>
<p>No, Nextcloud is absolutely not a backup solution:
<ul>
	<li>Changes you make in one place are synchronized to other places which means that if you accidentally remove or overwrite a file on your local system, Nextcloud will remove it from the server.</li>
	<li>If a file get's corrupted at one place the corrupted file get distributed to other places.</li>
	<li>The 'previous files' and 'undelete' functionality of Nextcloud is merely meant as a convenience and should never be relied upon as a backup function. Algorithms are in place which clean up 'old files' and thus, changes will get lost over time.</li>
</ul>
<p>You should use a backup application to store the files in Nextcloud somewhere. The <a href="https://doc.nextcloud.org">Nextcloud documentation</a> has tips on how to back up Nextcloud.</p>

<a name="conflict"></a>
<h3>Why do I sometimes get conflict files and messages while syncing?</h3>
<ul>
	<li>A conflict may be caused by two or more users editing the same files at the same time or while on the road before the files are synced. We do not merge changes to files like version control systems like git do; we don't modify user files, ever. So you will get two files, the one that was synced to the server first and the one you had locally modified in the same time. You can compare the file changes by hand and delete the local file once you're sure you did not lose data.</li>
</ul>

<a name="partialsyncing"></a>
<h3>Does Nextcloud use delta-sync (only syncing file changes)?</h3>
<ul>
	<li>We introduced chunked, parallel up- and download with Nextcloud 7 and the Nextcloud 1.6 client. Syncing only file changes needs much deeper changes. It is on our roadmap, but won't be done soon. Find some <a href="https://dragotin.wordpress.com/2015/02/09/incremental-sync-in-nextcloud/" target="_blank">background on that decision here</a>. If you want to speed up the development of this feature by working on it, see <a href="https://github.com/nextcloud/mirall/issues/179" target="_blank">the github discussion</a>. If you really want this feature and would like to specifically fund work on it, see <a href="https://www.bountysource.com/issues/905030-sync-only-the-file-change-not-entire-file" target="_blank">the Bountysource page</a>.</li>
</ul>

<a name="deduplication"></a>
<h3>Does Nextcloud do file de-duplication?</h3>
<ul>
	<li>No, we think that that is the job of the file system. We do maintain versions of files as they are replaced and you may revert to older versions at any time.</li>
</ul>

<a name="syncspeed"></a>
<h3>Why is Nextcloud syncing not faster?</h3>
<ul>
	<li>The design of Nextcloud is constrained by two important features: scalability and reliability.
	<ul>
		<li>Nextcloud is designed to be very scalable, and be independent of the used storage system. We want it to work with terabytes of data and tens of thousands of users - and it does, organizations like CERN in Switzerland and big universities run Nextcloud with such amounts of data and users. The downside of this is that it is hard use 'checksums' to see if files are changed: imagine doing that on terabytes of data on an external storage! What is fast for a few gigabyte or a few thousand files is would break entirely once you add a large movie- or music database, or start pumping scientific data through the system.</li>
		<li>A second design goal of Nextcloud is reliability. We would rather be slower, but ensure no files are lost, than risk going fast-and-loose with user data. For example, the file-change-notifications on Linux and Windows are not 100% reliable in all cases, so just-to-be-sure we run a full file system scan periodically. Yes, that eats battery life, but it does ensure you do not lose any of your files!</li>
	</ul>
	This does not mean there is no room for improvement, we work very hard to make Nextcloud faster and every release introduces many performance improvements. Also, help is always welcome. Check out the <a href="https://github.com/nextcloud/mirall/" target="_blank">client code on github</a> if you are interested in the challenges of fast, scalable and reliable file syncing! See <a href="/contribute/" target="_blank">the contribute pages</a> for more information about getting involved.</li>
</ul>

<a name="scaling"></a>
<h3>Does Nextcloud scale to large deployments?</h3>
<ul>
	<li>Nextcloud can run on Raspberry Pi like development boards but is certainly not limited to low-end hardware. Worlds' largest on-premises cloud deployment services <a href="https://nextcloud.com/sciebo-germanys-largest-cloud-project-500000-users-launches-today/" target="_blank">500,000 students on Nextcloud</a> and terabytes of data are shared through Nextcloud at organizations like the  <a href="http://cernbox.web.cern.ch/" target="_blank">atom smashers at CERN</a>. Nextcloud founder Frank Karlitschek wrote a <a href="http://karlitschek.de/2015/03/scaling/" target="_blank">post about the scalability of Nextcloud</a>.</li>
	<li>Of course, it does require some tuning to adopt Nextcloud for large deployments. For best performance the architecture needs to incorporate some best practices. See our documentation on <a href="<?php echo $DOCUMENTATION_ADMIN; ?>/configuration_server/performance_tuning.html">performance tuning</a> and the pages on <a href="<?php echo $DOCUMENTATION_ADMIN; ?>/operations/scaling_multiple_machines.html">scaling across multiple machines</a>. See also <a href="https://nextcloud.com/whitepapers/">nextcloud.com/whitepapers</a> for some best practices and experiences from Nextcloud, Inc. customers. You can find excellent resources in other places online, like <a href="http://www.severalnines.com/blog/high-availability-file-sync-and-share-deploying-nextcloud-galera-cluster-mysql-and-glusterfs" target="_blank">this blog about a High Availability cluster with Galera for MySQL and glusterFS</a>, another one <a href="http://www.severalnines.com/blog/become-mysql-dba-blog-series-database-high-availability" target="_blank">from the same writers</a>, this <a href="http://zdevops.tumblr.com/post/53590343974/glustercloud-running-nextcloud-with-a-glusterfs" target="_blank">glusterFS and Nextcloud blog</a> and this post about <a href="http://arthur-schiwon.de/5-performance-tips-using-nextclouds-ldap-backend" target="_blank">making LDAP fast</a>.</li>
	<li>When multiple installations are an option due to geographical or task related separation, using the Federated Cloud Sharing functionality to run separate Nextcloud instances which link to each other can be helpful when scaling to hundreds of thousands of users.</li>
	<li>In general, scalability of Nextcloud goes up significantly in each release. For example, Nextcloud 8.1 can sustain over 50% more users on the same hardware as Nextcloud 8.0 could. If the ability to have many users on a single Nextcloud server is an important consideration, use the latest Nextcloud Server and client versions.</li>
	<li>Check out the <a href="https://github.com/nextcloud/core/" target="_blank">core code on github</a> if you are interested in the challenges of fast, scalable and reliable file syncing! See <a href="/contribute/">the contribute pages</a> for more information about getting involved.</li>
</ul>

<a name="notcrippled"></a>
<h3>Is Nextcloud Server limited to a certain number of users or files and do I have to purchase something to get a 'full' version?</h3>
<p>Nextcloud is open source, so artificial limitations have no place in it. It can sustain the same number of users, downloads or data as a version equipped with enterprise apps and a support contract.</p>

<h2>Nextcloud Community</h2>
<a name="communitylocation"></a>
<h3>Where is the Nextcloud community hosted?</h3>
<ul>
	<li>The Nextcloud code can be found at <a href="https://github.com/nextcloud" target="_blank">github.com/Nextcloud</a> and our website is on <a href="https://nextcloud.org" target="_blank">nextcloud.org</a></li>
</ul>

<a name="communitysize"></a>
<h3>How big is the Nextcloud Community?</h3>
<ul>
	<li>Nextcloud has an estimated <a href="https://nextcloud.org/blog/nextcloud-grows-to-8-million-users/" target="_blank">8 million users</a> and over 350 programmers contributed code in the last 12 months. Tens of thousands participate on our forums, mailing lists, translation and documentation tools, and IRC channels in testing, discussions, translation, documentation and so on. See <a href="http://blog.jospoortvliet.com/2014/08/nextcloud-numbers.html" target="_blank">this blog</a> for an analysis and dig into the statistics <a href="https://nextcloud.org/blog/announcing-nextcloud-community-statistics-provided-by-bitergia/" target="_blank">on Bitergia</a> so you can judge the health of our community yourself. We track the development of the Nextcloud user and contributor base on <a href="/history">our history page</a>.</li>
</ul>

<a name="howitstarted"></a>
<h3>How did Nextcloud get started?</h3>
<ul>
	<li>Nextcloud started with a keynote by Frank Karlitschek at Camp KDE’10 where he talked about the need for a self-controlled free and open source cloud. Two years later, Frank announced the start of Nextcloud, Inc. which is headquartered in Lexington, Massachusetts in the United States and Nuremburg, Germany. Find out more on <a href="/contribute/" target="_blank">our history page</a>.</li>
</ul>

<a name="getinvolved"></a>
<h3>How can I get involved in the Nextcloud Community?</h3>
<ul>
	<li>The best way to get started is to visit <a href="/contribute/" target="_blank">nextcloud.org/contribute</a>.</li>
</ul>

<a name="notechknowledge"></a>
<h3>But what if I'm not very technical?</h3>
<ul>
	<li>There are lots of ways you can contribute to Nextcloud. We have a need for developers, designers, event organizers, speakers, QA and more. It is all <a href="/contribute/" target="_blank">on the <em>contribute</em> page</a>!</li>
</ul>

<a name="mobile"></a>
<h3>How can I get started writing mobile (Android, iOS) clients or third party (web) apps?</h3>
<ul>
	<li>First of all, awesome you want to bring Nextcloud support to your app or build an app entirely for Nextcloud, rocking!</li>
	<li>If you're interested in writing an Android or iOS app with Nextcloud support, you can use our MIT licensed libraries on those platforms. Find them on GitHub: <a href="https://github.com/nextcloud/ios-library">iOS</a>, <a href="https://github.com/nextcloud/android-library">Android</a>. You can then use the <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>ios_library">iOS</a> and <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>android_library">Android</a> developer docs.</li>
	<li>To build a third party application accessing Nextcloud data through its external API, <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>core/ocs-share-api.html">find the documentation here</a>.
</ul>

<a name="appslocation"></a>
<h3>Where can I find Nextcloud apps?</h3>
<ul>
	<li>There is a large selection of built in and community-approved apps available for download from within the App management screen in your Nextcloud installation. Featuring apps like the Music app, the Calendar app and so on you can watch your movies, share your pictures and keep your bookmarks synced. Download is seamless (just 'enable' the app and wait while it is downloaded, installed and enabled) and upgrading is easy from the same screen.</li>
	<li>If the built in and approved apps are not enough, you can get more than 200 community and enterprise-developed Nextcloud apps at <a href="https://apps.nextcloud.com/" target="_blank">apps.nextcloud.com</a> that have been developed with our open API. You can find apps in all categories: multimedia, PIM, productivity, games, tools and more. Note that unlike the apps available for download from the App Management screen in Nextcloud, the apps on <a href="https://apps.nextcloud.com/" target="_blank">apps.nextcloud.com</a> are not extensively checked for safety and compatibility, so you should be careful with them. For this reason, we do not support automatic download and installation for these, but require users to download the apps and install them in their Nextcloud by hand.</li>
	<li>If you are looking for third-party apps that integrate Nextcloud in mobile and desktop applications, see our <a href="https://github.com/nextcloud/core/wiki/Apps" target="_blank">3rd-party apps</a> page.</li>
	<li>Building a new Nextcloud app is easy. If you're interested in developing your own Nextcloud app, see <a href="/contribute/" target="_blank">the contribute page</a>, where you can find a link to the latest App Development documentation.</li>
</ul>

<a name="communityswag"></a>
<h3>Where can I find Nextcloud t-shirts, stickers and other swag?</h3>
<ul>
	<li>Nextcloud has a store on <a href="http://www.cafepress.com/nextcloudshop" target="_blank">this page</a> where you can find posters, mugs, stickers, magnets, buttons, t-shirts and much more.</li>
	<li>If you are looking for materials for an Nextcloud event or to use to promote Nextcloud at a conference or trade show, see our <a href="/events" target="_blank">events pages</a> for information on what is available.</li>
</ul>

<h2>Legal</h2>
<p>DISCLAIMER: The answers below are general directions, <em>not</em> legal advice and we can not provide such. Contact a lawyer if you are unsure about any of this.</p>

<a name="modifynextcloud"></a>
<h3>Can I modify Nextcloud and run it on my website for others to use/access?</h3>
<p>Nextcloud Server is available <a href="http://www.gnu.org/licenses/agpl-3.0.html" target="_blank">under the AGPLv3</a>. In laymen terms (this is NOT legal advice!) the AGPL license grants you the right to run the Nextcloud code wherever and however you want, make modifications and additions and share these with anybody you like. The only limitation is that if you give others access to your Nextcloud (by giving them a user account or sharing files with them), you must also give them access to the source code; and the whole source (including your modifications) has to be under the AGPLv3 license.</p>
<p><strong>How to comply</strong></p>
<p>If you have made no modifications to the Nextcloud code, the easiest way to comply with the AGPL is to have a small link to nextcloud.org and note that users can find the code there.</p>
<p>If you have made modifications, contributing these to Nextcloud is sufficient from our point of view. If you don't want or can't do that, you have to provide a way for users to download the modifications you made to Nextcloud, including the modifications. Providing, upon request, a tarball, zip file or github repository is enough. Make sure they contain the copyright notice; the code has to be under the AGPLv3 or a compatible license like the <a href="http://opensource.org/licenses/MIT" target="_blank">MIT license</a>.</p>
<p>Some examples:</p>
<ul>
<li>Nextcloud apps (Nextcloud apps like the calendar or music app from <a href="http://apps.nextcloud.com" target="_blank">apps.nextcloud.com</a>, as you would write following <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/app/" target="_blank">the App Developer documentation</a>, using the public but internal API) are considered an integral part of Nextcloud; writing an Nextcloud app is thus considered modifying Nextcloud and your Nextcloud apps are subject to the requirements of the AGPLv3. The Nextcloud <a href="#entcomparison">Enterprise Edition</a> provides <a href="#closedapps">an exception</a> as it is available under a proprietary license.</li>
<li>External apps like mobile or desktop clients, or apps running on another server and otherwise not part of Nextcloud but using the external Nextcloud OCS API as <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/core/externalapi.html" target="_blank">you would find here</a> are NOT subject to the AGPLv3 and can be under any license you like.</li>
<li>Artwork is not subject to the AGPLv3: you can have a branded Nextcloud installation, with modified logo, colors etcetera. You do NOT have to release your logo or other artwork under the AGPLv3.</li>
<li>If you use Nextcloud yourself (as private user or company!) and do not give third parties access to its user interface or API's (like webDAV), the AGPLv3 sharing clause does not come into effect. In general, note that you are only ever obliged to share the original source <em>upon request</em> with a third party who has been given <em>access to your Nextcloud instance</em>. You must merely make sure that users are aware of this right.</li>
</ul>

<a name="closedapps"></a>
<h3>Can I write closed source or proprietary apps for Nextcloud Server?</h3>
<ul>
	<li>Yes, but following the requirements of the <a href="http://www.gnu.org/licenses/agpl-3.0.html" target="_blank">under the AGPLv3</a>, these can be distributed or made available to users outside of your household or organization only under the <a href="https://www.nextcloud.com" target="_blank">Nextcloud Enterprise Edition</a>, which supports integration with proprietary technologies. Contact <a href="https://nextcloud.com/contact/"target="_blank">Nextcloud, Inc.</a> for details.</li>
	<li>External apps like mobile or desktop clients (like those using the <a href="https://github.com/nextcloud/ios-library">iOS</a> or <a href="https://github.com/nextcloud/android-library">Android</a> Nextcloud libraries, <a href="https://nextcloud.com/nextcloud-open-sources-mobile-libraries/">which are MIT licensed</a>) or apps running on another server and otherwise not part of Nextcloud but using the external Nextcloud OCS API as <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/core/externalapi.html" target="_blank">you would find here</a> are NOT subject to the AGPLv3 and can be under any license you like.</li>
</ul>

<a name="copyrightviolation"></a>
<h3>I want to report a copyright infringement or other legal matter on a site that mentions use of Nextcloud.</h3>
<ul>
	<li>Nextcloud is an open-source project that can be easily hosted by any person allowing anybody to securely exchange files. Neither the Nextcloud open source project nor Nextcloud, Inc. exert any legal or technical control over those domains. If you found a copyright infringement on a domain other than <a href="http://nextcloud.org" target="_blank">nextcloud.org</a> or <a href="http://nextcloud.com" target="_blank">nextcloud.com</a>, please try to contact the domain owner. Nextcloud has no insight or control over Nextcloud instances.</li>
</ul>

<a name="trademark"></a>
<h3>Can I use the Nextcloud logo on my website, for my Nextcloud app or client, or promotional materials?</h3>
<ul>
	<li>The use of the Nextcloud trademark is governed by <a href="/trademarks">our trademark policy</a>. In short, we want to support you in promoting, using and building on Nextcloud but we also want to prevent confusion about the meaning of our logo and trademark and your use of it. Carefully read <a href="/trademarks">our trademark policy</a> before you use Nextcloud marks (like our logo or our name) on a website, app, flyer or anywhere else.</li>
</ul>

<h2>Nextcloud for professional use</h2>
<a name="professionaluse"></a>
<h3>Can I use Nextcloud in professional, large scale deployments?</h3>
<ul>
	<li>Absolutely. Nextcloud Server is built for and used by both private and large scale, professional deployments in enterprises, education, research institutions and government agencies. Find some of the bigger deployments among the <a href="https://nextcloud.com/customer-stories" target="_blank">Nextcloud.com customer stories</a>.</li>
	<li>You can use Nextcloud for free in any situation - due to the open source license. However, if you require support and certain enterprise functionality, consider <a href="#entcomparison">purchasing a subscription</a>.</li>
</ul>

<a name="professionaluse"></a>
<h3>What resources exist to support my deployment?</h3>
<ul>
	<li>Where home users can find <a href="#channels">the support resources they need</a> in the community, professional users can find <a href="http://nextcloud.com/resources" target="_blank">resources developed by Nextcloud, Inc.</a> as well as the <a href="https://nextcloud.com/get-started-standard-subscription" target="_blank">Standard Subscription</a> support option for Nextcloud Server and the <a href="https://nextcloud.com/products/enterprise" target="_blank">Enterprise Subscription</a> which adds functionality for integrating Nextcloud in an enterprise infrastructure.
	<li>You can find out where to look for relevant resources on <a href="/support" target="_blank">this page</a>.</li>
</ul>

<a name="entcomparison"></a>
<h3>What is the Standard Subscription and Enterprise Subscription?</h3>
<ul>
	<li>Professional deployments of Nextcloud Server only interested in enterprise file sync and share can benefit from the enterprise service and support offered by Nextcloud, Inc. through the <a href="https://nextcloud.com/get-started-standard-subscription" target="_blank">Standard Subscription.</a></li>
	<li>The Enterprise Subscription builds on the support offered by the Standard Subscription. It adds enterprise certified applications to the Nextcloud Server, including integration with enterprise services like a File Firewall, SharePoint, Windows network drives, Oracle SQL support and SAML/Shibboleth authentication as well as audit and control tools. The Enterprise Subscription comes with the Nextcloud Commercial License and may be modified to include custom services and support to meet the unique needs of the enterprise. It includes access to branding and deployment tools and offers a wider range of support options including up to 24x7 support.</li>
	<li>You can find a comparison table <a href="https://nextcloud.com/subscriptions/" target="_blank">detailing support options here</a> and enterprise features on <a href="https://nextcloud.com/lp/nextcloud-server-or-enterprise-edition/" target="_blank">this page</a>.</li>
</ul>

<a name="bestedition"></a>
<h3>Which solution is best for me?</h3>
<ul>
	<li>As home or small business user, you benefit from the rich functionality of the Nextcloud Server. The documentation as well as <a href="#channels">community support</a> or support through IT service providers are best suited for your use case.</li>
	<li>For those who seek file sync and share as provided by Nextcloud Server, but want the confidence of knowing that their Nextcloud deployment is backed by technical expertise with 8x5 mail support, the <a href="https://nextcloud.com/get-started-standard-subscription/" target="_blank">Standard Subscription</a> is a cost-effective solution which may meet your requirements.</li>
	<li>For larger and more complex deployments of Nextcloud, servicing hundreds to hundreds of thousands of users, handling terabytes to Petabytes of data, requiring high availability and multi-server scaling, needing integration in Enterprise infrastructure and/or having specific needs around compliance in regulated industries, <a href="https://nextcloud.com/products/enterprise/" target="_blank">Enterprise Subscription</a> from Nextcloud, Inc. is available with 12x5 email and phone support, additional enterprise functionality, deployment and branding tools and more. Nextcloud,. Inc. can also work with you to develop custom support that can include up to 24x7 coverage.</li>
	<li><a href="http://vimeo.com/107631039" target="_blank">Watch the Community and Enterprise Edition Webinar</a> to find out what is best for you.</li>
</ul>

<a name="communityandenterprise"></a>
<h3>How do the community and company work together?</h3>
<ul>
	<li>The company makes it possible for developers to work full time on Nextcloud, organizing Nextcloud events, marketing Nextcloud to a wider audience and supporting companies, governments and schools in their Nextcloud deployments.</li>
	<li>The business model of Nextcloud, Inc. is very similar to other successful Open Source companies, offering services and support around Nextcloud for the enterprise. The company is dedicated to working entirely in the open, accelerating development in the areas of its customers' needs while enabling a completely open development process where everybody can contribute. <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>general/codingguidelines.html#general" target="_blank">See our developer documentation</a> for a description of our development  and decision making process.</li>
	<li>The Enterprise Edition offers additional enterprise applications bundled with Nextcloud Server and supported through the Enterprise Subscription. The Standard Subscription and the Enterprise apps become available after a period of additional testing and the addition of <a href="https://nextcloud.com/features/" target="_blank">enterprise features</a>. Nextcloud develops in the open; this is neither an open-core nor a dump-your-code-over-the-wall model. Read what the Free Software Foundation says about it: <a href="http://www.gnu.org/philosophy/selling-exceptions.html" target="_blank">gnu.org/philosophy/selling-exceptions</a>.</li>
</ul>
Check out <a href="https://nextcloud.com" target="_blank">nextcloud.com</a> and <a href="/history" target="_blank">nextcloud.org/history</a> for more information.

<a name="entcustomers"></a>
<h3>What customers does Nextcloud, Inc. have?</h3>
<ul>
	<li>Nextcloud works with several large enterprises across financial services, energy, government, healthcare, education and more. Some of our marquis customers include TU Berlin, CERN, Joy Global, Wind River, Jefferson National, Geant, De'Longhi, TTX, Dutch Ministry of Defense as well as other large financial services and telco companies we cannot name. Check out the <a href="https://nextcloud.com/customer-stories/" target="_blank">nextcloud customer stories</a> for more customers and their testimonials.</li>
</ul>

