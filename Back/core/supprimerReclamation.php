<?PHP
include "../../entities/reclamation.php";
include "../../config.php";

if (isset($_POST['ref'])){

    $sql="DELETE FROM reclamation WHERE ref_rec=".$_POST['ref'];
    config::getConnexion()->query($sql);
    echo "mchét shihaaa";
    header("Location: ../views/reclamations.php");

}
//*/

?>