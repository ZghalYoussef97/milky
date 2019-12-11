<?PHP
include "../Entites/promotion.php";
include "../Core/promotionC.php";

if (isset($_POST['idprom']) and isset($_POST['idProduit']) and isset($_POST['pourcentage'])){
$promo1=new promo( $_POST['idProduit'], $_POST['pourcentage']);
//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
//  var_dump($promo1);
$promo1C=new promoC();
$promo1C->ajoutPromotion($promo1);
header('Location: afficherpromo.php');
	
}else{
	echo "vérifier les champs";
 }
//*/

?>