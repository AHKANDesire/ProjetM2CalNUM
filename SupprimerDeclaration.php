<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$iddecla=$_GET['Id'];
$req="DELETE FROM declaration_medicament WHERE Id_Declaration=$iddecla";
$result=mysqli_query($con,$req)or die('ERROR');
mysqli_close($con);
header('location:Afficher_DeclarationMedicament.php');
?>