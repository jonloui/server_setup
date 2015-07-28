<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Cyphers</title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Jonathan Loui's Portfolio" />
	<meta name="keywords" content="Jonathan, Loui, jcypher" />
	
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<link rel="stylesheet/less" type="text/css" href="/assets/css/main/index.less" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main/styles.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main/fancyInput.css" />

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif" />

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script type="text/javascript" src="/assets/javascript/main/fancyInput.js"></script>
	<script type="text/javascript" src="/assets/javascript/main/index.js"></script>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>
	
	<h1 id="title">Welcome to Jcypher</h1>

	<?php if(isset($login_status) && $login_status) { ?>
		<div id="main_welcome_text" class="silver_box">
			Welcome <?= isset($user_name) && $user_name != "" ? $user_name : $first_name; ?>, you have logged into my site, feel free to check out my projects!
		</div>
	<?php
		}
		else {
	?>
		<section class="form_container">
			<header>
				<h2>Create Account</h2>
			</header>
			<?php
				if($this->session->flashdata("account_error"))
					echo "<p class='error'>" . $this->session->flashdata("account_error") . "</p>";
			?>
			<form action="user/create" method="post">
				<input type="text" name="first_name" placeholder="First Name" maxlength="50" />
				<input type="text" name="last_name" placeholder="Last Name" maxlength="50" />
				<input type="text" name="user_name" placeholder="User Name" maxlength="50" />
				<input type="text" name="email" placeholder="example@example.com" />
				<input type="password" name="password" placeholder="minimum 8 character password" />
				<input type="password" name="confirm_password" placeholder="Re-enter password" />
				<button type="submit">Create Account</button>
			</form>
		</section>
		<section class="form_container">
			<header>
				<h2>Login</h2>
			</header>
			<?php
				if($this->session->flashdata("login_error"))
					echo "<p class='error'>" . $this->session->flashdata("login_error") . "</p>";
			?>
			<form action="session/create" method="post">
				<input type="text" name="email" placeholder="example@example.com" />
				<input type="password" name="password" placeholder="password" />
				<button type="submit">Login</button>
			</form>
		</section>
	<?php } ?>
</body>
</html>