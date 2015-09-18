<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Advisor Guides</title>
		<script src="js/functions.js" type="text/javascript"></script>
		<link id="cssfile" href="css/guides.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<?php
		#database connection via DSN
		include('dbconn.php');

		$sql = "Select distinct discipline from GCA_ADVISOR_GUIDES ORDER BY discipline asc";

		$rs = odbc_exec($conn,$sql);

		if (!$rs)
			{exit("Error in SQL");}

		echo "<table><tr>";
		echo "<th align='left'>Disciplines</th>";
		echo "</tr>";

		while (odbc_fetch_row($rs))
			{
				$discipline=odbc_result($rs,"discipline");
				#echo "<tr><td><a href='#' onClick='getCategory(\"$discipline\"); return false;'>" . $discipline . "</a></td></tr>";
				echo "<tr><td><a href='#' onClick='getTopic(\"$discipline\"); return false;'>" . $discipline . "</a></td></tr>";
			}

		odbc_close($conn);
		echo "</table>";
	?>
<br />
<div id="txtType"><b>Guide Types will be listed here.</b></div>
<br />
<div id="txtCategory"><b>Discipline sub-categories will be listed here.</b></div>
<br />
<div id="txtTitle"><b>Guide titles will be listed here.</b></div>
<br />
<div id="txtGuide"><b>Complete Advisor Guide will display here.</b></div>
		<footer>
		</footer>
	</body>
</html>