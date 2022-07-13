<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'raemenu';

$conn = new mysqli($host, $username, $password, $database);

if(!$conn){
    die(mysqli_error($conn));
}

?> 