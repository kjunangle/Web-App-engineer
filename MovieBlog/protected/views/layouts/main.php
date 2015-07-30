<?php
/* @var $this SiteController */

 
?>
 
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
   

    
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

  
    <?php Yii::app() -> clientScript->registerCssFile(Yii::app()->baseUrl.'/assets/asset/css/bootstrap.min.css');?>
    
    <?php Yii::app() -> clientScript->registerCssFile(Yii::app()->baseUrl.'/assets/asset/css/modern-business.css');?>
    

  
    <?php Yii::app() -> clientScript->registerCssFile(Yii::app()->baseUrl.'/assets/asset/font-awesome/css/font-awesome.min.css');?>
 
   <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
        
       <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
       <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
       <script type="text/javascript" src="/MovieBlog/js/autocomplete.js"></script>
       
       <?php Yii::app()-> clientScript->registerScriptFile(Yii::app()->baseUrl.'/assets/asset/js/jquery.bootstrap.newsbox.min.js',CClientScript::POS_END); ?>
       <?php Yii::app()-> clientScript->registerScriptFile(Yii::app()->baseUrl.'/assets/asset/js/bootstrap.min.js',CClientScript::POS_END); ?>
</head>

<body>
  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main.php">Movie Blog</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Movie <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo Yii::app()->baseUrl."/movieblog/upcoming";?>">Coming Soon</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->baseUrl."/movieblog/nowshowing";?>">Now showing</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->baseUrl."/movieblog/index";?>">All movies</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">News</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo Yii::app()->baseUrl."/movieblog/Admin";?>">Admin</a>
                    </li>
                     <li>
                       <form action="/MovieBlog/movieblog/moviedetails?id=211672"> <label><input type="text" id="keyword" class="searchc" ><span class="glyphicon glyphicon-search whiteaa" aria-hidden="true"></span></label></form>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   <?php echo $content; ?>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
 
  

</body>

</html>