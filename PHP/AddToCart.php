<?php
session_start();

if (isset($_POST['itemIndex'])){
    for ($i=0; $i < sizeof($_SESSION['cartItems']); $i++) { 
        if ($_SESSION['cartItems'][$i][0]==isset($_POST['itemIndex'])){
            $_SESSION['cartItems'][$i][1]+=1;
            die;
        }
    }
    $_SESSION['cartItems'][sizeof($_SESSION['cartItems'])][0]=$_POST['itemIndex'];
    $_SESSION['cartItems'][sizeof($_SESSION['cartItems'])][1]=1;
}
?>