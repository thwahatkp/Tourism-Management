<?php 
$conn=mysqli_connect("localhost","root","","tourism-management");
if($conn -> connect_error){
    die("Connection Failed").$conn -> connect_error;
}?>