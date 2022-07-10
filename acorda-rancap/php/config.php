<?php
    $conn = mysqli_connect("localhost", "root", "", "cmerged");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>
