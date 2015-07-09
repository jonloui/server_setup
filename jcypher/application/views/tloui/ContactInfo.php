<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timothy Loui's Contact Info</title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Timothy Loui&#039;s contact info" />
	<meta name="keywords" content="Timothy, Loui, tloui, artwork, digital, portfolio" />

	<?php $this->load->view('partials/main/common_css_files'); ?>
	<?php $this->load->view('partials/tloui/common_css_files'); ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/tloui/contactinfo.css" />
	
	<link rel="icon" href="/assets/images/tloui/img/tloui_icon.jpg">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<?php $this->load->view('partials/tloui/common_js_files'); ?>
</head>

<body onload="setTitle();">
<?php $this->load->view('partials/tloui/top'); ?>
<!------ Contact Information ------>
			<div id="contact_info"></div>
		</div>
	</div>
</div>
</body>
</html>