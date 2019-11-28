<?php

    include "../config.php";
    include "../entities/reclamation.php";

	function envoyerMail_DB($reclamation)
	{
		$sql="INSERT INTO `reclamation`(`titre_rec`, `email_rec`, `message_rec`, `nom_client`, `date_rec`) VALUES (:titre_rec, :email_rec, :message_rec, :nom_client, :date_rec)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$req->bindValue(':titre_rec',$reclamation->getTitre_rec());
		$req->bindValue(':email_rec',$reclamation->getEmail_rec());
		$req->bindValue(':message_rec',$reclamation->getMessage_rec());
		$req->bindValue(':nom_client',$reclamation->getNom_client());
		$req->bindValue(':date_rec',$reclamation->getDate_rec());
		
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();

        }
		
	}

	$reclamation= new reclamation($_REQUEST['subject'],$_REQUEST['email'],$_REQUEST['message'],$_REQUEST['name'],date("Y-m-d"));

	
	envoyerMail_DB($reclamation);

    /*$to = "youssef.zghal@esprit.tn";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];*/
	//mail($to,$subject,$cmessage);

?>