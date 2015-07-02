<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Cyphers</title>
	<meta name="description" content="Jon's Cyphers where you can solve or add cyphers." />
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
		Welcome to my cypher page where you can enter a cypher you wish to decrypt. <a target="_blank" href="jcyphers_api">API here</a>
	</div>

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

	<table id="cypher_index_table">
		<thead>
			<tr>
				<th class="header">Cypher</th>
				<th>Hint</th>
				<th>Action</th>
				<th class="header headerSortDown">Number</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($all_cyphers as $cypher_info)
				{
					echo "<tr>
							<td>" . $cypher_info['cypher'] . "</td>
							<td>" . $cypher_info['hint'] . "</td>
							<td><a href='/cyphers/show/" . $cypher_info['id'] . "'>Solve</a></td>
							<td>" . $cypher_info['id'] . "</td>
						  </tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>