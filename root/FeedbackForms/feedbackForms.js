/**
 * @author nitro9090
 * insert javascript below
 */

function submitFeedback() {
	var status = document.getElementById('status');
	var gameName = document.getElementById("gameName");
	var datePlayed = document.getElementById("datePlayed");
	var numPlayers = document.getElementById("numPlayers");
	var enjoyGame = document.getElementsByName('enjoyGame');
	var enjoyGameDetails = document.getElementById("enjoyGameDetails");
	var normallyPlay = document.getElementsByName('normallyPlay');
	var normallyPlayDetails = document.getElementById("normallyPlayDetails");
	var considerBuying = document.getElementsByName('considerBuying');
	var clearRules = document.getElementsByName('clearRules');
	var clearRulesDetails = document.getElementById("clearRulesDetails");
	var favPart = document.getElementById("favPart");
	var leastFavPart = document.getElementById("leastFavPart");
	var whatToChange = document.getElementById("whatToChange");
	var addComments = document.getElementById("addComments");
	
	if(datePlayed.value===""){
		status.innerHTML = "Please select a date for the game you played.";
		return;
	}	
	if(gameName.value===""){
		status.innerHTML = "Please select the name of the game you played.";
		return;
	}
	if(numPlayers.value===""){
		status.innerHTML = "Please select the number of players";
		return;
	}
	if(getCheckValue(enjoyGame) == -1){
		status.innerHTML = "Please tell us if you enjoyed the game.";
		return;
	}
	if(getCheckValue(normallyPlay) == -1){
		status.innerHTML = "Please tell us if you would normally play this type of game.";
		return;
	}
	if(getCheckValue(considerBuying) == -1){
		status.innerHTML = "Please tell us if you would consider buying this game.";
		return;
	}
	if(getCheckValue(clearRules) == -1){
		status.innerHTML = "Please tell us if the rules were explained clearly.";
		return;
	}
	if(favPart.value===""){
		status.innerHTML = "Please tell us your favorite part of the game.";
		return;
	}
	if(leastFavPart.value===""){
		status.innerHTML = "Please tell us your least favorite part of the game.";
		return;
	}
	if(whatToChange.value===""){
		status.innerHTML = "Please tell us what you would change about the game.";
		return;
	}
}

addListenerRestrictInput("gameName")

/*document.getElementById("gameName").addEventListener("keyup", function() {
	var input = document.getElementById("gameName")
	restrictInput("input")
});*/

document.getElementById("enjoyGameDetails").addEventListener("keyup", function() {
	restrictInput("enjoyGameDetails")
});

document.getElementById("normallyPlayDetails").addEventListener("keyup", function() {
	restrictInput("enjoyGameDetails")
});

function restrictInput(elemID) {
	var input = document.getElementById(elemID)
	rx = /[^a-z0-9 ,%!'@]/gi;
	input.value = input.value.replace(rx, "");
}

function isDate(date) {
	return false;
}

function getCheckValue(checkValue){
	for (var i = 0, length = checkValue.length; i < length; i++) {
	    if (checkValue[i].checked) {
	    	return checkValue[i].value;
	    }
	}
	return -1;
}

function addListenerRestrictInput(elem) {
	var input = document.getElementById(elem)
	return input.addEventListener(event,function(elem){
		restrictInput(elem);
	},false);
}