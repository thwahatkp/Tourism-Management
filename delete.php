<?php
include "connection.php";
if($_POST["record4"] != ""){
    $id=$_POST['record4'];
    $src=$_POST['src'];
$query="DELETE FROM `booking` WHERE `Id`='$id'";

$data=mysqli_query($conn,$query);

if($data){
    echo"Place Successfully deleted";
}
else{
    echo"Delete Failed";
}
}
?>