<?php
include"connect.php";
$req="SELECT * FROM registre_sortie";
$result=mysqli_query($con,$req)or die('ERROR');
?>
 <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
     <h2> <font color='purple'>LA REGISTRE SORTIE DE MEDICAMENTS</font></h2>
        <table border="1">
            <tr>
                <th>Id_sortie</th><th>Date_sortie</th><th>Id_medicament</th><th>Quantite_sortie</th><th>Observation</th>
            </tr>
            <?php while($col=mysqli_fetch_array($result)){ ?>
              <tr>
                <td><?php echo"$col[0]"; ?></td><td><?php echo"$col[1]"; ?></td><td><?php echo"$col[2]"; ?></td><td><?php echo"$col[3]"; ?></td>
                <td><?php echo"$col[4]"; ?></td>
                <td><a href='SupprimerRegistreSortie.php?Id=<?php echo"$col[0]"; ?>'>SUPPRIMER</a></td>
                <td><a href='EditerRegistreSortie.php?Id=<?php echo"$col[0]"; ?>'>EDITER</a></td>
              </tr>
            <?php } mysqli_close($con); ?>
            <tr>
                <th>RETOUR A LA PAGE D'ACCUEIL
                 <a href='Page_Accueil.html'>RETOUR</a></th>
            </tr>
        </table>
    </body>
</html>