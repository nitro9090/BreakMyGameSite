<?php
$input = $_POST ["input"];
$input = $_POST ["pageRedirect"];

include_once ($_SERVER ['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");
$sqlSelectPwd = "SELECT password FROM bmg_passwords LIMIT 1";
$pwdData = mysqli_query ( $db_conx, $sqlSelectPwd );

	while ( $pwdRow = $pwdData->fetch_assoc () ) {
		$pwd = $pwdRow ["password"];
	}
	
	if ($input == $pwd) {
		echo true;
		return;
		
		$newPwd = createRandomPwd (5, 10 );
		
		$sqlSetPwd = "UPDATE bmg_passwords SET password = ('$newPwd')";
		mysqli_query ( $db_conx, $sqlSetPwd );
		
		// Email information
		$admin_email = "mike@breakmygamegroup.com";
		$email = "mike@breakmygamegroup.com";
		$subject = "New BMG password";
		$comment = 'The new password: ' . $newPwd;
		
		// send email
		mail ( $admin_email, "$subject", $comment, "From:" . $email );
	} else {
		header($_SERVER ['DOCUMENT_ROOT']);
		exit();
		echo $input . $pwd;
		echo $input == $pwd;
		echo false;
	}

function createRandomPwd($minLength, $maxLength) {
	$password = "";
	$randLength = rand ( $minLength, $maxLength );
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	for($i = 0; $i < $randLength; $i ++) {
		$password .= $chars [mt_rand ( 0, strlen ( $chars ) - 1 )];
	}
	return $password;
}

$db_conx->close ();
?>