<?php

$clanovi = new SimpleXMLElement('<clanovi/>');

$clan=$clanovi->addChild('clan');
$clan->addChild('ime');
$clan->addChild('prezime');
$clan->addChild('email');
$clan->addChild('broj_mobitela');
$clan->addChild('spol');
$clan->addChild('datum_rodenja');
$clan->addChild('datum_pocetka');
$clan->addChild('salji_obavijesti');






Header('Content-type: text/xml');
print($clanovi->asXML());

?>