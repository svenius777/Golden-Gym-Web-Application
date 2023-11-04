<?php
$user = 'guest';
$password = 'guest';
$dbname = 'slike';
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
?>