<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timothy Loui's Resume</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="Keywords" content="Timothy Loui, tloui, Timothy Loui&#039;s portfolio, artwork, digital, portfolio" />
	<meta name="Description" content="Timothy Loui&#039;s portfolio containing his creative artwork, short animations, resume, and portfolio work" />

	<?php $this->load->view('partials/main/common_css_files'); ?>
	<?php $this->load->view('partials/tloui/common_css_files'); ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/tloui/resume.css" />
	
	<link rel="icon" href="/assets/images/tloui/img/tloui_icon.jpg" />

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<?php $this->load->view('partials/tloui/common_js_files'); ?>
</head>

<body onload="setTitle();">
<?php $this->load->view('partials/tloui/top'); ?>
<!------ Resume along with link to save resume ------>
			<div id="resume" onclick="window.open('/assets/misc/tloui/Resume/Resume.doc', '_blank');"></div>

			<div id="resume_link">
				<h3> Click to save Resume.doc </h3>
			</div>
		</div>
	</div>
</div>
</body>
</html>