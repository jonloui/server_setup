<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timothy Loui's Demo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="Keywords" content="Timothy Loui, tloui, Timothy Loui&#039;s portfolio, artwork, digital, portfolio" />
	<meta name="Description" content="Timothy Loui's portfolio containing his creative artwork, short animations, resume, and portfolio work" />

	<?php $this->load->view('partials/main/common_css_files'); ?>
	<?php $this->load->view('partials/tloui/common_css_files'); ?>
	
	<link rel="icon" href="/assets/images/tloui/img/tloui_icon.jpg">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<?php $this->load->view('partials/tloui/common_js_files'); ?>
</head>

<body onload="setTitle();">
<?php $this->load->view('partials/tloui/top'); ?>
	<!------ Demo Reel ------>
			<div class="demo_reel">
				<iframe width="660" height="486" 
						src="/assets/media/tloui/Demo/Demo_March_18_2010_Final.swf">
				</iframe>
			</div>

	<!------ Link to Save Demo Reel ------>
			<div class="link">
				<h3><a href="/assets/media/tloui/Demo/Demo_March_18_2010_Final.flv">Demo Reel (Right click to save)</a></h3>
			</div>
		</div>
	</div>
</div>
</body>
</html>

