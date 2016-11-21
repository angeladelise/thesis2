<?php
	include "config.php"; //CONNECT TO YOUR DATABASE
	$dbconn = mysql_connect($hostname, $db_login, $db_pass) or die("Could not connect");   
        print "<div align='center'>Connected to host!<br>";

	$query = "CREATE DATABASE $database";
	$result = mysql_query($query) or die("Query failed");
	print "Database created !<br>";
        mysql_select_db($database) or die("Could not select database");    
        print "Database selected !<br>";


//CREATE TABLE CODE

    $query = "CREATE TABLE users (user_id int NOT NULL PRIMARY KEY, user_name TEXT, user_email TEXT, user_subcode TEXT, user_score INT (4), user_ip TEXT)";
    $result = mysql_query($query) or die("Query failed");    
    print "Table users is created !<br>";
    
    $query = "CREATE TABLE orders (order_id INT (4) NOT NULL AUTO_INCREMENT, user_id INT (4), product_id INT (4), order_quantity INT (4), order_date DATE, PRIMARY KEY (order_id))";
    $result = mysql_query($query) or die("Query failed!");    
    print "Table orders is created !<br>";
	
	$query = "CREATE TABLE products (product_id INT (4) NOT NULL AUTO_INCREMENT, product_type TEXT, product_name TEXT, product_desc TEXT, product_link TEXT, product_image TEXT, product_quantity INT (4), product_lastprice DOUBLE, product_ourprice DOUBLE, PRIMARY KEY (product_id))";
    $result = mysql_query($query) or die("Query failed hey!");    
    print "Table products is created !<br>";
    
 mysql_close($dbconn);                                   

?>
