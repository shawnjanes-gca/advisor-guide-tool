<?php
	$title = $_GET['title'];

	#database connection via DSN
	include('dbconn.php');

	$sql = "select html from gca_advisor_guides where title = '".$title."'";

	$rs = odbc_exec($conn,$sql);

	if (!$rs)
		{exit("Error in SQL");}

	echo "<table>
				<tr>
				<th align='left'>Guide Body</th>
				</tr>";

	while (odbc_fetch_row($rs))
  	{
			$html=odbc_result($rs,"html");
			echo "<tr>";
			echo "<td>" . $html . "</td>";
			echo "</tr>";
		}
	echo "</table>";

	odbc_close($conn);
?>