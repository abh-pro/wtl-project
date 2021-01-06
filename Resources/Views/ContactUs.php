<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">

            <title>Brain Games</title>

            <link rel="stylesheet" type="text/css" href="../css/style.css">

	</head>

	<body>
		<header>
			<div class="navbar">
                        <a href="index.html">Home</a>

                        <a href="aboutus.html">About Us</a>

                        <div class="dropdown">
                              <button class="dropbtn">Brain Games
                                    <i class="down"></i>
                              </button>

                              <div class="dropdown-content">
                                    <a href="braingames.html">Typing Test</a>
                                    <a href="braingames.html">Situation Test</a>
                                    <a href="braingames.html">Memory Game</a>
                                    <!--<a href="#">Sudoku</a>    optional-->
                              </div>
                        </div>

                        <a href="funfact.html">Fun Facts</a>

                        <a href="contactus.html">Contact Us</a>
                  </div>

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

			<div class="form-cont"><!--from CSS centre it and just add some line breaks in the form-->
				<form>
					<legend>Drop us a line.</legend>
					<br>

					<label for="name">Your Name:</label>
						<br>
						<input type="name" name="name" id="name" placeholder="John Smith">
						<br>

					<label for="email">Your Email:<strong><abbr title="required" aria-label="required">*</abbr></strong></label>
						<br>
						<input type="email" name="email" id="email" required="1" placeholder="example@example.com">
						<br>

					<label for="reason">How can we Help:</label><strong><abbr title="required" aria-label="required">*</abbr></strong>
						<br>
						<input type="text" name="reason" required="1" id="reason" placeholder="Input reason Here....">
						<br>

					<br>
					<input type="button" name="submit" value="submit"><!--just increase the size of this text box from CSS-->
				</form>
			</div>
		</main>

		<footer>
			<i>Made in conjunction with abhishek,diksha,mitesh,prathamesh,shreekant.</i>
		</footer>
	</body>
</html>
