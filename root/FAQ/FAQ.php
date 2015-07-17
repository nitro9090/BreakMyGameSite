<!doctype html>
<!--  For twitter bootstrap, determines which version of IE is used and in turn determines what functionality can be used -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
<!--  meta data for the site -->
<title>Break My Game - FAQ</title>
<meta name="description" content="Frequently Asked Questions">
<meta name="author" content="Michael Lindon">

<!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
        <!-- unique CSS for this page -->
<link rel="stylesheet" href="/root/FAQ/FAQ.css">
</head>
<body>
<?php include_once $_SERVER ['DOCUMENT_ROOT'] . "/multiUseCode/php/googleAnalytics.php" ?>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<div id="wrapper">
		<!-- Inserts header html into the page -->
            <?php
            	include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/pageTopBot/pageTop.php";
            ?>
            <!-- main content section -->
		<div class="container">
			<h1 class="text-center">FAQ</h1>

			<div class="FAQdiv dropDownButton">
				<table class="dropDownTable">
					<tr>
						<td class="dropDownHeadline"><h3>
								<u>Does it cost anything to join?</u>
							</h3></td>
						<td class="dropDownSign"><b>+</b></td>
					</tr>
				</table>
				<div class="dropDownDiv">
					<p>No, however we do accept donations. All donations go back into
						this group and help us not reach too deep into our own pockets
						when we need to make posters, flyers, badges, etc.</p>
				</div>
			</div>

			<div class="FAQdiv dropDownButton">
				<table class="dropDownTable">
					<tr>
						<td class="dropDownHeadline"><h3>
								<u>How strict are you on your design standards?</u>
							</h3></td>
						<td class="dropDownSign"><b>+</b></td>
					</tr>
				</table>
				<div class="dropDownDiv">
					<p>We would prefer that everyone follow them as closely as
						possible. If you are having difficulties coming up with a specific
						component or you have an extenuating circumstance that won't allow
						you to finish your design in time for a meeting, we are willing to
						make exceptions. Additionally, if you tell us before the event we
						can help you get your game ready.</p>
				</div>
			</div>

			<div class="FAQdiv dropDownButton">
				<table class="dropDownTable">
					<tr>
						<td class="dropDownHeadline">
							<h3>
								<u>Where is the Board and Brew?</u>
							</h3>
						</td>
						<td class="dropDownSign"><b>+</b></td>
					</tr>
				</table>
				<div class="dropDownDiv">
					<p>
						<a
							href="https://www.google.com/maps/place/The+Board+and+Brew/@38.991637,-76.933839,15z/data=!4m2!3m1!1s0x0:0x88730ec0879b41fb">8150
							Baltimore Ave, College Park, MD 20740</a> <- click here to see it
						in google maps.
					</p>
				</div>
			</div>

			<div class="FAQdiv dropDownButton">
				<table class="dropDownTable">
					<tr>
						<td class="dropDownHeadline">
							<h3>
								<u>Where to park at the Board and Brew? (AKA there is Free
									Parking!)</u>
							</h3>
						</td>
						<td class="dropDownSign"><b>+</b></td>
					</tr>
				</table>
				<div class="dropDownDiv">
					<p>On Sundays, the GG1 lot of University of Maryland is free to
						park</p>

					<p>The approximate location of the lot is shown as the Anacostia
						Tributary Trail below.</p>

					<p>To get there driving south on Baltimore Avenue, pass the Board
						and Brew and take the next right into University of Maryland, take
						the next 2 rights and go straight until you see lot GG1 and park
						there. The bridge on the far side of the parking lot leads to the
						strip mall with the Board and Brew.</p>

					<div class="text-center">
						<iframe width="600" height="450" frameborder="0" style="border: 0"
							src="https://www.google.com/maps/embed/v1/directions?origin=38.989986%2C%20-76.935638&destination=The%20Board%20and%20Brew%2C%20Baltimore%20Avenue%2C%20College%20Park%2C%20MD%2C%20United%20States&key=AIzaSyCGl1f8UcB-FE6gzvmJwkMDn4-7BKmfHb0"></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- End main content section -->
	</div>

	<!-- inserts footer html into the page -->
        <?php
			include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/pageTopBot/pageBottom.php";
        ?>
        <!--  javascript section -->

	<!-- adds in all of the javascript code required to run a basic page -->
        <?php
			include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicJs.php";
        ?>
        
        <!-- unique javascript for this page -->
	<script src="/multiUseCode/js/dropDownButton.js"></script>
	<script src="/root/FAQ/FAQ.js"></script>
	<!-- end javascript section -->
</body>
</html>
