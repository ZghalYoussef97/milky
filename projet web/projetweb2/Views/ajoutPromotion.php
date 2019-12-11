
<?php
include 'C:\wamp64\www\projetweb2\Entities\promotion.php';
include 'C:\wamp64\www\projetweb2\Core\promotionC.php';

if(isset($_POST["idProduit"]) and isset($_POST["pourcentage"]) and isset($_POST["dateD"]) and isset($_POST["dateF"]) )
{
    $P1=new promotion(NULL,$_POST["idProduit"],$_POST["pourcentage"],$_POST["dateD"],$_POST["dateF"] );
 
    $ajouC=new promotionC();
    $ajouC->ajoutPromotion($P1);
    header('location:afficherpromotion.php');
}
?>