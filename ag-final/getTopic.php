<?php
	$discipline = $_GET['discipline'];

	#database connection via DSN
	include('dbconn.php');

	$sql = "select distinct guidetype from gca_advisor_guides where discipline = '".$discipline."' ORDER BY guidetype asc";

	$rs = odbc_exec($conn,$sql);

	if (!$rs)
		{exit("Error in SQL");}

	echo "<table>
				<tr>
				<th align='left'>Guide Type</th>
				</tr>";

	while (odbc_fetch_row($rs))
  	{
			$guidetype=odbc_result($rs,"guidetype");
			echo "<tr>";
			echo "<td><a href='#' onClick='getCategory(\"$guidetype\"); return false;'>" . $guidetype . "</a></td>";
			echo "</tr>";
		}
	echo "</table>";

	odbc_close($conn);
?>