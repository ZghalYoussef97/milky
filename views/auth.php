<?php
session_start();
if(!isset($_SESSION["confirmkey"])){
header("Location: login.php");
exit(); }
?>