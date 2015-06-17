<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Cyphers</title>
	<!-- add a description -->
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="/assets/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/cypher/index.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/cypher/show.css" />
	<link rel="webpage icon" href="/assets/images/jonathan_loui_img.gif">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/javascript/cypher/show.js"></script>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>

	<h1 id="title">Jon's Cypher: <?php echo $cypher['id']; ?></h1>

	<div id="hint">
		Your hint is <?php echo $cypher['hint']; ?>!
	</div>

	<div id="character_container">
		<?php
			for($i=65; $i < 91; $i++)
				echo "<p class='chars' id='character" . $i . "'>" . chr($i) . "</p>";
		?>
	</div>

	<div>
		<form action="#" method="post">
		<?php
			for($i=0; $i < strlen($cypher['cypher']); $i++)
			{
				$character = substr($cypher['cypher'], $i, 1);
				$ascii_value = ord($character);
				
				if($ascii_value >= 65 && $ascii_value <= 90)
				{
				 	echo "<p class='letter'>" . $character . 
				 			"<input type='text' class='char_input " . $ascii_value . "' maxlength='1' />
				 		  </p>";
				}
				else
					echo "<p class='space'>" . $character . "</p>";
			}

		?>
		</form>
	</div>
</body>
</html>