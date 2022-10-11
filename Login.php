<?php
session_start();
include "connection.php";
$username=$_POST['uname'];
$pass=$_POST['pass'];
date_default_timezone_set("Asia/Kolkata");
$dt = date("Y-m-d h:i:sa");
$query="SELECT * FROM `customer` WHERE Username='$username' && Password='$pass'";
$query1="INSERT INTO `login`(`Username`, `Password`, `Date_time`) VALUES ('$username','$pass','$dt')";
$result=mysqli_query($conn,$query);
if(isset($_POST['submit'])){
    if($username =="admin" and $pass == "123"){
    //  $result=mysqli_query($conn,$query1);
     $_SESSION['adm']="admin123";
     header("location:./admin/admin.php");
}
elseif($result -> num_rows > 0){

    while($row=$result->fetch_assoc()){
        $_SESSION["fullname"]=$row['First-name'].$row['Last-name'];
        $_SESSION["firstname"]=$row['First-name'];  
        $_SESSION["lastname"]=$row['Last-name'];
        $_SESSION["place"]=$row['Place'];
        $_SESSION["mobile"]=$row['Mob'];
        $_SESSION["email"]=$row['Email'];
        $getUsername=$row['Username'];
        $getPassword=$row['Password'];  
    }
    $password = password_verify($pass, $getPassword); 
    if($username == $getUsername and $password == 1){    
    //   $result=mysqli_query($conn,$query1);
    ?>
    <script >
            alert("Login Succesfully, Welcome <?= $_SESSION['fullname'] ?>");
            window.location='index.php';
    </script>
    <?php
}
}
else{
    echo "<script>alert('Login Failed'); window.location='signup.html';</script>";
}
}
?>