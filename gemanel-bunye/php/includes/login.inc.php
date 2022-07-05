<?php

if (isset($_POST["login"])) {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from database
        $query = "SELECT * FROM users WHERE user_name = '$user_name' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("location: ../index.php");
                    die;
                }
            }
        }
        header("location: ../login.php");
        exit();
        
    }else
    {
        header("location: ../login.php");
        exit();
    }
}
   