<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$idmed=$_GET['Id'];
$req7="SELECT Quantite_entrees FROM registre_entrees where Id_medicament=$idmed";
$result7=mysqli_query($con,$req7)or die('ERROR7');
$qe0=0;
while($col7=mysqli_fetch_array($result7))
{
 $qe=$col7[0];
 $sqe=$qe0+$qe;
 $qe0=$sqe; 
}
$req8="SELECT Quantite_sortie FROM registre_sortie where Id_medicament=$idmed";
$result8=mysqli_query($con,$req8)or die('ERROR8');
$qs0=0;
while($col8=mysqli_fetch_array($result8))
{
 $qs=$col8[0];
 $sqs=$qs0+$qs;
 $qs0=$sqs;
}
$qd=$qe0-$qs0;
mysqli_close($con);
?>
<HTML>
        <HEAD>
            <META CHARSET="UTF-8">
                <title> RegistreStock</title>
        </HEAD>
        <BODY>
               <b> <font color='red'>INSERTION DANS LA REGISTRE STOCK</font></b><BR>
               <B>REMPLISSEZ LE FORMULAIRE:</B><BR>
               <FORM METHOD="POST" ACTION="Ajouter_ListeStock.php">
                <table >
                    <tr>
                        <td>Date_stock:</td>
                        <td><input type="text" name="dat" required></td>
                    </tr>
                    <tr>
                        <td>Id_medicament:</td>
                        <td><?php echo"$idmed"; ?>
                            <input type="hidden" name='Idmed' value='<?php echo"$idmed"; ?>'></td>
                    </tr>
                    <tr>
                        <td>Stock_disponible:</td>
                        <td><?php echo"$qd"; ?>
                            <input type="hidden" name='qd' value='<?php echo"$qd"; ?>'></td>
                    </tr>
                    <tr>
                         <td>PrixU:</td>
                         <td><input type="text" name="pu" value=0 required></td>
                    </tr>
                    <tr>
                        <td>Observation:</td>
                        <td><input type="text" name="obs"></td>
                    </tr>
                         <tr>
                            <td></td>
                            <td><input type="SUBMIT" VALUE="ENREGISTRER"></td> 
                         </tr>                                                
                </table>                         
                                  
              </FORM>
        </BODY>
    </HTML>
