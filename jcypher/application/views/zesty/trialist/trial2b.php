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
		<?php $this->load->view('zesty/trialist/header'); ?>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 h4">
				Zesty in Menlo Park (Menlo Park)
			</div>
			<div class="col-xs-12 col-sm-12 h6">
				111 Independence Drive, Menlo Park, CA, 94025
			</div>
		</div>

		<div class="row mii_menu">
			<div class="col-xs-4 col-sm-4">
				Map
			</div>
			<div class="col-xs-4 col-sm-4 selected_option">
				Instructions
			</div>
			<div class="col-xs-4 col-sm-4">
				Items
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 h4">Special Instructions:</div>
			<div class="col-xs-12 col-sm-12 h6">Setup Vegan food to the side and have food clearly labeled for Vegans.</div>
			<div class="col-xs-12 col-sm-12">== Client Supplies Information ==</div>

			<div class="col-xs-12 col-sm-12"> - Knives/forks/spoons provided by Zesty. </div>
			<div class="col-xs-offset-1 col-sm-offset-1 col-xs-11 col-sm-11"> Find in box on site. </div>
			<div class="col-xs-12 col-sm-12"> - Napkins provided by Zesty. </div>
			<div class="col-xs-offset-1 col-sm-offset-1 col-xs-11 col-sm-11"> Find in box on site. </div>
			<div class="col-xs-12 col-sm-12"> - Plates provided by Zesty. </div>
			<div class="col-xs-offset-1 col-sm-offset-1 col-xs-11 col-sm-11"> Find in box on site. </div>
			<div class="col-xs-12 col-sm-12"> - Utensils provided by Zesty. </div>
			<div class="col-xs-offset-1 col-sm-offset-1 col-xs-11 col-sm-11"> Find in box on site. </div>
		</div>

		<div class="row footer">
			<div class="col-xs-12 col-sm-12"><a href="/zesty/trialist"><button>Setup Complete</button></a></div>
		</div>
	</div>
</body>
</html>