<?php
	include_once ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");
	$sql = "SELECT * FROM bmg_news ORDER BY news_date DESC";

	$newsData = mysqli_query($db_conx, $sql);
	
	echo '<table class="oldNewsTable">';
	
	while($newsDataRow = $newsData->fetch_assoc()) {
		echo '<tr>
				<td>
				<div class="oldNewsBlock">';
				if($newsDataRow["news_active"] == 'inactive'){
					echo '<div class="oldNewsInactive">';
				}
				else {
					echo '<div class="oldNewsActive">';
				}
				
				echo '<div class="oldNewsHeadline">' . $newsDataRow["news_headline"] . '</div>
				<div class="oldPoster">' . $newsDataRow["news_poster"]. '</div>
				<div class="oldNewsDate">' . $newsDataRow["news_date"] .'</div>
				<div class="oldSign">+</div>
				</div>
				
				<div class="oldDropDownDiv">
					<hr>
					<p class="oldNewsText">' . $newsDataRow["news_content"] . '</p>

					<button class="oldEditButton">Edit</button>';
						
					if($newsDataRow["news_active"] == 'inactive'){
						echo '<button class="oldToggleActiveButton">activate</button>';
					}
					else {
						echo '<button class="oldToggleActiveButton">deactivate</button>';
					}
			echo '<div class="oldPostId">' . $newsDataRow["news_ID"] . '</div>
				  <div class="oldPostActive">' . $newsDataRow["news_active"] . '</div>
					</div></div></td>
		</tr>';
		
		echo '</table>';
	}
	$db_conx->close();
?>