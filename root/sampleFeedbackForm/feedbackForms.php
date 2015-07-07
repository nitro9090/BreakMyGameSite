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
        <title>Break My Game - Feedback Form</title>
        <meta name="description" content="Give feedback on a game recently played at a Break My Game event">
		<meta name="author" content="Michael Lindon">

		<!-- This include adds the basic header lines needed to run the basic page -->
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicHead.php";
        ?>
        
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
            	include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/pageTopBot/pageTop.php";
            ?>
            <!-- main content section -->
            <div class="container text-center" >

				<iframe id="googleFeedbackForm" src="https://docs.google.com/forms/d/1KSF5EKG7DxvXj5H04SKSiWbihx3t3c5C8iOZ-Hq_D2U/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>				<div id="formDiv" autocomplete="on">
 					
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
								
								<input id="gameName" type="text" placeholder='What game did you play?' maxlength="100">
								<span id="gameNameStatus"></span>
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="numPlayers">Number of Players:</label>
							<div class="inputs">
								<input id="numPlayers" type="number" min="1" max="100" placeholder='ex: "5"'>
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
								<textarea class="smallTextArea" id="enjoyGameDetails" placeholder="(optional) Give a short explanation" maxlength="300"></textarea>
							</div>
						</div>
						<div class="inputBlock">
							<label class="labels" for="normallyPlay">Would you normally play this type of game? </label>
							<div class="inputs">
								<input type="radio" value="Y" name="normallyPlay"> Yes 
								<input type="radio" value="N" name="normallyPlay"> No
								<textarea class="smallTextArea" id="normallyPlayDetails" placeholder="(optional) If not, what would you normally play?" maxlength="200"></textarea>
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
								<textarea class="smallTextArea" id="clearRulesDetails" placeholder='(optional) ex: "yes, but..."' maxlength="200"></textarea>
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
								<textarea class="bigTextArea" id="addComments" placeholder='(optional) Anything else you would like to say about the game?' maxlength="300"></textarea>
							</div>
						</div>
					</form>
					<div  id="submitButtonDiv">
						<button id="submitButton">
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
			include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/pageTopBot/pageBottom.php";
        ?>
        <!--  javascript section -->

        <!-- adds in all of the javascript code required to run a basic page -->
        <?php
			include_once $_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/basicJs.php";
        ?>
        
        <!-- unique javascript for this page --> 
        <script src="/root/feedbackForms/feedbackForms.js"></script>
        
        <!-- end javascript section -->
    </body>
</html>