<?php
include "connection.php";
$conn=mysqli_connect("localhost","root","","tourism");
// connection check
if($conn -> connect_error){
    echo "connection failed".$conn -> connect_error;
}
if (isset($_POST['email']) != "") {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];

    $insert="INSERT INTO `feedback`(`Name`, `Email`, `Feedback`) VALUES ('$name','$email','$feedback')";
    $result=mysqli_query($conn,$insert);
    if ($result) {
        echo "<script>alert('Thank you, $name.. your valuble feedback'); window.location='./feedback.php';</script>";
    }else{
        echo "<script>alert($name.. your feedback not send'); window.location='./feedback.php';</script>";
    }
}



  

