<?php
include "connection.php";
session_start();
if(!isset($_SESSION['fullname'])){
    header("location:signup.html");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <title>Signup - Travel</title>
  <meta name="description" content="">
  <!-- 
Travel Template
http://www.templatemo.com/tm-409-travel
-->
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="templatemo">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/templatemo_misc.css">
  <link rel="stylesheet" href="css/templatemo_style.css">

  <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
  </script>
      <script src="./js/ajax.js"></script>

  </script>
  <link rel="icon" type="image/x-icon" href="./images/admin.png">
  <style>
    .color{
      color:black;
      font-weight:600;
      font-size: 14px;
    }
    .bookedshow{
      display: none;
    }
  </style>
</head>

<body>
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
                <li><a href="./destination.php">Destination</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li class="active"><a href="">Booking</a></li>
                <li><a href="./logout.php">Logout</a></li>
              </ul>
              <a href="#" class="toggle-menu visible-sm visible-xs">
                <i class="fa fa-bars"></i>
              </a>
            </div> <!-- /.main-menu -->
          </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
      </div> <!-- /.main-header -->
      <div class="row">
        <div class="col-md-12 visible-sm visible-xs">
          <div class="menu-responsive">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="./destination.php">Destination</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="feedback.php">Feedback</a></li>
              <li class="active"><a href="">Booking</a></li>
              <li><a href="./logout.php">Logout</a></li>
            </ul>
          </div> <!-- /.menu-responsive -->
        </div> <!-- /.col-md-12 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.site-header -->
  <div class="page-top" id="templatemo_services">
  </div> <!-- /.page-header -->
  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-8 col-md-offset-2 col-offset-2">
          <div class="contact-form">
            <form name="contactform" class="contactformm" id="contactform" action="bookingcode.php" method="post">
            <center>
            <h3 style="text-shadow: 2px;" class="widget-title">Booking</h3>
          </center>
              <p>
                <input class="color" name="fstnme" type="text" value="<?= $_SESSION['firstname']; ?>" id="name" placeholder="Firstname" required/>
              </p>
              <p>
                <input class="color" name="lstnme" type="text" value="<?= $_SESSION['lastname']; ?>" id="name" placeholder="Lastname" required/>
              </p>
              <p>
                <input class="color" name="email" type="text" value="<?= $_SESSION['email']; ?>" id="email" placeholder="Email" required/>
              </p>
              <p>
                <input class="color" name="place" type="text" value="<?= $_SESSION['place'];?>" id="name" placeholder="City" required/>
              </p>
              <p>
                <input class="color" name="mob" type="number" value="<?= $_SESSION['mobile']?>" id="name" placeholder="Mob" required/>
              </p>
              <p><?php if(isset($_GET['placename'])){$destination=$_GET['placename'];} ?>
                <input class="color" name="destination" type="text" value="<?=$destination?>" id="name" placeholder="Destination" required/>
              </p>
              <input type="submit" class="mainBtn" name="booking"  value="Book" />
              <p class="text-center message">
                    <span>Already Booked? <a href="#">Booked</a></span>
              </p>
            </form>
                      </div>
          <!-- /.contact-form -->
            <form class="bookedshow" >
            <center>
            <h3 style="text-shadow: 2px;" class="widget-title">Booked places</h3>
            </center>
                      <table class="table ">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">Fullname</th>
                          <th class="text-center">Place</th>
                          <th class="text-center">Mob</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Destination</th>
                          <th class="text-center">Operations</th>
                        </tr>
                        </thead>
                <?php
                $firstname=$_SESSION['firstname'];
                $email=$_SESSION['email'];
                $select="SELECT * FROM `booking` WHERE `Email`='$email'";
                $query=mysqli_query($conn,$select);
                $num=mysqli_num_rows($query);
                $count=1;
                if($num > 0){
                while($row=$result=mysqli_fetch_assoc($query)){
                    ?>
                        <tr style='margin-bottom 3px;'>
                        <td class="text-center"><?= $count ?></td>
                        <td class="text-center"><?= $row["Firstname"] ?> <?= $row["Lastname"] ?>  </td>
                        <td class="text-center"><?= $result["Place"]?></td>
                        <td class="text-center"><?= $result["Mob"]?></td>
                        <td class="text-center"><?= $result["Email"]?></td>
                        <td class="text-center"><?= $result["Destination"]?></td>
                        <td class="text-center">
                        <button class="btn btn-danger" style="height:40px" onclick="bookedDelete('<?=$row['Id']?>','<?= $result['Destination']?>')">Delete</button></td>
                      </tr>

                <?php    }
                  
                }




                 ?>
                    <p style="position:absolute; bottom:0; left:40%;" class="text-center message">
                    <span>Not Booked Places? <a href="#">Not Booked</a></span>
              </p>
            </table>
            </form>



        </div>
      </div>
    </div>
  </div>
</body>

</html>