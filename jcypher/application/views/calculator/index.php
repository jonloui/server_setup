<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon's Calculator</title>
	<meta name="Keywords" content="Jonathan Loui, jcypher" />
	<meta name="description" content="Jonathan Loui's Calculator Project" />
	<?php $this->load->view('partials/main/common_css_files'); ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/calculator/calculator.css" />
	
	<link rel="icon" href="/assets/images/jonathan_loui_img.gif">

	<?php $this->load->view('partials/main/common_js_files'); ?>
	<script type="text/javascript" src="/assets/js/calculator/calculator.js"></script>
</head>

<body>
	<?php $this->load->view('partials/header'); ?>
		<div id="container_content">
			<div id="page_title"></div>
			<div id="container_middle" style="height:800px; ">
				<div id="container_middle1">
					
					
					<div id="calculator_container" class="silver_box">
						<div id="calculator">
							<div id="container_buttons">
								<div class="container_buttonsA">
									<div class="buttons" style="background-image:url('calculator/1.jpg'); " onclick="calculate('1');"> </div>
									<div class="buttons" style="background-image:url('calculator/2.jpg'); " onclick="calculate('2');"> </div>
									<div class="buttons" style="background-image:url('calculator/3.jpg'); " onclick="calculate('3');"> </div>
									<div class="buttons" style="background-image:url('calculator/4.jpg'); " onclick="calculate('4');"> </div>
									<div class="buttons" style="background-image:url('calculator/5.jpg'); " onclick="calculate('5');"> </div>
									<div class="buttons" style="background-image:url('calculator/6.jpg'); " onclick="calculate('6');"> </div>
									<div class="buttons" style="background-image:url('calculator/7.jpg'); " onclick="calculate('7');"> </div>
									<div class="buttons" style="background-image:url('calculator/8.jpg'); " onclick="calculate('8');"> </div>
									<div class="buttons" style="background-image:url('calculator/9.jpg'); " onclick="calculate('9');"> </div>
									<div class="buttons" style="background-image:url('calculator/0.jpg'); " onclick="calculate('0');"> </div>
								</div>
								<div class="container_buttonsA">
									<div class="buttons" style="background-image:url('calculator/+.jpg'); " onclick="calculate('+');"> </div>
									<div class="buttons" style="background-image:url('calculator/-.jpg'); " onclick="calculate('-');"> </div>
									<div class="buttons" style="background-image:url('calculator/x.jpg'); " onclick="calculate('x');"> </div>
									<div class="buttons" style="background-image:url('calculator/div.jpg'); " onclick="calculate('div');"> </div>
									<div class="buttons" style="background-image:url('calculator/decimal.jpg'); " onclick="calculate('decimal');"> </div>
									<div class="buttons" style="background-image:url('calculator/clear.jpg'); " onclick="calculate('clear');"> </div>
									<div class="buttons" style="background-image:url('calculator/=.jpg'); height:200px; " onclick="calculate('=');"> </div>
									<div class="buttons" style="background-image:url('calculator/back.jpg'); height:200px; " onclick="calculate('back');"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div id="container_middle2">
					<div id="results_container">
						<h1> Calculator </h1>
						<div id="results_container2">
							<div id="results">
								Push some buttons!
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
</body>
</html>