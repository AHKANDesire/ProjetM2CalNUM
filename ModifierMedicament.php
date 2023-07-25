<?php
include"connect.php";
if(!(isset($_POST['Id'])))
header('location:Page_Accueil.html');
 $idmed=$_POST['Id'];
 $de=$_POST['de'];
 $fo=$_POST['fo'];
 $do=$_POST['do'];
 $ca=$_POST['ca'];
 $sma=$_POST['sma'];
 $smi=$_POST['smi'];
 $obs=$_POST['obs'];
 $req17="UPDATE listemedicament SET Denomination='$de',Forme='$fo',Dosage='$do',Categorie='$ca',Stock_max=$sma,Stock_min=$smi,Observation='$obs' WHERE Id_Medicament=$idmed";
 mysqli_query($con,$req17)or die('ERROR17');
 mysqli_close($con);
 header('location:Afficher_ListeMedicament.php');
 
?>
