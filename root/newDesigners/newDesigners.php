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

	<title>Break My Game - Template</title>
	<meta name="description" content="DESCRIBE THE PAGE">
	<meta name="author" content="Michael Lindon">

<!-- This include adds the basic header lines needed to run the basic page -->
        <?php
		include_once $_SERVER ['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
		?>
        
        <!-- unique CSS for this page EDIT MY LINK! -->
	<link rel="stylesheet" href="/root/newDesigners/newDesigners.css">
</head>
<body>
<?php include_once $_SERVER ['DOCUMENT_ROOT'] . "/multiUseCode/php/googleAnalytics.php" ?>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<div id="wrapper">
		<!-- Inserts header html into the page -->
           <?php
			include_once $_SERVER ['DOCUMENT_ROOT'] . "/multiUseCode/pageTopBot/pageTop.php";
			?>
            <!-- main content section -->
		<div class="container text-center">
			<h1>New Designers</h1>
			<p>So, you want to show off your game design at Break My Game? </p> 
			
			<p>Here are the steps you need to take to get involved.</p>
			
			<div class="textLeft">
			<ol class="orderedList">
				<li>Come to a BMG event as a playtester. That way you can see how all of this works
					and you can be well prepared when you bring your own design.</li>
				<li>Design and build your Board Game.  Make sure to read BMG's 
					<a href="designerStandards">Designer Standards</a>.</li>
				<li>Send Daniel an <a href="emailto:Daniel@breakmygamegroup.com">email</a>
					with information about your game, the game's footprint (how much
					table space it needs) and any special notes about your setup.
				<li><a href="eventSignUp"> Sign up for an event slot</a>. <b> Note, you will have to do
					this for every event.</b></li>
				</li>
			</ol>
			</div>
		</div>
		<!-- End main content section -->
	</div>

	<!-- inserts footer html into the page -->
        <?php
								include_once $_SERVER ['DOCUMENT_ROOT'] . "/multiUseCode/pageTopBot/pageBottom.php";
								?>
        <!--  javascript section -->

	<!-- adds in all of the javascript code required to run a basic page -->
        <?php
								include_once $_SERVER ['DOCUMENT_ROOT'] . "/multiUseCode/php/basicJs.php";
								?>
        
        <!-- unique javascript for this page EDIT MY LINK! -->
	<script src="/root/newDesigners/newDesigners.js"></script>
	<!-- end javascript section -->
</body>
</html>
