<!DOCTYPE html>
<html>
<head>
	<title>Jon's Cyphers</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
</head>

<body>
	<h1 id="title">Jon's Cyphers</h1>
	<div id='welcome_text'>
		Welcome to my cypher page where you can enter a cypher you wish to decrypt.
	</div>

	<div id="error">
		<?php
			if($this->session->flashdata('error'))
				echo $this->session->flashdata('error');
		?>
	</div>

	<div id="success">
		<?php
			if($this->session->flashdata('success'))
				echo $this->session->flashdata('success');
		?>
	</div>

	<div id="form_container">
		<form action="/cyphers/create" method="post" id="new_cypher">
			<label for="cypher">Enter cypher (only alphanumeric characters):</label>
			<textarea name="cypher" rows="5" cols="30" ></textarea>
			<label for="text">Any hints?</label>
			<input type="text" name="hint" placeholder="A=E" />
			<input type="submit" value="Add cypher" />
		</form>
	</div>

	<table id="cypher_index_table">
		<thead>
			<tr>
				<th>Cypher</th>
				<th>Hint</th>
				<th>Action</th>
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
						  </tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>