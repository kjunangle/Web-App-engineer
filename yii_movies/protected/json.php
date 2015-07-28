
<?php 
$servername = "localhost:8889";
$username = "root";
$password = "root";

// Create connection
$conn =  mysql_connect($servername, $username, $password) or  die("Connection failed: " . $conn->connect_error);
$db_selected = mysql_select_db('movieblog_db',$conn) or  die("Connection failed ");
//echo "Connected successfully";   
?>  
<?php  
$q="SELECT * FROM movies_news";  
$qr=mysql_query($q);  
while($rs=mysql_fetch_array($qr)){  
    $json_data[]=array(  
        "topic"=>$rs['topic'],  
        "content"=>$rs['content'],
        "news_image"=>$rs['news_image']
    );    
}  
$json= json_encode($json_data);  
echo $json;  
?>