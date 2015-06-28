<!DOCTYPE html>
<!--
Web Developer: Jonathan Loui
Original Date: 5/26/12 to 5/27/12
v2 Date: 6/22/215
Description: Basic Gallery of images of baby Leo's 1st Birthday
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Baby Leo's 1st Birthday </title>
	<meta name="description" content="Simple gallery of nephew's birthday party" />
	<link rel="icon" href="/assets/images/baby_leo/img/icon.gif" />
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/baby_leo/baby_leo.css" />

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script type="text/javascript" src="/assets/javascript/baby_leo/baby_leo.js"></script>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>
	 <!-- onload="fill_gallery();" -->
	<div id="container">
		<div id="load_container"></div>
		<header id="title_container">
			<div id="left_title" class="title"></div>
			<div id="title"></div>
			<div id="right_title" class="title"></div>
		</header>
		<section id="img_section">
			<div id="thumb_container"></div>
			<div id="button_container">
				<div id="up_button"></div>
				<div id="down_button"></div>
			</div>
			<div id="display">
				<button id='left_button'></button>
				<button id='right_button'></button>
			</div>
		</section>
	</div>
</body>
</html>