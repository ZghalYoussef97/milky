<?PHP
include "../../entities/stock.php";
include "../../core/stockC.php";

if (isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['quantite']) and isset($_POST['description']) and isset($_POST['categorie']) and isset($_POST['fichier'])){
$stock1=new stock($_POST['nom'],$_POST['prix'],$_POST['quantite'] ,$_POST['description'] ,$_POST['categorie'] ,$_POST['fichier']);


var_dump($stock1);

echo ("azdazdazd");
$nom=strlen($_POST['prix']);
$quantite=strlen($_POST['quantite']);
$description=strlen($_POST['description']);
$categorie=strlen($_POST['categorie']);


$stock1C=new stockC();
$stock1C->ajouterstock($stock1);
header('Location: index-2.php');


}else{
	echo "vĂ©rifier les champs";
}
//*/

?>