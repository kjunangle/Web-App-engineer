<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!--News Plugin-->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

    <!-- Bootstrap Core CSS -->
    <?php Yii::app() -> clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/bootstrap.min.css');?>
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <?php Yii::app() -> clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/modern-business.css');?>
    <!--<link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <?php Yii::app() -> clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/font-awesome/css/font-awesome.min.css');?>
    <!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--Navi bar-->
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
                                <a href="portfolio-2-col.html">Now showing</a>
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












<!-- jQuery -->
    <?php Yii::app()-> clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/jquery.js',CClientScript::POS_END); ?>
    <!--<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <?php Yii::app()-> clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/bootstrap.min.js',CClientScript::POS_END); ?>
    <!--<script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <!--script News-->
    <?php Yii::app()-> clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/jquery.bootstrap.newsbox.min.js',CClientScript::POS_END); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>

</html>

