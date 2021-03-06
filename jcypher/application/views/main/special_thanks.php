<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Cyphers</title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Jonathan Loui's Special Thanks" />
	<meta name="keywords" content="jcypher, Jonathan, Loui" />
	
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<link rel="stylesheet/less" type="text/css" href="/assets/css/main/special_thanks.less" />

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script type="text/javascript" src="/assets/javascript/main/special_thanks.js"></script>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>
	
	<h1 id="title">Special Thanks</h1>
	<div id='thank_you_message' class="silver_box">
		Special thanks to those developers who made it easier for us to build websites and power this site.
	</div>

	<div id="thank_you_link_container" class="silver_box">
		<a target="_blank" href="http://aws.amazon.com/"><img src="/assets/images/main/special_thanks/aws_logo.jpg" alt="AWS logo" /></a>
		<a target="_blank" href="http://www.codeigniter.com/"><img src="/assets/images/main/special_thanks/code_igniter_logo.png" alt="Code Igniter logo" /></a>
		<a target="_blank" href="http://www.mysql.com/"><img src="/assets/images/main/special_thanks/mysql_logo.png " alt="MySQL logo" /></a>
		<a target="_blank" href="http://jquery.com/"><img src="/assets/images/main/special_thanks/jquery_logo.png" alt="jQuery logo" /></a>
		<a target="_blank" href="http://www.ubuntu.com/"><img src="/assets/images/main/special_thanks/ubuntu_logo.png" alt="Ubuntu logo" /></a>
		<a target="_blank" href="http://nginx.org/"><img src="/assets/images/main/special_thanks/nginx_logo.png" alt="Nginx logo" /></a>
		<a target="_blank" href="http://lesscss.org/"><img src="/assets/images/main/special_thanks/less_logo.png" alt="Less logo" /></a>
		<a target="_blank" href="http://jqueryui.com/"><img src="/assets/images/main/special_thanks/jQueryUI_logo.png" alt="jQuery UI logo" /></a>
		<!-- <a target="_blank" href=""><img src="/assets/images/main/special_thanks/ " alt=" logo" /></a> -->
	</div>
</body>
</html>