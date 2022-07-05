<?php

if (isset($_POST["submit"])) {
    $user_name = $_POST["user_name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
    $repassword = $_POST["repassword"];
	$contact = $_POST["contact"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($user_name, $email, $password, $repassword, $contact) !== false) {
        header ("location: ../register.php?error=emptyinput");
        exit();
    }
    
    if (invalidEmail($email) !== false) {
        header ("location: ../register.php?error=invalidemail");
        exit();
    }
    if (passwordMatch($password,$repassword) !== false) {
        header ("location: ../register.php?error=unmatchedpassword");
        exit();
    }
    if (user_nameExists($conn,$user_name,$email) !== false) {
        header ("location: ../register.php?error=accountalreadyexists");
        exit();
    }
    create_User($conn, $user_name, $email, $password, $contact);
}
else {
    header ("location: ../register.php");
    exit();
}