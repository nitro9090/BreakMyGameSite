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
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>

        <link rel="stylesheet" href="/root/eventSignUp/eventSignUp.css">
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
                <h1>Event Sign Up</h1>
                
                <p> Click on the Survey Monkey Link below and fill everything out to be considered for a table at BMG events.</p>
                
                <h2> <a href="mailto:Daniel@breakmygamegroup.com"> BMG - Event Sign Up</a></h2>
                
                <p> If your game has any special needs, email <a href="mailto:Daniel@breakmygamegroup.com">Daniel</a>.
                
                 <h1>Not implemented yet </h1>
                <p> For now sign up for events by emailing <a href="mailto:Daniel@breakmygamegroup.com">Daniel</a>.</p>
                
                 
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
        
        <script src="/root/eventSignUp/eventSignUp.js"></script>
        <!-- end javascript section -->
    </body>
</html>
