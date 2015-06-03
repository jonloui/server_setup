<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>User Reviews</title>
	<?= $this->load->view('partials/libraries.php'); ?>
	<link rel="stylesheet" href="/assets/user_review.css" />
</head>
<body>
	<?= $this->load->view('partials/menu.php'); ?>
	<div id="user_info">
		<?php
			echo "<p>User Alias: {$user['alias']}</p>
				  <p>Name: {$user['name']}</p>
				  <p>Email: {$user['email']}</p>
				  <p>Total Reviews: {$user['total_reviews']}</p>";
		?>
	</div>

	<div id="book_list">
		<p>Posted Books on the following books:</p>
		<?php
			foreach ($book_list as $book)
			{
				echo "<p class='books'><a href='/books/{$book['id']}'>{$book['title']}</a></p>";
			}
		?>
	</div>
</body>
</html>