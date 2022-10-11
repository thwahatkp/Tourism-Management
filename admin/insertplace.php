<?php 
include "../connection.php";
include "./verifyLogin.php";

$placename=$_POST['placename'];
$city=$_POST['city'];
$query="INSERT INTO `places`( `Place-name`, `Place-city`) VALUES ('$placename','$city')";
if($placename != "" and $city != ""){
	$select="SELECT * FROM `places` WHERE `Place-city`='$city'";
	$result=mysqli_query($conn,$select);
	$num=mysqli_num_rows($result);
	if($num > 0){	
            echo "City Already Exists";
	}else{
            $insert=mysqli_query($conn,$query);
			if ($insert) {
				echo $placename." Successfully Inserted";
			}else{
				echo "Not Uploaded";
			}
		}

	}else{
		echo "Please Fill placename and city";
	}