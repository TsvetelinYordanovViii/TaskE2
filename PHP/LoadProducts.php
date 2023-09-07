<?php
include "Database.php";

$db = new Database();
$db->connect("localhost", "taske2", "root", "");

if (isset($_POST["load"])){
    echo encodeIntoJson("products", $db, "");
}
else if (isset($_POST["cartItemIndex"])){
    echo encodeIntoJson("products", $db, $_POST["cartItemIndex"]);
}

function encodeIntoJson ($table, $database, $id){
    $data = $database->readRecord($id , $table);
    return json_encode($data);
}

?>