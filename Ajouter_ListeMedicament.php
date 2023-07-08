<?php
include"connect.php";
$dci=$_POST['dci'];
$forme=$_POST['forme'];
$dosage=$_POST['dosage'];
$cate=$_POST['cate'];
$req="SELECT Denomination,Forme,Dosage FROM listemedicament";
$result=mysqli_query($con,$req)or die('ERROR');
            WHILE($col=mysqli_fetch_array($result))
            {
                if($col['Denomination']==$dci and $col['Forme'] ==$forme and $col['Dosage']==$dosage)
                {
                 echo"<font color='red'>IL EST DEJA DANS LA LISTE</font>"."<br>";               
                 echo"AFFICHER LA LISTE cliquez: ";
                 echo"<a href='Afficher_ListeMedicament.php'>LISTE </a> ";              
                 mysqli_close($con);
                 exit();                 
                }
            }
$req1="INSERT INTO listemedicament(Denomination,Forme,Dosage,Categorie)VALUES('$dci','$forme','$dosage','$cate')";
$result1=mysqli_query($con,$req1)or die('ERROR1');
$req2="SELECT * FROM listemedicament WHERE Denomination='$dci' AND Dosage='$dosage'";
$result2=mysqli_query($con,$req2)or die('ERROR2');   
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1">
          <tr>
                <th>Id_Medicament</th><th>DCI</th><th>Forme</th><th>Dosage</th>
            </tr>
            <?php while($col2=mysqli_fetch_array($result2)){ ?>
            <tr>
                <td><?php echo"$col2[0]"; ?></td><td><?php echo"$col2[1]"; ?></td><td><?php echo"$col2[2]"; ?></td><td><?php echo"$col2[3]"; ?></td>
            </tr>
            <tr>
                <td><a href='Declaration_Medicament.php?Id=<?php echo"$col2[0]"; ?>'>SUIVANT</a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php mysqli_close($con); ?>