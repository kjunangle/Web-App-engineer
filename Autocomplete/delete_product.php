<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Delete Product</title>

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
           $obj  = mysql_fetch_object($result);
          
           ?>
           
           
           
           <div class="container-fluid">
               <h2>Delete Product</h2><br>
             
               <div class="row">
                   <div class="col-md-1"></div>
  <div class="col-md-3">Are you sure to delete  <b><?php echo $obj->name; ?></b></div>
  <div class="col-md-3"> </div>
 </div>
               
               
                
               <br>
                       <div class="row">
                  
  <div class="col-md-3"></div>
                            <div class="col-md-6">  <img src='<?php echo $obj->image; ?>' width="200" height="200"/></div>
  <div class="col-md-3"></div>
 </div>   <br>
               
           <br>
                         
                  <div class="row">
                      
                       <div class="col-md-3"></div>
                      <div class="col-md-2">
                        <form method="get" action="index.php">
                    <input class="btn btn-default" value="No" type="submit"/>
                        </form>
                      </div>
                      <div class="col-md-2">
                             <form method="get" action="process.php" id="add_review">
                                        <input type="hidden" value="<?php echo $_GET['product_id']; ?>" name="product_id" />
                               
                                 <input class="btn btn-default" value="Yes" name="delete_product" id ="delete_product" type="submit"/>
                                 </form>
                            </div>
                          
                      </div>
                   
                  
                
               
           
                 
                   
                    
                  
           </div>
           
    </body>
    
<script language="javascript">
        function Validate(){
	var check= new Array(5);;
	
	check[0]=document.getElementById("add_product").elements[0].value;
	check[1]=document.getElementById("add_product").elements[1].value;
	check[2]=document.getElementById("add_product").elements[2].value;
	check[3]=document.getElementById("add_product").elements[3].value;
	
	
	if(check[0].length<1){
		alert("Please put your product name");
        return false;
		
	}
	if((check[1]/2>0||check[1]/2<0)==false){
		alert("Please put the price");
         return false;
	}
	if(check[3].length<1){
		alert("Please put your product image url");
         return false;
	}
	if((check[2]/2>0||check[2]/2<0)==false){
		alert("Please put the Product Quantity");
         return false;
	}
	else{
         return true;
		}
}
</script>
    </html>