<!DOCTYPE html>
<?= $this->load->view('partials/functions.php'); ?>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Add Book and Review</title>
	<?= $this->load->view('partials/libraries.php'); ?>
	<link rel="stylesheet" href="/assets/book_review.css" />
</head>
<body>
	<?= $this->load->view('partials/menu.php'); ?>
	<h3><?= $book_info['title'] ?></h3>
	<p>Author: <?= $book_info['authors_name'] ?></p>

	<div class="reviews">
		<h3>Reviews:</h3>
		<?php
			foreach ($book_reviews as $all_reviews => $review)
			{
				$date = date_format(date_create(substr($review['review_created_at'], 0, 10)), 'F j, Y');
				// calculate stars
				$rating_stars = calculate_stars($review['ratings']);

				echo "<div class='review'>
						<p>Rating: {$rating_stars}</p>
						<p><a href='/users/{$review['user_id']}'>{$review['first_name']}</a> says: {$review['review']}</p>
						<p>Posted On {$date}</p>
					 </div>";
			}
		?>
	</div>

	<div class="new_review">
		<form action="/books/add_review" method="post">
			<label for="review"><h3>Add a Review:</h3></label>
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
			<input type="hidden" name="book_title" value="<?= $book_info['title'] ?>" />
			<input type="hidden" name="author_list" value="<?= $book_info['authors_name'] ?>" />
			<input type="submit" value="Submit Review" id="form_button" />
		</form>	
	</div>


	
</body>
</html>