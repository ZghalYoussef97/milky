<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurCore.php";
if (isset($_GET['pseudo']))
{
$cl=new utilisateurCore();
$listeclient=$cl->afficherUsers();


    $client=$cl->recupereuser($_GET['pseudo']);
	
  }
  include "header.php"; 
    ?>
    <form method="POST" action="modifierClient2.php" name="f"  onsubmit="return verif()">
        <div>
        <?PHP foreach($client as $row){
     $ps=$row['pseudo']; 
     $mdp=$row['motdepasse']; 
     $em=$row['email']; 
     $ck=$row['confirmkey'];
        }
    ?>
        <div>
                <label >confirm key</label>
                <div >
              <div >
        <label><?PHP echo $row['confirmkey']; ?></label> <input  type="hidden" name="confirmkey" value="<?PHP echo $row['confirmkey'];?>">

                </div>


            <div>
                <label >pseudo</label>
                <div >
<input type="text" value="<?PHP echo $ps;?>"   name="pseudo" >


                </div>
              </div>
              

              <div>
                  <label >MOT de passe</label>
                  <div >
                    <input type="text" value="<?PHP echo $mdp; ?>"   name="motdepasse" >
                  </div>
                </div>

                <div>
                <label >Email</label>
                <div >
                  <input type="text" value="<?PHP echo $em; ?>"  name="email" >
                  
                </div>
              </div>

               

                
    
            <input type="submit" name="modifier" value="modifier">

            <input type="hidden" name="modifier" value="<?PHP echo $_GET['pseudo'];?>">

        </div>
      </form>
        <?php 
        

     include "footer.php";?>