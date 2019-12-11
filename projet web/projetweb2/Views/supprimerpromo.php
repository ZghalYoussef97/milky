

<?PHP
include "../Core/promotionC.php";
$promotionC=new promotionC();
if (isset($_POST["idprom"])){
	$promotionC->supprimerpromo($_POST["idprom"]);
	header("Location:afficherpromotion.php");
}

?>

