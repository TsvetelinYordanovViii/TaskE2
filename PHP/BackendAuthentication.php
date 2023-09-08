<?php

function authenticateUser($username, $password){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $password = ''.crypt($password, '$6$rounds=5000$anexamplestringforsalt$');

    if ($username=="admin" && "".crypt("test", '$6$rounds=5000$anexamplestringforsalt$')==$password){
        $_SESSION["loggedUser"] = $username;
        $_SESSION["role"] = "admin";
        header("Location: AdminPanel.php");
    }
    else if ($username=="manager" && "".crypt("test", '$6$rounds=5000$anexamplestringforsalt$')==$password){
        $_SESSION["loggedUser"] = $username;
        $_SESSION["role"] = "manager";
        header("Location: AddProducts.php");
    }
    else{
        return "Invalid username or password.";
    }
}

?>