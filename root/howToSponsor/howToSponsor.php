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
            
        <title>Break My Game - Become a Sponsor</title>
        <meta name="description" content="How to become a sponsor of Break My Game.">
		<meta name="author" content="Michael Lindon">

        <!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
        <link rel="stylesheet" href="/root/howToSponsor/howToSponsor.css">
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
            <div class="container text-center" >
                <h1>Sponsoring Break My Game</h1>
                
                <p> Interested in sponsoring Break My Game?  Send an email to <a href="mailto:daniel@breakmygamegroup.com">Daniel</a>.
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
        
        <script src="/root/howToSponsor/howToSponsor.js"></script>
        <!-- end javascript section -->
    </body>
</html>
