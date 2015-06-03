<?php

// Calculate the star rating for a book 
function calculate_stars($yellow_stars)
{
	$stars = "";

	for ($i=1; $i < 6; $i++)
	{ 
		$color = ($i > $yellow_stars) ? "white" : "yellow";
		$stars .= "<img src='/assets/{$color}_star.jpg' alt='{$color} Star' />";
	}
	return $stars;
}
?>