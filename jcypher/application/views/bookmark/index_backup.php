<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Bookmark</title>
	<meta name="description" content="Jon's Bookmark where users can access their bookmarks anywhere." />
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<?php $this->load->view('partials/bookmark/common_css_files'); ?>

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<?php $this->load->view('partials/bookmark/common_js_files'); ?>
</head>

<body class="ui-widget-header">
	<?php $this->load->view('partials/header'); ?>

	<header id="title" class="ui-widget">
		<h1>Jon's Bookmarks</h1>
	</header>
	<div id='message'>
		I initially created this project in 2009 and it has gone through several versions over the years.  I decided to redo the concept using jQuery UI to give it a simple interface, but also eliminated some of the user customizing ability.  I used PHP code in a past version to manipulate one html file.  Now I'm using a MySQL database to store the information.
	</div>

	<div id="bookmark_container">
		<h3 class="ui-widget-header">Search Engine links
			<span class="ui-icon ui-icon-plus" value="1"></span>
		</h3>
		<div>
			<ul class="menu_links">
				<li>
					<a href="https://www.yahoo.com/" target="_blank">Yahoo</a>
				</li>
				<li>
					<a href="http://www.google.com/" target="_blank">Google</a>
				</li>
				<li>
					<a href="https://www.youtube.com/" target="_blank">YouTube</a>
				</li>
			</ul>
		</div>
		<h3>Comics
			<span class="ui-icon ui-icon-plus" value="2"></span>
		</h3>
		<div>
			<ul class="menu_links">
				<li>
					<a href="www.giantitp.com" target="_blank">Giant in the Playground</a>
				</li>
				<li>
					<a href="http://www.lfg.co/" target="_blank">Looking For Group</a>
				</li>
				<li>
					<a href="" target="_blank"></a>
				</li>
			</ul>
		</div>
		<h3>Web Developer Sites
			<span class="ui-icon ui-icon-plus" value="3"></span>
		</h3>
		<div>
			<ul class="menu_links">
				<li>
					<a href="http://www.binaryhexconverter.com/decimal-to-hex-converter" target="_blank">Decimal to Hex Converter</a>
				</li>
				<li>
					<a href="http://www.w3schools.com/" target="_blank">w3schools</a>
				</li>
				<li>
					<a href="" target="_blank"></a>
				</li>
			</ul>
		</div>
	</div>

	<div id="form_container">
		<section id="add_new_section_container">
			<header>
				<h2>Adding A New Section</h2>
			</header>
			<form action="/bookmarks/create/0" method="post">
				<label for="section_name">Enter a new Section name:</label>
				<input type="text" name="section_name" class="input_default" maxlength="50" />
				<input type="submit" value="Add Section" />
			</form>
		</section>
		<section id="add_new_link_container">
			<header>
				<h2>Adding A New Link</h2>
			</header>
			<form action="/bookmarks/create/1" method="post">
				<label for="link">Add a new Link:</label>
				<input type="text" name="link" class="input_default" />
				<label for="link_name">Name for Link:</label>
				<input type="text" name="link_name" class="input_default" maxlength="50" />
				<input type="submit" value="Add Link" />
				<button type="button" id="form_cancel">Cancel</button>
			</form>
		</section>
	</div>	
</body>
</html>