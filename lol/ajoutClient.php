<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurCore.php";

if(isset($_POST["pseudo"]) and isset($_POST["motdepasse"]) and isset($_POST["email"])  )
{
    $us = new utilisateur($_POST["pseudo"],$_POST["motdepasse"],$_POST["email"]); 
    $clC = new utilisateurCore();
    $clC->new($us);
    header('location:clients.php');
}
?>