<?php
include "./verifyLogin.php";
include "../connection.php";
if(isset($_POST['record'])){
$id=$_POST['record'];
$select="SELECT * FROM `places` WHERE id=$id" ;
$query=mysqli_query($conn,$select);
$num=mysqli_num_rows($query);
if($num > 0){
while($row=$result=mysqli_fetch_assoc($query)){?>
<form style="margin-top:-80px;" method="post">
    <input class="adminupdate" type="text" id="placename" name="place" value="<?= $result['Place-name']?>"><br>
    <input class="adminupdate" type="text" id="placecity" name="city" value="<?= $result['Place-city']?>"><br>
    <input class="adminupdate btn btn-warning"  type="button" name="submit" onclick="placeUpdate('<?=$row['Id']?>',$('#placename').val(),$('#placecity').val())" value="update"><br>
</form>
<?php
}
}
}
?>


