<?php
    include "C:\wamp64\www\projet web\Core\promotionC.php";
    $F = new promotionC();
    $liste = $F->ajoutPromotion();
    $number = $F->afficherpromo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promotions</title>
</head>
<body>
    <center><h1>Promotions</h1></center>
    <p>Gérez vos promotions.</p>
    <hr>
    <a href="ajoutPromotion.php"><button id="a_button">Ajouter Promotion</button></a>

    <br>
    
    <table border="1">
        <tr>
            <th>ID promotion</th>
            <th>ID produit</th>
            <th>Pourcentage</th>
            <th>Date Debut</th>
            <th>Date Fin</th>
        </tr>
        <?php
            foreach($liste as $row){
                ?>
                <tr>
                    <td><?php echo $row['idprom']; ?></td>
                    <td><?php echo $row['idProduit']; ?></td>
                    <td><?php echo $row['pourcentage']; ?></td>
                    <td><?php echo $row['dateD']; ?></td>
                    <td><?php echo $row['dateF']; ?></td>
                    <td><a href="supprimerpromotion.php"><button>Supprimer</button></a></td>
                </tr>
                <?php
            }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Le nombre total = </td>
            <td><?php foreach($number as $num) echo $num[0]; ?></td>
        </tr>
    </table>
</body>
</html>