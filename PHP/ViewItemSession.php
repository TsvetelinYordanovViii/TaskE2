<?php
include "Database.php";
session_start();

if (isset($_POST['itemIndex'])){
    $db = new Database();
    $db->connect("localhost", "taske2", "root", "");
    $_SESSION['viewedItem'] = $db->readRecord($_POST['itemIndex'] , "products");
}
?>