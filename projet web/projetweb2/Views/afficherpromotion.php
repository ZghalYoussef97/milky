<!DOCTYPE html>
<?PHP
include "../Core/promotionC.php";
$promotion1C=new promotionC();
$listepromotion=$promotion1C->affichertri();
?>
<table border="3">
<tr>
<td>idprom</td>
<td>idProduit</td>
<td>pourcentage</td>
<td>dateD</td>
<td>dateF</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listepromotion as $row){
	?>
	<tr>
	<td><?PHP echo $row['idprom']; ?></td>
	<td><?PHP echo $row['idProduit']; ?></td>
	<td><?PHP echo $row['pourcentage']; ?></td>
	<td><?PHP echo $row['dateD']; ?></td>
	<td><?PHP echo $row['dateF']; ?></td>
	<td>
	<form method="POST" action="supprimerpromo.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idprom']; ?>" name="idprom">
	</form>
	</td>
	<td><a href="modifier.php?idprom=<?PHP echo $row['idprom']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


