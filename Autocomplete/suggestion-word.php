<?php
include 'mysql_connect.php';
if(!empty($_GET['term'])){
   $query_search = 'SELECT * FROM `product` WHERE name LIKE "%'.$_GET['term'].'%";';
        $result = mysql_query($query_search);

       $return_arr = [];
        while( $array_search = mysql_fetch_object($result)){
               $return_arr[] = $array_search->name;
          
            
            
                            }
  echo json_encode($return_arr);
}


function get_review_score($id) {

  $total_score = 0;
  $number_review = 0;
  $rating = mysql_query("SELECT score FROM review WHERE product_id = " . $id);
  while($score = mysql_fetch_array($rating)):
	  $total_score += $score['score'];
	  $number_review ++;
  endwhile;
    
if($number_review==null){

    $rating=0;
}
    else{
        $rating =$total_score / $number_review;
        
    }
  return $rating;
}
  ?>