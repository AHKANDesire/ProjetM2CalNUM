<?php
include"connect.php";
$req=" SELECT Id_Declaration,Denomination,Forme,Dosage,Date_peremption FROM declaration_medicament INNER JOIN listemedicament ON declaration_medicament.Id_Medicament=listemedicament.Id_Medicament";
$result=mysqli_query($con,$req)or die('ERROR');
?>
 <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
     <h2> <font color='purple'>LA DATE DE PEREMPTION DE MEDICAMENTS</font></h2>
        <table border="1">
            <tr>
                <th>Id_identification</th><th>DCI</th><th>Forme</th><th>Dosage</th><th>Date de Peremption</th>
            </tr>
            <?php while($col=mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo"$col[0]"; ?></td><td><?php echo"$col[1]"; ?></td><td><?php echo"$col[2]"; ?></td><td><?php echo"$col[3]"; ?></td>
                <td><?php echo"$col[4]"; ?></td>
            </tr>
            <?php } mysqli_close($con); ?>
            <tr>
                <th>RETOUR A LA PAGE D'ACCUEIL
                 <a href='Page_Accueil.html'>RETOUR</a></th>
            </tr>
        </table>
    </body>
</html>: