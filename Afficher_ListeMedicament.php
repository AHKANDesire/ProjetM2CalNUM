<?php
include"connect.php";
$req14="SELECT * FROM listemedicament";
$result14=mysqli_query($con,$req14)or die('ERROR14');
?>
 <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
     <h2> <font color='green'>LA LISTE DE MEDICAMENTS</font></h2>
        <table border="1">
            <tr>
                <th>Id_Medicament</th><th>Denomination</th><th>Forme</th><th>Dosage</th><th>Catégorie</th>
                <th>Stock_max</th><th>Stock_min</th><th>Observation</th>
            </tr>
            <?php while($col14=mysqli_fetch_array($result14)){ ?>
              <tr>
                <td><?php echo"$col14[0]"; ?></td><td><?php echo"$col14[1]"; ?></td><td><?php echo"$col14[2]"; ?></td><td><?php echo"$col14[3]"; ?></td>
                <td><?php echo"$col14[4]"; ?></td><td><?php echo"$col14[5]"; ?></td><td><?php echo"$col14[6]"; ?></td><td><?php echo"$col14[7]"; ?></td>
                <td><a href='SupprimerMedicament.php?Id=<?php echo"$col14[0]"; ?>'>SUPPRIMER</a></td>
                <td><a href='EditerMedicament.php?Id=<?php echo"$col14[0]"; ?>'>EDITER</a></td>
              </tr>
            <?php } mysqli_close($con); ?>
            <tr>
                <th>RETOUR A LA PAGE D'ACCUEIL
                 <a href='Page_Accueil.html'>RETOUR</a></th>
            </tr>
        </table>
    </body>
</html>
