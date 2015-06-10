<!DOCTYPE html>
<?php
/* By: Jonathan Loui
  Date: 3/6/2015
  Assignment: PHP MVC with CI, Intermediate II, Courses
  *************************************************
  courses table uses name and description
*/
?>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Courses</title>
	<meta name="description" content="PHP MVC with CI, Intermediate II, Courses" />
	<link rel="stylesheet" href="/assets/normalize.css" />
	<link rel="stylesheet" href="/assets/index.css" />
</head>
<body>
	<h1 id="title">Courses</h1>
	<h3>Add a new course</h3>
	<form action="/courses/add" method="post">
		<label for="name">Name (15 character min):</label>
		<input type="text" name="name" placeholder="name" />
		<label for="description">Description (optional):</label>
		<textarea name="description" cols="30" rows="5" placeholder="description"></textarea>
		<input type="submit" value="Add" />
	</form>
	
	<?php
		if(isset($error))
			echo "<div id='error'>" . $error . "</div>";
		if(isset($success))
			echo "<div id='success'>" . $success . "</div>";
	?>

	<h3>Courses</h3>
	<table>
		<thead>
			<tr>
				<th>Course Name</th>
				<th>Description</th>
				<th>Date Added</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($all_courses as $course_info) {
					echo "<tr>" . 
							"<td>" . $course_info['name'] . "</td>" .
							"<td>" . $course_info['description'] . "</td>" .
							"<td>" . date("M jS Y h:iA", strtotime($course_info['created_at'])) . "</td>" .
							"<td><a href='/courses/destroy/" . $course_info['id'] . 
								"'><button>Remove</button></a></td>" .
						"</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>