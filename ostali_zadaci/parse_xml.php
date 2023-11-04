<?php
$xml = simplexml_load_file('podaci.xml') or die("Error: Cannot create object");

// echo $xml->clan[0]->datum_rodenja . "<br>";

// print_r($xml);

// echo $xml->clan[0]->ime;
// echo $xml->clan[0]->prezime;

// foreach($xml->children() as $clanovi){
//     echo $clanovi->ime . ", ";
//     echo $clanovi->prezime . "<br>";
// }

// $str = $xml->clan[0]->datum_rodenja;

// $str=substr_replace($str, '', 4, 1);
// $str=substr_replace($str, '', 6, 1);
// echo $str;


foreach($xml->children() as $clan){
    $str = $clan->datum_rodenja;
    $str=substr_replace($str, '', 4, 1);
    $str=substr_replace($str, '', 6, 1);
    if ($str>=20000000){
        echo $clan->email . ", ";
        echo $clan->datum_rodenja . "<br>";
    }
}

?>