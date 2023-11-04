<?php
if (isset($_FILES['image']['name'])) {
    $path = "uploads/" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $path);
}
?>