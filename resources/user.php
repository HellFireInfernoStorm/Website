<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if (empty(trim($_POST['username']))){
    $username_err = "Please Enter a Username";
} else{
    $sql = "SELECT id FROM Users WHERE username = ?";

    if ($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        $param_username = trim($_POST['username']);

        if (mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1){
                $username_err = "This Name is already taken";
            } else{
                $username = trim($_POST['username']);
            }         
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
        
        mysqli_stmt_close($stmt);
    }
}
?>