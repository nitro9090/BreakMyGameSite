/**
 * @author nitro9090
 * insert javascript below
 */

/* probably should move the call to this method to the beginning of the php file*/


var inputVar = function (elem, type) {
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
		document.getElementById(self.elem.id + "Filled").innernewsPoster = '<img class="checkValid" src="/img/news/check.jpg">';
		self.valid = true;
		} 
	else {
		document.getElementById(self.elem.id + "Filled").innerHTML = '<img class="checkValid" src="/img/news/x.png">';
		self.valid = false;
	}
}

var pageHeader = document.getElementById('pageHeader');
	submitNewNews = document.getElementById('submitButton');
    uploadStatus = document.getElementById('uploadStatus');
    uploadStatus2 = document.getElementById('uploadStatus2');
    newsForm = document.getElementById("newsPostForm")
    xmlHttp = createXmlHttpRequestObject();
    oldNewsPostList = document.getElementById('oldNewsPostList');
    oldNewsBlock = document.getElementsByClassName("oldNewsBlock");
    oldDropDownDiv = document.getElementsByClassName("oldDropDownDiv");
    oldSign = document.getElementsByClassName("oldSign");
    oldNewsHeadline = document.getElementsByClassName("oldNewsHeadline");
    oldNewsPoster = document.getElementsByClassName("oldPoster");
    oldNewsText = document.getElementsByClassName("oldNewsText");
    oldEditButton = document.getElementsByClassName("oldEditButton");
    oldToggleActiveButton = document.getElementsByClassName("oldToggleActiveButton");
    oldPostId = document.getElementsByClassName("oldPostId");
    oldIsActive = document.getElementsByClassName("oldPostActive");
    gameDesc = [];

var newsData = function() {
    	this.newsPoster = new inputVar("newsPoster","text");
    	this.newsHeadline = new inputVar("newsHeadline","text");
    	this.newsContent = new inputVar("newsPost","text");
    	this.postType = "newPost";
    	this.postID = -1;
    	
    	this.updateCheckMarks = function() {
    		checkMarks(this.newsPoster);
    		checkMarks(this.newsHeadline);
    		checkMarks(this.newsContent);
    	}
    }
    newsPost = new newsData();

newsPost.newsPoster.restrictInput();
newsPost.newsPoster.checkValid();

newsPost.newsHeadline.restrictInput();
newsPost.newsHeadline.checkValid();

newsPost.newsContent.checkValid();

setupNewsList();

