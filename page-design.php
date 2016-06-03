<h2>Contribute to Nextcloud design!</h2>
<ul>
	<li>We have a <a href="https://github.com/nextcloud/core/issues?labels=Design">Design label on GitHub</a> – check out these issues if you want to help and fix interface problems. This label is also in the other repositories for clients and apps.</li>
	<li>For easier issues and to get started, check out the <a href="https://github.com/nextcloud/core/issues?labels=Design%2CJunior+Job">Design issues also marked »Junior Job«</a></li>
	<li><a href="https://github.com/nextcloud/core/issues?labels=Design,High">High priority design issues</a> are additionally marked with the »High« label – these we need to prioritize, and fixing any of those will make you everyone’s hero!</li>
</ul>



<h2>Design Team</h2>

<p>There is an <strong>@nextcloud/designers group on GitHub</strong>. This enables people to just mention @nextcloud/designers in issues and pull requests to notify all designers. Otherwise you have to mention each one individually.</p>

<p>The people currently in this group are:
<ul>
	<li><a href="https://github.com/jancborchardt">Jan-Christoph Borchardt</a></li>
	<li><a href="https://github.com/MorrisJobke">Morris Jobke</a></li>
	<li><a href="https://github.com/PVince81">Vincent Petry</a></li>
	<li><a href="https://github.com/jbtbnl">Jan ten Bokkel</a></li>
	<li><a href="https://github.com/wakeup">Volkan Gezer</a></li>
	<li><a href="https://github.com/raghunayyar">Raghu Nayyar</a></li>
	<li><a href="https://github.com/Kondou-ger">Kondou</a></li>
	<li><a href="https://github.com/enoch85">Daniel Hansson</a></li>
	<li><a href="https://github.com/stefan-niedermann">Stefan Niedermann</a></li>
</ul>
Please let us know if you want to contribute to the design and would like to be in this group. You will be notified every time someone mentions this team in an issue, which would be every design issue or pull request.</p>

<p>You should also join the <strong><a href="https://webchat.freenode.net/?channels=nextcloud-design">#nextcloud-design channel on IRC</a></strong>. We use this to communicate on smaller issues, talk about what to work on next, and just general chatter. It’s good to get to know the other people and for organization in general.</p>



<h2>Design guidelines</h2>
<ul>
	<li>Software should work. Only put features into master when they are complete. It’s better to not have a feature instead of having one that works poorly.</li>
	<li>Software should get out of the way. Do things automatically instead of offering configuration options.</li>
	<li>Software should be easy to use. Show only the most important elements. Secondary elements only on hover or via »Advanced« function.</li>
	<li>People’s data is sacred. Provide undo instead of asking for confirmation – <a href="http://www.alistapart.com/articles/neveruseawarning/">which might be dismissed</a>.</li>
	<li>The state of the application should be clear. If something loads, provide feedback.</li>
	<li>Do not adapt broken concepts (for example design of desktop apps) just for the sake of »consistency«. We provide a better interface.</li>
	<li>Regularly reset your installation to see what the first-run experience is like. And improve it.</li>
	<li>Ideally do <a href="http://jancborchardt.net/usability-in-free-software">usability testing</a> to know how people use the software.</li>
	<li>When people ask for features, find out what the root of the problem is. Then fix that instead of just adding a feature.</li>
	<li>Test in different browsers. We need to fully support the common browsers like Firefox and Chrome as well as Internet Explorer down to version 8.</li>
	<li>Test on different devices. The web interface should work on a smartphone or tablet as well as it does on desktop.</li>
	<li>For further UX principles, read <a href="http://uxmag.com/articles/quantifying-usability">Alex Faaborg from Mozilla</a>.</li>
</ul>



<h2>More concrete HTML+CSS guidelines</h2>
<ul>
	<li>We basically follow <a href="https://google-styleguide.googlecode.com/svn/trunk/htmlcssguide.xml">Google’s HTML+CSS style guide</a>, with small exceptions:
		<ul>
			<li>Use tabs for indentation, not spaces</li>
			<li>Sorting of declarations should be sensically grouped instead of alphabetized. First positioning and sizes, then typography, then colors, then additional rules.</li>
		</ul>
	</li>
	<li>HTML and CSS building blocks are in <a href="https://doc.nextcloud.org/server/8.0/developer_manual/app/css.html">the documentation</a>.</li>
	<li>Clickable elements should be a minimum of 44*44px to be easily tappable on mobile devices and well visible on desktop. See the <a href="https://developer.apple.com/library/iOS/documentation/UserExperience/Conceptual/MobileHIG/LayoutandAppearance.html">Apple Human Interface Guidelines</a> for reference.</li>
	<li>We don’t use SASS or another preprocessor because of the barrier to entry.</li>
	<li>We don’t use Bootstrap because there’s lots of parts we don’t need and we would need to customize a lot anyway. We do use pieces of Bootstrap though, like Tipsy for tooltips.</li>
</ul>



<h2>Further reading</h2>

<p>Learn more about design &amp; usability, read <a href="http://jancborchardt.net/usability-in-free-software ">Usability in Free Software</a>.</p>

<p>If you just want to read about what’s new in Nextcloud design, check out the <a href="https://nextcloud.com/category/design/">Nextcloud blog Design category</a>.</p>
