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
        <title>Break My Game - Designer Standards</title>
        <meta name="description" content="">
        
		<!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
        <!-- unique CSS for this page -->
        <link rel="stylesheet" href="designerStandards.css">
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
                <div class="h2banner">
                	<div class="bannerChild">
                		<h2> Designer Standards </h2>
                	</div>
                </div>
                
                <p>At Break My Game we want to become a force in the board gaming community. Therefore, we ask that everyone who brings a game to our 
                events hold up to a certain standard. 
                </p>
                
                <div class="h3banner">
                	<div class="bannerChild">
               			<h3> The Basics </h3>
                	</div>
                </div>
                <p> We want game designs that are beyond the idea phase.  Not necessarily polished or heavily playtested, but at least has 
                had some thought and consideration put into it.  We believe the best way to gauge this is that the game components are at
                least similar to that of a real board game, for instance if using a board take the time to print out the design and
                paste it to a piece of cardboard. No art is required, we just want it in an easily playable condition.
                This goes a long way with playtesters and shows a commitment to your design.
                </p>
                <div class="h3banner">
                <div class="bannerChild">
                <h3> The Details </h3>
                </div>
                </div>
                <p class="details"><b> Cards</b> - Cards should feel like cards.  Draw up the basic card designs in your
                favorite drawing program and get them printed, please no notecards.  Some ideas on how to get them printed and feeling like cards:
                <ul> 
                <li> Print them out on thick card stock or business card stock and cut them out</li>
                <li> Print them out on regular paper, cut them out and put them in a card sleeve backed by card stock (magic cards work really well) </li>
                <li> Get them professionally printed (don't spend too much on this, your game designs will constantly change)</li>
                </ul>
                
                <p class="details"><b> Boards</b> - Boards should be mounted and not hand-drawn.  Some methods for accomplishing this:
                <ul> 
                <li> Print the board design on paper and mount/paste it to either cardboard, posterboard or an old game board.</li>
                <li> Print the board design and laminate it (this also protects it from damage)</li>
                <li> Get it professionally printed (don't spend too much on this, your game designs will constantly change)</li>
                </ul>
                </p>
                
                <p class="details"><b> Other Components</b> - They should be functional and not require the players to use their imagination or need references
                to understand their use during gameplay.  For instance, if using custom dice, print out the sides and paste them to the sides of a
                dice.  In game money, 
                </p>
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
        <script src="/root/template/designerStandards.js"></script>
        <!-- end javascript section -->
    </body>
</html>