submitButton.addEventListener("click", function(){
	if(newsPost.newsPoster.valid == true && newsPost.newsHeadline.valid == true && newsPost.newsContent.valid == true){
		addUpdNews();
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
	
function addUpdNews(){
	if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){
		try{
			xmlHttp.onreadystatechange = function (){
				if(xmlHttp.readyState == 4){
					if(xmlHttp.status == 200){
						xmlResponse = xmlHttp.responseText;
						uploadStatus.innerHTML = xmlResponse;
						newsForm.reset();
						newsPost.updateCheckMarks();
						newsPost.postType = "newPost";
						updateNewsList();
					}
					else{
						alert("AJAX error");
					}
				}
			}
			
			var postID = encodeURIComponent(newsPost.postID);
				postType = encodeURIComponent(newsPost.postType); 
			    posterName = encodeURIComponent(newsPost.newsPoster.elem.value);
			    newsHeadline = encodeURIComponent(newsPost.newsHeadline.elem.value);
			    newsContent = encodeURIComponent(newsPost.newsContent.elem.value);
			   
			    sendData = "nID=" + postID + "&nType=" + postType + "&nName=" + posterName + "&nHeadline=" + newsHeadline + "&nContent=" + newsContent;
			
			xmlHttp.open("POST", "/news/addEditNews/~addEditNews_php");
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

/* should be updated so that the update just appends new news post and doesn't rewrite whole news section*/
function updateNewsList () {
	xmlHttp = createXmlHttpRequestObject()
	if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){
		try{
			xmlHttp.onreadystatechange = function (){
				if(xmlHttp.readyState == 4){
					if(xmlHttp.status == 200){
						xmlResponse = xmlHttp.responseText;
						oldNewsPostList.innerHTML = xmlResponse;
						setupNewsList();
					}
					else{
						alert("AJAX error");
					}
				}
			}
			
			xmlHttp.open("GET", "/news/addEditNews/~addEditNews_listNews_php");
			xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xmlHttp.send(null); 
		}
		catch(e){
			alert(e.toString() );
		}
	} else {
		setTimeout('process()',1000);
	}
}

function activateDeactNews (postId, newStatus) {
	xmlHttp = createXmlHttpRequestObject()
	
	if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){
		try{
			xmlHttp.onreadystatechange = function (){
				if(xmlHttp.readyState == 4){
					if(xmlHttp.status == 200){
						xmlResponse = xmlHttp.responseText;
						updateNewsList();
						uploadStatus.innerHTML = xmlResponse;
					}
					else{
						alert("AJAX error");
					}
				}
			}
			
			var sendData = "nId=" + postId + "&nNewStatus=" + newStatus;
			
			xmlHttp.open("POST", "/news/addEditNews/~addEditNews_activateDeactNews_php");
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


/// creates the dropdown menu for the old news posts

function dropDownClass(dropDownButton, dropDownDiv, sign, newsHeadline, newsPoster, newsText, editButton, toggleActiveButton, postId, isActive) {
    this.dropDownButton = dropDownButton;
    this.dropDownDiv = dropDownDiv;
    this.sign = sign;
    this.newsHeadline = newsHeadline;
    this.newsPoster = newsPoster;
    this.newsText = newsText;
    this.editButton = editButton;
    this.toggleActiveButton = toggleActiveButton;
    this.postId = postId;
    this.isActive = isActive;
}

function setupNewsList() {
	for(var i=0; i < oldNewsBlock.length ; i++){
		gameDesc[i] = new dropDownClass(oldNewsBlock[i], oldDropDownDiv[i], oldSign[i], oldNewsHeadline[i], oldNewsPoster[i], oldNewsText[i], oldEditButton[i], oldToggleActiveButton[i], oldPostId[i], oldIsActive[i]);
		gameDesc[i].dropDownDiv.style.height = "auto";
		gameDesc[i].divHeight = gameDesc[i].dropDownDiv.offsetHeight;
		gameDesc[i].dropDownDiv.style.height = "0";
	
		(function (i) {
			gameDesc[i].dropDownButton.addEventListener('click', function(){
				if(gameDesc[i].dropDownDiv.style.height == gameDesc[i].divHeight + "px"){
					gameDesc[i].dropDownDiv.style.height = "0px";
					gameDesc[i].sign.innerHTML = "<b> + </b>";
				}
				else {
					gameDesc[i].dropDownDiv.style.height = gameDesc[i].divHeight + "px";
					gameDesc[i].sign.innerHTML = "<b> - </b>";
				}
			},false);
		
			gameDesc[i].editButton.addEventListener('click', function (){
				newsPost.newsPoster.elem.value = gameDesc[i].newsPoster.innerHTML;
				newsPost.newsHeadline.elem.value = gameDesc[i].newsHeadline.innerHTML;
				newsPost.newsContent.elem.value = gameDesc[i].newsText.innerHTML;
				newsPost.postType = 'update';
				newsPost.updateCheckMarks();
				newsPost.postID = gameDesc[i].postId.innerHTML;
				pageHeader.innerHTML = "Edit Post";
				window.scrollTo(0,pageHeader.getBoundingClientRect().top);
			},false);
		
			gameDesc[i].toggleActiveButton.addEventListener('click', function() {
				if(gameDesc[i].isActive.innerHTML == "active"){
					activateDeactNews(gameDesc[i].postId.innerHTML, 'inactive');
				}
				else {
					activateDeactNews(gameDesc[i].postId.innerHTML, 'active');
				}
			}, false);
		}(i))	
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