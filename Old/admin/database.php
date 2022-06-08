<?php

$host = "localhost";
$database = "cp473227_ymt";
$username = "cp473227_admin";
$password = "ThawZinSoe@932001";

$database_connection = mysqli_connect($host,$username,$password,$database);

if(!$database_connection){
    echo("HTTP/1.1 500 Internal Server Error");
}

?>