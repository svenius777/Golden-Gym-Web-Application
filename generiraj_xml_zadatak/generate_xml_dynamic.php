<?php


header('Content-type: text/xml');

include '../connect.php';

$result = mysqli_query($con, "select * from clanovi");

$xml = new DOMDocument( '1.0', 'utf-8' );
$xml->formatOutput = true;

$clanovi = $xml->createElement("clanovi");
$xml->appendChild($clanovi);

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
    $clan=$xml->createElement('clan');
    $clanovi->appendChild($clan);

    $ime=$xml->createElement('ime', $row['ime']);
    $clan->appendChild($ime);

    $prezime=$xml->createElement('prezime', $row['prezime']);
    $clan->appendChild($prezime);

    $email=$xml->createElement('email', $row['email']);
    $clan->appendChild($email);

    $broj_mobitela=$xml->createElement('broj_mobitela', $row['broj_mobitela']);
    $clan->appendChild($broj_mobitela);

    $spol=$xml->createElement('spol', $row['spol']);
    $clan->appendChild($spol);

    $datum_rodenja=$xml->createElement('datum_rodenja', $row['datum_rodenja']);
    $clan->appendChild($datum_rodenja);
    
    $datum_pocetka=$xml->createElement('datum_pocetka', $row['datum_pocetka']);
    $clan->appendChild($datum_pocetka);

    $salji_obavijesti=$xml->createElement('salji_obavijesti', $row['salji_obavijesti']);
    $clan->appendChild($salji_obavijesti);
}
//echo "<xmp>".$clanovi->asXML()."</xmp>";
// $mojXML="<xmp>".$clanovi->asXML()."</xmp>";

$mojXML=$xml->saveXML();

echo $mojXML;

$xml->save('podaci.xml')

//print($clanovi->asXML());
// $clanovi->saveXML("podaci.xml");

// $dom = new DOMDocument();
// $dom->loadXML($mojXML);
// $dom->formatOutput = true;

// echo $mojXML;

// $formattedXML = $dom->saveXML("podaci.xml");


?>