<?php
	#database connection via DSN
	$conn = odbc_connect("gcdb32", "greenetc", "greene");
		if (!$conn) {
			echo odbc_errormsg();
			exit;
			}
?>