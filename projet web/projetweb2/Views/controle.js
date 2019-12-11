function verif(){
if(f.idProduit.value=="")
{alert("id produit ne doit pas être vide");
return false;}
if(f.pourcentage.value.length!=2)
{alert("pourcentage !!");
return false;}
if(f.dateD.value>f.dateF.value)
{alert("la date début ne doit pas être supérieure a la date fin");
return false;}
}


