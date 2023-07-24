 <?php
if(!(isset($_POST['Idmed'])))
header('location:Page_Accueil.html');
include"connect.php";
$date=$_POST['dat'];
$Idmed=$_POST['Idmed'];
$qd=$_POST['qd'];
$pu=$_POST['pu'];
$obs=$_POST['obs'];
$pt=$qd*$pu;
$req9="INSERT INTO registre_stock(Date_stock,Id_medicament,Stock_disponible,Prix_U,Prix_T,Observation)
VALUES('$date',$Idmed,$qd,$pu,$pt,'$obs')";
$result9=mysqli_query($con,$req9)or die('ERROR9');
$req10="SELECT * FROM registre_stock WHERE Id_medicament=$Idmed";
$result10=mysqli_query($con,$req10)or die('ERROR10');
?> 
 <html>
    <head>                                      
        <meta charset="utf-8">
    </head>
    <body>
     <b><font color='green'>REGISTRE STOCK ENREGISTREE</font></b>
        <table border="1">
            <tr>
                <th>Id_Stock</th><th>Date_Stock</th><th>Id_medicament</th><th>Stock_disponible</th><th>Prix_Unitaire</th><th>Prix_Total</th>
                <th>Observation</th>
            </tr>
            <?php while($col10=mysqli_fetch_array($result10)){ ?>
              <tr>
                <td><?php echo"$col10[0]"; ?></td><td><?php echo"$col10[1]"; ?></td><td><?php echo"$col10[2]"; ?></td><td><?php echo"$col10[3]"; ?></td>
                <td><?php echo"$col10[4]"; ?></td><td><?php echo"$col10[5]"; ?></td><td><?php echo"$col10[6]"; ?></td>               
              </tr>
            <?php } mysqli_close($con);?>
            
            <tr>
              <th>RETOUR A LA PAGE D'ACCUEIL:
               <a href='Page_Accueil.html'>RETOUR</a></th>
            </tr>
        </table>
    </body>
</html>