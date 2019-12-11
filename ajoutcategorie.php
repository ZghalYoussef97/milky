<?PHP
include "../../entities/categorie.php";
include "../../core/categorieC.php";

if (isset($_POST['nom'])){
$categorie1=new categorie($_POST['nom']);

$categorie1C=new categorieC();
$categorie1C->ajoutercategorie($categorie1);
header('Location: index2.php');

//else {
//	echo"<script> alert(\"3ib\") </script>";
//	header('Location: index-2.php');

//}	
}else{
	echo "vĂ©rifier les champs";
}
//*/

?>