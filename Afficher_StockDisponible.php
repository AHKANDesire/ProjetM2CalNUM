<?php
include"connect.php";
$req="SELECT Id_stock,Date_stock,Denomination,Forme,Dosage,Stock_disponible,Prix_U,Prix_T,Stock_max,Stock_min FROM registre_stock INNER JOIN listemedicament ON registre_stock.Id_medicament=listemedicament.Id_Medicament";
$result=mysqli_query($con,$req)or die('ERROR');
?>
 <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
     <h2> <font color='green'>LE STOCK DISPONIBLE DE MEDICAMENTS</font></h2>
        <table border="1">
            <tr>
                <th>Id_stock</th><th>Date_stock</th><th>DCI</th><th>Forme</th><th>Dosage</th><th>Stock Disponible</th><th>Prix Unitaire</th><th>Prix Total</th>
                <th>Stock maximal</th><th>Stock minimal</th>
            </tr>
            <?php while($col=mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo"$col[0]"; ?></td><td><?php echo"$col[1]"; ?></td><td><?php echo"$col[2]"; ?></td><td><?php echo"$col[3]"; ?></td>
                <td><?php echo"$col[4]"; ?></td><td><?php echo"$col[5]"; ?></td><td><?php echo"$col[6]"; ?></td><td><?php echo"$col[7]"; ?></td>
                <td><?php echo"$col[8]"; ?></td><td><?php echo"$col[9]"; ?></td>
            </tr>
            <?php } mysqli_close($con); ?>
            <tr>
                <th>RETOUR A LA PAGE D'ACCUEIL
                 <a href='Page_Accueil.html'>RETOUR</a></th>
            </tr>
        </table>
    </body>
</html>