<?php
	$title = $_GET['title'];

	#database connection via DSN
	include('dbconn.php');


	$sql1 ="select dbms_lob.getlength(html) as htmllen from gca_advisor_guides where title = '".$title."'";
	$rs1 = odbc_exec($conn,$sql1);

	if (!$rs1)
		{exit("Error in SQL");}
	$htmllen=odbc_result($rs1,"htmllen");



	$sql = "select dbms_lob.substr(html,3000) as html from gca_advisor_guides where title = '".$title."'";

	$rs = odbc_exec($conn,$sql);

	if (!$rs)
		{exit("Error in SQL");}

	echo "<table>
				<tr>
				<th align='left'>Guide Body" .$htmllen. "</th>
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