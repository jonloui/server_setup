<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Add Book and Review</title>
	<?= $this->load->view('partials/libraries.php'); ?>
	<link rel="stylesheet" href="/assets/add.css" />
</head>
<body>
	<?= $this->load->view('partials/menu.php'); ?>
	<h4>Add a New Book Title and a Review:</h4>

	<form action="/books/add_review" method="post">
		<label for="book_title">Book Title:</label>
		<input type="text" name="book_title" />
		<p>Author:</p>
			<label for="author_list" class="author">Choose from the list:</label>
			<select name="author_list">
				<?php
					foreach ($authors as $name => $author)
					{
						$authors_name = $author['author_first'] . " " . $author['author_last'];
						echo "<option value='{$authors_name}'>{$authors_name}</option>";
					}
				?>
			</select>
			<label for="new_author" class="author">Or add a new author:</label>
			<input type="text" name="new_author" />
		<label for="review">Review:</label>
		<textarea name="review" cols="30" rows="5"></textarea>
		<label for="rating">
			Rating
			<select name="rating">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3" selected>3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			stars.
		</label>
		<input type="submit" value="Add Book and Review" />
	</form>
	<?php
		if($this->session->flashdata('book_error'))
			echo "<div class='errors'>" . $this->session->flashdata('book_error') . "</div>";
	?>
</body>
</html>