<?php
if (isset($_POST["game_names"])) {
	$game_name = preg_replace('#[^a-z0-9\!\'\@\ ]#i', '', $_POST['game_name']);
	include_once ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");

	$sql = "SELECT * FROM bmg_games WHERE game_name='$game_name' LIMIT 5";
	$query = mysqli_query($db_conx, $sql);
	$gameNameCheck = mysqli_num_rows($query);
	if ($gameNameCheck < 1) {
		echo $game_name . ' not found';
		exit();
	} else {
		while($row = mysqli_fetch_assoc($query)) {
			echo "id: " . $row["game_name"]. " - Name: " . $row["game_description"] . "<br>";
		}
		exit();
	}
}

if (isset($_POST["game_name"])) {
	/* Need to figure out how to limit the data sent by the first letter input*/
	$game_name = preg_replace('#[^a-z0-9\!\'\@\ ]#i', '', $_POST['game_name']);
	include_once ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");

	$sql = "SELECT * FROM bmg_games WHERE game_name='$game_name' LIMIT 5";
	$query = mysqli_query($db_conx, $sql);
	$gameNameCheck = mysqli_num_rows($query);
	if ($gameNameCheck < 1) {
		echo $game_name . ' not found';
		exit();
	} else {
		while($row = mysqli_fetch_assoc($query)) {
			echo "id: " . $row["game_name"]. " - Name: " . $row["game_description"] . "<br>";
		}
		exit();
	}
}
?>