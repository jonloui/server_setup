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

			<div id="trials_container" class="col-xs-12 col-sm-12 silver_box">
				<header class="h2">Trials</header>
				<ul>
					<li><a href="/zesty/trialist/trial1"><button>Trial 1</button></a></li>
					<li><button>Trial 2</button></li>
					<li><button>Trial 3</button></li>
				</ul>
			</div>
		</div>

	</div>
</body>
</html>