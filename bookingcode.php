<?php 
include "connection.php";
if(isset($_POST['booking'])){
    $firstname=$_POST['fstnme'];
    $lastname=$_POST['lstnme'];
    $email=$_POST['email'];
    $place=$_POST['place'];
    $mob=$_POST['mob'];
    $destination=$_POST['destination'];
    // echo $firstname.$lastname.$email.$place.$mob.$destination;
    $select="SELECT * FROM `booking` WHERE `Destination`='$destination'";
    $result=mysqli_query($conn,$select);
    // $num=mysqli_num_rows($result);
    if ($result -> num_rows > 0) {
        while ($row= $result -> fetch_assoc()) {
            $getfirstname=$row['Firstname'];
            $destination1=$row['Destination'];
        }
    }      
    if($getfirstname == $firstname and $destination1 == $destination){
        echo '<script>alert("Sorry Your Already '.$destination.' Booked"); window.location="destination.php";</script>';
    }else{

        $query="INSERT INTO `booking`(`Firstname`, `Lastname`, `Place`, `Mob`, `Email`, `Destination`) 
            VALUES ('$firstname','$lastname','$place','$mob','$email','$destination')";
    if(mysqli_query($conn,$query))        {
        echo '<script>alert("'.$destination.' Booked Successfully"); window.location="destination.php";</script>';
    }else{
        echo '<script>alert("Not Booked")</script>';
    }
}
}