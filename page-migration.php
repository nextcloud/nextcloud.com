<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="container">
	<div class="page-header">
		<h1><?php echo $l->t('Migration Guide');?></h1>
	</div>
	<p><?php echo $l->t('Nextcloud strives to make migration of customers from ownCloud™ as seamless as possible. Due to the large technical overlap, the migration of the application is easy. Business processes are equally easily updated.');?></p>

	<h2><?php echo $l->t('Technical migration');?></h2>
	<p><?php echo $l->t('Moving from ownCloud™ to Nextcloud follows the same process as a upgrade within either product. You can essentially follow our');?> <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/manual_upgrade.html" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud administrator Documentation">usual upgrade documentation.</a>');?></p>

	<p><?php echo $l->t('The steps are as follows:');?></p>
	<ul>
	<li><?php echo $l->t('Enable Maintenance Mode with the command line tool');?></li>
	<li><?php echo $l->t('backup existing configuration and database');?></li>
	<li><?php echo $l->t('delete the ownCloud code and extract the Nextcloud code');?></li>
	<li><?php echo $l->t('copy back the configuration file');?></li>
	<li><?php echo $l->t('start the upgrade process with the command line tool');?></li>
	<li><?php echo $l->t('Disable Maintenance Mode');?></li>
	</ul>
	<p><?php echo $l->t('Find more details in');?> <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/manual_upgrade.html" target="_blank" rel="tooltip" title="<?php echo $l->t('Nextcloud administrator Documentation">our documentation.</a>');?></p>

	<p><?php echo $l->t('Note that, as ownCloud does not support skipping releases, upgrades have to go through all releases between the existing ownCloud release and the desired Nextcloud release. We will support upgrades from ownCloud 8.2 and onwards. If you are on a older release, <a href="mailto:support@nextcloud.com">contact our support team</a> or <a href="/contact">ask sales for an offer.</a>');?></p>
	<h2><?php echo $l->t('Upgrade path');?></h2>
	<p><?php echo $l->t('Depending on your current ownCloud™ release, you have to follow a different upgrade path. These are some examples. The minor release (.x below) should always be the latest bugfix release.');?></p>
	<ul>
	<li><?php echo $l->t('ownCloud 8.0.x -> ownCloud 8.1.x -> ownCloud 8.2.x -> Nextcloud 9.0.x -> Nextcloud 10.0.x');?></li>
	<li><?php echo $l->t('ownCloud 8.2.x -> Nextcloud 9.0.x -> Nextcloud 10.0.x');?></li>
	</ul>
	<h2><?php echo $l->t('License Compliance');?></h2>
	<p><?php echo $l->t('Nextcloud is licensed exclusively under the AGPL or less restrictive open source licenses, removing any risk of mixing incompatible licenses or other legal issues. If you have not made any changes to the code of ownCloud Server™ and did not develop custom ownCloud applications, you will not need to do anything to be in compliance with the open source licenses of Nextcloud. Note that theme changes or branding are unaffected by AGPL licensing. Find more information in our FAQ. Our sales team will be happy to <a href="/contact">answer any questions you have.</a>');?></p>

	<h2><?php echo $l->t('Take over of support contract');?></h2>
	<p><?php echo $l->t('Nextcloud will honor any any valid contract with ownCloud which has started before the 2nd of June for free if a new agreement is signed for a period of at least 12 months.');?></p>

	<p><?php echo $l->t('<small>All product names and trademarks are the property of their respective owners, which might in no way be associated or affiliated with Nextcloud.</small>');?></p>
</div>
