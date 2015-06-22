<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timothy Loui's Fine Art</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="Keywords" content="Timothy Loui, tloui, Timothy Loui&#039;s portfolio, artwork, digital, portfolio" />
	<meta name="Description" content="Timothy Loui&#039;s portfolio containing his creative artwork, short animations, resume, and portfolio work" />

	<?php $this->load->view('partials/main/common_css_files'); ?>
	<?php $this->load->view('partials/tloui/common_css_files'); ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/tloui/fineart.css" />
	
	<link rel="icon" href="/assets/images/tloui/img/tloui_icon.jpg">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<?php $this->load->view('partials/tloui/common_js_files'); ?>
	<script type="text/javascript" src="/assets/javascript/tloui/animations.js"></script>
	<script type="text/javascript" src="/assets/javascript/tloui/fineart.js"></script>
</head>

<body onload="setTitle();">
<?php $this->load->view('partials/tloui/top'); ?>
<!------ Fine Art Thumbnails ------>
			<div class="thumbnails">
				<div class="thumb_container" 
				onclick="displayimage(1, '800px', '612px', '1337px');" 
				alt = "Beware Of Beast"></div>
				
				<div class="thumb_container" 
				onclick="displayimage(2, '600px', '913px', '1638px');" 
				alt = "Sippy Head"></div>

				<div class="thumb_container" 
				onclick="displayimage(3, '696px', '800px', '1525px');" 
				alt="One Eyed Crawler"></div>

				<div class="thumb_container" 
				onclick="displayimage(4, '693px', '800px', '1525px');" 
				alt="Munkbuster"></div>

				<div class="thumb_container" 
				onclick="displayimage(5, '800px', '816px', '1541px');" 
				alt="Assorted Sharp Things"></div>

				<div class="thumb_container_empty"></div>
				
				<div class="thumb_container" 
				onclick="displayimage(6, '800px', '654px', '1379px');" 
				alt="Tum Tum"></div>

				<div class="thumb_container" 
				onclick="displayimage(7, '715px', '800px', '1525px');" 
				alt="Mushroom Man"></div>

				<div class="thumb_container" 
				onclick="displayimage(8, '604px', '800px', '1525px');" 
				alt="Dragon Soulja"></div>

				<div class="thumb_container_empty"></div>

				<div class="thumb_container_empty"></div>

				<div class="thumb_container" 
				onclick="displayimage(9, '632px', '800px', '1525px');" 
				alt="B&W Woman With Cup"></div>

				<div class="thumb_container" 
				onclick="displayimage(10, '785px', '800px', '1525px');" 
				alt="Fore Shortened Girl"></div>

				<div class="thumb_container" 
				onclick="displayimage(11, '604px', '800px', '1525px');" 
				alt="Self Portrait"></div>

				<div class="thumb_container_empty"></div>

	<!------ Textbox to display when cursor is over an image ------>
				<div id="tempImgText"></div>
			</div>
		</div>

<!------ Fine Art Display ------>
		<div style="width:100%; position:relative; margin-top:0px; ">
			<div id="displaypic"></div>				
		</div>
	</div>
</div>
</body>
</html>
