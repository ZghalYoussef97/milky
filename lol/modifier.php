<?PHP
include "../Entities/promotion.php";
include "../Core/promotionC.php";
if (isset($_GET['idprom']))
{
	$promoC=new promotionC();
    $result=$promoC->recupererPromo($_GET['idprom']);
	foreach($result as $row){
		    $idprom=$row["idprom"];
        $idProduit=$row["idProduit"];
        $pourcentage=$row["pourcentage"];
        $dateD=$row["dateD"];
        $dateF=$row["dateF"];
  }
}
      include "header.php";
    ?>
    <form method="POST" action="modifier2.php" name="f"  onsubmit="return verif()">
        <div>

            <div>
                <label >Id promotion*</label>
                <div >
                  <input type="number" value="<?PHP echo $idprom; ?>" name="idprom">
                </div>
              </div>

              <div>
                  <label >Id produit*</label>
                  <div >
                    <input type="number" value="<?PHP echo $idProduit; ?>"   name="idProduit">
                  </div>
                </div>

                <div>
                <label >Reduction*</label>
                <div >
                  <input type="number" value="<?PHP echo $pourcentage; ?>"  name="pourcentage">
                  <span>99%</span>
                </div>
              </div>

                <div>
                  <label >dateD*</label>
                  <div >
                    <input type="date" value="<?PHP echo $dateD; ?>"   name="dateD">
                  </div>
                </div>
               
                <div>
                  <label >dateF*</label>
                  <div >
                    <input type="date" value="<?PHP echo $dateF; ?>"   name="dateF">
                  </div>
                  <?PHP ?>
                </div>

                
    
            <input type="submit" name="modifier" value="modifier">

            <input type="hidden" name="id_promo_ini" value="<?PHP echo $_GET['idprom'];?>">

        </div>
      </form>
     <?php include "footer.php";?>