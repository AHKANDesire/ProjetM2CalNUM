<?php
if(!(isset($_POST['dci'])))
header('location:Page_Accueil.html');
?>
<?php
include"connect.php";
$dci=$_POST['dci'];
$forme=$_POST['forme'];
$dosage=$_POST['dosage'];
$cate=$_POST['cate'];
$sma=$_POST['sma'];
$smi=$_POST['smi'];
$obs=$_POST['obs'];
$req="SELECT * FROM listemedicament";
$result=mysqli_query($con,$req)or die('ERROR');
            WHILE($col=mysqli_fetch_array($result))
            {
                if($col['Denomination']==$dci and $col['Forme'] ==$forme and $col['Dosage']==$dosage)
                {
                 echo"<font color='green'>IL EST DANS LA LISTE DE MEDICAMENT</font>"."<br>";
                 echo"<b>IDENTIFICATION:</b><a href='Declaration_Medicament.php?Id=$col[0]'>SUIVANT</a> ";              
                 mysqli_close($con);
                 exit();                 
                }
            }
$req1="INSERT INTO listemedicament(Denomination,Forme,Dosage,Categorie,Stock_max,Stock_min,Observation)VALUES('$dci','$forme','$dosage','$cate',$sma,$smi,'$obs')";
$result1=mysqli_query($con,$req1)or die('ERROR1');
$req2="SELECT * FROM listemedicament WHERE Denomination='$dci' AND Dosage='$dosage'";
$result2=mysqli_query($con,$req2)or die('ERROR2');
$col2=mysqli_fetch_array($result2);
mysqli_close($con);
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <b><font color='green'>NOMINATION ENREGISTREE</font></b>
        <table border="1">
            <tr>
                <th>Id_Medicament</th><th>DCI</th><th>Forme</th><th>Dosage</th><th>Catégorie</th><th>Stock_max</th><th>Stock_min</th><th>Observation</th>
            </tr>
            <tr>
                <td><?php echo"$col2[0]"; ?></td><td><?php echo"$col2[1]"; ?></td><td><?php echo"$col2[2]"; ?></td><td><?php echo"$col2[3]"; ?></td>
                <td><?php echo"$col2[4]"; ?></td><td><?php echo"$col2[5]"; ?></td><td><?php echo"$col2[6]"; ?></td><td><?php echo"$col2[7]"; ?></td>
            </tr>
            <tr>
                <td><b>IDENTIFICATION:</b>
                <a href='Declaration_Medicament.php?Id=<?php echo"$col2[0]"; ?>'>SUIVANT</a></td>
            </tr>
            
        </table>
    </body>
</html>
