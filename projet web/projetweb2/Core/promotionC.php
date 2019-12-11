<?php
    include '../config.php';
    

    class promotionC{

        function ajoutPromotion($P)
        {
            $sql = "INSERT INTO `promotion` ( `idProduit`, `pourcentage`, `dateD`, `dateF`) VALUES (:idProduit, :pourcentage, :dateD, :dateF);";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);

                
               
            
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
            $sql="select * from promotion ";
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
 function afficherpromobyid($idprom)
        {
            $sql="select * from promotion where idprom='$idprom' ";
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



/* function supprimerpromo($idprom)
{
    $sql="DELETE FROM `promotion` WHERE `idprom` = ':idprom' ";
    $db = config::getConnexion();
    try
    {
        $db->query($sql);
    }
    catch (Exception $e)
    {
        die('Erreur: ' .$e->getMessage());

    }

} */

function supprimerpromo($idprom){
    $sql="DELETE FROM `promotion` WHERE idprom = :idprom";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':idprom',$idprom);
    try{
        $req->execute();
       // header('Location: index.php');
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

function modifier($P){
    $sql= "UPDATE `promotion` SET `idProduit` = :idProduit, `pourcentage` = :pourcentage, `dateD` = :dateD, `dateF` = :dateF WHERE `promotion`.`idprom` = ".$P->getidprom();
    $db = config::getConnexion();
try{		
    $req=$db->prepare($sql);
    $idprom=$P->getidprom();
    $idProduit=$P->getidProduit();
    $pourcentage=$P->getpourcentage();
    $dateD=$P->getdateD();
    $dateF=$P->getdateF();

    $req->bindValue(':idProduit',$idProduit);
    $req->bindValue(':pourcentage',$pourcentage);
    $req->bindValue(':dateD',$dateD);
    $req->bindValue(':dateF',$dateF);	
    $req->execute();
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
    
}
}


function recupererPromo($idprom){
    $sql="SELECT * from promotion where idprom=$idprom";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

function affichertri()
        {
            $sql="SELECT * FROM promotion ORDER BY pourcentage ";
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

        function rechercherListePromos($idprom){
            $sql="SELECT * from promotion where idprom like '%".$idprom."%' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        
        function afficher_promo_front()
        {
            $sql= "select prix , prix_reduc  from promotion pt , produit pd where (pd.id_produit=pt.idProduit) order by pourcentage ";
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

    
}

?>