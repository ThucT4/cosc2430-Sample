<?php
  if (isset($_POST['act'])) {
    if ($_FILES["profile_image"]["error"] == UPLOAD_ERR_OK) {
      // store new image as avatar.png (overwrite the current file)
      $new_location = './avatar.png';    
      move_uploaded_file($_FILES['profile_image']['tmp_name'], $new_location);
      echo '<h2>Done</h2>';
    }
  }
?>
<p>Current Profile Image</p>
<img width="400" src="avatar.png" alt="a profile picture">
<p>Upload New Profile Image</p>
<form enctype="multipart/form-data" method="post" action="upload.php">
  <input type="file" name="profile_image">
  <input type="submit" name="act" value="Upload">
</form>