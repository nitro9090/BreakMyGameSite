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
        
        <!-- unique CSS for this page EDIT MY LINK! -->
        <link rel="stylesheet" href="feedbackForms.css">
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
                <h2>Feedback Forms</h2>	
				<div id="formDiv">
 					<form name="boardGameFeedback" id="feedbackForm" onsubmit="return false;">	
 						<div class="inputBlock">
							<label class="labels" for="datePlayed"> Date Played: </label>
							<div class="inputs">
								<input id="datePlayed" type="date">
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="gameName"> Game Name: </label>
							<div class="inputs">
								<!--add dropdown down folder --->
								<input id="gameName" type="text" placeholder='What game did you play?' maxlength="100">
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="numPlayers">Number of Players:</label>
							<div class="inputs">
								<input id="numPlayers" type="number" min="1" max="40" placeholder='ex: "5"'>
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="enjoyGame">Did you enjoy the game?</label>
							<div class="inputs">
								Not at all <input class="radials" type="radio" value="1" name="enjoyGame"> 1
								<input type="radio" value="2" name="enjoyGame"> 2
								<input type="radio" value="3" name="enjoyGame"> 3 
								<input type="radio" value="4" name="enjoyGame"> 4
								<input type="radio" value="5" name="enjoyGame"> 5 a lot!
								<textarea class="smallTextArea" id="enjoyGameDetails" placeholder="Give a short explanation" maxlength="300"></textarea>
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="normallyPlay">Would you normally play this type of game? </label>
							<div class="inputs">
								<input type="radio" value="Y" name="normallyPlay"> Yes 
								<input type="radio" value="N" name="normallyPlay"> No
								<textarea class="smallTextArea" id="normallyPlayDetails" placeholder="If not, what would you normally play?" maxlength="200"></textarea>
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="considerBuying">Is this a game you would consider buying?</label>
							<div class="inputs">
								<input type="radio" value="Y" name="considerBuying"> Yes 
								<input type="radio" value="N" name="considerBuying"> No
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="clearRules">Was the rules explanation/rulebook clear and concise?</label>
							<div class="inputs">
								Unclear <input class="radials" type="radio" values="1" name="clearRules"> 1
								<input type="radio" values="2" name="clearRules"> 2
								<input type="radio" values="3" name="clearRules"> 3 
								<input type="radio" values="4" name="clearRules"> 4
								<input type="radio" values="5" name="clearRules"> 5 very clear!
								<textarea class="smallTextArea" id="clearRulesDetails" placeholder='ex: "yes, but..."' maxlength="200"></textarea>
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="favPart">What was your favorite part of the game?</label>
							<div class="inputs">
								<textarea class="bigTextArea" id="favPart" placeholder='ex: "I really liked..."' maxlength="300"></textarea>
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="leastFavPart">What was your least favorite part of the game?</label>
							<div class="inputs">
								<textarea class="bigTextArea" id="leastFavPart" placeholder='ex: "I didn&#39t like..."' maxlength="300"></textarea>
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="whatToChange">If you could change one thing about the game, what would that be?</label>
							<div class="inputs">
								<textarea class="bigTextArea" id="whatToChange" placeholder='ex: "I would like to see..."' maxlength="300"></textarea>
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="addComments">Additional Comments:</label>
							<div class="inputs">
								<textarea class="bigTextArea" id="addComments" placeholder='Anything else you would like to say about the game?' maxlength="300"></textarea>
							</div>
						</div>
					</form>
					<div  id="submitButton">
						<button onclick="submitFeedback()">
							Submit
						</button>
					</div>
					<p id="status">This form is still incomplete</p>
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
        <script src="/root/FeedbackForms/feedbackForms.js"></script>
        
        <!-- end javascript section -->
    </body>
</html>