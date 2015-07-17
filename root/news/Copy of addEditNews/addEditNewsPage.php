


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
			<h2 id="pageHeader">New/Edit News Posts</h2>

			<div class="formDiv">
				<h3>New News Post</h3>
				<form id="newsPostForm" name="boardGameFeedback" onsubmit="return false;">
					<div class="inputBlock">
						<label class="labels" for="newsPoster"> Poster's Name: </label>
						<div class="inputs">
							<input id="newsPoster" type="text"
								placeholder='example: "Your Name' maxlength="100">
						</div>
						<span id="newsPosterFilled"> <img class="checkValid" src="/img/news/x.png"> </span>
					</div>

					<div class="inputBlock">
						<label class="labels" for="newsHeadline"> News Headline: </label>
						<div class="inputs">
							<input id="newsHeadline" type="text"
								placeholder='example: "New Games Arrived!' maxlength="100">
						</div>
						<span id="newsHeadlineFilled"> <img class="checkValid" src="/img/news/x.png"> </span>
					</div>

					<div class="inputBlock">
						<label class="labels" for="newsPost">News Post:</label>
						<span id="newsPostFilled"> <img class="checkValid" src="/img/news/x.png"> </span>
						<textarea class="bigTextArea" id="newsPost"
							placeholder='Add all of your news content here.  You may use regular html calls within. For instance, <b></b> to bold, <i> </i> to italicize and <h3> </h3> to make a header.'
							></textarea>
					</div>
				</form>
			</div>
			<div id="submitButtonDiv">
				<button id="submitButton">Submit</button>
			</div>
			<div id="newPostDiv">
				<input type="checkbox" name="setNewPost" value="newPost" disabled="disabled" checked="checked"> 
				<label for="setNewPost">Make a new post</label>
			</div>
			<p id="uploadStatus"></p>
			<p id="uploadStatus2"></p>
			
			<div id="oldNewsPostList">
				<?php
            	include_once "addEditNews_listNews_php.php";
            	?>
           	</div>
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
	<script src="/root/news/addEditNews/addEditNews.js"></script>
	<!-- end javascript section -->

