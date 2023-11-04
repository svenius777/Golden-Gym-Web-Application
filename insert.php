<?php
error_reporting(E_ALL);

require_once 'connect.php';

$ime = $_REQUEST['ime'];
$prezime = $_REQUEST['prezime'];
$email = $_REQUEST['email'];
$broj_mobitela = $_REQUEST['broj_mobitela'];
$spol = $_REQUEST['spol'];
$datum_rodenja = $_REQUEST['datum_rodenja'];
$datum_pocetka = $_REQUEST['datum_pocetka'];

if (isset($_POST['salji_obavijesti'])){
    $salji_obavijesti = 1;
}else {
    $salji_obavijesti = 0;
}


// echo $email;
// exit;
$sql = "INSERT INTO clanovi (ime, prezime, email, broj_mobitela, spol, datum_rodenja, datum_pocetka, salji_obavijesti)
VALUES ('$ime', '$prezime', '$email', '$broj_mobitela', '$spol', '$datum_rodenja', '$datum_pocetka', '$salji_obavijesti')";

if (mysqli_query($con, $sql)){
    print("Pohranjeno");
} else{
    print("Neuspjesno");
}
?>