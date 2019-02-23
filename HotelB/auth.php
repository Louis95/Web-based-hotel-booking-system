<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password) 
 or die(mysql_error());

//select a database to work 
$db = "unleashe_hotel";
$selected = mysqli_select_db($dbhandle, $db ) 
  or die(mysql_error());


?>