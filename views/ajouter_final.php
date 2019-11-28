<?php
    include "../core/userC.php";
    $F = new user(NULL,$_POST['password'],$_POST['email'],$_POST['rang']);
    $FOps = new userC();

    $FOps->ajoutuser($F);
    header("location: listusers.php");
?>