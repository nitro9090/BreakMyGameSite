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
            
        <title>Break My Game - Contact Us</title>
        <meta name="description" content="If you need to talk to the administration, here is our cantact info.">
		<meta name="author" content="Michael Lindon">

        <!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
        <!-- unique CSS for this page EDIT MY LINK! -->
        <link rel="stylesheet" href="contactUs.css">
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
                <h2>Contact Us</h2>
                <p> The best way to discuss ideas and thoughts about Break My Game is to post 
                on our <a href="">Meetup page</a> and we will respond as fast as possible.  However,
                if you need help with something specific, our contact info is below.
                </p>
                
                
                <div class="contactBlock col-md-6"> 
                	<h3> <b>Daniel Palmer </b></h3>
                	<p> <b>Event Organizer and Head of Break My Game</b>
                	<br> Email: daniel at breakmygamegroup.com
                	<!--  <br> Twitter handle: -->
                	</p>
                 </div>
                 
                 <!--  <div class="contactBlock col-md-6"> 
                	<h3> Kiva Fecteau </h3>
                	<p> Social Media
                	<br> Email: 
                	<br> twitter handle: 
                	</p>
                 </div>-->
                 
                 
                 <div class="contactBlock col-md-6"> 
                	<h3> <b>Michael Lindon</b> </h3>
                	<p> <b>Site Administrator</b>
                	<br> Email: mike at breakmygamegroup.com
                	<!--  <br> twitter handle:-->
                	</p>
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
        
        <!-- unique javascript for this page EDIT MY LINK! --> 
        <script src="/root/contactUs/contactUs.js"></script>
        <!-- end javascript section -->
    </body>
</html>
