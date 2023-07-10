<?php
include"connect.php";
$idmed=$_POST['Id'];
$auto=$_POST['auto'];
$lot=$_POST['lot'];
$fab=$_POST['fab'];
$per=$_POST['per'];
$req3="INSERT INTO declaration_medicament(Id_Medicament,Num_Autorisation,Num_lot,Date_fabrication,Date_peremption) VALUES($idmed,'$auto','$lot','$fab','$per')";
$result3=mysqli_query($con,$req3)or die('ERROR3');
$req4="SELECT * FROM declaration_medicament WHERE Id_Medicament=$idmed";
$result4=mysqli_query($con,$req4)or die('ERROR4');   
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1">
          <tr>
                <th>Id_Declaration</th><th>Id_Medicament</th><th>Num_Autorisation</th><th>Num_lot</th><th>Date_fabrication</th><th>Date_peremption</th>
            </tr>
            <?php while($col4=mysqli_fetch_array($result4)){ ?>
            <tr>
                <td><?php echo"$col4[0]"; ?></td><td><?php echo"$col4[1]"; ?></td><td><?php echo"$col4[2]"; ?></td><td><?php echo"$col4[3]"; ?></td><td><?php echo"$col4[4]"; ?></td><td><?php echo"$col4[5]"; ?></td>
            </tr>
            <tr>
                <td><a href='Registe_Entrees.php?Id=<?php echo"$col4[0]"; ?>'>SUIVANT</a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php mysqli_close($con); ?>