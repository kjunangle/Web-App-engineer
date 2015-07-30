<?php include "mysql_connect.php" ;?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Main</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    <!--<script src="js/jquery-1.11.3.min.js"></script> -->
       <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
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
        <li class="active"><a href="index.php">HOME </a></li>
        <li ><a href="add_product.php">Add Product </a></li>
      </ul>
 
 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      <form method="get" id="search-product" action="">
      <div class="container">
          <div class="col-md-3"></div>
          <div class="col-md-6">
       <div class="input-group">
           
           <input type="text" name="keyword"  id ="keyword" value="<?php echo $_GET['keyword']; ?>" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <input class="btn btn-default" value="GO!" id ="keywordbutton" type="submit">Go!</input>
           </span>
          </div>
     
    </div>
          
            <div class="col-md-3"></div>
     </div>
      </form>
      <br>
 
<div class="container-fluid">
          <div class="table-responsive">
          <table class="table table-hover">
         
       <thead>
              <th>
                  #
              </th>
              <th>
              ITEM
              </th>
              <th>
                PRICE
              </th>
            
              <th>
                  AVAILABLE
              </th>
              <th>
              RATING
              </th>
             <th>
                  EDIT
              </th>
              <th>
              DELETE
              </th>
          </thead>
              
              <tbody id="tbody">
              <?php 



    $query = 'SELECT * FROM `product`';

  
$result = mysql_query($query);
 include "suggestion-word.php";





while($item = mysql_fetch_object($result)){

   $rating = get_review_score($item->id);


    
                  ?>
              <tr id ="trbody">
                  
                  <td  width="270px" height="250px">
                 <img src='<?php echo $item->image; ?>' width="200" height="200"/>
                  </td>
                  
                     <td>
                         <a href="product_review.php?product_id=<?php echo $item->id?>" title="Click to View any Detail"><?php echo $item->name; ?></a>
                  </td>
                  
                     <td>
                  <?php echo $item->price; ?>
                  </td>
                  
                     <td>
                   <?php echo $item->quantity; ?>
                  </td>
                  
                     <td>
                  <?php echo $rating; ?> / 5
                         <br>
                         <a href="add_review.php?product_id=<?php echo $item->id; ?>">Add Review</a>
                  </td>
                       <td>
                     <a href="edit_product.php?product_id=<?php echo $item->id; ?>">Edit</a>
                  </td>
               
                    <td>
                 <a href="delete_product.php?product_id=<?php echo $item->id; ?>">Delete</a>
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

<script>
  $(function() {
    $( document ).tooltip();
  });
  </script>