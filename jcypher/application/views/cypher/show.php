<!DOCTYPE html>
<html>
<head>
	<title>Jon's Cyphers</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/show.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

	// 		$(document).keypress(function(event){
 //    alert(String.fromCharCode(event.which)); 
 // })
			// $('.char_input').change(function() {
			// 	// console.log($(this).val());
			// 	current_class = "." + $(this).attr('class').substring(11);
			// 	console.log(current_class);
			// });
			prev_char="";
			prev_class;
			$('.char_input').keydown(function() {
				prev_char = $(this).val().charCodeAt(0);
				prev_class = "." + $(this).attr('class').substring(11);
			}).keyup(function() {
					console.log(prev_char + " " + $(prev_class).val());
				});
				// $(this).change(function() {
				// 	console.log(current_char);

				// });
			// 	current_char = $(this).val().charCodeAt(0);
			// 	current_class = "." + $(this).attr('class').substring(11);
				
			// 	$(this).keyup(function() {
			// 		// if(current_char != $(current_class).val().charCodeAt(0) && current_char >= 65 && current_char <= 90)
			// 		// 	$('#character' + current_char.toString()).hide();

			// 		console.log($(current_class).val());
			// 		$('.' + $(this).attr('class').substring(11)).val($(this).val().toUpperCase());
			// 		// //$(this).parent().next().children("input").focus();

			// 		// // $('.character' + $(this).attr('class').substring(11)).text() = "";
			// 		// ascii_value = $(this).val().toUpperCase().charCodeAt(0);

			// 		// if(ascii_value >= 65 && ascii_value <= 90)
			// 		// {
			// 		// 	$('#character' + ascii_value.toString()).hide();
			// 		// 	// console.log('#character' + ascii_value.toString());
			// 		// }
			// 		// else if(current_char >= 65 && current_char <= 90)
			// 		// {
			// 		// 	$('#character' + current_char.toString()).show();
			// 		// }

				
			// });
		});
	</script>
</head>

<body>
	<a href="/cyphers">Main page</a>
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
					// echo "<p class='space'><ul><li>" . $character . "</li><li>" . $character . "</li></ul></p>";
					echo "<p class='space'>" . $character . "</p>";
			}

		?>
		</form>
	</div>
</body>
</html>