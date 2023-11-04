<!DOCTYPE html>
<html>
<head>
  <title>File upload</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
  <label for="filesToUpload">Odaberi file za upload</label>
  <input type="file" name="image" id="filesToUpload">
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php


if (isset($_POST['submit'])){
    if (isset($_FILES['image']['tmp_name'])){
        // print_r($_FILES['filesToUpload']['name']);
        
        // print_r($files['size']);
        $cfile = new CURLFile($_FILES['image']['tmp_name'], $_FILES['image']['type'], $_FILES['image']['name']);
        $data = array("myimage"=>$cfile);
    
        $ch = curl_init("http://localhost:3333/gymsite/UploadFiles/UploadMultipleFilesUsingCurl/upload.php");
        // curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/gymsite/UploadFiles/UploadMultipleFilesUsingCurl/upload.php");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
        
        $result = curl_exec($ch);
	//check if the response varible is true 
        if($result == true){
        
            echo "Your image has been uploaded successfully";
        }
        else {
            // curl error returns a string comprising of error for the current session
            echo "Error!" . curl_error($ch);
        }
        // $response = curl_exec($ch);
        // curl_close($ch);

    }
}

?>

</body>
</html>