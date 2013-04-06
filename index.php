<?php include("includes/header.php") ?>
	<header>
		<div class="row">
			<div class="large-12 columns">
				<h1>Ratio Calculator</h1>
				<p>For funny, attractive people.</p>
			</div>
		</div>
	</header>
	
	<section id="app">
		<div class="row">
			<form name="ratio">
			<div id="cleft" class="large-6 small-6 columns text-right">
				<input type="text" name="a" value="1" onkeyup="calculateRatio(1)" autocomplete="off">
				<input type="text" name="b" value="1" onkeyup="calculateRatio(2)" autocomplete="off">
			</div>
			
			<div id="cright" class="large-6 small-6 columns">
				<input type="text" name="c" value="1" onkeyup="calculateRatio(3)" autocomplete="off">
				<input type="text" name="d" value="1" onkeyup="calculateRatio(4)" autocomplete="off">
			</div>
			</form>
		</div>
	</section>
<?php include("includes/footer.php") ?>