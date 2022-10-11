<?php
include "../connection.php";
include "./verifyLogin.php";
?>
<div style="margin-top:-300px" class="admintable table-responsive table-hover">
  <h3 class="text-center" >Feedback</h3>
  <table class="table" id="dataTable">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Feedback</th>
        <th>Operation</th>
      </tr>
      </thead>
<?php
$select="SELECT * FROM `feedback`";
$query=mysqli_query($conn,$select);
$num=mysqli_num_rows($query);
$count=1;
if($num > 0){
while($row=$result=mysqli_fetch_assoc($query)){
  ?>
          <tr style='margin-bottom: 3px;'>
          <td class="text-center"><?=$count?> </td>
          <td class="text-center"><?= $row["Name"] ?></td>
          <td class="text-center"><?= $result["Email"]?></td>
          <td class="text-center"><?= $result["Feedback"]?></td>
          <td class="text-center"><button class="btn-danger" style="height:40px" onclick="feedbackDelete('<?=$row['Id']?>','<?=$row['Name']?>')">Delete</button></td>
        </tr>
        <?php 
        $count=$count+1;
      }
        
        } ?>

</table>
</div>
<script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
</script>