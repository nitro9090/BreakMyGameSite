<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	function validate_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$nID = validate_input($_POST["nID"]);
    $nType = validate_input($_POST["nType"]);
	$nName = validate_input($_POST["nName"]);
	$nHeadline = validate_input($_POST["nHeadline"]);
	$nContent = validate_input($_POST["nContent"]);
	
	if($nName == "" || $nHeadline == "" || $nContent == ""){
		echo "You haven't filled everything out";
		return;
	}
	
	include_once ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");
	
	if($nType === "newPost"){
		$sql = "INSERT INTO bmg_news (news_poster, news_headline, news_content) VALUES ('$nName', '$nHeadline', '$nContent')";
	}
	elseif($nType === "update" && $nID > 0){
		$sql = "UPDATE bmg_news SET news_poster = ('$nName'), news_headline = ('$nHeadline'), news_content = ('$nContent')  WHERE news_ID = ('$nID')";
	}
	else {
		echo "Error: undefined post type";
		return;
	}
	
	echo '<response>';
	
	/*this is when the upload begins, if it succeeds it sends back true*/
	if( $db_conx -> query($sql) === true){
		echo "news uploaded successfully";
	} else{
		echo "Error: PHP upload query failed";
	}
			
	echo '</response>';
	
	$db_conx->close();
}
?>