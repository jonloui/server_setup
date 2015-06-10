<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete a course</title>
	<link rel="stylesheet" href="/assets/normalize.css" />
	<link rel="stylesheet" href="/assets/destroy.css" />
</head>
<body>
	<h3>Are you sure you want to delete the following course?</h3>
	
	<div class="col1">Name:</div>
	<?= isset($name) ? "<div class='col2'>{$name}</div>" : ""; ?>
	
	<div class="col1">Description:</div>
	<?= isset($description) ? "<div class='col2'>{$description}</div>" : ""; ?>
	
	<form action="/courses/destroy" method="post">
		<input type="submit" name="no" value="No" />
		<input type="submit" name="yes" value="Yes! I want to delete this" />
	</form>

</body>
</html>