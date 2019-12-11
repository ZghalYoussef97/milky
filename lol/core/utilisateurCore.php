<?php 
include_once "C:/wamp64/www/easy/config.php";
include_once "C:/wamp64/www/easy/config2.php";
class utilisateurCore{
 function inscritption($utilisateur,$confirmkey)
 {    
  $confirme=0;
            $sql="INSERT into user (pseudo,email,motdepasse,confirmkey,confirme) values (:pseudo,:mail,:motdepasse,:confirmkey,:confirme)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $pseudo=$utilisateur->getPseudo();
        $mail=$utilisateur->getEmail();
        $motdepasse=$utilisateur->getMotdepasse();
        $req->bindValue(':pseudo',$pseudo);
        $req->bindValue(':mail',$mail);
        $req->bindValue(':motdepasse',$motdepasse);
        $req->bindValue(':confirmkey',$confirmkey);
        $req->bindValue(':confirme',$confirme);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}
function new($utilisateur)
 {    
  $confirme=0;
  $confirmkey=0;
            $sql="INSERT into user (pseudo,email,motdepasse,confirmkey,confirme) values (:pseudo,:mail,:motdepasse,:confirmkey,:confirme)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $pseudo=$utilisateur->getPseudo();
        $mail=$utilisateur->getEmail();
        $motdepasse=$utilisateur->getMotdepasse();
        $req->bindValue(':pseudo',$pseudo);
        $req->bindValue(':mail',$mail);
        $req->bindValue(':motdepasse',$motdepasse);
        $req->bindValue(':confirmkey',$confirmkey);
        $req->bindValue(':confirme',$confirme);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}
function connection($utilisateur){   
    $db = config::getConnexion();
    $mailconnect=$utilisateur->getPseudo();
    $mdpconnect=$utilisateur->getEmail();
   $mdpconnect=sha1($mdpconnect);
      $requser = $db->prepare("SELECT * FROM user WHERE email = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
return array($userexist,$requser);

}

function modifierUser($utilisateur,$id){
    
    $db = config::getConnexion(); 
     $pseudo=$utilisateur->getPseudo();
     $motdepasse=$utilisateur->getMotdepasse();
     $mail=$utilisateur->getEmail();
     if (!empty($pseudo)) {
       # pseudo...
        $pseudo=htmlspecialchars($pseudo);
        $insertpseudo = $db->prepare("UPDATE user SET pseudo = ? WHERE confirmkey = ?");
        $insertpseudo->execute(array($pseudo,$id));
     }
     if (!empty($motdepasse)) {
       # mail...
      $motdepasse=sha1($motdepasse);
      $mdp = $db->prepare("UPDATE user SET motdepasse = ? WHERE pseudo = ?");
      $mdp->execute(array($motdepasse,$pseudo));
     }
     
     if (!empty($mail)) {
        # mail...
       $mail=htmlspecialchars($mail);
       $email = $db->prepare("UPDATE user SET email = ? WHERE pseudo = ?");
       $email->execute(array($mail,$pseudo));
      } 
    var_dump($utilisateur);
  }





    function afficherUsers(){
    $sql="SELECT * From user";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }

 
function SupprimerAdmin($pseudo){
  $sql="DELETE FROM user where pseudo= :pseudo";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':pseudo',$pseudo);
    try{
            $req->execute();
            header('Location:TabClients.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function ModifierAdmin($utilisateur,$id){
        $db = config::getConnexion();

       $pseudo=$utilisateur->getPseudo();
        $mail=$utilisateur->getEmail();
        $motdepasse=$utilisateur->getMotdepasse();

          $upseudo = $db->prepare("UPDATE user SET pseudo = ? WHERE confirmkey= ?");
      $upseudo->execute(array($pseudo,$id));
        $umail = $db->prepare("UPDATE user SET email = ? WHERE confirmkey= ?");
      $umail->execute(array($mail,$id));
        $umotdepasse = $db->prepare("UPDATE user SET motdepasse = ? WHERE confirmkey= ?");
      $umotdepasse->execute(array($motdepasse,$id));       
}
//verifier unicité de mail

function VerifierEmail($mail){
        $bdd = config::getConnexion();
            $reqmail = $bdd->prepare("SELECT * FROM user WHERE email = ?");
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount();
return $mailexist;
}

//verifier unicité de mail
//Envoie de mail
function EnvoyerMail($mail,$pseudo,$key)
{
 // ini_set('SMTP', 'smtp.gmail.com');
  //ini_set('sendmail_from', 'louayjeddou9@gmail.com');
   $header="MIME-Version: 1.0\r\n";
$header.='From:"gft.com"<support@gft.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
    <body>
        <div align="center">
         <a href="http://localhost/easy/views/confirmation.php?pseudo='.$pseudo.'&key='.$key.'">Confirmer votre compte</a>
        </div>
    </body>
</html>
';

mail($mail, "Activation de compte GFT", $message, $header);

}
function recupereid($pseudo)
{
   $sql="SELECT confirmkey FROM user where pseudo= :pseudo";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':pseudo',$pseudo);
    try{
            $req->execute();
            $id=$req->fetch();
            return $id;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function recupereuser($pseudo)
{
   $sql="SELECT * FROM user where pseudo= $pseudo";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':pseudo',$pseudo);
    try{
      $liste=$db->query($sql);
 
      return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function recupererpseudo($id)
{
   $sql="SELECT pseudo,email FROM user where confirmkey= :confirmkey";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':confirmkey',$id);
    try{
            $req->execute();
            $id=$req->fetchAll();
            return $id;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function recuperernewsletter($id)
{
   $sql="SELECT email FROM user where confirmkey= :confirmkey";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':confirmkey',$id);
    try{
            $req->execute();
            $id=$req->fetchAll();
            return $id;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}

//Envoie de mail

//Envoie de mail de rénitialisation de mot de passe 
function RecupererMail($pseudo,$recup_code,$recup_mail){
      $header="MIME-Version: 1.0\r\n";
         $header.='From:"gargourifintraiteur.tn"<support@gft.tn>'."\n";
         $header.='Content-Type:text/html; charset="utf-8"'."\n";
         $header.='Content-Transfer-Encoding: 8bit';
         $message = '
         <html>
         <head>
           <title>Récupération de mot de passe - gargourifintraiteur.tn</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>
                     
                     <div align="center">Bonjour <b>'.$pseudo.'</b>,</div>
                     cliquer <a href="http://localhost/myFiles/php/views/recupererMdp.php?section=code&code='.$recup_code.'">ici</a> pour rénitialiser votre mot de passe 
                     A bientôt !
                     
                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       Ceci est un email automatique, merci de ne pas y répondre
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
         mail($recup_mail, "Récupération de mot de passe - gtf.tn", $message, $header);
}
//Envoie de mail de rénitialisation de mot de passe
}
?>
