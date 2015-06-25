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
        <meta name="description" content="">

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
            <div class="container text-center" >
                <h2>The Leadership</h2>
                <div class="leaderInfoblock text-left">
                	<div class="col-md-2">
                	   <img class="leaderImage" src="/img/BMG-Logo-v2-mainPage.jpg">
                	</div>
                	<div class="col-md-10">
                	   <h3 class="leaderName">Daniel Palmer</h3>
                	   <h4 class="leaderPosition"> Lord and Master of Breaking Games</h4>
                	   <hr class="leaderHr">
                	   <p class="leaderDesc">Not only is he the original organizer of Break My Game, but he is also an amazing guy.
                	   Having put tons of blood, sweat and tears in to improving this organization and making it
                	   a force to be recommended with he organizes events, convention booths, does advertising and 
                	   even finds time to work on comic books with 
                	   <a href="https://www.facebook.com/RavenWarrenStudios">Raven Warren Studios</a></p>
                	</div>
                	
                	<div class="col-md-2">
                	   <img class="leaderImage" src="/img/BMG-Logo-v2-mainPage.jpg">
                	</div>
                	<div class="col-md-10">
                	   <h3 class="leaderName">Michael Lindon</h3>
                	   <h4 class="leaderPosition"> Lord of the site</h4>
                	   <hr class="leaderHr">
                	   <p class="leaderDesc">The swell guy who has put this site together and until recently has been a part of
                	   every break my game.  He likes gaming, game designing, coding and long walks on the beach. </a></p>
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
        <script src="/root/theLeadership/theLeadership.js"></script>
        <!-- end javascript section -->
    </body>
</html>
