<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$idstock=$_GET['Id'];
$req="DELETE FROM registre_stock WHERE Id_stock=$idstock";
$result=mysqli_query($con,$req)or die('ERROR');
mysqli_close($con);
header('location:Afficher_ListeStock.php');
?>