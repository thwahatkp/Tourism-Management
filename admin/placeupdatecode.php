<?php 
include "./verifyLogin.php";
include "../connection.php";

    $id=$_POST['Id'];
    $place=$_POST['place'];
    $city=$_POST['city'];


    $query="UPDATE `places` SET `Place-name`='$place',`Place-city`='$city' WHERE id=$id";
    $result=mysqli_query($conn,$query);
    if($result){
        echo "Successfully Updated";
    }else{
        echo "update failed";
    }
    ?>

