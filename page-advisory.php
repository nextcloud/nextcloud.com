<?php
$identifier = strtolower(str_replace('.', '', $_GET['id']));
if(file_exists(__DIR__.'/advisories/'.$identifier.'.php')) {
	?>
	<section class="content">
		<div class="container">
			<?php
			include(__DIR__.'/advisories/'.$identifier.'.php');
			?>
		</div>
	</section>
	<?php
} else {
	get_template_part('404');
}