<?php
    include "C:\wamp64\www\projet web\Core\config.php";
    

    class promotionC{

        function ajoutPromotion($P)
        {
            $sql = "INSERT INTO Gargoury Fin Traitement(idpromotion,idProduit,pourcentage,dateD,dateF) VALUES (:idpromotion, :idProduit, :pourcentage,:dateD,:dateF)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':idpromotion',$P->getidpromotion());
                $req->bindValue(':idProduit',$P->getidProduit());
                $req->bindValue(':pourcentage',$P->getpourcentage());
                $req->bindValue(':dateD',$P->getdateD());
                $req->bindValue(':dateF',$P->getdateF());
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();

            }    
        }

        function afficherpromo()
        {
            $sql="select * from promotion";
            $db = config::getConnexion();
            try 
            {
                $list=$db->query($sql);
                return $list ;
            }
            catch (Exeption $e)
            {
                die('erreur:' .$e->getMessage());
            }
        }


        function modifier($idprom,$idProduit,$pourcentage,$dateD,$dateF)
        {

            $sql= "Update promotion set idpromo='$idprom',idProduit='$idProduit',pourcentage='$pourcentage',dateD='$dateD',dateF='$dateF' where idprom='$idprom'" ;
            $db = config::getConnexion();
              try 
            {
              $db->query($sql);
              
            }
            catch (Exception $e)
            {
                die('Erreur:' .$e->getMessage());
            }

        }




 function supprimerpromo($idprom)
{
    $sql="DELETE FROM promotion WHERE idprom LIKE '$idprom' ";
    $db = config::getConnexion();
    try
    {
        $db->query($sql);
    }
    catch (Exception $e)
    {
        die('Erreur: ' .$e->getMessage());

    }

} 
}   
?>