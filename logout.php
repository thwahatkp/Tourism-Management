<?php
session_start();
// session_destroy();

// header('location:signup.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/loading.css">
    <title>Loading...</title>
</head>
<body>
    <?php
    session_destroy();
    echo '<meta http-equiv="refresh" content="60; url=signup.html">';
    // echo '<progress max=100 style="height: 30px;"><strong>Progress: 60% done.</strong></progress><br>';
    //       echo '<span class="itext">Logging out please wait!...</span>';
          ?>
          <section>
            <svg>
                <filter id="gooey">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10"/>
                    <feColorMatrix values="
                            1 0 0 0 0
                            0 1 0 0 0
                            0 0 1 0 0
                            0 0 0 20 -10
                    "
                </filter>
            </svg>
            <div class="loader">
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
                <span style="--i:4;"></span>
                <span style="--i:5;"></span>
                <span style="--i:6;"></span>
                <span style="--i:7;"></span>
                <span style="--i:8;"></span>
                 <span class="rotate" style="--j:0;"></span>
                 <span class="rotate" style="--j:1;"></span>
                 <span class="rotate" style="--j:2;"></span>
                 <span class="rotate" style="--j:3;"></span>
                 <span class="rotate" style="--j:4;"></span>


                <!--<span style="--1:10;"></span>
                <span style="--1:11;"></span>
                <span style="--1:12;"></span>
                <span style="--1:13;"></span>
                <span style="--1:14;"></span>
                <span style="--1:15;"></span>
                <span style="--1:16;"></span>
                <span style="--1:17;"></span>
                <span style="--1:18;"></span>
                <span style="--1:19;"></span>
                <span style="--1:20;"></span> -->

            </div>
          </section>
          
<!-- </div> -->
    
</body>
</html>