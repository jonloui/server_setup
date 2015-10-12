<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zesty Training</title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Zesty supplemental training scenarios." />
	<meta name="keywords" content="Zesty, Zesty training, Zesty training scenarios" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php $this->load->view('partials/main/common_css_files'); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet/less" type="text/css" href="/assets/css/zesty/index.less" />
	<link rel="stylesheet/less" type="text/css" href="/assets/css/zesty/trials.less" />

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/javascript/zesty/index.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<div class="col-xs-2 col-sm-2">
				< Tasks
			</div>

			<div class="col-xs-offset-3 col-sm-offset-3 col-xs-2 col-sm-2">
				Pickup
			</div>

			<div class="col-xs-offset-3 col-sm-offset-3 col-xs-2 col-sm-2">
				Contacts
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1">
				at 10:55 AM
			</div>
			<div class="col-xs-offset-9 col-sm-offset-9 col-xs-2 col-sm-2">
				Reference: ZMP001
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<header class="h3">Zesty de la Menlo Park (Menlo Park)</header>
			</div>
			<div class="col-xs-12 col-sm-12">
				111 Independence Drive, Menlo Park, CA, 94025
			</div>		
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4">
				Map
			</div>
			<div class="col-xs-4 col-sm-4">
				Instructions
			</div>
			<div class="col-xs-4 col-sm-4 selected_option">
				Items
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2">Zesty de la Menlo Park</div>
			<div class="col-xs-offset-8 col-sm-offset-8 col-xs-1 col-sm-1">Full Details</div>
		</div>

		<div class="row">
			<div class="col-xs-10 col-sm-10">
				1 x Chicken (curry sauce on the side)
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-sm-10">
				1 x Beef
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-sm-10">
				1 x Salad (dressing on the side)
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>
		<div class="row">			
			<div class="col-xs-10 col-sm-10">
				1 x Brown Rice
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12"><a href="/zesty/trialist/trial1b">Send Pickup Feedback</a></div>
		</div>
	</div>
</body>
</html>