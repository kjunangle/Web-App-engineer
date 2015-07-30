
<?php 
header('Content-Type: text/json');

include ('db.php')    
?>  
<?php  
$q="SELECT * FROM review";  
$qr=mysql_query($q);  
while($rs=mysql_fetch_array($qr)){  
    $json_data[]=array(  
        "tmvdb_id"=>$rs['tmvdb_id'],  
        "tmvdb_title"=>$rs['tmvdb_title'],
        "review"=>$rs['review']
    );    
}  
$json= json_encode($json_data); 
// $json = json_encode($json_data, JSON_PRETTY_PRINT), "\n";

echo $json;  

?>