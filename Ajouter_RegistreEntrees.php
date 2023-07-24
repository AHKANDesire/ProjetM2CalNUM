<?php
if(!(isset($_POST['Idmed'])))
header('location:Page_Accueil.html');
include"connect.php";
$date=$_POST['dat'];
$Idmed=$_POST['Idmed'];
$qe=$_POST['qe'];
$pu=$_POST['pu'];
$four=$_POST['four'];
$obs=$_POST['obs'];
$pt=$qe*$pu;
$req5="INSERT INTO registre_entrees(Date_entrees,Id_medicament,Quantite_entrees,Prix_U,Prix_T,Fournisseur,Observation)
VALUES('$date',$Idmed,$qe,$pu,$pt,'$four','$obs')";
$result5=mysqli_query($con,$req5)or die('ERROR5');
$req6="SELECT * FROM Registre_Entrees WHERE Id_medicament=$Idmed";
$result6=mysqli_query($con,$req6)or die('ERROR6');
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
         <b><font color='green'>REGISTRE ENTREES ENREGISTREE</font></b>
        <table border="1">
          <tr>
                <th>Id_RegistreEntrees</th><th>Date_Entrees</th><th>Id_medicament</th><th>Quantite_Entrees</th><th>Prix_Unitaire</th>
                <th>Prix_Total</th><th>Fournisseur</th><th>Observation</th>
            </tr>
          <?php while($col6=mysqli_fetch_array($result6)){ ?>
            <tr>
                <td><?php echo"$col6[0]"; ?></td><td><?php echo"$col6[1]"; ?></td><td><?php echo"$col6[2]"; ?></td><td><?php echo"$col6[3]"; ?></td>
                <td><?php echo"$col6[4]"; ?></td><td><?php echo"$col6[5]"; ?></td><td><?php echo"$col6[6]"; ?></td><td><?php echo"$col6[7]"; ?></td>
            </tr>
            <?php } mysqli_close($con);?>
            <tr>
                 <td><b>INSERTION DANS LA REGISTRE STOCK:</b>
                <a href='Liste_Stock.php?Id=<?php echo"$Idmed"; ?>'>SUIVANT</a></td>
            </tr>
            
        </table>
    </body>
</html>