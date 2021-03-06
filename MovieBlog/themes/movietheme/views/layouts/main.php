<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eii Movie</title>

    
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

  
    <?php Yii::app() -> clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/bootstrap.min.css');?>
    
    <?php Yii::app() -> clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/modern-business.css');?>
    

  
    <?php Yii::app() -> clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/font-awesome/css/font-awesome.min.css');?>
 
   <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
        
       <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
       <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
       
       
       <?php Yii::app()-> clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/jquery.bootstrap.newsbox.min.js',CClientScript::POS_END); ?>
       <?php Yii::app()-> clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/bootstrap.min.js',CClientScript::POS_END); ?>
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
                                <a href="portfolio-1-col.html">Coming Soon</a>
                            </li>
                            <li>
                                <a href="now-showing.php">Now showing</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">All movies</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">News</a>
                    </li>
                    
                    <li>
                        <a href="contact.html">Movie Review</a>
                    </li>
                     <li>
                        <a href="contact.html">Contact</a>
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
