<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Cyphers</title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Jon's Cyphers individual cyphers" />
	<meta name="keywords" content="jcypher, cypher, cryptogram, Jonathan, Loui" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<?php $this->load->view('partials/cypher/common_css_files'); ?>
	<link rel="stylesheet/less" type="text/css" href="/assets/css/cypher/show.less" />

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">
	
	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<?php $this->load->view('partials/cypher/common_js_files'); ?>
	<script type="text/javascript" src="/assets/javascript/cypher/show.js"></script>
	
</head>

<body>
	<?php $this->load->view('partials/header'); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
				<header id="title">
					<a href="/cyphers"><h1>Jon's Cypher</h1></a>
					<!-- : <?php //echo $cypher['id']; ?> -->
				</header>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<!-- col-xs-3 col-sm-3 col-md-3  -->
				<section id="cypher_menu">
					<header>
						<h2>Menu Options</h2>
					</header>
					<!--
						select a new quote
						AJAX features to work on
						like feature
						mark down as solved
					-->
					<button class="silver_box" id="show_hint" alt="Your hint is <?php echo $cypher['hint']; ?>">Show Hint</button>
					<button class="silver_box" id="reset_button">Reset</button>
					<a href="/cyphers/show/<?php echo $cypher['id'] + 1; ?>"><button class="silver_box">New Cypher</button></a>
					<button class="silver_box" id="auto_cursor">Auto Cursor: on</button>
				</section>
			</div>
			
			<div class="col-lg-7">
				<!-- col-xs-7 col-sm-7 col-md-7  -->
				<div id="character_container" class="silver_box">
					<?php
						for($i=65; $i < 91; $i++)
							echo "<p class='chars' id='character" . $i . "'>" . chr($i) . "</p>";
					?>
				</div>

				<div id="show_cypher_container" class="silver_box">
					<form action="#" method="post">
					<?php
						$line_counter = 0;

						echo "<div>";

						for($i=0; $i < strlen($cypher['cypher']); $i++)
						{
							// $character = substr($cypher['cypher'], $i, 1);
							$character = $cypher['cypher'][$i];
							$ascii_value = ord($character);
							$line_counter++;
							
							if($ascii_value >= 65 && $ascii_value <= 90)
							{
							 	echo "<p class='letter'>" . $character . " " .
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
								
								if(($line_counter + $temp_string_length) > 27)
								{
									echo "</div><div>";
									$line_counter=0;
								}
							}
						}

						echo "</div>";
					?>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>