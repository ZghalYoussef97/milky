<?PHP

include "../Entities/promotion.php";
include "../Core/promotionC.php";


$promo = new promotion($_POST["idprom"],$_POST["idProduit"],$_POST["pourcentage"],$_POST["dateD"],$_POST["dateF"]);
$promoC = new promotionC();
$promoC->modifier($promo);

header('Location:promotion.php');

?>