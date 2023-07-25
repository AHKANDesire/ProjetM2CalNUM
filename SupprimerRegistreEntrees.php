<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$idre=$_GET['Id'];
$req="DELETE FROM registre_entrees WHERE Id_entrees=$idre";
$result=mysqli_query($con,$req)or die('ERROR');
mysqli_close($con);
header('location:Afficher_RegistreEntrees.php');
?>