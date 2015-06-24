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
        
        <title>Break My Game</title>
        <meta name="description" content="">

        <!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
        <!-- unique CSS for this page -->
        <link rel="stylesheet" href="/index.css">
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
                <!--  <img src="/img/BMG-Logo-v2-mainPage.jpg">-->
                <h1>Welcome to Break My Game</h1>
                <p id="aboutBMG">
                    We are an organization for board game designers and playtesters.  We meet up every third Sunday
                    of the month to playtest unpublished board games at <a href="http://www.theboardandbrew.com/">The Board and
                    Brew</a> in College Park MD, as well as meet up at various local conventions.  We are always looking for new
                    playtesters and designers to join in.  So, if you have a game you want tested or want to try out new games before
                    they reach publishers come on by!
                    <br />
                    <br />

                    Note, this site is still developing, therefore the most up to date information can be found on our meetup group website, 
                    <a href="http://www.meetup.com/break-my-game-developers-and-playtesters-unite/">Break My Game</a>.
                </p>
            </div>
            <!-- End main content section -->
        </div>
        <?php
			include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/pageTopBot/pageBottom.php";
        ?>
        
        <!--  javascript section -->
        <!-- adds in all of the javascript code required to run a basic page -->
        <?php
			include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicJs.php";
        ?>

        <!-- unique javascript for this page --> 
        <script src="/index.js"></script>
     </body>
</html>
