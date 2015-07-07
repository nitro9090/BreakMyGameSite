/**
 * @author nitro9090
 * insert javascript below
 */

var submitButton = document.getElementById('submitButton');
var gameName = document.getElementById("gameName");
var gameNameStatus = document.getElementById("gameNameStatus");
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

submitButton.addEventListener("click", submitFeedback,false);

function submitFeedback() {
	var status = document.getElementById('status');
	
	/*if(datePlayed.value===""){
		status.innerHTML = "Please select a date for the game you played.";
		return;
	}*/	
	if(gameName.value===""){
		status.innerHTML = "Please select the name of the game you played.";
		return;
	}
	/*if(numPlayers.value===""){
		status.innerHTML = "Please select the number of players";
		return;
	} else if(numPlayers <= 0 ||numPlayers.value > 100){
		status.innerHTML = "You have input an invalid number of players";
		return;
	}
	if(!getCheckValue(enjoyGame)){
		status.innerHTML = "Please tell us if you enjoyed the game.";
		return;
	}
	if(!getCheckValue(normallyPlay)){
		status.innerHTML = "Please tell us if you would normally play this type of game.";
		return;
	}
	if(!getCheckValue(considerBuying)){
		status.innerHTML = "Please tell us if you would consider buying this game.";
		return;
	}
	if(!getCheckValue(clearRules)){
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
	}*/
	
	status.innerHTML = 'attempting upload...';
	var ajax = ajaxObj("POST", "feedbackForms_php.php");
	ajax.onreadystatechange = function() {
		if (ajaxReturn(ajax) == true) {
			status.innerHTML = ajax.responseText;
		} else {
			status.innerHTML = 'upload not working';
		}
	}
	ajax.send("game_names=" + gameName.value);
}


addListenerRestrictInput(numPlayers,"num");

function addListenerRestrictInput(elem,type){
	elem.addEventListener("keyup",function() {
		restrictInput(elem,type);
	},false)
}

function restrictInput(elem,type) {
	if(type="num"){
		rx = /[0-9]/gi;
	}
	if(type="text"){
		rx = /[^a-z0-9 ,%!':&()-]/gi;
	}
	elem.value = elem.value.replace(rx, "");
}

gameName.addEventListener("keyup",function() {
	if (gameNameStatus.innerHTML.length == 1){
		gameNameStatus.innerHTML = 'checking names...';
		var ajax = ajaxObj("POST", "feedbackForms_php.php");
		ajax.onreadystatechange = function() {
			if (ajaxReturn(ajax) == true) {
				XMLgames = ajax.responseXML;
				gameInfo = XMLgames.getElementsByTagName("game_name");
				gameNameList = '';
				for (i=0;i<gameInfo.length;i++){
					if(i==0){
						gameNameList = gameInfo[i].childNodes[0].nodeValue;
					}
					else{
						gameNameList=gameNameList + ', ' + gameInfo[i].childNodes[0].nodeValue;
					}
			      }
				gameNameStatus.innerHTML = gameNameList;
			} else {
				gameStatus.innerHTML = 'upload not working';
			}
		}
		ajax.send("game_name=" + gameName.value);
	}
});

function getCheckValue(checkValue){
	for (var i = 0, length = checkValue.length; i < length; i++) {
	    if (checkValue[i].checked) {
	    	return checkValue[i].value;
	    }
	}
	return false;
}

function addEventSimple(obj,evt,fn) {
    if (obj.addEventListener){
    	obj.addEventListener(evt,fn,false);
    } else if (obj.attachEvent){
        obj.attachEvent('on'+evt,fn);
	}
}


