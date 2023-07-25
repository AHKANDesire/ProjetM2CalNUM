<?php
include"connect.php";
if(!(isset($_POST['Idstock'])))
header('location:Page_Accueil.html');
 $idstock=$_POST['Idstock'];
 $dat=$_POST['dat'];
 $idmed=$_POST['Idmed'];
 $sd=$_POST['sd'];
 $pu=$_POST['pu'];
 $obs=$_POST['obs'];
 $pt=$sd*$pu;
 $req="UPDATE registre_stock SET Date_stock='$dat',Id_medicament=$idmed,Prix_U=$pu,Prix_T=$pt,Observation='$obs' WHERE Id_stock=$idstock";
 mysqli_query($con,$req)or die('ERROR');
 mysqli_close($con);
 header('location:Afficher_ListeStock.php'); 
?>
