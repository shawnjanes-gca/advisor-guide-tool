<?php
	$guidetype = $_GET['guidetype'];

	#database connection via DSN
	include('dbconn.php');

	$sql = "select distinct subcategory from gca_advisor_guides where guidetype = '".$guidetype."' ORDER BY subcategory asc";

	$rs = odbc_exec($conn,$sql);

	if (!$rs)
		{exit("Error in SQL");}

	echo "<table>
				<tr>
				<th align='left'>Sub-Categories</th>
				</tr>";

	while (odbc_fetch_row($rs))
  	{
			$subcategory=odbc_result($rs,"subcategory");
			echo "<tr>";
			echo "<td><a href='#' onClick='getTitle(\"$subcategory\"); return false;'>" . $subcategory . "</a></td>";
			echo "</tr>";
		}
	echo "</table>";

	odbc_close($conn);
?>