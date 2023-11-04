<?php
$user = 'guest';
$password = 'guest';
$dbname = 'cijene';
$host = 'localhost';
$port = 3306;

// $link = mysqli_init();
// $con = mysqli_connect($host, $user, $password, $dbname);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli($host, $user, $password, $dbname);
$con->set_charset('utf8');

if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

// UPIT PREMA BAZI ZA IZLISTAVANJE CIJENA
$sql = "SELECT naziv, cijena from cijene";
$result = mysqli_query($con, $sql);

// UPIT PREMA BAZI ZA IZLISTAVANJE SVEUKUPNO
$sqlSum = "SELECT SUM(cijena) as 'total' from cijene";
$resultSum = mysqli_query($con, $sqlSum);
