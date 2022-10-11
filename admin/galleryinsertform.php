<?php include "./verifyLogin.php"; ?>
<div class="insertdiv">
<form action="gallerycode.php" onsubmit="" method="post" enctype="multipart/form-data">
<label for="placename">Enter Place name</label><input type="text" placeholder="Enter Placename" name="placename" id="placename"><br><br>
<label for="city">Choose Image</label><input type="file" name="filetoupload[]" id="image" multiple><br>
<input type="submit" class="btn btn-success"  name="button" value="Upload">
</form>
</div>
