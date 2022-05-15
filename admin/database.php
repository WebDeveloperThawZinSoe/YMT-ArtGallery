<?php

$host = "localhost";
$database = "ymt";
$username = "thaw";
$password = "ThawZinSoe@932001TZS";

$database_connection = mysqli_connect($host,$username,$password,$database);

if(!$database_connection){
    echo("HTTP/1.1 500 Internal Server Error");
}

?>