<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/pressrelease.css" rel="stylesheet">
    <meta itemprop="image" content="https://nextcloud.com/media/backup-app-settings-1.png">
    <meta name="twitter:image" content="https://nextcloud.com/media/backup-app-settings-1.png">
    <meta name="twitter:image:src" content="https://nextcloud.com/media/backup-app-settings-1.png">
    <meta property="og:image" content="https://nextcloud.com/media/backup-app-settings-1.png">
</head>
<div class="background generic-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
                <h2>Press release</h2>
            </div>
        </div>
    </div>
</div>

<section class="section--pressrelease">
<div class="container">
<div class="row">
<div class="pr">
<h1>Nextcloud introduces peer-to-peer backup app for private instances, beta available now</h1>
<p><em>Easy to use, integrated backup feature will improve data safety for home users</em></p>
<p><em>Berlin, November 1 2021</em> - Nextcloud GmbH, the company behind the worlds’ most deployed on-premises content collaboration platform, announces a backup app for Nextcloud, developed to help small instances create a recovery on another instance. After selecting another Nextcloud instance from a friend or family member, the app creates a compressed, encrypted, incremental backup which can be restored, files can be searched. Nextcloud Backup gives users of the most popular decentralized, privacy-respecting alternative to Big Tech SaaS platforms the certainty their data is safe.</p>
<blockquote>Enterprises use powerful but complex backup solutions to provide them with the data safety and security they need for Nextcloud. For private users, such solutions are often overkill. Our new backup app provides an incredibly easy way to ensure that even in the worst case like total loss of a server, data is secure on the instance of a friend or family member, while of course preserving privacy through encryption.</blockquote>
<p>-- Maxence Lange, lead developer on the Backup app</p>
<p>The Nextcloud Backup app was designed to fill the gap of backing up the data on a private Nextcloud instance ran by a less technical user. Many users forego backups due to the complexity involved. Yet, data loss can happen, especially in case of hardware issues with instances run on cheap platforms like a Raspberry Pi, or an old notebook or desktop at home. With several hundreds of thousands of Nextcloud instances on the internet, many users are at risk of data loss. The key distinctive feature of the Backup app is that it is designed to store backups on other Nextcloud instances. These other instances can but do not need to have the Backup app installed. Storing backups in a local folder, perhaps an external hard drive, or any external storage like a FTP, samba or any of the other external storages supported by Nextcloud, is possible as well.</p>
<p>The Backup app stores the entire Nextcloud instance, including its configuration, apps and their data. Non-local data like remote files and external storages are NOT backed-up. Backups can be configured to run entirely automatically from the Admin Settings Page. Users can define time slots and decide when to create full backups versus incremental backups. Administrators are notified of backup activity through the Activities app. The backup happens in the background, with a very short downtime incurred through maintenance mode when a snapshot is made. The snapshot is then compressed, split in 100MB parts and encrypted, a process which happens in the background and does not require maintenance mode. These are then stored on the designated backup system, be it local or remote. Folders can be excluded from backup by adding a .nobackup file in the folder.</p>
<p>To recover data, the admin can use the command line to restore single files or initiate a full restore on the system. When an instance is entirely lost, some information including a encryption key will be needed to restore the data. This key can be copied from the Admin interface or the command line and should be stored in a different location.</p>
<p>The backup app is released today as a beta for Nextcloud 23 beta 1. The final release is expected with the Nextcloud 23 release. Users can find a post with more instructions for testing in our blog.</p>

<h2>About Nextcloud GmbH</h2>
<p>Nextcloud Hub is the industry-leading, fully open-source, on-premises team productivity platform and Germany’s number one collaboration solution. It combines the easy user interface of consumer-grade cloud solutions with the security and compliance measures enterprises need. Nextcloud Hub brings together universal access to data through mobile, desktop and web interfaces with next-generation, on-premise secure communication and collaboration features like real-time document editing, chat and video calls, putting them under the direct control of IT and integrated with existing infrastructure.</p>
<p>Nextcloud’s easy and quick deployment, open, modular architecture and emphasis on security and advanced federation capabilities enable modern enterprises to leverage their existing file storage assets within and across the borders of their organization. For more information, visit <a href="https://nextcloud.com/">nextcloud.com</a> or follow <a href="https://twitter.com/Nextclouders">@Nextclouders</a> on Twitter.</p>

<h2>Links</h2>
<ul>
	<li><a href="https://github.com/nextcloud/backup">Backup	app on github</a></li>
	<li><a href="https://nextcloud.com/blog/beta-of-peer-to-peer-nextcloud-backup-app-now-available-for-testing/">Release
	blog</a></li>
</ul>
<h2>Screenshots</h2>
<ul>
	<li><a href="https://nextcloud.com/media/backup-app-settings-1.png">backup app settings 1</a></li>
	<li><a href="https://nextcloud.com/media/backup-app-settings-2.png">backup app settings 2</a></li>
	<li><a href="https://nextcloud.com/media/backup-app-save-encryption-key-and-settings.png">backup app save encryption key and settings</a></li>
</ul>
<div class="row">
    <div class="col-md-4">
        <img class="img-responsive overlay-trigger" src="https://nextcloud.com/media/backup-app-settings-1.png" /><br />App settings
    </div>
    <div class="col-md-4">
        <img class="img-responsive overlay-trigger" src="https://nextcloud.com/media/backup-app-settings-2.png" /><br />App settings (continued)
    </div>
    <div class="col-md-4">
        <img class="img-responsive overlay-trigger" src="https://nextcloud.com/media/backup-app-save-encryption-key-and-settings.png" /><br />Getting recovery key from app settings
    </div>
</div>


<h2>Press contacts</h2>
<p>Jos Poortvliet<br />
Marketing Director<br />
Phone: +49 (0) 171 121 7528<br />
pr@nextcloud.com</p>

</div>
</div>
</div>
</section>
<?php require get_template_directory().'/overlay.php'; ?>
