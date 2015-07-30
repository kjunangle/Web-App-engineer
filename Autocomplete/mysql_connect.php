<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";

// Create connection
$conn =  mysql_connect($servername, $username, $password) or  die("Connection failed: " . $conn->connect_error);
$db_selected = mysql_select_db('camt_shop',$conn) or  die("Connection failed ");
//echo "Connected successfully";
?>