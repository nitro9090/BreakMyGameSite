/**
 * @author nitro9090
 * insert javascript below
 */

var pwdInput = prompt("What's the password?");

var pwdHttpReq = createXmlHttpRequestObject();
checkPwd();

function checkPwd(){
	if(pwdHttpReq.readyState == 0 || pwdHttpReq.readyState == 4){
		try{
			pwdHttpReq.onreadystatechange = function (){
				if(pwdHttpReq.readyState == 4){
					if(pwdHttpReq.status == 200){
						xmlResponse = pwdHttpReq.responseText;
						var output = xmlResponse;
						if (xmlResponse == 1){
						}
						else {
							window.location.assign("/");
						}
					}
					else{
						alert("AJAX error");
					}
				}
			}

			var sendData = "input=" + pwdInput;
			
			pwdHttpReq.open("POST", "pwdCheck_php.php");
			pwdHttpReq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			pwdHttpReq.send(sendData); 
		}
		catch(e){
			alert(e.toString() );
		}
	} else {
		setTimeout('process()',1000);
	}
}

var Input = function (elem, type) {
	var self = this;
	this.elem = document.getElementById(elem);
	this.type = type;
	this.valid = false;
	
	this.restrictInput = function() {
		self.elem.addEventListener("keyup",function() {
			if(self.type=="num"){
				rx = /[0-9]/gi;
			}
			if(self.type=="text"){
				rx = /[^a-z0-9 ,%!':&()-]/gi;
			}
			self.elem.value = self.elem.value.replace(rx, "");
		});
	}

		
	this.checkValid = function() {
		self.elem.addEventListener("keyup", function() {
			checkMarks(self);
		});
	}
}

function checkMarks(self){
	if (self.elem.value.length > 0) {
		document.getElementById(self.elem.id + "Filled").innerHTML = '<img class="checkValid" src="/img/blogPost/check.jpg">';
		self.valid = true;
		} 
	else {
		document.getElementById(self.elem.id + "Filled").innerHTML = '<img class="checkValid" src="/img/blogPost/x.png">';
		self.valid = false;
	}
}

var submitNewBlog = document.getElementById('submitButton');
    postersName = new Input("postersName","text");
    blogHeadline = new Input("blogHeadline","text");
    blogPost = new Input("blogPost","text");
    uploadStatus = document.getElementById('uploadStatus');

postersName.restrictInput();
postersName.checkValid();

blogHeadline.restrictInput();
blogHeadline.checkValid();

blogPost.checkValid();

var xmlHttp = createXmlHttpRequestObject();

submitButton.addEventListener("click", function(){
	if(postersName.valid == true && blogHeadline.valid == true && blogPost.valid == true){
		addBlog();
	}
	else {
		uploadStatus.innerHTML = "You haven't filled everything out";
	}
});

function createXmlHttpRequestObject(){
	var xmlHttp;
	
	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp = false;
		}
	}
	else{
		try{
			xmlHttp = new XMLHttpRequest();
		}catch(e){
			xmlHttp = false;
		}
	}
	if(!xmlHttp){
		alert("Couldn't setup xml request.");
	} else {
		return xmlHttp;
	}
}
	
function addBlog(){
	if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){
		try{
			xmlHttp.onreadystatechange = function (){
				if(xmlHttp.readyState == 4){
					if(xmlHttp.status == 200){
						xmlResponse = xmlHttp.responseText;
						uploadStatus.innerHTML = xmlResponse;
						document.getElementById("blogPostForm").reset();
						checkMarks(postersName);
						checkMarks(blogHeadline);
						checkMarks(blogPost);
					}
					else{
						alert("AJAX error");
					}
				}
			}
			
			var bloggerName = encodeURIComponent(postersName.elem.value);
			var blogsHeadline = encodeURIComponent(blogHeadline.elem.value)
			var blogsPost = encodeURIComponent(blogPost.elem.value)
			
			var sendData = "bName=" + bloggerName + "&bHeadline=" + blogsHeadline + "&bPost=" + blogsPost;
			
			xmlHttp.open("POST", "addEditBlog_php.php");
			xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xmlHttp.send(sendData); 
		}
		catch(e){
			alert(e.toString() );
		}
	} else {
		setTimeout('process()',1000);
	}
}

/*function handleServerResponse() {
	if(xmlHttp.readyState == 4){
		if(xmlHttp.status == 200){
			xmlResponse = xmlHttp.responseText;
			uploadStatus.innerHTML = xmlResponse;
		}
		else{
			alert("AJAX error");
		}
	}
}*/

/*function submitFeedback() {
	var status = document.getElementById('status');
	
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
	}
	
	status.innerHTML = 'attempting upload...';
	var ajax = ajaxObj("POST", "addEditBlog_php.php");
	ajax.onreadystatechange = function() {
		if (ajaxReturn(ajax) == true) {
			status.innerHTML = ajax.responseText;
		} else {
			status.innerHTML = 'upload not working';
		}
	}
	ajax.send("blog_poster=" + postersName.value, );
}*/

/*gameName.addEventListener("keyup",function() {
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
}*/


