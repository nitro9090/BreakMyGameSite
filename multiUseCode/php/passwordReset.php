<?php
//comment out to reset the password each time someone logs in to the server
return;
		
$newPwd = createRandomPwd (5, 10 );

require ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");
$sqlSetPwd = "UPDATE bmg_passwords SET password = ('$newPwd')";
mysqli_query ( $db_conx, $sqlSetPwd );

// Email credentials
$admin_email = "mike@breakmygamegroup.com";
$email = "mike@breakmygamegroup.com";
$subject = "New BMG password";
$comment = 'The new BMG password: ' . $newPwd;

// send email
mail ( $admin_email, "$subject", $comment, "From:" . $email );

function createRandomPwd($minLength, $maxLength) {
	$password = "";
	$randLength = rand ( $minLength, $maxLength );
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	for($i = 0; $i < $randLength; $i ++) {
		$password .= $chars [mt_rand ( 0, strlen ( $chars ) - 1 )];
	}
	return $password;
}
?>