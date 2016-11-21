<?php	
		include "config.php";

		$dbase_link = mysql_connect($hostname, $db_login, $db_pass) or die("Could not connect");
		mysql_select_db($database) or die("Could not select database");



		$query = "UPDATE users SET user_name='Angela', user_email='angelade@gmail.com', user_subcode = 'amazing', user_score = 23, user_ip = 'pretty' WHERE user_id= 1";
		$result = mysql_query($query) or die("Query failed");
		print "UPDATED<br>";

   
	mysql_close($dbase_link);
?>
