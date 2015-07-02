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
<title>Break My Game - The Leadership</title>
<meta name="description"
	content="The guys runnning who run Break My Game">
<meta name="author" content="Michael Lindon">
<meta name="ROBOTS" content="INDEX, FOLLOW">

<!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
        <!-- unique CSS for this page -->
<link rel="stylesheet" href="theLeadership.css">
</head>
<body>
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
			<h2>The Leadership</h2>

			<table class="leaderTable">
				<tr class="leaderInfoBlock">
					<td>
						<div class="imageLeft leaderImageBlock">
							<img class="leaderImage" src="/img/Leader_Img/Daniels_face.jpg" alt="Image of Daniel">
						</div>
						<div class="leaderDescBlock">
							<h3 class="leaderName">Daniel Palmer</h3>
							<h4 class="leaderPosition">Lord of Breaking Games</h4>
							<hr class="leaderHr">
							<p class="leaderDesc">
								The original organizer of Break My Game. He has put in tons of
								his own blood, sweat and tears in to making this organization
								succeed and making it a force to be reckoned with. He organizes
								all of our events, convention booths, advertising and even finds
								time to work on comic books as a co-founder of <a
									href="https://www.facebook.com/RavenWarrenStudios">Raven Warren
									Studios</a>
							</p>
						</div>
					</td>
				</tr>

				<tr class="leaderInfoBlock">
					<td>
							<div class="imageRight leaderImageBlock">
								<img class="leaderImage" src="/img/Leader_Img/Mikes_face.jpg" alt="Image of Mike">
							</div>
							<div class="leaderDescBlock">
								<h3 class="leaderName">Michael Lindon</h3>
								<h4 class="leaderPosition">Website Baron</h4>
								<hr class="leaderHr">
								<p class="leaderDesc">
									The swell guy who has put this site together and until recently
									has been a part of every break my game. He likes gaming, game
									design, coding and long walks on the beach. He is currently attempting to
									run his own game design studio under the monicker of 
									<a href="https://www.facebook.com/NitroglycerinGames">Nitroglycerin Games</a>.
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
	<script src="/root/theLeadership/theLeadership.js"></script>
	<!-- end javascript section -->
</body>
</html>
