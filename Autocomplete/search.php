<?php 
include 'mysql_connect.php';
 include "suggestion-word.php";

  if(!empty($_GET['keyword'])):
  $result = mysql_query("SELECT * FROM product WHERE name LIKE '%" . $_GET['keyword'] . "%'");

  while($item = mysql_fetch_object($result)):
	  $item->rating = get_review_score($item->id);
        if($item->rating==null){
$item->rating=0;
}
	  $products[] = $item;
  endwhile; 

endif;

 echo json_encode($products);




?>