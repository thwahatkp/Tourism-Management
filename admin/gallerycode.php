<?php
include "../connection.php";
include "./verifyLogin.php";
$name=$_POST['placename'];
$extension=array('jpeg','png','jpg','gif',);

$target_dir="../gallery/";
foreach($_FILES['filetoupload']['tmp_name'] as $key => $value){
     $filename=$_FILES['filetoupload']['name'][$key];
     $filename_tmp=$_FILES['filetoupload']['tmp_name'][$key];
     echo "<br>";
     $ext=pathinfo($filename,PATHINFO_EXTENSION);
     $ext_all=strtolower($ext);
     if(in_array($ext_all,$extension)){

            if (file_exists($target_dir.$filename)){
            echo "<script>alert('sorry file already exists'); window.location='admin.php';</script>";
            }else{
            $newfilename="IMG".$filename;
            // echo $newfilename;
            $upload=move_uploaded_file($filename_tmp,$target_dir.$newfilename);
            $query="INSERT INTO `gallery`(`Src`, `Place-name`) VALUES ('$newfilename','$name')";
            $result=mysqli_query($conn,$query);
            if($upload and $result){
                echo '<script> alert("Upload Successfully");window.location="viewgallery.php";</script>';
            }
                }
            
    }else{
        echo '<script> alert("Sorry this file type not uploaded");window.location="viewgallery.php";</script>';
    }
}





?>