<?php
mysql_connect("localhost:8889","root","root") or die("Cannot connect the Server");       
mysql_select_db("movieblog_db") or die("Cannot select database");       
mysql_query("set character set utf8");     
?>   