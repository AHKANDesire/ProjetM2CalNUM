<?php
include"connect.php";
if(!(isset($_POST['Iddecla'])))
header('location:Page_Accueil.html');
 $iddecla=$_POST['Iddecla'];
 $idmed=$_POST['Idmed'];
 $numauto=$_POST['numauto'];
 $numlot=$_POST['numlot'];
 $datfab=$_POST['datfab'];
 $dateper=$_POST['dateper'];
 $req21="UPDATE declaration_medicament SET Id_Declaration=$iddecla,Id_Medicament=$idmed,Num_Autorisation='$numauto',Num_lot='$numlot',Date_fabrication='$datfab',Date_peremption='$dateper' WHERE Id_Declaration=$iddecla";
 mysqli_query($con,$req21)or die('ERROR21');
 mysqli_close($con);
 header('location:Afficher_DeclarationMedicament.php');
 
?>
