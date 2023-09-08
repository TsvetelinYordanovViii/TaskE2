<?php

function checkRole ($userRole, $requiredRole, $redirectPath){
    if ($requiredRole=="admin" && $userRole!="admin"){
        header("Location: $redirectPath");
    }
    else if ($requiredRole=="manager" && ($userRole!="manager" && $userRole!="admin")){
        header("Location: $redirectPath");
    }
}
?>