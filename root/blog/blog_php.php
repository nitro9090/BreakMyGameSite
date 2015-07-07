<?php
	include_once ($_SERVER['DOCUMENT_ROOT'] . "/multiUseCode/php/db_conx.php");
	$sql = "SELECT * FROM bmg_blog ORDER BY blog_date DESC LIMIT 5";

	$blogData = mysqli_query($db_conx, $sql);
	
	while($blogDataRow = $blogData->fetch_assoc()) {
		echo '<tr class="blogBlock">
					<td>
						<h3 class="blogHeadline">' . $blogDataRow["blog_headline"] . '</h3>
						<h4 class="blogger">By:' . $blogDataRow["blogger"]. '</h4>
						<h4 class="blogDate">' . $blogDataRow["blog_date"] .'</h4>
						<hr class="blogHr">
						<p class="blogText">
							' . $blogDataRow["blog_text"] . '
						</p>
					</td>
				</tr>';
	}
	$db_conx->close();
?>