<?php

	$serverName = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "raemenu";
	
	$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

    if (!$conn) {
        die("Failed Connection: ");
    }
