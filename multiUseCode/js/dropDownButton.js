/**
 * @author nitro9090
 */

var dropDownButton = document.getElementsByClassName("dropDownButton");
var dropDown = document.getElementsByClassName("dropDownDiv");
var dropDownSign = document.getElementsByClassName("dropDownSign");
var dropDownBlocks = [];

function dropDownClass(dropDownButton, dropDown, dropDownSign) {
    var self = this;
	this.dropDownButton = dropDownButton;
    this.dropDown = dropDown;
    this.dropDownSign = dropDownSign
    this.divHeight;
    
    this.addDropDownListener = function () {
    	self.dropDown.style.height = "auto";
    	self.divHeight = self.dropDown.offsetHeight;
    	self.dropDown.style.height = "0px";
    	
    	self.dropDownButton.addEventListener('click', function(){
			if(self.dropDown.style.height == self.divHeight + "px"){
				self.dropDown.style.height = "0px";
				self.dropDownSign.innerHTML = "<b> + </b>";
			}
			else {
				self.dropDown.style.height = self.divHeight + "px";
				self.dropDownSign.innerHTML = "<b> - </b>";
			}
		},false);
    }
}

for(var i=0;i<dropDownButton.length;i++){
	dropDownBlocks[i] = new dropDownClass(dropDownButton[i], dropDown[i], dropDownSign[i]);
	dropDownBlocks[i].addDropDownListener();
}
