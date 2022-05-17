<?php

session_start();
error_reporting(0);
 define('DB_SERVER', '31.186.53.200');
 define('DB_USERNAME', 'Mamytova_db');
 define('DB_PASSWORD', 'HoihNbcGwH');
 define('DB_NAME', 'Mamytova_db');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($db, "utf8mb4");

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());

}
?>