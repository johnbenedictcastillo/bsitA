<?php

function emptyInputSignup($user_name, $email, $password, $repassword, $contact) {
    $result;
    if (empty($user_name) || empty($email) || empty($password) || empty($repassword) || empty($contact)  ) {
        $result = true;

    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;

    }
    else {
        $result = false;
    }
    return $result;
}
function passwordMatch($password,$repassword){
    $result;
    if ($password !== $repassword) {
        $result = true;

    }
    else {
        $result = false;
    }
    return $result;
}

function user_nameExists($conn,$user_name,$email){
    $sql = "SELECT * FROM users WHERE user_name = ? OR email =?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,  $sql)) {
        header ("location: ../register.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$user_name, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function create_User($conn, $user_name, $email, $password, $contact) {
    $sql = "INSERT INTO users (user_name, email, password, contact) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,  $sql)) {
        header ("location: ../register.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt,"ssss",$user_name,$email,$password, $contact);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ("location: ../register.php?error=none");
    exit();
}
function emptyInputLogin($user_name, $password) {
    $result;
    if (empty($user_name) || empty($password)) {
        $result = true;

    }
    else {
        $result = false;
    }
    return $result;
}
function loginUser($conn, $user_name, $password) {
    $user_nameExists = user_nameExists($conn,$user_name,$user_name);

    if ($user_nameExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    $passwordHashed = $user_nameExists["password"];
    $checkpass = password_verify($password, $passwordHashed);

    if ($checkpass === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkpass === true) {
        session_start();

        $_SESSION["id"] = $user_nameExists["id"];
        $_SESSION["user_name"] = $user_nameExists["user_name"];
        header("location: ../login.php?error=none");
        exit();
    }
}