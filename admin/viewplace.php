<?php
include "../connection.php";
include "./verifyLogin.php";
?>
<div style="margin-top:-300px"  class="admintable table-responsive table-hover">
  <h3 class="text-center" >Places </h3>
  <table class="table " id="viewPlace">
    <thead>
      <tr>
      <th class="text-center">Id</th>
        <th class="text-center">Place</th>
        <th class="text-center">City</th>
        <th class="text-center">Operations</th>
      </tr>
      </thead>
<?php
$select="SELECT * FROM `places`";
$query=mysqli_query($conn,$select);
$num=mysqli_num_rows($query);
$count=1;
if($num > 0){
while($row=$result=mysqli_fetch_assoc($query)){
  ?>
          <tr style='margin-bottom :3px;'>
          <td class="text-center"><?= $count ?></td>
          <td class="text-center"><?= $row["Place-name"] ?></td>
          <td class="text-center"><?= $result["Place-city"]?></td>
          <td class="text-center">
          <button class="btn btn-success" style="height:40px" onclick="placeInsertForm()">Insert</button>

            <button class="btn btn-warning" style="height:40px" onclick="placeUpdateForm('<?=$row['Id']?>','<?= $row['Place-name'] ?>','<?= $result['Place-city']?>')">Update</button>     
          <button class="btn btn-danger" style="height:40px" onclick="placeDelete('<?=$row['Id']?>','<?=$row['Place-name']?>')">Delete</button></td>
        </tr>

        <?php
                $count=$count+1;
         }
        } ?>
</table>
<!-- <button class="btn btn-success" style="height:40px; padding: 0px 47% 0px 47%;position: sticky;top: 0;" onclick="placeDelete('<?=$row['id']?>','<?=$row['Place-name']?>')">Add</button> -->
</div>
<script>
        $(document).ready(function() {
            $('#viewPlace').DataTable();
        });
</script>