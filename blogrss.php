<?php
/*
Template Name: Blog Planet RSS Page
*/

header('Content-Type: application/rss+xml; charset=UTF-8');
header('X-Nextcloud: disabled');

echo "";
die();
# Patched in by morris to reduce the load

?>

<?php

require(__DIR__ . '/../../../contribook/main/contribook/lib_contribook.php');

CONTRIBOOK_BLOG::showrss('Nextcloud Planet','The Nextcloud blog planet with posts from all Nextcloud contributors','https://nextcloud.com/news/',30);



