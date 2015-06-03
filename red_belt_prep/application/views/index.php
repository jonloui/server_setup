<!DOCTYPE html>
<?php
/* By: Jonathan Loui
  Assignment: PHP MVC with CodeIgniter, Red Belt Reviewer, Red Belt Preparations
************************************************
*/
?>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Welcome</title>
	<?= $this->load->view('partials/libraries.php'); ?>
	<link rel="stylesheet" href="/assets/index.css" />
</head>
<body>
	<h1>Welcome!</h1>
	<div class="containers">
		<div id="register_header">Register</div>
		<form action="/users/register" method="post" id="register">
			<label for="Name">Name:</label>
			<input type="text" name="name" placeholder="first last" />
			<label for="alias">Alias:</label>
			<input type="text" name="alias" placeholder="nickname" />
			<label for="email">Email:</label>
			<input type="text" name="email" placeholder="example@example.com">
			<label for="password">Password:</label>
			<input type="password" name="password" />
			<p>*Password should be at least 8 characters</p>
			<label for="confirm_password">Confirm PW:</label>
			<input type="password" name="confirm_password" />
			<input type="submit" value="Register" />
		</form>
		<?php
			if($this->session->flashdata('register_error'))
				echo "<div class='errors'>" . $this->session->flashdata('register_error') . "</div>";
		?>
	</div>
	
	<div class="containers">
		<div id="login_header">Login</div>
		<form action="/users/login" method="post" id="login">
			<label for="email">Email:</label>
			<input type="text" name="email" placeholder="example@example.com">
			<label for="password">Password:</label>
			<input type="password" name="password" />
			<input type="submit" value="Register" />
		</form>
		<?php
			if($this->session->flashdata('login_error'))
				echo "<div class='errors'>" . $this->session->flashdata('login_error') . "</div>";
		?>
	</div>
</body>
</html>