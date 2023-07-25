<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$idmed=$_GET["Id"];
$req="SELECT Id_medicament FROM registre_entrees";
$result=mysqli_query($con,$req)or die('ERROR');
WHILE($col=mysqli_fetch_array($result))
            {
                if($col['Id_medicament'] ==$idmed )
                {
                 echo"<font color='red'>IL EST DANS LA REGISTRE ENTREES</font>"."<br>";
                 echo"<b>INSERER DANS LA REGISTRE SORTIE:</b><a href='Formulaire_RegistreSortie.php?Idmed=$idmed'>SUIVANT</a> ";              
                 mysqli_close($con);
                 exit();                 
                }
            }
echo"<font color='red'>IL N'EST PAS DANS LA REGISTRE ENTREES</font>"."<br>RETOUR A LA PAGE D'ACCUEIL POUR INSERTION
                 <a href='Page_Accueil.html'>RETOUR</a>";
