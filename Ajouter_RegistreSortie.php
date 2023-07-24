<?php
if(!(isset($_POST['Idmed'])))
header('location:Page_Accueil.html');
include"connect.php";
$date=$_POST['dat'];
$idmed=$_POST['Idmed'];
$qs=$_POST['qs'];
$obs=$_POST['obs'];
$req="INSERT INTO registre_sortie(Date_sortie,Id_medicament,Quantite_sortie,Observation)
VALUES('$date',$idmed,$qs,'$obs')";
$result=mysqli_query($con,$req)or die('ERROR');
$req2="SELECT * FROM Registre_sortie WHERE Id_medicament=$idmed";
$result2=mysqli_query($con,$req2)or die('ERROR2');
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
         <b><font color='green'>REGISTRE SORTIE ENREGISTREE</font></b>
        <table border="1">
          <tr>
                <th>Id_RegistreSortie</th><th>Date_sortie</th><th>Id_medicament</th><th>Quantite_sortie</th><th>Observation</th>
            </tr>
          <?php while($col2=mysqli_fetch_array($result2)){ ?>
            <tr>
                <td><?php echo"$col2[0]"; ?></td><td><?php echo"$col2[1]"; ?></td><td><?php echo"$col2[2]"; ?></td><td><?php echo"$col2[3]"; ?></td>
                <td><?php echo"$col2[4]"; ?></td>
            </tr>
            <?php } mysqli_close($con);?>
            <tr>
                 <td><b>INSERTION DANS LA REGISTRE STOCK:</b>
                <a href='Liste_Stock.php?Id=<?php echo"$idmed"; ?>'>SUIVANT</a></td>
            </tr>
            
        </table>
    </body>
</html>