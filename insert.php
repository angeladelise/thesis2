<html>
<head>
	<title>Creating Account info</title>
</head>
<body>



<?php	
		include "config.php";

		$dbase_link = mysql_connect($hostname, $db_login, $db_pass) or die("Could not connect");
		mysql_select_db($database) or die("Could not select database");

		$email = $_POST['email'];
        $password = $_POST['password'];

        echo $email
        echo $password

        $query = "INSERT INTO users (user_id, user_name, user_email, user_subcode, user_score, user_ip) VALUES ('3', 'Name','email','password', 20, 'won')";
		$result = mysql_query($query) or die("Query failed");
		print "ADDED<br>";


		$query = "INSERT INTO users (user_id, user_name, user_email, user_subcode, user_score, user_ip) VALUES ('1', 'Paolo','potato@gmail.com','12345', 20, 'won')";
		$result = mysql_query($query) or die("Query failed");
		print "ADDED<br>";
		
		$query = "INSERT INTO users (user_id, user_name, user_email, user_subcode, user_score, user_ip) VALUES ('2', 'Angela','angela@gmail.com','1232345', 24, 'amazing')";
		$result = mysql_query($query) or die("Query failed");
		print "ADDED<br>";

   
	mysql_close($dbase_link);
?>


</body>
</html>
