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
        <title>Break My Game - Calendar</title>
        <meta name="description" content="Check out upcoming events with Break My Game.">
		<meta name="author" content="Michael Lindon">

        <!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
        <!-- unique CSS for this page -->
        <link rel="stylesheet" href="/root/calendar/calendar.css">
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
            	<h1> Calendar</h1>
            	<p> All of the Break My Game events are listed here.  If you would like to be updated when new events are posted, please join the
            	<a href="http://www.meetup.com/Break-My-Game-Developers-and-Playtesters-Unite/">Meetup Group.</a>  
            	</p>       	
			      <iframe id="calendarGoogle" src="https://www.google.com/calendar/embed?src=747p8vet5mb4o17ehbp3kgvpgs%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                
                <!--  <iframe id="meetupCalendar" src="http://meetu.ps/2JLcLp" frameborder="0"></iframe>
                <iframe id="smallMeetupCalendar" src="http://meetu.ps/2JppYr" frameborder="0"></iframe>-->
         
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
        <script src="/root/template/template.js"></script>
    </body>
</html>
