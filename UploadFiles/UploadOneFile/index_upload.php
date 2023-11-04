<!DOCTYPE html>
<html>
<head>
  <title>File upload</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="fileToUpload">Odaberi file za upload</label>
  <input type="file" name="fileToUpload" id="filesToUpload">
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php


// if (isset($_FILES['filesToUpload'])){
//   // print_r($_FILES['filesToUpload']['name']);

// }

?>

</body>
</html>