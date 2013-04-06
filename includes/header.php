<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Ratio Calculator - VT Labs</title>
	<link rel="stylesheet" href="stylesheets/normalize.css" />
	<link rel="stylesheet" href="stylesheets/app.css" />
	<script src="javascripts/vendor/custom.modernizr.js"></script>
	<script>
	function calculateRatio(trigger) {
		var a = document.ratio.a;
		var b = document.ratio.b;
		var c = document.ratio.c;
		var d = document.ratio.d;

		if(trigger == 1 || trigger == 4){
			c.value = (a.value * d.value) / b.value;
		}		
		else if(trigger == 2 || trigger == 3){
			d.value =  (b.value * c.value) / a.value;
		}
		
	}
	</script>
</head>
<body>
	<section id="main-menu">
		<div class="row">
			<nav class="top-bar">
				<ul class="title-area">
				<!-- Title Area -->
				<li class="name">
					<h1><a href="#">VT Labs</a></h1>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
				<!-- Left Nav Section -->
				<ul class="right">
					<li class="divider"></li>
					<li class="has-dropdown"><a href="#">Projects</a>

						<ul class="dropdown">
							<li><a href="#">Ratio Calculator</a></li>
							<li><a href="#">Google Drive Parody</a></li>
						</ul>
					</li>
				</ul>
				</section>
			</nav>
		</div>
	</section>