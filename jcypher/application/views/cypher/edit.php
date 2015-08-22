<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Cyphers</title>

	<meta name="author" content="Jonathan Loui" />
	<meta name="description" content="Jon's Cyphers individual cyphers" />
	<meta name="keywords" content="jcypher, cypher, cryptogram, Jonathan, Loui" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<?php $this->load->view('partials/cypher/common_css_files'); ?>
	<link rel="stylesheet/less" type="text/css" href="/assets/css/cypher/edit.less" />

	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">
	
	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<?php $this->load->view('partials/cypher/common_js_files'); ?>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
				<header id="title">
					<a href="/cyphers"><h1>Jon's Cypher</h1></a>
					<!-- : <?php //echo $cypher['id']; ?> -->
				</header>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
				<div id="success">
					<?php
						if($this->session->flashdata('success'))
							echo $this->session->flashdata('success');
					?>
				</div>
				<div id="edit_cypher_container" class="silver_box">
					<form action="/cyphers/update/<?= $cypher['id'] ?>" method="post">
						<textarea name="cypher" rows="5" cols= "45"><?= $cypher['cypher']; ?></textarea>
						<button>Update Cypher</button>
					</form>
				</div>
				<a href='/cyphers/show/<?= $cypher['id'] ?>'>Solve Cypher</a>
			</div>
		</div>
	</div>
</body>
</html>