<?php include "./verifyLogin.php";?>
<div class="insertdiv">
<form action="destinationinsert.php" onsubmit="" method="post" enctype="multipart/form-data">
<label for="placename">Enter Place name</label><input type="text" placeholder="Enter Placename" name="placename" id="placename" required><br><br>
<label for="placename">Enter Hotel name</label><input type="text" placeholder="Hotel" name="hotel" id="hotel" required><br><br>
<label for="city">Choose Image</label><input type="file" name="filetoupload" id="image" required><br>
<input type="submit" class="btn btn-success"  name="button" value="Upload" required>
<a href="viewdestination.php" style="width:100%;" class="btn btn-primary">viewdestination</a>
</form>
</div>

