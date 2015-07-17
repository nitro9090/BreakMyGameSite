<?php

require $_SERVER ['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php";
$sqlSelectPassword = "SELECT password FROM bmg_passwords LIMIT 1";
$passwordData = mysqli_query ( $db_conx, $sqlSelectPassword );

while ( $passwordRow = $passwordData->fetch_assoc () ) {		
	$password = $passwordRow ["password"];
}

$db_conx->close ();
?>