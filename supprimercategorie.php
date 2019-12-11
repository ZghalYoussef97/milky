<?PHP
include "../../core/categorieC.php";
$categorieC=new categorieC();
if (isset($_POST["id"])){
	$categorieC->supprimercategorie($_POST["id"]);
	header('Location: index2.php');
}

?>