<ARTICLE>
	<H3>Hello, Wild.</H3>
	<P>This is a basic website I whipped up using CodeIgniter and some standard web stuff like HTML5, JavaScript and CSS3!</P>
	<P>I purposefully tried to keep the design as minimalistic as possible, since it would appear that's where the tech scene is heading. I used <A href="http://colorschemedesigner.com/" target="_blank">Color Scheme Designer</A> for inspiration.</P>
	
	<H3>So, what was learned?</H3>
	<P>During the two jam-packed days I built this little web, I learned quite a bit about a variety of PHP issues. Mainly, I focused on:</P>
	<UL>
		<LI>
			GIT / GitHub
			<UL>
				<LI>How to set up GIT repositories on GitHub</LI>
				<LI>How to use GIT in Terminal, and then later GitHub for Mac, GITX, and lastely SourceTree, which works with GIT, SVN, and Mercurical!</LI>
				<LI>How submodules work in GIT, and how to use them with my repo to keep both the project and its dependencies up to date</LI>
				<LI>The difference between SVN and GIT</LI>
			</UL>
		</LI>
		<LI>
			CodeIgniter
			<UL>
				<LI>The basics of installing and setting up CodeIgniter</LI>
				<LI>What a PHP MVC setup looks like (which is quite a handful compared to MVC .NET!)</LI>
				<LI>How CodeIgniter handles form validation and queries via their helpers</LI>
			</UL>
		</LI>
		<LI>
			PHP / Web
			<UL>
				<LI>While I've worked quite a bit with PHP, I'd never really worked with loading in externals like Tidy. Since Tidy wasn't available, I spent a long time trying to find compilations of it on the internet. While doing so, I learned a bit about how Apache is configured.</LI>
				<LI>.htaccess rewrites</LI>
			</UL>
		</LI>
	</UL>
	
	<H3>Tech Overview</H3>
	<P>A bit from <A href="http://en.wikipedia.org/wiki/Codeigniter#CodeIgniter" target="_blank">Wikipedia</A> on CodeIgniter:</P>
	<BLOCKQUOTE cite=""http://en.wikipedia.org/wiki/Codeigniter#CodeIgniter">
		<P>CodeIgniter is an open source web application framework for use in building dynamic web sites with PHP. "Its goal is to enable [developers] to develop projects much faster than...writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries." The first public version of CodeIgniter was released on February 28, 2006, and the latest stable version 2.1.0 was released November 1, 2011.</P>
		<P>CodeIgniter is loosely based on the popular Model-View-Controller development pattern. While view and controller classes are a necessary part of development under CodeIgniter, models are optional.</P>
		<P>CodeIgniter is most often noted for its speed when compared to other PHP frameworks. In a critical take on PHP frameworks in general, PHP creator Rasmus Lerdorf spoke at frOSCon in August 2008, noting that he liked CodeIgniter "because it is faster, lighter and the least like a framework."</P>
	</BLOCKQUOTE>
	<P>To balance out the website's CSS, I took advantage of Nicolas Gallagher's <A href="http://necolas.github.com/normalize.css/" target="_blank">Normalize.css</A> CSS fancy sheet.</P>
	<P>Like <A href="http://developer.yahoo.com/yui/reset/" target="_blank">YUI3 CSS Reset</A> and the like, Normalize tries to level the web developer's playing field from browser to browser. Unlike CSS resets though, normalize attempts to preserve common browser defaults, saving designers the trouble of having to apply styles to every single element to make them look proper.</P>
</ARTICLE>