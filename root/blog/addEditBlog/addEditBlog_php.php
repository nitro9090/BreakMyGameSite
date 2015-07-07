<?php
	/*$bName = trim($_POST["bName"]);
	$bHeadline = trim($_POST["bHeadline"]);
	$bPost = trim($_POST["bPost"]);*/

	$bName = $_POST["bName"];
	$bHeadline = $_POST["bHeadline"];
	$bPost = $_POST["bPost"];
	
	include_once ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");
	$sql = "INSERT INTO bmg_blog (blogger, blog_headline, blog_text) VALUES ('$bName', '$bHeadline', '$bPost')";
	
	echo '<response>';
	
	/*this is when the upload begins, if it succeeds it sends back true*/
	if( $db_conx -> query($sql) === true){
		echo "blog uploaded successfully";
	} else{
		echo "Error: PHP upload query failed";
	}
			
	echo '</response>';
	
	$db_conx->close();
?>