<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timothy Loui's Resume</title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Timothy Loui&#039;s resume" />
	<meta name="keywords" content="Timothy, Loui, tloui, artwork, digital, portfolio" />
	
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<?php $this->load->view('partials/tloui/common_css_files'); ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/tloui/resume.css" />
	
	<link rel="icon" href="/assets/images/tloui/img/tloui_icon.jpg" />

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<?php $this->load->view('partials/tloui/common_js_files'); ?>
</head>

<body onload="setTitle();">
<?php $this->load->view('partials/tloui/top'); ?>
<!-- Resume along with link to save resume -->
			<div id="resume" onclick="window.open('/assets/misc/tloui/Resume/Resume.doc', '_blank');"></div>

			<div id="resume_link">
				<h3> Click to save Resume.doc </h3>
			</div>
		</div>
	</div>
</div>
</body>
</html>