<?php
include"connect.php";
$idstock=$_GET['Id'];
$req="DELETE FROM liste_stock WHERE Id_stock=$idstock";
$result=mysqli_query($con,$req)or die('ERROR');
mysqli_close($con);
header('location:Afficher_Stock.php');
?>