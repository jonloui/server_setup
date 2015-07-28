<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $user_name . "'s Profile" ?></title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Jonathan Loui's" />
	<meta name="keywords" content="Jonathan, Loui, jcypher" />
	
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<link rel="stylesheet/less" type="text/css" href="/assets/css/user/show.less" />

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif" />

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script src="/assets/javascript/user/show.js" type="text/javascript"></script>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>
	
	<h1 id="title">Welcome <?= $cur_user ? $first_name : "to " . $user_name . "'s Profile" ?></h1>

	<!-- show form option to edit user -->
	<?php if($cur_user) { ?>
		<div id="main_show_text" class="silver_box">
			Welcome <?= $first_name . " " . $last_name ?><!-- , feel free to edit your profile however you want! -->
		</div>

		<section id="user_info">
			<header>
				<h2>User Information</h2>
			</header>

			<ul>
				<li><?= $first_name ?></li>
				<li><?= $last_name ?></li>
				<li><?= $user_name ?></li>
				<li><?= $email ?></li>
			</ul>

			<!-- <button id="edit_button">Edit Information</button> -->
		</section>
		<section id="update_user_info">
			<header>
				<h2>Update User Information</h2>
			</header>
			<form action="users/update" method="post">
				<input type="text" name="first_name" value="<?= $first_name ?>" />
				<input type="text" name="last_name" value="<?= $last_name ?>" />
				<input type="text" name="user_name" value="<?= $user_name ?>" />
				<input type="text" name="email" value="<?= $email ?>" />
				<button type="submit">Change User Information</button>
				<button id="cancel">Cancel</button>
			</form>
		</section>
	<?php
		}
		else {
	?>
		<div id="main_welcome_text" class="silver_box">
			Welcome to <?= $user_name . "'s Profile" ?>
		</div>
	<?php } ?>
</body>
</html>