<?php
	$subcategory = $_GET['subcategory'];

	#database connection via DSN
	include('dbconn.php');

	$sql = "select title from gca_advisor_guides where subcategory = '".$subcategory."' ORDER BY title asc";

	$rs = odbc_exec($conn,$sql);

	if (!$rs)
		{exit("Error in SQL");}

	echo "<table>
				<tr>
				<th align='left'>Guide Title</th>
				</tr>";

	while (odbc_fetch_row($rs))
  	{
			$title=odbc_result($rs,"title");
			echo "<tr>";
			echo "<td><a href='#' onClick='getGuide(\"$title\"); return false;'>" . $title . "</a></td>";
			echo "</tr>";
		}
	echo "</table>";

	odbc_close($conn);
?>