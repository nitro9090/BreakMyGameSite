<?php
	include_once ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");
	$sql = "SELECT * FROM bmg_news WHERE news_active='active' ORDER BY news_date DESC LIMIT 5";

	$newsData = mysqli_query($db_conx, $sql);
	
	while($newsDataRow = $newsData->fetch_assoc()) {
		echo '<tr class="newsBlock">
					<td>
						<h3 class="newsHeadline">' . $newsDataRow["news_headline"] . '</h3>
						<h4 class="poster">By:' . $newsDataRow["news_poster"]. '</h4>
						<h4 class="newsDate">' . $newsDataRow["news_date"] .'</h4>
						<hr class="newsHr">
						<p class="newsText">
							' . $newsDataRow["news_content"] . '
						</p>
					</td>
				</tr>';
	}
	$db_conx->close();
?>