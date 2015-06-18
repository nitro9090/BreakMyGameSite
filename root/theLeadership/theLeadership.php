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
        
        <?php
            include_once ($_SERVER ['DOCUMENT_ROOT'] . "/multiUseCode/php/metadata.php");
            ?>
            
        <title>Break My Game - Template</title>
        <meta name="description" content="">

        <!-- Loading the BootStrap CSS files (do not change unless you know what you are doing) -->
        <link rel="stylesheet" href="/multiUseCode/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="/multiUseCode/css/bootstrap/bootstrap-theme.min.css">

        <!--  CSS applied to every page -->
        <link rel="stylesheet" href="/multiUseCode/css/main.css">   
        
        <!--  CSS for page header and footer -->
        <link rel="stylesheet" href="/multiUseCode/pageTopBot/pageTopBot.css">   
        
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
            include_once ($_SERVER ['DOCUMENT_ROOT'] . "/MultiUseCode/pageTopBot/pageTop.php");
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
                	   <p>Not only is he the original organizer of Break My Game, but he is also an amazing guy.
                	   Having put tons of blood, sweat and tears in to improving this organization and making it
                	   a force to be recommended with he organizes events, convention booths, does advertising and 
                	   even finds time to work on comic books with 
                	   <a href="https://www.facebook.com/RavenWarrenStudios">Raven Warren Studios</a></p>
                	</div>
                </div>
            </div>
            <!-- End main content section -->
        </div>
        
        <!-- inserts footer html into the page -->
        <?php
        include_once ($_SERVER ['DOCUMENT_ROOT'] . "/MultiUseCode/pageTopBot/pageBottom.php");
        ?>
        <!--  javascript section -->

        <!-- loading jquery, bootstrap and modernizr javascript files (do not change unless you know what you are doing) -->
        <script src="/multiUseCode/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="/multiUseCode/js/vendor/bootstrap.min.js"></script>
        <script src="/multiUseCode/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        
        <!-- Loading jQuery (needed for twitter bootstrap) -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
			window.jQuery || document.write('<script src="multiUseCode/js/vendor/jquery-1.11.2.min.js"><\/script>')
        </script>

        <!-- javascript plugins applied to every page-->   
        <script src="/multiUseCode/js/plugins.js"></script>
        
        <!-- javascript applied to every page -->
        <script src="/multiUseCode/js/main.js"></script> 
        
        <!-- javascript applied to the page header and footer --> 
        <script src="/multiUseCode/pageTopBot/pageTopBot.js"></script>
        
        <!-- unique javascript for this page --> 
        <script src="/root/template/theLeadership.js"></script>
        <!-- end javascript section -->
    </body>
</html>
