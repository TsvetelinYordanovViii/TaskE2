<?php
include("CheckRole.php");
session_start();
checkRole($_SESSION["role"], "admin", "../index.php");

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
        <div id="login-form" class="mt-5 w-75 card d-flex justify-content-center align-items-center" action="PurePHP/submitLogin.php" method="post">
            <a href="AddProducts.php">Add Product</a>
            <a href="BannerManagement.php">Banner Management</a>
            <a href="Logout.php">Logout</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>