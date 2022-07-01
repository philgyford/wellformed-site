<?php include "functions.php"; ?><!doctype html>
<html lang="en-gb">
<head>
	<meta charset="utf-8">
	<title><?php echo $HEAD_TITLE; ?></title>
	<meta name="description" content="Good web development in London">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/assets/css/global.css?v=3" type="text/css" />

	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="/assets/img/favicons/site.webmanifest">
	<link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/assets/img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a300">
	<meta name="msapplication-config" content="/assets/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

</head>
<body>
	<a class="u-sr-only u-sr-only-focusable" href="#content">Skip to main content</a>

	<header class="container banner grid grid--1-1">
		<div class="sitehead">
			<h1 class="sitehead__title">
				Well-Formed
			</h1>
			<p class="sitehead__tagline"></p>
		</div>

		<nav class="nav u-align-right">
			<ul class="nav__inner">
				<li class="nav__item">
					<?php
						if ($NAV_ACTIVE == "home") {
							echo "Home";
						} else {
							echo '<a href="/">Home</a>';
						}
					?>
				</li>
				<li class="nav__item">
				<?php
						if ($NAV_ACTIVE == "projects") {
							echo "Projects";
						} else {
							echo '<a href="/projects/">Projects</a>';
						}
					?>
				</li>
				<li class="nav__item">
					<?php
							if ($NAV_ACTIVE == "articles") {
								echo "Articles";
							} else {
								echo '<a href="/articles/">Articles</a>';
							}
						?>
				</li>
				<li class="nav__item">
					<?php
							if ($NAV_ACTIVE == "about") {
								echo "About";
							} else {
								echo '<a href="/about/">About</a>';
							}
						?>
				</li>
			</ul>
		</nav>
	</header>

	<main id="content" class="container">
