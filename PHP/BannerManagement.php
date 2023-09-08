<?php
include("Database.php");
include("CheckRole.php");
session_start();
checkRole($_SESSION["role"], "admin", "../index.php");

$db = new Database();
$db->connect("localhost", "taske2", "root", "");

$message = "";
if (isset($_POST["add-slide"])){
    $message = addBanner($_POST["file"], $db);
}

$banners = $db->readRecord("", "banner_slides");

function addBanner ($imagePath, $database){
    $imagePath = filter_var($imagePath, FILTER_SANITIZE_STRING);

    if (empty($imagePath)){
        return "Must specify file.";
    }
    else if (strpos($imagePath, ".png")!=(strlen($imagePath)-4) && strpos($imagePath, ".jpeg")!=(strlen($imagePath)-5)){
        return "File must be .png or .jpeg.";
    }
    else{
        //$database->createRecord(["image_url"], [$imagePath], "banner_slides");
        return "Banner added successfully.";
    }
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
            <label class="w-75" for="file">Select image (.png or .jpeg)</label>
            <input class="mb-5 w-75" type="file" name="file" id="file" required>
            <input class="mb-2 w-75 btn bg-info" type="submit" name="add-slide" id="add-slide" value="Add">
            <h1 class="mb-5"><?php echo $message; ?></h1>
            <div class="mt-5">
                <?php
                
                for ($i=0; $i < sizeof($banners); $i++) { 
                    $tempBanner = $banners[$i]["image_url"];
                    echo "
                        <div class='mt-5 mb-5 borders w-100 d-flex justify-content-center align-items-center'>
                            $tempBanner 
                        </div>
                    ";
                }

                ?>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>