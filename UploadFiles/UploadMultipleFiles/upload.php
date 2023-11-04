<?php
include 'connect.php';

if (isset($_POST['submit'])){
    $upload_dir = 'uploads'.DIRECTORY_SEPARATOR;
    $allowed_types = array('jpg','png','jpeg');
    
    $files = $_FILES['images'];

    // foreach($files['tmp_name'] as $key => $value){
    //     echo "Key: $key, Value: $value\n";
    // }

    $counter = 0;

    foreach($files['tmp_name'] as $key => $value){
        $file_tmpname = $files['tmp_name'][$key];
        $file_name = $files['name'][$key];
        $file_size = $files['size'][$key];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        $filepath = $upload_dir.time().$counter.".".$file_ext;
        $file_name_db = time().$counter.".".$file_ext;
        $counter++;

        if (in_array(strtolower($file_ext), $allowed_types)){
            move_uploaded_file($file_tmpname, $filepath);
            $sql = "INSERT INTO slike(slika) VALUES('$file_name_db')";
            $result = mysqli_query($con, $sql);
        }
    }
}

echo "Uspješno postavljeno " . count($_FILES['images']['name']) . " slika";
exit;
?>