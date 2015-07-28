<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Bookmark</title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Jon's Bookmark where users can access their bookmarks anywhere." />
	<meta name="keywords" content="jcypher, bookmark, Jonathan, Loui" />
	
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<?php $this->load->view('partials/bookmark/common_css_files'); ?>

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<?php $this->load->view('partials/bookmark/common_js_files'); ?>
</head>

<body class="ui-widget-header">
	<?php $this->load->view('partials/header'); ?>

	<header id="title" class="ui-widget">
		<h1><?= $first_name ?>'s Bookmarks</h1>
	</header>
	<?php
		if($id == 1)
			echo "<div id='message'>
					I initially created this project in 2009 and it has gone through several versions over the years.  I decided to redo the concept using jQuery UI to give it a simple interface, but also eliminated some of the user customizing ability.  I used PHP code in a past version to manipulate one html file.  Now I'm using a MySQL database to store the information.
				  </div>";
	?>
	<div id="bookmark_container">
	<?php
		foreach ($sections as $section_info)
		{
			echo "<h3 class='ui-widget-header'>{$section_info['name']}
					<span class='ui-icon ui-icon-plus' value='{$section_info['id']}'></span>
				  </h3>
				  <div>
				  	<ul class='menu_links'>";

			  		foreach ($links as $link_info)
			  		{
			  			foreach ($link_locations as $link_locations_info)
			  			{
			  				if($section_info['id'] == $link_locations_info['bookmark_section_id'] && $link_info['id'] == $link_locations_info['bookmark_link_id'])
			  					echo "<li>
										<a href='{$link_info['link']}' target='_blank'>{$link_info['name']}</a>
									</li>";
			  			}
			  		}
			echo "	</ul>
				  </div>";
		}
	?>
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
				<input type="text" name="link" class="input_default" placeholder="http://jcypher.com/bookmark" />
				<label for="link_name">Name for Link:</label>
				<input type="text" name="link_name" class="input_default" maxlength="50" placeholder="jcypher" />
				<input type="submit" value="Add Link" />
				<button type="button" id="form_cancel">Cancel</button>
			</form>
		</section>
	</div>	
</body>
</html>