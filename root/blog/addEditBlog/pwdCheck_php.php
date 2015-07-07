<?php
	$input = $_POST["input"];
	$pwd = "blarg";
	
	/*this is when the upload begins, if it succeeds it sends back true*/
	if($input == $pwd){
		echo true;
	} else{
		echo false;
	}
?>