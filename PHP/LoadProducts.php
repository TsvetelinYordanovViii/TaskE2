<?php
include "Database.php";

if (isset($_POST["load"])){
    $db = new Database();
    $db->connect("localhost", "taske2", "root", "");
    echo encodeIntoJson("products", $db);
}

function encodeIntoJson ($table, $database){
    $data = $database->readRecord("" , $table);
    return json_encode($data);
}

?>