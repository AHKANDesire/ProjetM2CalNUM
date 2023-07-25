<?php
if(!(isset($_POST['dci'])))
header('location:Page_Accueil.html');
?>
<?php
include"connect.php";
$dci=$_POST['dci'];
$forme=$_POST['forme'];
$dosage=$_POST['dosage'];
$req="SELECT * FROM listemedicament";
$result=mysqli_query($con,$req)or die('ERROR');
            WHILE($col=mysqli_fetch_array($result))
            {
                if($col['Denomination']==$dci and $col['Forme'] ==$forme and $col['Dosage']==$dosage)
                {
                 echo"<font color='red'>IL EST DANS LA LISTE DE MEDICAMENT</font>"."<br>";
                 echo"<b>VERIFICATION DANS LA REGISTRE ENTREES:</b><a href='Registre_sortie.php?Id=$col[0]'>SUIVANT</a> ";              
                 mysqli_close($con);
                 exit();                 
                }
            }
echo"<font color='red'>IL N'EST PAS DANS LA LISTE DE MEDICAMENT</font>"."<br>RETOUR A LA PAGE D'ACCUEIL POUR INSERTION
                 <a href='Page_Accueil.html'>RETOUR</a>";

?>
