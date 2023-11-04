<?php   

$ch = curl_init();

// https://reqres.in/api/users?page=2
$url = "https://b2b.elektroprofi.hr/api/eracuni_get.php";

curl_setopt($ch, CURLOPT_URL, $url);

// DISABLE SSL
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp=curl_exec($ch);
curl_close($ch);
// print_r($resp);

// $myfile = fopen("racuni_dynamic.xml", "w");
$resp_decoded=html_entity_decode($resp);
// fwrite($myfile, $resp_decoded);
// fclose($myfile);

$xml = simplexml_load_string($resp_decoded);
// $xml = simplexml_load_file('racuni_dynamic.xml') or die("Error: Cannot create object");
// print_r($xml);

echo "Datum: <br>" . $xml->SalesInvoice[0]->date . "<br>" . "<br>";

$broj = $xml->SalesInvoice[0]->number;

$broj = str_split($broj);


// $broj = str_replace('/', '', $broj);
// foreach($broj as $znak){
//     echo $znak;
// }

//PAMETNIJE RJESENJE ALI NE RADI KAKO TREBA
echo "Number: <br>"; 
array_push($broj, "/");
$str="";
foreach($broj as $znak){
    $str = $str.$znak;
    if ($znak=='/'){
        $str=str_split($str);
        array_pop($str);
        foreach($str as $c){
            echo $c;
        }
        echo "<br>";
        // echo $str . "<br>";
        $str="";
    }
}

echo "<br> Product Name: <br>" . $xml->SalesInvoice[0]->Items->Item->productName;


// echo str_replace('/', $broj, '');

// $broj = substr_replace($broj, '1', 4, 1);

// $broj = substr_replace($broj, '1', 7, 1);
// echo $broj;


// $broj2  = substr_replace($broj)

// foreach ($xml->SalesInvoice as $SalesInvoice) {
//     echo $SalesInvoice->number . "\n";
// }


?>