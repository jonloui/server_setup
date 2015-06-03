<!DOCTYPE html>
<?= $this->load->view('partials/functions.php'); ?>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Books Home</title>
	<?= $this->load->view('partials/libraries.php'); ?>
	<link rel="stylesheet" href="/assets/book_home.css" />
</head>
<body>
	<?= $this->load->view('partials/menu.php'); ?>
	<h3>Welcome <?= $first_name; ?></h3>
	<div id="recent_reviews">
		<h4>Recent Book Reviews:</h4>
		<?php
			foreach ($book_reviews as $all_reviews => $review)
			{
				$date = date_format(date_create(substr($review['review_created_at'], 0, 10)), 'F j, Y');
				// calculate stars
				$rating_stars = calculate_stars($review['ratings']);

				echo "<a href='/books/{$review['book_id']}'><h4>{$review['title']}</h4></a>
					  <div class='review'>
						<p>Rating: {$rating_stars}</p>
						<p><a href='/users/{$review['user_id']}'>{$review['first_name']}</a> says: {$review['review']}</p>
						<p>Posted On {$date}</p>
					  </div>";
			}
		?>
	</div>
	
	<div id="other_reviews">
		<h4>Other Books with Reviews:</h4>
		<div>
			<?php
				foreach ($book_list as $book)
				{
					echo "<p><a href='/books/{$book['id']}'>{$book['title']}</a></p>";
				}
			?>
		</div>
	</div>
</body>
</html>