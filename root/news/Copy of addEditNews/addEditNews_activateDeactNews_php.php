<?php	
	$nId = $_POST["nId"];
	$nNewStatus = $_POST["nNewStatus"];
	
	include_once ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");
	$sql = "UPDATE bmg_news SET news_active = ('$nNewStatus') WHERE news_ID = ('$nId') ";
	
	echo '<response>';
	
	if( $db_conx -> query($sql) === true){
		if($nNewStatus == "active"){
			echo "post successfully activated";
		}
		elseif ($nNewStatus == "inactive"){
			echo "post successfully deactivated";
		}
		else {
			echo 'Error: post was not edited successfully Id=' . $nId . ' New Status=' . $nNewStatus;
		}
	} else{
		echo "Error: PHP upload query failed";
	}
			
	echo '</response>';
	
	$db_conx->close();
?>