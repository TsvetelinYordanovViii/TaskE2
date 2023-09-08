<?php
include("BackendAuthentication.php");
session_start();

$message = "";

if (isset($_POST["submit-login"])){
    $message = authenticateUser($_POST["username"], $_POST["password"]);
}

if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin"){
    header("AdminPanel.php");
}
else if (isset($_SESSION["role"]) && $_SESSION["role"]=="user"){
    header("AddProducts.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center h-75">
        <form id="login-form" class="mt-5 w-75 card d-flex justify-content-center align-items-center" action="" method="post">
            <h1 class="mt-1 mb-5">Login</h1>
            <input class="mb-2 w-75" type="text" name="username" id="username" placeholder="Email" required>
            <input class="mb-2 w-75" type="password" name="password" id="password" placeholder="Password" required>
            <input class="mb-2 w-75 btn bg-info" type="submit" name="submit-login" id="submit-login" value="Login">
            <h1 class="mb-5"><?php echo $message ?></h1>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>