<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eii Movie</title>

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

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Coming soon -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Coming soon
                </h1>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> IRON MAN 12 </h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">View more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> ANT MAN </h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">View more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>MINNIONS</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">View more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>MINNIONS</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">View more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Movie review -->
        <div class="row">
            <div class="col-lg-8">
                <h2 class="page-header">Moview Review</h2>
            </div>
            <div class ="col-lg-4">
                <h2 class="page-header">Box Office</h2>
            </div>
        </div>
        <!-- /.row -->

        <!-- News -->
        <div class="row">
            <div class="col-lg-8">
                <h2 class="page-header">Movie News</h2>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Update</b></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="demo">

                            <li class="news-item">
                            <table cellpadding="4">
                            <tr>
                            <td><img src="/assets/image/1.png" width="60" class="img-circle" /></td>
                            <td> News 1<a href="#">Read more...</a></td>
                            </tr>
                            </table>
                            </li>

                            <li class="news-item">
                            <table cellpadding="4">
                            <tr>
                            <td><img src="/assets/image/2.png" width="60" class="img-circle" /></td>
                            <td> News 2<a href="#">Read more...</a></td>
                            </tr>
                            </table>
                            </li>

                            <li class="news-item">
                            <table cellpadding="4">
                            <tr>
                            <td><img src="/assets/image/3.png" width="60" class="img-circle" /></td>
                            <td> News 3<a href="#">Read more...</a></td>
                            </tr>
                            </table>
                            </li>

                         ...

                        </ul>
                        </div>
                        </div>
                        </div>
                        <div class="panel-footer"> </div>
                        </div>
                        </div>
            <div class="col-lg-4">
                <h2 class="page-header">Timeline</h2>
                <a class="twitter-timeline" href="https://twitter.com/a_c_h_r" data-widget-id="625899581000146945">Tweets by </a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                </script>
            </div>
            
        </div>
        <!-- /.row -->

        <hr>

        
        <hr>


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
