<?php

include 'connect.php';

$result = mysqli_query($con, "select * from clanovi");

$clanovi = new SimpleXMLElement("<?xml version='1.0' encoding='UTF-8'?><clanovi></clanovi>");


// $clan=$clanovi->addChild('clan');
// $clan->addChild('ime');
// $clan->addChild('prezime');
// $clan->addChild('email');
// $clan->addChild('broj_mobitela');
// $clan->addChild('spol');
// $clan->addChild('datum_rodenja');
// $clan->addChild('datum_pocetka');
// $clan->addChild('salji_obavijesti');



while($row=mysqli_fetch_array($result)){
    $clan=$clanovi->addChild('clan');
    $clan->addChild('ime', $row['ime']);
    $clan->addChild('prezime', $row['prezime']);
    $clan->addChild('email', $row['email']);
    $clan->addChild('broj_mobitela', $row['broj_mobitela']);
    $clan->addChild('spol', $row['spol']);
    $clan->addChild('datum_rodenja', $row['datum_rodenja']);
    $clan->addChild('datum_pocetka', $row['datum_pocetka']);
    $clan->addChild('salji_obavijesti', $row['salji_obavijesti']);
}
echo "<xmp>".$clanovi->asXML()."</xmp>";
//Header('Content-type: text/xml');
//print($clanovi->asXML());
$clanovi->saveXML("podaci.xml");

?>