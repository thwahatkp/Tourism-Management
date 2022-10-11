<?php
include "../connection.php";
include "./verifyLogin.php";
?>

<div style="margin-top:-300px" class="admintable table-responsive table-hover">
  <h3 class="text-center" >Customer Details</h3>
  <table class="table " id="dataTable">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Firstname</th>        
        <th class="text-center">Lastname</th>
        <th class="text-center">Place</th>
        <th class="text-center">Mob</th>
        <th class="text-center">Email</th>
        <th class="text-center">Username</th>
        <th class="text-center">Operation</th>
      </tr>
</thead>
      <?php
      $select="SELECT * FROM `customer`";
      $query=mysqli_query($conn,$select);
      $num=mysqli_num_rows($query);
      $count=1;
      if($num > 0){
        while($row=$result=mysqli_fetch_assoc($query)){
  ?>
          <tr style='margin-bottom: 3px;'>
          <td class="text-center"><?= $count ?></td>
          <td class="text-center"><?= $row["First-name"] ?></td>
          <td class="text-center"><?= $row["Last-name"] ?></td>
          <td class="text-center"><?= $result["Place"]?></td>
          <td class="text-center"><?= $result["Mob"]?></td>
          <td class="text-center"><?= $result["Email"]?></td>
          <td class="text-center"><?= $result["Username"]?></td>
          <td class="text-center"><button class="btn-danger dltbtn" style="height:40px"  onclick="customerDelete('<?=$row['Username']?>','<?=$row['First-name']?>')">Delete</button></td>
        </tr>
        <?php
          $count=$count+1;
        }
      }

          ?>
</table>
</div>
<!-- <a class='dltbtn' href='deletecustomer.php?use=$result[Username]'>Delete</a> -->
<script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
</script>
