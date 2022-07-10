<?php
$servername = "localhost";
$username = "root"; // default username for localhost is root
$password = "secret"; // default password for localhost is empty
$dbname = "artxyna"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>