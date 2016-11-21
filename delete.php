<?php	
		include "config.php";

		$dbase_link = mysql_connect($hostname, $db_login, $db_pass) or die("Could not connect");
		mysql_select_db($database) or die("Could not select database");



		$query = "DELETE FROM users WHERE user_id= 1";
		$result = mysql_query($query) or die("Query failed");
		print "DELETED<br>";

   
	mysql_close($dbase_link);
?>
