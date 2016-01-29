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
				Lulu's (Menlo Park)
			</div>
			<div class="col-xs-12 col-sm-12 h6">
				3539 Alameda de Las Pulgas
			</div>		
		</div>

		<div class="row mii_menu">
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

		<div class="row pickup_restaurant_details">
			<div class="col-xs-8 col-sm-8">Lulu's</div>
			<div class="col-xs-3 col-sm-3">Full Details</div>
		</div>

		<div class="row items">
			<div class="col-xs-12 col-sm-12">
				3 x Chicken Tikka (half pan)
			</div>
			<div class="col-xs-10 col-sm-10 special_details">
				serve family style: *Gluten Free * NO NUTS! SEVERE ALLERGY*
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>
		<div class="row items">
			<div class="col-xs-12 col-sm-12">
				3 x Turkey, Keema Muttar (use minimal oil please, half pan)
			</div>
			<div class="col-xs-10 col-sm-10 special_details">
				serve family style: *Gluten Free * NO NUTS! SEVERE ALLERGY*
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>
		<div class="row items">
			<div class="col-xs-12 col-sm-12">
				3 x Vegan Entree, Chana Masala (half pan)
			</div>
			<div class="col-xs-10 col-sm-10 special_details">
				serve family style: *Gluten Free * NO NUTS! SEVERE ALLERGY * MARK: for vegans*
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>
		<div class="row items">
			<div class="col-xs-12 col-sm-12">
				5 x Rice, Basmati (half pan)
			</div>
			<div class="col-xs-10 col-sm-10 special_details">
				serve family style: *Gluten Free * NO NUTS! SEVERE ALLERGY*
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>
		<div class="row items">			
			<div class="col-xs-12 col-sm-12">
				6 x Salad, Yogi (coconut lime dressing on the side, no pappadum, nuts on the side, 1/2 pan)
			</div>
			<div class="col-xs-10 col-sm-10 special_details">
				serve family style: *Gluten Free * NO NUTS! SEVERE ALLERGY*
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>
		<div class="row items">
			<div class="col-xs-12 col-sm-12">
				2 x Cucumber Raita (cold food item, half pan)
			</div>
			<div class="col-xs-10 col-sm-10 special_details">
				serve family style: *Gluten Free * NO NUTS! SEVERE ALLERGY*
			</div>
			<div class="col-xs-2 col-sm-2">
				<input type="checkbox" />
			</div>
		</div>

		<div class="row footer">
			<div class="col-xs-12 col-sm-12">
				<a href="/zesty/trialist/trialist_trial3b"><button>Pickup Complete</button></a>
			</div>
		</div>
	</div>
</body>
</html>