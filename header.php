<?php 
session_start();
if(!isset($_SESSION['fullname'])){
echo'<li><a href="signup.html">Signup</a></li>';
}
if(isset($_SESSION['fullname'])){            
    // echo'<li class=""><a href="">Booking</a></li>';
    echo'<li class=""><span class="bi bi-door-closed"></span><a href="logout.php">Logout</a></li>';
}
?>