<?php 



session_start();
unset($_SESSION['UserInfo']);
unset($_SESSION['UserEmail']);
header("Location: login.php");
