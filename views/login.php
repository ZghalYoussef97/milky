<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>| Gargouri Fin Traiteur | </title>

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

session_start();
// If form submitted, insert values into the database.
if(isset($_POST['formconnexion'])) {
  $mailconnect = $_POST['mailconnect'];
  $mdpconnect = $_POST['mdpconnect'];
  $empty="test";
  if(!empty($mailconnect) AND !empty($mdpconnect)) {

 $utilisateur1 = new utilisateur($mailconnect,$mdpconnect,$empty);
                       $utilisateur1C = new utilisateurCore();
                       $tab=$utilisateur1C->connection($utilisateur1);
                       $userexist=$tab[0];
                       $requser=$tab[1];
echo $userexist;
     if($userexist == 1) {
        $userinfo = $requser->fetch();
        $_SESSION['confirmkey'] = $userinfo['confirmkey'];
        $_SESSION['pseudo'] = $userinfo['pseudo'];
        $_SESSION['email'] = $userinfo['email'];
        $_SESSION['confirme'] = $userinfo['confirme'];
        if ($_SESSION['confirme'] == 1) {
        header("Location:my-account.php?confirmkey=".$_SESSION['confirmkey']);
        //header("Location:C:/wamp64/www/redcayenne/index.php?confirmkey=".$_SESSION['confirmkey']);
        }else{
          $erreur ="votre compte n'est pas encore confirmé";
              echo $erreur;

        }
     } else {
        $erreur = "Mauvais mail ou mot de passe !";
            echo $erreur;

     }
  } else {
     $erreur = "Tous les champs doivent être complétés !";
         echo $erreur;

  }
}

?>



    <div>


      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="form" id="contact_form" class="contact-form" action="" method="post" > 
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="mailconnect"  placeholder="Username" required=""id="pseudo" value="<?php if(isset($mailconnect)){ echo($mailconnect);}?>"/>
              </div>
              <div>
                <input type="password" name="mdpconnect" id="mdp" class="form-control" placeholder="Password" required=""/>
              </div>
              <div>
               <button type="submit" id="btn_submit" class="btn btn-primary" onClick="proceed();" name="formconnexion" >Login</button><br>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="register.php" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2018 - W-Product</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>