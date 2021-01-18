<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">

            <title>Brain Games</title>

			<link rel="stylesheet" type="text/css" href="../../Public/CSS/style.css">
	</head>

	<body>
		<header>
			<?php include('../Layouts/Navbar.php') ?>

			<!--
                  <div class="bgimg1">
                        <img src="..\css\img\denise-jans-HoqYAnwR-1g-unsplash.jpg">
                  </div>
                  -->

            </header>

		<main>
			<h2><center>Contact Us</center></h2>

			<!--add the additional navigation part and stuff here as per convenience-->
			<center>
				<p>Thank you for trying out our various products.<br>Please complete the form below, so we can provide quick and sufficient service.</p>
				<p>Thank you for choosing us.</p>
			</center>

			<hr>

			<div class="form-center"><!--from CSS centre it and just add some line breaks in the form-->
				<form action="#" method="post">
					<legend>Drop us a line.</legend><br>
					<div class="row">
						<div class="col col-25">
							<label class="form-label" for="name">Your Name  <strong><abbr title="required" aria-label="required">*</abbr></strong></label>
						</div>
						<div class="col col-75">
							<input class="form-input" type="text" name="name" id="name" placeholder="John Smith" required>
						</div>
					</div>

					<div class="row">
						<div class="col col-25">
							<label class="form-label" for="email">Your Email  <strong><abbr title="required" aria-label="required">*</abbr></strong></label>
						</div>
						<div class="col col-75">
							<input class="form-input" type="email" name="email" id="email" required placeholder="example@example.com">
						</div>
					</div>

					<div class="row">
						<div class="col col-25">
							<label class="form-label" for="reason">How can we Help  <strong><abbr title="required" aria-label="required">*</abbr></strong></label>
						</div>
						<div class="col col-75">
							<input class="form-input" type="text" name="reason" required id="reason" placeholder="Input reason Here....">
						</div>
					</div>
					<br>
					<input class="btn btn-submit" type="submit" name="submit" value="submit">
				</form>
			</div>
		</main>

		<?php include_once('../Layouts/Footer.php') ?>
	</body>
</html>
