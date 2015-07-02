/**
 * @author Michael Lindon
 * insert javascript below
 */

var gameButton = document.getElementsByClassName("gameInfo");
var dropDown = document.getElementsByClassName("gameDescDropDown");
var sign = document.getElementsByClassName("sign");
var gameDesc = [];

function dropDownClass(gameButton, dropDown, sign) {
    this.gameButton = gameButton;
    this.dropDown = dropDown;
    this.sign = sign
}

for(var i=0;i<gameButton.length;i++){
	gameDesc[i] = new dropDownClass(gameButton[i], dropDown[i], sign[i]);
	gameDesc[i].dropDown.style.height = "auto";
	gameDesc[i].divHeight = gameDesc[i].dropDown.offsetHeight;
	gameDesc[i].dropDown.style.height = "0";
	
	(function (i) {
		gameDesc[i].gameButton.addEventListener('click', function(){
			if(gameDesc[i].dropDown.style.height == gameDesc[i].divHeight + "px"){
				gameDesc[i].dropDown.style.height = "0px";
				gameDesc[i].sign.innerHTML = "<b> + </b>";
			}
			else {
				gameDesc[i].dropDown.style.height = gameDesc[i].divHeight + "px";
				gameDesc[i].sign.innerHTML = "<b> - </b>";
			}
		},false);
	}(i))	
}