<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
 
 
    
    
  
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://i.imgur.com/vugDGRt.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="http://i.imgur.com/8FlRSV1.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="http://i.imgur.com/7teXwQ6.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      


  <!-- Page Content -->
    <div class="container">

        <!-- Coming soon -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Coming soon
                </h1>
            </div>
            <div id="tbody2">

            </div>
            <!-- <div class="col-md-3">
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
        </div> -->
        <!-- /.row -->
        </div>
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
        
        
        
        
        
      
        <!-- Controls -->
        <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>
  

     