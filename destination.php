<?php include "connection.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Destination - Travel</title>
    <meta name="description" content="">
    <!-- 
Travel Template
http://www.templatemo.com/tm-409-travel
-->
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/destination.css">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    <link rel="icon" type="image/x-icon" href="./images/admin.png">

</head>

<body >
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

    <div class="site-header">
        <div class="container">
            <div class="main-header">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-10">
                        <div class="logo">
                            <a href="#">
                                <img src="images/logo.png" alt="travel html5 template" title="travel html5 template">
                            </a>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-2">
                        <div class="main-menu">
                            <ul class="visible-lg visible-md">
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><a href="./destination.php">Destination</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="feedback.php">Feedback</a></li>
                                <?php include "./header.php"; ?>
                            </ul>
                            <a href="#" class="toggle-menu visible-sm visible-xs">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div > <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div class="row">
                <div class="col-md-12 visible-sm visible-xs">
                    <div class="menu-responsive">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="./destination.php">Destination</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="feedback.php">Feedback</a></li>
                            <?php include "./header.php"; ?>
                        </ul>
                    </div> <!-- /.menu-responsive -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-header -->

    <div class="page-top" id="templatemo_services">
    </div> <!-- /.page-header -->

    <div class="middle-content">
        <div class="container-fluid">
            <div class="row">
                <?php
                $select="SELECT * FROM `destination`";
                $query=mysqli_query($conn,$select);
                $num=mysqli_num_rows($query);
                if($num > 0){
                while($row=$result=mysqli_fetch_assoc($query)){?>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="imgBox">
                        <img src="uploads/<?= $row['Src']?>" alt="<?= $row['Place-name']?> Image" class="images">

                        <form method="post" action="booking.php?placename=<?= $row['Place-name']?>">
                            <input type="submit" name="<?= $row['Place-name']?>" class="btn" value="Book">
                        </form>
                        <h1 class="text-center"><?= $row['Place-name']?></h1>
                    </div>
                </div>
                <?php
                    }
                }
                ?>

            </div>
            <!--row 3-->
        </div> <!-- /.container -->
    </div>
    <!--/.middle-content -->



    <div class="go-act">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="first-map"></div>
                </div> <!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="act-btn">
                        <div class="inner">
                            <div class="price">
                                $5,600
                            </div> <!-- /.price -->
                            <div class="title">
                                <h2>Europa Tour</h2>
                                <span>Belgium, Austria, Poland, France, England</span>
                            </div>
                        </div> <!-- /.inner -->
                        <a href="#" class="link">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div> <!-- /.act-btn -->
                </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.go-act -->



    <div class="ticket-list">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="ticket-item">
                        <h4><a href="#">Airlines</a></h4>
                        <p>Travel HTML Template is provided by <span class="blue">template</span><span
                                class="green">mo</span>. Download, modify and use this layout for your travel or tour
                            websites.<br><br> Aliquam justo lectus, fermentum vitae libero sollicitudin, tincidunt
                            accumsan magna.Vestibulum congue lorem odio, at sodales nisi luctus quis.</p>
                        <a href="#" class="ticket-btn">Buy a ticket</a>
                    </div> <!-- /.ticket-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="ticket-item">
                        <h4><a href="#">Best Cities</a></h4>
                        <p>Donec sit amet metus in quam consectetur posuere. Mauris scelerisque tortor sit amet porta
                            lacinia. Suspendisse sit amet nisi volutpat, placerat.<br><br>Vestibulum congue lorem odio,
                            at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna.</p>
                        <a href="#" class="ticket-btn">Explore Cities</a>
                    </div> <!-- /.ticket-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="ticket-item">
                        <h4><a href="#">Travel Guides</a></h4>
                        <p>Suspendisse id felis ac orci dignissim efficitur non eget elit. Maecenas lacinia sodales
                            aliquet. Maecenas consequat orci et neque convallis volutpat.<br><br> Integer viverra erat
                            nisi, sed faucibus velit ultricies facilisis. Nam eu felis ac ex fermentum scelerisque.</p>
                        <a href="#" class="ticket-btn">Details</a>
                    </div> <!-- /.ticket-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="ticket-item">
                        <h4><a href="#">Special Events</a></h4>
                        <p>Aliquam ultricies eros commodo, scelerisque lorem sit amet, mollis odio. Ut malesuada sapien
                            sit amet risus lobortis bibendum. Pellentesque eu ante augue.<br><br>Mauris vel tincidunt
                            purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit.
                        </p>
                        <a href="#" class="ticket-btn">Check a calendar</a>
                    </div> <!-- /.ticket-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.ticket-list -->




    <div class="partner-list">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="images/partners/partner1.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="images/partners/partner2.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="images/partners/partner3.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="images/partners/partner1.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="images/partners/partner2.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item last">
                        <img src="images/partners/partner3.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.partner-list -->



    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="copyright">
                        <span>Copyright &copy; 2014 <a href="#">Company Name</a></span>
                    </div>
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-4">
                    <ul class="social-icons">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-flickr"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <script src="js/vendor/jquery-1.11.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/vendor/jquery.gmap3.min.js"></script>

    <!-- Google Map Init-->
    <script type="text/javascript">
        jQuery(function ($) {
            $('.first-map').gmap3({
                marker: {
                    address: '16.8496189,96.1288854'
                },
                map: {
                    options: {
                        zoom: 16,
                        scrollwheel: false,
                        streetViewControl: true
                    }
                }
            });
        });
    </script>
    <!-- templatemo 409 travel -->
</body>

</html>