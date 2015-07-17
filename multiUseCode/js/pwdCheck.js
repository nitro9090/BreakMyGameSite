/**
 * @author nitro9090
 */

var pwdInput = prompt("What's the password?");

document.getElementById("pageInsert").innerHTML = "testing";
var pwdHttpReq = createXmlHttpRequestObject();
//uncomment to force a password 
//checkPwd();

function checkPwd(){
	if(pwdHttpReq.readyState == 0 || pwdHttpReq.readyState == 4){
		try{
			pwdHttpReq.onreadystatechange = function (){
				if(pwdHttpReq.readyState == 4){
					if(pwdHttpReq.status == 200){
						pwdHttpResponse = pwdHttpReq.responseText;
						document.getElementById("pageInsert").innerHTML = pwdHttpResponse;
					}
					else{
						alert("AJAX error");
						window.location.assign("/");
					}
				}
			}

			var sendData = "input=" + pwdInput + "&pageRedirect=" + pageRedirect;
			
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