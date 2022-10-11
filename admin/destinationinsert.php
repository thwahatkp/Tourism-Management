<?php
include "../connection.php";
include "./verifyLogin.php";
$placename=$_POST['placename'];
$hotelname=$_POST['hotel'];
$target_dir="../uploads/";
$target_file=$target_dir.basename($_FILES['filetoupload']['name']);
$uploadok=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['submit'])){
        $check=getimagesize($_FILES['filetoupload']['tmp_name']);
        if($check !== false){
                echo "file is an image".$check['mime']." ";
                $uploadok=1;
        }else{
                echo"file is not image";
                $uploadok=0;
        }
        
}
// check if file already exists
if(file_exists($target_file)){
        echo "sorry file already exists";
        $uploadok=0;
}
if($uploadok == 0){
        echo "sorry your file is not uploaded";
}else{
        if(move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file)){
                $imagename=$_FILES['filetoupload']['name'];
                $sql="INSERT INTO `destination`(`Src`, `Place-name`, `Hotel`) VALUES ('$imagename','$placename','$hotelname')";

                if($conn->query($sql)== true){
                        echo "<script> alert('Upload Successfull'); window.location='viewdestination.php'</script>";
                }else{
                        echo "Fail".$conn->connect_error;
                }
        }
}
?>