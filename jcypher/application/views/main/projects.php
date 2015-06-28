<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Cyphers</title>
	<meta name="Keywords" content="Jonathan Loui, jcypher" />
	<meta name="description" content="Jonathan Loui's Projects" />
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/main/projects.css" />

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script type="text/javascript" src="/assets/javascript/main/projects.js"></script>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>
	
	<h1 id="title">Projects</h1>
	<div id='project_description' class="silver_box">
		Here are some of the projects I have worked on in the past and some personal projects which are on going.
	</div>

	<section id="content_container">
		<div id="projects_link_container" class="silver_box">
			<a href="/cypher"><div id="cypher" class="thumb" description="My most recent project inspired by cryptograms/cypher websites that allow people to solve these puzzles, but not upload their own.">Cypher</div></a>
			<a href="/tloui"><div id="tloui" class="thumb" description="A profile website I originally built using HTML, CSS, and javascript. As I learned more web development technologies, I incorporated PHP and jQuery."></div></a>
			<a href="/baby_leo"><div id="baby_leo" class="thumb" description="A webpage I built using mostly Javascript, jQuery, and a little CSS3 for my nephew's 1st birthday containing a gallery of images.">Baby Leo</div></a>
			<a href="/coming_soon"><div id="coming_soon" class="thumb" description="Coming Soon.">Coming Soon</div></a>
		</div>

		<div id="description"></div>
	</section>
</body>
</html>