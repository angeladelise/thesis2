<?php	
		include "config.php";

		$dbase_link = mysql_connect($hostname, $db_login, $db_pass) or die("Could not connect");
		mysql_select_db($database) or die("Could not select database");



		$query = "select * from users";
		
		$result = mysql_query($query) or die("Query failed");
		echo "<b>ID: </b>&nbsp;&nbsp;".mysql_result($result,0,"user_id")."<br/>";
		echo "<b>Name: </b>&nbsp;&nbsp;".mysql_result($result,0,"user_name")."<br/>";
		echo "<b>Email: </b>&nbsp;&nbsp;".mysql_result($result,0,"user_email")."<br/>";
		echo "<b>Subcode: </b>&nbsp;&nbsp;".mysql_result($result,0,"user_subcode")."<br/>";
		echo "<b>Score: </b>&nbsp;&nbsp;".mysql_result($result,0,"user_score")."<br/>";
		echo "<b>IP: </b>&nbsp;&nbsp;".mysql_result($result,0,"user_ip")."<br/>";

   
	mysql_close($dbase_link);
?>
