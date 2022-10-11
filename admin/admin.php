<?php include "../connection.php";

include "./verifyLogin.php";
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
    <title>Admin - Travel</title>
    <meta name="description" content="">
    <!--
Travel Template
http://www.templatemo.com/tm-409-travel
-->
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/templatemo_misc.css">
    <link rel="stylesheet" href="../css/templatemo_style.css">
    <!-- lightBox -->
    <link rel="stylesheet" href="../css/admin.css">

    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Adding Datatable style cdn -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- Adding jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Adding Datatable cdn -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="./admin/admin.js"></script>
    <script src="./admin/ajaxwork.js"></script>

    <!-- Data Table Library -->

    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
    <!-- <div class="col-md-4 col-sm-6 col-xs-10">
        <img class="adminimg" src="./images/admin.png" alt="">
        </div> -->
    <div class="site-header">
        <div class="container-fluid">
            <div class="main-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-10">
                        <div class="logo">
                            <div class="hadmin">
                                <img class="wlcimg" src="../images/admin.png" alt=""><samp style="float: right; margin-top: 18px">Heloo,admin</samp>
                            </div>
                            <a href="#">
                                <img class="" src="../images/logo.png" alt="travel html5 template" title="travel html5 template">
                                <!-- <img class="adminimg" src="./images/admin.png" alt=""> -->
                            </a>
                        </div>
                        <!--logo-->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-sm-12 col-xs-12 aheader" style="position: sticky;">
                        <ul>
                            <li><a href="./admin.html">Admin</a></li>
                            <li><img class="adminimg" src="../images/admin.png" alt=""></li>
                            <li style="float: right;"><a href="../logout.php">Logout</a></li>
                        </ul>
                    </div> <!-- /.col-md-8 -->
                    <!-- </div>  /.row -->
                </div> <!-- /.main-header -->
            </div> <!-- /.container -->
        </div>
        <!--row-->
    </div>
    <!--Container-->
    <div class="container-fluid">
        <!-- <div class="row" style=""> -->
        <div class="col-md-3 col-sm-2 adminsidebar" style="position: sticky; margin-top:180px">
            <ul class="adminside">
                <li><button onclick="viewcustomer()" class="btn btnn btnadm">Customer</button></li>
                <li><button onclick="viewfeedback()" class="btn btnn btnadm">Feedback</button></li>
                <li><button onclick="viewplace()" class="btn btnn btnadm">Place</button></li>
                <li><a href="viewdestination.php" class="btn btnn btnadm">Destination</a></li>
                <li><a href="viewgallery.php" class="btn btnn btnadm">Gallery</a></li>
                <li><button onclick="viewbooked()" class="btn btnn btnadm">Customer Booked </button></li>
            </ul>
        </div>
        <div class="col-md-8 col-sm-12  admincontent">
            <div id="admincontent-customer">
                <!-- <h1 class="text-center">Hello Welcome Admin</h1> -->
                <img class="imgg" src="../images/admin.png" alt="">
            </div>

        </div>
        <!--col-md-9--->
    </div>
    </div>
</body>

</html>