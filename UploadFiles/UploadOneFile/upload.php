<?php
if (isset($_POST['submit'])){
    $file = $_FILES['fileToUpload'];
    //print_r($file['tmp_name']);

    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $_FILES['fileToUpload']['error'];
    $fileType = $_FILES['fileToUpload']['type'];
}

$fileExt = explode('.', $fileName);
//explode je funkcija koja rastavlja strig 
//na temelju tocke npr banana.jpg

//end dohvaca zadnji element u arrayu
//zelimo pretvorit u lowercase ako je npr JPG ili PNG
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png');

if(in_array($fileActualExt, $allowed)){
    if ($fileError === 0){
        if ($fileSize < 500000) {
            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
            $fileDestination = 'uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location: index_upload.php?uploadsuccess");
            
        } else {
            echo "Prevelik ti je";
        }
    } else {
        echo "Došlo je pogreške";
    }
}else {
    echo "Ne možete uploadati datoteke ovog tipa";
}

?>