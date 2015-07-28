
<?php 
mysql_connect("localhost:8889","root","root") or die("Cannot connect the Server");       
mysql_select_db("movieblog_db") or die("Cannot select database");       
mysql_query("set character set utf8");     
?>  
<?php  
$q="SELECT * FROM movies_news";  
$qr=mysql_query($q);  
while($rs=mysql_fetch_array($qr)){  
    $json_data[]=array(  
        "topic"=>$rs['topic'],  
        "content"=>$rs['content'],
        "image_path"=>$rs['image_path']
    );    
}  
$json= json_encode($json_data);  
echo $json;  
?>