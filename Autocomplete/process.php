<?php 
include "mysql_connect.php";

if(isset($_GET["add_product"])){


    $sql = "INSERT INTO `product` ( `name`, `price`, `quantity`, `image`) VALUES ( '".$_GET['name']."', '".$_GET['price']."', '".$_GET['quantity']."', '".$_GET['image']."');";
    
    $result=	mysql_query($sql)or die (mysql_error());
    //echo $sql;
    if($result){
			
                            Print '<script>alert("Add Product Complete");</script>'; 
                    
			// redirects to login.php
			Print '<script>window.location.assign("index.php");</script>'; 
                          }
    
    
}
if(isset($_GET["edit_product"])){


    $sql = "UPDATE `product` SET `name` = '".$_GET["name"]."', `price` = '".$_GET["price"]."', `quantity` = '".$_GET["quantity"]."', `image` = '".$_GET["image"]."' WHERE `product`.`id` = ".$_GET["product_id"].";";
    
    $result=	mysql_query($sql)or die (mysql_error());
    //echo $sql;
    if($result){
			
                            Print '<script>alert("Edit Product Complete");</script>'; 
                    
			// redirects to login.php
			Print '<script>window.location.assign("index.php");</script>'; 
                          }
    
    
}

if(isset($_GET["add_review"])){
    $sql="INSERT INTO `author` ( `name`) VALUES ( '".$_GET['author']."')";
        
        $result=	mysql_query($sql)or die (mysql_error());
    
$sql_author_name = "select * from `author` where name = '".$_GET['author']."';";
    //echo $sql;
    $result2=	mysql_query($sql_author_name)or die (mysql_error());
    $objauthor = mysql_fetch_object($result2);
    
    if($result){
			$sql="INSERT INTO `review` ( `product_id`, `score`, `feedback`, `author_id`) VALUES ( '".$_GET['product_id']."', '".$_GET['rating']."', '".$_GET['feedback']."','".$objauthor->id."');";
     $result=	mysql_query($sql)or die ($sql_author_name);
        
        
         
        if($result){
        
                            Print '<script>alert("Add Review Complete");</script>'; 
                    
			// redirects to login.php
			Print '<script>window.location.assign("index.php");</script>'; 
            
        }
        
                          }
    
    
    
   
    
    
}
if(isset($_GET["delete_product"])){
$sql="delete from product where id =".$_GET["product_id"].";";
     $result=	mysql_query($sql)or die (mysql_error());
    //echo $sql;
    if($result){
			
                            Print '<script>alert("Delete Product Complete");</script>'; 
                    
			// redirects to login.php
			Print '<script>window.location.assign("index.php");</script>'; 
                          }
    
    
}



?>