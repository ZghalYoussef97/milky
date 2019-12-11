<?php  
include "C:/wamp64/www/easy/core/fideliteCore.php";
include "C:/wamp64/www/easy/core/utilisateurCore.php";
include "C:/wamp64/www/easy/entities/fidelite.php";




$bdd = config::getConnexion();

if (isset($_GET['pseudo'],$_GET['key']) AND !empty($_GET['pseudo']) AND !empty($_GET['key'])) {

$pseudo = $_GET['pseudo'];
$key = $_GET['key'];
$requser = $bdd->prepare("SELECT * FROM user WHERE pseudo = ? AND confirmkey = ?");
$requser->execute(array($pseudo,$key));
$userexist = $requser->rowCount();
if ($userexist==1) {
	$user = $requser->fetch();
	if ($user['confirme'] == 0) {
		$updateuser = $bdd->prepare("UPDATE user SET confirme = 1 WHERE pseudo=? AND confirmkey=?");
		$updateuser->execute(array($pseudo,$key));
		$user=new utilisateurCore();


		$id=$user->recupereid($pseudo);
		//var_dump($id);
		
		echo "Votre compte à bien été confirmé !";
	}else{
		echo "votre compte est déja confirmé !";
	}
}else { 
echo "L'utilisateur n'existe pas !";
}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Account confirmation</title>
</head>
<body>
<p>Your account has been confirmed , Thank you !</p>
</body>
</html>