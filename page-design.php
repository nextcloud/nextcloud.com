<h2>Design at Nextcloud</h2>
<p>Design is open at Nextcloud. You can directly contribute at <a href="https://github.com/nextcloud/server/issues?labels=design">GitHub</a>. This is our main channel to discuss the design of nextcloud.</p>
<ul>
	<li>We have a <a href="https://github.com/nextcloud/server/issues?labels=design">Design</a> label on GitHub. Check out these issues, if you want to help with the design. This label is used in all repositories.</li>
	<li>To get started, check out the <a href="https://github.com/nextcloud/server/issues?q=label%3Adesign+label%3A%22starter+issue%22">Starter Issues</a> labeled with design.</li>
	<li>Or look for <a href="https://github.com/nextcloud/server/issues?q=is%3Aopen+is%3Aissue+label%3Apapercut">papercut issues</a>! Fixing these will increase the user experience tremendously.</li>
</ul>

<h2>Design Team</h2>

<p>There is an <strong>@nextcloud/designers</strong> team on GitHub. Just mention <strong>@nextcloud/designers</strong> in issues and pull requests to notify all designers.</p>

<p>If you want to be part of the team contact us over <a href="https://webchat.freenode.net/?channels=nextcloud">IRC</a>, on <a href="https://github.com/nextcloud">github</a> or via <a href="mailto:design@nextcloud.com">design@nextcloud.com</a>.</p>

<h2>Design guide</h2>
<ul>
	<li><strong>Make it easy to use:</strong> Show only what’s necessary, but don’t hide the functionality in multiple levels – one or two clicks.</li>
	<li><strong>Make it intelligent:</strong> Let nextcloud do things automatically, instead of offering too many options.</li>
	<li><strong>Make it work:</strong> It’s better to miss a feature than having one that works poorly.</li>
	<li><strong>Provide feedback:</strong> The state of the application should be clear. If something loads, show a loader animation.</li>
	<li><strong>Be bold to adapt new modalities:</strong> Let go of broken concepts (e.g. the design of desktop apps). We provide a better interface.</li>
	<li><strong>Test it yourself:</strong> Regularly reset your installation to see what the first-run experience is like.</li>
	<li><strong>Test with people:</strong> Do <a href="http://jancborchardt.net/usability-in-free-software">usability testing</a> or just ask someone to have a look or watch people using nextcloud.</li>
	<li><strong>Test on different devices:</strong> We need to fully support the <a href="http://caniuse.com/usage-table">common browsers</a>, but also the whole range from desktop to mobile devices.</li>
	<li><strong>Analyze the user's needs:</strong> When people ask for features, find out what the root of the problem is, instead of just adding the feature.</li>


	<li>People’s data is sacred. Provide undo instead of asking for confirmation – <a href="http://www.alistapart.com/articles/neveruseawarning/">which might be dismissed</a>.</li>
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
	<li>HTML and CSS building blocks are in <a href="https://docs.nextcloud.com/server/10/developer_manual/app/css.html">the documentation</a>.</li>
	<li>Interactive elements should be a minimum of <em>44 px x 44 px</em> to be easy to tap on mobile devices and visible on desktop. See the <a href="https://developer.apple.com/library/iOS/documentation/UserExperience/Conceptual/MobileHIG/LayoutandAppearance.html">Apple Human Interface Guidelines</a> for reference.</li>
	<li>We don’t use SASS or another preprocessor because of the barrier to entry.</li>
	<li>We don’t use Bootstrap because there’s lots of parts we don’t need and we would need to customize a lot anyway. We do use pieces of Bootstrap though, like Tipsy for tooltips.</li>
</ul>



<h2>Further reading</h2>

<p>Learn more about design &amp; usability, read <a href="http://jancborchardt.net/usability-in-free-software ">Usability in Free Software</a>.</p>

<p>If you just want to read about what’s new in Nextcloud design, check out the <a href="https://nextcloud.com/category/design/">Nextcloud blog Design category</a>.</p>
