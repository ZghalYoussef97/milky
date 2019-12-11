<!DOCTYPE html>
<?PHP
include "../Core/promotionC.php";
$promotion1C=new promotionC();
$listepromotion=$promotion1C->afficher_promo_front();

?>

<table border="3">
<tr>

<td>prix</td>
<td>prix_reduc</td>

</tr>

<?PHP
foreach($listepromotion as $row){
	
	?>
	<script>
            function getTimeRemaining(e){var n=Date.parse(e)-Date.parse(new Date),t=Math.floor(n/1e3%60),r=Math.floor(n/1e3/60%60),i=Math.floor(n/36e5%24);return{total:n,days:Math.floor(n/864e5),hours:i,minutes:r,seconds:t}}function initializeClock(e,n){var t=document.getElementById(e),r=t.querySelector(".days"),i=t.querySelector(".hours"),a=t.querySelector(".minutes"),o=t.querySelector(".seconds");function l(){var e=getTimeRemaining(n);r.innerHTML=e.days,i.innerHTML=("0"+e.hours).slice(-2),a.innerHTML=("0"+e.minutes).slice(-2),o.innerHTML=("0"+e.seconds).slice(-2),e.total<=0&&clearInterval(s)}l();var s=setInterval(l,1e3)}
			var deadline="<?PHP echo $row['dateF']; ?>";initializeClock("clockdiv",deadline);
          </script>	
	<tr>
	<?php 
	// $listepromotion=$promotion1C->verif_date($row['dateF']);
	// verif_date($row['dateF'])
	if ( 1> 0){?>
	<td><s><?PHP echo $row['prix']; ?></s></td>
	<td><?PHP echo $row['prix_reduc']; ?></td>
	<?PHP
	}else{
		//include "supprimer_promo_front.php";
	}
}
?>

</table>



