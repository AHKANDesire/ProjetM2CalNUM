<?php
include"connect.php";
$idmed=$_GET['Id'];
$req="DELETE FROM listemedicament WHERE Id_Medicament=$idmed";
$result=mysqli_query($con,$req)or die('ERROR');
mysqli_close($con);
header('location:Afficher_ListeMedicament.php');
?>