<head>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/design.css" rel="stylesheet">
</head>

<div class="background background--design">
	<div class="container">
		<div class="row">
			<div class="col-md-6 revealOnScroll topheader">
				<h1><?php echo $l->t('Design team');?></h1>
				<h2><?php echo $l->t('Join us in designing privacy for everyone’s data. Simple, usable and accessible.');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--design">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<div class="col-md-6">
				<h3 class="section--intro">
					<?php echo $l->t(
						'Contribute Right: Design team');
					?>
				</h3>

				<p class="section--paragraph">
					<?php echo $l->t(
						'Software should work. Only put features into master when they are complete. It is better to not have a feature
						 instead of having one that works poorly.');
					 ?>
				 </p>

				<p class="section--paragraph">
					<?php echo $l->t(
						'Software should get out of the way. Do things automatically instead of offering configuration options.');
					?>
				</p>

				<p class="section--paragraph">
					<?php echo $l->t(
						'Software should be easy to use. Show only the most important elements. Secondary elements only on hover or via
						»Advanced« function.');
					?>
				</p>

				<p class="section--paragraph">
					<?php echo $l->t(
						'People’s data is sacred. Provide undo instead of asking for confirmation –
						<a href="http://www.alistapart.com/articles/neveruseawarning/">which might be dismissed</a>.');
						?>
				</p>

					<p class="section--paragraph">
						<?php echo $l->t(
							'The state of the application should be clear. If something loads, provide feedback.');?></p>

					<p class="section--paragraph">
						<?php echo $l->t(
							'Do not adapt broken concepts (for example design of desktop apps) just for the sake of »consistency«. We provide a better interface.');?></p>

					<p class="section--paragraph">
						<?php echo $l->t(
							'Regularly reset your installation to see what the first-run experience is like. And improve it.');?></p>

					<p class="section--paragraph">
						<?php echo $l->t(
							'Ideally do <a href="http://jancborchardt.net/usability-in-free-software">usability testing</a> to know how people use the software.');?></p>

					<p class="section--paragraph">
						<?php echo $l->t(
							'When people ask for features, find out what the root of the problem is. Then fix that instead of just adding a feature.');?></p>

					<p class="section--paragraph">
						<?php echo $l->t(
							'Test in different browsers. We need to fully support the common browsers like Firefox and Chrome as well as Internet Explorer down to version 8.');?></p>

					<p class="section--paragraph">
						<?php echo $l->t(
							'Test on different devices. The web interface should work on a smartphone or tablet as well as it does on desktop.');?></p>

					<p class="section--paragraph">
						<?php echo $l->t(
							'For further UX principles, read <a href="http://uxmag.com/articles/quantifying-usability">Alex Faaborg from Mozilla</a>.');?></p>

					<p class="section--paragraph">
						<?php echo $l->t(
							'Please be considerate of our <a class="hyperlink"  href="/community/code-of-conduct/">code of conduct</a>. We want to provide a positive and enjoyable environment for everybody.');?></p>
				</
				div>
				<div class="col-md-6">
					<h3 class="section--intro"><?php echo $l->t('Design guidelines Right: HTML+CSS guidelines');?></h3>
					<p class="section--paragraph">
						<?php echo $l->t(
							'We basically follow <a href="https://google-styleguide.googlecode.com/svn/trunk/htmlcssguide.xml">Google’s HTML+CSS
							style guide</a>, with small exceptions:');
							?>
						</p>

						<ul>
							<li>
								<?php echo $l->t(
									'Use tabs for indentation, not spaces');
									?>
								</li>

								<li>
									<?php echo $l->t(
										'Sorting of declarations should be sensically grouped instead of alphabetized. First positioning and sizes,
										then typography, then colors, then additional rules.');
										?>
									</li>
								</ul>

								<p class="section--paragraph">
									<?php echo $l->t(
										'HTML and CSS building blocks are in <a href="https://doc.nextcloud.org/server/8.0/developer_manual/app/css.html">the
										documentation</a>.');
										?>
									</p>

									<p class="section--paragraph">
										<?php echo $l->t(
											'Clickable elements should be a minimum of 44*44px to be easily tappable on mobile devices and well visible on desktop.
											See the <a href="https://developer.apple.com/library/iOS/documentation/UserExperience/Conceptual/MobileHIG/LayoutandAppearance.html">
											Apple Human Interface Guidelines</a> for reference.');
											?>
										</p>

										<p class="section--paragraph">
											<?php echo $l->t(
												'We don’t use Bootstrap because there’s lots of parts we don’t need and we would need to customize a lot anyway. We do
												use pieces of Bootstrap though, like Tipsy for tooltips.');
												?>
											</p>
										</div>
									</div>
								</div>
							</section>
