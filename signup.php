<?php 
include "connection.php"; 
if(isset($_GET['usernam']) != "")
{}
$Username=$_GET['usernam'];


$query="SELECT * FROM `customer` WHERE Username='$Username'";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);

if($num > 0){
    echo "Sorry user already exists";
    echo "<script>$('#signbtn').prop('disabled',true);</script>";
}else{
    echo "<span style='color:green;'>user available for registration </span>";
    echo "<script>$('#signbtn').prop('disabled',false);</script>";
    if(isset($_POST['signbtn']))
{
        $Firstname=$_POST['fname'];
        $Lastname=$_POST['lname'];
        $Place=$_POST['place'];
        $Mob=$_POST['mob'];
        $Email=$_POST['email'];
        $password =$_POST['pass'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $Password=$password;
        $Username1=$_POST['uname'];
        $insert="INSERT INTO `customer`(`First-name`, `Last-name`, `Place`, `Mob`, `Email`, `Username`, `Password`) VALUES ('$Firstname','$Lastname','$Place','$Mob','$Email','$Username1','$Password')";

    if($conn->query($insert)){
       echo "<script>confirm('Registration Succesfull'); window.location='signup.html';</script>";
    }else{
        echo "failed";
    }
}
}









// $query1="INSERT INTO `customer`(`First-name`, `Place`, `Mob`, `Email`, `Username`, `Password`) VALUES ('$Firstname','$Place',$Mob,'$Email','$Username','$Password')";
