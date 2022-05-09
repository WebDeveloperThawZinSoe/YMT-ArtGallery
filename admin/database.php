<?php

$host = "localhost";
$database = "ymt";
$username = "root";
$password = "";

$database_connection = mysqli_connect($host,$username,$password,$database);

if(!$database_connection){
    echo("HTTP/1.1 500 Internal Server Error");
}

?>