<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'rae_menu';

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    die(mysqli_error($conn));
}

?> 