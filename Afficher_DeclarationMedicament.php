<?php
include"connect.php";
$req="SELECT * FROM declaration_medicament";
$result=mysqli_query($con,$req)or die('ERROR');
?>
 <html>
    <head>
        <meta charset="utf-8">
    </head>
    <h2> <font color='green'>L'IDENTIFICATION DE MEDICAMENTS</font></h2>
    <body>
        <table border="1">
            <tr>
                <th>Id_identification</th><th>Id_Medicament</th><th>Num_Autorisation</th><th>Num_lot</th><th>Date_fabrication</th>
                <th>Date_peremption</th>
            </tr>
            <?php while($col=mysqli_fetch_array($result)){ ?>
              <tr>
                <td><?php echo"$col[0]"; ?></td><td><?php echo"$col[1]"; ?></td><td><?php echo"$col[2]"; ?></td><td><?php echo"$col[3]"; ?></td>
                <td><?php echo"$col[4]"; ?></td><td><?php echo"$col[5]"; ?></td>
                <td><a href='SupprimerDeclaration.php?Id=<?php echo"$col[0]"; ?>'>SUPPRIMER</a></td>
                <td><a href='EditerDeclaration.php?Id=<?php echo"$col[0]"; ?>'>EDITER</a></td>
              </tr>
            <?php } mysqli_close($con); ?>
            <tr>
                <th>RETOUR A LA PAGE D'ACCUEIL
                 <a href='Page_Accueil.html'>RETOUR</a></th>
            </tr>
        </table>
    </body>
</html>