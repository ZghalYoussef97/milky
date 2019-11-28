<?php 
    include "../core/userC.php";

    $M = new userC();
    $M->deleteFilm($_GET['username']);
	header("location: listusers.php");
?>