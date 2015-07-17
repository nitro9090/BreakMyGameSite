<?php
	require ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");
	$sql = "SELECT * FROM bmg_news ORDER BY news_date DESC";
	$newsData = mysqli_query($db_conx, $sql);
	
	while($newsDataRow = $newsData->fetch_assoc()) {
		echo '<div class="dropDownButton">';
				if($newsDataRow["news_active"] == 'inactive'){
					echo '<table class="oldNewsInactive">';
				}
				else {
					echo '<table class="oldNewsActive">';
				}
					
				echo '<tr><td class="oldNewsHeadline">' . $newsDataRow["news_headline"] . '</td>
				<td class="oldPoster">' . $newsDataRow["news_poster"]. '</td>
				<td class="oldNewsDate">' . $newsDataRow["news_date"] .'</td>
				<td class="dropDownSign"><b>+</b></td>
				</tr></table>
				
				<div class="dropDownDiv">
					<hr>
					<p class="oldNewsContent">' . $newsDataRow["news_content"] . '</p>

					<button class="oldEditButton">Edit</button>';
						
					if($newsDataRow["news_active"] == 'inactive'){
						echo '<button class="oldToggleActiveButton">activate</button>';
					}
					else {
						echo '<button class="oldToggleActiveButton">deactivate</button>';
					}
			echo '<div class="oldPostId">' . $newsDataRow["news_ID"] . '</div>
				  <div class="oldPostActive">' . $newsDataRow["news_active"] . '</div>
				</div></div>';
	}
	$db_conx->close();
?>