<?php 
    include "../core/userC.php";

    $M = new userC();
    $M->deleteuser($_GET['username']);
	header("location: listusers.php");
?>