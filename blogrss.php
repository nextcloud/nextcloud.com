<?php
/*
Template Name: Blog Planet RSS Page
*/
?>

<?php

require(__DIR__ . '/../../../contribook/main/contribook/lib_contribook.php');

CONTRIBOOK_BLOG::showrss('Nextcloud Planet','The Nextcloud blog planet with posts from all Nextcloud contributors','https://nextcloud.com/news/',30);



