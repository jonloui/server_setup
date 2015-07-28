<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Cyphers</title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Jon's Cyphers where you can solve or add cyphers." />
	<meta name="keywords" content="jcypher, cypher, cryptogram, Jonathan, Loui" />
	
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<?php $this->load->view('partials/cypher/common_css_files'); ?>

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<?php $this->load->view('partials/cypher/common_js_files'); ?>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>

	<header id="title">
		<h1>Jon's Cyphers</h1>
	</header>
	<div id='welcome_text' class="silver_box">
		Welcome to Jon's cypher page where you can enter a cypher you wish to decrypt. If you wish to make your own cypher page with the cyphers on this website, have fun making your own version of <a target="_blank" href="jcyphers_api">Jon's API</a>!
	</div>
	<?php
		if(isset($login_status) && $login_status)
		{
	?>
		<div id="error">
			<?php
				// if($this->session->flashdata('error'))
					// echo $this->session->flashdata('error');
			?>
		</div>

		<div id="success">
			<?php
				// if($this->session->flashdata('success'))
					// echo $this->session->flashdata('success');
			?>
		</div>

		<div id="form_container">
			<form action="cyphers/create" method="post" id="new_cypher">
				<label for="cypher">Enter cypher (only alphanumeric characters):</label>
				<textarea name="cypher" rows="5" cols="30" ></textarea>
				<label for="text">Any hints?</label>
				<input type="text" name="hint" placeholder="A=E" maxlength="5" />
				<input type="submit" value="Add cypher" />
			</form>
		</div>
	<?php
		}
		else
		{
	?>
		<div class="silver_box login_message"><a href="/">Login</a> or <a href="/">create an account</a> to start adding cyphers!</div>

	<?php } ?>

	<table id="cypher_index_table">
		<thead>
			<tr>
				<th class="header">Cypher</th>
				<th>Hint</th>
				<th>Action</th>
				<th>Name</th>
				<th class="header headerSortDown">Number</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($all_cyphers as $cypher_info)
				{
					if($cypher_info['user_name'] != "")
						$name = $cypher_info['user_name'];
					else
						$name = $cypher_info['first_name'] . " " . $cypher_info['last_name'];

					echo "<tr>
							<td>" . $cypher_info['cypher'] . "</td>
							<td>" . $cypher_info['hint'] . "</td>
							<td><a href='/cyphers/show/" . $cypher_info['id'] . "'>Solve</a></td>
							<td><a href='/user/profile/{$cypher_info['user_id']}'>" . $name . "</a></td>
							<td>" . $cypher_info['id'] . "</td>
						  </tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>