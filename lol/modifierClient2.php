<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurCore.php";

var_dump($_POST["pseudo"]);
var_dump($_POST["motdepasse"]);
$us = new utilisateur($_POST["pseudo"],$_POST["motdepasse"],$_POST["email"]);
$clC = new utilisateurCore();
var_dump($clC);
$clC->ModifierAdmin($us,$_POST["confirmkey"]);

header('Location:clients.php');

?>