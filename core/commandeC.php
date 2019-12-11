<?PHP
include "../views/config.php";
class commandeC {

	function ajoutercommande($commande){
		$sql="insert into commande (id_client,ref_prod,prixtotal,quantite_prod,etat) values ( :id_client,:ref_prod,:prixtotal,:quantite,;etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_client=$commande->getid_client();
        $ref_prod=$commande->getref_prod();
        $prixtotal=$commande->getprixtotal();
        $quantite=$commande->getquantite();
        $etat="En attente";
      
        
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':ref_prod',$ref_prod);
		$req->bindValue(':prixtotal',$prixtotal);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':etat',$etat);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	public function   affichercommandes()
	{
		try{
			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM commande ');
			$stmt->execute();
			$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $produits;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}
	function supprimercommande($id){
		$sql="DELETE FROM commande where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function modifiercommande($etat,$id){
		$sql="UPDATE commande SET etat=:etat where id=:id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		$req->bindValue(':etat',$etat);

		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>