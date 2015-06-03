<?php
	session_start();
	
	// outputs the responses
	function entry($location, $min_gold, $max_gold)
	{
		if($location == "casino" && (rand(1,10) > 3))
		{
			$_SESSION['change'] = rand(-50, 0);
			$log[] = "<p class='log2'>You entered the casino and lost " . $_SESSION['change'] . " golds...Ouch.. (" . 
				date("F jS Y h:ia") . ")</p>";
		}
		else
		{
			$_SESSION['change'] = rand($min_gold, $max_gold);
			$log[] = "<p class='log'>You entered the " . $location . " and earned " . $_SESSION['change'] . " golds. (" . 
					date("F jS Y h:ia") . ")</p>";
		}

		$_SESSION['gold'] += $_SESSION['change'];
		$_SESSION['log'][] = $log;
		header("Location: index.php");
		exit();
	}

	if(isset($_POST['location']))
	{
		if($_POST['location'] == "farm")
			entry("farm", 10, 20);
		else if($_POST['location'] == "cave")
			entry("cave", 5, 10);
		else if($_POST['location'] == "house")
			entry("house", 2, 5);
		else if($_POST['location'] == "casino")
			entry("casino", 0, 50);
	}
	else
	{
		session_destroy();
		header("Location: index.php");
		die();
	}
?>