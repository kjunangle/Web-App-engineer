<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Product Review</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    <!--<script src="js/jquery-1.11.3.min.js"></script> -->
       <script src="js/jquery-1.9.1.js"></script>
       <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
         <script src="js/autocomplete.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

     
      
       <body>
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
    <a class="navbar-brand" href="#">  <b>CAMT SHOP 552115077 </b> </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">HOME </a></li>
        <li><a href="add_product.php">Add Product </a></li>
      </ul>
 
 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
            include "mysql_connect.php";
           $sql = "select * from product where id =".$_GET['product_id'];
            $result = mysql_query($sql);
            $product = mysql_fetch_object($result);

            
           ?>
           
           
           
           <div class="container-fluid">
               <h2>Add Product</h2><br>
             
               <div class="row">
                   <div class="col-md-1"></div>
  <div class="col-md-3"><h3>Review for <b><?php echo $product->name ?></b></h3></div>
  <div class="col-md-3"> </div>
 </div>
               
               
                
               <br>
                       <div class="row">
                  
  <div class="col-md-3"></div>
                            <div class="col-md-3">  <img src='<?php echo $product->image; ?>' width="200" height="200"/></div>
                           <br><br>
  <div class="col-md-2">Product Name :<b><?php echo $product->name;?></b> </div>
                           <br>
                            <div class="col-md-2">Product Price : <b> <?php echo $product->price;?></b> </div>
                            <br>
                            <div class="col-md-2">Product Quantity : <b> <?php echo $product->quantity;?></b> </div>
 </div>   <br>
               
               
              
              <div class="table-responsive">
          <table class="table table-hover">
         
       <thead>
              <th>
                  #
              </th>
              <th>
              Review
              </th>
              <th>
                From
              </th>
              <th>
                Rating
              </th>
               
          </thead>
              
              <tbody id="tbody">
              <?php 



    $query = "SELECT * FROM `review`  INNER JOIN `author` ON `review`.`author_id` = `author`.`id` WHERE `review`.`product_id` = ".$_GET['product_id'];

  
$result = mysql_query($query);
 include "suggestion-word.php";



$no =1;

while($item = mysql_fetch_object($result)){

   $rating = get_review_score($item->id);


    
                  ?>
              <tr id ="trbody">
                  
                  <td>
                 <?php echo $no; $no++;?> 
                  </td>
                  
                     <td>
                         <?php echo $item->feedback; ?> 
                  </td>
                  
                     <td>
                     <?php echo $item->name ?>
                  </td>
                  
                    
                     <td>
                     <?php echo $item->score ?>
                  </td>
                  </tr>
                  
                <?php  
                }
              ?>
              
              </tbody>
               
          </table>
          </div> 
               
               
               
               
           </div>
           
    </body>
    

    </html>