<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "projekti1";


$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);


if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
