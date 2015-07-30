<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Product</title>

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
        <li ><a href="add_product.php">Add Product </a></li>
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
               <h2>Edit Product</h2><br>
               
               
                            <div class="row">
                  
  <div class="col-md-3"></div>
                            <div class="col-md-6">  <img src='<?php echo $obj->image; ?>' width="200" height="200"/></div>
  <div class="col-md-3"></div>
 </div>   <br>
               
               
              <form method="get" action="process.php" id="edit_product" onsubmit="return Validate()">
               <div class="row">
                   <div class="col-md-2"></div>
  <div class="col-md-1">Name : </div>
  <div class="col-md-3"><input type="text" name="name" value='<?php echo $obj->name;?>'  class="form-control"/></div>
 </div>
               <br>
                       <div class="row">
                   <div class="col-md-2"></div>
  <div class="col-md-1">Price : </div>
  <div class="col-md-3"><input type="text" name="price" value='<?php echo $obj->price;?>' class="form-control"/></div><div class="col-md-1">THB</div>
 </div>   <br>
                              <div class="row">
                   <div class="col-md-2"></div>
  <div class="col-md-1">Quantity : </div>
  <div class="col-md-3"><input type="text" name="quantity" value="<?php echo $obj->quantity;?>" class="form-control"/></div>
 </div><br>
                          <div class="row">
                   <div class="col-md-2"></div>
  <div class="col-md-1">Image : </div>
  <div class="col-md-3"><input type="text" name="image" class="form-control" value="<?php echo $obj->image;?>" placeholder="eg img/product.img"/></div>
 </div>    
                  <br>
                  <div class="row">
                      
                       <div class="col-md-3"></div>
                           <input type="hidden" value="<?php echo $_GET['product_id']; ?>" name="product_id" />
                    <div class="col-md-1"><input class="btn btn-default" value="Edit !" name="edit_product" id ="editbutton" type="submit"/></div>  </form>
                      <form method="get" action="index.php" >
                        
                    <div class="col-md-1"><input class="btn btn-default" value="Back" type="submit"/></div>
                      </form>
                      </div>
                
               
                  
           </div>
           
    </body>
    
<script language="javascript">
        function Validate(){
	var check= new Array(5);;
	
	check[0]=document.getElementById("edit_product").elements[0].value;
	check[1]=document.getElementById("edit_product").elements[1].value;
	check[2]=document.getElementById("edit_product").elements[2].value;
	check[3]=document.getElementById("edit_product").elements[3].value;
	
	
	if(check[0].length<1){
		alert("Please put your product name");
        return false;
		
	}
	else if((check[1]/2>0||check[1]/2<0)==false){
		alert("Please put the price");
         return false;
	}
	else if(check[3].length<1){
		alert("Please put your product image url");
         return false;
	}
	else if((check[2]/2>0||check[2]/2<0)==false){
		alert("Please put the Product Quantity");
         return false;
	}
	else{
         return true;
		}
}
</script>
    </html>