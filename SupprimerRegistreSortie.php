<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$idrs=$_GET['Id'];
$req="DELETE FROM registre_sortie WHERE Id_sortie=$idrs";
$result=mysqli_query($con,$req)or die('ERROR');
mysqli_close($con);
header('location:Afficher_RegistreEntrees.php');
?>