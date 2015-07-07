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

<title>Break My Game - New/Edit Blog Post</title>
<meta name="description" content="Edit">
<meta name="author" content="Michael Lindon">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">

<!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
        <!-- unique CSS for this page EDIT MY LINK! -->
<link rel="stylesheet" href="addEditBlog.css">
</head>
<body>
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
			<h2>New/Edit Blog Posts</h2>

			<div class="formDiv">
				<h3>New Blog Post</h3>
				<form id="blogPostForm" name="boardGameFeedback" onsubmit="return false;">
					<div class="inputBlock">
						<label class="labels" for="postersName"> Poster's Name: </label>
						<div class="inputs">
							<input id="postersName" type="text"
								placeholder='example: "Your Name' maxlength="100">
						</div>
						<span id="postersNameFilled"> <img class="checkValid" src="/img/blogPost/x.png"> </span>
					</div>

					<div class="inputBlock">
						<label class="labels" for="blogHeadline"> Blog Headline: </label>
						<div class="inputs">
							<input id="blogHeadline" type="text"
								placeholder='example: "New Games Arrived!' maxlength="100">
						</div>
						<span id="blogHeadlineFilled"> <img class="checkValid" src="/img/blogPost/x.png"> </span>
					</div>

					<div class="inputBlock">
						<label class="labels" for="blogPost">Blog Post:</label>
						<span id="blogPostFilled"> <img class="checkValid" src="/img/blogPost/x.png"> </span>
						<textarea class="bigTextArea" id="blogPost"
							placeholder='Add all of your blog content here.  You may use regular html calls within. For instance, <b></b> to bold, <i> </i> to italicize and <h3> </h3> to make a header.'
							></textarea>
					</div>
				</form>
			</div>
			<div id="submitButtonDiv">
				<button id="submitButton">Submit</button>
			</div>
			<p id="uploadStatus">This form is still incomplete</p>
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
			include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicJs.php";
        ?>
        
        <!-- unique javascript for this page EDIT MY LINK! -->
	<script src="addEditBlog.js"></script>
	<!-- end javascript section -->
</body>
</html>
