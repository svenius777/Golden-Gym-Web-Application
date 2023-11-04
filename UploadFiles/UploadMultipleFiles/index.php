<!DOCTYPE html>
<html>
<head>
  <title>File upload</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="images">Odaberi file za upload</label>
  <input type="file" name="images[]" id="images" multiple>
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php
include 'connect.php';

$sql = "SELECT * FROM slike";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
    while($fetch = mysqli_fetch_assoc($result)){
      ?>
      <img src="uploads/<?php echo $fetch['slika']; ?>" width=100 height=100>
      <?php
    }
}
?>


</body>
</html>