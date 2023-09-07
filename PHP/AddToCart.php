<?php
session_start();

if (isset($_POST['itemIndex'])){
    if (isset($_SESSION['cart'])){
        for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
            if ($_SESSION['cart'][$i][0]==$_POST['itemIndex']){
                $_SESSION['cart'][$i][1]=$_SESSION['cart'][$i][1]+1;
                die;
            }
        }
        //echo $_POST['itemIndex'];
        $_SESSION['cart'][sizeof($_SESSION['cart'])]=[$_POST['itemIndex'], 1];
    }
    else{
        $_SESSION['cart'][0]=[$_POST['itemIndex'], 1];
    }
}


?>