<?php include "./verifyLogin.php"; ?>
<?php
include "../connection.php";
if($_POST['record'] != ""){
$id=$_POST['record'];
$query="DELETE FROM `places` WHERE `Id`='$id'";

$data=mysqli_query($conn,$query);

// if($data){
//     echo"Feedback Deleted";
// }
// else{
//     echo"Not able to delete";
// }
}
?>
<div class="insertdiv">
<label for="placename">Enter Place name</label><input type="text" placeholder="Enter Placename" name="placename" id="placename"><br><br>
<label for="city">Enter City name</label><input type="text" name="city" id="city" placeholder="Enter Cityname"><br>
<input type="button" class="btn btn-success" onclick="insertPlace($('#placename').val(),$('#city').val())" name="button" value="insert">
<input type="button" style="width:100%;" class="btn btn-primary" value="viewplace" onclick="viewplace()">
</div>

 