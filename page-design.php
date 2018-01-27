<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/design.css" rel="stylesheet">
<script>
	require(["require.config"], function() {
		require(["modules/youtubePlayer"])
	});
</script>
</head>

<div class="background design-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Contribute to Nextcloud design');?></h1>
				<h2><?php echo $l->t('Help make privacy easy to use');?></p>
			</div>
		</div>
	</div>
</div>


<section class="section--getinvolved">
<div class="container">
	<div class="row">
		<div class="col-md-6 revealOnScroll">
			<h3 class="section--paragraph__tittle"><?php echo $l->t('Get involved');?></h3>
			<ul>
                <li><?php echo $l->t('We have a <a href="https://github.com/nextcloud/server/labels/design" target="_blank">Design label on GitHub</a> – check out these issues if you want to help and fix interface problems. This label is also in the other repositories for clients and apps.');?></li>
                <li><?php echo $l->t('For easier issues and to get started, check out the <a href="https://github.com/nextcloud/server/issues?q=is%3Aopen+label%3A%22good+first+issue%22+label%3Adesign" target="_blank">Design issues also marked »good first issue«</a>');?></li>
                <li><?php echo $l->t('<a href="https://github.com/nextcloud/server/issues?q=label%3Adesign+label%3Ahigh+is%3Aopen" target="_blank">High priority design issues</a> are additionally marked with the »High« label – these we need to prioritize, and fixing any of those will make you everyone’s hero!');?></li>
            </ul>
		</div>
        <div class="col-md-6 revealOnScroll">
			<div data-type="youtube" data-video-id="5SAB0CY-iZ0"></div>
		</div>
	</div>
</div>
</section>

