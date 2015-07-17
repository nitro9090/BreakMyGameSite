/**
 * @author nitro9090
 * insert javascript below
 */

var pageHeader = document.getElementById('formHeader');
	submitNewNews = document.getElementById('submitButton');
	setNewPost = document.getElementById('setNewPost');
    uploadStatus = document.getElementById('uploadStatus');
    uploadStatus2 = document.getElementById('uploadStatus2');
    newsForm = document.getElementById("newsPostForm")
    xmlHttp = createXmlHttpRequestObject();
    oldDropDownButton = document.getElementsByClassName("dropDownButton");
    oldDropDownDiv = document.getElementsByClassName("dropDownDiv");
    oldDropDownSign = document.getElementsByClassName("dropDownSign");
    oldNewsHeadline = document.getElementsByClassName("oldNewsHeadline");
    oldNewsPoster = document.getElementsByClassName("oldPoster");
    oldNewsContent = document.getElementsByClassName("oldNewsContent");
    oldEditButton = document.getElementsByClassName("oldEditButton");
    oldToggleActiveButton = document.getElementsByClassName("oldToggleActiveButton");
    oldPostId = document.getElementsByClassName("oldPostId");
    oldIsActive = document.getElementsByClassName("oldPostActive");
    oldNews = [];


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
		document.getElementById(self.elem.id + "Filled").innerHTML = '<img class="checkValid" src="/img/news/check.jpg">';
		self.valid = true;
		} 
	else {
		document.getElementById(self.elem.id + "Filled").innerHTML = '<img class="checkValid" src="/img/news/x.png">';
		self.valid = false;
	}
}

var newsData = function() {
    	this.newsPoster = new inputVar("newsPoster","text");
    	this.newsHeadline = new inputVar("newsHeadline","text");
    	this.newsContent = new inputVar("newsContent","text");
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

setNewPost.addEventListener("click", function(){
	if(setNewPost.checked == true){
		newsPost.postType = "NewPost";
		formHeader.innerHTML = "New Post";
	}
	else {
		newsPost.postType = "UpdatePost";
		formHeader.innerHTML = "Update Post";
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
						newsPost.postType = "NewPost";
						formHeader.innerHTML = "New Post";
						setNewPost.disabled = true;
						updateNewsList();
						setButtons();
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
			
			xmlHttp.open("POST", "/news/addEditNews/~addEditNews_postPost_php");
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


/// sets up the old posts objects

function oldPost(dropDownButton, dropDownDiv, dropDownSign, newsHeadline, newsPoster, newsContent, editButton, toggleActiveButton, postId, isActive) {
    var self = this
	this.dropDownButton = dropDownButton;
	this.dropDownDiv = dropDownDiv;
    this.dropDownSign = dropDownSign
	this.newsHeadline = newsHeadline;
    this.newsPoster = newsPoster;
    this.newsContent = newsContent;
    this.editButton = editButton;
    this.toggleActiveButton = toggleActiveButton;
    this.postId = postId;
    this.isActive = isActive;
    
    this.addDropDownListener = function() {
    	self.dropDownDiv.style.height = "auto";
    	self.divHeight = oldNews[i].dropDownDiv.offsetHeight;
    	self.dropDownDiv.style.height = "0";
    	
    	self.dropDownButton.addEventListener('click', function(){
			if(self.dropDownDiv.style.height == oldNews[i].divHeight + "px"){
				self.dropDownDiv.style.height = "0px";
				self.dropDownSign.innerHTML = "<b> + </b>";
			}
			else {
				self.dropDownDiv.style.height = oldNews[i].divHeight + "px";
				self.dropDownSign.innerHTML = "<b> - </b>";
			}
		},false);
    }
    
    this.addEditButtonListener = function () {
    	self.editButton.addEventListener('click', function (){
    		self.dropDownButton.style.background = "lightgrey";
    		newsPost.newsPoster.elem.value = self.newsPoster.innerHTML;
    		newsPost.newsHeadline.elem.value = self.newsHeadline.innerHTML;
    		newsPost.newsContent.elem.value = self.newsContent.innerHTML;
    		newsPost.postType = 'UpdatePost';
    		newsPost.updateCheckMarks();
    		newsPost.postID = self.postId.innerHTML;
			formHeader.innerHTML = "Update Post";
			setNewPost.disabled = false;
			setNewPost.checked = false;
		
			window.scrollTo(0,pageHeader.getBoundingClientRect().top);
    	});
    }
    
    this.addToggleActiveListener = function () {
    	self.toggleActiveButton.addEventListener('click', function() {
			if(self.isActive.innerHTML == "active"){
				activateDeactNews(self.postId.innerHTML, 'inactive');
			}
			else {
				activateDeactNews(self.postId.innerHTML, 'active');
			}
		}, false);
    }
}

function setupNewsList() {
	for(var i=0; i < oldDropDownButton.length ; i++)
	{
		oldNews[i] = new oldPost(oldDropDownButton[i], oldDropDownDiv[i], oldDropDownSign[i], oldNewsHeadline[i], oldNewsPoster[i], oldNewsContent[i], oldEditButton[i], oldToggleActiveButton[i], oldPostId[i], oldIsActive[i]);
		
		(function (i) {
			oldNews[i].addDropDownListener();
			oldNews[i].addEditButtonListener();
			oldNews[i].addToggleActiveListener();
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