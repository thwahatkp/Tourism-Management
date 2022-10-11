
<?php
include "./verifyLogin.php";
include "../connection.php";
// $username=$_GET['use'];
// $query="DELETE FROM `customer` WHERE `Username`='$username'";
// $data=mysqli_query($conn,$query);
// if($data){
//     echo "<script>alert('$username Record Deleted'); window.location='admin.php';</script>";
// }else{
//     echo "<script>alert('Record Cannot Be Deleted'); window.location='admin.php';</script>";
// }
if($_POST['record1'] != ""){
$id=$_POST['record1'];
$query="DELETE FROM `customer` WHERE `Username`='$id'";

$data=mysqli_query($conn,$query);

if($data){
    echo"Size Deleted";
}
else{
    echo"Not able to delete";
}
}
if($_POST["record"] != ""){
    $id=$_POST['record'];
$query="DELETE FROM `feedback` WHERE `Id`='$id'";

$data=mysqli_query($conn,$query);

if($data){
    echo"Feedback Successfully deleted";
}
else{
    echo"Delete Failed";
}
}
if($_POST["record2"] != ""){
    $id=$_POST['record2'];
    $src=$_POST['src'];
    $path="../uploads/".$src;
    unlink($path);
    if(!unlink($path)){
echo "not deleted";
    }else{
        echo "image deleted";
    }
$query="DELETE FROM `destination` WHERE `Id`='$id'";

$data=mysqli_query($conn,$query);

if($data){
    echo"Destination Successfully deleted";
}
else{
    echo"Delete Failed";
}
}
if($_POST["record3"] != ""){
    $id=$_POST['record3'];
    $src=$_POST['src'];
    $path="../gallery/".$src;
    unlink($path);
    if(!unlink($path)){
echo "not deleted";
    }else{
        echo "image deleted";
    }
$query="DELETE FROM `gallery` WHERE `Id`='$id'";

$data=mysqli_query($conn,$query);

if($data){
    echo"Image Successfully deleted";
}
else{
    echo"Delete Failed";
}
}
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
 
