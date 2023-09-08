<?php
include "Database.php";

$db = new Database();
$db->connect("localhost", "taske2", "root", "");

if (isset($_POST["bannerIndex"])){
    echo json_encode($db->readRecord($_POST["bannerIndex"] , 'banner_slides'));
}

?>