<?php

$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "royal";

$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);

if(!$conn){
    echo "Connection Failed";
    die();
}
?>