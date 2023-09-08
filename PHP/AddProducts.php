<?php
include("Database.php");
include("CheckRole.php");
session_start();
checkRole($_SESSION["role"], "manager", "../index.php");

$db = new Database();
$db->connect("localhost", "taske2", "root", "");

if (isset($_POST["add"])){
    echo addProduct($_POST["name"], $_POST["description"], $_POST["price"], $_POST["image_url"], $db);
}

function addProduct ($productName, $productDescription, $productPrice, $imageUrl, $database){
    $name = filter_var($productName, FILTER_SANITIZE_STRING);
    $description = filter_var($productDescription, FILTER_SANITIZE_STRING);
    $price = filter_var($productPrice, FILTER_SANITIZE_STRING);
    $url = filter_var($imageUrl, FILTER_SANITIZE_STRING);

    if (empty($name) || empty($productPrice)){
        return "Either the name or the price field is empty.";
    }
    else if ($productPrice < 0){
        return "The price cannot be negative.";
    }
    else{
        $fields = ["name"];
        $values = [$name];
        $fieldIndex = 1;
        if (!empty($productDescription)){

            $fields[$fieldIndex] = "description";
            $values[$fieldIndex] = $description;
            $fieldIndex++;
        }
        $fields[$fieldIndex] = "price";
        $values[$fieldIndex] = $price;
        $fieldIndex++;
        if (!empty($imageUrl)){
            
            $fields[$fieldIndex] = "image_url";
            $values[$fieldIndex] = $url;
            $fieldIndex++;
        }
        $database->createRecord($fields, $values, "products");
        return "Product added successfully.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Add Product</title>
</head>
<body>    
    <div class="container d-flex justify-content-center align-items-center h-75">
        <form id="login-form" class="mt-5 w-75 card d-flex justify-content-center align-items-center" action="PurePHP/submitLogin.php" method="post">
            <h1 class="mt-1 mb-5">Add Product</h1>
            <input class="mb-2 w-75"  id="product-name" type="text" name="name" placeholder="Product Name" required>
            <input class="mb-2 w-75"  id="description" type="text" name="description" placeholder="Description">
            <input class="mb-2 w-75"  id="price" type="number" name="price" placeholder="Price" required>
            <input class="mb-2 w-75"   id="image-url" type="text" name="image_url" placeholder="Image URL">
            <input class="mb-5 w-75"   type="submit" name="add" value="Add Product">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>