<section class="section--team">
<div class="container">
	<div class="row">
		<div class="col-md-12 revealOnScroll">
			<h3 class="section--paragraph__tittle"><?php echo $l->t('Design team');?></h3>
			<p><?php echo $l->t('There is an <strong>@nextcloud/designers group on GitHub</strong>. This enables people to just mention @nextcloud/designers in issues and pull requests to notify all designers. Otherwise you have to mention each one individually.');?></p>

            <p><?php echo $l->t('The main people working on Nextcloud design are:');?></p>
            <ul>
                <li><a href="https://github.com/jancborchardt" target="_blank">Jan-Christoph Borchardt</a> (Design lead)</li>
                <li><a href="https://github.com/skjnldsv" target="_blank">John Molakvoæ</a> (frontend, documentation &amp; Contacts app)</li>
                <li><a href="https://github.com/MorrisJobke" target="_blank">Morris Jobke</a> (frontend)</li>
                <li><a href="https://github.com/juliushaertl" target="_blank">Julius Härtl</a> (frontend &amp; Deck app)</li>
                <li><a href="https://github.com/pixelipo" target="_blank">Marin Treselj</a> (frontend &amp; Deck app)</li>
                <li><a href="https://github.com/danxuliu" target="_blank">Daniel Calviño Sánchez</a> (frontend &amp; Talk app)</li>
                <li><a href="https://github.com/Espina2" target="_blank">Paulo Moura</a> (website)</li>
                <li><?php echo $l->t('and many others, see <a href="https://github.com/orgs/nextcloud/teams/designers/members" target="_blank">here</a>.');?></li>
            </ul>
            <p><?php echo $l->t('Please let us know if you want to contribute to the design and would like to be in this group. You will be notified every time someone mentions this team in an issue, which would be every design issue or pull request.');?></p>

            <p><?php echo $l->t('You should also join the <strong><a href="https://riot.im/app/#/room/#freenode_#nextcloud-design:matrix.org" target="_blank">#nextcloud-design channel on IRC</a></strong>. We use this to communicate on smaller issues, talk about what to work on next, and just general chatter. It’s good to get to know the other people and for organization in general.');?></p>
        </div>
    </div>

	<div class="row">
		<div class="col-md-12 revealOnScroll">
            <h3 class="section--paragraph__tittle"><?php echo $l->t('Design guidelines');?></h3>
            <ul>
                <li><?php echo $l->t('Software should work. Only put features into master when they are complete. It is better to not have a feature instead of having one that works poorly.');?></li>
                <li><?php echo $l->t('Software should get out of the way. Do things automatically instead of offering configuration options. When people ask for a setting, find out what the root of the problem is and fix that instead. Also read <a href="http://ometer.com/preferences.html" target="_blank">»Choosing our Preferences«</a>.');?></li>
                <li><?php echo $l->t('Software should be easy to use. Show only the most important elements. Secondary elements only on hover or via »Advanced« function.');?></li>
                <li><?php echo $l->t('People’s data is sacred. Provide undo instead of asking for confirmation – <a href="http://www.alistapart.com/articles/neveruseawarning/" target="_blank">which might be dismissed</a>.');?></li>
                <li><?php echo $l->t('The state of the application should be clear. If something loads, provide feedback.');?></li>
                <li><?php echo $l->t('Do not adapt broken concepts (for example design of desktop apps) just for the sake of »consistency«. We provide a better interface.');?></li>
                <li><?php echo $l->t('Regularly reset your installation to see what the first-run experience is like. And improve it.');?></li>
                <li><?php echo $l->t('Ideally do <a href="http://jancborchardt.net/usability-in-free-software" target="_blank">usability testing</a> to know how people use the software.');?></li>
                <li><?php echo $l->t('Test in different browsers. We need to fully support the common browsers like Firefox and Chrome as well as Internet Explorer down to version 8.');?></li>
                <li><?php echo $l->t('Test on different devices. The web interface should work on a smartphone or tablet as well as it does on desktop.');?></li>
                <li><?php echo $l->t('For further UX principles, read <a href="http://uxmag.com/articles/quantifying-usability" target="_blank">Alex Faaborg from Mozilla</a>.');?></li>
            </ul>
        </div>
    </div>

	<div class="row">
		<div class="col-md-12 revealOnScroll">
            <h3 class="section--paragraph__tittle"><?php echo $l->t('More concrete HTML+CSS guidelines');?></h3>
            <ul>
                <li><?php echo $l->t('HTML and CSS building blocks are in <a href="https://docs.nextcloud.com/server/12/developer_manual/design/index.html" target="_blank">our Design documentation</a>.');?></li>
                <li><?php echo $l->t('We basically follow <a href="https://google.github.io/styleguide/htmlcssguide.html" target="_blank">Google’s HTML+CSS style guide</a>, with small exceptions:');?></p>
                    <ul>
                        <li><?php echo $l->t('Use tabs for indentation, not spaces');?></li>
                        <li><?php echo $l->t('Sorting of declarations should be sensically grouped instead of alphabetized. First positioning and sizes, then typography, then colors, then additional rules.');?></li>
                    </ul>
                </li>
                <li><?php echo $l->t('Clickable elements should be a minimum of 44*44px to be easily tappable on mobile devices and well visible on desktop. See the <a href="https://developer.apple.com/library/iOS/documentation/UserExperience/Conceptual/MobileHIG/LayoutandAppearance.html" target="_blank">Apple Human Interface Guidelines</a> for reference.');?></li>
                <li><?php echo $l->t('We use <a href="http://sass-lang.com/guide" target="_blank">Sass with SCSS syntax</a> for CSS. It’s as easy to write as CSS but gives us variables and prevents duplication. It’s automatically compiled so no further setup needed.');?></li>
                <li><?php echo $l->t('Accessibility is very important, so we use the <a href="http://wave.webaim.org/extension/" target="_blank">WAVE browser extension</a> to check the HTML for proper accessibility.');?></li>
                <li><?php echo $l->t('We don’t use Bootstrap because there’s lots of parts we don’t need and we would need to customize a lot anyway. We do use pieces of Bootstrap though, like Tipsy for tooltips.');?></li>
            </ul>
        </div>
    </div>

	<div class="row">
		<div class="col-md-12 revealOnScroll">
            <h3 class="section--paragraph__tittle"><?php echo $l->t('Further reading');?></h3>

            <ul>
                <li><?php echo $l->t('Watch a short video on <a href="https://www.youtube.com/watch?v=5SAB0CY-iZ0" target="_blank">our design principles and how to get involved</a>.');?></li>
                <li><?php echo $l->t('Learn more about design &amp; usability, read <a href="http://jancborchardt.net/usability-in-free-software" target="_blank">Usability in Free Software</a>.');?></li>
                <li><?php echo $l->t('Many of our designers are active in the broader <a href="http://opensourcedesign.net" target="_blank">Open Source Design</a> community.');?></li>
                <li><?php echo $l->t('If you just want to read about what’s new in Nextcloud design, check out the');?> <a href="<?php echo home_url('news') ?>"><?php echo $l->t('Nextcloud blog roll</a> as we talk frequently about design.');?></li>
            </ul>
		</div>
	</div>
</div>
</section>
