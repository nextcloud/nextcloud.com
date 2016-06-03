<?php
$identifier = strtolower(str_replace('.', '', $_GET['id']));
if(file_exists(__DIR__.'/advisories/'.$identifier.'.php')) {
	include(__DIR__.'/advisories/'.$identifier.'.php');
} else {
	get_template_part('404');
}