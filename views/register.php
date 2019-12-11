<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BBN - Dashboard | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">

<?php
require('../config.php');

include "C:/wamp64/www/easy/entities/utilisateur.php";
include "C:/wamp64/www/easy/core/utilisateurCore.php";
require_once "C:/wamp64/www/easy/views/GoogleC.php";
global $erreur;
if(isset($_POST['forminscription']))
{
  
    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp'] AND !empty($_POST['mdp2']))) 
    {

      $pseudo =htmlspecialchars($_POST['pseudo']);
      $mail =htmlspecialchars($_POST['mail']);
      $mail2 =htmlspecialchars($_POST['mail2']);
      $mdp = sha1($_POST['mdp']);
      $mdp2 = sha1($_POST['mdp2']);

      $pseudolength =strlen($pseudo);
      if($pseudolength<=255)
        { 
            if($mail == $mail2)
            {   

        if(filter_var($mail,FILTER_VALIDATE_EMAIL))
           {
                     $utilisateur2C = new utilisateurCore();
                     $mailexist=$utilisateur2C->VerifierEmail($mail);
                if($mailexist==0)
                {
                if($mdp == $mdp2)
                {  

      //hne yebda el controle de saisie level 2

       //longuer de mot de passe >8             
     if (strlen($_POST['mdp'])>=8) {
      
                if (ctype_lower ($_POST['mdp'])) {
                                  $erreur="Votre mot de passe doit contenir au moins une caractére en  majuscule !" ; 
                                  echo $erreur;
                            }else{  
                               
                                  $longueurKey = 12;
                    $key = "";
                    for ($i=1; $i<$longueurKey; $i++) { 
                        $key .= mt_rand(0,9);
                    }    



                    if (isset($_POST['captcha'])) {
                        //session_start();
    
    if ($_POST['captcha'] == $_SESSION['captcha']) {
       
                        $utilisateur1 = new utilisateur($pseudo,$mail,$mdp);
                        $utilisateur1C = new utilisateurCore();
                        $utilisateur1C->inscritption($utilisateur1,$key);
                        $utilisateur1C->EnvoyerMail($mail,$pseudo,$key);
                        mail($mail, "fadhel", "message");
                        echo "Votre compte a été bien crée ! Veuillez Confirmez votre compte";

            }

else{$erreur="captcha invalide";
  echo $erreur;}
                       
                        //echo "votre compte a été bien crée ! veuillez Confirmez votre compte";

                        //alert("Confirmez votre compte!");

          }else{
        $erreur="captcha invalide";
        echo $erreur;
    }
}

                            }else {$erreur="Votre mot de passe doit etre plus que 8 caractéres !";
                            echo $erreur;}


//strlen
} else{
    $erreur="Les deux mots de passes doivent être identiques!";
    echo $erreur;
}
  //Hne youfa el controle de siasie 2



                }
                else{
                    $erreur="vos mot de passes ne correspond pas";
                        echo $erreur;

                }
                }
                else{
                    $erreur="email déja utilisé , veuillez utiliser une autre adresse !";
                        echo $erreur;

                }
             }
             else{
                $erreur="votre mail ne corresond pas";
                    echo $erreur;

             }

            }
            else{
                $erreur="votre pseudo a depasser 255 erreurs";
                    echo $erreur;

            }

        }
      else{
        $erreur ="tous les champs doivent etre complétes";
            echo $erreur;

      }
    
    }
    


//google APIs
   /*if (isset($_SESSION['access_token'])) {
        header('Location: account.php');
        exit();
    }

    $loginURL = $gClient->createAuthUrl();*/

//google APis
    ?>



      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form name="registration" action="" method="post">
              <h1>Create Account</h1> 
              <div>
                <input type="text" class="form-control" placeholder="Username" name="pseudo" id="pseudo" value="<?php if(isset($pseudo)){ echo($pseudo);}?>"/>
              </div>
              <div>
                <input type="email" class="form-control"  placeholder="E-mail" name="mail" id="mail" value="<?php if(isset($mail)){ echo($mail);}?>" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="E-mail Confirmation" name="mail2" id="mail2" value="<?php if(isset($mail2)){ echo($mail2);}?>"/>
              </div>
              <div>
                <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Password" />
              </div>
              <div>
                <input type="password" class="form-control" name="mdp2" id="mdp2" placeholder="Password Confirmation"/>
              </div>
              <div>
                <input type="hidden" class="form-control" name="website" id="website" placeholder="AGE"/>
              </div>
              </li>
                                        <!-- captcha -->
                                          <li class="col-sm-12">
              <table>
              <tr>Please enter the captcha code</tr>
      <td><img src="captcha.php"> </td>
      <td><input type="text" name="captcha" class="form-control"></td>
  </table> </li>
                                        <!-- captcha -->
                                        <li class="col-sm-12 no-margin">
              <div>
               <button type="submit"  class="btn btn-round btn-danger" onClick="proceed();" name="forminscription"  >Register</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="login.php" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gargouri Fin Traiteur</h1>
                  <p>©2019 - GFT</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>

  </body>
</html>