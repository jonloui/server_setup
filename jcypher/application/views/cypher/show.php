<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Cyphers</title>
	<meta name="description" content="Jon's Cyphers individual cyphers" />
	
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<?php $this->load->view('partials/cypher/common_css_files'); ?>
	<link rel="stylesheet/less" type="text/css" href="/assets/css/cypher/show.less" />

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">
	
	<?php $this->load->view('partials/main/common_js_files'); ?>
	<?php $this->load->view('partials/cypher/common_js_files'); ?>
	<script type="text/javascript" src="/assets/javascript/cypher/show.js"></script>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>

	<header id="title">
		<a href="/cyphers"><h1>Jon's Cypher: <?php echo $cypher['id']; ?></h1></a>
	</header>
	<section id="hints_container">
		<div id="show_hint">
			<p class="silver_box">Your hint is <?php echo $cypher['hint']; ?>!</p>
			<button class="silver_box">Show Hint</button>
		</div>

		<div id="character_container" class="silver_box">
			<?php
				for($i=65; $i < 91; $i++)
					echo "<p class='chars' id='character" . $i . "'>" . chr($i) . "</p>";
			?>
		</div>
	</section>

	<div id="show_cypher_container" class="silver_box">
		<form action="#" method="post">
		<?php
			$line_counter = 0;

			echo "<div>";

			for($i=0; $i < strlen($cypher['cypher']); $i++)
			{
				$character = substr($cypher['cypher'], $i, 1);
				$ascii_value = ord($character);
				$line_counter++;
				
				if($ascii_value >= 65 && $ascii_value <= 90)
				{
				 	echo "<p class='letter'>" . $character . 
				 			"<input type='text' class='char_input " . $ascii_value . "' maxlength='1' />
				 		  </p>";
				}
				else
					echo "<p class='space'>" . $character . "</p>";

				if($character == " ")
				{
					if(strpos(substr($cypher['cypher'], $i+1), " "))
						$temp_string_length = strpos(substr($cypher['cypher'], $i+1), " ");
					// last word in cypher
					else
						$temp_string_length = strlen(substr($cypher['cypher'], $i+1));
					
					if(($line_counter + $temp_string_length) > 25)
					{
						echo "</div><div>";
						$line_counter=0;
					}
				}
			}

			echo "</div>
					<div id='options'>
						<label for='auto_move' id='auto_move_label'>Automatically move cursor</label>
						<input type='checkbox' id='auto_move' checked />
					</div>";
		?>
		</form>
	</div>
</body>
</html>