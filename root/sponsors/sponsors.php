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
<title>Break My Game - Sponsors</title>
	<meta name="description"
		content="BMG's wonderful sponsors">
	<meta name="author" content="Michael Lindon">
	<meta name="ROBOTS" content="INDEX, FOLLOW">

	<!-- This include adds the basic header lines needed to run the basic page -->
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
    ?>
        
    <!-- unique CSS for this page -->
	<link rel="stylesheet" href="/root/sponsors/sponsors.css">
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
		<div class="container text-center">
			<h1>BMG Sponsors</h1>

			<table class="sponsorTable">
				<tr class="sponsorInfoBlock">
					<td>
						<div class="imageLeft sponsorImageBlock">
							<img class="sponsorImage" src="/img/sponsors/BoardNBrewLogo-height-200px.jpg" alt="Board and Brew Logo">
						</div>
						<div class="sponsorDescBlock">
							<h3 class="sponsorName">The Board and Brew</h3>
							<!--  <h4 class="sponsorPosition"> The loving hosts of BMG </h4>-->
							<hr class="sponsorHr">
							<p class="sponsorDesc">
								The board and Brew is the premier board game cafe of the Washington DC area.  We love and adore them
								for giving us space for our monthly BMG events.  Check out their site 
								<a href="http://www.theboardandbrew.com/">here</a>.
							</p>
						</div>
					</td>
				</tr>

				<tr class="sponsorInfoBlock">
					<td>
							<div class="imageRight sponsorImageBlock">
								<img class="sponsorImage" src="/img/sponsors/RavenWarrenLogo-height-200px.png" alt="Raven Warren Studios Logo">
							</div>
							<div class="sponsorDescBlock">
								<h3 class="sponsorName">Raven Warren Studios</h3>
								<!--  <h4 class="sponsorPosition"></h4>-->
								<hr class="sponsorHr">
								<p class="sponsorDesc">
									Raven Warren Studios is a small publishing studio based on Maryland's Eastern Shore, specializing in sequential, 
									prose, and game development. Their current line-up includes Kidthulhu, Dead Future, and Raven Warren Presents.
									Their goal: To make awesome and help others achieve awesome. 
									They are run by our very own Daniel Palmer and his partner Martin.  
									Check out their facebook page <a href="https://www.facebook.com/RavenWarrenStudios">here</a>.
								</p>
							</div>
					</td>
				</tr>
			</table>
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
	<script src="/root/sponsors/sponsors.js"></script>
	<!-- end javascript section -->
</body>
</html>
