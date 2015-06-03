<div class="menu_container">
	<?php

		if($page == "books_home")
			echo "<a href='/books/add' class='menu'>Add Book and Review</a>";
		else if($page == "user_review")
		{
			echo "<a href='/books' class='menu'>Home</a>
				  <a href='/books/add' class='menu'>Add Book and Review</a>";
		}
		else
			echo "<a href='/books' class='menu'>Home</a>";

		if($login_status)
			echo "<a href='/users/logout' class='menu'>Logout</a>";
		else
			echo "<a href='/users/index' class='menu'>Login</a>";
	?>
</div>