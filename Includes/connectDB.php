<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
<<<<<<< HEAD
$dbName = "projekti4";
=======
$dbName = "projekti";
>>>>>>> 322616df2b675850f83f1b966e8642b4e97d122f


$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);


if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
