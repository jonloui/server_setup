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

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/javascript/zesty/index.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row">

			<div id="zesty_title" class="col-xs-12 col-sm-12 h2">
				Welcome to Zesty's Supplemental Training
			</div>

			<div id="instructions" class="col-xs-offset-3 col-sm-offset-3 col-xs-6 col-sm-6 silver_box">
				Please select Trialist or Trainer.
			</div>
		</div>

		<div class="row">
			<div class="col-xs-offset-2 col-sm-offset-2 col-xs-2 col-sm-2">
				<a href="/zesty/trialist"><button>Trialist</button></a>
			</div>
			<div class="col-xs-offset-2 col-sm-offset-2 col-xs-2 col-sm-2">
				<a href="/zesty/trainer"><button>Trainer</button></a>
			</div>
		<div>
	</div>
</body>
</html>