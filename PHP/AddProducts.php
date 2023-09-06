<?php

include "Database.php";

$db = new Database();
$db->connect("localhost", "taske2", "root", "");

if (isset($_POST['add'])){
    echo addProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['image_url'], $db);
}

function addProduct ($productName, $productDescription, $productPrice, $imageUrl, $database){
    $name = filter_var($productName, FILTER_SANITIZE_STRING);
    $description = filter_var($productDescription, FILTER_SANITIZE_STRING);
    $price = filter_var($productPrice, FILTER_SANITIZE_STRING);
    $url = filter_var($imageUrl, FILTER_SANITIZE_STRING);

    //if ($currentUser->getRole()!="admin"){
    //    return "You are not allowed to add new products.";
    //}
    if (empty($name) || empty($productPrice)){
        return "Either the name or the price field is empty.";
    }
    else if ($productPrice < 0){
        return "The price cannot be negative.";
    }
    else{
        $fields = ['name'];
        $values = [$name];
        $fieldIndex = 1;
        if (!empty($productDescription)){

            $fields[$fieldIndex] = 'description';
            $values[$fieldIndex] = $description;
            $fieldIndex++;
        }
        $fields[$fieldIndex] = 'price';
        $values[$fieldIndex] = $price;
        $fieldIndex++;
        if (!empty($productDescription)){
            
            $fields[$fieldIndex] = 'image_url';
            $values[$fieldIndex] = $url;
            $fieldIndex++;
            $length = sizeof($values);
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
    <title>Add Product</title>
</head>
<body>
    <form action="" method="post">
        <input id="product-name" type="text" name="name" placeholder="Product Name" required>
        <input id="description" type="text" name="description" placeholder="Description">
        <input id="price" type="number" name="price" placeholder="Price" required>
        <input id="image-url" type="text" name="image_url" placeholder="Image URL">
        <input type="submit" name="add" value="Add Product">
    </form>
</body>
</html>