<?PHP 
include 'header.php';
?>
<script src="controle.js"> </script>
<form method="POST" name="f"  action="ajoutClient.php" onsubmit="return verif()">
    <div>
          <div>
              <label >PSEUDO</label>
              <div >
                <input type="text" value="pseudo" name="pseudo">
              </div>
            </div>

            <div>
              <label >mdp</label>
              <div >
                <input type="text" value="motdepasse"  name="motdepasse">
           
              </div>
            </div>

            <div>
              <label >email</label>
              <div >
                <input type="text" value="email"   name="email">
              </div>
            </div>
           
          
        <input type="submit" name="ajouter" value="ajout">

    </div>
  </form>
 <?PHP 
include 'footer.php';
?>