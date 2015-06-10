<?php 
/* By: Jonathan Loui
  Date: 3/2/2015
  Assignment: PHP Advanced, Intermediate, Ninja Gold Game
  *** REVISED ***
*/
	session_start();
	if(!isset($_SESSION['gold']))
		$_SESSION['gold'] = 0;

	function gold()
	{
		return $_SESSION['gold'];
	}

	function output_forms($value)
	{
		($value == "reset") ? $button="Reset" : $button="Add";
		
		return '<form action="phpadvanced_intermediate_proccess_jonathan_loui.php" method="post">
			<input type="hidden" name="location" value="' . $value . '" />
			<input type="submit" class="button" value="' . $button . '!" />
			</form>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ninja Gold Game</title>
	<meta name="description" content="php advanced, Intermediate, Ninja Gold Game" />
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="phpadvanced_intermediate_jonathan_loui.css" />
</head>
<body>
	<h1 id="title">Ninja Gold Game</h1>
	<div id="total_gold">
		Your Gold: <p><?php echo gold(); ?></p>
		<?php output_forms('reset'); ?>
	</div>	
	<div class="locations">
		<h3>Farm</h3>
		<h3>(earns 10-20 golds)</h3>
		<?php output_forms('farm'); ?>
	</div>
	<div class="locations">
		<h3>Cave</h3>
		<h3>(earns 5-10 golds)</h3>
		<?php output_forms('cave'); ?>
	</div>
	<div class="locations">
		<h3>House</h3>
		<h3>(earns 2-5 golds)</h3>
		<?php output_forms('house'); ?>
	</div>
	<div class="locations">
		<h3>Casino</h3>
		<h3>(earns/loses 0-50 golds)</h3>
		<?php output_forms('casino'); ?>
	</div>
	<p>Activities:</p>
	<div id="activities">
<?php 
	if(isset($_SESSION['log']))
	{
		foreach($_SESSION['log'] as $entry)
			echo $entry;
	}
?>
	</div>
</body>
</html>