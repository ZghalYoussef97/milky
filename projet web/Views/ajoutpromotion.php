<?php
include '../Entities/promotion.php';
include '../Core/promotionC.php';
if(isset($_POST["idpromo"]) and isset($_POST["idProduit"]) and isset($_POST["pourcentage"]) and isset($_POST["dateD"]) and isset($_POST["dateF"]) )
{
    $P=new promotion($_POST["idpromo"],$_POST["idProduit"],$_POST["pourcentage"],$_POST["dateD"],$_POST["dateF"] );
    $ajouC=new promotionC();
    $ajouC->ajoutPromotion($P);
    header("location:afficherpromo()");
}
else
{
    echo "Erreur";
}
?>