<?php
include"connect.php";
if(!(isset($_POST['Idrs'])))
header('location:Page_Accueil.html');
 $idrs=$_POST['Idrs'];
 $dat=$_POST['dat'];
 $idmed=$_POST['Idmed'];
 $qs=$_POST['qs'];
 $obs=$_POST['obs'];
 $req="UPDATE registre_sortie SET Date_sortie='$dat',Id_medicament=$idmed,Quantite_sortie=$qs,Observation='$obs' WHERE Id_sortie=$idrs";
 mysqli_query($con,$req)or die('ERROR');
 mysqli_close($con);
 echo"<b> <font color='green'>INSERTION DANS LA REGISTRE STOCK</font></b><BR>";
 echo"<a href='Liste_stock.php?Id=$idmed'>SUIVANT</a>";
 
?>
