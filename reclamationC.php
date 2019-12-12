
<?php
include_once "../../config.php";


class reclamationC
{
  
function getAllcommandeS($keywords){
        $sql="SELECT * FROM reclamation WHERE CONCAT(`ref_rec`,`titre_rec`,`email_rec`,`message_rec`,`nom_client`,`date_rec`) LIKE '%".$keywords."%'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    
    function trier(){
        $sql="SELECT * from reclamation order by date_rec desc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}
?>