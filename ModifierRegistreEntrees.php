<?php
if(!(isset($_POST['Idre'])))
header('location:Page_Accueil.html');
include"connect.php";
 $idre=$_POST['Idre'];
 $dat=$_POST['dat'];
 $idmed=$_POST['Idmed'];
 $qe=$_POST['qe'];
 $pu=$_POST['pu'];
 $pt=$qe*$pu;
 $four=$_POST['four'];
 $obs=$_POST['obs'];
 $req25="UPDATE registre_entrees SET Id_entrees=$idre,Date_entrees='$dat',Id_medicament=$idmed,Quantite_entrees=$qe,Prix_U=$pu,Prix_T=$pt,Fournisseur='$four',Observation='$obs' WHERE Id_entrees=$idre";
 mysqli_query($con,$req25)or die('ERROR25');
 mysqli_close($con);
 header('location:Afficher_RegistreEntrees.php'); 
?>
