<?php
include 'C:\wamp64\www\projet web\Core\promotionC.php';

$idprom=$_GET["idprom"];
 
$proC= new promotionC();
$proC->supprimerpromo($idprom);

header("location: promotion.php") ;

?>