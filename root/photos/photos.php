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
        <title>Break My Game - Photos</title>
        <meta name="description" content="Photos from Break My Game Events.">
		<meta name="author" content="Michael Lindon">

        <!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
        <!-- unique CSS for this page -->
        <link rel="stylesheet" href="photos.css">
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
            	<div class ="bannerContainer">
                	<div class="scrollPhotoBanner">
                		<a class="firstImage" href="http://photos3.meetupstatic.com/photos/event/5/8/d/4/highres_438022740.jpeg">
                		<img class="firstImage" src="http://photos3.meetupstatic.com/photos/event/5/8/d/4/event_438022740.jpeg" alt=""></a>
                		<a href="http://photos4.meetupstatic.com/photos/event/c/d/a/c/highres_438052652.jpeg">
                		<img src="http://photos4.meetupstatic.com/photos/event/c/d/a/c/event_438052652.jpeg" alt=""></a>
                		<a href="http://photos1.meetupstatic.com/photos/event/2/8/2/5/600_438070277.jpeg">
                		<img src="http://photos1.meetupstatic.com/photos/event/2/8/2/5/event_438070277.jpeg" alt=""></a>
                		<a href="http://photos1.meetupstatic.com/photos/event/8/4/1/highres_438122113.jpeg">
                		<img src="http://photos1.meetupstatic.com/photos/event/8/4/1/event_438122113.jpeg" alt=""></a>
                		<a href="http://photos1.meetupstatic.com/photos/event/7/7/a/5/highres_435330629.jpeg">
                		<img src="http://photos1.meetupstatic.com/photos/event/7/7/a/5/event_435330629.jpeg" alt=""></a>
                		<a href="http://photos3.meetupstatic.com/photos/event/7/7/c/f/highres_435330671.jpeg">
                		<img src="http://photos3.meetupstatic.com/photos/event/7/7/c/f/event_435330671.jpeg" alt=""></a>
                		
                		<a href="http://photos3.meetupstatic.com/photos/event/5/8/d/4/highres_438022740.jpeg">
                		<img src="http://photos3.meetupstatic.com/photos/event/5/8/d/4/event_438022740.jpeg" alt=""></a>
                		<a href="http://photos4.meetupstatic.com/photos/event/c/d/a/c/highres_438052652.jpeg">
                		<img src="http://photos4.meetupstatic.com/photos/event/c/d/a/c/event_438052652.jpeg" alt=""></a>
                		<a href="http://photos1.meetupstatic.com/photos/event/2/8/2/5/600_438070277.jpeg">
                		<img src="http://photos1.meetupstatic.com/photos/event/2/8/2/5/event_438070277.jpeg" alt=""></a>
                		<a href="http://photos1.meetupstatic.com/photos/event/8/4/1/highres_438122113.jpeg">
                		<img src="http://photos1.meetupstatic.com/photos/event/8/4/1/event_438122113.jpeg" alt=""></a>
                		<a href="http://photos1.meetupstatic.com/photos/event/7/7/a/5/highres_435330629.jpeg">
                		<img src="http://photos1.meetupstatic.com/photos/event/7/7/a/5/event_435330629.jpeg" alt=""></a>
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
        <script src="/root/photos/photos.js"></script>
        <!-- end javascript section -->
    </body>
</html>
