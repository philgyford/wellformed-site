<?php
$HEAD_TITLE = "Projects by Well-Formed";
$NAV_ACTIVE = "projects";
include "../includes/page_start.php";
?>

<header class="pagehead">
	<h1 class="pagehead__title">Projects</h1>
</header>

<p>Some projects we’ve worked on for clients aren’t public, but here are some of our other favourites from recent&nbsp;years:</p>

<hr>

<section class="grid grid--2-1">
	<div>
		<h3>
			<a href="https://www.good-id.org/">Good ID</a>
		</h3>
		<p>Working with <a href="https://www.unfoldstories.co.uk">Unfold
		Stories</a>, this is a content-driven site focused on doing digital identity right.</p>

		<p>Using Unfold's design and specification we implemented the site using the Django-based Wagtail CMS. <a href="https://www.gyford.com/phil/writing/2019/06/18/good-id/">Read more about&nbsp;it.</a></p>
	</div>
	<div>
		<a href="https://www.good-id.org/">
			<?php project_image("goodid-home", "Screenshot of the Good ID website", "img--bordered"); ?>
		</a>
	</div>
</section>

<hr>

<section class="grid grid--2-1">
	<div>
		<h3>
			<a href="https://www.moma.org/interactives/exhibitions/2016/spelunker/">MoMA Exhibition Spelunker</a>
		</h3>
		<p>Working with <a href="http://goodformandspectacle.com">Good, Form & Spectacle</a>, a site that explores 60 years of data for New York’s Museum of Modern Art.</p>

		<p>It combines MoMA’s data with more from Wikidata and the <cite>New York Times</cite>, and has several visualisations (using D3.js) providing overviews of the organisation and its work over the decades.</p>
	</div>
	<div>
		<a href="https://www.moma.org/interactives/exhibitions/2016/spelunker/">
			<?php project_image("moma-exhibitions", "Screenshot of MoMA Exhibition Spelunker", "img--bordered"); ?>
		</a>
	</div>
</section>

<hr>

<section class="grid grid--2-1">
	<div>
		<h3>
			<a href="http://wb.britishmuseum.org/">The Waddesdon Bequest</a>
		</h3>
		<p>Also with <a href="http://goodformandspectacle.com">Good, Form & Spectacle</a>, the Waddesdon Bequest site for the British Museum displays all the exhibits from one collection.</p>

		<p>Users can compare the objects by size, weight, origin, year of acquisition, and more. Every object features information from the British Museum’s archive and detailed zoomable photos.</p>
	</div>
	<div>
		<a href="http://wb.britishmuseum.org/">
			<?php project_image("waddesdon-home", "Screenshot of the Waddesdon Bequest website", "img--bordered"); ?>
		</a>
	</div>
</section>

<hr>

<section class="grid grid--2-1">
	<div>
		<h3>
			<a href="https://guardian.gyford.com/">Today’s Guardian</a>
		</h3>
		<p>A self-directed project from 2010, building a browsable online version of a newspaper, using the <cite>Guardian</cite>’s API. <a href="https://www.gyford.com/phil/writing/2010/06/09/todays-guardian/">Read more about the design thinking</a>.</p>

		<p>This was later taken further in collaboration with BERG, funded by the <cite>Guardian</cite>, to create “a newspaper that looks back at you”. <a href="http://berglondon.com/blog/2012/08/01/headliner/">Read more about&nbsp;it.</a></p>
	</div>
	<div>
		<a href="https://guardian.gyford.com/">
			<?php project_image("guardian", "Screenshot of Today's Guardian", "img--bordered"); ?>
		</a>
	</div>
</section>

<hr>

<section class="grid grid--2-1">
	<div>
		<h3>
			Dreams of Your Life
		</h3>
		<p>A thoughtful narrative experience promoting a film, <cite>Dreams of a Life</cite>, built with Hide&Seek for Film 4, written by A.L. Kennedy, with photography by Lottie Davies.</p>

		<p>The branching conversational story was built using a custom admin system that allowed for adjustments as the project was developed.</p>
	</div>
	<div>
		<?php project_image("doal", "Screenshot of the website", "img--bordered"); ?>
	</div>
</section>


<?php
include "../includes/page_end.php";
?>